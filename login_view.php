<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="asset/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="asset/css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="asset/css/style.css" rel="stylesheet">
    <link href="asset/color/default.css" rel="stylesheet">
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
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#register">Register</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="login.php">Login Pengunjung</a></li>
              <li><a href="login.php">Login Karyawan</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>

  <!-- breadcrumbs -->
    <div class="breadcrumbs">
      <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
          <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
          <li class="active">Halaman Login</li>
        </ol>
      </div>
    </div>
  <!-- //breadcrumbs -->

<!-- register -->
<section id="register" class="home-section text-center">
<div class="container">
    <div class="home-section text-center">
        <div class="register">
            <div class="login-form-grids">
              <h5>Data Login</h5>
        <form action="" method="POST">

            <div class="form-group">
                <p for="username">Username</p>
                <input class="form-control" type="text" name="username" placeholder="Contoh: nandasyafitri" />
            </div>

            <div class="form-group">
                <p for="password">Password</p>
                <input class="form-control" type="password" name="password" placeholder="masukkan password" />
            </div>
            <?php if ($this->session->flashdata('msgg') == TRUE) : ?>
              <div class="alert alert-danger fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Info!</strong><?php echo $this->session->flashdata('msgg')?>
              </div>
            <?php endif; ?>

            <?php if ($this->session->flashdata('msg') == TRUE) : ?>

              <div class="alert alert-danger fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Info!</strong><?php echo $this->session->flashdata('msg')?>
              </div>

            <?php endif; ?>
            <input type="submit" class="btn btn-success btn-block" value="login" />
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
            <a href="#intro" id="totop" class="btn btn-circle">
            <i class="fa fa-angle-double-up animated"></i>
          </a>
          </div>
        </div>
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Squadfree
          -->
          <a href="https://bootstrapmade.com/bootstrap-one-page-templates/"></a>
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
