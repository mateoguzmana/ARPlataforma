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



include("PHPPaging.lib.php");

include("conexion.php");





$Usuarior			= 	$_SESSION['Empresa'];
$Fechahoy			= 	date("Y-m-d");


$Codigo				=	$_REQUEST["Codigo"];
$Desde				=	$_REQUEST["Desde"];
$Usuario			=	$_REQUEST["Usuario"];













		if ($Codigo <> '' )
		{
				
				
				$arry0 				= 	array();
				
				$queryy0			=	"SELECT* FROM Planostrans where Cod = '$Codigo' " ;
				$resulty0			=	mysql_query($queryy0, $id);
							
				While($rowy0		=	mysql_fetch_array($resulty0))
				{
				$Nromanifiestoy0	=	$rowy0["Cod"];

				$arry0[]			=	"'".$Nromanifiestoy0."'";

				}
				
				
					if(empty($arry0))
					{
					$cosult0	 =	" and ( Cod = '')";
					}
					else
					{
					$arry0 		 = 	array_unique($arry0);
					$cosult0	 =	" and ( Cod = ";
					$cosult0	.=	 implode(' or Cod = ',$arry0);
					$cosult0	.=	 ')';
					}
					
		}




	
	
	
	
		
		
		if ($Desde <> '' )
		{
				
				
				$arry2 				= 	array();
				
				$queryy2			=	"SELECT* FROM Planostrans where  SUBSTRING(Fecha,1,10) = '$Desde'  " ;
				$resulty2			=	mysql_query($queryy2, $id);
							
				While($rowy2		=	mysql_fetch_array($resulty2))
				{
				$Nromanifiestoy2	=	$rowy2["Cod"];

				$arry2[]			=	$Nromanifiestoy2;

				}
				
					if(empty($arry2))
					{
					$cosult2	 =	" and ( Cod = '')";
					}
					else
					{
					$arry2 		 = 	array_unique($arry2);
					$cosult2	 =	" and ( Cod = ";
					$cosult2	.=	 implode(' or Cod = ',$arry2);
					$cosult2	.=	 ')';
					}
					
		}
		






		
		if ($Usuario <> '' )
		{
				
				
				$arry3 				= 	array();
				
				$queryy3			=	"SELECT* FROM Planostrans where  Usuario = '$Usuario' " ;
				$resulty3			=	mysql_query($queryy3, $id);
							
				While($rowy3		=	mysql_fetch_array($resulty3))
				{
				$Nromanifiestoy3	=	$rowy3["Cod"];

				$arry3[]			=	$Nromanifiestoy3;

				}
				
					if(empty($arry3))
					{
					$cosult3	 =	" and ( Cod = '')";
					}
					else
					{
					$arry3 		 = 	array_unique($arry3);
					$cosult3	 =	" and ( Cod = ";
					$cosult3	.=	 implode(' or Cod = ',$arry3);
					$cosult3	.=	 ')';
					}
					
		}


		







		


$consultar		=	$cosult0.$cosult1.$cosult2.$cosult3.$cosult4.$cosult5.$cosult6.$cosult7.$cosult8.$cosult9;

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

if(!empty($consultar))
{
		$paging->agregarConsulta("SELECT* FROM Planostrans where Id > '0' ".$consultar."  GROUP BY Cod order by Fecha DESC"); 
}
else
{
		$paging->agregarConsulta("SELECT* FROM Planostrans where Id > '0' GROUP BY Cod order by Fecha DESC"); 
}


        $paging->porPagina(30);  
         
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

$Idc					=$rowresul["Id"];
$Codigoc				=$rowresul["Cod"];
$Fechac					=$rowresul["Fecha"];
$Usuarioc				=$rowresul["Usuario"];







?>
      
      
      
      
      
      
      
      
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="<?=$cole?>" onMouseover="this.bgColor='#BED9F3'"onMouseout="this.bgColor='<?=$cole?>'">
          <tr>
            <td width="20%" height="15" class="listado1">&nbsp;<span class="listado1"><?=$Codigoc?></span>&nbsp;</td>
            <td width="20%" height="15" class="listado"><span class="listado1">&nbsp;
                <?=$Fechac?>
            </span></td>
            <td width="20%" class="listado"><span class="listado1"><?=$Usuarioc?>
            </span></td>
            <td width="40%" class="listado"><a href="seguimiento-planos.php?Cod=<?=$Codigoc?>" rel="lyteframe" title="" rev="width: 750px; height: 500px; scrolling: yes;"><img src="Images/add.png" width="12" height="12" border="0"></a></td>
          </tr>
        </table>
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td height="2" class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></td>
          </tr>
        </table>
        
<?
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
      </body>
</html>