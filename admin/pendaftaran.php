<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Car Wash</title>
    <link rel="shortcut icon" type="image/x-icon" href="../img/carwash.png" />
    <link href="../assets/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/assets/css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="col-md-4 col-md-offset-4 form-login">
        <div class="outter-form-login">
            <form action="cekDaftar.php" class="inner-login" method="post">
              <!-- <p class="text-center"><img alt="logo" src="../img/carwash.png" width="100px" height="100px"></p> -->
              <h2 class="text-center title-login">Daftar Akun</h2>
              <div class="form-group">
                  <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" required>
              </div>
              <div class="form-group col-md-6">
                    <input type="email" class="form-control" name="email" placeholder="Masukan Email" required>
                </div>
                <div class="form-group col-md-6">
                    <input type="password" class="form-control" name="password" placeholder="Masukan Password" required>
                </div>
              <div class="form-group">
                  <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat" required>
              </div>
              <div class="form-group col-md-6">
                    <input type="number" class="form-control" name="no_tlp" placeholder="Masukan No.Telepon" required>
                </div>
                <!-- <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="level" placeholder="KONSUMEN" required>
                </div>
 -->
                <div class="form-group col-md-6">
                  <select id="inputState" class="form-control" name="level">
                    <option selected>-- Option --</option>
                    <option>KONSUMEN</option>
                  </select>
                </div>

              <!-- <input type="hidden" class="form-control" name="no_tlp">
              <input type="hidden" class="form-control" name="level"> -->
              <input type="submit" name="submit" class="btn btn-block btn-custom-green" value="DAFTAR" />
              <!-- <a class="btn btn-block btn-custom-green" href="../index.php">DASHBOARD</a> -->
            </form>
            <h4 class="card-title"><a href="login.php" id="signup">sign in here?</a></h4>
        </div>
    </div>
    <script src="../assets/assets/js/jquery.min.js"></script>
    <script src="../assets/assets/js/bootstrap.min.js"></script>
  </body>
</html>
