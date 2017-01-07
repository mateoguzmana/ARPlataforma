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
.Estilo93 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	font-weight: bold;
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


<script LANGUAGE="JavaScript">

function Validar(form)
{
var archivo1	=	document.form1.fileField.value 
var extension1 	= 	(archivo1.substring(archivo1.lastIndexOf("."))).toLowerCase();

 if (form.Nombre.value == "")
  { alert("Por favor seleccione una empresa"); form.Nombre.focus(); return; }
  
  
     if (form.fileField.value == "")
  { alert("Por favor ingrese un Archivo"); form.fileField.focus(); return; }
  
  
     if (extension1!=".XLS" && extension1!=".xls" && extension1!=".XLSX" && extension1!=".xlsx") 
  { alert("El archivo debe ser en formato EXCEL"); form.fileField.focus(); return; }
  

  
   form.submit();
}


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
    <td valign="top"><br>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="305" align="center" valign="middle"><form name="form1" enctype="multipart/form-data" method="post" action="cargaguiascsv.php" >
          <label for="fileField"></label>
          <table width="100%" border="0">
            <tr>
              <td height="91" align="left" bgcolor="#DADADA"><span class="Estilo93">&nbsp;ESTRUCTURA DE ARCHIVO<br>
                <br>
                </span><span class="Estilo105"><span class="Estilo93">&nbsp;</span>GUIA	- DESCRIPCION - PESO - PIEZAS | <span style="color: #003399">DESTINATARIO - DIR. DESTINATARIO - CIUDAD - DEPARTAMENTO -  VLR DECLARADO - TELEFONO | <span style="color: #006633">REMITENTE - DIR. REMITENTE - CIUDAD - TELEFONO</span></span></span></td>
              </tr>
          </table>
          <table width="100%" border="0">
            <tr>
              <td height="91" align="left" bgcolor="#FFFFFF"><span class="Estilo93 Estilo96"><span class="Estilo93">&nbsp;</span>EMPRESA<br>
  <input name="Nombre" type="text" class="TextField2" id="Nombre" style="width:85%">
                <label> </label>
                <a href="lista-planes.php" onClick="window.open('lista-empresas.php','','menubar=no,scrollbars=yes, width=500, height=500,');return false"> <img src="Images/buscar.gif" width="16" height="16" border="0"></a>
                <label>
                  <input name="Nit" type="hidden" id="Nit">
                  </label>
              </span></td>
              <td width="30%" align="left" valign="middle" bgcolor="#FFFFFF"><span class="Estilo93 Estilo96">ARCHIVO EXCEL</span>                <br>                <input name="fileField" type="file" class="TextField2" id="fileField">
                <input name="btsubmit" type="button" onClick="Validar(this.form);" class="TextField211" value="CARGAR ARCHIVO">
                
              </td>
              </tr>
          </table>
        </form></td>
      </tr>
    </table></td>
  </tr>
</table>

</body>
</html>