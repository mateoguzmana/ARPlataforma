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


		
$Nit		=	$_REQUEST["Nit"];
$Nombre		=	$_REQUEST["Nombre"];





		
//unset($_SESSION['vector-boletas']);



?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html><head>
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


body {
	background-color: #C7D7E7;
	margin-top: 0px;
	margin-left: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo93s {
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
border : 0px solid #FFFFFF;
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
.listado11 {
	font-family: Arial, Helvetica, sans-serif;
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
.TextField41 {background-color: #496580;
color: #FFFFFF;
font-size: 10pt;
font-family: arial;
border : 0px solid #FFFFFF;
}
.style4 {	FONT-SIZE: 10px;
	FONT-FAMILY: Arial, Helvetica, sans-serif;
	color: #666;
}
.TextField31 {background-color: #D7D7D7;
color: #000;
font-size: 16pt;
font-family: arial;
border : 1px solid #000;
text-align:center;
}
div.scroll {
height: 180px;
width: 550px;
overflow: auto;
border: 1px solid #FFF;
background-color: #FFF;
padding: 3px;
}

#modalContainer {
	background-color:transparent;
	position:absolute;
	width:100%;
	height:100%;
	top:0px;
	left:0px;
	z-index:10000;
}
#alertBox {
	position:relative;
	width:300px;
	height:200px;
	min-height:100px;
	margin-top:100px;
	border:2px solid #000;
	background-color:#F2F5F6;
	overflow: auto;
}

#modalContainer > #alertBox {
	position:fixed;
}

#alertBox h1 {
	margin:0;
	font:bold 0.9em verdana,arial;
	background-color:#78919B;
	color:#FFF;
	border-bottom:1px solid #000;
	padding:2px 0 2px 5px;
}

#alertBox p {
	font:0.7em verdana,arial;
	height:50px;
	padding-left:5px;
	margin-left:5px;
	margin-right:5px;
	padding-right:5px;
	text-align:justify;
}

#alertBox #closeBtn {
	position:absolute;
	top:1px;
	padding-left:5px;
	margin-left:190px;
	margin-right:5px;
	padding-right:5px;
	border:2px solid #000;
	width:70px;
	font:0.7em verdana,arial;
	text-transform:uppercase;
	text-align:center;
	color:#FFF;
	background-color: #900;
	text-decoration:none;
}
.accordion2 {
	width: 99%;
	border-bottom: solid 1px #c4c4c4;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #009;
}
.accordion2 h3 {
	background: #e9e7e7 url(Images/arrow-square.gif) no-repeat right -51px;
	padding: 7px 15px;
	margin: 0;
	font: bold 120%/100% Arial, Helvetica, sans-serif;
	border: solid 1px #c4c4c4;
	border-bottom: none;
	cursor: pointer;
}
.accordion2 h3:hover {
	background-color: #e3e2e2;
	color: #003;
}
.accordion2 h3.active {
	background-position: right 5px;
}
.accordion2 p {
	background: #f7f7f7;
	margin: 0;
	padding: 10px 15px 20px;
	border-left: solid 1px #c4c4c4;
	border-right: solid 1px #c4c4c4;
	display: none;
}
.listado1 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
	color: #000;
}
.Estilo931 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
}
.TextField4 {background-color: #000033;
color: #fff;
font-size: 7pt;
font-family: arial;
border : 1px solid #000;
text-align:center;
}
.TextField5 {background-color: #003366;
color: #FFF;
font-size: 7pt;
font-family: arial;
border : 1px solid #000;
}


.TextFields {background-color: #F4F4F4;
color: #000;
font-size: 7pt;
font-family: arial;
border : 0px solid #000;
}




.listado {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #666;
}
.Estilo93 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
	color: #666;
}
.Estilo96 {
	font-size: 9px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
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






<script type="text/javascript">

function lbIframeClose() 
{

parent.document.getElementById("lbMain").style.display = "none";
parent.document.getElementById("lbOverlay").style.display = "none";
window.parent.frames['contenido'].location.href = 'borra-vector-ebel-bodega.php'; 

}

</script>



<script language="JavaScript">
<!--
function confirmSubmit() 
{ 
var agree=confirm("Realmente desea sacar estos pedidos de su seleccion? "); 
if (agree) 
return true ; 
else 
return false ; 
}

//-->
</script>


<script LANGUAGE="JavaScript">


function validar(formulario) 
{
		  
		  if (formulario.Nit.value == "") 
		  {
			alert("Por favor seleccione un conductor");
			formulario.Nit.focus();
			return (false);
		  }
		  
		  if (formulario.Nombre.value == "") 
		  {
			alert("Por favor seleccione un conductor");
			formulario.Nombre.focus();
			return (false);
		  }
		  
		  if (formulario.Salida.value == "") 
		  {
			alert("Por favor seleccione una Fecha");
			formulario.Salida.focus();
			return (false);
		  }
		  
		  if (formulario.Hora.value == "") 
		  {
			alert("Por favor seleccione una Hora");
			formulario.Hora.focus();
			return (false);
		  }
		  

	var agree=confirm("Esta seguro de realizar esta asignacion?"); 
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


                  



<script type="text/javascript" src="jquery.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	
	$(".accordion2 h3").eq(50).addClass("active");
	$(".accordion2 p").eq(50).show();
	$(".accordion2 p").eq(50).show();;

	$(".accordion2 h3").click(function(){
		$(this).next("p").slideToggle("slow")
		.siblings("p:visible").slideUp("slow");
		$(this).toggleClass("active");
		$(this).siblings("h3").removeClass("active");
	});

});
</script>



<link rel="stylesheet" media="all" type="text/css" href="css/ui-lightness/jquery-ui-1.8.6.custom.css" />
<style type="text/css">
.TextField32 {background-color: #036;
color: #FFF;
font-size: 10pt;
font-family: arial;
border : 1px solid #000;
text-align:center;
}
</style>
<script type="text/javascript"src="js/jquery.min.js"></script>

		<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.6.custom.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-timepicker-addon.js"></script>
        


		<script type="text/javascript">
			
			
			$(function(){
				
		
				$('.example-container > pre').each(function(i){
					eval($(this).text());
					$('#Salida').datepicker();
				});

				$('#Hora').timepicker({
					hourGrid: 4,
					minuteGrid: 10,
					timeFormat: 'hh:mm tt'
				});


				
			});
			
			
</script>



</head>
<body onkeypress="return disableCtrlKeyCombination(event);" onkeydown="return disableCtrlKeyCombination(event);" onload='document.forms["form1"]["lea"].focus();'>
<div class="example-container">
  <pre></pre>
</div>

<?
	$queryA		="SELECT COUNT(*) as Total FROM Controlbox where Leida = 1 and Finaliza = 1  and Asignado = 1 and Devol = 1 and Fin = 0  " ;
	$resultA	=mysql_query($queryA, $id);
	
	while($rowA	=mysql_fetch_array($resultA))
	{
	$TotalA		=$rowA["Total"];
	}
?>

<table width="580" border="0" align="center" cellpadding="0" cellspacing="0" >
  <tr onMouseover="this.bgColor='#BED9F3'"onMouseout="this.bgColor='#FFFFFF'" >
    <td height="600" align="center" valign="top" bgcolor="#E9E9E9"><table width="580" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="20" align="right" valign="middle" class="Estilo97"><a href="content.html" onClick="lbIframeClose();"><img src="Images/close-icon.png" width="20" height="20" border="0"></a></td>
      </tr>
    </table>
      <form name="form1" method="post" action="ingreso-sale-ebel-bodega-2.php">
        <table width="580" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="80" align="center" valign="middle" bgcolor="#E9E9E9"><table width="570" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="341" height="30" align="left" valign="middle" bgcolor="#FFFFFF" class="Estilo97">&nbsp;&nbsp;DEVOLUCION  DE PEDIDOS </td>
                  <td width="239" align="right" valign="middle" bgcolor="#FFFFFF" class="Estilo97">&nbsp;</td>
                </tr>
              </table>
              <br>
              <table width="570" border="0">
                <tr>
                  <td height="80"><table width="570" border="0"  cellpadding="0" cellspacing="0">
                    <tr>
    <td height="21" class="Estilo93"><table width="565" border="0" cellpadding="0" cellspacing="0">
      <tr>
          <td width="410" height="29" bgcolor="#F4F4F4" class="Estilo97"><span style="font-size:14px">DEVOLUCIONES</span></td>
          <td width="60" align="right" bgcolor="#F4F4F4" class="listado11">&nbsp;</td>
          </tr>
      </table>
      
<div class="accordion2">
<h3>

<table width="510" border="0" cellpadding="0" cellspacing="0" >
        <tr>
          <td height="15" class="listado11">&nbsp;<span class="accordion2" style="font-size:12px; font-weight:bold;">PEDIDOS EN DEVOLUCION</span></td>
          <td width="85" align="center" class="listado11">&nbsp;</td>
          <td width="65" align="center" class="tituloslista"><?=$TotalA?></td>
          <td width="60" align="left" class="listado11">&nbsp;&nbsp;</td>
          <td width="60" align="left" class="listado11">&nbsp;&nbsp;</td>
          <td width="40" align="right">&nbsp;</td>
        </tr>
      </table>
</h3>


<p>





<table width="535" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="70" height="15" bgcolor="#FFFFFF" class="listado11"><span class="Estilo96">REMESA</span></td>
    <td width="220" align="left" bgcolor="#FFFFFF" class="listado11"><span class="Estilo96">
      NOMBRE
    </span></td>
    <td width="60" align="center" bgcolor="#FFFFFF" class="listado11">&nbsp;</td>
    <td width="70" align="left" bgcolor="#FFFFFF" class="listado11">&nbsp;</td>
    <td width="87" align="left" bgcolor="#FFFFFF" class="listado11"><span class="Estilo96">CATAPORTE</span></td>
    <td width="28" align="right">&nbsp;</td>
  </tr>
</table>
<br>
<?
							$contq1e			=0;
							$querydOq1e			="SELECT* FROM Controlbox where Leida = 1 and Finaliza = 1  and Asignado = 1 and Devol = 1 and Fin = 0 order By Id" ;
							$resultdOq1e		=mysql_query($querydOq1e, $id);
							
							While($rowdOq1e		=mysql_fetch_array($resultdOq1e))
							{
							$Idq1e				=$rowdOq1e["Id"];
							$Nombreq1e			=$rowdOq1e["Destinatario"];
							$Nropedido1e		=$rowdOq1e["Id"];
							$Cataporte			=$rowdOq1e["Cataporte"];
							$contq1e++;
							
							

							
							
							
								$queryA		="SELECT* FROM Devoluciones where Nro = '$Idq1e'  " ;
								$resultA	=mysql_query($queryA, $id);
								
								while($rowA	=mysql_fetch_array($resultA))
								{
								$Motivo		=$rowA["Motivo"];
								}
							
							
							
							
?>
  
<table width="535" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="70" height="15" bgcolor="#F4F4F4" class="listado11"><?=$Idq1e?></td>
        <td width="350" align="left" bgcolor="#F4F4F4" class="listado11">
          
          <input name="textfield" type="text" class="TextFields" id="textfield" style="width:98%" value="<?=$Nombreq1e?>" readonly></td>
        <td width="87" align="left" bgcolor="#F4F4F4" class="listado11"><?=$Cataporte?></td>
        <td width="28" align="right">&nbsp;</td>
      </tr>
    </table>
    <table width="535" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td class="Estilo93"><hr size="1" class="listado"></td>
      </tr>
    </table>
    
<?
							}
?>

<table width="535" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="70" height="15" bgcolor="#EBEFB4" class="listado11"><span class="Estilo96">TOTAL
      <input name="Totalped" type="hidden" id="Totalped" value="<?=$contq1e?>">
    </span></td>
    <td width="220" align="left" bgcolor="#EBEFB4" class="listado11">&nbsp;</td>
    <td width="60" align="center" bgcolor="#EBEFB4" class="listado11"><span class="Estilo96"><?=$cuentocajas?></span></td>
    <td width="70" align="center" bgcolor="#EBEFB4" class="listado11"><span class="Estilo96">
      <?=$TOTAL6sRt2?></span></td>
    <td width="87" align="left" bgcolor="#EBEFB4" class="listado11">&nbsp;<span class="Estilo96"><?=$SUMOPRE?></span></td>
    <td width="28" align="right" bgcolor="#EBEFB4">&nbsp;</td>
  </tr>
</table>
</p>




</div></td>
  </tr>
</table>




                </tr>
            </table></td>
          </tr>
        </table>
      </form>
      
      
      
      
      

<table width="560" border="0">
  <tr>
        <td height="69" align="right"><p>
          <input name="button2" type="button" class="TextField32" id="button2" value="VOLVER" onclick="location.href='ingreso-sdevol-bodega.php'">
        </p></td>
      </tr>
  </table></td>
  </tr>
</table>
</body>
</html>