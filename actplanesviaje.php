<?
include("conexion.php");

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$Ruta	=	$_REQUEST["Ruta"];
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
.Estilo97 {
	font-size: 11px;
	font-family: Arial, Helvetica, sans-serif;
}
.TextField2 {background-color: #DADADA;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.listado1 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #666;
}
.listado11 {font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
	color: #000;
}
.TextField {background-color: #DADADA;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.listado12 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 8px;
	color: #000;
}
.listado2 {font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #FFF;
}
.listado3 {font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
	color: #FFF;
}
-->
</style>
<script language="JavaScript">
<!--
function confirmSubmit() 
{ 
var agree=confirm("Realmente desea eliminar este registro? "); 
if (agree) 
return true ; 
else 
return false ; 
}
//-->
</script>


</head>

<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="50%" height="25" valign="middle" bgcolor="#003366" class="Estilo97"><span class="Estilo93">&nbsp;&nbsp;</span><span style="color: #FFF">ACTUALIZAR / ELIMINAR</span></td>
    <td width="63%" valign="middle" bgcolor="#003366" class="Estilo97"><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="34" align="right" valign="middle"><form name="form1" method="get" action="actplanesviaje.php" style="margin:0">
          <span class="listado3">
          <input name="Ruta" type="text" class="TextField" id="Ruta" size="30">
          <span class="Estilo93 Estilo96">
          <input name="button" type="submit" class="TextField" id="button" value="Buscar">
          </span></span>
        </form></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="100" align="right" valign="top"><br>
<?
if($Ruta <> '')
{
$query008="SELECT* FROM Planes where Nombre Like '%$Ruta%' order by Nombre" ;
}
else
{
$query008="SELECT* FROM Planes order by Nombre" ;
}

$result008=mysql_query($query008, $id);

While($row008=mysql_fetch_array($result008))
{
$Nombre8		=$row008["Nombre"];
$Id8			=$row008["Id"];

?>
    
      <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="28" height="20" align="center" bgcolor="#FFFFFF"><img src="Images/botonto.jpg" width="18" height="12"></td>
          <td width="" bgcolor="#FFFFFF" class="Estilo97"><?=$Nombre8?></td>
<td width="206" bgcolor="#FFFFFF" class="textos"><a href="actplan1.php?Id=<?=$Id8?>"><img src="Images/update-ico-2.jpg" width="16" height="15" border="0"></a> | 
<a onclick=' return confirmSubmit()' href="eliplan.php?Id=<?=$Id8?>"><img src="Images/delete-icon-2.jpg" width="16" height="15" border="0"></a></td>
        </tr>
    </table>
      <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="2" class="listado1"><span class="listado11"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
        </tr>
      </table>
      <?
}
?>
    </td>
  </tr>
</table>
</body>
</html>