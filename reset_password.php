<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Register</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="color/default.css" rel="stylesheet">
</head>
<body id="page-top" class="bg-light" data-spy="scroll" data-target=".navbar-custom">

  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
        <a class="navbar-brand" href="index.html">
          <h1>D'CAFFE-IN</h1>
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="index.php">Logout</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>

<section id="register" class="home-section text-center">
<div class="container">
    <div class="home-section text-center">
        <div class="register">
            <div class="login-form-grids">

              <h5>Rubah Password</h5>
        <form action="reset_password.php" method="POST">

            <div class="form-group">
                <p for="username">Username</p>
                <input class="form-control" type="text" name="username" placeholder="Masukkan username" />
            </div>

            <div class="form-group">
                <p for="password">Password saat ini</p>
                <input class="form-control" type="password" name="password" placeholder="Masukkan password saat ini" />
            </div>

            <div class="form-group">
                <p for="password">Password baru</p>
                <input class="form-control" type="password" name="new_password" placeholder="Masukkan password baru" />
            </div>

            <div class="form-group">
                <p for="password">Konfirmasi password baru</p>
                <input class="form-control" type="password" name="confirm_new_password" placeholder="Masukkan konfirmasi password" />
            </div>

            <input type="submit" class="btn btn-success btn-block"  name="reset" value="Ubah Password" />
        </form>
        </div>
    </div>
</div>
<?php
    include('koneksi.php');
    //ambil data dari tabel users dan hasilnya ditampung oleh variabel $result
    $result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id ASC");

    //query berikut akan jalan jika button Ubah Password diklik
    if(isset($_POST['reset'])){
      $errors = 0;
      //memasukkan data yang diinput kedalam masing-masing variabel
      $username = mysqli_real_escape_string($mysqli,$_POST['username']);
      $current_password = mysqli_real_escape_string($mysqli,$_POST['password']);
      $new_password = mysqli_real_escape_string($mysqli,$_POST['new_password']);
      $confirm_new_password = mysqli_real_escape_string($mysqli,$_POST['confirm_new_password']);

      //pastikan form diisi
      if(empty($username)){
        ++$errors;
        echo "Username kosong<br>";
      }
      if(empty($current_password)){
        ++$errors;
        echo "Input password saat ini!!!<br>";
      }
      if(empty($new_password)){
        ++$errors;
        echo "Masukkan password baru !!!<br>";
      }
      if($new_password != $confirm_new_password){
        ++$errors;
        echo "Password tidak cocok !!!<br>";
      }
      echo "Jumlah Error : ".$errors."<br>";
      if($errors==0){
        $new_password = md5($_POST['new_password']);
        $result = mysqli_query($mysqli, "UPDATE users SET password='$new_password' where username='$username'");
        echo "Ubah password berhasil";
      }
    }

 ?>
</section>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12">
        <div class="wow shake" data-wow-delay="0.4s">
          <div class="page-scroll marginbot-30">
            <a href="#register" id="totop" class="btn btn-circle">
            <i class="fa fa-angle-double-up animated"></i>
          </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Core JavaScript Files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.scrollTo.js"></script>
<script src="js/wow.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/custom.js"></script>
<script src="contactform/contactform.js"></script>
</body>
</html>
