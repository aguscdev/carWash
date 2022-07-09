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
  	<?php  
  	if (@$_SESSION['id_pendaftaran']=='') 
  	{
    header('location:admin/login.php');
  	}else{
      if($_SESSION['level'] != 'KONSUMEN')
      {
        echo '<script>alert("Anda harus login sebagai pembeli!!");document.location="../index.php"</script>';
      }
    $user = $_SESSION["username"];
    $user_id = $_SESSION["id_pendaftaran"];  
    $level = $_SESSION["level"];

	?>
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
	            }

	            ?>

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

    <h3 class="text-center"><font face="Cooper Black" size="5">Transfer Berhasil</font></h3>

	<div class="panel panel-default">
		<div class="panel-body">
			
			<center><h1>Terima Kasih Sudah Mencuci Mobil Di Car Wash</h1></center>
			<?php 
                include 'config/koneksi.php';
                $user_id = $_SESSION["id_pendaftaran"]; 
                $data = mysqli_query($koneksi,"select * from pembayaran where id_pembayaran=$user_id");
                while($d = mysqli_fetch_array($data)){
            ?>
            <div class="box">
                <div class="img-box">
                  Tanggal Transfer : <?php echo $d['tgl']; ?> | <?php echo $_SESSION["username"]; ?>
                </div>
                <!-- <div class="detail-box"> -->
                  	<center><h3>Bukti Transfer</h3></center>
                    <center><img src="<?php echo $d['bukti_pembayaran']; ?>" width="350" height="500"/></center>
                <!-- </div> -->
              </div>
              <a class="btn btn-default" href="index.php">Kembali Ke Halaman</a>
            </div>	
            <?php } ?>

          	<!-- </tbody>
        	</table> -->
      	</div>
    </div>
</body>
<?php } ?>
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


