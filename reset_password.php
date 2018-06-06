<?php
	session_start();
	if($_SESSION['login']==false){
		header('location: login.php');
	}
?>
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
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
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
    <style>
    .atur-form{
      width: 50%;
      margin-left: 25%;
      color: #000;
    }
		body{
			background-image:url(bg_dotted.png);
		}
		.daftar-menu,.rincian{
			margin:0;
			padding:0;
		}
		.rincian ul li{
			background-color:rgb(238, 238, 238);
		}
		.rincian ul li a:hover{
			color:rgb(51, 122, 183);
		}
		.box-food,.box-drink{
			margin:0px;
			padding:5px;
			overflow:hidden;
		}
		.box-food .box{
			margin-bottom:4px;
			margin-right:3px;
			display:inline-block;
			padding:5px 25px;
			background-color:rgba(245,245,245,0.3);
		}
		.navbar-rincian{
			padding:11px 0px;
			background-color:#fa8500;
			color:white;
		}
		.navbar-default, .nav-justified li{
			border-radius:0px;

		}
		.dropbtn {
				background-color: #e96147;
				color: #000;
				padding: 16px;
				font-size: 16px;
				border: none;
				cursor: pointer;

		}

		.dropdown {
				position: relative;
				display: inline-block;


		}

		.dropdown-content {
				display: none;
				position: absolute;
				background-color: #f9f9f9;
				min-width: 160px;
				box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
				z-index: 1;		}

		.dropdown-content a {
				color: black;
				padding: 12px 16px;
				text-decoration: none;
				display: block;

		}

		.dropdown-content a:hover {background-color: #e96147}

		.dropdown:hover .dropdown-content {
				display: block;
		}

		.dropdown:hover .dropbtn {
				background-color: #e96147;
		}

    </style>
</head>

<body>
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
																<div class="dropdown">
		  													<button class="dropbtn">FEEDBACK</button>
		  												<div class="dropdown-content">
															    <a href="view_feedback.php">Lihat Feedback</a>
															    <a href="feedback.php">TuliS Feedback</a>
		  												</div>
														</div>
                            </li>
                            <li class="m_nav_item menu__item" id="moble_nav_item_4">
                              <?php $username=$_SESSION['username']; ?>
                                <a href="#" class="menu__link">@<?php echo $username; ?></a>
                            </li>
                            <li class="m_nav_item menu__item" id="moble_nav_item_3">
																<div class="dropdown">
		  													<button class="dropbtn">Akun Saya</button>
		  												<div class="dropdown-content">
															    <a href="logout.php">Logout</a>
															    <a href="reset_password.php">Rubah Password</a>
		  												</div>
														</div>
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
<!--menu-->

<!--//menu-->
    <!-- services -->

    <!-- services -->
    <!--Batas-->
    <!--Batas-->
    <!-- testimonials -->
    <div class="testimonials section-w3ls" id="testimonials" style=" background: url('asset_/images/bg4.jpg');">
        <div class="container">
            <h3 class="w3ls-title">
                <span>R</span>ubah Password</h3>

                <div class="w3_testimonials_grids w3_testimonials_grids">

                <div class="sreen-gallery-cursual">
            <div class="atur-form">
           <div id="owl-demo" class="owl-carousel">
             <form action="reset_password.php" method="POST">

                 <div class="form-group">
                     <input class="form-control" type="text" name="username" placeholder="Masukkan username" />
                 </div>

                 <div class="form-group">
                     <input class="form-control" type="password" name="password" placeholder="Masukkan password saat ini" />
                 </div>

                 <div class="form-group">
                     <input class="form-control" type="password" name="new_password" placeholder="Masukkan password baru" />
                 </div>

                 <div class="form-group">
                     <input class="form-control" type="password" name="confirm_new_password" placeholder="Masukkan konfirmasi password" />
                 </div>

                 <input style="background: #e96147;"type="submit" class="btn btn-success btn-block"  name="reset" value="Ubah Password" />
             </form>
             <?php
                 include('koneksi.php');
                 //ambil data dari tabel users dan hasilnya ditampung oleh variabel $result
                 $result = mysqli_query($mysqli, "SELECT * FROM users");

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
                   //echo "Jumlah Error : ".$errors."<br>";
                   if($errors==0){
                     $new_password = md5($_POST['new_password']);
                     $result = mysqli_query($mysqli, "UPDATE users SET password='$new_password' where username='$username'");
                     echo "Ubah password berhasil";
                   }
                 }

              ?>
					</div>
        </div>
				</div>


                    <!--//screen-gallery-->

        </div>
    </div>
     <div class="clearfix"></div>
    <!-- //testimonials -->
    <!-- footer -->
    <div class="agile-footer w3ls-section">
        <div class="container">
            <div class="list-footer">
                <ul class="footer-nav">
                    <li>
                        <a href="index">Home</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Menu</a>
                    </li>
                    <li>
                        <a href="#">Gallery</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
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
