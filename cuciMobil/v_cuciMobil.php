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
                <div class="panel-heading">Master Cuci Mobil</div>
                <div class="panel-body">
                <!-- <a class="btn btn-success" href="v_add_cuciMobil.php">Tambah</a><br/><br/> -->
                    <table id="dtUser" class="table table-bordered">
                        <thead>
						<!-- <th>No</th> -->
						<th>Id</th>
						<th>Tanggal Cuci</th>
						<th>Jenis Kendaraan</th>
						<th>No Kendaraan</th>
						<th>Harga</th>
						<th>Status</th>
						<th>Aksi</th>
						</thead>
					<tbody>
						<?php 
						include '../config/koneksi.php';
						// $no = 1;
						$data = mysqli_query($koneksi,"select * from booking where status = 'Antri'");
						while($d = mysqli_fetch_array($data)){
						?>
						<tr>
							<!-- <td><?php echo $no++; ?></td> -->
							<td><?php echo $d['id_booking']; ?></td>
							<td><?php echo $d['tgl']; ?></td>
							<td><?php echo $d['jenis_kendaraan']; ?></td>
							<td><?php echo $d['no_kendaraan']; ?></td>
							<td><?php echo $d['harga']; ?></td>
							<td>
                                <?php 
                                if($d['status']=="Antri"){
                                    echo "<div class='label label-warning'>Antri</div>";
                                }else if($d['status']=="Selesai"){
                                    echo "<div class='label label-info'>Selesai</div>";
                                }
                                ?>                          
                            </td>
							<td>
								<a href="v_edit_cuciMobil.php?id_booking=<?php echo $d['id_booking']; ?>" class="btn btn-warning">Update</a> 
								<!-- || <a href="action_delete_listrik.php?listrik_id=<?php echo $d['listrik_id']; ?>" class="btn btn-danger"> Hapus</a> -->
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