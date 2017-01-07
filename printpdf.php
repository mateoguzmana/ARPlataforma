<?
include("conexion.php");
?>

<style type="text/css">
<!--
table	{ vertical-align: top; }
tr		{ vertical-align: top; }
td		{ vertical-align: top; }
}
.Estilo97 {font-size: 12px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
.Estilo98 {font-size: 8px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
.Estilo99 {font-size: 9px; font-family: Arial, Helvetica, sans-serif; }
.Estilo96 {font-size: 8px; font-family: Arial; }
-->
</style>
<page backtop="1mm" backbottom="1mm" backleft="8mm" backright="8mm">
<?
$Id = $_REQUEST["Id"];

$query008		=	"SELECT* FROM Viajes where Id = '$Id'" ;
$result008		=	mysql_query($query008, $id);

While($row008	=	mysql_fetch_array($result008))
{
$Planviaje		=	$row008["Planviaje"];
$Fecha			=	$row008["Fechaini"];
$Manifiesto		=	$row008["Manifiesto"];

}

	$query0081="SELECT* FROM Manifiestos where Nromanifiesto = '$Manifiesto'" ;
	$result0081=mysql_query($query0081, $id);

	While($row0081=mysql_fetch_array($result0081))
	{
	$Placa			=$row0081["Placa"];
	$Conductor		=$row0081["Conductor"];
	
		$query0083="SELECT* FROM Conductores where Cedula  = '$Conductor'" ;
		$result0083=mysql_query($query0083, $id);
		
		While($row0083=mysql_fetch_array($result0083))
		{
		$Nombrefull		=$row0083["Nombrefull"];
		$Celular		=$row0083["Celular"];
		$Foto			=$row0083["Foto"];
		}
		
	$Propietario	=$row0081["Propietario"];
	$Fecha			=$row0081["Fecha"];
	$Empresa		=$row0081["Empresa"];
	$Nombreorg		=$row0081["Nombreorg"];
	$Nomdest 		=$row0081["Nomdest"];
	$Sucursal  		=$row0081["Sucursal"];
	
		$query0087="SELECT* FROM Agencias where Cod  = '$Sucursal'" ;
		$result0087=mysql_query($query0087, $id);
		
		While($row0087=mysql_fetch_array($result0087))
		{
		$Nombre3	=$row0087["Nombre"];
		}
	}


if (empty($Foto))
	{
		$Foto = "conductor.jpg";
	}
?>

    <table width="900" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC" style="font-family: Arial, Helvetica, sans-serif; font-size: 10px; font-weight: bold;">
	  <tr>
	    <td height="25" valign="middle" bordercolor="#FFFFFF" style="font-family: Arial, Helvetica, sans-serif"><table width="900" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF"style="font-family: Arial, Helvetica, sans-serif; font-size: 10px; font-weight: bold;">
	      <tr>
	        <td width="338" height="107" valign="middle" style="font-family: Arial, Helvetica, sans-serif"><img src="http://tntexpress.co/sistema/Images/logo-empresa.png" width="297" height="101" /></td>
	        <td width="210" valign="middle" style="font-family: Arial, Helvetica, sans-serif"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 16px;"><img src="conductores/<?=$Foto?>" /></span></td>
	        <td width="169" height="107" align="center" valign="middle" style="font-family: Arial, Helvetica, sans-serif"><span style="font-size: 13px"><span class="Estilo97">RECUERDE HACER SU REPORTE<br />
EVITE SER SANCIONADO</span>&nbsp;&nbsp;</span></td>
          </tr>
	      </table>
	      <hr width="100%" size="1" color="#E9E9E9" />
	      <br />
          <table width="900" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" style="font-family: Arial, Helvetica, sans-serif; font-size: 10px; font-weight: bold;">
            <tr>
              <td width="96" height="10" valign="middle" style="font-family: Arial, Helvetica, sans-serif; font-weight: bold;">&nbsp;Manifiesto:</td>
              <td width="249" height="10" valign="middle" style="font-family: Arial, Helvetica, sans-serif; font-weight: normal;">&nbsp;
                <?=$Manifiesto?></td>
              <td width="96" height="10" valign="middle" style="font-family: Arial, Helvetica, sans-serif; font-weight: bold;">Conductor:</td>
              <td width="284" height="10" valign="middle" style="font-family: Arial, Helvetica, sans-serif; font-weight: normal;"><?=$Nombrefull?></td>
            </tr>
          </table>
          <table width="900" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" style="font-family: Arial, Helvetica, sans-serif; font-size: 10px; font-weight: bold;">
            <tr>
              <td width="96" height="10" valign="middle" style="font-family: Arial, Helvetica, sans-serif; font-weight: bold;">&nbsp;Sucursal:</td>
              <td width="249" height="10" valign="middle" style="font-family: Arial, Helvetica, sans-serif; font-weight: normal;">&nbsp;
                <?=$Nombre3?></td>
              <td width="96" height="10" valign="middle" style="font-family: Arial, Helvetica, sans-serif; font-weight: bold;">C&eacute;dula:</td>
              <td width="284" height="10" valign="middle" style="font-family: Arial, Helvetica, sans-serif; font-weight: normal;"><?=$Conductor?></td>
            </tr>
          </table>
          <table width="900" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" style="font-family: Arial, Helvetica, sans-serif; font-size: 10px; font-weight: bold;">
            <tr>
              <td width="96" height="10" valign="middle" style="font-family: Arial, Helvetica, sans-serif; font-weight: bold;">&nbsp;Origen:</td>
              <td width="249" height="10" valign="middle" style="font-family: Arial, Helvetica, sans-serif; font-weight: normal;">&nbsp;
                <?=$Nombreorg?></td>
              <td width="96" height="10" valign="middle" style="font-family: Arial, Helvetica, sans-serif; font-weight: bold;">Celular:</td>
              <td width="284" height="10" valign="middle" style="font-family: Arial, Helvetica, sans-serif; font-weight: normal;"><?=$Celular?></td>
            </tr>
          </table>
          <table width="900" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" style="font-family: Arial, Helvetica, sans-serif; font-size: 10px; font-weight: bold;">
            <tr>
              <td width="96" height="10" valign="middle" style="font-family: Arial, Helvetica, sans-serif; font-weight: bold;">&nbsp;Destino:</td>
              <td width="249" height="10" valign="middle" style="font-family: Arial, Helvetica, sans-serif; font-weight: normal;">&nbsp;
                <?=$Nomdest?></td>
              <td width="96" height="10" valign="middle" style="font-family: Arial, Helvetica, sans-serif; font-weight: bold;">Placa:</td>
              <td width="284" height="10" valign="middle" style="font-family: Arial, Helvetica, sans-serif; font-weight: normal;"><?=$Placa?></td>
            </tr>
          </table>
          <table width="900" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" style="font-family: Arial, Helvetica, sans-serif; font-size: 10px; font-weight: bold;">
            <tr>
              <td width="96" height="10" valign="middle" bgcolor="#F8F8F8" style="font-family: Arial, Helvetica, sans-serif; font-weight: bold;">&nbsp;Ruta:</td>
              <td width="344" height="10" valign="middle" bgcolor="#F8F8F8" style="font-family: Arial, Helvetica, sans-serif; font-weight: normal;">&nbsp;
                <?=$Nombreorg?>
                -
                <?=$Nomdest?></td>
              <td width="138" height="10" valign="middle" bgcolor="#F8F8F8" style="font-family: Arial, Helvetica, sans-serif; font-weight: normal;">&nbsp;</td>
              <td width="147" height="10" valign="middle" bgcolor="#F8F8F8" style="font-family: Arial, Helvetica, sans-serif; font-weight: normal;">&nbsp;</td>
            </tr>
          </table>
          <br />
<br />
<table border='1' align="center" cellpadding="0" cellspacing="0">
<tr>
<?
$queryaa="SELECT COUNT(*) as Total FROM Recorrido where Idviaje = '$Id' order by Pos";
$resultaa=mysql_query($queryaa, $id);

While($rowaa=mysql_fetch_array($resultaa))
{
$Totalaa=$rowaa["Total"];
}
if($Totalaa > 20)
{
$ancho	=	100;
$alto	=	70;
$cant	=	7;
}
else
{
$ancho	=	150;
$alto	=	100;	
$cant	=	5;
}
//realizar la consulta a la base de datos
$sql 	= "SELECT* FROM Recorrido where Idviaje = '$Id' order by Pos";
$res 	= mysql_query($sql, $id);
$nrow 	= mysql_num_rows($res);

$max 	= $cant; // Numero maximo de columnas por fila 
$bloq 	= 0; // Contador para el maximo 

while($reg = mysql_fetch_array($res)) 
{ 
$Idpuesto	=	$reg['Idpuesto'];

	if ($bloq < $max) 
	{ 

		$query0088="SELECT* FROM Puestos where Id  = '$Idpuesto'" ;
		$result0088=mysql_query($query0088, $id);
		
		While($row0088=mysql_fetch_array($result0088))
		{
		$Nombrer	=strtoupper($row0088["Nombre"]);
		$Tipo	 	=$row0088["Tipo"];
		$Iddep	 	=$row0088["Iddep"];
		$Ubicacion 	=strtolower($row0088["Ubicacion"]);
		
			$query0081="SELECT* FROM Departamentos where Id  = '$Iddep'" ;
			$result0081=mysql_query($query0081, $id);
			
			While($row0081=mysql_fetch_array($result0081))
			{
			$Nombrerr	=strtoupper($row0081["Nombre"]);
			}
		}

			$Contenido	 = '<span class="Estilo98">'.$Nombrer.'  - '.$Nombrerr.'</span>'; 
			$Contenido	.= '<br>'; 
			$Contenido	.= '<span class="Estilo99">'.$Tipo.'</span>'; 
			$Contenido	.= '<br><br><br>'; 
			$Contenido	.= '<span class="Estilo96">'.$Ubicacion.'</span>';

	
			echo '<td width="'.$ancho.'" height="'.$alto.'" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8">'.$Contenido.'</td>'; 
			$bloq++; 
	} 
	else
	{ 
			echo "</tr><tr>"; /* Se cierra una fila y se comienza la nueva */  
			$bloq = 0; 
	
		$query0088="SELECT* FROM Puestos where Id  = '$Idpuesto'" ;
		$result0088=mysql_query($query0088, $id);
		
		While($row0088=mysql_fetch_array($result0088))
		{
		$Nombrer	=strtoupper($row0088["Nombre"]);
		$Tipo	 	=$row0088["Tipo"];
		$Iddep	 	=$row0088["Iddep"];
		$Ubicacion 	=strtolower($row0088["Ubicacion"]);
		
			$query0081="SELECT* FROM Departamentos where Id  = '$Iddep'" ;
			$result0081=mysql_query($query0081, $id);
			
			While($row0081=mysql_fetch_array($result0081))
			{
			$Nombrerr	=strtoupper($row0081["Nombre"]);
			}
		}

			$Contenido	 = '<span class="Estilo98">'.$Nombrer.'  - '.$Nombrerr.'</span>'; 
			$Contenido	.= '<br>'; 
			$Contenido	.= '<span class="Estilo99">'.$Tipo.'</span>'; 
			$Contenido	.= '<br><br><br>'; 
			$Contenido	.= '<span class="Estilo96">'.$Ubicacion.'</span>';

	
			echo '<td width="'.$ancho.'" height="'.$alto.'" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8">'.$Contenido.'</td>';
			$bloq++; 
	} 
} 
?>
</tr>
</table><br /><br /></td>
      </tr>
    </table>



</page>
	