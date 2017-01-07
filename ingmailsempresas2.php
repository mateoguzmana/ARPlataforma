<?
include("conexion.php");

$Nit					= $_POST["Nit"];
$Nombre					= $_POST["Nombre"];
$Idcargo				= $_POST["Cargo"];
$Nombrado				= $_POST["Nombrado"];
$Tel					= $_POST["Tel"];
$Email					= $_POST["Email"];
$Nota1					= $_POST["Nota1"];
$Nota2					= $_POST["Nota2"];
$Nota3					= $_POST["Nota3"];
$Nota4					= $_POST["Nota4"];


$sql="INSERT INTO  Empresasmails (Idcargo, Nit, Nombre, Tel, Email, Envio, Nota1, Nota2, Nota3, Nota4)";
$sql.= "VALUES ('$Idcargo', '$Nit', '$Nombrado', '$Tel', '$Email', '$Envio', '$Nota1', '$Nota2', '$Nota3', '$Nota4')";
mysql_query($sql);


header("location: ingmailsempresas.php?dale=si");

?>