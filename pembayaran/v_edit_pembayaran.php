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
            <div class="panel-heading">Edit Pembayaran</div>
            <div class="panel-body">
 
      			<?php
      			include '../config/koneksi.php';
      			$id_pembayaran = $_GET['id_pembayaran'];
      			$data = mysqli_query($koneksi,"select * from pembayaran where id_pembayaran='$id_pembayaran'");
      			while($d = mysqli_fetch_array($data)){
      			?>

      			<form method="post" action="action_edit_pembayaran.php" enctype="multipart/form-data"> <!-- update.php -->
    					<div class="form-group">
      			    <label for="id_pembayaran">Pembayaran Id</label>
      			    <input type="hidden" name="id_pembayaran" value="<?php echo $d['id_pembayaran']; ?>">
      			    <input type="text" name="id_pembayaran" class="form-control" id="id_pembayaran" value="<?php echo $d['id_pembayaran']; ?>" required  disabled="">
        			</div>
        			<div class="form-group">
        			    <label for="tgl">Tanggal Pembayaran</label>
        			    <input type="date" name="tgl" class="form-control" id="tgl" value="<?php echo $d['tgl']; ?>" required>
        			</div>
              <div class="form-group">
                  <label for="total">Total Pembayaran</label>
                  <input type="text" name="total" class="form-control" id="total" value="<?php echo $d['total']; ?>" required>
              </div>
              <div class="form-group">
                  <label for="bukti_pembayaran">Bangland Name</label>
                  <input type="file" name="bukti_pembayaran" class="form-control" id="bukti_pembayaran" value="<?php echo $d['bukti_pembayaran']; ?>" required>
              </div>
              <button type="submit" class="btn btn-info">Simpan</button>
              <a class="btn btn-danger" href="v_pembayaran.php">Batal</a>
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