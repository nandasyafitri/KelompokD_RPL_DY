<?php include('session.php'); ?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Order A Cake Responsive Widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Order A Cake template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs Sign up Web Templates,
 Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link rel="stylesheet" type="text/css" href="assets/css/easy-responsive-tabs.css " />
<link href="assets/css/style.css" rel='stylesheet' type='text/css' />
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Playball" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
<!--//fonts-->
</head>
<body>
<!-- login -->
<!--database-->
<!--//database-->

<div class="login-section">
	<h1 class="agileits-title">Order Form</h1>
	<h2 class="sub-head-w3-agileits">Lengkapi pesanan Anda!</h2>
	<div class="container login-w3l">
		<div class="login-form">
			<form action="form_order.php" method="post">
				<div class="agileits-location">
					<h1 style="color: #fff;">Jumlah</h1>
          <?php
          include 'koneksi.php';
          if(isset($_POST['submit'])){
          if(!empty($_POST['check_list'])) {
          foreach($_POST['check_list'] as $selected) {?>
            <label value=""><?php  echo "$selected"."<br>"?><input type="number" name="jumlah" min=0 placeholder="Jumlah pesanan" required="required" /></label>
            <div class="clear"></div>
      <?php  }
        }

        }
        ?>
  </div>
     <div class="clear"></div>
   <div class="clear"></div>
 </form>
				<!--Horizontal Tab-->
				<div id="parentHorizontalTab_agile">
					<ul class="resp-tabs-list hor_1">
						<li>pickup</li>
						<li>delivery</li>
					</ul>
					<div class="resp-tabs-container hor_1">
					   <div class="agile_its_registration">
							<form action="#" method="post" class="agile_form">
							  <input type="text" name="username" placeholder="Your name" required="required" />
							  <input type="email" name="username" placeholder="Your email" required="required" />
							  <input type="text" name="username" placeholder="Phone number"  required="required" />
							  <input type="submit" value="order" class="agileinfo" />
							</form>
						</div>
						<div class="agile_its_registration">
							<form action="#" method="post" class="agile_form">
							  <input type="text" name="username" placeholder="Your name" required="required" />
							  <input type="email" name="username" placeholder="Your email" required="required" />
							  <input type="text" name="username" placeholder="Phone number"  required="required" />
							  <textarea id="message" name="message" placeholder="Address"></textarea>
							  <input type="submit" value="order" class="agileinfo" />
							</form>
						</div>
					</div>
				</div>
			 <!-- //Horizontal Tab -->
		</div>
	</div>
</div>
<div class="agileits_w3layouts_copyright text-center">
	<p>© 2017 Order A Cake. All rights reserved | Design by <a href="//w3layouts.com/">W3layouts</a></p>
</div>
		<!--js-->
				<script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
		<!--//js-->
		<!--tabs-->
		<script src="assets/js/easyResponsiveTabs.js"></script>
		<script type="text/javascript">
		$(document).ready(function() {
			//Horizontal Tab
			$('#parentHorizontalTab_agile').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				tabidentify: 'hor_1', // The tab groups identifier
				activate: function(event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#nested-tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
		});
		</script>
		<!--//tabs-->
</body>
</html>
