<?php
	$sdbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="kafe";
	$link = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	
if(!$link){
	die("gagal konek dengan database:".mysqli_connect_errno()."-".mysqli_connect_error());
}
else{
 echo "berhasil konek";
 }
?>
