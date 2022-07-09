<?php
// koneksi database
session_start();
include '../config/koneksi.php';

//set time zone
date_default_timezone_set("Asia/Jakarta");
 
// menangkap data yang di kirim dari form
$myDate = date('Y-m-d H:i:s');
$myUser = $_SESSION['user_id'];

//Generate monitoring id
$sqlmon = "SELECT id FROM mon_elband ORDER BY id DESC LIMIT 1";
$select = mysqli_query($koneksi, $sqlmon);
$data = mysqli_fetch_assoc($select);
$id = (empty($data)) ? 1 : intval($data['id']) + 1;

if(isset($_POST))
{
	//elband
	$sqlelb = "SELECT count(*) as jumlah FROM elband";
	$selectelb = mysqli_query($koneksi, $sqlelb);
	$dataelb = mysqli_fetch_assoc($selectelb);

	//personil elband
	$elbandPerso = $_POST['elband_personil'];
	//teknisi elband
	$teknisiElband = $_POST['teknisi_id_elband'];
	//validasi_date
	$date_validasi = "SELECT tanggal FROM mon_elband where date(tanggal) = date('$myDate')";
	$query_dv = mysqli_query($koneksi,$date_validasi) or die (msql_error());
	if (mysqli_num_rows($query_dv) >0) {
		echo "<script>
				alert('Tanggal sekarang sudah pernah di input, silahkan hubungi ADMIN!!');
				document.location.href = 'v_add_monitoring.php';
		</script>";
	}

	for($b = 0; $b < $dataelb['jumlah']; $b++)
	{
		if(!empty($_POST['elband_status_'.$b]))
		{
			$elband = explode(':', $_POST['elband_status_'.$b]);
			$elband_ket = $_POST['elband_keterangan_'.$b];

			mysqli_query($koneksi, "INSERT INTO mon_elband(id,elband_id,tanggal,elband_personil,teknisi_id,elband_status,elband_keterangan) values($id, $elband[0], '$myDate', $elbandPerso,$teknisiElband, '$elband[1]','$elband_ket')");
		}
	}

	echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_add_monitoring.php';
		</script>";
}
?>