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
.TextField4 {background-color: #900;
color: #fff;
font-size: 20pt;
font-family: arial;
border : 1px solid #000;
text-align:center;

}

.TextField31 {background-color: #D7D7D7;
color: #000;
font-size: 10pt;
font-family: arial;
border : 1px solid #000;
text-align:center;

}


.TextField32 {background-color: #036;
color: #FFF;
font-size: 10pt;
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
.TextField21 {background-color: #DADADA;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 0px solid #FFFFFF;
}
.style4 {FONT-SIZE: 10px;
	FONT-FAMILY: Arial, Helvetica, sans-serif;
	color: #666;
}
.Estilo931 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.TextField22 {background-color: #DADADA;
color: #333333;
font-size: 8pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.TextField211 {background-color: #BCBCBC;
color: #333333;
font-size: 11pt;
font-family: arial;
border : 1px solid #FFFFFF;
}

-->
</style>




<script type="text/javascript">

function lbIframeClose() {
parent.document.getElementById("lbMain").style.display = "none";
parent.document.getElementById("lbOverlay").style.display = "none";
 

}

</script>


    



<script LANGUAGE="JavaScript">

function Validar(form)
{
var archivo2	=	document.fcalen.file2.value 
var extension2 	= 	(archivo2.substring(archivo2.lastIndexOf("."))).toLowerCase();

     if (form.file2.value == "")
  { alert("Por favor seleccione un archivo"); form.file2.focus(); return; }

     if (extension2!=".zip" && archivo2!="") 
  { alert("El archivo debe ser en formato ZIP y con nombre comprobantes"); form.file2.focus(); return; }
  
    
  form.submit();
}


</script>



</head>
<body>

<table width="570" border="0" align="center" cellpadding="0" cellspacing="0" >
  <tr onMouseover="this.bgColor='#BED9F3'"onMouseout="this.bgColor='#FFFFFF'" >
    <td height="264" align="center" valign="top" bgcolor="#C7D7E7">

<table width="570" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="20" align="right" valign="middle" class="Estilo97"><a href="content.html" onClick="lbIframeClose();"><img src="Images/close-icon.png" width="20" height="20" border="0"></a></td>
  </tr>
</table>

      <table width="570" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="30" align="center" valign="middle" bgcolor="#E9E9E9" class="Estilo97">CARGAR COMPROBANTES</td>
        </tr>
    </table>
      <br>
      <form name="fcalen" method="post" action="comprobantes-bodega-2.php" enctype="multipart/form-data">
        <table width="570" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="175" align="center" valign="middle" bgcolor="#E9E9E9"><br>
              <br>
              <table width="540" border="0">
                <tr>
                <td height="74"><span class="Estilo931">IMAGENES DE COMPROBANTES EN FORMATO<span style="color: #F00"> .ZIP</span> (EL ARCHIVO DEBE LLAMARSE <span style="color: #F00">comprobantes</span>)</span>
                  <hr size="1">
                  <input name="file2" type="file" class="TextField211" id="file2">
                  
                  <input name="Submit2" type="button" onClick="Validar(this.form);" class="TextField32" value="REALIZAR OPERACION"></td>
              </tr>
        </table></td>
          </tr>
        </table>
    </form>
    


    
    
    </td>
  </tr>
</table>

</body>
</html>