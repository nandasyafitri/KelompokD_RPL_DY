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
<?php include 'server.php';?>
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
	<?php
		$result="";
		$username=$_SESSION['username'];
		$arrival="SELECT arrival FROM pesanan where username='$username'";
		if ($results=mysqli_query($db,$arrival)){
                          // Fetch one and one row
                          while ($row=mysqli_fetch_row($results)){
                           	$result = $row[0];
                       		break;
						  }
                        // Free result set
                        mysqli_free_result($results);
		}
	
		$jamnow= new DateTime();	
		$dteEnd = date_timezone_set($jamnow, timezone_open('asia/jakarta'));
		$dteStart = new DateTime($result); 
   	
		if($dteEnd < $dteStart){
			$clock=	$dteEnd->format("h:i");	
			$dteDiff  = $dteStart->diff($dteEnd);	
			$min= $dteDiff->format("%i");
			$sec= $dteDiff->format("%s");
		}
		
		if(isset($_POST['jadi'])){
			$pesankan="SELECT * FROM pesanan";
			if ($results=mysqli_query($db,$pesankan)){
				while ($row=mysqli_fetch_row($results)){
                           	//$result = mysqli_query($db, "UPDATE meja SET jumlah_kursi='0', username='', status='tersedia' where no_meja='$row[0]'");
                       		$result1 = mysqli_query($db,"UPDATE pesanan SET arrival='$clock' where username='$username'");
				}
                        // Free result set
                        mysqli_free_result($results);
			}
			header('location: index.php');	
		}
	?>
	<script type = "text/javascript" language = "javascript">
			$(document).ready(function(){
				document.getElementById('timer').innerHTML = <?php echo $min;?> + ":" + <?php echo $sec;?> ;
				startTimer();
			
						
			function startTimer() {
  				var presentTime = document.getElementById('timer').innerHTML;
  				var timeArray = presentTime.split(/[:]+/);
  				var m = timeArray[0];
  				var s = checkSecond((timeArray[1] - 1));
  				if(s==59){m=m-1}
  				if (m < 0) {
        			clearInterval(s);
        			document.getElementById('batal').click();  
    			}
				
  				document.getElementById('timer').innerHTML = m + ":" + s;
  				setTimeout(startTimer, 1000);	
				/*
				var jadi=document.getElementById("jadi");
				jadi.onclick = function(){
    				
					
				}				
				*/
				
			}

			function checkSecond(sec) {
  				if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
  				if (sec < 0) {sec = "59"};
  				return sec;
			}
			});
	</script>
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
		.timer{
			text-align: center;
  			font-size: 60px;
  			margin-top:0px;
		}
		.background {
 			animation: bg-animation 10s infinite;
		}

		@-webkit-keyframes bg-animation {
  			0% {
    			background-color: #f1ddc5;
  			}
			25% {
    			background-color: #fc4137;
  			}
  			50% {
    			background-color: #f1ddc5;
  			}
  			75% {
    			background-color: #fc4137;
  			}
			100% {
    			background-color: #f1ddc5;
  			}
		}

		@keyframes bg-animation {
  			0% {
    			background-color: #f1ddc5;
  			}
			25% {
    			background-color: #fc4137;
  			}
  			50% {
    			background-color: #f1ddc5;
  			}
  			75% {
    			background-color: #fc4137;
  			}
			100% {
    			background-color: #f1ddc5;
  			}
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

	<!--Pilih Mode-->
	<section style="background: #f1ddc5;" id="mode" class="background">
<div class="container">
    <div class="home-section text-center">
		<h3 style="padding-bottom: 30px;"class="w3ls-title"><span>K</span>onfirmasi</h3>
		<div><span id="timer" class="timer"></span></div>
		<form id="pilih_mode" method="post" action="konfirmasi.php">
				<button style="background: #949c31; color: #fff;" type="submit" id="jadi" name="jadi" class="btn btn-default btn-lg ">Sudah tiba</button>
				&nbsp; &nbsp;
				<button style="background: #e96147; color: #fff;"type="submit" id="batal" name="batal" class="btn btn-default btn-lg ">Batalkan</button>
		</form>
	</div>

	<!--Pilih Mode-->
	<!--Petunjuk-->
			<h5 style="padding-left: 320px;padding-bottom: 50px;padding-top: 50px;" class="w3ls-title">Petunjuk:
				<li>Pilih 'Sudah tiba' jika anda telah tiba di lokasi</li>
				<li>Pilih 'Batal' jika anda ingin membatalkan pesanan</li></h5>
	<!--//Petunjuk-->
	</section>
    <!-- services -->
    <!-- services -->
    <!-- testimonials -->
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
