<?
include("conexion.php");
include("resize-class.php");

$Nombre			= 	$_REQUEST["Nombre"];
$Nit			= 	$_REQUEST["Nit"];
$Dir			= 	$_REQUEST["Dir"];
$Tel			= 	$_REQUEST["Tel"];
$Tel2			= 	$_REQUEST["Tel2"];
$Departamento	= 	$_REQUEST["select1"];
$Ciudad			= 	$_REQUEST["select2"];
$Email			= 	$_REQUEST["Email"];
$Web			= 	$_REQUEST["Web"];
$Comercial		= 	$_REQUEST["Comercial"];
$Cedcomer		= 	$_REQUEST["Cedcomer"];
$Fechaing		= 	$_REQUEST["Fechaing"];
$Creador		= 	$_REQUEST["Creador"];
$Arp			= 	$_REQUEST["ARP"];
$Despachos		= 	$_REQUEST["Despachos"];
$Ceddespa		= 	$_REQUEST["Ceddespa"];
$Calidad		= 	$_REQUEST["Calidad"];
$Cedcalidad		= 	$_REQUEST["Cedcalidad"];
$Clave			= 	$_REQUEST["Clave"];
$Remesa			= 	$_REQUEST["Remesa"];
$Tipoempresa	= 	$_REQUEST["Tipoempresa"];


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


$query2="SELECT COUNT(*) as Total2 FROM Empresas where Nit = '$Nit'";
$result2=mysql_query($query2, $id);
			
While($row2=mysql_fetch_array($result2))
{
$Total2=$row2["Total2"];
}
			
			
if(($Total2 <> 0))
{
header("location: ingempresagenera.php?dale=a");	
}
else
{

$sql="INSERT INTO  Empresas (Nit, Nombre, Dir, Tel, Tel2, Email, Departamento, Ciudad, Codciu, Coddep, Web, Fechaing, Creador, Clave)";
$sql.= "VALUES ('$Nit', '$Nombre', '$Dir', '$Tel', '$Tel2', '$Email', '$Nombredep', '$Nombreciu', '$Cod', '$Coddep', '$Web', '$Fechaing', '$Creador','$Clave')";
mysql_query($sql);


/*
		$archivo1 = $_FILES['file']['tmp_name'];
		
		$archiv			=			$_FILES['file']['name'];
		$extension 		= 			explode(".",$archiv);
		$ext			= 			$extension[1];
		
		
		if(!empty($archivo1))
		{
		$foto1= $Nit.".".$ext;
		
		(copy($archivo1, "Empresas/".$foto1));
		
		
		
		$query="UPDATE Empresas set Logo='$foto1' Where Id='$Id'";
		$result=mysql_query($query, $id);
		
		
			// *** 1) Initialise / load image
			$resizeObj = new resize("Empresas/".$foto1);
		
			// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
			$resizeObj -> resizeImage(300, 150, 'auto');
		
			// *** 3) Save image
			$resizeObj -> saveImage("Empresas/".$foto1, 100);
			
			
		}

*/


$query="SELECT* FROM Empresas Order By Id Asc" ;
$result=mysql_query($query, $id);

While($row=mysql_fetch_array($result))
{
$Id=$row["Id"];
}

header("location: ingempresagenera.php?dale=b&Id=$Id");
}
?>