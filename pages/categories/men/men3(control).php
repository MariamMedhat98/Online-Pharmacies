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
        <title>Men</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../../../images/logo.jpg">
        <link rel='stylesheet' href="../../../css/font-awesome.min.css">
        <link rel="stylesheet" href="../../../boot/css/bootstrap.css">
        <link rel="stylesheet" href="../../../css/Style.css">
        <link rel="stylesheet" href="../../../css/Style2.css">
        <link rel="stylesheet" href="../../../css/Style3.css">
        <script src="../../../js-jq/jquery-3.5.1.js"></script>
        <script src="../../../js-jq/script.js"></script>
    </head>

    <body>
        <!----------------- Header ----------------->
        <header>
            <div class="logo">
                Dwa2y
            </div>

            <nav>
                <div>
                  <a href="../../../backend/control.php" class="selected">Home</a>
                  <a href="../../about(control).php">About</a>
                  <a href="../../contact us(control).php">Contact Us</a>
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

        <div class="content sup-content">
             <a href="../../pharmacies/roshdy(control).php"><img src="../../../images/sub/roshdy.jpg" alt="img" class="logo-img control_logo"></a>
            <form class="ser-form">
              <a href="control/add.php" class="btn  btn-primary btn2 control_btn" type="submit" id="btn_add">ADD</a>
              <a href="control/edit.php" class="btn  btn-primary btn2 control_btn" type="submit" id="btn_edit">Edit</a>
              <br>
              <input class="form sup-form " type="search" placeholder="Search" aria-label="Search">
              <button class="btn  btn-primary btn2" type="submit">Search</button>
            </form>
        </div>

      <!----------------- fixed nav ----------------->
      <div class="content1">
        <div class="supdata1">
          
          <div> <h1> Categories </h1> 
            <ul class="cat-menu"> 
              <li id="toggle1"> <a class="cat-submenu " href="../../categories/men/men3(control).php">Men Care</a>
                <i class="fa fa-angle-down"></i>
                <ul class="inner inner1"> 
                <li> <a class="cat-submenu-level1 " href="#">Shaving</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Men's Deodorants</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Electric Shavers</a> </li> 
              </ul> 
            </li> 

            <li id="toggle2"> <a class="cat-submenu " href="../../categories/women/women3(control).php">Women Care</a> 
              <i class="fa fa-angle-down"></i>
              <ul class="inner inner2"> 
                <li> <a class="cat-submenu-level1 " href="#">Body Splash & Mist</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Shavers</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Women's Deodorants</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Panty Liners</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Intimate Care</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Smoking Cessation</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Weight Management</a> </li> 
              </ul> 
            </li> 

            <li id="toggle3"> <a class="cat-submenu " href="../../categories/baby/baby3(control).php">Baby Care</a> 
              <i class="fa fa-angle-down"></i>
              <ul class="inner inner3"> 
                <li> <a class="cat-submenu-level1 " href="#">Baby Diapers</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Baby Wipes</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Baby Accessories</a> </li>
                <li> <a class="cat-submenu-level1 " href="#">Baby Bath</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Baby Formulas</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Infant Nutrition</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Nursing & Feeding</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Baby Skin Care</a> </li> 
              </ul> 
            </li> 
            
            <li id="toggle4"> <a class="cat-submenu " href="../../categories/hair/hair3(control).php">Hair Care</a> 
              <i class="fa fa-angle-down"></i>
              <ul class="inner inner4"> 
                <li> <a class="cat-submenu-level1 " href="#">Hair Gel</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Hair Styling</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Hair Dyes</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Hair Treatments</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Hair Styling Electronics</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Shampoo</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Conditioner</a> </li> 
              </ul> 
            </li>
              
            <li id="toggle5"> <a class="cat-submenu " href="#">beauty</a> 
              <i class="fa fa-angle-down"></i>
              <ul class="inner inner5"> 
                <li> <a class="cat-submenu-level1 " href="#">Facial Care</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Makeup</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Lip Care</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Skin Care</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Nail Care</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Sun Care</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Perfumes For Him</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Perfumes For Her</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Anti-Aging</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Acne Treatment</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Wipes</a> </li>             
                <li> <a class="cat-submenu-level1 " href="#">Soap</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Shower</a> </li> 
              </ul> 
            </li>

            <li id="toggle6"> <a class="cat-submenu " href="#">Treatments</a> 
              <i class="fa fa-angle-down"></i>
              <ul class="inner inner6"> 
                <li> <a class="cat-submenu-level1 " href="#">Diabetes Care</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">First Aid</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Pain Relief</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Skin Treatment</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Usual Symptoms</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Cough & Cold</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">General Health Supplements</a> </li> 
              </ul> 
            </li>

            <li id="toggle7"> <a class="cat-submenu " href="#">Devices</a>
              <i class="fa fa-angle-down"></i>
              <ul class="inner inner7"> 
              <li> <a class="cat-submenu-level1 " href="#">Orthopaedics</a> </li> 
              <li> <a class="cat-submenu-level1 " href="#">Breathe Easy</a> </li> 
              <li> <a class="cat-submenu-level1 " href="#">Measurements</a> </li> 
            </ul> 
          </li> 

            <li class="last" id="toggle8"> <a class="cat-submenu " href="#">Mouth Care</a>
              <i class="fa fa-angle-down"></i>
              <ul class="inner inner8"> 
                <li> <a class="cat-submenu-level1 " href="#">Tooth Paste</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Tooth Brush</a> </li> 
              </ul> 
            </li> 
            </div>
            </div>

        <!------------------- slider --------------------------->
        <div class="data supdata2">
          <div class="slider man-banner man-ban">
              <img src="../../../images/slider/men-care-en.jpg">
          </div>

      <!------------------- Data --------------------------->
        <div class="phar-content">
          <div class="data1 card-data">
            <div class="card">
              <img src="../../../images/man/31.jpg" class="card-img-top" alt="men1" height="160px">
              <div class="card-body">
                <h3 class="card-title">EGP40.00</h3>
                <a href="#" class="btn btn-primary card-btn">ADD TO CARD</a>
              </div>
            </div>
          </div>

          <div class="data1 card-data">
            <div class="card">
              <img src="../../../images/man/32.jpg" class="card-img-top" alt="men2" height="160px">
              <div class="card-body">
                <h3 class="card-title">EGP21.00</h3>
                <a href="#" class="btn btn-primary card-btn">ADD TO CARD</a>
              </div>
            </div>
          </div>

          <div class="data1 card-data">
            <div class="card">
              <img src="../../../images/man/AXE1.jpg" class="card-img-top" alt="men3" height="160px">
              <div class="card-body">
                <h3 class="card-title">EGP45.00</h3>
                <a href="#" class="btn btn-primary card-btn">ADD TO CARD</a>
              </div>
            </div>
          </div>

          <div class="data1 card-data">
            <div class="card">
              <img src="../../../images/man/AXE2.jpg" class="card-img-top" alt="men4" height="160px">
              <div class="card-body">
                <h3 class="card-title">EGP51.50</h3>
                <a href="#" class="btn btn-primary card-btn">ADD TO CARD</a>
              </div>
            </div>
          </div>

          <div class="data1 card-data">
            <div class="card">
              <img src="../../../images/man/12.jpg" class="card-img-top" alt="men5">
              <div class="card-body">
                <h3 class="card-title">EGP50.00</h3>
                <a href="#" class="btn btn-primary card-btn">ADD TO CARD</a>
              </div>
            </div>
          </div>

          <div class="data1 card-data">
            <div class="card">
              <img src="../../../images/man/13.jpg" class="card-img-top" alt="men6">
              <div class="card-body">
                <h3 class="card-title">EGP40.00</h3>
                <a href="#" class="btn btn-primary card-btn">ADD TO CARD</a>
              </div>
            </div>
          </div>

          <div class="data1 card-data">
            <div class="card">
              <img src="../../../images/man/AXE3.jpg" class="card-img-top" alt="men7" height="170px">
              <div class="card-body">
                <h3 class="card-title">EGP51.50</h3>
                <a href="#" class="btn btn-primary card-btn">ADD TO CARD</a>
              </div>
            </div>
          </div>

          <div class="data1 card-data">
            <div class="card">
              <img src="../../../images/man/11.jpg" class="card-img-top" alt="men8" height="170px">
              <div class="card-body">
                <h3 class="card-title">EGP51.50</h3>
                <a href="#" class="btn btn-primary card-btn">ADD TO CARD</a>
              </div>
            </div>
          </div>

          <div class="data1 card-data">
            <div class="card">
              <img src="../../../images/man/33.jpg" class="card-img-top" alt="men9" height="165px">
              <div class="card-body">
                <h3 class="card-title">EGP51.50</h3>
                <a href="#" class="btn btn-primary card-btn">ADD TO CARD</a>
              </div>
            </div>
          </div>

          <div class="data1 card-data">
            <div class="card">
              <img src="../../../images/man/1.jpg" class="card-img-top" alt="men10">
              <div class="card-body">
                <h3 class="card-title">EGP51.50</h3>
                <a href="#" class="btn btn-primary card-btn">ADD TO CARD</a>
              </div>
            </div>
          </div>

          <div class="data1 card-data">
            <div class="card">
              <img src="../../../images/man/2.jpg" class="card-img-top" alt="men11">
              <div class="card-body">
                <h3 class="card-title">EGP25.25</h3>
                <a href="#" class="btn btn-primary card-btn">ADD TO CARD</a>
              </div>
            </div>
          </div>

          <div class="data1 card-data">
            <div class="card">
              <img src="../../../images/man/3.jpg" class="card-img-top" alt="men12">
              <div class="card-body">
                <h3 class="card-title">EGP78.00</h3>
                <a href="#" class="btn btn-primary card-btn">ADD TO CARD</a>
              </div>
            </div>
          </div>
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
        <a href="https://www.plus.google.com" class="follow-linkedin " target="_blank">
          <i class="fa fa-google-plus"></i>
        </a>
      </div>

      <span class="footnote"> All Rights reserved © Copyright © 2020 Dwa2y.com</span>
    </footer>
    
    </body>
</html>