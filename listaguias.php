<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}
include("conexion.php");

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
date_default_timezone_set('America/Bogota');


$nombreuser				=	$_SESSION['Empresa'];
$horaactualw 			=   date("Y-m-d H:i:s");
$fecha					=   date("Y-m-d");

$Cataporte				= $_REQUEST["Cataporte"];



if(!empty($Cataporte))
{
	$url	=	"printend-guias.php";	

			
			
 	// récupération du contenu HTML
	ob_start();
 	include(dirname(__FILE__).'/'.$url);
	$content = ob_get_clean();

	// conversion HTML => PDF
	require_once(dirname(__FILE__).'/html2pdf.class.php');

	$html2pdf = new HTML2PDF('P', 'A4', 'es');
	$html2pdf->pdf->SetDisplayMode(fullpage); 
	$html2pdf->WriteHTML($content, isset($_GET['']));
	$html2pdf->Output('guias-'.$Cataporte.'.pdf');
	
}

?>	