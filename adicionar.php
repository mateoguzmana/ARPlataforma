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
$horaok		= 	date("Y-m-d H:i:s");


if(!empty($_SESSION['cbia']))
{
$activar	=	"checked";	
}

if(!empty($_SESSION['enviru']))
{
$activar2	=	"checked";	
}


	$query008ny="SELECT* FROM Recorrido where Idviaje = '$Idviaje' and Estado = 0 and Muestra = 1 order by Pos asc";
	$result008ny=mysql_query($query008ny, $id);
						
	While($row008ny=mysql_fetch_array($result008ny))
						
	{
		$Tiempomuestra 		=		$row008ny["Tiempo"];
		$Idpuestof	 		=		$row008ny["Idpuesto"];
	}
	


if($horaok > $Tiempomuestra)
{
			$query008nyw="SELECT TIMEDIFF('$horaok','$Tiempomuestra') AS diferencia";

			$result008nyw=mysql_query($query008nyw, $id);
			
			While($row008nyw=mysql_fetch_array($result008nyw))
			{
			$diferencia 		=		$row008nyw["diferencia"];
			$Mensaje	 		=		"El vehículo se encuentra atrasado, para normalizar el tiempo de viaje, el sistema incrementará: ";
			}
			
			$query008nywr="SELECT TIME_TO_SEC('$diferencia') AS diferenciar";

			$result008nywr=mysql_query($query008nywr, $id);
			
			While($row008nywr=mysql_fetch_array($result008nywr))
			{
			$diferenciar 		=		$row008nywr["diferenciar"];
			}
			$opera				=		"suma";
			
}
else
{
			$query008nyw="SELECT TIMEDIFF('$Tiempomuestra','$horaok') AS diferencia";

			$result008nyw=mysql_query($query008nyw, $id);
			
			While($row008nyw=mysql_fetch_array($result008nyw))
			{
			$diferencia 		=		$row008nyw["diferencia"];
			$Mensaje	 		=		"El vehículo se encuentra con tiempo a favor, para normalizar el viaje el sistema descontara: ";
			}	
			
			$query008nywr="SELECT TIME_TO_SEC('$diferencia') AS diferenciar";

			$result008nywr=mysql_query($query008nywr, $id);
			
			While($row008nywr=mysql_fetch_array($result008nywr))
			{
			$diferenciar 		=		$row008nywr["diferenciar"];
			}
			$opera				=		"resta";
			
}



$horaactual = date("H:i:s");
$hor = substr($horaactual, -8, 2);
$min = substr($horaactual, -5, 2);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AJUSTE TIEMPO PLAN DE VIAJE</title>
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
.listado {
	color: #333;
}
.listado {
	text-align: justify;
}
.hideable { position: relative; visibility: visible; }
-->
</style>

<script language="javascript"> 
function cambio()
{
	if (document.freporte.cbia.checked==true)
		{
			document.freporte.ctreportecliente.disabled=true;
			freporte.ctreportecliente.value = freporte.ctreporte.value;
		}
	else
		{
			document.freporte.ctreportecliente.disabled=false;
			freporte.ctreportecliente.value = "";
		}
	return
}
</script>

<script type="text/javascript" src="prototype.js"></script>
  <script type="text/javascript" src="scal.js"></script>
  <link href="scal.css" media="screen" rel="stylesheet" type="text/css" />
  

<script language="javascript">
function algo(){ 
opener.location.reload(); 
window.close(); 
}  
</script>

<script LANGUAGE="JavaScript">

function validar(formulario) 
{

  if (formulario.ctreporte.value == "") 
  {
    alert("Por favor ingrese una Justificacion");
    formulario.ctreporte.focus();
    return (false);
  }
  
  if (formulario.ctreportecliente.value == "") 
  {
    alert("Ingrese un reporte al Cliente");
    formulario.ctreportecliente.focus();
    return (false);
  }	
  
  if (formulario.ctreportecliente.value == "" && formulario.Iniciar.checked) 
  {
    alert("No ha ingresado un reporte al cliente");
    formulario.ctreportecliente.focus();
    return (false);
  } 


  if (formulario.Iniciar.checked == "") 
  {
	var agree=confirm("Esta seguro que no enviara este reporte por E-mail?"); 
	if (agree) 
	{
							document.getElementById("btsubmit").value = "POR FAVOR ESPERE...";
							document.getElementById("btsubmit").disabled = true;
	return true ; 
	}
	else
	{
	return false ;
	}
  } 
 
  if (formulario.Iniciar.checked == "") 
  {
	var agree=confirm("Esta seguro de enviar este reporte?");  
	if (agree) 
	{
							document.getElementById("btsubmit").value = "POR FAVOR ESPERE...";
							document.getElementById("btsubmit").disabled = true;
	return true ; 
	}
	else
	{
	return false ;
	}
  } 
  


							document.getElementById("btsubmit").value = "POR FAVOR ESPERE...";
							document.getElementById("btsubmit").disabled = true;
							
  return (true); 
}
</script>


<?

if($_SESSION['procesar'] == "si")
{
?>
		<script src="js/jquery-1.2.6.pack.js" type="text/javascript"></script>
		<script src="js/thickbox.js" type="text/javascript"></script>
		<link href="css/thickbox.css" rel="stylesheet" type="text/css" media="screen" />
        
        
        
<script type='text/javascript' src='js/formexp.js'></script>
<script>
function expandir_formulario(){
 if (document.freporte.expandir.checked){
	xDisplay('capaexpansion', 'block')
 }else{
	xDisplay('capaexpansion', 'none')
 }

}

</script>   
        
<script> 
$(document).ready(function()
						   
	{ 
					var title = "";
					var orderCode = $("input[name=order_code]", this).val();
					var quantity = $("input[name=quantity]", this).val();
					var url = "select-mails-adicion.php?Id=<?=$Idviaje?>&TB_iframe=true&height=400&width=300&modal=true";
					tb_show(title, url, false);					   

	}
); 
</script>
<?
}
?>



<style type="text/css">
<!--
#capainicio{
	position:relative;
}
#capaexpansion{
	position:relative;
	display:none;

}
#capafinal{
	position:relative;

}
.Estilo931 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
	color: #000;
}
.listado3 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #666;
}
-->
</style>


</head>

<BODY onLoad="cambio();">
<table width="480" border="0" align="center" cellpadding="0" cellspacing="0" >
  <tr onMouseover="this.bgColor='#BED9F3'"onMouseout="this.bgColor='#FFFFFF'" >
    <td height="455" align="center" valign="top" bgcolor="#C7D7E7"><table width="450" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="30" align="center" valign="middle" bgcolor="#E9E9E9" class="Estilo97">AJUSTE TIEMPO PLAN DE VIAJE</td>
        </tr>
    </table>
    <br>
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
          <td height="376" align="center" valign="top" bgcolor="#E9E9E9">
          
          
          <form action="adiccion.php"  method="post" id="freporte" name="freporte" onSubmit = "return validar(this);">
            <input name="Idviaje" type="hidden" id="Idviaje" value="<?=$Idviaje?>">
            
<?
if($TOTALA > 0)
{
?>
									<script language='javascript'>
									alert('ESTE VIAJE TIENE CITAS');
									</script>  
            
<?
}
?>
            <br>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="66" class="Estilo93">HORAS<br>
                  <select name="Inicioh" class="TextField2" id="select5">
                    <option value="00" >00</option>
                    <option value="01" >01</option>
                    <option value="02" >02</option>
                    <option value="03" >03</option>
                    <option value="04" >04</option>
                    <option value="05" >05</option>
                    <option value="06" >06</option>
                    <option value="07" >07</option>
                    <option value="08" >08</option>
                    <option value="09" >09</option>
                    <option value="10" >10</option>
                    <option value="11" >11</option>
                    <option value="12" >12</option>
</select></td>
                <td width="94" class="Estilo93">MINUTOS <br>
                  <select name="Iniciom" class="TextField2" id="select6">
                    <option value="00" >00</option>
                    <option value="05" >05</option>
                    <option value="10" >10</option>
                    <option value="15" >15</option>
                    <option value="20" >20</option>
                    <option value="25" >25</option>
                    <option value="30" >30</option>
                    <option value="35" >35</option>
                    <option value="40" >40</option>
                    <option value="45" >45</option>
                    <option value="50" >50</option>
                    <option value="55" >55</option>
</select></td>
                <td width="270" align="right" class="Estilo93"><span class="listado">
                  FECHA/HORA  DE REPORTE:</span><span class="Estilo105"> &nbsp;<?=$Tiempomuestra?>
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
                <td width="2" class="Estilo93">&nbsp;</td>
                <td width="420" class="listado"><?=$Mensaje?>
                  <span class="Estilo105"><?=$diferencia?>
                  </span> al tiempo que adicione.
                  
                  <input name="opera" type="hidden" id="opera" value="<?=$opera?>">
                  <input name="Tiempo" type="hidden" id="Tiempo" value="<?=$diferencia?>">
                  <input name="Reporte" type="hidden" id="Reporte" value="<?=$Tiempomuestra?>">
                  <input name="Puesto" type="hidden" id="Puesto" value="<?=$Idpuestof?>"></td>
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
                      <td width="175" valign="top" class="Estilo931">ENVIAR E-MAIL
                        <br>
<?
if(!empty($_SESSION['Nitmail']))
{
?>
                          <input name="Iniciar" type="checkbox" id="Iniciar" value="1" <?=$activar2?>>
                          <?
}
else
{
?>
                          <input name="Iniciar" type="checkbox" id="Iniciar" value="1" onClick="if(this.checked) this.form.submit();" <?=$activar2?>>
<?
}
$nites	=$_SESSION['Nitmail'];
?>
                       
                        <input name="Nits" type="hidden" id="Nits" value="<?=$nites?>"></td>
                      <td width="255" valign="top" class="listado1"><span class="Estilo931">
                        <?
                 $selecion		=	$_SESSION['Nitmail'];
				 $enviru		=	$_SESSION['enviru'];
				
				if($enviru)
				{
				?>
                        </span>
                        <table width="250" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="168"><span class="Estilo931">EMPRESAS SELECCIONADAS </span></td>
                            <td width="82"><span class="listado3"><a href="select-mails-update-adicion.php?Id=<?=$Idviaje?>">(Modificar)</a></span></td>
                          </tr>
                          <tr>
                            <td height="10" colspan="2" valign="bottom" class="listado1" style="color: #900"><?

				if(!empty($selecion))
				{
					foreach ($selecion as &$value) 
					{
							$querytemp="SELECT* FROM Empresas  where Nit  = '$value'" ;
							$resulttemp=mysql_query($querytemp, $id);
								
							While($rowtemp=mysql_fetch_array($resulttemp))
							{
							$Nombreemprea 	=$rowtemp["Nombre"];
							}
							
							echo $Nombreemprea."<br>";
					}
				}
				
				?></td>
                          </tr>
                        </table>
                        <?

				}
?></td>
                    </tr>
                </table>
                  <table width="430" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td><hr size="1"></td>
                    </tr>
                  </table>
                  <table width="430" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="25" class="Estilo93">                        JUSTIFICACION</td>
                    </tr>
                </table>
                  <table width="430" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td><hr size="1"></td>
                    </tr>
                  </table>
                  <table width="430" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td class="Estilo93">
                        <textarea name="ctreporte" style="width:100%" rows="4" class="TextField2" id="ctreporte" onChange="javascript:this.value=this.value.toUpperCase();"><?=$_SESSION['ctreportecliente']?></textarea></td>
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
                            <input name="cbia" type="checkbox" id="cbia" onClick="cambio()" value="cbia" <?=$activar?>>
                          </label></td>
                          <td width="236" valign="middle" class="Estilo93">IGUAL A REPORTE INTERNO</td>
                        </tr>
                      </table>
                      
                          <?
if($_SESSION['cbia'] != 'cbia')
{
$poner	=	'disabled="disabled"';	
}

?>
               <textarea name="ctreportecliente" style="width:100%" rows="6" class="TextField2" id="ctreportecliente" onChange="javascript:this.value=this.value.toUpperCase();"><?=$_SESSION['ctreportecliente']?></textarea>
                     </td>
                    </tr>
                </table>
                  <table width="430" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td><hr size="1"></td>
                    </tr>
                  </table></td>
              </tr>
            </table>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="45" class="Estilo93">
                  <input name="button" type="submit" class="TextField3" id="btsubmit" value="AJUSTAR">
                  
                   &nbsp;&nbsp;&nbsp;<input name="salir" type="button" class="TextField3" id="salir" value="SALIR" onClick="window.close();"></td>
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