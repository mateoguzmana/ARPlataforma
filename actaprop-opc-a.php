<?
include("conexion.php");
session_start();

$Cedula			= 	$_REQUEST["Cedula"];
$Nombre			= 	$_REQUEST["Nombre"];
$Apellido1		= 	$_REQUEST["Apellido1"];
$Apellido2		= 	$_REQUEST["Apellido2"];
$Dir			= 	$_REQUEST["Dir"];
$Departamento	= 	$_REQUEST["select1"];
$Ciudad			= 	$_REQUEST["select2"];
$Tel			= 	$_REQUEST["Tel"];
$Tel2			= 	$_REQUEST["Tel2"];
$Celular		= 	$_REQUEST["Celular"];
$Observaciones	= 	$_REQUEST["Observaciones"];
$Nombrefull		= 	$Apellido1." ".$Apellido2." ".$Nombre;

$Estado			= 	$_REQUEST["Estado"];


$Fechaing		= 	date("Y-m-d H:i:s");
$Usuarioing		= 	$_SESSION['Empresa'];

$query2="SELECT COUNT(*) as Total2 FROM Propietarios where Cedula = '$Cedula'";
$result2=mysql_query($query2, $id);
			
While($row2=mysql_fetch_array($result2))
{
$Total2=$row2["Total2"];
}

if($Total2 > 0)
{

$query="UPDATE Propietarios set Nombre='$Nombre', Apellido1='$Apellido1', Apellido2='$Apellido2', Nombrefull = '$Nombrefull', Dir='$Dir', Departamento='$Departamento', Ciudad='$Ciudad', Tel='$Tel', Tel2='$Tel2', Celular='$Celular', Observaciones='$Observaciones', Fechacambio='$Fechaing', Usuariocambio='$Usuarioing', Estado='$Estado' Where Cedula='$Cedula'";
$result=mysql_query($query, $id);

}
else
{
$sql="INSERT INTO Propietarios (Cedula, Nombre, Apellido1, Apellido2, Nombrefull, Dir, Departamento, Ciudad, Tel, Tel2, Celular, Observaciones, Estado, Fechaing, Usuarioing)";
$sql.= "VALUES ('$Cedula', '$Nombre', '$Apellido1', '$Apellido2', '$Nombrefull', '$Dir', '$Departamento', '$Ciudad', '$Tel', '$Tel2', '$Celular', '$Observaciones', '$Estado', '$Fechaing', '$Usuarioing')";
mysql_query($sql);	
}

$Plak	=	$_SESSION['Plak'];

if(!empty($Plak))
{
$query="UPDATE Vehiculos set Propietario='$Cedula' Where Placa='$Plak'";
$result=mysql_query($query, $id);	
}

header("location: ing-propietario.php?dale=c");
?>