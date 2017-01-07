<?
session_start(); 

include("conexion.php");

date_default_timezone_set('America/Bogota');

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

				
$Usuario			= 	$_SESSION['Empresa'];

$Idviaje			=	$_POST["Idviaje"];
$Idpuesto			=	$_POST["Idpuesto"];


				$queryt="SELECT* FROM Recorrido  where Idviaje  = '$Idviaje' and Idpuesto = '$Idpuesto'";
				$resultt=mysql_query($queryt, $id);
					
				While($rowt=mysql_fetch_array($resultt))
				{
				$Tiempo 	=$rowt["Tiempo"];
				}
		

$Fechapausa			=	$_POST["Fechapausa"];
//echo "<br>Fecha Pausa: ".$Fechapausa."<br>";

$ctreporte			=	$_POST["ctreporte"];
$ctreportecliente	=	$_POST["ctreportecliente"];
$envio				=	$_POST["envio"];

if($ctreportecliente == '')
{
$ctreportecliente	=	$ctreporte;	
}
else
{
$ctreportecliente	=	$ctreportecliente;		
}


$horaactual 			= 	date("Y-m-d H:i:s");
$despausa				=	$horaactual;

//echo "<br>Fecha Despausa: ".$despausa."<br><br>";

$tiempopausa 		=  $Fechapausa;
$tiempodespa		=  $despausa;
					
//echo 	$tiempopausa ." - ".$tiempodespa."<br><br>";

			$query008nyw="SELECT TIMEDIFF('$tiempodespa','$tiempopausa') AS diferencia";

			$result008nyw=mysql_query($query008nyw, $id);
			
			While($row008nyw=mysql_fetch_array($result008nyw))
			{
			$diferencia 		=		$row008nyw["diferencia"];
			}
			
//echo "<br>Diferencia: ".$diferencia."<br><br>";

			$query008nywr="SELECT TIME_TO_SEC('$diferencia') AS diferenciar";

			$result008nywr=mysql_query($query008nywr, $id);
			
			While($row008nywr=mysql_fetch_array($result008nywr))
			{
			$diferenciar 		=		$row008nywr["diferenciar"];
			}
			
//echo "<br>Segundos: ".$diferenciar."<br><br>";




if ($despausa <= $Fechapausa)
{
session_register('Vence');
$_SESSION['Vence']=$Vence;

session_register('Inicioh');
$_SESSION['Inicioh']=$Inicioh;

session_register('Iniciom');
$_SESSION['Iniciom']=$Iniciom;

session_register('Reporte');
$_SESSION['Reporte']=$ctreporte;

header("location: despausartransito.php?Id=$Idviaje&problema=a"); 

}
else
{
$Mensaje1 = "Despausa generada por el usuario: ".$ctreporte;

	
	$sql="INSERT INTO  Notrasextra (Idplan, Fecha, Mensaje1, Usuario)";
	$sql.= "VALUES ('$Idviaje', '$horaactual', '$Mensaje1', '$Usuario')";
	mysql_query($sql);
	
	$SQL4="Delete From Pausar Where Idviaje = '$Idviaje'";
	mysql_query($SQL4);	



	$query008nyw6="SELECT '$despausa' + INTERVAL 00 DAY_MINUTE as minuto" ;
	$result008nyw6=mysql_query($query008nyw6, $id);
														
	While($row008nyw6=mysql_fetch_array($result008nyw6))
	{
	$Despausar 		=		$row008nyw6["minuto"];
	}
	
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
					
					

			$query88877="UPDATE Recorrido set Tiempo = '$tiempocon', Tiempoalert='$tiempomenos15' Where Idpuesto = '$Idpuesto' and Idviaje = '$Idviaje'";
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
											
														
													//	 echo "<br>Posicion: ".$Pos." - ".$Idpuesto."<br>";
													//	 echo "Tiempo: ".$eltimer."<br>";
													//	 echo "Nuevo: ".$diferencia2r."<br>";
														
					$query008nyw5="SELECT '$eltimer' - INTERVAL 10 DAY_MINUTE as minuto" ;
					$result008nyw5=mysql_query($query008nyw5, $id);
														
					While($row008nyw5=mysql_fetch_array($result008nyw5))
					{
					$tiempomenos10 		=		$row008nyw5["minuto"];
					}
														//echo "Alerta: ".$tiempomenos10."<br><br>";
														
			$query8887="UPDATE Recorrido set Tiempo = '$diferencia2r', Tiempoalert='$tiempomenos10' Where Idpuesto = '$Idpuesto' and Idviaje = '$Idviaje'";
			$result8887=mysql_query($query8887, $id);
			
										
			}

	

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