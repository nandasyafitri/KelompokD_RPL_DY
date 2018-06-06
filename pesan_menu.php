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
<?php include'koneksi.php';?>
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
	<link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400,500,600,700,800" rel="stylesheet">
    <!-- //web-fonts -->
	<link href="asset/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type = "text/javascript"src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type = "text/javascript"src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
	<script src="asset/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
	<link rel="stylesheet" href="asset/alert/sweetalert2.min.css">
	<script src="asset/alert/sweetalert2.min.js"></script>
	<script src="js/minicart.min.js"></script>
	<script type = "text/javascript" language = "javascript">

		$(document).ready(function(){
			 $(".navbar a, footer a[href='#main']").on('click', function(event) {
    		// Make sure this.hash has a value before overriding default behavior
   			 if (this.hash !== "") {
      			// Prevent default anchor click behavior
      			event.preventDefault();

      			// Store hash
      			var hash = this.hash;

      			// Using jQuery's animate() method to add smooth page scroll
      			// The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      			$('html, body').animate({
        			scrollTop: $(hash).offset().top
      			}, 900, function(){

        					// Add hash (#) to URL when done scrolling (default click behavior)
        					window.location.hash = hash;
      					});
    		} // End if
  		});

  		$(window).scroll(function() {
    		$(".slideanim").each(function(){
      		var pos = $(this).offset().top;

      		var winTop = $(window).scrollTop();
        	if (pos < winTop + 600) {
          		$(this).addClass("slide");
        	}
    		});
  		});

			/*
			<?php
			if(!isset($_COOKIE['nomeja']))
			{
				belum();
			}else{
				echo"$('#isi-meja').removeAttr('href');";
				echo"$('#meja #no').val(2);";
			}
			function belum(){
			?>
				$('#myModal').modal('show');
				$('#isi-meja').removeAttr('readonly');
			<?php }?>
			*/
			$('input:checkbox').prop('checked', false);
			$('.men ul li a').on('click', function () {
				target = $(this).attr('href');
				$('#box-men > div').not(target).hide();
				$(target).fadeIn(800);
				return false;
			});

			$("#menu input:checkbox").on('change', function(e){
				e.preventDefault();
				var nomor = $(this).val();

				if($(this).is(":checked")){
					$.post('pilih.php',{nomor : nomor},function(result){
						$("#tr1").after(result);
						total();
					});
				}else{
					$('#'+nomor).remove();
					total();
				}
			});

			$("#menu").bind("keypress", function(e) {
				if (e.keyCode == 13) {
					return false;
				}
			});

			$("#menu").submit(function(){
				//var meja = $('#nomor-meja').text();
				//if(meja!=""){
					if(!($("form input:checkbox").is(":checked"))){
						swal('isi menu dulu!');
						return false;
					}else{
						var val;
						$('.jumlah_item').each(function() {
							if($(this).val()<=0 || $(this).val()==""){
								val='salah';
							}
						});
						if(val=='salah'){
							swal('jumlah belum diisi!');
							return false;
						}else{
							$.ajax({
								type: 'POST',
								url: 'sendorder.php',
								data: $('#menu').serialize(),//+'&nomeja='+meja,
								success:function(result){
									if(result=="yes"){
										swal({
										  title : 'Selamat Menikmati!',
										  type : 'success',
										  confirmButtonColor: '#3085d6',
										  confirmButtonText: 'OK!',
										}).then(function () {
											document.location="rincian_order.php?nama=$nama"
										});
									}else{
										alert(result);
									}
								}
							});
						}
					}
				/*
				}else{
					swal("Isi Nomor Meja Dulu!");
					return false;
				}
				*/
				return false;
			});
			/*
			$("#meja").submit(function(){
				var nomeja = $("#no").val();
				if(nomeja!=null){
					$.post('setmeja.php',{nomeja:nomeja},function(hasil){
						if(hasil=='no'){
							swal('Meja sudah dipesan!');
						}else{
							$("#nomor-meja").text(nomeja);
							$('#myModal').modal('hide');
						}
					});
				}
				return false;
			});
			*/
		});

		function hitung(jumlah,id){
			var harga =$('td #'+id).parent().prev().text();
			var jml = harga * jumlah;

			$('td #'+id).parent().next().children().val(jml);
			total();
		}
		function total(){
			var total=0;
			$('input[name^="jml"]').each(function() {
				total = total + parseInt($(this).val());
			});
			$('#totalbayar').val(total);
		}

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
		.navbar-rincian{
			padding:11px 0px;
			background-color:#fa8500;
			color:white;
		}
	.navbar-default, .nav-justified li{
			border-radius:0px;
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
	.button{
		background-color: #0099cc;
		color: white;
		margin-top: 15px;
		border-radius: 20px;
		border-color: none;
	}
	.tables{
		margin-top: 30px;
	}

	.black{
		color:black;
	}

	/* sticky button */

	#feedback1 {
    	height: 0px;
    	width: 85px;
    	position: fixed;
    	right: 0;
    	top: 30%;
    	z-index: 1000;
    	transform: rotate(-90deg);
    	-webkit-transform: rotate(-90deg);
   		-moz-transform: rotate(-90deg);
    	-o-transform: rotate(-90deg);
    	filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
	}

	#feedback1 a {
		display: block;
		background:url(pc.png) no-repeat;
		height: 52px;
		width: 155px;
		color: #fff;
		font-family: Arial, sans-serif;
		font-size: 17px;
		font-weight: bold;
		text-decoration: none;

	}
	#feedback1 a:hover {
		background:url(pc-over.png) no-repeat;
	}

	#feedback {
		height: 0px;
		width: 85px;
		position: fixed;
		right: 0;
		top: 50%;
		z-index: 1000;
		transform: rotate(-90deg);
		-webkit-transform: rotate(-90deg);
		-moz-transform: rotate(-90deg);
		-o-transform: rotate(-90deg);
		filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
	}
	#feedback a {
		display: block;
		background:#f45642;
		height: 52px;
		padding-top: 10px;
		width: 155px;
		text-align: center;
		color: #fff;
		font-family: Arial, sans-serif;
		font-size: 17px;
		font-weight: bold;
		text-decoration: none;
	}
	#feedback a:hover {
		background:#00495d;
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
                                <a href="#pesan_menu" class="menu__link"> Pesan Menu </a>
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

	<div id="feedback">
			<a href="rating.php">RATE NOW</a>
	</div>

<!--menu-->
<div class="brands">
	<div class="container">
	<section id="pesan_menu">
	<div class="brands">
	<h3>Pesan Menu</h3>
		<div class="row" style="margin:0px; margin-top:50px;">

		<form action="rincian_order.php?nama=$nama" method="post" id="menu">
				<div class="daftar-menu col-md-12">
					<nav class="men">
						<ul class="nav nav-tabs nav-justified" style="background-color:white;">
							<li role="presentation"><a href="#makanan" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">Makanan</a></li>
							<li role="presentation"><a href="#minuman" role="tab" id="tours-tab" data-toggle="tab" aria-controls="tours">Minuman</a></li>
						</ul>
					</nav>

					<div id="box-men">
						<div class="makanan" id="makanan" style="border:0px solid grey;">

								<div class="box-food">
									<?php //include'load_menu_makanan.php';?>
									<?php

										$sql="SELECT * FROM menu WHERE jenis_menu='Makanan'";
										$result=$mysqli->query($sql);

										while($row=mysqli_fetch_assoc($result)){
											echo'<div class="col-md-4 top_brand_left">
													<div class="hover14 column">
														<div class="agile_top_brand_left_grid">
															<div class="agile_top_brand_left_grid_pos">
																</div>
																<div class="agile_top_brand_left_grid1">
																	<figure>
																		<div class="snipcart-item block" >
																			<div class="snipcart-thumb">';
											echo'<label class="box text-center">
													<img class="img-responsive" src="asset/images/'.$row['gambar'].'" ><br><h4>'.$row['nama_menu'].'</h4><br>
													<div class="btn btn-success">
														Rp. '.$row['harga']. '
														<input class="checkbox-primary" name="food[]" value="'.$row['id'].'" type="checkbox">
													</div>
												</label>';
											echo'		</div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>';
										}
									?>
								</div>
							</div>


						<div class="minuman" id="minuman" style="border:0px solid grey; display:none;">
							<div class="box-food">
									<?php //include'load_menu_minuman.php';?>
									<?php

										$sql="SELECT * FROM menu WHERE jenis_menu='Minuman'";
										$result=$mysqli->query($sql);

										while($row=mysqli_fetch_assoc($result)){
											echo'<div class="col-md-4 top_brand_left">
													<div class="hover14 column">
														<div class="agile_top_brand_left_grid">
															<div class="agile_top_brand_left_grid_pos">
																</div>
																<div class="agile_top_brand_left_grid1">
																	<figure>
																		<div class="snipcart-item block" >
																			<div class="snipcart-thumb">';
											echo'<label class="box text-center">
												 	<img class="img-responsive" src="asset/images/'.$row['gambar'].'"><br><h4>'.$row['nama_menu'].'</h4><br>
												 	<div class="btn btn-success">
														Rp. '.$row['harga'].'.  <input class="checkbox-primary" name="food[]" value="'.$row['id'].'" type="checkbox">
													</div>
												</label>';
											echo'		</div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>';
										}
									?>
							</div>
						</div>
						</div>
					</div>

					<div class="container tables">
					<div class="row" style="margin:0px;">


					<div class="rincian col-sm-12 tables">
					<p class="black">No Meja :

					<?php
					$username=$_SESSION['username'];
                    $sql="SELECT no_meja FROM meja where username='$username'";

                    if ($result=mysqli_query($mysqli,$sql)){
                          // Fetch one and one row
                          while ($row=mysqli_fetch_row($result)){
                     		printf ("%s\n",$row[0]);
                          }
                        // Free result set
                        mysqli_free_result($result);
                    }
					echo'<span class="pull-right">Jumlah Kursi : ';

					$sql="SELECT jumlah_kursi FROM meja where username='$username'";

                    if ($result=mysqli_query($mysqli,$sql)){
                          // Fetch one and one row
                          while ($row=mysqli_fetch_row($result)){
                     		printf ("%s\n",$row[0]);
                          }
                        // Free result set
                        mysqli_free_result($result);
					echo'</span>';
                    }
                  	?>
					</p>
					<nav class="nav nav-tabs navbar-rincian text-center">
						<i class="fa fa-list"></i> Rincian
					</nav>

					<div class="text-center" style="padding-top:0px;">
						<div class="menu">
							<table border="1" class="table table-bordered" id="tabeldetail" style="background-color:white;">
								<thead>
									<tr id="tr1">
										<th>Food/Drink</th>
										<th>Harga(@)</th>
										<th>Jumlah Pesanan</th>
										<th>Jumlah Harga</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td colspan=3 align="right">JUMLAH TOTAL</td>
										<td><center><input type="text" id="totalbayar" value=0 style="border:0px; padding-left:5px; width:130px;" name="total" readonly></center></td>
									</tr>
								</tbody>
							</table>
						</div><br/>


							<label>Waktu kedatangan</label>
	                            <input id="appt-time" type="time" name="appt-time" min="09:00" max="22:00"><span class="validity"></span>

							<label>Nama</label>
								<input type="text"  placeholder="Nama Lengkap" name="nama" id="form-name" data-error="Subject field is required" required>

							<label>No HP</label>
		 						<input type="text"  placeholder="Masukkan No HP" name="hp" id="form-name" data-error="Subject field is required" required>


						<button type="submit" class="submit btn btn-primary" name="submit"><i class="fa fa-send"></i> Pesan</button>
					</div>
				</div>
				</div>
			</div>
		</form>
		<?php
		if(isset($_POST['submit'])){
			$nama = $_POST['nama'];
			$waktu = $_POST['appt-time'];
		}
		 ?>
				</div>
			</div>
			  <div class="clearfix"></div>
          </div>
		</section>
	</div>





<!--//menu-->
    <!-- services -->
    <div class="panel-sec section-w3ls">
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

	<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
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
