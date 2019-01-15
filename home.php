<?php include('koneksi.php'); ?>
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style_1.css" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

    <title>Home</title>
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
            <li class="active"><a href="#tempat">Reservasi Meja</a></li>
            <li><a href="#">Pesan Menu</a></li>
            <li><a href="#">Order</a></li>
            <li><a href="#">Feedback</a></li>
            <li><a href="login.php">Logout</a></li>
          </ul>
        </div>
        <section id="pilih_meja">
          <div class="brands">
            <div class="container">
            <h3>Reservasi Meja</h3>
              <div class="brands-agile">
                <div class="col-md-2 w3layouts-brand">
                  <div class="brands-w3l">
                    <p><a href="#">no : 1<br><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=1");
                      $hasil = mysqli_fetch_array($result);
                      if($hasil['status']=='tersedia'){
                      echo "Tersedia";
                    }else {
                      echo "Tidak Tersedia";
                    }
                     ?></a></p>
                  </div>
                </div>
                <div class="col-md-2 w3layouts-brand">
                  <div class="brands-w3l">
                    <p><a href="#">no : 2<br><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=2");
                      $hasil = mysqli_fetch_array($result);
                      if($hasil['status']=='tersedia'){
                      echo "Tersedia";
                    }else {
                      echo "Tidak Tersedia";
                    }
                     ?></a></p>
                  </div>
                </div>
                <div class="col-md-2 w3layouts-brand">
                  <div class="brands-w3l">
                    <p><a href="#">no : 3<br><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=3");
                      $hasil = mysqli_fetch_array($result);
                      if($hasil['status']=='tersedia'){
                      echo "Tersedia";
                    }else {
                      echo "Tidak Tersedia";
                    }
                     ?></a></p>
                  </div>
                </div>

                <div class="col-md-2 w3layouts-brand">
                  <div class="brands-w3l">
                    <p><a href="#">no : 4<br><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=4");
                      $hasil = mysqli_fetch_array($result);
                      if($hasil['status']=='tersedia'){
                      echo "Tersedia";
                    }else {
                      echo "Tidak Tersedia";
                    }
                     ?></a></p>
                  </div>
                </div>
                <div class="col-md-2 w3layouts-brand">
                  <div class="brands-w3l">
                    <p><a href="#">no : 5<br><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=5");
                      $hasil = mysqli_fetch_array($result);
                      if($hasil['status']=='tersedia'){
                      echo "Tersedia";
                    }else {
                      echo "Tidak Tersedia";
                    }
                     ?></a></p>
                  </div>
                </div>
                <div class="col-md-2 w3layouts-brand">
                  <div class="brands-w3l">
                    <p><a href="#">no : 6<br><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=6");
                      $hasil = mysqli_fetch_array($result);
                      if($hasil['status']=='tersedia'){
                      echo "Tersedia";
                    }else {
                      echo "Tidak Tersedia";
                    }
                     ?></a></p>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="brands-agile-1">
                <div class="col-md-2 w3layouts-brand">
                  <div class="brands-w3l">
                    <p><a href="#">no : 7<br><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=7");
                      $hasil = mysqli_fetch_array($result);
                      if($hasil['status']=='tersedia'){
                      echo "Tersedia";
                    }else {
                      echo "Tidak Tersedia";
                    }
                     ?></a></p>
                  </div>
                </div>
                <div class="col-md-2 w3layouts-brand">
                  <div class="brands-w3l">
                    <p><a href="#">no: 8<br><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=8");
                      $hasil = mysqli_fetch_array($result);
                      if($hasil['status']=='tersedia'){
                      echo "Tersedia";
                    }else {
                      echo "Tidak Tersedia";
                    }
                     ?></a></p>
                  </div>
                </div>
                <div class="col-md-2 w3layouts-brand">
                  <div class="brands-w3l">
                    <p><a href="#">no : 9<br><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=9");
                      $hasil = mysqli_fetch_array($result);
                      if($hasil['status']=='tersedia'){
                      echo "Tersedia";
                    }else {
                      echo "Tidak Tersedia";
                    }
                     ?></a></p>
                  </div>
                </div>

                <div class="col-md-2 w3layouts-brand">
                  <div class="brands-w3l">
                    <p><a href="#">no : 10<br><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=10");
                      $hasil = mysqli_fetch_array($result);
                      if($hasil['status']=='tersedia'){
                      echo "Tersedia";
                    }else {
                      echo "Tidak Tersedia";
                    }
                     ?></a></p>
                  </div>
                </div>
                <div class="col-md-2 w3layouts-brand">
                  <div class="brands-w3l">
                    <p><a href="#">no :11<br><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=11");
                      $hasil = mysqli_fetch_array($result);
                      if($hasil['status']=='tersedia'){
                      echo "Tersedia";
                    }else {
                      echo "Tidak Tersedia";
                    }
                     ?></a></p>
                  </div>
                </div>
                <div class="col-md-2 w3layouts-brand">
                  <div class="brands-w3l">
                    <p><a href="#">no : 12<br><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=12");
                      $hasil = mysqli_fetch_array($result);
                      if($hasil['status']=='tersedia'){
                      echo "Tersedia";
                    }else {
                      echo "Tidak Tersedia";
                    }
                     ?></a></p>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="brands-agile-2">
                <div class="col-md-2 w3layouts-brand">
                  <div class="brands-w3l">
                    <p><a href="#">no : 13<br><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=13");
                      $hasil = mysqli_fetch_array($result);
                      if($hasil['status']=='tersedia'){
                      echo "Tersedia";
                    }else {
                      echo "Tidak Tersedia";
                    }
                     ?></a></p>
                  </div>
                </div>
                <div class="col-md-2 w3layouts-brand">
                  <div class="brands-w3l">
                    <p><a href="#">no : 14<br><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=14");
                      $hasil = mysqli_fetch_array($result);
                      if($hasil['status']=='tersedia'){
                      echo "Tersedia";
                    }else {
                      echo "Tidak Tersedia";
                    }
                     ?></a></p>
                  </div>
                </div>
                <div class="col-md-2 w3layouts-brand">
                  <div class="brands-w3l">
                    <p><a href="#">no : 15<br><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=15");
                      $hasil = mysqli_fetch_array($result);
                      if($hasil['status']=='tersedia'){
                      echo "Tersedia";
                    }else {
                      echo "Tidak Tersedia";
                    }
                     ?></a></p>
                  </div>
                </div>

                <div class="col-md-2 w3layouts-brand">
                  <div class="brands-w3l">
                    <p><a href="#">no : 16<br><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=16");
                      $hasil = mysqli_fetch_array($result);
                      if($hasil['status']=='tersedia'){
                      echo "Tersedia";
                    }else {
                      echo "Tidak Tersedia";
                    }
                     ?></a></p>
                  </div>
                </div>
                <div class="col-md-2 w3layouts-brand">
                  <div class="brands-w3l">
                    <p><a href="#">no : 17<br><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=17");
                      $hasil = mysqli_fetch_array($result);
                      if($hasil['status']=='tersedia'){
                      echo "Tersedia";
                    }else {
                      echo "Tidak Tersedia";
                    }
                     ?></a></p>
                  </div>
                </div>
                <div class="col-md-2 w3layouts-brand">
                  <div class="brands-w3l">
                    <p><a href="#">no : 18<br><?php $result = mysqli_query($mysqli,"SELECT status FROM meja where no_meja=18");
                      $hasil = mysqli_fetch_array($result);
                      if($hasil['status']=='tersedia'){
                      echo "Tersedia";
                    }else {
                      echo "Tidak Tersedia";
                    }
                     ?></a></p>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </section>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav><footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-12">
            <div class="wow shake" data-wow-delay="0.4s">
              <div class="page-scroll marginbot-30">
                <a href="#pilih_meja" id="totop" class="btn btn-circle">
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
