<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Feedback</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="color/default.css" rel="stylesheet">
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
          <li><a href="#">Reservasi Meja</a></li>
          <li><a href="#">Pesan Menu</a></li>
          <li><a href="#">Order</a></li>
          <li class="#"><a href="#">Feedback</a></li>
          <li><a href="login.php">Logout</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>
  
<!-- writefeedback -->
<section id="writefeedback" class="home-section text-center">
<div class="container">
    <div class="home-section text-center">
        <div class="register">
            <div class="login-form-grids">

              <h5>Feedback Pengunjung</h5>
         <form action="feedback.php" method="POST">
					 <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="username"> Username:</label>
                                <input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="feedback"> Feedback Anda:</label>
                                <textarea class="form-control" type="textarea" name="feedback" id="feedback" placeholder="Sampaikan Feedback anda disini..." maxlength="6000" rows="7"></textarea>
                            </div>
                        </div>
                               <input type="submit" class="btn btn-success btn-block" name="kirim" value="Kirim" />
                        </div>
                    </form>
        </div>

    </div>
</div>
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
