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
date_default_timezone_set('America/Bogota');


$Idviaje 	= $_REQUEST["Id"];
$Idpuesto 	= $_REQUEST["Idpuesto"];
$man 		= $_REQUEST["man"];






$horaactual = date("H:i:s");
$hor = substr($horaactual, -8, 2);
$min = substr($horaactual, -5, 2);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ENVIAR A ASIGNACION DE RUTA</title>
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
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
	color: #06C;
}
#freporte table tr .Estilo93 table tr .Estilo93 {
	text-align: justify;
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
    <td height="455" align="center" valign="top" bgcolor="#C7D7E7"><table width="450" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="30" align="center" valign="middle" bgcolor="#E9E9E9" class="Estilo97">VOLVER A ASIGNACIÓN DE RUTA</td>
        </tr>
    </table>
    <br>
    <table width="450" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="376" align="center" valign="top" bgcolor="#E9E9E9"><form id="freporte" name="freporte" method="post" action="enviaralista2.php">
            <input name="Idviaje" type="hidden" id="Idviaje" value="<?=$Idviaje?>">
            <input name="man" type="hidden" id="man" value="<?=$man?>">
            <br>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="13" bgcolor="#CCFF00" class="Estilo93">&nbsp;</td>
                <td width="417" bgcolor="#CCFF00" class="Estilo93" style="color: #F00; font-size: 14px;">ADVERTENCIA !!!</td>
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
                    <td height="52" class="Estilo93">
                    
                    
<?
if($Totalofc > 0)
{


?>
                    
                    <table width="430" border="0">
                      <tr>
                        <td height="26" bgcolor="#FFFFFF" class="tituloslista">ESTE VIAJE LLEVA GUIAS ASIGNADAS, ESTAS SERAN DEVULETAS</td>
                      </tr>
                    </table>
<?
	$query0080		=	"SELECT* FROM Guias where  Manifiesto  = '$man'" ;
	$result0080		=	mysql_query($query0080, $id);
	
	While($row0080	=	mysql_fetch_array($result0080))
	{
	$Nro			= $row0080["Nro"];
?>
                    <table width="430" border="0">
                      <tr>
                        <td class="Estilo105">GUIA NRO. <?=$Nro?></td>
                      </tr>
                    </table>
                    <table width="430" border="0">
                      <tr>
                        <td class="Estilo105"><hr></td>
                      </tr>
                    </table>
                    
<?
	}
	}
?>
    <BR>                
                    
                      Si acepta esta opción el viaje volvera al estado <span class="Estilo105">"Pendiente por Asignación"</span></td>
                  </tr>
                </table></td>
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
                <td height="24" class="Estilo93"><textarea name="ctreporte" style="width:100%" rows="6" class="TextField2" id="ctreporte" onChange="javascript:this.value=this.value.toUpperCase();"></textarea>
                  <br></td>
              </tr>
            </table>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="45" class="Estilo93">
                  <?
                if($Totalofcv==0)
				{
				?>
                  <input name="reporto" type="button" class="TextField3" onClick=Validar(this.form) id="reporto" value="ACEPTAR">
                <?
				}
				else
				{
				$MS	= "ESTE VIAJE TIENE GUIAS YA CONTABILIZADAS &nbsp;&nbsp;";
				}
				?>
                <?=$MS?><input name="salir" type="button" class="TextField3" id="salir" value="SALIR" onClick="window.close();"></td>
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