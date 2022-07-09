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
            <div class="panel-heading">Edit User</div>
            <div class="panel-body">
 
			<?php
			include '../config/koneksi.php';
			$user_id = $_GET['id_pendaftaran'];
			$data = mysqli_query($koneksi,"select * from pendaftaran where id_pendaftaran='$user_id'");
			while($d = mysqli_fetch_array($data)){
			?>

			<form method="post" action="action_edit_user.php"> <!-- update.php -->
					<div class="form-group">
        			    <label for="id_pendaftaran">User Id</label>
        			    <input type="hidden" name="id_pendaftaran" value="<?php echo $d['id_pendaftaran']; ?>">
        			    <input type="text" name="id_pendaftaran" class="form-control" id="id_pendaftaran" value="<?php echo $d['id_pendaftaran']; ?>" required disabled="">
        			</div>
        			<div class="form-group">
        			    <label for="username">Name</label>
        			    <input type="text" name="username" class="form-control" id="username" value="<?php echo $d['username']; ?>" required>
        			</div>
              <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" name="email" class="form-control" id="email" value="<?php echo $d['email']; ?>" required>
              <!-- </div>
                    <div class="form-group">
                    <label for="usr">Username:</label>
                    <input type="text" name="username" class="form-control" id="usrname" value="<?php echo $d['username']; ?>" required>
                </div> -->
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" name="password" class="form-control" id="pwd" value="<?php echo $d['password']; ?>" required>
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