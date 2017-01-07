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

session_register('anterior-guias');
$_SESSION['anterior-guias']	=	$_SERVER['REQUEST_URI']; 


include("PHPPaging.lib.php");



include("conexion.php");


$Usuarior			= 	$_SESSION['Empresa'];
$Fechahoy			= 	date("Y-m-d");


$Nro				=	$_REQUEST["Nro"];
$Nro 				=   str_replace(" ","",$Nro);
$Usuario			=	$_REQUEST["Usuario"];
$Estado				=	$_REQUEST["Estado"];
$Desde				=	$_REQUEST["Desde"];
$Fin				=	$_REQUEST["Fin"];
$Guia				=	$_REQUEST["Guia"];






		if ($Guia <> '' )
		{
				
				
				$arry0 				= 	array();
				
				$queryy0			=	"SELECT* FROM Controlbox where Guia like '%$Guia%' " ;
				$resulty0			=	mysql_query($queryy0, $id);
							
				While($rowy0		=	mysql_fetch_array($resulty0))
				{
				$Nromanifiestoy0	=	$rowy0["Id"];

				$arry0[]			=	$Nromanifiestoy0;

				}
				
					if(empty($arry0))
					{
					$cosult0	 =	" and ( Id = '')";
					}
					else
					{
					$arry0 		 = 	array_unique($arry0);
					$cosult0	 =	" and ( Id = ";
					$cosult0	.=	 implode(' or Id = ',$arry0);
					$cosult0	.=	 ')';
					}
					
		}
















		if ($Nro <> '' )
		{
				
				
				$arry1 				= 	array();
				
				$queryy1			=	"SELECT* FROM Controlbox where Id = '$Nro' " ;
				$resulty1			=	mysql_query($queryy1, $id);
							
				While($rowy1		=	mysql_fetch_array($resulty1))
				{
				$Nromanifiestoy1	=	$rowy1["Id"];

				$arry1[]			=	$Nromanifiestoy1;

				}
				
					if(empty($arry1))
					{
					$cosult1	 =	" and ( Id = '')";
					}
					else
					{
					$arry1 		 = 	array_unique($arry1);
					$cosult1	 =	" and ( Id = ";
					$cosult1	.=	 implode(' or Id = ',$arry1);
					$cosult1	.=	 ')';
					}
					
		}
		




		
		if ($Usuario <> '' )
		{
				
				
				$arry4 				= 	array();
				
				$queryy4			=	"SELECT* FROM  Controlbox where  Conductor = '$Controlbox'  " ;
				$resulty4			=	mysql_query($queryy4, $id);
							
				While($rowy4		=	mysql_fetch_array($resulty4))
				{
				$Nromanifiestoy4	=	$rowy4["Id"];

				$arry4[]			=	$Nromanifiestoy4;

				}
				
					if(empty($arry4))
					{
					$cosult4	 =	" and ( Id = '')";
					}
					else
					{
					$arry4 		 = 	array_unique($arry4);
					$cosult4	 =	" and ( Id = ";
					$cosult4	.=	 implode(' or Id = ',$arry4);
					$cosult4	.=	 ')';
					}
					
		}
		
		



		






		
		if ($Desde <> '' )
		{
				
				
				$arry5 				= 	array();
				
				$queryy5			=	"SELECT* FROM  Controlbox where  SUBSTRING(Fechaasigna,1,10) = '$Desde'  " ;
				$resulty5			=	mysql_query($queryy5, $id);
							
				While($rowy5		=	mysql_fetch_array($resulty5))
				{
				$Nromanifiestoy5	=	$rowy5["Id"];

				$arry5[]			=	$Nromanifiestoy5;

				}
				
					if(empty($arry5))
					{
					$cosult5	 =	" and ( Id = '')";
					}
					else
					{
					$arry5 		 = 	array_unique($arry5);
					$cosult5	 =	" and ( Id = ";
					$cosult5	.=	 implode(' or Id = ',$arry5);
					$cosult5	.=	 ')';
					}
					
		}




		






		
		if ($Fin <> '' )
		{
				
				
				$arry6 				= 	array();
				
				$queryy6			=	"SELECT* FROM  Controlbox where  SUBSTRING(Fechafin,1,10) = '$Fin'  " ;
				$resulty6			=	mysql_query($queryy6, $id);
							
				While($rowy6		=	mysql_fetch_array($resulty6))
				{
				$Nromanifiestoy6	=	$rowy6["Id"];

				$arry6[]			=	$Nromanifiestoy6;

				}
				
					if(empty($arry6))
					{
					$cosult6	 =	" and ( Id = '')";
					}
					else
					{
					$arry6 		 = 	array_unique($arry6);
					$cosult6	 =	" and ( Id = ";
					$cosult6	.=	 implode(' or Id = ',$arry6);
					$cosult6	.=	 ')';
					}
					
		}






		
		if ($Estado <> '' )
		{
			
								if($Estado == 1)
								{
									
									
									
									
									
									$arry10 				= 	array();
									
									$queryy10			=	"SELECT* FROM Controlbox where Leida = 1 and Finaliza = 1  and Asignado = 0 and Devol = 0  and Fin = 0 " ;
									$resulty10			=	mysql_query($queryy10, $id);
												
									While($rowy10		=	mysql_fetch_array($resulty10))
									{
									$Nromanifiestoy10	=	$rowy10["Id"];

									$arry10[]			=	$Nromanifiestoy10;

					
									}
									
									
								}
								elseif($Estado == 2)
								{
									
									
									$arry10 				= 	array();
									
									$queryy10			=	"SELECT* FROM Controlbox where Leida = 1 and Finaliza = 1  and Asignado = 1 and Devol = 0  and Fin = 0 " ;
									$resulty10			=	mysql_query($queryy10, $id);
												
									While($rowy10		=	mysql_fetch_array($resulty10))
									{
									$Nromanifiestoy10	=	$rowy10["Id"];

									$arry10[]			=	$Nromanifiestoy10;

					
									}

					

									
									
								}
								elseif($Estado == 3)
								{
									
									
									$arry10 				= 	array();
									
									$queryy10			=	"SELECT* FROM Controlbox where Leida = 1 and Finaliza = 1  and Asignado = 1 and Devol = 1  and Fin = 0 " ;
									$resulty10			=	mysql_query($queryy10, $id);
												
									While($rowy10		=	mysql_fetch_array($resulty10))
									{
									$Nromanifiestoy10	=	$rowy10["Id"];

									$arry10[]			=	$Nromanifiestoy10;

									}
									
									
								}
								elseif($Estado == 4)
								{
									
									
									$arry10 				= 	array();
									
									$queryy10			=	"SELECT* FROM Controlbox where Leida = 1 and Finaliza = 1  and Asignado = 1 and Devol <> 1  and Fin = 1 " ;
									$resulty10			=	mysql_query($queryy10, $id);
												
									While($rowy10		=	mysql_fetch_array($resulty10))
									{
									$Nromanifiestoy10	=	$rowy10["Id"];

									$arry10[]			=	$Nromanifiestoy10;

									}
									
									
								}


								
								
								

										
										if(empty($arry10))
										{
										$cosult9	 =	" and ( Id = '')";
										}
										else
										{
										$arry10 	 = 	array_unique($arry10);
										$cosult10	 =	" and ( Id = ";
										$cosult10	.=	 implode(' or Id = ',$arry10);
										$cosult10	.=	 ')';
										}
										
										
										
								
								
								
		}
		
		


$consultar		=	$cosult0.$cosult1.$cosult2.$cosult3.$cosult4.$cosult5.$cosult6.$cosult7.$cosult8.$cosult9.$cosult10;
//echo $consultar;

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
.alert {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	color: #333;
	text-align: center;
}
.listado {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #FFF;
}
body {
	background-color: #F8F8F8;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo93 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.listado1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
	color: #000;
}
.textos1 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #009;
	text-align: right;
}
.TextField {background-color: #F8F8F8;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.listado2 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #FFF;
}
div.navigation { 
    background-color: #eee; 
    border: 1px solid #ccc; 
    margin: 2px auto; 
    text-align: center; 
    padding: 9px 5px; 
    white-space: nowrap; 
    font: 12px Arial; 
} 
span.navthis { 
    padding: 3px 8px; 
    background-color: #eee; 
    color: #FF7F00; 
    font-weight: bold; 
    font-size: 13px; 
} 
a.nav { 
    padding: 4px 6px; 
    color: #888; 
    text-decoration: none; 
} 
a.nav:hover { 
    padding: 3px 6px; 
    color: #000; 
    background-color: #FFC68C; 
    border: 1px solid #FFA851; 
}

.paginar{
margin-top: 5px;
}
 
.paginar .pactiva a{
padding-top: 2px;
padding-right: 6px;
padding-bottom: 2px;
padding-left: 6px;
font-family: verdana;
font-size: 11px;
color: #356AA0;
border: 1px solid #CCCCCC;
font-weight: bold;
background-color: #f4f4f4;
}
 
.paginar .pactiva a:hover{
text-decoration: none;
border: 1px solid #356AA0;
background-color: #FFFFFF;
}

.paginar .pactiva2 a{
padding-top: 2px;
padding-right: 6px;
padding-bottom: 2px;
padding-left: 6px;
font-family: verdana;
font-size: 11px;
color: #356AA0;
border: 1px solid #CCCCCC;
font-weight: bold;
background-color: #47678D;
color:#FFF;
width:250px;
}
 
.paginar .pactiva2 a:hover{
text-decoration: none;
border: 1px solid #356AA0;
background-color: #FFFFFF;
color:#47678D;
width:250px;
}

 
.paginar .pnumero{
padding-top: 2px;
padding-right: 6px;
padding-bottom: 2px;
padding-left: 6px;
font-family: verdana;
font-size: 11px;
font-weight: bold;
color: #356AA0;
background-color: #FFFFFF;
border: 1px solid #356AA0;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}

-->
</style>


<link rel="stylesheet" href="lytebox.css" type="text/css" media="screen"/>
<script type="text/javascript" language="javascript" src="lytebox.js"></script>
</head>

<body>


<table width="100%" height="90%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td align="right" valign="top"><hr size="1">
      
      
<?
		$Fechahoy= date("Y-m-d");	

    	$paging = new PHPPaging; 

if(empty($consultar))
{
		$paging->agregarConsulta("SELECT* FROM Controlbox where Finaliza = 1  order by Fechaasigna asc"); 
}
else
{
		$paging->agregarConsulta("SELECT* FROM Controlbox where Finaliza = 1 ".$consultar."  order by Fechaasigna asc"); 
}


        $paging->porPagina(20);  
         
        // Estableciendo las páginas adyacentes  
        $paging->paginasAntes(4, 10, 30);  
        $paging->paginasDespues(4, 10, 30);  
         
        // Estableciando el estilo de la clase 
        $paging->linkClase('nav');  
         
        // Estableciendo el separador general 
        $paging->linkSeparador(false); //Significa que no habrá separacion 
         
        // Separador especial 
        $paging->linkSeparadorEspecial('...'); 
         
        // Ingresando un ancla 
        $paging->linkAgregar('#estados');  
         
        // Personalizando el título de los links 
        $paging->linkTitulo('Página %1$s: Ver registros del %2$s al %3$s (Total: %4$s)'); 
         
        // Cambiando el texto hacia la primera y última páginas  
        $paging->mostrarPrimera("|<", true);  
        $paging->mostrarUltima(">|", true);  
         
        // Quitando el link hacia las páginas anterior y siguiente 
        $paging->mostrarAnterior(false); 
        $paging->mostrarSiguiente(false);  
         
        // Cambiando el texto de la referencia a la página actual 
        $paging->mostrarActual("<span class=\"navthis\">{n}</span>"); 
         
        // Cambiando el nombre de la variable  
        $paging->nombreVariable("verPagina"); 
             
        // Ejecutamos la paginación 
        $paging->ejecutar();   

while($rowresul = $paging->fetchResultado())  
{	

$Idresul				=$rowresul["Id"];
$Nombreconductor		=utf8_encode($rowresul["Nombreconductor"]);	
$Fechaasigna			=$rowresul["Fechaasigna"];				
$Fechafin				=$rowresul["Fechafin"];			
$Devol					=$rowresul["Devol"];
$Fin					=$rowresul["Fin"];
$Asignado				=$rowresul["Asignado"];
$Comprobante			=$rowresul["Comprobante"];
$Guie					=$rowresul["Guia"];

if(empty($Nombreconductor))
{
$Nombreconductor	=	'SIN ASIGNAR';	
}
else
{
$Nombreconductor	=	$Nombreconductor;	
}
									
									
									


if($Devol == 1 && $Fin == 0 && $Asignado == 1)
{
	

								$queryA		="SELECT* FROM Devoluciones where Nro = '$Idresul'  " ;
								$resultA	=mysql_query($queryA, $id);
								
								while($rowA	=mysql_fetch_array($resultA))
								{
								$Motivo		=$rowA["Motivo"];
								}
								
$Estadio	=	'DEVOLUCION <span style="color: #F00; font-size: 8px;">('.$Motivo.')</span>';

}									
elseif($Devol <> 1 && $Fin == 0 && $Asignado == 1 )
{
$Estadio	=	'EN REPARTO';	
}
elseif($Devol <> 1 && $Fin == 1 && $Asignado == 1 )
{
$Estadio	=	'FINALIZADO';	
}									
elseif($Devol == 0 && $Fin == 0 && $Asignado == 0 )
{
$Estadio	=	'EN BODEGA';	
}
elseif($Devol > 1 && $Fin == 0 && $Asignado == 0 )
{
$Estadio	=	'EN BODEGA (D)';	
}									












?>
      
      
      
      
      
      
      
      
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="<?=$cole?>" onMouseover="this.bgColor='#BED9F3'"onMouseout="this.bgColor='<?=$cole?>'">
          <tr>
            <td width="10%" height="15" class="listado1">&nbsp;<span class="listado1"><?=$Guie?></span></td>
            <td width="10%" class="listado1"><?=$Idresul?></td>
            <td width="30%" height="15" class="listado"><span class="listado1"> <input name="textfield" type="text" class="TextField" id="textfield" style="width:98%" value="<?=$Nombreconductor?>" readonly="readonly">
            </span></td>
            <td width="15%" class="listado1"><?=$Estadio?>
            </td>
            <td width="15%" class="listado"><span class="listado1"><?=$Fechaasigna?>
            </span></td>
            <td width="15%" class="listado"><span class="listado1">&nbsp;<?=$Fechafin?></span></td>
            <td width="5%" align="center" class="listado">
<?
if($Comprobante == 1)
{
?>
            
            <a href="comprobantes/comprobantes/<?=$Idresul?>.jpg" target="_blank"><img src="Images/add.png" width="15" height="15" border = "0"></a>
<?
}
?> 
            
            </td>
          </tr>
        </table>
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td height="2" class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></td>
          </tr>
        </table>
        
<?
$Motivo					='';
$Idresul				='';
$Nombreconductor		='';
$Fechaasigna			='';				
$Fechafin				='';
$Devol					='';
$Fin					='';
$Asignado				='';
$Estadio				='';


}
?>
<table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="30%" height="10" align="left">&nbsp;</td>
    <td width="70%" align="right"><?php 
			// Imprimimos algo de información 
			echo "<br><span class='Estilo93'><b>Pagina ".$paging->numEstaPagina()." de ".$paging->numTotalPaginas()."<span/><br />"; 
			echo "</b>Mostrando ".$paging->numRegistrosMostrados()." resultados, del ".$paging->numPrimerRegistro()." al ".$paging->numUltimoRegistro(); 
			echo " de un total de ".$paging->numTotalRegistros()."<br /><br />"; 
		
			?></td>
  </tr>
  <tr>
    <td height="10" colspan="2" align="right"><?php 
			// Imprimimos la barra de navegación 
			echo "<div class='navigation'>".$paging->fetchNavegacion()."</div>"; 
			?></td>
  </tr>
</table>


</table>
      </body>
</html>