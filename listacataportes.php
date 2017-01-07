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

session_register('anterior-guias');
$_SESSION['anterior-guias']	=	$_SERVER['REQUEST_URI']; 

$Usuarior			= 	$_SESSION['Empresa'];


$Estadog1			=	$_REQUEST["Estado"];
$Cataporte			=	$_REQUEST["Cataporte"];


		if ($Cataporte <> '' )
		{
				$arry0 				= 	array();
				
				$queryy0			=	"SELECT* FROM Controlbox where Cataporte = '$Cataporte'" ;
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
		

		


$consultar		=	$cosult0;

//echo $consultar;




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
.TextField {background-color:#F8F8F8;
color: #1F1F1F;
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
.TextField2 {background-color: #DADADA;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.listado3 {font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
	color: #FFF;
}
.listado11 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #FFF;
}
-->
</style>
<script language="JavaScript">
<!--
function confirmSubmit() 
{ 
var agree=confirm("Realmente desea devolver esta guia? "); 
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


	$paging->agregarConsulta("SELECT* FROM Controlbox where Cataporte > '0' ".$consultar." Group by Empresa, Cataporte Order by Cataporte Desc"); 


        $paging->porPagina(40);  
         
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
$Cataporte		=$row008["Cataporte"];
$Empresa		=$row008["Empresa"];
$Fechalee		=$row008["Fechalee"];
$Usuariolee		=$row008["Usuariolee"];

		$queryS1		="SELECT* FROM Empresas WHERE  Nit = '$Empresa'";
		$resultS1		=mysql_query($queryS1, $id);

				
		while($rowS1	=mysql_fetch_array($resultS1))
		{
		$Nombre			=$rowS1["Nombre"];
		}





?>
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" onMouseover="this.bgColor='#BED9F3'"onMouseout="this.bgColor='#FFFFFF'">
          <tr>
            <td width="15%" height="15" class="listado1"><?=$Cataporte?></td>
            <td width="40%" height="15" class="listado"><span class="listado1"><?=$Nombre?>
            </span></td>
            <td width="15%" height="15" class="listado"><span class="listado1"><?=$Empresa?>
            </span></td>
            <td width="10%" class="listado"><span class="listado1"><?=$Fechalee?></span></td>
            <td width="10%" class="listado"><span class="listado1"><?=$Usuariolee?></span></td>
            <td width="10%" align="right" class="listado"><a href="export-cataporte.php?Id=<?=$Cataporte?>&Empresa=<?=$Empresa?>" target="_blank"><img src="Images/excel.png" width="20" height="20" borde = "0"></a>s<a href="print-cataporte.php?Id=<?=$Cataporte?>&Empresa=<?=$Empresa?>" target="_blank"><img src="Images/imprimir.jpg" width="19" height="20" borde = "0"></a></td>
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
</body>
</html>