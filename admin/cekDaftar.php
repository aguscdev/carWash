<?php
session_start(); 
include "../config/koneksi.php";
	
$nama = $_POST["nama"];
$email = $_POST["email"];
$password = md5($_POST["password"]);
$alamat = $_POST["alamat"];
$no_tlp = $_POST["no_tlp"];
$level = $_POST["level"];

$sqlID = "SELECT id_pendaftaran FROM pendaftaran ORDER BY id_pendaftaran DESC LIMIT 1";
$select = mysqli_query($koneksi, $sqlID);
$data = mysqli_fetch_assoc($select);
$myID = $data['id_pendaftaran'] + 1;



$dataEmailBestie = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT COUNT(email) as e_bestie FROM pendaftaran WHERE email = '$email'"));

$bestie_rian = $dataEmailBestie['e_bestie'];

if($bestie_rian > 0){
	echo "<script>
				alert('Anda gagal mendaftar Karena Email Sudah Terdaftar!');
				document.location.href = 'pendaftaran.php';
		</script>";
}else{
	// query sql
	$sql = "INSERT INTO pendaftaran VALUES('$myID','$nama','$email','$password','$level');";
	$sql .= "INSERT INTO konsumen VALUES ('$myID', '$nama', '$alamat','$no_tlp');";
	$query = mysqli_multi_query($koneksi, $sql);
	// var_dump($sql);
	// die;
	// // echo $email;
	
	if($query){
		// die();
		$_SESSION["id_pendaftaran"] = $myID;
		$_SESSION["nama"] = $level;
		$_SESSION["email"] = $email;
		$_SESSION["alamat"] = $alamat;
		$_SESSION["email"] = $email;
		$_SESSION["no_tlp"] = $no_tlp;

		// header('location:login.php');
		echo "<script>
				alert('Anda Berhasil mendaftar! Silahkan Login.');
				document.location.href = 'login.php';
		</script>";
	} else {
		echo "<script>
				alert('Anda Gagal mendaftar!');
				document.location.href = 'pendaftaran.php';
		</script>";
	}

	mysqli_close($koneksi);
}

?>