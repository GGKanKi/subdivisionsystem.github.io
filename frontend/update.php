<?php include("/xamppp/htdocs/se2/backend/backend.php"); ?>

<?php

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


    $user_id = null;
    $l_name = null;
    $m_name = null;
    $f_name = null;
    $age = null;
    $contact = null;
    $blklot = null;
    $part = null;

    // USING GET TO GET INFO IN USER TABLE
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['user_id'])) {

        // Get user_id from the URL
        $user_id = $_GET['user_id'];
    
        // Prepare the query to get user details based on the user_id
        $stmt = $conn->prepare("SELECT * FROM personal_info WHERE user_id = ?");
        $stmt->bind_param('i', $user_id);  // Bind the user_id to the query
        $stmt->execute();
        
        // Get the result
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            // Fetch the row and assign values to variables
            $row = $result->fetch_assoc();
            $l_name = $row["l_name"];
            $m_name = $row["m_name"];
            $f_name = $row["f_name"];
            $age = $row["age"];
            $contact = $row["email"];  
            $blklot = $row["blklot"];  
            $part = $row["part"];
        } else {
            // If no result, show an error
            echo "No user found with the provided ID.";
        }
    
    } elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['user_id'])) {
        // If form is submitted with updated values (POST request)
    
        // Get values from the form submission (assuming they are POSTed)
        $user_id = $_POST['user_id'];
        $l_name = $_POST['l_name'];
        $m_name = $_POST['m_name'];
        $f_name = $_POST['f_name'];
        $age = $_POST['age'];
        $contact = $_POST['contact'];
        $blklot = $_POST['blklot'];
        $part = $_POST['part'];
    
        // Check if any required fields are empty
        if (empty($l_name) || empty($m_name) || empty($f_name) || empty($age) || empty($contact) || empty($blklot) || empty($part)) {
            echo "All fields are required!";
        } else {
            // Prepare the SQL query to update user details
            $stmt = $conn->prepare("UPDATE personal_info SET l_name = ?, m_name = ?, f_name = ?, age = ?, email = ?, blklot = ?, part = ? WHERE user_id = ?");
            $stmt->bind_param('sssssssi', $l_name, $m_name, $f_name, $age, $contact, $blklot, $part, $user_id);
            
            // Execute the update
            if ($stmt->execute()) {
                echo "User information updated successfully!";
            } else {
                echo "Error updating user: " . $stmt->error;
            }
        }
    }
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <link rel="stylesheet" href="/design/pracdesign.css">
    
    <!-- Bootstrap CSS from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>UPDATE USER</title>
</head>
<body>

    
<div class="account_main_bg">
        <div class="account_option">
            <div class="option_icons">
            </div>    
        </div>
        <form action="search_house.php" method="POST">
            <div class="searchbar_bg">
                <div class="searchbar_bg_details">
                </div>  
            </div>
        </form>
    </div>
    <form method="POST" action="update.php">
        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">

        <div class="upd_user" id="update_table">
            <label class="concern_font">Last Name</label>
            <input type="text" class="input__box" name="l_name" placeholder="Last Name" value="<?php echo $l_name; ?>" autocomplete="off">
            
            <label class="concern_font">Middle Name</label>
            <input type="text" class="input__box" name="m_name" placeholder="Middle Name" value="<?php echo $m_name; ?>" autocomplete="off">
            
            <label class="concern_font">First Name</label>
            <input type="text" class="input__box" name="f_name" placeholder="First Name" value="<?php echo $f_name; ?>" autocomplete="off">
            
            <label class="concern_font">Age</label>
            <input type="text" class="input__box" name="age" placeholder="Age" value="<?php echo $age; ?>" autocomplete="off">
            
            <label class="concern_font">Email</label>
            <input type="text" class="input__box" name="contact" placeholder="Email" value="<?php echo $contact; ?>" autocomplete="off">
            
            <label class="concern_font">Block & Lot</label>
            <input type="text" class="input__box" name="blklot" placeholder="Block & Lot" value="<?php echo $blklot; ?>" autocomplete="off">
            
            <label class="concern_font">Part</label>
            <input type="text" class="input__box" name="part" placeholder="Part" value="<?php echo $part; ?>" autocomplete="off">
            
            <a class="btn btn-danger btn-sm" href="admin.php">CLOSE</a>
            <button class="btn btn-primary btn-sm" type="submit">UPDATE</button>
        </div>
    </form>
</body>
</html>
