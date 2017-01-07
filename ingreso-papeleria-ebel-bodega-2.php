<?PHP
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

include("conexion.php");

date_default_timezone_set('America/Bogota');





$Nro			=	$_REQUEST["lea"];
$horaactual 	= 	date("Y-m-d H:i:s");
$Nrorecepcion	= 	$_SESSION['nrorecepcion'];
$nombreuser		= 	$_SESSION['Empresa'];


if(empty($Nro))
{
?>	
<script type="text/javascript">
	alert('No ingreso ninguna guia.');
	window.location.href=('ingreso-papeleria-ebel-bodega.php');
</script>
<?	
}
else
{
$queryA		="SELECT COUNT(*) as Total FROM Controlbox where Guia = '$Nro' and Leida = 0 " ;
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
        window.location.href=('ingreso-papeleria-ebel-bodega.php');
    </script>
    
<?
	}
	else
	{
		
		if(empty($Nrorecepcion))
		{
		$sql="INSERT INTO  Nrorecepcion (Fecha, Usuario)";
		$sql.= "VALUES ('$horaactual', '$nombreuser')";
		mysql_query($sql);
		
			$queryC		="SELECT Id FROM Nrorecepcion order by Id ASC" ;
			$resultC	=mysql_query($queryC, $id);
			
			while($rowC	=mysql_fetch_array($resultC))
			{
			$IdC		=$rowC["Id"];
			}	
			
			$_SESSION['nrorecepcion']	=	$IdC;
		}
		

		$IdC = $_SESSION['nrorecepcion'];
		

		$queryk		=	"UPDATE Controlbox set Leida = '1', Fechalee = '$horaactual', Usuariolee = '$nombreuser', Cataporte = '$IdC'  Where Guia = '$Nro'" ;
		$resultk	=	mysql_query($queryk, $id);	
		

	}



?>
<script type="text/javascript">
	window.location.href=('ingreso-papeleria-ebel-bodega.php');
</script>
<?
	
}

?>
