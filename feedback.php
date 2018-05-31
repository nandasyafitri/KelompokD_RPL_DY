<?php include('koneksi.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Feedback</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="color/default.css" rel="stylesheet">
	<style>
		body{
			background: url('asset/images/img2.jpg');
			background-size: cover;
			background-attachment: fixed;
			background-repeat:no-repeat;
		}
		
	.home-section {
		padding-top: 25px;
		padding-bottom: 25px;
		display: block;
		position: relative;
		z-index: 120;
}
		</style>
</head>

<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
        <a class="navbar-brand" href="index.php">
          <h1>D'CAFFE-IN</h1>
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav">
					<li class="dropdown">
            <a class="active" href="#" class="dropdown-toggle" data-toggle="dropdown">Reservasi Tempat <b class="caret"></b></a>
            <ul class="dropdown-menu">
							<li><a href="halaman_depan.php#pilih_meja">Lihat Meja</a></li>
              <li><a href="halaman_depan.php#reservasi_tempat">Pesan Tempat</a></li>
            </ul>
          </li>
					<li><a href="halaman_depan.php#pesan_menu">Pesan Menu</a></li>
          <li><a href="order_pengunjung.php">Order</a></li>
					<li class="dropdown">
            <a class="active" href="#" class="dropdown-toggle" data-toggle="dropdown">Feedback<b class="caret"></b></a>
            <ul class="dropdown-menu">
							<li><a href="lihat_feedback.php">Lihat Feedback</a></li>
              <li><a href="feedback.php">Tulis Feedback</a></li>
            </ul>
          </li>
					<li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Akun Saya<b class="caret"></b></a>
            <ul class="dropdown-menu">
							<li><a href="reset_password.php">Reset Password</a></li>
              <li><a href="index.php">Logout</a></li>
            </ul>
          </li>
			</ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>
<!-- header -->
	<div class="logo_products">
		<div class="container">
		<div class="w3ls_logo_products_left1">
			</div>
			<div class="w3ls_logo_products_left"></div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->

<!-- writefeedback -->
<section id="writefeedback" class="home-section text-center">
<div class="container">
    <div class="home-section text-center">
        <div class="register">
            <div class="login-form-grids">

              <h5>Feedback Pengunjung</h5>
         <form action="feedback.php" method="POST">
					 <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="username">Nama atau Username:</label>
                                <input type="text" class="form-control" id="username" placeholder="Masukkan nama atau Username" name="username" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="feedback"> Feedback Anda:</label>
                                <textarea class="form-control" type="textarea" name="feedback" id="feedback" placeholder="Sampaikan Feedback anda disini..." maxlength="6000" rows="7"></textarea>
                            </div>
                        </div>
                               <input type="submit" class="btn btn-success btn-block" name="kirim" value="Kirim" />
                        </div>
                    </form>
        </div>
    </div>
</div>
<?php
  if(isset($_POST['kirim'])){
    $username = mysqli_real_escape_string($mysqli, $_POST['username']);
    $feedback = mysqli_real_escape_string($mysqli, $_POST['feedback']);
    $errors = 0;
    if(empty($feedback)){
      echo "Feedback kosong!";
      ++$errors;
    }
    if($errors==0) {
      $sql= mysqli_query($mysqli, "INSERT INTO feedback(username,feedback) values ('$username','$feedback')");
    }

  }


 ?>
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
