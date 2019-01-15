<?php
 session_start();
 // set session
 $_SESSION['login'] = false;
?>
<?php include('server.php'); ?>

<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Login</title>
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
		body{
		background: url('asset/images/img1.jpg');
		background-size: cover;
		background-attachment: fixed;
		background-repeat:no-repeat;
		}
		.login-form-grids input[type="submit"] {
			outline: none;
			border: none;
			padding: 10px 0;
			font-size: 1em;
			color: #fff;
			display: block;
			width: 100%;
			background: #e96147;
			margin: 1.5em 0 0;
		}
		.login-form-grids {
			width: 50%;
			padding: 3em;
			background: rgba(46,41,36,0.8);
			margin: 3em auto 3em;
			color: #fff;
		}
		.form-group {
			margin-bottom: 15px;
		}
		.form-group p {
			text-align: left;
			font-weight: bold;
			color: #fff;
		}
		.form-groupp p{
			text-align: Center;
			font-weight: bold;
			color: #e96147;
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
                    <a href="index.php">
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
                            <li class="m_nav_item menu__item" id="moble_nav_item_1">
                                <a href="register.php" class="menu__link"> Register </a>
                            </li>
							<li class="m_nav_item menu__item" id="moble_nav_item_2">
                                <a href="login.php" class="menu__link"> Login Pengunjung </a>
                            </li>
							<li class="m_nav_item menu__item" id="moble_nav_item_3">
                                <a href="loginkaryawan.php" class="menu__link"> Login Karyawan </a>
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
   
 <section id="register" class="register-home">
		<div class="container">
			<div class="home-section text-center">
        <div class="login">
            <div class="login-form-grids">
              <h3>Login Sebagai Pengunjung</h3>
              <!-- Tampilkan Validasi Error-->

        <form action="" method="POST">
			<?php include('errors.php'); ?>
            <div class="form-group">
                <p for="username">Username</p>
                <input class="form-control" type="text" name="username" placeholder="Contoh: nandasyafitri" />
            </div>

            <div class="form-group">
                <p for="password">Password</p>
                <input class="form-control" type="password" name="password" placeholder="masukkan password" />
            </div>

            <input type="submit" class="btn btn-success btn-block" value="login" name="login" />

        </form>
		 <div class="form-groupp">
		<p> </p>
		 <a href="loginkaryawan.php"><p>Login Sebagai Karyawan</p></a>
         atau
         <a href="register.php"><p>Daftar Sebagai Pengunjung</p></a>
        </div>
		</div>
    </div>
		</div>
   </div>
    </section>

   
    <!-- footer -->
    <div class="agile-footer w3ls-section">
        <div class="container">
            <div class="list-footer">
                <ul class="footer-nav">
                    <li>
                        <a href="register.php">Register</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
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
                <p>© D'CAFFE-IN 2018
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
