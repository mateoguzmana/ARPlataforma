<?
session_start(); 

include("conexion.php");

date_default_timezone_set('America/Bogota');

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

				
$Usuario			= 	$_SESSION['Empresa'];

$Idviaje			=	$_POST["Idviaje"];
$Textourg			=	$_POST["Textourg"]." - ".$Usuario ;

$horaactual 		=	date("Y-m-d H:i:s");
					

			$query88877="UPDATE Viajes set Textourg = '$Textourg', Urgente='1' Where Id = '$Idviaje'";
			$result88877=mysql_query($query88877, $id);
			

			$sql="INSERT INTO  Notrasextra (Idplan, Fecha, Mensaje1, Mensaje2, Usuario)";
			$sql.= "VALUES ('$Idviaje', '$horaactual', '$Textourg', '$Textourg', 'SEG. ESPECIAL')";
			mysql_query($sql);
?>


<script type="text/javascript">
redireccionar = function()
{
opener.location.href="opciones-transito.php?Id=<?=$Idviaje?>";
window.close();
};
</script>


<body onLoad="redireccionar();">
</body>