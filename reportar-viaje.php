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

function hms2sec ($hms) 
{
list($h, $m, $s) = explode (":", $hms);
$seconds = 0;
$seconds += (intval($h) * 3600);
$seconds += (intval($m) * 60);
$seconds += (intval($s));
return $seconds;
}

$Usuario	= 	$_SESSION['Empresa'];


if(!empty($_POST["reporto"]))
{
$mensajw	=	"SE REPORTA";	
}
elseif(!empty($_POST["noreporto"]))
{
$mensajw	=	"NO REPORTO";	
}
elseif (!empty($_POST["sinreporte"]))
{
$mensajw	=	"SIN REPORTE";	
}

$Nombra				=	$_POST["Nombra"];
$Idviaje			=	$_POST["Idviaje"];
$Idpuesto			=	$_POST["Idpuesto"];
$Idpuesto2			=	$_POST["Idpuesto"];
$Vence				=	$_POST["Vence"];
$Inicioh			=	$_POST["Inicioh"];
$Iniciom			=	$_POST["Iniciom"];
$envio				=	$_POST["envio"];
$cbia				=	$_POST["cbia"];
$ctreporte			=	$_POST["ctreporte"];
$ctreportecliente	=	$_POST["ctreportecliente"];
$Predilecta			=	$_POST["Predilecta"];
$Poss				=	$_POST["Pos"];
$Empresarem			=	$_POST["Empresa"];
$Nits				=	$_POST["Nits"];




	$query008xcW			=	"SELECT* FROM Puestos where Id = '$Idpuesto2'" ;
	$result008xcW			=	mysql_query($query008xcW, $id);
	
	While($row008xcW		=	mysql_fetch_array($result008xcW))
	{
	$NombrepuesW			= $row008xcW["Nombre"];
	}
	
	

if($envio == 1 && !$Nits)
{

session_register('ctreporte');
$_SESSION['ctreporte']=$ctreporte;

session_register('ctreportecliente');
$_SESSION['ctreportecliente']=$ctreportecliente;

session_register('Predilectaw');
$_SESSION['Predilectaw']=$Predilecta;

session_register('cbia');
$_SESSION['cbia']=$cbia;

session_register('procesar');
$_SESSION['procesar']="si";

session_register('enviru');
$_SESSION['enviru']="si";

header("location: reportar.php?Id=$Idviaje&Idpuesto=$Idpuesto&Pos=$Poss");


}
else
{
	
						if($Idpuesto == '99998')
						{
									$query008ex="SELECT* FROM Viajes where  Id = '$Idviaje'" ;
									$result008ex=mysql_query($query008ex, $id);
									
									While($row008ex=mysql_fetch_array($result008ex))
									{
									$Manifiestoex		=$row008ex["Manifiesto"];
									}
									
									$query0ex="UPDATE Manifiestos set  Cargue = '$Vence' Where Nromanifiesto='$Manifiestoex'";
									$result0ex=mysql_query($query0ex, $id);	
						}
	
	
	if($cbia == 'cbia')
	{
	$ctreportecliente	=	$ctreporte;	
	}
	else
	{
	$ctreportecliente	=	$ctreportecliente;		
	}		


$ctreporte			=	$_POST["ctreporte"]." - ". $mensajw." | Puesto: ".$Nombra;


	$eltimera 			= date("Y-m-d H:i:s");

	$sql="INSERT INTO  Notrasextra (Idplan, Fecha, Mensaje1, Mensaje2, Usuario)";
	$sql.= "VALUES ('$Idviaje', '$eltimera', '$ctreporte', '$ctreportecliente', '$Usuario')";
	mysql_query($sql);
	
	

$Fechareport		=	$Vence.' '.$Inicioh.":".$Iniciom.":00";

$Horareportaje 		= 	$Inicioh.":".$Iniciom.":00";


								$queryp3			=	"SELECT COUNT(*) as Total1 FROM Recorrido where Idviaje = '$Idviaje'" ;
								$resultp3			=	mysql_query($queryp3, $id);
												
								While($rowp3		=	mysql_fetch_array($resultp3))
								{
								$Totalp3			=	$rowp3["Total1"];
								
								$Totalp3			=	$Totalp3 - 1;
								$Totalp3f			=	$Totalp3 - 1;
								}
								
								if ($Totalp3f == $Poss)
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

									
										$query008exxx="SELECT* FROM Viajes where  Iniciado = 1" ;
										$result008exxx=mysql_query($query008exxx, $id);
										
										While($row008exxx=mysql_fetch_array($result008exxx))
										{
										$Manifiestoxxx		=$row008exxx["Manifiesto"];
										
											$query00812xxx="SELECT* FROM Manifiestos where Nromanifiesto = '$Manifiestoxxx' and Placa = '$Placaxx'" ;
											$result00812xxx=mysql_query($query00812xxx, $id);
										
											While($row00812xxx=mysql_fetch_array($result00812xxx))
											{
											$Placa2xxx			=$row00812xxx["Placa"];
											$Conductor2xxx		=$row00812xxx["Conductor"];
											$Nomdest2xxx		=$row00812xxx["Nomdest"];
											$Nromanifiesto2xxx	=$row00812xxx["Nromanifiesto"];
											}
										
										}		
										

												
										
									
	
								}






$Poss				=	$_POST["Pos"];

						$query="SELECT SEC_TO_TIME(sum(TIME_TO_SEC(Suma))) AS Tiempo From Recorrido where Idviaje = '$Idviaje'" ;
						$result=mysql_query($query, $id);
							
						While($row=mysql_fetch_array($result))
						{
						$Total=$row["Tiempo"];
						
						//echo "Tiempo Total: ".$Total."<br>";
						}
						
if($Poss == 0)
{

				$queryp2="SELECT* FROM Recorrido Where Idviaje='$Idviaje' and Pos  = '$Poss'";
				$resultp2=mysql_query($queryp2, $id);
				
				While($rowp2=mysql_fetch_array($resultp2))
				{
				$Tiempot		=$rowp2["Tiempo"];
				}
	//			echo "Tiempo reporte: ".$Tiempot."<br>";
	//			echo "Fecha reporte: ".$Fechareport."<br>";
						
							$query008nywhhf6="SELECT TIMEDIFF('$Fechareport','$Tiempot') AS diferenciahhf6";
							$result008nywhhf6=mysql_query($query008nywhhf6, $id);
							
							While($row008nywhhf6=mysql_fetch_array($result008nywhhf6))
							{
							$diferenciarhhf6 		=		$row008nywhhf6["diferenciahhf6"];
							}
							$diferenciarhhf6 		= 		str_replace("-", "", $diferenciarhhf6);
							
					//		echo "Diferencia: ".$diferenciarhhf6."<br>";
							
							$horainie = hms2sec ($diferenciarhhf6);
							$horafine = hms2sec ($Total);
											
							$porcentajex = (round(($horainie / $horafine) * 100)) / 2;
							
					//		echo $porcentajex ;
					
					$query="UPDATE Recorrido set  Porcentaje='$porcentajex', Pausa = 0 Where Idviaje='$Idviaje'";
					$result=mysql_query($query, $id);
					
							
}
else
{

							
				$queryw="SELECT SEC_TO_TIME(sum(TIME_TO_SEC(Suma))) AS Tiempo From Recorrido where Idviaje ='$Idviaje' and Pos <= '$Poss'" ;
				$resultw=mysql_query($queryw, $id);
							
				While($roww=mysql_fetch_array($resultw))
				{
				$Totalw=$roww["Tiempo"];
							
			//	echo "Total restado: ".$Totalw."<br>";

				}

			
									$horainie = hms2sec ($Totalw);
									$horafine = hms2sec ($Total);
											
									$porcentajex = round(($horainie / $horafine) * 100);
							//		echo $porcentajex ;
								
				$query="UPDATE Recorrido set  Porcentaje='$porcentajex ', Pausa = 0 Where Idviaje='$Idviaje'";
				$result=mysql_query($query, $id);

			
}

if(!empty($_POST["reporto"]))
{
$mensaj	=	"SE REPORTA";	
}
elseif(!empty($_POST["noreporto"]))
{
$mensaj	=	"NO REPORTO";	
}
elseif (!empty($_POST["sinreporte"]))
{
$mensaj	=	"SIN REPORTE";	
}

$ctreportecliente = str_replace("SE REPORTA",$mensaj,$ctreportecliente);

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
if(!empty($_POST["reporto"]))
{
$valor = $_POST["reporto"];	

	$sql="INSERT INTO  Recorridoalert (Idplan, Idpuesto, Fechareport, Reporteint, Reporteclien, Envio, Estado)";
	$sql.= "VALUES ('$Idviaje', '$Idpuesto', '$Fechareport', '$ctreporte', '$ctreportecliente', '$Envio', '$valor')";
	mysql_query($sql);
	
	$query="UPDATE Recorrido set  Estado='1', Mensaje='ok', Fechareporte = '$Fechareport', Muestra = '1' Where Idviaje='$Idviaje' and Idpuesto = '$Idpuesto'";
	$result=mysql_query($query, $id);
	
	
				$queryp="SELECT* FROM Recorrido Where Idviaje='$Idviaje' and Idpuesto = '$Idpuesto'";
				$resultp=mysql_query($queryp, $id);
				
				While($rowp=mysql_fetch_array($resultp))
				{
				$Posp		=$rowp["Pos"];
				$Posp		=$Posp+1;
				
				$query="UPDATE Recorrido set  Muestra='1' Where Idviaje='$Idviaje' and Pos = '$Posp'";
				$result=mysql_query($query, $id);
				
				}
				
}

elseif(!empty($_POST["noreporto"]))
{
$valor = $_POST["noreporto"];

	$sql="INSERT INTO  Recorridoalert (Idplan, Idpuesto, Fechareport, Reporteint, Reporteclien, Envio, Estado)";
	$sql.= "VALUES ('$Idviaje', '$Idpuesto', '$Fechareport', '$ctreporte', '$ctreportecliente', '$Envio', '$valor')";
	mysql_query($sql);
	
	$query="UPDATE Recorrido set  Estado='3', Mensaje='ok', Fechareporte = '$Fechareport', Muestra = '1'  Where Idviaje='$Idviaje' and Idpuesto = '$Idpuesto'";
	$result=mysql_query($query, $id);
	
				$queryp="SELECT* FROM Recorrido Where Idviaje='$Idviaje' and Idpuesto = '$Idpuesto'";
				$resultp=mysql_query($queryp, $id);
				
				While($rowp=mysql_fetch_array($resultp))
				{
				$Posp		=$rowp["Pos"];
				$Posp		=$Posp+1;
				
				$query="UPDATE Recorrido set  Muestra='1' Where Idviaje='$Idviaje' and Pos = '$Posp'";
				$result=mysql_query($query, $id);
				
				}
	
}

elseif (!empty($_POST["sinreporte"]))
{
$valor = $_POST["sinreporte"];

	$sql="INSERT INTO  Recorridoalert (Idplan, Idpuesto, Fechareport, Reporteint, Reporteclien, Envio, Estado)";
	$sql.= "VALUES ('$Idviaje', '$Idpuesto', '$Fechareport', '$ctreporte', '$ctreportecliente', '$Envio', '$valor')";
	mysql_query($sql);
	
	$query="UPDATE Recorrido set  Estado='2', Mensaje='ok', Fechareporte = '$Fechareport', Muestra = '1'  Where Idviaje='$Idviaje' and Idpuesto = '$Idpuesto'";
	$result=mysql_query($query, $id);
	
	
				$queryp="SELECT* FROM Recorrido Where Idviaje='$Idviaje' and Idpuesto = '$Idpuesto'";
				$resultp=mysql_query($queryp, $id);
				
				While($rowp=mysql_fetch_array($resultp))
				{
				$Posp		=$rowp["Pos"];
				$Posp		=$Posp+1;
				
				$query="UPDATE Recorrido set  Muestra='1' Where Idviaje='$Idviaje' and Pos = '$Posp'";
				$result=mysql_query($query, $id);
				
				}

}





$query00831a="SELECT* FROM Recorrido  Where Idviaje='$Idviaje' and Idpuesto = '$Idpuesto'";
$result00831a=mysql_query($query00831a, $id);
				
While($row00831a=mysql_fetch_array($result00831a))
{
$Idreco 		= $row00831a["Id"];
$Posrec 		= $row00831a["Pos"];
$Tiemporep 		= $row00831a["Tiempo"];
}

			if($Posrec == '0')
			{
				$query008="SELECT* FROM Viajes where Id = '$Idviaje' order by Id" ;
				$result008=mysql_query($query008, $id);
				
				While($row008=mysql_fetch_array($result008))
				{
				$Planviaje		=$row008["Planviaje"];
				}
				
				
					$query="SELECT SEC_TO_TIME(sum(TIME_TO_SEC(Tiempo))) AS Total From Plan where Idplan = '$Planviaje'" ;
					$result=mysql_query($query, $id);
					
					While($row=mysql_fetch_array($result))
					{
					$Total=$row["Total"];
					
					$hort = substr($Total, -8, 2);
					$mint = substr($Total, -5, 2);
					}
					
					$horinicio = substr($Fechareport, -8, 2);
					$mininicio = substr($Fechareport, -5, 2);
					
					
					$Horain		=	$horinicio.":".$mininicio.":00";
					
					$anoini		= substr($Fechareport, -19, 4);
					$mesini		= substr($Fechareport, -14, 2);
					$diaini		= substr($Fechareport, -11, 2);
					
					$Fechaini	=	$anoini."-".$mesini."-".$diaini;
					
					$my_time = strtotime($Horain);


					$fecha=$my_time;
					$horas = +$hort;
					$minus = +$mint;
					$fecha += ($horas * 60 * 60);
					$fecha += ($minus * 60);
					$fecha 		= date($Fechaini." H:i:s", $fecha );
					
					
							$query008nywhh="SELECT TIMEDIFF('$Fechareport','$Tiemporep') AS diferenciahh";
							$result008nywhh=mysql_query($query008nywhh, $id);
							
							While($row008nywhh=mysql_fetch_array($result008nywhh))
							{
							$diferenciarhh 		=		$row008nywhh["diferenciahh"];
							}
					

							$query008nywhhf="SELECT TIMEDIFF('$fecha','$Fechareport') AS diferenciahhf";
							$result008nywhhf=mysql_query($query008nywhhf, $id);
							
							While($row008nywhhf=mysql_fetch_array($result008nywhhf))
							{
							$diferenciarhhf 		=		$row008nywhhf["diferenciahhf"];
							}
							$diferenciarhhf 		= 		str_replace("-", "", $diferenciarhhf);
							

$query8887="UPDATE Tiempos set  Inicio='$Fechareport', Fin='$fecha' Where Idplan='$Planviaje' and Idviaje='$Idviaje' ";
$result8887=mysql_query($query8887, $id);
					
						

					//		echo "Posicion: 0 <br>";
					//		echo "Reporte: ".$Fechareport."<br>";
					//		echo "Original: ".$Tiemporep."<br>";
					//		echo "Fin: ".$fecha."<br>";
					//		echo "Tiempo diff: ".$diferenciarhh."<br><br>";

			}
			else
			{
				
					$query008="SELECT* FROM Viajes where Id = '$Idviaje' order by Id" ;
					$result008=mysql_query($query008, $id);
					
					While($row008=mysql_fetch_array($result008))
					{
					$Planviaje		=$row008["Planviaje"];
					}
					
						$query0083="SELECT* FROM Tiempos Where Idplan = '$Planviaje' and Idviaje='$Idviaje'";
						$result0083=mysql_query($query0083, $id);
					
						While($row0083=mysql_fetch_array($result0083))
						{
						$Fin3			=$row0083["Fin"];
						$Inicio3		=$row0083["Inicio"];
						}
					
						if($Tiemporep > $Fechareport)
						{
							$query008nyw="SELECT TIMEDIFF('$Tiemporep','$Fechareport') AS diferencia";
							$result008nyw=mysql_query($query008nyw, $id);
							
							While($row008nyw=mysql_fetch_array($result008nyw))
							{
							$diferencia 		=		$row008nyw["diferencia"];
							
					//		echo "Diferencia: ".$diferencia."<br>";
							}
						
					
							$difer2 = date("Y-m-d ".$diferencia);
							$query008nyw2="SELECT TIMEDIFF('$Fin3','$difer2') AS diferencia2";
							$result008nyw2=mysql_query($query008nyw2, $id);
							
							While($row008nyw2=mysql_fetch_array($result008nyw2))
							{
							$diferencia2 		=		$row008nyw2["diferencia2"];
							
					//		echo "Diferencia2: ".$diferencia2."<br>";
							}
							
						
						
							$anoini		= substr($Fin3, -19, 4);
							$mesini		= substr($Fin3, -14, 2);
							$diaini		= substr($Fin3, -11, 2);
							
							$Fechaini	=	$anoini."-".$mesini."-".$diaini." ".$diferencia2;
						
							
							$query008nywhhf="SELECT TIMEDIFF('$Fechaini','$Inicio3') AS diferenciahhf";
							$result008nywhhf=mysql_query($query008nywhhf, $id);
							
							While($row008nywhhf=mysql_fetch_array($result008nywhhf))
							{
							$diferenciarhhf 		=		$row008nywhhf["diferenciahhf"];
							}
							$diferenciarhhf = str_replace("-", "", $diferenciarhhf);
							
							
							$query8887="UPDATE Tiempos set  Fin='$Fechaini', Total='$diferenciarhhf' Where Idplan = '$Planviaje' and Idviaje='$Idviaje'";
							$result8887=mysql_query($query8887, $id);	
							
							
				//			echo "Reporte: ".$Fechareport."<br>";
				//			echo "Original: ".$Tiemporep."<br>";
				//			echo "Hora Final: ".$Fin3."<br>";
				//			echo "Restada: ".$Fechaini."<br>";
							
							
							$query008nywhh="SELECT TIMEDIFF('$Fechareport','$Tiemporep') AS diferenciahh";
							$result008nywhh=mysql_query($query008nywhh, $id);
							
							While($row008nywhh=mysql_fetch_array($result008nywhh))
							{
							$diferenciarhh 		=		$row008nywhh["diferenciahh"];
							}
							
						}

							
						else
						{
							$query008nyw="SELECT TIMEDIFF('$Fechareport','$Tiemporep') AS diferencia";
							$result008nyw=mysql_query($query008nyw, $id);
							
							While($row008nyw=mysql_fetch_array($result008nyw))
							{
							$diferencia 		=		$row008nyw["diferencia"];
							
					//		echo "Diferencia: ".$diferencia."<br>";
							}
						
					
							$difer3 = date("Y-m-d ".$diferencia);
							
			
							$difer2 = date("Y-m-d ".$diferencia);
							$query008nyw2="SELECT ADDTIME('$Fin3','$diferencia') AS diferencia2";
							$result008nyw2=mysql_query($query008nyw2, $id);
							
							While($row008nyw2=mysql_fetch_array($result008nyw2))
							{
							$diferencia2 		=		$row008nyw2["diferencia2"];
							
					//		echo "Diferencia2: ".$diferencia2."<br>";
							}
									
							$query008nywhhf="SELECT TIMEDIFF('$diferencia2','$Inicio3') AS diferenciahhf";
							$result008nywhhf=mysql_query($query008nywhhf, $id);
							
							While($row008nywhhf=mysql_fetch_array($result008nywhhf))
							{
							$diferenciarhhf 		=		$row008nywhhf["diferenciahhf"];
							}
							$diferenciarhhf = str_replace("-", "", $diferenciarhhf);
							
							$query8887="UPDATE Tiempos set  Fin='$diferencia2', Total='$diferenciarhhf' Where Idplan = '$Planviaje' and Idviaje='$Idviaje'";
							$result8887=mysql_query($query8887, $id);	
								
							
					//		echo "Reporte: ".$Fechareport."<br>";
					//		echo "Original: ".$Tiemporep."<br>";
					//		echo "Hora Final: ".$Fin3."<br>";
							
							$query008nywhh="SELECT TIMEDIFF('$Fechareport','$Tiemporep') AS diferenciahh";
							$result008nywhh=mysql_query($query008nywhh, $id);
							
							While($row008nywhh=mysql_fetch_array($result008nywhh))
							{
							$diferenciarhh 		=		$row008nywhh["diferenciahh"];
							}

						}
			}
			



//////////////////////////////////////////////////////////////////////////////////////////////////////



			$query008="SELECT* FROM Plan where Idplan = '$Planviaje' and Pos > '$Posrec' order by Pos " ;
			$result008=mysql_query($query008, $id);
			
			While($row008=mysql_fetch_array($result008))
			{
			$Idn			=$row008["Id"];
			$Idpuesto 		=$row008["Idpuesto"];
			$Tiempo1		=$row008["Tiempo"];
			$Tiempo			=$row008["Tiempo"];
			$Pos			=$row008["Pos"];
			
			$Tiempo		=	date("Y-m-d ".$Tiempo);
			

			$eltimer 	=	strtotime($Horareportaje);
			
			$horatime 	+=  substr($Tiempo, -8, 2);
			$mintime	+=  substr($Tiempo, -5, 2);
			$segtime	+=  substr($Tiempo, -2, 2);
						
			$eltimer += ($horatime * 60 * 60);
			$eltimer += ($mintime * 60);
			$eltimer += ($segtime);

			$eltimer  = date("Y-m-d H:i:s", $eltimer );
			
			

			$diferencia2r 		=		$eltimer;	

			
		//	 echo "<br>Posicion: ".$Pos."<br>";
		//	 echo "Tiempo: ".$eltimer."<br>";
		//	 echo "Nuevo: ".$diferencia2r."<br>";
			
			$query008nyw="SELECT '$eltimer' - INTERVAL 10 DAY_MINUTE as minuto" ;
			$result008nyw=mysql_query($query008nyw, $id);
			
			While($row008nyw=mysql_fetch_array($result008nyw))
			{
			$tiempomenos10 		=		$row008nyw["minuto"];
			}
		//	echo "Alerta: ".$tiempomenos10."<br><br>";
			
			$query8887="UPDATE Recorrido set  Tiempo='$diferencia2r', Tiempoalert='$tiempomenos10' Where Idpuesto = '$Idpuesto' and Idviaje='$Idviaje'";
			$result8887=mysql_query($query8887, $id);
			
			}
			
			
//////////////////////////////////////////////////////////////////////	
if($envio == 1)
{			
	
	$query008xc			=	"SELECT* FROM Puestos where Id = '$Idpuesto2'" ;
	$result008xc		=	mysql_query($query008xc, $id);
	
	While($row008xc		=	mysql_fetch_array($result008xc))
	{
	$Nombrepues			= $row008xc["Nombre"];
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
									
										

					
if(!empty($_POST["reporto"]))
{

$mail = new PHPMailer();

$destinatario = "info@tntexpress.co";  
$asunto = "REPORTE EN PUESTO DE CONTROL"; 
$body = ' 
<strong> SISTEMA DE SEGUIMIENTO VEHICULAR</strong><br><br>
El Departamento de Servicio al cliente de TNT EXPRESS le informa que se ha generado el siguiente reporte.<br><br>
<strong> Esta es la informacion de su viaje: </strong><br><br>
<strong> EMPRESA: </strong>' .$Nombreemp.' <br>
<strong> NIT: </strong>' .$Empresaxcx1.' <br>
<strong> RUTA DE VIAJE: </strong>' .$Nombreorgxx.' - '.$Nomdestxx.' <br>
<strong> NRO. MANIFIESTO: </strong> ' .$Manifiestoe.' <br>
<strong> PUESTO DE REPORTE: </strong> '.$Nombrepues.' <br>
<strong> PLACA DEL VEHICULO: </strong> '.$Placaxx.' <br>
<strong> FECHA DE REPORTE: </strong> '.$Fechareport.' <br> <br>
<strong> OBSERVACIONES: </strong> <br>'.$ctreportecliente.' <br><br>

					Cualquier inquietud no dude en comunicarla a Nuestra Empresa. <br>   
					servicioalcliente@tntexpress.co   <br><br>  
					 
					Gracias por confiar en Nosotros.<br><br>
					 
					Servicio al Cliente<br>
					www.tntexpress.co<br>



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
													//$headers .= "Bcc: info@tntexpress.co, servicioalcliente@tntexpress.co, basc@tntexpress.co\r\n"; 
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

													//$headers .= "Bcc: servicioalcliente@tntexpress.co, basc@tntexpress.co\r\n"; 
													//mail($destinatario,$asunto,$body,$headers);  
			
			
			
			
			



$sqlhhsx	 ="INSERT INTO  Notificaciones (Manifiesto, Fecha, Zona, Puesto, Detalles, Usuario, Empresa)";
$sqlhhsx	.= "VALUES ('$Manifiestoe', '$Fechareport', 'Reporte Puesto Control', '$Nombrepues', '$ctreportecliente', '$Usuario', '$Nombreemp')";
mysql_query($sqlhhsx);	

}

}
}
}
$_SESSION['ctreporte']="";

$_SESSION['ctreportecliente']="";

$_SESSION['Predilectaw']="";

$_SESSION['cbia']="";

$_SESSION['procesar']="";

$_SESSION['Nitmail']="";

$_SESSION['enviru']="";




				$query00831a	="SELECT* FROM Citas where Idviaje='$Idviaje' and Cumplido = '0' order by Id asc" ;
				$result00831a	=mysql_query($query00831a, $id);
				
				While($row00831a=mysql_fetch_array($result00831a))
				{
				$Tiempocita		= $row00831a["Fechahora"];
				$Ciudadcita		= $row00831a["Ciudad"];
				$Remesacita		= $row00831a["Remesa"];
				$Manifiestoz	= $row00831a["Manifiesto"];
				
				
				
							$query00831r	="SELECT* FROM Empresasremesas where Remesa='$Remesacita'" ;
							$result00831r	=mysql_query($query00831r, $id);
							
							While($row00831r=mysql_fetch_array($result00831r))
							{
							$Empresaz 		= $row00831r["Empresa"];
							$Nombreorgz 	= $row00831r["Nombreorg"];
							$Nombredestz 	= $row00831r["Nombredest"];
							$Remitentez 	= $row00831r["Remitente"];
							$Destinatarioz 	= $row00831r["Destinatario"];
							}
							
										$query008xz			=	"SELECT* FROM Empresas where Nit = '$Empresaz'" ;
										$result008xz		=	mysql_query($query008xz, $id);
										
										While($row008xz		=	mysql_fetch_array($result008xz))
										{
										$Nombreempz			=   $row008xz["Nombre"];
										}
				
				
							$query00831s	="SELECT* FROM Recorrido where Idviaje='$Idviaje' and Idpuesto = '$Ciudadcita' and Mensaje = '' order by Pos asc" ;
							$result00831s	=mysql_query($query00831s, $id);
							
							While($row00831s=mysql_fetch_array($result00831s))
							{
							$Tiempofin 		= $row00831s["Tiempo"];
							}
							
							if($Tiempofin <> '')
							{
					
								$query00831h		="SELECT* FROM Puestos where Id ='$Ciudadcita'" ;
								$result00831h		=mysql_query($query00831h, $id);
								
								While($row00831h	=mysql_fetch_array($result00831h))
								{
								$Nombreptoc 		=$row00831h["Nombre"];
								}
								
						
									if($Tiempofin > $Tiempocita)		
									{
										
										
										
										

$destinatario = "info@tntexpress.co";  
$asunto = "REPORTE INCUMPLIMIENTO DE CITA"; 
$body = ' 
<strong> SISTEMA DE SEGUIMIENTO VEHICULAR</strong><br><br>
El Departamento de Servicio al cliente de TNT EXPRESS le informa la siguiente cita no podra cumplirse.<br><br>
<strong> Esta es la informacion de su viaje: </strong><br><br>
<strong> EMPRESA: </strong>' .$Nombreempz.' <br>
<strong> NIT: </strong>' .$Empresaz.' <br>
<strong> RUTA DE VIAJE: </strong>' .$Nombreorgz.' - '.$Nombredestz.' <br>
<strong> PUESTO CONTROL: </strong>' .$NombrepuesW.' <br>
<strong> NRO. MANIFIESTO: </strong> ' .$Manifiestoz.' <br>
<strong> NRO. REMESA: </strong> ' .$Remesacita.' <br>
<strong> REMITENTE: </strong> ' .$Remitentez.' <br>
<strong> DESTINATARIO: </strong> ' .$Destinatarioz.' <br>
<strong> FECHA DE CITA: </strong> '.$Tiempocita.' <br>
<strong> LUGAR PARA CITA: </strong> '.$Nombreptoc.' <br>


<br> <br> Cualquier inquietud no dude en comunicarla a Nuestra Empresa. <br>   
servicioalcliente@tntexpress.co   <br><br>  
					 
Gracias por confiar en Nosotros.<br><br>
					 
					Servicio al Cliente<br>
					www.tntexpress.co<br>



'; 


													//para el envío en formato HTML 
													$headers = "MIME-Version: 1.0\r\n"; 
													$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
													
													//dirección del remitente 
													$headers .= "From: TNT EXPRESS S.A <info@tntexpress.co>\r\n"; 
													$headers .= "Bcc: info@tntexpress.co\r\n"; 
													//dirección de respuesta, si queremos que sea distinta que la del remitente 
													$headers .= "Reply-To:".$Email."\r\n"; 
													
													mail($destinatario,$asunto,$body,$headers);   






										
										
										
										
										
										
									$msa	=	'La Cita programada en <strong>'.utf8_decode($Nombreptoc).'</strong> no podra cumplirse';
									
									$sqlxx="INSERT INTO  Notrasextra (Idplan, Fecha, Mensaje1, Mensaje2, Usuario)";
									$sqlxx.= "VALUES ('$Idviaje', '$eltimera', '$msa', ' ', 'SISTEMA')";
									mysql_query($sqlxx);
									
									
									$queryff	=	"UPDATE Viajes set Entregas=3, Entrega=1, Userentregas = 'LILIANA', Leidaentrega = '0' Where Id='$Idviaje'";
									$resultff	=	mysql_query($queryff, $id);
									
									$queryfc	=	"UPDATE Citas set Estado=1 Where Idviaje='$Idviaje'";
									$resultfc	=	mysql_query($queryfc, $id);
									
								
									$sqlmm="INSERT INTO  Notasentregas (Idviaje, Manifiesto, Fecha, Observaciones, Usuario)";
									$sqlmm.= "VALUES ('$Idviaje', '$Manifiestoex', '$eltimera', '$msa', 'SISTEMA')";
									mysql_query($sqlmm);
									
									$sql="INSERT INTO  Notascitas  (Idviaje, Manifiesto, Fecha, Observaciones, Usuario)";
									$sql.= "VALUES ('$Idviaje', '$Manifiestoex', '$eltimera', '$msa', 'SISTEMA')";
									mysql_query($sql);
									
									
									
									
									
									?>
									
									<script language='javascript'>
									alert('La Cita programada en <?=$Nombreptoc?> no podra cumplirse, favor reportar a CITAS');
									</script>
									
									<?	
									}
									else
									{
									$var 	= '';
									}
								
							}
				
				}	

	
				
				
				
?>

<script type="text/javascript">
redireccionar = function()
{
opener.parent.location.href="opciones-transito.php?Id=<?=$Idviaje?>";
window.close();
};
</script>


<body onLoad="redireccionar();">
</body>
<?
}
?>