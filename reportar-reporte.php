<?
include("conexion.php");

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
date_default_timezone_set('America/Bogota');


$Idviaje 	= $_REQUEST["Id"];
$Idpuesto 	= $_REQUEST["Idpuesto"];
$Poss	 	= $_REQUEST["Pos"];

	


								$queryp3			=	"SELECT COUNT(*) as Total1 FROM Recorrido where Idviaje = '$Idviaje'" ;
								$resultp3			=	mysql_query($queryp3, $id);
												
								While($rowp3		=	mysql_fetch_array($resultp3))
								{
								$Totalp3			=	$rowp3["Total1"];
								
								$Totalp3			=	$Totalp3 - 1;
								$Totalp3f			=	$Totalp3 - 1;
								}
								
								if ($Totalp3f == $Poss)
								{
									$query008e="SELECT* FROM Viajes where  Id = '$Idviaje'" ;
									$result008e=mysql_query($query008e, $id);
									
									While($row008e=mysql_fetch_array($result008e))
									{
									$Manifiestoe		=$row008e["Manifiesto"];
									}
									
									$query0080xx		=	"SELECT* FROM Manifiestos where Nromanifiesto = '$Manifiestoe'" ;
									$result0080xx		=	mysql_query($query0080xx, $id);
									
									While($row0080xx	=	mysql_fetch_array($result0080xx))
									{
									$Placaxx						= $row0080xx["Placa"];
									$Nomdestxx						= $row0080xx["Nomdest"];
									$Conductorxx					= $row0080xx["Conductor"];
									}
									
										$query008exxx="SELECT* FROM Viajes where  Iniciado = 1" ;
										$result008exxx=mysql_query($query008exxx, $id);
										
										While($row008exxx=mysql_fetch_array($result008exxx))
										{
										$Manifiestoxxx		=$row008exxx["Manifiesto"];
										
											$query00812xxx="SELECT* FROM Manifiestos where Nromanifiesto = '$Manifiestoxxx' and Placa = '$Placaxx'" ;
											$result00812xxx=mysql_query($query00812xxx, $id);
										
											While($row00812xxx=mysql_fetch_array($result00812xxx))
											{
											$Placa2xxx			=$row00812xxx["Placa"];
											$Conductor2xxx		=$row00812xxx["Conductor"];
											$Nomdest2xxx		=$row00812xxx["Nomdest"];
											$Nromanifiesto2xxx	=$row00812xxx["Nromanifiesto"];
											}
										
										}		
										
												if ($Nromanifiesto2xxx <> "")
												{
												$mensa	= 	"Ingresar la ciudad predilecta asignada";
												$nueva	=	"mas";
												}
												else
												{
												$mensa	= 	"Consulte ciudad predilecta al conductor";	
												$nueva	=	"si";
												}
												
										
									
	
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
	text-align: center;
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

function validar(formulario) 
{
  if (formulario.ctreporte.value == "") 
  {
    alert("Por favor ingrese un reporte");
    formulario.ctreporte.focus();
    return (false);
  }

  return (true); 
}
</script>

</head>

<body>
<table width="480" border="0" align="center" cellpadding="0" cellspacing="0" >
  <tr onMouseover="this.bgColor='#BED9F3'"onMouseout="this.bgColor='#FFFFFF'" >
    <td height="455" align="center" valign="top" bgcolor="#C7D7E7"><table width="450" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="30" align="center" valign="middle" bgcolor="#E9E9E9" class="Estilo97">REPORTE PUESTO CONTROL</td>
        </tr>
    </table>
<?
$query="SELECT COUNT(*) as Total FROM Recorridoalert where Idpuesto = '$Idpuesto' and Idplan = '$Idviaje'" ;
$result=mysql_query($query, $id);

While($row=mysql_fetch_array($result))
{
$Total=$row["Total"];
}
if ($Total == 0)
{
?>      <br>
<?

		$queryt="SELECT* FROM Puestos  where Id  = '$Idpuesto'" ;
		$resultt=mysql_query($queryt, $id);
			
		While($rowt=mysql_fetch_array($resultt))
		{
		$Nombre 	=$rowt["Nombre"];
		}
?>
      <table width="450" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="376" align="center" valign="top" bgcolor="#E9E9E9"><form id="freporte" name="freporte" method="post" onSubmit = "return validar(this)" action="reportar-viaje.php" style=" text-align: center;">
            <input name="Idviaje" type="hidden" id="Idviaje" value="<?=$Idviaje?>">
            <input name="Idpuesto" type="hidden" id="Idpuesto" value="<?=$Idpuesto?>">
            <input name="Pos" type="hidden" id="Pos" value="<?=$Poss?>">
            <br>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="107" align="center" class="Estilo93">ESTE PUESTO DE CONTROL NO TIENE REPORTE</td>
                </tr>
            </table>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><hr size="1"></td>
              </tr>
            </table>
            <table width="380" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="63" align="center" class="Estilo93"><input name="salir" type="button" class="TextField3" id="salir" value="SALIR" onClick="window.close();"></td>
                </tr>
            </table>
          </form></td>
        </tr>
      </table>
<?
}
else
{
	
			$query008t="SELECT* FROM Recorridoalert where Idpuesto = '$Idpuesto' and Idplan = '$Idviaje'" ;
			$result008t=mysql_query($query008t, $id);
			
			While($row008t=mysql_fetch_array($result008t))
			{
			$Idn			=$row008t["Id"];
			$Fechareport 	=$row008t["Fechareport"];
			$Reporteint		=$row008t["Reporteint"];
			$Reporteclien	=$row008t["Reporteclien"];
			$Estado			=$row008t["Estado"];	
			
		$queryt="SELECT* FROM Puestos  where Id  = '$Idpuesto'" ;
		$resultt=mysql_query($queryt, $id);
			
		While($rowt=mysql_fetch_array($resultt))
		{
		$Nombre 	=$rowt["Nombre"];
		}
		
			}
?>
<table width="450" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="376" align="center" valign="top" bgcolor="#E9E9E9"><form id="freporte2" name="freporte" method="post" >
      <input name="Idviaje2" type="hidden" id="Idviaje2" value="<?=$Idviaje?>">
      <input name="Idpuesto2" type="hidden" id="Idpuesto2" value="<?=$Idpuesto?>">
      <br>
      <table width="430" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="210" class="Estilo93">PUESTO DE CONTROL<br>
            <span class="Estilo105"><?=$Nombre?>
            </span></td>
          <td width="220" class="Estilo93">FECHA<br>
            <span class="Estilo93 Estilo96">
              <div id="calendario" class="scal tinyscal" style='display:none;'></div>
              </span><span class="Estilo105"><?=$Fechareport?></span></td>
          </tr>
      </table>
      <table width="430" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td><hr size="1"></td>
        </tr>
      </table>
      <table width="430" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="210" class="Estilo93">ESTADO<br></td>
          <td width="220" class="Estilo93"><span class="Estilo93 Estilo96">
              <div id="calendario2" class="scal tinyscal" style='display:none;'></div>
              <span class="Estilo105">
              <?=$Estado?>
              </span></span></td>
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
              <textarea name="ctreporte" cols="100" style="width:100%" readonly class="TextField2" id="ctreporte"><?=$Reporteint?></textarea>
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
              <td width="24" valign="top" class="Estilo93">&nbsp;</td>
              <td width="236" valign="middle" class="Estilo93">&nbsp;</td>
            </tr>
          </table>
            <label>
              <textarea name="ctreportecliente" cols="100" style="width:100%" readonly class="TextField2" id="ctreportecliente"><?=$Reporteclien?></textarea>
            </label></td>
        </tr>
      </table>
      <table width="430" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td><hr size="1"></td>
        </tr>
      </table>
      <table width="380" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="45" align="center" class="Estilo93"><input name="salir2" type="submit" class="TextField3" id="salir2" value="SALIR" onClick="window.close();"></td>
          </tr>
      </table>
    </form></td>
  </tr>
</table>
<?
}
?>
</td>
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