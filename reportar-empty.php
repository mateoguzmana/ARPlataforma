<?
session_start();


$Idviaje 	= $_REQUEST["Id"];
$Idpuesto 	= $_REQUEST["Idpuesto"];
$Poss	 	= $_REQUEST["Pos"];

$_SESSION['ctreporte']="";

$_SESSION['ctreportecliente']="";

$_SESSION['Predilectaw']="";

$_SESSION['cbia']="";

$_SESSION['procesar']="";

$_SESSION['Nitmail']="";

$_SESSION['enviru']="";

header("location: reportar.php?Id=$Idviaje&Idpuesto=$Idpuesto&Pos=$Poss");
?>