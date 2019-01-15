<?php
if(isset($_POST['submit'])){
if(!empty($_POST['check_list'])) {
// Counting number of checked checkboxes.
$checked_count = count($_POST['check_list']);
echo "List Pesanan: ".$checked_count." option(s): <br/>";
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected) {
  include 'koneksi.php';
  $username = $_SESSION['username'];
  $sql= mysqli_query($mysqli, "INSERT INTO pesanan(id_menu, username) values ('$selected','$username')");
echo "<p>".$selected ."</p>";
}
}
else{
echo "<b>Please Select Atleast One Option.</b>";
}
}
?>
