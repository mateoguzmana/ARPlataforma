<?
include("conexion.php");

$Nombre					= $_POST["Nombre"];
$Cod					= $_POST["Cod"];

$sql="INSERT INTO  Agencias (Nombre, Cod)";
$sql.= "VALUES ('$Nombre', '$Cod')";
mysql_query($sql);


?>

<script type="text/javascript">
	alert('La operacion se realizo con exito');
	parent.location.href=('agencias.php');
</script>