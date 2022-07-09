<!DOCTYPE html>
<html>
    <!-- cek apakah sudah login -->
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
<body>
<?php 
	include '../config/koneksi.php';
	?>
	<div class="container">

		<center><h2>Laporan Pembayaran Car Wash</h2></center>
		<br/>
		<br/>
		<?php 
		if(isset($_GET['dari']) && isset($_GET['sampai'])){

			$dari = $_GET['dari'];
			$sampai = $_GET['sampai'];
			?>
			<h4>Laporan Pembayaran dari<b><?php echo $dari; ?></b> sampai <b><?php echo $sampai; ?></b></h4>
			<table class="table table-bordered table-striped">
				<tr>
					<!-- <th width="1%">No</th> -->
                    <th>Pembayaran Id</th>
                    <th>Tanggal Pembayaran</th>
                    <th>Total</th>
                    <th>Bukti Pembayaran</th>  			
				</tr>

				<?php 
				

					// mengambil data pelanggan dari database
				$data = mysqli_query($koneksi,"SELECT * FROM pembayaran where tgl between ('".$dari."') and ('".$sampai."') ORDER BY id_pembayaran desc");
				$no = 1;
					// mengubah data ke array dan menampilkannya dengan perulangan while
				while($d=mysqli_fetch_array($data)){
					?>
					<tr>
						<td><?php echo $no++; ?></td>
                        <td><?php echo $d['tgl']; ?></td>
                        <td><?php echo $d['total']; ?></td>
                        <td><img src="../pembayaran/<?php echo $d['bukti_pembayaran']; ?>" width="50" height="50"/></td>								
					</tr>
					<?php 
				}
				?>
			</table>			
			<?php } ?>

		</div>

		<script type="text/javascript">
			window.print();
		</script>

	</body>
	<?php include '../home/footer.php'; ?>
</html>
<?php } ?>