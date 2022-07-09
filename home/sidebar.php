<?php 
if ($_SESSION['username']=='') {
    header('location:../admin/login.php');
}
    $user = $_SESSION["username"];
    $user_id = $_SESSION["id_pendaftaran"];  
    $level = $_SESSION["level"];
?>

<header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">Menu Utama</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        </ul>
    </div>
    </nav>
</header>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
        <img src="../assets/img/no-avatar.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
        <p>
            <?php 
                echo $_SESSION["username"];
            ?>
        </p>
        <i class="fa fa-circle text-success"></i> Online
        </div>
    </div>
    <br>
    <ul class="sidebar-menu" data-widget="tree">
        <!-- <li class="header">MAIN NAVIGATION</li> -->
        <li class="">
            <a href="../home/home.php">
                <i class="fa fa-university text-aqua"></i> <span>Home</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
        <?php if ($level == 'ADMIN'){ ?>
        <li>
            <a href="#booking" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>BOOKING</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="booking" class="collapse ">
                <ul class="nav">
                    <li><a href="../booking/v_booking.php" class=""><i class="fa fa-list text-aqua"></i> &nbsp List Booking</a></li>
                    <?php if ($level == 'KONSUMEN'){ ?>
                    <li><a href="../monitoring/v_add_monitoringBooking.php" class=""><i class="fa fa fa-desktop text-aqua"></i> &nbsp Monitoring</a></li>
                    <?php } ?>
                </ul>
            </div>
        </li>
        <?php } ?>
        <?php if ($level == 'ADMIN'){ ?>
        <li>
            <a href="#paket" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>PAKET</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="paket" class="collapse ">
                <ul class="nav">
                    <li><a href="../paket/v_paket.php" class=""><i class="fa fa-list text-aqua"></i> &nbsp List Paket</a></li>
                    <?php if ($level == 'KONSUMEN'){ ?>
                    <li><a href="../paket/v_add_monitoringPaket.php" class=""><i class="fa fa fa-desktop text-aqua"></i> &nbsp Monitoring</a></li>
                    <?php } ?>
                </ul>
            </div>
        </li>
        <?php } ?>
        <?php if ($level == 'ADMIN'){ ?>
        <li>
            <a href="#cuciMobil" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>Cuci Mobil</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="cuciMobil" class="collapse ">
                <ul class="nav">
                    <li><a href="../cuciMobil/v_cuciMobil.php" class=""><i class="fa fa-list text-aqua"></i> &nbsp List Cuci Mobil</a></li>
                </ul>
            </div>
        </li>
        <?php } ?>
        <?php if ($level == 'OPERATOR'){ ?>
        <li>
            <a href="#cuciMobil" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>Cuci Mobil</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="cuciMobil" class="collapse ">
                <ul class="nav">
                    <li><a href="../cuciMobil/v_add_monitoringCuciMobil.php" class=""><i class="fa fa-list text-aqua"></i> &nbsp List Cuci Mobil</a></li>
                    <?php if ($level == 'OPERATOR'){ ?>
                    <li><a href="../cuciMobil/v_monitoringListSelesai.php" class=""><i class="fa fa fa-desktop text-aqua"></i> &nbsp List Selesai Cuci Mobil</a></li>
                    <?php } ?>
                </ul>
            </div>
        </li>
        <?php } ?>
        <?php if ($level == 'ADMIN'){ ?>
        <li>
            <a href="#pembayaran" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>PEMBAYARAN</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="pembayaran" class="collapse ">
                <ul class="nav">
                    <li><a href="../pembayaran/v_pembayaran.php" class=""><i class="fa fa-list text-aqua"></i> &nbsp List Pembayaran</a></li>
                    <?php if ($level == 'KONSUMEN'){ ?>
                    <li><a href="../pembayaran/v_add_monitoringPembayaran.php" class=""><i class="fa fa fa-desktop text-aqua"></i> &nbsp Monitoring</a></li>
                    <?php } ?>
                </ul>
            </div>
        </li>
        <?php } ?>
        <?php if ($level == 'ADMIN' || $level == 'PEMILIK'){ ?>
        <li>
            <a href="#laporan" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>LAPORAN</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="laporan" class="collapse ">
                <ul class="nav">
                    <li><a href="../laporan/v_laporan.php" class=""><i class="fa fa-list text-aqua"></i> &nbsp List Laporan</a></li>
                    <!-- <?php if ($level == 'ADMIN'){ ?>
                    <li><a href="../laporan/v_add_monitoringLaporan.php" class=""><i class="fa fa fa-desktop text-aqua"></i> &nbsp Monitoring</a></li>
                    <?php } ?> -->
                </ul>
            </div>
        </li>
        <?php } ?>
        <?php if ($level == 'ADMIN'){ ?>
        <li class="">
            <a href="../user/v_user.php">
                <i class="fa fa-user-o text-aqua"></i><span>User</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
        <?php } ?>
        <li class="">
            <a href="../admin/v_ganti_password.php">
                <i class="fa fa fa-cog text-aqua"></i><span>Ganti Password</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
        <li>
            <a href="../admin/logout.php">
                <i class="fa fa-power-off text-red"></i><span>Logout</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
    </ul>
    </section>
    <!-- /.sidebar -->
</aside>