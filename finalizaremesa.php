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


$Idviaje					= $_REQUEST["Idplan"];
$Remesa						= $_REQUEST["Remesa"];


		$query008078="SELECT* FROM Remisiones where Remesa = '$Remesa'" ;
		$result008078=mysql_query($query008078, $id);
		
		While($row008078=mysql_fetch_array($result008078))
		{
		$Remitenterem	=$row008078["Remitente"];
		$Destinatariorem=$row008078["Destinatario"];
		$Empresarem		=$row008078["Empresa"];
		$Contactodesrem	=$row008078["Contactodes"];
		$Telcontactorem	=$row008078["Telcontacto"];
		$Teldestirem	=$row008078["Teldesti"];
		
		}


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
												$mensa	= 	"<br><br>Informar y al conductor que tiene un viaje programado para la ciudad de ".$Nomdest2xxx."<br><br><br>RECUERDE REALIZAR ASIGNACION DE RUTA PARA EL VIAJE QUE ESTA PENDIENTE PARA ESTE VEHICULO<br><br>";
												}

	


$querypr3			=	"SELECT COUNT(*) as Totalr3 FROM Remisiones where Manifiesto = '$Manifiestoe' and Estad = 0" ;
$resultpr3			=	mysql_query($querypr3, $id);
													
While($rowpr3		=	mysql_fetch_array($resultpr3))
{
$Totalpr3			=	$rowpr3["Totalr3"];
}

								
$horaactual = date("H:i:s");
$hor = substr($horaactual, -8, 2);
$min = substr($horaactual, -5, 2);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FINALIZAR VIAJE</title>
<link rel="stylesheet" media="all" type="text/css" href="css/ui-lightness/jquery-ui-1.8.6.custom.css" />
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
	font-size: 9px;
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
	font-size: 9px;
	font-weight: bold;
}
.Estilo105 {
	color: #990000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
	font-weight: bold;
	text-align: left;
}
.Estilo97 {
	font-size: 18px;
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
.TextField31 {background-color: #666;
color: #FFF;
font-size: 8pt;
font-family: arial;
border : 1px solid #000;
}
.TextField32 {background-color: #069;
color: #FFF;
font-size: 8pt;
font-family: arial;
border : 1px solid #000;
}
.TextField4 {background-color: #900;
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
.tituloslista {	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
}
#freporte table tr .Estilo93 table tr .Estilo93 {
	text-align: justify;
}
#freporte table tr .Estilo93 table tr .Estilo93 p {
	text-align: justify;
}
			body{font: 90% Arial, Helvetica, sans-serif;}

			#ui-datepicker-div{ font-size: 80%; }
			.ui-timepicker-div .ui-widget-header{ margin-bottom: 8px; }
			.ui-timepicker-div dl{ text-align: left; }
			.ui-timepicker-div dl dt{ height: 25px; }
			.ui-timepicker-div dl dd{ margin: -25px 0 10px 65px; }
			.ui-timepicker-div td { font-size: 90%; }
-->
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
        
  

<script LANGUAGE="JavaScript">

function validar(formulario) 
{
  if (formulario.Nota.value == "") 
  {
    alert("Por favor ingrese una Nota");
    formulario.Nota.focus();
    return (false);
  }
  
  if (formulario.example1.value == "") 
  {
    alert("Por favor seleccione un Fecha/Hora");
    formulario.example1.focus();
    return (false);
  }
  
  if (formulario.Noved.value == "") 
  {
    alert("Por favor seleccione Novedad");
    formulario.Noved.focus();
    return (false);
  }
  
	
  if (formulario.Cal2[0].checked == false && formulario.Cal2[1].checked == false) 
  {
    alert("Por favor responda las preguntas solicitadas");
    return (false);
  }
  
  if (formulario.Cal3[0].checked == false && formulario.Cal3[1].checked == false) 
  {
    alert("Por favor responda las preguntas solicitadas");
    return (false);
  }
  
  if (formulario.Cal4[0].checked == false && formulario.Cal4[1].checked == false) 
  {
    alert("Por favor responda las preguntas solicitadas");
    return (false);
  }
  

  
  

  
  

							document.getElementById("btsubmit").value = "POR FAVOR ESPERE...";
							document.getElementById("btsubmit").disabled = true;

  return (true); 
  

}




</script>


<script LANGUAGE="JavaScript">

function validas(formulario) 
{
	
  if (formulario.Cal1[0].checked == false && formulario.Cal1[1].checked == false) 
  {
    alert("Por favor responda las preguntas solicitadas");
    return (false);
  }
	
	
  if (formulario.Cal2[0].checked == false && formulario.Cal2[1].checked == false) 
  {
    alert("Por favor responda las preguntas solicitadas");
    return (false);
  }
  
  if (formulario.Cal3[0].checked == false && formulario.Cal3[1].checked == false) 
  {
    alert("Por favor responda las preguntas solicitadas");
    return (false);
  }
  
  if (formulario.Cal4[0].checked == false && formulario.Cal4[1].checked == false) 
  {
    alert("Por favor responda las preguntas solicitadas");
    return (false);
  }
  
  if (formulario.Cal5[0].checked == false && formulario.Cal5[1].checked == false) 
  {
    alert("Por favor responda las preguntas solicitadas");
    return (false);
  }  

  return (true); 
  

}




</script>

<script language="javascript">
function algo(){ 
opener.location.reload(); 
window.close(); 
}  
</script>



<script type="text/javascript"> 
<!-- 
function Reveal (it, box) { 
var vis = (box.checked) ? "block" : "none"; 
document.getElementById(it).style.display = vis;
} 

function Hide (it, box) { 
var vis = (box.checked) ? "none" : "none"; 
document.getElementById(it).style.display = vis;
} 
//--> 
</script>


<style type="text/css">
<!--
a:link {
	color: #036;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #036;
}
a:hover {
	text-decoration: underline;
	color: #009;
}
a:active {
	text-decoration: none;
	color: #036;
}
.Estilo931 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
}
.Estilo931 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.Estilo932 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
}
.Estilo9311 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.listado3 {font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
	color: #666;
}
-->
</style>



</head>

<body>
<div class="example-container">
<pre></pre>
</div>
<table width="480" border="0" align="center" cellpadding="0" cellspacing="0" >
  <tr onMouseover="this.bgColor='#BED9F3'"onMouseout="this.bgColor='#FFFFFF'" >
    <td height="414" align="center" valign="top" bgcolor="#E0E9F1"><table width="450" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="30" align="left" valign="middle" bgcolor="#E9E9E9" class="Estilo97"> &nbsp;INFORMACION REMESA <span style="color: #900">(<?=$Remesa?>)</span></td>
        </tr>
    </table>
    <br>
    <table width="450" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="356" align="center" valign="top" bgcolor="#E9E9E9"><form id="freporte" name="freporte" method="post" action="finalizaremesa2.php" onSubmit = "return validar(this);">
            <input name="Idviaje" type="hidden" id="Idviaje" value="<?=$Idviaje?>">
            <input name="Remesa" type="hidden" id="Remesa" value="<?=$Remesa?>">
            <input name="Empresarem" type="hidden" id="Empresarem" value="<?=$Empresarem?>">
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="130" height="20" valign="middle" bgcolor="#E0E9F1" class="Estilo93">REMESA NRO.</td>
                <td width="300" align="left" valign="middle" bgcolor="#E0E9F1" class="Estilo93"><span class="Estilo105">
                  <?=$Remesa?></span></td>
              </tr>
          </table>
            <br>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="13" bgcolor="#003366" class="Estilo932">&nbsp;</td>
                <td width="417" bgcolor="#003366" class="Estilo932" style="color: #FFF; font-size: 14px;">EVALUAR CONDUCTOR </td>
              </tr>
            </table>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="41" height="18" align="center" valign="middle" class="Estilo932">SI</td>
                <td width="42" align="center" class="Estilo932">NO</td>
                <td width="347" align="center" class="Estilo932">&nbsp;</td>
              </tr>
            </table>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="41" height="32" align="center" bgcolor="#FFFFFF" class="Estilo932"><p>
                  <input type="radio" name="Cal2" id="radio3" value="1">
                  </p></td>
                <td width="42" align="center" bgcolor="#FFFFFF" class="Estilo932"><input type="radio" name="Cal2" id="radio4" value="2"></td>
                <td width="347" align="left" bgcolor="#FFFFFF" class="listado3" style="color: #000; font-size: 10px;"> El conductor presentó averías o faltantes en la entrega de la mercancia</td>
                </tr>
            </table>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="41" height="32" align="center" bgcolor="#FFFFFF" class="Estilo932"><p>
                  <input type="radio" name="Cal3" id="radio5" value="1">
                </p></td>
                <td width="42" align="center" bgcolor="#FFFFFF" class="Estilo932"><input type="radio" name="Cal3" id="radio6" value="2"></td>
                <td width="347" align="left" bgcolor="#FFFFFF" class="listado3" style="color: #000; font-size: 10px;">Se cumplieron las citas de entrega programadas </td>
              </tr>
            </table>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="41" height="32" align="center" bgcolor="#FFFFFF" class="Estilo932"><p>
                  <input type="radio" name="Cal4" id="radio7" value="1">
                </p></td>
                <td width="42" align="center" bgcolor="#FFFFFF" class="Estilo932"><input type="radio" name="Cal4" id="radio8" value="2"></td>
                <td width="347" align="left" bgcolor="#FFFFFF" class="listado3" style="color: #000; font-size: 10px;">Se presentaron quejas por parte del cliente acerca del comportamiento o presentacion del conductor</td>
              </tr>
            </table>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="41" height="18" align="center" valign="middle" class="Estilo932">&nbsp;</td>
                <td width="42" align="center" class="Estilo932">&nbsp;</td>
                <td width="347" align="center" class="Estilo932">&nbsp;</td>
                </tr>
            </table>
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
                    <td height="46" align="center" class="Estilo93"><p>Si presiona FINALIZAR REMESA la remesa será finalizada pero el vehículo continuara en <span class="Estilo105">"EN TRANSITO"</span>,   Todos los reportes realizados se podrán encontrar en el Histórico.<span class="Estilo105">
					
					<?
                      if(!empty($mensa))
					  {
						  
						echo   $mensa;
					?>
                    <script language="JavaScript">
<!--
(!alert("Informar al conductor que tiene un viaje programado para la ciudad de <?=$Nomdest2xxx?>"))

//-->
</script>
                    <?
                      } 
					?>
                      
                      </span></p></td>
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
                <td width="134" height="23" class="Estilo93"><label>
                  <input name="btsubmit1" type="submit" class="TextField3" id="btsubmit1" value="FINALIZAR REMESA" onClick="return validas(this);">
                </label></td>
                <td width="136" class="Estilo93"><input name="salir" type="button" class="TextField31" id="salir" value="SALIR" onClick="window.close();"></td>
                <td width="160" class="Estilo93">&nbsp;</td>
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