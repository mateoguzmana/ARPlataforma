<?

$Id		= $_GET['Id'];

include("conexion.php");


$SQL1="Delete From Agencias Where Id='$Id'";
mysql_query($SQL1);	


?>

<script type="text/javascript">
	alert('La operacion se realizo con exito');
	parent.location.href=('agencias.php');
</script>