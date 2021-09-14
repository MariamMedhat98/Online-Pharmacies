<?php
  session_start();
  if ( isset($_SESSION["user"])){
    
  }
  else{
    header("location:../../../../backend/index1.php");
    exit();
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Men</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../../../../images/logo.jpg">
        <link rel='stylesheet' href="../../../../css/font-awesome.min.css">
        <link rel="stylesheet" href="../../../../boot/css/bootstrap.css">
        <link rel="stylesheet" href="../../../../css/Style.css">
        <link rel="stylesheet" href="../../../../css/Style2.css">
        <link rel="stylesheet" href="../../../../css/Style3.css">
        <script src="../../../../js-jq/jquery-3.5.1.js"></script>
        <script src="../../../../js-jq/script.js"></script>
    </head>

    <body>
        <!----------------- Header ----------------->
        <header>
            <div class="logo">
                Dwa2y
            </div>

            <nav>
                <div>
                  <a href="../../../../backend/control.php" class="selected">Home</a>
                  <a href="../../../about.html">About</a>
                  <a href="../../../contact us.html">Contact Us</a>
                  <div class="welcome" style=" display: inline-block;"> 
                    <?php
                     echo "welcome " .$_SESSION['user'];
                    ?>
                  </div>
                  <div style="display: inline-block; margin: 0% 1%">
                    <button class="btn1" style="margin: 0%; padding: 0%; width: 140%; outline: none; "><a href="../../../../backend/logout.php" style="color: #fff;">Log out </a></button>
                  </div>
                </div>
            </nav>
        </header>

        <div class="content sup-content">
             <a href="../../../pharmacies/seif(control).php"><img src="../../../../images/sub/seif.jpg" alt="img" class="logo-img control_logo"></a>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" class="ser-form">
              <a href="add.php" class="btn btn2 control_btn" type="submit">ADD</a>
              <a href="edit.php" class="btn btn2 control_btn" type="submit">Edit</a>
              <br><br>
            </form>
        </div>

        <?php  
            $servername = "localhost";
            $username = "root";
            $dbname = "dwa2y";
            $password = "";  
            try{
              $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $sql = $conn->query("SELECT item_id,item_name from item")->fetchAll(PDO::FETCH_KEY_PAIR);  
            }
            catch(PDOException $e){
              echo "<span style=\"color: red; display : block; text-align:center; font-size:18px; font-weight:bolder\">conennction faile". $e->getMessage().  "</span>";
            }
        ?>

        <div class="form" style="text-align: center;">
          <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
          <label style="font-size: 20px; line-height: 55px; text-shadow: 1px 0px 2px #093c61;">Choose Item Name</label>
            <select name="choice" style="width: 16%; margin-left: 1%; outline: none; height: 34px;">
              <?php
                foreach ($sql as $key => $value){
                  echo "<option value=\"" . $key . "\">" . $value . "</option>\r\n";
                }   
              ?>
            </select>
              <input class="btn control_btn" style="background-color: #066cb1; width: 9%; margin-left: 2%; line-height: 150%;" type="submit" value="choose">                            
            </form>
        </div>

        <?php
              $row = array(
                'item_id' => "",
                'item_name' => "",
                'item_price' => "",
                'quantity' => "",
                'total_price' => "",
                'categ_id' => ""
              );
              if ( $_SERVER['REQUEST_METHOD'] == "POST"){
                if(empty($_POST['choice'])){
                  $_POST['choice']="";
                }
                else{
                  $choose = $_POST['choice'];
                  try{
                    $servername = "localhost";
                    $username = "root";
                    $dbname = "dwa2y";
                    $password = "";
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $stm = $conn->query("SELECT * FROM item WHERE item_id = $choose");
                    $row = $stm->fetch();  
                  }
                  catch(PDOException $e){
                    echo "<span style=\"color: red; display : block; text-align:center; font-size:18px; font-weight:bolder\">conennction faile or data already exist". $e->getMessage().  "</span>";
                  }
              }
            }
          ?>

      <!----------------- fixed nav ----------------->
      <div class="content1">
        <div class="supdata1" style="margin-top: 2%; margin-bottom:4%">
          
          <div> <h1> Categories </h1> 
            <ul class="cat-menu"> 
              <li id="toggle1"> <a class="cat-submenu " href="../../../categories/men/men(control).php">Men Care</a>
                <i class="fa fa-angle-down"></i>
                <ul class="inner inner1"> 
                <li> <a class="cat-submenu-level1 " href="#">Shaving</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Men's Deodorants</a> </li> 
                <li> <a class="cat-submenu-level1 " href="#">Electric Shavers</a> </li> 
              </ul> 
            </li> 

            <li id="toggle2"> <a class="cat-submenu " href="../../../categories/women/women(control).php">Women Care</a> 
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

            <li id="toggle3"> <a class="cat-submenu " href="../../../categories/baby/baby(control).php">Baby Care</a> 
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
            
            <li id="toggle4"> <a class="cat-submenu " href="../../../categories/hair/hair(control).php">Hair Care</a> 
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

    <!------------------- edit form --------------------------->
    <form action="action.php" method="POST" class="edit" style="margin-top: 2%;">
         <div>
          <label>ID</label>
          <input type="text" name="id" id="id" style="margin-left: 15.5%;" value="<?php echo $row['item_id']?>">
        </div>

        <div>
          <label>Name</label>
          <input type="text" name="name" id="name" style="margin-left: 11%;" value="<?php echo $row['item_name']?>">
        </div>

        <div>
            <label>Price</label>
            <input type="text" name="price" id="price" style="margin-left: 12.5%;" value="<?php echo $row['item_price']?>">
        </div>  

        <div>
            <label>Quantity</label>
            <input type="text" name="quantity" id="quantity" style="margin-left: 8%;" value="<?php echo $row['quantity']?>">
        </div>

        <div>
            <label>Total Price</label>
            <input type="text" name="total_price" id="total_price" style="margin-left: 6%;" value="<?php echo $row['total_price']?>">
        </div>

        <div>
          <label>Category</label>
          <select class="categ_select">
            <option value="1" <?php if ( $row['categ_id'] == 1){echo "selected";}?>>Men</option>
            <option value="2" <?php if ( $row['categ_id'] == 2){echo "selected";}?>>Women</option>
            <option value="3" <?php if ( $row['categ_id'] == 3){echo "selected";}?>>Baby</option>
            <option value="4" <?php if ( $row['categ_id'] == 4){echo "selected";}?>>Hair</option>
          </select>
        </div>

        <input type="submit" value="Edit" class="btn btn_edit">
    </form>

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