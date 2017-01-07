<?
include("conexion.php");

$Nombre					= $_POST["Nombre"];
$Iddep					= $_POST["Iddep"];
$Municipio				= $_POST["Idciu"];
$Tipo					= $_POST["Tipo"];
$Altura					= $_POST["Altura"];
$Ubicacion				= $_POST["Ubicacion"];
$Idcab					= $_POST["Idcab"];

$sql="INSERT INTO  Puestos (Nombre, Iddep, Idmun, Altura, Tipo, Ubicacion, Idcab)";
$sql.= "VALUES ('$Nombre', '$Iddep', '$Municipio', '$Altura', '$Tipo', '$Ubicacion', '$Idcab')";
mysql_query($sql);

?>

<script type="text/javascript">
	alert('La operacion se realizo con exito');
	parent.location.href=('puestoscontrol.php');
</script>