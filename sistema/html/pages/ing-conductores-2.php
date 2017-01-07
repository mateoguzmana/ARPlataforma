<?
session_start();

if (empty($_SESSION['sesionx']))
{
header("Location: login.php");
}

include("../../includes/conexion.php");


$Casillero			=$_SESSION['IdR'];

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

$sql="INSERT INTO  Conductores (Nombre, Cedula, Ciudad, Direccion, Telefono, Celular, Email, Licencia, Categoria, CertJudicial)";
$sql.= "VALUES ('$Nombre','$Cedula','$Ciudad','$Dir','$Telefono','$Celular','$Email','$Licencia','$Categoria','$CertJudicial')";
mysql_query($sql);

?>

<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anterior']?>';
</script>	
