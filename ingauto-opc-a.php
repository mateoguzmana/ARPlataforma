<?
include("conexion.php");


$Placa			= 	$_REQUEST["Placa"];
$Marca			= 	$_REQUEST["Marca"];
$Modelo			= 	$_REQUEST["Modelo"];
$Repotenciado	= 	$_REQUEST["Repotenciado"];
$Color			= 	$_REQUEST["Color"];
$Tipo			= 	$_REQUEST["Tipo"];
$Tipocarro		= 	$_REQUEST["Clase"];
$Fecha			= 	$_REQUEST["Fecha"];
$Pais			= 	$_REQUEST["Pais"];
$Servicio		= 	$_REQUEST["Servicio"];
$Tipocoche		= 	$_REQUEST["Tipocoche"];
$Clase			= 	$_REQUEST["Clase"];
$Linea			= 	$_REQUEST["Linea"];
$Codlinea		= 	$_REQUEST["Codlinea"];
$Serie			= 	$_REQUEST["Serie"];
$Motor			= 	$_REQUEST["Motor"];
$Carroceria		= 	$_REQUEST["Carroceria"];
$Idcarroceria	= 	$_REQUEST["Idcarroceria"];
$Chasis			= 	$_REQUEST["Chasis"];
$Combustible	= 	$_REQUEST["Combustible"];
$Medidas		= 	$_REQUEST["Medidas"];
$Configuracion	= 	$_REQUEST["Configuracion"];
$Placatrailer	= 	$_REQUEST["Placatrailer"];
$Marcatrailer	= 	$_REQUEST["Marcatrailer"];
$Paistrailer	= 	$_REQUEST["Paistrailer"];
$Modelotrailer	= 	$_REQUEST["Modelotrailer"];
$Configtrailer	= 	$_REQUEST["Configtrailer"];
$Pesovehiculo	= 	$_REQUEST["Pesovehiculo"];
$Pesotrailer	= 	$_REQUEST["Pesotrailer"];
$Capacidadcarga	= 	$_REQUEST["Capacidadcarga"];
$Fechaing		= 	$_REQUEST["Fechaing"];
$Usuarioing		= 	$_REQUEST["Creador"];
$Pesobruto		= 	$_REQUEST["Pesobruto"];



$query2="SELECT COUNT(*) as Total2 FROM Vehiculos where Placa = '$Placa'";
$result2=mysql_query($query2, $id);
			
While($row2=mysql_fetch_array($result2))
{
$Total2=$row2["Total2"];
}
			
			
if(($Total2 <> 0))
{
header("location: ingauto.php?dale=a");	
}
else
{

$sql="INSERT INTO  Vehiculos (Placa, Marca, Modelo, Repotenciado, Color, Tipo, Tipocarro, Pais, Servicio, Tipocoche, Clase, Linea, Codlinea, Serie, Motor, Carroceria, Idcarroceria, Chasis, Combustible, Medidas, Configuracion, Placatrailer, Marcatrailer, Paistrailer, Modelotrailer, Configtrailer, Pesovehiculo, Pesotrailer, Capacidadcarga, Fechaing, Usuarioing,Pesobruto)";
$sql.= "VALUES ('$Placa', '$Marca', '$Modelo', '$Repotenciado', '$Color', '$Tipo', '$Tipocarro', '$Pais', '$Servicio', '$Tipocoche', '$Clase', '$Linea', '$Codlinea', '$Serie', '$Motor', '$Carroceria', '$Idcarroceria', '$Chasis', '$Combustible', '$Medidas', '$Configuracion', '$Placatrailer', '$Marcatrailer', '$Paistrailer', '$Modelotrailer', '$Configtrailer', '$Pesovehiculo', '$Pesotrailer', '$Capacidadcarga', '$Fechaing', '$Usuarioing', '$Pesobruto')";
mysql_query($sql);


$query="SELECT* FROM Vehiculos Order By Id Asc" ;
$result=mysql_query($query, $id);

While($row=mysql_fetch_array($result))
{
$Id=$row["Id"];
}

header("location: ingauto.php?dale=b&Id=$Id");
}
?>