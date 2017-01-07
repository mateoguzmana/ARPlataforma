<?

$Id		= $_GET['Id'];

include("conexion.php");


$SQL1="Delete From Departamentos Where Id='$Id'";
mysql_query($SQL1);	

$SQL2="Delete From Municipio Where Iddep='$Id'";
mysql_query($SQL2);	

$SQL3="Delete From Cabeceras Where Iddep='$Id'";
mysql_query($SQL3);	


?>


<script type="text/javascript">
	alert('La operacion se realizo con exito');
	parent.location.href=('puestoscontrol.php');
</script>