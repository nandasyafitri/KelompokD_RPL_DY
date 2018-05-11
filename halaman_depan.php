<?php
	session_start();
	if($_SESSION['login']==false){
		header('location: login.php');
	}
?>
<?php include 'koneksi.php'; ?>
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<html>
<head>
<title>HOME</title>
<!-- Bootstrap  -->
<link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css" >

<!-- Theme Style -->
<link rel="stylesheet" type="text/css" href="asset/stylesheets/style.css">

<!-- Responsive -->
<link rel="stylesheet" type="text/css" href="asset/stylesheets/responsive.css">

<!-- Colors -->
<link rel="stylesheet" type="text/css" href="asset/stylesheets/colors/color1.css" id="colors">

<!-- Animation Style -->
<link rel="stylesheet" type="text/css" href="asset/stylesheets/animate.css">

<!-- Favicon and touch icons  -->
<link href="icon/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon" sizes="48x48">
<link href="icon/apple-touch-icon-32-precomposed.png" rel="apple-touch-icon-precomposed">
<link href="icon/favicon.png" rel="shortcut icon">

<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="asset/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="asset/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="asset/css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- js -->
<script src="asset/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="asset/js/move-top.js"></script>
<script type="text/javascript" src="asset/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>
<style>
input[type="text"] {
	border: none;
	border-bottom: 1px solid #DDDDDD;
	font-size: 14px;
	margin-bottom: 15px;
	padding: 0.5em 1em 0.5em 0;
	width: 250px;
}

input[type="date"]{
	border: none;
	border-bottom: 1px solid #DDDDDD;
	font-size: 14px;
	margin-bottom: 15px;
	padding: 0.5em 1em 0.5em 0;
	width: 250px;
}
input[type="number"]{
	border: none;
	border-bottom: 1px solid #DDDDDD;
	font-size: 14px;
	margin-bottom: 15px;
	padding: 0.5em 1em 0.5em 0;
	width: 120px;
}
input[type="time"]{
	border: none;
	border-bottom: 1px solid #DDDDDD;
	font-size: 14px;
	margin-bottom: 15px;
	padding: 0.5em 1em 0.5em 0;
	width: 150px;
}
	.overlay {
  		position: absolute;
  		top: 0;
  		bottom: 0;
  		left: 0;
  		right: 0;
  		height: 100%;
  		width: 84%;
  		opacity: 0;
  		transition: .5s ease;
  		background-color: rgba(0,0,0, 0.3);
		margin-left: 15px;
	}

	.brands-w3l:hover .overlay {
  		opacity: 1;
	}

	.text {
  		color: white;
  		font-size: 15px;
  		position: absolute;
  		top: 50%;
  		left: 50%;
  		transform: translate(-50%, -50%);
  		-ms-transform: translate(-50%, -50%);
  		text-align: center;
	}
	button{
		background-color: #0099cc;
		color: white;
		margin-top: 15px;
		border-radius: 20px;
		border-color: none;
	}
</style>
</head>

<body>
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
							<li><a href="#pilih_meja">Lihat Meja</a></li>
              <li><a href="#reservasi_tempat">Pesan Tempat</a></li>
            </ul>
          </li>
					<li><a href="#pesan_menu">Pesan Menu</a></li>
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

    <!--brands-->
	<div class="brands">
		<div class="container"
		<section id="pilih_meja">
			<div class="brands">
				<h3>Lihat Meja</h3>
				<p><?php $tgl=date('d/m/Y'); echo $tgl; ?></p>
				<body onload="startTime()"><div id="txt"></div>

					<div class="brands-agile">
						<div class="col-md-2 w3layouts-brand">
							<div class="brands-w3l">
								<p><a href="#">no : 1<br><img src="asset\images\ta.png" class="img-responsive"><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=1");
									$hasil = mysqli_fetch_array($result);
									if($hasil['status']=='tersedia'){
									echo "Tersedia";
								}else {
									echo "<br>";
								}
								 ?></a></p>
								  <div class="overlay">
    								<div class="text">
									<?php
										$sql="SELECT pemesan,jam FROM meja where id=1";

										if ($result=mysqli_query($mysqli,$sql)){
  												// Fetch one and one row
  												while ($row=mysqli_fetch_row($result)){
    												printf ("%s (%s)\n",$row[0],$row[1]);
    											}
  											// Free result set
  											mysqli_free_result($result);
										}

									?>
									</div>
  								  </div>
							</div>
						</div>
						<div class="col-md-2 w3layouts-brand">
							<div class="brands-w3l">
								<p><a href="#">no : 2<br><img src="asset\images\ta.png" class="img-responsive"><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=2");
									$hasil = mysqli_fetch_array($result);
									if($hasil['status']=='tersedia'){
									echo "Tersedia";
								}else {
									echo "<br>";
								}
								 ?></a></p>
								 <div class="overlay">
    								<div class="text">
									<?php
										$sql="SELECT pemesan,jam FROM meja where no_meja=2";

										if ($result=mysqli_query($mysqli,$sql)){
  												// Fetch one and one row
  												while ($row=mysqli_fetch_row($result)){
    												printf ("%s (%s)\n",$row[0],$row[1]);
    											}
  											// Free result set
  											mysqli_free_result($result);
										}

									?>
									</div>
  								  </div>
							</div>
						</div>
						<div class="col-md-2 w3layouts-brand">
							<div class="brands-w3l">
								<p><a href="#">no : 3<br><img src="asset\images\ta.png" class="img-responsive"><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=3");
									$hasil = mysqli_fetch_array($result);
									if($hasil['status']=='tersedia'){
									echo "Tersedia";
								}else {
									echo "<br>";
								}
								 ?></a></p>
								 <div class="overlay">
    								<div class="text">
									<?php
										$sql="SELECT pemesan,jam FROM meja where no_meja=3";

										if ($result=mysqli_query($mysqli,$sql)){
  												// Fetch one and one row
  												while ($row=mysqli_fetch_row($result)){
    												printf ("%s (%s)\n",$row[0],$row[1]);
    											}
  											// Free result set
  											mysqli_free_result($result);
										}

									?>
									</div>
  								  </div>
							</div>
						</div>

						<div class="col-md-2 w3layouts-brand">
							<div class="brands-w3l">
								<p><a href="#">no : 4<br><img src="asset\images\ta.png" class="img-responsive"><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=4");
									$hasil = mysqli_fetch_array($result);
									if($hasil['status']=='tersedia'){
									echo "Tersedia";
								}else {
									echo "<br>";
								}
								 ?></a></p>
								 <div class="overlay">
    								<div class="text">
									<?php
										$sql="SELECT pemesan,jam FROM meja where no_meja=4";

										if ($result=mysqli_query($mysqli,$sql)){
  												// Fetch one and one row
  												while ($row=mysqli_fetch_row($result)){
    												printf ("%s (%s)\n",$row[0],$row[1]);
    											}
  											// Free result set
  											mysqli_free_result($result);
										}

									?>
									</div>
  								  </div>
							</div>
						</div>
						<div class="col-md-2 w3layouts-brand">
							<div class="brands-w3l">
								<p><a href="#">no : 5<br><img src="asset\images\ta.png" class="img-responsive"><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=5");
									$hasil = mysqli_fetch_array($result);
									if($hasil['status']=='tersedia'){
									echo "Tersedia";
								}else {
									echo "<br>";
								}
								 ?></a></p>
								 <div class="overlay">
    								<div class="text">
									<?php
										$sql="SELECT pemesan,jam FROM meja where no_meja=5";

										if ($result=mysqli_query($mysqli,$sql)){
  												// Fetch one and one row
  												while ($row=mysqli_fetch_row($result)){
    												printf ("%s (%s)\n",$row[0],$row[1]);
    											}
  											// Free result set
  											mysqli_free_result($result);
										}

									?>
									</div>
  								  </div>
							</div>

						</div>
						<div class="col-md-2 w3layouts-brand">
							<div class="brands-w3l">
								<p><a href="#">no : 6<br><img src="asset\images\ta.png" class="img-responsive"><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=6");
									$hasil = mysqli_fetch_array($result);
									if($hasil['status']=='tersedia'){
									echo "Tersedia";
								}else {
									echo "<br>";
								}
								 ?></a></p>
								 <div class="overlay">
    								<div class="text">
									<?php
										$sql="SELECT pemesan,jam FROM meja where no_meja=6";

										if ($result=mysqli_query($mysqli,$sql)){
  												// Fetch one and one row
  												while ($row=mysqli_fetch_row($result)){
    												printf ("%s (%s)\n",$row[0],$row[1]);
    											}
  											// Free result set
  											mysqli_free_result($result);
										}

									?>
									</div>
  								  </div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="brands-agile-1">
						<div class="col-md-2 w3layouts-brand">
							<div class="brands-w3l">
								<p><a href="#">no : 7<br><img src="asset\images\ta.png" class="img-responsive"><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=7");
									$hasil = mysqli_fetch_array($result);
									if($hasil['status']=='tersedia'){
									echo "Tersedia";
								}else {
									echo "<br>";
								}
								 ?></a></p>
								 <div class="overlay">
    								<div class="text">
									<?php
										$sql="SELECT pemesan,jam FROM meja where no_meja=7";

										if ($result=mysqli_query($mysqli,$sql)){
  												// Fetch one and one row
  												while ($row=mysqli_fetch_row($result)){
    												printf ("%s (%s)\n",$row[0],$row[1]);
    											}
  											// Free result set
  											mysqli_free_result($result);
										}

									?>
									</div>
  								  </div>
							</div>
						</div>
						<div class="col-md-2 w3layouts-brand">
							<div class="brands-w3l">
								<p><a href="#">no: 8<br><img src="asset\images\ta.png" class="img-responsive"><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=8");
									$hasil = mysqli_fetch_array($result);
									if($hasil['status']=='tersedia'){
									echo "Tersedia";
								}else {
									echo "<br>";
								}
								 ?></a></p>
								 <div class="overlay">
    								<div class="text">
									<?php
										$sql="SELECT pemesan,jam FROM meja where no_meja=8";

										if ($result=mysqli_query($mysqli,$sql)){
  												// Fetch one and one row
  												while ($row=mysqli_fetch_row($result)){
    												printf ("%s (%s)\n",$row[0],$row[1]);
    											}
  											// Free result set
  											mysqli_free_result($result);
										}

									?>
									</div>
  								  </div>
							</div>
						</div>
						<div class="col-md-2 w3layouts-brand">
							<div class="brands-w3l">
								<p><a href="#">no : 9<br><img src="asset\images\ta.png" class="img-responsive"><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=9");
									$hasil = mysqli_fetch_array($result);
									if($hasil['status']=='tersedia'){
									echo "Tersedia";
								}else {
									echo "<br>";
								}
								 ?></a></p>
								 <div class="overlay">
    								<div class="text">
									<?php
										$sql="SELECT pemesan,jam FROM meja where no_meja=9";

										if ($result=mysqli_query($mysqli,$sql)){
  												// Fetch one and one row
  												while ($row=mysqli_fetch_row($result)){
    												printf ("%s (%s)\n",$row[0],$row[1]);
    											}
  											// Free result set
  											mysqli_free_result($result);
										}

									?>
									</div>
  								  </div>
							</div>
						</div>

						<div class="col-md-2 w3layouts-brand">
							<div class="brands-w3l">
								<p><a href="#">no : 10<br><img src="asset\images\ta.png" class="img-responsive"><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=10");
									$hasil = mysqli_fetch_array($result);
									if($hasil['status']=='tersedia'){
									echo "Tersedia";
								}else {
									echo "<br>";
								}
								 ?></a></p>
								 <div class="overlay">
    								<div class="text">
									<?php
										$sql="SELECT pemesan,jam FROM meja where no_meja=10";

										if ($result=mysqli_query($mysqli,$sql)){
  												// Fetch one and one row
  												while ($row=mysqli_fetch_row($result)){
    												printf ("%s (%s)\n",$row[0],$row[1]);
    											}
  											// Free result set
  											mysqli_free_result($result);
										}

									?>
									</div>
  								  </div>
							</div>
						</div>
						<div class="col-md-2 w3layouts-brand">
							<div class="brands-w3l">
								<p><a href="#">no :11<br><img src="asset\images\ta.png" class="img-responsive"><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=11");
									$hasil = mysqli_fetch_array($result);
									if($hasil['status']=='tersedia'){
									echo "Tersedia";
								}else {
									echo "<br>";
								}
								 ?></a></p>
								 <div class="overlay">
    								<div class="text">
									<?php
										$sql="SELECT pemesan,jam FROM meja where no_meja=11";

										if ($result=mysqli_query($mysqli,$sql)){
  												// Fetch one and one row
  												while ($row=mysqli_fetch_row($result)){
    												printf ("%s (%s)\n",$row[0],$row[1]);
    											}
  											// Free result set
  											mysqli_free_result($result);
										}

									?>
									</div>
  								  </div>
							</div>
						</div>
						<div class="col-md-2 w3layouts-brand">
							<div class="brands-w3l">
								<p><a href="#">no : 12<br><img src="asset\images\ta.png" class="img-responsive"><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=12");
									$hasil = mysqli_fetch_array($result);
									if($hasil['status']=='tersedia'){
									echo "Tersedia";
								}else {
									echo "<br>";
								}
								 ?></a></p>
								<div class="overlay">
    								<div class="text">
									<?php
										$sql="SELECT pemesan,jam FROM meja where no_meja=12";

										if ($result=mysqli_query($mysqli,$sql)){
  												// Fetch one and one row
  												while ($row=mysqli_fetch_row($result)){
    												printf ("%s (%s)\n",$row[0],$row[1]);
    											}
  											// Free result set
  											mysqli_free_result($result);
										}

									?>
									</div>
  								  </div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="brands-agile-2">
						<div class="col-md-2 w3layouts-brand">
							<div class="brands-w3l">
								<p><a href="#">no : 13<br><img src="asset\images\ta.png" class="img-responsive"><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=13");
									$hasil = mysqli_fetch_array($result);
									if($hasil['status']=='tersedia'){
									echo "Tersedia";
								}else {
									echo "<br>";
								}
								 ?></a></p>
								 <div class="overlay">
    								<div class="text">
									<?php
										$sql="SELECT pemesan,jam FROM meja where no_meja=13";

										if ($result=mysqli_query($mysqli,$sql)){
  												// Fetch one and one row
  												while ($row=mysqli_fetch_row($result)){
    												printf ("%s (%s)\n",$row[0],$row[1]);
    											}
  											// Free result set
  											mysqli_free_result($result);
										}

									?>
									</div>
  								  </div>
							</div>
						</div>
						<div class="col-md-2 w3layouts-brand">
							<div class="brands-w3l">
								<p><a href="#">no : 14<br><img src="asset\images\ta.png" class="img-responsive"><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=14");
									$hasil = mysqli_fetch_array($result);
									if($hasil['status']=='tersedia'){
									echo "Tersedia";
								}else {
									echo "<br>";
								}
								 ?></a></p>
								 <div class="overlay">
    								<div class="text">
									<?php
										$sql="SELECT pemesan,jam FROM meja where no_meja=14";

										if ($result=mysqli_query($mysqli,$sql)){
  												// Fetch one and one row
  												while ($row=mysqli_fetch_row($result)){
    												printf ("%s (%s)\n",$row[0],$row[1]);
    											}
  											// Free result set
  											mysqli_free_result($result);
										}

									?>
									</div>
  								  </div>
							</div>
						</div>
						<div class="col-md-2 w3layouts-brand">
							<div class="brands-w3l">
								<p><a href="#">no : 15<br><img src="asset\images\ta.png" class="img-responsive"><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=15");
									$hasil = mysqli_fetch_array($result);
									if($hasil['status']=='tersedia'){
									echo "Tersedia";
								}else {
									echo "<br>";
								}
								 ?></a></p>
								 <div class="overlay">
    								<div class="text">
									<?php
										$sql="SELECT pemesan,jam FROM meja where no_meja=15";

										if ($result=mysqli_query($mysqli,$sql)){
  												// Fetch one and one row
  												while ($row=mysqli_fetch_row($result)){
    												printf ("%s (%s)\n",$row[0],$row[1]);
    											}
  											// Free result set
  											mysqli_free_result($result);
										}

									?>
									</div>
  								  </div>
							</div>
						</div>

						<div class="col-md-2 w3layouts-brand">
							<div class="brands-w3l">
								<p><a href="#">no : 16<br><img src="asset\images\ta.png" class="img-responsive"><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=16");
									$hasil = mysqli_fetch_array($result);
									if($hasil['status']=='tersedia'){
									echo "Tersedia";
								}else {
									echo "<br>";
								}
								 ?></a></p>
								 <div class="overlay">
    								<div class="text">
									<?php
										$sql="SELECT pemesan,jam FROM meja where no_meja=16";

										if ($result=mysqli_query($mysqli,$sql)){
  												// Fetch one and one row
  												while ($row=mysqli_fetch_row($result)){
    												printf ("%s (%s)\n",$row[0],$row[1]);
    											}
  											// Free result set
  											mysqli_free_result($result);
										}

									?>
									</div>
  								  </div>
							</div>
						</div>
						<div class="col-md-2 w3layouts-brand">
							<div class="brands-w3l">
								<p><a href="#">no : 17<br><img src="asset\images\ta.png" class="img-responsive"><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=17");
									$hasil = mysqli_fetch_array($result);
									if($hasil['status']=='tersedia'){
									echo "Tersedia";
								}else {
									echo "<br>";
								}
								 ?></a></p>
								 <div class="overlay">
    								<div class="text">
									<?php
										$sql="SELECT pemesan,jam FROM meja where no_meja=17";

										if ($result=mysqli_query($mysqli,$sql)){
  												// Fetch one and one row
  												while ($row=mysqli_fetch_row($result)){
    												printf ("%s (%s)\n",$row[0],$row[1]);
    											}
  											// Free result set
  											mysqli_free_result($result);
										}

									?>
									</div>
  								  </div>
							</div>
						</div>
						<div class="col-md-2 w3layouts-brand">
							<div class="brands-w3l">
								<p><a href="#">no : 18<br><img src="asset\images\ta.png" class="img-responsive"><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=18");
									$hasil = mysqli_fetch_array($result);
									if($hasil['status']=='tersedia'){
									echo "Tersedia";
								}else {
									echo "<br>";
								}
								 ?></a></p>
								 <div class="overlay">
    								<div class="text">
									<?php
										$sql="SELECT pemesan,jam FROM meja where no_meja=18";

										if ($result=mysqli_query($mysqli,$sql)){
  												// Fetch one and one row
  												while ($row=mysqli_fetch_row($result)){
    												printf ("%s (%s)\n",$row[0],$row[1]);
    											}
  											// Free result set
  											mysqli_free_result($result);
										}

									?>
									</div>
  								  </div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</section>
		</div>
	</div>
<!--//brands-->
<!--reservasi tempat-->
<div class="">
	<div class="container">
	<section id="reservasi_tempat" class="flat-row menu-3">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-5">
	                <div class="reservation-page-right">
	                    <img src="asset\images\reservasi2.png" class="img-responsive" alt="reservation-banner">
	                </div>
	            </div><!--col-md-5-->

	            <div class="col-md-7">
	                <div class="reservation-page-left">

	                    <div class="reservation-page-form">

	                        <div class="title-section">
	                            <h1 class="phone">Reservasi Tempat</h1>
	                        </div>

	                        <ul>
	                            <li>Buka setiap hari mulai <span>09:00 AM - 22:00 PM</span> </li>
	                       	</ul>
	                        <form  class="reservation_form" id="reservation-form" action ="halaman_depan.php" method="post">

																	<label>Nama</label>
																	<input type="text"  placeholder="Nama Lengkap" name="nama" id="form-name" data-error="Subject field is required" required>


	                                <label>Tanggal</label>
	                                   <input type="date" placeholder="dd/mm/yyy" name="tanggal" id="date-picker" data-error="Subject field is required" required>

	                                <label>Jam</label>
	                                   <input id="appt-time" type="time" name="appt-time" min="09:00" max="22:00"><span class="validity"></span>


																		  <label>Jumlah Kursi</label>
	                                    <input type="number" placeholder="contoh: 6" name="jumlah_kursi" data-error="Subject field is required" required>


																			<label>No Meja</label>
																					<input type="number" placeholder="contoh : 12" step="1" min="1" max="18" name="no_meja" id="no_meja" data-error="Subject field is required" required>

																					<label>No HP</label>
		 																		 <input type="text"  placeholder="Masukkan No HP" name="hp" id="form-name" data-error="Subject field is required" required>

	                             <center><button type="submit"  name="pesan_tempat">Reservasi</button></center>

																<?php include 'koneksi.php'; ?>
																	<?php
																	  if(isset($_POST['pesan_tempat'])){
																	    if(($_POST['no_meja']>0)&&($_POST['jumlah_kursi']>0)){
																	      $no_meja = $_POST['no_meja'];
																	      $jumlah_kursi = $_POST['jumlah_kursi'];
																	      $pemesan = $_POST['nama'];
																			  $tanggal = $_POST['tanggal'];
																	      $jam = $_POST['jam'];
																	      $hp = $_POST['hp'];
																	      $result = mysqli_query($mysqli, "UPDATE meja SET jumlah_kursi='$jumlah_kursi', pemesan='$pemesan', status='tidak tersedia', jam='$jam', tanggal='$tanggal', hp='$hp' where no_meja='$no_meja'");
																	      echo "Reservasi Meja berhasil";
																	    }
																	    else {
																	      echo "Reservasi Meja gagal";
																	    }
																	  }
																	  ?>

	                            </form>
	                    </div>

	                </div>
							</div><!--col-md-7-->
	        </div><!--row-->
	    </div><!--container -->
	</section>
	</div>
</div>
<!--//reservasi tempat-->


 <!-- Carousel
    ================================================== -->

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
         <a href="beverages.html"> <img class="first-slide" src="asset/images/b1.jpg" alt="First slide"></a>

        </div>
        <div class="item">
         <a href="personalcare.html"> <img class="second-slide " src="asset/images/b3.jpg" alt="Second slide"></a>

        </div>
        <div class="item">
          <a href="household.html"><img class="third-slide " src="asset/images/b1.jpg" alt="Third slide"></a>

        </div>
      </div>

    </div><!-- /.carousel -->

<!-- menu -->
<section id="pesan_menu">
	<div class="top-brands">
		<div class="container">
		<h2>Pesan Menu</h2>
			<div class="grid_3 grid_5">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">Makanan</a></li>
						<li role="presentation"><a href="#tours" role="tab" id="tours-tab" data-toggle="tab" aria-controls="tours">Minuman</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
							<div class="agile-tp">
							</div>
							<div class="agile_top_brands_grids">
								<div class="col-md-4 top_brand_left">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid_pos">
											</div>
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block" >
														<div class="snipcart-thumb">
															<a href="products.html"><img  src="asset/images/nasigoreng.jpg" alt=" "  title=" " /></a>
														  <p>Nasi Goreng</p>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
															<h4>Rp10.000</h4>
														</div>
														<div class="snipcart-details top_brand_home_details">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Nasi Goreng" />
																	<input type="hidden" name="amount" value="10000" />
																	<input type="hidden" name="currency_code" value="IDR" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Pesan" class="button" />
																</fieldset>
															</form>
														</div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4 top_brand_left">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid_pos">
											</div>
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block" >
														<div class="snipcart-thumb">
															<a href="products.html"><img src="asset/images/nasigorengpattaya.jpg" alt=" " height="244" title=" " /></a>
														  <p>Nasi Goreng Pattaya</p>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
															<h4>Rp15.000</h4>
														</div>
														<div class="snipcart-details top_brand_home_details">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Nasi Goreng Pattaya" />
																	<input type="hidden" name="amount" value="15000" />
																	<input type="hidden" name="currency_code" value="IDR" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Pesan" class="button" />
																</fieldset>
															</form>
														</div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4 top_brand_left">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid_pos">
											</div>
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block">
														<div class="snipcart-thumb">
															<a href="products.html"><img src="asset/images/nasiuduk.jpg" alt=" " class="img-responsive" /></a>
															<p>Nasi Uduk</p>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
															<h4>Rp15.000</h4>
														</div>
														<div class="snipcart-details top_brand_home_details">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Nasi Uduk" />
																	<input type="hidden" name="amount" value="15000" />
																	<input type="hidden" name="currency_code" value="IDR" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Pesan" class="button" />
																</fieldset>
															</form>
														</div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="agile_top_brands_grids">
								<div class="col-md-4 top_brand_left">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid_pos">
											</div>
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block" >
														<div class="snipcart-thumb">
															<a href="products.html"><img src="asset/images/ayamgeprek.jpg" alt=" " height="244" title=" " /></a> Nasi Ayam Geprek</p>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>

                            <h4>Rp15.000</h4>
														</div>
														<div class="snipcart-details top_brand_home_details">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Nasi Ayam Geprek" />
																	<input type="hidden" name="amount" value="15000" />
																	<input type="hidden" name="currency_code" value="IDR" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Pesan" class="button" />
																</fieldset>
															</form>
														</div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4 top_brand_left">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid_pos">
											</div>
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block" >
														<div class="snipcart-thumb">
															<a href="products.html"><img title=" " alt=" " height="244" src="asset/images/mieaceh.jpg" /></a>
															<p>Mie Aceh</p>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
															<h4>Rp10.000</h4>
														</div>
														<div class="snipcart-details top_brand_home_details">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Mie Aceh" />
																	<input type="hidden" name="amount" value="10000" />
																	<input type="hidden" name="currency_code" value="IDR" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Pesan" class="button" />
																</fieldset>
															</form>
														</div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4 top_brand_left">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid_pos">
											</div>
											<div class="agile_top_brand_left_grid_pos">

											</div>
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block">
														<div class="snipcart-thumb">
															<a href="products.html"><img src="asset/images/martabaktelur.jpg" alt=" " height="244" class="img-responsive" /></a>
															<p>Martabak Telur</p>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
															<h4>Rp8.000</h4>
														</div>
														<div class="snipcart-details top_brand_home_details">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Pepsi soft drink" />
																	<input type="hidden" name="amount" value="8000" />
                                                               																	<input type="hidden" name="currency_code" value="IDR" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Pesan" class="button" />
																</fieldset>
															</form>
														</div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tours" aria-labelledby="tours-tab">
							<div class="agile-tp">
							</div>
							<div class="agile_top_brands_grids">
								<div class="col-md-4 top_brand_left">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid_pos">

											</div>
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block" >
														<div class="snipcart-thumb">
															<a href="products.html"><img title=" " alt=" " src="asset/images/tehdingin.jpg" /></a>
															<p>Teh Dingin</p>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
															<h4>Rp5.000</h4>
														</div>
														<div class="snipcart-details top_brand_home_details">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Teh Dingin" />
																	<input type="hidden" name="amount" value="5000" />
																	<input type="hidden" name="currency_code" value="IDR" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Pesan" class="button" />
																</fieldset>
															</form>
														</div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4 top_brand_left">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid_pos">

											</div>
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block" >
														<div class="snipcart-thumb">
															<a href="products.html"><img title=" " alt=" " src="asset/images/tehhijaudingin.jpg" /></a>
															<p>Teh Hijau Dingin</p>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
															<h4>Rp8.000</h4>
														</div>
														<div class="snipcart-details top_brand_home_details">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Teh Hijau dingin" />
																	<input type="hidden" name="amount" value="8000" />
																																		<input type="hidden" name="currency_code" value="IDR" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Pesan" class="button" />
																</fieldset>
															</form>
														</div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4 top_brand_left">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid_pos">

											</div>
											<div class="agile_top_brand_left_grid_pos">

											</div>
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block">
														<div class="snipcart-thumb">
															<a href="products.html"><img src="asset/images/milodingin.jpg" alt=" " class="img-responsive" /></a>
															<p>Milo Dingin</p>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
															<h4>Rp.7000</h4>
														</div>
														<div class="snipcart-details top_brand_home_details">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Milo Dingin" />
																	<input type="hidden" name="amount" value="7000" />
																	<input type="hidden" name="currency_code" value="IDR" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Pesan" class="button" />
																</fieldset>
															</form>
														</div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="agile_top_brands_grids">
								<div class="col-md-4 top_brand_left">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid_pos">

											</div>
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block" >
														<div class="snipcart-thumb">
															<a href="products.html"><img title=" " alt=" " src="asset/images/tehtarikdingin.jpg" /></a>
															<p>Teh Tarik Dingin</p>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
															<h4>Rp.9000</h4>
														</div>
														<div class="snipcart-details top_brand_home_details">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Teh Tarik Dingin" />
																	<input type="hidden" name="amount" value="9000" />
																	<input type="hidden" name="currency_code" value="IDR" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Pesan" class="button" />
																</fieldset>
															</form>
														</div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4 top_brand_left">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid_pos">
											</div>
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block" >
														<div class="snipcart-thumb">
															<a href="products.html"><img title=" " alt=" " src="asset/images/jusmangga.jpg" /></a>
															<p>Jus Mangga</p>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
															<h4>Rp12.000</h4>
														</div>
														<div class="snipcart-details top_brand_home_details">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Jus Mangga" />
																	<input type="hidden" name="amount" value="12000" />
																																	<input type="hidden" name="currency_code" value="IDR" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Pesan" class="button" />
																</fieldset>
															</form>
														</div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4 top_brand_left">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid_pos">
											</div>
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block">
														<div class="snipcart-thumb">
															<a href="products.html"><img src="asset/images/juspisang.jpg" alt=" " class="img-responsive" /></a>
															<p>Jus Pisang</p>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
															<h4>Rp12000</h4>
														</div>
														<div class="snipcart-details top_brand_home_details">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Jus Pisang" />
																	<input type="hidden" name="amount" value="12000" />
																	<input type="hidden" name="currency_code" value="IDR" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Pesan" class="button" />
																</fieldset>
															</form>
														</div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //top-brands -->
<!-- Footer -->
<div class="footer">
  <p>Copyright &copy D'Caffe-in 2018</p>
</div>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- top-header and slider -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
<!-- //here ends scrolling icon -->
<script src="asset/js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
<!-- main slider-banner -->
<script src="asset/js/skdslider.min.js"></script>
<link href="asset/css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});

			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});

		});
</script>

</body>
</html>
