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
$sqlmon = "SELECT id FROM mon_bangland ORDER BY id DESC LIMIT 1";
$select = mysqli_query($koneksi, $sqlmon);
$data = mysqli_fetch_assoc($select);
$id = (empty($data)) ? 1 : intval($data['id']) + 1;

if(isset($_POST))
{
	//bangland
	$sqlelb = "SELECT count(*) as jumlah FROM bangland";
	$selectelb = mysqli_query($koneksi, $sqlelb);
	$dataelb = mysqli_fetch_assoc($selectelb);

	//personil bangland
	$banglandPerso = $_POST['bangland_personil'];
	//teknisi bangland
	$teknisibangland = $_POST['teknisi_id_bangland'];
	//validasi_date
	$date_validasi = "SELECT tanggal FROM mon_bangland where date(tanggal) = date('$myDate')";
	$query_dv = mysqli_query($koneksi,$date_validasi) or die (msql_error());
	if (mysqli_num_rows($query_dv) >0) {
		echo "<script>
				alert('Tanggal sekarang sudah pernah di input, silahkan hubungi ADMIN!!');
				document.location.href = 'v_add_monitoring.php';
		</script>";
	}

	for($b = 0; $b < $dataelb['jumlah']; $b++)
	{
		if(!empty($_POST['bangland_status_'.$b]))
		{
			$bangland = explode(':', $_POST['bangland_status_'.$b]);
			$bangland_ket = $_POST['bangland_keterangan_'.$b];

			mysqli_query($koneksi, "INSERT INTO mon_bangland(id,bangland_id,tanggal,bangland_personil,teknisi_id,bangland_status,bangland_keterangan) values($id, $bangland[0], '$myDate', $banglandPerso,$teknisibangland, '$bangland[1]','$bangland_ket')");
		}
	}

	echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_add_monitoring.php';
		</script>";
}
?>