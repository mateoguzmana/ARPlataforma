<?
include("conexion.php");

$Nombre					= $_POST["Nombre"];
$Iddep					= $_POST["Departamento"];
$Cod					= $_POST["Cod"];


$sql="INSERT INTO  Municipio (Nombre, Iddep, Cod)";
$sql.= "VALUES ('$Nombre', '$Iddep', '$Cod')";
mysql_query($sql);

?>


<script type="text/javascript">
	alert('La operacion se realizo con exito');
	parent.location.href=('puestoscontrol.php');
</script>