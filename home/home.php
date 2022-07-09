<!DOCTYPE html>
<html>
<?php
session_start();
if ($_SESSION['username']=='') 
{
  header('location:../admin/login.php');

}
  else{

  $user = $_SESSION["username"];
  $user_id = $_SESSION["id_pendaftaran"];  
  $level = $_SESSION["level"];

include '../home/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php include '../home/sidebar.php'; ?>
    <div class="contents">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Welcome <?php echo $_SESSION["username"]; ?>
          </h1>
          <br><br>
          <div class="panel panel-default">
              <div class="panel-body">
                  <img alt="logo" src="../img/carwash.png" width="150px" height="150px">
                  <br><br>
                  <p><h3>Car Wash Mikael Auto 18</h3></p>
                  <p>
                      <button type="button" class="btn btn-default btn-lg">
                          <span class="glyphicon glyphicon-home"></span> Jl. Raya Car Wash Mikael Auto 18 Tangerang
                      </button>
                  </p>
                  <p>
                      <button type="button" class="btn btn-default btn-lg">
                          <span class="glyphicon glyphicon-envelope"></span> mikaelauto18@gmail.com 
                      </button>
                  </p>
                  <p>
                      <button type="button" class="btn btn-default btn-lg">
                          <span class="glyphicon glyphicon-earphone"></span> 0328 - 669956
                      </button>
                  </p>
                  <br/><br/>
              </div>
          </div>
        </section><br>
      </div>
    </div>
  </div>
</body>
<?php include '../home/footer.php'; ?>
</html>
<?php } ?>
