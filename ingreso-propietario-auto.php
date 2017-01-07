<?
session_start();

include("conexion.php");

$Fechaing		= 	date("Y-m-d H:i:s");
$Usuarioing		= 	$_SESSION['Empresa'];

$Cedula			= 	$_REQUEST["Cedula"];

session_register('Newp');
$_SESSION['Newp']="si";

session_register('Modp');
$_SESSION['Modp']="si";

$sql="INSERT INTO  Propietarios (Cedula, Fechaing, Usuarioing)";
$sql.= "VALUES ('$Cedula', '$Fechaing', '$Usuarioing')";
mysql_query($sql);


$query="SELECT* FROM Propietarios Order By Id Asc" ;
$result=mysql_query($query, $id);

While($row=mysql_fetch_array($result))
{
$Id=$row["Id"];
}

header("location: propietarios-autos.php?dale=b&Id=$Id");

?>