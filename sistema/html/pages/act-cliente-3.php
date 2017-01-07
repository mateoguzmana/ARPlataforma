<?
session_start();


if (empty($_SESSION['sesionx']))
{
?>
<script type="text/javascript">

	alert('Su sesion ha finadlizado.');
	parent.location.href=('login.php');

</script>
<?
}

include("../../includes/conexion.php");



$Casillero		=	$_SESSION['IdR'];

$Id					=$_REQUEST["Id"];
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


$queryka		=	"UPDATE Clientes set Nombre = '$Nombre', Cedula = '$Cedula', Ciudad = '$Ciudad', Dir = '$Dir', 
Telefono = '$Telefono', Celular = '$Celular', Contacto = '$Contacto', Celcontacto = '$Celcontacto', Email = '$Email', Contrasena = '$Contrasena'
,Especial='$Especial' Where Id='$Id'";
$resultka		=	mysql_query($queryka, $id);
				



?>

<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anterior']?>';
</script>	
