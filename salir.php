<?
session_start(); 

include("conexion.php");

$Cedula	=	$_SESSION['Cedulaxix'];

$querye="UPDATE Usuarios set Logueado=0 Where Cedula='$Cedula'";
$resulte=mysql_query($querye, $id);

$SQL4="Delete From Logueo Where Cedula = '$Cedula'";
mysql_query($SQL4);	
		

setcookie("logueado", '');

session_unset(); 
session_destroy();
						
header("Location: index-ok.php");

?> 
