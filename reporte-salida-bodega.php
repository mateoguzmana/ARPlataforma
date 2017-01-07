<? 
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}


?>
<style type="text/css">
<!--
body {
	SCROLLBAR-FACE-COLOR:#F3F3F3;
	SCROLLBAR-HIGHLIGHT-COLOR: #CECECE;
	SCROLLBAR-SHADOW-COLOR: #CECECE;
	SCROLLBAR-3DLIGHT-COLOR: #F3F3F3;
	SCROLLBAR-ARROW-COLOR: #CECECE;
	SCROLLBAR-TRACK-COLOR: #CECECE;
	SCROLLBAR-DARKSHADOW-COLOR: #CECECE;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
} 
.itemselect {	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	color: #006;
	text-align: left;
}
.Estilo1 {color: #E1E1E1;
	font-size: 10px;
}
.Estilo45 {font-size: 12px;
	color: #666666;
	font-family: Helvetica;
}
.Estilo52 {font-size: 12px; color: #727268; font-family: Helvetica; font-weight: bold; }
.Estilo96 {font-size: 11px}
.TextField {background-color: #F3F3F3;
color: #4B4B4B;
font-size: 9pt;
font-family: arial;
border : 1px solid #C6C5C4;
}
.TextField1 {background-color: #F3F3F3;
color: #4B4B4B;
font-size: 9pt;
font-family: arial;
border : 1px solid #C6C5C4;
}
.itemselect {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	color: #666;
	text-align: left;
}
.Estilo32 {font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: #000000; }
.Estilo73 {font-size: 12px; font-weight: bold; }
.Estilo97 {font-size: 12px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
.TextField2 {background-color: #DADADA;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.Estilo105 {
	color: #9F0;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
}
.Estilo115 {font-size: 9px}
.Estilo117 {font-size: 11px}
.Estilo92 {	font-size: 18px;
	color: #154994;
	font-weight: bold;
	font-family: Geneva, Arial, Helvetica, sans-serif;
}
.Estilo93 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.Estilo94 {font-size: 12px}
.Estilo961 {color: #333333}
.TextField21 {background-color: #BCBCBC;
color: #333333;
font-size: 8pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.itemselect1 {font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	color: #006;
	text-align: left;
}
.itemselect1 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	color: #666;
	text-align: right;
}
.listado {font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
	color: #FFF;
}
.listado1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #FFF;
}
.listado2 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #FFF;
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


<link rel="stylesheet" media="all" type="text/css" href="css/ui-lightness/jquery-ui-1.8.6.custom.css" />
<script type="text/javascript"src="js/jquery.min.js"></script>

		<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.6.custom.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-timepicker-addon.js"></script>
        


		<script type="text/javascript">
			
			
			$(function(){
				
		
				$('.example-container > pre').each(function(i){
					eval($(this).text());
					$('#Desde').datepicker();
				});

				$('.example-container > pre').each(function(i){
					eval($(this).text());
					$('#Hasta').datepicker();
				});
				
				$('.example-container > pre').each(function(i){
					eval($(this).text());
					$('#Fin').datepicker();
				});
				
				$('.example-container > pre').each(function(i){
					eval($(this).text());
					$('#Ffac').datepicker();
				});
				
			});
			
			
		</script>
        
        


<style type="text/css">
<!--
a:link {
	color: #0F9;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #0F9;
}
a:hover {
	text-decoration: none;
	color: #FFF;
}
a:active {
	text-decoration: none;
	color: #FFF;
}
-->
</style>
<link rel="stylesheet" href="lytebox.css" type="text/css" media="screen"/>
<script type="text/javascript" language="javascript" src="lytebox.js"></script>

</head>

<body style="background-color: transparent">
<div class="example-container">
  <pre></pre>
</div>
<table width="100%" height="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="left" valign="top" bgcolor="#F7F7F7"><table width="100%" border="0" bordercolor="#FFFFFF" cellpadding="0" cellspacing="0" background="Images/bg-seleccion.jpg">
      <tr>
        <td width="99%" height="20" align="right" class="itemselect1">REPORTE BOLETAS </td>
        <td width="1%" align="center" class="itemselect1"></td>
      </tr>
      <tr>
        <td height="5" colspan="2" align="center" class="itemselect1"><form name="form1" method="Get" action="lista-salidas-bodega-new.php" target="sellos" style="margin:0">
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="10%" height="35" bgcolor="#003366" class="listado1">N. GUIA<br>
                <span class="listado2">
                  <input name="Guia" type="text" class="TextField2" id="Guia" style="width:95%">
                </span></td>
              <td width="10%" bgcolor="#003366" class="listado1">N. REMESA<br>
                <span class="listado2">
                <input name="Nro" type="text" class="TextField2" id="Nro" style="width:95%">
                </span></td>
              <td width="30%" bgcolor="#003366" class="listado1">CONDUCTOR<br>
                <span class="listado2">
                  <select name="Usuario" class="TextField2" id="Usuario" style="width:95%">
                    <option value="">Todos</option>
  <?
include("conexion.php");

$queryx3		=	"SELECT* FROM Conductores order by Nombrefull" ;
$resultx3		=	mysql_query($queryx3, $id);
			
While($rowx3	=	mysql_fetch_array($resultx3))
{
$Nombrecond			=	$rowx3["Nombrefull"];
$Cedulacondcond		=	$rowx3["Cedula"];
?>
                    
                    <option value="<?=$Cedulacondcond?>"> <?=utf8_decode($Nombrecond)?></option>
<?
}
?>
                    </select>
                </span></td>
              <td width="15%" bgcolor="#003366" class="listado1">ESTADO<br>
                <select name="Estado" class="TextField2" id="Estado" style="width:95%">
                  <option  value="" selected>Todos</option>
                  <option value="1">EN BODEGA</option>
                  <option value="2">EN REPARTO</option>
                  <option value="3">EN DEVOLUCION</option>
                  <option value="4">FINALIZADO </option>

                </select></td>
              <td width="15%" bgcolor="#003366" class="listado1">F. ASIGNACION<br>
                <span class="listado2">
                  <input name="Desde" type="text" class="TextField2" id="Desde" style="width:95%"  onclick = "this.value=''">
                </span></td>
              <td width="15%" align="left" valign="middle" bgcolor="#003366" class="listado1">F. FIN<span class="listado2">ALIZA
                  <input name="Fin" type="text" class="TextField2" id="Fin" style="width:95%"  onclick = "this.value=''">
              </span></td>
              <td width="5%" align="left" valign="bottom" bgcolor="#003366" class="listado1"><span class="listado2"><span class="listado">
                <input type="image" src="Images/bt-buscar.png">
              </span></span></td>
            </tr>
          </table>
        </form></td>
      </tr>
    </table>

     	<iframe src="lista-salidas-bodega-new.php" id="sellos" name="sellos" width="100%" height="90%" frameborder="No" allowtransparency="true"></iframe>

    </td>
  </tr>
</table>
</body>

