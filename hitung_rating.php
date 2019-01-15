<?php

$hasil = mysqli_query($mysqli, "SELECT AVG(rating) AS jml FROM rating WHERE id_menu ='$id'")->fetch_assoc();
if($hasil['rating'] == 1){
  echo '<i class="fa fa-star blue-star" aria-hidden="true"></i>';
}
if($hasil['rating'] == 2){
  echo '<i class="fa fa-star blue-star" aria-hidden="true"></i>';
  echo '<i class="fa fa-star blue-star" aria-hidden="true"></i>';
}
if($hasil['rating'] == 3){
  echo '<i class="fa fa-star blue-star" aria-hidden="true"></i>';
  echo '<i class="fa fa-star blue-star" aria-hidden="true"></i>';
  echo '<i class="fa fa-star blue-star" aria-hidden="true"></i>';
}
if($hasil['rating'] == 4){
  echo '<i class="fa fa-star blue-star" aria-hidden="true"></i>';
  echo '<i class="fa fa-star blue-star" aria-hidden="true"></i>';
  echo '<i class="fa fa-star blue-star" aria-hidden="true"></i>';
  echo '<i class="fa fa-star blue-star" aria-hidden="true"></i>';
}if($hasil['rating'] == 5){
  echo '<i class="fa fa-star blue-star" aria-hidden="true"></i>';
  echo '<i class="fa fa-star blue-star" aria-hidden="true"></i>';
  echo '<i class="fa fa-star blue-star" aria-hidden="true"></i>';
  echo '<i class="fa fa-star blue-star" aria-hidden="true"></i>';
  echo '<i class="fa fa-star blue-star" aria-hidden="true"></i>';
}
 ?>
