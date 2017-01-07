<?
include("conexion.php");

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

include("PHPPaging.lib.php");

$Nombre				=	$_REQUEST["Nombre"];
$Cedula				=	$_REQUEST["Cedula"];
$Placa				=	$_REQUEST["Placa"];

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>VEHICULOS</title>
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



<script> 
function retornavalores(nit, nombre, placa){ 
   window.opener.document.form1.Cedula.value=nit;
   window.opener.document.form1.Conductor.value=nombre;
   window.opener.document.form1.Placa.value=placa;
   window.close(); 
} 
</script>



</head>

<body>
<form name="form1" method="get" action="lista-placasman.php">
  <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="100" align="right" valign="top"><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="50%" height="35" bgcolor="#003366" class="listado2">NOMBRE CONDUCTOR
              <span class="listado3">
              &nbsp;
              <input name="Nombre" type="text" class="TextField" id="Nombre" style="width:95%" onKeyUp="form1.Nombre.value=form1.Nombre.value.toUpperCase();" autocomplete="off">
              </span></td>
            <td width="20%" bgcolor="#003366" class="listado2">CEDULA
              <span class="listado3"> &nbsp;
              <input name="Cedula" type="text" class="TextField" id="Cedula" style="width:95%" autocomplete="off">
              </span></td>
            <td width="20%" bgcolor="#003366" class="listado2">PLACA<br>
              <span class="listado3">
              <input name="Placa" type="text" class="TextField" id="Placa" style="width:95%" onKeyUp="form1.Placa.value=form1.Placa.value.toUpperCase();" autocomplete="off">
              </span></td>
            <td width="10%" valign="bottom" bgcolor="#003366" class="listado2"><span class="listado3">
              <input type="image" src="Images/bt-buscar.png">
            </span></td>
          </tr>
        </table>
        <hr size="1">
        <?
    $paging = new PHPPaging; 

	if ($Nombre <> '')
	{
	$paging->agregarConsulta("SELECT* FROM Conductores where Nombre Like '%$Nombre%' or Apellido1 Like '%$Nombre%' or Apellido2 Like '%$Nombre%' order by Apellido1 Asc"); 
	}
	elseif ($Cedula <> '')
	{
	$paging->agregarConsulta("SELECT* FROM Conductores where Cedula = '$Cedula' order by Apellido1 Asc"); 
	}
	elseif ($Placa <> '')
	{
	$paging->agregarConsulta("SELECT* FROM Conductores where Placa Like '%$Placa%' order by Apellido1 Asc"); 
	}
	else
	{
	$paging->agregarConsulta("SELECT* FROM Conductores order by Apellido1 Asc"); 
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
$Nombre2		=$row008["Nombrefull"];
$Idmarca		=$row008["Cedula"];
$Placa2			=$row008["Placa"];
$Cedula2 		=$row008["Cedula"];
$Nombrer		=$row008["Nombre"];
$Apellido		=$row008["Apellido1"] ." ".$row008["Apellido2"];
$Ciudad			=$row008["Ciudad"];
$Tel1			=$row008["Tel"];
$Tel2			=$row008["Tel2"];
$Celular		=$row008["Celular"];

if(empty($Placa2))
{
	$query="SELECT* FROM Vehiculos where Conductor = '$Cedula2'" ;
	$result=mysql_query($query, $id);
	
	While($row=mysql_fetch_array($result))
	{
	$Placa2=$row["Placa"];
	}	
}
?>
        <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0" onClick="retornavalores('<?=$Idmarca?>', '<?=$Nombre2?>', '<?=$Placa2?>')">
         
            <tr name="datos1" id="datos1" onMouseover="this.bgColor='#BED9F3'"onMouseout="this.bgColor='#FBFBFB'" >
              <td width="50%" height="20"><span class="Estilo93"><?=strtoupper($Nombre2)?></span></td>
              <td width="20%"><span class="Estilo93">
                <?=$Cedula2?>
              </span></td>
              <td width="20%"><span class="Estilo93">
                <?=$Placa2?>
              </span></td>
              <td width="10%">&nbsp;</td>
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