<?php
include("../index.php");
require_once("Validator.php");
require_once("User.php");
if(isset($_POST['submit'])){
    session_start();
    $email = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['message'];
    $phone = $_POST['phone'];
    if(Validator::validateUser($name,$email,$phone,$message)){
        $user = new User($name,$email,$phone,$message);
        $user->flushUser();
        header("Location: ../Login.php?register=success");
    }
    else{
        header("Location: ../Login.php?register=fail");
    }
}
else{
    header("Location: ../index.php?error=submit");
}
?>