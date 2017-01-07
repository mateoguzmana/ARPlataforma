<?
session_start();

include("../../includes/conexion.php");

$nite	=	$_POST["Cedula"];


$query2="SELECT * FROM Conductores where Cedula = '$nite'";
$result2=mysql_query($query2, $id);
			
while($row2=mysql_fetch_array($result2))
{
$Total2++;
}
			
if ($Total2 > 0)
{

echo '<br><span class="alert alert-danger">LA CEDULA YA EXISTE</span>';
}
else
{
echo '<br><span class="alert alert-success">LA CEDULA NO EXISTE <strong>✓</strong></span>';

}
?>