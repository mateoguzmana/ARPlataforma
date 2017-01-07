<?
session_start(); 
			

			
date_default_timezone_set('America/Bogota');

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

session_start(); 

include("conexion.php");
require('PHPMailer/class.phpmailer.php');
require('PHPMailer/class.smtp.php');


$Id			 	= 		$_REQUEST['Id'];
$Fechaini	 	= 		$_REQUEST['Vence'];
$Manifiesto	 	= 		$_REQUEST['Manifiesto'];
$Iniciar	 	= 		$_REQUEST['Iniciar'];
$cargado	 	= 		$_REQUEST['cargado'];
$Captador	 	= 		$_REQUEST['Captador'];
$Cedcap	 		= 		$_REQUEST['Cedcap'];
$Creamanif	 	= 		$_REQUEST['Creamanif'];

$Usuario		= 		$_SESSION['Empresa'];

$anor 	= substr($Fechaini, -10, 4);
$mez	= substr($Fechaini, -5, 2);
$dya 	= substr($Fechaini, -2, 2);


			
			
$otroformat = $dya."/".$mez."/".$anor;

$Tih	 		= 		$_REQUEST['Tih'];
$Tim	 		= 		$_REQUEST['Tim'];

$Transitoi		=		$Tih.":".$Tim.":00";

$Tfh	 		= 		$_REQUEST['Tfh'];
$Tfm	 		= 		$_REQUEST['Tfm'];

$Transitof		=		$Tfh.":".$Tfm.":00";

$Plan	 		= 		$_REQUEST['Plan'];
$Idplan	 		= 		$_REQUEST['Idplan'];
$Contenedor	 	= 		$_REQUEST['Contenedor'];
$Exportacion	= 		$_REQUEST['Exportacion'];
$Pedido			= 		$_REQUEST['Pedido'];
$Idviajer		= 		$_REQUEST['Id'];
$Nota			= 		$_REQUEST['Nota'];

$Inicioh		= 		$_REQUEST['Inicioh'];
$Iniciom		= 		$_REQUEST['Iniciom'];

$Horain			=		$Inicioh.":".$Iniciom.":00";

$Horaini		=		$Fechaini.' '.$Inicioh.":".$Iniciom.":00";

$Observaciones	= 		$_REQUEST['Observaciones'];

$fechaahora	= date("Y-m-d H:i:s");

$fechaya 	= date("Y-m-d");
$horaya 	= date("H:i:s");

if( ( strtotime($fechaahora) >= strtotime($Horaini) ) )
{
session_register('Idp');
$_SESSION['Idp']=$Id;

session_register('Fechainip');
$_SESSION['Fechainip']=$Fechaini;

session_register('Planp');
$_SESSION['Planp']=$Plan;

session_register('Idplanp');
$_SESSION['Idplanp']=$Idplan;

session_register('Iniciohp');
$_SESSION['Iniciohp']=$Inicioh;

session_register('Iniciomp');
$_SESSION['Iniciomp']=$Iniciom;

session_register('Observacionesp');
$_SESSION['Observacionesp']=$Observaciones;

session_register('Contenedorp');
$_SESSION['Contenedorp']=$Contenedor;

session_register('Exportacionp');
$_SESSION['Exportacionp']=$Exportacion;

session_register('Pedidop');
$_SESSION['Pedidop']=$Pedido;

header("location: asignacionruta.php?problema=a"); 

}
else
{
	
$query="UPDATE Viajes set Iniciado='3' Where Id='$Id'";
$result=mysql_query($query, $id);
	

	$query0080		=	"SELECT* FROM Manifiestos where Nromanifiesto = '$Manifiesto'" ;
	$result0080		=	mysql_query($query0080, $id);
	
	While($row0080	=	mysql_fetch_array($result0080))
	{
	$Conductor				= $row0080["Conductor"];
	$Placa					= $row0080["Placa"];
	$Nombreorg				= $row0080["Nombreorg"];
	$Nombredest				= $row0080["Nomdest"];
	$Empresa				= $row0080["Empresa"];
	$Fechacrea				= $row0080["Fechacrea"];
	$Fechamani				= $row0080["Fecha"];
	}
	

			$fechadia	=	date("Y-m-d");

			$query008nyw		="SELECT DATEDIFF('$fechadia','$Fechamani') AS diferencia";

			$result008nyw		=mysql_query($query008nyw, $id);
			
			While($row008nyw	=mysql_fetch_array($result008nyw))
			{
			$diferencia 		=$row008nyw["diferencia"];
			}



$queryofola			=	"SELECT COUNT(*) as Totalof FROM Manifiestos where Conductor = '$Conductor'" ;
$resultofola		=	mysql_query($queryofola, $id);
							
While($rowofola		=	mysql_fetch_array($resultofola))
{
$Totalofola			=	$rowofola["Totalof"];
}


	
	
	
	$query008xc			=	"SELECT* FROM Empresas where Nit = '$Empresa'" ;
	$result008xc		=	mysql_query($query008xc, $id);
	
	While($row008xc		=	mysql_fetch_array($result008xc))
	{
	$Nombreemp			= $row008xc["Nombre"];
	}
	
	$query008xa			=	"SELECT* FROM Planes where Id = '$Idplan'" ;
	$result008xa		=	mysql_query($query008xa, $id);
	
	While($row008xa		=	mysql_fetch_array($result008xa))
	{
	$Nombreplan			= $row008xa["Nombre"];
	}	


	

	

function calcula_hora($fecha_entrada,$fecha_salida) 
{
$fecha1=strtotime($fecha_salida);
$fecha2=strtotime($fecha_entrada);
$diferencia=$fecha1-$fecha2;
$total=date("Y-m-d H:i:s",$diferencia);
return segundos_tiempo($diferencia);
}
function parteHora( $hora )
{    
				$horaSplit = explode(":", $hora);
				if( count($horaSplit) < 3 )
				{
					$horaSplit[2] = 0;
				}
				return $horaSplit;
}

function RestaHoras( $time1, $time2 )
{
				list($hour1, $min1, $sec1) = parteHora($time1);
				list($hour2, $min2, $sec2) = parteHora($time2);
		
				return date('H:i:s', mktime( $hour1 - $hour2, $min1 - $min2, $sec1 - $sec2));
}  

	$estado = 3;
	
	if($cargado == 1)
	{
	$query="SELECT SEC_TO_TIME(sum(TIME_TO_SEC(Tiempo))) AS Total From Plan where Idplan = '$Idplan' and Pos > 0" ;
	}
	else
	{
	$query="SELECT SEC_TO_TIME(sum(TIME_TO_SEC(Tiempo))) AS Total From Plan where Idplan = '$Idplan'" ;	
	}
	$result=mysql_query($query, $id);
	
	While($row=mysql_fetch_array($result))
	{
	$Total=$row["Total"];
	
	$hort = substr($Total, -8, 2);
	$mint = substr($Total, -5, 2);
	}


	
	
		    $horaactual 	= date("Y-m-d H:i:s");


			if($cargado == 1)
			{
			$query008="SELECT* FROM Plan where Idplan = '$Idplan' and Pos > 0 order by Pos" ;
			}
			else
			{
			$query008="SELECT* FROM Plan where Idplan = '$Idplan' order by Pos" ;
			}
			$result008=mysql_query($query008, $id);
			
			While($row008=mysql_fetch_array($result008))
			{
			$Idn			=$row008["Id"];
			$Idpuesto 		=$row008["Idpuesto"];
			$Tiempo1		=$row008["Tiempo"];
			$Tiempo			=$row008["Tiempo"];
			$Pos			=$row008["Pos"];
			









			$Tiempo		 	= date("Y-m-d  ".$Tiempo);
			
		//	echo $horaactual." -- ".$Tiempo1."<br>";
			
			$eltimer 	=  strtotime($Horain);
			
			$horatime 	+=  substr($Tiempo, -8, 2);
			$mintime	+=  substr($Tiempo, -5, 2);
			$segtime	+=  substr($Tiempo, -2, 2);
						
			$eltimer += ($horatime * 60 * 60);
			$eltimer += ($mintime * 60);
			$eltimer += ($segtime);

			$eltimer  = date("Y-m-d  H:i:s", $eltimer );

			
/*			echo "Inicio de recorrido   =    ".$Horaini."<br>"; 
			echo "Fecha fin recorrido   =    ".$fecha."<br>";
			echo "Tiempo de incremento  =    ".$Tiempo."<br>";
			echo "Tiempo mas incremento =    ".$eltimer."<br>";
*/			
			$query008nyw="SELECT '$eltimer' - INTERVAL 10 DAY_MINUTE as minuto" ;
			$result008nyw=mysql_query($query008nyw, $id);
			
			While($row008nyw=mysql_fetch_array($result008nyw))
			{
			$tiempomenos10 		=		$row008nyw["minuto"];
			}
			
			
			
		//echo "Lo que se resta = ".$diferenciadetiempo."<br><br><br>";
			
		
				$sqlq="INSERT INTO  Recorrido (Idviaje, Idpuesto, Suma, Tiempo, Tiempoalert, Pos)";
				$sqlq.= "VALUES ('$Id', '$Idpuesto', '$Tiempo1', '$eltimer', '$tiempomenos10', '$Pos')";
				mysql_query($sqlq);

				

			}	
			
				
				$query00831a="SELECT* FROM Recorrido where Idviaje='$Id' order by Pos asc" ;
				$result00831a=mysql_query($query00831a, $id);
				
				While($row00831a=mysql_fetch_array($result00831a))
				{
				$Idfin 		= $row00831a["Id"];
				$Tiempofin 	= $row00831a["Tiempo"];
				}	
				

	$sql="INSERT INTO  Tiempos (Idviaje, Idplan, Total, Inicio, Fin)";
	$sql.= "VALUES ('$Idviajer', '$Idplan', '$Total', '$Horaini', '$Tiempofin')";
	mysql_query($sql);
	
	$sqlt="INSERT INTO  tiempos (Idviaje, Idplan, Total, Inicio, Fin)";
	$sqlt.= "VALUES ('$Idviajer', '$Idplan', '$Total', '$Horaini', '$Tiempofin')";
	mysql_query($sqlt);
				
				
				
				$query8887="UPDATE Recorrido set  Reporte='$Tiempofin' Where Idviaje='$Id' and Id = '$Idfin'";
				$result8887=mysql_query($query8887, $id);

							
				$reversa = 1;
				
				$query00831="SELECT* FROM Recorrido where Idviaje='$Id' order by Pos asc" ;
				$result00831=mysql_query($query00831, $id);
				
				While($row00831=mysql_fetch_array($result00831))
				{
				$Idreco  	= $row00831["Id"];
				
						$query008312="SELECT* FROM Recorrido where Idviaje='$Id' and Pos = '$reversa' order by Pos asc" ;
						$result008312=mysql_query($query008312, $id);
				
						While($row008312=mysql_fetch_array($result008312))
						{
						$Reporte 	= $row008312["Tiempo"];
							
							$query888="UPDATE Recorrido set  Reporte='$Reporte' Where Idviaje='$Id' and Id = '$Idreco'";
							$result888=mysql_query($query888, $id);

						}	
				
				$reversa++;
				}
			
				
				






$query="UPDATE Viajes set Fechaini='$Fechaini', Planviaje='$Idplan', Transitoi='$Transitoi', Transitof='$Transitof', Contenedor='$Contenedor', Exportacion='$Exportacion', Pedido='$Pedido', Planviaje='$Idplan', Horaini = '$Horaini', Observaciones = '$Observaciones', Captador = '$Captador', Cedulacap = '$Cedcap', Horasignacion = '$fechaahora', Creamanif = '$Creamanif', Asignador = '$Usuario', Cargado = '$cargado'  Where Id='$Id'";
$result=mysql_query($query, $id);



if($Totalofola == 1)
{
	
					

					$destinatario = "info@tntexpress.co"; 
					$asunto = "Conductor para primer Viaje"; 
					$body = ' 
					<strong> SISTEMA DE SEGUIMIENTO VEHICULAR</strong><br><br>
					El Departamento de Servicio al cliente de TNT EXPRESS desea informarle que hay un conductor que viajara por primera vez.<br><br>
					<strong> Esta es la informacion del viaje: </strong><br><br>
					<strong> EMPRESA: </strong> ' .$Nombreemp.' <br>
					<strong> RUTA DE VIAJE: </strong> ' .$Nombreorg.' - '.$Nombredest.' <br>
					<strong> NRO. MANIEFIESTO: </strong>  ' .$Manifiesto.' <br>
					<strong> FECHA DE ASIGNACION: </strong>  '.$Horaini.' <br>
					<strong> PLACA DEL VEHICULO: </strong>  '.$Placa.' <br> <br>
					
					
					Cualquier inquietud no dude en comunicarla a Nuestra Empresa. <br>   
					servicioalcliente@tntexpress.co   <br><br>  
					 
					Gracias por confiar en Nosotros.<br><br>
					 
					Servicio al Cliente<br>
					www.tntexpress.co<br>

					
					
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
$mail->FromName = "TNT EXPRESS S.AS"; 
$mail->AddReplyTo("info@tntexpress.co", "TNT EXPRESS S.AS"); 


$mail->Subject = $asunto;
$mail->MsgHTML($body);
					

													
$mail->AddAddress("info@tntexpress.co", "TNT EXPRESS S.AS");		

$mail->Send();
					
					


	
	
}





if($Iniciar == 1)
{
	
			$query008xcx1			=	"SELECT* FROM Empresasremesas where Manifiesto = '$Manifiesto'";
			$result008xcx1			=	mysql_query($query008xcx1, $id);
			
			While($row008xcx1		=	mysql_fetch_array($result008xcx1))
			{
			$Empresaxcx1			=	$row008xcx1["Empresa"];
			$Remesaxcx1				=	$row008xcx1["Remesa"];
			
			$buscar="-"; 
			
			if (strrpos($Remesaxcx1, $buscar))
			{    
			$sitiene = "";   
			}
			else
			{      
			
			

			
			
			
				$query008xc			=	"SELECT* FROM Empresas where Nit = '$Empresaxcx1'" ;
				$result008xc		=	mysql_query($query008xc, $id);
				
				While($row008xc		=	mysql_fetch_array($result008xc))
				{
				$Nombreemp			= $row008xc["Nombre"];
				}
			
				


					$destinatario = "info@tntexpress.co"; 
					$asunto = "REPORTE DE ASIGNACION DE VIAJE"; 
					$body = ' 
					<strong> SISTEMA DE SEGUIMIENTO VEHICULAR</strong><br><br>
					El Departamento de Servicio al cliente de TNT EXPRESS desea informarle que se ha generado un viaje para su compañia.<br><br>
					<strong> Esta es la informacion de su viaje: </strong><br><br>
					<strong> EMPRESA: </strong> ' .$Nombreemp.' <br>
					<strong> NIT: </strong> ' .$Empresaxcx1.' <br>
					<strong> RUTA DE VIAJE: </strong> ' .$Nombreorg.' - '.$Nombredest.' <br>
					<strong> NRO. MANIEFIESTO: </strong>  ' .$Manifiesto.' <br>
					<strong> FECHA DE ASIGNACION: </strong>  '.$Horaini.' <br>
					<strong> PLACA DEL VEHICULO: </strong>  '.$Placa.' <br> <br>
					
					
					Cualquier inquietud no dude en comunicarla a Nuestra Empresa. <br>   
					servicioalcliente@tntexpress.co   <br><br>  
					 
					Gracias por confiar en Nosotros.<br><br>
					 
					Servicio al Cliente<br>
					www.tntexpress.co<br>

					
					
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
$mail->FromName = "TNT EXPRESS S.AS"; 
$mail->AddReplyTo("info@tntexpress.co", "TNT EXPRESS S.AS"); 


$mail->Subject = $asunto;
$mail->MsgHTML($body);





			$query008xcx			=	"SELECT* FROM Empresasmails where Nit = '$Empresaxcx1' and Nota1 = '1'";
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
			
			

$mail->AddAddress("info@tntexpress.co", "TNT EXPRESS S.AS");		

$mail->Send();
													
													
			
			


$sqlhhsx	 ="INSERT INTO  Notificaciones (Manifiesto, Fecha, Zona, Puesto, Detalles, Usuario, Empresa)";
$sqlhhsx	.= "VALUES ('$Manifiesto', '$Fechacrea', 'Asignacion de Ruta', '', '', '$Usuario', '$Nombreemp')";
mysql_query($sqlhhsx);	

			}


	}
}


if(!empty($Nota))
{
$sqlhhs	 ="INSERT INTO  Notasmanifiesto (Manifiesto, Fecha, Observaciones, Usuario)";
$sqlhhs	.= "VALUES ('$Manifiesto', '$Fechacrea', '$Nota', 'Sistema')";
mysql_query($sqlhhs);	
}

if(!empty($Observaciones))
{
$sqlhh	 ="INSERT INTO  Notasmanifiesto (Manifiesto, Fecha, Observaciones, Usuario)";
$sqlhh	.= "VALUES ('$Manifiesto', '$horaactual', '$Observaciones', '$Usuario')";
mysql_query($sqlhh);	
}


if($diferencia > 1)
{
	
	





					$destinatario = "info@tntexpress.co"; 
					$asunto = "VIAJE - MANIFIESTO ANTIGUO"; 
					$body = ' 
					<strong> SISTEMA DE SEGUIMIENTO VEHICULAR</strong><br><br>
					El Departamento de Servicio al cliente de TNT EXPRESS desea informarle que se ha asignado un viaje con un manifiesto antiguo.<br><br>
					<strong> Esta es la informacion de su viaje: </strong><br><br>
					<strong> EMPRESA: </strong> ' .$Nombreemp.' <br>
					<strong> RUTA DE VIAJE: </strong> ' .$Nombreorg.' - '.$Nombredest.' <br>
					<strong> NRO. MANIEFIESTO: </strong>  ' .$Manifiesto.' <br>
					<strong> FECHA MANIFIESTO: </strong>  ' .$Fechamani.' <br>
					<strong> FECHA DE ASIGNACION: </strong>  '.$Horaini.' <br>
					<strong> PLACA DEL VEHICULO: </strong>  '.$Placa.' <br> <br>
					
					
					Cualquier inquietud no dude en comunicarla a Nuestra Empresa. <br>   
					servicioalcliente@tntexpress.co   <br><br>  
					 
					Gracias por confiar en Nosotros.<br><br>
					 
					Servicio al Cliente<br>
					www.tntexpress.co<br>

					
					
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
$mail->FromName = "TNT EXPRESS S.AS"; 
$mail->AddReplyTo("info@tntexpress.co", "TNT EXPRESS S.AS"); 


$mail->Subject = $asunto;
$mail->MsgHTML($body);
					

$mail->AddAddress("info@tntexpress.co", "TNT EXPRESS S.AS");		

$mail->Send();
					





	
	
}

?>
<script language='javascript'>
parent.location.href=('transito.php');
</script>
<?
}
?>