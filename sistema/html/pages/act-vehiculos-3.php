<?
session_start();

if (empty($_SESSION['sesionx']))
{
header("Location: login.php");
}

include("../../includes/conexion.php");


$Casillero			=$_SESSION['IdR'];

$Id 				=$_REQUEST["Id"];
$Placa				=$_REQUEST["Placa"];
$Conductor			=$_REQUEST["Conductor"];
$Marca				=$_REQUEST["Marca"];
$Serie				=$_REQUEST["Serie"];
$Motor				=$_REQUEST["Motor"];
$Combustible		=$_REQUEST["Combustible"];
$Modelo				=$_REQUEST["Modelo"];
$Combustible		=$_REQUEST["Combustible"];
$Modelo				=$_REQUEST["Modelo"];
$Soat 				=$_REQUEST["Soat"];
$Vencimiento 		=$_REQUEST["Vencimiento"];
$Runt 				=$_REQUEST["Runt"];

$sql="UPDATE Vehiculos SET Placa='$Placa', Conductor='$Conductor', Marca='$Marca', Serie='$Serie', 
Motor='$Motor', Combustible='$Combustible', Modelo='$Modelo', Soat='$Soat',
 Runt='$Runt' WHERE Id='$Id'";
mysql_query($sql);

?>

<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anterior']?>';
</script>	
