<?

include("conexion.php");

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$Id	=	$_REQUEST["Id"];


$query008="SELECT* FROM Viajes where Id = '$Id'" ;
$result008=mysql_query($query008, $id);

While($row008=mysql_fetch_array($result008))
{
$Idn			=$row008["Id"];
$Manifiesto		=$row008["Manifiesto"];
$Remesas		=$row008["Remesas"];
$Planviaje		=$row008["Planviaje"];
$Fecha			=$row008["Fecha"];
$Creamanif		=$row008["Creamanif"];
$Captador		=$row008["Captador"];
}

$querypr3			=	"SELECT COUNT(*) as Totalr3 FROM Remisiones where Manifiesto = '$Manifiesto'" ;
$resultpr3			=	mysql_query($querypr3, $id);
													
While($rowpr3		=	mysql_fetch_array($resultpr3))
{
$Totalpr3			=	$rowpr3["Totalr3"];
}


$query0081="SELECT* FROM Manifiestos where Nromanifiesto = '$Manifiesto'" ;
$result0081=mysql_query($query0081, $id);

While($row0081=mysql_fetch_array($result0081))
{
$Placa			=$row0081["Placa"];
$Conductor		=$row0081["Conductor"];
$Propietario	=$row0081["Propietario"];
$Fecha			=$row0081["Fecha"];
$Empresa		=$row0081["Empresa"];
$Nombreorg		=$row0081["Nombreorg"];
$Nomdest 		=$row0081["Nomdest"];
$Sucursal  		=$row0081["Sucursal"];
$Celularvia		=$row0081["Celular"];
$Fechacrea		=$row0081["Fechacrea"];
}

$queryof	=	"SELECT COUNT(*) as Totalof FROM Manifiestos where Conductor = '$Conductor'" ;
$resultof	=	mysql_query($queryof, $id);
							
While($rowof=	mysql_fetch_array($resultof))
{
$Totalof	=	$rowof["Totalof"];
}

		$query0082="SELECT* FROM Empresas where Nit  = '$Empresa'" ;
		$result0082=mysql_query($query0082, $id);
		
		While($row0082=mysql_fetch_array($result0082))
		{
		$Nombre2		=$row0082["Nombre"];
		}
		
		$query0083="SELECT* FROM Agencias where Cod  = '$Sucursal'" ;
		$result0083=mysql_query($query0083, $id);
		
		While($row0083=mysql_fetch_array($result0083))
		{
		$Nombre3	=$row0083["Nombre"];
		}
		
		$query0084="SELECT* FROM Vehiculos where Placa  = '$Placa'" ;
		$result0084=mysql_query($query0084, $id);
		
		While($row0084=mysql_fetch_array($result0084))
		{
		$Marca4			=$row0084["Marca"];
		$Modelo4 		=$row0084["Modelo"];
		$Repotenciado4 	=$row0084["Repotenciado"];
		$Color4			=$row0084["Color"]; 
		$Tipo4			=$row0084["Tipocarro"];
		$Foto4			=$row0084["Foto"];
		$Satelital		=$row0084["Satelital"];
		$Usuariosa		=$row0084["Usuario"];
		$Passsa			=$row0084["Pass"];
		$Empresate		=$row0084["Empresate"];
		}
		
		$query0085="SELECT* FROM Colores where Idcolor  = '$Color4'" ;
		$result0085=mysql_query($query0085, $id);
		
		While($row0085=mysql_fetch_array($result0085))
		{
		$Nombre5		=$row0085["Nombre"];
		}	
		
		$query0086="SELECT* FROM Tipoauto where Idtipo  = '$Tipo4'" ;
		$result0086=mysql_query($query0086, $id);
		
		While($row0086=mysql_fetch_array($result0086))
		{
		$Nombre6		=$row0086["Nombre"];
		}		
		
		$query0087="SELECT* FROM Conductores where Cedula = '$Conductor'" ;
		$result0087=mysql_query($query0087, $id);
		
		While($row0087=mysql_fetch_array($result0087))
		{
		$Nombre7		=$row0087["Nombrefull"];
		$Celular7		=$row0087["Celular"];
		$Tel7			=$row0087["Tel"];
		$Dir7			=$row0087["Dir"];
		$Foto7			=$row0087["Foto"];
		}	

		$query0088="SELECT* FROM Propietarios  where Cedula = '$Propietario'" ;
		$result0088=mysql_query($query0088, $id);
		
		While($row0088=mysql_fetch_array($result0088))
		{
		$Nombre8a		=$row0088["Apellido1"];
		$Nombre8b		=$row0088["Apellido2"];
		$Nombre8		=$Nombre8a." ".$Nombre8b." ".$row0088["Nombre"];
		$Celular8		=$row0088["Celular"];
		$Tel8			=$row0088["Tel"];
		$Dir8			=$row0088["Dir"];
		}
		
		$query0089="SELECT* FROM Planes  where Id = '$Planviaje'" ;
		$result0089=mysql_query($query0089, $id);
		
		While($row0089=mysql_fetch_array($result0089))
		{
		$Nombre9		=$row0089["Nombre"];
		}
		

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
.Estilo97 {
	font-size: 10px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	color:#9D2522;
}
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
.TextFieldFU {background-color: #FF0000;
color: #FFFFFF;
font-size: 9pt;
font-family: arial;
border : 1px solid #FFFFFF;
}

body {
	margin-top: 0px;
	margin-left: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #E9E7E7;
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
-->
</style>
<script language="JavaScript">
function Abrir_ventana (pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, width=200, height=200, top=85, left=300";
window.open(pagina,"",opciones);
}
</script>

<script type="text/javascript" src="jquery.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	
	$(".accordion2 h3").eq(50).addClass("active");
	$(".accordion2 p").eq(50).show();
	$(".accordion2 p").eq(8).show();;

	$(".accordion2 h3").click(function(){
		$(this).next("p").slideToggle("slow")
		.siblings("p:visible").slideUp("slow");
		$(this).toggleClass("active");
		$(this).siblings("h3").removeClass("active");
	});

});

</script>


				  <script language="Javascript">
                      function doLytebox() 
					  {
                        var myLink = document.getElementById("myLink");
                        myLytebox.start(myLink,false,true);
                      }
                  </script>
                  
                  
<script type="text/JavaScript"> 
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
</script>         
</head>

<body>
<table width="100%" border="0" align="center">
  <tr>
    <td><div class="accordion2">
	<h3>DATOS GENERALES</h3>
	<p><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="40%" class="Estilo96">CLIENTE:</td>
    <td width="60%" class="Estilo93"><?=$Nombre2?></td>
  </tr>
</table>
	<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
	  <tr>
	    <td class="Estilo93"><hr size="1" class="listado"></td>
	    </tr>
	  </table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="40%" class="Estilo96">MANIFIESTO:</td>
    <td width="60%"><span class="Estilo93">
      <?=$Manifiesto?>
    </span></td>
    </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="Estilo93"><hr size="1" class="listado"></td>
  </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="40%" class="Estilo96">PLANILLADO POR:</td>
    <td width="60%"><span class="Estilo93">
      <?=$Creamanif?>
    </span></td>
  </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="Estilo931"><hr size="1" class="listado"></td>
  </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="40%" class="Estilo96">FECHA IMPR:</td>
    <td width="60%"><span class="Estilo931">
      <?=$Fechacrea?>
    </span></td>
  </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="Estilo931"><hr size="1" class="listado"></td>
  </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="40%" class="Estilo96">ASIGNADO POR:</td>
    <td width="60%"><span class="Estilo93">
      <?=$Captador?>
    </span></td>
  </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="Estilo931"><hr size="1" class="listado"></td>
  </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="40%" class="Estilo96">SUCURSAL:</td>
    <td width="60%"><span class="Estilo93">
      <?=$Nombre3?>
    </span></td>
    </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="Estilo93"><hr size="1" class="listado"></td>
  </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="40%" class="Estilo96">ORIGEN:</td>
    <td width="60%"><span class="Estilo93">
      <?=$Nombreorg?>
    </span></td>
    </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="Estilo93"><hr size="1" class="listado"></td>
  </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="40%" class="Estilo96">DESTINO:</td>
    <td width="60%"><span class="Estilo93">
      <?=$Nomdest?>
    </span></td>
    </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="Estilo93"><hr size="1" class="listado"></td>
  </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="40%" class="Estilo96">PLAN DE VIAJE:</td>
    <td width="60%"><span class="Estilo93">
      <?=$Nombre9?>
    </span></td>
  </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="Estilo93"><hr size="1" class="listado"></td>
  </tr>
</table>
</p>
	<h3>VEHICULO</h3>
	<p>
	<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
	  <tr>
	    <td width="85%" height="122" valign="top" class="Estilo96"><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
	      <tr>
	        <td class="Estilo96">PLACA: </td>
	        </tr>
	      <tr>
	        <td class="Estilo93"><?=$Placa?></td>
	        </tr>
	      </table>
          <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td class="Estilo93"><hr size="1" class="listado"></td>
            </tr>
          </table>
          <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td class="Estilo96">MARCA:</td>
            </tr>
            <tr>
              <td class="Estilo96"><span class="Estilo93">
                <?=$Marca4?>
              </span></td>
            </tr>
          </table>
          <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td class="Estilo93"><hr size="1" class="listado"></td>
            </tr>
          </table>
          <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td class="Estilo96">MODELO:</td>
            </tr>
            <tr>
              <td class="Estilo96"><span class="Estilo93">
                <?=$Modelo4?>
              </span></td>
            </tr>
          </table>
          <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td class="Estilo93"><hr size="1" class="listado"></td>
            </tr>
          </table>
          <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td class="Estilo96">MODELO REP.:</td>
            </tr>
            <tr>
              <td class="Estilo96"><span class="Estilo93">
                <?=$Repotenciado4?>
              </span></td>
            </tr>
          </table></td>
	    <td width="15%" align="center" valign="top" class="Estilo96"><img src="vehiculos/<?=$Foto4?>" width="150" height="120"></td>
	    </tr>
	  <tr>
	    <td colspan="2" valign="top" class="Estilo96"><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
	      <tr>
	          <td class="Estilo93"><hr size="1" class="listado"></td>
	          </tr>
	        </table>
	      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
	        <tr>
	          <td class="Estilo96">COLOR:</td>
	          </tr>
	        <tr>
	          <td class="Estilo96"><span class="Estilo93">
	            <?=$Nombre5?>
	            </span></td>
	          </tr>
	        </table>
	      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
	        <tr>
	          <td class="Estilo93"><hr size="1" class="listado"></td>
	          </tr>
	        </table>
	      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
	        <tr>
	          <td class="Estilo96">TIPO:</td>
	          </tr>
	        <tr>
	          <td class="Estilo96"><span class="Estilo93">
	            <?=$Tipo4?>
	            </span></td>
	          </tr>
	        </table>
	      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
	        <tr>
	          <td class="Estilo93"><hr size="1" class="listado"></td>
	          </tr>
	        </table>
	      <?
 if(!empty($Satelital) && $Satelital <> "No tiene")
 {
 ?>
	      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
	        <tr>
	          <td class="Estilo96">PAGINA SATELITAL:</td>
	          </tr>
	        <tr>
	          <td class="Estilo96"><span class="Estilo93"> <a href="http://<?=$Satelital?>" target="_blank">
	            <?=$Satelital?>
	            </a></span></td>
	          </tr>
	        </table>
	      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
	        <tr>
	          <td class="Estilo93"><hr size="1" class="listado"></td>
	          </tr>
	        </table>
	      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
	        <tr>
	          <td class="Estilo96">USUARIO:</td>
	          </tr>
	        <tr>
	          <td class="Estilo96"><span class="Estilo93">
	            <?=$Usuariosa?>
	            </span></td>
	          </tr>
	        </table>
	      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
	        <tr>
	          <td class="Estilo93"><hr size="1" class="listado"></td>
	          </tr>
	        </table>
	      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
	        <tr>
	          <td class="Estilo96">PASSWORD:</td>
	          </tr>
	        <tr>
	          <td class="Estilo96"><span class="Estilo93">
	            <?=$Passsa?>
	            </span></td>
	          </tr>
	        </table>
	      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
	        <tr>
	          <td class="Estilo93"><hr size="1" class="listado"></td>
	          </tr>
	        </table>
	      
          
<?
if($Empresate <> '')
{
?>  
          
          <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
	        <tr>
	          <td class="Estilo96">EMPRESA:</td>
	          </tr>
	        <tr>
	          <td class="Estilo96"><span class="Estilo93">
	            <?=$Empresate?>
	            </span></td>
	          </tr>
	        </table>
	      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
	        <tr>
	          <td class="Estilo93"><hr size="1" class="listado"></td>
	          </tr>
	        </table>
<?
}
?>
<?
 }
 else
 {
?>
	      <?
 }
?>
          </td>
	    </tr>
	  </table>
	</p>
	<h3>CONDUCTOR</h3>
	<p>
	<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
	  <tr>
	    <td width="85%" valign="top" class="Estilo96"><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
	      <tr>
	        <td class="Estilo96">NOMBRE:<br>
	          <span class="Estilo93">
	            <?=$Nombre7?>
	            </span></td>
	        </tr>
	      </table>
          <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td class="Estilo93"><hr size="1" class="listado"></td>
            </tr>
          </table>
          <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td class="Estilo96">CEDULA:<br>
                <span class="Estilo93">
                  <?=$Conductor?>
                </span></td>
            </tr>
          </table>
          <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td class="Estilo93"><hr size="1" class="listado"></td>
            </tr>
          </table>
          <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td class="Estilo96">CELULAR:<br>
                <span class="Estilo96" style="color: #900; font-size: 11px;">
                  <?=$Celular7?>
                </span><span class="Estilo93">&nbsp;</span></td>
            </tr>
          </table>
          
<?
if(!empty($Celularvia))
{
?> 
          <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td class="Estilo93"><hr size="1" class="listado"></td>
            </tr>
          </table>
          <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td class="Estilo96">CELULAR PARA ESTE VIAJE:<br>
                <span class="Estilo93" style="color: #900; font-size: 10px;"><?=$Celularvia?></span></td>
            </tr>
          </table>
<?
}
?>
          <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td class="Estilo93"><hr size="1" class="listado"></td>
            </tr>
          </table>
          <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td class="Estilo96">TELEFONO:<br>
                <span class="Estilo93">
                  <?=$Tel7?>
                  </span></td>
              </tr>
          </table></td>
	    <td width="15%" align="center" valign="top" class="Estilo96"><img src="conductores/<?=$Foto7?>" width="150" height="120"></td>
	    </tr>
	  <tr>
	    <td colspan="2" valign="top" class="Estilo96"><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
	      <tr>
	        <td class="Estilo93"><hr size="1" class="listado"></td>
	        </tr>
	      </table>
	      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
	        <tr>
              <td class="Estilo96">DIRECCION:<br>
                <span class="Estilo93">
                  <?=$Dir7?>
                </span></td>
            </tr>
          </table>
          <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td class="Estilo93"><hr size="1" class="listado"></td>
            </tr>
          </table>
          <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td class="Estilo96">NRO. VIAJES<br>
                <span class="Estilo93">
                  <?=$Totalof?>
                </span></td>
            </tr>
          </table>
          <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td class="Estilo93"><hr size="1" class="listado"></td>
            </tr>
          </table>
          <?
 if(!empty($Satelital) && $Satelital <> "No tiene")
 {
 ?>
          <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td class="Estilo96">PAGINA SATELITAL:</td>
            </tr>
            <tr>
              <td class="Estilo96"><span class="Estilo93"> <a href="http://<?=$Satelital?>" target="_blank">
                <?=$Satelital?>
              </a></span></td>
            </tr>
          </table>
          <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td class="Estilo93"><hr size="1" class="listado"></td>
            </tr>
          </table>
          <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td class="Estilo96">USUARIO:</td>
            </tr>
            <tr>
              <td class="Estilo96"><span class="Estilo93">
                <?=$Usuariosa?>
              </span></td>
            </tr>
          </table>
          <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td class="Estilo93"><hr size="1" class="listado"></td>
            </tr>
          </table>
          <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td class="Estilo96">PASSWORD:</td>
            </tr>
            <tr>
              <td class="Estilo96"><span class="Estilo93">
                <?=$Passsa?>
              </span></td>
            </tr>
          </table>
          <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td class="Estilo93"><hr size="1" class="listado"></td>
            </tr>
          </table>
          <?
if($Empresate <> '')
{
?>
          <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td class="Estilo96">EMPRESA:</td>
            </tr>
            <tr>
              <td class="Estilo96"><span class="Estilo93">
                <?=$Empresate?>
              </span></td>
            </tr>
          </table>
          <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td class="Estilo93"><hr size="1" class="listado"></td>
            </tr>
          </table>
          <?
}
?>
          <?
 }
 else
 {
?>
          <?
 }
?></td>
	    </tr>
	  </table>
	</p>
	<h3>PROPIETARIO</h3>
	<p><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="30%" class="Estilo96">NOMBRE:</td>
    <td width="70%" class="Estilo93"><?=$Nombre8?></td>
  </tr>
</table>
	<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
	  <tr>
	    <td class="Estilo93"><hr size="1" class="listado"></td>
	    </tr>
	  </table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="30%" class="Estilo96">CEDULA:</td>
    <td width="70%"><span class="Estilo93">
      <?=$Propietario?>
    </span></td>
    </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="Estilo93"><hr size="1" class="listado"></td>
  </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="30%" class="Estilo96">CELULAR:</td>
    <td width="70%"><span class="Estilo93">
      <?=$Celular8?>
    </span></td>
    </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="Estilo93"><hr size="1" class="listado"></td>
  </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="30%" class="Estilo96">TELEFONO:</td>
    <td width="70%"><span class="Estilo93">
      <?=$Tel8?>
    </span></td>
    </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="Estilo93"><hr size="1" class="listado"></td>
  </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="30%" class="Estilo96">DIRECCION:</td>
    <td width="70%"><span class="Estilo93">
      <?=$Dir8?>
    </span></td>
    </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="Estilo93"><hr size="1" class="listado"></td>
  </tr>
</table>
</p>
	<h3>CARGA - REMESAS - CLIENTES (
	  <?=$Totalpr3?>
	  )</h3>
	<p>
    

    
<?
		$query00810="SELECT* FROM Remisiones where Manifiesto = '$Manifiesto' order by Remesa" ;
		$result00810=mysql_query($query00810, $id);
		
		While($row00810=mysql_fetch_array($result00810))
		{
		$Remesa10		=$row00810["Remesa"];
		$Empresa10		=$row00810["Empresa"];
		$Contactodes10	=$row00810["Contactodes"];
		$Telcontacto10	=$row00810["Telcontacto"];
		

		$querye="SELECT* FROM Empresas where Nit  = '$Empresa10'" ;
		$resulte=mysql_query($querye, $id);
		
		While($rowe=mysql_fetch_array($resulte))
		{
		$Empresae		=$rowe["Nombre"];
		}
		
		$Origen10		=$row00810["Nombreorg"];
		$Destino10		=$row00810["Nombredest"];
		$Producto10		=$row00810["Productos"];
		$Peso10			=$row00810["Peso"];
		$Unidades10		=$row00810["Unidades"];
		$Remitente10	=$row00810["Remitente"];
		$Direccion10	=$row00810["Direccion"];
		$Telefono10		=$row00810["Telefono"];
		$Destinatario10	=$row00810["Destinatario"];
		$Dirdest10		=$row00810["Dirdest"];
		$Dirdest10		=$row00810["Dirdest"];
		$Teldesti10		=$row00810["Teldesti"];
		$Observa10		=$row00810["Campo6"];
		$Notas			=$row00810["Notas"];
		$Estad			=$row00810["Estad"];
		$Nciudad		=$row00810["Nciudad"];
		$Fechafinr		=$row00810["Fechafin"];
		
		
		if($Estad <> 0)
		{
		$remf	=	"<strong>FINALIZADA</strong>";	
		}
		else
		{
		$remf	=	"<strong>SIN FINALIZAR</strong>";	
		}

 $pos = strpos($Remesa10, "-");
 
 if ($pos)
 {
 $bas	= "No se ha encontrado nada";
 }
 else
 {



 
?>



<?
} 
?>
    
    

      
<?
		if($Estad <> 0)
		{
?>  
      
	<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
	  <tr>
        <td class="Estilo93"><hr size="1" class="listado"></td>
      </tr>
  </table>
    <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td class="Estilo93"><hr size="1" class="listado"></td>
      </tr>
    </table>
<?
		}
?>
    
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="30%" bgcolor="#BFF2FF" class="Estilo96">NRO. REMESA:</td>
    <td width="35%" bgcolor="#BFF2FF" class="Estilo93"><?=$Remesa10?></td>
    <td width="35%" align="right" bgcolor="#BFF2FF" class="Estilo93"><?=$remf?></td>
  </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="Estilo93"><hr size="1" class="listado"></td>
  </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="30%" valign="top" class="Estilo96">EMPRESA:</td>
    <td width="70%"><span class="Estilo93">
      <?=$Empresae?>
    </span></td>
    </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="Estilo93"><hr size="1" class="listado"></td>
  </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="30%" valign="top" class="Estilo96">ORIGEN REMESA:</td>
    <td width="70%"><span class="Estilo93">
      <?=$Origen10?>
    </span></td>
    </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="Estilo93"><hr size="1" class="listado"></td>
  </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="30%" valign="top" class="Estilo96">DESTINO REMESA:</td>
    <td width="70%"><span class="Estilo93">
      <?=$Destino10?>
    </span></td>
    </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="Estilo93"><hr size="1" class="listado"></td>
  </tr>
</table>
<?
if($Nciudad)
{
?>



<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="Estilo93"><hr size="1" class="listado"></td>
  </tr>
</table>
<?
}
?>
<?
}
$querycv="SELECT COUNT(*) as Total FROM Notificaciones  where Manifiesto = '$Manifiesto'" ;
$resultcv=mysql_query($querycv, $id);

While($rowcv=mysql_fetch_array($resultcv))
{
$Totalcv=$rowcv["Total"];
}
?>

</p>	
<h3>NOTIFICACION ELECTRONICA (<?=$Totalcv?>)</h3>
<p>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="Estilo93"><hr size="1" class="listado"></td>
  </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="25" bgcolor="#BFF2FF" class="Estilo96">&nbsp;NOTIFICACIONES REALIZADAS</td>
    </tr>
</table>
<?
		$query00810xxx="SELECT* FROM Notificaciones  where Manifiesto = '$Manifiesto' order by Fecha desc" ;
		$result00810xxx=mysql_query($query00810xxx, $id);
		
		While($row00810xxx=mysql_fetch_array($result00810xxx))
		{
		$Fecha10xxx		=$row00810xxx["Fecha"];
		$Detalles10xxx	=$row00810xxx["Detalles"];
		$Puestoxxx		=$row00810xxx["Puesto"];
		$Usuario10xxx	=$row00810xxx["Usuario"];
		$Empresa10xxx	=$row00810xxx["Empresa"];
		$Zona10xxx		=$row00810xxx["Zona"];
		
?>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="Estilo93"><hr size="1" class="listado"></td>
  </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="30%" valign="top" class="Estilo96">FECHA:</td>
    <td width="215"><span class="Estilo93">
      <?=$Fecha10xxx?>
    </span></td>
  </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="Estilo93"><hr size="1" class="listado"></td>
  </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="30%" valign="top" class="Estilo96">EMPRESA:</td>
    <td width="70%"><span class="Estilo93">
      <?=$Empresa10xxx?>
    </span></td>
  </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="Estilo93"><hr size="1" class="listado"></td>
  </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="30%" valign="top" class="Estilo96">TIPO REPORTE:</td>
    <td width="215"><span class="Estilo93">
      <?=strtoupper($Zona10xxx)?>
    </span></td>
  </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="Estilo93"><hr size="1" class="listado"></td>
    </tr>
</table>
<?
if($Zona10xxx == "Reporte Puesto Control")
{
?>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="30%" valign="top" class="Estilo96">PTO CTROL:</td>
    <td width="215"><span class="Estilo93">
      <?=$Puestoxxx?>
    </span></td>
  </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="Estilo93"><hr size="1" class="listado"></td>
  </tr>
</table>
<?
}
if($Detalles10xxx <> "")
{
?>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="30%" valign="top" class="Estilo96">MENSAJE:</td>
    <td width="215">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="2" valign="top" class="Estilo96"><span class="Estilo93">
      <?=$Detalles10xxx?>
      </span></td>
    </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="Estilo93"><hr size="1" class="listado"></td>
  </tr>
</table>
<?
}
?>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="30%" valign="top" class="Estilo96">USUARIO:</td>
    <td width="215"><span class="Estilo93">
      <?=$Usuario10xxx?>
    </span></td>
  </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="Estilo93"><hr size="1" class="listado"></td>
  </tr>
</table>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="10" valign="top" bgcolor="#CCCCCC" class="Estilo96">&nbsp;</td>
  </tr>
</table>
<?
}
?>
</p>






































    </div></td>
  </tr>
</table>

</body>
</html>