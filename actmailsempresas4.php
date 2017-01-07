<?
include("conexion.php");

$Nit					= $_POST["Nit"];
$Nombre					= $_POST["Nombre"];
$Idcargo				= $_POST["Cargo"];
$Nombrado				= $_POST["Nombrado"];
$Tel					= $_POST["Tel"];
$Email					= $_POST["Email"];
$Envio					= $_POST["Envio"];
$Id						= $_POST["Id"];
$Idemp					= $_POST["Idemp"];
$Nota1					= $_POST["Nota1"];
$Nota2					= $_POST["Nota2"];
$Nota3					= $_POST["Nota3"];
$Nota4					= $_POST["Nota4"];


$query="UPDATE Empresasmails set Nombre='$Nombrado', Tel='$Tel', Email='$Email', Idcargo='$Idcargo', Nit='$Nit', Nota1='$Nota1', Nota2='$Nota2', Nota3='$Nota3', Nota4='$Nota4' Where Id='$Id'";
$result=mysql_query($query, $id);


header("location: actmailsempresas3.php?dale=si&Id=$Id&Idemp=$Idemp");	

?>