<?
include("conexion.php");
session_start(); 

$Idviaje		= $_REQUEST["Idviaje"];
$ctreporte		= $_REQUEST["ctreporte"];
$Usuario		= $_SESSION['Empresa'];

$fechaahora		= date("Y-m-d H:i:s");




	$query0080		=	"SELECT* FROM Viajes where Id = '$Idviaje'" ;
	$result0080		=	mysql_query($query0080, $id);
	
	While($row0080	=	mysql_fetch_array($result0080))
	{
	$Manifiesto				= $row0080["Manifiesto"];
	}
	
	$query="UPDATE Manifiestos set Asignado = '0',  Estado = '0' Where Nromanifiesto='$Manifiesto'";
	$result=mysql_query($query, $id);
	


	$SQL3="Delete From Asignacioncata Where Manifiesto='$Manifiesto'";
	mysql_query($SQL3);	
	
	
	$SQL3="Delete From Empresasremesas Where Manifiesto='$Manifiesto'";
	mysql_query($SQL3);	
	
	
	$query="UPDATE Nrorecepcion set Estado = '0', Finalizad = '0', Manifiesto = '' Where Manifiesto='$Manifiesto'";
	$result=mysql_query($query, $id);

	$SQL3="Delete From Viajes Where Id='$Idviaje'";
	mysql_query($SQL3);		
	
	
	$SQL3="Delete From Remisiones Where Manifiesto='$Manifiesto'";
	mysql_query($SQL3);		
	
	


  
?>

<script type="text/javascript">
redireccionar = function()
{
opener.location.href="listaasignacion.php";
window.close();
};
</script>


<body onload="redireccionar();"
</body>