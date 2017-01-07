<?
session_start();

include("conexion.php");

$nite	=	$_GET["q"];

session_register('Plak');
$_SESSION['Plak']=$nite;

$query2="SELECT COUNT(*) as Total2 FROM Vehiculos where Placa = '$nite'";
$result2=mysql_query($query2, $id);
			
While($row2=mysql_fetch_array($result2))
{
$Total2=$row2["Total2"];
}
			
if ($Total2 == 1)
{
$query="SELECT* FROM Vehiculos where Placa = '$nite'";
$result=mysql_query($query, $id);

While($row=mysql_fetch_array($result))
{
$Id=$row["Id"];
}

echo '<br>LA PLACA YA EXISTE<br><br>';
echo '<table width="320" border="0" cellpadding="0" cellspacing="0">
<tr>
<td align="center"><a href="automotores.php?Id='.$Id.'&Opc=ver" target="contenido" onClick="lbIframeClose();"><img src="Images/bt-ver.png" border="0"></a></td>
</tr>
</table>';
}
else
{
echo '<br><br>LA PLACA NO EXISTE, DESEA INGRESARLA?';
echo '<br><br><a href="ingreso-placa-auto.php?Placa='.$nite.'&mod=si" target="contenido" onClick="lbIframeClose();"><img src="Images/bt-ingreso.png" border="0"></a>';
}
?>