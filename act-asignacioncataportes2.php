<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

include("conexion.php");


$Manifiesto	=	$_REQUEST["Manifiesto"];
$Man		=	$_REQUEST["Man"];

$Fechaing	=	date("Y-m-d H:i:s");
$Creador	=	$_SESSION['Empresa'];


$datos		=	$_REQUEST["hidY"];
$datos	 	=	explode(',', $datos);


$Idopera	= $_REQUEST["Idopera"];
$Nit		= $_REQUEST["Nit"];


$datos		= $_REQUEST["hidY"];
$datos	 	= explode(',', $datos);

$datos2		= $_REQUEST["hidY2"];
$datos2	 	= explode(',', $datos2);




$query="UPDATE Manifiestos set Estado = '0' Where Nromanifiesto='$Man'";
$result=mysql_query($query, $id);

$query="UPDATE Manifiestos set Estado = '1' Where Nromanifiesto='$Manifiesto'";
$result=mysql_query($query, $id);


$SQL2="Delete From Asignacioncata Where Manifiesto='$Man'";
mysql_query($SQL2);	


$query="UPDATE Manifiestos set Estado = '1' Where Nromanifiesto = '$Manifiesto'";
$result=mysql_query($query, $id);



if(!empty($datos2))
{
	foreach($datos2 as $k2 => $v2 )
	{
		$query="UPDATE Nrorecepcion set Estado = '0' Where Id =	'$v2'";
		$result=mysql_query($query, $id);
	}
}






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
	location.href=('listacataportesasignados.php?Man=<?=$Manifiesto?>');
</script>