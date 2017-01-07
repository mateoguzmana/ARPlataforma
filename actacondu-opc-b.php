<?
session_start();

include("conexion.php");


$Id						= $_POST["Id"];
$Licencia				= $_POST["Licencia"];
$Catlicencia			= $_POST["Catlicencia"];
$Vencelicen				= $_POST["Vencelicen"];
$Certjudicial			= $_POST["Certjudicial"];
$Vencejudicial			= $_POST["Vencejudicial"];
$Libtripulante			= $_POST["Libtripulante"];
$Cuenta					= $_POST["Cuenta"];
$Banco					= $_POST["Banco"];
$Tipocta				= $_POST["Tipocta"];
$Observaciones			= $_POST["Observaciones"];
$Cedula					= $_POST["Cedula"];



$Fechaing		= 	date("Y-m-d H:i:s");
$Creador		= 	$_SESSION['Empresa'];

$query="UPDATE Conductores set Licencia='$Licencia', Catlicencia='$Catlicencia', Vencelicen='$Vencelicen', Certjudicial='$Certjudicial', Vencejudicial='$Vencejudicial', Libtripulante='$Libtripulante', Cuenta='$Cuenta', Banco='$Banco', Tipocta='$Tipocta', Observaciones='$Observaciones' , Usuariomod='$Creador', Fechamod='$Fechaing' Where Id='$Id'";
$result=mysql_query($query, $id);


$query="SELECT* FROM Conductores Order By Id Asc" ;
$result=mysql_query($query, $id);

While($row=mysql_fetch_array($result))
{
$Id=$row["Id"];
}

$archivo1 = $_FILES['file1']['tmp_name'];
$archivo2 = $_FILES['file2']['tmp_name'];

if(!empty($archivo1))
{

(copy($archivo1, "conductores/".$Cedula.'.jpg'));
$foto1= $Cedula.'.jpg';

$query="UPDATE Conductores set Foto='$foto1' Where Id='$Id'";
$result=mysql_query($query, $id);

$imagen = "conductores/".$foto1; 
 
require_once('resizeimage.php'); 

    $myimg1 = resizeImage('conductores/'.$foto1,150,120);
    // Creat the new file
    imagejpeg($myimg1,'conductores/'.$foto1,100);
}

if(!empty($archivo2))
{
	
(copy($archivo2, "Documentos/".$Cedula.'.zip'));
$foto2= $Cedula.'.zip';

$query="UPDATE Conductores set Docs='$foto2' Where Id='$Id'";
$result=mysql_query($query, $id);

}


header("location: ing-conductor.php?Id=$Id&dale=c");

?>