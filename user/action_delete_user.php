<?php

// koneksi database
session_start();
include '../config/koneksi.php';

$user_id = $_GET['id_pendaftaran'];
// $myDate = date("Y-m-d H:i:s");
// $myUserID = $_SESSION["id_pendaftaran"];


// menginput data ke database
$sql = "DELETE from pendaftaran WHERE `id_pendaftaran` = $user_id";
if (mysqli_query($koneksi, $sql)){
		echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'v_user.php';
		</script>";
}else{
	echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'v_user.php';
		</script>";
}

mysqli_close($koneksi);

?>