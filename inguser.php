<?
include("conexion.php");

$Cedula				= $_POST["Cedula"];
$Apellido1			= $_POST["Apellido1"];
$Apellido2			= $_POST["Apellido2"];
$Nombre1			= $_POST["Nombre1"];
$Nombre2			= $_POST["Nombre2"];
$Nombrefull			= $Apellido1." ".$Apellido2." ".$Nombre1." ".$Nombre2;
$Departamento		= $_POST["select1"];
$Ciudad 			= $_POST["select2"];
$Direccion			= $_POST["Direccion"];
$Telefono			= $_POST["Telefono"];
$Celular			= $_POST["Celular"];
$Oficina			= $_POST["Oficina"];
$Ext				= $_POST["Ext"];

if (!empty($Ext))
{
$Telofi				= $Oficina." Ext. ".$Ext;
}
else
{
$Telofi				= $Oficina; 
}

$Vencimienti		= $_POST["ctvence"];
$Email				= $_POST["Email"];
$Usuario			= $_POST["Usuario"];
$Cargo				= $_POST["Cargo"];
$Idcargo			= $_POST["Idcargo"];
$Clave				= $_POST["Clave"];
$Agencia			= $_POST["Agencia"];
$Alerta				= $_POST["Alerta"];
$Activo				= $_POST["Activo"];
$Tipo 				= $_POST["TipoUsuario"];

$query="SELECT COUNT(*) as Total FROM Usuarios where Cedula = '$Cedula' or Alias = '$Usuario'" ;
$result=mysql_query($query, $id);

While($row=mysql_fetch_array($result))
{
$Total=$row["Total"];
}
if($Total > 0)
{
header("location: usuarios.php?dale=no");	
}
else
{
	
if($Alerta == 1)
{
$destinatario = $Email; 
$asunto = "INFORMACION DE ACCESO A SISTEMA"; 
$cuerpo = ' 
<strong> SISTEMA DE CONTROL TNT EXPRESS</strong><br><br>
El Departamento de Seguridad de TNT Express lo ha habilitado para acceder via web al Sistema de Control Vehicular USSCARGO LOGISTICS.<br><br>
<strong> Esta es su información de acceso al sistema: </strong><br><br>
<strong> Usuario: </strong>' .$Cedula.' <br>
<strong> Contraseña: </strong> ' .$Clave .' <br><br>

<br> 
La dirección para entrar al sistema es : http://tntexpress.co/sistema/ <br> <br>
Cualquier inquietud no dude en comunicarla al Departamento de Seguridad de Nuestra Empresa.<br> <br>
Gracias por confiar en nosotros.
<br>
'; 


//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: USSCARGO LOGISTICS <info@tntexpress.co>\r\n"; 
//dirección de respuesta, si queremos que sea distinta que la del remitente 
$headers .= "Reply-To:".$Email."\r\n"; 

mail($destinatario,$asunto,$cuerpo,$headers); 

}

$sql="INSERT INTO Usuarios (Cedula, Apellido1, Apellido2, Nombre1, Nombre2, Nombrefull, Direccion, Ciudad, Departamento, Telefono, Email, Clave, Estado, Sucursal, Alias, Celular, Oficina, Tipo)";
$sql.= "VALUES ('$Cedula', '$Apellido1', '$Apellido2', '$Nombre1', '$Nombre2', '$Nombrefull', '$Direccion', '$Ciudad', '$Departamento', '$Telefono', '$Email', '$Clave', '$Activo', '$Agencia', '$Usuario', '$Celular', '$Telofi', '$Tipo')";
mysql_query($sql);


$query="SELECT* FROM Usuarios Order By Id Asc" ;
$result=mysql_query($query, $id);

While($row=mysql_fetch_array($result))
{
$Id=$row["Id"];
}

$Nombre	=	$Nombre1." ".$Apellido1;
$Nombre = strtolower($Nombre);
$Nombre = ucwords($Nombre);




header("location: usuarios.php?dale=si");
}
?>