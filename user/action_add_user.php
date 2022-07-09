<?php
// koneksi database
session_start();
include '../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$alamat = $_POST["alamat"];
$no_tlp = $_POST["no_tlp"];
$level = $_POST['level'];
// $myDate = date("Y-m-d H:i:s");
$myUserID = $_SESSION["id_pendaftaran"];
// $isactive = 1;

//generated user id
$sqlID = "SELECT `id_pendaftaran` FROM pendaftaran ORDER BY `id_pendaftaran` DESC LIMIT 1";
$select = mysqli_query($koneksi, $sqlID);
$data = mysqli_fetch_assoc($select);
$myID = $data['id_pendaftaran'] + 1;
 
// menginput data ke database
$sql = "INSERT INTO pendaftaran VALUES('$myID','$nama','$email','$password','$level');";
$sql .= "INSERT INTO konsumen VALUES ('$myID', '$nama', '$alamat','$no_tlp');";
// var_dump($sql);
// die;
// if (mysqli_query($koneksi, $sql)){
if (mysqli_multi_query($koneksi, $sql)){
		echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_user.php';
		</script>";
}else{
	echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_user.php';
		</script>";
}

mysqli_close($koneksi);
?>