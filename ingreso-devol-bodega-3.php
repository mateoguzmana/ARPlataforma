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

$Motivo				=	$_REQUEST['Motivo'];
$Nro				=	$_REQUEST["Nro"];

if(empty($Nro) || empty($Motivo))
{
?>	
<script type="text/javascript">
	alert('No selecciono un motivo de devolucion.');
	window.location.href=('ingreso-devol-bodega-2.php?lea=<?=$Nro?>');
</script>
<?	
}
else
{
				
					$sql="INSERT INTO  Devoluciones (Motivo, Nro, Fecha)";
					$sql.= "VALUES ('$Motivo', '$Nro', '$horaactual')";
					mysql_query($sql);
				

					$querykt	=	"UPDATE Controlbox set Devol = '1', Fechadevol = '$horaactual', Userdevol = '$nombreuser' Where Id = '$Nro'";
					$resultkt	=	mysql_query($querykt, $id);

?>

<script type="text/javascript">
	window.location.href=('ingreso-devol-bodega.php');
</script>
	
<?
}
?>	
