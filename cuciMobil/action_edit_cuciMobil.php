<?php
// koneksi database
session_start();
include '../config/koneksi.php';


// menangkap data yang di kirim dari form
$id_booking = $_POST['id_booking'];
$tgl = $_POST['tgl'];
$jenis_kendaraan = $_POST['jenis_kendaraan'];
$no_kendaraan = $_POST['no_kendaraan'];
$harga = $_POST['harga'];
$status = $_POST['status'];
// $myDate = date("Y-m-d H:i:s");
// $myUserID = $_SESSION["user_id"];


// menginput data ke database
$sql = "UPDATE booking SET tgl='$tgl',jenis_kendaraan='$jenis_kendaraan',no_kendaraan='$no_kendaraan',harga='$harga',status = '$status' WHERE id_booking = $id_booking";
// var_dump($sql);
// die;
if (mysqli_query($koneksi, $sql)){
		echo "<script>
				alert('data berhasil diupdate');
				document.location.href = 'v_cuciMobil.php';
		</script>";
}else{
	echo "<script>
				alert('data berhasil diupdate');
				document.location.href = 'v_cuciMobil.php';
		</script>";
}

mysqli_close($koneksi);

?>