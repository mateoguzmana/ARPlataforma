<?PHP
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

include("conexion.php");


include("PHPPaging.lib.php");

$Marca1				=	$_REQUEST["Marca"];
$CC					=	$_REQUEST["CC"];
$Tipo				=	$_REQUEST["Tipo"];
$Cont				=	$_REQUEST["Cont"];
$Nrocat				=	$_REQUEST["Nrocat"];
$Seccion			=	$_REQUEST["Seccion"];
$Fecha				=	$_REQUEST["Fecha"];


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LISTA TERCEROS</title>
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
	text-align: right;
}
.listado {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #666;
}
body {
	background-color: #FBFBFB;
	margin-top: 0px;
	margin-left: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo93 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.Estilo105 {color: #990000; font-family: Arial, Helvetica, sans-serif; font-size: 10px; font-weight: bold; }
.Estilo97 {font-size: 12px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
.TextField2 {background-color: #DADADA;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.listado1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 8px;
	color: #000;
}
.listado2 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #FFF;
}
.textos1 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #009;
	text-align: right;
}
.listado11 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
	color: #000;
}
.TextField {background-color: #DADADA;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.listado3 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
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



</head>

<body onLoad="document.forma.Marca.focus();">
<form name="forma" method="get" action="listaterceros-vales-carga-f.php">
  <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="100" align="right" valign="top"><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="30%" height="35" valign="top" bgcolor="#003366" class="listado2">&nbsp;<span class="listado1">&nbsp; </span>NOMBRE TERCERO<br>
              <span class="listado3">
              &nbsp;
              <input name="Marca" type="text" class="TextField" id="Marca" style="width:90%">
            </span></td>
            <td width="30%" valign="top" bgcolor="#003366" class="listado2">&nbsp;<span class="listado1">&nbsp; </span>NIT / C.C TERCERO<br>
              <span class="listado3"> &nbsp;
              <input name="CC" type="text" class="TextField" id="CC" style="width:90%">
            </span></td>
            <td width="30%" valign="bottom" bgcolor="#003366" class="listado2"><span class="listado3">
              <input type="image" src="Images/bt-buscar.png" style="border:0PX">
              <input name="Cont" type="hidden" id="Cont" value="<?=$Cont?>">
              <input name="Zona" type="hidden" id="Zona" value="<?=$Zona?>">
              <input name="Seccion" type="hidden" id="Seccion" value="<?=$Seccion?>">
              <input name="Nrocat" type="hidden" id="Nrocat" value="<?=$Nrocat?>">
            </span></td>
            <td width="10%" valign="bottom" bgcolor="#003366" class="listado2">&nbsp;</td>
          </tr>
        </table>
        <hr size="1">

<?
    $paging = new PHPPaging; 

	if ($Marca1 <> '')
	{
	$paging->agregarConsulta("SELECT* FROM  Conductores where Nombrefull Like '%$Marca1%' order by Apellido1 Asc"); 
	}
	elseif ($CC <> '')
	{
	$paging->agregarConsulta("SELECT* FROM  Conductores where Cedula = '$CC'  order by Apellido1 Asc"); 
	}
	else
	{
	$paging->agregarConsulta("SELECT* FROM  Conductores order by Apellido1 Asc"); 
	}





        $paging->porPagina(15);  
         
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
$Nombre			=$row008["Nombrefull"];
$Cedula 		=$row008["Cedula"];
?>
<table width="99%" border="0" align="center" cellpadding="0" cellspacing="0"  onClick="window.location.href=('ingreso-sale-ebel-bodega.php?Nrocat=<?=$Nrocat?>&Zona=<?=$Zona?>&Seccion=<?=$Seccion?>&Nit=<?=$Cedula?>&Nombre=<?=$Nombre?>&Fecha=<?=$Fecha?>');">
         
            <tr name="datos1" id="datos1" onMouseover="this.bgColor='#BED9F3'"onMouseout="this.bgColor='#FBFBFB'" >
              <td width="70%" height="20"><span class="Estilo93"><?=strtoupper($Nombre)?></span></td>
              <td width="30%"><span class="Estilo93">
                <?=$Cedula?>
              </span></td>
            </tr>
        
        </table>
        <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td class="listado1"><span class="listado11"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
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
</form>
</body>
</html>