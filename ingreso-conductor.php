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

$Cedula	=	$_REQUEST["Cedula"];


$_SESSION['Newc']='';

$_SESSION['Modc']='';

$_SESSION['Plak']='';

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
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
	font-size: 12px;
	color: #666;
}
body {
	background-color: #C7D7E7;
	margin-top: 0px;
	margin-left: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo93 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
	color: #000;
}
.Estilo105 {
	color: #990000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
	text-align: center;
}
.Estilo97 {
	font-size: 16px;
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
font-size: 20pt;
font-family: arial;
border : 1px solid #000;
text-align:center;

}
.listado1 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #666;
}
.listado2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #003;
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
.hideable { position: relative; visibility: visible; }
.Estilo1051 {	color: #990000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}
.listado11 {font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
	color: #000;
}

#error {
	margin-top:1px;
	font: 12px Arial, Helvetica, sans-serif, bold;
	font-weight: bold;
	color: #000000;
	width: 320;
}

-->
</style>
  
<script language="JavaScript" type="text/javascript">
self.focus();
</script> 



<script type="text/javascript">

function lbIframeClose() {
parent.document.getElementById("lbMain").style.display = "none";
parent.document.getElementById("lbOverlay").style.display = "none";
 

}

</script>

<script LANGUAGE="JavaScript">

function validar(formulario) 
{
  if (formulario.Cedula.value == "") 
  {
    alert("Por favor ingrese una Cédula");
    formulario.Cedula.focus();
    return (false);
  }
  
  return (false); 
}
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




<?
if(!empty($Cedula))
{
$funci	=	"compUsuario();";
?>
		function compUsuario() 
		{

			 if (document.form1.Cedula.value == "<?=$Cedula?>") 
			 {
				  var DivDestino = document.getElementById("DivDestino");
				  DivDestino.innerHTML = "<div></div>";
				  if (document.form1.Cedula.value) 
				  {
					  
					  if(document.form1.Cedula.value.length > 5)
						{ 
					   		ObtDatos("ajax_comprobar_cedula_conductor.php?q=" + document.form1.Cedula.value);
					    }
				  } 
			 }
		}
		
		function compUsuarios(Tecla) 
		{
			 Tecla = (Tecla) ? Tecla: window.event;
			 input = (Tecla.target) ? Tecla.target : 
			 Tecla.srcElement;
			 if (Tecla.type == "keyup") 
			 {
				  var DivDestino = document.getElementById("DivDestino");
				  DivDestino.innerHTML = "<div></div>";
				  if (document.form1.Cedula.value) 
				  {
					  
					  if(document.form1.Cedula.value.length > 5)
						{ 
					   		ObtDatos("ajax_comprobar_cedula_conductor.php?q=" + document.form1.Cedula.value);
					    }
				  } 
			 }
		}
		
	
<?
}
else
{
?>
		function compUsuarios(Tecla) 
		{
			 Tecla = (Tecla) ? Tecla: window.event;
			 input = (Tecla.target) ? Tecla.target : 
			 Tecla.srcElement;
			 if (Tecla.type == "keyup") 
			 {
				  var DivDestino = document.getElementById("DivDestino");
				  DivDestino.innerHTML = "<div></div>";
				  if (document.form1.Cedula.value) 
				  {
					  
					  if(document.form1.Cedula.value.length > 5)
						{ 
					   		ObtDatos("ajax_comprobar_cedula_conductor.php?q=" + document.form1.Cedula.value);
					    }
				  } 
			 }
		}
<?
}
?>	

</script>

</head>
<body onload = "document.form1.Cedula.focus(); <?=$funci?>">

<table width="330" border="0" align="center" cellpadding="0" cellspacing="0" >
  <tr onMouseover="this.bgColor='#BED9F3'"onMouseout="this.bgColor='#FFFFFF'" >
    <td height="264" align="center" valign="middle" bgcolor="#C7D7E7">

<table width="320" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="20" align="right" valign="middle" class="Estilo97"><a href="content.html" onClick="lbIframeClose();"><img src="Images/close-icon.png" width="20" height="20" border="0"></a></td>
  </tr>
</table>

      <table width="320" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="30" align="center" valign="middle" bgcolor="#E9E9E9" class="Estilo97">INGRESE UNA CEDULA</td>
        </tr>
    </table>
      <br>
      <form name="form1" method="post" action="" onSubmit = "return validar(this)">
        <table width="320" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="85" align="center" valign="middle" bgcolor="#E9E9E9"><input name="Cedula" type="text" class="TextField3" id="Cedula" onKeyPress="return isNumberKey(event);" onKeyUp="compUsuarios(event);" value="<?=$Cedula?>" size="9" maxlength="15" autocomplete="off">&nbsp;&nbsp;
<a href="#" onClick="window.open('lista-conductores-ing.php','','menubar=no,scrollbars=yes, width=500, height=500,');return false"><img src="Images/buscar.gif" width="16" height="16" border="0"></a></td>
          </tr>
        </table>
        <div id = "DivDestino"></div>
      </form></td>
  </tr>
</table>

</body>
</html>