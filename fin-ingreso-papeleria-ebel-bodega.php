<?PHP
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

header ("Expires: Thu, 27 Mar 1980 23:59:00 GMT"); //la pagina expira en una fecha pasada
header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); //ultima actualizacion ahora cuando la cargamos
header ("Cache-Control: no-cache, must-revalidate"); //no guardar en CACHE
header ("Pragma: no-cache"); 

date_default_timezone_set('America/Bogota');



include("conexion.php");


$Nro			=	$_REQUEST["lea"];
$horaactual 	= 	date("Y-m-d H:i:s");
$Nrorecepcion	= 	$_SESSION['nrorecepcion'];
$nombreuser		= 	$_SESSION['Empresa'];


unset($_SESSION['nrorecepcion']);  
		






?>
<script type="text/javascript">
	alert('La operacion se realizo con exito');
	window.location.href=('ingreso-papeleria-ebel-bodega.php');
</script>

