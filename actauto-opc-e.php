<?
include("conexion.php");
session_start();

$Id				= 	$_REQUEST["Id"];

$Ref1			= 	$_REQUEST["Ref1"];
$Telref1		= 	$_REQUEST["Telref1"];
$Confref1		= 	$_REQUEST["Confref1"];
$Ciudref1		= 	$_REQUEST["Ciudref1"];
$Comref1		= 	$_REQUEST["Comref1"];

$Ref2			= 	$_REQUEST["Ref2"];
$Telref2		= 	$_REQUEST["Telref2"];
$Confref2		= 	$_REQUEST["Confref2"];
$Ciudref2		= 	$_REQUEST["Ciudref2"];
$Comref2		= 	$_REQUEST["Comref2"];

$Ref3			= 	$_REQUEST["Ref3"];
$Telref3		= 	$_REQUEST["Telref3"];
$Confref3		= 	$_REQUEST["Confref3"];
$Ciudref3		= 	$_REQUEST["Ciudref3"];
$Comref3		= 	$_REQUEST["Comref3"];



$query="UPDATE Vehiculos set Ref1='$Ref1', Telref1='$Telref1', Confref1='$Confref1', Ciudref1='$Ciudref1', Comref1='$Comref1', Ref2='$Ref2', Telref2='$Telref2', Confref2='$Confref2', Ciudref2='$Ciudref2', Comref2='$Comref2', Ref3='$Ref3', Telref3='$Telref3', Confref3='$Confref3', Ciudref3='$Ciudref3', Comref3='$Comref3' Where Id='$Id'";
$result=mysql_query($query, $id);




header("location: ingauto.php?dale=c&Id=$Id&mod=si");
?>