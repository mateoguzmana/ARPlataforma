<?
include("conexion.php");
include("PHPPaging.lib.php");

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");



		$Nit			=	$_REQUEST["Nit"];
		
		

		$querya			="SELECT* FROM Empresas where Nit = '$Nit'" ;
		$resulta		=mysql_query($querya, $id);
		
		While($rowa		=mysql_fetch_array($resulta))
		{
		$Nombrea		=$rowa["Nombre"];
		$Coda			=$rowa["Nit"];
		}
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
.listado {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
	color: #000;
}
body {
	background-color: #EAEAEA;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo93 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.listado1 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #666;
}
.TextField {background-color: #DADADA;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.listado2 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #FFF;
}
.listado11 {font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
	color: #000;
}
div.navigation { 
    background-color: #eee; 
    border: 1px solid #ccc; 
    margin: 2px auto; 
    text-align: center; 
    padding: 9px 5px; 
    white-space: nowrap; 
    font: 11px Arial; 
} 
span.navthis { 
    padding: 3px 8px; 
    background-color: #eee; 
    color: #FF7F00; 
    font-weight: bold; 
    font-size: 11px; 
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

<script language="javascript">
function mis_datos(){
var key=window.event.keyCode;
if (key < 48 || key > 57){
window.event.keyCode=0;
}}
</script>
</head>

<body>

  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="100" align="right" valign="top"><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="45%"><br>


          </td>
          <td width="15%" valign="bottom">&nbsp;</td>
          <td width="40%" valign="bottom">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3" align="right"><hr></td>
        </tr>
      </table>
        <?
$Fechahoy= date("Y-m-d");

$paging = new PHPPaging; 


$paging->agregarConsulta("SELECT* FROM Manifiestos order by Id Desc");

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
$Manifiesto		=$row008["Nromanifiesto"];
$Fecha			=$row008["Fecha"];
$Id8			=$row008["Id"];
$Asignado		=$row008["Asignado"];
?>
        <table width="99%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="5%" height="15" bgcolor="#FFFFFF"><img src="Images/botonto.jpg" width="18" height="12"></td>
            <td width="40%" height="15" bgcolor="#FFFFFF" class="listado"><?=$Manifiesto?></td>
            <td width="40%" bgcolor="#FFFFFF" class="listado"><?=$Fecha?></td>
            <td width="15%" align="right" bgcolor="#FFFFFF">
            
            
            
            
          
          <?
          if($Asignado == 0)
		  {
		  ?>
          <a href="act-manifiesto-2.php?Id=<?=$Id8?>" target="genera"><img src="Images/add.png" width="12" height="12" border="0"></a>
          <a href="elimanifiesto.php?Id=<?=$Id8?>" target="maestro" onclick=' return confirmSubmit()'> <img src="Images/delete.png" width="12" height="12" border="0"></a>
          <?
		  }
		  else
		  {
		  ?>
          <a onClick='alert("Este manifiesto ya salio a transito");'><img src="Images/add.png" width="12" height="12" border="0"></a>
          <a onClick='alert("Este manifiesto ya salio a transito");'><img src="Images/delete.png" width="12" height="12" border="0"></a>
          <?
		  }
		  ?>
            
            
            
            
            </td>
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
            <td height="10" align="right">
<?php 
    // Imprimimos algo de información 
    echo "<br><span class='Estilo93'><b>Página ".$paging->numEstaPagina()." de ".$paging->numTotalPaginas()."<span/><br />"; 
    echo "</b>Mostrando ".$paging->numRegistrosMostrados()." resultados, del ".$paging->numPrimerRegistro()." al ".$paging->numUltimoRegistro(); 
    echo " de un total de ".$paging->numTotalRegistros()."<br />"; 

    // Imprimimos la barra de navegación 
    echo "<div class='navigation'>".$paging->fetchNavegacion()."</div>"; 
     
?>
</td>
          </tr>
        </table></td>
    </tr>
  </table>
</body>
</html>