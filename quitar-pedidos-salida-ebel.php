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

$nombreuser	= 	$_SESSION['Empresa'];
$horaactual =	date("Y-m-d H:i:s");


$Nro				=	$_REQUEST["Nro"];



				$querykt	=	"UPDATE Controlbox set Asignado = '0', Fechaasigna = '0000-00-00 00:00:00', Usuarioasigna = '', Conductor = '', Nombreconductor = '', Nroasignacion = '0' Where Id = '$Nro'";
				$resultkt	=	mysql_query($querykt, $id);


								
								

?>

<script type="text/javascript">
	
	window.location.href=('ingreso-sale-ebel-bodega-report.php');
</script>

