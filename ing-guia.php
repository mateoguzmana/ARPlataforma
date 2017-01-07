<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

include("conexion.php");

$dale	=	$_GET["dale"];

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

  <script type="text/javascript" src="prototype.js"></script>
  <script type="text/javascript" src="scal.js"></script>
  <link href="scal.css" media="screen" rel="stylesheet" type="text/css" />
<script LANGUAGE="JavaScript">
function Validar(form)
{
	
 if (form.Nombre.value == "")
  { alert("Por favor seleccione una Empresa"); form.Nombre.focus(); return; }
  
 if (form.Guia.value == "")
  { alert("Por favor seleccione una Guia"); form.Guia.focus(); return; }

  
  form.submit();
}
</script>
<script language="javascript">
function mis_datos(){
var key=window.event.keyCode;
if (key < 48 || key > 57){
window.event.keyCode=0;
}}
</script>

<style type="text/css">
<!--
body {
	margin-top: 0px;
}
.TextField {background-color: #DADADA;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.listado2 {font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #FFF;
}
-->
</style></head>

<body>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="61" align="center" valign="top"><form action="ing-guia2.php" method="post" enctype="multipart/form-data" name="form1" style="margin:0">
      <?
if($dale == 'si')
{
?>
      <BR>
      <span class="TextFieldFU">&nbsp;&nbsp;LA INFORMACION SE INGRESO CON EXITO&nbsp;&nbsp;</span><BR>
      <BR>
      <?
}
elseif($dale == 'ok')
{
?>
      <BR>
      <BR>
      <span class="TextFieldFU">&nbsp;EL E-MAIL INGRESADO YA EXISTE&nbsp;&nbsp;</span> <BR>
      <BR>
      <?

}?>
      <br>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="33" valign="top" class="Estilo93 Estilo96"><div align="left">EMPRESA</div>
            <input name="Nombre" type="text" class="TextField2" id="Nombre" style="width:85%">
            <label> </label>
            <a href="lista-planes.php" onClick="window.open('lista-empresas.php','','menubar=no,scrollbars=yes, width=500, height=500,');return false"> <img src="Images/buscar.gif" width="16" height="16" border="0"></a>
            <label>
              <input name="Nit" type="hidden" id="Nit">
            </label></td>
        </tr>
      </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="33" valign="top" class="Estilo93 Estilo96"><div align="left">NRO. GUIA (CONTROL BOX)</div>
            <input name="Guia" type="text" class="TextField2" id="Guia"  style="width:90%"></td>
        </tr>
  </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="33" valign="top" class="Estilo93 Estilo96"><div align="left">DESCRIPCION</div>
            <input name="Descripcion" type="text" class="TextField2" id="Descripcion"  style="width:90%"></td>
        </tr>
    </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="33" valign="top" class="Estilo93 Estilo96"><div align="left">PESO</div>
            <input name="Peso" type="text" class="TextField2" id="Peso"  style="width:90%"></td>
        </tr>
    </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="33" valign="top" class="Estilo93 Estilo96"><br>
            <div align="left">PIEZAS</div>
            <input name="Piezas" type="text" class="TextField2" id="Piezas"  style="width:90%"></td>
        </tr>
    </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="33" valign="top" class="Estilo93 Estilo96"><br>
            <div align="left">VALOR DECLARADO</div>
            <input name="Declarado" type="text" class="TextField2" id="Declarado"  style="width:90%"></td>
        </tr>
    </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="33" valign="top" class="Estilo93 Estilo96"><br>
            <div align="left">DESTINATARIO</div>
            <input name="Destinatario" type="text" class="TextField2" id="Destinatario"  style="width:90%"></td>
        </tr>
    </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="33" valign="top" class="Estilo93 Estilo96"><br>
            <div align="left">DIR. DESTINATARIO</div>
            <input name="Dirdestinatario" type="text" class="TextField2" id="Dirdestinatario"  style="width:90%"></td>
        </tr>
    </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="33" valign="top" class="Estilo93 Estilo96"><br>
            <div align="left">CIUDAD DESTINATARIO</div>
            <input name="Ciudestinatario" type="text" class="TextField2" id="Ciudestinatario"  style="width:90%"></td>
        </tr>
    </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="33" valign="top" class="Estilo93 Estilo96"><br>
            <div align="left">DEPARTAMENTO DESTINATARIO</div>
            <input name="Depdestinatario" type="text" class="TextField2" id="Depdestinatario"  style="width:90%"></td>
        </tr>
    </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="33" valign="top" class="Estilo93 Estilo96"><br>
            <div align="left">TELEFONO  DESTINATARIO</div>
            <input name="Teldestinatario" type="text" class="TextField2" id="Teldestinatario"  style="width:90%"></td>
        </tr>
    </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="33" valign="top" class="Estilo93 Estilo96"><br>
            <div align="left">REMITENTE</div>
            <input name="Remitente" type="text" class="TextField2" id="Remitente"  style="width:90%"></td>
        </tr>
    </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="33" valign="top" class="Estilo93 Estilo96"><br>
            <div align="left">DIR. REMITENTE</div>
            <input name="Diremitente" type="text" class="TextField2" id="Diremitente"  style="width:90%"></td>
        </tr>
    </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="33" valign="top" class="Estilo93 Estilo96"><br>
            <div align="left">CIUDAD REMITENTE</div>
            <input name="Ciuremitente" type="text" class="TextField2" id="Nombrado13"  style="width:90%"></td>
        </tr>
    </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="33" valign="top" class="Estilo93 Estilo96"><br>
            <div align="left">TELEFONO  REMITENTE</div>
            <input name="Telremitente" type="text" class="TextField2" id="Nombrado14"  style="width:90%"></td>
        </tr>
    </table>
<br>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
          <td height="43" valign="middle" class="Estilo93 Estilo96"><input name="Submit2" type="button" onClick=Validar(this.form) class="TextField21" value="Ingresar informacion"></td>
        </tr>
</table>
    </form></td>
  </tr>
</table>
</body>
</html>