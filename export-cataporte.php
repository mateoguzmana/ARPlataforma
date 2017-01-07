<? 
session_start();
date_default_timezone_set('America/Bogota');
setlocale(LC_ALL,"es_ES");

$nombreuser					=	$_SESSION['Empresa'];

$Idca 					= $_REQUEST["Id"];
$Empresa 				= $_REQUEST["Empresa"];

$FechaI					= date("Y-m-d H:i:s");


include("conexion.php");

$query009		=	"SELECT* FROM Empresas where Nit = '$Empresa' " ;
$result009		=	mysql_query($query009, $id);

While($row009	=	mysql_fetch_array($result009))
{
$Nombreempre	=	$row009["Nombre"];
}


$query008		=	"SELECT* FROM Maestro " ;
$result008		=	mysql_query($query008, $id);

While($row008	=	mysql_fetch_array($result008))
{
$Identificacion		=	$row008["Identificacion"];
$Nombrer			=	$row008["Nombre"];
$Direccion			=	$row008["Direccion"];
$Telefono			=	$row008["Telefono"];
}

include("PHPPaging.lib.php");

header("Content-Type: application/vnd.ms-excel");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=reporte-cataporte-$Idca.xls");





 

$Fechahoy= date("Y-m-d");	



					
?>

<HTML LANG="es">
<TITLE>::. Reporte Cataporte Vales - Nro = <?=$Idca?> .::</TITLE>
</head>
<body>





<TABLE BORDER=1 align="center" CELLPADDING=1 CELLSPACING=1>



<TR>
<TD align="left"><span style="font-size: 18px"><strong><?=$Nombreempre?> <br> NRO. CATAPORTE: <?=$Idca?></strong></span></TD>



</TR>
</TABLE>


<TABLE BORDER=1 align="center" CELLPADDING=1 CELLSPACING=1>



<TR>
<TD align="left"></TD>



</TR>
</TABLE>

<TABLE BORDER=1 align="center" CELLPADDING=1 CELLSPACING=1>


<TR>
<TD align="left"><strong>NRO. GUIA</strong></TD>
<TD align="left"><strong>REMESA</strong></TD>
<TD align="left"><strong>FECHA</strong></TD>
<TD align="left"><strong>DESTINATARIO</strong></TD>
<TD align="left"><strong>CIUDAD</strong></TD>
<TD align="left"><strong>TELEFONO</strong></TD>
<TD align="left"><strong>DIRECCION</strong></TD>
<TD align="left"><strong>DECLARADO</strong></TD>
<TD align="left"><strong>UNIDADES</strong></TD>
<TD align="left"><strong>PESO</strong></TD>
<TD align="left"><strong>OBSERVACIONES</strong></TD>


</TR>
<?
$queryu="SELECT COUNT(*) as Total FROM Controlbox where Cataporte = '$Idca'  and Empresa = '$Empresa'" ;
$resultu=mysql_query($queryu, $id);

While($rowu=mysql_fetch_array($resultu))
{
$Totalu=$rowu["Total"];
}

if($Totalu > 0)
{
			$query0081sg		=	"SELECT* FROM Controlbox where Cataporte = '$Idca' and Empresa = '$Empresa'" ;
			$result0081sg		=	mysql_query($query0081sg, $id);
										
			While($row0081sg	=	mysql_fetch_array($result0081sg))
			{
			$Id				= 	$row0081sg["Id"];	
			$Guia			=	$row0081sg["Guia"];
			$Descripcion	=	$row0081sg["Descripcion"];
			$Posarancel		=	$row0081sg["Posarancel"];
			$Declarado		=	$row0081sg["Declarado"];
			$Peso			=	$row0081sg["Peso"];
			$Piezas			=	$row0081sg["Piezas"];
			$Remitente		=	strtoupper($row0081sg["Remitente"]);
			$Diremitente	=	strtoupper($row0081sg["Diremitente"]);
			$Ciuremitente	=	$row0081sg["Ciuremitente"];
			$Estadoremitente=	$row0081sg["Estadoremitente"];
			$Zipremitente	=	$row0081sg["Zipremitente"];
			$Telremitente	=	$row0081sg["Telremitente"];
			$Destinatario	=	strtoupper($row0081sg["Destinatario"]);
			$Dirdestinatario=	strtoupper($row0081sg["Dirdestinatario"]);
			$Ciudestinatario=	strtoupper($row0081sg["Ciudestinatario"]);
			$Teldestinatario=	$row0081sg["Teldestinatario"];
			$Fechalee		=	$row0081sg["Fechalee"];
			$Destinatario	=	substr($Destinatario, 0, 25); 
			$Ciudestinatario=	substr($Ciudestinatario, 0, 15); 
					

						
echo "<tr align='left'>";
echo "<td align='left'>".$Guia."</td>";
echo "<td align='left'>".$Id."</td>";
echo "<td align='left'>".$Fechalee."</td>";
echo "<td align='left'>".$Destinatario."</td>";
echo "<td align='left'>".$Ciudestinatario."</td>";
echo "<td align='left'>".$Teldestinatario."</td>";
echo "<td align='left'>".$Dirdestinatario."</td>";
echo "<td align='left'>".$Declarado."</td>";
echo "<td align='left'>".$Piezas."</td>";
echo "<td align='left'>".$Peso."</td>";
echo "<td align='left'>".$Descripcion."</td>";


echo "</tr>";

			}
}
?>





</table>
</body>
</html>

