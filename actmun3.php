<?
include("conexion.php");

$Nombre					= $_POST["Nombre"];
$Departamento			= $_POST["Departamento"];
$Id						= $_POST["Id"];
$Cod					= $_POST["Cod"];

$query="UPDATE Municipio set Nombre='$Nombre', Iddep='$Departamento', Cod='$Cod' Where Id='$Id'";
$result=mysql_query($query, $id);



?>


<script type="text/javascript">
	alert('La operacion se realizo con exito');
	parent.location.href=('puestoscontrol.php');
</script>