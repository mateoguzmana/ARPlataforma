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
	text-align: center;
}
.listado {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #666;
}
body {
	background-color: #EAEAEA;
}
.Estilo93 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.listado1 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #666;
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
    <td height="100" align="right" valign="top"><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td align="right"><a href="javascript:history.go(0)" class="Estilo93">VOLVER</a>            <hr></td>
        </tr>
    </table>
      <?
$Fechahoy= date("Y-m-d");	

$query008="SELECT * FROM Empresas order by Nombre" ;
$result008=mysql_query($query008, $id);

While($row008=mysql_fetch_array($result008))
{
$Nombre8		=$row008["Nombre"];
$Id8			  =$row008["Id"];

?>
      <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="10%" align="center" bgcolor="#FFFFFF"><img src="Images/botonto.jpg" width="18" height="12"></td>
          <td width="50%" bgcolor="#FFFFFF" class="listado"><?=$Nombre8?></td>
          <td width="20%" bgcolor="#FFFFFF" class="textos"><a href="actiniciales2.php?Id=<?=$Id8?>"><img src="Images/add.png" width="15" height="15" border="0"></a> | <a onclick=' return confirmSubmit()' href="eliiniciales.php?Id=<?=$Id8?>"><img src="Images/delete.png" width="15" height="15"  border="0"></a></td>
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