<?php
session_start();
$admins = array("mariam", "noha","maha","medhat");
if ( $_SERVER['REQUEST_METHOD'] == "POST"){
    $user = $_POST['Username'];
    $pass = $_POST['Password'];
    if( empty($_POST['Username']) ==  true || empty($_POST['Password']) ==  true){
        header("location:index1.php");
        exit();        
    }
    else{
        if ( in_array($user,$admins) ){
            $_SESSION["user"] = $user;
            $_SESSION["pass"] = $pass;
            header("location:control.php");
            exit();
        }
        else{
            header("location:user.php");
            exit();            
        }
    }
}
else{
    header("location:index1.php");
    exit();
}