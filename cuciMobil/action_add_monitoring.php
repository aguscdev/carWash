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
$sqlmon = "SELECT id FROM mon_listrik ORDER BY id DESC LIMIT 1";
$select = mysqli_query($koneksi, $sqlmon);
$data = mysqli_fetch_assoc($select);
$id = (empty($data)) ? 1 : intval($data['id']) + 1;

if(isset($_POST))
{
	//listrik
	$sqlelb = "SELECT count(*) as jumlah FROM listrik";
	$selectelb = mysqli_query($koneksi, $sqlelb);
	$dataelb = mysqli_fetch_assoc($selectelb);
	//personil listrik
	$listrikPerso = $_POST['listrik_personil'];
	//teknisi listrik
	$teknisilistrik = $_POST['teknisi_id_listrik'];
	//validasi_date
	$date_validasi = "SELECT tanggal FROM mon_listrik where date(tanggal) = date('$myDate')";
	$query_dv = mysqli_query($koneksi,$date_validasi) or die (msql_error());
	if (mysqli_num_rows($query_dv) >0) {
		echo "<script>
				alert('Tanggal sekarang sudah pernah di input, silahkan hubungi ADMIN!!');
				document.location.href = 'v_add_monitoring.php';
		</script>";
	}
			
	for($b = 0; $b < $dataelb['jumlah']; $b++)
	{
		if(!empty($_POST['listrik_status_'.$b]))
		{
			$listrik = explode(':', $_POST['listrik_status_'.$b]);
			$listrik_ket = $_POST['listrik_keterangan_'.$b];

			mysqli_query($koneksi, "INSERT INTO mon_listrik(id,listrik_id,tanggal,listrik_personil,teknisi_id,listrik_status,listrik_keterangan) values($id, $listrik[0], '$myDate', $listrikPerso,$teknisilistrik, '$listrik[1]','$listrik_ket')");
		}
	}

	echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_add_monitoring.php';
		</script>";
}
?>