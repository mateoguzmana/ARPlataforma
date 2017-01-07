<?
session_start();

$Usuario		= 		$_SESSION['Empresa'];

include("conexion.php");

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
date_default_timezone_set('America/Bogota');


$Idviaje 	= $_REQUEST["Id"];

	$query008="SELECT* FROM Viajes where Id = '$Idviaje'" ;
	$result008=mysql_query($query008, $id);
	
	While($row008=mysql_fetch_array($result008))
	{
	$Idn			=$row008["Id"];
	$Manifiesto		=$row008["Manifiesto"];
	$Remesas		=$row008["Remesas"];
	$Reporte		=$row008["Reporte"];
	}
	
	$query0081="SELECT* FROM Manifiestos where Nromanifiesto = '$Manifiesto'" ;
	$result0081=mysql_query($query0081, $id);

	While($row0081=mysql_fetch_array($result0081))
	{
	$Origen			=$row0081["Nombreorg"];
	$Destino		=$row0081["Nomdest"];
	$Placa			=$row0081["Placa"];
	$Conductor		=$row0081["Conductor"];
	}						

$horaactual = date("H:i:s");
$hor = substr($horaactual, -8, 2);
$min = substr($horaactual, -5, 2);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>REPORTE PUESTO CONTROL</title>
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
.TextField4 {background-color: #006699;
color: #FFF;
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
.tituloslista {
	font-family: "Arial Narrow";
	font-size: 10px;
	font-weight: bold;
	color: #00F;
}
.resalto {
	color: #F00;
}
-->
</style>
<script type="text/javascript" src="prototype.js"></script>
  <script type="text/javascript" src="scal.js"></script>
  <link href="scal.css" media="screen" rel="stylesheet" type="text/css" />
  
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

function Validar(form)
{
  if (form.ctreporte.value == "")
  { alert("Por favor ingrese un reporte"); form.ctreporte.focus(); return; }

  form.submit();
}
</script>

</head>

<body>
<table width="480" border="0" align="center" cellpadding="0" cellspacing="0" >
  <tr onMouseover="this.bgColor='#BED9F3'"onMouseout="this.bgColor='#FFFFFF'" >
    <td height="427" align="center" valign="top" bgcolor="#C7D7E7"><table width="450" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="30" align="center" valign="middle" bgcolor="#E9E9E9" class="Estilo97">CANCELACION DE VIAJE</td>
        </tr>
    </table>
      <br>
      <table width="450" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="311" align="center" valign="top" bgcolor="#E9E9E9"><form id="freporte2" name="freporte" method="post" action="cancelacionviaje2.php" >
            <input name="Idviaje" type="hidden" id="Idviaje" value="<?=$Idviaje?>">
            <br>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><hr size="1"></td>
              </tr>
            </table>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="165" height="24" class="Estilo93">NRO. MANIFIESTO<br></td>
                <td width="265" class="Estilo105"><?=$Manifiesto?></td>
              </tr>
            </table>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><hr size="1"></td>
              </tr>
            </table>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="165" height="24" class="Estilo93">ORIGEN<br></td>
                <td width="265" class="Estilo105"><?=$Origen?></td>
              </tr>
            </table>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><hr size="1"></td>
              </tr>
            </table>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="165" height="24" class="Estilo93">DESTINO<br></td>
                <td width="265" class="Estilo105"><?=$Destino?></td>
              </tr>
            </table>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><hr size="1"></td>
              </tr>
            </table>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="224" height="24" class="Estilo93">COMENTARIOS DE CANCELACION<br></td>
                <td width="206" class="Estilo105">&nbsp;</td>
              </tr>
            </table>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="24" class="Estilo93"><textarea name="ctreporte" style="width:100%" rows="6" class="TextField2" id="ctreporte"><?=$Reporte?></textarea>                  <br></td>
                </tr>
            </table>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><hr size="1"></td>
              </tr>
            </table>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="50" align="center" class="tituloslista">RECUERDE QUE AL HACER CLIC EN APROBAR ESTE VEHICULO SALDRA DE LISTA DE ASIGNACION</td>
                </tr>
            </table>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><hr size="1"></td>
              </tr>
            </table>
            <table width="425" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="364" height="34" align="right" class="Estilo93"><input name="reporto" type="button" onClick=Validar(this.form) class="TextField3" id="reporto" value="APROBAR"></td>
                <td width="61" align="right" class="Estilo105"><span class="Estilo93">
                  <input name="salir" type="button" class="TextField3" id="salir" value="SALIR" onClick="window.close();">
                </span></td>
              </tr>
            </table>
          </form></td>
        </tr>
      </table></td>
  </tr>
</table>
      <script>
function nueva_fecha_nacimiento(fecha){
  $('fecha_nacimiento').setValue(fecha.format('yyyy-mm-dd'));
  $('calendario5').hide();
}
var calendario5 = new scal('calendario5', nueva_fecha_nacimiento, {
    titleformat: 'mmm yyyy',
    closebutton: 'X',
    dayheadlength: 2,
    weekdaystart: 1
});
      </script>  
</body>
</html>