<?php include 'koneksi.php'; ?>
<?php
  if(isset($_POST['pesan_tempat'])){
    if(($_POST['no_meja']>0)&&($_POST['jumlah_kursi']>0)){
      $no_meja = $_POST['no_meja'];
      $jumlah_kursi = $_POST['jumlah_kursi'];
      $pemesan = $_POST['nama'];
      $tanggal = $_POST['tanggal'];
      $jam = $_POST['jam'];
      $hp = $_POST['hp'];
      $result = mysqli_query($mysqli, "UPDATE meja SET jumlah_kursi='$jumlah_kursi', status='tidak tersedia' where no_meja='$no_meja'");
      echo "Reservasi Meja berhasil";
    }
    else {
      echo "Reservasi Meja gagal";
    }
  }
  ?>
