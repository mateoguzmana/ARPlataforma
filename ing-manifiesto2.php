<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

include("conexion.php");

$Nro		=	$_REQUEST["Nro"];
$Nit		=	$_REQUEST["Nit"];
$Cedula		=	$_REQUEST["Cedula"];
$Placa		=	$_REQUEST["Placa"];
$Origen		=	$_REQUEST["Origen"];
$Codorg		=	$_REQUEST["Codorg"];
$Coddest	=	$_REQUEST["Coddest"];
$Destino	=	$_REQUEST["Destino"];
$Nit		=	$_REQUEST["Nit"];
$Empresa	=	$_REQUEST["Empresa"];
$Cedprop	=	$_REQUEST["Cedprop"];
$Propietario=	$_REQUEST["Propietario"];
$Agencia	=	$_REQUEST["Agencia"];


$Fecha		=	date("Y-m-d");
$Fechaing	=	date("Y-m-d H:i:s");
$Creador	=	$_SESSION['Empresa'];	


$sqlo="INSERT INTO  Manifiestos (Sucursal, Nromanifiesto, Fecha, Propietario, Conductor, Placa, Empresa, Origen, Nombreorg, Destino, Nomdest, Fechacrea)";
$sqlo.= "VALUES ('$Agencia', '$Nro', '$Fecha', '$Cedprop', '$Cedula', '$Placa', '$Nit', '$Codorg', '$Origen', '$Coddest', '$Destino', '$Fechaing')";
mysql_query($sqlo);



?>

<script type="text/javascript">

alert("La Operacion se realizo con Exito");		
parent.location.href="controlmanifiestos.php";

</script>

