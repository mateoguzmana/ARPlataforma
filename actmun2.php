<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

include("conexion.php");

$Id 	=	$_GET["Id"];


$query008="SELECT* FROM Municipio where Id = '$Id'" ;
$result008=mysql_query($query008, $id);

While($row008=mysql_fetch_array($result008))
{
$Nombre8		=$row008["Nombre"];
$Iddep8			=$row008["Iddep"];
$Cod8			=$row008["Cod"];
}

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
	
 if (form.Departamento.value == "")
  { alert("Por favor seleccione un Departamento"); form.Departamento.focus(); return; }
  
	
  if (form.Nombre.value == "")
  { alert("Por favor ingrese un Municipio"); form.Nombre.focus(); return; }
  
   if (form.Cod.value == "")
  { alert("Por favor ingrese un Codigo"); form.Cod.focus(); return; } 
 
  form.submit();
}
</script>
<style type="text/css">
<!--
body {
	background-color: #E6F0FF;
	margin-top: 0px;
	margin-left: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo105 {color: #990000; font-family: Arial, Helvetica, sans-serif; font-size: 10px; font-weight: bold; }
.Estilo97 {font-size: 12px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
-->
</style></head>

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
    <td height="61" align="right" valign="top"><form name="form1" method="post" action="actmun3.php">
      <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td align="right"><a href="actmun.php" class="Estilo93">VOLVER</a></td>
        </tr>
      </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="33" valign="top" class="Estilo93 Estilo96"><div align="left">Departamento</div>
            <select name="Departamento" class="TextField2" id="Departamento">
<?
$query009="SELECT* FROM Departamentos where Id = '$Iddep8' order by Nombre" ;
$result009=mysql_query($query009, $id);

While($row009=mysql_fetch_array($result009))
{
$Nombre9		=$row009["Nombre"];
$Id9			=$row009["Id"];

}
?>
              <option value="<?=$Id9?>">
                <?=$Nombre9?>
                </option>
              <?


$query0091="SELECT* FROM Departamentos order by Nombre" ;
$result0091=mysql_query($query0091, $id);

While($row0091=mysql_fetch_array($result0091))
{
$Nombre91		=$row0091["Nombre"];
$Id91			=$row0091["Id"];


?>
 <option value="<?=$Id91?>">
                <?=$Nombre91?>
                </option>
              <?
}
?>
            </select></td>
        </tr>
      </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="33" valign="top" class="Estilo93 Estilo96"><div align="left">Municipio</div>
            <input name="Nombre" type="text" class="TextField2" id="Nombre" value="<?=$Nombre8?>" size="30">
            <input name="Cod" type="text" class="TextField2" id="Cod" value="<?=$Cod8?>" size="2">
            <input name="Id" type="hidden" id="Id" value="<?=$Id?>"></td>
        </tr>
      </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="27" valign="middle" class="Estilo93 Estilo96"><input name="Submit2" type="button" onClick=Validar(this.form) class="TextField21" value="Ingresar informacion"></td>
        </tr>
      </table>
    </form>
      </td>
  </tr>
</table>
</body>
</html>