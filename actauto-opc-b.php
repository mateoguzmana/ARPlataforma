<?
include("conexion.php");
session_start();

$Id				= 	$_REQUEST["Id"];
$Propietario	= 	$_REQUEST["Propietario"];
$Conductor		= 	$_REQUEST["Conductor"];
$Usuariocambio	= 	$_SESSION['Empresa'];
$Fechacambio	= 	date("Y-m-d");


$query="UPDATE Vehiculos set Propietario='$Propietario', Conductor='$Conductor', Fechacambio='$Fechacambio', Usuariocambio='$Usuariocambio' Where Id='$Id'";
$result=mysql_query($query, $id);



header("location: ingauto.php?dale=c&Id=$Id&mod=si");
?>