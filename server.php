<?php
  $username = "";
  $email = "";
  $errors = array();
  $db = mysqli_connect('localhost','root','', 'rpl');
  $msg = "";
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
		//now lets check if user email in use
		$query = "SELECT * FROM users where email = '".$email."'";
		$que=mysqli_query($db,$query);
		$count = mysqli_num_rows($que);
		if($count==0) {
      		$password = md5($password); //enkripsi password sebelum disimpan ke database
			$activation=md5($email.time()); // encrypted email+timestamp
			$count=mysqli_query($db,"SELECT id FROM users WHERE email='".$email."'");
			// email check
			if(mysqli_num_rows($count) < 1){
      		$sql = "INSERT INTO users (username, email, password, activation) VALUES ('$username','$email', '$password', '$activation')";
	  		 mysqli_query($db, $sql);
			// then lets send user verification link to their email using the phpmailer function
			$base_url='http://localhost/RPL/';	
	  		$message = 'Hi, <br/> <br/> We need to make sure you are human. Please verify your email and get 
						started using your Website account. <br/> <br/> 
						<a href="'.$base_url.'activation.php?code='.$activation.'">'.$base_url.'activation.php/'.$activation.'</a>';	
			require 'email_verification.php';
			sending($message,$email,$msg);
			$msg="Email confirmation has been sent"; 			
			} 
		} else {
				array_push($errors, "The email is already taken, please try new."); 
			}	
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
        $query = "SELECT * FROM `users` WHERE (username='$username' AND password='$password') AND status='1'";
        $result = mysqli_query($db, $query);
        if(mysqli_num_rows($result)==1){
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "Anda telah login";
          header('location: halaman_depan.php'); //didirect ke laman home
        }else{
          array_push($errors, "username/password tidak terdaftar");
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

      if(count($errors)==0){
        $password = md5($password);
        $query = "SELECT * FROM `users` WHERE (username='$username' AND password='$password') AND status='1'";
        $result = mysqli_query($db, $query);
        if(mysqli_num_rows($result)==1){
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "Anda telah login";
          header('location: halaman_karyawan.php'); //didirect ke laman home
        }else{
          array_push($errors, "username/password tidak terdaftar");
        }
      }
    }
	
	//menulis feedback
	if(isset($_POST["kirim"])){
		$username = mysqli_real_escape_string($db,$_POST["username"]);
		$feedback = mysqli_real_escape_string($db,$_POST["feedback"]);
		
		$syntax = "insert into feedback (username, feedback) values ('$username','$feedback')";
		 mysqli_query($db, $syntax);
	}

    //Logout
    if(isset($_GET['logout'])){
      session_destroy();
      unset($_SESSION['username']);
      header('location: index.php');
    }


 ?>
