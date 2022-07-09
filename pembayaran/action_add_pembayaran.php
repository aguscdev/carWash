<?php
// koneksi database
session_start();
include '../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$tgl = $_POST['tgl'];
$total = $_POST['total'];
// $myDate = date("Y-m-d H:i:s");
// $myUserID = $_SESSION["user_id"];
// $isactive = 1;

$gambar = "img/";
$gambar_file = $gambar . basename($_FILES["bukti_pembayaran"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($gambar_file,PATHINFO_EXTENSION));


//generated bangland id
$sqlID = "SELECT id_pembayaran FROM pembayaran ORDER BY id_pembayaran DESC LIMIT 1";
$select = mysqli_query($koneksi, $sqlID);
$data = mysqli_fetch_assoc($select);
$myID = $data['id_pembayaran'] + 1;

move_uploaded_file($_FILES["bukti_pembayaran"]["tmp_name"],$gambar_file);
 
// menginput data ke database
$sql = "INSERT INTO pembayaran values($myID,'$tgl','$total','$gambar_file')";
// var_dump($sql);
// die;
if (mysqli_query($koneksi, $sql)){
		echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_pembayaran.php';
		</script>";
}else{
	echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_pembayaran.php';
		</script>";
}

mysqli_close($koneksi);
?>