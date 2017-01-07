<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

include("conexion.php");
include("PHPPaging.lib.php");
 

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

session_register('anterior-asigna');

$_SESSION['anterior-asigna']	=	$_SERVER['REQUEST_URI']; 


$Usuario		= $_SESSION['Empresa'];

$Placag1			=	$_REQUEST["Placa"];
$Manifiestog1		=	$_REQUEST["Manifiesto"];
$Clienteg1			=	$_REQUEST["Cliente"];
$Agenciag1			=	$_REQUEST["Agencia"];
$Origeng1			=	$_REQUEST["Origen"];
$Destinog1			=	$_REQUEST["Destino"];

		if ($Placag1 <> '' )
		{
				$arry0 				= 	array();
				
				$queryy0			=	"SELECT* FROM  Manifiestos where Placa like '%$Placag1%'" ;
				$resulty0			=	mysql_query($queryy0, $id);
							
				While($rowy0		=	mysql_fetch_array($resulty0))
				{
				$Nromanifiestoy0	=	$rowy0["Nromanifiesto"];
			
				
						$queryyy0			=	"SELECT* FROM  Viajes where Manifiesto = '$Nromanifiestoy0' and Iniciado = 1" ;
						$resultyy0			=	mysql_query($queryyy0, $id);
									
						While($rowyy0		=	mysql_fetch_array($resultyy0))
						{
						$Nromanifiestoyy0	=	$rowyy0["Manifiesto"];
						$arry0[]			=	$Nromanifiestoyy0;
						}
				}
				
					if(empty($arry0))
					{
					$cosult0	 =	" and ( Manifiesto = '')";
					}
					else
					{
					$arry0 		 = 	array_unique($arry0);
					$cosult0	 =	" and ( Manifiesto = ";
					$cosult0	.=	 implode(' or Manifiesto = ',$arry0);
					$cosult0	.=	 ')';
					}
					
		}
		

		if ($Manifiestog1 <> '' )
		{
				$arry1 				= 	array();
				
		
				
						$queryyy1			=	"SELECT* FROM  Viajes where Manifiesto = '$Manifiestog1' and Iniciado = 1" ;
						$resultyy1			=	mysql_query($queryyy1, $id);
									
						While($rowyy1		=	mysql_fetch_array($resultyy1))
						{
						$Nromanifiestoyy1	=	$rowyy1["Manifiesto"];
						$arry1[]			=	$Nromanifiestoyy1;
						}
				
					if(empty($arry1))
					{
					$cosult1	 =	" and ( Manifiesto = '')";
					}
					else
					{
					$arry1 		 = 	array_unique($arry1);
					$cosult1	 =	" and ( Manifiesto = ";
					$cosult1	.=	 implode(' or Manifiesto = ',$arry1);
					$cosult1	.=	 ')';
					}
					
		}
		


		if ($Clienteg1 <> '' )
		{
				$arry2 				= 	array();
				
				$queryy2			=	"SELECT* FROM  Manifiestos where Empresa = '$Clienteg1' " ;
				$resulty2			=	mysql_query($queryy2, $id);
							
				While($rowy2		=	mysql_fetch_array($resulty2))
				{
				$Nromanifiestoy2	=	$rowy2["Nromanifiesto"];
			
				
						$queryyy2			=	"SELECT* FROM  Viajes where Manifiesto = '$Nromanifiestoy2' and Iniciado = 1" ;
						$resultyy2			=	mysql_query($queryyy2, $id);
									
						While($rowyy2		=	mysql_fetch_array($resultyy2))
						{
						$Nromanifiestoyy2	=	$rowyy2["Manifiesto"];
						$arry2[]			=	$Nromanifiestoyy2;
						}
				}
				
					if(empty($arry2))
					{
					$cosult2	 =	" and ( Manifiesto = '')";
					}
					else
					{
					$arry2 		 = 	array_unique($arry2);
					$cosult2	 =	" and ( Manifiesto = ";
					$cosult2	.=	 implode(' or Manifiesto = ',$arry2);
					$cosult2	.=	 ')';
					}
					
		}
		
		
		if ($Agenciag1 <> '' )
		{
				$arry3 				= 	array();
				
				$queryy3			=	"SELECT* FROM  Manifiestos where Sucursal = '$Agenciag1' " ;
				$resulty3			=	mysql_query($queryy3, $id);
							
				While($rowy3		=	mysql_fetch_array($resulty3))
				{
				$Nromanifiestoy3	=	$rowy3["Nromanifiesto"];
			
				
						$queryyy3			=	"SELECT* FROM  Viajes where Manifiesto = '$Nromanifiestoy3' and Iniciado = 1" ;
						$resultyy3			=	mysql_query($queryyy3, $id);
									
						While($rowyy3		=	mysql_fetch_array($resultyy3))
						{
						$Nromanifiestoyy3	=	$rowyy3["Manifiesto"];
						$arry3[]			=	$Nromanifiestoyy3;
						}
				}
				
					if(empty($arry3))
					{
					$cosult3	 =	" and ( Manifiesto = '')";
					}
					else
					{
					$arry3 		 = 	array_unique($arry3);
					$cosult3	 =	" and ( Manifiesto = ";
					$cosult3	.=	 implode(' or Manifiesto = ',$arry3);
					$cosult3	.=	 ')';
					}
					
		}
		


		if ($Origeng1 <> '' )
		{
				$arry4 				= 	array();
				
				$queryy4			=	"SELECT* FROM  Manifiestos where Origen = '$Origeng1' " ;
				$resulty4			=	mysql_query($queryy4, $id);
							
				While($rowy4		=	mysql_fetch_array($resulty4))
				{
				$Nromanifiestoy4	=	$rowy4["Nromanifiesto"];
			
				
						$queryyy4			=	"SELECT* FROM  Viajes where Manifiesto = '$Nromanifiestoy4' and Iniciado = 1" ;
						$resultyy4			=	mysql_query($queryyy4, $id);
									
						While($rowyy4		=	mysql_fetch_array($resultyy4))
						{
						$Nromanifiestoyy4	=	$rowyy4["Manifiesto"];
						$arry4[]			=	$Nromanifiestoyy4;
						}
				}
				
					if(empty($arry4))
					{
					$cosult4	 =	" and ( Manifiesto = '')";
					}
					else
					{
					$arry4 		 = 	array_unique($arry4);
					$cosult4	 =	" and ( Manifiesto = ";
					$cosult4	.=	 implode(' or Manifiesto = ',$arry4);
					$cosult4	.=	 ')';
					}
					
		}
		


		if ($Destinog1 <> '' )
		{
				$arry5 				= 	array();
				
				$queryy5			=	"SELECT* FROM  Manifiestos where Destino = '$Destinog1' " ;
				$resulty5			=	mysql_query($queryy5, $id);
							
				While($rowy5		=	mysql_fetch_array($resulty5))
				{
				$Nromanifiestoy5	=	$rowy5["Nromanifiesto"];
			
				
						$queryyy5			=	"SELECT* FROM  Viajes where Manifiesto = '$Nromanifiestoy5' and Iniciado = 1" ;
						$resultyy5			=	mysql_query($queryyy5, $id);
									
						While($rowyy5		=	mysql_fetch_array($resultyy5))
						{
						$Nromanifiestoyy5	=	$rowyy5["Manifiesto"];
						$arry5[]			=	$Nromanifiestoyy5;
						}
				}
				
					if(empty($arry5))
					{
					$cosult5	 =	" and ( Manifiesto = '')";
					}
					else
					{
					$arry5 		 = 	array_unique($arry5);
					$cosult5	 =	" and ( Manifiesto = ";
					$cosult5	.=	 implode(' or Manifiesto = ',$arry5);
					$cosult5	.=	 ')';
					}
					
		}

$consultar		=	$cosult0.$cosult1.$cosult2.$cosult3.$cosult4.$cosult5;

//echo $consultar;

	if ($consultar <> '')
	{
			$queryrw="SELECT* FROM Viajes where Iniciado = '1' ".$consultar." order by Fechaini desc";
	}
	else
	{
			$queryrw="SELECT* FROM Viajes where Iniciado = '1' order by Id desc";
	}
			$resultrw=mysql_query($queryrw, $id);
			
			While($rowrw=mysql_fetch_array($resultrw))
			{
			$Idw			=$rowrw["Id"];
			$Manifiestow	=$rowrw["Manifiesto"];
			
			
				$querytt="SELECT COUNT(*) as Total FROM Viajes where Manifiesto = '$Manifiestow'" ;
				$resulttt=mysql_query($querytt, $id);
				
				While($rowtt=mysql_fetch_array($resulttt))
				{
				$Totaltt=$rowtt["Total"];
				}
				
					if($Totaltt > 1)
					{
						$SQL1="Delete From Viajes Where Id='$Idw'";
						mysql_query($SQL1);	
					}
		
		
			}


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<script type="text/javascript"> 
function redireccionar()
{   
window.location="<?=$_SERVER['REQUEST_URI']?>"; 
}  
setTimeout("redireccionar()", 60000); 
</script>
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
.TextField {background-color: #FFFFFF;
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
-->
</style>
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

<script language="JavaScript">
function Abrir_ventana (pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, width=500, height=500, top=85, left=300";
window.open(pagina,"",opciones);
}
</script>
</head>

<body>
  <table width="100%" height="90%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td align="right" valign="top"><hr size="1">
<?
	$Fechahoy= date("Y-m-d");	

    $paging = new PHPPaging; 

	if ($consultar <> '')
	{
	$paging->agregarConsulta("SELECT* FROM Viajes where Iniciado = '1' ".$consultar." order by Fechaini desc"); 
	}
	else
	{
	$paging->agregarConsulta("SELECT* FROM Viajes where Iniciado = '1' order by Fechaini desc"); 
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

while($row008 = $paging->fetchResultado())  
{	

$Idn			=$row008["Id"];
$Manifiesto		=$row008["Manifiesto"];
$Remesas		=$row008["Remesas"];
$Planviaje		=$row008["Planviaje"];



		
		
		
		
$color		=	'#FFFFFF';		


$query2cg="UPDATE Guias set Manifiesto = '', Nit = '', Nombre = '', Useract = '', Fechaact = '', Estado = '', Entrego = '', Pago = '', Valor = '', Nrocom = '', Usuarioing = '',  Fechahora  = ''  Where Manifiesto = '$Manifiesto' and Manifiesto <> ''";
$result2cg=mysql_query($query2cg, $id);




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




		$query008e="SELECT* FROM Viajes where  Iniciado = 3" ;
		$result008e=mysql_query($query008e, $id);
		
		While($row008e=mysql_fetch_array($result008e))
		{
		$Manifiestoe		=$row008e["Manifiesto"];
		
		
		$query00812="SELECT* FROM Manifiestos where Nromanifiesto = '$Manifiestoe'" ;
		$result00812=mysql_query($query00812, $id);
	
		While($row00812=mysql_fetch_array($result00812))
		{
		$Placa2			=$row00812["Placa"];
		$Conductor2		=$row00812["Conductor"];
		}
		
		
	
				if($Placa == $Placa2)
				{
	
					$color	=	"#FFD5D6";
					
				}

				//echo $color;
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
		
		
		
		
}


?>
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="<?=$color?>">
          <tr>
            <td width="8%" height="15" class="listado1">&nbsp;
              <?=$Fecha?></td>
            <td width="6%" height="15" class="listado"><span class="listado1">&nbsp;
              <?=$Placa?></span></td>
            <td width="7%" height="15" class="listado"><span class="listado1">&nbsp;
              <?=$Manifiesto?>
            </span></td>
            <td width="20%" height="15" class="listado"><span class="listado1">&nbsp;

              <input name="textfield" type="text" class="TextField" id="textfield" style="width:97%" value="<?=$Nombre2?>">
            </span></td>
            <td width="5%" class="listado1">&nbsp;<?=$pagado?></td>
            <td width="10%" height="15" class="listado"><span class="listado1">&nbsp;
              <?=$Nombre3?>
            </span></td>
            <td width="18%" height="15" class="listado"><span class="listado1">&nbsp;<?=$Nombreorg?></span></td>
            <td width="18%" height="15" class="listado"><span class="listado1">&nbsp;
              <?=$Nomdest?>
            </span></td>
            <td width="8%" align="right" valign="middle" class="listado">
            <a href="asignacionruta.php?Id=<?=$Idn?>"><img src="Images/add.png" width="14" height="14" border="0"></a>  &nbsp;

            
			<a href="javascript:Abrir_ventana('cancelacionviaje.php?Id=<?=$Idn?>')"><img src="Images/delete.png" width="14" height="14" border="0"></a>

            
            
           </td>
          </tr>
        </table>
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td height="2" class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></td>
          </tr>
        </table>
<?
$tiene		=	'';
$pagado		=	'';
$color		=	'#FFFFFF';
$TOTAW		=	'';
}
?>
<table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="30%" height="10" align="left"><img src="Images/icon-asignaciones.png" width="200" height="20"></td>
    <td width="70%" align="right"><?php 
			// Imprimimos algo de información 
			echo "<br><span class='Estilo93'><b>Página ".$paging->numEstaPagina()." de ".$paging->numTotalPaginas()."<span/><br />"; 
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
</table></td>
    </tr>
  </table>
</body>
</html>