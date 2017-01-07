<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

include("conexion.php");


$Man		=	$_REQUEST["Man"];


$query="UPDATE Manifiestos set Estado = '0' Where Nromanifiesto='$Man'";
$result=mysql_query($query, $id);


$querys		="SELECT* FROM Asignacioncata where Manifiesto = '$Man'" ;
$results	=mysql_query($querys, $id);

While($rows	=mysql_fetch_array($results))
{
$Cataporte	=$rows["Cataporte"];


		$query="UPDATE Nrorecepcion set Estado = '0' Where Id =	'$Cataporte'";
		$result=mysql_query($query, $id);

}

$SQL2="Delete From Asignacioncata Where Manifiesto='$Man'";
mysql_query($SQL2);	




?>

<script language='javascript'>
	alert("La Operacion se realizo con Exito");	
	parent.location.href="asignacioncataportes.php";
</script>