<?
session_start();

date_default_timezone_set('America/Bogota');

$Usuario	= 	$_SESSION['Empresa'];

include("conexion.php");

$Idviaje			=   $_POST["Idviaje"];
$Inicioh			=	$_POST["Inicioh"];
$Iniciom			=	$_POST["Iniciom"];
$ctreporte			=	$_POST["ctreporte"];
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

	$Mensaje1 = "AJUSTE DE TIEMPO EN DESCARGA, se agregan: ".$diferencia." (hor:min:sec), por motivo de: ".$ctreporte;
	
							
	$sql="INSERT INTO  Notrasextra (Idplan, Fecha, Mensaje1, Usuario)";
	$sql.= "VALUES ('$Idviaje', '$horaactual', '$Mensaje1', '$Usuario')";
	mysql_query($sql);													


header("location: finalizarpausa.php?Id=$Idviaje");

?>