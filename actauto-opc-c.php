<?
include("conexion.php");
session_start();

$Id				= 	$_REQUEST["Id"];

$Soat			= 	$_REQUEST["Soat"];
$Vencesoat		= 	$_REQUEST["Vencesoat"];
$Aseguradora	= 	$_REQUEST["Aseguradora"];
$Tarjempresa	= 	$_REQUEST["Tarjempresa"];
$Vencetarjeta	= 	$_REQUEST["Vencetarjeta"];
$Runt			= 	$_REQUEST["Runt"];
$Insptecnico	= 	$_REQUEST["Insptecnico"];
$Vencemientoinsp= 	$_REQUEST["Vencemientoinsp"];
$Respcivil		= 	$_REQUEST["Respcivil"];
$Venceresp		= 	$_REQUEST["Venceresp"];
$Asegurado		= 	$_REQUEST["Asegurado"];

$Satelital		= 	$_REQUEST["Satelital"];
$Usuario		= 	$_REQUEST["Usuario"];
$Pass			= 	$_REQUEST["Pass"];
$Empresaafilia	= 	$_REQUEST["Empresaafilia"];


$Usuariocambio	= 	$_SESSION['Empresa'];
$Fechacambio	= 	date("Y-m-d");


$picplaca		= 	$_REQUEST["picplaca"];
$picplaca		= strtolower($Placa);


$query="UPDATE Vehiculos set Soat='$Soat', Vencesoat='$Vencesoat', Aseguradora='$Aseguradora', Tarjempresa='$Tarjempresa', Vencetarjeta='$Vencetarjeta', Runt='$Runt', Insptecnico='$Insptecnico', Vencemientoinsp='$Vencemientoinsp', Respcivil='$Respcivil', Venceresp='$Venceresp', Asegurado='$Asegurado', Fechacambio='$Fechacambio', Usuariocambio='$Usuariocambio', Satelital='$Satelital', Usuario='$Usuario', Pass='$Pass', Empresaafilia='$Empresaafilia' Where Id='$Id'";
$result=mysql_query($query, $id);


$archivo1 = $_FILES['file']['tmp_name'];

if(!empty($archivo1))
{

(copy($archivo1, "vehiculos/".$picplaca.'.jpg'));
$foto1= $picplaca.'.jpg';

$query="UPDATE Vehiculos set Foto='$foto1' Where Id='$Id'";
$result=mysql_query($query, $id);

$imagen = "vehiculos/".$foto1; 
 
require_once('resizeimage.php'); 

    $myimg1 = resizeImage('vehiculos/'.$foto1,150,120);
    // Creat the new file
    imagejpeg($myimg1,'vehiculos/'.$foto1,100);
}





header("location: ingauto.php?dale=c&Id=$Id&mod=si");
?>