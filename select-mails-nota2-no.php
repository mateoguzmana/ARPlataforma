<?
session_start(); 

include("conexion.php");

$Usuario	= $_SESSION['Empresa'];

$horaactual	= date("Y-m-d H:i:s");

$Idviaje	= $_REQUEST["Id"];

?>
<script type="text/javascript">
redireccionar = function()
{
self.parent.tb_remove();
parent.location = 'notaextra-empty.php?Idplan=<?=$Idviaje?>';
};
</script>


<body onLoad="redireccionar();">
</body>