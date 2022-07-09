<?php

// menghubungkan php dengan koneksi database
include '../config/koneksi.php';
session_start();

if ($_SESSION['username']=='') {
	header('location:login.php');
}else{
	$user = $_SESSION["username"];
	$user_id = $_SESSION["id_pendaftaran"];	
	$level = $_SESSION["level"];

	// var_dump($user,$user_id,$level);
	// die;

	if ($level =='ADMIN') {
		header('location:../home/home.php');
	}
	elseif ($level=='KONSUMEN') {
		//header('location:../home/home.php');
		header('location:../index.php');
	}
	elseif ($level=='OPERATOR') {
		header('location:../home/home.php');
	}
	elseif ($level=='PEMILIK') {
		header('location:../home/home.php');
	}

}


?>