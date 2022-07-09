<?php

// koneksi database
session_start();
include '../config/koneksi.php';

$id_paket = $_GET['id_paket'];
// $myDate = date("Y-m-d H:i:s");
// $myUserID = $_SESSION["user_id"];


// menginput data ke database
$sql = "DELETE from paket WHERE `id_paket` = $id_paket";
if (mysqli_query($koneksi, $sql)){
		echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'v_paket.php';
		</script>";
}else{
	echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'v_paket.php';
		</script>";
}

mysqli_close($koneksi);

?>