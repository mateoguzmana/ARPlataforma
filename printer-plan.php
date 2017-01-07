<?
include("conexion.php");

 	// récupération du contenu HTML
	ob_start();
 	include(dirname(__FILE__).'/printpdf.php');
	$content = ob_get_clean();

	// conversion HTML => PDF
	require_once(dirname(__FILE__).'/html2pdf.class.php');

	$html2pdf = new HTML2PDF('L', 'A4', 'es');
	$html2pdf->pdf->SetDisplayMode(50); 
//	$html2pdf->pdf->SetProtection(array('print'), 'spipu');
	$html2pdf->WriteHTML($content, isset($_GET['']));
	$html2pdf->Output('plaviaje.pdf');
	
?>	