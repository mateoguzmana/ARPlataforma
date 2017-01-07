<?
include("conexion.php");
include("PHPPaging.lib.php");


header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

date_default_timezone_set('America/Bogota');

session_start(); 
$Usuario			= $_SESSION['Empresa'];

session_register('anterior-reportviaj');

$_SESSION['anterior-reportviaj']	=	$_SERVER['REQUEST_URI']; 

$Clienteg1			=	$_REQUEST["Cliente"];
$Manifiestog1		=	$_REQUEST["Manifiesto"];
$Placag1			=	$_REQUEST["Placa"];
$Origeng1			=	$_REQUEST["Origen"];
$Destinog1			=	$_REQUEST["Destino"];
$Desdeg1			=	$_REQUEST["Desde"];
$Hastag1			=	$_REQUEST["Hasta"];
$Estadog1			=	$_REQUEST["Estado"];
$Cedulag1			=	$_REQUEST["Cedula"];


		if ($Clienteg1 <> '' )
		{
				$arry0 				= 	array();
				
				$queryy0			=	"SELECT* FROM  Manifiestos where Empresa = '$Clienteg1'" ;
				$resulty0			=	mysql_query($queryy0, $id);
							
				While($rowy0		=	mysql_fetch_array($resulty0))
				{

				$Nromanifiestoy0	=	$rowy0["Nromanifiesto"];
				$arry0[]			=	$Nromanifiestoy0;

				}
				
					if(empty($arry0))
					{
					$cosult0	 =	" and ( Nromanifiesto = '')";
					}
					else
					{
					$arry0 		 = 	array_unique($arry0);
					$cosult0	 =	" and ( Nromanifiesto = ";
					$cosult0	.=	 implode(' or Nromanifiesto = ',$arry0);
					$cosult0	.=	 ')';
					}
					
		}
		

		if ($Manifiestog1 <> '' )
		{
				$arry1 				= 	array();
				
		
				
						$queryyy1			=	"SELECT* FROM  Manifiestos where Nromanifiesto = '$Manifiestog1'" ;
						$resultyy1			=	mysql_query($queryyy1, $id);
									
						While($rowyy1		=	mysql_fetch_array($resultyy1))
						{
						$Nromanifiestoyy1	=	$rowyy1["Nromanifiesto"];
						$arry1[]			=	$Nromanifiestoyy1;
						}
				
					if(empty($arry1))
					{
					$cosult1	 =	" and ( Nromanifiesto = '')";
					}
					else
					{
					$arry1 		 = 	array_unique($arry1);
					$cosult1	 =	" and ( Nromanifiesto = ";
					$cosult1	.=	 implode(' or Nromanifiesto = ',$arry1);
					$cosult1	.=	 ')';
					}
					
		}

		if ($Origeng1 <> '' )
		{
				$arry2 				= 	array();
				
				$queryy2			=	"SELECT* FROM  Manifiestos where Nombreorg = '$Origeng1'" ;
				$resulty2			=	mysql_query($queryy2, $id);
							
				While($rowy2		=	mysql_fetch_array($resulty2))
				{
				$Nromanifiestoy2	=	$rowy2["Nromanifiesto"];
				$arry2[]			=	$Nromanifiestoy2;
				}
				
					if(empty($arry2))
					{
					$cosult2	 =	" and ( Nromanifiesto = '')";
					}
					else
					{
					$arry2 		 = 	array_unique($arry2);
					$cosult2	 =	" and ( Nromanifiesto = ";
					$cosult2	.=	 implode(' or Nromanifiesto = ',$arry2);
					$cosult2	.=	 ')';
					}
					
		}
		
		
		if ($Destinog1 <> '' )
		{
				$arry3 				= 	array();
				
				$queryy3			=	"SELECT* FROM  Manifiestos where Nomdest = '$Destinog1' " ;
				$resulty3			=	mysql_query($queryy3, $id);
							
				While($rowy3		=	mysql_fetch_array($resulty3))
				{
				$Nromanifiestoy3	=	$rowy3["Nromanifiesto"];
				$arry3[]			=	$Nromanifiestoy3;
				}
				
					if(empty($arry3))
					{
					$cosult3	 =	" and ( Nromanifiesto = '')";
					}
					else
					{
					$arry3 		 = 	array_unique($arry3);
					$cosult3	 =	" and ( Nromanifiesto = ";
					$cosult3	.=	 implode(' or Nromanifiesto = ',$arry3);
					$cosult3	.=	 ')';
					}
					
		}
		
		if ($Placag1 <> '' )
		{
				$arry4 				= 	array();
				
		
				
						$queryyy4			=	"SELECT* FROM  Manifiestos where Placa like '%$Placag1%'" ;
						$resultyy4			=	mysql_query($queryyy4, $id);
									
						While($rowyy4		=	mysql_fetch_array($resultyy4))
						{
						$Nromanifiestoyy4	=	$rowyy4["Nromanifiesto"];
						$arry4[]			=	$Nromanifiestoyy4;
						}
				
					if(empty($arry4))
					{
					$cosult4	 =	" and ( Nromanifiesto = '')";
					}
					else
					{
					$arry4 		 = 	array_unique($arry4);
					$cosult4	 =	" and ( Nromanifiesto = ";
					$cosult4	.=	 implode(' or Nromanifiesto = ',$arry4);
					$cosult4	.=	 ')';
					}
					
		}
		
		
		if ($Desdeg1 <> '' )
		{
			
				$arry5 				= 	array();
				
				$queryy5			=	"SELECT* FROM  Viajes where Fechaini >= '$Desdeg1' " ;
				$resultyy5			=	mysql_query($queryy5, $id);
							
				While($rowyy5		=	mysql_fetch_array($resultyy5))
				{
				$Nromanifiestoy5	=	$rowyy5["Manifiesto"];
			
				
						$queryyy5			=	"SELECT* FROM  Manifiestos where Nromanifiesto = '$Nromanifiestoy5'" ;
						$resultyyy5			=	mysql_query($queryyy5, $id);
									
						While($rowyyy5		=	mysql_fetch_array($resultyyy5))
						{
						$Nromanifiestoyyyy5	=	$rowyyy5["Nromanifiesto"];
						$arry5[]			=	$Nromanifiestoyyyy5;
						}
				}

				
					if(empty($arry5))
					{
					$cosult5	 =	" and ( Nromanifiesto = '')";
					}
					else
					{
					$arry5 		 = 	array_unique($arry5);
					$cosult5	 =	" and ( Nromanifiesto = ";
					$cosult5	.=	 implode(' or Nromanifiesto = ',$arry5);
					$cosult5	.=	 ')';
					}
					
		}
		


		if ($Hastag1 <> '' )
		{
			
			//	$aghasta			=	"and Fecha <= '$Hastag1'";
				
				$arry6 				= 	array();
				
				$queryy6			=	"SELECT* FROM  Viajes where Fechaini <= '$Hastag1' " ;
				$resultyy6			=	mysql_query($queryy6, $id);
							
				While($rowyy6		=	mysql_fetch_array($resultyy6))
				{
				$Nromanifiestoy6	=	$rowyy6["Manifiesto"];
				
					$queryyyy6			=	"SELECT* FROM   Manifiestos where Nromanifiesto = '$Nromanifiestoy6'" ;
					$resultyyyy6		=	mysql_query($queryyyy6, $id);
								
					While($rowyyy6		=	mysql_fetch_array($resultyyyy6))
					{
					$Conductoryyyy6		=	$rowyyy6["Nromanifiesto"];
					$arry6[]			=	$Conductoryyyy6;
					}
				}
					if(empty($arry6))
					{
					$cosult6	 =	" and ( Nromanifiesto = '')";
					}
					else
					{
					$arry6 		 = 	array_unique($arry6);
					$cosult6	 =	" and ( Nromanifiesto = ";
					$cosult6	.=	 implode(' or Nromanifiesto = ',$arry6);
					$cosult6	.=	 ')';
					}
					
		}
		
		if ($Estadog1 <> '' )
		{
				$arry7 				= 	array();
			
				if($Estadog1 < 6)
				{
				
				$queryy7			=	"SELECT* FROM  Viajes where Iniciado = '$Estadog1'" ;
				$resulty7			=	mysql_query($queryy7, $id);
							
				While($rowy7		=	mysql_fetch_array($resulty7))
				{
				$Nromanifiestoyy7	=	$rowy7["Manifiesto"];
				$arry7[]			=	$Nromanifiestoyy7;

				}
				
					if(empty($arry7))
					{
					$cosult7	 =	" and ( Nromanifiesto = '')";
					}
					else
					{
					$arry7 		 = 	array_unique($arry7);
					$cosult7	 =	" and ( Nromanifiesto = ";
					$cosult7	.=	 implode(' or Nromanifiesto = ',$arry7);
					$cosult7	.=	 ')';
					}
				}
				else
				{
				$queryy7			=	"SELECT* FROM  Viajes where Problema > 0" ;
				$resulty7			=	mysql_query($queryy7, $id);
							
				While($rowy7		=	mysql_fetch_array($resulty7))
				{
				$Nromanifiestoyy7	=	$rowy7["Manifiesto"];
				$arry7[]			=	$Nromanifiestoyy7;

				}
				
					if(empty($arry7))
					{
					$cosult7	 =	" and ( Nromanifiesto = '')";
					}
					else
					{
					$arry7 		 = 	array_unique($arry7);
					$cosult7	 =	" and ( Nromanifiesto = ";
					$cosult7	.=	 implode(' or Nromanifiesto = ',$arry7);
					$cosult7	.=	 ')';
					}
				}
					
		}

		if ($Cedulag1 <> '' )
		{
				$arry8 				= 	array();
				
				$queryy8			=	"SELECT* FROM  Manifiestos where Conductor = '$Cedulag1'" ;
				$resulty8			=	mysql_query($queryy8, $id);
							
				While($rowy8		=	mysql_fetch_array($resulty8))
				{
				$Nromanifiestoyy8	=	$rowy8["Nromanifiesto"];
				$arry8[]			=	$Nromanifiestoyy8;

				}
				
					if(empty($arry8))
					{
					$cosult8	 =	" and ( Nromanifiesto = '')";
					}
					else
					{
					$arry8 		 = 	array_unique($arry8);
					$cosult8	 =	" and ( Nromanifiesto = ";
					$cosult8	.=	 implode(' or Nromanifiesto = ',$arry8);
					$cosult8	.=	 ')';
					}
					
		}
		
$consultar		=	$cosult0.$cosult1.$cosult2.$cosult3.$cosult4.$cosult5.$cosult6.$cosult7.$cosult8;
//echo	$consultar;
?>
<html>
<head>

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
	font-size: 10px;
	color: #FFF;
}
body {
	background-color: #FFF;
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
.listado2 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #FFF;
}
.TextField2 {background-color: #DADADA;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
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


  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
<!--
.TextField21 {background-color: #DADADA;
color: #333333;
font-size: 6pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.listado3 {font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
	color: #FFF;
}
-->
</style>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="100" align="right" valign="top" bgcolor="#FFFFFF"><hr size="1">
      <?
$Fechahoy= date("Y-m-d");	

	

    $paging = new PHPPaging; 

	if ($consultar <> '')
	{
	$paging->agregarConsulta("SELECT* FROM Manifiestos where Id <> '' ".$consultar." order by Nromanifiesto asc"); 
	}
	else
	{
	$paging->agregarConsulta("SELECT* FROM Manifiestos where Id = '0' order by Nromanifiesto asc");
	$mensaje	=	"Ingrese un parametro de busqueda";
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
$Nromanifiesto	=$row008["Nromanifiesto"];
$Nombreorg		=$row008["Nombreorg"];
$Nomdest		=$row008["Nomdest"];
$Conductor		=$row008["Conductor"];
$Empresar		=$row008["Empresa"];
$Placar			=$row008["Placa"];


	$query0079		=	"SELECT* FROM Viajes where Manifiesto = '$Nromanifiesto' order by Id Asc" ;
	$result0079		=	mysql_query($query0079, $id);
	
	While($row0079	=	mysql_fetch_array($result0079))
	{
	$Idviaje		=	$row0079["Id"];
	$Planviaje		=	$row0079["Planviaje"];
	$Estado			=	$row0079["Iniciado"];
	$Fechaini		=	$row0079["Fechaini"];
	$Problema		=	$row0079["Problema"];
	}

if($Estadog1 < 6)
{
	if		($Estado == 1)
	{
		$Mensaje 	= 	"En asignacion";
		$color		=	"#FFFFBB";
	}
	elseif	($Estado == 2)
	{
		$Mensaje	=	"Lista finalizados";
		$color		=	"#B9FFCB";
	}
	elseif	($Estado == 3)
	{
		$Mensaje	= "En transito";
		$color		=	"#DBDCE8";
	}
	elseif	($Estado == 4)
	{
		$Mensaje 	= "Cancelado";
		$color		=	"#FFAAFF";
	}
	elseif	($Estado == 5)
	{
		$Mensaje 	= "Finalizado";
		$color		=	"#FFB0B0";
	}	
}
else
{
		$Mensaje 	= "Con Problema";
		$color		=	"#E7E356";	
}

		
	$query0080		=	"SELECT* FROM Empresas where Nit = '$Empresar' order by Id Asc" ;
	$result0080		=	mysql_query($query0080, $id);
	
	While($row0080	=	mysql_fetch_array($result0080))
	{
	$Nombreplan		=	$row0080["Nombre"];
	}
	if($Nombreplan<>"")
	{
	$Nombreplanx=	$Nombreplan;
	$Nombreplan	=	"";
	}
	else
	{
	$Nombreplanx="";	
	}


	
	$query0081		=	"SELECT* FROM Manifiestos where Nromanifiesto = '$Nromanifiesto' ".$agdesde.$aghasta." order by Fecha Asc" ;
	$result0081		=	mysql_query($query0081, $id);
	
	While($row0081	=	mysql_fetch_array($result0081))
	{
	$Fecha1				=	$row0081["Fecha"];
	}
		if(empty($Fecha1))
		{
		$Fecha1x	=	"SIN VIAJES";	
		}
		else
		{
		$Fecha1x	=	$Fecha1;
		$Fecha1		=	"";
		}	
		
	$query0082		=	"SELECT* FROM Manifiestos where Nromanifiesto = '$Nromanifiesto' ".$agdesde.$aghasta." order by Fecha Desc" ;
	$result0082		=	mysql_query($query0082, $id);
	
	While($row0082	=	mysql_fetch_array($result0082))
	{
	$Fecha2			=	$row0082["Fecha"];
	}	
		if(empty($Fecha2))
		{
		$Fecha2x	=	"SIN VIAJES";
		}
		else
		{
		$Fecha2x	=	$Fecha2;	
		$Fecha2		=	"";
		}
		

?>
      <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="<?=$color?>" onClick="location.href='report-detalles-viaje.php?Id=<?=$Idviaje?>'">
        

          <tr onMouseover="this.bgColor='#BED9F3'"onMouseout="this.bgColor='<?=$color?>'">
         
          <td width="25%" height="20" colspan="2" align="left" class="listado1"><span class="listado">&nbsp; </span> <?=$Nombreplanx?></td>
          <td width="8%" height="20" align="left"class="listado"><span class="listado1"><?=$Nromanifiesto?></span></td>
            <td width="8%" height="20" align="left"  class="listado"><span class="listado1">
              <?=$Placar?>
              </span></td>
            <td width="8%" height="20" align="left"  class="listado"><span class="listado1">
              <?=$Conductor?>
            </span></td>
            <td width="12%" align="left"  class="listado"><span class="listado1">
              <?=strtoupper($Nombreorg)?>
            </span></td>
            <td width="12%" height="20" align="left" class="listado"><span class="listado1">
              <?=strtoupper($Nomdest)?>
            </span>
            <td width="8%" height="20" align="left" class="listado"><span class="listado1">
            <?=$Fechaini?>
            </span>
            <td width="8%" align="left" class="listado">
            <td width="8%" align="left" class="listado"><span class="listado1">
            <?=$Mensaje?>
            </span>                        
            <td width="3%"></tr>


     
        
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
            <td height="10" align="right"><?php 
    // Imprimimos algo de información 
    echo "<br><span class='Estilo93'><b>Página ".$paging->numEstaPagina()." de ".$paging->numTotalPaginas()."<span/><br />"; 
    echo "</b>Mostrando ".$paging->numRegistrosMostrados()." resultados, del ".$paging->numPrimerRegistro()." al ".$paging->numUltimoRegistro(); 
    echo " de un total de ".$paging->numTotalRegistros()."<br /><br />"; 

    // Imprimimos la barra de navegación 
    echo "<div class='navigation'>".$paging->fetchNavegacion()."</div>"; 
     
?></td>
          </tr>
        </table>
    </td>
  </tr>
</table>


<?
if($mensaje <> "")
{
?>
<table width="100%" border="0" align="center">
  <tr>
    <td align="center" class="titles">POR FAVOR INGRESE UN CRITERIO DE BUSQUEDA</td>
  </tr>
</table>
<?
}
?>
</body>
</html>