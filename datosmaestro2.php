<?
include("conexion.php");


$Id					=$_POST["Id"];

$Identificacion		=$_POST["Identificacion"];
$Tipoident			=$_POST["Tipoident"];

$Nombre				= mb_strtoupper($_POST["Nombre"],'utf-8');
$Sigla				= mb_strtoupper($_POST["Sigla"],'utf-8');
$Direccion			= mb_strtoupper($_POST["Direccion"],'utf-8');
$Telefono			=$_POST["Telefono"];

$Departamento		=$_POST["select1"];
$Ciudad				=$_POST["select2"];

$query1		=	"SELECT* FROM Departamentos where Id = '$Departamento' " ;
$result1	=	mysql_query($query1, $id);

While($row1	=	mysql_fetch_array($result1))
{
$Nombredep			= mb_strtoupper($row1["Nombre"],'utf-8');
$Coddep				=$row1["Codigo"];
}

$query2		=	"SELECT* FROM Municipio where Id = '$Ciudad' " ;
$result2	=	mysql_query($query2, $id);

While($row2	=	mysql_fetch_array($result2))
{
$Nombreciu			= mb_strtoupper($row2["Nombre"],'utf-8');
$Cod				=$row2["Cod"];
}


$Representante		= mb_strtoupper($_POST["Representante"],'utf-8');
$Cedularep			=$_POST["Cedularep"];

$Ciudadcedula		=$_POST["selectb"];

$query3		=	"SELECT* FROM Municipio where Id = '$Ciudadcedula' " ;
$result3	=	mysql_query($query3, $id);

While($row3	=	mysql_fetch_array($result3))
{
$Nombreciurep		= mb_strtoupper($row3["Nombre"],'utf-8');
$Codrep				=$row3["Cod"];
}




$query="UPDATE Maestro set Identificacion='$Identificacion', Tipoident='$Tipoident', Nombre='$Nombre', Sigla='$Sigla', Direccion='$Direccion', Telefono='$Telefono', Departamento='$Nombredep', Ciudad='$Nombreciu', Codciudad='$Cod', Representante='$Representante', Cedularep='$Cedularep', Ciudadcedula='$Nombreciurep' Where Id='$Id'";
$result=mysql_query($query, $id);


?>


<script type="text/javascript">
	alert('La operacion se realizo con exito');
	window.location.href=('datosmaestro.php');
</script>