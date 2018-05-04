<?php
include('config.php');
include('errors.php');
  if(isset($_POST['login'])){
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $password = mysqli_real_escape_string($db,$_POST['password']);

    if(($username=='staff')&&($password=='staff')){
        session_start();
        $_SESSION["username"] = $username;
        header('location: orderhistory.php'); //didirect ke laman order history
      }else{
        header('location: salah.php');
      }
    }
 ?>
