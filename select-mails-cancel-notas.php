<?
session_start();

include("conexion.php");
require('PHPMailer/class.phpmailer.php');
require('PHPMailer/class.smtp.php');

date_default_timezone_set('America/Bogota');

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$Usuario	= 	$_SESSION['Empresa'];

$Idviaje			=	$_REQUEST["Id"];


$_SESSION['procesar']="";

?>
<script type="text/javascript">
redireccionar = function()
{
self.parent.tb_remove();


self.parent.location = 'notaextra.php?Idplan=<?=$Idviaje?>'
};
</script>


<body onLoad="redireccionar();">
</body>