<?
include("conexion.php");

$Id						= $_POST["Id"];
$Nombre					= $_POST["Nombre"];
$Iddep					= $_POST["Iddep"];
$Municipio				= $_POST["Idciu"];
$Idcab					= $_POST["Idcab"];
$Tipo					= $_POST["Tipo"];
$Altura					= $_POST["Altura"];
$Ubicacion				= $_POST["Ubicacion"];

$query="UPDATE Puestos set Nombre='$Nombre', Iddep='$Iddep', Idmun='$Municipio', Tipo='$Tipo', Altura='$Altura', Ubicacion='$Ubicacion', Idcab='$Idcab' Where Id='$Id'";
$result=mysql_query($query, $id);



?>


<script type="text/javascript">
	alert('La operacion se realizo con exito');
	parent.location.href=('puestoscontrol.php');
</script>