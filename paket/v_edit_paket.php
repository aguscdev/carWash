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
            <div class="panel-heading">Edit Master Paket</div>
            <div class="panel-body">
 
      			<?php
      			include '../config/koneksi.php';
      			$id_paket = $_GET['id_paket'];
      			$data = mysqli_query($koneksi,"select * from paket where id_paket='$id_paket'");
      			while($d = mysqli_fetch_array($data)){
      			?>

      			<form method="post" action="action_edit_paket.php"> <!-- update.php -->
      					<div class="form-group">
        			    <label for="id_paket">Paket Id</label>
        			    <input type="hidden" name="id_paket" value="<?php echo $d['id_paket']; ?>">
        			    <input type="text" name="id_paket" class="form-control" id="id_paket" value="<?php echo $d['id_paket']; ?>" required  disabled="">
          			</div>
          			<div class="form-group">
        			    <label for="jenis">Jenis Paket</label>
        			    <input type="text" name="jenis" class="form-control" id="jenis" value="<?php echo $d['jenis']; ?>" required>
          			</div>
                <div class="form-group">
                  <label for="harga">Harga</label>
                  <input type="number" name="harga" class="form-control" id="harga" value="<?php echo $d['harga']; ?>" required>
                </div>
                  <button type="submit" class="btn btn-info">Simpan</button>
                  <a class="btn btn-danger" href="v_paket.php">Batal</a>
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