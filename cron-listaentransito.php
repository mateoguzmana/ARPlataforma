<?PHP
include("conexion.php");


date_default_timezone_set('America/Bogota');

$url= $_SERVER["QUERY_STRING"];

$Usuario			= 	$_SESSION['Empresa'];

$Placag1			=	$_REQUEST["Placa"];
$Manifiestog1		=	$_REQUEST["Manifiesto"];
$Clienteg1			=	$_REQUEST["Cliente"];
$Agenciag1			=	$_REQUEST["Agencia"];
$Origeng1			=	$_REQUEST["Origen"];
$Destinog1			=	$_REQUEST["Destino"];
$Estadog1			=	$_REQUEST["Estado"];



/*
$query008="SELECT* FROM Manifiestos" ;
$result008=mysql_query($query008, $id);

While($row008=mysql_fetch_array($result008))
{
$Id				=$row008["Nromanifiesto"];
$Fecha			=$row008["Fecha"];


	$query="SELECT COUNT(*) as Total FROM Viajes where Manifiesto = '$Id'" ;
	$result=mysql_query($query, $id);
	
	While($row=mysql_fetch_array($result))
	{
	$Total=$row["Total"];
	}
		if($Total==0)
		{
			
			$queryr="SELECT* FROM Remisiones  where Manifiesto  = '$Id'" ;
			$resultr=mysql_query($queryr, $id);
			
			While($rowr=mysql_fetch_array($resultr))
			{
			$Remesa=$rowr["Remesa"];

			}
			$fechainir = date("Y-m-d");
			$sql="INSERT INTO  Viajes (Manifiesto, Remesas, Planviaje, Iniciado, Fechaini)";
			$sql.= "VALUES ('$Id', '$Remesa', '$Planviaje', '1', '$fechainir')";
			mysql_query($sql);
			
		}
		else
		{
			$nadamas	=	"";
		}
		

}
*/
?>

<?
$Fechahoy= date("Y-m-d");	

	
function hms2sec ($hms) 
{
	list($h, $m, $s) = explode (":", $hms);
	$seconds = 0;
	$seconds += (intval($h) * 3600);
	$seconds += (intval($m) * 60);
	$seconds += (intval($s));
	return $seconds;
}			



$query008="SELECT* FROM Viajes where Iniciado = '3' and Estado = '0' order by Id" ;
$result008=mysql_query($query008, $id);

While($row008=mysql_fetch_array($result008))
{
$Idn			=$row008["Id"];
$Manifiesto		=$row008["Manifiesto"];
$Remesas		=$row008["Remesas"];
$Planviaje		=$row008["Planviaje"];
$Problema		=$row008["Problema"];
$Problemades	=$row008["Problemades"];
$Leidaproblem	=$row008["Leidaproblem"];


	$querycon="SELECT COUNT(*) as Total FROM Recorrido where Idviaje = '$Idn' and Estado = '0'" ;
	$resultcon=mysql_query($querycon, $id);
		
	While($rowcon=mysql_fetch_array($resultcon))
	{
	$Totalcon	=	$rowcon["Total"];
	}

	$query0081="SELECT* FROM Manifiestos where Nromanifiesto = '$Manifiesto'" ;
	$result0081=mysql_query($query0081, $id);

	While($row0081=mysql_fetch_array($result0081))
	{
	$Placa			=$row0081["Placa"];
	$Conductor		=$row0081["Conductor"];
	$Propietario	=$row0081["Propietario"];
	$Fecha			=$row0081["Fecha"];
	$Empresa		=$row0081["Empresa"];
	$Nombreorg		=$row0081["Nombreorg"];
	$Nomdest 		=$row0081["Nomdest"];
	$Sucursal  		=$row0081["Sucursal"];

		$query0082="SELECT* FROM Empresas where Nit  = '$Empresa'" ;
		$result0082=mysql_query($query0082, $id);
		
		While($row0082=mysql_fetch_array($result0082))
		{
		$Nombre2		=$row0082["Nombre"];
		}
		
		$query0083="SELECT* FROM Agencias where Cod  = '$Sucursal'" ;
		$result0083=mysql_query($query0083, $id);
		
		While($row0083=mysql_fetch_array($result0083))
		{
		$Nombre3	=$row0083["Nombre"];
		}
		
		

		$queryt="SELECT* FROM Tiempos  where Idplan  = '$Planviaje'" ;
		$resultt=mysql_query($queryt, $id);
			
		While($rowt=mysql_fetch_array($resultt))
		{
		$Idtiempo 	=$rowt["Id"];
		$Totalt 	=$rowt["Total"];
		$Iniciot 	=$rowt["Inicio"];
		$Fint 		=$rowt["Fin"];
		
			$horaactual = date("Y-m-d H:i:s");
		
			$query008nyw="SELECT TIMEDIFF('$horaactual','$Iniciot') AS diferencia";

			$result008nyw=mysql_query($query008nyw, $id);
			
			While($row008nyw=mysql_fetch_array($result008nyw))
			{
			$diferencia 		=		$row008nyw["diferencia"];
			}


			$horaesti 	=	 date("Y-m-d ".$Totalt);
	
		
			$fechamia1	=	 $diferencia;
			$fechamia	=	 $diferencia;
			$fechamia	=	 date("Y:m:d ".$fechamia);

			$horaini = $Totalt;
			$horafin = $diferencia;


		}

////////

			$querytww="SELECT* FROM tiempos  where Idplan  = '$Planviaje'" ;
			$resulttww=mysql_query($querytww, $id);
				
			While($rowtww=mysql_fetch_array($resulttww))
			{
			$Idtiempow 	=$rowtww["Id"];
			$Totaltw 	=$rowtww["Total"];
			$Iniciotw 	=$rowtww["Inicio"];
			$Fintw 		=$rowtww["Fin"];
			
			$horaactualw = date("Y-m-d H:i:s");
		
			$query008nywe="SELECT TIMEDIFF('$horaactualw','$Iniciotw') AS diferenciaw";

			$result008nywe=mysql_query($query008nywe, $id);
			
			While($row008nywe=mysql_fetch_array($result008nywe))
			{
			$diferenciae 		=		$row008nywe["diferenciaw"];
			}


			$horaestie 	=	 date("Y-m-d ".$Totaltw);
	
		
			$fechamia1e	=	 $diferenciae;
			$fechamiae	=	 $diferenciae;
			$fechamiae	=	 date("Y:m:d ".$fechamiae);

			$horainie = $Totaltw;
			$horafine = $diferenciae;

			}
							$horainie = hms2sec ($horainie);
							$horafine = hms2sec ($horafine);
							
							$porcentajex = round(($horafine * 100)/ $horainie);

							if($horaactualw >= $Fintw)
							{
							$porcentajex = 100;
							}
							else
							{
							$porcentajex = $porcentajex;
							}
///////

							
///////		

		$reco	=	0;
		$tam = 1;
		$ini = 0; 
		
				if($Totalcon > 0)
				{
						$query008ny="SELECT* FROM Recorrido where Idviaje = '$Idn' and Estado = 0 order by Pos  LIMIT $ini, $tam";
					    $result008ny=mysql_query($query008ny, $id);
						
						While($row008ny=mysql_fetch_array($result008ny))
						
						{

							$Idpin		 		=		$row008ny["Id"];
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
					
						
							$reco ++;



							$horaini = hms2sec ($horaini);
							$horafin = hms2sec ($horafin);
							
							
							$queryof	=	"SELECT COUNT(*) as Totalof FROM Pausar where Idviaje = '$Idn'" ;
							$resultof	=	mysql_query($queryof, $id);
							
							While($rowof=	mysql_fetch_array($resultof))
							{
							$Totalof	=	$rowof["Totalof"];
							}

							if	( $Totalof == 1 )
							{
								
							$barra	=	"est-2.jpg";
							$color	 =	"#B7B31C";
							$mensaje =	"Pausado";
							
									$queryestate		=	"SELECT COUNT(*) as estado FROM Estados where Manifiesto = '$Manifiesto'" ;
									$resultestate		=	mysql_query($queryestate, $id);
									
									While($rowestate	=	mysql_fetch_array($resultestate))
									{
									$estado				=	$rowestate["estado"];
									}
									
									
										if($estado == 0)
										{
										$sqlesta	 =	"INSERT INTO  Estados (Manifiesto, Estado)";
										$sqlesta	.= 	"VALUES ('$Manifiesto', 'Pausado')";
										mysql_query($sqlesta);
										}
										else
										{
										$queryesta	=	"UPDATE Estados set  Estado='Pausado' Where Manifiesto = '$Manifiesto'";
										$resultesta	=	mysql_query($queryesta, $id);
										}
											
							
							
									$query00841		=	"SELECT* FROM Pausar where Idviaje = '$Idn'" ;
									$result00841	=	mysql_query($query00841, $id);
									
									While($row00841	=	mysql_fetch_array($result00841))
									{
									$Despausa841			=	$row00841["Despausa"];
									$Pausa841				=	$row00841["Pausa"];
									}
			
									if($horaactual >=  $Despausa841)
									{
										
									$tiempopausa 		=  $Pausa841;
									$tiempodespa		=  $horaactual;
										
									$query008nyw="SELECT TIMEDIFF('$tiempodespa','$tiempopausa') AS diferencia11";
						
									$result008nyw=mysql_query($query008nyw, $id);
									
									While($row008nyw=mysql_fetch_array($result008nyw))
									{
									$diferencia11 		=		$row008nyw["diferencia11"];
									}
									
									
									$query008nywr="SELECT TIME_TO_SEC('$diferencia11') AS diferenciar";
						
									$result008nywr=mysql_query($query008nywr, $id);
									
									While($row008nywr=mysql_fetch_array($result008nywr))
									{
									$diferenciar 		=		$row008nywr["diferenciar"];
									}
									
										$query88871="UPDATE Viajes set Pausado = 1 Where Id = '$Idn'";
										$result88871=mysql_query($query88871, $id);
									
										
										$SQL4="Delete From Pausar Where Idviaje = '$Idn'";
										mysql_query($SQL4);	
										
										$Mensaje1 = "Despausa activada en la fecha: ".$horaactual;
											
										$sql="INSERT INTO  Notrasextra (Idplan, Fecha, Mensaje1)";
										$sql.= "VALUES ('$Idn', '$horaactual', '$Mensaje1')";
										mysql_query($sql);
										
														$query008nyw="SELECT '$Despausa841' + INTERVAL 00 DAY_MINUTE as minuto" ;
														$result008nyw=mysql_query($query008nyw, $id);
														
														While($row008nyw=mysql_fetch_array($result008nyw))
														{
														$Despausar 		=		$row008nyw["minuto"];
														}
													



									$query008ny="SELECT* FROM Recorrido where Idviaje = '$Idn' and Estado = 0 order by Pos  LIMIT $ini, $tam";
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
															
															//echo "Original: ".$Tiempo." - ".$Idpuesto."<br><br>";
															
									}
															
												$query008nyw8="SELECT '$Tiempo' + INTERVAL '$diferenciar' DAY_SECOND as minutos" ;
												$result008nyw8=mysql_query($query008nyw8, $id);
																					
												While($row008nyw8=mysql_fetch_array($result008nyw8))
												{
												$tiempocon 		=		$row008nyw8["minutos"];
												}
												
												//echo "NUEVA DESPAUSA: ".$tiempocon."<br><br><br>";
												
							
							
												$query008nyw55="SELECT '$tiempocon' - INTERVAL 10 DAY_MINUTE as minutor" ;
												$result008nyw55=mysql_query($query008nyw55, $id);
																					
												While($row008nyw55=mysql_fetch_array($result008nyw55))
												{
												$tiempomenos15 		=		$row008nyw55["minutor"];
												}
												
												
							
								$query88877="UPDATE Recorrido set Tiempo = '$tiempocon', Tiempoalert='$tiempomenos15' Where Idpuesto = '$Idpuesto' and Idviaje = '$Idn'";
								$result88877=mysql_query($query88877, $id);




										
										
													$query008="SELECT* FROM Plan where Idplan = '$Planviaje' and Pos > '$Pos' order by Pos";
													$result008=mysql_query($query008, $id);
													
													While($row008=mysql_fetch_array($result008))
													{
														$Idpuesto 		=$row008["Idpuesto"];
														$Tiempo1		=$row008["Tiempo"];
														$Tiempo			=$row008["Tiempo"];
														$Pos			=$row008["Pos"];
														
														$Tiempo		=	date("Y-m-d ".$Tiempo);
														
											
														$eltimer 	=	strtotime($tiempocon);
														
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
														
	$query8887="UPDATE Recorrido set  Tiempo = '$diferencia2r', Tiempoalert='$tiempomenos10' Where Idpuesto = '$Idpuesto' and Idviaje = '$Idn'";
	$result8887=mysql_query($query8887, $id);
													
													}
									}
							
							
							}
							elseif		(  ( $Estado == 0 ) && (  $Tiempoalert1 >=  $horaactual ) )
							{


								$queryp3			=	"SELECT COUNT(*) as Pausa FROM Recorrido where Idviaje = '$Idn' and Pausa = 1" ;
								$resultp3			=	mysql_query($queryp3, $id);
												
								While($rowp3		=	mysql_fetch_array($resultp3))
								{
								$Totalp3			=	$rowp3["Pausa"];
								}
							
									if($Totalp3 == 0)
									{
									
										$barra	 =	"est-1.jpg";
										$color	 =	"#6bb213";
		
										$query008nywa="SELECT TIMEDIFF('$Tiempoalert1','$horaactual') AS diferenciaa";
										$result008nywa=mysql_query($query008nywa, $id);
										While($row008nywa=mysql_fetch_array($result008nywa))
										{
										$estimado		=		$row008nywa["diferenciaa"];
										}
										$estimado= substr($estimado, -8, 5);
										$mensaje =	"Estimado:  ".$estimado;
										

									$queryofv	=	"SELECT COUNT(*) as Totalof FROM Viajes where Id = '$Idn' and Pausado = 1" ;
									$resultofv	=	mysql_query($queryofv, $id);
									
									While($rowofv=	mysql_fetch_array($resultofv))
									{
									$Totalofv	=	$rowofv["Totalof"];
									}
							
							
									$queryestate		=	"SELECT COUNT(*) as estado FROM Estados where Manifiesto = '$Manifiesto'" ;
									$resultestate		=	mysql_query($queryestate, $id);
									
									While($rowestate	=	mysql_fetch_array($resultestate))
									{
									$estado				=	$rowestate["estado"];
									}
									
										if($estado == 0 and $Totalofv == 1)
										{
										$sqlesta	=	"INSERT INTO  Estados (Manifiesto, Estado)";
										$sqlesta	.= 	"VALUES ('$Manifiesto', 'Despausa')";
										mysql_query($sqlesta);
										}
										elseif($estado == 0 and $Totalofv == 0)
										{
										$sqlesta	=	"INSERT INTO  Estados (Manifiesto, Estado)";
										$sqlesta	.= 	"VALUES ('$Manifiesto', 'Estimado')";
										mysql_query($sqlesta);
										}
										elseif($estado == 1 and $Totalofv == 1)
										{
										$queryesta	=	"UPDATE Estados set  Estado='Despausa' Where Manifiesto = '$Manifiesto'";
										$resultesta	=	mysql_query($queryesta, $id);
										}
										elseif($estado == 1 and $Totalofv == 0)
										{
										$queryesta	=	"UPDATE Estados set  Estado='Estimado' Where Manifiesto = '$Manifiesto'";
										$resultesta	=	mysql_query($queryesta, $id);
										}
									}
									else
									{
										$barra	=	"est-4.jpg";
										$color	 =	"#326b9c";
										
										$query008nywaer			=	"SELECT TIMEDIFF('$horaactual','$Tiempo') AS contacto";
										$result008nywaer		=	mysql_query($query008nywaer, $id);
										While($row008nywaer		=	mysql_fetch_array($result008nywaer))
										{
										$contacto				=	$row008nywaer["contacto"];
										$contacto				= 	substr($contacto, -8, 5);
										}
										
										$mensaje =	"Contac.:  ".$contacto;
									}
								
							}
							
							elseif 	( ( $Estado == 1) )
							{
							$barra	=	"est-2.jpg";
							$color	 =	"#B7B31C";
							$mensaje =	"Pausado";
							}
							
							elseif	( (  $horaactual >=  $Tiempoalert1 ) && (  $horaactual >=  $Tiempo ) && ( $Estado == 0) )
							{
							$barra	=	"est-3.jpg";
							$color	 =	"#d10b1b";
							
							$query008nywae			=	"SELECT TIMEDIFF('$horaactual','$Tiempo') AS atraso";
							$result008nywae			=	mysql_query($query008nywae, $id);
							While($row008nywae		=	mysql_fetch_array($result008nywae))
							{
							$atraso					=	$row008nywae["atraso"];
							}
							$atraso= substr($atraso, -8, 5);
							$mensaje =	"Atrasado:  ".$atraso;
							
							
									$queryestate		=	"SELECT COUNT(*) as estado FROM Estados where Manifiesto = '$Manifiesto'" ;
									$resultestate		=	mysql_query($queryestate, $id);
									
									While($rowestate	=	mysql_fetch_array($resultestate))
									{
									$estado				=	$rowestate["estado"];
									}
									
									$queryofv	=	"SELECT COUNT(*) as Totalof FROM Viajes where Id = '$Idn' and Pausado = 1" ;
									$resultofv	=	mysql_query($queryofv, $id);
									
									While($rowofv=	mysql_fetch_array($resultofv))
									{
									$Totalofv	=	$rowofv["Totalof"];
									}
									
									
										if($estado == 0 and $Totalofv == 1)
										{
										$sqlesta	=	"INSERT INTO  Estados (Manifiesto, Estado)";
										$sqlesta	.= 	"VALUES ('$Manifiesto', 'Despausa')";
										mysql_query($sqlesta);
										}
										elseif($estado == 0 and $Totalofv == 0)
										{
										$sqlesta	=	"INSERT INTO  Estados (Manifiesto, Estado)";
										$sqlesta	.= 	"VALUES ('$Manifiesto', 'Atrasado')";
										mysql_query($sqlesta);
										}
										elseif($estado == 1 and $Totalofv == 1)
										{
										$queryesta	=	"UPDATE Estados set  Estado='Despausa' Where Manifiesto = '$Manifiesto'";
										$resultesta	=	mysql_query($queryesta, $id);
										}
										elseif($estado == 1 and $Totalofv == 0)
										{
										$queryesta	=	"UPDATE Estados set  Estado='Atrasado' Where Manifiesto = '$Manifiesto'";
										$resultesta	=	mysql_query($queryesta, $id);
										}
									

							}
							else
							{
							$barra	=	"est-4.jpg";
							$color	 =	"#326b9c";
							
							$query008nywaer			=	"SELECT TIMEDIFF('$Tiempo','$horaactual') AS contacto";
							$result008nywaer		=	mysql_query($query008nywaer, $id);
							While($row008nywaer		=	mysql_fetch_array($result008nywaer))
							{
							$contacto				=	$row008nywaer["contacto"];
							$contacto				= 	substr($contacto, -8, 5);
							}
							
							$mensaje =	"Contacto:  ".$contacto;
							
									$queryestate		=	"SELECT COUNT(*) as estado FROM Estados where Manifiesto = '$Manifiesto'" ;
									$resultestate		=	mysql_query($queryestate, $id);
									
									While($rowestate	=	mysql_fetch_array($resultestate))
									{
									$estado				=	$rowestate["estado"];
									}

									$queryofv	=	"SELECT COUNT(*) as Totalof FROM Viajes where Id = '$Idn' and Pausado = 1" ;
									$resultofv	=	mysql_query($queryofv, $id);
									
									While($rowofv=	mysql_fetch_array($resultofv))
									{
									$Totalofv	=	$rowofv["Totalof"];
									}


										if($estado == 0 and $Totalofv == 1)
										{
										$sqlesta	=	"INSERT INTO  Estados (Manifiesto, Estado)";
										$sqlesta	.= 	"VALUES ('$Manifiesto', 'Despausa')";
										mysql_query($sqlesta);
										}
										elseif($estado == 0 and $Totalofv == 0)
										{
										$sqlesta	=	"INSERT INTO  Estados (Manifiesto, Estado)";
										$sqlesta	.= 	"VALUES ('$Manifiesto', 'Contacto')";
										mysql_query($sqlesta);
										}
										elseif($estado == 1 and $Totalofv == 1)
										{
										$queryesta	=	"UPDATE Estados set  Estado='Despausa' Where Manifiesto = '$Manifiesto'";
										$resultesta	=	mysql_query($queryesta, $id);
										}
										elseif($estado == 1 and $Totalofv == 0)
										{
										$queryesta	=	"UPDATE Estados set  Estado='Contacto' Where Manifiesto = '$Manifiesto'";
										$resultesta	=	mysql_query($queryesta, $id);
										}




							}
							
							
						}
				}
				else
				{

				$porcentaje = 100;
				$barra	 =	"est-1.jpg";
				$color	 =	"#216731";

				$mensaje =	"Descargando";
				
				$query2b3="SELECT COUNT(*) as Total2b3 FROM Descarga where Idviaje = '$Idn'" ;
				$result2b3=mysql_query($query2b3, $id);
				
				While($row2b3=mysql_fetch_array($result2b3))
				{
				$Total2b3=$row2b3["Total2b3"];
				}
				
				if($Total2b3 == 0)
				{
				
					$query008nyw8x="SELECT '$horaactual' + INTERVAL 30 DAY_MINUTE as minutosx" ;
					$result008nyw8x=mysql_query($query008nyw8x, $id);
																						
					While($row008nyw8x=mysql_fetch_array($result008nyw8x))
					{
					$tiempoconx 		=		$row008nyw8x["minutosx"];
					}
				
					$sql2="INSERT INTO  Descarga (Idviaje, Manifiesto, Tiempoini, Tiempofin, Tiempototal)";
					$sql2.= "VALUES ('$Idn', '$Manifiesto', '$horaactual', '$tiempoconx', '$horaactual')";
					mysql_query($sql2);	
					
					$queryestavz	=	"UPDATE Viajes set Etapa = 3 Where Id = '$Idn'";
					$resultestavz	=	mysql_query($queryestavz, $id);
				}
				else
				{
						$query001812w="SELECT* FROM Descarga where Idviaje = '$Idn'" ;
						$result001812w=mysql_query($query001812w, $id);
						
						While($row001812w=mysql_fetch_array($result001812w))
						{
						$Tiempoini812w				=	$row001812w["Tiempofin"];
						$Tiempototal812w			=	$row001812w["Tiempototal"];
						$Tiempototalfin812w			=	$row001812w["Tiempototalfin"];
						}
						
						if($Tiempototalfin812w == "0000-00-00 00:00:00")
						{
							$query008nywdd="SELECT TIMEDIFF('$horaactual','$Tiempototal812w') AS diferenciadd";
				
							$result008nywdd=mysql_query($query008nywdd, $id);
							
							While($row008nywdd=mysql_fetch_array($result008nywdd))
							{
							$diferenciadd 		=		$row008nywdd["diferenciadd"];
							}
							
								if(($Problemades == 0) and ($diferenciadd > '03:00:00'))
								{
									$queryestass	=	"UPDATE Viajes set  Problemades = 1 Where Id = '$Idn'";
									$resultestass	=	mysql_query($queryestass, $id);	
									
									$Notadd = "EL PROCESO DE DESCARGA HA SUPERADO LAS 3 HORAS. Inicio de descarga: ".$Tiempototal812w;
									
									$sqldd="INSERT INTO  Notasproblemas (Idviaje, Fecha, Problema, Usuario, Estado)";
									$sqldd.= "VALUES ('$Idn', '$horaactual', '$Notadd', 'SISTEMA', '0')";
									mysql_query($sqldd);
								}
								if(($Problemades == 1) and ($diferenciadd > '06:00:00'))
								{
									$queryestasss	=	"UPDATE Viajes set  Problemades = 2 Where Id = '$Idn'";
									$resultestasss	=	mysql_query($queryestasss, $id);	
									
									$Notadds = "EL PROCESO DE DESCARGA HA SUPERADO LAS 6 HORAS. Inicio de descarga: ".$Tiempototal812w;
									
									$sqldds="INSERT INTO  Notasproblemas (Idviaje, Fecha, Problema, Usuario, Estado)";
									$sqldds.= "VALUES ('$Idn', '$horaactual', '$Notadds', 'SISTEMA', '0')";
									mysql_query($sqldds);
								}
						}
						
						if($horaactual > $Tiempoini812w)
						{
							
									$queryestate		=	"SELECT COUNT(*) as estado FROM Estados where Manifiesto = '$Manifiesto'" ;
									$resultestate		=	mysql_query($queryestate, $id);
									
									While($rowestate	=	mysql_fetch_array($resultestate))
									{
									$estado				=	$rowestate["estado"];
									}
										if($estado == 0)
										{
										$sqlesta	=	"INSERT INTO  Estados (Manifiesto, Estado)";
										$sqlesta	.= 	"VALUES ('$Manifiesto', 'Descarga')";
										mysql_query($sqlesta);
										}
										else
										{
										$queryesta	=	"UPDATE Estados set  Estado='Descarga' Where Manifiesto = '$Manifiesto'";
										$resultesta	=	mysql_query($queryesta, $id);
										}
										
						}
						else
						{
									$queryestate		=	"SELECT COUNT(*) as estado FROM Estados where Manifiesto = '$Manifiesto'" ;
									$resultestate		=	mysql_query($queryestate, $id);
									
									While($rowestate	=	mysql_fetch_array($resultestate))
									{
									$estado				=	$rowestate["estado"];
									}
										if($estado == 0)
										{
										$sqlesta	=	"INSERT INTO  Estados (Manifiesto, Estado)";
										$sqlesta	.= 	"VALUES ('$Manifiesto', 'Descargando')";
										mysql_query($sqlesta);
										}
										else
										{
										$queryesta	=	"UPDATE Estados set  Estado='Descargando' Where Manifiesto = '$Manifiesto'";
										$resultesta	=	mysql_query($queryesta, $id);
										}
						}
						

				}
				
				

	



	}
					
}
	
		

?>

<?
}
?>