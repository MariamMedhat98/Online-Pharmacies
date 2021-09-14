<!DOCTYPE html>
<html>
    <head>
        <title>Dwa2y</title>
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
                  <a href="index1.php" class="selected">Home</a>
                  <a href="../pages/about.html">About</a>
                  <a href="../pages/contact us.html">Contact Us</a>
                  <button class="btn1" id="login" type="submit" style="outline: none;">Login</button>
                </div>
            </nav>

            <div class="login-view">
              <div class="close"><i class="fa fa-window-close"></i></div>
              <div class="login-text">Login With Your Account</div>
              <form action="check.php" method="POST">
                <label for="Username">Username</label>
                <input type="text" class="Username" id="Username" name="Username" placeholder="Username"><br>
                <label for="Password">Password</label>
                <input type="password" class="Password" id="Password" name="Password" placeholder="Password">
                <input type="submit" value="Login" style="outline: none;">
              </form>
              <button id="signin">sign up</button>
            </div>

            <div class="sign-view">
                <div class="close close2"><i class="fa fa-window-close"></i></div>
                <div class="sign-text">Sign With New Account</div>
                <form action="check.php" method="POST">
                  <label for="Username" style="margin-right: 7%">Name</label>
                  <input type="text" class="Username" id="Username2" name="Username2" placeholder="Name"><br>
                  <label for="Username" style="margin-right: 5.5%">Address</label>
                  <input type="text" class="Username" id="address" name="address" placeholder="Address"><br>
                  <label for="Username" style="margin-right: 7%">Email</label>
                  <input type="text" class="Username" id="email" name="email" placeholder="Email"><br>
                  <label for="Password" style="margin-right: 5%">Password</label>
                  <input type="password" class="Password" id="Password2" name="Password2" placeholder="Password"><br>
                  <label for="Password" style="margin-right: 6.5%">Phone</label>
                  <input type="password" class="Password" id="phone" name="phone" placeholder="Phone">
                  <input type="submit" value="SignUp" style="display:block; outline: none;">
                </form>
              </div>
        </header>
        
        <!------------------ Banner -------------------->
        <div class="banner">
          <img src="../images/banner.jpg">
          <div class="banner-text">
              Looking to order pharmacy online? <br>
              Explore the best pharmacies in Egypt only on Dwa2y. 
              Simply choose your favorite pharmacy, 
              go through their menu, and place your order. <br>
              Happy ordering!
          </div>
      </div>

      <!------------------- content --------------------------->
      <div class="content">
        <form>
          <input class="form" type="search" placeholder="Search" aria-label="Search">
          <button class="btn  btn-primary btn2" type="submit">Search</button>
        </form>
      
        <div class="data">
          <div class="data1">
            <a href="../pages/pharmacies/seif.html">
              <div class="logo">
                <img src="../images/sub/seif.jpg" alt="img1">
              </div>
            </a>
          </div>

        <div class="data1">
        <a href="../pages/pharmacies/10911.html">
          <div class="logo">
            <img src="../images/sub/19011.jpg" alt="img2">
          </div>
        </a>
        </div>

        <div class="data1">
          <a href="../pages/pharmacies/roshdy.html">
            <div class="logo">
              <img src="../images/sub/roshdy.jpg" alt="img3">
            </div>
          </a>
        </div>

        <div class="data1">
        <a href="../pages/pharmacies/elhekma.html">
          <div class="logo">
            <img src="../images/sub/elhekma.png" alt="img4">
          </div>
        </a>
        </div>

        <div class="data1">
        <a href="../pages/pharmacies/care.html">
          <div class="logo">
            <img src="../images/sub/care.png" alt="img5">
          </div>
        </a>
      </div>

      <div class="data1">
      <a href="../pages/pharmacies/elezaby.html">
        <div class="logo">
          <img src="../images/sub/elezaby.jpg" alt="img6">
        </div>
        </a>
      </div>

      <div class="data1">
          <a href="../pages/pharmacies/dr(mohamed).html">
            <div class="logo">
              <img src="../images/sub/dr(mohamed).jpg" alt="img7">
            </div>
          </a>
        </div>

      <div class="data1">
        <a href="../pages/pharmacies/eltwfe2.html">
          <div class="logo">
            <img src="../images/sub/eltwfe2.jpg" alt="img8">
          </div>
        </a>
      </div>

        <div class="data1">
          <a href="../pages/pharmacies/magdy.html">
            <div class="logo">
              <img src="../images/sub/magdy.jpg" alt="img9">
            </div>
          </a>
        </div>

      <div class="data1">
        <a href="../pages/pharmacies/elbadawy.html">
          <div class="logo">
            <img src="../images/sub/elbadawy.jpg" alt="img10">
          </div>
        </a>
      </div>

      <div class="data1">
        <a href="../pages/pharmacies/elsalam.html">
          <div class="logo">
            <img src="../images/sub/elsalam.jpg" alt="img11">
          </div>
        </a>
      </div>

    <div class="data1">
      <a href="../pages/pharmacies/passant.html">
        <div class="logo">
          <img src="../images/sub/passant.png" alt="img12">
        </div>
      </a>
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