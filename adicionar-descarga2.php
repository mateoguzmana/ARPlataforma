<?
session_start();

date_default_timezone_set('America/Bogota');

$Usuario	= 	$_SESSION['Empresa'];

include("conexion.php");

$Idviaje			=   $_POST["Idviaje"];
$Inicioh			=	$_POST["Inicioh"];
$Iniciom			=	$_POST["Iniciom"];
$ctreporte			=	$_POST["ctreporte"];
$Noved				=	$_POST["Noved"];


		$query0081x="SELECT* FROM Viajes  where Id = '$Idviaje'" ;
		$result0081x=mysql_query($query0081x, $id);
		
		While($row0081x=mysql_fetch_array($result0081x))
		{
		$Manifiesto		=$row0081x["Manifiesto"];
		}



		$query00810="SELECT* FROM Manifiestos  where Nromanifiesto = '$Manifiesto'" ;
		$result00810=mysql_query($query00810, $id);
		
		While($row00810=mysql_fetch_array($result00810))
		{
		$Remesa10		=$row00810["Remesa"];
		$Empresa10		=$row00810["Empresa"];
		$Placa			=$row00810["Placa"];
		}
		
		

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




if($Noved <> 13)
{

$Mensaje1 = "AJUSTE DE TIEMPO EN DESCARGA, se agregan: ".$diferencia." (hor:min:sec), por motivo de ".strtoupper($Mens).": ".strtoupper($ctreporte)."<br>Se contactara en la fecha/Hora: ".$Tiempodescarga;

$Nota	=	strtoupper($Mens).": ".strtoupper($ctreporte);

$sql="INSERT INTO  Notrasextra (Idplan, Fecha, Mensaje1, Usuario)";
$sql.= "VALUES ('$Idviaje', '$horaactual', '$Mensaje1', '$Usuario')";
mysql_query($sql);	


$sql="INSERT INTO  Notasproblemas (Idviaje, Fecha, Problema, Usuario, Estado, Remesa, Noved)";
$sql.= "VALUES ('$Idviaje', '$horaactual', '$Nota', '$Usuario', '0', '$Remesa10', '$Noved')";
mysql_query($sql);

$query8887="UPDATE Viajes set  Problema='1', Leidaproblem = 0 Where Id = '$Idviaje'";
$result8887=mysql_query($query8887, $id);

$sql="INSERT INTO  Notasdeudas  (Idviaje, Manifiesto, Fecha, Observaciones, Usuario)";
$sql.= "VALUES ('$Idviaje', '$Manifiesto', '$horaactual', '$Nota', '$Usuario')";
mysql_query($sql);
	
$query	=	"UPDATE Viajes set Deudas=3, Cartera=1, Usercartera = 'MONICA' Where Id='$Idviaje'";
$result	=	mysql_query($query, $id);



}
else
{

$Mensaje1 = "AJUSTE DE TIEMPO EN DESCARGA, se agregan: ".$diferencia." (hor:min:sec), por motivo de: ".$ctreporte."<br>Se contactara en la fecha/Hora: ".$Tiempodescarga;
	
$sql="INSERT INTO  Notrasextra (Idplan, Fecha, Mensaje1, Usuario)";
$sql.= "VALUES ('$Idviaje', '$horaactual', '$Mensaje1', '$Usuario')";
mysql_query($sql);	
}


header("location: finalizarpausa.php?Id=$Idviaje");

?>