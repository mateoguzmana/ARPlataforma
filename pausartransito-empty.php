<?
session_start();


$Idviaje 	= $_REQUEST["Id"];

$_SESSION['ctreporte']="";
$_SESSION['ctreportecliente']="";


$_SESSION['cbia']="";
$_SESSION['procesar']="";
$_SESSION['Nitmail']="";
$_SESSION['enviru']="";

$_SESSION['Vence']="";
$_SESSION['Inicioh']="";
$_SESSION['Iniciom']="";
$_SESSION['Vence2']="";
$_SESSION['Inicioh2']="";
$_SESSION['Iniciom2']="";
$_SESSION['Motivo']="";
$_SESSION['Reporte']="";

header("location: pausartransito.php?Id=$Idviaje");
?>