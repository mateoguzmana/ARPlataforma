<?
session_start();

if (empty($_SESSION['sesionx']))
{
header("Location: login.php");
}

include("../../includes/conexion.php");


$Casillero		=	$_SESSION['IdR'];

$Nombre				=$_REQUEST["Nombre"];
$Cedula				=$_REQUEST["Cedula"];
$Ciudad				=$_REQUEST["Ciudad"];
$Dir				=$_REQUEST["Direccion"];
$Telefono			=$_REQUEST["Telefono"];
$Celular			=$_REQUEST["Celular"];
$Contacto			=$_REQUEST["Contacto"];
$Celcontacto		=$_REQUEST["Celcontacto"];
$Email				=$_REQUEST["Email"];
$Contrasena			=$_REQUEST["Contrasena"];
$Especial 			=$_REQUEST["Especial"];



$queryevep			="SELECT COUNT(*) AS TOTAL FROM Clientes where Cedula = '$Cedula' and Muestra = 0";
$resultevep			=mysql_query($queryevep, $id);

while($rowevep		=mysql_fetch_array($resultevep))
{
$TOTAL				=$rowevep["TOTAL"];
}

if($TOTAL > 0)
{
?>
<script type="text/javascript">
alert('El cliente ingresado ya existe en el sistema.');
window.location.href = '<?=$_SESSION['anterior']?>';
</script>	
<?	
}
else
{
$sql="INSERT INTO  Clientes (Nombre, Cedula, Ciudad, Dir, Telefono, Celular, Contacto, Celcontacto, Email, Contrasena,Especial)";
$sql.= "VALUES ('$Nombre','$Cedula','$Ciudad','$Dir','$Telefono','$Celular','$Contacto','$Celcontacto','$Email','$Contrasena','$Especial')";
mysql_query($sql);


?>

<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anterior']?>';
</script>	
<?
}
?>