<?
session_start(); 
include("conexion.php");

date_default_timezone_set('America/Bogota');

$Usuario				= $_SESSION['Empresa'];
$Manifiesto				= $_POST["Manifiesto"];
$Idplan					= $_POST["Idplan"];
$Nota					= $_POST["Nota"];
$horaactual 			= date("Y-m-d H:i:s");
$Prioridad				= $_POST["Prioridad"];



$sql="INSERT INTO  Notasmanifiesto (Manifiesto, Fecha, Observaciones, Usuario, Prioridad)";
$sql.= "VALUES ('$Manifiesto', '$horaactual', '$Nota', '$Usuario', '$Prioridad')";
mysql_query($sql);

header("location: notaviaje.php?Idplan=$Idplan");
?>