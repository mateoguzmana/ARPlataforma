<?
include("conexion.php");
   
$nick	=	strtolower($_REQUEST['Usuario']);   

$query="SELECT COUNT(*) as Total FROM Usuarios where Alias = '$nick'" ;
$result=mysql_query($query, $id);

While($row=mysql_fetch_array($result))
{
$Total=$row["Total"];
}
   
if($Total > 0)   
{    
  // El usuario existe en la Base de Datos   
  echo 		"Usuario existe ...verifique"; 
  $boton =	"disabled"; 
}   
else  
{   
  // Ese nick esta libre   
  echo "";   
}  
?>