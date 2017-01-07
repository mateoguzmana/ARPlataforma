<?

$Id		= $_GET['Id'];

include("conexion.php");


$SQL1="Delete From Cargos Where Id='$Id'";
mysql_query($SQL1);	

?>

<script type="text/javascript">
	alert('La operacion se realizo con exito');
	parent.location.href=('cargoempresas.php');
</script>