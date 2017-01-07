<?

$Id		= $_GET['Id'];

include("conexion.php");


$SQL2="Delete From Manifiestos Where Id='$Id'";
mysql_query($SQL2);	



?>

<script type="text/javascript">

alert("La Operacion se realizo con Exito");		
parent.location.href="controlmanifiestos.php";

</script>