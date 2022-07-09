<?php
// koneksi database
session_start();
include '../config/koneksi.php';


// menangkap data yang di kirim dari form
$id_pembayaran = $_POST['id_pembayaran'];
$tgl = $_POST['tgl'];
$total = $_POST['total'];
// $myDate = date("Y-m-d H:i:s");
// $myUserID = $_SESSION["user_id"];

$gambar = "img/";
$gambar_file = $gambar . basename($_FILES["bukti_pembayaran"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($gambar_file,PATHINFO_EXTENSION));

move_uploaded_file($_FILES["bukti_pembayaran"]["tmp_name"],$gambar_file);


// menginput data ke database
$sql = "UPDATE pembayaran SET tgl='$tgl',total='$total',bukti_pembayaran='$gambar_file' WHERE id_pembayaran = '$id_pembayaran'";
// var_dump($sql);
// die;
if (mysqli_query($koneksi, $sql)){
		echo "<script>
				alert('data berhasil diupdate');
				document.location.href = 'v_pembayaran.php';
		</script>";
}else{
	echo "<script>
				alert('data berhasil diupdate');
				document.location.href = 'v_pembayaran.php';
		</script>";
}

mysqli_close($koneksi);

?>