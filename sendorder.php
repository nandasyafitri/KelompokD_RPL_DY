<?php 
	session_start();
	date_default_timezone_set("asia/jakarta");
	include'koneksi.php';
	
	$no_menu = $_POST['food'];
	$jumlah_pesan = $_POST['jumlah'];
	
	$date = date("Y-m-d h:i:sa");
	$pemesan = $_POST['nama'];															 
	$jam = $_POST['appt-time'];
	$hp = $_POST['hp'];
	
	$jamnow= new DateTime();	
	$dteEnd = date_timezone_set($jamnow, timezone_open('asia/jakarta'));
	$dteStart = new DateTime($jam); 
   	
	if($dteEnd < $dteStart){
		$username=$_SESSION['username'];
		$sqltab="SELECT no_meja FROM meja where username='$username'";
		for($i=0; $i<count($no_menu); $i++){
			$notable=$mysqli->query($sqltab);
			$notables=$notable->fetch_assoc();
			$sql="SELECT harga FROM menu WHERE id='$no_menu[$i]'";
			$hrg=$mysqli->query($sql);
			$harga=$hrg->fetch_assoc();
			$insert_tambah = "INSERT INTO pesanan(id_menu,harga,jumlah_pesanan,username,no_meja,waktu,nama,no_hp,arrival) VALUES ('$no_menu[$i]','$harga[harga]','$jumlah_pesan[$i]','$username','$notables[no_meja]','$date','$pemesan','$hp','$jam')";
			$mysqli->query($insert_tambah);
		}
		echo"yes";
	} else{
		echo"Time not valid";
	}
?>