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
        <title>Seif</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../../images/logo.jpg">
        <link rel="stylesheet" href="../../boot/css/bootstrap.css">
        <link rel='stylesheet' href="../../css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>   
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel='stylesheet' href="../../css/font-awesome.min.css">
        <link rel="stylesheet" href="../../css/bootstrap.css">
        <link rel="stylesheet" href="../../css/Style.css">
        <link rel="stylesheet" href="../../css/Style2.css">
        <script src="../../js-jq/jquery-3.5.1.js"></script>
        <script src="../../js-jq/script.js"></script>
    </head>

    <body>
        <!----------------- Header ----------------->
        <header>
            <div class="logo">
                Dwa2y
            </div>

            <nav>
                <div>
                  <a href="../../backend/control.php" class="selected">Home</a>
                  <a href="../about(control).php">About</a>
                  <a href="../contact us(control).php">Contact Us</a>
                  <div class="welcome" style=" display: inline-block;"> 
                    <?php
                     echo "welcome " .$_SESSION['user'];
                    ?>
                  </div>
                  <div style="display: inline-block; margin: 0% 1%">
                    <button class="btn1" style="margin: 0%; padding: 0%; width: 140%; outline: none; "><a href="../../backend/logout.php" style="color: #fff;">Log out </a></button>
                  </div>
                </div>
            </nav>
        </header>

        <div class="content sup-content">
          <a href="../pharmacies/seif(control).php"><img src="../../images/sub/seif.jpg" alt="img" class="logo-img"></a>
            <form class="ser-form">
                <input class="form" type="search" placeholder="Search" aria-label="Search">
                <button class="btn  btn-primary btn2" type="submit">Search</button>
            </form>
        </div>

      <!----------------- fixed nav ----------------->
      <div class="content1">
        <div class="supdata1">
          
          <div> <h1> Categories </h1> 
            <ul class="cat-menu"> 
              <li id="toggle1"> <a href="../categories/men/men(control).php">Men Care</a>
                <i class="fa fa-angle-down"></i>
                <ul class="inner inner1"> 
                <li> <a href="#">Shaving</a> </li> 
                <li> <a href="#">Men's Deodorants</a> </li> 
                <li> <a href="#">Electric Shavers</a> </li> 
              </ul> 
            </li> 

            <li id="toggle2"> <a href="../categories/women/women(control).php">Women Care</a> 
              <i class="fa fa-angle-down"></i>
              <ul class="inner inner2"> 
                <li> <a href="#">Body Splash & Mist</a> </li> 
                <li> <a href="#">Shavers</a> </li> 
                <li> <a href="#">Women's Deodorants</a> </li> 
                <li> <a href="#">Panty Liners</a> </li> 
                <li> <a href="#">Intimate Care</a> </li> 
                <li> <a href="#">Smoking Cessation</a> </li> 
                <li> <a href="#">Weight Management</a> </li> 
              </ul> 
            </li> 

            <li id="toggle3"> <a href="../categories/baby/baby(control).php">Baby Care</a> 
              <i class="fa fa-angle-down"></i>
              <ul class="inner inner3"> 
                <li> <a href="#">Baby Diapers</a> </li> 
                <li> <a href="#">Baby Wipes</a> </li> 
                <li> <a href="#">Baby Accessories</a> </li>
                <li> <a href="#">Baby Bath</a> </li> 
                <li> <a href="#">Baby Formulas</a> </li> 
                <li> <a href="#">Infant Nutrition</a> </li> 
                <li> <a href="#">Nursing & Feeding</a> </li> 
                <li> <a href="#">Baby Skin Care</a> </li> 
              </ul> 
            </li> 
            
            <li id="toggle4"> <a href="../categories/hair/hair(control).php">Hair Care</a> 
              <i class="fa fa-angle-down"></i>
              <ul class="inner inner4"> 
                <li> <a href="#">Hair Gel</a> </li> 
                <li> <a href="#">Hair Styling</a> </li> 
                <li> <a href="#">Hair Dyes</a> </li> 
                <li> <a href="#">Hair Treatments</a> </li> 
                <li> <a href="#">Hair Styling Electronics</a> </li> 
                <li> <a href="#">Shampoo</a> </li> 
                <li> <a href="#">Conditioner</a> </li> 
              </ul> 
            </li>
              
            <li id="toggle5"> <a href="../categories/beauty.html">Beauty</a> 
              <i class="fa fa-angle-down"></i>
              <ul class="inner inner5"> 
                <li> <a href="#">Facial Care</a> </li> 
                <li> <a href="#">Makeup</a> </li> 
                <li> <a href="#">Lip Care</a> </li> 
                <li> <a href="#">Skin Care</a> </li> 
                <li> <a href="#">Nail Care</a> </li> 
                <li> <a href="#">Sun Care</a> </li> 
                <li> <a href="#">Perfumes For Him</a> </li> 
                <li> <a href="#">Perfumes For Her</a> </li> 
                <li> <a href="#">Anti-Aging</a> </li> 
                <li> <a href="#">Acne Treatment</a> </li> 
                <li> <a href="#">Wipes</a> </li>             
                <li> <a href="#">Soap</a> </li> 
                <li> <a href="#">Shower</a> </li> 
              </ul> 
            </li>

            <li id="toggle6"> <a href="../categories/treatments.html">Treatments</a> 
              <i class="fa fa-angle-down"></i>
              <ul class="inner inner6"> 
                <li> <a href="#">Diabetes Care</a> </li> 
                <li> <a href="#">First Aid</a> </li> 
                <li> <a href="#">Pain Relief</a> </li> 
                <li> <a href="#">Skin Treatment</a> </li> 
                <li> <a href="#">Usual Symptoms</a> </li> 
                <li> <a href="#">Cough & Cold</a> </li> 
                <li> <a href="#">General Health Supplements</a> </li> 
              </ul> 
            </li>

            <li id="toggle7"> <a href="../categories/devices.html">Devices</a>
              <i class="fa fa-angle-down"></i>
              <ul class="inner inner7"> 
              <li> <a href="#">Orthopaedics</a> </li> 
              <li> <a href="#">Breathe Easy</a> </li> 
              <li> <a href="#">Measurements</a> </li> 
            </ul> 
          </li> 

            <li class="last" id="toggle8"> <a href="../categories/mouth.html">Mouth Care</a>
              <i class="fa fa-angle-down"></i>
              <ul class="inner inner8"> 
                <li> <a href="#">Tooth Paste</a> </li> 
                <li> <a href="#">Tooth Brush</a> </li> 
              </ul> 
            </li> 
            </div>
            </div>

        <!------------------- slider --------------------------->
        <div class="data supdata2">
          <div id="carouselExampleControls" class="carousel slide slider" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../../images/slider/men-care-en.jpg" class="d-block w-100" alt="men">
                </div>
                <div class="carousel-item">
                  <img src="../../images/slider/women-care-en.jpg" class="d-block w-100" alt="women">
                </div>
                <div class="carousel-item">
                  <img src="../../images/slider/baby-needs-en.jpg" class="d-block w-100" alt="baby">
                </div>
                <div class="carousel-item">
                  <img src="../../images/slider/hair-care-en.jpg" class="d-block w-100" alt="hair">
                </div>
                <div class="carousel-item">
                  <img src="../../images/slider/beauty-en.jpg" class="d-block w-100" alt="beauty">
                </div>
              </div>

              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>

              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
          </div>

      <!------------------- Data --------------------------->
        <div class="phar-content">
          <div class="data1 card-data">
            <div class="card">
              <img src="../../images/man/7ela2a.jpg" class="card-img-top" alt="men1" height="170px">
              <div class="card-body">
                <h3 class="card-title">EGP40.00</h3>
                <a href="#" class="btn btn-primary card-btn">ADD TO CARD</a>
              </div>
            </div>
          </div>

          <div class="data1 card-data">
            <div class="card">
              <img src="../../images/baby/cerelac.jpg" class="card-img-top" alt="baby1" height="170px">
              <div class="card-body">
                <h3 class="card-title">EGP21.00</h3>
                <a href="#" class="btn btn-primary card-btn">ADD TO CARD</a>
              </div>
            </div>
          </div>

          <div class="data1 card-data">
            <div class="card">
              <img src="../../images/hair/pantene.jpeg" class="card-img-top" alt="hair2">
              <div class="card-body">
                <h3 class="card-title">EGP45.00</h3>
                <a href="#" class="btn btn-primary card-btn">ADD TO CARD</a>
              </div>
            </div>
          </div>

          <div class="data1 card-data">
            <div class="card">
              <img src="../../images/women/nivea.jpg" class="card-img-top" alt="women1" height="170px">
              <div class="card-body">
                <h3 class="card-title">EGP51.50</h3>
                <a href="#" class="btn btn-primary card-btn">ADD TO CARD</a>
              </div>
            </div>
          </div>

          <div class="data1 card-data">
            <div class="card">
              <img src="../../images/man/AXE1.jpg" class="card-img-top" alt="men2">
              <div class="card-body">
                <h3 class="card-title">EGP50.00</h3>
                <a href="#" class="btn btn-primary card-btn">ADD TO CARD</a>
              </div>
            </div>
          </div>

          <div class="data1 card-data">
            <div class="card">
              <img src="../../images/baby/johnson.jpg" class="card-img-top" alt="baby2" height="165px">
              <div class="card-body">
                <h3 class="card-title">EGP40.00</h3>
                <a href="#" class="btn btn-primary card-btn">ADD TO CARD</a>
              </div>
            </div>
          </div>

          <div class="data1 card-data">
            <div class="card">
              <img src="../../images/beauty/sunblock.jpg" class="card-img-top" alt="beauty2" height="165px">
              <div class="card-body">
                <h3 class="card-title">EGP40.00</h3>
                <a href="#" class="btn btn-primary card-btn">ADD TO CARD</a>
              </div>
            </div>
          </div>

          <div class="data1 card-data">
            <div class="card">
              <img src="../../images/medicine/7omoda.jpg" class="card-img-top" alt="hair2" height="165px">
              <div class="card-body">
                <h3 class="card-title">EGP40.00</h3>
                <a href="#" class="btn btn-primary card-btn">ADD TO CARD</a>
              </div>
            </div>
          </div>

          <div class="data1 card-data">
            <div class="card">
              <img src="../../images/medicine/moov.jpg" class="card-img-top" alt="hair2" height="165px">
              <div class="card-body">
                <h3 class="card-title">EGP40.00</h3>
                <a href="#" class="btn btn-primary card-btn">ADD TO CARD</a>
              </div>
            </div>
          </div>

          <div class="data1 card-data">
            <div class="card">
              <img src="../../images/beauty/Lux.jpg" class="card-img-top" alt="beauty" height="165px">
              <div class="card-body">
                <h3 class="card-title">EGP51.50</h3>
                <a href="#" class="btn btn-primary card-btn">ADD TO CARD</a>
              </div>
            </div>
          </div>

          <div class="data1 card-data">
            <div class="card">
              <img src="../../images/medicine/panadol.jpg" class="card-img-top" alt="medicine1">
              <div class="card-body">
                <h3 class="card-title">EGP25.25</h3>
                <a href="#" class="btn btn-primary card-btn">ADD TO CARD</a>
              </div>
            </div>
          </div>

          <div class="data1 card-data">
            <div class="card">
              <img src="../../images/beauty/signal.jpg" class="card-img-top" alt="beauty2">
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
      <p>Dwa2y is Egypt???s number #1 health care online shop,
        enjoy shopping a comprehensive products database from the comfort of 
        your device. Order all your needs from various products whether baby, 
        beauty or personal Care products we???ve got you covered!</p>

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

      <span class="footnote"> All Rights reserved ?? Copyright ?? 2020 Dwa2y.com</span>
    </footer>
    
    </body>
</html>