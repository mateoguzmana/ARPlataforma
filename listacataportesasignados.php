<?
include("variables.php");
include("PHPPaging.lib.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE></TITLE>
<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
<STYLE type=text/css>
BODY {
	MARGIN: 0px;
	background-image: url();
	background-color: #F3F3F3;
}
body,td,th {
	color: #333;
}
.Titulos {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 11px;
	color: #666;
}
.lista {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}
.titulosec {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
.titles {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #999;
	font-weight: bold;
}
.TextField0 {
background-color: #900;
color: #FFFFFF;
font-size: 9pt;
font-family: arial;
border : 1px solid #C6C5C4;

}
.TextField {
background-color: #A2A29F;
color: #FFFFFF;
font-size: 9pt;
font-family: arial;
border : 1px solid #C6C5C4;

}
.TextField1 {
background-color: #7C7C7A;
color: #FFFFFF;
font-size: 11pt;
font-family: arial;
border : 1px solid #C6C5C4;

}
.TextField2 {
background-color: #EFEFEF;
color: #7C7C7A;
font-size: 11px;
font-family: arial;
border : 1px solid #ccc;

}
.TextField3 {
background-color: #A2A29F;
color: #FFFFFF;
font-size: 8pt;
font-family: arial;
border : 0px solid #C6C5C4;

}
#error {
	margin-top:1px;
	font: 12px Arial, Helvetica, sans-serif, bold;
	font-weight: bold;
	color: #000000;
	width: 320;
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
</STYLE>


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

<link rel="stylesheet" href="lytebox.css" type="text/css" media="screen"/>
<script type="text/javascript" language="javascript" src="lytebox.js"></script>

<style type="text/css">
<!--
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
-->
</style></HEAD>
<BODY>
<table width="100%" height="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
<td align="center" valign="top">
<?
$Nombreq	=	$_REQUEST["Name"];

if($Nombreq == 'NRO MANIFIESTO')
{
$Nombreq	=	'';	
}


		if ($Nombreq <> '' )
		{
				$arry0 				= 	array();
				
				$queryy0			=	"SELECT* FROM  Asignacioncata where Manifiesto = '$Nombreq'" ;
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
		
		

$consultar		=	$cosult0.$cosult1;

	if ($consultar <> '')
	{
	$queryAAA="SELECT COUNT(*) as TotalA FROM Asignacioncata where Id <> '' ".$consultar." order by Id desc";
	$resultAAA=mysql_query($queryAAA, $id);

		While($rowAAA=mysql_fetch_array($resultAAA))
		{
		$TotalA=$rowAAA["TotalA"];
		}
	}
if($TotalA == 0 && $consultar <> '')
{
?>
<span class="Estilo101"><br><br><br>
</span><span class="lista">NO SE ENCONTRARON RESULTADOS EN SU BUSQUEDA - <a href="listacataportesasignados.php" style="color: #00F">VOLVER</a></span><span class="Estilo101"><br>
<br>
</span>
<?
}

    $paging = new PHPPaging; 

	if ($consultar <> '')
	{
	$paging->agregarConsulta("SELECT* FROM Asignacioncata where Estado = '0' ".$consultar." GROUP BY Manifiesto order by Id DESC"); 
	}
	else
	{
	$paging->agregarConsulta("SELECT* FROM Asignacioncata where Estado = '0' GROUP BY Manifiesto  order by Id DESC"); 
	}


        $paging->porPagina(10);  
         
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


		$Idr			=$row008["Id"];
		$Nombrer		=$row008["Manifiesto"];
		

		$query		="SELECT* FROM Manifiestos WHERE Nromanifiesto = '$Nombrer'" ;
		$result		=mysql_query($query, $id);
		
		While($row	=mysql_fetch_array($result))
		{
		$Asignado	=$row["Asignado"];
		}
?>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#F8F8F8" onMouseover="this.bgColor='#E2F5C9'"onMouseout="this.bgColor='#F8F8F8'">
        <tr>
          <td width="5%" height="15" align="center" class="titles"><img src="Images/online.png" width="13" height="14"></td>
          <td width="45%" class="lista" style="font-size: 9px"><span class="lista" style="font-size: 9px">
            <?=$Nombrer?>
          </span></td>
          <td width="40%" class="lista" style="font-size: 9px">&nbsp;</td>
          <td width="10%" align="center" class="titles">
          
          
          <?
          if($Asignado == 0)
		  {
		  ?>
          <a href="act-asignacioncataportes.php?Id=<?=$Idr?>&Man=<?=$Nombrer?>" rel="lyteframe" rev="width: 720px; height: 470px; scrolling: yes;"><img src="Images/add.png" alt="MODIFICAR" title="MODIFICAR" width="15" height="15" border="0"></a>
          <a onClick='return confirmSubmit();' href="eli-asignacioncataportes.php?Id=<?=$Idr?>&Man=<?=$Nombrer?>"> <img src="Images/delete.png" alt="ELIMINAR" title="ELIMINAR" width="15" height="15" border="0"></a>
          <?
		  }
		  else
		  {
		  ?>
          <a onClick='alert("Este manifiesto ya salio a transito");'><img src="Images/add.png" alt="MODIFICAR" title="MODIFICAR" width="15" height="15" border="0"></a>
          <a onClick='alert("Este manifiesto ya salio a transito");'> <img src="Images/delete.png" alt="ELIMINAR" title="ELIMINAR" width="15" height="15" border="0"></a>
          <?
		  }
		  ?>
          
          </td>
          </tr>
      </table>
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
        <tr>
          <td height="5" class="titles"><img src="Images/fondo-final.jpg" width="100%" height="2"></td>
        </tr>
      </table>
<?
$Asignado	='';
}
?><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
            <td width="30%" height="10" align="left" class="lista" style="font-size: 8px">&nbsp;</td>
            <td width="70%" align="right" class="lista" style="font-size: 9px">
<?php 
    // Imprimimos algo de información 
    echo "<br><b>Página ".$paging->numEstaPagina()." de ".$paging->numTotalPaginas()."<br />"; 
    echo "</b>Mostrando ".$paging->numRegistrosMostrados()." resultados, del ".$paging->numPrimerRegistro()." al ".$paging->numUltimoRegistro(); 
    echo " de un total de ".$paging->numTotalRegistros()."<br /><br />"; 

?>
            </td>
          </tr>
</table>
    <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="10" align="right" class="lista" style="font-size: 9px"><?php 
    // Imprimimos la barra de navegaci&oacute;n 
    echo "<div class='navigation'>".$paging->fetchNavegacion()."</div>"; 
     
?></td>
        </tr>
    </table></td>
</tr>
</table>
</BODY></HTML>
