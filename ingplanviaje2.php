<?
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

include("conexion.php");

$Nombre					= $_POST["Nombre"];

$select1				= $_POST["select1"];
$select2				= $_POST["select2"];
$selecta				= $_POST["selecta"];
$selectb				= $_POST["selectb"];

$sql="INSERT INTO  Planes (Iddepo, Iddepd, Idpueo, Idpued, Nombre)";
$sql.= "VALUES ('$select1', '$selecta', '$select2', '$selectb', '$Nombre')";
mysql_query($sql);


$query008="SELECT* FROM Planes order by Id Asc" ;
$result008=mysql_query($query008, $id);

While($row008=mysql_fetch_array($result008))
{
$Id8			=$row008["Id"];
			
session_start(); 
			
session_register('Iddelplan');
$_SESSION['Iddelplan']= $Id8;
}

header("location: ingplanviaje3.php");
?>