<?php include ("/xamppp/htdocs/se2/backend/backend.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/all.min.css">
    <link rel="stylesheet" href="/design/pracdesign.css">
    <title>SIGNUP</title>
</head>
    <body>
        

        <div class="signupbg">
            <h2>MEMBERSHIP SIGN UP</h2>
            <div>
                <a href="/frontend/buenavistaconnect.php" class="button signup-return" role="button">
                    &larr;
                </a>
            </div>
        </div>
        
        

        <div class="image__list">
        </div>
        <form action="/frontend/signup.php", method="POST", enctype="multipart/form-data">
                <div class="signup_bg1">
                    <div class="accvalid_info">
                        <label>LAST NAME</label>
                        <input type="text" class="input__box" name="lastname" autocomplete="off" placeholder="Enter Your Last Name" value="<?php echo $l_name?>" required>
                        <label>FIRST NAME</label>
                        <input type="text" class="input__box" name="firstname" required autocomplete="off" placeholder="Enter Your First Name"  value="<?php echo $f_name?>" required>
                        <label>MIDDLE NAME</label>
                        <input type="text" class="input__box" name="midname" autocomplete="off" placeholder="Enter Your Middle Name" value="<?php echo $m_name?>" required>
                        <label>AGE</label>
                        <input type="text" class="input__box" name="bdate" autocomplete="off" placeholder="Enter Your Age" value="<?php echo $age?>" required>
                        <label>EMAIL</label>
                        <input type="text" class="input__box" name="mail" autocomplete="off" placeholder="Enter Your E-mail email@email.com" value="<?php echo $contact?>" required>
                        <label>BLOCK AND LOT</label>
                        <input type="text" class="input__box" name="blklot" autocomplete="off" placeholder="Enter Your Block and Lot (ex. 1234)" value="<?php echo $blklot?>" required>
                        <label>PART IN THE HOUSE</label>
                        <input type="text" class="input__box" name="part" autocomplete="off" placeholder="Member, Owner or Service(Ex. answer: owner)" value="<?php echo $part?>" required>
                        <label>ADDRESS PROOF</label>
                        <input type="file", name="pdffile">
                    </div>
    

                    <div class="validation_button">
                        <input type="submit" class="button" name="validate" value="VALIDATE">
                        <!-- If account valid then add header account.php -->
                        <a href="/frontend/buenavistaconnect.php", class="button", type="button">Back <i class="ri-arrow-left-circle-line"></i></a>
                    </div>

                    </div>
                </div>


                <div class="signup_bg2">
                    <div class="signup_informations">
                <label >Why create an account?</label>
                <label class="signup_info_bg">1. Get access in the community through your screens.</label> <br>
                <label class="signup_info_bg">2. Accessibility to online announcements and notifications</label> <br>
                <label class="signup_info_bg">3. Enhanced community communications</label> <br>
                <label class="signup_info_bg">4. Community events planned with the help of the members.</label> <br>
                <label class="signup_info_bg">5. Guide and help the managing organization on what needs help in the community.</label> <br>
                <label> Note. We will send the account through your email after some verifications.</label>
            </div>


        </div>
           

    </body>
</html>