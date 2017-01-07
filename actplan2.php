<?
include("conexion.php");

$Nombre					= $_POST["Nombre"];
$Id						= $_POST["Id"];
$select1				= $_POST["select1"];
$select2				= $_POST["select2"];
$selecta				= $_POST["selecta"];
$selectb				= $_POST["selectb"];

$query="UPDATE Planes set Iddepo='$select1', Iddepd='$selecta', Idpueo = '$select2',  Idpued = '$selectb', Nombre = '$Nombre'  Where Id='$Id'";
$result=mysql_query($query, $id);


$query="SELECT COUNT(*) as Total FROM Plan where Idplan = '$Id'" ;
$result=mysql_query($query, $id);

While($row=mysql_fetch_array($result))
{
$Total=$row["Total"];
}


$query00h="SELECT* FROM Plan where Idplan = '$Id' and Pos = '$Total' " ;
$result00h=mysql_query($query00h, $id);

While($row00h=mysql_fetch_array($result00h))
{
$Idpuestoh		=$row00h["Idpuesto"];
$Idh			=$row00h["Id"];
}


$query2="UPDATE Plan set Idpuesto='$selectb' Where Id = '$Idh'";
$result2=mysql_query($query2, $id);

			
session_start(); 
			
session_register('Iddelplanact');
$_SESSION['Iddelplanact']= $Id;


header("location: actplan3.php");
?>