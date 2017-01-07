<?
session_start();

include("conexion.php");


$Id						= $_POST["Id"];
$Ref1					= $_POST["Ref1"];
$Telref1				= $_POST["Telref1"];
$Confref1				= $_POST["Confref1"];
$Ciudref1				= $_POST["Ciudref1"];
$Comref1				= $_POST["Comref1"];

$Ref2					= $_POST["Ref2"];
$Telref2				= $_POST["Telref2"];
$Confref2				= $_POST["Confref2"];
$Ciudref2				= $_POST["Ciudref2"];
$Comref2				= $_POST["Comref2"];

$Ref3					= $_POST["Ref3"];
$Telref3				= $_POST["Telref3"];
$Confref3				= $_POST["Confref3"];
$Ciudref3				= $_POST["Ciudref3"];
$Comref3				= $_POST["Comref3"];



$Fechaing		= 	date("Y-m-d H:i:s");
$Creador		= 	$_SESSION['Empresa'];

$query="UPDATE Conductores set Ref1='$Ref1', Telref1='$Telref1', Confref1='$Confref1', Ciudref1='$Ciudref1', Comref1='$Comref1', Ref2='$Ref2', Telref2='$Telref2', Confref2='$Confref2', Ciudref2='$Ciudref2', Comref2='$Comref2', Ref3='$Ref3', Telref3='$Telref3', Confref3='$Confref3', Ciudref3='$Ciudref3', Comref3='$Comref3', Usuariomod='$Creador', Fechamod='$Fechaing' Where Id='$Id'";
$result=mysql_query($query, $id);



header("location: ing-conductor.php?Id=$Id&dale=c");

?>