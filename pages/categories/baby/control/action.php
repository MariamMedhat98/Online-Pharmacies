<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
$id = $_POST ['id'];
$name = $_POST ['name'];
$price = $_POST ['price'];
$quantity = $_POST ['quantity'];
$servername = "localhost";
$username = "root";
$dbname = "dwa2y";
$password = "";
        
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $stm2="UPDATE item SET item_name='$name', item_price=$price, quantity=$quantity WHERE item_id=$id";
        $conn->exec($stm2);
        echo"<span style=\"color:black; display:block; margin:-47px 0% 1% -10%; text-align:center; font-size:18px; font-weight:bolder\"> Edited Item Successfully</span>";
        header("location:edit.php"); 
    }
    catch(PDOException $e){
        echo"<span  style=\"color:red; display : block; text-align:center; font-size:18px; font-weight:bolder\"> connection failed ". $e->getMessage(). "</span>";
    }
}
?>