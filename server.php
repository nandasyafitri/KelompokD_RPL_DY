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
			$count=mysqli_query($db,"SELECT username FROM users WHERE email='".$email."'");
			// email check
			if(mysqli_num_rows($count) < 1){
      		$sql = "INSERT INTO users (username, email, password, activation) VALUES ('$username','$email', '$password', '$activation')";
	  		 mysqli_query($db, $sql);
			// then lets send user verification link to their email using the phpmailer function
			$base_url='http://localhost/RPLv0.4/';
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
          $_SESSION['login'] = true;
          header('location: pilihan.php'); //didirect ke laman home
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
        $query = "SELECT * FROM `karyawan` WHERE username='$username' AND password='$password'";
        $result = mysqli_query($db, $query);
        if(mysqli_num_rows($result)>=1){
          $_SESSION['username'] = $username;
          $_SESSION['login'] = true;
		  if($username=="admin"){
			  header('location: daftarmeja.php');
		  } else{
          		header('location: daftarmeja_karyawan.php');
		  	}
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


    if(isset($_POST['pesan_tempat'])){
        if(($_POST['no_meja']>0)&&($_POST['jumlah_kursi']>0)){
            $no_meja = $_POST['no_meja'];
            $jumlah_kursi = $_POST['jumlah_kursi'];
            $username = $_SESSION['username'];
			$query = "SELECT status FROM `meja` WHERE no_meja='$no_meja'";
			$results = mysqli_query($db, $query);
			$resultss = mysqli_fetch_array($results);
			if($resultss['status']=='tersedia'){
				$msg="Reservasi berhasil !";
            	$result = mysqli_query($db, "UPDATE meja SET jumlah_kursi='$jumlah_kursi', username='$username', status='tidak tersedia' where no_meja='$no_meja'");
            	header('location: pesan_menu.php');
			}else{
				$msg="Pilih meja yang kosong !";
			}
        }
        else {
            $msg="Reservasi Meja gagal !";
        }
    }

	if(isset($_POST['batal'])){
		$username=$_SESSION['username'];
		$no_meja="SELECT no_meja FROM meja where username='$username'";
		if ($results=mysqli_query($db,$no_meja)){
                          // Fetch one and one row
                          while ($row=mysqli_fetch_row($results)){
                           	$result = mysqli_query($db, "UPDATE meja SET jumlah_kursi='0', username='', status='tersedia' where no_meja='$row[0]'");
                       		//$result1 = mysqli_query($db,"DELETE FROM pesanan WHERE username='$username'");
						  }
                        // Free result set
                        mysqli_free_result($results);
		}
		$pesankan="SELECT * FROM pesanan";
		if ($results=mysqli_query($db,$pesankan)){
			while ($row=mysqli_fetch_row($results)){
                           	//$result = mysqli_query($db, "UPDATE meja SET jumlah_kursi='0', username='', status='tersedia' where no_meja='$row[0]'");
                       		$result1 = mysqli_query($db,"DELETE FROM pesanan WHERE username='$username'");
						  }
                        // Free result set
                        mysqli_free_result($results);
		}
		header('location: pesan_menu.php');
	}
 ?>
