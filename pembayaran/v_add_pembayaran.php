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
            <div class="panel-heading">Tambah Pembayaran</div>
            <div class="panel-body">

        		<form method="post" action="action_add_pembayaran.php" enctype="multipart/form-data">
        			<div class="form-group">
        			    <label for="id_pembayaran">Pembayaran Id</label>
        			    <input type="text" name="id_pembayaran" class="form-control" id="id_pembayaran" required disabled="">
        			</div>
        			<div class="form-group">
        			    <label for="tgl">Tanggal Pembayaran</label>
        			    <input type="date" name="tgl" class="form-control" id="tgl" required>
        			</div>
              <div class="form-group">
                  <label for="total">Total Pembayaran</label>
                  <input type="number" name="total" class="form-control" id="total" required>
              </div>
              <div class="form-group">
                  <label for="bukti_pembayaran">Bukti Pembayaran</label>
                  <input type="file" name="bukti_pembayaran" class="form-control" id="bukti_pembayaran" required>
              </div>
                <button type="submit" class="btn btn-info">Simpan</button>
                <a class="btn btn-danger" href="v_pembayaran.php">Batal</a>
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