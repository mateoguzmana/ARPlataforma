<?
include("conexion.php");


date_default_timezone_set('America/Bogota');


$Manifiesto 	= $_REQUEST["Manifiesto"];
$Idviaje	 	= $_REQUEST["Idviaje"];


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NOTAS DE VIAJE</title>
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
	font-size: 10px;
	color: #666;
}
body {
	background-color: #E0E9F1;
	margin-top: 0px;
	margin-left: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo93 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
}
.Estilo105 {
	color: #990000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}
.Estilo97 {
	font-size: 14px;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
	color: #036;
}
.TextField2 {background-color: #DADADA;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.TextField3 {background-color: #D7D7D7;
color: #000;
font-size: 8pt;
font-family: arial;
border : 1px solid #000;
}
.listado1 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #666;
}
.listado2 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #FFF;
}
.textos1 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #009;
	text-align: right;
}
.tituloslista {	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
}
-->
</style>

  
<script language="javascript"> 
function cambio()
{
	if (document.freporte.cbia.checked==false)
		{
			document.freporte.ctreportecliente.disabled=false;
		}
	else
		{
			document.freporte.ctreportecliente.disabled=true;
		}
	return
}
</script>
<script LANGUAGE="JavaScript">

function validar(formulario) 
{
  if (formulario.Prioridad.value == "") 
  {
    alert("Por favor seleccione Prioridad");
    formulario.Prioridad.focus();
    return (false);
  }
  
  if (formulario.Nota.value == "") 
  {
    alert("Por favor ingrese un reporte");
    formulario.Nota.focus();
    return (false);
  }
  
  return (true); 
}
</script>
<style type="text/css">
<!--
.listado11 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
	color: #000;
}
.Estilo931 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
-->
</style>
</head>

<body>
<table width="480" border="0" align="center" cellpadding="0" cellspacing="0" >
  <tr onMouseover="this.bgColor='#BED9F3'"onMouseout="this.bgColor='#FFFFFF'" >
    <td height="455" align="center" valign="top" bgcolor="#C7D7E7"><table width="450" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="30" align="center" valign="middle" bgcolor="#E9E9E9" class="Estilo97">OBSERVACIONES VIAJE EN TRANSITO</td>
        </tr>
    </table>
      <br>
      <table width="450" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td align="right"><span class="Estilo931"><a href="notaviaje.php?Idplan=<?=$Idviaje?>">VOLVER</a></span></td>
        </tr>
      </table>
      <table width="450" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="376" align="center" valign="top" bgcolor="#E9E9E9"><form id="freporte" name="freporte" method="post" action="agregnotaviaje2.php" onSubmit = "return validar(this)">
            <br>
            <table width="430" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="366" height="20" align="right" class="Estilo931">PRIORIDAD</td>
                <td width="64" align="center" class="Estilo931"><select name="Prioridad" class="TextField2" id="Prioridad">
                  <option value="1" selected>Alta</option>
                  <option value="2">Baja</option>
                </select></td>
              </tr>
            </table>
            <table width="430" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="20" class="Estilo931">OBSERVACIONES</td>
                </tr>
              <tr>
                <td height="15"><p>
                  <label>
                    <textarea name="Nota" style="width:100%" rows="6" class="TextField2" id="Nota" onChange="javascript:this.value=this.value.toUpperCase();"></textarea>
                    </label>
                </p></td>
                </tr>
            </table>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="191" height="45" class="Estilo93"><label>
                  <input name="reporto" type="submit" class="TextField3" id="reporto" value="INGRESAR NOTA">
                  
                  <input name="Manifiesto" type="hidden" id="Manifiesto" value="<?=$Manifiesto?>">
                  <input name="Idplan" type="hidden" id="Idplan" value="<?=$Idviaje?>">
                </label></td>
                <td width="239" class="Estilo93">&nbsp;</td>
                </tr>
            </table>
          </form></td>
        </tr>
      </table></td>
  </tr>
</table>

</body>
</html>