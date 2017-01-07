<?
session_start(); 

include("conexion.php");

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
date_default_timezone_set('America/Bogota');


$Idviaje 	= $_REQUEST["Id"];


									$query00841		=	"SELECT* FROM Pausar where Idviaje = '$Idviaje'" ;
									$result00841	=	mysql_query($query00841, $id);
									
									While($row00841	=	mysql_fetch_array($result00841))
									{
									$Pausa			=	$row00841["Pausa"];
									}

$problema	=	$_REQUEST["problema"];

if (!empty($problema))
{
$Fecha 		=	$_SESSION['Vence'];
$hor1		=	$_SESSION['Inicioh'];
$min1		=	$_SESSION['Iniciom'];
$Reporte	=	$_SESSION['Reporte'];
}
else
{
$Fecha		= date("Y-m-d");

$horaactual1 = date("H:i:s");
$hor1 		= substr($horaactual1, -8, 2);
$min1		= substr($horaactual1, -5, 2);

$hor2 		= substr($horaactual1, -8, 2);
$min2		= substr($horaactual1, -5, 2);
}


		$queryt="SELECT* FROM Recorrido  where Idviaje  = '$Idviaje' and Estado = '0' order by Id desc";
		$resultt=mysql_query($queryt, $id);
			
		While($rowt=mysql_fetch_array($resultt))
		{
		$Idpuesto 	=$rowt["Idpuesto"];
		}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PAUSAR VIAJE</title>
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
	font-size: 12px;
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
<script language="javascript">
function algo(){ 
opener.location.reload(); 
window.close(); 
}  
</script>
<style type="text/css">
<!--
.alert {	font-size: 11px;
	font-weight: bold;
	color: #F00;
}
-->
</style>
</head>

<body>
<table width="480" border="0" align="center" cellpadding="0" cellspacing="0" >
  <tr onMouseover="this.bgColor='#BED9F3'"onMouseout="this.bgColor='#FFFFFF'" >
    <td height="447" align="center" valign="top" bgcolor="#C7D7E7"><table width="450" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="30" align="center" valign="middle" bgcolor="#E9E9E9" class="Estilo97">DESPAUSAR VIAJE</td>
        </tr>
    </table>
      <br>

      <table width="450" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td align="center" valign="top" bgcolor="#E9E9E9">
            <form id="freporte" name="freporte" method="post" action="despausartransito2.php">
              <table width="430" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td align="center" class="Estilo105"><?
			if($problema == "a")
			{
			echo "LA FECHA DE RETORNO NO PUEDE SER MENOR A LA FECHA DE INICIO DE PAUSA<BR>";
			}

			?></td>
                </tr>
              </table>
              <input name="Idviaje" type="hidden" id="Idviaje" value="<?=$Idviaje?>">
              <span class="Estilo105">
                
              </span><br>
              <table width="430" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td class="Estilo93"> 
VIAJE PAUSADO DESDE : <span class="Estilo97"><?=$Pausa?>
<input name="Fechapausa" type="hidden" id="Fechapausa" value="<?=$Pausa?>">
<input name="Idpuesto" type="hidden" id="Idpuesto" value="<?=$Idpuesto?>">
</span></td>
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
                      <td class="Estilo93">REPORTE INTERNO</td>
                      </tr>
                    </table>
                    <label>
                      <textarea name="ctreporte" style="width:100%" rows="5" class="TextField2" id="ctreporte" onKeyUp="freporte.ctreporte.value=freporte.ctreporte.value.toUpperCase();"><?=$Reporte?></textarea>
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
                  <td class="Estilo93"><table width="430" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="170" class="Estilo93">REPORTE AL CLIENTE</td>
                      <td width="24" valign="top" class="Estilo93"><label>
                        <input name="cbia" type="checkbox" id="cbia" value="cbia" onClick="cambio()">
                        </label></td>
                      <td width="236" valign="middle" class="Estilo93">IGUAL A REPORTE INTERNO</td>
                      </tr>
                    </table>
                    <label>
                      <textarea name="ctreportecliente" style="width:100%" rows="5" class="TextField2" id="ctreportecliente" disabled="disabled" onKeyUp="freporte.ctreportecliente.value=freporte.ctreportecliente.value.toUpperCase();"></textarea>
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
                  <td width="99" height="45" class="Estilo93"><label>
                    <input name="reporto" type="submit" class="TextField3" id="reporto" value="DESPAUSAR">
                    
                  </label></td>
                  <td width="331" class="Estilo93"><input name="salir" type="button" class="TextField3" id="salir" value="SALIR" onClick="window.close();"></td>
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

      <script>
function nueva_fecha_nacimiento2(fecha){
  $('fecha_nacimiento2').setValue(fecha.format('yyyy-mm-dd'));
  $('calendario4').hide();
}
var calendario4 = new scal('calendario4', nueva_fecha_nacimiento2, {
    titleformat: 'mmm yyyy',
    closebutton: 'X',
    dayheadlength: 2,
    weekdaystart: 1
});
      </script>        
</body>
</html>