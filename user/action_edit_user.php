<?php
// koneksi database
session_start();
include '../config/koneksi.php';


// menangkap data yang di kirim dari form
$user_id = $_POST['id_pendaftaran'];
$username = $_POST['username'];
// $nama = $_POST['nama'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$level = $_POST['level'];
// $myDate = date("Y-m-d H:i:s");
// $myUserID = $_SESSION["user_id"];


// menginput data ke database
$sql = "UPDATE pendaftaran SET username='$username',`password`='$password',`level`='$level' WHERE `id_pendaftaran` = $user_id";
// var_dump($sql);
// die;
if (mysqli_query($koneksi, $sql)){
		echo "<script>
				alert('data berhasil diupdate');
				document.location.href = 'v_user.php';
		</script>";
}else{
	echo "<script>
				alert('data berhasil diupdate');
				document.location.href = 'v_user.php';
		</script>";
}

mysqli_close($koneksi);

?>