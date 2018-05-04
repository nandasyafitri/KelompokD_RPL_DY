<?php
  $username = "";
  $email = "";
  $errors = array();
  $db = mysqli_connect('localhost','root','', 'rpl');

  //jika button register diklik

  if(isset($_POST['register'])){
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    $password_1 = mysqli_real_escape_string($db,$_POST['password_1']);

    //pastikan form diisi
    if(empty($username)){
      array_push($errors, "Username harus diisi");
    }
    if(empty($email)){
      array_push($errors, "Alamat e-mail harus diisi");
    }
    if(empty($password)){
      array_push($errors, "Password harus diisi");
    }
    if($password != $password_1){
      array_push($errors, "Password tidak cocok!!");
    }

    //jika gaada error, data disimpan ke database
    if(count($errors)==0){
      $password = md5($password); //enkripsi password sebelum disimpan ke database
      $sql = "INSERT INTO users (username, email, password) VALUES ('$username','$email', '$password')";
      mysqli_query($db, $sql);
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "Anda telah login";
      header('location: halaman_depan.php'); //didirect ke laman home
    }
  }
    //login
    if(isset($_POST['login'])){
      $username = mysqli_real_escape_string($db,$_POST['username']);
      $password = mysqli_real_escape_string($db,$_POST['password']);

      //pastikan form diisi
      if(empty($username)){
        array_push($errors, "Username harus diisi");
      }
      if(empty($password)){
        array_push($errors, "Password harus diisi");
      }

      if(count($errors)==0){
        $password = md5($password);
        $query = "SELECT * FROM `users` WHERE username='$username' AND password='$password'";
        $result = mysqli_query($db, $query);
        if(mysqli_num_rows($result)==1){
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "Anda telah login";
          header('location: halaman_depan.php'); //didirect ke laman home
        }else{
          array_push($errors, "username/password salah");
          header('location: Login.php');
        }
      }
    }
	
	//login karyawan
    if(isset($_POST['loginkaryawan'])){
      $username = mysqli_real_escape_string($db,$_POST['username']);
      $password = mysqli_real_escape_string($db,$_POST['password']);

      //pastikan form diisi
      if(empty($username)){
        array_push($errors, "Username harus diisi");
      }
      if(empty($password)){
        array_push($errors, "Password harus diisi");
      }
	    
	//menulis feedback
	if(isset($_POST["kirim"])){
		$username = mysqli_real_escape_string($db,$_POST["username"]);
		$feedback = mysqli_real_escape_string($db,$_POST["feedback"]);
		
		$syntax = "insert into feedback (username, feedback) values ('$username','$feedback')";
		 mysqli_query($db, $syntax);
	}    
	    
      if(count($errors)==0){
        $password = md5($password);
        $query = "SELECT * FROM `users` WHERE username='$username' AND password='$password'";
        $result = mysqli_query($db, $query);
        if(mysqli_num_rows($result)==1){
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "Anda telah login";
          header('location: halaman_karyawan.php'); //didirect ke laman home
        }else{
          array_push($errors, "username/password salah");
          header('location: loginkaryawan.php');
        }
      }
    }


    //Logout
    if(isset($_GET['logout'])){
      session_destroy();
      unset($_SESSION['username']);
      header('location: index.php');
    }


 ?>

