<!DOCTYPE html>
<html lang="en">
<head>
  <title>Trunojoyo</title>
  <link rel="shortcut icon" type="image/x-icon" href="../img/dishub2.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../assets/dist/css/skins/_all-skins.min.css">
</head>
<body>

<img alt="logo" src="../img/dishub.png">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://bandaratrunojoyo.com">BANDARA TRUNOJOYO</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="../admin/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
    <?php
        include '../config/koneksi.php';
        $sqlID = mysqli_query($koneksi, "SELECT id FROM mon_pkppk WHERE app_status = 2 order by id DESC LIMIT 1") ;
        $dataID = mysqli_fetch_assoc($sqlID);
        $id = (empty($dataID)) ? 0 : $dataID['id'];
    ?>
    <h3 class="text-center"><font face="Cooper Black" size="5">MONITORING KESIAPAN PERALATAN OPERASIONAL PENERBANGAN</font></h3>
    <div class="panel panel-default"><font face="Britannic Bold" size="5">&nbsp;&nbsp;PKP-PK</font>
      <div class="panel-body">
        <h5>
          <?php
              $data = mysqli_query($koneksi, "SELECT DISTINCT t.teknisi_name FROM mon_pkppk as me inner join teknisi as t on 
                t.teknisi_id = me.teknisi_id 
                where me.id = $id");
              $d = mysqli_fetch_assoc($data);
            ?>
            <font face="Britannic Bold" size="5">Teknisi : <a href="#"><?php echo $d['teknisi_name'] ;?></a></font>
          </h5>
          <h5>
            <?php
              $data = mysqli_query($koneksi, "SELECT DISTINCT pkppk_personil,tanggal FROM mon_pkppk where id = $id");
              $d = mysqli_fetch_assoc($data);
            ?>
            <font face="Britannic Bold" size="5">Personil standby : <a href="#"><?php echo $d['pkppk_personil'] ;?></a></font>
          </h5>
          <h5>
            <?php if($d['tanggal'] != ''){ ?>
            <font face="Britannic Bold" size="5">Tanggal : <a href="#"><?php echo date("d-M-Y H:i:s", strtotime ($d['tanggal'])) ;?></a></font>
            <?php }else{ ?>
            <font face="Britannic Bold" size="5">Tanggal : <a href="#"></a></font>
            <?php } ?>
          </h5>
        <table id="dtUser" class="table table-bordered">
          <tbody>
            <?php 
            $sql = "select e.pkppk_name,me.pkppk_status,me.pkppk_keterangan from mon_pkppk as me inner join pkppk as e ON e.pkppk_id = me.pkppk_id where me.id = $id";
            $data = mysqli_query($koneksi,$sql);
            while($d = mysqli_fetch_array($data)){
            ?>
            <?php if($d['pkppk_status'] == 'serviceable'){ ?>
            <tr class="success">
            <?php }else{ ?>
            <tr class="danger">
            <?php }; ?>
              <td width="50%"><?php echo $d['pkppk_name']; ?></td>
              <td width="20%">
                <?php if($d['pkppk_status'] == 'serviceable'){ ?>
                  <button class="btn btn-success"><?php echo $d['pkppk_status']; ?></button>
                <?php }else{ ?>
                  <button class="btn btn-danger"><?php echo $d['pkppk_status']; ?></button>
                <?php }; ?>
              </td>
              <td width="30%"><center><?php echo $d['pkppk_keterangan']; ?></center></td>
            </tr>
            <?php 
            }
            ?>

          </tbody>
        </table>
      </div>
    </div>
    <a href="../index.php" class="small-box-footer"><font face="Britannic Bold" size="5"><i class="fa fa-arrow-circle-left"></i> Kembali</font></a>
  </body>
  <br><br>
  <footer class="bg-light py-5">
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="large text-center text-muted">Copyright &copy; 2019 - Bandara Trunojoyo</div>
            </div>
        </div>
    </div>
  </footer>
</html>
