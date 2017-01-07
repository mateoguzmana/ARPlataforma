<?
include("conexion.php");

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
date_default_timezone_set('America/Bogota');


$Id = $_REQUEST["Id"];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
<!--
.titles {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	text-align: center;
	color: #666;
}
.textos {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #009;
	text-align: right;
}
.listado {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #666;
}
body {
	background-color: #FBFBFB;
	margin-top: 0px;
	margin-left: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo93 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.Estilo105 {color: #990000; font-family: Arial, Helvetica, sans-serif; font-size: 10px; font-weight: bold; }
.Estilo97 {font-size: 12px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
.TextField2 {background-color: #DADADA;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.listado1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #000;
}
.listado2 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #FFF;
}
.textos1 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #009;
	text-align: right;
}
.tituloslista {	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
}
-->
</style>

<script language="JavaScript">
function Abrir_ventana (pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, width=500, height=500, top=85, left=300";
window.open(pagina,"",opciones);
}
</script>

</head>

<body>
<?
$query008		=	"SELECT* FROM Viajes where Id = '$Id'" ;
$result008		=	mysql_query($query008, $id);

While($row008	=	mysql_fetch_array($result008))
{
$Planviaje		=	$row008["Planviaje"];
$Fecha			=	$row008["Fechaini"];
}

$query00m		=	"SELECT* FROM Planes where Id = '$Planviaje'" ;
$result00m		=	mysql_query($query00m, $id);

While($row00m	=	mysql_fetch_array($result00m))
{
$Idpueo			=	$row00m["Idpueo"];
}


$query0087			=	"SELECT* FROM Plan where Idplan = '$Planviaje' order by Pos" ;
$result0087			=	mysql_query($query0087, $id);
	
While($row0087		=	mysql_fetch_array($result0087))
{
$Idpuesto			=	$row0087["Idpuesto"];
$Kms				=	$row0087["Kms"];

		
		$query0084		=	"SELECT* FROM Puestos where Id = '$Idpuesto' " ;
		$result0084		=	mysql_query($query0084, $id);
		
		While($row0084	=	mysql_fetch_array($result0084))
		{
		$Nombre			=	$row0084["Nombre"];
		$Tipo			=	$row0084["Tipo"];
		}
		
		
		$queryo="SELECT COUNT(*) as Totalo FROM Recorrido where Idviaje = '$Id' and Muestra = '1' order by Pos" ;
		$resulto=mysql_query($queryo, $id);
		
		While($rowo=mysql_fetch_array($resulto))
		{
		$Totalo=$rowo["Totalo"];
		}
		
		if($Totalo == 0)
		{
			
		$query="UPDATE Recorrido set  Muestra='1' where Idviaje = '$Id' and Idpuesto = '$Idpuesto'" ;
		$result=mysql_query($query, $id);	
		}

		$query0088		=	"SELECT* FROM Recorrido where Idviaje = '$Id' and Idpuesto = '$Idpuesto' order by Pos" ;
		$result0088		=	mysql_query($query0088, $id);
		
		While($row0088	=	mysql_fetch_array($result0088))
		{
		$Idrec	 		=	$row0088["Id"];
		$Poss	 		=	$row0088["Pos"];
		$Tiempo 		=	$row0088["Tiempo"];
		$Reporte 		=	$row0088["Reporte"];
		$Fechareporte	=	$row0088["Fechareporte"];
		$Estado			=	$row0088["Estado"];
		$Tiempoalert	=	$row0088["Tiempoalert"];
		$Mensaje		=	$row0088["Mensaje"];
		$Muestra		=	$row0088["Muestra"];
		
		
		$queryof	=	"SELECT COUNT(*) as Totalof FROM Pausar where Idviaje = '$Id'" ;
		$resultof	=	mysql_query($queryof, $id);
									
		While($rowof=	mysql_fetch_array($resultof))
		{
		$Totalof	=	$rowof["Totalof"];
		}
		
			$horaactual 	= 	date("Y-m-d H:i:s");
		
			if( ($Totalof == 1) && ($Estado == 0) )
			{
				$ico	=	"estado-6.png";
				$link	=	"no";
			}
		
			elseif($Estado == 1 )
			{
				$ico	=	"estado-1.png";
				$link	=	"ok";
			}
			elseif($Estado == 2)
			{
				$ico	=	"estado-2.png";
				$link	=	"ok";
			}
			elseif($Estado == 3)
			{
				$ico	=	"estado-3.png";
				$link	=	"ok";
			}
			elseif( ($Muestra == 1) )
			{
				$ico	=	"estado-4.png";
				$link	=	"ok";
			}
			elseif( ($$Muestra == 0) )
			{
				$ico	=	"estado-5.png";
				$link	=	"no";
			}
		
		
		
?>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
  <tr onMouseover="this.bgColor='#BED9F3'"onMouseout="this.bgColor='#FFFFFF'" >
    <td width="24%" height="21"><span class="listado1">&nbsp;<?=$Nombre?></span></td>
    <td width="16%"><span class="listado1"><?=$Tipo?></span></td>
    <td width="7%"><span class="listado1"><?=$Kms?></span></td>
    <td width="23%"><span class="listado1"><?=$Tiempo?></span></td>
    <td width="22%"><span class="listado1"><?=$Fechareporte?></span></td>
    <td width="8%" align="center" valign="middle">
<?
if($link == 'ok')
{
?>
    <a href="javascript:Abrir_ventana('reportar-reporte.php?Id=<?=$Id?>&Idpuesto=<?=$Idpuesto?>&Pos=<?=$Poss?>')"><img src="Images/<?=$ico?>" width="15" height="15" border="0"></a>
<?
}
else
{
?>   
 <img src="Images/<?=$ico?>" width="15" height="15" border="0">
<?
}
?>
    </td>
  </tr>
</table>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="1" class="listado1"><img src="Images/est-4.jpg" width="100%" height="1"></td>
  </tr>
</table>
<?
	}
}
?>
</body>
</html>