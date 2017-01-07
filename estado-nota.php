<?
session_start(); 

include("conexion.php");

$Usuario	= $_SESSION['Empresa'];

$horaactual	= date("Y-m-d H:i:s");

$Idviaje	= $_POST["Idviaje"];
$Total		= $_POST["Total"];

for ($a = 1 ; $a <= $Total; $a ++) 

{
$Reporta		= $_POST["opciones".$a];

	if($Reporta==1)
	{
		$Id	= $_POST["Id".$a];
		
		$query	=	"UPDATE Notasmanifiesto set Estado='1', Fechaesta ='$horaactual', Usuarioesta ='$Usuario'  Where Id='$Id'";
		$result	=	mysql_query($query, $id);
		
	}

}


header("location: notaviaje.php?Idplan=$Idviaje");

 
?>
