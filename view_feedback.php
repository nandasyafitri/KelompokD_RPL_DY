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
                                <a href="#lihat_feedback" class="menu__link">Feedback</a>
                            </li>
                            <li class="m_nav_item menu__item" id="moble_nav_item_4">
                              <?php $username=$_SESSION['username']; ?>
                                <a href="#" class="menu__link">@<?php echo $username; ?></a>
                            </li>
                            <li class="m_nav_item menu__item" id="moble_nav_item_5">
                                <a href="index.php" class="menu__link">Logout</a>
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
                <a class="hvr-rectangle-out w3_play_icon1" href="#menu">Pesan Menu</a>
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
                                <div class="serviceinfo_agile ih-item circle colored effect17 active">
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
                </div>
            </div>
        </div>
    </div>
    <!-- //about -->

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
                <span>F</span>eedback Pengunjung</h3>

                <div class="w3_testimonials_grids w3_testimonials_grids">

                <div class="sreen-gallery-cursual">

           <div id="owl-demo" class="owl-carousel">

		                 <?php
include('koneksi.php');


		$result = mysqli_query($mysqli, "SELECT * FROM feedback ORDER BY id_feedback ASC");

		if (!$result) {
			die ('SQL Error: ' . mysqli_error($mysqli));
		}
while ($row = mysqli_fetch_array($result))
		{
				echo '
                        <div class="item-owl">

                            <div class="col-md-3 col-sm-3 col-xs-3 img-agile">
                                <img src="asset_/images/profil1.png" class="img-responsive" alt="" />
                                <h6 style="color : #000;"> '.$row['username'].' </h6>
                            </div>

                            <div class="col-md-9 col-sm-9 col-xs-9 test-review test-tooltip1">
                                <p style="float: left;">
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>@'.$row['username'].': '.$row["feedback"].'
                                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                                </p><br><br><br>
																<p style="float : right;">
																		<i class="fa fa-quote-left" aria-hidden="true"></i>@Admin: '.$row["balasan"].'
																		<i class="fa fa-quote-right" aria-hidden="true"></i>
																</p>
                            </div>
                        </div>';
		}
		?>
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
