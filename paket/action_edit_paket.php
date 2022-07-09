<?php
// koneksi database
session_start();
include '../config/koneksi.php';


// menangkap data yang di kirim dari form
$id_paket = $_POST['id_paket'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];
// $elband_name = $_POST['elband_name'];
// $myDate = date("Y-m-d H:i:s");
// $myUserID = $_SESSION["user_id"];


// menginput data ke database
$sql = "UPDATE paket SET jenis='$jenis',harga='$harga' WHERE id_paket = $id_paket";
if (mysqli_query($koneksi, $sql)){
		echo "<script>
				alert('data berhasil diupdate');
				document.location.href = 'v_paket.php';
		</script>";
}else{
	echo "<script>
				alert('data berhasil diupdate');
				document.location.href = 'v_paket.php';
		</script>";
}

mysqli_close($koneksi);

?>