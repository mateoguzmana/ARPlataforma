<?PHP
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

header ("Expires: Thu, 27 Mar 1980 23:59:00 GMT"); //la pagina expira en una fecha pasada
header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); //ultima actualizacion ahora cuando la cargamos
header ("Cache-Control: no-cache, must-revalidate"); //no guardar en CACHE
header ("Pragma: no-cache"); 

date_default_timezone_set('America/Bogota');



include("conexion.php");


$Nroasignacion		=	$_SESSION['Nroasignacion'];



	$queryA		="SELECT COUNT(*) as Total FROM Controlbox where Nroasignacion = '$Nroasignacion' " ;
	$resultA	=mysql_query($queryA, $id);
	
	while($rowA	=mysql_fetch_array($resultA))
	{
	$TotalA		=$rowA["Total"];
	}
	
	if($TotalA == 0)
	{
	$SQL2="Delete From Asignacionpaquete where Id = '$Nroasignacion' " ;
	mysql_query($SQL2);	
	}


unset($_SESSION['Nombre']);  
unset($_SESSION['Nit']); 
unset($_SESSION['Nroasignacion']); 		






?>
<script type="text/javascript">
	alert('La operacion se realizo con exito');
	window.location.href=('ingreso-sale-ebel-bodega.php');
</script>

