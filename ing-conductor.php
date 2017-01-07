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




$Sedula	=	$_SESSION["Sedula"];

$dale	=	$_REQUEST["dale"];
$mod	=	$_REQUEST["mod"];

$eluser	=	$_SESSION['Empresa'];




		
		
		
		
		
		
		
		
		
		
		
		









if(empty($mod))
{
$Modc	=	$_SESSION['Modc'];
}
else
{
session_register('Modc');
$_SESSION['Modc']=$mod;
$Modc	=	$mod;
}

$Newc	=	$_SESSION['Newc'];
$Plak	=	$_SESSION['Plak'];

$Placa	=	$Plak;

if($Modc <> "si")
{
$estat	=	'readonly="readonly"';
$estatr	=	'disabled';
}
else
{
$estate	=	'';	
}


$query="SELECT COUNT(*) as Total FROM Conductores  where Cedula = '$Sedula'" ;
$result=mysql_query($query, $id);

While($row=mysql_fetch_array($result))
{
$Total=$row["Total"];
}


$query="SELECT* FROM Conductores where Cedula = '$Sedula'" ;
$result=mysql_query($query, $id);

While($row=mysql_fetch_array($result))
{
$Usuarioing				= $row["Usuarioing"];
$Fechaing				= $row["Fechaing"];

$Fechamod 				= $row["Fechamod"];
$Usuariomod				= $row["Usuariomod"];

$Cedula					= $row["Cedula"];
$Depcedula				= $row["Depcedula"];
$Ebel					= $row["Ebel"];
$Pago					= $row["Pago"];
$Placa					= $row["Placa"];
$Cuenta1				= $row["Cuenta"];
$Tipocta				= $row["Tipocta"];

$Autoriza				= $row["Autoriza"];
$Quien					= $row["Quien"];
$Cedul					= $row["Cedul"];



if(!empty($Autoriza))
{
	if($Autoriza == "1")
	{
	$ebu	=	"checked";	
	$swu	=	"block";
	}
	elseif($Autoriza == "2")
	{
	$ebeu	=	"checked";	
	$swu	=	"none";
	}
}
else
{
$swu	=	"none";	
}



if(!empty($Ebel))
{
	if($Ebel == "1")
	{
	$eb	=	"checked";	
	$sw	=	"block";
	}
	elseif($Ebel == "2")
	{
	$ebe=	"checked";	
	$sw	=	"none";
	}
}
else
{
$sw	=	"none";	
}


if(!empty($Pago))
{
	if($Pago == "TRANSFERENCIA")
	{
	$swA	=	"block";
	}
	elseif($Pago <> "TRANSFERENCIA")
	{
	$swA	=	"none";
	}
}
else
{
$swA	=	"none";	
}

$queryf="SELECT* FROM Departamentos where Id = '$Depcedula'" ;
$resultf=mysql_query($queryf, $id);

While($rowf=mysql_fetch_array($resultf))
{
$Nombredepc				= $rowf["Nombre"];
}


$Ciucedula				= $row["Ciucedula"];

$queryg="SELECT* FROM Municipio where Id = '$Ciucedula'" ;
$resultg=mysql_query($queryg, $id);

While($rowg=mysql_fetch_array($resultg))
{
$Nombreciuc				= $rowg["Nombre"];
}


$Nacionalidad			= $row["Nacionalidad"];
$Nacimiento				= $row["Nacimiento"];
$Nombre					= $row["Nombre"];
$Apellido1				= $row["Apellido1"];
$Apellido2	 			= $row["Apellido2"];
$Dir					= $row["Dir"];
$Departamento			= $row["Departamento"];

$queryh="SELECT* FROM Departamentos where Id = '$Departamento'" ;
$resulth=mysql_query($queryh, $id);

While($rowh=mysql_fetch_array($resulth))
{
$Nombredep			= $rowh["Nombre"];
}

$Ciudad					= $row["Ciudad"];

$queryi="SELECT* FROM Municipio where Id = '$Ciudad'" ;
$resulti=mysql_query($queryi, $id);

While($rowi=mysql_fetch_array($resulti))
{
$Nombreciu				= $rowi["Nombre"];
}

$Tel					= $row["Tel"];
$Tel2					= $row["Tel2"];
$Celular				= $row["Celular"];
$Celular2				= $row["Celular2"];
$Estadocivil			= $row["Estadocivil"];
$Conyuge				= $row["Conyuge"];
$Licencia				= $row["Licencia"];
$Catlicencia			= $row["Catlicencia"];
$Vencelicen				= $row["Vencelicen"];
$Certjudicial			= $row["Certjudicial"];
$Vencejudicial			= $row["Vencejudicial"];
$Libtripulante			= $row["Libtripulante"];
$Apodo					= $row["Apodo"];
$Foto					= $row["Foto"];
$Docs					= $row["Docs"];
$Estado					= $row["Estado"];
$Cuenta					= $row["Cuenta"];
$Banco					= $row["Banco"];
$Tipocta				= $row["Tipocta"];
$Observaciones			= $row["Observaciones"];


$Ref1					= $row["Ref1"];
$Telref1				= $row["Telref1"];
$Confref1				= $row["Confref1"];
$Ciudref1				= $row["Ciudref1"];
$Comref1				= $row["Comref1"];

$Ref2					= $row["Ref2"];
$Telref2				= $row["Telref2"];
$Confref2				= $row["Confref2"];
$Ciudref2				= $row["Ciudref2"];
$Comref2				= $row["Comref2"];

$Ref3					= $row["Ref3"];
$Telref3				= $row["Telref3"];
$Confref3				= $row["Confref3"];
$Ciudref3				= $row["Ciudref3"];
$Comref3				= $row["Comref3"];


}

if($Estado == 1)
{
$Nomestado	=	"Cancelado";	
}
elseif($Estado == 2)
{
$Nomestado	=	"Temporal";	
}
else
{
$Nomestado	=	"Activo";	
}
?>
<script>
<?
if($dale == "a")
{
?>
alert("La Cedula ingresada ya existe"); 
<?
}
elseif($dale == "M")
{
?>	
alert("El Conductor se ingreso con exito"); 
<?
}
elseif($dale == "c" || $dale == "d" || $dale == "e" || $dale == "f")
{
?>	
alert("El Conductor se actualizo con exito"); 
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
.TextField25 {background-color: #006;
color: #FFFFFF;
font-size: 7pt;
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
					$('#Nacimiento').datepicker();
				});
				
				$('.example-container > pre').each(function(i){
					eval($(this).text());
					$('#Vencelicen').datepicker();
				});
				
				$('.example-container > pre').each(function(i){
					eval($(this).text());
					$('#Vencejudicial').datepicker();
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

<SCRIPT language=Javascript>
<!--
function isNumberKey(evt)
{
	var charCode = (evt.which) ? evt.which : event.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))
	return false;
	return true;
	}
	//-->
</SCRIPT>


<script LANGUAGE="JavaScript">

function validar(formulario) 
{
  if (formulario.Placa.value == "") 
  {
    alert("Por favor ingrese una Placa");
    formulario.Placa.focus();
    return (false);
  }
	
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
  
  if (formulario.Ebel[0].checked == false && formulario.Ebel[1].checked == false) 
  {
    alert("Por favor seleccione si es conductor de Ebel");
    return (false);
  }
  
  if (formulario.Ebel[0].checked == true && formulario.Ebel[1].checked == false) 
  {
	  if (formulario.Pago.value == "") 
	  {
		alert("Por favor seleccione la forma de Pago");
		formulario.Pago.focus();
		return (false);
	  }
	  
	  if (formulario.Pago.value == "TRANSFERENCIA" && formulario.Cuente.value == "") 
	  {
		alert("Por favor ingrese el numero de cuenta");
		formulario.Cuente.focus();
		return (false);
	  }
	  
	  if (formulario.Pago.value == "TRANSFERENCIA" && formulario.Cuente.value != "" && formulario.Tipoctas.value == "") 
	  {

		alert("Por favor seleccione el tipo de cuenta");
		formulario.Tipoctas.focus();
		return (false);
		  
	  }
	  
	  
	  
  }
  
  


  if (formulario.Autoriza[0].checked == true && formulario.Autoriza[1].checked == false) 
  {
	  if (formulario.Quien.value == "") 
	  {
		alert("Por favor ingrese un nombre");
		formulario.Quien.focus();
		return (false);
	  }
	  
	  if (formulario.Cedul.value == "") 
	  {
		alert("Por favor ingrese una cedula");
		formulario.Cedul.focus();
		return (false);
	  }
	  


	  
	  
	  
  }
  
  
  

  
document.getElementById("btsubmit").value = "POR FAVOR ESPERE...";
document.getElementById("btsubmit").disabled = true; 

  return (true); 
}
</script>




			<script type="text/javascript" language="javascript" src="lytebox.js"></script>


<script type="text/javascript"> 
function showstuff(element)
{ 
    document.getElementById("TRANSFERENCIA").style.display = element=="TRANSFERENCIA"?"block":"none"; 
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
<form name="form1" method="post" action="actacondu-opc-a.php" onSubmit = "return validar(this)" enctype="multipart/form-data">    
<div class="container">
<table width="95%" border="0">
  <tr>
    <td align="right" valign="bottom"><a href="pasoconductores.php" target="contenido"><img src="Images/ing-icon.jpg" width="80" height="20" border="0"></a>&nbsp;&nbsp;<a href="ing-conductor.php?mod=si"><img src="Images/act-icon.jpg" width="80" height="20" border="0"></a>&nbsp;&nbsp;<a href="zona.php" target="_top"><img src="Images/salir-icon.jpg" width="80" height="20" border="0"></a></td>
  </tr>
</table>
    <ul class="tabs">
        <li><a href="#tab1">Información General</a></li>
        <li><a href="#tab2">Documentos / Pagos</a></li>
        <li><a href="#tab4">Referencias</a></li>

    </ul>
    <div class="tab_container">
      <div id="tab1" class="tab_content">
        
          <table width="98%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="200" valign="top"><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="16%" height="25" align="right" bgcolor="#748FC2" class="Estilo93 Estilo96">&nbsp;<span style="color: #FFF">VEHICULO:&nbsp;&nbsp; </span></td>
                  <td width="14%" bgcolor="#748FC2"><span class="Estilo93 Estilo96">
                    <input name="Placa" type="text" class="TextField2" id="Placa" style="width:85%"  onKeyUp="form1.Placa.value=form1.Placa.value.toUpperCase(); compUsuario(event);" value="<?=$Placa?>" autocomplete="off" <?=$estat?>>
                  </span></td>
                  <td width="12%" align="left" bgcolor="#748FC2">&nbsp;</td>
                  <td width="6%" align="right" valign="middle" bgcolor="#748FC2"><span class="Estilo93 Estilo96"><span style="color: #FFF"> INGRESO:&nbsp;</span></span></td>
                  <td width="16%" bgcolor="#748FC2"><span class="Estilo93 Estilo96">
                    <input name="Fechaing" type="text" class="TextField2" id="Identificacion20" style="width:85%" value="<?=$Fechaing?>" <?=$estat?>>
                  </span></td>
                  <td width="16%" align="right" bgcolor="#748FC2"><span class="Estilo93 Estilo96">&nbsp;<span style="color: #FFF">USUARIO:&nbsp;</span></span></td>
                  <td width="16%" bgcolor="#748FC2"><span class="Estilo93 Estilo96">
                    <input name="Usuarioing" type="text" class="TextField2" id="Identificacion19" style="width:85%" value="<?=$Usuarioing?>" readonly <?=$estat?>>
                  </span></td>
                  <td width="4%" bgcolor="#748FC2">&nbsp;</td>
                </tr>
              </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
<?
if($Cedula <> "")
{
?>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="16%" height="25" align="right" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo932">FECHA MOD:<span class="Estilo93 Estilo96">&nbsp;&nbsp;</span></span></td>
                    <td width="16%" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">
                      <input name="Fechamod" type="text" class="TextField2" id="Fechamod" style="width:85%" value="<?=$Fechamod?>" readonly <?=$estat?>>
                    </span></td>
                    <td width="16%" align="right" bgcolor="#E4F3FC"><span class="Estilo932">USUARIO:<span class="Estilo93 Estilo96">&nbsp;&nbsp;</span></span></td>
                    <td width="16%" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">
                      <input name="Usuariomod" type="text" class="TextField2" id="Usuariomod" style="width:85%" value="<?=$Usuariomod?>" readonly <?=$estat?>>
                    </span></td>
                    <td width="16%" align="right" bgcolor="#B8E0F8"><span class="Estilo932">ESTADO:<span class="Estilo93 Estilo96">&nbsp;&nbsp;</span></span></td>
                    <td width="16%" bgcolor="#B8E0F8"><select name="Estado" class="TextField2" id="Estado" style="width:85%" <?=$estatr?>>
                      <option value="<?=$Estado?>" selected>
                        <?=$Nomestado?>
                        </option>
                      <option value="0">Activo</option>
                      <option value="1">Cancelado</option>
                      <option value="2">Temporal</option>
                    </select></td>
                    <td width="4%" bgcolor="#E4F3FC">&nbsp;</td>
                    </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <?
}
?>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="16%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;DOCUMENTO:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Cedula" type="text" class="TextField2" id="Identificacion15" style="width:85%" onKeyPress="mis_datos()" value="<?=$Sedula?>" readonly <?=$estat?>>
                    </span></td>
                    <td width="16%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;DEPARTAMENTO:&nbsp;&nbsp;</span></td>
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
  <option value="<?=$Depcedula?>" selected>
  <?=$Nombredepc?>
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
                    <td width="16%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;CIUDAD:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><select name="select2" class="TextField2" id="select2" style="width:85%" <?=$estatr?>>
                      <option value="<?=$Ciucedula?>" selected>
                        <?=$Nombreciuc	?>
                        </option>
                    </select></td>
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
                    <td width="16%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;TIPO DOCUMENTO:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Tipodoc" type="text" class="TextField2" id="Identificacion44" style="width:85%" onKeyPress="mis_datos()" value="Cedula" <?=$estat?>>
                    </span></td>
                    <td width="16%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;F. NACIMIENTO:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><div class="example-container"><input name="Nacimiento" type="text" class="TextField2" id="Nacimiento" value="<?=$Nacimiento?>" style="width:60%" <?=$estat?>/><pre></pre></div></td><td width="16%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;NACIONALIDAD:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Nacionalidad" type="text" class="TextField2" id="Nacionalidad" style="width:85%" value="<?=$Nacionalidad?>" onKeyUp="form1.Nacionalidad.value=form1.Nacionalidad.value.toUpperCase();" <?=$estat?>>
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
                    <td width="16%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;NOMBRES:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Nombre" type="text" class="TextField2" id="Nombre" style="width:85%" onKeyUp="form1.Nombre.value=form1.Nombre.value.toUpperCase();" value="<?=$Nombre?>" <?=$estat?>>
                    </span></td>
                    <td width="16%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
&nbsp;&nbsp;APELLIDO 1:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Apellido1" type="text" class="TextField2" id="Apellido1" style="width:85%"  onKeyUp="form1.Apellido1.value=form1.Apellido1.value.toUpperCase();" value="<?=$Apellido1?>" <?=$estat?>>
                    </span></td>
                    <td width="16%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;APELLIDO 2:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Apellido2" type="text" class="TextField2" id="Apellido2" style="width:85%"onKeyUp="form1.Apellido2.value=form1.Apellido2.value.toUpperCase();" value="<?=$Apellido2?>" <?=$estat?>>
                    </span></td>
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
                    <td width="16%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;DIRECCION:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Dir" type="text" class="TextField2" id="Dir" style="width:85%" value="<?=$Dir?>" readonly <?=$estat?>>
                      <a href="lista-planes.php" onClick="window.open('lista-direcciones.php?casilla=Dir','','menubar=no,scrollbars=yes, width=850, height=550,');return false">
                      <?
                    if($Modc == "si")
					{
					?>
                      </a>                      <a href="lista-planes.php" onClick="window.open('lista-direcciones.php?casilla=Dir','','menubar=no,scrollbars=yes, width=850, height=550,');return false"><img src="Images/buscar.gif" width="16" height="16" border="0"></a><a href="#" onClick="window.open('lista-marcas.php','','menubar=no,scrollbars=yes, width=500, height=500,');return false">
                      <?
					}
					?>
                      </a></span></td>
                    <td width="16%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;DEPARTAMENTO:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD">
                    
<script language="JavaScript" type="text/JavaScript">
            $(document).ready(function(){
                $("#select3").change(function(event){
                    var id = $("#select3").find(':selected').val();
                    $("#select4").load('genera-ciuds.php?id='+id);
                });
            });
        </script>
<select name="select3" class="TextField2" id="select3" style="width:85%" <?=$estatr?>>
  <option value="<?=$Departamento?>" selected>
  <?=$Nombredep?>
  </option>
  <?
$query009="SELECT* FROM Departamentos where Id <> 99999 order by Nombre" ;
$result009=mysql_query($query009, $id);

While($row009=mysql_fetch_array($result009))
{
$Nombre9		=$row009["Nombre"];
$Id9			=$row009["Id"];

?>
  <option value="<?=$Id9?>">
  <?=$Nombre9?>
  </option>
  <?
}
?>
</select></td>
                    <td width="16%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;CIUDAD:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><select name="select4" class="TextField2" id="select4" style="width:85%" <?=$estatr?>>
                      <option value="<?=$Ciudad?>" selected>
                        <?=$Nombreciu?>
                        </option>
                    </select></td>
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
                    <td width="16%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;TELEFONO 1:&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Tel" type="text" class="TextField2" id="Identificacion" style="width:85%" value="<?=$Tel?>" <?=$estat?>>
                    </span></td>
                    <td width="16%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;TELEFONO 2:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Tel2" type="text" class="TextField2" id="Identificacion16" style="width:85%" value="<?=$Tel2?>" <?=$estat?>>
                    </span></td>
                    <td width="16%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;CELULAR 1:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Celular" type="text" class="TextField2" id="Identificacion17" style="width:85%" value="<?=$Celular?>" <?=$estat?>>
                    </span></td>
                    <td width="4%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;</span></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="16%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;CELULAR 2:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Celular2" type="text" class="TextField2" id="Identificacion18" style="width:85%" value="<?=$Celular2?>"<?=$estat?>>
                    </span></td>
                    <td width="16%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;ESTADO CIVIL:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><select name="Estadocivil" class="TextField2" id="Estadocivil" style="width:85%" <?=$estatr?>>
                      <option value="<?=$Estadocivil?>" selected>
                        <?=$Estadocivil?>
                        </option>
                      <option value="CASADO">CASADO</option>
                      <option value="DIVORCIADO">DIVORCIADO</option>
                      <option value="SOLTERO">SOLTERO</option>
                      <option value="UNION LIBRE">UNION LIBRE</option>
                      <option value="VIUDO">VIUDO</option>
                    </select></td>
                    <td width="16%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">CONYUGE:&nbsp;&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Conyuge" type="text" class="TextField2" id="Conyuge" style="width:85%" onKeyUp="form1.Conyuge.value=form1.Conyuge.value.toUpperCase();" value="<?=$Conyuge?>" <?=$estat?>>
                    </span></td>
                    <td width="4%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;&nbsp;</span></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table></td>
            </tr>
          </table>
</div>
      <div id="tab2" class="tab_content">
          <table width="98%" border="0">
            <tr>
              <td height="10">&nbsp;</td>
            </tr>
          </table>
          <table width="98%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="251" valign="top"><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="25" bgcolor="#FFFFFF"><span class="Estilo93 Estilo96">&nbsp;&nbsp;DOCUMENTOS</span></td>
                </tr>
              </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#E4F3FC"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="10%" height="25" align="right" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">&nbsp;&nbsp;&nbsp;LICENCIA COND.:</span></td>
                    <td width="20%" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">
                      <input name="Licencia" type="text" class="TextField2" id="Identificacion21" style="width:85%" value="<?=$Licencia?>" <?=$estat?>>
                    </span></td>
                    <td width="10%" align="right" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">CATEGORIA:&nbsp;&nbsp;</span></td>
                    <td width="25%" align="left" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">
                      <input name="Catlicencia" type="text" class="TextField2" id="Identificacion22" style="width:20%" value="<?=$Catlicencia?>" <?=$estat?>>
                    </span></td>
                    <td width="10%" align="right" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">VECIMIENTO:&nbsp;&nbsp;</span> </td>
                    <td width="25%" align="left" bgcolor="#E4F3FC"><div class="example-container">
                      <input name="Vencelicen" type="text" class="TextField2" id="Vencelicen" value="<?=$Vencelicen?>" style="width:60%" <?=$estat?>/><pre></pre></div></td>
                    </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#E4F3FC"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="10%" height="25" align="right" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">&nbsp;CERT JUDICIAL:&nbsp;</span></td>
                    <td width="20%" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">
                      <input name="Certjudicial" type="text" class="TextField2" id="Identificacion23" style="width:85%" value="<?=$Certjudicial?>" <?=$estat?>>
                    </span></td>
                    <td width="10%" align="right" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">&nbsp;VENCIMIENTO: &nbsp;</span></td>
                    <td width="25%" bgcolor="#E4F3FC"><div class="example-container">
                      <input name="Vencejudicial" type="text" class="TextField2" id="Vencejudicial" value="<?=$Vencejudicial?>" style="width:60%" <?=$estat?>/><pre></pre></div></td>
                    <td width="10%" align="right" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">&nbsp;LIB TRIPULANTE:&nbsp;&nbsp;</span></td>
                    <td width="25%" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">
                      <input name="Libtripulante" type="text" class="TextField2" id="Identificacion2" style="width:85%" value="<?=$Libtripulante?>" <?=$estat?>>
                    </span></td>
                    </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#E4F3FC"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="10%" height="25" align="right" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">&nbsp;FOTO :&nbsp;&nbsp;</span></td>
                    <td width="20%" bgcolor="#E4F3FC"><input name="file1" type="file" class="TextField2" id="file1" style="width:85%" <?=$estatr?>></td>
                    <td width="10%" align="right" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">&nbsp;&nbsp;DOCUMENTOS:&nbsp;&nbsp;</span></td>
                    <td width="25%" bgcolor="#E4F3FC"><input name="file2" type="file" class="TextField2" id="file2" style="width:85%" <?=$estatr?>></td>
                    <td width="10%" align="right" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">&nbsp;</span></td>
                    <td width="25%" bgcolor="#E4F3FC">&nbsp;</td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#E4F3FC"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="10%" height="25" align="right" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">&nbsp;FOTO :&nbsp;&nbsp;</span></td>
                    <td width="20%" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">
                      <?
                  if(!empty($Foto))
				  {
				  ?>
                      <a href="conductores/<?=$Foto?>" target="_blank"><img src="conductores/<?=$Foto?>" width="50" height="40" border="0"></a>
                      <?
				  }
                  else
				  {
				   echo "No se ha ingresado Foto";  
				  }
				  ?>
                    </span></td>
                    <td width="10%" align="right" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">&nbsp;&nbsp;DOCUMENTOS:&nbsp;&nbsp;</span></td>
                    <td width="25%" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">
                      <?
                  if(!empty($Docs))
				  {
				  ?>
                      <a href="Documentos/<?=$Docs?>" target="_blank">
                      <?=$Docs?>
                      </a>
                      <?
				  }
                  else
				  {
				   echo "No se ha ingresado Documentos";  
				  }
				  ?>
                    </span></td>
                    <td width="10%" align="right" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">&nbsp;</span></td>
                    <td width="25%" bgcolor="#E4F3FC">&nbsp;</td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#E4F3FC"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="25" bgcolor="#FFFFFF"><span class="Estilo93 Estilo96">&nbsp;&nbsp;AUTORIZACION PARA PAGOS&nbsp;</span><span class="Estilo93 Estilo96">&nbsp;&nbsp;</span></td>
                    </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="10%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;AUTORIZAR:&nbsp;&nbsp;</span></td>
                    <td width="20%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">SI 
                      <input type="radio" name="Autoriza" id="Autoriza" value="1" onClick="Hide('div4', this); Reveal('div3', this)" <?=$ebu?>>
                       NO 
                       <input type="radio" name="Autoriza" id="Autoriza" value="2" onClick="Hide('div3', this); Reveal('div4', this)" <?=$ebeu?> >
                    </span></td>
                    <td width="70%" height="25" align="right" bgcolor="#F2F9FD">
                    
                    
<div class="row" id="div3" style="display:<?=$swu?>">
                    
                    
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="15%" align="right"><span class="Estilo93 Estilo96">NOMBRE:&nbsp;</span></td>
                        <td width="35%">
                          <input name="Quien" type="text" class="TextField2" id="Quien" style="width:85%" onKeyUp="form1.Quien.value=form1.Quien.value.toUpperCase();" value="<?=$Quien?>" <?=$estat?>>
                        </td>
                        <td width="15%" align="right">&nbsp;<span class="Estilo93 Estilo96">CEDULA:&nbsp;</span></td>
                        <td width="35%"><input name="Cedul" type="text" class="TextField2" id="Cedul" style="width:85%"  onKeyPress="return isNumberKey(event);" value="<?=$Cedul?>" <?=$estat?>></td>
                      </tr>
                    </table>                     
</div>

<div class="row" id="div4" style="display:none"></div>
                    </td>
                    </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="25" bgcolor="#FFFFFF"><span class="Estilo93 Estilo96">&nbsp;&nbsp;OBSERVACIONES</span></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#E4F3FC"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="10%" height="47" align="right" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">&nbsp;&nbsp;</span></td>
                    <td width="90%" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">
                      <textarea name="Observaciones" rows="3" class="TextField2" id="Observaciones" style="width:96%" onKeyUp="form1.Observaciones.value=form1.Observaciones.value.toUpperCase();" <?=$estat?>><?=$Observaciones?> </textarea>
                    </span><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93 Estilo96">&nbsp;&nbsp;</span></td>
                    </tr>
                </table>
                <br></td>
            </tr>
          </table>
      </div>
      <div id="tab4" class="tab_content">
          <table width="98%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="368" valign="top"><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="30" bgcolor="#FFFFFF"><span class="Estilo93 Estilo96">&nbsp;&nbsp;REFERENCIAS EMPRESARIALES
                    
                  </span></td>
                </tr>
              </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                    </tr>
                  </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="20%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">EMPRESA:&nbsp;</span></td>
                    <td width="30%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Ref1" type="text" class="TextField2" id="Ref1" style="width:85%" value="<?=$Ref1?>" onKeyUp="form1.Ref1.value=form1.Ref1.value.toUpperCase();" <?=$estat?>>
                      </span></td>
                    <td width="20%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;TELEFONO:&nbsp;&nbsp;</span></td>
                    <td width="30%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Telref1" type="text" class="TextField2" id="Telref1" style="width:85%" value="<?=$Telref1?>" <?=$estat?>>
                      </span></td>
                    </tr>
                  </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                    </tr>
                  </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="20%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">CONFIRMADO POR:&nbsp;&nbsp;</span></td>
                    <td width="30%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <select name="Confref1" class="TextField2" id="Confref1" style="width:85%" <?=$estatr?>>
                        <option value="<?=$Confref1?>" selected>
                          <?=$Confref1?>
                          </option>
                        <?
$query0081xx		=	"SELECT* FROM Usuarios order by Nombrefull" ;
$result0081xx		=	mysql_query($query0081xx, $id);
							
While($row0081xx	=	mysql_fetch_array($result0081xx))
{
$Namer				= 	$row0081xx["Nombrefull"];
?>
                        <option value="<?=$Namer?>">
                          <?=$Namer?>
                          </option>
                        <?
}
?>
                      </select>
                    </span></td>
                    <td width="20%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">CIUDAD:&nbsp;&nbsp;</span></td>
                    <td width="30%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Ciudref1" type="text" class="TextField2" id="Ciudref1" style="width:85%" onKeyUp="form1.Ciudref1.value=form1.Ciudref1.value.toUpperCase();" value="<?=$Ciudref1?>" <?=$estat?>>
                      </span></td>
                    </tr>
                  </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                    </tr>
                  </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="20%" height="25" align="right" valign="top" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">COMENTARIOS:&nbsp;&nbsp;</span></td>
                    <td width="80%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <textarea name="Comref1" rows="3" class="TextField2" id="Comref1" style="width:95%" onKeyUp="form1.Comref1.value=form1.Comref1.value.toUpperCase();" <?=$estat?>><?=$Comref1?></textarea>
                      </span></td>
                    </tr>
                  </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                    </tr>
                  </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="20%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">EMPRESA:&nbsp;</span></td>
                    <td width="30%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Ref2" type="text" class="TextField2" id="Ref2" style="width:85%" value="<?=$Ref2?>" onKeyUp="form1.Ref2.value=form1.Ref2.value.toUpperCase();" <?=$estat?>>
                      </span></td>
                    <td width="20%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;TELEFONO:&nbsp;&nbsp;</span></td>
                    <td width="30%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Telref2" type="text" class="TextField2" id="Telref2" style="width:85%" value="<?=$Telref2?>" <?=$estat?>>
                      </span></td>
                    </tr>
                  </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                    </tr>
                  </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="20%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">CONFIRMADO POR:&nbsp;&nbsp;</span></td>
                    <td width="30%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <select name="Confref2" class="TextField2" id="Confref2" style="width:85%" <?=$estatr?>>
                        <option value="<?=$Confref2?>" selected>
                          <?=$Confref2?>
                          </option>
                        <?
$query0081xx2			=	"SELECT* FROM Usuarios order by Nombrefull" ;
$result0081xx2		=	mysql_query($query0081xx2, $id);
							
While($row0081xx2	=	mysql_fetch_array($result0081xx2))
{
$Namer2		= 	$row0081xx2["Nombrefull"];
?>
                        <option value="<?=$Namer2?>">
                          <?=$Namer2?>
                          </option>
                        <?
}
?>
                      </select>
                    </span></td>
                    <td width="20%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">CIUDAD:&nbsp;&nbsp;</span></td>
                    <td width="30%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Ciudref2" type="text" class="TextField2" id="Ciudref2" style="width:85%" onKeyPress="mis_datos()" value="<?=$Ciudref2?>" onKeyUp="form1.Ciudref2.value=form1.Ciudref2.value.toUpperCase();" <?=$estat?>>
                      </span></td>
                    </tr>
                  </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                    </tr>
                  </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="20%" height="25" align="right" valign="top" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">COMENTARIOS:&nbsp;&nbsp;</span></td>
                    <td width="80%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <textarea name="Comref2" rows="3" class="TextField2" id="Comref2" style="width:95%" onKeyUp="form1.Comref2.value=form1.Comref2.value.toUpperCase();" <?=$estat?>><?=$Comref2?></textarea>
                      </span></td>
                    </tr>
                  </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                    </tr>
                  </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="20%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">EMPRESA:&nbsp;</span></td>
                    <td width="30%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Ref3" type="text" class="TextField2" id="Ref3" style="width:85%" value="<?=$Ref3?>" onKeyUp="form1.Ref3.value=form1.Ref3.value.toUpperCase();" <?=$estat?>>
                      </span></td>
                    <td width="20%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;TELEFONO:&nbsp;&nbsp;</span></td>
                    <td width="30%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Telref3" type="text" class="TextField2" id="Telref3" style="width:85%" value="<?=$Telref3?>" <?=$estat?>>
                      </span></td>
                    </tr>
                  </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                    </tr>
                  </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="20%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">CONFIRMADO POR:&nbsp;&nbsp;</span></td>
                    <td width="30%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <select name="Confref3" class="TextField2" id="Confref3" style="width:85%" <?=$estatr?>>
                        <option value="<?=$Confref3?>" selected>
                          <?=$Confref3?>
                          </option>
                        <?
$query0081xx3			=	"SELECT* FROM Usuarios order by Nombrefull" ;
$result0081xx3		=	mysql_query($query0081xx3, $id);
							
While($row0081xx3	=	mysql_fetch_array($result0081xx3))
{
$Namer3		= 	$row0081xx3["Nombrefull"];
?>
                        <option value="<?=$Namer3?>">
                          <?=$Namer3?>
                          </option>
                        <?
}
?>
                      </select>
                    </span></td>
                    <td width="20%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">CIUDAD:&nbsp;&nbsp;</span></td>
                    <td width="30%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Ciudref3" type="text" class="TextField2" id="Ciudref3" style="width:85%" onKeyUp="form1.Ciudref3.value=form1.Ciudref3.value.toUpperCase();" value="<?=$Ciudref3?>" <?=$estat?>>
                      </span></td>
                    </tr>
                  </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                    </tr>
                  </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="20%" height="25" align="right" valign="top" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">COMENTARIOS:&nbsp;&nbsp;</span></td>
                    <td width="80%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <textarea name="Comref3" rows="3" class="TextField2" id="Comref3" style="width:95%" onKeyUp="form1.Comref3.value=form1.Comref3.value.toUpperCase();" <?=$estat?>><?=$Comref3?></textarea>
                      </span></td>
                    </tr>
                  </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                    </tr>
                  </table></td>
              </tr>
          </table>
        
      </div>
      
    </div>
</div>
<div style="clear: both; display: block; padding: 10px 0; text-align:center;"></div>
<table width="89%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="20" align="right" valign="middle"><?
                    if($Placa <> "")
					{
					?>
                      <a href="automotores.php?Id=<?=$Idplaca?>" target="contenido"><img src="Images/bt-volver-veh.png" width="150" height="17" border="0"></a>
                      <?
					}
					?></td>
                    <td width="5%" align="right" valign="middle"><?
                    if($Modc <> "")
					{
					?>
                      <input name="btsubmit" type="submit" class="TextField21" id="btsubmit" value="GUARDAR INFORMACION">
                    <?
					}
					?></td>
        </tr>
      </table>
</form>    
    </td>
  </tr>
</table>


</body>
</html>