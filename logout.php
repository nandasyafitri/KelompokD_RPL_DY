 <?php
 //Logout
   	  session_start();
      session_destroy();
      unset($_SESSION['username']);
	  unset($_SESSION['login']);
      header('location: index.php');

 ?>
