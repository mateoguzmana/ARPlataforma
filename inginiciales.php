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
  { alert("Por favor seleccione una empresa"); form.Nombre.focus(); return; }
 if (form.Iniciales.value == "")
  { alert("Por favor ingrese las iniciales"); form.Iniciales.focus(); return; }
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
-->
</style></head>

<body>
<table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="61" align="center" valign="top"><form action="inginiciales2.php" method="post" enctype="multipart/form-data" name="form1" style="margin:0">
<?
if(!empty($dale))
{
?>
<BR><BR>
<span class="TextFieldFU">&nbsp;&nbsp;LA AGENCIA SE INGRESO CON EXITO&nbsp;&nbsp;</span>
<BR><BR>
<?
}
?>  
      <br>
      <br>
      <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="50%" height="33" valign="top" class="Estilo93 Estilo96"><div align="left">EMPRESA</div>
            <input name="Nombre" type="text" class="TextField2" id="Nombre" style="width:85%">
            <input name="Idempresa" type="hidden" class="TextField2" id="Idempresa" style="width:85%">
            <label> </label>
            <a href="lista-planes.php" onClick="window.open('lista-empresas.php','','menubar=no,scrollbars=yes, width=500, height=500,');return false"> <img src="Images/buscar.gif" width="16" height="16" border="0"></a>
            <label>
              <input name="Nit" type="hidden" id="Nit">
            </label></td>
          <td valign="top" class="Estilo93 Estilo96"><div align="left">INICIALES</div>
            <div id="contenedor">
            <input name="Iniciales1" type="text" class="TextField2" id="Iniciales" size="30" onChange="javascript:this.value=this.value.toUpperCase();" style="width:95%"><a href="#" id="mascampos"><img style="cursor:pointer;width:11px;height:11px;" title="Agregar campo" src="Images/add.png" width="15" height="15" border="0"></a>
            </div>
          </td>
        </tr>
      </table>
      <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="43" valign="middle" class="Estilo93 Estilo96"><input name="Submit2" type="button" onClick=Validar(this.form) class="TextField21" value="Ingresar informacion"></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
<script type="text/javascript" src="jquery-1.4.2.min.js"></script>
<script type="text/javascript">
jQuery.fn.generaNuevosCampos = function(etiqueta, nombreCampo, indice){
   $(this).each(function(){
      elem = $(this);
      elem.data("etiqueta",etiqueta);
      elem.data("nombreCampo",nombreCampo);
      elem.data("indice",indice);
      
      elem.click(function(e){
         e.preventDefault();
         elem = $(this);
         etiqueta = elem.data("etiqueta");
         nombreCampo = elem.data("nombreCampo");
         indice = elem.data("indice");
         texto_insertar ='<input type="text" class="TextField2" size="45" onChange="javascript:this.value=this.value.toUpperCase();" style="width:95%" name="' + nombreCampo + indice + '" />';
         indice ++;
         elem.data("indice",indice);
         nuevo_campo = $(texto_insertar);
         elem.before(nuevo_campo);
      });
   });
   return this;
}

$(document).ready(function(){
   $("#mascampos").generaNuevosCampos("Iniciales", "Iniciales", 2);
});
</script>
</body>
</html>