<?
session_start(); 

include("conexion.php");

$Usuario	= $_SESSION['Empresa'];

$horaactual	= date("Y-m-d H:i:s");

$Idviaje	= $_REQUEST["Id"];
$Idpuesto	= $_REQUEST["Idpuesto"];
$Pos		= $_REQUEST["Pos"];



 
?>
<script type="text/javascript">
redireccionar = function()
{
self.parent.tb_remove();

parent.location = 'reportar-empty.php?Id=<?=$Idviaje?>&Idpuesto=<?=$Idpuesto?>&Pos=<?=$Pos?>';

}

</script>


<body onLoad="redireccionar();">
</body>