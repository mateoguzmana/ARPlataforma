<?
include("conexion.php");

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
date_default_timezone_set('America/Bogota');


$Idviaje 	= $_REQUEST["Id"];

$horaactual = date("H:i:s");
$hor = substr($horaactual, -8, 2);
$min = substr($horaactual, -5, 2);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AJUSTE TIEMPO DESCARGA</title>
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
	color: #666;
}
body {
	background-color: #C6D6E6;
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
	font-weight: bold;
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
		<link rel="stylesheet" media="all" type="text/css" href="css/ui-lightness/jquery-ui-1.8.6.custom.css" />
		<style type="text/css"> 

			body{font: 90% Arial, Helvetica, sans-serif;}

			#ui-datepicker-div{ font-size: 80%; }
			.ui-timepicker-div .ui-widget-header{ margin-bottom: 8px; }
			.ui-timepicker-div dl{ text-align: left; }
			.ui-timepicker-div dl dt{ height: 25px; }
			.ui-timepicker-div dl dd{ margin: -25px 0 10px 65px; }
			.ui-timepicker-div td { font-size: 90%; }
			
		.Estilo931 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
        </style> 
        
		<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.6.custom.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-timepicker-addon.js"></script>
		<script type="text/javascript">
			
			$(function(){
				
		
				$('.example-container > pre').each(function(i){
					eval($(this).text());
					$('#example1').datetimepicker();
				});
			});
			
		</script>
  

<script language="javascript">
function algo(){ 
opener.location.reload(); 
window.close(); 
}  
</script>

<script LANGUAGE="JavaScript">
function Validar(form)
{
  if (form.example1.value == "")
  { alert("Por favor seleccione un Fecha/Hora"); form.example1.focus(); return; }
  
  if (form.Noved.value == "")
  { alert("Por favor seleccione Novedad"); form.Noved.focus(); return; }
  
  if (form.ctreporte.value == "")
  { alert("Por favor ingrese una Justificacion"); form.ctreporte.focus(); return; }
  form.submit();
}
</script>
</head>

<body>
<table width="480" border="0" align="center" cellpadding="0" cellspacing="0" >
  <tr onMouseover="this.bgColor='#BED9F3'"onMouseout="this.bgColor='#FFFFFF'" >
    <td height="455" align="center" valign="top" bgcolor="#C7D7E7"><table width="450" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="30" align="center" valign="middle" bgcolor="#E9E9E9" class="Estilo97">AJUSTE TIEMPO PROCESO DE DESCARGA</td>
        </tr>
    </table>
    <br>

      <table width="450" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="376" align="center" valign="top" bgcolor="#E9E9E9"><form name="form1" method="post" action="adicionar-descarga2.php">
            <input name="Idviaje" type="hidden" id="Idviaje" value="<?=$Idviaje?>">
            <br>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td class="Estilo93"><div class="example-container"><br>
                  <table width="430" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="223"><span class="Estilo93">SELECCIONE  FECHA/HORA                        </span><br>                        
                        <input name="example1" type="text" class="TextField3" id="example1" value="" style="width:95%" /></td>
                      <td width="207"><span class="Estilo93">TIPO DE NOVEDAD</span><span class="Estilo931"><br>
                          <select name="Noved" class="TextField3" id="Noved" style="width:95%"> 
                            <option value="" selected></option>
                            <option value="13">Sin Novedad</option>
                            <option value="3">Devolución de mercancía</option>
                            <option value="10">Faltante de mercancía</option>
							<option value="12">Mercancía con averías</option>
                          </select>
                      </span></td>
                      </tr>
                  </table>
<br>
<pre></pre></div></td>
                </tr>
            </table>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><hr size="1"></td>
              </tr>
            </table>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td class="Estilo93"><table width="430" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td class="Estilo93">JUSTIFICACION</td>
                  </tr>
                </table>
                  <label>
                    <textarea name="ctreporte" cols="100" rows="8" class="TextField2" id="ctreporte" style="width:100%" onChange="javascript:this.value=this.value.toUpperCase();"></textarea>
                  </label></td>
              </tr>
            </table>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><hr size="1"></td>
              </tr>
            </table>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="95" height="45" class="Estilo93"><label>
                  <input name="reporto" type="button" class="TextField3" id="reporto" value="AJUSTAR" onClick=Validar(this.form)>
                  
                </label></td>
                <td class="Estilo93"><input name="salir" type="button" class="TextField3" id="salir" value="SALIR" onClick="window.close();"></td>
                </tr>
            </table>
          </form></td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>