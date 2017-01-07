<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

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
	color: #FFF;
	font-weight: bold;
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
<link rel="stylesheet" href="lytebox.css" type="text/css" media="screen"/>
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


<script LANGUAGE="JavaScript">
function Validar(form)
{
 if (form.Identificacion.value == "")
  { alert("Por favor ingrese un Nit"); form.Identificacion.focus(); return; }
  
 if (form.Tipoident.value == "")
  { alert("Por favor seleccione el tipo de Indentificación"); form.Tipoident.focus(); return; }
  
 if (form.Nombre.value == "")
  { alert("Por favor ingrese un Nombre"); form.Nombre.focus(); return; }
  
 if (form.Direccion.value == "")
  { alert("Por favor ingrese una Dirección"); form.Direccion.focus(); return; }
  
 if (form.Telefono.value == "")
  { alert("Por favor ingrese un Telefono"); form.Telefono.focus(); return; }
  
 if (form.select1.value == "")
  { alert("Por favor ingrese un Departamento"); form.select1.focus(); return; }
  
 if (form.select2.value == "")
  { alert("Por favor ingrese una Ciudad"); form.select2.focus(); return; }
  
 if (form.Representante.value == "")
  { alert("Por favor ingrese el Nombre del Representante"); form.Representante.focus(); return; }
  
 if (form.Cedularep.value == "")
  { alert("Por favor ingrese la Cédula  del Representante"); form.Cedularep.focus(); return; }
  
  form.submit();
}
</script>

<script type="text/javascript" src="jquery-1.4.2.min.js"></script>

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
	background-color: #E3EFF9;
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
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top"><iframe src="ingauto.php?dale=<?=$dale?>" width="100%" height="95%" frameborder="No" allowtransparency="true" name="autos" id="autos"></iframe></td>
  </tr>
</table>

</body>
</html>