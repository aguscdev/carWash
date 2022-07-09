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
                <div class="panel-heading">Master Pembayaran</div>
                <div class="panel-body">
                <a class="btn btn-success" href="v_add_pembayaran.php">Tambah</a><br/><br/>
                    <table id="dtUser" class="table table-bordered">
                        <thead>
						<!-- <th>No</th> -->
						<th>Pembayaran Id</th>
						<th>Tanggal Pembayaran</th>
						<th>Total</th>
						<th>Bukti Pembayaran</th>
						<th>Aksi</th>
						</thead>
					<tbody>
						<?php 
						include '../config/koneksi.php';
						// $no = 1;
						$data = mysqli_query($koneksi,"select * from pembayaran");
						while($d = mysqli_fetch_array($data)){
						?>
						<tr>
							<!-- <td><?php echo $no++; ?></td> -->
							<td><?php echo $d['id_pembayaran']; ?></td>
							<td><?php echo $d['tgl']; ?></td>
							<td><?php echo $d['total']; ?></td>
							<!-- <td><?php echo $d['bukti_pembayaran']; ?></td> -->
							<td><img src="<?php echo $d['bukti_pembayaran']; ?>" width="50" height="50"/></td>
							<td>
								<a href="v_edit_pembayaran.php?id_pembayaran=<?php echo $d['id_pembayaran']; ?>" class="btn btn-warning">Edit</a> ||
								<a href="action_delete_pembayaran.php?id_pembayaran=<?php echo $d['id_pembayaran']; ?>" class="btn btn-danger"> Hapus</a>
							</td>
						</tr>
						<?php 
						}
						?>

					</tbody>
					</table>
                </div>
            </div>
        </section><br>
      </div>
    </div>
  </div>
</body>
<?php include '../home/footer.php'; ?>
<script type="text/javascript">
    $(document).ready(function() {
		$('#dtUser').DataTable();
	});
</script>
</html>
<?php
}
?>