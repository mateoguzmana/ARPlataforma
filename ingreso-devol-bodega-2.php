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


		
		
$Nro				=	$_REQUEST["lea"];


	$queryA		="SELECT COUNT(*) as Total FROM Controlbox where Id = '$Nro' and Leida = 1 and Finaliza = 1  and Asignado = 1 and Devol <> 1 and Fin = 0  " ;
	$resultA	=mysql_query($queryA, $id);
	
	while($rowA	=mysql_fetch_array($resultA))
	{
	$TotalA		=$rowA["Total"];
	}


	
	if($TotalA == 0)
	{
?>
	<script type="text/javascript">
        alert('Esta guia no esta disponible para devolucion.');
        window.location.href=('ingreso-devol-bodega.php');
    </script>
    
<?
	}

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
font-size: 10pt;
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
font-size: 10pt;
font-family: arial;
border : 0px solid #FFFFFF;
}
.style4 {FONT-SIZE: 10px;
	FONT-FAMILY: Arial, Helvetica, sans-serif;
	color: #666;
}

-->
</style>




<script type="text/javascript">

function lbIframeClose() {
parent.document.getElementById("lbMain").style.display = "none";
parent.document.getElementById("lbOverlay").style.display = "none";
 

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


<script language="JavaScript">
<!--
function confirmSubmit() 
{ 
var agree=confirm("Realmente desea finalizar la lectura de pedidos?"); 
	if (agree) 
	{
	window.location.href='reporte-ingreso-papeleria-ebel-bodega.php?Borra=SI';
	return true ; 
	}
	else
	{
	return false ; 
	}
}
//-->
</script>




<script language="JavaScript">
function disableCtrlKeyCombination(e)
{
//list all CTRL + key combinations you want to disable
var forbiddenKeys = new Array('a', 'n', 'c', 'x', 'v', 'j' , 'w');
var key;
var isCtrl;

if(window.event)
{
key = window.event.keyCode;     //IE
if(window.event.ctrlKey)
isCtrl = true;
else
isCtrl = false;
}
else
{

key = e.which;     //firefox
if(e.ctrlKey)
isCtrl = true;
else
isCtrl = false;
}

//if ctrl is pressed check if other key is in forbidenKeys array
if(isCtrl)
{
for(i=0; i<forbiddenKeys.length; i++)
{
//case-insensitive comparation
if(forbiddenKeys[i].toLowerCase() == String.fromCharCode(key).toLowerCase())
{
//alert('Key combination CTRL + '+String.fromCharCode(key) +' has been disabled.');
return false;
}
}
}
return true;
}
</script>
</head>
<body onkeypress="return disableCtrlKeyCombination(event);" onkeydown="return disableCtrlKeyCombination(event);" onload='document.forms["form1"]["lea"].focus();'>

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
        <td height="30" align="center" valign="middle" bgcolor="#E9E9E9" class="Estilo97">&nbsp;&nbsp;ASIGNACION DE ENTREGAS </td>
        </tr>
    </table>
      <br>
      <form name="form1" method="post" action="ingreso-devol-bodega-3.php">
        <table width="570" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="175" align="center" valign="middle" bgcolor="#E9E9E9"><br>
              <br>
              <table width="540" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="39" bgcolor="#FFFFFF"><span class="listado11">NRO. REMESA</span><br>
                    <span class="Estilo1051"><?=$Nro?>
                    <input name="Nro" type="hidden" id="Nro" value="<?=$Nro?>">
                    </span></tr>
              </table>
              <table width="540" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="2" bgcolor="#FFFFFF" class="listado11"><img src="Images/est-0.jpg" width="100%" height="1"></td>
                </tr>
              </table>
              <table width="540" border="0">
                <tr>
                <td height="74"><span class="listado11">MOTIVO DE DEVOLUCION</span><br>
                  <label for="Motivo"></label>
                  <select name="Motivo" class="TextField21" id="Motivo" style="width:100%">
                    <option value=""></option>
                    <option value="DIRECCION ERRADA">DIRECCION ERRADA</option>
                    <option value="NO ACEPTAN EL PEDIDO">NO ACEPTAN EL PEDIDO</option>
                    <option value="NO HAY QUIEN RECIBA">NO HAY QUIEN RECIBA</option>
                    <option value="PEDIDO EN MAL ESTADO">PEDIDO EN MAL ESTADO</option>
                    <option value="SINIESTRO">SINIESTRO</option>
                  </select></td>
              </tr>
        </table>
              <table width="540" border="0">
                <tr>
                <td width="265" height="59"><p>
                  <input name="button" type="button" class="TextField4" id="button" value="VOLVER" onclick="location.href='ingreso-devol-bodega.php'">
                </p></td>
                <td width="265" align="right"><input name="button2" type="submit" class="TextField32" id="button2" value="REALIZAR DEVOLUCION"></td>
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