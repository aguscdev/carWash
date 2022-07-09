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

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <?php include '../home/sidebar.php'; ?>
        <div class="contents">
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="panel panel-default">
                        <div class="panel-heading">Filter Laporan Pembayaran</div>
                        <div class="panel-body">        
                            <form action="v_laporan.php" method="get">
                                <table id="dtUser" class="table table-bordered">
                                    <tr>                
                                        <th>Dari Tanggal</th>
                                        <th>Sampai Tanggal</th>                         
                                        <th width="1%"></th>
                                    </tr>
                                    <tr>
                                        <td><br/>
                                            <input type="date" name="tgl_dari" class="form-control">
                                        </td>
                                        <td><br/>
                                            <input type="date" name="tgl_sampai" class="form-control"><br/>
                                        </td>
                                        <td><br/>
                                            <input type="submit" class="btn btn-primary" value="Filter">
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div><br/>
                    <?php 
                    if(isset($_GET['tgl_dari']) && isset($_GET['tgl_sampai'])){
                    // $dari = $_GET['tgl_dari'];
                    // $sampai = $_GET['tgl_sampai'];
                    $dari=date($_GET["tgl_dari"]);
                    $sampai=date($_GET["tgl_sampai"]);
                    ?>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4>Laporan Pembayaran dari <b><?php echo $dari; ?></b> sampai <b><?php echo $sampai; ?></b></h4>
                        </div>
                        <div class="panel-body">            
                            <a target="_blank" href="v_cetak_print_pembayaran.php?dari=<?php echo $dari; ?>&sampai=<?php echo $sampai; ?>" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-print"></i> CETAK</a>
                            <a target="_blank" href="v_cetak_pdf_pembayaran.php?dari=<?php echo $dari; ?>&sampai=<?php echo $sampai; ?>" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-print"></i> CETAK PDF</a>
                            <br/>
                            <br/>
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <!-- <th width="1%">No</th> -->
                                    <th>Pembayaran Id</th>
                                    <th>Tanggal Pembayaran</th>
                                    <th>Total</th>
                                    <th>Bukti Pembayaran</th>                                
                                </tr>
                                <?php 
                                include '../config/koneksi.php';
                                $data = mysqli_query($koneksi,"SELECT * FROM pembayaran where tgl between ('".$dari."') and ('".$sampai."') ORDER BY id_pembayaran desc ");
                                $no = 1;
                                
                                while($d=mysqli_fetch_array($data)){
                                ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $d['tgl']; ?></td>
                                    <td><?php echo $d['total']; ?></td>
                                    <td><img src="../pembayaran/<?php echo $d['bukti_pembayaran']; ?>" width="50" height="50"/></td>                
                                </tr>
                                <?php } ?>                          
                            </table>
                        </div>
                    </div>
                </section><br>
            </div>
        </div>
        <?php } ?>
    </div>
</body>
<?php include '../home/footer.php'; ?>
</html>
<?php } ?>