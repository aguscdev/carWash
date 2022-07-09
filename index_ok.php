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
  </head>
  <body>

    <img alt="logo" src="img/carwash.png" width="150px" height="150px">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Mikael Auto 18</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="admin/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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

    <h3 class="text-center"><font face="Cooper Black" size="5">PAKET CAR WASH MIKAEL AUTO 18</font></h3>

  <div class="panel panel-default">
  <div class="panel-body">
<?php
        $query = "SELECT * FROM paket";
        $sql = mysqli_query ($koneksi, $query);
        while($d = mysqli_fetch_array($sql)){ 
      ?>
  <div class="col-md-6">

    <div class="thumbnail">
      
      <div class="panel-heading">

        <font face="Cooper Black" size="5"><?php echo $d['jenis']; ?></font></div>
        <div class="panel-body">
          
          <!-- ./col -->
          <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="info-box bg-red"><br>
            <!-- /.info-box-content -->
            <h1><p style="text-align:center"><?php echo $d['harga']; ?></p></h1><br>
          </div>
          <!-- /.info-box -->
        </div>
          <!-- ./col -->
        
        </div>
          <font face="Britannic Bold" size="5"><a href="bookingPaket.php?id_paket=<?= $d['id_paket']; ?>" class="small-box-footer">
              &nbsp;&nbsp;Klik Untuk Booking <i class="fa fa-arrow-circle-right"></i>
          </a></font>
        </div>
        </div>
<?php } ?>
          <!-- </tbody>
        </table> -->
      </div>
    </div>

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


