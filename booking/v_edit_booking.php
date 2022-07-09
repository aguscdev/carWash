<!DOCTYPE html>
<html>

<?php
session_start();
if ($_SESSION['username']=='') {
  header('location:../admin/login.php');

  
}else{

  $user = $_SESSION["username"];
  $user_id = $_SESSION["id_pendaftaran"];  
  $level = $_SESSION["level"];
?>

<?php include '../home/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php include '../home/sidebar.php'; ?>
    <div class="contents">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="panel panel-default">
            <div class="panel-heading">Edit Booking</div>
            <div class="panel-body">
 
      			<?php
      			include '../config/koneksi.php';
      			$id_booking = $_GET['id_booking'];
      			$data = mysqli_query($koneksi,"select * from booking where id_booking='$id_booking'");
      			while($d = mysqli_fetch_array($data)){
      			?>

      			<form method="post" action="action_edit_booking.php"> <!-- update.php -->
      				<div class="form-group">
        			    <label for="id_booking">Booking Id</label>
        			    <input type="hidden" name="id_booking" value="<?php echo $d['id_booking']; ?>">
        			    <input type="text" name="id_booking" class="form-control" id="id_booking" value="<?php echo $d['id_booking']; ?>" required  disabled="">
        			</div>
        			<div class="form-group">
        			    <label for="tgl">Tanggal Booking</label>
        			    <input type="date" name="tgl" class="form-control" id="tgl" value="<?php echo $d['tgl']; ?>" required>
        			</div>
              <div class="form-group">
                  <label for="jenis_kendaraan">Jenis Kendaraan</label>
                  <input type="text" name="jenis_kendaraan" class="form-control" id="jenis_kendaraan" value="<?php echo $d['jenis_kendaraan']; ?>" required>
              </div>
              <div class="form-group">
                  <label for="no_kendaraan">No Kendaraan</label>
                  <input type="text" name="no_kendaraan" class="form-control" id="no_kendaraan" value="<?php echo $d['no_kendaraan']; ?>" required>
              </div>
              <div class="form-group">
                  <label for="harga">Harga</label>
                  <input type="number" name="harga" class="form-control" id="harga" value="<?php echo $d['harga']; ?>" required>
              </div>
              <div class="form-group">
                  <label for="sel1">Status:</label>
                  <select name="status" class="form-control" id="sel1">
                    <option>-- Pilih --</option>
                    <option>Antri</option>
                    <option>Selesai</option>
                  </select> 
              </div>
              <button type="submit" class="btn btn-info">Simpan</button>
              <a class="btn btn-danger" href="v_booking.php">Batal</a>
      			</form>
      			<?php 
      			}
      			?>

            </div>
        </div>
        </section><br>
      </div>
    </div>
  </div>
</body>
<?php include '../home/footer.php'; ?>
</html>
<?php
}
?>