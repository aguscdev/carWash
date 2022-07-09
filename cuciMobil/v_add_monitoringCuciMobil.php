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
                <div class="panel-heading">Monitoring Cuci Mobil</div>
                <div class="panel-body">
                <!-- <a class="btn btn-success" href="v_add_booking.php">Tambah</a><br/><br/> -->
                    <table id="dtUser" class="table table-bordered">
                        <thead>
                        <!-- <th>No</th> -->
                        <th>Booking Id</th>
                        <th>Tgl Booking</th>
                        <th>Jenis Kendaraan</th>
                        <th>No Kendaraan</th>
                        <th>Harga</th>
                        <th>status</th>
                        <th>Aksi</th>
                        </thead>
                    <tbody>
                        <?php
                        include '../config/koneksi.php';
                        // $id_booking = $_GET['id_booking'];
                        $data = mysqli_query($koneksi,"select * from booking where status = 'Antri'");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <!-- <td><?php echo $no++; ?></td> -->
                            <td>NoUrut - <?php echo $d['id_booking']; ?></td>
                            <td><?php echo $d['tgl']; ?></td>
                            <td><?php echo $d['jenis_kendaraan']; ?></td>
                            <td><?php echo $d['no_kendaraan']; ?></td>
                            <td><?php echo $d['harga']; ?></td>
                            <!-- <td><?php echo $d['status']; ?></td> -->
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
                                <a href="v_edit_monitoringCuciMobil.php?id_booking=<?php echo $d['id_booking']; ?>" class="btn btn-warning">Update</a> 
                               <!--  ||
                                <a href="action_delete_booking.php?id_booking=<?php echo $d['id_booking']; ?>" class="btn btn-danger"> Hapus</a> -->
                            </td>
                            <td>
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