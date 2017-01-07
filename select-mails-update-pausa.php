<?
session_start();

include("conexion.php");

date_default_timezone_set('America/Bogota');

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$Usuario	= 	$_SESSION['Empresa'];

$Idviaje			=	$_REQUEST["Id"];
$Idpuesto			=	$_REQUEST["Idpuesto"];
$Pos				=	$_REQUEST["Pos"];


$_SESSION['procesar']="si";


header("location: pausartransito.php?Id=$Idviaje&Idpuesto=$Idpuesto&Pos=$Pos");

?>
