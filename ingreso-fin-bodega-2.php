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

$Nro				=	$_REQUEST["lea"];

if(empty($Nro))
{
?>	
<script type="text/javascript">
	alert('No ingreso ninguna guia.');
	window.location.href=('ingreso-fin-bodega.php');
</script>
<?	
}
else
{
	
	
	$queryA		="SELECT COUNT(*) as Total FROM Controlbox where Id = '$Nro' and Leida = 1 and Finaliza = 1  and Asignado = 1 and Devol <> 1 and Fin = 0  " ;
	
	//echo $queryA;
	$resultA	=mysql_query($queryA, $id);
	
	while($rowA	=mysql_fetch_array($resultA))
	{
	$TotalA		=$rowA["Total"];
	}

	//echo '<br>'.$TotalA;
	
	if($TotalA == 0)
	{
?>
	<script type="text/javascript">
        alert('La guia ingresada no esta disponible para finalizar.');
        window.location.href=('ingreso-fin-bodega.php');
    </script>
    
<?
	}
	else
	{


				
				
				$querykt	=	"UPDATE Controlbox set Fin = '1', Fechafin = '$horaactual', Userfin = '$nombreuser' Where Id = '$Nro'";
				$resultkt	=	mysql_query($querykt, $id);
	}
								


?>

<script type="text/javascript">
	window.location.href=('ingreso-fin-bodega.php');
</script>
	
<?
}
?>	
