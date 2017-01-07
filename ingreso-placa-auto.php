<?
session_start();

include("conexion.php");

$Fechaing		= 	date("Y-m-d H:i:s");
$Usuarioing		= 	$_SESSION['Empresa'];

$Placa			= 	$_REQUEST["Placa"];

$sql="INSERT INTO  Vehiculos (Placa, Fechaing, Usuarioing)";
$sql.= "VALUES ('$Placa', '$Fechaing', '$Usuarioing')";
mysql_query($sql);


$query="SELECT* FROM Vehiculos Order By Id Asc" ;
$result=mysql_query($query, $id);

While($row=mysql_fetch_array($result))
{
$Id=$row["Id"];
}

session_register('Plak');
$_SESSION['Plak']=$Placa;

session_register('New');
$_SESSION['New']="si";

session_register('Mod');
$_SESSION['Mod']="si";

header("location: automotores.php");

?>