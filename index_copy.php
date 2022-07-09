<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Car Wash</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/carwash.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">
  </head>
  <body>

    <img alt="logo" src="img/carwash.png" width="150px" height="150px">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Mikael Auto 18</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="admin/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </nav>
  
    <div class="container">

    <h3 class="text-center"><font face="Cooper Black" size="5">MONITORING KESIAPAN PERALATAN OPERASIONAL PENERBANGAN</font></h3>

  <div class="panel panel-default">
  <div class="panel-body">

  <div class="col-md-6">
    <div class="thumbnail">
      <div class="panel-heading"><font face="Cooper Black" size="5">AVSEC</font></div>
        <div class="panel-body">
          <!-- <?php
            include 'config/koneksi.php';
            $sqlid = mysqli_query($koneksi, "SELECT id FROM mon_avseg WHERE app_status = 2 order by id DESC LIMIT 1") ;
            $dataid = mysqli_fetch_assoc($sqlid);
            $genID = (empty($dataid)) ? 0 : $dataid['id'];
          ?>  -->       
          <h5>
         <!--  <?php
              $data = mysqli_query($koneksi, "SELECT DISTINCT t.teknisi_name FROM mon_avseg as me inner join teknisi as t on 
                t.teknisi_id = me.teknisi_id 
                where me.id = $genID");
              $d = mysqli_fetch_assoc($data);
            ?>
            <font face="Britannic Bold" size="5">Teknisi : <a href="#"><?php echo $d['teknisi_name'] ;?></a></font> -->
          </h5>
          <h5>
            <!-- <?php
              $data = mysqli_query($koneksi, "SELECT DISTINCT avseg_personil,tanggal FROM mon_avseg where id = $genID");
              $d = mysqli_fetch_assoc($data);
            ?>
            <font face="Britannic Bold" size="5">Personil standby : <a href="#"><?php echo $d['avseg_personil'] ;?></a></font> -->
          </h5>
          <h5>
            <!-- <?php if($d['tanggal'] != ''){ ?>
            <font face="Britannic Bold" size="5">Tanggal : <a href="#"><?php echo date("d-M-Y H:i:s", strtotime ($d['tanggal'])) ;?></a></font>
            <?php }else{ ?>
            <font face="Britannic Bold" size="5">Tanggal : <a href="#"></a></font>
            <?php } ?> -->
          </h5>
          <!-- ./col -->
          <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="ion ion-ios-gear-outline"></i></span>
            <div class="info-box-content">
              <span class="info-box-text-sm">Unservicable</span>
              <span class="info-box-number">
              <h2 class="text-center">
                <!-- <?php
                  $data = mysqli_query($koneksi, "select count(avseg_id) as el_mon from mon_avseg where avseg_status = 'unserviceable' and id = $genID") ;
                  $d = mysqli_fetch_assoc($data);
                  echo $d['el_mon'] ;
                  ?> -->
              </h2>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
          <!-- ./col -->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>
            <div class="info-box-content">
              <span class="info-box-text-sm">Serviceable</span>
              <span class="info-box-number">
              <h2 class="text-center">
                <!-- <?php
                  $data = mysqli_query($koneksi, "select count(avseg_id) as el_mon from mon_avseg 
                    where avseg_status = 'serviceable' and id = $genID") ;
                  $d = mysqli_fetch_assoc($data);
                  echo $d['el_mon'] ;
                  ?> -->
              </h2>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        </div>
          <font face="Britannic Bold" size="5"><a href="dashboard/v_dashboard_avseg.php" class="small-box-footer">
              &nbsp;&nbsp;Info lebih lanjut <i class="fa fa-arrow-circle-right"></i>
          </a></font>
        </div>
        </div>

<div class="col-md-6">
    <div class="thumbnail">
      <div class="panel-heading"><font face="Cooper Black" size="5">ELBAND</font></div>
        <div class="panel-body">
          <!-- <?php
            include 'config/koneksi.php';
            $sqlid = mysqli_query($koneksi, "SELECT id FROM mon_elband WHERE app_status = 2 order by id DESC LIMIT 1") ;
            $dataid = mysqli_fetch_assoc($sqlid);
            $genID = (empty($dataid)) ? 0 : $dataid['id'];
          ?>  -->       
          <h5>
          <!-- <?php
              $data = mysqli_query($koneksi, "SELECT DISTINCT t.teknisi_name FROM mon_elband as me inner join teknisi as t on 
                t.teknisi_id = me.teknisi_id 
                where me.id = $genID");
              $d = mysqli_fetch_assoc($data);
            ?> -->
            <!-- <font face="Britannic Bold" size="5">Teknisi : <a href="#"><?php echo $d['teknisi_name'] ;?></a></font> -->
          </h5>
          <h5>
            <!-- <?php
              $data = mysqli_query($koneksi, "SELECT DISTINCT elband_personil,tanggal FROM mon_elband where id = $genID");
              $d = mysqli_fetch_assoc($data);
            ?>
            <font face="Britannic Bold" size="5">Personil standby : <a href="#"><?php echo $d['elband_personil'] ;?></a></font> -->
          </h5>
          <h5>
            <!-- <?php if($d['tanggal'] != ''){ ?>
            <font face="Britannic Bold" size="5">Tanggal : <a href="#"><?php echo date("d-M-Y H:i:s", strtotime ($d['tanggal'])) ;?></a></font>
            <?php }else{ ?>
            <font face="Britannic Bold" size="5">Tanggal : <a href="#"></a></font>
            <?php } ?> -->
          </h5>
          <!-- ./col -->
          <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="ion ion-ios-gear-outline"></i></span>
            <div class="info-box-content">
              <span class="info-box-text-sm">Unservicable</span>
              <span class="info-box-number">
              <h2 class="text-center">
                <!-- <?php
                  $data = mysqli_query($koneksi, "select count(elband_id) as el_mon from mon_elband where elband_status = 'unserviceable' and id = $genID") ;
                  $d = mysqli_fetch_assoc($data);
                  echo $d['el_mon'] ;
                  ?> -->
              </h2>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
          <!-- ./col -->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>
            <div class="info-box-content">
              <span class="info-box-text-sm">Serviceable</span>
              <span class="info-box-number">
              <h2 class="text-center">
                <!-- <?php
                  $data = mysqli_query($koneksi, "select count(elband_id) as el_mon from mon_elband 
                    where elband_status = 'serviceable' and id = $genID") ;
                  $d = mysqli_fetch_assoc($data);
                  echo $d['el_mon'] ;
                  ?> -->
              </h2>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        </div>
          <font face="Britannic Bold" size="5"><a href="dashboard/v_dashboard_elband.php" class="small-box-footer">
              &nbsp;&nbsp;Info lebih lanjut <i class="fa fa-arrow-circle-right"></i>
          </a></font>
        </div>
        </div>   

<div class="col-md-6">
    <div class="thumbnail">
      <div class="panel-heading"><font face="Cooper Black" size="5">LISTRIK</font></div>
        <div class="panel-body">
          <!-- <?php
            include 'config/koneksi.php';
            $sqlid = mysqli_query($koneksi, "SELECT id FROM mon_listrik WHERE app_status = 2 order by id DESC LIMIT 1") ;
            $dataid = mysqli_fetch_assoc($sqlid);
            $genID = (empty($dataid)) ? 0 : $dataid['id'];
          ?>        
          <h5>
          <?php
              $data = mysqli_query($koneksi, "SELECT DISTINCT t.teknisi_name FROM mon_listrik as me inner join teknisi as t on 
                t.teknisi_id = me.teknisi_id 
                where me.id = $genID");
              $d = mysqli_fetch_assoc($data);
            ?>
            <font face="Britannic Bold" size="5">Teknisi : <a href="#"><?php echo $d['teknisi_name'] ;?></a></font>
          </h5>
          <h5>
            <?php
              $data = mysqli_query($koneksi, "SELECT DISTINCT listrik_personil,tanggal FROM mon_listrik where id = $genID");
              $d = mysqli_fetch_assoc($data);
            ?>
            <font face="Britannic Bold" size="5">Personil standby : <a href="#"><?php echo $d['listrik_personil'] ;?></a></font>
          </h5>
          <h5>
            <?php if($d['tanggal'] != ''){ ?>
            <font face="Britannic Bold" size="5">Tanggal : <a href="#"><?php echo date("d-M-Y H:i:s", strtotime ($d['tanggal'])) ;?></a></font>
            <?php }else{ ?>
            <font face="Britannic Bold" size="5">Tanggal : <a href="#"></a></font>
            <?php } ?> -->
          </h5>
          <!-- ./col -->
          <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="ion ion-ios-gear-outline"></i></span>
            <div class="info-box-content">
              <span class="info-box-text-sm">Unservicable</span>
              <span class="info-box-number">
              <h2 class="text-center">
                <!-- <?php
                  $data = mysqli_query($koneksi, "select count(listrik_id) as el_mon from mon_listrik where listrik_status = 'unserviceable' and id = $genID") ;
                  $d = mysqli_fetch_assoc($data);
                  echo $d['el_mon'] ;
                  ?> -->
              </h2>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
          <!-- ./col -->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>
            <div class="info-box-content">
              <span class="info-box-text-sm">Serviceable</span>
              <span class="info-box-number">
              <h2 class="text-center">
                <!-- <?php
                  $data = mysqli_query($koneksi, "select count(listrik_id) as el_mon from mon_listrik 
                    where listrik_status = 'serviceable' and id = $genID") ;
                  $d = mysqli_fetch_assoc($data);
                  echo $d['el_mon'] ;
                  ?> -->
              </h2>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        </div>
          <font face="Britannic Bold" size="5"><a href="dashboard/v_dashboard_listrik.php" class="small-box-footer">
              &nbsp;&nbsp;Info lebih lanjut <i class="fa fa-arrow-circle-right"></i>
          </a></font>
        </div>
        </div>

<div class="col-md-6">
    <div class="thumbnail">
      <div class="panel-heading"><font face="Cooper Black" size="5">BANGLAND</font></div>
        <div class="panel-body">
          <!-- <?php
            include 'config/koneksi.php';
            $sqlid = mysqli_query($koneksi, "SELECT id FROM mon_bangland WHERE app_status = 2 order by id DESC LIMIT 1") ;
            $dataid = mysqli_fetch_assoc($sqlid);
            $genID = (empty($dataid)) ? 0 : $dataid['id'];
          ?>        
          <h5>
          <?php
              $data = mysqli_query($koneksi, "SELECT DISTINCT t.teknisi_name FROM mon_bangland as me inner join teknisi as t on 
                t.teknisi_id = me.teknisi_id 
                where me.id = $genID");
              $d = mysqli_fetch_assoc($data);
            ?>
            <font face="Britannic Bold" size="5">Teknisi : <a href="#"><?php echo $d['teknisi_name'] ;?></a></font>
          </h5>
          <h5>
            <?php
              $data = mysqli_query($koneksi, "SELECT DISTINCT bangland_personil,tanggal FROM mon_bangland where id = $genID");
              $d = mysqli_fetch_assoc($data);
            ?>
            <font face="Britannic Bold" size="5">Personil standby : <a href="#"><?php echo $d['bangland_personil'] ;?></a></font>
          </h5>
          <h5>
            <?php if($d['tanggal'] != ''){ ?>
            <font face="Britannic Bold" size="5">Tanggal : <a href="#"><?php echo date("d-M-Y H:i:s", strtotime ($d['tanggal'])) ;?></a></font>
            <?php }else{ ?>
            <font face="Britannic Bold" size="5">Tanggal : <a href="#"></a></font>
            <?php } ?> -->
          </h5>
          <!-- ./col -->
          <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="ion ion-ios-gear-outline"></i></span>
            <div class="info-box-content">
              <span class="info-box-text-sm">Unservicable</span>
              <span class="info-box-number">
              <h2 class="text-center">
                <!-- <?php
                  $data = mysqli_query($koneksi, "select count(bangland_id) as el_mon from mon_bangland where bangland_status = 'unserviceable' and id = $genID") ;
                  $d = mysqli_fetch_assoc($data);
                  echo $d['el_mon'] ;
                  ?> -->
              </h2>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
          <!-- ./col -->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>
            <div class="info-box-content">
              <span class="info-box-text-sm">Serviceable</span>
              <span class="info-box-number">
              <h2 class="text-center">
                <!-- <?php
                  $data = mysqli_query($koneksi, "select count(bangland_id) as el_mon from mon_bangland 
                    where bangland_status = 'serviceable' and id = $genID") ;
                  $d = mysqli_fetch_assoc($data);
                  echo $d['el_mon'] ;
                  ?> -->
              </h2>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        </div>
          <font face="Britannic Bold" size="5"><a href="dashboard/v_dashboard_bangland.php" class="small-box-footer">
              &nbsp;&nbsp;Info lebih lanjut <i class="fa fa-arrow-circle-right"></i>
          </a></font>
        </div>
        </div>

<div class="col-md-6">
    <div class="thumbnail">
      <div class="panel-heading"><font face="Cooper Black" size="5">PKP-PK</font></div>
        <div class="panel-body">
          <!-- <?php
            include 'config/koneksi.php';
            $sqlid = mysqli_query($koneksi, "SELECT id FROM mon_pkppk WHERE app_status = 2 order by id DESC LIMIT 1") ;
            $dataid = mysqli_fetch_assoc($sqlid);
            $genID = (empty($dataid)) ? 0 : $dataid['id'];
          ?>        
          <h5>
          <?php
              $data = mysqli_query($koneksi, "SELECT DISTINCT t.teknisi_name FROM mon_pkppk as me inner join teknisi as t on 
                t.teknisi_id = me.teknisi_id 
                where me.id = $genID");
              $d = mysqli_fetch_assoc($data);
            ?>
            <font face="Britannic Bold" size="5">Teknisi : <a href="#"><?php echo $d['teknisi_name'] ;?></a></font>
          </h5>
          <h5>
            <?php
              $data = mysqli_query($koneksi, "SELECT DISTINCT pkppk_personil,tanggal FROM mon_pkppk where id = $genID");
              $d = mysqli_fetch_assoc($data);
            ?>
            <font face="Britannic Bold" size="5">Personil standby : <a href="#"><?php echo $d['pkppk_personil'] ;?></a></font>
          </h5>
          <h5>
            <?php if($d['tanggal'] != ''){ ?>
            <font face="Britannic Bold" size="5">Tanggal : <a href="#"><?php echo date("d-M-Y H:i:s", strtotime ($d['tanggal'])) ;?></a></font>
            <?php }else{ ?>
            <font face="Britannic Bold" size="5">Tanggal : <a href="#"></a></font>
            <?php } ?> -->
          </h5>
          <!-- ./col -->
          <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="ion ion-ios-gear-outline"></i></span>
            <div class="info-box-content">
              <span class="info-box-text-sm">Unservicable</span>
              <span class="info-box-number">
              <h2 class="text-center">
                <!-- <?php
                  $data = mysqli_query($koneksi, "select count(pkppk_id) as el_mon from mon_pkppk where pkppk_status = 'unserviceable' and id = $genID") ;
                  $d = mysqli_fetch_assoc($data);
                  echo $d['el_mon'] ;
                  ?> -->
              </h2>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
          <!-- ./col -->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>
            <div class="info-box-content">
              <span class="info-box-text-sm">Serviceable</span>
              <span class="info-box-number">
              <h2 class="text-center">
                <!-- <?php
                  $data = mysqli_query($koneksi, "select count(pkppk_id) as el_mon from mon_pkppk 
                    where pkppk_status = 'serviceable' and id = $genID") ;
                  $d = mysqli_fetch_assoc($data);
                  echo $d['el_mon'] ;
                  ?> -->
              </h2>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        </div>
          <font face="Britannic Bold" size="5"><a href="dashboard/v_dashboard_pkppk.php" class="small-box-footer">
              &nbsp;&nbsp;Info lebih lanjut <i class="fa fa-arrow-circle-right"></i>
          </a></font>
        </div>
        </div>

<div class="col-md-6">
    <div class="thumbnail">
      <div class="panel-heading"><font face="Cooper Black" size="5">AMC</font></div>
        <div class="panel-body">
          <!-- <?php
            include 'config/koneksi.php';
            $sqlid = mysqli_query($koneksi, "SELECT id FROM mon_amc WHERE app_status = 2 order by id DESC LIMIT 1") ;
            $dataid = mysqli_fetch_assoc($sqlid);
            $genID = (empty($dataid)) ? 0 : $dataid['id'];
          ?>  -->       
          <h5>
          <!-- <?php
              $data = mysqli_query($koneksi, "SELECT DISTINCT t.teknisi_name FROM mon_amc as me inner join teknisi as t on 
                t.teknisi_id = me.teknisi_id 
                where me.id = $genID");
              $d = mysqli_fetch_assoc($data);
            ?>
            <font face="Britannic Bold" size="5">Teknisi : <a href="#"><?php echo $d['teknisi_name'] ;?></a></font>
          </h5>
          <h5>
            <?php
              $data = mysqli_query($koneksi, "SELECT DISTINCT amc_personil,tanggal FROM mon_amc where id = $genID");
              $d = mysqli_fetch_assoc($data);
            ?>
            <font face="Britannic Bold" size="5">Personil standby : <a href="#"><?php echo $d['amc_personil'] ;?></a></font>
          </h5>
          <h5>
            <?php if($d['tanggal'] != ''){ ?>
            <font face="Britannic Bold" size="5">Tanggal : <a href="#"><?php echo date("d-M-Y H:i:s", strtotime ($d['tanggal'])) ;?></a></font>
            <?php }else{ ?>
            <font face="Britannic Bold" size="5">Tanggal : <a href="#"></a></font>
            <?php } ?> -->
          </h5>
          <!-- ./col -->
          <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="ion ion-ios-gear-outline"></i></span>
            <div class="info-box-content">
              <span class="info-box-text-sm">Unservicable</span>
              <span class="info-box-number">
              <h2 class="text-center">
                <!-- <?php
                  $data = mysqli_query($koneksi, "select count(amc_id) as el_mon from mon_amc where amc_status = 'unserviceable' and id = $genID") ;
                  $d = mysqli_fetch_assoc($data);
                  echo $d['el_mon'] ;
                  ?> -->
              </h2>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
          <!-- ./col -->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>
            <div class="info-box-content">
              <span class="info-box-text-sm">Serviceable</span>
              <span class="info-box-number">
              <h2 class="text-center">
                <!-- <?php
                  $data = mysqli_query($koneksi, "select count(amc_id) as el_mon from mon_amc 
                    where amc_status = 'serviceable' and id = $genID") ;
                  $d = mysqli_fetch_assoc($data);
                  echo $d['el_mon'] ;
                  ?> -->
              </h2>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        </div>
          <font face="Britannic Bold" size="5"><a href="dashboard/v_dashboard_amc.php" class="small-box-footer">
              &nbsp;&nbsp;Info lebih lanjut <i class="fa fa-arrow-circle-right"></i>
          </a></font>
        </div>
      </div>
</div>

          <!-- </tbody>
        </table> -->
      </div>
    </div>
  </body>
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
