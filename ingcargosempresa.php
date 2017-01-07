<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

include("conexion.php");

$Idusuario	=	$_GET["Id"];

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
  if (form.Nombre.value == "")
  { alert("Por favor ingrese el tipo de vehiculo"); form.Nombre.focus(); return; }
  
    form.submit();
}
</script>
<style type="text/css">
<!--
body {
	background-color: #FFF;
	margin-top: 0px;
}
.TextFieldFU {background-color: #FF0000;
color: #FFFFFF;
font-size: 9pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
-->
</style></head>

<body>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="60" align="center" valign="top"><form name="form1" method="post" action="ingcargosempresa2.php">
      <p><span style="margin:0">
        <?
$dale	=	$_GET["dale"];

if(!empty($dale))
{
?>
        <BR>
        <BR>
        <span class="TextFieldFU">&nbsp;&nbsp;EL CARGO SE INGRESO CON EXITO&nbsp;&nbsp;</span> <BR>
        <BR>
        <?
}
?>
      </span></p>
      <p>&nbsp;</p>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="33" valign="top" class="Estilo93 Estilo96"><div align="left">Nombre del cargo</div>
            <input name="Nombre" type="text" class="TextField2" id="Nombre" size="30" onChange="javascript:this.value=this.value.toUpperCase();"></td>
        </tr>
      </table>
      <br>
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