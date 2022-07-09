<?php

// koneksi database
session_start();
include '../config/koneksi.php';

$id_booking = $_GET['id_booking'];
// $myDate = date("Y-m-d H:i:s");
// $myUserID = $_SESSION["user_id"];


// menginput data ke database
$sql = "DELETE from booking WHERE `id_booking` = $id_booking";
if (mysqli_query($koneksi, $sql)){
		echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'v_booking.php';
		</script>";
}else{
	echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'v_booking.php';
		</script>";
}

mysqli_close($koneksi);

?>