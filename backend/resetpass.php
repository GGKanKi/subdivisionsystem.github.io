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


    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['user_id'])){

        $user_id = $_POST['user_id'];
        $old_pass = $_POST['old_password'];
        $new_pass = $_POST['new_password'];
        $confirm_new = $new_pass;

        if (empty($old_pass) || empty($new_pass) || empty($confirm_new)){
            echo 'Fill up the required boxes.';
        } elseif ($new_pass != $confirm_new){
            echo 'New password must be equal to your verification password.';
        } elseif (strlen($new_pass) < 8){
            echo 'Password too short';
        }

        $stmt = $conn->prepare("SELECT pass_word FROM credentials WHERE user_id = ?");
        $stmt->bind_param('i', $user_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows>0){
            $row = $result->fetch_assoc();
            //$hashed_password = $row['pass_word']; 

            if ($old_pass = $row['pass_word']){
                $new_hash = password_hash($new_pass, PASSWORD_BCRYPT);


                $upd_pass = $conn->prepare("UPDATE credentials SET pass_word = ? WHERE user_id = ?");
                $upd_pass->bind_param('si', $new_hash, $user_id);
                

                if ($upd_pass->execute()){
                    echo "updated successfully";
                    session_destroy();
                    header("Location: /frontend/subdivision.php");
                } else {
                    echo "Error updating password: " . $stmt->error;
                }
                
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

    <title>UPDATE PASS</title>
</head>
<body>

    
    <div class="account_main_bg">
        <div class="account_option">
            <div class="option_icons">
            </div>    
        </div>
        <for action="search_house.php" method="POST">
            <div class="searchbar_bg">
                <div class="searchbar_bg_details">
                </div>  
            </div>
    </div>
    <form method="POST" action="resetpass.php">
    <div class="upd_pass" id="update_table">
        <p class="concern_font">USER INFORMATION</p>
        <input type="hidden" name="user_id" value="<?php echo $_SESSION['id']; ?>">
        <p class="concern_font">ID: <?php echo $_SESSION['id']; ?></p>
        <p class="concern_font">USERNAME: <?php echo $_SESSION['username']; ?></p>
        
        <!-- Old Password -->
        <label class="concern_font">OLD PASSWORD</label>
        <input type="password" class="concern_font" name="old_password" placeholder="Enter Old Password" required autocomplete="off">
        
        <!-- New Password -->
        <label class="concern_font">NEW PASSWORD</label>
        <input type="password" class="concern_font" name="new_password" placeholder="Enter New Password" required autocomplete="off">
        
        <!-- Confirm New Password -->
        <label class="concern_font">CONFIRM NEW PASSWORD</label>
        <input type="password" class="concern_font" name="confirm_password" placeholder="Confirm New Password" required autocomplete="off">
        
        <!-- Submit Button -->
        <button class="concern_font btn btn-primary btn-sm" type="submit">UPDATE PASSWORD</button>
    </div>
</form>
</body>
</html>
