<?php include ('../include/continue.php');?>
<!DOCTYPE Html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Continue Registration</title>
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
        <section class="continue">
            <div class="max_width">
                <div class="continue-page">
                    <div class="indicate-interest-text">
                        <p class="indicate-interest-text-one">Indicate your interests</p>
                        <p class="indicate-interest-text-two">Let’s help curate content specifically for your needs</p>
                    </div>
                    <form action="" method="post">
                        <div class="continue-page-two">
                            <p class="continue-page-two-interest">Select up to five (5) interests</p>
                            <div class="continue-page-two-flex">
                                <div class="continue-page-two-flex-flex">
                                    <p id="interest-1" onclick="myInterest(1)">Pregnancy</p>
                                    <p id="interest-2" onclick="myInterest(2)">Postpartum</p>
                                    <p id="interest-3" onclick="myInterest(3)">Childcare</p>
                                    <p id="interest-4" onclick="myInterest(4)">Wellness Tips</p>
                                </div>
                                <div class="continue-page-two-flex-flex">
                                    <p id="interest-5" onclick="myInterest(5)">Family Planning</p>
                                    <p id="interest-6" onclick="myInterest(6)">Community</p>
                                    <p id="interest-7" onclick="myInterest(7)">Nutrition</p>
                                </div>
                                <div class="continue-page-two-flex-flex">
                                    <p id="interest-8" onclick="myInterest(8)">Fitness</p>
                                    <p id="interest-9" onclick="myInterest(9)">Blogs</p>
                                </div>
                            </div>
                        </div>
                        <div class="create-account-button">
                            <button class="create-account-button-one" type="submit" name="cancel" value="Cancel">Cancel</button>
                            <?php

                            if (isset($_POST['cancel'])) {
                                header('Location: signup.php');
                                exit();
                            }
                            ?>
                            <button class="create-account-button-two" type="submit" name="submit" value="Create account">Create Account</button>
                        </div>
                    </form> 
                </div>
            </div>
        </section>
        <div id="backToTop">
            <i class="fas fa-arrow-up rounded-circle shadow"></i>
        </div>
        <!--script-->
        <script src="../script/script.js">

        </script>
    </body>
</html>