<?
include("conexion.php");
include("PHPPaging.lib.php");

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$Id	=		$_REQUEST["Id"];

$query008="SELECT* FROM Empresas where Id = '$Id'" ;
$result008=mysql_query($query008, $id);

While($row008=mysql_fetch_array($result008))
{
$Nit		=$row008["Nit"];
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
	font-size: 10px;
	color: #000;
}
body {
	background-color: #EAEAEA;
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
.listado2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000;
	font-weight: bold;
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
</head>

<body>
<form name="form1" method="GET" action="actmailsempresas3.php">
  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="100" align="right" valign="top"><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td align="right"><a href="actmailsempresas.php" class="Estilo93">VOLVER</a>
            <hr></td>
        </tr>
      </table>
        <input name="Id" type="hidden" id="Id" value="<?=$Id?>">
        <?
$Fechahoy= date("Y-m-d");

$paging = new PHPPaging; 

$paging->agregarConsulta("SELECT* FROM Cargos order by Nombre");


        $paging->porPagina(50);  
         
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
$Idcargo 		=$row008["Id"];
$Nombre8		=$row008["Nombre"];
?>
        <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="26" valign="bottom"><span class="listado2"><?=$Nombre8?></span></td>
          </tr>
        <tr>
          <td align="right"><hr></td>
        </tr>
      </table>
<?
$ok = 0;
$query0081="SELECT* FROM Empresasmails where Idcargo = '$Idcargo' and Nit = '$Nit'" ;
$result0081=mysql_query($query0081, $id);

While($row0081=mysql_fetch_array($result0081))
{
$Nombre81		=$row0081["Nombre"];
$Email81		=$row0081["Email"];
$Envio81		=$row0081["Envio"];
$Tel81			=$row0081["Tel"];
$Id81			=$row0081["Id"];
$Nota181		=$row0081["Nota1"];
$Nota281		=$row0081["Nota2"];
$Nota381		=$row0081["Nota3"];
$Nota481		=$row0081["Nota4"];


$ok++;

if($Nota181 == 1)
{
$Opcion1	=	"checked";	
}
else
{
$Opcion1	=	"";	
}


if($Nota281 == 1)
{
$Opcion2	=	"checked";	
}
else
{
$Opcion2	=	"";	
}

if($Nota381 == 1)
{
$Opcion3	=	"checked";	
}
else
{
$Opcion3	=	"";	
}

if($Nota481 == 1)
{
$Opcion4	=	"checked";	
}
else
{
$Opcion4	=	"";	
}

?>


        <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="5%" align="center" bgcolor="#FFFFFF"><img src="Images/botonto.jpg" width="18" height="12"></td>
            <td width="70%" bgcolor="#FFFFFF" class="listado"><?=$Nombre81?></td>
            <td width="15%" bgcolor="#FFFFFF" class="listado"><input name="Envio<?=$ok?>" type="checkbox" id="Envio<?=$ok?>" value="1" <?=$Opcion1?> disabled>
            <input name="Envio<?=$ok?>2" type="checkbox" id="Envio<?=$ok?>2" value="1" <?=$Opcion2?> disabled>
            <input name="Envio<?=$ok?>3" type="checkbox" id="Envio<?=$ok?>3" value="1" <?=$Opcion3?> disabled>
            <input name="Envio<?=$ok?>4" type="checkbox" id="Envio<?=$ok?>4" value="1" <?=$Opcion4?> disabled>
            </td>
            <td width="10%" bgcolor="#FFFFFF" class="textos"><a href="actmailsempresas3.php?Id=<?=$Id81?>&Idemp=<?=$Id?>"><img src="Images/update-ico-2.jpg" width="16" height="15" border="0"></a> | <a onclick=' return confirmSubmit()' href="elimailsempresas.php?Id=<?=$Id81?>&Idemp=<?=$Id?>"><img src="Images/delete-icon-2.jpg" width="16" height="15" border="0"></a></td>
          </tr>
        </table>
        <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="5%" align="center" bgcolor="#F3F3F3">&nbsp;</td>
            <td bgcolor="#F3F3F3" class="listado"><?=$Email81?></td>
            <td width="10%" bgcolor="#F3F3F3" class="textos">&nbsp;</td>
          </tr>
        </table>
        <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td class="listado1"><span class="listado11"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
          </tr>
        </table>        <?
}
}
?>
        <br></td>
    </tr>
  </table>
</form>
</body>
</html>