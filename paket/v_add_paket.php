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

include '../home/header.php'; 
?>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php include '../home/sidebar.php'; ?>
    <div class="contents">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="panel panel-default">
            <div class="panel-heading">Tambah Master Paket</div>
            <div class="panel-body">

        		<form method="post" action="action_add_paket.php">
        			<div class="form-group">
        			    <label for="id_paket">Paket Id</label>
        			    <input type="text" name="id_paket" class="form-control" id="id_paket" required disabled="">
        			</div>
        			<div class="form-group">
        			    <label for="jenis">Jenis Paket</label>
        			    <input type="text" name="jenis" class="form-control" id="jenis" required>
        			</div>
              <div class="form-group">
                  <label for="harga">Harga</label>
                  <input type="number" name="harga" class="form-control" id="harga" required>
              </div>
                <button type="submit" class="btn btn-info">Simpan</button>
                <a class="btn btn-danger" href="v_paket.php">Batal</a>
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