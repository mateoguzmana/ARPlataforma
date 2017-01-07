<?
include("conexion.php");


$Id			= 	$_REQUEST["Id"];
$Nro		=	$_REQUEST["Nro"];
$Nit		=	$_REQUEST["Nit"];
$Cedula		=	$_REQUEST["Cedula"];
$Placa		=	$_REQUEST["Placa"];
$Origen		=	$_REQUEST["Origen"];
$Codorg		=	$_REQUEST["Codorg"];
$Coddest	=	$_REQUEST["Coddest"];
$Destino	=	$_REQUEST["Destino"];
$Nit		=	$_REQUEST["Nit"];
$Empresa	=	$_REQUEST["Empresa"];
$Cedprop	=	$_REQUEST["Cedprop"];
$Propietario=	$_REQUEST["Propietario"];
$Agencia	=	$_REQUEST["Agencia"];


$query="UPDATE Manifiestos set Sucursal = '$Agencia', Nromanifiesto = '$Nro', Propietario = '$Cedprop', Conductor = '$Cedula', Placa = '$Placa', Empresa = '$Nit', Origen = '$Codorg', Nombreorg = '$Origen', Destino = '$Coddest', Nomdest = '$Destino' Where Id='$Id'";
$result=mysql_query($query, $id);



?>


<script type="text/javascript">

alert("La Operacion se realizo con Exito");		
parent.location.href="controlmanifiestos.php";

</script>