<?
include("conexion.php");

$Nombre					= $_POST["Nombre"];
$Iddep					= $_POST["Iddep"];
$Idciu					= $_POST["Idciu"];

$sql="INSERT INTO  Cabeceras (Nombre, Iddep, Idciu)";
$sql.= "VALUES ('$Nombre', '$Iddep', '$Idciu')";
mysql_query($sql);

?>


<script type="text/javascript">
	alert('La operacion se realizo con exito');
	parent.location.href=('puestoscontrol.php');
</script>