<?php
// koneksi database
session_start();
include 'config/koneksi.php';
 
// menangkap data yang di kirim dari form
$tgl = $_POST['tgl'];
$jenis_kendaraan = $_POST['jenis_kendaraan'];
$no_kendaraan = $_POST['no_kendaraan'];
$harga = $_POST['harga'];
$status = $_POST['status'];
// $myDate = date("Y-m-d H:i:s");
$myUserID = $_SESSION["id_pendaftaran"];
// $isactive = 1;

//generated avseg id
// $sqlID = "SELECT id_booking FROM booking ORDER BY id_booking DESC LIMIT 1";
// $select = mysqli_query($koneksi, $sqlID);
// $data = mysqli_fetch_assoc($select);
// $myID = $data['id_booking'] + 1;
 
// menginput data ke database
$sql = "INSERT INTO booking values($myUserID,'$tgl','$jenis_kendaraan','$no_kendaraan','$harga','$status')";
// var_dump($sql);
// die;
if (mysqli_query($koneksi, $sql)){
		echo "<script>
				alert('data berhasil booking');
				document.location.href = 'listbooking.php';
		</script>";
}else{
	echo "<script>
				alert('data berhasil booking');
				document.location.href = 'listbooking.php';
		</script>";
}

mysqli_close($koneksi);
?>