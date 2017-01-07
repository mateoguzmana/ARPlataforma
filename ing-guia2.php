<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

include("conexion.php");

$Guia					= $_POST["Guia"];
$Descripcion			= $_POST["Descripcion"];
$Declarado				= $_POST["Declarado"];
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
$Empresa				= $_POST["Nit"];
$Depdestinatario		= $_POST["Depdestinatario"];
	
	
	
	
																
$sql="INSERT INTO Controlbox (Guia, Descripcion, Posarancel, Declarado, Peso, Piezas, Remitente, Diremitente, Ciuremitente, Estadoremitente, Zipremitente, Telremitente, Destinatario, Dirdestinatario, Ciudestinatario, Teldestinatario, Empresa, Fechacarga, Usuariocarga, Depdestinatario, Manual)";
$sql.= "VALUES ('$Guia', '$Descripcion', '$Posarancel', '$Declarado', '$Peso', '$Piezas', '$Remitente', '$Diremitente', '$Ciuremitente', '$Estadoremitente', '$Zipremitente', '$Telremitente', '$Destinatario', '$Dirdestinatario', '$Ciudestinatario', '$Teldestinatario', '$Empresa', '$Fecha', '$Usuario', '$Depdestinatario', 1)";
mysql_query($sql);


?>

<script type="text/javascript">
	alert('La operacion se realizo con exito');
	parent.location.href=('carga-guia.php');
</script>