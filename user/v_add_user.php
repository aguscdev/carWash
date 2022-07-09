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
            <div class="panel-heading">Tambah User</div>
            <div class="panel-body">
            <form method="post" action="action_add_user.php">
                <div class="form-group">
                    <label for="usr">Nama:</label>
                    <input type="text" name="nama" class="form-control" id="usr" required>
                </div>
                <div class="form-group">
                    <label for="usr">Email:</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" name="password" class="form-control" id="pwd" required>
                </div>
                <div class="form-group">
                    <label for="usr">Alamat:</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" required>
                </div>
                <div class="form-group">
                    <label for="usr">No Telepon:</label>
                    <input type="text" name="no_tlp" class="form-control" id="no_tlp" required>
                </div>
                <div class="form-group">
                    <label for="sel1">Hak Akses:</label>
                    <select name="level" class="form-control" id="sel1">
                        <option>ADMIN</option>
                        <option>OPERATOR</option>
                        <option>PEMILIK</option>
                        <option>KONSUMEN</option>
                    </select> 
                </div>
                <button type="submit" class="btn btn-info">Simpan</button>
                <a class="btn btn-danger" href="v_user.php">Batal</a>
            </form>
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