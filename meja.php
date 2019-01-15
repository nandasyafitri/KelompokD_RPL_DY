<?php
$databaseHost = 'localhost';
$databaseName = 'rpl';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM meja ORDER BY id ASC");

 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <?php
 $tgl=date('d-m-Y');
 echo $tgl;
 ?>
     <title>Reservasi Meja</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
     Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
     <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
     		function hideURLbar(){ window.scrollTo(0,1); } </script>
     <!-- //for-mobile-apps -->
     <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
     <link href="css/style_1.css" rel="stylesheet" type="text/css" media="all" />
     <!-- font-awesome icons -->
     <link href="css/font-awesome.css" rel="stylesheet">
     <!-- //font-awesome icons -->
     <!-- js -->
     <script src="js/jquery-1.11.1.min.js"></script>
     <!-- //js -->
     <link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
     <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
     <!-- start-smoth-scrolling -->
     <script type="text/javascript" src="js/move-top.js"></script>
     <script type="text/javascript" src="js/easing.js"></script>
     <script type="text/javascript">
     	jQuery(document).ready(function($) {
     		$(".scroll").click(function(event){
     			event.preventDefault();
     			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
     		});
     	});
     </script>
     <!-- start-smoth-scrolling -->

 </head>

 <body>
<p>MENU<br></p>
<h6><?php $result = mysqli_query($mysqli,"SELECT * FROM menu order by id asc");
      $hasil = mysqli_fetch_array($result);
     ?>
 </h6>
<p>Tambah meja</br></p>
<form action="meja.php" method="post" name="form">
  <table width="25%" border="0">
    <tr>
      <td>No Meja</td>
      <td><input type="text" name="no_meja"></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" name="Tambah" value="Tambah"></td>
    </tr>
  </table>
  <?php
    if(isset($_POST['Tambah'])){
      if($_POST['no_meja']>0){
        $no_meja = $_POST['no_meja'];
        $sql= mysqli_query($mysqli, "INSERT INTO meja(no_meja) values ('$no_meja')");
      }
      if(!mysqli_query($mysqli, $sql)){
          echo "Not";
      }
      else{
        echo "Yes";
      }
  }
    ?>
</form>

<form action="meja.php" method="post" name="hapus">
  <table width="25%" border="0">
    <tr>
      <td>No Meja</td>
      <td><input type="text" name="no_meja"></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" name="Hapus" value="Hapus"></td>
    </tr>
  </table>
  <?php
    if(isset($_POST['Hapus'])){
      if($_POST['no_meja']>0){
        $no_meja = $_POST['no_meja'];
        $sql= mysqli_query($mysqli, "DELETE from meja where no_meja='$no_meja'");
      }
      if(!mysqli_query($mysqli, $sql)){
          echo "Not";
      }
      else{
        echo "Yes";
      }
  }
    ?>
</form>


 <p>Meja Yang Available: </p>
         <p>Pesan Meja</p>
   	<form action="meja.php" method="post" name="form1">
   		<table width="25%" border="0">
   			<tr>
   				<td>No Meja</td>
   				<td><input type="text" name="no_meja"></td>
   			</tr>
   			<tr>
   				<td>Jumlah Kursi</td>
   				<td><input type="text" name="jumlah_kursi"></td>
   			</tr>
   			<tr>
   				<td></td>
   				<td><input type="submit" name="Pesan_kursi" value="Pesan"></td>
   			</tr>
   		</table>
      <?php
        if(isset($_POST['Pesan_kursi'])){
          if(($_POST['no_meja']>0)&&($_POST['jumlah_kursi']>0)){
            $no_meja = $_POST['no_meja'];
            $jumlah_kursi = $_POST['jumlah_kursi'];
            $result = mysqli_query($mysqli, "UPDATE meja SET jumlah_kursi='$jumlah_kursi', status='tidak tersedia' where no_meja='$no_meja'");
            echo "Reservasi Meja serta Jumlah kursi berhasil";
          }
          else {
            echo "Reservasi Meja gagal";
          }
        }
        ?>
   	</form>
    <!--Tampilkan Data Meja-->
    <h2>DATA MEJA</h2>
    <table width='20%' border="1">
      <tr>
        <th>No Meja</th> <th>Pesanan Kursi</th> <th>Status</th>
      </tr>
        <?php
        $result = mysqli_query($mysqli, "SELECT * FROM meja ");
        while($meja = mysqli_fetch_array($result)) {
            echo "<td>".$meja['no_meja']."</td>";
            echo "<td>".$meja['jumlah_kursi']."</td>";
            echo "<td>".$meja['status']."</td></tr>";
        }
      ?>
    </table>
    <section id="pilih_meja">
      <div class="brands">
        <div class="container">
        <h3>Reservasi Meja</h3>
          <div class="brands-agile">
            <div class="col-md-2 w3layouts-brand">
              <div class="brands-w3l">
                <p><a href="#">no : 1<br><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=1");
                  $hasil = mysqli_fetch_array($result);
                  if($hasil['status']=='tersedia'){
                  echo "Tersedia";
                }else {
                  echo "Tidak Tersedia";
                }
                 ?></a></p>
              </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
              <div class="brands-w3l">
                <p><a href="#">no : 2<br><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=2");
                  $hasil = mysqli_fetch_array($result);
                  if($hasil['status']=='tersedia'){
                  echo "Tersedia";
                }else {
                  echo "Tidak Tersedia";
                }
                 ?></a></p>
              </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
              <div class="brands-w3l">
                <p><a href="#">no : 3<br><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=3");
                  $hasil = mysqli_fetch_array($result);
                  if($hasil['status']=='tersedia'){
                  echo "Tersedia";
                }else {
                  echo "Tidak Tersedia";
                }
                 ?></a></p>
              </div>
            </div>

            <div class="col-md-2 w3layouts-brand">
              <div class="brands-w3l">
                <p><a href="#">no : 4<br><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=4");
                  $hasil = mysqli_fetch_array($result);
                  if($hasil['status']=='tersedia'){
                  echo "Tersedia";
                }else {
                  echo "Tidak Tersedia";
                }
                 ?></a></p>
              </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
              <div class="brands-w3l">
                <p><a href="#">no : 5<br><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=5");
                  $hasil = mysqli_fetch_array($result);
                  if($hasil['status']=='tersedia'){
                  echo "Tersedia";
                }else {
                  echo "Tidak Tersedia";
                }
                 ?></a></p>
              </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
              <div class="brands-w3l">
                <p><a href="#">no : 6<br><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=6");
                  $hasil = mysqli_fetch_array($result);
                  if($hasil['status']=='tersedia'){
                  echo "Tersedia";
                }else {
                  echo "Tidak Tersedia";
                }
                 ?></a></p>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="brands-agile-1">
            <div class="col-md-2 w3layouts-brand">
              <div class="brands-w3l">
                <p><a href="#">no : 7<br><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=7");
                  $hasil = mysqli_fetch_array($result);
                  if($hasil['status']=='tersedia'){
                  echo "Tersedia";
                }else {
                  echo "Tidak Tersedia";
                }
                 ?></a></p>
              </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
              <div class="brands-w3l">
                <p><a href="#">no: 8<br><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=8");
                  $hasil = mysqli_fetch_array($result);
                  if($hasil['status']=='tersedia'){
                  echo "Tersedia";
                }else {
                  echo "Tidak Tersedia";
                }
                 ?></a></p>
              </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
              <div class="brands-w3l">
                <p><a href="#">no : 9<br><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=9");
                  $hasil = mysqli_fetch_array($result);
                  if($hasil['status']=='tersedia'){
                  echo "Tersedia";
                }else {
                  echo "Tidak Tersedia";
                }
                 ?></a></p>
              </div>
            </div>

            <div class="col-md-2 w3layouts-brand">
              <div class="brands-w3l">
                <p><a href="#">no : 10<br><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=10");
                  $hasil = mysqli_fetch_array($result);
                  if($hasil['status']=='tersedia'){
                  echo "Tersedia";
                }else {
                  echo "Tidak Tersedia";
                }
                 ?></a></p>
              </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
              <div class="brands-w3l">
                <p><a href="#">no :11<br><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=11");
                  $hasil = mysqli_fetch_array($result);
                  if($hasil['status']=='tersedia'){
                  echo "Tersedia";
                }else {
                  echo "Tidak Tersedia";
                }
                 ?></a></p>
              </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
              <div class="brands-w3l">
                <p><a href="#">no : 12<br><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=12");
                  $hasil = mysqli_fetch_array($result);
                  if($hasil['status']=='tersedia'){
                  echo "Tersedia";
                }else {
                  echo "Tidak Tersedia";
                }
                 ?></a></p>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="brands-agile-2">
            <div class="col-md-2 w3layouts-brand">
              <div class="brands-w3l">
                <p><a href="#">no : 13<br><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=13");
                  $hasil = mysqli_fetch_array($result);
                  if($hasil['status']=='tersedia'){
                  echo "Tersedia";
                }else {
                  echo "Tidak Tersedia";
                }
                 ?></a></p>
              </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
              <div class="brands-w3l">
                <p><a href="#">no : 14<br><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=14");
                  $hasil = mysqli_fetch_array($result);
                  if($hasil['status']=='tersedia'){
                  echo "Tersedia";
                }else {
                  echo "Tidak Tersedia";
                }
                 ?></a></p>
              </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
              <div class="brands-w3l">
                <p><a href="#">no : 15<br><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=15");
                  $hasil = mysqli_fetch_array($result);
                  if($hasil['status']=='tersedia'){
                  echo "Tersedia";
                }else {
                  echo "Tidak Tersedia";
                }
                 ?></a></p>
              </div>
            </div>

            <div class="col-md-2 w3layouts-brand">
              <div class="brands-w3l">
                <p><a href="#">no : 16<br><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=16");
                  $hasil = mysqli_fetch_array($result);
                  if($hasil['status']=='tersedia'){
                  echo "Tersedia";
                }else {
                  echo "Tidak Tersedia";
                }
                 ?></a></p>
              </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
              <div class="brands-w3l">
                <p><a href="#">no : 17<br><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=17");
                  $hasil = mysqli_fetch_array($result);
                  if($hasil['status']=='tersedia'){
                  echo "Tersedia";
                }else {
                  echo "Tidak Tersedia";
                }
                 ?></a></p>
              </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
              <div class="brands-w3l">
                <p><a href="#">no : 18<br><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=18");
                  $hasil = mysqli_fetch_array($result);
                  if($hasil['status']=='tersedia'){
                  echo "Tersedia";
                }else {
                  echo "Tidak Tersedia";
                }
                 ?></a></p>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </section>
 </body>
 </html>
