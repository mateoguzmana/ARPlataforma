<?
include("conexion.php");

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$Nombre		=		$_REQUEST["Nombre"];
$Cedula		=		$_REQUEST["Cedula"];
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
	font-size: 9px;
	color: #666;
}
body {
	background-color: #EAEAEA;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo93 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.TextField {background-color: #DADADA;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.listado2 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #FFF;
}
.listado1 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 8px;
	color: #000;
}
.listado11 {font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
	color: #000;
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
<form name="form1" method="GET" action="actusers.php" style="margin:0">
  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="100" align="right" valign="top"><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="45%"><span class="Estilo93">Nombre</span><span class="listado2">
              <br>
              <input name="Nombre" type="text" class="TextField" id="Nombre" style="width:90%">
          </span></td>
          <td width="15%"><span class="Estilo93">Cedula</span><span class="listado2"> <br>
              <input name="Cedula" type="text" class="TextField" id="Cedula" style="width:90%">
          </span></td>
          <td width="40%" valign="bottom"><span class="listado2">
            <input name="button" type="submit" class="TextField" id="button" value="OK">
          </span></td>
          </tr>
        <tr>
          <td colspan="3" align="right"><hr></td>
        </tr>
      </table>
        <?
$Fechahoy= date("Y-m-d");	

if ($Nombre <> '')
{
$query008="SELECT* FROM Usuarios where Nombrefull like '%$Nombre%' order by Nombrefull" ;
}	
elseif ($Cedula <> '' )
{
$query008="SELECT* FROM Usuarios where Cedula = '$Cedula'  order by Nombrefull" ;	
}
else
{
$query008="SELECT* FROM Usuarios  order by Nombrefull" ;
}
		$result008=mysql_query($query008, $id);
		
		While($row008=mysql_fetch_array($result008))
		{
		$Nombre8		=$row008["Nombrefull"];
		$Usuario8		=$row008["Cedula"];
		$Id8			=$row008["Id"];
		
		?>
				<table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
				  <tr>
					<td width="28" align="center" bgcolor="#FFFFFF"><img src="Images/boton.jpg" width="17" height="17"></td>
					<td width="927" bgcolor="#FFFFFF" class="listado"><?=strtoupper($Nombre8)?></td>
					<td width="183" bgcolor="#FFFFFF" class="textos"><a href="actusuario.php?Id=<?=$Id8?>" target="_parent"><img src="Images/update-ico-2.jpg" width="16" height="15" border="0"></a> | <a onclick=' return confirmSubmit()' href="eliusuario.php?Id=<?=$Id8?>"><img src="Images/delete-icon-2.jpg" width="16" height="15" border="0"></a></td>
				  </tr>
		</table>
        <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
	              <tr>
	                <td class="listado1"><span class="listado11"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
          </tr>
        </table>
      <?
		}

?></td>
    </tr>
  </table>
</form>
</body>
</html>