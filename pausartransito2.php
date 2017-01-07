<?
session_start(); 

include("conexion.php");

$Usuario	= 	$_SESSION['Empresa'];

require('PHPMailer/class.phpmailer.php');
require('PHPMailer/class.smtp.php');

date_default_timezone_set('America/Bogota');

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

				

$Idviaje			=	$_POST["Idviaje"];
$Idpuesto			=	$_POST["Idpuesto"];

$Vence2				=	$_POST["Vence2"];
$Inicioh2			=	$_POST["Inicioh2"];
$Iniciom2			=	$_POST["Iniciom2"];
$Motivo				=	$_POST["tpausa"];
$ctreporte			=	$_POST["ctreporte"];
$ctreportecliente	=	$_POST["ctreportecliente"];
$envio				=	$_POST["envio"];
$Nits				=	$_POST["Nits"];


if($ctreportecliente == '')
{
$ctreportecliente	=	$ctreporte;	
}
else
{
$ctreportecliente	=	$ctreportecliente;		
}

$horaactual 		= date("Y-m-d H:i:s");

$Pausa				=	$horaactual;

$Despausa	 		=	$Vence2.' '.$Inicioh2.":".$Iniciom2.":00";

if ($Pausa >= $Despausa)
{
session_register('Vence');
$_SESSION['Vence']=$Vence;

session_register('Inicioh');
$_SESSION['Inicioh']=$Inicioh;

session_register('Iniciom');
$_SESSION['Iniciom']=$Iniciom;

session_register('Vence2');
$_SESSION['Vence2']=$Vence2;

session_register('Inicioh2');
$_SESSION['Inicioh2']=$Inicioh2;

session_register('Iniciom2');
$_SESSION['Iniciom2']=$Iniciom2;

session_register('Motivo');
$_SESSION['Motivo']=$Motivo;

session_register('Reporte');
$_SESSION['Reporte']=$ctreporte;

session_register('cbia');
$_SESSION['cbia']=$cbia;

header("location: pausartransito.php?Id=$Idviaje&problema=b"); 
}
else
{
				
						if($envio == 1 && !$Nits)
						{
						
						session_register('Vence');
						$_SESSION['Vence']=$Vence;
						
						session_register('Inicioh');
						$_SESSION['Inicioh']=$Inicioh;
						
						session_register('Iniciom');
						$_SESSION['Iniciom']=$Iniciom;
						
						session_register('Vence2');
						$_SESSION['Vence2']=$Vence2;
						
						session_register('Inicioh2');
						$_SESSION['Inicioh2']=$Inicioh2;
						
						session_register('Iniciom2');
						$_SESSION['Iniciom2']=$Iniciom2;
						
						session_register('Motivo');
						$_SESSION['Motivo']=$Motivo;
						
						session_register('Reporte');
						$_SESSION['Reporte']=$ctreporte;
						
						session_register('cbia');
						$_SESSION['cbia']=$cbia;
						
						session_register('procesar');
						$_SESSION['procesar']="si";
						
						session_register('enviru');
						$_SESSION['enviru']="si";
						
						header("location: pausartransito.php?Id=$Idviaje&Idpuesto=$Idpuesto&Pos=$Poss");
						}
						else
						{
						$Fecha	= date("Y-m-d H:i:s");	
	
						$query00831a="SELECT* FROM Puestos where Id='$Idpuesto'" ;
						$result00831a=mysql_query($query00831a, $id);
						
						While($row00831a=mysql_fetch_array($result00831a))
						{
						$Puesto 		= $row00831a["Nombre"];
						}	
		
						$queryt="SELECT* FROM Recorrido  where Idviaje  = '$Idviaje' and Idpuesto = '$Idpuesto'";
						$resultt=mysql_query($queryt, $id);
							
						While($rowt=mysql_fetch_array($resultt))
						{
						$Tiempo 	=$rowt["Tiempo"];
						}
				
						$Mensaje1 = "Pausa creada por motivo de ".$Motivo.": ".$ctreporte.". <br>Retornara a transito en la fecha/hora: ".$Despausa;
						$Mensaje2 = "Pausa creada por motivo de ".$Motivo.": ".$ctreportecliente.". <br>Retornara a transito en la fecha/hora: ".$Despausa;
						$horaactual 	= date("Y-m-d H:i:s");

						$sql="INSERT INTO  Pausar (Idviaje, Idpuesto, Pausa, Despausa, Motivo, Reporte)";
						$sql.= "VALUES ('$Idviaje', '$Idpuesto', '$Pausa', '$Despausa', '$Motivo','$ctreporte')";
						mysql_query($sql);
						
						$sql="INSERT INTO  Notrasextra (Idplan, Fecha, Mensaje1, Usuario)";
						$sql.= "VALUES ('$Idviaje', '$horaactual', '$Mensaje1', '$Usuario')";
						mysql_query($sql);
						

									$query008e="SELECT* FROM Viajes where  Id = '$Idviaje'" ;
									$result008e=mysql_query($query008e, $id);
									
									While($row008e=mysql_fetch_array($result008e))
									{
									$Manifiestoe		=$row008e["Manifiesto"];
									}


							$selecion		=	$_SESSION['Nitmail'];
							
							if(!empty($selecion))
							{
							
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
															
	
	
											$mail = new PHPMailer();
											
											$destinatario = "info@tntexpress.co";  
											$asunto = "INFORMACION SOBRE EL DESPACHO"; 
											$body = ' 
											<strong> SISTEMA DE SEGUIMIENTO VEHICULAR</strong><br><br>
											El Departamento de Servicio al cliente de TNT EXPRESS le informa que se ha generado el siguiente reporte.<br><br>
											<strong> Esta es la informacion de su viaje: </strong><br><br>
											<strong> EMPRESA: </strong>' .$Nombreemp.' <br>
											<strong> NIT: </strong>' .$Empresaxcx1.' <br>
											<strong> NRO. MANIFIESTO: </strong> ' .$Manifiestoe.' <br>
											<strong> PLACA DEL VEHICULO: </strong> '.$Placaxx.' <br>
											<strong> FECHA DE REPORTE: </strong> '.$Fecha.' <br> <br>
											<strong> OBSERVACIONES: </strong> <br>'.$Mensaje2.'<br> <br>
											
											
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
													//$headers .= "Bcc: info@tntexpress.co\r\n"; 
													//dirección de respuesta, si queremos que sea distinta que la del remitente 
													$headers .= "Reply-To:".$Email."\r\n"; 
													
													//mail($destinatario,$asunto,$body,$headers); 
											

														$query008xcx			=	"SELECT* FROM Empresasmails where Nit = '$Empresaxcx1' and Nota2 = '1'";
														$result008xcx			=	mysql_query($query008xcx, $id);
														
														While($row008xcx		=	mysql_fetch_array($result008xcx))
														{
														$Emailxcx				=	$row008xcx["Email"];
														$Nombrexcx				=	$row008xcx["Nombre"];
														
														//mail($Emailxcx,$asunto,$body,$headers);  
														
															if(!empty($Emailxcx))
															{
																	if (filter_var($Emailxcx, FILTER_VALIDATE_EMAIL))
																	{
																	$mail->addBCC($Emailxcx,$Nombrexcx); 
																	}
															}
														
											
														}
														

													
														//mail($destinatario,$asunto,$body,$headers); 
														
														
														$mail->AddAddress("info@tntexpress.co", "TNT EXPRESS S.A");		
														
														$mail->Send();
														
													//$mail->addBCC("servicioalclienteTL@une.net.co","Servicio al Cliente"); 
													//$mail->addBCC("servicioalcliente@tntexpress.co","Servicio al Cliente"); 

													
													$sqlhhsx	 ="INSERT INTO  Notificaciones (Manifiesto, Fecha, Zona, Puesto, Detalles, Usuario, Empresa)";
													$sqlhhsx	.= "VALUES ('$Manifiestoe', '$Fecha', 'Pausa de Viaje', '', '$Mensaje2', '$Usuario', '$Nombreemp')";
													mysql_query($sqlhhsx);	
	
										}
								}

							}
							
						$_SESSION['ctreporte']="";
						
						$_SESSION['ctreportecliente']="";

						$_SESSION['Vence']="";
						
						$_SESSION['Inicioh']="";
						
						$_SESSION['Iniciom']="";;
						
						$_SESSION['Vence2']="";
						
						$_SESSION['Inicioh2']="";
						
						$_SESSION['Iniciom2']="";
						
						$_SESSION['Motivo']="";
						
						$_SESSION['Reporte']="";
						
						$_SESSION['cbia']="";
						
						$_SESSION['procesar']="";
						
						$_SESSION['enviru']="";
						
						$_SESSION['Nitmail']="";

						
						}

?>

<script type="text/javascript">
redireccionar = function()
{
opener.location.href="opciones-transito.php?Id=<?=$Idviaje?>";
window.close();
};
</script>


<body onLoad="redireccionar();">
</body>
<?
}
?>



