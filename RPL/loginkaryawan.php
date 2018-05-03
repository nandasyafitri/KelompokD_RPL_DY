<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>

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
          <li><a href="#">Home</a></li>
          <li><a href="register.php">Register</a></li>
          <li class="active" class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="login.php">Login Pengunjung</a></li>
              <li><a href="loginkaryawan.php">Login Karyawan</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>

  <!-- breadcrumbs -->
    <div class="breadcrumbs">
      <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
          <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
          <li class="active">Login Karyawan</li>
        </ol>
      </div>
    </div>
  <!-- //breadcrumbs -->

<!-- register -->
<section id="register" class="home-section text-center">
<div class="container">
    <div class="home-section text-center">
        <div class="register">
            <div class="login-form-grids">
              <h5>Login Sebagai Karyawan</h5>
        <form action="" method="POST">
			<?php include('errors.php'); ?>
            <div class="form-group">
                <p for="username">Username</p>
                <input class="form-control" type="text" name="username" placeholder="Masukkan username" />
            </div>

            <div class="form-group">
                <p for="password">Password</p>
                <input class="form-control" type="password" name="password" placeholder="masukkan password" />
            </div>

            <input type="submit" class="btn btn-success btn-block" name="login" value="Masuk" />
        </form>
        </div>
    </div>
          <p>Bukan Karyawan?</p>
          <a href="login.php"><p>Login Sebagai Pengunjung</p></a>
</div>

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
