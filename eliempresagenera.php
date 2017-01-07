<?

$Id		= $_GET['Id'];

include("conexion.php");

$query="SELECT* FROM Empresas where Id = '$Id' " ;
$result=mysql_query($query, $id);

While($row=mysql_fetch_array($result))
{
$Nit=$row["Nit"];
}


$SQL1="Delete From Usuarios Where Cedula ='$Nit'";
mysql_query($SQL1);	

$SQL1="Delete From Empresas Where Id='$Id'";
mysql_query($SQL1);	

header("location: actempresagenera.php");
?>