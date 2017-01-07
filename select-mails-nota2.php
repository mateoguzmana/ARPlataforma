<?
session_start(); 

include("conexion.php");

$Usuario	= $_SESSION['Empresa'];

$horaactual	= date("Y-m-d H:i:s");

$Idviaje	= $_POST["Idviaje"];
$Idpuesto	= $_POST["Idpuesto"];
$Pos		= $_POST["Pos"];



$Totalreg		= $_POST["Totalreg"];

$arry 			= array();

for ($a = 1 ; $a <= $Totalreg ; $a ++) 

{
$Reporta		= $_POST["Reporte".$a];

	if($Reporta==1)
	{
		$Empresa	= $_POST["Nit".$a];
		
		$arry[]		= $Empresa;
		
		
	}

}
$arry 		 = 	array_unique($arry);

session_register('Nitmail');
$_SESSION['Nitmail']=$arry;

session_register('procesar');
$_SESSION['procesar']="ok";

//header("location: okpagoremesas.php?Codigo=$Codigo");

 
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