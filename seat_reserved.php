<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Seat Reserved</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="color/default.css" rel="stylesheet">
	
	<style>
body{
    text-align: center;
  font-family: sans-serif;
  font-weight: 100;
}

#clockdiv{
    font-family: sans-serif;
    color: #fff;
    display: inline-block;
    font-weight: 100;
    text-align: center;
    font-size: 30px;
}

#clockdiv > div{
    padding: 10px;
    border-radius: 3px;
    background: #86C6F1;
    display: inline-block;
}

#clockdiv div > span{
    padding: 15px;
    border-radius: 3px;
    background: #0D95B2;
    display: inline-block;
}

.smalltext{
    padding-top: 5px;
    font-size: 16px;
}

.btn1 {
    background-color: DodgerBlue;
    border: none;
    color: white;
    padding: 16px 16px;
    font-size: 16px;
    cursor: pointer;
}

.btn1:hover {
    background-color: green;
}

.btn2 {
    background-color: DodgerBlue;
    border: none;
    color: white;
    padding: 16px 16px;
    font-size: 16px;
    cursor: pointer;
}

.btn2:hover {
    background-color: red;
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
          <li><a href="login.php">Logout</a></li>
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
              unset($_SESSION['success'])
           ?>
        </h3>
      </div>
    <?php endif ?>

    <?php if(isset($_SESSION['username'])): ?>
      <p>Welcome  <strong><?php echo $_SESSION['username']; ?></strong></p>
      <p><a href="Halaman_depan.php">Logout</a></p>
    <?php endif ?>
  </div>
  
 <section id="reserved" class="home-section text-center">
<div class="container">
<div class="home-section text-center">
	<h3>Your Seat Has Been Reserved</h3>
	<div id="clockdiv">
    <div><span class="days"></span><div class="smalltext">Days</div></div>
    <div><span class="hours"></span><div class="smalltext">Hours</div></div>
    <div><span class="minutes"></span><div class="smalltext">Minutes</div></div>
    <div><span class="seconds"></span><div class="smalltext">Seconds</div></div>
</div>
</div>
<div class="home-section">
<button class="btn1"><i class="glyphicon glyphicon-ok"></i> I Arrive</button>
<button class="btn2"><i class="	glyphicon glyphicon-remove"></i> Cancer</button>
</div>
</div>

  <script type="text/javascript">
			var deadline = 'Dec 31 2018 00:00:00 GMT-0400';
function time_remaining(endtime){
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor( (t/1000) % 60 );
    var minutes = Math.floor( (t/1000/60) % 60 );
    var hours = Math.floor( (t/(1000*60*60)) % 24 );
    var days = Math.floor( t/(1000*60*60*24) );
    return {'total':t, 'days':days, 'hours':hours, 'minutes':minutes, 'seconds':seconds};
}
function run_clock(id,endtime){
    var clock = document.getElementById(id);
    
    // get spans where our clock numbers are held
    var days_span = clock.querySelector('.days');
    var hours_span = clock.querySelector('.hours');
    var minutes_span = clock.querySelector('.minutes');
    var seconds_span = clock.querySelector('.seconds');

    function update_clock(){
        var t = time_remaining(endtime);
        
        // update the numbers in each part of the clock
        days_span.innerHTML = t.days;
        hours_span.innerHTML = ('0' + t.hours).slice(-2);
        minutes_span.innerHTML = ('0' + t.minutes).slice(-2);
        seconds_span.innerHTML = ('0' + t.seconds).slice(-2);
        
        if(t.total<=0){ clearInterval(timeinterval); }
    }
    update_clock();
    var timeinterval = setInterval(update_clock,1000);
}
run_clock('clockdiv',deadline);
            </script>

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

