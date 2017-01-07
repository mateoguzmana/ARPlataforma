<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

include("conexion.php");
date_default_timezone_set('America/Bogota');
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$Usuario		= 		$_SESSION['Empresa'];


function SumarMinutosFechaStr($FechaStr, $MinASumar)
{
  $FechaStr = str_replace("-", " ", $FechaStr);
  $FechaStr = str_replace(":", " ", $FechaStr);
	
  $FechaOrigen = explode(" ", $FechaStr);
	
  $Dia = $FechaOrigen[0];
  $Mes = $FechaOrigen[1];
  $Anyo = $FechaOrigen[2];
	
  $Horas = $FechaOrigen[3];
  $Minutos = $FechaOrigen[4];
  $Segundos = $FechaOrigen[5];
	
  // Sumo los minutos
  $Minutos = ((int)$Minutos) + ((int)$MinASumar); 
	
  // Asigno la fecha modificada a una nueva variable
  $FechaNueva = date("d-m-Y H:i:s",mktime($Horas,$Minutos,$Segundos,$Mes,$Dia,$Anyo));
	
  return $FechaNueva;
}

$problema	=	$_REQUEST["problema"];

if (!empty($problema))
{
	
$Id 			=	$_SESSION['Idp'];
$Plan			=	$_SESSION['Planp'];
$Idplan			=	$_SESSION['Idplanp'];
$Inicioh		=	$_SESSION['Iniciohp'];
$Iniciom		=	$_SESSION['Iniciomp'];
$Observaciones	=	$_SESSION['Observacionesp'];
$Contenedor		=	$_SESSION['Contenedorp'];
$Exportacion	=	$_SESSION['Exportacionp'];
$Pedido			=	$_SESSION['Pedidop'];
$Fecha			=	$_SESSION['Fechainip'];

	$query008="SELECT* FROM Viajes where Id = '$Id'" ;
	$result008=mysql_query($query008, $id);
	
	While($row008=mysql_fetch_array($result008))
	{
	$Manifiesto		=$row008["Manifiesto"];
	$Remesas		=$row008["Remesas"];
	$Planviaje		=$row008["Planviaje"];
	}
	
	
$SQL15="Delete From Recorrido Where Idviaje='$Id'";
mysql_query($SQL15);	
	

$horaactual = date("H:i:s");
$hor = $Inicioh;
$min = $Iniciom;

}
else
{
	
$Id		=	$_REQUEST["Id"];


$Sin	=	$_REQUEST["Sin"];

$SQL15="Delete From Recorrido Where Idviaje='$Id'";
mysql_query($SQL15);


	$query008="SELECT* FROM Viajes where Id = '$Id'" ;
	$result008=mysql_query($query008, $id);
	
	While($row008=mysql_fetch_array($result008))
	{
	$Idn			=$row008["Id"];
	$Manifiesto		=$row008["Manifiesto"];
	$Remesas		=$row008["Remesas"];
	$Planviaje		=$row008["Planviaje"];
	$Fecha			=$row008["Fechaini"];
	$Deudas			=$row008["Deudas"];
	}

$horaactual = SumarMinutosFechaStr(date("d-m-Y H:i:s"), 8);

$hor = substr($horaactual, -8, 2);
$min = substr($horaactual, -5, 2);
$Mensaje		=	"";
}



	$query0081="SELECT* FROM Manifiestos where Nromanifiesto = '$Manifiesto'" ;
	$result0081=mysql_query($query0081, $id);

	While($row0081=mysql_fetch_array($result0081))
	{
	$Placa			=$row0081["Placa"];
	$Conductor		=$row0081["Conductor"];
	$Nota			=$row0081["Observaciones"];
	$Empresa		=$row0081["Empresa"];
	$NombreorgXX	=$row0081["Nombreorg"];
	$DestinoXX		=$row0081["Nomdest"];
	}

$query008vvv="SELECT* FROM Vehiculos where Placa = '$Placa'" ;
$result008vvv=mysql_query($query008vvv, $id);

While($row008vvv=mysql_fetch_array($result008vvv))
{
$Satelitalvvv				= $row008vvv["Satelital"];
$Passvvv 					= $row008vvv["Pass"];
$Usuariovvv					= $row008vvv["Usuario"];
$Tipocarrovvv				= $row008vvv["Tipocarro"];
}

	$query0081cc="SELECT* FROM Empresas where Nit = '$Empresa'" ;
	$result0081cc=mysql_query($query0081cc, $id);

	While($row0081cc=mysql_fetch_array($result0081cc))
	{
	$Nombreempre			=$row0081cc["Nombre"];
	}
	
	$query008e="SELECT* FROM Viajes where  Iniciado = 3" ;
	$result008e=mysql_query($query008e, $id);
	
	While($row008e=mysql_fetch_array($result008e))
	{
	$Manifiestoe		=$row008e["Manifiesto"];
	
	
	$query00812="SELECT* FROM Manifiestos where Nromanifiesto = '$Manifiestoe'" ;
	$result00812=mysql_query($query00812, $id);

	While($row00812=mysql_fetch_array($result00812))
	{
	$Placa2			=$row00812["Placa"];
	$Conductor2		=$row00812["Conductor"];
	}
	
	

			if($Placa == $Placa2)
			{

				$mensa	=	"EL VEHICULO CON PLACA: <strong><u>".$Placa."</u></strong> SE ENCUENTRA EN TRANSITO ACTUALMENTE CON EL MANIFIESTO: ".$Manifiestoe;
			}
	}
	
	$query00800m	=	"SELECT* FROM Conductores where Cedula = '$Conductor' order by Id asc" ;
	$result00800m	=	mysql_query($query00800m, $id);
	
	While($row00800m	=	mysql_fetch_array($result00800m))
	{
	$Idcond		  	= $row00800m["Id"];

	$Nombrefull  	= $row00800m["Nombrefull"];
	}




						


$fechadia	=	date("Y-m-d");



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
}
body {
	background-color: #F8F8F8;
	font-family: Arial, Helvetica, sans-serif;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo93 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.listado1 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #666;
}
.textos1 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #009;
	text-align: right;
}
.TextField4 {background-color: #000033;
color: #fff;
font-size: 10pt;
font-family: arial;
border : 1px solid #000;
text-align:center;
}
body{font: 90% Arial, Helvetica, sans-serif;}
			#ui-datepicker-div{ font-size: 80%; }
			.ui-timepicker-div .ui-widget-header{ margin-bottom: 8px; }
			.ui-timepicker-div dl{ text-align: left; }
			.ui-timepicker-div dl dt{ height: 25px; }
			.ui-timepicker-div dl dd{ margin: -25px 0 10px 65px; }
			.ui-timepicker-div td { font-size: 90%; }
pre {
	padding: 0;
	margin: 0;
}
pre code {
	margin: 0 0 0 0px;  /*--Left Margin--*/
	padding: 0px 0;
	display: block;
}
-->
</style>

<script LANGUAGE="JavaScript">

function validar(formulario) 
{
  if (formulario.Vence.value == "") 
  {
    alert("Por favor ingrese una Fecha");
    formulario.Vence.focus();
    return (false);
  }
  
  if (formulario.Vence.value < "<?=$fechadia?>") 
  {
    alert("La Fecha de inicio se encuentra atrasada");
    formulario.Vence.focus();
    return (false);
  }
  
  if (formulario.Plan.value == "") 
  {
    alert("Por favor seleccione un Plan de viaje");
    formulario.Plan.focus();
    return (false);
  }
  
  if (formulario.Captador.value == "") 
  {
    alert("Seleccione el usuario que consiguio el vehiculo");
    formulario.Captador.focus();
    return (false);
  }
  
  if (formulario.Creamanif.value == "") 
  {
    alert("Seleccione el usuario que creo el manifiesto");
    formulario.Creamanif.focus();
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

							document.getElementById("btsubmit").value = "POR FAVOR ESPERE...";
							document.getElementById("btsubmit").disabled = true;

  return (true); 
  

}




</script>


<script language="JavaScript">
function Abrir_ventana (pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, width=500, height=500, top=85, left=300";
window.open(pagina,"",opciones);
}
</script>


<script language="JavaScript">
<!--
function confirmSubmit() 
{ 
var agree=confirm("Realmente desea eliminar este registro? "); 
if (agree) 
return true ; 
else 
return false ; 
}
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
   
        
		  <script type="text/javascript" src="prototype.js"></script>
          <script type="text/javascript" src="scal.js"></script>
  			<link href="scal.css" media="screen" rel="stylesheet" type="text/css" />



<link rel="stylesheet" media="all" type="text/css" href="css/ui-lightness/jquery-ui-1.8.6.custom.css" />
<script type="text/javascript"src="js/jquery.min.js"></script>

		<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.6.custom.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-timepicker-addon.js"></script>
        


		<script type="text/javascript">
			
			
			$(function(){
				
		
				$('.example-container > pre').each(function(i){
					eval($(this).text());
					$('#Vence').datepicker();
				});

				
			});
			
			
		</script>

<style type="text/css">
<!--

.TextField2 {background-color: #DADADA;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.alert {
	font-size: 11px;
	font-weight: bold;
	color: #F00;
}
.Estilo105 {	color: #990000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
}
.Estilo931 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
}
.TextField3 {background-color: #D7D7D7;
color: #000;
font-size: 8pt;
font-family: arial;
border : 1px solid #000;
}
.TextField6 {background-color: #D7D7D7;
color: #000;
font-size: 10pt;
font-family: arial;
border : 1px solid #000;
}
-->
</style>
</head>

<body>
<div class="example-container">
  <pre></pre>
</div>
<table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="right"><span class="Estilo93"><a href="<?=$_SESSION['anterior-asigna'];?>">Volver</a> &nbsp;| &nbsp;</span><a href="asignacionruta.php?Id=<?=$Id?>" class="Estilo93">Refrescar</a>
    <hr></td>
  </tr>
</table>
<table width="100%" height="90%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="73%" align="left" valign="top"><form name="form1" method="post" action="asignacionruta2.php" style="margin:0" onSubmit = "return validar(this);">
<?
if(!empty($mensa))
{
?> <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="20" class="alert">
            <?=$mensa?>
            </td>
          </tr>
      </table>
<?
}
?>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="19%" height="20" class="Estilo93">FECHA DE INICIO</td>
          <td width="81%" height="20" class="alert"><input name="Manifiesto" type="hidden" id="Manifiesto" value="<?=$Manifiesto?>"></td>
          </tr>
        <tr>
          <td height="15"><span class="Estilo93 Estilo96">   <input name="Vence" type='text' class="TextField2" id='Vence' value='<?=$Fecha?>' size="20"/>                      <div id="calendario5" class="scal tinyscal" style='display:none;'></div> 
            </span></td>
          <td><span class="alert">
            <?
			if($problema == "a")
			{
			echo "FECHA/HORA DE INICIO ATRAZADA";
			}
			?>
            </span>            <input name="Id" type="hidden" id="Id" value="<?=$Id?>"></td>
          </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="5" class="Estilo93"><span class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
        </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="33%" height="20" class="Estilo93">EMPRESA</td>
          <td width="33%" height="20" class="Estilo93">ORIGEN</td>
          <td width="34%" height="20" class="Estilo93">DESTINO</td>
        </tr>
        <tr>
          <td height="15"><span class="Estilo93 Estilo96">
            <input name="Contenedor2" type="text" class="TextField2" id="Contenedor2" value="<?=$Nombreempre?>" readonly style="width:90%">
          </span></td>
          <td><span class="Estilo93 Estilo96">
            <input name="Exportacion2" type="text" class="TextField2" id="Exportacion2" value="<?=$NombreorgXX?>" size="20" maxlength="20" readonly  style="width:90%">
          </span></td>
          <td><span class="Estilo93 Estilo96">
            <input name="Pedido2" type="text" class="TextField2" id="Pedido2" value="<?=$DestinoXX?>" size="20" readonly style="width:90%">
          </span></td>
        </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="5" class="Estilo93"><span class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
          </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="20" class="Estilo93">PLAN DE VIAJE</td>
          </tr>
        <tr>
          <td height="15"><span class="Estilo93 Estilo96">
            
            <label>
              
              <input name="Plan" type="text" class="TextField2" id="Plan" style="width:97%" value="<?=$Plan?>" size="126" readonly>
              </label>
            <a href="lista-planes.php" onClick="window.open('lista-planes.php','','menubar=no,scrollbars=yes, width=900, height=600');return false"> <img src="Images/buscar.gif" width="16" height="16" border="0"></a>
            <label>
              <input name="Idplan" type="hidden" id="Idplan" value="<?=$Idplan?>">
              </label>
          </span></td>
          </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="5" class="Estilo93"><span class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
        </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="20" class="Estilo93">VEHICULO CONSEGUIDO POR:</td>
          <td width="50%" height="20" class="Estilo93">PLANILLADO POR:</td>
          </tr>
        <tr>
          <td width="50%" height="15"><span class="Estilo93 Estilo96">
              <input name="Captador" type="text" class="TextField2" id="Captador" style="width:93%" value="" size="126" readonly >
            <a href="#" onClick="window.open('lista-usuarioc.php','','menubar=no,scrollbars=yes, width=500, height=450');return false"> <img src="Images/buscar.gif" width="16" height="16" border="0"></a>
              <input name="Cedcap" type="hidden" id="Cedcap" value="<?=$Idplan?>">

            </span></td>
          <td width="50%">
          
              <input name="Creamanif" type="text" class="TextField2" id="Creamanif" style="width:94%" value="" size="126" readonly >
            <a href="#" onClick="window.open('lista-usuariom.php','','menubar=no,scrollbars=yes, width=500, height=450');return false"> <img src="Images/buscar.gif" width="16" height="16" border="0"></a></td>
          </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="5" class="Estilo93"><span class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
        </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="33%" height="20" class="Estilo93">ENVIAR MENSAJE</td>
          <td width="20%" height="20" class="Estilo93">HORA DE INICIO</td>
          <td width="21%" height="20" class="Estilo93">VEHICULO YA CARGADO</td>
          <td width="26%" rowspan="2" class="Estilo93">&nbsp;</td>
        </tr>
        <tr>
          <td height="15"><p>
            <label>
              <input name="Iniciar" type="checkbox" class="TextField2" id="Grupodecasillasdeverificacioacuten1_0" value="1" checked>
            </label>
            <br>
          </p></td>
          <td>
          	
            
            
            <select name="Inicioh" class="TextField2" id="select5">
            <option value="<?=$hor?>" selected><?=$hor?></option>
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
            <select name="Iniciom" class="TextField2" id="select6">
              <option value="<?=$min?>" selected><?=$min?></option>
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
          <td><label>
            <input name="cargado" type="checkbox" class="TextField2" id="cargado" value="1">
          </label></td>
          </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="5" class="Estilo93"><span class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
        </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="34%" height="20" class="Estilo93">OBSERVACIONES DEL SISTEMA</td>
          <td width="37%" height="20" class="Estilo93">&nbsp;</td>
          <td width="29%" height="20" class="Estilo93">&nbsp;</td>
        </tr>
        <tr>
          <td height="15" colspan="3"><p>
            <label>
              <textarea name="Nota" cols="130" rows="4" readonly class="TextField2" id="Nota" style="width:97%" onChange="javascript:this.value=this.value.toUpperCase();"><?=$Nota?></textarea>
              </label>
          </p></td>
          </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="34%" height="20" class="Estilo93">OBSERVACIONES ADICIONALES</td>
          <td width="37%" height="20" class="Estilo93">&nbsp;</td>
          <td width="29%" height="20" class="Estilo93">&nbsp;</td>
        </tr>
        <tr>
          <td height="15" colspan="3"><p>
            <label>
              <textarea name="Observaciones" cols="130" rows="6" class="TextField2" id="Observaciones" style="width:97%" onChange="javascript:this.value=this.value.toUpperCase();"><?=$Observaciones?></textarea>
              </label>
            
          </p></td>
          </tr>
      </table>
      <?
            if(empty($mensa))
			{
			?>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="33%" height="28"><p>
            <label>
              <input name="button" type="submit" class="TextField6" id="btsubmit" value="ASIGNAR RUTA AHORA">
              </label>
            <br>
            </p></td>
          <td width="36%">&nbsp;</td>
          <td width="31%">&nbsp;</td>
          </tr>
      </table>
      <?
}
?>

    </form></td>
    <td width="27%" align="center" valign="top" bgcolor="#E9E7E7"><iframe src="datosviajefull.php?Id=<?=$Id?>" width="99%" height="100%" frameborder="No" allowtransparency="true"></iframe></td>
  </tr>
</table>
  
</body>
</html>