<?php
include('../include/signup.php');
?>
<!DOCTYPE Html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SignUp Page</title>
        <link rel="icon" type="access/png" href="../assess/favicon.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../style/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../style/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    </head>
    <body>
        <section class="signupflex">
            <div class="signupflex-one">
                <div class="signupflex-one-padding">
                    <a href="../index.php">
                        <div class="nav-bar-tmh-signup">
                            <!--<p><a href="index.html">THE MOTHER’S <span>HAVEN</span></a></p>-->
                        </div>
                    </a>
                    <div class="signupflex-one-form">
                        <p class="signupflex-one-form-text">Hey Mum, Welcome.</p>
                        <p class="signupflex-one-form-texttwo">Let’s get you started on our platform</p>
                        <form action="" method="post">
                            <p class="signupflex-one-form-detail">Name <span>*</span></p>
                            <p><input type="text" name="name" placeholder="Fullname" required></p>
                            
                            <p class="signupflex-one-form-detail">E-mail Address <span>*</span></p>
                            <p><input type="email" name="email" placeholder="E-mail" required></p>
                            <p class="signupflex-one-form-detail">Password <span>*</span></p>
                            <p><input type="password" name="password" placeholder="Password" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z].{8,}" title="Must be atleast one number and one uppercase and lowercase, and at least 8 or more characters" maxlength="8" required></p>
                            <p class="signupflex-one-form-button"><button type="submit" name="submit" value="Continue">Continue</button></p>
                            <p class="signupflex-one-form-button-login">Already have an account? <a href="login.php">Login</a></p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="signupflex-two">

            </div>
        </section>
        <div id="backToTop">
            <i class="fas fa-arrow-up rounded-circle shadow"></i>
        </div>
        <script src="../script/script.js"></script>
    </body>
</html>