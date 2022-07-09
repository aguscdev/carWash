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

    <h3 class="text-center"><font face="Cooper Black" size="5">Transfer Pembayaran Car Wash</font></h3>

	<div class="panel panel-default">
		<div class="panel-body">
			<form method="post" action="action_transfer.php" enctype="multipart/form-data">
				<div class="form-group">
				   	<label for="id_pembayaran">Pembayaran Id</label>
				    <input type="text" name="id_pembayaran" class="form-control" id="id_pembayaran" required disabled="">
				</div>
				<div class="form-group col-md-6">
				    <label for="date">Tanggal Transfer</label>
				    <input type="date" name="tgl" class="form-control" id="tgl" required>
				</div>
	            <div class="form-group col-md-6">
                <label for="harga">Total Pembayaran</label>
                <select name="total" class="form-control" required>
                    <option value="">-- Pilih --</option>
                    <?php
                     include 'config/koneksi.php';
                     $query = mysqli_query($koneksi,"SELECT * FROM paket");
                    while($data=mysqli_fetch_array($query)) { ?>
                    <option value="<?php echo $data['harga']; ?>"><?php echo $data['harga']; ?></option>
                    <?php
                    } ?>
                </select>
              </div>
              <div class="form-group">
                  <label for="bukti_pembayaran">Bukti Pembayaran</label>
                  <input type="file" name="bukti_pembayaran" class="form-control" id="bukti_pembayaran" required>
              </div>
			  <button type="submit" class="btn btn-info">Submit</button>
			  <a class="btn btn-danger" href="index.php">Batal</a>
			</form>

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


