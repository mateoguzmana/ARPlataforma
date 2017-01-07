<?
session_start();

if (empty($_SESSION['sesionx']))
{
header("Location: login.php");
}

include("../../includes/conexion.php");


$Casillero			=$_SESSION['IdR'];

$Id 				=$_REQUEST["Id"];

$Nombre				=$_REQUEST["Nombre"];
$Cedula				=$_REQUEST["Cedula"];
$Ciudad				=$_REQUEST["Ciudad"];
$Dir				=$_REQUEST["Direccion"];
$Telefono			=$_REQUEST["Telefono"];
$Celular			=$_REQUEST["Celular"];
$Contacto			=$_REQUEST["Contacto"];
$Celcontacto		=$_REQUEST["Celcontacto"];
$Email				=$_REQUEST["Email"];
$Licencia 			=$_REQUEST["Licencia"];
$Categoria 			=$_REQUEST["Categoria"];
$CertJudicial 		=$_REQUEST["CertJudicial"];

$sql="UPDATE Conductores SET Nombre='$Nombre', Cedula='$Cedula', Ciudad='$Ciudad', Direccion='$Direccion', 
Telefono='$Telefono', Celular='$Celular', Email='$Email', Licencia='$Licencia', Categoria='$Categoria', CertJudicial='$CertJudicial' WHERE Id='$Id'";
mysql_query($sql);

?>

<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anterior']?>';
</script>	
