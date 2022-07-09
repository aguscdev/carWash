<?php
// koneksi database
session_start();
include '../config/koneksi.php';
 
// menangkap data yang di kirim dari form
// $elband_name = $_POST['elband_name'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];
// $myDate = date("Y-m-d H:i:s");
// $myUserID = $_SESSION["user_id"];
// $isactive = 1;

//generated elband id
$sqlID = "SELECT id_paket FROM paket ORDER BY id_paket DESC LIMIT 1";
$select = mysqli_query($koneksi, $sqlID);
$data = mysqli_fetch_assoc($select);
$myID = $data['id_paket'] + 1;

// menginput data ke database
$sql = "INSERT INTO paket values($myID,'$jenis','$harga')";
// var_dump($sql);
if (mysqli_query($koneksi, $sql)){
		echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_paket.php';
		</script>";
}else{
	echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_paket.php';
		</script>";
}
mysqli_close($koneksi);

?>