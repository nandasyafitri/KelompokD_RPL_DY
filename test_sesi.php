<?php include('server.php'); ?>
<?php
	session_start();
	if($_SESSION['login']==false){
		header('location: login.php');
	}
?>

<?php
include('koneksi.php');
$username =  $_SESSION['username'];
$no_meja = 18;
  $status = mysqli_query($mysqli, "SELECT status from meja where no_meja='$no_meja'");
	echo "hallo ".$username;
?>
<?php $users = mysqli_query($mysqli, "SELECT username FROM feedback ORDER BY id_feedback ASC");
			$feeds = mysqli_query($mysqli, "SELECT feedback FROM feedback ORDER BY id_feedback ASC");
 ?>
 <?php
	$result = mysqli_query($mysqli, "SELECT * FROM feedback");
 while($feed = mysqli_fetch_array($result)) {
	 echo '<div class="w3_testimonials_grids w3_testimonials_grids">
			 <div class="sreen-gallery-cursual">
					 <div id="owl-demo" class="owl-carousel">
							 <div class="item-owl">
									 <div class="col-md-3 col-sm-3 col-xs-3 img-agile">
											 <img src="asset_/images/s1.jpg" class="img-responsive" alt="" />
											 <h6>'.$feed['username'].'</h6>
									 </div>
									 <div class="col-md-9 col-sm-9 col-xs-9 test-review test-tooltip1">
											 <p>
													 <i class="fa fa-quote-left" aria-hidden="true"></i>'.$feed['feedback'].'
											 </p>
								 </div>
					 </div>
			 </div>
		 </div>
	 </div>';
 } ?>
