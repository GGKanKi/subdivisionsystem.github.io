<?php

use function PHPSTORM_META\map;

session_start();


    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "housedb";
    $conn = "";


    $conn = mysqli_connect($db_server,
                            $db_user,
                            $db_pass,
                            $db_name);

    if (!$conn) {error_log("Database connection failed: " . mysqli_connect_error(), 3, "/path/to/error.log");}





$userlogin_error = null;
$userlogin_wrong_credentials = null;
    
    // Login variables
    $userlogin = null;
    $passlogin = null;
    
    /* ===== MAIN LOGIN PHP ====== */
    if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST["loginbutton"])) {
        $userlogin = trim($_POST["userlogin"]);
        $passlogin = trim($_POST["passlogin"]);
        
    
        // Validation of login input
        if (empty($userlogin) || empty($passlogin)) {
            $userlogin_error = "Username and password cannot be empty.";
        } else {
            // Prepare the SQL statement to check if the user exists and get their part
            $part_checker = "SELECT part FROM credentials 
                             INNER JOIN personal_info ON credentials.user_id  = personal_info.user_id
                             WHERE credentials.user_name = ?";
            $stmt = $conn->prepare($part_checker);
            $stmt->bind_param('s', $userlogin); // Check user name
            $stmt->execute();
            $result = $stmt->get_result();
    
            // If user is valid
            if ($result->num_rows == 1) {
                $part_result = $result->fetch_assoc()['part']; 
   
                // Check Username and Password in DB
                $stmt = $conn->prepare("SELECT * FROM personal_info 
                JOIN credentials ON personal_info.user_id = credentials.user_id 
                WHERE user_name = ?");                
                $stmt->bind_param("s", $userlogin);
                $stmt->execute();
                $login_result = $stmt->get_result();
    
                if ($login_result->num_rows == 1) {
                    $row = $login_result->fetch_assoc();

                    //if (password_verify($hashed_password ,$row['pass_word'])) {
                    if ($passlogin = $row['pass_word']){
                        //echo $userlogin_success = "Login Successfully";
    
                        // SESSION VAR for log in
                        $_SESSION['id'] = $row['user_id'];
                        $_SESSION['username'] = $row['user_name'];
                        $_SESSION['l_name'] = $row['l_name'];
                        $_SESSION['f_name'] = $row['f_name'];
                        $_SESSION['m_name'] = $row['m_name'];
                        $_SESSION['pass_word'] = $row['password'];
                        $_SESSION['usertype'] = $part_result;
                        
    
                        // Redirect User based on their part
                        if ($part_result == 'owner' || $part_result == 'member') {
                            header("Location: account.php");
                            exit();
                        } elseif ($part_result == 'service') {
                            header("Location: service.php");
                            exit();
                        } elseif ($part_result == 'admin') {
                            header("Location: admin.php"); // Redirect to admin page
                            exit();
                        } 
                    } else {
                        // Incorrect username or password
                        $userlogin_wrong_credentials = "Wrong username or password.";
                    }
                } else {
                    // No user found
                    $userlogin_wrong_credentials = "Wrong username or password.";
                }
                $stmt->close();
            } else {
                // User not found
                $userlogin_wrong_credentials = "Wrong username or password.";
            }
        }
    }

/* ===== USER CONCERN ====== */
$complaint_file = null; // being sent as the main file
$complaint_name = null; // file name
$letter_name = null;

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['file_complaint'])) {
    $letter_name = trim($_POST['concern']); // Trim the input to remove extra spaces

    // 1. Check if the complaint title is empty
    if (empty($letter_name)) {
        // Stop processing if the complaint title is empty
        exit;
    }

    // 2. Check if a file is uploaded and if there are no errors in the upload
    if (isset($_FILES["pdfconcern"]) && $_FILES["pdfconcern"]["error"] === UPLOAD_ERR_OK) {
        $file_dir = "/xamppp/htdocs/se2/concerns/";
        $complaint_file = basename($_FILES['pdfconcern']['name']);
        $file_target = $file_dir . $complaint_file;
        $complaint_name = strtolower(pathinfo($file_target, PATHINFO_EXTENSION));

        // 3. Check if the file is a PDF
        if ($complaint_name != "pdf") {
            // Stop processing if the file is not a PDF
            exit;
        }

        // 4. Check if the file is empty
        if (empty($complaint_file)) {
            // Stop processing if the file is empty
            exit;
        }

        // 5. Move the uploaded file to the target directory
        if (!move_uploaded_file($_FILES["pdfconcern"]['tmp_name'], $file_target)) {
            // Stop processing if file movement fails
            exit;
        }

        // If all validations passed, proceed to insert data into the database
        $insert_concern = $conn->prepare("INSERT INTO `concern` (`concern_title`, `concern_message`) VALUES (?, ?)");
        $insert_concern->bind_param("ss", $letter_name, $complaint_file);

        if ($insert_concern->execute()) {
            // Successfully inserted
        } else {
            // Stop processing if insertion fails
            exit;
        }

        // Close the prepared statement
        $insert_concern->close();

    } else {
        // Stop processing if no file was uploaded or there was an error
        exit;
    }
}

    /* ===== Guard Account Reporting System ====== */


    $report_file = null;
$report_name = null;
$report_letter = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['file_report'])) {
    $report_letter = trim($_POST['report']);

    if (empty($report_letter)) {
        exit;
    }

    if (isset($_FILES["pdfreport"]) && $_FILES["pdfreport"]["error"] === UPLOAD_ERR_OK) {
        $report_directory = "/xamppp/htdocs/se2/reports/";
        $report_file = basename($_FILES['pdfreport']['name']);
        $report_target = $report_directory . $report_file;
        $report_name = strtolower(pathinfo($report_target, PATHINFO_EXTENSION));

        if ($report_name != "pdf") {
            exit;
        }

        if (empty($report_file)) {
            exit;
        }

        if (!move_uploaded_file($_FILES['pdfreport']['tmp_name'], $report_target)) {
            exit;
        }

        $report_insert = $conn->prepare("INSERT INTO `report` (`report_title`,`report_file`) VALUES (?,?)");
        $report_insert->bind_param("ss", $report_letter, $report_file);

        if ($report_insert->execute()) {
        } else {
            exit;
        }

        $report_insert->close();
    } else {
        exit;
    }
}


    /* ===== ACCOUNT PHP ====== */

    $l_name = null;
    $m_name = null;
    $f_name = null;
    $age = null;
    $contact = null;
    $blklot = null;
    $part = null;
    $filename = null; 
    $filetype = null;


if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST["validate"])) {

    $l_name = $_POST["lastname"];
    $m_name = $_POST["midname"];
    $f_name = $_POST["firstname"];
    $age = (int)$_POST["bdate"];
    $email = $_POST["mail"];
    $blklot = (int)$_POST["blklot"];
    $part = $_POST["part"];
    
    

    /* ===== PDF FILE UPLOAD ====== */
    //check if the file is pdf and has no zero errors when sending the file
    if (isset($_FILES["pdffile"]) && $_FILES["pdffile"]["error"] === UPLOAD_ERR_OK) {
        //where the uploaded pdf file will be sent
        $targetdir = "/xamppp/htdocs/se2/validation/";
        /*removes any directory sent by the user and immediately take the name of the exact file sent by the user
        Removes C/pics/pdf.pdf to pdf.pdf*/
        $filename = basename($_FILES["pdffile"]["name"]);
        //creates the file with the name attached to the directory directory/pdf.pdf
        $targetfile = $targetdir . $filename;
        //checks the type of file sent
        $filetype = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));

        // Check if the file type is PDF
        if ($filetype != "pdf") {
            echo "Only PDF files are allowed";
            exit();
        }

        // Move the uploaded file to the target directory 
        if (!move_uploaded_file($_FILES["pdffile"]["tmp_name"], $targetfile)) {
            echo "Failed to move uploaded file.";
            exit();
        }
    } else {
        echo "File upload error or no file uploaded.";
        exit();
    }

    // Check if the user already exists
    $check_resident = $conn->prepare("SELECT email FROM personal_info WHERE email = ?");
    $check_resident->bind_param("s", $email);
    $check_resident->execute();
    $resident_result = $check_resident->get_result();
    $data_resident = $resident_result->fetch_assoc();

    if ($data_resident) {
        echo "This email already exists";
        exit();
    } elseif (!is_string($l_name) || !is_string($f_name) || !is_string($m_name)) {
        echo "Put your name in a readable manner.";
        exit();
    } elseif (!is_numeric($age) || $age > 99 || $age < 0) {
        echo "Invalid age input. Age must be a number.";
        exit();
    } elseif (!is_numeric($blklot) || $blklot > 9999 || $blklot < 1) {
        echo "Invalid blklot input";
        exit();
    } elseif ($part != 'member' && $part != 'owner' && $part != 'service') {
        echo "Only Owner, Member or Service are the options.";
        exit();
    } 

    // Insert the new resident's information into the database
    $stmt_resident = $conn->prepare("INSERT INTO `personal_info`(`l_name`, `f_name`, `m_name`, `age`, `email`, `blklot`, `part`, `proof`) 
                                    VALUES (?,?,?,?,?,?,?,?)");
    $stmt_resident->bind_param("ssssssss", $l_name, $f_name, $m_name, $age, $email, $blklot, $part, $filename);
    


    if ($stmt_resident->execute()) {
        echo "Signup Successful";
        header('Location: buenavistaconnect.php');
        exit();
    } else {
        echo "Failed registration: " . mysqli_error($conn);
        exit();
    }


    if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST["logout"])){
        session_unset();
        session_destroy();
        header('Location: buenavistaconnect.php');
        exit;
    }
}


 /* USER SIGNUP FROM*/

 $user_id = null;
 $user_name = null;
 $pass_word = null;
 $hashed = null;


if ($_SERVER['REQUEST_METHOD'] && isset($_POST['embed_user'])){


    $user_id = $_POST['user_id'];
    $user_name = $_POST['user_register'];
    $pass_word = $_POST['password_register'];
    $hashed = password_hash($pass_word, PASSWORD_BCRYPT);


    $embed_user = $conn->prepare("INSERT INTO `credentials` (`user_id`,`user_name`,`pass_word`) VALUES (?,?,?)");
    $embed_user->bind_param("iss", $user_id, $user_name, $hashed);

    if ($embed_user->execute()){
        echo "Successfully Added";
    } else {

        echo "Try Again" . mysqli_error($conn);
    }

    $embed_user->close();

}


/* ====== DELETE USERS BUTTON ====== */

if (isset($_POST['del_user'])) {
    // Get the user_id from the POST request
    $user_id = $_POST['user_id'] ?? null;  // Corrected to use 'user_id' here

    if ($user_id) {
        $delete_user = $conn->prepare("DELETE FROM personal_info WHERE user_id = ?");
        $delete_user->bind_param('i', $user_id);  
        $delete_user->execute();
        
        // Check if deletion was successful
        if ($delete_user->affected_rows > 0) {
            echo "Successfully deleted user with ID: $user_id";
        } else {
            echo "Failed to delete user.";
        }
    } else {
        echo "User ID not provided.";
    }
}



/* NOTIFICATION ADD */

$add_topic = null;
$add_discussion = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['announcement_added'])) {
    $add_topic = $_POST['topic'];
    $add_discussion = $_POST['discussion'];

    $add_notif = $conn->prepare("INSERT INTO notifications (topic, discussion) VALUES (?, ?)");
    $add_notif->bind_param('ss', $add_topic, $add_discussion);
    
    if ($add_notif->execute()) {
        echo "Successfully Added";
    } else {
        echo "Try Again: " . $conn->error; 
    }

    $add_notif->close();
}

/* DELETE NOTIF*/

if (isset($_POST['del_topic'])){

    $topic_id = $_POST['topic_id'] ?? null;


    if ($topic_id) {

        $del_notif = $conn->prepare("DELETE FROM notifications WHERE id = ?");
        $del_notif->bind_param('i', $topic_id);
        $del_notif->execute();

        if($del_notif->affected_rows>0){
            echo "Successfully Deleted . $topic_id";
    
        } else {

            echo "Failed. Try Again.";
        }
    } else {

        echo "Topic is not in the table";
    }
}

if(isset($_POST['del_concern'])){

    $concern_id = $_POST['concern_id'] ?? null;


    if ($concern_id){
        $del_concern = $conn->prepare("DELETE FROM concern where id = ?");
        $del_concern->bind_param('i',$concern_id);
        $del_concern->execute();

        if($del_concern->affected_rows>0){
            echo "Successfully Deleted Concern Number: .$concern_id. ";
        } else {
            echo "Try Again.";
        }
    } else {
        echo "Concern is not in the table.";
    }
}


if (isset($_POST['del_report'])){

    $report_id = $_POST['report_id'] ?? null;
    
    if($report_id){

        $del_report = $conn->prepare("DELETE FROM report WHERE id = ?");
        $del_report->bind_param('i',$report_id);
        $del_report->execute();

        if($del_report->affected_rows>0){
            echo"Successfully Deleted Report Number: $report_id";
        } else {
            echo"Try Again.";
        }
    } else {

        echo"Report is not in the Table";
    }
}


?>