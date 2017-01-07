<?
include("conexion.php");

$Nombre					= $_POST["Nombre"];
$Id						= $_POST["Id"];
$Cod					= $_POST["Cod"];

$query="UPDATE Agencias set Nombre='$Nombre', Cod='$Cod' Where Id='$Id'";
$result=mysql_query($query, $id);


?>

<script type="text/javascript">
	alert('La operacion se realizo con exito');
	parent.location.href=('agencias.php');
</script>