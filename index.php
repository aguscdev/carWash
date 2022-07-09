<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require_once('config/koneksi.php');
?>
  <head>
    <title>Car Wash</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/carwash.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">
    <!-- Bootstrap core CSS -->
    <link href="vendor/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="vendor/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="vendor/assets/js/ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>

    <img alt="logo" src="img/carwash.png" width="150px" height="150px">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Mikael Auto 18</a>
        </div>
        <!-- <ul class="nav navbar-nav navbar-right">
          <li><a href="admin/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul> -->
        <ul class="nav navbar-nav navbar-right">
            <!-- <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li> -->
            <?php 
            if (empty($_SESSION['username'])){
            ?>
            <li class="nav-item"><a class="nav-link" href="admin/pendaftaran.php">Register</a></li>
            <li class="nav-item"><a class="nav-link" href="admin/login.php">Login</a></li>
            <?php
            } else {
            // echo '<li class="nav-item"><a class="nav-link" href="tracking_pesanan.php">'.'Pesanan'.'</a></li>';
            // echo '<li class="nav-item"><a class="nav-link" href="cart.php">'.'Cart'.'</a></li>';  
            echo '<li class="nav-item"><a class="nav-link" href="admin/logout.php">'.$_SESSION['username'].' | Logout'.'</a></li>';
            } ?>
          </ul>
      </div>
    </nav>
  <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <H3><marquee behavior="alternate">WELCOME TO APPLICATION CAR WASH MIKAEL AUTO 18</marquee></H3>
            </div>
        </div>
    </div>
    <div class="container">
 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="img/carwash_.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>WELCOME TO CAR WASH MIKAEL AUTO 18</h1>
              <p>Kenyamanan Perioritas Kami</p>
              <p><a class="btn btn-lg btn-primary" href="bookingPaket.php" role="button">Pilih Paket</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="img/carwashbaru.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>WELCOME TO CAR WASH MIKAEL AUTO 18</h1>
              <p>Anda Senang Kami Puas</p>
              <p><a class="btn btn-lg btn-primary" href="bookingPaket.php" role="button">Pilih Paket</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="img/carwashini.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>WELCOME TO CAR WASH MIKAEL AUTO 18</h1>
              <p>Kendaraan Anda Kami Bersihkan</p>
              <p><a class="btn btn-lg btn-primary" href="bookingPaket.php" role="button">Pilih Paket</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
  </div>


  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="vendor/assets/js/vendor/jquery.min.js"><\/script>')</script>
  <script src="vendor/dist/js/bootstrap.min.js"></script>
  <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  <script src="vendor/assets/js/vendor/holder.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="vendor/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
  <footer class="bg-light py-5">
  <div class="container">
      <div class="panel panel-default">
          <div class="panel-body">
              <div class="large text-center text-muted">Copyright &copy; 2022 Car Wash Mikael Auto 18</div>
          </div>
      </div>
  </div>
</footer>
</html>
