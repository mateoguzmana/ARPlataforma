<?
include("conexion.php");

$Nombre					= $_POST["Nombre"];
$Id						= $_POST["Id"];

$query="UPDATE Departamentos set Nombre='$Nombre' Where Id='$Id'";
$result=mysql_query($query, $id);


?>


<script type="text/javascript">
	alert('La operacion se realizo con exito');
	parent.location.href=('puestoscontrol.php');
</script>