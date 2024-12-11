<?php include ("/xamppp/htdocs/se2/backend/backend.php"); ?>

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

    <title>ACCOUNT</title>
</head>
<body>

    <div class="account_main_bg">
        <div class="account_option">
            <div class="option_icons">
                <a id="login_info">
                    <i><i class="ri-user-3-fill icons button"></i></i><br>
                </a>
                <a id="notif">
                    <i><i class="ri-notification-4-line icons button"></i></i>
                </a>
                <a href="search_house.php">
                    <i><i class="ri-home-3-fill icons button"></i></i>
                </a>
                <a id="report_button">
                    <i><i class="ri-info-i icons button"></i></i><br>
                </a>
                <a href="/frontend/subdivision.php">
                    <i><i class="ri-logout-box-line icons button", name="logout"></i></i>
                </a>    
            </div>    
        </div>
            <div class="searchbar_bg">
                <div class="searchbar_bg_details">
                    <input type="text", class="input__box", name="search_bar", placeholder="SEARCH">
                    <i><i class="ri-search-line button", name="searchbutton"></i></i>
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

    <form action="service.php" method="POST" enctype="multipart/form-data">
        <div class="concern concern_font" id="report_box">
            <p>ADDRESS YOUR REPORTS BY SENDING A LETTER.</p>
            <input type="text" class="input__box concern_font" name="report" placeholder="Concern Point.">
            <input type="file" name="pdfreport">
            <div class="concern_button">
                <input type="submit" class="button" name="file_report" value="FILE COMPLAINT">
                <!-- Change the button type to "button" -->
                <input type="button" class="button" name="close" id="close_report" value="CLOSE">
            </div>
        </div>
    </form>

    <!-- NOTIF RECIEVE -->
    <div class="notifications" id="notifications">
        <table class="table">
            <thead>
                <tr>
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
                                <td>" . $row['topic'] . "</td>
                                <td>" . $row['discussion'] . "</td>
                            </tr>";
                            }
                            ?>
                </tbody>
            </table>
        </div>

        <!-- USER INFO -->
        <div class="user_information" id="account_info">
            <p>USER ACCOUNT INFORMATION</p>
            <input type='hidden' name='user_id' value="<?php echo $_SESSION['id']; ?>">
            <p>ID: <?php echo $_SESSION['id']; ?></p>
            <p>LAST NAME: <?php echo $_SESSION['l_name']; ?></p>
            <p>FIRST NAME: <?php echo $_SESSION['f_name']; ?></p>
            <p>MIDDLE NAME: <?php echo $_SESSION['m_name']; ?></p>
            <p>USERNAME: <?php echo $_SESSION['username']; ?></p>
            <a class="button" target="_blank" href="/backend/resetpass.php?value=<?php echo $_SESSION['id']; ?>">RESET PASSWORD</a>
        </div>


    <script src="/react/main.js"></script>
</body>
</html>