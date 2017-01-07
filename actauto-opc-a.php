<?
include("conexion.php");
session_start();

$Id				= 	$_REQUEST["Id"];
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
$Pesobruto		= 	$_REQUEST["Pesobruto"];

$Propietario	= 	$_REQUEST["Propietario"];
$Conductor		= 	$_REQUEST["Conductor"];

$Soat			= 	$_REQUEST["Soat"];
$Vencesoat		= 	$_REQUEST["Vencesoat"];
$Aseguradora	= 	$_REQUEST["Aseguradora"];
$Tarjempresa	= 	$_REQUEST["Tarjempresa"];
$Vencetarjeta	= 	$_REQUEST["Vencetarjeta"];
$Runt			= 	$_REQUEST["Runt"];
$Insptecnico	= 	$_REQUEST["Insptecnico"];
$Vencemientoinsp= 	$_REQUEST["Vencemientoinsp"];
$Respcivil		= 	$_REQUEST["Respcivil"];
$Venceresp		= 	$_REQUEST["Venceresp"];
$Asegurado		= 	$_REQUEST["Asegurado"];

$Satelital		= 	$_REQUEST["Satelital"];
$Usuario		= 	$_REQUEST["Usuario"];
$Pass			= 	$_REQUEST["Pass"];
$Empresate		= 	$_REQUEST["Empresate"];
$Empresaafilia	= 	$_REQUEST["Empresaafilia"];

$picplaca		= 	$_REQUEST["Placa"];
$picplaca		= 	strtolower($picplaca);

$Aprobacion		= 	$_REQUEST["Aprobacion"];
$Ministerio		= 	$_REQUEST["Ministerio"];
$Fechaaprueba	= 	date("Y-m-d H:i:s");
$Useraaprueba	= 	$_SESSION['Empresa'];
$Propio			= 	$_REQUEST["Propio"];
$Comentarios	= 	$_REQUEST["Comentarios"];


$Ref1			= 	$_REQUEST["Ref1"];
$Telref1		= 	$_REQUEST["Telref1"];
$Confref1		= 	$_REQUEST["Confref1"];
$Ciudref1		= 	$_REQUEST["Ciudref1"];
$Comref1		= 	$_REQUEST["Comref1"];

$Ref2			= 	$_REQUEST["Ref2"];
$Telref2		= 	$_REQUEST["Telref2"];
$Confref2		= 	$_REQUEST["Confref2"];
$Ciudref2		= 	$_REQUEST["Ciudref2"];
$Comref2		= 	$_REQUEST["Comref2"];

$Ref3			= 	$_REQUEST["Ref3"];
$Telref3		= 	$_REQUEST["Telref3"];
$Confref3		= 	$_REQUEST["Confref3"];
$Ciudref3		= 	$_REQUEST["Ciudref3"];
$Comref3		= 	$_REQUEST["Comref3"];


$Usuariocambio	= 	$_SESSION['Empresa'];
$Fechacambio	= 	date("Y-m-d H:i:s");


$query="UPDATE Vehiculos set Marca='$Marca', Modelo='$Modelo', Repotenciado='$Repotenciado', Color='$Color', Tipo='$Tipo', Tipocarro='$Tipocarro', Pais='$Pais', Servicio='$Servicio', Tipocoche='$Tipocoche', Clase='$Clase', Linea='$Linea', Codlinea='$Codlinea', Serie='$Serie', Motor='$Motor', Carroceria='$Carroceria', Idcarroceria='$Idcarroceria', Chasis='$Chasis', Combustible='$Combustible', Configuracion='$Configuracion', Placatrailer='$Placatrailer', Marcatrailer='$Marcatrailer', Paistrailer='$Paistrailer', Modelotrailer='$Modelotrailer', Configtrailer='$Configtrailer', Pesovehiculo='$Pesovehiculo', Pesotrailer='$Pesotrailer', Capacidadcarga='$Capacidadcarga', Pesobruto='$Pesobruto', Fechacambio='$Fechacambio', Usuariocambio='$Usuariocambio', Propietario='$Propietario', Conductor='$Conductor', Soat='$Soat', Vencesoat='$Vencesoat', Aseguradora='$Aseguradora', Tarjempresa='$Tarjempresa', Vencetarjeta='$Vencetarjeta', Runt='$Runt', Insptecnico='$Insptecnico', Vencemientoinsp='$Vencemientoinsp', Respcivil='$Respcivil', Venceresp='$Venceresp', Asegurado='$Asegurado', Satelital='$Satelital', Usuario='$Usuario', Pass='$Pass', Empresaafilia='$Empresaafilia', Ministerio='$Ministerio', Propio='$Propio', Comentarios = '$Comentarios', Ref1='$Ref1', Telref1='$Telref1', Confref1='$Confref1', Ciudref1='$Ciudref1', Comref1='$Comref1', Ref2='$Ref2', Telref2='$Telref2', Confref2='$Confref2', Ciudref2='$Ciudref2', Comref2='$Comref2', Ref3='$Ref3', Telref3='$Telref3', Confref3='$Confref3', Ciudref3='$Ciudref3', Comref3='$Comref3', Empresate = '$Empresate' Where Id='$Id'";
$result=mysql_query($query, $id);

if($Aprobacion <> '')
{
$query="UPDATE Vehiculos set Aprobacion='$Aprobacion', Fechaaprueba='$Fechacambio', Useraaprueba='$Usuariocambio' Where Id='$Id'";
$result=mysql_query($query, $id);
}

$archivo1 = $_FILES['file']['tmp_name'];

if(!empty($archivo1))
{

(copy($archivo1, "vehiculos/".$picplaca.'.jpg'));
$foto1= $picplaca.'.jpg';

$query="UPDATE Vehiculos set Foto='$foto1' Where Id='$Id'";
$result=mysql_query($query, $id);

$imagen = "vehiculos/".$foto1; 
 
require_once('resizeimage.php'); 

    $myimg1 = resizeImage('vehiculos/'.$foto1,150,120);
    // Creat the new file
    imagejpeg($myimg1,'vehiculos/'.$foto1,100);
}


header("location: ingauto.php?dale=c&Id=$Id&mod=si");
?>