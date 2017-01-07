<? 
include("variables.php"); 

$Idmarc	=$_REQUEST["Idlinea"];
$Idcate	=$_REQUEST["Idcat"];
?>

<link rel="stylesheet" media="all" type="text/css" href="css/ui-lightness/jquery-ui-1.8.6.custom.css" />

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
.Estilo105 {color: #990000; font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold; }
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
.itemselect1 {font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	color: #666;
	text-align: right;
}
.listado {font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
	color: #FFF;
}
.listado1 {font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #FFF;
}
.listado2 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #FFF;
}
.listado3 {font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
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

				
			});
			
			
		</script>
  
  
  <link href="scal.css" media="screen" rel="stylesheet" type="text/css" />


  
  
</head>

<body style="background-color: transparent">
<div class="example-container">
  <pre></pre>
</div>
<table width="100%" height="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top" bgcolor="#F7F7F7"><table width="100%" border="0" bordercolor="#FFFFFF" cellpadding="0" cellspacing="0" background="Images/bg-seleccion.jpg">
        <tr>
          <td width="99%" height="20" align="right" class="itemselect1">REPORTE DE VIAJES </td>
          <td width="1%" align="center" class="itemselect1"></td>
        </tr>
        <tr>
          <td height="5" colspan="2" align="center" class="itemselect1"><form name="form1" method="Get" action="reporte-viajes.php" target="reportvia" style="margin:0">
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="25%" height="35" align="left" bgcolor="#003366" class="listado2">&nbsp; EMPRESA<br>
                  &nbsp;<span class="listado3">
                    <select name="Cliente" class="TextField2" id="Cliente" style="width:90%">
                      <option value="">Todos</option>
                      <?

					$queryx3		=	"SELECT* FROM Empresas order by Nombre" ;
					$resultx3		=	mysql_query($queryx3, $id);
								
					While($rowx3	=	mysql_fetch_array($resultx3))
					{
					$Nombrex3		=	$rowx3["Nombre"];
					$Nitx3			=	$rowx3["Nit"];	
					?>
                      <option value="<?=$Nitx3?>">
                        <?=$Nombrex3?>
                      </option>
                      <?
				}
					?>
                    </select>
                  </span></td>
                <td width="8%" align="left" bgcolor="#003366" class="listado2">MANIFIESTO<br>
                  <input name="Manifiesto" type="text" class="TextField2" id="Manifiesto" style="width:90%"></td>
                <td width="8%" align="left" bgcolor="#003366" class="listado2">PLACA<br>
                  <input name="Placa" type="text" class="TextField2" id="Placa" style="width:90%"></td>
                <td width="8%" align="left" bgcolor="#003366" class="listado2">CEDULA<br>
                  <input name="Cedula" type="text" class="TextField2" id="Cedula" style="width:90%"></td>
                <td width="12%" align="left" bgcolor="#003366" class="listado2">CIU. ORIGEN<br>
                  <select name="Origen" class="TextField2" id="Origen" style="width:90%">
                    <option value="">Todos</option>
                    <?
$queryx2		=	"SELECT Distinct(Nombre) FROM  Municipio order by Nombre" ;
$resultx2		=	mysql_query($queryx2, $id);
			
While($rowx2	=	mysql_fetch_array($resultx2))
{
$Nombrex2 	=	$rowx2["Nombre"];

					?>
                    <option value="<?=$Nombrex2?>">
                      <?=$Nombrex2?>
                      </option>
                    <?
}

?>
                  </select></td>
                <td width="12%" align="left" bgcolor="#003366" class="listado2">CIU. DESTINO<br>
                  <select name="Destino" class="TextField2" id="Destino" style="width:90%">
                    <option value="">Todos</option>
                    <?
$queryx3		=	"SELECT Distinct(Nombre) FROM  Municipio order by Nombre" ;
$resultx3		=	mysql_query($queryx3, $id);
			
While($rowx3	=	mysql_fetch_array($resultx3))
{
$Nombrex3 	=	$rowx3["Nombre"];

					?>
                    <option value="<?=$Nombrex3?>">
                      <?=$Nombrex3?>
                      </option>
                    <?
}

?>
                  </select></td>
                <td width="8%" align="left" bgcolor="#003366" class="listado2">DESDE<br>
                  <input name="Desde" type='text' class="TextField2" id='Desde' onClick='$("calendario5").show();' style="width:90%"/>
                  <div id="calendario5" class="scal tinyscal" style='display:none;'></div>
                  <br></td>
                <td width="8%" align="left" bgcolor="#003366" class="listado2">HASTA<br>
                  <input name="Hasta" type='text' class="TextField2" id='Hasta' onClick='$("calendario3").show();' style="width:90%"/>
                  <div id="calendario3" class="scal tinyscal" style='display:none;'></div></td>
                <td width="8%" align="left" bgcolor="#003366" class="listado2">ESTADO<br>
                  <select name="Estado" class="TextField2" id="Estado" style="width:90%">
                    <option value="" selected>Todos</option>
                    <option value="1">En asignacion</option>
                    <option value="3">En transito</option>
                    <option value="4">Cancelado</option>
                    <option value="5">Finalizado</option>
                    <option value="6">Con problema</option>
                  </select></td>
                <td width="3%" align="left" valign="middle" bgcolor="#003366" class="listado2">.<br>
                  <span class="listado">
                  <input type="image" src="Images/bt-buscar.png">
                  </span></td>
              </tr>
            </table>
            

          </form></td>
        </tr>
    </table><iframe src="reporte-viajes.php" id="reportvia" name="reportvia" width="100%" height="90%" frameborder="No" allowtransparency="true"></iframe></td>
  </tr>
</table>
</body>

