<?php
	include'koneksi.php';
	$sql="SELECT * FROM menu WHERE kategori='makanan'";
	$result=$mysqli->query($sql);
	while($row=mysqli_fetch_assoc($result)){
		echo'<label class="box text-center">
				<img src="asset/images/'.$row['gambar'].'" width="140" height="100"><h4>'.$row['nama_menu'].'</h4>
								<i class="fa fa-dollar"></i> Rp. '.$row['harga'].'<br>Lama Pembuatan : '.$row['lama_pembuatan'].' menit <br>Rating :  '.$row['rating'].'
					<input type="checkbox" name="check_list[]" value="'.$row['nama_menu'].'">

			</label>';
			}
?>
