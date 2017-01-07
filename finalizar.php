<?
session_start(); 
include("conexion.php");

date_default_timezone_set('America/Bogota');

require('PHPMailer/class.phpmailer.php');
require('PHPMailer/class.smtp.php');


$Idviaje		= $_REQUEST["Idviaje"];
$Remesa			= $_REQUEST["Remesa"];
$Usuario		= $_SESSION['Empresa'];

$Nota			= $_REQUEST["Nota"];
$Iniciar		= $_REQUEST["Iniciar"];
$Empresarem		= $_REQUEST["Empresarem"];

$ctreporte		=	$_POST["Nota"];
$Noved			=	$_POST["Noved"];


	if($Noved == 13)
	{
	$Mens	=	"Sin Novedad";
	}
	elseif($Noved == 3)
	{
	$Mens	=	"Devolución de Mercancía";
	}
	elseif($Noved == 10)
	{
	$Mens	=	"Faltante de mercancía";
	}
	elseif($Noved == 12)
	{
	$Mens	=	"Mercancía con averías";
	}
	elseif($Noved == 15)
	{
	$Mens	=	"Sobrante de mercancía";
	}
	elseif($Noved == 16)
	{
	$Mens	=	"Hurto mercancía";
	}	


$boton1			= $_REQUEST["btsubmit1"];
$boton2			= $_REQUEST["btsubmit2"];

$Cal1		= $_REQUEST["Cal1"];
$Cal2		= $_REQUEST["Cal2"];
$Cal3		= $_REQUEST["Cal3"];
$Cal4		= $_REQUEST["Cal4"];
$Cal5		= $_REQUEST["Cal5"];


$fechaahora		= date("Y-m-d H:i:s");

if($boton1 == 'FINALIZAR REMESA')
{

	
	$query="UPDATE Viajes set Estado = 1, Iniciado = 2, Usuariofinaliza = '$Usuario', Fechafinaliza = '$fechaahora' Where Id = '$Idviaje'";
	$result=mysql_query($query, $id);

	$query0080		=	"SELECT* FROM Viajes where Id = '$Idviaje'" ;
	$result0080		=	mysql_query($query0080, $id);
	
	While($row0080	=	mysql_fetch_array($result0080))
	{
	$Manifiesto				= $row0080["Manifiesto"];
	}
	
									$query2="UPDATE Nrorecepcion set Finaliza = 1 Where Id = '$Remesa'";
									$result2=mysql_query($query2, $id);
									
									$query2="UPDATE Controlbox set Finaliza = 1 Where Cataporte = '$Remesa'";
									$result2=mysql_query($query2, $id);
									
									
									
		$query008c="SELECT* FROM Remisiones where Manifiesto = '$Manifiesto' and Estad <> 1" ;
		$result008c=mysql_query($query008c, $id);
		
		While($row008c=mysql_fetch_array($result008c))
		{
		$Remesac		=$row008c["Remesa"];
		
		$query2="UPDATE Remisiones set Estad = 1, Userfin = '$Usuario', Fechafin = '$fechaahora' Where Remesa = '$Remesac'";
		$result2=mysql_query($query2, $id);
		
		}
		
		
	
		$SQL2x="Delete From Estados Where Manifiesto='$Manifiesto'";
		mysql_query($SQL2x);	

	
		$query0081		=	"SELECT* FROM Manifiestos where Nromanifiesto = '$Manifiesto'" ;
		$result0081		=	mysql_query($query0081, $id);
		
		While($row0081	=	mysql_fetch_array($result0081))
		{
		$Conductor				= $row0081["Conductor"];
		$Placa					= $row0081["Placa"];
		$Nombreorg				= $row0081["Nombreorg"];
		$Nomdest				= $row0081["Nomdest"];
		}
	
		$fechaahora	= date("Y-m-d H:i:s");
	
	
		$sqlhhsxc	 ="INSERT INTO Calificacion (Manifiesto, Remesa, Cedula, Cal1, Cal2, Cal3, Cal4, Cal5, Fecha, Usuario)";
		$sqlhhsxc	.= "VALUES ('$Manifiesto', '$Remesa', '$Conductor', '$Cal1', '$Cal2', '$Cal3', '$Cal4', '$Cal5', '$fechaahora', '$Usuario')";
		mysql_query($sqlhhsxc);
	

										$queryee="UPDATE Descarga set Tiempototalfin='$fechaahora' Where Idviaje='$Idviaje'";
										$resultee=mysql_query($queryee, $id);
										
								
										$query008exxx="SELECT* FROM Viajes where  Iniciado = 1" ;
										$result008exxx=mysql_query($query008exxx, $id);
										
										While($row008exxx=mysql_fetch_array($result008exxx))
										{
											$Manifiestoexxx		=$row008exxx["Manifiesto"];
										
											$query00812xxx="SELECT* FROM Manifiestos where Nromanifiesto = '$Manifiestoexxx' and Placa = '$Placa'" ;
											$result00812xxx=mysql_query($query00812xxx, $id);
										
											While($row00812xxx=mysql_fetch_array($result00812xxx))
											{
											$Placa2xxx			=$row00812xxx["Placa"];
											$Conductor2xxx		=$row00812xxx["Conductor"];
											$Nomdest2xxx		=$row00812xxx["Nomdest"];
											$Nromanifiesto2xxx	=$row00812xxx["Nromanifiesto"];
											}
										
										}		
										

					
					
					
					
		if($Iniciar == 1)
		{

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
									$Nitxx							= $row0080xx["Nit"];
									$Empresaxx						= $row0080xx["Empresa"];
									$Nomdestxx						= $row0080xx["Nomdest"];
									$Nombreorgxx					= $row0080xx["Nombreorg"];
									$Conductorxx					= $row0080xx["Conductor"];
									}
									
									$query0080xxc		=	"SELECT* FROM Empresasremesas where Remesa = '$Remesa'" ;
									$result0080xxc		=	mysql_query($query0080xxc, $id);
									
									While($row0080xxc	=	mysql_fetch_array($result0080xxc))
									{
									$Empresaxxc			=	$row0080xxc["Empresa"];
									}


					
					
										$query008xv			=	"SELECT* FROM Empresas where Nit = '$Empresaxxc'" ;
										$result008xv		=	mysql_query($query008xv, $id);
										
										While($row008xv		=	mysql_fetch_array($result008xv))
										{
										$Nombreemp			= $row008xv["Nombre"];
										}	

$mail = new PHPMailer();

		$destinatario = "info@tntexpress.co";  
		$asunto = "REPORTE DE DESCARGUE"; 
		$body = ' 
		<strong> SISTEMA DE SEGUIMIENTO VEHICULAR</strong><br><br>
		El Departamento de Servicio al cliente de TNT EXPRESS le informa que se ha generado el siguiente reporte.<br><br>
		<strong> Esta es la informacion de su viaje: </strong><br><br>
		<strong> Empresa: </strong>' .$Nombreemp.' <br>
		<strong> Nit: </strong>' .$Empresaxx.' <br>
		<strong> Ruta de Viaje: </strong>' .$Nombreorgxx.' - '.$Nomdestxx.' <br>
		<strong> Nro. Manifiesto: </strong> ' .$Manifiestoe.' <br>
		<strong> Placa del vehiculo: </strong> '.$Placaxx.' <br>
		<strong> Fecha: </strong> '.$fechaahora.' <br> <br>
		<strong> Novedad: </strong>' .strtoupper($Mens).' <br>
		<strong> Observaciones: </strong> <br>'.$Nota.' <br><br>
		
					Cualquier inquietud no dude en comunicarla a Nuestra Empresa. <br>   
					servicioalcliente@tntexpress.co   <br><br>  
					 
					Gracias por confiar en Nosotros.<br><br>
					 
					Servicio al Cliente<br>
					www.tntexpress.co<br>


<br>
		
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

			$query008xcx			=	"SELECT* FROM Empresasmails where Nit = '$Empresaxxc' and Nota3 = '1'";
			$result008xcx			=	mysql_query($query008xcx, $id);
			
			While($row008xcx		=	mysql_fetch_array($result008xcx))
			{
			$Emailxcx				=	$row008xcx["Email"];
			$Nombrexcx				=	$row008xcx["Nombre"];
			
			$mail->addBCC($Emailxcx,$Nombrexcx); 

			}
			
//$mail->addBCC("servicioalclienteTL@une.net.co","Servicio al Cliente"); 
//$mail->addBCC("servicioalcliente@tntexpress.co","Servicio al Cliente"); 

$mail->FromName = "Seguimiento Vehicular - USS CARGOLOGISTICS";

$mail->Subject = "Reporte de Descargue";


$mail->MsgHTML($body);

/* Sustituye  (CuentaDestino )  por la cuenta a la que deseas enviar por ejem. admin@domitienda.com  */
$mail->AddAddress("info@tntexpress.co", "USS CARGOLOGISTICS");


/* Sustituye (CuentaDeEnvio )  por la misma cuenta que usaste en la parte superior en este caso  prueba@domitienda.com  y sustituye (ContraseñaDeEnvio)  por la contraseña que tenga dicha cuenta */


$mail->Send();

		
$sqlhhsx	 ="INSERT INTO  Notificaciones (Manifiesto, Fecha, Zona, Puesto, Detalles, Usuario, Empresa)";
$sqlhhsx	.= "VALUES ('$Manifiestoe', '$fechaahora', 'Reporte de Descargue', '', '$Nota', '$Usuario', '$Nombreemp')";
mysql_query($sqlhhsx);



	$sql="INSERT INTO  Notasfinalizados  (Idviaje, Manifiesto, Remesa, Fecha, Reporte, Usuario, Enviado)";
	$sql.= "VALUES ('$Idviaje', '$Manifiestoe', '$Remesa', '$fechaahora', '$Nota', '$Usuario', '$envio')";
	mysql_query($sql);


		}
		
		
if($Noved <> 13)
{

$sql="INSERT INTO  Notasproblemas (Idviaje, Fecha, Problema, Usuario, Estado, Remesa, Noved)";
$sql.= "VALUES ('$Idviaje', '$fechaahora', '$Nota', '$Usuario', '0', '$Remesa', '$Noved')";
mysql_query($sql);

$query8887="UPDATE Viajes set  Problema='1', Leidaproblem = 0 Where Id = '$Idviaje'";
$result8887=mysql_query($query8887, $id);









$query2	=	"UPDATE Viajes set Calidad=3, Calidads=1, Usercalidad = 'CALIDAD' Where Id='$Idviaje'";
$result2	=	mysql_query($query2, $id);

}

$Mensaje1 = "FINALIZACION DE VIAJE : FINALIZAR REMESA - $Remesa - por motivo de ".strtoupper($Mens).": ".strtoupper($Nota);

	
$sql="INSERT INTO  Notrasextra (Idplan, Fecha, Mensaje1, Usuario)";
$sql.= "VALUES ('$Idviaje', '$fechaahora', '$Mensaje1', '$Usuario')";
mysql_query($sql);	

}



elseif($boton2 == 'ADICIONAR TIEMPO')
{



		if($Iniciar == 1)
		{

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
									$Nitxx							= $row0080xx["Nit"];
									$Empresaxx						= $row0080xx["Empresa"];
									$Nomdestxx						= $row0080xx["Nomdest"];
									$Nombreorgxx					= $row0080xx["Nombreorg"];
									$Conductorxx					= $row0080xx["Conductor"];
									}
									
									$query0080xxc		=	"SELECT* FROM Empresasremesas where Remesa = '$Remesa'" ;
									$result0080xxc		=	mysql_query($query0080xxc, $id);
									
									While($row0080xxc	=	mysql_fetch_array($result0080xxc))
									{
									$Empresaxxc			=	$row0080xxc["Empresa"];
									}


					
					
										$query008xv			=	"SELECT* FROM Empresas where Nit = '$Empresaxxc'" ;
										$result008xv		=	mysql_query($query008xv, $id);
										
										While($row008xv		=	mysql_fetch_array($result008xv))
										{
										$Nombreemp			= $row008xv["Nombre"];
										}	


		$destinatario = "info@tntexpress.co";  
		$asunto = "REPORTE DE DESCARGUE"; 
		$body = ' 
		<strong> SISTEMA DE SEGUIMIENTO VEHICULAR</strong><br><br>
		El Departamento de Servicio al cliente de USS CARGOLOGISTICS le informa que se ha generado el siguiente reporte.<br><br>
		<strong> Esta es la informacion de su viaje: </strong><br><br>
		<strong> Empresa: </strong>' .$Nombreemp.' <br>
		<strong> Nit: </strong>' .$Empresaxx.' <br>
		<strong> Ruta de Viaje: </strong>' .$Nombreorgxx.' - '.$Nomdestxx.' <br>
		<strong> Nro. Manifiesto: </strong> ' .$Manifiestoe.' <br>
		<strong> Placa del vehiculo: </strong> '.$Placaxx.' <br>
		<strong> Fecha: </strong> '.$fechaahora.' <br> <br>
		<strong> Novedad: </strong>' .strtoupper($Mens).' <br>
		<strong> Observaciones: </strong> <br>'.$Nota.' <br><br>
		
					Cualquier inquietud no dude en comunicarla a Nuestra Empresa. <br>   
					servicioalcliente@tntexpress.co   <br><br>  
					 
					Gracias por confiar en Nosotros.<br><br>
					 
					Servicio al Cliente<br>
					www.tntexpress.co<br>


<br>
		
		<br>
		'; 
$mail = new PHPMailer();			

													$mail->IsSMTP();   
													$mail->Host = "mail.tntexpress.co";    
													$mail->SMTPAuth = true;    
													$mail->Username = "info@tntexpress.co";   
													$mail->Password = "tnt009";   
													$mail->Port = "25";    
													//$mail->SMTPDebug  = 1; 


$mail->From = "info@tntexpress.co";

			$query008xcx			=	"SELECT* FROM Empresasmails where Nit = '$Empresaxxc' and Nota3 = '1'";
			$result008xcx			=	mysql_query($query008xcx, $id);
			
			While($row008xcx		=	mysql_fetch_array($result008xcx))
			{
			$Emailxcx				=	$row008xcx["Email"];
			$Nombrexcx				=	$row008xcx["Nombre"];
			
			$mail->addBCC($Emailxcx,$Nombrexcx); 

			}
			
//$mail->addBCC("servicioalclienteTL@une.net.co","Servicio al Cliente"); 
//$mail->addBCC("servicioalcliente@tntexpress.co","Servicio al Cliente"); 

$mail->FromName = "Seguimiento Vehicular - USS CARGOLOGISTICS";

$mail->Subject = "Reporte de Descargue";


$mail->MsgHTML($body);

/* Sustituye  (CuentaDestino )  por la cuenta a la que deseas enviar por ejem. admin@domitienda.com  */
$mail->AddAddress("info@tntexpress.co", "USS CARGOLOGISTICS");


/* Sustituye (CuentaDeEnvio )  por la misma cuenta que usaste en la parte superior en este caso  prueba@domitienda.com  y sustituye (ContraseñaDeEnvio)  por la contraseña que tenga dicha cuenta */


$mail->Send();
		
		


													

		
$sqlhhsx	 ="INSERT INTO  Notificaciones (Manifiesto, Fecha, Zona, Puesto, Detalles, Usuario, Empresa)";
$sqlhhsx	.= "VALUES ('$Manifiestoe', '$fechaahora', 'Reporte de Descargue', '', '$Nota', '$Usuario', '$Nombreemp')";
mysql_query($sqlhhsx);



	$sql="INSERT INTO  Notasfinalizados  (Idviaje, Manifiesto, Remesa, Fecha, Reporte, Usuario, Enviado)";
	$sql.= "VALUES ('$Idviaje', '$Manifiestoe', '$Remesa', '$fechaahora', '$Nota', '$Usuario', '$envio')";
	mysql_query($sql);
	


		}
		
		
		
if($Noved <> 13)
{

$sql="INSERT INTO  Notasproblemas (Idviaje, Fecha, Problema, Usuario, Estado, Remesa, Noved)";
$sql.= "VALUES ('$Idviaje', '$fechaahora', '$Nota', '$Usuario', '0', '$Remesa', '$Noved')";
mysql_query($sql);

$query8887="UPDATE Viajes set  Problema='1', Leidaproblem = 0 Where Id = '$Idviaje'";
$result8887=mysql_query($query8887, $id);

$sql="INSERT INTO  Notasdeudas  (Idviaje, Manifiesto, Fecha, Observaciones, Usuario)";
$sql.= "VALUES ('$Idviaje', '$Manifiestoe', '$fechaahora', '$Nota', '$Usuario')";
mysql_query($sql);


$sql="INSERT INTO  Notascomercial (Idviaje, Fecha, Problema, Usuario)";
$sql.= "VALUES ('$Idviaje', '$fechaahora', '$Nota', '$Usuario')";
mysql_query($sql);
	
$query	=	"UPDATE Viajes set Deudas=3, Cartera=1, Usercartera = 'MONICA' Where Id='$Idviaje'";
$result	=	mysql_query($query, $id);


$sqAl1="INSERT INTO  Notascalidad (Idviaje, Fecha, Observaciones, Usuario)";
$sqAl1.= "VALUES ('$Idviaje', '$fechaahora', '$Nota', '$Usuario')";
mysql_query($sqAl1);

$query2	=	"UPDATE Viajes set Calidad=3, Calidads=1, Usercalidad = 'CALIDAD' Where Id='$Idviaje'";
$result2	=	mysql_query($query2, $id);
}

		





$Contime		=	$_POST["example1"];

if($Contime <> '')
{


$Tiempodescarga		=	$_POST["example1"].":00";				

$horaactual 		= 	date("Y-m-d H:i:s");



			$query008nyw="SELECT TIMEDIFF('$Tiempodescarga','$horaactual') AS diferencia";

			$result008nyw=mysql_query($query008nyw, $id);
			
			While($row008nyw=mysql_fetch_array($result008nyw))
			{
			$diferencia 		=		$row008nyw["diferencia"];
			}

			$query008nywr="SELECT TIME_TO_SEC('$diferencia') AS diferenciar";

			$result008nywr=mysql_query($query008nywr, $id);
			
			While($row008nywr=mysql_fetch_array($result008nywr))
			{
			$diferenciar 		=		$row008nywr["diferenciar"];
			}
		
		
	$query008ny="SELECT* FROM Descarga where Idviaje = '$Idviaje'";
	$result008ny=mysql_query($query008ny, $id);
						
	While($row008ny=mysql_fetch_array($result008ny))
						
	{

							$Id			 		=		$row008ny["Id"];
							$Tiempoini	 		=		$row008ny["Tiempoini"];
							$Tiempofin	 		=		$row008ny["Tiempofin"];
							
	}
	
					$query008nyw8="SELECT '$horaactual' + INTERVAL '$diferenciar' DAY_SECOND as minutos" ;
					$result008nyw8=mysql_query($query008nyw8, $id);
														
					While($row008nyw8=mysql_fetch_array($result008nyw8))
					{
					$tiempocon 		=		$row008nyw8["minutos"];
					}

				$query8887="UPDATE Descarga set Tiempoini = '$horaactual', Tiempofin='$tiempocon' Where Id = '$Id'";
				$result8887=mysql_query($query8887, $id);
				

$Mensaje1 = "AJUSTE DE TIEMPO EN DESCARGA, se agregan: ".$diferencia." (hor:min:sec), por motivo de ".strtoupper($Mens).": ".strtoupper($Nota)."<br>Se contactara en la fecha/Hora: ".$Tiempodescarga;

	
$sql="INSERT INTO  Notrasextra (Idplan, Fecha, Mensaje1, Usuario)";
$sql.= "VALUES ('$Idviaje', '$fechaahora', '$Mensaje1', '$Usuario')";
mysql_query($sql);	

}










}



	

?>
<script type="text/javascript">
redireccionar = function()
{
opener.parent.location.href="<?=$_SESSION['anterior-transi']?>";
window.close();
};
</script>


<body onLoad="redireccionar();">
</body>