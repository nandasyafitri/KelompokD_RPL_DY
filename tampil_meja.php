<?php include('koneksi.php'); ?>
<?php
	session_start();
	if($_SESSION['login']==false){
		header('location: login.php');
	}
?>
<?php include 'server.php';?>
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>D'Caffein</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Beverages Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
    SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

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
    <!-- Custom Theme files -->
    <link href="asset_/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="asset_/css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- banner slider -->
    <link rel="stylesheet" type="text/css" href="asset_/css/zoomslider.css" />
    <!--gallery -->
    <link type="text/css" rel="stylesheet" href="asset_/css/cm-overlay.css" />
    <!-- //gallery -->
    <script src="asset_/js/jquery-2.2.3.min.js"></script>
     <!-- numscroller -->
     <script type="text/javascript" src="asset_/js/numscroller-1.0.js"></script>
    <script src="asset_/js/bootstrap.js"></script>
    <!-- font-awesome icons -->
    <link href="asset_/css/font-awesome.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400,500,600,700,800" rel="stylesheet">
    <!-- //web-fonts -->
    <!--tampil meja-->
    <link href="asset/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--//tampil meja-->
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
    	.carousel img {
        	width: 100%;
    	}
		.res{
			padding-top: 30px;
		}
    </style>

</head>

<body onload="startTime()">
    <!--/banner-bottom-->
    <div class="w3_agilits_banner_bootm">
        <!-- header -->
        <div class="container">
            <div class="w3_agile_logo">
                <h1>
                    <a href="#">
                        <img src="asset_/images/logo.png" alt="" />  D'Caffein</a>
                </h1>
            </div>
            <div class="agileits_w3layouts_nav">
                <div id="toggle_m_nav">
                    <div id="m_nav_menu" class="m_nav">
                        <div class="m_nav_ham w3_agileits_ham" id="m_ham_1"></div>
                        <div class="m_nav_ham" id="m_ham_2"></div>
                        <div class="m_nav_ham" id="m_ham_3"></div>
                    </div>

                </div>
                <div id="m_nav_container" class="m_nav wthree_bg">
                    <nav class="menu menu--sebastian">
                        <ul id="m_nav_list" class="m_nav menu__list">
                            <li class="m_nav_item menu__item menu__item--current" id="m_nav_item_1">
                                <a href="tampil_meja.php" class="menu__link"> Reservasi Meja </a>
                            </li>
                            <li class="m_nav_item menu__item" id="moble_nav_item_2">
                                <a href="pesan_menu.php" class="menu__link"> Pesan Menu </a>
                            </li>
                            <li class="m_nav_item menu__item" id="moble_nav_item_3">
                                <a href="view_feedback.php" class="menu__link">Feedback</a>
                            </li>
                            <li class="m_nav_item menu__item" id="moble_nav_item_4">
                              <?php $username=$_SESSION['username']; ?>
                                <a href="#" class="menu__link">@<?php echo $username; ?></a>
                            </li>
                            <li class="m_nav_item menu__item" id="moble_nav_item_5">
                                <a href="logout.php" class="menu__link">Logout</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!--// header -->
        <div class="w3_agilits_inner_bottom">
            <div class="wthree_agile_login">
                <ul>
                    <li>
                        <i class="fa fa-phone" aria-hidden="true"></i> +6282211276007</li>
                    <li>
                        <i class="fa fa-envelope-o list-icon" aria-hidden="true"></i>
                        <a href="mailto:info@example.com">dcaffeinc@gmail.com</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <!--//banner-bottom-->
    <!--/banner-section-->
    <div id="demo-1" data-zs-src='["asset_/images/b3.jpg","asset_/images/b5.jpg","asset_/images/b1.jpg","asset_/images/b2.jpg","asset_/images/b4.jpg"]' data-zs-overlay="dots">
        <div class="demo-inner-content">

            <!--/banner-info-->
            <div class="baner-info">
                <h4>Selamat Datang di </h4>
                <h3>
                    D'Caffein</h3>
                <p>Kami menyediakan berbagai varian menu yang kekinian</p>
                <a class="hvr-rectangle-out w3_play_icon1" href="#pilih_meja">Lihat Tempat</a>
            </div>
            <!--/banner-ingo-->
        </div>
    </div>
    <!--/banner-section-->
    <!--about -->
    <div id="about" class="wthree-about section-w3ls">
        <div class="container">
            <div class="agileits-banner-grids text-center">
                <div class="banner-bottom-girds">
                    <div class="services_agile" id="services">
                        <div class="services-top">
                            <div class="col-md-3 col-sm-4 col-xs-4 service_grid text-center">
                                <div class="serviceinfo_agile ih-item circle colored effect17">
                                    <div class="img">
                                        <img src="asset_/images/frap.jpg" class="img-responsive" alt="img">
                                    </div>
                                    <div class="info">
                                        <p>Frappucino</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-4 service_grid text-center">
                                <div class="serviceinfo_agile ih-item circle colored effect17">
                                    <div class="img">
                                        <img src="asset_/images/green.jpg" class="img-responsive" alt="img">
                                    </div>
                                    <div class="info">
                                        <p>Green Tea Latte</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-4 service_grid text-center">
                                <div class="serviceinfo_agile ih-item circle colored effect17">
                                    <div class="img">
                                        <img src="asset_/images/vanilla.jpg" class="img-responsive" alt="img">
                                    </div>
                                    <div class="info">
                                        <p>Vanilla Latte</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-4 service_grid text-center">
                                <div class="serviceinfo_agile ih-item circle colored effect17">
                                    <div class="img">
                                        <img src="asset_/images/epr.jpg" class="img-responsive" alt="img">
                                    </div>
                                    <div class="info">
                                        <p>Espresso</p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"> </div>

        </div>
    </div>
    <!-- //about -->
    <!--brands-->
  <div class="brands">
    <div class="container"
    <section id="pilih_meja">
      <div class="brands">
        <h3>Lihat Meja</h3>
        <p><?php $tgl=date('d/m/Y'); echo $tgl; ?></p>
        <div id="txt"></div>

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
                    $sql="SELECT username FROM meja where  no_meja=1";

                    if ($result=mysqli_query($mysqli,$sql)){
                          // Fetch one and one row
                          while ($row=mysqli_fetch_row($result)){
                            printf ("%s\n",$row[0]);
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
                    $sql="SELECT username FROM meja where no_meja=2";

                    if ($result=mysqli_query($mysqli,$sql)){
                          // Fetch one and one row
                          while ($row=mysqli_fetch_row($result)){
                            printf ("%s\n",$row[0]);
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
                    $sql="SELECT username FROM meja where no_meja=3";

                    if ($result=mysqli_query($mysqli,$sql)){
                          // Fetch one and one row
                          while ($row=mysqli_fetch_row($result)){
                            printf ("%s\n",$row[0]);
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
                    $sql="SELECT username FROM meja where no_meja=4";

                    if ($result=mysqli_query($mysqli,$sql)){
                          // Fetch one and one row
                          while ($row=mysqli_fetch_row($result)){
                            printf ("%s\n",$row[0]);
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
                    $sql="SELECT username FROM meja where no_meja=5";

                    if ($result=mysqli_query($mysqli,$sql)){
                          // Fetch one and one row
                          while ($row=mysqli_fetch_row($result)){
                            printf ("%s\n",$row[0]);
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
                    $sql="SELECT username FROM meja where no_meja=6";

                    if ($result=mysqli_query($mysqli,$sql)){
                          // Fetch one and one row
                          while ($row=mysqli_fetch_row($result)){
                            printf ("%s\n",$row[0]);
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
                    $sql="SELECT username FROM meja where no_meja=7";

                    if ($result=mysqli_query($mysqli,$sql)){
                          // Fetch one and one row
                          while ($row=mysqli_fetch_row($result)){
                            printf ("%s\n",$row[0]);
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
                    $sql="SELECT username FROM meja where no_meja=8";

                    if ($result=mysqli_query($mysqli,$sql)){
                          // Fetch one and one row
                          while ($row=mysqli_fetch_row($result)){
                            printf ("%s\n",$row[0]);
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
                    $sql="SELECT username FROM meja where no_meja=9";

                    if ($result=mysqli_query($mysqli,$sql)){
                          // Fetch one and one row
                          while ($row=mysqli_fetch_row($result)){
                            printf ("%s\n",$row[0]);
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
                    $sql="SELECT username FROM meja where no_meja=10";

                    if ($result=mysqli_query($mysqli,$sql)){
                          // Fetch one and one row
                          while ($row=mysqli_fetch_row($result)){
                            printf ("%s\n",$row[0]);
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
                    $sql="SELECT username FROM meja where no_meja=11";

                    if ($result=mysqli_query($mysqli,$sql)){
                          // Fetch one and one row
                          while ($row=mysqli_fetch_row($result)){
                            printf ("%s\n",$row[0]);
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
                    $sql="SELECT username FROM meja where no_meja=12";

                    if ($result=mysqli_query($mysqli,$sql)){
                          // Fetch one and one row
                          while ($row=mysqli_fetch_row($result)){
                            printf ("%s\n",$row[0]);
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
                    $sql="SELECT username FROM meja where no_meja=13";

                    if ($result=mysqli_query($mysqli,$sql)){
                          // Fetch one and one row
                          while ($row=mysqli_fetch_row($result)){
                            printf ("%s\n",$row[0]);
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
                    $sql="SELECT username FROM meja where no_meja=14";

                    if ($result=mysqli_query($mysqli,$sql)){
                          // Fetch one and one row
                          while ($row=mysqli_fetch_row($result)){
                            printf ("%s\n",$row[0]);
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
                    $sql="SELECT username FROM meja where no_meja=15";

                    if ($result=mysqli_query($mysqli,$sql)){
                          // Fetch one and one row
                          while ($row=mysqli_fetch_row($result)){
                            printf ("%s\n",$row[0]);
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
                    $sql="SELECT username FROM meja where no_meja=16";

                    if ($result=mysqli_query($mysqli,$sql)){
                          // Fetch one and one row
                          while ($row=mysqli_fetch_row($result)){
                            printf ("%s\n",$row[0]);
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
                    $sql="SELECT username FROM meja where no_meja=17";

                    if ($result=mysqli_query($mysqli,$sql)){
                          // Fetch one and one row
                          while ($row=mysqli_fetch_row($result)){
                            printf ("%s\n",$row[0]);
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
                    $sql="SELECT username FROM meja where no_meja=18";

                    if ($result=mysqli_query($mysqli,$sql)){
                          // Fetch one and one row
                          while ($row=mysqli_fetch_row($result)){
                            printf ("%s\n",$row[0]);
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
<!-- stats -->
<div class="wthree-stats">
	<!--/banner-section-->
	<div id="demo-1" data-zs-src='["asset_/images/suasana.jpg","asset_/images/suasana4.jpg","asset_/images/suasana2.jpg","asset_/images/suasana3.jpg","asset_/images/suasana5.jpg"]' data-zs-overlay="dots">
			<div class="demo-inner-content">

					<!--/banner-info-->
					<div class="baner-info">
							<h4>Suasana di </h4>
							<h3>Caffe</h3>
					</div>
					<!--/banner-ingo-->
			</div>
	</div>
	<!--/banner-section-->
</div>
<!-- //stats -->
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

	            <div class="col-md-7 res">
	                <div class="reservation-page-left">

	                    <div class="reservation-page-form">

	                        <div class="title-section">
	                            <h1 class="phone">Reservasi Tempat</h1>
	                        </div>

	                        <ul>
	                            <br><li>Buka setiap hari mulai <span>09:00 AM - 22:00 PM<br><br></span> </li>
	                       	</ul>
	                        <form  class="reservation_form" id="reservation-form" action ="tampil_meja.php#reservasi_tempat" method="post">

								<?php if($msg!=""){?>
								<p class="alert alert-warning"><?php echo $msg ; $msg="";}?></p>
								<label>No Meja</label>
								<input type="number" placeholder="contoh : 12" step="1" min="1" max="18" name="no_meja" id="no_meja" data-error="Subject field is required" required>
                        		<label>Jumlah Kursi</label>
                      			<input type="number" placeholder="contoh: 6" name="jumlah_kursi" data-error="Subject field is required" required>
								<center><button type="submit"  name="pesan_tempat">Reservasi</button></center>
	                            </form>
	                    </div>

	                </div>
							</div><!--col-md-7-->
	        </div><!--row-->
	    </div><!--container -->
	</section>
	</div>
</div>
                      <a class="hvr-rectangle-out w3_play_icon1" href="pesan_menu.php">Klik untuk Reservasi Menu</a><br>
<!--//reservasi tempat-->

    <!-- services -->
    <div no-repeat center" class="panel-sec section-w3ls">
        <div class="container">
          <center><p style="color: white;" class="w3ls-title">Jam Buka Caffe : </p></center>
          <center><p style="color: white;" class="w3ls-title"><br>Senin-Jum'at: 9:00 AM - 10:00 PM</p></center>
            <center><p style="color: white;" class="w3ls-title">Sabtu-Minggu: 10:00 AM - 11:00 PM</p></center>
    </div>
    <!-- services -->
    <!-- testimonials -->
    <!-- //testimonials -->
    <!-- footer -->
    <div class="agile-footer w3ls-section">
        <div class="container">
            <div class="list-footer">
                <ul class="footer-nav">
                    <li>
                        <a href="tampil_meja.php">Reservasi Meja</a>
                    </li>
                    <li>
                        <a href="pesan_menu.php">Pesan Menu</a>
                    </li>
                    <li>
                </ul>
            </div>
            <div class="agileits_w3layouts-footer-bottom">
                <div class="w3_agile-footer-grids">
                    <div class="col-md-3  w3_agile-footer1 f1">
                        <h2>
                            <a href="#">D'Caffein</a>
                        </h2>
                        <h5 class="f1">Lokasi</h5>
                        <p>Banda Aceh, ID</p>
                    </div>
                    <div class="col-md-6  w3_agile-footer1 f2">
                        <div class="col-md-4 col-sm-4 col-xs-4 inner-li">
                            <h5>Layanan</h5>
                            <ul class="w3ls-footer-bottom-list">
                                <li>
                                    <a class="page-scroll scroll" href="#"></a>
                                </li>
                                <li>
                                    <a class="page-scroll scroll" href="#">Reservasi Tempat</a>
                                </li>
                                <li>
                                    <a class="page-scroll scroll" href="#">Reservasi Menu</a>
                                </li>
                                <li>
                                    <a class="page-scroll scroll" href="#team">Feedback</a>
                                </li>
                                <li>
                                    <a class="page-scroll scroll" href="#contact">Rating</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-4 inner-li">
                            <h5>support</h5>
                            <ul class="w3ls-footer-bottom-list">
                                <li>
                                    <a href="#">suppport</a>
                                </li>
                                <li>
                                    <a href="#">FAQ</a>
                                </li>
                                <li>
                                    <a href="#">media</a>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-3  w3_agile-footer1 f3">
                        <h5>follow us</h5>
                        <ul class="footer-social-icons">
                            <li>
                                <a href="#">
                                    <i class="fa icon1 fa-facebook icons" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa icon2 fa-twitter icons" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa icon3 fa-google-plus icons" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa icon3 fa-linkedin icon4 icons" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="agileits_w3layouts-copyright">
                <p>© 2018 | Design by
                    <a href="http://w3layouts.com/" target="=_blank"> W3layouts </a>
                </p>
            </div>
        </div>
    </div>
    <!-- //footer -->
    <!-- banner slider -->
    <script src="asset_/js/modernizr-2.6.2.min.js"></script>
    <script src="asset_/js/jquery.zoomslider.min.js"></script>
    <!-- //banner slider -->
    <!-- //gallery -->
    <script src="asset_/js/jquery.tools.min.js"></script>
    <script src="asset_/js/jquery.mobile.custom.min.js"></script>
    <script src="asset_/js/jquery.cm-overlay.js"></script>

    <script>
        $(document).ready(function () {
            $('.cm-overlay').cmOverlay();
        });
    </script>
    <!-- //gallery -->
    <!-- testimonials -->
    <!-- required-js-files-->
    <link href="asset_/css/owl.carousel.css" rel="stylesheet">
    <script src="asset_/js/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {
            $("#owl-demo").owlCarousel({
                items: 1,
                lazyLoad: true,
                autoPlay: false,
                navigation: true,
                navigationText: true,
                pagination: true,
            });
        });
    </script>
    <!--//required-js-files-->
    <!-- start-smooth-scrolling -->
    <script src="asset_/js/move-top.js"></script>
    <script src="asset_/js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
         var defaults = {
             containerID: 'toTop', // fading element id
             containerHoverID: 'toTopHover', // fading element hover id
             scrollSpeed: 1200,
             easingType: 'linear'
         };
         */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="asset_/js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- navigation  -->
    <script src="asset_/js/main.js"></script>
    <!-- //navigation -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
</body>

</html>
