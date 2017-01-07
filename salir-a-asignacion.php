<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

include("conexion.php");


$Manifiesto	=	$_REQUEST["Man"];
$Id			=	$_REQUEST["Man"];
$Fechaing	=	date("Y-m-d H:i:s");
$Creador	=	$_SESSION['Empresa'];




	$query="UPDATE Manifiestos set Asignado = '1' Where Nromanifiesto='$Manifiesto'";
	$result=mysql_query($query, $id);
	
	$query="UPDATE Asignacioncata set Estado = '1' Where Manifiesto='$Manifiesto'";
	$result=mysql_query($query, $id);
	




	$query		="SELECT COUNT(*) as Total FROM Viajes where Manifiesto = '$Id'" ;
	$result		=mysql_query($query, $id);
	
	While($row	=mysql_fetch_array($result))
	{
	$Total		=$row["Total"];
	}
	
	

	
	
	
		if($Total == 0)
		{
			
			$queryA		="SELECT* FROM Asignacioncata where Manifiesto = '$Id'" ;
			$resultA	=mysql_query($queryA, $id);
			
			While($rowA	=mysql_fetch_array($resultA))
			{
			$Cataporte	=$rowA["Cataporte"];
			
			
			$queryk="UPDATE Nrorecepcion set Manifiesto = '$Manifiesto' Where Id = '$Cataporte'";
			$resultk=mysql_query($queryk, $id);
			
			
				$querym="UPDATE Controlbox set Salebog = '1', Fechasalebog = '$Fechaing', Usuariosaleb = '$Creador'  Where Cataporte='$Cataporte'";
				$resultm=mysql_query($querym, $id);
			
				$queryX="SELECT* FROM Controlbox  where Cataporte  = '$Cataporte' GROUP BY Empresa" ;
				$resultX=mysql_query($queryX, $id);
				
				While($rowX=mysql_fetch_array($resultX))
				{
				$EmpresaX		=$rowX["Empresa"];


							$queryI		="SELECT COUNT(*) as Total FROM Empresasremesas where Empresa = '$Empresa' AND Remesa = '$Cataporte'" ;
							$resultI	=mysql_query($queryI, $id);
							
							While($rowI	=mysql_fetch_array($resultI))
							{
							$TotalI		=$rowI["Total"];
							}
							
								if($TotalI == 0)
								{		
									$sqlo="INSERT INTO  Empresasremesas (Empresa, Remesa, Manifiesto)";
									$sqlo.= "VALUES ('$EmpresaX', '$Cataporte', '$Manifiesto')";
									mysql_query($sqlo);
								}
				}
			
			
			}
			

			
			
			
			$queryr="SELECT* FROM Manifiestos  where Nromanifiesto  = '$Id'" ;
			$resultr=mysql_query($queryr, $id);
			
			While($rowr=mysql_fetch_array($resultr))
			{
			$Agencia		=$rowr["Sucursal"];
			$Manifiesto		=$rowr["Nromanifiesto"];
			$Fecha			=$rowr["Fecha"];
			$Propietario	=$rowr["Propietario"];
			$Conductor		=$rowr["Conductor"];
			$Placa			=$rowr["Placa"];
			$Empresa		=$rowr["Empresa"];
			$Origen			=$rowr["Origen"];
			$Nombreorg		=$rowr["Nombreorg"];
			$Destino		=$rowr["Destino"];
			$Nomdest		=$rowr["Nomdest"];
			$Fechacrea		=$rowr["Fechacrea"];
			
			}
			
			$fechainir = date("Y-m-d");
			
			$sql="INSERT INTO  Viajes (Manifiesto, Remesas, Planviaje, Iniciado, Fechaini, Placa)";
			$sql.= "VALUES ('$Id', '$Cataporte', '$Planviaje', '1', '$fechainir', '$Placa')";
			mysql_query($sql);
			
			$fechaahora	= date("Y-m-d H:i:s");
			
			
			
				$query0		="SELECT* FROM Asignacioncata where Manifiesto = '$Id'" ;
				$result0	=mysql_query($query0, $id);
				
				While($row0	=mysql_fetch_array($result0))
				{
				$Cataport	=$row0["Cataporte"];
				
					$query="UPDATE Nrorecepcion set Manifiesto = '$Manifiesto' Where Id='$Cataport'";
					$result=mysql_query($query, $id);
				
					$queryB		="SELECT COUNT(*) as Total FROM Remisiones where Remesa = '$Cataport'" ;
					$resultB	=mysql_query($queryB, $id);
					
					While($rowB	=mysql_fetch_array($resultB))
					{
					$TotalB		=$row0["Total"];
					}
					
						if($TotalB == 0)
						{
							$sql="INSERT INTO  Remisiones (Agencia, Remesa, Manifiesto, Fecha, Empresa, Origen, Nombreorg, Destino, Nombredest)";
							$sql.= "VALUES ('$Agencia', '$Cataport', '$Id', '$Fecha', '$Empresa', '$Origen', '$Nombreorg', '$Destino', '$Nomdest')";
							mysql_query($sql);
						}
				
				}
			
				
	


		}
?>

<script language='javascript'>
	alert("La Operacion se realizo con Exito");	
	location.href=('listalistosparasalir.php');
</script>