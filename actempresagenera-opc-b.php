<?
include("conexion.php");


$Id				= 	$_REQUEST["Id"];
$tab			= 	$_REQUEST["tab"];

$Tipoempr		= 	$_REQUEST["Tipoempr"];
$Destino		= 	$_REQUEST["Destino"];
$Riesgo			= 	$_REQUEST["Riesgo"];
$Escolta		= 	$_REQUEST["Escolta"];
$Anticipo		= 	$_REQUEST["Anticipo"];
$Intermedia		= 	$_REQUEST["Intermedia"];
$Aseguradora	= 	$_REQUEST["Aseguradora"];
$Dircob			= 	$_REQUEST["Dircob"];
$Telcob			= 	$_REQUEST["Telcob"];
$Diapago		= 	$_REQUEST["Diapago"];
$Plazo			= 	$_REQUEST["Plazo"];
$Credito		= 	$_REQUEST["Credito"];
$Diascredito	= 	$_REQUEST["Diascredito"];
$Usuaprob		= 	$_REQUEST["Usuaprob"];
$Fechaapro		= 	$_REQUEST["Fechaapro"];
$Horaapro		= 	$_REQUEST["Horaapro"];
$Diascierre		= 	$_REQUEST["Diascierre"];


$query="UPDATE Empresas set Tipoempr='$Tipoempr', Destino='$Destino', Riesgo='$Riesgo', Escolta='$Escolta', Anticipo='$Anticipo', Intermedia='$Intermedia', Aseguradora='$Aseguradora', Dircob='$Dircob', Telcob='$Telcob', Diapago='$Diapago', Plazo='$Plazo', Credito='$Credito', Diascredito='$Diascredito', Usuaprob='$Usuaprob', Fechaapro='$Fechaapro', Horaapro='$Horaapro', Diascierre='$Diascierre' Where Id='$Id'";
$result=mysql_query($query, $id);



header("location: ingempresagenera.php?dale=d&Id=$Id&ok=0#tab2");
?>