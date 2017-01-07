<?
session_start(); 

include("conexion.php");

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
date_default_timezone_set('America/Bogota');


$Idviaje 	= $_REQUEST["Id"];

$problema	=	$_REQUEST["problema"];

if (!empty($problema) || ($_SESSION['enviru'] == "si"))
{
$Fecha 		=	$_SESSION['Vence'];
$hor1		=	$_SESSION['Inicioh'];
$min1		=	$_SESSION['Iniciom'];
$Fecha2		=	$_SESSION['Vence2'];
$hor2		=	$_SESSION['Inicioh2'];
$min2		=	$_SESSION['Iniciom2'];
$Motivo		=	$_SESSION['Motivo'];
$Reporte	=	$_SESSION['Reporte'];
}
else
{
$Fecha		= date("Y-m-d");
$Fecha2		= date("Y-m-d");

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
		
		
if(!empty($_SESSION['cbia']))
{
$activar	=	"checked";	
}

if(!empty($_SESSION['enviru']))
{
$activar2	=	"checked";	
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
	font-size: 10px;
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
<script type="text/javascript" src="prototype.js"></script>
  <script type="text/javascript" src="scal.js"></script>
  <link href="scal.css" media="screen" rel="stylesheet" type="text/css" />
  
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

<script language="javascript">
function algo(){ 
opener.location.reload(); 
window.close(); 
}  
</script>
<script LANGUAGE="JavaScript">

function validar(formulario) 
{
  if (formulario.tpausa.value == "") 
  {
    alert("Por favor seleccione el motivo de pausa");
    formulario.tpausa.focus();
    return (false);
  }

  if (formulario.ctreporte.value == "") 
  {
    alert("Por favor ingrese un reporte");
    formulario.ctreporte.focus();
    return (false);
  }
  
  if (formulario.ctreportecliente.value == "" && formulario.envio.checked) 
  {
    alert("No ha ingresado un reporte al cliente");
    formulario.ctreportecliente.focus();
    return (false);
  }
  
  if (formulario.envio.checked) 
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
  

  if (formulario.envio.checked == "") 
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
 
  if (formulario.envio.checked == "") 
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
        
<script> 
$(document).ready(function()
						   
	{ 
					var title = "";
					var orderCode = $("input[name=order_code]", this).val();
					var quantity = $("input[name=quantity]", this).val();
					var url = "select-mails-pausa.php?Id=<?=$Idviaje?>&Idpuesto=<?=$Idpuesto?>&TB_iframe=true&height=400&width=300&modal=true";
					tb_show(title, url, false);					   

	}
); 
</script>
<?
}
?>

<style type="text/css">
<!--
.alert {	font-size: 11px;
	font-weight: bold;
	color: #F00;
}
.Estilo931 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
	color: #000;
}
-->
</style>
</head>

<body>
<table width="480" border="0" align="center" cellpadding="0" cellspacing="0" >
  <tr onMouseover="this.bgColor='#BED9F3'"onMouseout="this.bgColor='#FFFFFF'" >
    <td height="447" align="center" valign="top" bgcolor="#C7D7E7"><table width="450" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="30" align="center" valign="middle" bgcolor="#E9E9E9" class="Estilo97">PAUSAR VIAJE</td>
        </tr>
    </table>
      <br>

      <table width="450" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td align="center" valign="top" bgcolor="#E9E9E9">
            <form id="freporte" name="freporte" method="post" action="pausartransito2.php" onSubmit = "return validar(this)">
              <table width="430" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td align="center" class="Estilo105"><?
			if($problema == "a")
			{
			echo "LA FECHA DE PAUSA NO PUEDE SER MENOR A EL ULTIMO REPORTE<BR>";
			}
			elseif($problema == "b")
			{
			$horaactual 		= date("Y-m-d H:i:s");	
			echo "LA FECHA ACTUAL: ".$horaactual.", NO PUEDE SER MAYOR A LA DE DESPAUSA<BR>";
			}
			elseif($problema == "c")
			{
			echo "LA HORA DE PAUSA TIENE QUE SER MAYOR LA HORA ACTUAL<BR>";
			}
			?></td>
                </tr>
              </table>
              <input name="Idviaje" type="hidden" id="Idviaje" value="<?=$Idviaje?>">
              <span class="Estilo105">
                
              </span><span class="Estilo93">
              <input name="Idpuesto" type="hidden" id="Idpuesto" value="<?=$Idpuesto?>">
              </span><br>
              <table width="430" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="127" class="Estilo93">FECHA DESPAUSA<br>
                    <span class="Estilo93 Estilo96">
                    <input name="Vence2" type='text' class="TextField2" id='fecha_nacimiento2' onClick='$("calendario4").show();' value='<?=$Fecha2?>' size="20"/>
                    </span>
                    
                    <div id="calendario4" class="scal tinyscal" style='display:none;'></div> 
                  </td>
                  <td width="63" class="Estilo93"><span class="Estilo93 Estilo96">
                    <div id="calendario" class="scal tinyscal" style='display:none;'></div>
                    HORA<br>
                    <select name="Inicioh2" class="TextField2" id="Inicioh">
                      <option value="<?=$hor2?>" selected>
                      <?=$hor2?>
                      </option>
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
                      <option value="13" >13</option>
                      <option value="14" >14</option>
                      <option value="15" >15</option>
                      <option value="16" >16</option>
                      <option value="17" >17</option>
                      <option value="18" >18</option>
                      <option value="19" >19</option>
                      <option value="20" >20</option>
                      <option value="21" >21</option>
                      <option value="22" >22</option>
                      <option value="23" >23</option>
                    </select>
                  </span></td>
                  <td width="77" class="Estilo93">MINUTO <br>
                    <select name="Iniciom2" class="TextField2" id="Iniciom">
                      <option value="<?=$min2?>" selected>
                      <?=$min2?>
                      </option>
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
                      <option value="13" >13</option>
                      <option value="14" >14</option>
                      <option value="15" >15</option>
                      <option value="16" >16</option>
                      <option value="17" >17</option>
                      <option value="18" >18</option>
                      <option value="19" >19</option>
                      <option value="20" >20</option>
                      <option value="21" >21</option>
                      <option value="22" >22</option>
                      <option value="23" >23</option>
                      <option value="24" >24</option>
                      <option value="25" >25</option>
                      <option value="26" >26</option>
                      <option value="27" >27</option>
                      <option value="28" >28</option>
                      <option value="29" >29</option>
                      <option value="30" >30</option>
                      <option value="31" >31</option>
                      <option value="32" >32</option>
                      <option value="33" >33</option>
                      <option value="34" >34</option>
                      <option value="35" >35</option>
                      <option value="36" >36</option>
                      <option value="37" >37</option>
                      <option value="38" >38</option>
                      <option value="39" >39</option>
                      <option value="40" >40</option>
                      <option value="41" >41</option>
                      <option value="42" >42</option>
                      <option value="43" >43</option>
                      <option value="44" >44</option>
                      <option value="45" >45</option>
                      <option value="46" >46</option>
                      <option value="47" >47</option>
                      <option value="48" >48</option>
                      <option value="49" >49</option>
                      <option value="50" >50</option>
                      <option value="51" >51</option>
                      <option value="52" >52</option>
                      <option value="53" >53</option>
                      <option value="54" >54</option>
                      <option value="55" >55</option>
                      <option value="56" >56</option>
                      <option value="57" >57</option>
                      <option value="58" >58</option>
                      <option value="59" >59</option>
                  </select></td>
                  <td width="163" class="Estilo93">TIPO DE PAUSA<br>
                    <select name="tpausa" id="tpausa" class="TextField2">
                      <option value="<?=$Motivo?>" selected><?=$Motivo?></option>
                       <option value="Atraso en Cargue" >Atraso en Cargue</option
                      ><option value="Orden Público" >Orden Público</option>
                      <option value="Daño Mecánico" >Daño Mecánico</option>
                      <option value="Estado de la Vía" >Estado de la Vía</option>
                      <option value="Pernoctar" >Pernoctar</option>
                      <option value="Accidente del Vehículo" >Accidente del Vehículo</option>
                  </select></td>
                </tr>
              </table>
              <table width="430" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td><hr size="1"></td>
                </tr>
              </table>
              <table width="430" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="175" valign="top" class="Estilo931">ENVIAR E-MAIL
                    <label><br>
                      <?
if(!empty($_SESSION['Nitmail']))
{
?>
                      <input name="envio" type="checkbox" id="envio" value="1" <?=$activar2?>>
                      <?
}
else
{
?>
                      <input name="envio" type="checkbox" id="envio" value="1" onClick="if(this.checked) this.form.submit();" <?=$activar2?>>
                      <?
}
$nites	=$_SESSION['Nitmail'];
?>
                    </label>
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
                        <td width="82"><span class="listado"><a href="select-mails-update-pausa.php?Id=<?=$Idviaje?>&Idpuesto=<?=$Idpuesto?>">(Modificar)</a></span></td>
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
              <span class="listado1"><span class="Estilo931"> </span></span>
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
                      <textarea name="ctreporte" rows="7" class="TextField2" id="ctreporte" style="width:100%" onChange="javascript:this.value=this.value.toUpperCase();"><?=$Reporte?></textarea>
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
                        <input name="cbia" type="checkbox" id="cbia" value="cbia" onClick="cambio()" <?=$activar?>>
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
                      <textarea name="ctreportecliente" style="width:100%" rows="7" class="TextField2" id="ctreportecliente" onChange="javascript:this.value=this.value.toUpperCase();"><?=$_SESSION['ctreportecliente']?></textarea>
</td>
                </tr>
              </table>
              <table width="430" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td><hr size="1"></td>
                </tr>
              </table>
              <table width="430" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="86" height="45" class="Estilo93"><label>
                    <input name="btsubmit" type="submit" class="TextField3" id="btsubmit" value="PAUSAR">
                    
                  </label></td>
                  <td width="344" class="Estilo93"><input name="salir" type="button" class="TextField3" id="salir" value="SALIR" onClick="window.close();"></td>
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