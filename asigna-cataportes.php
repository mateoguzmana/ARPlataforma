<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

include("conexion.php");


$Manifiesto	=	$_REQUEST["Manifiesto"];
$Fechaing	=	date("Y-m-d H:i:s");
$Creador	=	$_SESSION['Empresa'];


$datos		=	$_REQUEST["hidY"];

$datos	 	=	explode(',', $datos);

$query="UPDATE Manifiestos set Estado = '1' Where Nromanifiesto='$Manifiesto'";
$result=mysql_query($query, $id);


if(!empty($datos))
{
	$cont	=	0;
	foreach($datos as $k => $v )
	{

		$sql="INSERT INTO Asignacioncata (Manifiesto, Cataporte, Usuario, Fecha)";
		$sql.= "VALUES ('$Manifiesto', '$v', '$Creador', '$Fechaing')";
		mysql_query($sql);
		
		$query="UPDATE Nrorecepcion set Estado = '1' Where Id =	'$v'";
		$result=mysql_query($query, $id);


	$cont ++;

	}
}
?>
<script language='javascript'>
	alert("La Operacion se realizo con Exito");	
	location.href=('asignacioncataportes.php');
</script>