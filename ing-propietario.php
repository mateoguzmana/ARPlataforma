<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

include("conexion.php");


$Zedula	=	$_SESSION["Zedula"];

$dale	=	$_REQUEST["dale"];
$mod	=	$_REQUEST["mod"];

if(empty($mod))
{
$Modp	=	$_SESSION['Modp'];
}
else
{
session_register('Modp');
$_SESSION['Modp']=$mod;
$Modp	=	$mod;
}

$Newp	=	$_SESSION['Newp'];
$Plak	=	$_SESSION['Plak'];

$Placa	=	$Plak;

if($Modp <> "si")
{
$estat	=	'readonly="readonly"';
$estatr	=	'disabled';
}
else
{
$estate	=	'';	
}


$query="SELECT COUNT(*) as Total FROM Propietarios  where Cedula = '$Zedula'" ;
$result=mysql_query($query, $id);

While($row=mysql_fetch_array($result))
{
$Total=$row["Total"];
}


$query0x1="SELECT* FROM Propietarios where Cedula = '$Zedula'" ;
$result0x1=mysql_query($query0x1, $id);

While($row0x1=mysql_fetch_array($result0x1))
{

$Nombre			=$row0x1["Nombre"];
$Apellido1		=$row0x1["Apellido1"];
$Apellido2		=$row0x1["Apellido2"];
$Departamento	=$row0x1["Departamento"];
$Ciudad			=$row0x1["Ciudad"];
$Tel1			=$row0x1["Tel"];
$Tel2			=$row0x1["Tel2"];
$Celular		=$row0x1["Celular"];
$Cedula			=$row0x1["Cedula"];
$Dir			=$row0x1["Dir"];
$Nombrefull		=$row0x1["Nombrefull"];
$Observaciones	=$row0x1["Observaciones"];
$Usuarioing		=$row0x1["Usuarioing"];
$Fechaing		=$row0x1["Fechaing"];
$Fechacambio	=$row0x1["Fechacambio"];
$Usuariocambio	=$row0x1["Usuariocambio"];
$Estado			=$row0x1["Estado"];
}

if($Estado == 1)
{
$Nomestado	=	"Cancelado";	
}
else
{
$Nomestado	=	"Activo";	
}

$query1		=	"SELECT* FROM Departamentos where Id = '$Departamento' " ;
$result1	=	mysql_query($query1, $id);

While($row1	=	mysql_fetch_array($result1))
{
$Nombredep			=$row1["Nombre"];
$Iddep				=$row1["Id"];
}

$query2		=	"SELECT* FROM Municipio where Id = '$Ciudad' " ;
$result2	=	mysql_query($query2, $id);

While($row2	=	mysql_fetch_array($result2))
{
$Nombreciu			=$row2["Nombre"];
$Idciu				=$row2["Id"];
}

?>
<script>
<?
if($dale == "a")
{
?>
alert("La Placa ingresada ya existe"); 
<?
}
elseif($dale == "b")
{
?>	
alert("El Propietario se ingreso con exito"); 
<?
}
elseif($dale == "c" || $dale == "d" || $dale == "e" || $dale == "f")
{
?>	
alert("El Propietario se actualizo con exito"); 
<?
}
?>
</script>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
<!--
body {
	background-color: #E3EFF9;
	margin-top: 0px;
	margin-left: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	font: 10px normal Arial, Helvetica, sans-serif;
	color: #444;
}
#error {
	margin-top:1px;
	font: 9px Verdana, Arial, Helvetica, sans-serif;
	color: #FFFF00;
	padding: 2px 2px 2px 15px;
	width: 90%;
	border: 0px #CC3333 solid;
}

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
	font-weight: bold;
}
.Estilo93 {font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
}
.Estilo96 {font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
}
.TextField2 {background-color: #DADADA;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.TextField21 {background-color: #859AB5;
color: #FFFFFF;
font-size: 10pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.TextField25 {background-color: #990000;
color: #FFFFFF;
font-size: 10pt;
font-family: arial;
border : 1px solid #FFFFFF;
}

.Estilo105 {color: #990000; font-family: Arial, Helvetica, sans-serif; font-size: 10px; font-weight: bold; }
.Estilo97 {font-size: 12px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }

h1 {
	font-size: 3em; margin: 20px 0;
	}
	
.container {width: 95%; margin: 10px auto;}

ul.tabs {
	margin: 0;
	padding: 0;
	float: left;
	list-style: none;
	height: 32px;
	border-bottom: 1px solid #999;
	border-left: 1px solid #999;
	width: 100%;
}
ul.tabs li {
	float: left;
	margin: 0;
	padding: 0;
	height: 31px;
	line-height: 31px;
	border: 1px solid #999;
	border-left: none;
	margin-bottom: -1px;
	background: #e0e0e0;
	overflow: hidden;
	position: relative;
}
ul.tabs li a {
	text-decoration: none;
	color: #000;
	display: block;
	font-size: 0.9em;
	padding: 0 20px;
	border: 1px solid #fff;
	outline: none;
}
ul.tabs li a:hover {
	background: #ccc;
}	
html ul.tabs li.active, html ul.tabs li.active a:hover  {
	background: #fff;
	border-bottom: 1px solid #fff;
}
.tab_container {
	border: 1px solid #999;
	border-top: none;
	clear: both;
	float: left; 
	width: 100%;
	background: #fff;
	-moz-border-radius-bottomright: 5px;
	-khtml-border-radius-bottomright: 5px;
	-webkit-border-bottom-right-radius: 5px;
	-moz-border-radius-bottomleft: 5px;
	-khtml-border-radius-bottomleft: 5px;
	-webkit-border-bottom-left-radius: 5px;
}
.tab_content {
	padding: 20px;
	font-size: 1.2em;
}
.tab_content h2 {
	font-weight: normal;
	padding-bottom: 10px;
	border-bottom: 1px dashed #ddd;
	font-size: 1.8em;
}
.tab_content h3 a{
	color: #254588;
}

.container .tab_container #tab1 table tr td p {
	text-align: justify;
}
.Estilo931 {font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
}
.Estilo961 {	font-size: 10px
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
			
		.Estilo932 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
        .Estilo962 {font-size: 11px}
        </style> 
        
		<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.6.custom.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-timepicker-addon.js"></script>
		<script type="text/javascript">
			
			$(function(){
				
		
				$('.example-container > pre').each(function(i){
					eval($(this).text());
					$('#Vencesoat').datepicker();
				});
				
				$('.example-container > pre').each(function(i){
					eval($(this).text());
					$('#Vencetarjeta').datepicker();
				});

				$('.example-container > pre').each(function(i){
					eval($(this).text());
					$('#Vencemientoinsp').datepicker();
				});

				$('.example-container > pre').each(function(i){
					eval($(this).text());
					$('#Venceresp').datepicker();
				});
				
			});
			
			
		</script>


<script type="text/javascript"> 
 
$(document).ready(function() {
 
	//Default Action
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content
	
	//On Click Event
	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content
		var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active content
		return false;
	});
 
});
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

//-->
</script>


<SCRIPT language=Javascript>
function stopRKey(evt) 
{
   var evt = (evt) ? evt : ((event) ? event : null);
   var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
   if ((evt.keyCode == 13) && (node.type=="text")) {return false;}
}

document.onkeypress = stopRKey; 
</script>


<script LANGUAGE="JavaScript">

function validar(formulario) 
{
  if (formulario.Nombre.value == "") 
  {
    alert("Por favor ingrese un Nombre");
    formulario.Nombre.focus();
    return (false);
  }
  if (formulario.Apellido1.value == "") 
  {
    alert("Por favor ingrese un Apellido");
    formulario.Apellido1.focus();
    return (false);
  }

  
document.getElementById("btsubmit").value = "POR FAVOR ESPERE...";
document.getElementById("btsubmit").disabled = true;  
  return (true); 
}
</script>


 
</script>

			<script type="text/javascript" language="javascript" src="lytebox.js"></script>


</head>

  
<body>
           

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="290" align="center" valign="top">
    <table width="630" border="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>

     
<div class="container">
<table width="95%" border="0">
  <tr>
    <td align="right" valign="bottom"><? if($Newp <> "si"){?><a href="pasopropietarios.php" target="contenido"><img src="Images/ing-icon.jpg" width="80" height="20" border="0"></a><? } ?>&nbsp;&nbsp;<? if($Modp <> "si"){?><a href="ing-propietario.php?mod=si"><img src="Images/act-icon.jpg" width="80" height="20" border="0"></a>&nbsp;&nbsp;<? }?><a href="zona.php" target="_top"><img src="Images/salir-icon.jpg" width="80" height="20" border="0"></a></td>
  </tr>
</table>
    <ul class="tabs">
        <li><a href="#tab1">Información General</a></li>

    </ul>
    <div class="tab_container">
      <div id="tab1" class="tab_content">
        <form name="form1" method="post" action="actaprop-opc-a.php" onSubmit = "return validar(this)">
          <table width="98%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="251" valign="top"><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="16%" height="25" align="right" bgcolor="#748FC2" class="Estilo93 Estilo96">&nbsp;<span style="color: #FFF">CEDULA:&nbsp;&nbsp; </span></td>
                  <td width="14%" bgcolor="#748FC2"><span class="Estilo93 Estilo96">
                    <input name="Cedula" type="text" class="TextField2" id="Cedula" style="width:99%"  onKeyUp="form1.Placa.value=form1.Placa.value.toUpperCase();" value="<?=$Zedula?>" readonly="readonly"  <?=$estat?>>
                  </span></td>
                  <td width="12%" align="left" bgcolor="#748FC2">&nbsp;</td>
                  <td width="6%" align="right" valign="middle" bgcolor="#748FC2"><span class="Estilo93 Estilo96"><span style="color: #FFF"> INGRESO:&nbsp;</span></span></td>
                  <td width="16%" bgcolor="#748FC2"><span class="Estilo93 Estilo96">
                    <input name="Fechaing" type="text" class="TextField2" id="Fechaing" style="width:85%" value="<?=$Fechaing?>" readonly="readonly"  <?=$estat?>>
                  </span></td>
                  <td width="16%" align="right" bgcolor="#748FC2"><span class="Estilo93 Estilo96">&nbsp;<span style="color: #FFF">USUARIO:&nbsp;</span></span></td>
                  <td width="16%" bgcolor="#748FC2"><span class="Estilo93 Estilo96">
                    <input name="Usuarioing" type="text" class="TextField2" id="Usuarioing" style="width:85%" value="<?=$Usuarioing?>" readonly="readonly"  <?=$estat?>>
                  </span></td>
                  <td width="4%" bgcolor="#748FC2">&nbsp;</td>
                </tr>
              </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>

                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="16%" height="25" align="right" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo932">FECHA MOD:<span class="Estilo93 Estilo96">&nbsp;&nbsp;</span></span></td>
                    <td width="26%" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">
                      <input name="Fechacambio" type="text" class="TextField2" id="Fechacambio" style="width:53%" value="<?=$Fechacambio?>" readonly="readonly">
                    </span></td>
                    <td width="6%" align="right" bgcolor="#E4F3FC"><span class="Estilo932">USUARIO:<span class="Estilo93 Estilo96">&nbsp;&nbsp;</span></span></td>
                    <td width="16%" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">
                      <input name="Usuariocambio" type="text" class="TextField2" id="Usuariocambio" style="width:85%" value="<?=$Usuariocambio?>" readonly="readonly">
                    </span></td>
                    <td width="16%" align="right" bgcolor="#B8E0F8"><span class="Estilo932">ESTADO:<span class="Estilo93 Estilo96">&nbsp;&nbsp;</span></span></td>
                    <td width="16%" bgcolor="#B8E0F8"><select name="Estado" class="TextField2" id="Estado" style="width:85%"  <?=$estatr?>>
                      <option value="<?=$Estado?>" selected><?=$Nomestado?></option>
                      <option value="0">Activo</option>
                      <option value="1">Cancelado</option>
                    </select></td>
                    <td width="4%" bgcolor="#E4F3FC">&nbsp;</td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <br>

                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="16%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;NOMBRES:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Nombre" type="text" class="TextField2" id="Nombre" style="width:85%" onKeyUp="form1.Nombre.value=form1.Nombre.value.toUpperCase();" value="<?=$Nombre?>" <?=$estat?>>
                      </span></td>
                    <td width="16%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;APELLIDO 1:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Apellido1" type="text" class="TextField2" id="Apellido1" style="width:85%" onKeyUp="form1.Apellido1.value=form1.Apellido1.value.toUpperCase();" value="<?=$Apellido1?>" <?=$estat?>>
                      </span></td>
                    <td width="16%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;APELLIDO 2:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Apellido2" type="text" class="TextField2" id="Apellido2" style="width:85%" onKeyUp="form1.Apellido2.value=form1.Apellido2.value.toUpperCase();" value="<?=$Apellido2?>" <?=$estat?>>
                    </span></td>
                    <td width="4%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;&nbsp;</span></td>
                    </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="16%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;NOMBRE COMPLETO:&nbsp;&nbsp;</span></td>
                    <td width="48%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Nombrefull" type="text" class="TextField2" id="Nombrefull" style="width:95%"  onKeyUp="form1.Nombrefull.value=form1.Nombrefull.value.toUpperCase();"  value="<?=$Nombrefull?>" readonly="readonly" <?=$estat?>>
                    </span><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93 Estilo96"><a href="#" onClick="window.open('lista-marcas.php','','menubar=no,scrollbars=yes, width=500, height=500,');return false"></a></span></td>
                    <td width="16%" align="right" bgcolor="#F2F9FD">&nbsp;</td>
                    <td width="16%" bgcolor="#F2F9FD">&nbsp;</td>
                    <td width="4%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;&nbsp;</span></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="16%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;DIRECCION:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Dir" type="text" class="TextField2" id="Dir" style="width:85%" value="<?=$Dir?>" readonly="readonly" <?=$estat?>>
                      <a href="lista-planes.php" onClick="window.open('lista-direcciones.php?casilla=Dir','','menubar=no,scrollbars=yes, width=850, height=550,');return false">
                      <?
                    if($Modp == "si")
					{
					?>
                      <img src="Images/buscar.gif" width="16" height="16" border="0"></a><a href="#" onClick="window.open('lista-marcas.php','','menubar=no,scrollbars=yes, width=500, height=500,');return false">
                      <?
					}
					?>
                      </a></span></td>
                    <td width="16%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
&nbsp;DEPARTAMENTO:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD">
<script language="JavaScript" type="text/JavaScript">
            $(document).ready(function(){
                $("#select1").change(function(event){
                    var id = $("#select1").find(':selected').val();
                    $("#select2").load('genera-ciuds.php?id='+id);
                });
            });
        </script>
                    <select name="select1" class="TextField2" id="select1" style="width:85%" <?=$estatr?>>
                      <option value="<?=$Iddep?>" selected>
                        <?=$Nombredep?>
                        </option>
                      <?
$query008="SELECT* FROM Departamentos where Id <> 99999 order by Nombre" ;
$result008=mysql_query($query008, $id);

While($row008=mysql_fetch_array($result008))
{
$Nombre8		=$row008["Nombre"];
$Id8			=$row008["Id"];

?>
                      <option value="<?=$Id8?>">
                        <?=$Nombre8?>
                        </option>
                      <?
}
?>
                    </select></td>
                    <td width="16%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">CIUDAD:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><select name="select2" class="TextField2" id="select2" style="width:85%" <?=$estatr?>>
                      <option value="<?=$Idciu?>" selected>
                        <?=$Nombreciu?>
                        </option>
                    </select></td>
                    <td width="4%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96"><a href="lista-planes.php" onClick="window.open('lista-tipos.php','','menubar=no,scrollbars=yes, width=500, height=500');return false"></a></span></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="16%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;TELEFONO 1:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Tel" type="text" class="TextField2" id="Identificacion50" style="width:85%" value="<?=$Tel1?>" <?=$estat?>>
                    </span></td>
                    <td width="16%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;TELEFONO 2:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Tel2" type="text" class="TextField2" id="Identificacion51" style="width:85%" value="<?=$Tel2?>" <?=$estat?>>
                    </span></td>
                    <td width="16%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;CELULAR:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Celular" type="text" class="TextField2" id="Celular" style="width:85%" value="<?=$Celular?>" <?=$estat?>>
                    </span></td>
                    <td width="4%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;&nbsp;</span></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="16%" height="25" align="right" valign="top" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;OBSERVACIONES:&nbsp;</span></td>
                    <td width="80%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <textarea name="Observaciones" rows="5" class="TextField2" id="Observaciones" style="width:97%" onKeyUp="form1.Observaciones.value=form1.Observaciones.value.toUpperCase();" <?=$estat?>><?=$Observaciones?></textarea>
                    </span><span class="Estilo93 Estilo96">&nbsp;&nbsp;</span></td>
                    <td width="4%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;</span></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <br>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="33" align="right" valign="middle">
                    <?
                    if($Placa <> "")
					{
					?>
                    <a href="automotores.php" target="contenido"><img src="Images/bt-volver-veh.png" width="150" height="17" border="0"></a>
                    <?
					}
					?></td>
                    <td width="5%" align="right" valign="middle"><?
                    if($Modp <> "")
					{
					?>
                      <input name="button" type="submit" class="TextField21" id="btsubmit" value="GUARDAR INFORMACION">
                      <?
					}
					?></td>
                  </tr>
                </table></td>
            </tr>
          </table>
        </form>
      </div>
      
    </div>
</div>
<div style="clear: both; display: block; padding: 10px 0; text-align:center;"></div>

    
    </td>
  </tr>
</table>


</body>
</html>