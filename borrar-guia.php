<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

$Id		= $_GET['Id'];

include("conexion.php");


$SQL2="Delete From Controlbox Where Id='$Id'";
mysql_query($SQL2);	



?>

<script type="text/javascript">

alert("La Operacion se realizo con Exito");		
parent.location.href="carga-guia.php";

</script>