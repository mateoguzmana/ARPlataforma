<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}
include("conexion.php");

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
date_default_timezone_set('America/Bogota');

$nombreuser	= 	$_SESSION['Empresa'];
$horaactual =	date("Y-m-d H:i:s");

$Nit				=	$_SESSION['Nit'];
$Nombre				=	utf8_decode($_SESSION['Nombre']);
$Nro				=	$_REQUEST["lea"];

$Nroasignacion		=	$_SESSION['Nroasignacion'];



if(empty($Nro))
{
?>	
<script type="text/javascript">
	alert('No ingreso ninguna guia.');
	window.location.href=('ingreso-sale-ebel-bodega-add.php');
</script>
<?	
}
else
{
	$queryA		="SELECT COUNT(*) as Total FROM Controlbox where Id = '$Nro' and Leida = 1 and Finaliza = 1  and Asignado = 0 and Devol <> 1 and Fin = 0  " ;
	$resultA	=mysql_query($queryA, $id);
	
	while($rowA	=mysql_fetch_array($resultA))
	{
	$TotalA		=$rowA["Total"];
	}


	
	if($TotalA == 0)
	{
?>
	<script type="text/javascript">
        alert('No existe la guia ingresada o ya fue leida.');
        window.location.href=('ingreso-sale-ebel-bodega-add.php');
    </script>
    
<?
	}
	else
	{




			if(empty($Nroasignacion))
			{
				
					$sql="INSERT INTO  Asignacionpaquete (Nombre, Cedula, Fecha)";
					$sql.= "VALUES ('$Nombre', '$Nit', '$horaactual')";
					mysql_query($sql);
				
			
					$query008		="SELECT* FROM Asignacionpaquete" ;
					$result008		=mysql_query($query008, $id);
					
					While($row008	=mysql_fetch_array($result008))
					{
					$Nroasignacion	=$row008["Id"];
					
					$_SESSION['Nroasignacion']	=	$Nroasignacion;
					}
					
			}

				$querykt	=	"UPDATE Controlbox set Asignado = '1', Fechaasigna = '$horaactual', Usuarioasigna = '$nombreuser', Conductor = '$Nit', Nombreconductor = '$Nombre', Nroasignacion = '$Nroasignacion' Where Id = '$Nro'";
				$resultkt	=	mysql_query($querykt, $id);

	}
								
								

?>

<script type="text/javascript">
	window.location.href=('ingreso-sale-ebel-bodega-add.php');
</script>
	
<?
}
?>	
