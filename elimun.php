<?

$Id		= $_GET['Id'];

include("conexion.php");


$SQL2="Delete From Municipio Where Id='$Id'";
mysql_query($SQL2);	

$SQL3="Delete From Cabeceras Where Idciu='$Id'";
mysql_query($SQL3);	


?>


<script type="text/javascript">
	alert('La operacion se realizo con exito');
	parent.location.href=('puestoscontrol.php');
</script>