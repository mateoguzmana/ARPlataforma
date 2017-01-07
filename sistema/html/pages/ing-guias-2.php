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
	
	
																
$sql="INSERT INTO Controlbox (Guia, Descripcion, Posarancel, Declarado, Peso, Piezas, Remitente, Diremitente, Ciuremitente, Estadoremitente, Zipremitente, Telremitente, Destinatario, Dirdestinatario, Ciudestinatario, Teldestinatario, Empresa, Fechacarga, Usuariocarga, Depdestinatario, Manual)";
$sql.= "VALUES ('$Guia', '$Descripcion', '$Posarancel', '$Declarado', '$Peso', '$Piezas', '$Remitente', '$Diremitente', '$Ciuremitente', '$Estadoremitente', '$Zipremitente', '$Telremitente', '$Destinatario', '$Dirdestinatario', '$Ciudestinatario', '$Teldestinatario', '$Empresa', '$Fecha', '$Usuario', '$Depdestinatario', 1)";
mysql_query($sql);






				

?>

<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anterior']?>';
</script>	
