<?
session_start();

include("../../includes/conexion.php");

$nite	=	$_POST["Placa"];


$query2="SELECT * FROM Vehiculos where Placa = '$nite'";
$result2=mysql_query($query2, $id);
			
while($row2=mysql_fetch_array($result2))
{
$Total2++;
}
			
if ($Total2 > 0)
{

echo '<br><span class="alert alert-danger">LA PLACA YA EXISTE <strong>X</strong></span>';
}
else
{
echo '<br><span class="alert alert-success">LA PLACA NO EXISTE <strong>✓</strong></span>';
}
?>