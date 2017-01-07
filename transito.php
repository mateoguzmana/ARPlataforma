<? 
include("variables.php"); 
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
	background-color: #E3EFF9;
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
	text-align: right;
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
.listado {	font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
	color: #FFF;
}
-->
</style>
<link rel="stylesheet" href="lytebox.css" type="text/css" media="screen"/>
</head>

<body style="background-color: transparent">
<table width="100%" height="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top" bgcolor="#E3EFF9"><table width="100%" border="0" bordercolor="#FFFFFF" cellpadding="0" cellspacing="0" background="Images/bg-seleccion.jpg">
      <tr>
        <td width="99%" height="20" align="right" class="itemselect">VEHICULOS EN TRANSITO

        </td>
        <td width="1%" align="center" class="itemselect"></td>
        </tr>
      <tr>
        <td height="5" colspan="2" align="center" class="itemselect"><form name="form1" method="Get" action="listaentransito.php" target="transi" style="margin:0">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="6%" height="35" align="left" bgcolor="#003366" class="listado">&nbsp; INICIO</td>
            <td width="5%" align="left" bgcolor="#003366" class="listado">PLACA<br>
              <input name="Placa" type="text" class="TextField2" id="Placa" style="width:90%"></td>
            <td width="7%" align="left" bgcolor="#003366" class="listado">MANIFIESTO<br>
              <input name="Manifiesto" type="text" class="TextField2" id="Manifiesto" style="width:90%"></td>
            <td width="22%" align="left" bgcolor="#003366" class="listado">CLIENTE<br>
              <select name="Cliente" class="TextField2" id="Cliente" style="width:90%">
                <option value="">Todos</option>

<?


$arrx1 			= 	array();
$arrxe 			= 	array();
$arrxt 			= 	array();
$queryx1		=	"SELECT* FROM  Viajes where Iniciado = '3' order by Fechaini" ;
$resultx1		=	mysql_query($queryx1, $id);
			
While($rowx1	=	mysql_fetch_array($resultx1))
{
$Manifiestox1	=	$rowx1["Manifiesto"];

/*
	$queryx2		=	"SELECT* FROM  Manifiestos where Nromanifiesto = '$Manifiestox1'" ;
	$resultx2		=	mysql_query($queryx2, $id);
				
	While($rowx2	=	mysql_fetch_array($resultx2))
	{
	$Empresax2		=	$rowx2["Empresa"];
	$arrx1[]		=	$Empresax2;
	
	}
*/	
	$queryx2e		=	"SELECT* FROM  Remisiones where Manifiesto = '$Manifiestox1'" ;
	$resultx2e		=	mysql_query($queryx2e, $id);
				
	While($rowx2e	=	mysql_fetch_array($resultx2e))
	{
	$Empresax2e	=	$rowx2e["Empresa"];
	
	$arrxe[]		=	$Empresax2e;
	
	}

}
$sumaarrays 	=	 $arrxe;
				
				$arrx1 = array_unique($sumaarrays);
				
				
				foreach ($arrx1 as $clavex1=>$valorx1)   
				{  
					$queryx3		=	"SELECT* FROM Empresas where Nit = '$valorx1' order by Nombre" ;
					$resultx3		=	mysql_query($queryx3, $id);
								
					While($rowx3	=	mysql_fetch_array($resultx3))
					{
					$Nombrex3		=	$rowx3["Nombre"];
					$Nitx3			=	$rowx3["Nit"];
					
					//$arrxt 			= array( $Idx3 => array('Nit' => $Nitx3,'Nombre' => $Nombrex3)); 

				?>
                
                <option value="<?=$Nitx3?>"> <?=$Nombrex3?></option>
                
                <?

					}
				}				


					?>
              </select></td>
            <td width="10%" align="left" bgcolor="#003366" class="listado">AGENCIA<br>
              <select name="Agencia" class="TextField2" id="Agencia" style="width:90%">
                <option value="">Todos</option>
                <?
$arrxx1 = 	array();

$queryxx1		=	"SELECT* FROM  Viajes where Iniciado = '3' order by Fechaini" ;
$resultxx1		=	mysql_query($queryxx1, $id);
			
While($rowxx1	=	mysql_fetch_array($resultxx1))
{
$Manifiestoxx1	=	$rowxx1["Manifiesto"];

		$queryxx2		=	"SELECT* FROM  Manifiestos where Nromanifiesto = '$Manifiestoxx1'" ;
		$resultxx2		=	mysql_query($queryxx2, $id);
					
		While($rowxx2	=	mysql_fetch_array($resultxx2))
		{
		$Sucursalxx2	=	$rowxx2["Sucursal"];
		
		$arrxx1[]		=	$Sucursalxx2;
		
		}
		
}				
				$arrxx1 = array_unique($arrxx1); 
				foreach ($arrxx1 as $clavexx1=>$valorxx1)   
				{   
			
  

					$querym2		=	"SELECT* FROM Agencias where Cod = '$valorxx1' " ;
					$resultm2		=	mysql_query($querym2, $id);
								
					While($rowm2	=	mysql_fetch_array($resultm2))
					{
					$Nombrem2	=	$rowm2["Nombre"];
					$Nitm2		=	$rowm2["Cod"];	
					?>
                <option value="<?=$Nitm2?>">
                  <?=$Nombrem2?>
                  </option>
                <?
					}
				}

?>
              </select></td>
            <td width="13%" align="left" bgcolor="#003366" class="listado">ORIGEN<br>
              <select name="Origen" class="TextField2" id="Origen" style="width:90%">
                <option value="">Todos</option>
                <?
$arrxxx1 		= 	array();
$queryxxx1		=	"SELECT* FROM  Viajes where Iniciado = '3' order by Fechaini" ;
$resultxxx1		=	mysql_query($queryxxx1, $id);
			
While($rowxxx1	=	mysql_fetch_array($resultxxx1))
{
$Manifiestoxxx1	=	$rowxxx1["Manifiesto"];

		$queryxxx2		=	"SELECT* FROM  Manifiestos where Nromanifiesto = '$Manifiestoxxx1'" ;
		$resultxxx2		=	mysql_query($queryxxx2, $id);
					
		While($rowxxx2	=	mysql_fetch_array($resultxxx2))
		{
		$Origenxxx2		=	$rowxxx2["Origen"];
		$arrxxx1[]		=	$Origenxxx2;
		}
}
				$arrxxx1 = array_unique($arrxxx1); 
				foreach ($arrxxx1 as $clavexxx1=>$valorxxx1)   
				{   
				
					$querym3		=	"SELECT* FROM Municipio where Cod = '$valorxxx1' " ;
					$resultm3		=	mysql_query($querym3, $id);
								
					While($rowm3	=	mysql_fetch_array($resultm3))
					{
					$Nombrem3	=	$rowm3["Nombre"];
					$Nitm3		=	$rowm3["Cod"];	
					?>
                <option value="<?=$Nitm3?>">
                  <?=$Nombrem3?>
                  </option>
                <?
					}
				}

?>
              </select></td>
            <td width="13%" align="left" bgcolor="#003366" class="listado">DESTINO<br>
              <select name="Destino" class="TextField2" id="Destino" style="width:90%">
                <option value="">Todos</option>
                <?
$arrxxxx1 		= 	array();
$queryxxxx1		=	"SELECT* FROM  Viajes where Iniciado = '3' order by Fechaini" ;
$resultxxxx1	=	mysql_query($queryxxxx1, $id);
			
While($rowxxxx1	=	mysql_fetch_array($resultxxxx1))
{
$Manifiestoxxxx1=	$rowxxxx1["Manifiesto"];

		$queryxxxx2		=	"SELECT* FROM  Manifiestos where Nromanifiesto = '$Manifiestoxxxx1'" ;
		$resultxxxx2	=	mysql_query($queryxxxx2, $id);
					
		While($rowxxxx2	=	mysql_fetch_array($resultxxxx2))
		{
		$Destinoxxxx2	=	$rowxxxx2["Destino"];
		$arrxxxx1[]		=	$Destinoxxxx2;
		}
}	
				$arrxxxx1 = array_unique($arrxxxx1); 
				foreach ($arrxxxx1 as $clavexxxx1=>$valorxxxx1)   
				{ 
					$querym4		=	"SELECT* FROM Municipio where Cod = '$valorxxxx1' " ;
					$resultm4		=	mysql_query($querym4, $id);
								
					While($rowm4	=	mysql_fetch_array($resultm4))
					{
					$Nombrem4	=	$rowm4["Nombre"];
					$Nitm4		=	$rowm4["Cod"];	
					?>
                <option value="<?=$Nitm4?>">
                  <?=$Nombrem4?>
                  </option>
                <?
					}
				}

?>
              </select></td>
            <td width="11%" align="left" bgcolor="#003366" class="listado">ESTADO<br>
              <select name="Estado" class="TextField2" id="Estado" style="width:90%">
                <option value="" selected>Todos</option>
                <option value="Estimado">Normal</option>
                <option value="Pausado">Pausado</option>
                <option value="Contacto">Contactando</option>
                <option value="Atrasado">Atrasado</option>
                <option value="Descargando">Descargando</option>
              </select></td>
            <td width="10%" align="left" valign="bottom" bgcolor="#003366" class="listado"><input type="image" src="Images/bt-buscar.png"></td>
            <td width="2%" align="left" valign="bottom" bgcolor="#003366" class="listado">&nbsp;</td>
          </tr>
        </table>
        
</form></td>
      </tr>
    </table>      <iframe src="listaentransito.php" id="transi"  name="transi" width="100%" height="91%" frameborder="No" allowtransparency="true"></iframe></td>
  </tr>
</table>
</body>

