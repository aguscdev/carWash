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
            <div class="panel-heading">Tambah Avsec</div>
            <div class="panel-body">

        		<form method="post" action="action_add_booking.php">
        			<div class="form-group">
        			    <label for="id_booking">Booking Id</label>
        			    <input type="text" name="id_booking" class="form-control" id="id_booking" required disabled="">
        			</div>
              <div class="form-group">
                  <label for="date">Tanggal Booking</label>
                  <input type="date" name="tgl" class="form-control" id="tgl" required>
              </div>
              <div class="form-group">
                  <label for="jenis_kendaraan">Jenis Kendaraan</label>
                  <input type="text" name="jenis_kendaraan" class="form-control" id="jenis_kendaraan" required>
              </div>
              <div class="form-group">
                  <label for="no_kendaraan">No Kendaraan</label>
                  <input type="text" name="no_kendaraan" class="form-control" id="no_kendaraan" required>
              </div>
        			<div class="form-group">
        			    <label for="harga">Harga</label>
        			    <input type="number" name="harga" class="form-control" id="harga" required>
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