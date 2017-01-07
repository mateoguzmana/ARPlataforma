<?
include("conexion.php");

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
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
	background-color: #E9E9E9;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo93 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.Estilo105 {color: #990000; font-family: Arial, Helvetica, sans-serif; font-size: 10px; font-weight: bold; }
.Estilo97 {font-size: 12px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
.Estilo1051 {color: #990000; font-family: Arial, Helvetica, sans-serif; font-size: 9px; font-weight: bold; }
.TextField2 {background-color: #DADADA;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.listado1 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #666;
}
.TextFieldFU {background-color: #FF0000;
color: #FFFFFF;
font-size: 9pt;
font-family: arial;
border : 1px solid #FFFFFF;
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
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="100" align="center" valign="top"><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td align="right"><a href="javascript:history.go(0)" class="Estilo93">Refrescar</a>            <hr></td>
        </tr>
    </table>
      <?
$query008="SELECT* FROM Tipocarro order by Nombre" ;
$result008=mysql_query($query008, $id);

While($row008=mysql_fetch_array($result008))
{
$Nombre			=$row008["Nombre"];
$Id			=$row008["Id"];
?>
      <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="28" align="center" bgcolor="#FFFFFF"><img src="Images/boton.jpg" width="17" height="17"></td>
          <td bgcolor="#FFFFFF" class="listado"><span class="Estilo105"><?=$Nombre?>
          </span></td>
<td align="center" valign="middle" bgcolor="#FFFFFF" class="textos"><a href="acttipovehiculotemp2.php?Id=<?=$Id?>"><img src="Images/update-ico-2.jpg" width="16" height="15" border="0"></a> | <a onclick=' return confirmSubmit()' href="elitipovehiculotemp.php?Id=<?=$Id?>"><img src="Images/delete-icon-2.jpg" width="16" height="15" border="0"></a></td>
<td width="9" align="center" valign="middle" bgcolor="#FFFFFF" class="textos">&nbsp;</td>
        </tr>
    </table>
      <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td class="listado1"><hr size="1"></td>
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