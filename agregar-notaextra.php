<?
session_start();

include("conexion.php");
require('PHPMailer/class.phpmailer.php');
require('PHPMailer/class.smtp.php');

date_default_timezone_set('America/Bogota');

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$Idviaje	=	$_POST["Idviaje"];
$Vence		=	$_POST["Vence"];
$Inicioh	=	$_POST["Inicioh"];
$Iniciom	=	$_POST["Iniciom"];
$Mensaje1	=	strtoupper($_POST["ctreporte"]);
$Mensaje2	=	strtoupper($_POST["ctreportecliente"]);
$Iniciar	= 	$_REQUEST['Iniciar'];
$Empresarem	=	$_POST["Empresa"];
$cbia		=	$_POST["cbia"];
$expandir	=	$_POST["expandir"];

$Usuario	= 	$_SESSION['Empresa'];

$Nits		=	$_POST["Nits"];

if($Iniciar == 1 && !$Nits)
{

session_register('ctreporte');
$_SESSION['ctreporte']=$Mensaje1;

session_register('ctreportecliente');
$_SESSION['ctreportecliente']=$Mensaje2;

session_register('cbia');
$_SESSION['cbia']=$cbia;

session_register('procesar');
$_SESSION['procesar']="si";

session_register('enviru');
$_SESSION['enviru']="si";

header("location: notaextra.php?Idplan=$Idviaje");
}
else
{


$Fecha		=	$Vence.' '.$Inicioh.":".$Iniciom.":00";

	if($cbia == 'cbia')
	{
	$Mensaje2	=	$Mensaje1;	
	}
	else
	{
	$Mensaje2	=	$Mensaje2;			
	}	
	


	$sql="INSERT INTO  Notrasextra (Idplan, Fecha, Mensaje1, Mensaje2, Usuario)";
	$sql.= "VALUES ('$Idviaje', '$Fecha', '$Mensaje1', '$Mensaje2', '$Usuario')";
	mysql_query($sql);
	
	

if($Iniciar == 1)
{
$mail = new PHPMailer();

	
$Novedad			=	$_POST["Novedad"];
$Ubicacion			=	strtoupper($_POST["Ubicacion"]);
$ctreportecliente	=	strtoupper($_POST["ctreportecliente"]);

	if(($Iniciar == 1) && $_SESSION['Cargoxix'] == 'SEGURIDAD')
	
	{
		if(!empty($ctreportecliente))
		{
		$Notaadd	=	'Nota adicional:<br>'.$ctreportecliente.'<br>';	
		}
			if($expandir == 'Nov')
			{
			$Menso	=	'Se informa que el vehiculo se encuentra en '.$Ubicacion.' con un atraso por  motivo de '.$Novedad.'. <br><br>'.$Notaadd;
			}
			else
			{
			$Menso	=	$ctreportecliente;
			}
	}
	else
	{
		$Menso	=	$Mensaje2;		
	}

	$queryxx="SELECT* FROM Notrasextra Order By Id Asc" ;
	$resultxx=mysql_query($queryxx, $id);
	
	While($rowxx=mysql_fetch_array($resultxx))
	{
	$Idxx=$rowxx["Id"];
	}

$querycc="UPDATE Notrasextra set Mensaje2='$Menso' Where Id='$Idxx'";
$resultcc=mysql_query($querycc, $id);


									$query008e="SELECT* FROM Viajes where  Id = '$Idviaje'" ;
									$result008e=mysql_query($query008e, $id);
									
									While($row008e=mysql_fetch_array($result008e))
									{
									$Manifiestoe		=$row008e["Manifiesto"];
									}
									
									$query0080xx		=	"SELECT* FROM Manifiestos where Nromanifiesto = '$Manifiestoe'" ;
									$result0080xx		=	mysql_query($query0080xx, $id);
									
									While($row0080xx	=	mysql_fetch_array($result0080xx))
									{
									$Placaxx						= $row0080xx["Placa"];
									$Empresaxx						= $row0080xx["Empresa"];
									$Nomdestxx						= $row0080xx["Nomdest"];
									$Nombreorgxx					= $row0080xx["Nombreorg"];
									$Conductorxx					= $row0080xx["Conductor"];
									}
									

							$selecion		=	$_SESSION['Nitmail'];
							
							foreach ($selecion as &$value) 
							{

									$query008xcx1			=	"SELECT* FROM Empresasremesas where Empresa = '$value' and Manifiesto = '$Manifiestoe' and Remesa NOT LIKE '%-%'";
									$result008xcx1			=	mysql_query($query008xcx1, $id);
									
									While($row008xcx1		=	mysql_fetch_array($result008xcx1))
									{
									$Empresaxcx1			=	$row008xcx1["Empresa"];
									
										$query008xc			=	"SELECT* FROM Empresas where Nit = '$Empresaxcx1'" ;
										$result008xc		=	mysql_query($query008xc, $id);
										
										While($row008xc		=	mysql_fetch_array($result008xc))
										{
										$Nombreemp			= $row008xc["Nombre"];
										}
														



$destinatario = "info@tntexpress.co";  
$asunto = "INFORMACION SOBRE EL DESPACHO"; 
$body = ' 
<strong> SISTEMA DE SEGUIMIENTO VEHICULAR</strong><br><br>
El Departamento de Servicio al cliente de TNT EXPRESS le informa que se ha generado el siguiente reporte.<br><br>
<strong> Esta es la informacion de su viaje: </strong><br><br>
<strong> EMPRESA: </strong>' .$Nombreemp.' <br>
<strong> NIT: </strong>' .$Empresaxcx1.' <br>
<strong> RUTA DE VIAJE: </strong>' .$Nombreorgxx.' - '.$Nomdestxx.' <br>
<strong> NRO. MANIFIESTO: </strong> ' .$Manifiestoe.' <br>
<strong> PLACA DEL VEHICULO: </strong> '.$Placaxx.' <br>
<strong> FECHA DE REPORTE: </strong> '.$Fecha.' <br> <br>
<strong> OBSERVACIONES: </strong> <br>'.$Menso.'<br> <br>


					Cualquier inquietud no dude en comunicarla a Nuestra Empresa. <br>   
					servicioalcliente@tntexpress.co   <br><br>  
					 
					Gracias por confiar en Nosotros.<br><br>
					 
					Servicio al Cliente<br>
					www.tntexpress.co<br>


<br>
'; 


$mail->IsSMTP();   
$mail->Host = "mail.tntexpress.co";    
$mail->SMTPAuth = true;    
$mail->Username = "info@tntexpress.co";   
$mail->Password = "tnt009";   
$mail->Port = "25";    
//$mail->SMTPDebug  = 1; 

$mail->From = "info@tntexpress.co";    
$mail->FromName = "TNT EXPRESS S.A"; 
$mail->AddReplyTo("info@tntexpress.co", "TNT EXPRESS S.A"); 


$mail->Subject = $asunto;
$mail->MsgHTML($body);


	
													//para el envío en formato HTML 
													$headers = "MIME-Version: 1.0\r\n"; 
													$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
													
													//dirección del remitente 
													$headers .= "From: TNT EXPRESS S.A <info@tntexpress.co>\r\n"; 
												//	$headers .= "Bcc: info@tntexpress.co\r\n"; 
													//dirección de respuesta, si queremos que sea distinta que la del remitente 
													$headers .= "Reply-To:".$Email."\r\n"; 
													
													//mail($destinatario,$asunto,$body,$headers); 



			$query008xcx			=	"SELECT* FROM Empresasmails where Nit = '$Empresaxcx1' and Nota2 = '1'";
			$result008xcx			=	mysql_query($query008xcx, $id);
			
			While($row008xcx		=	mysql_fetch_array($result008xcx))
			{
			$Emailxcx				=	$row008xcx["Email"];
			$Nombrexcx				=	$row008xcx["Nombre"];
			
				if(!empty($Emailxcx))
				{
						if (filter_var($Emailxcx, FILTER_VALIDATE_EMAIL))
						{
						$mail->addBCC($Emailxcx,$Nombrexcx); 
						}
				}

			}
			
$mail->AddAddress("info@tntexpress.co", "TNT EXPRESS S.A");		

$mail->Send();
													
													//mail($destinatario,$asunto,$body,$headers); 
													



$sqlhhsx	 ="INSERT INTO  Notificaciones (Manifiesto, Fecha, Zona, Puesto, Detalles, Usuario, Empresa)";
$sqlhhsx	.= "VALUES ('$Manifiestoe', '$Fecha', 'Reporte Extra', '', '$Menso', '$Usuario', '$Nombreemp')";
mysql_query($sqlhhsx);	

}
}
}

$_SESSION['ctreporte']="";

$_SESSION['ctreportecliente']="";

$_SESSION['cbia']="";

$_SESSION['procesar']="";

$_SESSION['Nitmail']="";

$_SESSION['enviru']="";
?>

<script type="text/javascript">
redireccionar = function()
{
window.opener.parent.location.reload();
window.close();
};
</script>


<body onLoad="redireccionar();">
</body>
<?
}
?>