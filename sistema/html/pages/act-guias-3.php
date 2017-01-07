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

$Usuario 				= $_SESSION['usuario'];


$Fecha					= date('Y-m-d');

$Id 					= $_REQUEST["Id"];
$Guia					= $_POST["Guia"];
$Descripcion			= $_POST["Descripcion"];
$Peso					= $_POST["Peso"];
$Piezas					= $_POST["Piezas"];
$Remitente				= $_POST["Remitente"];
$Diremitente			= $_POST["Diremitente"];
$Ciuremitente			= $_POST["Ciuremitente"];
$Telremitente			= $_POST["Telremitente"];
$Destinatario			= $_POST["Destinatario"];
$Dirdestinatario		= $_POST["Dirdestinatario"];
$Ciudestinatario		= $_POST["Ciudestinatario"];
$Teldestinatario		= $_POST["Teldestinatario"];
$Empresa				= $_POST["Empresa"];
$Depdestinatario		= $_POST["Depdestinatario"];
	
$Declarado				= $_REQUEST["ValDeclarado"];

$Declarado				= str_replace("$","",$Declarado);
$Declarado				= str_replace(" ","",$Declarado);
$Declarado				= str_replace(",","",$Declarado);
$Declarado				= str_replace("_","",$Declarado);
$Declarado				= str_replace("___","",$Declarado);
$Declarado				= str_replace("__","",$Declarado);	
	
	
																
$sql="UPDATE Controlbox SET Guia='$Guia', Descripcion='$Descripcion', Posarancel='$Posarancel',
 Declarado='$Declarado', Peso='$Peso', Piezas='$Piezas', Remitente='$Remitente', Diremitente='$Diremitente',
  Ciuremitente='$Ciuremitente', Estadoremitente='$Estadoremitente', Zipremitente='$Zipremitente', 
  Telremitente='$Telremitente', Destinatario='$Destinatario', Dirdestinatario='$Dirdestinatario', Ciudestinatario='$Ciudestinatario', 
  Teldestinatario='$Teldestinatario', Empresa='$Empresa', Fechacarga='$Fecha', Usuariocarga='$Usuario', 
  Depdestinatario='$Depdestinatario', Manual=1 WHERE Id='$Id'";
mysql_query($sql,$id);






				

?>

<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anterior']?>';
</script>	
