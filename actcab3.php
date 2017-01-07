<?
include("conexion.php");

$Nombre					= $_POST["Nombre"];
$Iddep					= $_POST["Iddep"];
$Idciu					= $_POST["Idciu"];
$Id						= $_POST["Id"];

$query="UPDATE Cabeceras set Nombre='$Nombre', Iddep='$Iddep', Idciu='$Idciu' Where Id='$Id'";
$result=mysql_query($query, $id);

?>


<script type="text/javascript">
	alert('La operacion se realizo con exito');
	parent.location.href=('puestoscontrol.php');
</script>