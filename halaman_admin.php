<?php
	session_start();
	if($_SESSION['login']==false){
		header('location: loginkaryawan.php');
	}
?>
<?php
	echo "ini halaman admin. Welcome"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<title>Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="color/default.css" rel="stylesheet">
    <style>
    * {
        box-sizing: border-box;
    }


    /* Clear floats after the columns edit */
    .row:after {
        padding-bottom: 20px;
        content: "";
        display: table;
        clear: both;
    }

    /* Responsive layout - makes a two column-layout instead of four columns */
    @media screen and (max-width: 900px) {
        .column  {
            width: 50%;
        }
    }

    /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
        .column  {
            width: 100%;
        }
    }
    .container .container:hover .image .column_1 .column {
      opacity: 0.3;
    }

    .container:hover .middle {
    opacity: 1;
  }

table {
    width: 50%;
		margin-bottom: 10px;
	}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
    text-align: center;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color: #fff;
}
table#t01 th {
    background-color: grey;
    color: white;
}
    </style>

</head>
<body id="page-top" class="bg-light" data-spy="scroll" data-target=".navbar-custom">

  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
        <a class="navbar-brand" href="index.html">
          <h1>D'CAFFE-IN</h1>
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#tempat">Reservasi Meja</a></li>
          <li><a href="#">Pesan Menu</a></li>
          <li><a href="#">Order</a></li>
          <li><a href="#">Feedback</a></li>
          <li><a href="login.php">Logout</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>
<section id="edit_menu">
	<center><h3><br><br><br><br>EDIT MENU<br></h3></center>
	<center><table id="t01">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
  <tr>
    <td>John</td>
    <td>Doe</td>
    <td>80</td>
  </tr>
</table></center>

</section>
<section id="edit_tempat">
	<center><table id="t01">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
  <tr>
    <td>John</td>
    <td>Doe</td>
    <td>80</td>
  </tr>
</table></center>

</section>
<section id="edit_feedback">
	<center><h3>Edit feedback</h3></center>
	<center><table id="t01">
  <tr>
    <th>id_feedback</th>
    <th>username</th>
    <th>isi feedback</th>
  </tr>
	<?php
	include('koneksi.php');
	$result = mysqli_query($mysqli, "SELECT * FROM feedback ORDER BY id_feedback ASC");
	while($feed = mysqli_fetch_array($result)) {
			echo "<td>".$feed['id_feedback']."</td>";
			echo "<td>".$feed['username']."</td>";
			echo "<td>".$feed['feedback']."</td></tr>";
	}
?>
</table></center>

<center><div class="container">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Hapus feedback</button>
  <div id="demo" class="collapse">
		<p>hallo</p>
  </div>
</div></center>

</section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <div class="wow shake" data-wow-delay="0.4s">
            <div class="page-scroll marginbot-30">
              <a href="#register" id="totop" class="btn btn-circle">
              <i class="fa fa-angle-double-up animated"></i>
            </a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </footer>

  <!-- Core JavaScript Files -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/jquery.scrollTo.js"></script>
  <script src="js/wow.min.js"></script>
  <!-- Custom Theme JavaScript -->
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
  </body>
  </html>
