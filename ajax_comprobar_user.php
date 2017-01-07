<?
include("conexion.php");
   
$nick	=	$_REQUEST['Cedula'];   

$query="SELECT COUNT(*) as Total FROM Usuarios where Cedula = '$nick'" ;
$result=mysql_query($query, $id);

While($row=mysql_fetch_array($result))
{
$Total=$row["Total"];
}
   
if($Total > 0)   
{    
  // El usuario existe en la Base de Datos   
  echo "Cedula existe ...verifique";   
}   
else  
{   
  // Ese nick esta libre   
  echo "";   
}  
?>