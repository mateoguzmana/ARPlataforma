<?
include("conexion.php");
session_start();

$Id				= 	$_REQUEST["Id"];

$Aprobacion		= 	$_REQUEST["Aprobacion"];
$Ministerio		= 	$_REQUEST["Ministerio"];
$Fechaaprueba	= 	$_REQUEST["Fechaaprueba"];
$Useraaprueba	= 	$_REQUEST["Useraaprueba"];
$Propio			= 	$_REQUEST["Propio"];
$Comentarios	= 	$_REQUEST["Comentarios"];


$Usuariocambio	= 	$_SESSION['Empresa'];
$Fechacambio	= 	date("Y-m-d");


$query="UPDATE Vehiculos set Aprobacion='$Aprobacion', Ministerio='$Ministerio', Fechaaprueba='$Fechacambio', Useraaprueba='$Usuariocambio', Propio='$Propio', Fechacambio='$Fechacambio', Usuariocambio='$Usuariocambio', Comentarios = '$Comentarios' Where Id='$Id'";
$result=mysql_query($query, $id);




header("location: ingauto.php?dale=c&Id=$Id&mod=si");
?>