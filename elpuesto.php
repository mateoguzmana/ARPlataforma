<?

$Id		= $_GET['Id'];

include("conexion.php");


$SQL2="Delete From Puestos Where Id='$Id'";
mysql_query($SQL2);	



?>


<script type="text/javascript">
	alert('La operacion se realizo con exito');
	parent.location.href=('puestoscontrol.php');
</script>