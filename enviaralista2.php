<?
session_start(); 

$Id				= $_REQUEST['Idviaje'];
$man			= $_REQUEST['man'];
$ctreporte		= $_REQUEST["ctreporte"];
$Usuario		= $_SESSION['Empresa'];



$fechaahora		= date("Y-m-d H:i:s");

include("conexion.php");

$query2cg="UPDATE Guias set Manifiesto = '', Nit = '', Nombre = '', Useract = '', Fechaact = '', Estado = '', Entrego = '', Pago = '', Valor = '', Nrocom = '', Usuarioing = '',  Fechahora  = ''  Where Manifiesto = '$man'";
$result2cg=mysql_query($query2cg, $id);

	$query0080		=	"SELECT* FROM Viajes where Id = '$Id'" ;
	$result0080		=	mysql_query($query0080, $id);
	
	While($row0080	=	mysql_fetch_array($result0080))
	{
	$Manifiesto				= $row0080["Manifiesto"];
	}
	
	$query0081		=	"SELECT* FROM Manifiestos where Nromanifiesto = '$Manifiesto'" ;
	$result0081		=	mysql_query($query0081, $id);
	
	While($row0081	=	mysql_fetch_array($result0081))
	{
	$Conductor				= $row0081["Conductor"];
	$Placa					= $row0081["Placa"];
	$Nombreorg				= $row0081["Nombreorg"];
	$Nomdest				= $row0081["Nomdest"];
	}
	$fechaahora	= date("Y-m-d H:i:s");
	
	$query00800		=	"SELECT* FROM Enturnamiento where Cedula = '$Conductor' order by Id asc" ;
	$result00800	=	mysql_query($query00800, $id);
	
	While($row00800	=	mysql_fetch_array($result00800))
	{
	$Predilecta 	= $row00800["Predilecta"];
	}
	
	$query88878="UPDATE Conductores set  Enturnado='1' Where Cedula ='$Conductor'";
	$result88878=mysql_query($query88878, $id);
	
	$sql222="INSERT INTO  Enturnamiento (Cedula, Placa, Ciudad, Estado, Fecha, Comentarios, Usuario, Predilecta)";
	$sql222.= "VALUES ('$Conductor', '$Placa', '$Nombreorg', '1', '$fechaahora', 'El viaje se cancelo y queda enturnado', '$Usuario', '$Predilecta')";
	mysql_query($sql222);


$query="UPDATE Viajes set Motivoenvio = '$ctreporte', Usuarioenvio = '$Usuario', Fechaenvio = '$fechaahora', Iniciado = '1', Estad = '0' Where Id = '$Id'";
$result=mysql_query($query, $id);


		$query008c="SELECT* FROM Remisiones where Manifiesto = '$Manifiesto'" ;
		$result008c=mysql_query($query008c, $id);
		
		While($row008c=mysql_fetch_array($result008c))
		{
		$Remesac		=$row008c["Remesa"];
		
		$query2c="UPDATE Remisiones set Estad = 0, Fechafin = '', Userfin = ''  Where Remesa = '$Remesac'";
		$result2c=mysql_query($query2c, $id);
		
		}


$SQL1="Delete From Recorrido Where Idviaje ='$Id'";
mysql_query($SQL1);

$SQL2="Delete From Recorridoalert Where Idplan ='$Id'";
mysql_query($SQL2);

$SQL3="Delete From Tiempos Where Idviaje ='$Id'";
mysql_query($SQL3);

$SQL5="Delete From tiempos Where Idviaje ='$Id'";
mysql_query($SQL5);

$SQL6="Delete From Pausa Where Idviaje ='$Id'";
mysql_query($SQL6);

$SQL7="Delete From Pausar Where Idviaje ='$Id'";
mysql_query($SQL7);
/*
$SQL8="Delete From Notrasextra Where Idplan ='$Id'";
mysql_query($SQL8);
*/
$SQL9="Delete From Descarga Where Idviaje ='$Id'";
mysql_query($SQL9);

$SQL10="Delete From Datosviaje Where Idviaje ='$Id'";
mysql_query($SQL10);

$SQL11="Delete From Citas Where Idviaje ='$Id'";
mysql_query($SQL11);



?>
<script type="text/javascript">
redireccionar = function()
{
opener.parent.location.href="asignarruta.php";
window.close();
};
</script>


<body onload="redireccionar();"
</body>