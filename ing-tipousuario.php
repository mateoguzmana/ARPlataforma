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





$query0081		=	"SELECT* FROM Tipouser where Id = '$Id'" ;
$result0081		=	mysql_query($query0081, $id);
							
While($row0081	=	mysql_fetch_array($result0081))
{
$Nombre			       = 	$row0081["Nombre"];

}



if($Id <> '')
{
$url	=	"act-tipousuario2.php";
$esta	=	'readonly="readonly"';
}
else
{
$url	=	"ing-tipousuario2.php";
}

?>


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
        <li><a href="#tab1">Tipo de usuarios</a></li>
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
                  <td width="15%" height="25" bgcolor="#F2F2F2"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">NOMBRE:</span></td>
                  <td width="35%" bgcolor="#F2F2F2"><span class="Estilo93 Estilo96">
                    <input name="Nombre" type="text" class="TextField2" id="Nombre" style="width:50%" value="<?=$Nombre?>">
                    <input name="Id" type="hidden" id="Id" value="<?=$Id?>">
                    <input name="tab" type="hidden" id="tab" value="tab1" />
                  </span></td>
                 
                </tr>
              </table>
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

    </div>
    
    
    
    
    
</div>
<div style="clear: both; display: block; padding: 10px 0; text-align:center;"></div>

    
    </td>
  </tr>
</table>


</body>
</html>