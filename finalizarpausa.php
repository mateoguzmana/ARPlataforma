<?
include("conexion.php");

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
date_default_timezone_set('America/Bogota');


$Idviaje 	= $_REQUEST["Id"];

?>
<script type="text/javascript">
redireccionar = function()
{
opener.location.href="opciones-transito.php?Id=<?=$Idviaje?>";
window.close();
};
</script>


<body onload="redireccionar();">
</body>