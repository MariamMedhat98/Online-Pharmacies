<?php
  session_start();
  if ( isset($_SESSION["user"])){
    
  }
  else{
    header("location:index1.php");
    exit();
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>about</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../images/logo.jpg">
        <link rel='stylesheet' href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../boot/css/bootstrap.css">
        <link rel="stylesheet" href="../css/Style.css">
        <link rel="stylesheet" href="../css/Style2.css">
        <script src="../js-jq/jquery-3.5.1.js"></script>
        <script src="../js-jq/script.js"></script>
    </head>

    <body>
        <!----------------- Header ----------------->
        <header>
            <div class="logo">
                Dwa2y
            </div>
            <nav>
                <div>
                    <a href="../backend/control.php">Home</a>
                    <a href="about(control).php" class="selected">About</a>
                    <a href="contact us(control).php">Contact Us</a>
                    <div class="welcome" style=" display: inline-block;"> 
                    <?php
                     echo "welcome " .$_SESSION['user'];
                    ?>
                  </div>
                  <div style="display: inline-block; margin: 0% 1%">
                    <button class="btn1" style="margin: 0%; padding: 0%; width: 140%; outline: none; "><a href="../../../backend/logout.php" style="color: #fff;">Log out </a></button>
                  </div>
                </div>
            </nav>
        </header>
        

      <!------------------- content --------------------------->
        <div class="body">
            <div class="cont-data">
            <h1>About</h1>
            <div class="supdata">
                Due to the rising risks of cross-infection in pharmacies , 
                doctors are now encouraging their patients to stay at home. 
                The key is to be able to provide for your needs of medicines in a way that is convenient for them. 
                Thus, The Dwa2y is a simple yet complete array of products for home health care and medicines from pharmacies.
            </div>
            <div class="supdata">
                Dwa2y takes a holistic approach to preventing and reversing disease.
                We connect you with our pharmacy store network that offer variety of medicine and health products you need.
            </div>
            <div class="supdata">
                Our goal is to provide an easier way to find your medicine and medical supplies that will reverse and prevent disease. 
                Our services will save you the time, the efforts to get your needs that available at the nearest pharmacy to you.
            </div>
            <div class="supdata">
                We understand that not all products will be available at one pharmacy in certain times.  
                Dwa2y pharmacy store partners that carry the medicine or products you need will respond to you 
                and give you the options between picking up your order from the drugstore or deliver to your location. 
            </div>
        </div>
        </div>

    <!----------------- Footer ----------------->
    <footer>
        <div class="logo fo-logo">
          Dwa2y
        </div>
        <p>Dwa2y is Egypt’s number #1 health care online shop,
          enjoy shopping a comprehensive products database from the comfort of 
          your device. Order all your needs from various products whether baby, 
          beauty or personal Care products we’ve got you covered!</p>

        <div class="follow">
            <a href="https://www.facebook.com" class="follow-facebook " target="_blank">
            <i class="fa fa-facebook"></i>
            </a>
            <a href="https://twitter.com" class="follow-twitter " target="_blank">
            <i class="fa fa-twitter"></i>
            </a>
            <a href="https://www.instagram.com" class="follow-instagram " target="_blank">
            <i class="fa fa-instagram"></i>
            </a>
            <a href="https://www.linkedin.com" class="follow-linkedin " target="_blank">
            <i class="fa fa-linkedin"></i>
            </a>
            <a href="https://www.plus.google.com.com" class="follow-linkedin " target="_blank">
            <i class="fa fa-google-plus"></i>
            </a>
        </div>

        <span class="footnote"> All Rights reserved © Copyright © 2020 Dwa2y.com</span>
    </footer>
    
    </body>
</html>