<?
include("conexion.php");

$Iddep	=	$_GET["Iddep"];
$Idciu	=	$_GET["Idciu"];

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
	color: #333;
}
body {
	background-color: #DFDFDF;
	margin-top: 0px;
	margin-left: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo93 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.listado2 {
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
}
.listado2 {
	font-size: 12px;
}
.listado2 {
	color: #FFF;
}
.Estilo105 {color: #990000; font-family: Arial, Helvetica, sans-serif; font-size: 10px; font-weight: bold; }
.Estilo97 {font-size: 12px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
.TextField2 {background-color: #DADADA;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.Estilo96 {font-size: 11px}
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
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="50%" height="25" valign="middle" bgcolor="#DBDBDB" class="Estilo97"><span class="Estilo93">&nbsp;&nbsp;</span>ACTUALIZAR / ELIMINAR </td>
    <td width="63%" valign="middle" bgcolor="#DBDBDB" class="Estilo97"><form name="form" id="form" style="margin:0">
      <select name="jumpMenu" class="TextField2" id="jumpMenu" onChange="MM_jumpMenu('self',this,0)">
        <option value="#" selected>Seleccione una Opción</option>
        <option value="actdep.php">Departamentos</option>
        <option value="actmun.php">Municipios</option>
        <option value="actcab.php">Cabeceras</option>
        <option value="actpuestos.php">Puestos de control</option>
      </select>
    </form></td>
  </tr>
</table>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="10" bgcolor="#FFFFFF" class="Estilo93">&nbsp;</td>
  </tr>
</table>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="100" align="right" valign="top"><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td align="right"><a href="javascript:history.go(0)" class="Estilo93">Refrescar</a>            <hr></td>
        </tr>
    </table>
      <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="83" align="right" bgcolor="#F7F7F7"><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="48%" height="33" valign="top" class="Estilo93 Estilo96"><div align="left">Departamento</div>
                <select name="jumpMenu2" class="TextField2" id="jumpMenu2" onChange="MM_jumpMenu('self',this,0)" style="width:200">
                  <?
if (empty($Iddep))
{
	echo '<option value="" selected>Seleccione un departamento</option>';
}
else
{

$query009="SELECT* FROM Departamentos where Id = '$Iddep'" ;
$result009=mysql_query($query009, $id);

While($row009=mysql_fetch_array($result009))
{
$Nombre9		=$row009["Nombre"];
$Id9			=$row009["Id"];
}

?>
                  <option value="actcab.php?Iddep=<?=$Id9?>" selected>
                    <?=$Nombre9?>
                    </option>
                  <?
}

$query008="SELECT* FROM Departamentos order by Nombre" ;
$result008=mysql_query($query008, $id);

While($row008=mysql_fetch_array($result008))
{
$Nombre8		=$row008["Nombre"];
$Id8			=$row008["Id"];
?>
                  <option value="actcab.php?Iddep=<?=$Id8?>">
                    <?=$Nombre8?>
                    </option>
                  <?
}

?>
                </select>
                <input name="Iddep" type="hidden" id="Iddep" value="<?=$Iddep?>">
                <input name="Idciu" type="hidden" id="Idciu" value="<?=$Idciu?>"></td>
            </tr>
          </table>
            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="48%" height="33" valign="top" class="Estilo93 Estilo96"><div align="left">Municipio</div>
                  <select name="jumpMenu2" class="TextField2" id="jumpMenu3" onChange="MM_jumpMenu('self',this,0)" style="width:200">
                    <?
if (!empty($Idciu))
{
$query007="SELECT* FROM Municipio where Id = '$Idciu'" ;
$result007=mysql_query($query007, $id);

	While($row007=mysql_fetch_array($result007))
	{
	$Nombre7		=$row007["Nombre"];
	$Id7			=$row007["Id"];
	}
?>
                    <option value="actcab.php?Iddep=<?=$Iddep?>&Idciu=<?=$Id7?>" selected>
                      <?=$Nombre7?>
                    </option>
                    <?
$query003="SELECT* FROM Municipio where Iddep = '$Iddep' order by Nombre" ;
$result003=mysql_query($query003, $id);

	While($row003=mysql_fetch_array($result003))
	{
	$Nombre3		=$row003["Nombre"];
	$Id3			=$row003["Id"];
?>
                    <option value="actcab.php?Iddep=<?=$Iddep?>&Idciu=<?=$Id3?>">
                      <?=$Nombre3?>
                    </option>
                    <?
	}
}
else
{
	echo '<option value="" selected>Seleccione un Municipio</option>';
	
$query005="SELECT* FROM Municipio where Iddep = '$Iddep' order by Nombre" ;
$result005=mysql_query($query005, $id);

	While($row005=mysql_fetch_array($result005))
	{
	$Nombre5		=$row005["Nombre"];
	$Id5			=$row005["Id"];
?>
                    <option value="actcab.php?Iddep=<?=$Iddep?>&Idciu=<?=$Id5?>">
                      <?=$Nombre5?>
                    </option>
                    <?	
	}
}
?>
                  </select></td>
              </tr>
          </table></td>
        </tr>
      </table>
      <?
$query0073="SELECT* FROM Cabeceras where Iddep = '$Iddep' and Idciu = '$Idciu' order by Nombre" ;
$result0073=mysql_query($query0073, $id);

While($row0073=mysql_fetch_array($result0073))
{
$Nombre73		=$row0073["Nombre"];
$Id73			=$row0073["Id"];

?>
      <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="28" align="center" bgcolor="#FFFFFF"><img src="Images/boton.jpg" width="17" height="17"></td>
          <td width="952" bgcolor="#FFFFFF" class="listado"><?=$Nombre73?></td>
<td width="206" bgcolor="#FFFFFF" class="textos"><a href="actcab2.php?Id=<?=$Id73?>">Act</a> | <a onclick=' return confirmSubmit()' href="elicab.php?Id=<?=$Id73?>">Elim</a>&nbsp;</td>
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