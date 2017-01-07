<?
include("conexion.php");

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
date_default_timezone_set('America/Bogota');


$Id = $_REQUEST["Id"];

$query008="SELECT* FROM Viajes where Id = '$Id'" ;
$result008=mysql_query($query008, $id);

While($row008=mysql_fetch_array($result008))
{
$Idn			=$row008["Id"];
$Manifiesto		=$row008["Manifiesto"];
$Remesas		=$row008["Remesas"];
$Planviaje		=$row008["Planviaje"];
$Fecha			=$row008["Fechaini"];
}

$query="SELECT COUNT(*) as Total FROM Recorrido where Idviaje = '$Id' and Estado = '0'" ;
$result=mysql_query($query, $id);

While($row=mysql_fetch_array($result))
{
$Total=$row["Total"];
}

$query1="SELECT COUNT(*) as Total1 FROM Notasmanifiesto where Manifiesto = '$Manifiesto'" ;
$result1=mysql_query($query1, $id);

While($row1=mysql_fetch_array($result1))
{
$Total1=$row1["Total1"];
}

$query2="SELECT COUNT(*) as Total2 FROM Notasproblemas where Idviaje = '$Id'" ;
$result2=mysql_query($query2, $id);

While($row2=mysql_fetch_array($result2))
{
$Total2=$row2["Total2"];
}

$query3="SELECT COUNT(*) as Total3 FROM Notrasextra where Idplan = '$Id'" ;
$result3=mysql_query($query3, $id);

While($row3=mysql_fetch_array($result3))
{
$Total3=$row3["Total3"];
}

$query4="SELECT COUNT(*) as Total4 FROM Notasmanifiesto where Manifiesto = '$Manifiesto' and Estado = 0" ;
$result4=mysql_query($query4, $id);

While($row4=mysql_fetch_array($result4))
{
$Total4=$row4["Total4"];
}


$query8="SELECT COUNT(*) as Total8 FROM Remisiones where Manifiesto = '$Manifiesto' and Estad <> 1 " ;
$result8=mysql_query($query8, $id);

While($row8=mysql_fetch_array($result8))
{
$Total8=$row8["Total8"];
}




if($Total4 > 0)
{
$stilo	=	"TextField4";	
}
else
{
$stilo	=	"TextField3";	
}
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
	background-color: #F8F8F8;
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
.TextField2 {background-color: #939BD9;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.TextField4 {background-color: #990000;
color: #fff;
font-size: 8pt;
font-family: arial;
border : 1px solid #000;
}
.listado1 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #666;
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
.Estilo931 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
}
.TextField3 {background-color: #648B9A;
color: #FFF;
font-size: 8pt;
font-family: arial;
border : 1px solid #000;
}
.TextField5 {background-color: #003366;
color: #FFF;
font-size: 8pt;
font-family: arial;
border : 1px solid #000;
}
-->
</style>

<script type="text/JavaScript"> 
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
</script>


</head>

<body><form name="form1" method="post" action="" style="margin:0">
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="50" align="left" class="Estilo931"><input name="noreporto" type="button" class="<?=$stilo?>" id="noreporto" value="NOTAS (<?=$Total1?>)" onClick="MM_openBrWindow('notaviaje.php?Idplan=<?=$Id?>','','scrollbars=yes,width=500,height=450')" style="width:75px">&nbsp;&nbsp;<input name="noreporto2" type="button" class="TextField3" id="noreporto2" value="REPORTES (<?=$Total3?>)" onClick="MM_openBrWindow('notaextra-empty.php?Idplan=<?=$Id?>','','scrollbars=yes,width=500,height=450')" style="width:90px">&nbsp;&nbsp;&nbsp;
            <?
if ($Total == 0)
{
	if($Total8 > 1 )
	{
		$counta	=	0;
		
		$query0080="SELECT* FROM Remisiones where Manifiesto = '$Manifiesto' and Estad = 0 order by Remesa" ;
		$result0080=mysql_query($query0080, $id);
		
		While($row0080=mysql_fetch_array($result0080))
		{
		$Remesa		=$row0080["Remesa"];
		$Remitente	=$row0080["Destinatario"];
		$Teldesti	=$row0080["Teldesti"];
		
		$counta ++;
?>
<input title="<?=$Remitente?> - <?=$Teldesti?>" name="noreporto4" type="button" class="TextField5" id="noreporto4" value="REMESA(<?=$counta?>)" onClick="MM_openBrWindow('finalizaremesa.php?Idplan=<?=$Id?>&Remesa=<?=$Remesa?>','','scrollbars=yes,width=500,height=600')" style="width:100px">
<?	
		}
	}
	else
	{
		
		$query0080="SELECT* FROM Remisiones where Manifiesto = '$Manifiesto' and Estad = 0 order by Remesa" ;
		$result0080=mysql_query($query0080, $id);
		
		While($row0080=mysql_fetch_array($result0080))
		{
		$Remesa		=$row0080["Remesa"];
		$Remitente	=$row0080["Destinatario"];
		$Teldesti	=$row0080["Teldesti"];
		}
		
		
?>
<input title="<?=$Remitente?> - <?=$Teldesti?>" name="noreporto3" type="button" class="TextField5" id="noreporto3" value="FINALIZAR VIAJE" onClick="MM_openBrWindow('finaliza.php?Idplan=<?=$Id?>&Remesa=<?=$Remesa?>','','scrollbars=yes,width=500,height=600')" style="width:100px">
<?
	}
}
?></td>
        </tr>
      </table>
    </form>
</body>
</html>