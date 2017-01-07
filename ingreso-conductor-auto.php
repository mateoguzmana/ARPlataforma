<?
session_start();

include("conexion.php");

$Fechaing		= 	date("Y-m-d H:i:s");
$Usuarioing		= 	$_SESSION['Empresa'];

$Cedula			= 	$_REQUEST["Cedula"];

session_register('Newc');
$_SESSION['Newc']="si";

session_register('Modc');
$_SESSION['Modc']="si";


$sql="INSERT INTO  Conductores (Cedula, Fechaing, Usuarioing)";
$sql.= "VALUES ('$Cedula', '$Fechaing', '$Usuarioing')";
mysql_query($sql);


$query="SELECT* FROM Conductores Order By Id Asc" ;
$result=mysql_query($query, $id);

While($row=mysql_fetch_array($result))
{
$Id=$row["Id"];
}

header("location: conductor-autos.php?dale=b&Id=$Id");

?>