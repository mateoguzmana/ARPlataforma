<?
session_start();

include("conexion.php");


$Placa					= $_POST["Placa"];
$Usuarioing				= $_POST["Usuarioing"];
$Fechaing				= $_POST["Fechaing"];
$Cedula					= $_POST["Cedula"];
$Depcedula				= $_POST["select1"];
$Ciucedula				= $_POST["select2"];
$Nacionalidad			= $_POST["Nacionalidad"];
$Nacimiento				= $_POST["Nacimiento"];
$Nombre					= $_POST["Nombre"];
$Apellido1				= $_POST["Apellido1"];
$Apellido2	 			= $_POST["Apellido2"];
$Nombres				= $Apellido1." ".$Apellido2." ".$Nombre;
$Dir					= $_POST["Dir"];
$Departamento			= $_POST["select3"];
$Ciudad					= $_POST["select4"];
$Tel					= $_POST["Tel"];
$Tel2					= $_POST["Tel2"];
$Celular				= $_POST["Celular"];
$Celular2				= $_POST["Celular2"];
$Estadocivil			= $_POST["Estadocivil"];
$Conyuge				= $_POST["Conyuge"];
$Estado					= $_POST["Estado"];


$Licencia				= $_POST["Licencia"];
$Catlicencia			= $_POST["Catlicencia"];
$Vencelicen				= $_POST["Vencelicen"];
$Certjudicial			= $_POST["Certjudicial"];
$Vencejudicial			= $_POST["Vencejudicial"];
$Libtripulante			= $_POST["Libtripulante"];
$Cuenta					= $_POST["Cuente"];
$Banco					= $_POST["Banco"];
$Tipocta				= $_POST["Tipoctas"];
$Observaciones			= $_POST["Observaciones"];

$Autoriza				= $_POST["Autoriza"];
$Quien					= $_POST["Quien"];
$Cedul					= $_POST["Cedul"];
$Cedul 					= str_replace(" ","",$Cedul);

$Cuenta 				= str_replace(" ","",$Cuenta);


$Ref1					= $_POST["Ref1"];
$Telref1				= $_POST["Telref1"];
$Confref1				= $_POST["Confref1"];
$Ciudref1				= $_POST["Ciudref1"];
$Comref1				= $_POST["Comref1"];

$Ref2					= $_POST["Ref2"];
$Telref2				= $_POST["Telref2"];
$Confref2				= $_POST["Confref2"];
$Ciudref2				= $_POST["Ciudref2"];
$Comref2				= $_POST["Comref2"];

$Ref3					= $_POST["Ref3"];
$Telref3				= $_POST["Telref3"];
$Confref3				= $_POST["Confref3"];
$Ciudref3				= $_POST["Ciudref3"];
$Comref3				= $_POST["Comref3"];

$Ebel					= 	$_REQUEST["Ebel"];
$Pago					= 	$_REQUEST["Pago"];

if($Ebel == 1)
{
$querym="UPDATE Terceros set Ebel='$Ebel', Pago='$Pago' Where Nit='$Cedula'";
$resultm=mysql_query($querym, $id);
}


$Fechaing		= 	date("Y-m-d H:i:s");
$Creador		= 	$_SESSION['Empresa'];

$query2="SELECT COUNT(*) as Total2 FROM Conductores where Cedula = '$Cedula'";
$result2=mysql_query($query2, $id);
			
While($row2=mysql_fetch_array($result2))
{
$Total2=$row2["Total2"];
}


if($Total2 > 0)
{
$query="UPDATE Conductores set Depcedula='$Depcedula', Ciucedula='$Ciucedula', Nacionalidad='$Nacionalidad', Nacimiento='$Nacimiento', Nombre='$Nombre', Apellido1='$Apellido1', Apellido2='$Apellido2', Nombrefull='$Nombres', Dir='$Dir', Departamento='$Departamento', Ciudad='$Ciudad', Tel='$Tel', Tel2='$Tel2', Celular='$Celular', Celular2='$Celular2', Estadocivil='$Estadocivil', Conyuge='$Conyuge', Licencia='$Licencia', Catlicencia='$Catlicencia', Vencelicen='$Vencelicen', Certjudicial='$Certjudicial', Vencejudicial='$Vencejudicial', Libtripulante='$Libtripulante', Cuenta='$Cuenta', Banco='$Banco', Tipocta='$Tipocta', Observaciones='$Observaciones', Ref1='$Ref1', Telref1='$Telref1', Confref1='$Confref1', Ciudref1='$Ciudref1', Comref1='$Comref1', Ref2='$Ref2', Telref2='$Telref2', Confref2='$Confref2', Ciudref2='$Ciudref2', Comref2='$Comref2', Ref3='$Ref3', Telref3='$Telref3', Confref3='$Confref3', Ciudref3='$Ciudref3', Comref3='$Comref3', Usuariomod='$Creador', Fechamod='$Fechaing', Estado='$Estado', Placa='$Placa', Ebel='$Ebel', Pago='$Pago', Autoriza='$Autoriza', Quien='$Quien', Cedul='$Cedul' Where Cedula='$Cedula'";
$result=mysql_query($query, $id);
}
else
{
$sql="INSERT INTO Conductores (Depcedula, Ciucedula, Nacionalidad, Nacimiento, Nombre, Apellido1, Apellido2, Nombrefull, Dir, Departamento, Ciudad, Tel, Tel2, Celular,  Celular2,  Estadocivil,  Conyuge,  Licencia,  Catlicencia,  Vencelicen,  Certjudicial,  Vencejudicial,  Libtripulante,  Cuenta,  Banco,  Tipocta,  Observaciones,  Ref1,  Telref1,  Confref1,  Ciudref1,  Comref1,  Ref2,  Telref2,  Confref2,  Ciudref2,  Comref2,  Ref3,  Telref3,  Confref3,  Ciudref3,  Comref3, Placa,  Estado,  Cedula, Fechaing, Usuarioing, Ebel, Pago, Autoriza, Quien, Cedul)";

$sql.= "VALUES ('$Depcedula', '$Ciucedula', '$Nacionalidad', '$Nacimiento', '$Nombre', '$Apellido1', '$Apellido2', '$Nombres', '$Dir', '$Departamento', '$Ciudad', '$Tel', '$Tel2', '$Celular', '$Celular2', '$Estadocivil', '$Conyuge', '$Licencia', '$Catlicencia', '$Vencelicen', '$Certjudicial', '$Vencejudicial', '$Libtripulante', '$Cuenta', '$Banco', '$Tipocta', '$Observaciones', '$Ref1', '$Telref1', '$Confref1', '$Ciudref1', '$Comref1', '$Ref2', '$Telref2', '$Confref2', '$Ciudref2', '$Comref2', '$Ref3', '$Telref3', '$Confref3', '$Ciudref3', '$Comref3', '$Placa', '$Estado', '$Cedula', '$Fechaing', '$Creador', '$Ebel', '$Pago', '$Autoriza', '$Quien', '$Cedul')";
mysql_query($sql);	
}



$archivo1 = $_FILES['file1']['tmp_name'];
$archivo2 = $_FILES['file2']['tmp_name'];

if(!empty($archivo1))
{

(copy($archivo1, "conductores/".$Cedula.'.jpg'));
$foto1= $Cedula.'.jpg';

$query="UPDATE Conductores set Foto='$foto1' Where Cedula='$Cedula'";
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

$query="UPDATE Conductores set Docs='$foto2' Where Cedula='$Cedula'";
$result=mysql_query($query, $id);

}


$Plak	=	$_SESSION['Plak'];

if(!empty($Plak))
{
$query="UPDATE Vehiculos set Conductor='$Cedula' Where Placa='$Plak'";
$result=mysql_query($query, $id);	
}

header("location: ing-conductor.php?Id=$Id&dale=c");

?>