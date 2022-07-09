<?php 
// menghubungkan dengan dompdf
// require_once("../assets/assets/dompdf/dompdf_config.inc.php");
require '../assets/vendor/autoload.php';

// koneksi database
include '../config/koneksi.php';

$html = '<!DOCTYPE html>';
$html .= '<html>';
$html .= '<head>';
$html .='	<title>Laporan Pembayaran</title>';
$html .= '</head>';
$html .= '<body>';
$html .= '<center><h2>Laporan Pembayaran Car Wash</h2></center>';

$dari = $_GET['dari'];
$sampai = $_GET['sampai'];

$html .= '<h4>Laporan Pembayaran dari <b>'.$dari.'</b> sampai <b>'.$sampai.'</b></h4>';
$html .= '<table border="1" width="100%">';
$html .= '<tr>';
$html .= '<th>No Pembayaran</th>';
$html .= '<th>Tanggal Pembayaran</th>';
$html .= '<th>Total</th>';
$html .= '<th>Bukti Pembayaran</th>';
$html .= '</tr>';

				
$data = mysqli_query($koneksi,"SELECT * FROM pembayaran where tgl between ('".$dari."') and ('".$sampai."') ORDER BY id_pembayaran desc");
$no = 1;
				
while($d=mysqli_fetch_array($data)){

	$html .= '<tr>';
	$html .= '<td>'.$no++.'</td>';
	$html .= '<td>'.$d['tgl'].'</td>';
	$html .= '<td>'.$d['total'].'</td>';
	// $html .= '<td>'.$d['bukti_pembayaran'].'</td>';
	$html .= '<td><img src="../pembayaran/'.$d['bukti_pembayaran'].'" width="100" height="50"</td>';
	$html .= '</tr>';

}

$html .= '</table>';
$html .= '</body>';
$html .= '</html>';

use Dompdf\Dompdf;
$dompdf = new Dompdf();		
$dompdf->set_paper('a4','landscape');
$dompdf->load_html($html);
$dompdf->render();
// $dompdf->stream('laporan_dari'.$dari.'_sampai_'.$sampai.'.pdf');
$dompdf->stream('laporan Pembayaran Car Wash.pdf', array('Attachment'=>0));
?>