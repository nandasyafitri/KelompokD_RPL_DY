<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Feedback Pengunjung</title>

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
.containerr {
  border: 3px solid #ccc;
  background: linear-gradient(#D3CCE3,#E9E4F0);
  border-radius: 5px;
  padding: 16px;
  padding-right: 80px;
  margin-left: 200px;
  margin-right: 200px;
  margin-bottom: 20px;
  font-family: "century gothic";
}
h2{
  font-family: Tahoma;
}
.containerr::after {
  content: "";
  clear: both;
  display: table;
}
.containerr span {
  font-size: 20px;
  margin-right: 15px;
}

@media (max-width: 500px) {
  .container {
      text-align: center;
  }
  .containerr img {
      margin: auto;
      float: none;
      display: block;
  }
}
.button {
    background-color: #33ccff;
    border: none;
    color: white;
    padding: 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 24px;
    margin-right: 200px;
    cursor: pointer;
    float: right;
}

.button5 {border-radius: 40%;}
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
  
<section id="viewfeedback" class="home-section text-left">
<div class="container">
<center><h4>Feedback Pengunjung</h4></center>

<?php include('koneksi.php');?>
<?php $users = mysqli_query($mysqli, "SELECT username FROM feedback ORDER BY id ASC");
      $feeds = mysqli_query($mysqli, "SELECT feedback FROM feedback ORDER BY id ASC");
 ?>
  <table width='100%'>
      <?php
      $result = mysqli_query($mysqli, "SELECT * FROM feedback");
      while($feed = mysqli_fetch_array($result)) {
        echo "<td>"."<div class=\"containerr\">"."<b>".$feed['username']."</b>"."<br>"."<br>".$feed['feedback']."</td>"."</tr>";
      }
    ?>
  </table>
<a href="feedback.php" button class="button button5"><b>+</b></button></a>
</div>
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