<?php
	session_start();
	if($_SESSION['login']==false){
		header('location: loginkaryawan.php');
	}
?>
<?php
	echo "ini halaman admin"
?>