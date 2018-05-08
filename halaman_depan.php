<?php
	session_start();
	if($_SESSION['login']==false){
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

    /* Create four equal columns that floats next to each other */
    .all_column{
      margin-left: 400px;
    }
    .all_column_1{
      margin-top: 0px;
      margin-left: 400px;
      margin-bottom: 0px;

    }
    .column {
        margin-top: 0px;
        float: left;
        width: 15%;
        padding: 10px;
        margin-right: 10px;
    }
    .column img{
      width: 50%;
      margin-left: 35px;
      margin-bottom: 30px;
    }
    .column h2{
      margin: 0px;
    }
    .column_1 {
      margin-top: 100px;
      margin-right: 10px;
        float: left;
        width: 15%;
        padding: 10px;

    }
    .column_1 img{
      width: 50%;
      margin-left: 35px;
      margin-bottom: 30px;
    }
    .column_1 h2{
      margin: 0px;
    }
    /* Clear floats after the columns */
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
     .overlay .{
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      height: 100%;
    width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #fff;
}

.container:hover .overlay {
  opacity: 1;
}

.text {
  color: #000;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
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
          <li class="active"><a href="#">Reservasi Meja</a></li>
          <li><a href="#">Pesan Menu</a></li>
          <li><a href="#">Order</a></li>
          <li><a href="#">Feedback</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>
  <div class="content">
    <?php if(isset($_SESSION['success'])): ?>
      <div class="error success">
        <h3>
          <?php
              echo $_SESSION['success'];
              unset($_SESSION['success']);
           ?>
        </h3>
      </div>
    <?php endif ?>

    <?php if(isset($_SESSION['username'])): ?>
      <p>Welcome  <strong><?php echo $_SESSION['username']; ?></strong></p>
      <p><a href="index.php">Logout</a></p>
    <?php endif ?>
  </div>
<section id="tempat">
<div class="all_column">
  <div class="row">
    <div class="column_1" style="background-color:#b3e6ff;">
      <h2>1</h2>
      <img src="img\icons\ta.png"/>
    </div>
    <div class="column_1" style="background-color:#e0e0d1;">
      <h2>2</h2>
      <img src="img\icons\ta.png"/>
    </div>
    <div class="column_1" style="background-color:#b3e6ff;">
      <h2>3</h2>
      <img src="img\icons\ta.png"/>
    </div>
    <div class="column_1" style="background-color:#e0e0d1;">
      <h2>4</h2>
      <img src="img\icons\ta.png"/>
    </div>
  </div>
</div>
<div class="all_column_1">
  <div class="row">
    <div class="column" style="background-color:#e0e0d1;">
      <h2>5</h2>
      <img src="img\icons\ta.png"/>
    </div>
    <div class="column" style="background-color:#b3e6ff;">
      <h2>6</h2>
      <img src="img\icons\ta.png"/>
    </div>
    <div class="column" style="background-color:#e0e0d1;">
      <h2>7</h2>
      <img src="img\icons\ta.png"/>
    </div>
    <div class="column" style="background-color:#b3e6ff;">
      <h2>8</h2>
      <img src="img\icons\ta.png"/>
    </div>
  </div>
</div>
<div class="all_column_1">
  <div class="row">
    <div class="column" style="background-color:#b3e6ff;">
      <h2>9</h2>
      <img src="img\icons\ta.png"/>
    </div>
    <div class="column" style="background-color:#e0e0d1;">
      <h2>10</h2>
      <img src="img\icons\ta.png"/>
    </div>
    <div class="column" style="background-color:#b3e6ff;">
      <h2>11</h2>
      <img src="img\icons\ta.png"/>
    </div>
    <div class="column" style="background-color:#e0e0d1;">
      <h2>12</h2>
      <img src="img\icons\ta.png"/>
    </div>
  </div>
</div>
<div class="all_column_1">
  <div class="row">
    <div class="column" style="background-color:#e0e0d1;">
      <h2>13</h2>
      <img src="img\icons\ta.png"/>
    </div>
    <div class="column" style="background-color:#b3e6ff;">
      <h2>14</h2>
      <img src="img\icons\ta.png"/>
    </div>
    <div class="column" style="background-color:#e0e0d1;">
      <h2>15</h2>
      <img src="img\icons\ta.png"/>
    </div>
    <div class="column" style="background-color:#b3e6ff;">
      <h2>16</h2>
      <img src="img\icons\ta.png"/>
    </div>
  </div>
</div>

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
