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


$dale	=	$_REQUEST["dale"];
$tab	=	$_REQUEST["tab"];
$Id		=	$_REQUEST["Id"];


$query="SELECT COUNT(*) as Total FROM Empresas where Id = '$Id'" ;
$result=mysql_query($query, $id);

While($row=mysql_fetch_array($result))
{
$Total=$row["Total"];
}


$query0081		=	"SELECT* FROM Empresas where Id = '$Id'" ;
$result0081		=	mysql_query($query0081, $id);
							
While($row0081	=	mysql_fetch_array($result0081))
{
$Nombre			       = 	$row0081["Nombre"];
$Nit			         = 	$row0081["Nit"];
$Dir			         = 	$row0081["Dir"];
$Tel			         = 	$row0081["Tel"];
$Tel2			         = 	$row0081["Tel2"];
$Departamento	     = 	$row0081["Departamento"];
$Ciudad			       = 	$row0081["Ciudad"];
$Email			       = 	$row0081["Email"];
$Web			         = 	$row0081["Web"];
$Comercial		     = 	$row0081["Comercial"];
$Cedcomer		       = 	$row0081["Cedcomer"];
$Fechamod		       = 	$row0081["Fechamod"];
$Modificador	     = 	$row0081["Modificador"];
$Fechaing		       = 	$row0081["Fechaing"];
$Creador		       = 	$row0081["Creador"];

$Tipoempr		       = 	$row0081["Tipoempr"];
$Destino		       = 	$row0081["Destino"];
$Riesgo			       = 	$row0081["Riesgo"];
$Escolta		       = 	$row0081["Escolta"];
$Anticipo		       = 	$row0081["Anticipo"];
$Intermedia		     = 	$row0081["Intermedia"];
$Aseguradora	     = 	$row0081["Aseguradora"];
$Dircob			= 	$row0081["Dircob"];
$Telcob			= 	$row0081["Telcob"];
$Diapago		= 	$row0081["Diapago"];
$Plazo			= 	$row0081["Plazo"];
$Credito		= 	$row0081["Credito"];
$Diascredito	= 	$row0081["Diascredito"];
$Usuaprob		= 	$row0081["Usuaprob"];
$Fechaapro		= 	$row0081["Fechaapro"];
$Horaapro		= 	$row0081["Horaapro"];
$Diascierre		= 	$row0081["Diascierre"];


$Nombrerep		= 	$row0081["Nombrerep"];
$Telrep			= 	$row0081["Telrep"];
$Extrep			= 	$row0081["Extrep"];
$Nombreger		= 	$row0081["Nombreger"];
$Telger			= 	$row0081["Telger"];
$Extger			= 	$row0081["Extger"];
$Nombrecont		= 	$row0081["Nombrecont"];
$Telcont		= 	$row0081["Telcont"];
$Extcont		= 	$row0081["Extcont"];
$Refbanco1		= 	$row0081["Refbanco1"];
$Dirbanco1		= 	$row0081["Dirbanco1"];
$Ciudbanco1		= 	$row0081["Ciudbanco1"];
$Contbanco1		= 	$row0081["Contbanco1"];
$Telbanco1		= 	$row0081["Telbanco1"];
$Refbanco2		= 	$row0081["Refbanco2"];
$Dirbanco2		= 	$row0081["Dirbanco2"];
$Ciudbanco2		= 	$row0081["Ciudbanco2"];
$Contbanco2		= 	$row0081["Contbanco2"];
$Telbanco2		= 	$row0081["Telbanco2"];


$Refcomer1		= 	$row0081["Refcomer1"];
$Refdir1		= 	$row0081["Refdir1"];
$Refciudad1		= 	$row0081["Refciudad1"];
$Refcontacto1	= 	$row0081["Refcontacto1"];
$Reftelcontac1	= 	$row0081["Reftelcontac1"];
$Refcomer2		= 	$row0081["Refcomer2"];
$Refdir2		= 	$row0081["Refdir2"];
$Refciudad2		= 	$row0081["Refciudad2"];
$Refcontacto2	= 	$row0081["Refcontacto2"];
$Reftelcontac2	= 	$row0081["Reftelcontac2"];
$Refsocial1		= 	$row0081["Refsocial1"];
$Refdirsocial1	= 	$row0081["Refdirsocial1"];
$Refciusocial1	= 	$row0081["Refciusocial1"];
$Refcontsocial1	= 	$row0081["Refcontsocial1"];
$Reftelsocial1	= 	$row0081["Reftelsocial1"];
$Refsocial2		= 	$row0081["Refsocial2"];
$Refdirsocial2	= 	$row0081["Refdirsocial2"];
$Refciusocial2	= 	$row0081["Refciusocial2"];
$Refcontsocial2	= 	$row0081["Refcontsocial2"];
$Reftelsocial2	= 	$row0081["Reftelsocial2"];
$Arp			= 	$row0081["Arp"];
$Despachos		= 	$row0081["Despachos"];
$Ceddespa		= 	$row0081["Ceddespa"];
$Calidad		= 	$row0081["Calidad"];
$Cedcalidad		= 	$row0081["Cedcalidad"];
$Clave			= 	$row0081["Clave"];
$Remesa			= 	$row0081["Remesa"];
$Tipoempresa	= 	$row0081["Tipoempresa"];

}

$query1		=	"SELECT* FROM Departamentos where Nombre = '$Departamento' " ;
$result1	=	mysql_query($query1, $id);

While($row1	=	mysql_fetch_array($result1))
{
$Nombredep			=$row1["Nombre"];
$Iddep				=$row1["Id"];
}

$query2		=	"SELECT* FROM Municipio where Nombre = '$Ciudad' " ;
$result2	=	mysql_query($query2, $id);

While($row2	=	mysql_fetch_array($result2))
{
$Nombreciu			=$row2["Nombre"];
$Idciu				=$row2["Id"];
}

if($Id <> '')
{
$url	=	"actempresagenera-opc-a.php";
$esta	=	'readonly="readonly"';
}
else
{
$url	=	"ingempresagenera-opc-a.php";

$Fechaing		= 	date("Y-m-d");
$Creador		= 	$_SESSION['Empresa'];
}

?>
<script>
<?
if($dale == "a")
{
?>
alert("La Empresa ingresada ya existe"); 
<?
}
elseif($dale == "b")
{
?>	
alert("La Empresa se ingreso con exito"); 
<?
}
elseif($dale == "c" || $dale == "d" || $dale == "e" || $dale == "f")
{
?>	
alert("La Empresa se actualizo con exito"); 
<?
}
?>
</script>

<script language = "javascript"> 
function createRequestObject(){
      var peticion;
      var browser = navigator.appName;
            if(browser == "Microsoft Internet Explorer"){
                  peticion = new ActiveXObject("Microsoft.XMLHTTP");
            }else{
                  peticion = new XMLHttpRequest();
}
return peticion;
}
 
 
var http = new Array();
function ObtDatos(url){
      var act = new Date();
      http[act] = createRequestObject();
      http[act].open('get', url);
      http[act].onreadystatechange = function() {
      if (http[act].readyState == 4) {
            if (http[act].status == 200 || http[act].status == 304) {
  		var texto
		texto = http[act].responseText
                    var DivDestino = document.getElementById("DivDestino");
                    DivDestino.innerHTML = "<div id='error'>"+texto+"</div>";
                   
}
}
}
http[act].send(null);
}
 
function compUsuario(Tecla) {
     Tecla = (Tecla) ? Tecla: window.event;
     input = (Tecla.target) ? Tecla.target : 
     Tecla.srcElement;
     if (Tecla.type == "keyup") {
          var DivDestino = document.getElementById("DivDestino");
          DivDestino.innerHTML = "<div></div>";
          if (input.value) {
               ObtDatos("ajax_comprobar_empre.php?q=" + input.value);
          } 
     }
}
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
	font: 10px Verdana, Arial, Helvetica, sans-serif;
	color: #990033;
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
	font-size: 10px;
}
.Estilo96 {font-size: 11px}
.TextField2 {background-color: #DADADA;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.TextField21 {background-color: #BCBCBC;
color: #333333;
font-size: 8pt;
font-family: arial;
border : 1px solid #FFFFFF;
}

.Estilo105 {color: #990000; font-family: Arial, Helvetica, sans-serif; font-size: 10px; font-weight: bold; }
.Estilo97 {font-size: 12px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }

h1 {
	font-size: 3em; margin: 20px 0;
	}
	
.container {width: 90%; margin: 10px auto;}

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
.listado1 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
	color: #000;
}
.listado1 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #666;
}
.listado11 {font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
	color: #000;
}
-->
</style>


<script type="text/javascript"
src="js/jquery.min.js"></script>
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













<script LANGUAGE="JavaScript">
function Validar(form)
{
 if (form.Nombre.value == "")
  { alert("Por favor ingrese La Razón Social"); form.Nombre.focus(); return; }
  
 if (form.Nit.value == "")
  { alert("Por favor ingrese un Nit"); form.Nit.focus(); return; }
/*  
  if (form.ARP.value == "")
  { alert("Por favor seleccione si exige ARP"); form.ARP.focus(); return; }
*/ 
 if (form.Dir.value == "")
  { alert("Por favor ingrese una Dirección"); form.Dir.focus(); return; }
  
 if (form.Tel.value == "")
  { alert("Por favor ingrese un Teléfono"); form.Tel.focus(); return; }
  
 if (form.select1.value == "")
  { alert("Por favor ingrese un Departamento"); form.select1.focus(); return; }
  
 if (form.select2.value == "")
  { alert("Por favor seleccione una ciudad"); form.select2.focus(); return; }
  
 if (form.Email.value == "")
  { alert("Por favor ingrese un E-mail"); form.Email.focus(); return; }
 /* 
  if (form.Comercial.value == "")
  { alert("Por favor ingrese el Comercial para esta empresa"); form.Comercial.focus(); return; }
  
   if (form.Tipoempresa.value == "")
  { alert("Por favor seleccione el Tipo de empresa"); form.Tipoempresa.focus(); return; }  */
  
  form.submit();
}
</script>

<script type="text/javascript" src="jquery-1.4.2.min.js"></script>

<script language="javascript">
function mis_datos(){
var key=window.event.keyCode;
if (key < 48 || key > 57){
window.event.keyCode=0;
}}
</script>


<link rel="stylesheet" href="lytebox.css" type="text/css" media="screen"/>
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
    <ul class="tabs">
        <li><a href="#tab1">Información General</a></li>
<?
if($Total == 0)
{
?>

<?
}
else
{
?>
        <li><a href="#tab2">Información Financiera</a></li>
        <li><a href="#tab3">Contacto / Ref. Bancaria</a></li>
        <li><a href="#tab4">Referencias Comerciales</a></li>
        

<?
}
?> 
    </ul>
    
    
    <div class="tab_container">
    
    
    
    
    
      <div id="tab1" class="tab_content">
        <form action="<?=$url?>" method="post" enctype="multipart/form-data" name="form1">
          <table width="98%" border="0">
            <tr>
              <td height="10">&nbsp;</td>
            </tr>
          </table>
          <table width="98%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="251" valign="top"><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="15%" height="25" bgcolor="#F2F2F2"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">FECHA INGRESO:</span></td>
                  <td width="35%" bgcolor="#F2F2F2"><span class="Estilo93 Estilo96">
                    <input name="Fechaing" type="text" class="TextField2" id="Fechaing" style="width:50%" value="<?=$Fechaing?>" readonly>
                    <input name="Id" type="hidden" id="Id" value="<?=$Id?>">
                    <input name="tab" type="hidden" id="tab" value="tab1" />
                  </span></td>
                  <td width="10%" bgcolor="#F2F2F2"><span class="Estilo93">USUARIO: </span></td>
                  <td width="40%" bgcolor="#F2F2F2"><span class="Estilo93 Estilo96">
                    <input name="Creador" type="text" class="TextField2" id="Creador" style="width:95%" value="<?=$Creador?>" readonly>
                  </span></td>
                </tr>
              </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
<?
if($Id <> "")
{
?>                
                
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="15%" height="25" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">FECHA MOD:</span></td>
                    <td width="35%" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">
                      <input name="Fechamod" type="text" class="TextField2" id="Fechamod" style="width:50%" value="<?=date("Y-m-d");?>" readonly>
                    </span></td>
                    <td width="10%" bgcolor="#E4F3FC"><span class="Estilo93">USUARIO: </span></td>
                    <td width="40%" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">
                      <input name="Modificador" type="text" class="TextField2" id="Modificador" style="width:95%" value="<?=$_SESSION['Empresa']?>" readonly>
                    </span></td>
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
                  <td width="15%" height="25" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">RAZON SOCIAL:                  </span></td>
                  <td width="35%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
<input name="Nombre" type="text" class="TextField2" id="Nombre" style="width:95%" onKeyUp="form1.Nombre.value=form1.Nombre.value.toUpperCase();" value="<?=$Nombre?>">

                  </span></td>
                  <td width="10%" bgcolor="#F2F9FD"><span class="Estilo93">NIT:                  </span></td>
                  <td width="40%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                    <input name="Nit" type="text" class="TextField2" id="Nit" style="width:95%" onKeypress="mis_datos();" value="<?=$Nit?>" onkeyup = "compUsuario(event)" <?=$esta?>>


                    
                  <div id = "DivDestino"></div></span></td>
                  <!--<td width="10%" bgcolor="#99FF00" class="Estilo93">&nbsp;&nbsp;EXIGE ARP</td>
                  <td width="15%" bgcolor="#99FF00"><label>
                    <select name="ARP" class="TextField2" id="ARP">
                      <option value="<?=$Arp?>" selected><?=$Arp?></option>
                      <option value="NO">NO</option>
                      <option value="SI">SI</option>
                    </select>
                  </label></td>-->
                  </tr>
              </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="15%" height="25" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">DIRECCION:                    </span></td>
                    <td width="35%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Dir" type="text" class="TextField2" id="Dir" style="width:90%" value="<?=$Dir?>" onKeyUp="form1.Dir.value=form1.Dir.value.toUpperCase();">
                      <a href="lista-planes.php" onClick="window.open('lista-direcciones.php?casilla=Dir','','menubar=no,scrollbars=yes, width=850, height=550,');return false"><img src="Images/buscar.gif" width="16" height="16" border="0"></a></span></td>
                    <td width="10%" bgcolor="#F2F9FD"><span class="Estilo93">TELEFONO 1: </span></td>
                    <td width="15%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Tel" type="text" class="TextField2" id="Tel" style="width:95%" value="<?=$Tel?>">
                    </span></td>
                    <td width="10%" bgcolor="#F2F9FD"><span class="Estilo93">TELEFONO 2: </span></td>
                    <td width="15%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Tel2" type="text" class="TextField2" id="Tel2" style="width:87%" value="<?=$Tel2?>">
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
                    <td width="15%" height="25" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">DEPARTAMENTO:                    </span></td>
                    <td width="35%" bgcolor="#F2F9FD">
<script language="JavaScript" type="text/JavaScript">
            $(document).ready(function(){
                $("#select1").change(function(event){
                    var id = $("#select1").find(':selected').val();
                    $("#select2").load('genera-ciuds.php?id='+id);
                });
            });
        </script>
                    
                    <select name="select1" class="TextField2" id="select1" style="width:95%">
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
                    <td width="10%" bgcolor="#F2F9FD"><span class="Estilo93">CIUDAD: </span></td>
                    <td width="40%" bgcolor="#F2F9FD"><select name="select2" class="TextField2" id="select2" style="width:95%">
                      <option value="<?=$Idciu?>" selected>
                        <?=$Nombreciu?>
                        </option>
                    </select></td>
                    <!--<td width="10%" bgcolor="#FFFFFF"><span class="Estilo93">&nbsp;&nbsp;SOL. REMESA</span></td>
                    <td width="15%" bgcolor="#FFFFFF"><select name="Remesa" class="TextField2" id="Remesa">
                      <option value="<?=$Arp?>" selected>
                        <?=$Remesa?>
                        </option>
                      <option value="NO">NO</option>
                      <option value="SI">SI</option>
                    </select></td>-->
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="15%" height="25" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">E-MAIL:                    </span></td>
                    <td width="35%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Email" type="text" class="TextField2" id="Email" style="width:95%" onKeyUp="form1.Email.value=form1.Email.value.toLowerCase();" value="<?=$Email?>">
                    </span></td>
                    <td width="10%" bgcolor="#F2F9FD"><span class="Estilo93">SITIO WEB: </span></td>
                    <td width="15%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Web" type="text" class="TextField2" id="Web" style="width:95%" onKeyUp="form1.Web.value=form1.Web.value.toLowerCase();" value="<?=$Web?>">
                    </span></td>
                    <td width="10%" bgcolor="#FF0000" class="Estilo93">&nbsp;&nbsp;<span style="color: #FFF">CLAVE</span></td>
                    <td width="15%" bgcolor="#FF0000"><span class="Estilo93 Estilo96">
                      <input name="Clave" type="text" class="TextField2" id="Clave" style="width:95%" value="<?=$Clave?>">
                    </span></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <!--
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="15%" height="25" bgcolor="#EFF3FA"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">ASESOR: </span></td>
                    <td width="35%" bgcolor="#EFF3FA"><span class="Estilo93 Estilo96">
                      <input name="Comercial" type="text" class="TextField2" id="Comercial" style="width:90%" value="<?=$Comercial?>" readonly>
                      <a href="lista-planes.php" onClick="window.open('lista-usuarios.php','','menubar=no,scrollbars=yes, width=500, height=550,');return false"><img src="Images/buscar.gif" width="16" height="16" border="0"></a></span></td>
                    <td width="10%" bgcolor="#EFF3FA"><span class="Estilo93">CEDULA: </span></td>
                    <td width="40%" bgcolor="#EFF3FA"><span class="Estilo93 Estilo96">
                      <input name="Cedcomer" type="text" class="TextField2" id="Cedcomer" style="width:95%" value="<?=$Cedcomer?>" readonly>
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
                    <td width="15%" height="25" bgcolor="#EFF3FA"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">DESPACHOS: </span></td>
                    <td width="35%" bgcolor="#EFF3FA"><span class="Estilo93 Estilo96">
                      <input name="Despachos" type="text" class="TextField2" id="Despachos" style="width:90%" value="<?=$Despachos?>" readonly>
                      <a href="lista-planes.php" onClick="window.open('lista-despachos.php','','menubar=no,scrollbars=yes, width=500, height=550,');return false"><img src="Images/buscar.gif" width="16" height="16" border="0"></a></span></td>
                    <td width="10%" bgcolor="#EFF3FA"><span class="Estilo93">CEDULA: </span></td>
                    <td width="40%" bgcolor="#EFF3FA"><span class="Estilo93 Estilo96">
                      <input name="Ceddespa" type="text" class="TextField2" id="Ceddespa" style="width:95%" value="<?=$Ceddespa?>" readonly>
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
                    <td width="15%" height="25" bgcolor="#EFF3FA"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">CALIDAD: </span></td>
                    <td width="35%" bgcolor="#EFF3FA"><span class="Estilo93 Estilo96">
                      <input name="Calidad" type="text" class="TextField2" id="Calidad" style="width:90%" value="<?=$Calidad?>" readonly>
                      <a href="lista-planes.php" onClick="window.open('lista-calidad.php','','menubar=no,scrollbars=yes, width=500, height=550,');return false"><img src="Images/buscar.gif" width="16" height="16" border="0"></a></span></td>
                    <td width="10%" bgcolor="#EFF3FA"><span class="Estilo93">CEDULA: </span></td>
                    <td width="40%" bgcolor="#EFF3FA"><span class="Estilo93 Estilo96">
                      <input name="Cedcalidad" type="text" class="TextField2" id="Cedcalidad" style="width:95%" value="<?=$Cedcalidad?>" readonly>
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
                    <td width="15%" height="25" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">TIPO EMPRESA</span><span class="Estilo93">: </span></td>
                    <td width="35%" bgcolor="#F2F9FD"><script language="JavaScript" type="text/JavaScript">
            $(document).ready(function(){
                $("#select1").change(function(event){
                    var id = $("#select1").find(':selected').val();
                    $("#select2").load('genera-ciuds.php?id='+id);
                });
            });
                </script>
                      <select name="Tipoempresa" class="TextField2" id="Tipoempresa" style="width:95%">
                        <option value="<?=$Tipoempresa?>" selected><?=$Tipoempresa?></option>
                        <option value="ALIMENTOS">ALIMENTOS</option>
                        <option value="OTROS">OTROS</option>

                      </select></td>
                    <td width="10%" bgcolor="#F2F9FD"><span class="Estilo93">LOGOTIPO: </span></td>
                    <td width="40%" bgcolor="#F2F9FD"><label for="file"></label>
                      <input type="file" name="file" id="file"></td>
                    </tr>
                </table>
              
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>-->
<br>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5"><input name="button" type="button" class="TextField2" id="button" value="REALIZAR OPERACION" onClick=Validar(this.form)></td>
                  </tr>
                </table></td>
            </tr>
          </table>
        </form>
        <br>
      </div>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      <div id="tab2" class="tab_content">
        <form name="form2" method="post" action="actempresagenera-opc-b.php">
          <table width="98%" border="0">
            <tr>
              <td height="10">&nbsp;</td>
            </tr>
          </table>
          <table width="98%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="251" valign="top"><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="15%" height="25" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">TIPO EMPRESA: </span></td>
                    <td width="35%" bgcolor="#F2F9FD"><select name="Tipoempr" class="TextField2" id="Tipoempr" style="width:95%">
                      <option value="<?=$Tipoempr?>" selected><?=$Tipoempr?></option>
						<option value="OCASIONAL">OCASIONAL</option>
						<option value="PYME">PYME</option>
                        <option value="SOLIDA">SOLIDA</option>

                    </select></td>
                    <td width="15%" bgcolor="#F2F9FD"><span class="Estilo93">TIPO DESTINO: </span></td>
                    <td width="35%" bgcolor="#F2F9FD"><select name="Destino" class="TextField2" id="Destino" style="width:95%">
                      <option value="<?=$Destino?>" selected><?=$Destino?></option>
                      <option value="INTERNACIONAL">INTERNACIONAL</option>
                      <option value="MIXTO">MIXTO</option>
                      <option value="NACIONAL">NACIONAL</option>
                      <option value="REGIONAL">REGIONAL</option>
                      <option value="URBANO">URBANO</option>
                    </select></td>
                    </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="15%" height="25" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">TIPO RIESGO: </span></td>
                    <td width="35%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <select name="Riesgo" class="TextField2" id="Riesgo" style="width:95%">
                        <option value="<?=$Riesgo?>" selected><?=$Riesgo?></option>
                        <option value="ALTO">ALTO</option>
                        <option value="BAJO">BAJO</option>
                        <option value="MEDIO">MEDIO</option>
                      </select>
                    </span></td>
                    <td width="15%" bgcolor="#F2F9FD"><span class="Estilo93">TIPO ESCOLTA: </span></td>
                    <td width="35%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <select name="Escolta" class="TextField2" id="Escolta" style="width:95%">
                        <option value="<?=$Escolta?>" selected><?=$Escolta?></option>
                        <option value="NINGUNO">NINGUNO</option>
                        <option value="MOTO">MOTO</option>
                        <option value="VEHICULAR">VEHICULAR</option>
                        </select>
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
                    <td width="15%" height="25" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">ASEGURADORA: </span></td>
                    <td width="35%" bgcolor="#F2F9FD">
          <select name="Aseguradora" class="TextField2" id="Aseguradora" style="width:95%">
            <option value="<?=$Aseguradora?>" selected><?=$Aseguradora?></option>
            <option value="COLSEGUROS">COLSEGUROS</option>
            <option value="MAPFRE">MAPFRE</option>
            <option value="SUBROGACION">SUBROGACION</option>
            <option value="SURAMERICANA">SURAMERICANA</option>
            <option value="SIN SEGURO">SIN SEGURO</option>
          </select></td>
                    <td width="15%" bgcolor="#F2F9FD"><span class="Estilo93">% ANTICIPO: </span></td>
                    <td width="35%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Anticipo" type="text" class="TextField2" id="Anticipo" style="width:95%" onKeyUp="form2.Anticipo.value=form2.Anticipo.value.toLowerCase();" value="<?=$Anticipo?>" />
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
                    <td width="15%" height="25" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">% INTERMEDIACION: </span></td>
                    <td width="35%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Intermedia" type="text" class="TextField2" id="Intermedia" style="width:95%" onKeyUp="form2.Intermedia.value=form2.Intermedia.value.toLowerCase();" value="<?=$Intermedia?>">
                    </span></td>
                    <td width="15%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">DIAS DE CIERRE: </span></td>
                    <td width="35%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Diascierre" type="text" class="TextField2" id="Diascierre" style="width:95%" onKeypress="mis_datos();" value="<?=$Diascierre?>">
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
                    <td width="15%" height="25" bgcolor="#F2F9FD"><span class="Estilo93"><span class="Estilo93 Estilo96">&nbsp;</span>DIAS DE PAGO: </span></td>
                    <td width="35%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <select name="Diapago" class="TextField2" id="Diapago" style="width:95%">
                        <option value="<?=$Diapago?>" selected="selected">
                          <?=$Diapago?>
                          </option>
                        <option value="LUNES AM">LUNES AM</option>
                        <option value="LUNES PM">LUNES PM</option>
                        <option value="MARTES AM">MARTES AM</option>
                        <option value="MARTES PM">MARTES PM</option>
                        <option value="MIERCOLES AM">MIERCOLES AM</option>
                        <option value="MIERCOLES PM">MIERCOLES PM</option>
                        <option value="JUEVES AM">JUEVES AM</option>
                        <option value="JUEVES PM">JUEVES PM</option>
                        <option value="VIERNES AM">VIERNES AM</option>
                        <option value="VIERNES PM">VIERNES PM</option>
                        <option value="SABADO AM">SABADO AM</option>
                        <option value="SABADO PM">SABADO PM</option>
                      </select>
                    </span></td>
                    <td width="15%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">PLAZO DIAS: </span></td>
                    <td width="35%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Plazo" type="text" class="TextField2" id="Plazo" style="width:95%" onKeypress="mis_datos();" value="<?=$Plazo?>"/>
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
                    <td width="15%" height="25" bgcolor="#F2F9FD"><span class="Estilo93"><span class="Estilo93 Estilo96">&nbsp;</span>DIR. COBRO:</span></td>
                    <td width="35%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Dircob" type="text" class="TextField2" id="Dircob" style="width:95%" onKeyUp="form2.Dircob.value=form2.Dircob.value.toUpperCase();" value="<?=$Dircob?>"/>
                      </span></td>
                    <td width="15%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">TEL  COBRO: </span></td>
                    <td width="35%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Telcob" type="text" class="TextField2" id="Telcob" style="width:95%" value="<?=$Telcob?>"/>
                    </span></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1" /></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="15%" height="25" bgcolor="#DBE2F7"><span class="Estilo93"><span class="Estilo93 Estilo96">&nbsp;</span>CUPO DE CREDITO:</span></td>
                    <td width="35%" bgcolor="#DBE2F7"><span class="Estilo93 Estilo96">
                      <input name="Credito" type="text" class="TextField2" id="Credito" style="width:95%" onKeypress="mis_datos();" value="<?=$Credito?>" />
                    </span></td>
                    <td width="15%" bgcolor="#DBE2F7" class="Estilo93">TOPE DIAS VENC. </td>
                    <td width="35%" bgcolor="#DBE2F7"><span class="Estilo93 Estilo96">
                      <input name="Diascredito" type="text" class="TextField2" id="Diascredito" style="width:95%" onKeypress="mis_datos();" value="<?=$Diascredito?>"/>
                    </span></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1" /></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="15%" height="25" bgcolor="#DBE2F7"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">FECHA APROBACION:</span></td>
                    <td width="35%" bgcolor="#DBE2F7"><span class="Estilo93 Estilo96">
                      <input name="Fechaaprob" type="text" class="TextField2" id="Fechaaprob" style="width:50%" value="<?=date("Y-m-d H:i:s");?>" readonly />
                      <input name="Id" type="hidden" id="Id" value="<?=$Id?>" />
                      <input name="tab" type="hidden" id="tab" value="tab2" />
                    </span></td>
                    <td width="15%" bgcolor="#DBE2F7"><span class="Estilo93">USUARIO APRUEBA: </span></td>
                    <td width="35%" bgcolor="#DBE2F7"><span class="Estilo93 Estilo96">
                      <input name="Usuaprob" type="text" class="TextField2" id="Usuaprob" style="width:95%" value="<?=$_SESSION['Empresa']?>" readonly />
                    </span></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1" /></td>
                  </tr>
                </table>
<br>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5"><input name="button2" type="submit" class="TextField2" id="button2" value="REALIZAR OPERACION"></td>
                  </tr>
                </table></td>
            </tr>
          </table>
        </form>
       
      </div>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
        <div id="tab3" class="tab_content">
          <form action="actempresagenera-opc-c.php" method="post" name="form3" id="form3">
            <table width="98%" border="0">
              <tr>
                <td height="10"><span class="Estilo93 Estilo96">
                  <input name="Id" type="hidden" id="Id" value="<?=$Id?>" />
                  <input name="tab" type="hidden" id="tab5" value="tab3" />
                </span></td>
              </tr>
            </table>
            <table width="98%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="251" valign="top"><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="15%" height="25" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">REPRESENTANTE: </span></td>
                    <td width="35%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Nombrerep" type="text" class="TextField2" id="Nombrerep" style="width:95%" onKeyUp="form3.Nombrerep.value=form3.Nombrerep.value.toUpperCase();" value="<?=$Nombrerep?>"/>
                    </span></td>
                    <td width="15%" bgcolor="#F2F9FD"><span class="Estilo93">TELEFONO: </span></td>
                    <td width="35%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Telrep" type="text" class="TextField2" id="Telrep" style="width:60%" value="<?=$Telrep?>"/>
EXT.                      
<input name="Extrep" type="text" class="TextField2" id="Extrep" style="width:25%" value="<?=$Extrep?>"/>
                    </span></td>
                  </tr>
                </table>
                  <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1" /></td>
                    </tr>
                  </table>
                  <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="15%" height="25" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">GERENTE: </span></td>
                      <td width="35%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                        <input name="Nombreger" type="text" class="TextField2" id="Nombreger" style="width:95%" onKeyUp="form3.Nombreger.value=form3.Nombreger.value.toUpperCase();" value="<?=$Nombreger?>"/>
                      </span></td>
                      <td width="15%" bgcolor="#F2F9FD"><span class="Estilo93">TELEFONO: </span></td>
                      <td width="35%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                        <input name="Telger" type="text" class="TextField2" id="Telger" style="width:60%" value="<?=$Telger?>"/>
EXT.
<input name="Extger" type="text" class="TextField2" id="Extger" style="width:25%" value="<?=$Extger?>"/>
                      </span></td>
                    </tr>
                  </table>
                  <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1" /></td>
                    </tr>
                  </table>
                  <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="15%" height="25" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">CONTACTO: </span></td>
                      <td width="35%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                        <input name="Nombrecont" type="text" class="TextField2" id="Nombrecont" style="width:95%" onKeyUp="form3.Nombrecont.value=form3.Nombrecont.value.toUpperCase();" value="<?=$Nombrecont?>"/>
                      </span></td>
                      <td width="15%" bgcolor="#F2F9FD"><span class="Estilo93">TELEFONO: </span></td>
                      <td width="35%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                        <input name="Telcont" type="text" class="TextField2" id="Telcont" style="width:60%" value="<?=$Telcont?>"/>
                        EXT.
                        <input name="Extcont" type="text" class="TextField2" id="Extcont" style="width:25%" value="<?=$Extcont?>"/>
                      </span></td>
                    </tr>
                  </table>
                  <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1" /></td>
                    </tr>
                  </table>
                  <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="15%" height="25" bgcolor="#E1F2FB"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">REF. BANCARIA: </span></td>
                      <td width="35%" bgcolor="#E1F2FB"><span class="Estilo93 Estilo96">
                        <input name="Refbanco1" type="text" class="TextField2" id="Refbanco1" style="width:95%" onKeyUp="form3.Refbanco1.value=form3.Refbanco1.value.toUpperCase();" value="<?=$Refbanco1?>" />
                      </span></td>
                      <td width="15%" bgcolor="#E1F2FB"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">DIR BANCO: </span></td>
                      <td width="35%" bgcolor="#E1F2FB"><span class="Estilo93 Estilo96">
                        <input name="Dirbanco1" type="text" class="TextField2" id="Dirbanco1" style="width:95%"  value="<?=$Dirbanco1?>" onKeyUp="form3.Dirbanco1.value=form3.Dirbanco1.value.toUpperCase();"/>
                      </span></td>
                    </tr>
                  </table>
                  <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="5" bgcolor="#E1F2FB"><img src="Images/linea.jpg" width="100%" height="1" /></td>
                    </tr>
                  </table>
                  <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="15%" height="25" bgcolor="#E1F2FB"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">CIUDAD: </span></td>
                      <td width="35%" bgcolor="#E1F2FB">
                        <select name="Ciudbanco1" class="TextField2" id="Ciudbanco1" style="width:95%">
                          <option value="<?=$Ciudbanco1?>" selected="selected">
                            <?=$Ciudbanco1?>
                            </option>
                          <?
$query008="SELECT* FROM Municipio order by Nombre" ;
$result008=mysql_query($query008, $id);

While($row008=mysql_fetch_array($result008))
{
$Nombre8		=$row008["Nombre"];
$Id8			=$row008["Id"];

?>
                          <option value="<?=$Nombre8?>">
                            <?=$Nombre8?>
                            </option>
                          <?
}
?>
                        </select></td>
                      <td width="15%" bgcolor="#E1F2FB">&nbsp;</td>
                      <td width="35%" bgcolor="#E1F2FB">&nbsp;</td>
                    </tr>
                  </table>
                  <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="5" bgcolor="#E1F2FB"><img src="Images/linea.jpg" width="100%" height="1" /></td>
                    </tr>
                  </table>
                  <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="15%" height="25" bgcolor="#E1F2FB"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">CONTACTO: </span></td>
                      <td width="35%" bgcolor="#E1F2FB"><span class="Estilo93 Estilo96">
                        <input name="Contbanco1" type="text" class="TextField2" id="Contbanco1" style="width:95%" onKeyUp="form3.Contbanco1.value=form3.Contbanco1.value.toUpperCase();" value="<?=$Contbanco1?>"/>
                      </span></td>
                      <td width="15%" bgcolor="#E1F2FB"><span class="Estilo93">TELEFONO: </span></td>
                      <td width="35%" bgcolor="#E1F2FB"><span class="Estilo93 Estilo96">
                        <input name="Telbanco1" type="text" class="TextField2" id="Telbanco1" style="width:95%" value="<?=$Telbanco1?>"/>
                      </span></td>
                    </tr>
                  </table>
                  <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="5" bgcolor="#E1F2FB"><img src="Images/linea.jpg" width="100%" height="1" /></td>
                    </tr>
                  </table>
                  <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="15%" height="25" bgcolor="#D1E0E9"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">REF. BANCARIA: </span></td>
                      <td width="35%" bgcolor="#D1E0E9"><span class="Estilo93 Estilo96">
                        <input name="Refbanco2" type="text" class="TextField2" id="Refbanco2" style="width:95%" onKeyUp="form3.Refbanco2.value=form3.Refbanco2.value.toUpperCase();" value="<?=$Refbanco2?>" />
                        </span></td>
                      <td width="15%" bgcolor="#D1E0E9"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">DIR BANCO: </span></td>
                      <td width="35%" bgcolor="#D1E0E9"><span class="Estilo93 Estilo96">
                        <input name="Dirbanco2" type="text" class="TextField2" id="Dirbanco2" style="width:95%"  value="<?=$Dirbanco2?>" onKeyUp="form3.Dirbanco2.value=form3.Dirbanco2.value.toUpperCase();"/>
                        </span></td>
                      </tr>
                  </table>
                  <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="5" bgcolor="#D1E0E9"><img src="Images/linea.jpg" width="100%" height="1" /></td>
                    </tr>
                  </table>
                  <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="15%" height="25" bgcolor="#D1E0E9"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">CIUDAD: </span></td>
                      <td width="35%" bgcolor="#D1E0E9"><select name="Ciudbanco2" class="TextField2" id="Ciudbanco2" style="width:95%">
                        <option value="<?=$Ciudbanco2?>" selected="selected">
                          <?=$Ciudbanco2?>
                          </option>
                        <?
$query008="SELECT* FROM Municipio order by Nombre" ;
$result008=mysql_query($query008, $id);

While($row008=mysql_fetch_array($result008))
{
$Nombre8		=$row008["Nombre"];
$Id8			=$row008["Id"];

?>
                        <option value="<?=$Nombre8?>">
                          <?=$Nombre8?>
                          </option>
                        <?
}
?>
                      </select></td>
                      <td width="15%" bgcolor="#D1E0E9">&nbsp;</td>
                      <td width="35%" bgcolor="#D1E0E9">&nbsp;</td>
                    </tr>
                  </table>
                  <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="5" bgcolor="#D1E0E9"><img src="Images/linea.jpg" width="100%" height="1" /></td>
                    </tr>
                  </table>
                  <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="15%" height="25" bgcolor="#D1E0E9"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">CONTACTO: </span></td>
                      <td width="35%" bgcolor="#D1E0E9"><span class="Estilo93 Estilo96">
                        <input name="Contbanco2" type="text" class="TextField2" id="Contbanco2" style="width:95%" onKeyUp="form3.Contbanco2.value=form3.Contbanco2.value.toUpperCase();" value="<?=$Contbanco2?>"/>
                      </span></td>
                      <td width="15%" bgcolor="#D1E0E9"><span class="Estilo93">TELEFONO: </span></td>
                      <td width="35%" bgcolor="#D1E0E9"><span class="Estilo93 Estilo96">
                        <input name="Telbanco2" type="text" class="TextField2" id="Telbanco2" style="width:95%" value="<?=$Telbanco2?>"/>
                      </span></td>
                    </tr>
                  </table>
                  <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="5" bgcolor="#D1E0E9"><img src="Images/linea.jpg" width="100%" height="1" /></td>
                    </tr>
                  </table>
                  <br />
                  <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="5"><input name="button3" type="submit" class="TextField2" id="button3" value="REALIZAR OPERACION" /></td>
                    </tr>
                  </table></td>
              </tr>
            </table>
          </form>
        </div>
        
        
        
        

        
        
        
        













        
        
        
        
        
        
      <div id="tab4" class="tab_content">
        <form action="actempresagenera-opc-d.php" method="post" name="form4" id="form4">
          <table width="98%" border="0">
            <tr>
              <td height="10"><span class="Estilo93 Estilo96">
                <input name="Id" type="hidden" id="Id" value="<?=$Id?>" />
                <input name="tab" type="hidden" id="tab6" value="tab4" />
              </span></td>
            </tr>
          </table>
          <table width="98%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="251" valign="top"><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="25" bgcolor="#FFFFFF"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">REFERENCIAS COMERCIALES. </span><span class="Estilo93"> </span></td>
                  </tr>
              </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#FFFFFF"><img src="Images/linea.jpg" width="100%" height="1" /></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="15%" height="25" bgcolor="#E1F2FB"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">REF. COMERCIAL: </span></td>
                  <td width="35%" bgcolor="#E1F2FB"><span class="Estilo93 Estilo96">
                    <input name="Refcomer1" type="text" class="TextField2" id="Refcomer1" style="width:95%" onKeyUp="form4.Refcomer1.value=form4.Refcomer1.value.toUpperCase();" value="<?=$Refcomer1?>" />
                    </span></td>
                  <td width="15%" bgcolor="#E1F2FB"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">DIRECCION: </span></td>
                  <td width="35%" bgcolor="#E1F2FB"><span class="Estilo93 Estilo96">
                    <input name="Refdir1" type="text" class="TextField2" id="Refdir1" style="width:95%"  value="<?=$Refdir1?>" onKeyUp="form4.Refdir1.value=form4.Refdir1.value.toUpperCase();"/>
                    </span></td>
                  </tr>
              </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#E1F2FB"><img src="Images/linea.jpg" width="100%" height="1" /></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="15%" height="25" bgcolor="#E1F2FB"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">CIUDAD: </span></td>
                    <td width="35%" bgcolor="#E1F2FB"><select name="Refciudad1" class="TextField2" id="Refciudad1" style="width:95%">
                      <option value="<?=$Refciudad1?>" selected="selected">
                        <?=$Refciudad1?>
                        </option>
                      <?
$query008="SELECT* FROM Municipio order by Nombre" ;
$result008=mysql_query($query008, $id);

While($row008=mysql_fetch_array($result008))
{
$Nombre8		=$row008["Nombre"];
$Id8			=$row008["Id"];

?>
                      <option value="<?=$Nombre8?>">
                        <?=$Nombre8?>
                        </option>
                      <?
}
?>
                    </select></td>
                    <td width="15%" bgcolor="#E1F2FB">&nbsp;</td>
                    <td width="35%" bgcolor="#E1F2FB">&nbsp;</td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#E1F2FB"><img src="Images/linea.jpg" width="100%" height="1" /></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="15%" height="25" bgcolor="#E1F2FB"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">CONTACTO: </span></td>
                    <td width="35%" bgcolor="#E1F2FB"><span class="Estilo93 Estilo96">
                      <input name="Refcontacto1" type="text" class="TextField2" id="Refcontacto1" style="width:95%" onKeyUp="form4.Refcontacto1.value=form4.Refcontacto1.value.toUpperCase();" value="<?=$Refcontacto1?>"/>
                    </span></td>
                    <td width="15%" bgcolor="#E1F2FB"><span class="Estilo93">TELEFONO: </span></td>
                    <td width="35%" bgcolor="#E1F2FB"><span class="Estilo93 Estilo96">
                      <input name="Reftelcontac1" type="text" class="TextField2" id="Reftelcontac1" style="width:95%" value="<?=$Reftelcontac1?>"/>
                    </span></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#D0E3EE"><img src="Images/linea.jpg" width="100%" height="1" /></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="15%" height="25" bgcolor="#D0E3EE"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">REF. COMERCIAL: </span></td>
                    <td width="35%" bgcolor="#D0E3EE"><span class="Estilo93 Estilo96">
                      <input name="Refcomer2" type="text" class="TextField2" id="Refcomer2" style="width:95%" onKeyUp="form4.Refcomer2.value=form4.Refcomer2.value.toUpperCase();" value="<?=$Refcomer2?>" />
                    </span></td>
                    <td width="15%" bgcolor="#D0E3EE"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">DIRECCION: </span></td>
                    <td width="35%" bgcolor="#D0E3EE"><span class="Estilo93 Estilo96">
                      <input name="Refdir2" type="text" class="TextField2" id="Refdir2" style="width:95%"  value="<?=$Refdir2?>" onKeyUp="form4.Refdir2.value=form4.Refdir2.value.toUpperCase();"/>
                    </span></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#D0E3EE"><img src="Images/linea.jpg" width="100%" height="1" /></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="15%" height="25" bgcolor="#D0E3EE"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">CIUDAD: </span></td>
                    <td width="35%" bgcolor="#D0E3EE"><select name="Refciudad2" class="TextField2" id="Refciudad2" style="width:95%">
                      <option value="<?=$Refciudad2?>" selected="selected">
                        <?=$Refciudad2?>
                        </option>
                      <?
$query008="SELECT* FROM Municipio order by Nombre" ;
$result008=mysql_query($query008, $id);

While($row008=mysql_fetch_array($result008))
{
$Nombre8		=$row008["Nombre"];
$Id8			=$row008["Id"];

?>
                      <option value="<?=$Nombre8?>">
                        <?=$Nombre8?>
                        </option>
                      <?
}
?>
                    </select></td>
                    <td width="15%" bgcolor="#D0E3EE">&nbsp;</td>
                    <td width="35%" bgcolor="#D0E3EE">&nbsp;</td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#E1F2FB"><img src="Images/linea.jpg" width="100%" height="1" /></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="15%" height="25" bgcolor="#D0E3EE"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">CONTACTO: </span></td>
                    <td width="35%" bgcolor="#D0E3EE"><span class="Estilo93 Estilo96">
                      <input name="Refcontacto2" type="text" class="TextField2" id="Refcontacto2" style="width:95%" onKeyUp="form4.Refcontacto2.value=form4.Refcontacto2.value.toUpperCase();" value="<?=$Refcontacto2?>"/>
                    </span></td>
                    <td width="15%" bgcolor="#D0E3EE"><span class="Estilo93">TELEFONO: </span></td>
                    <td width="35%" bgcolor="#D0E3EE"><span class="Estilo93 Estilo96">
                      <input name="Reftelcontac2" type="text" class="TextField2" id="Reftelcontac2" style="width:95%" value="<?=$Reftelcontac2?>"/>
                    </span></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#D0E3EE"><img src="Images/linea.jpg" width="100%" height="1" /></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="25" bgcolor="#FFFFFF"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">REFERENCIAS SOCIALES. </span><span class="Estilo93"> </span></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#FFFFFF"><img src="Images/linea.jpg" width="100%" height="1" /></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="15%" height="25" bgcolor="#E1F2FB"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">REF. SOCIAL: </span></td>
                    <td width="35%" bgcolor="#E1F2FB"><span class="Estilo93 Estilo96">
                      <input name="Refsocial1" type="text" class="TextField2" id="Refsocial1" style="width:95%" onKeyUp="form4.Refsocial1.value=form4.Refsocial1.value.toUpperCase();" value="<?=$Refsocial1?>" />
                    </span></td>
                    <td width="15%" bgcolor="#E1F2FB"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">DIRECCION: </span></td>
                    <td width="35%" bgcolor="#E1F2FB"><span class="Estilo93 Estilo96">
                      <input name="Refdirsocial1" type="text" class="TextField2" id="Refdirsocial1" style="width:95%"  value="<?=$Refdirsocial1?>" onKeyUp="form4.Refdirsocial1.value=form4.Refdirsocial1.value.toUpperCase();"/>
                    </span></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#E1F2FB"><img src="Images/linea.jpg" width="100%" height="1" /></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="15%" height="25" bgcolor="#E1F2FB"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">CIUDAD: </span></td>
                    <td width="35%" bgcolor="#E1F2FB"><select name="Refciusocial1" class="TextField2" id="Refciusocial1" style="width:95%">
                      <option value="<?=$Refciusocial1?>" selected="selected">
                        <?=$Refciusocial1?>
                        </option>
                      <?
$query008="SELECT* FROM Municipio order by Nombre" ;
$result008=mysql_query($query008, $id);

While($row008=mysql_fetch_array($result008))
{
$Nombre8		=$row008["Nombre"];
$Id8			=$row008["Id"];

?>
                      <option value="<?=$Nombre8?>">
                        <?=$Nombre8?>
                        </option>
                      <?
}
?>
                    </select></td>
                    <td width="15%" bgcolor="#E1F2FB">&nbsp;</td>
                    <td width="35%" bgcolor="#E1F2FB">&nbsp;</td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#E1F2FB"><img src="Images/linea.jpg" width="100%" height="1" /></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="15%" height="25" bgcolor="#E1F2FB"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">CONTACTO: </span></td>
                    <td width="35%" bgcolor="#E1F2FB"><span class="Estilo93 Estilo96">
                      <input name="Refcontsocial1" type="text" class="TextField2" id="Refcontsocial1" style="width:95%" onKeyUp="form4.Refcontsocial1.value=form4.Refcontsocial1.value.toUpperCase();" value="<?=$Refcontsocial1?>"/>
                    </span></td>
                    <td width="15%" bgcolor="#E1F2FB"><span class="Estilo93">TELEFONO: </span></td>
                    <td width="35%" bgcolor="#E1F2FB"><span class="Estilo93 Estilo96">
                      <input name="Reftelsocial1" type="text" class="TextField2" id="Reftelsocial1" style="width:95%" value="<?=$Reftelsocial1?>"/>
                    </span></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#D0E3EE"><img src="Images/linea.jpg" width="100%" height="1" /></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="15%" height="25" bgcolor="#D0E3EE"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">REF. SOCIAL: </span></td>
                    <td width="35%" bgcolor="#D0E3EE"><span class="Estilo93 Estilo96">
                      <input name="Refsocial2" type="text" class="TextField2" id="Refcomer4" style="width:95%" onKeyUp="form4.Refsocial2.value=form4.Refsocial2.value.toUpperCase();" value="<?=$Refsocial2?>" />
                    </span></td>
                    <td width="15%" bgcolor="#D0E3EE"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">DIRECCION: </span></td>
                    <td width="35%" bgcolor="#D0E3EE"><span class="Estilo93 Estilo96">
                      <input name="Refdirsocial2" type="text" class="TextField2" id="Refdir4" style="width:95%"  value="<?=$Refdirsocial2?>" onKeyUp="form4.Refdirsocial2.value=form4.Refdirsocial2.value.toUpperCase();"/>
                    </span></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#D0E3EE"><img src="Images/linea.jpg" width="100%" height="1" /></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="15%" height="25" bgcolor="#D0E3EE"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">CIUDAD: </span></td>
                    <td width="35%" bgcolor="#D0E3EE"><select name="Refciusocial2" class="TextField2" id="Refciudad4" style="width:95%">
                      <option value="<?=$Refciusocial2?>" selected="selected">
                        <?=$Refciusocial2?>
                        </option>
                      <?
$query008="SELECT* FROM Municipio order by Nombre" ;
$result008=mysql_query($query008, $id);

While($row008=mysql_fetch_array($result008))
{
$Nombre8		=$row008["Nombre"];
$Id8			=$row008["Id"];

?>
                      <option value="<?=$Nombre8?>">
                        <?=$Nombre8?>
                        </option>
                      <?
}
?>
                    </select></td>
                    <td width="15%" bgcolor="#D0E3EE">&nbsp;</td>
                    <td width="35%" bgcolor="#D0E3EE">&nbsp;</td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#E1F2FB"><img src="Images/linea.jpg" width="100%" height="1" /></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="15%" height="25" bgcolor="#D0E3EE"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">CONTACTO: </span></td>
                    <td width="35%" bgcolor="#D0E3EE"><span class="Estilo93 Estilo96">
                      <input name="Refcontsocial2" type="text" class="TextField2" id="Refcontacto4" style="width:95%" onKeyUp="form4.Refcontsocial2.value=form4.Refcontsocial2.value.toUpperCase();" value="<?=$Refcontsocial2?>"/>
                    </span></td>
                    <td width="15%" bgcolor="#D0E3EE"><span class="Estilo93">TELEFONO: </span></td>
                    <td width="35%" bgcolor="#D0E3EE"><span class="Estilo93 Estilo96">
                      <input name="Reftelsocial2" type="text" class="TextField2" id="Reftelcontac4" style="width:95%" value="<?=$Reftelsocial2?>"/>
                    </span></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#D0E3EE"><img src="Images/linea.jpg" width="100%" height="1" /></td>
                  </tr>
                </table>
<br />
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5"><input name="button4" type="submit" class="TextField2" id="button4" value="REALIZAR OPERACION" /></td>
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