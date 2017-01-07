<?
session_start();


$Idviaje 	= $_REQUEST["Idplan"];

$_SESSION['ctreporte']="";

$_SESSION['ctreportecliente']="";

$_SESSION['Predilectaw']="";

$_SESSION['cbia']="";

$_SESSION['procesar']="";

$_SESSION['Nitmail']="";

$_SESSION['enviru']="";

header("location: adicionar.php?Id=$Idviaje");
?>