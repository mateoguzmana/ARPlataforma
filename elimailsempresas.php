<?

$Id		= $_GET['Id'];
$Idemp	= $_GET['Idemp'];

include("conexion.php");


$SQL1="Delete From Empresasmails Where Id='$Id'";
mysql_query($SQL1);	


header("location: actmailsempresas2.php?Id=$Idemp");
?>