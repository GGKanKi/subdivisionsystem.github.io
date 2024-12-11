<?php include ("/xamppp/htdocs/se2/backend/backend.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <link rel="stylesheet" href="/design/pracdesign.css">
    <title>HOME</title>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUBDIVISION</title>
    <!-- Add your CSS links here -->
</head>
<body>

    <!-- =============== LIST OF OPTIONS =============== -->
    <nav>
        <div class="nav__menu" id="nav__menu">
            <header>SUBDIVISION CONNECT</header>
            <ul class="nav__list">
                <li>
                    <a href="subdivision.php" class="nav__link">HOME</a>
                </li>
                <li>
                    <a href="/frontend/missionvision.php" class="nav__link">MISSION & VISION</a>
                </li>
                <li>
                    <a href="/frontend/contact.php" class="nav__link">CONTACT</a>
                </li>
                <li>
                    <a href="/frontend/researcher.php" class="nav__link">RESEARCHER</a>
                </li>
            </ul>
            <!-- CLOSE -->
            <div class="nav__close" id="nav__close">
                <i class="ri-close-circle-fill"></i>
            </div>
        </div>
        <!-- TOGGLE -->
        <div class="nav__toggle" id="nav__toggle">
            <i class="ri-apps-2-line"></i>
        </div>
    </nav>

    <!-- =============== IMAGE BACKGROUND =============== -->
     <div>
        <ul class="image__list">
            <li>
                <img src="/gallery/pic1.webp" width="420" height="500" alt="Image Description 1"> 
            </li>
            <li>
                <img src="/gallery/pic3.png" width="420" height="500" alt="Image Description 2"> 
            </li>
            <li>
                <img src="/gallery/pic2.png" width="420" height="500" alt="Image Description 3"> 
            </li>
        </ul>

        <h3>SUBDIVISION</h3>
    </div>

    <!-- =============== MAIN =============== -->
    <form method="POST" action="/frontend/subdivision.php">
        <div class="login" id="login">
            <h1 class="login-text">LOGIN</h1>

            <label class="login-input">Username</label>
            <input type="text" class="input__box" name="userlogin" autocomplete="off" value="<?php echo $userlogin ?>" placeholder="Enter your username." required>
            
            <label class="login-input">Password</label>
            <input type="password" class="input__box" name="passlogin" autocomplete="off" placeholder="Enter your password." required>
            
            <div class="login-buttons">
                <input type="submit" class="button" name="loginbutton" value="LOG IN">
                <a href="/frontend/signup.php" class="button" id="signupbutton" role="button">
                    SIGN UP
                </a>
            </div>
        </div>
    </form>

    <script src="/react/js.js"></script>
</body>
</html>

</body>
</html>
