<?
include("conexion.php");


$Id				= 	$_REQUEST["Id"];
$tab			= 	$_REQUEST["tab"];

$Nombrerep		= 	$_REQUEST["Nombrerep"];
$Telrep			= 	$_REQUEST["Telrep"];
$Extrep			= 	$_REQUEST["Extrep"];
$Nombreger		= 	$_REQUEST["Nombreger"];
$Telger			= 	$_REQUEST["Telger"];
$Extger			= 	$_REQUEST["Extger"];
$Nombrecont		= 	$_REQUEST["Nombrecont"];
$Telcont		= 	$_REQUEST["Telcont"];
$Extcont		= 	$_REQUEST["Extcont"];
$Refbanco1		= 	$_REQUEST["Refbanco1"];
$Dirbanco1		= 	$_REQUEST["Dirbanco1"];
$Ciudbanco1		= 	$_REQUEST["Ciudbanco1"];
$Contbanco1		= 	$_REQUEST["Contbanco1"];
$Telbanco1		= 	$_REQUEST["Telbanco1"];
$Refbanco2		= 	$_REQUEST["Refbanco2"];
$Dirbanco2		= 	$_REQUEST["Dirbanco2"];
$Ciudbanco2		= 	$_REQUEST["Ciudbanco2"];
$Contbanco2		= 	$_REQUEST["Contbanco2"];
$Telbanco2		= 	$_REQUEST["Telbanco2"];


$query="UPDATE Empresas set Nombrerep='$Nombrerep', Telrep='$Telrep', Extrep='$Extrep', Nombreger='$Nombreger', Telger='$Telger', Extger='$Extger', Nombrecont='$Nombrecont', Telcont='$Telcont', Extcont='$Extcont', Refbanco1='$Refbanco1', Dirbanco1='$Dirbanco1', Ciudbanco1='$Ciudbanco1', Contbanco1='$Contbanco1', Telbanco1='$Telbanco1', Refbanco2='$Refbanco2', Dirbanco2='$Dirbanco2', Ciudbanco2='$Ciudbanco2', Contbanco2='$Contbanco2', Telbanco2='$Telbanco2' Where Id='$Id'";
$result=mysql_query($query, $id);



header("location: ingempresagenera.php?dale=e&Id=$Id&ok=0#tab3");
?>