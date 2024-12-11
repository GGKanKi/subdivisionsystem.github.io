<?php include("/xamppp/htdocs/se2/backend/backend.php"); ?>

<p?php

$password = "";

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

    <title>ADMIN</title>
</head>

<body>
<div class="account_main_bg">
        <div class="account_option">
            <div class="option_icons">

                <a id="login_info">
                    <i><i class="ri-admin-line icons button"></i></i><br>
                    <p>ADMIN INFO</p>
                </a>
                <a id="users_info"> 
                    <i><i class="ri-group-line icons button"></i></i>
                <p>USERS</p>
                </a>
                <a href="search_house.php" target="blank">
                    <i><i class="ri-home-3-fill icons button"></i></i>
                <p>SEARCH</p>
                </a>
                <a id="add_user">
                    <i><i class="ri-user-add-line icons button"></i></i>
                    <p>ADD USER</p>
                </a>
                <a id="check_report_user">
                    <i><i class="ri-alarm-warning-fill icons button"></i></i>
                    <p>USER REPORTS</p>
                </a>
                <a id="check_report_service">
                    <i><i class="ri-alarm-warning-line icons button"></i></i>
                    <p>SERVICE REPORTS</p>
                </a>
                <a id="notif">
                    <i><i class="ri-notification-4-line icons button"></i></i>
                    <p>NOTIFICATIONS</p>
                </a>
                <a href="/frontend/subdivision.php">
                    <i><i class="ri-logout-box-line icons button", name="logout"></i></i>
                    <p>LOG OUT</p>
                </a>    
            </div>    
        </div>
        <div class="searchbar_bg">
                <div class="searchbar_bg_details">
                    <!-- <input type="text", class="input__box", name="search_bar", placeholder="SEARCH", autocomplete="off">
                    <i><i class="ri-search-line button", name="searchbutton"></i></i> -->
                    <!-- user who log in should be filled with their info -->
                </div>  
            </div>
        </div>

        <!-- flex row -->
        <div class="map">
            <!-- flex column -->
            <div class="houses_apartments">
                <button class="house_aparment_designs", type="button">1111</button>
                <button class="house_aparment_designs", type="button">1112</button>
                <button class="house_aparment_designs", type="button">1113</button>
                <button class="house_aparment_designs", type="button">1114</button>
                <button class="house_aparment_designs", type="button">1115</button>
                <button class="house_aparment_designs", type="button">1116</button>
                <button class="house_aparment_designs", type="button">1117</button>
                <button class="house_aparment_designs", type="button">1128</button>
                <button class="house_aparment_designs", type="button">1119</button>
                <button class="house_aparment_designs", type="button">1110</button>
            </div>
            <div class="houses_apartments">
                <button class="house_aparment_designs", type="button">2111</button>
                <button class="house_aparment_designs", type="button">2112</button>
                <button class="house_aparment_designs", type="button">2113</button>
                <button class="house_aparment_designs", type="button">2114</button>
                <button class="house_aparment_designs", type="button">2115</button>
                <button class="house_aparment_designs", type="button">2116</button>
                <button class="house_aparment_designs", type="button">2117</button>
                <button class="house_aparment_designs", type="button">2118</button>
                <button class="house_aparment_designs", type="button">2119</button>
                <button class="house_aparment_designs", type="button">2110</button>
            </div>
            <div class="houses_apartments">
                <button class="house_aparment_designs", type="button">3111</button>
                <button class="house_aparment_designs", type="button">3112</button>
                <button class="house_aparment_designs", type="button">3113</button>
                <button class="house_aparment_designs", type="button">3114</button>
                <button class="house_aparment_designs", type="button">3115</button>
                <button class="house_aparment_designs", type="button">3116</button>
                <button class="house_aparment_designs", type="button">3117</button>
                <button class="house_aparment_designs", type="button">3118</button>
                <button class="house_aparment_designs", type="button">3119</button>
                <button class="house_aparment_designs", type="button">3110</button>
            </div>
            <div class="houses_apartments">
                <button class="house_aparment_designs", type="button">4111</button>
                <button class="house_aparment_designs", type="button">4112</button>
                <button class="house_aparment_designs", type="button">4113</button>
                <button class="house_aparment_designs", type="button">4114</button>
                <button class="house_aparment_designs", type="button">4115</button>
                <button class="house_aparment_designs", type="button">4116</button>
                <button class="house_aparment_designs", type="button">4117</button>
                <button class="house_aparment_designs", type="button">4118</button>
                <button class="house_aparment_designs", type="button">4119</button>
                <button class="house_aparment_designs", type="button">4110</button>
            </div>
            <div class="houses_apartments">
                <button class="house_aparment_designs", type="button">5111</button>
                <button class="house_aparment_designs", type="button">5112</button>
                <button class="house_aparment_designs", type="button">5113</button>
                <button class="house_aparment_designs", type="button">5114</button>
                <button class="house_aparment_designs", type="button">5115</button>
                <button class="house_aparment_designs", type="button">5116</button>
                <button class="house_aparment_designs", type="button">5117</button>
                <button class="house_aparment_designs", type="button">5118</button>
                <button class="house_aparment_designs", type="button">5119</button>
                <button class="house_aparment_designs", type="button">5110</button>
            </div>
        </div>
    </div>

    <!-- ADD USERS ACCOUNT-->
    <div class="users", id="account_table">
    <input type="button" class="button" name="add_user_button" id="add_user_button" value="Add User">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">INFO ID</th>
                <th scope="col">USER ID</th>
                <th scope="col">USERNAME</th>
                <th scope="col">PASSWORD</th>
            </tr>
            </thead>
            <tbody>
            <?php
                $db_server = "localhost";
                $db_user = "root";
                $db_pass = "";
                $db_name = "housedb";
                $conn = new mysqli($db_server, $db_user, $db_pass, $db_name);

                $accounts = $conn->prepare("SELECT * FROM credentials");
                $accounts->execute();
                $account_result = $accounts->get_result();

                while ($row = $account_result->fetch_assoc()) {
                    echo "<tr>
                        <td>". $row['user_id'] ."</td>
                        <td>". $row['user_name'] ."</td>
                        <td>". $row['pass_word'] ."</td>
                        <td>
                            <form action='admin.php' method='POST'>
                                <input type='hidden' name='user_id' value='" . $row['user_id'] . "'>
                                <input type='submit' name='del_user' class='btn btn-danger btn-sm' value='DELETE'>
                            </form>
                        </td>
                    </tr>"; 
                }
                ?>
            </tbody>
        </table>
    </div>

    
    <form method="POST", action="/frontend/admin.php">
        <div class="add_user", id="add_user_page">
            <label>USER ID</label>
            <input type="text" class="input__box" name="user_id" autocomplete="off" placeholder="User ID. (Base on the User Personal Info)" required>
            <label>USERNAME</label>
            <input type="text" class="input__box" name="user_register" autocomplete="off" placeholder="Put username for user/service." required>
            <label>PASSWORD</label>
            <input type="password" class="input__box" name="password_register" autocomplete="off" placeholder="Put password for user" required>
            <input type="submit" class="button" name="embed_user" value="ADD">
            <input type="button" class="button" id="close_user_page" value="CLOSE">
        </div>

    <!-- CHECK REPORTS USER -->
    <div class="reports_user", id="reports_user">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Concern ID</th>
                <th scope="col">User Concern Title</th>
                <th scope="col">User Concern File</th> 
            </tr>
            </thead>
            <tbody>
                <?php
                
                $db_server = "localhost";
                $db_user = "root";
                $db_pass = "";
                $db_name = "housedb";
                $conn = new mysqli($db_server, $db_user, $db_pass, $db_name);
                
                $stmt = $conn->prepare("SELECT * FROM concern");
                $stmt->execute();
                $result_concern = $stmt->get_result();

                while($row = $result_concern->fetch_assoc()){
                    echo "<tr>
                            <td>" . $row['id'] . "</td>
                            <td>" . $row['concern_title'] . "</td>
                            <td>" . $row['concern_message'] . "</td>
                            <td>
                                <form action='admin.php' method='POST'>
                                    <input type='hidden' name='concern_id' value='" . $row['id'] . "'> 
                                    <input type='submit' name='del_concern' class='btn btn-danger btn-sm' value='DELETE'>
                                </form>
                            </td>
                        </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    
    <!-- CHECK REPORTS SERVICE -->
    <div class="reports_service", id="reports_service">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Concern ID</th>
                <th scope="col">Service Concern Title</th>
                <th scope="col">Service Concern File</th> 
            </tr>
            </thead>
            <tbody>
                <?php
                
                $db_server = "localhost";
                $db_user = "root";
                $db_pass = "";
                $db_name = "housedb";
                $conn = new mysqli($db_server, $db_user, $db_pass, $db_name);
                
                $stmt = $conn->prepare("SELECT * FROM report");
                $stmt->execute();
                $result_concern = $stmt->get_result();

                while($row = $result_concern->fetch_assoc()){
                    echo "<tr>
                            <td>" . $row['id'] . "</td>
                            <td>" . $row['report_title'] . "</td>
                            <td>" . $row['report_file'] . "</td>
                            <td>
                                <form action='admin.php' method='POST'>
                                    <input type='hidden' name='report_id' value='". $row['id'] ."'> 
                                    <input type='submit' name='del_report' class='btn btn-danger btn-sm' value='DELETE'>
                                </form>
                            </td>
                        </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    
    
    <!-- CRUD -->
    <div class="crud" id="crud">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">User ID</th>
                <th scope="col">Last Name</th>
                <th scope="col">First Name</th>
                <th scope="col">Middle Name</th>
                <th scope="col">Age</th>
                <th scope="col">Email</th>
                <th scope="col">Block & Lot</th>
                <th scope="col">Part</th>
                <th scope="col">Proof</th>    
            </tr>
            </thead>
            <tbody>
            <?php
                $db_server = "localhost";
                $db_user = "root";
                $db_pass = "";
                $db_name = "housedb";
                $conn = new mysqli($db_server, $db_user, $db_pass, $db_name);

                // Query to get all user information
                $get_info_all_user = $conn->prepare("SELECT * FROM personal_info");
                $get_info_all_user->execute();
                $all_user_result = $get_info_all_user->get_result(); 

                // Loop through each row and display the user information
                while ($row = $all_user_result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['user_id'] . "</td>
                            <td>" . $row['l_name'] . "</td>
                            <td>" . $row['f_name'] . "</td>
                            <td>" . $row['m_name'] . "</td>
                            <td>" . $row['age'] . "</td>
                            <td>" . $row['email'] . "</td>
                            <td>" . $row['blklot'] . "</td>
                            <td>" . $row['part'] . "</td>
                            <td>" . $row['proof']. "</td>
                            <td>
                                <form action='admin.php' method='POST'>
                                    <!-- Hidden field with the user_id for deletion -->
                                    <input type='hidden' name='user_id' value='" . $row['user_id'] . "'> 
                                    <a href='update.php?user_id=" . $row['user_id'] . "' class='btn btn-primary btn-sm'>UPDATE</a>
                                    <input type='submit' name='del_user' class='btn btn-danger btn-sm' value='DELETE'>
                                </form>
                            </td>
                        </tr>"; 
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- ADMIN CAN SEE ALL WITH ONE SEARCH/ USERS CAN ONLY SEE THE MEMBERS AND FIRST NAME? -->
    <div >
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Block And Lot</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Part</th>
                </tr>
                </thead>
                    <tbody>
                        <?php 
                            $db_server = "localhost";
                            $db_user = "root";
                            $db_pass = "";
                            $db_name = "housedb";
                            $conn = new mysqli($db_server, 
                                                $db_user,
                                                $db_pass,
                                                $db_name);

                            $search = null;

                            if($_SERVER['REQUEST_METHOD'] && isset($_POST['searchbutton'])){

                            $search = $_POST['search_bar'];

                            if (!is_numeric($search) || strlen($search) != 4) {

                                    echo "Invalid Input . $search . a 4-digit Combination" ;

                                } else {

                                    $search_house = $conn->prepare("SELECT blklot, firstname, part FROM personal_info WHERE blklot = ?");
                                    $search_house->bind_param('i',$search);
                                    $search_house->execute();
                                    $result = $search_house->get_result();

                                    while ($row = $result->fetch_assoc()){
                                        echo "<tr>
                                        <td>" . $row['blklot'] . "</td>
                                        <td>" . $row['firstname'] . "</td>
                                        <td>" . $row['part'] . "</td>
                                    </tr>";
                                    }
                                }
                            }
                        ?>
                </tbody>
            </table>
        </div>

       <!-- ADD ANNOUNCEMENT THROUGH ADD ANNOUNCEMENT BUTTON -->
        <div class="notifications" id="notifications">
        <button id="add_announce">ADD</button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">TOPIC</th>
                    <th scope="col">DISCUSSION</th>
                </tr>
                </thead>
                    <tbody>
                        <?php 
                            $db_server = "localhost";
                            $db_user = "root";
                            $db_pass = "";
                            $db_name = "housedb";
                            $conn = new mysqli($db_server, 
                                                $db_user,
                                                $db_pass,
                                                $db_name);


                            $notification = $conn->prepare("SELECT * FROM notifications");
                            $notification->execute();
                            $result = $notification->get_result();

                            while ($row = $result->fetch_assoc()){
                                echo "<tr>
                                <td>" . $row['id'] ."</td>
                                <td>" . $row['topic'] . "</td>
                                <td>" . $row['discussion'] . "</td>
                                <td>
                                    <form action='admin.php' method='POST'>
                                    <input type='hidden' name='topic_id' value='" . $row['id'] . "'> 
                                    <input type='submit' name='del_topic' class='btn btn-danger btn-sm' value='DELETE'>
                                    </form>
                                <td>
                            </tr>";
                            }
                            ?>
                </tbody>
            </table>
        </div>

<form action="/frontend/admin.php" method="post">
    <div class="add_notif" id="add_notif">
        <label>TOPIC</label>
        <input type="text" class="input__box" name="topic" autocomplete="off" placeholder="Name of Topic" required> <br>
        
        <label>DISCUSSION</label> <br>
        <textarea class="notif_input" name="discussion" autocomplete="off" placeholder="Discussion" required></textarea> <br>

        <button type="submit" name="announcement_added">ADD</button>
    </div>
</form>

        <!-- USING $_SESSION VAR TO LOG USER LOGIN INFORMATION -->
        <div class="user_information" id="account_info">
            <p class="concern_font">USER INFORMATION</p>
            <input type='hidden' name='user_id' value="<?php echo $_SESSION['id']; ?>">
            <p class="concern_font">ID: <?php echo $_SESSION['id']; ?></p>
            <p class="concern_font">LAST NAME: <?php echo $_SESSION['l_name']; ?></p>
            <p class="concern_font">FIRST NAME: <?php echo $_SESSION['f_name']; ?></p>
            <p class="concern_font">MIDDLE NAME: <?php echo $_SESSION['m_name']; ?></p>
            <p class="concern_font">USERNAME: <?php echo $_SESSION['username']; ?></p>
            <a class="button concern_font" target="_blank" href="/backend/resetpass.php?value=<?php echo $_SESSION['id']; ?>">RESET PASSWORD</a>
        </div>
        <script src="/react/main.js"></script>
</body>
</html>