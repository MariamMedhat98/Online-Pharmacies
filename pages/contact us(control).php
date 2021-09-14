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
        <title>contact us</title>
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
                    <a href="about(control).php">About</a>
                    <a href="contact us(control).php" class="selected">Contact Us</a>
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
            <h1>Contact Us</h1>
            <form action="index.html" method="post">
                <ul>
                    <li>
                        <label>Enter your full name here.</label>
                        <input type="text" value="" class="txtfield1" placeholder="Full Name">
                    </li>
                    <li>
                        <label>Enter your email address here.</label>
                        <input type="text" value="" class="txtfield2" placeholder="Email Address">
                    </li>
                    <li>
                        <label>Enter the Subject message here.</label>
                        <input type="text" value="" class="txtfield3" placeholder="Subject">
                    </li>
                    <li>
                        <label class="mass">Enter your Message here.</label>
                        <textarea placeholder="Message"></textarea>
                    </li>
                    <li>
                        <input type="submit" value="SEND NOW" class="btn cont-btn">
                    </li>
                </ul>
            </form>
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