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
date_default_timezone_set('America/Bogota');


session_register('anterior-transi');

$_SESSION['anterior-transi']	=	$_SERVER['REQUEST_URI']; 

$_SESSION['enviaje']	=	"";

session_start(); 
$Usuario		= $_SESSION['Empresa'];

$Placag1			=	$_REQUEST["Placa"];
$Manifiestog1		=	$_REQUEST["Manifiesto"];
$Clienteg1			=	$_REQUEST["Cliente"];
$Agenciag1			=	$_REQUEST["Agencia"];
$Origeng1			=	$_REQUEST["Origen"];
$Destinog1			=	$_REQUEST["Destino"];
$Estadog1			=	$_REQUEST["Estado"];



$querycontviaje			=		"SELECT(Id) FROM Viajes order by Id Desc Limit 0,1" ;
$resultcontviaje		=		mysql_query($querycontviaje, $id);

While($rowcontviaje		=		mysql_fetch_array($resultcontviaje))
{
$Totalcontviaje1		=		$rowcontviaje["Id"];
$Totalcontviaje2		=		2000;
$Totalcontviaje			=		$Totalcontviaje1 - $Totalcontviaje2;

//echo "Viajes: ".$Totalcontviaje."<br>";
}

$querycontmani		=		"SELECT(Id) FROM Manifiestos order by Id Desc Limit 0,1" ;
$resultcontmani		=		mysql_query($querycontmani, $id);

While($rowcontmani	=		mysql_fetch_array($resultcontmani))
{
$Totalcontmani1		=		$rowcontmani["Id"];
$Totalcontmani2		=		2000;
$Totalcontmani		=		$Totalcontmani1 - $Totalcontmani2;
}
//echo "Manifiestos: ".$Totalcontmani."<br>";

$querycontreco		=		"SELECT(Id) FROM Recorrido order by Id Desc Limit 0,1" ;
$resultcontreco		=		mysql_query($querycontreco, $id);

While($rowcontreco	=		mysql_fetch_array($resultcontreco))
{
$Totalcontreco1		=		$rowcontreco["Id"];
$Totalcontreco2		=		2000;
$Totalcontreco		=		$Totalcontreco1 - $Totalcontreco2;
}

//echo "Recorrido: ".$Totalcontreco."<br>";

$querycontdesc		=		"SELECT(Id) FROM Descarga order by Id Desc Limit 0,1" ;
$resultcontdesc		=		mysql_query($querycontdesc, $id);

While($rowcontdesc	=		mysql_fetch_array($resultcontdesc))
{
$Totalcontdesc1		=		$rowcontdesc["Id"];
$Totalcontdesc2		=		2000;
$Totalcontdesc		=		$Totalcontdesc1 - $Totalcontdesc2;
}
//echo "Descarga: ".$Totalcontdesc."<br>";

$queryconttiem		=		"SELECT(Id) FROM Tiempos order by Id Desc Limit 0,1" ;
$resultconttiem		=		mysql_query($queryconttiem, $id);

While($rowconttiem	=		mysql_fetch_array($resultconttiem))
{
$Totalconttiem1		=		$rowconttiem["Id"];
$Totalconttiem2		=		2000;
$Totalconttiem		=		$Totalconttiem1 - $Totalconttiem2;
}

//echo "Tiempos: ".$Totalconttiem."<br>";


$queryconttiemp		=		"SELECT(Id) FROM tiempos order by Id Desc Limit 0,1" ;
$resultconttiemp	=		mysql_query($queryconttiemp, $id);

While($rowconttiemp	=		mysql_fetch_array($resultconttiemp))
{
$Totalconttiemp1	=		$rowconttiemp["Id"];
$Totalconttiemp2	=		2000;
$Totalconttiemp		=		$Totalconttiemp1 - $Totalconttiemp2;
}


//echo "tiempos: ".$Totalconttiemp."<br>";


		if ($Placag1 <> '' )
		{
				$arry0 				= 	array();
				
				$queryy0			=	"SELECT* FROM  Manifiestos where Placa like '%$Placag1%' " ;
				$resulty0			=	mysql_query($queryy0, $id);
							
				While($rowy0		=	mysql_fetch_array($resulty0))
				{
				$Nromanifiestoy0	=	$rowy0["Nromanifiesto"];
			
				
						$queryyy0			=	"SELECT* FROM  Viajes where Manifiesto = '$Nromanifiestoy0' and Iniciado = 3" ;
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
				
		
				
						$queryyy1			=	"SELECT* FROM  Viajes where Manifiesto = '$Manifiestog1' and Iniciado = 3" ;
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
			
				
						$queryyy2			=	"SELECT* FROM  Viajes where Manifiesto = '$Nromanifiestoy2' and Iniciado = 3" ;
						$resultyy2			=	mysql_query($queryyy2, $id);
									
						While($rowyy2		=	mysql_fetch_array($resultyy2))
						{
						$Nromanifiestoyy2	=	$rowyy2["Manifiesto"];
						$arry2[]			=	$Nromanifiestoyy2;
						}
				}
				
				
				
				
				
				$arry22 				= 	array();
				
				$queryy22			=	"SELECT* FROM  Remisiones where Empresa = '$Clienteg1' " ;
				$resulty22			=	mysql_query($queryy22, $id);
							
				While($rowy22		=	mysql_fetch_array($resulty22))
				{
				$Nromanifiestoy22	=	$rowy22["Manifiesto"];
			
				
						$queryyy22			=	"SELECT* FROM  Viajes where Manifiesto = '$Nromanifiestoy22' and Iniciado = 3" ;
						$resultyy22			=	mysql_query($queryyy22, $id);
									
						While($rowyy22		=	mysql_fetch_array($resultyy22))
						{
						$Nromanifiestoyy22	=	$rowyy22["Manifiesto"];
						$arry22[]			=	$Nromanifiestoyy22;
						}
				}
				
				
				
				
				
				
				$arry2	=	$arry2 + $arry22;
				
				
				
				
				
				
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
			
				
						$queryyy3			=	"SELECT* FROM  Viajes where Manifiesto = '$Nromanifiestoy3' and Iniciado = 3" ;
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
			
				
						$queryyy4			=	"SELECT* FROM  Viajes where Manifiesto = '$Nromanifiestoy4' and Iniciado = 3" ;
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
			
				
						$queryyy5			=	"SELECT* FROM  Viajes where Manifiesto = '$Nromanifiestoy5' and Iniciado = 3" ;
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
		
		
		if ($Estadog1 <> '' )
		{
				
				$arry6 				= 	array();

				if($Estadog1 == 'Atrasado')
				{
				$queryy6			=	"SELECT* FROM  Estados where Estado = 'Atrasado' or Estado = 'Despausa' or Estado = 'Descarga'" ;
				}
				else
				{
				$queryy6			=	"SELECT* FROM  Estados where Estado = '$Estadog1' " ;
				}
				
				$resulty6			=	mysql_query($queryy6, $id);
							
				While($rowy6		=	mysql_fetch_array($resulty6))
				{
				$Nromanifiestoy6	=	$rowy6["Manifiesto"];
			
				
						$queryyy6			=	"SELECT* FROM  Viajes where Manifiesto = '$Nromanifiestoy6' and Iniciado = 3" ;
						$resultyy6			=	mysql_query($queryyy6, $id);
									
						While($rowyy6		=	mysql_fetch_array($resultyy6))
						{
						$Nromanifiestoyy6	=	$rowyy6["Manifiesto"];
						$arry6[]			=	$Nromanifiestoyy6;
						}
				}
				
					if(empty($arry6))
					{
					$cosult6	 =	" and ( Manifiesto = '')";
					}
					else
					{
					$arry6 		 = 	array_unique($arry6);
					$cosult6	 =	" and ( Manifiesto = ";
					$cosult6	.=	 implode(' or Manifiesto = ',$arry6);
					$cosult6	.=	 ')';
					}
					
		}
		
		
		
$consultar		=	$cosult0.$cosult1.$cosult2.$cosult3.$cosult4.$cosult5.$cosult6;

//echo $consultar;
/*
if($consultar <> '')
{
			$queryt="SELECT COUNT(*) as Viajes FROM Manifiesto where ".$consultar;
			$resultt=mysql_query($queryt, $id);
			
			While($rowt=mysql_fetch_array($resultt))
			{
			$Totalt=$rowt["Totalt"];
			}
}
else
{
			$Totalt = 1;	
}
//echo $consultar;
*/
?>

<html>
<head>

        
        
<script type="text/javascript"> 
function redireccionar()
{   
window.location="<?=$_SERVER['REQUEST_URI']?>"; 
}  
setTimeout("redireccionar()", 60000); 
</script>

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
	font-size: 9px;
	color: #FFF;
}
body {
	background-color: #E3EFF9;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo93 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
}
.listado1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
	color: #000;
}
.textos1 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #009;
	text-align: right;
}
.estimado {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	font-weight: bold;
	color: #090;
}
.TextField {background-color: #DADADA;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
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
.TextFieldlist {background-color: transparent;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 0px solid #FFFFFF;
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
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, width=1050, height=500, top=85, left=300";
window.open(pagina,"",opciones);
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<body>
<table width="100%" height="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="right" valign="top" bgcolor="#E3EFF9"><hr size="1">
      <?
$Fechahoy= date("Y-m-d");	

	
function hms2sec ($hms) 
{
	list($h, $m, $s) = explode (":", $hms);
	$seconds = 0;
	$seconds += (intval($h) * 3600);
	$seconds += (intval($m) * 60);
	$seconds += (intval($s));
	return $seconds;
}			

     $paging = new PHPPaging; 

	if ($consultar <> '')
	{
	$paging->agregarConsulta("SELECT* FROM Viajes where Id > '$Totalcontviaje' and Iniciado = '3' and Estado = '0' ".$consultar." order by Fechaini desc"); 
	}
	else
	{
	$paging->agregarConsulta("SELECT* FROM Viajes where Id > '$Totalcontviaje' and Iniciado = '3' and Estado = '0' order by Fechaini desc"); 
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
$Urgente		=$row008["Urgente"];
$Textourg		=$row008["Textourg"];
$Primerv		=$row008["Primerv"];

	$querycon="SELECT COUNT(*) as Total FROM Recorrido where Id > '$Totalcontreco' and Idviaje = '$Idn' and Estado = '0'" ;
	$resultcon=mysql_query($querycon, $id);
		
	While($rowcon=mysql_fetch_array($resultcon))
	{
	$Totalcon	=	$rowcon["Total"];
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
		
		

		$queryt="SELECT* FROM Tiempos  where Id > '$Totalconttiem' and  Idplan  = '$Planviaje'" ;
		$resultt=mysql_query($queryt, $id);
			
		While($rowt=mysql_fetch_array($resultt))
		{
		$Idtiempo 	=$rowt["Id"];
		$Totalt 	=$rowt["Total"];
		$Iniciot 	=$rowt["Inicio"];
		$Fint 		=$rowt["Fin"];
		
			$horaactual = date("Y-m-d H:i:s");
		
			$query008nyw="SELECT TIMEDIFF('$horaactual','$Iniciot') AS diferencia";

			$result008nyw=mysql_query($query008nyw, $id);
			
			While($row008nyw=mysql_fetch_array($result008nyw))
			{
			$diferencia 		=		$row008nyw["diferencia"];
			}


			$horaesti 	=	 date("Y-m-d ".$Totalt);
	
		
			$fechamia1	=	 $diferencia;
			$fechamia	=	 $diferencia;
			$fechamia	=	 date("Y:m:d ".$fechamia);

			$horaini = $Totalt;
			$horafin = $diferencia;


		}

////////

			$querytww="SELECT* FROM tiempos  where Id > '$Totalconttiemp' and Idplan  = '$Planviaje'" ;
			$resulttww=mysql_query($querytww, $id);
				
			While($rowtww=mysql_fetch_array($resulttww))
			{
			$Idtiempow 	=$rowtww["Id"];
			$Totaltw 	=$rowtww["Total"];
			$Iniciotw 	=$rowtww["Inicio"];
			$Fintw 		=$rowtww["Fin"];
			
			$horaactualw = date("Y-m-d H:i:s");
		
			$query008nywe="SELECT TIMEDIFF('$horaactualw','$Iniciotw') AS diferenciaw";

			$result008nywe=mysql_query($query008nywe, $id);
			
			While($row008nywe=mysql_fetch_array($result008nywe))
			{
			$diferenciae 		=		$row008nywe["diferenciaw"];
			}


			$horaestie 	=	 date("Y-m-d ".$Totaltw);
	
		
			$fechamia1e	=	 $diferenciae;
			$fechamiae	=	 $diferenciae;
			$fechamiae	=	 date("Y:m:d ".$fechamiae);

			$horainie = $Totaltw;
			$horafine = $diferenciae;
			
				if($horainie == 0)
				
				{
					$horainie = 1;
				}

			}
							$horainie = hms2sec ($horainie);
							$horafine = hms2sec ($horafine);
							
							$porcentajex = round(($horafine * 100)/ $horainie);

							if($horaactualw >= $Fintw)
							{
							$porcentajex = 100;
							}
							else
							{
							$porcentajex = $porcentajex;
							}
///////

							
///////		

		$reco	=	0;
		$tam = 1;
		$ini = 0; 
		
				if($Totalcon > 0)
				{
						$query008ny="SELECT* FROM Recorrido  where Id > '$Totalcontreco' and Idviaje = '$Idn' and Estado = 0 order by Pos  LIMIT $ini, $tam";
					    $result008ny=mysql_query($query008ny, $id);
						
						While($row008ny=mysql_fetch_array($result008ny))
						
						{

							$Idpin		 		=		$row008ny["Id"];
							$Tiempoalert1 		=		$row008ny["Tiempoalert"];
							$Mensaje	 		=		$row008ny["Mensaje"];
							$Estado	 			=		$row008ny["Estado"];
							$Tiempo	 			=		$row008ny["Tiempo"];
							$Suma	 			=		$row008ny["Suma"];
							$Reporte	 		=		$row008ny["Reporte"];
							$Pos	 			=		$row008ny["Pos"];
							$porcentaje			=		$row008ny["Porcentaje"];
							$pausa				=		$row008ny["Pausa"];
							$Idpuesto			=		$row008ny["Idpuesto"];
					
						
							$reco ++;



							$horaini = hms2sec ($horaini);
							$horafin = hms2sec ($horafin);
							
							
							$queryof	=	"SELECT COUNT(*) as Totalof FROM Pausar where Idviaje = '$Idn'" ;
							$resultof	=	mysql_query($queryof, $id);
							
							While($rowof=	mysql_fetch_array($resultof))
							{
							$Totalof	=	$rowof["Totalof"];
							}

							$queryofv	=	"SELECT COUNT(*) as Totalof FROM Viajes  where Id > '$Totalcontviaje' and Id = '$Idn' and Pausado = 1" ;
							$resultofv	=	mysql_query($queryofv, $id);
							
							While($rowofv=	mysql_fetch_array($resultofv))
							{
							$Totalofv	=	$rowofv["Totalof"];
							}
							
							if	( $Totalof == 0 and $Totalofv == 1)
							{
								
							$query008nywae			=	"SELECT TIMEDIFF('$horaactual','$Tiempo') AS atraso";
							$result008nywae			=	mysql_query($query008nywae, $id);
							While($row008nywae		=	mysql_fetch_array($result008nywae))
							{
							$atraso					=	$row008nywae["atraso"];
							}
							$atraso= substr($atraso, -8, 5);
							
							$barra	=	"est-3.jpg";
							$color	 =	"#d10b1b";	
							$mensaje =	"Despausa";
							}
							elseif	( $Totalof == 1 and $Totalofv == 0)
							{
							$barra	=	"est-2.jpg";
							$color	 =	"#B7B31C";
							$mensaje =	"Pausado";
							}
							elseif		(  ( $Estado == 0 ) && (  $Tiempoalert1 >=  $horaactual ) )
							{


								$queryp3			=	"SELECT COUNT(*) as Pausa FROM Recorrido where Id > '$Totalcontreco' and  Idviaje = '$Idn' and Pausa = 1" ;
								$resultp3			=	mysql_query($queryp3, $id);
												
								While($rowp3		=	mysql_fetch_array($resultp3))
								{
								$Totalp3			=	$rowp3["Pausa"];
								}
							
									if($Totalp3 == 0)
									{
									
										$barra	 =	"est-1.jpg";
										$color	 =	"#6bb213";
		
										$query008nywa="SELECT TIMEDIFF('$Tiempoalert1','$horaactual') AS diferenciaa";
										$result008nywa=mysql_query($query008nywa, $id);
										While($row008nywa=mysql_fetch_array($result008nywa))
										{
										$estimado		=		$row008nywa["diferenciaa"];
										}
										
											$cuantoshaye			=	strlen($estimado);
											
											if($cuantoshaye == 8)
											{
											$estimado			= 	substr($estimado, -8, 5);
											}
											else
											{
											$estimado			= 	substr($estimado, -9, 6);
											}
										
										
										$mensaje =	"Estimado:  ".$estimado;
										
									
				
									}
									else
									{
										$barra	=	"est-4.jpg";
										$color	 =	"#326b9c";
										
										$query008nywaer			=	"SELECT TIMEDIFF('$horaactual','$Tiempo') AS contacto";
										$result008nywaer		=	mysql_query($query008nywaer, $id);
										While($row008nywaer		=	mysql_fetch_array($result008nywaer))
										{
										$contacto				=	$row008nywaer["contacto"];
										$contacto				= 	substr($contacto, -8, 5);
										}
										
										$mensaje =	"Contac.:  ".$contacto;
									}
								
							}
							
							elseif 	( ( $Estado == 1) )
							{
							$barra	=	"est-2.jpg";
							$color	 =	"#B7B31C";
							$mensaje =	"Pausado";
							}
							
							elseif	( (  $horaactual >=  $Tiempoalert1 ) && (  $horaactual >=  $Tiempo ) && ( $Estado == 0) )
							{
							$barra	=	"est-3.jpg";
							$color	 =	"#d10b1b";
							
							$query008nywae			=	"SELECT TIMEDIFF('$horaactual','$Tiempo') AS atraso";
							$result008nywae			=	mysql_query($query008nywae, $id);
							While($row008nywae		=	mysql_fetch_array($result008nywae))
							{
							$atraso					=	$row008nywae["atraso"];
							}
											$cuantoshaya			=	strlen($atraso);
											
											if($cuantoshaya == 8)
											{
											$atraso			= 	substr($atraso, -8, 5);
											}
											else
											{
											$atraso			= 	substr($atraso, -9, 6);
											}
							
							$mensaje =	"Atrasado:  ".$atraso;
							
							
						}
							else
							{
							$barra	=	"est-4.jpg";
							$color	 =	"#326b9c";
							
							$query008nywaer			=	"SELECT TIMEDIFF('$Tiempo','$horaactual') AS contacto";
							$result008nywaer		=	mysql_query($query008nywaer, $id);
							While($row008nywaer		=	mysql_fetch_array($result008nywaer))
							{
							$contacto				=	$row008nywaer["contacto"];
							$contacto				= 	substr($contacto, -8, 5);
							}
							
							$mensaje =	"Contacto:  ".$contacto;
							

							}
							
							
						}
				}
				else
				{

				$query2b3="SELECT COUNT(*) as Total2b3 FROM Descarga where Id > '$Totalcontdesc' and Idviaje = '$Idn'" ;
				$result2b3=mysql_query($query2b3, $id);
				
				While($row2b3=mysql_fetch_array($result2b3))
				{
				$Total2b3=$row2b3["Total2b3"];
				}
					if($Total2b3 == 1)
					{
						$query001812w="SELECT* FROM Descarga where Id > '$Totalcontdesc' and Idviaje = '$Idn'" ;
						$result001812w=mysql_query($query001812w, $id);
						
						While($row001812w=mysql_fetch_array($result001812w))
						{
						$Tiempoini812w				=	$row001812w["Tiempofin"];
						$Tiempototal812w			=	$row001812w["Tiempototal"];
						}
						
							$query008nywddw="SELECT TIMEDIFF('$horaactual','$Tiempototal812w') AS diferenciaddw";
				
							$result008nywddw=mysql_query($query008nywddw, $id);
							
							While($row008nywddw=mysql_fetch_array($result008nywddw))
							{
							$diferenciaddw 		=		$row008nywddw["diferenciaddw"];
							}
							$cuantoshay			=	strlen($diferenciaddw);
							
							if($cuantoshay == 8)
							{
							$diferenciaddw		= 	substr($diferenciaddw, -8, 5);
							}
							else
							{
							$diferenciaddw		= 	substr($diferenciaddw, -9, 6);
							}

							
							
						
						if($horaactual > $Tiempoini812w)
						{
						$barra	=	"est-3.jpg";
						$color	 =	"#d10b1b";
						$mensaje =	"Descargando: ".$diferenciaddw;
						$porcentaje = 100;
						}
						else
						{
						$barra	 =	"est-1.jpg";
						$color	 =	"#216731";
						$mensaje =	"Descargando: ".$diferenciaddw;	
						$porcentaje = 100;
						}
					}
					else
					{
						$barra	 =	"est-1.jpg";
						$color	 =	"#216731";
						$mensaje =	"Descargando: ".$diferenciaddw;
						$porcentaje = 100;	
					}
				


	}
					
}


if($Totalcita > 0)
{
	$celda	=	'bgcolor="#FCFECB"';
	$celda2	=	'#FCFECB';
}
else
{
	$celda	=	'bgcolor="E3EFF9"';
	$celda2	=	'#E3EFF9';
}

if(($Urgente == 1) || ($Urgente == 2))
{
	$celda	=	'bgcolor="#FF9933"';
	$celda2	=	'#FF9933';
	$TXCS	=	'title="'.$Textourg.'"';
	$TXCS	.=	' alt="'.$Textourg.'"';
}

elseif($Primerv == 1 && $Urgente == 0)
{
	$celda	=	'bgcolor="#c5dd42"';
	$celda2	=	'#c5dd42';
	$TXCS	=	'title="PRIMER VIAJE PARA ESTE CONDUCTOR"';
	$TXCS	.=	' alt="PRIMER VIAJE PARA ESTE CONDUCTOR"';
}
else
{
	$TXCS	=	'';

}

?>
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#E3EFF9" onClick="location.href='opciones-transito.php?Id=<?=$Idn?>'" <?=$TXCS?>>
		
 
          <tr onMouseover="this.bgColor='#BED9F3'"onMouseout="this.bgColor='<?=$celda2?>'" <?=$celda?>>
         
          <td width="6%" height="25" align="left" class="listado1"><?=$Fecha?></td>
          <td width="5%" height="25" align="left" class="listado"><span class="listado1"><?=strtoupper($Placa)?></span></td>
          <td width="7%" height="25" align="left"class="listado"><span class="listado1"><?=$Manifiesto?></span></td>
          <td width="22%" height="25" align="left" class="listado"><span class="listado1"></span><span class="listado1">
            <input name="textfield3" type="text" class="TextFieldlist" id="textfield3" style="width:97%" value="<?=strtoupper($Nombre2)?>" readonly="readonly">
          </span></td>
          <td width="11%" height="25" align="left" class="listado"><span class="listado1"><?=strtoupper($Nombre3)?></span></td>
          <td width="13%" height="25" align="left"  class="listado"><span class="listado1">
            <input name="textfield2" type="text" class="TextFieldlist" id="textfield2" style="width:97%" value="<?=strtoupper($Nombreorg)?>" readonly="readonly">
          </span></td>
          <td width="13%" height="25" align="left" class="listado"><span class="listado1">
            <input name="textfield" type="text" class="TextFieldlist" id="textfield" style="width:97%" value="<?=strtoupper($Nomdest)?>" readonly="readonly">
          </span></td>
          <td width="11%" align="left" class="listado">
          
          <table width="118" border="0" align="left" cellpadding="0" cellspacing="0">
            <tr>
              <td width="70" height="15" align="left" valign="middle" bgcolor="#999999">
              <img src="Images/est-0.jpg" width="<?=$porcentajex?>%" height="2" border="0"><br>
              <img src="Images/<?=$barra?>" width="<?=$porcentaje?>%" height="14" border="0"></td>
              <td width="48" height="15" class="Estilo93">&nbsp;
                &nbsp;
                <?=$porcentaje?> %</td>
            </tr>
          </table></td>
          <td width="10%" align="left" class="estimado" style="color: <?=$color?>">
          <?=$mensaje?></td>
<td width="2%" align="left" class="listado">
<a href="print-plan.php?Id=<?=$Idn?>" target="_blank"><img src="Images/printer.png" width="20" height="20" border="0"> </a>
</td>
</tr>


          




        
        
        
    </table>
      <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="1" class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></td>
        </tr>
      </table>
<?
}
?>
<table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="30%" height="10" align="left"><img src="Images/icon-estados.jpg"></td>
            <td width="70%" align="right"><?php 
			// Imprimimos algo de información 
			echo "<br><span class='Estilo93'><b>Página ".$paging->numEstaPagina()." de ".$paging->numTotalPaginas()."<span/><br />"; 
			echo "</b>Mostrando ".$paging->numRegistrosMostrados()." resultados, del ".$paging->numPrimerRegistro()." al ".$paging->numUltimoRegistro(); 
			echo " de un total de ".$paging->numTotalRegistros()."<br /><br />"; 
		
			?></td>
          </tr>
          <tr>
            <td height="10" colspan="2" align="right">
			
			<?php 
			// Imprimimos la barra de navegación 
			echo "<div class='navigation'>".$paging->fetchNavegacion()."</div>"; 
			?>
</td>
          </tr>
          
        </table>
    </td>
  </tr>
</table>

</body>
</html>