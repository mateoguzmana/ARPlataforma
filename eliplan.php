<?

$Id		= $_GET['Id'];

include("conexion.php");


$SQL1="Delete From Plan Where Idplan='$Id'";
mysql_query($SQL1);	

$SQL2="Delete From Planes Where Id='$Id'";
mysql_query($SQL2);	


header("location: actplanesviaje.php");
?>