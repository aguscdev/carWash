<?php

// koneksi database
session_start();
include '../config/koneksi.php';

$id_pembayaran = $_GET['id_pembayaran'];
// $myDate = date("Y-m-d H:i:s");
// $myUserID = $_SESSION["user_id"];


// menginput data ke database
$sql = "DELETE from pembayaran WHERE `id_pembayaran` = $id_pembayaran";
if (mysqli_query($koneksi, $sql)){
		echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'v_pembayaran.php';
		</script>";
}else{
	echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'v_pembayaran.php';
		</script>";
}

mysqli_close($koneksi);

?>