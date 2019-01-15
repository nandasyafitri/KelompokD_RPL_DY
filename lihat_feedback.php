<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.container {
  border: 3px solid #ccc;
  background: linear-gradient(#D3CCE3,#E9E4F0);
  border-radius: 5px;
  padding: 16px;
  padding-right: 80px;
  margin-left: 200px;
  margin-right: 200px;
  margin-bottom: 20px;
  font-family: "century gothic";
}
h2{
  font-family: Tahoma;
}
.container::after {
  content: "";
  clear: both;
  display: table;
}
.container span {
  font-size: 20px;
  margin-right: 15px;
}

@media (max-width: 500px) {
  .container {
      text-align: center;
  }
  .container img {
      margin: auto;
      float: none;
      display: block;
  }
}
.button {
    background-color: #33ccff;
    border: none;
    color: white;
    padding: 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 24px;
    margin-right: 200px;
    cursor: pointer;
    float: right;
}

.button5 {border-radius: 40%;}
</style>
</head>
<body>

<center><h2>Feedback Pengunjung</h2></center>

<?php include('koneksi.php');?>
<?php $users = mysqli_query($mysqli, "SELECT username FROM feedback ORDER BY id_feedback ASC");
      $feeds = mysqli_query($mysqli, "SELECT feedback FROM feedback ORDER BY id_feedback ASC");
 ?>
  <table width='100%'>
      <?php
      $result = mysqli_query($mysqli, "SELECT * FROM feedback");
      while($feed = mysqli_fetch_array($result)) {
        echo "<td>"."<div class=\"container\">"."<b>".$feed['username']."</b>"."<br>"."<br>".$feed['feedback']."</td>"."</tr>";
      }
    ?>
  </table>
  <center><a href="feedback.php"><p>Kembali ke Feedback</p></a></center>
<a href="feedback.php" button class="button button5"><b>+</b></button></a>
</body>
</html>
