<?
include("conexion.php");

$Nombre					= $_POST["Nombre"];

$sql="INSERT INTO  Cargos (Nombre)";
$sql.= "VALUES ('$Nombre')";
mysql_query($sql);

?>

<script type="text/javascript">
	alert('La operacion se realizo con exito');
	parent.location.href=('cargoempresas.php');
</script>