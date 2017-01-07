<?
session_start();

date_default_timezone_set('America/Bogota');

$Usuario	= 	$_SESSION['Empresa'];

include("conexion.php");

require('PHPMailer/class.phpmailer.php');
require('PHPMailer/class.smtp.php');


$Idviaje			=   $_POST["Idviaje"];
$Inicioh0			=	$_POST["Inicioh"];
$Iniciom0			=	$_POST["Iniciom"];
$ctreporte			=	$_POST["ctreporte"];
$Mensaje1			=	strtoupper($_POST["ctreporte"]);
$Mensaje2			=	strtoupper($_POST["ctreportecliente"]);

$Tiempoviene		=	$_POST["Tiempo"];
$opera				=	$_POST["opera"];
$Reportexx			=	$_POST["Reporte"];
$Puestoxx			=	$_POST["Puesto"];



$TIEMPO 			=	$Inicioh0." : ".$Iniciom0;

$Nits		=	$_POST["Nits"];

$cbia		=	$_POST["cbia"];
$Iniciar	= 	$_REQUEST['Iniciar'];

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

header("location: adicionar.php?Id=$Idviaje");
}
else
{



$Tiiempoadd			=	$Inicioh0.":".$Iniciom0.":00";
$Tiiempoadd2 		= 	date("Y-m-d ".$Tiiempoadd);
$Tiiempoadd3 		= 	date("Y-m-d ".$Tiempoviene);
$horaactual 		= 	date("Y-m-d H:i:s");
$Fecha		 		= 	date("Y-m-d H:i:s");

					$Iniciohxa 	=  substr($horaactual, -8, 2);
					$Iniciomxa	=  substr($horaactual, -5, 2);
					$Iniciosxa	=  substr($horaactual, -2, 2);
					
					$horaactualx	=	$Iniciohxa.":".$Iniciomxa.":".$Iniciosxa;

/*
			$query008nywrhh="SELECT TIME_TO_SEC('$Tiempoviene') AS diferenciahh";

			$result008nywrhh=mysql_query($query008nywrhh, $id);
			
			While($row008nywrhh=mysql_fetch_array($result008nywrhh))
			{
			$diferenciahh 		=		$row008nywrhh["diferenciahh"];
			}


					$query008nyw8hh="SELECT '$Reportexx' - INTERVAL '$diferenciahh' DAY_SECOND as minutoshh" ;
					$result008nyw8hh=mysql_query($query008nyw8hh, $id);
														
					While($row008nyw8hh=mysql_fetch_array($result008nyw8hh))
					{
					$tiempoconhh 		=		$row008nyw8hh["minutoshh"];
					}
					


						$query008nywxx="SELECT TIMEDIFF('$tiempoconhh','$horaactual') AS diferenciaxx";
			
						$result008nywxx=mysql_query($query008nywxx, $id);
						
						While($row008nywxx=mysql_fetch_array($result008nywxx))
						{
						$diferenciaxx 		=		$row008nywxx["diferenciaxx"];
						}
						$diferenciaxx	=	str_replace("-","",$diferenciaxx);
			
echo $diferenciaxx."<br>";		
*/

					$query008nyw5="SELECT '$horaactual' - INTERVAL 10 DAY_MINUTE as menostime" ;
					$result008nyw5=mysql_query($query008nyw5, $id);
														
					While($row008nyw5=mysql_fetch_array($result008nyw5))
					{
					$tiempomenos10x 		=		$row008nyw5["menostime"];
					}
					

//echo $tiempomenos10x."<br>";	

					$Iniciohxx 	=  substr($diferenciaxx, -8, 2);
					$Iniciomxx	=  substr($diferenciaxx, -5, 2);
					$Iniciosxx	=  substr($diferenciaxx, -2, 2);
					
					$Tiempovienexx	=	$Iniciohxx.":".$Iniciomxx.":".$Iniciosxx;					
					
//echo $horaactual."<br>";
//echo $Puestoxx."<br>";
			
if($opera == "suma")
{
					$query008nyw8="SELECT ADDTIME('$Tiiempoadd', '$Tiempoviene') as minutos" ;
					$result008nyw8=mysql_query($query008nyw8, $id);
														
					While($row008nyw8=mysql_fetch_array($result008nyw8))
					{
					$tiempocon 		=		$row008nyw8["minutos"];
					}
					$operar	=	"incrementa";
					
					$Inicioh 	=  substr($tiempocon, -8, 2);
					$Iniciom	=  substr($tiempocon, -5, 2);
					$Inicios	=  substr($tiempocon, -2, 2);		
					
}
else
{
					$query8887x="UPDATE Recorrido set Tiempo = '$horaactual', Tiempoalert='$tiempomenos10x' Where Idpuesto = '$Puestoxx' and Idviaje = '$Idviaje'";
					$result8887x=mysql_query($query8887x, $id);
	
/*	
					$query008nyw8="SELECT ADDTIME('$Tiiempoadd', '$horaactualx') as minutos" ;
					$result008nyw8=mysql_query($query008nyw8, $id);
														
					While($row008nyw8=mysql_fetch_array($result008nyw8))
					{
					$tiempocon 		=		$row008nyw8["minutos"];
					}	
					
*/
					$operar	=	"descuenta";
					
					$Inicioh 	=  $Inicioh0;
					$Iniciom	=  $Iniciom0;
					$Inicios	=  ":00";
					
}




//echo $Tiempoviene."<br>";
//echo $Inicioh."<br>";
//echo $Iniciom."<br>";


	$query008="SELECT* FROM Viajes where Id = '$Idviaje'" ;
	$result008=mysql_query($query008, $id);
	
	While($row008=mysql_fetch_array($result008))
	{
	$Planviaje		=$row008["Planviaje"];
	}
		$tam = 1;
		$ini = 0; 
		
	$query008ny="SELECT* FROM Recorrido where Idviaje = '$Idviaje' and Estado = 0 order by Pos  LIMIT $ini, $tam";
	$result008ny=mysql_query($query008ny, $id);
						
	While($row008ny=mysql_fetch_array($result008ny))
						
	{

							$Tiempoalert1 		=		$row008ny["Tiempoalert"];
							$Mensaje	 		=		$row008ny["Mensaje"];
							$Estado	 			=		$row008ny["Estado"];
							$Tiempo	 			=		$row008ny["Tiempo"];
							$Suma	 			=		$row008ny["Suma"];
							$Reporte	 		=		$row008ny["Reporte"];
							$Pos	 			=		$row008ny["Pos"];
							$porcentaje			=		$row008ny["Porcentaje"];
							$pausa				=		$row008ny["Pausa"];
							$Idpuesto			=		$row008ny["Idpuesto"];
							
	}


					$eltimere 	=	strtotime($Tiempo);
														
																
					$eltimere += ($Inicioh * 60 * 60);
					$eltimere += ($Iniciom * 60);
					$eltimere += ($segtime);
											
					$eltimere  = date("Y-m-d H:i:s", $eltimere );
					
				
				if($Pos > 0)	
				{
						$Pose	=	$Pos - 1;
						
						$query008nyc="SELECT* FROM Recorrido where Idviaje = '$Idviaje' and Pos = '$Pose'";
						$result008nyc=mysql_query($query008nyc, $id);
											
						While($row008nyc=mysql_fetch_array($result008nyc))
						{
						$Idpuestoc 		=		$row008nyc["Idpuesto"];
						}
						
						$query00831a="SELECT* FROM Puestos where Id='$Idpuestoc'" ;
						$result00831a=mysql_query($query00831a, $id);
						
						While($row00831a=mysql_fetch_array($result00831a))
						{
						$Puesto 		= $row00831a["Nombre"];
						}	
						
				}
				else
				{
					$query00831a="SELECT* FROM Puestos where Id='$Idpuesto'" ;
					$result00831a=mysql_query($query00831a, $id);
					
					While($row00831a=mysql_fetch_array($result00831a))
					{
					$Puesto 		= $row00831a["Nombre"];
					}	
				}
				
				
				
					$query008nyw15="SELECT '$eltimere' - INTERVAL 10 DAY_MINUTE as minuto" ;
					$result008nyw15=mysql_query($query008nyw15, $id);
														
					While($row008nyw15=mysql_fetch_array($result008nyw15))
					{
					$tiempomenos10 		=		$row008nyw15["minuto"];
					}

				$query8887="UPDATE Recorrido set Tiempo = '$eltimere', Tiempoalert='$tiempomenos10' Where Idpuesto = '$Idpuesto' and Idviaje = '$Idviaje'";
				$result8887=mysql_query($query8887, $id);
				

$Mensaje1 = "AJUSTE DE TIEMPO, apartir del puesto de control de: ".$Puesto.", con Fecha Estimada de Reporte: ".$Reportexx.", se agregan: ".$Tiiempoadd." (hor:min:sec) y se ".$operar." ".$Tiempoviene." (hor:min:sec) debido a ajuste automatico de viaje, por motivo de: ".$ctreporte;


if($cbia == 'cbia')
{
$Mensajew			=	$Mensaje1;
}
else
{
$Mensajew			=	strtoupper($_POST["ctreportecliente"]);
}


	$sql="INSERT INTO  Notrasextra (Idplan, Fecha, Mensaje1, Mensaje2, Usuario)";
	$sql.= "VALUES ('$Idviaje', '$horaactual', '$Mensaje1', '$Mensajew', '$Usuario')";
	mysql_query($sql);
	
	
	
	
	
	
	
				$query008="SELECT* FROM Plan where Idplan = '$Planviaje' and Pos > '$Pos' order by Pos";
				$result008=mysql_query($query008, $id);
													
				While($row008=mysql_fetch_array($result008))
				{
					$Idpuesto 		=$row008["Idpuesto"];
					$Tiempo1		=$row008["Tiempo"];
					$Tiempo			=$row008["Tiempo"];
					$Pos			=$row008["Pos"];
														
					$Tiempo		=	date("Y-m-d ".$Tiempo);
														
											
					$eltimer 	=	strtotime($eltimere);
														
					$horatime 	+=  substr($Tiempo, -8, 2);
					$mintime	+=  substr($Tiempo, -5, 2);
					$segtime	+=  substr($Tiempo, -2, 2);
																	
					$eltimer += ($horatime * 60 * 60);
					$eltimer += ($mintime * 60);
					$eltimer += ($segtime);
											
					$eltimer  = date("Y-m-d H:i:s", $eltimer );
														
														
											
					$diferencia2r 		=		$eltimer;	
											
														
														
					$query008nyw5="SELECT '$eltimer' - INTERVAL 10 DAY_MINUTE as minuto" ;
					$result008nyw5=mysql_query($query008nyw5, $id);
														
					While($row008nyw5=mysql_fetch_array($result008nyw5))
					{
					$tiempomenos10 		=		$row008nyw5["minuto"];
					}
														
														
			
				$query8887="UPDATE Recorrido set Tiempo = '$diferencia2r', Tiempoalert='$tiempomenos10' Where Idpuesto = '$Idpuesto' and Idviaje = '$Idviaje'";
				$result8887=mysql_query($query8887, $id);
													
			}
			
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
												
if($Iniciar == 1)
{

$mail = new PHPMailer();


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
	$asunto = "INFORMACION SEGUMIENTO VEHICULAR"; 
	$body = ' 
	<strong> SISTEMA DE SEGUIMIENTO VEHICULAR</strong><br><br>
	El Departamento de Servicio al cliente de TNT EXPRESS le informa que se ha generado el siguiente reporte.<br><br>
	<strong> Esta es la informacion de su viaje: </strong><br><br>
	<strong> EMPRESA: </strong>' .$Nombreemp.' <br>
	<strong> NIT: </strong>' .$Empresaxcx1.' <br>
	<strong> RUTA DE VIAJE: </strong>' .$Nombreorgxx.' - '.$Nomdestxx.' <br>
	<strong> NRO. MANIFIESTO: </strong> ' .$Manifiestoe.' <br>
	<strong> PLACA DEL VEHICULO: </strong> '.$Placaxx.' <br>
	<strong> FECHA DE ADICION: </strong> '.$Fecha.' <br> 
	<strong> TIEMPO DE ADICION: </strong> '.$TIEMPO.' <br> <br>
	<strong> OBSERVACIONES: </strong> <br>'.$Mensajew.'<br> <br>
	
	
						Cualquier inquietud no dude en comunicarla a Nuestra Empresa. <br>   
						servicioalcliente@tntexpress.co   <br><br>  
						 
						Gracias por confiar en Nosotros.<br><br>
						 
						CONTROL TRAFICO<br>
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
						//mail($Emailxcx,$asunto,$body,$headers); 
						$mail->addBCC($Emailxcx,$Nombrexcx);  
						}
				}
	
				}

$mail->AddAddress("info@tntexpress.co", "TNT EXPRESS S.A");		

$mail->Send();
													
													//$headers .= "Bcc: mdmrurib@tntexpress.co, gerenciaTNT EXPRESS@une.net.co, auditora@tntexpress.co, servicioalcliente@tntexpress.co, basc@tntexpress.co\r\n"; 
													
													//mail($destinatario,$asunto,$body,$headers);  
													
	
	$sqlhhsx	 ="INSERT INTO  Notificaciones (Manifiesto, Fecha, Zona, Puesto, Detalles, Usuario, Empresa)";
	$sqlhhsx	.= "VALUES ('$Manifiestoe', '$Fecha', 'Adicion de Tiempo', '', '$Mensajew', '$Usuario', '$Nombreemp')";
	mysql_query($sqlhhsx);	
	
	
	
	
	}
	}
	
$_SESSION['ctreporte']="";

$_SESSION['ctreportecliente']="";

$_SESSION['cbia']="";

$_SESSION['procesar']="";

$_SESSION['Nitmail']="";

$_SESSION['enviru']="";	
}
			
			
			

header("location: finalizarpausa.php?Id=$Idviaje");
}
?>