<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

include("conexion.php");

$Idusuario	=	$_GET["Id"];
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
	text-align: center;
}
.listado {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #666;
}
.Estilo93 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.Estilo96 {font-size: 11px}
.TextField2 {background-color: #DADADA;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.TextField21 {background-color: #BCBCBC;
color: #333333;
font-size: 8pt;
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

  <script type="text/javascript" src="prototype.js"></script>
  <script type="text/javascript" src="scal.js"></script>
  <link href="scal.css" media="screen" rel="stylesheet" type="text/css" />
<script LANGUAGE="JavaScript">
function Validar(form)
{
	
 if (form.Iddep.value == "")
  { alert("Por favor seleccione un Departamento"); form.Iddep.focus(); return; }
  
 if (form.Idciu.value == "")
  { alert("Por favor seleccione un Municipio"); form.Idciu.focus(); return; }
  
	
  if (form.Nombre.value == "")
  { alert("Por favor ingrese el nombre de la Cabecera"); form.Nombre.focus(); return; }
 
  form.submit();
}
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script><style type="text/css">
<!--
body {
	margin-top: 0px;
}
-->
</style></head>

<body>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="61" align="right" valign="top"><form name="form1" method="post" action="indcab2.php" style="margin:0">
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="29" align="right"><a href="javascript:history.go(0)" class="Estilo93">Refrescar</a>
            <hr size="1"></td>
        </tr>
      </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="48%" height="33" valign="top" class="Estilo93 Estilo96"><div align="left">Departamento</div>
            <select name="jumpMenu" class="TextField2" id="jumpMenu" onChange="MM_jumpMenu('self',this,0)" style="width:200">
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
              <option value="indcab.php?Iddep=<?=$Id9?>" selected>
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
              <option value="indcab.php?Iddep=<?=$Id8?>">
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
            <select name="jumpMenu2" class="TextField2" id="jumpMenu2" onChange="MM_jumpMenu('self',this,0)" style="width:200">
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
              <option value="indcab.php?Iddep=<?=$Iddep?>&Idciu=<?=$Id7?>" selected>
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
              <option value="indcab.php?Iddep=<?=$Iddep?>&Idciu=<?=$Id3?>">
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
              <option value="indcab.php?Iddep=<?=$Iddep?>&Idciu=<?=$Id5?>">
                <?=$Nombre5?>
                </option>
              <?	
	}
}
?>
            </select></td>
        </tr>
      </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="33" valign="top" class="Estilo93 Estilo96"><div align="left">Nombre Cabecera Municipal</div>
            <input name="Nombre" type="text" class="TextField2" id="Nombre" size="45"></td>
        </tr>
      </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="27" valign="middle" class="Estilo93 Estilo96"><input name="Submit2" type="button" onClick=Validar(this.form) class="TextField21" value="Ingresar informacion"></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
</body>
</html>