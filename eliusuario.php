<?

$Id		= $_GET['Id'];

include("conexion.php");


$SQL2="Delete From Usuarios Where Id='$Id'";
mysql_query($SQL2);	


$SQL3="Delete From Comet Where userid='$Id'";
mysql_query($SQL3);	


header("location: actusers.php");
?>