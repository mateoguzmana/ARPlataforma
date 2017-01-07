<?
session_start(); 
include("conexion.php");

date_default_timezone_set('America/Bogota');

$Usuario		= 		$_SESSION['Empresa'];


$Manifiesto				= $_POST["Manifiesto"];
$Idviaje				= $_POST["Idviaje"];
$Sellos					= $_POST["sellos"];
$Citas					= $_POST["cita"];
$Transitonoc			= $_POST["Transitonoc"];
$Horamax				= $_POST["Horamax"];
$Horaretor				= $_POST["Horaretor"];
$Equipo					= $_POST["Equipo"];
$Cobijas				= $_POST["Cobijas"];
$Cant					= $_POST["Cant"];
$Entregas				= $_POST["Entregas"];
$Santo					= $_POST["Santo"];
$Santoysena				= $_POST["Santoysena"];

$Carga					= $_POST["Carga"];
$Empresaotra			= $_POST["Empresaotra"];
$Tipomer				= $_POST["Tipomer"];
$Arp					= $_POST["Fechaarp"];
$Pitorev				= $_POST["Pitorev"];

$equipo					= $_POST["equipo"];
$Userequipo				= $_POST["Userequipo"];





$Contenedor				= $_POST["Contenedor"];
$Nrocont				= $_POST["Nrocont"];
$Lugar					= $_POST["Lugar"];
$Fechadevol				= $_POST["Fechadevol"];














$Nrocont2				= $_POST["Nrocont2"];
$Fechadevol2			= $_POST["Fechadevol2"];
$Lugar2					= $_POST["Lugar2"];







$Acompanado				= $_POST["Acompanado"];
$Nombrecomp				= $_POST["Nombrecomp"];
$Celacomp				= $_POST["Celacomp"];
$Celularadc				= $_POST["Celularadc"];
$Nrocelu				= $_POST["Nrocelu"];
$Cargado				= $_POST["Cargado"];
$Fechacar				= $_POST["Fechacar"];
$Nocargado				= $_POST["Nocargado"];
$Lugarcar				= $_POST["Lugarcar"];
$Fechaporcarg			= $_POST["Fechaporcarg"];

$Revisado				= $_POST["Revisado"];
$Revipor				= $_POST["Revipor"];
$Autorizad				= $_POST["Autorizad"];
$Planilla				= $_POST["Planilla"];
$Nroplan				= $_POST["Nroplan"];

$Observaciones			= $_POST["Observaciones"];

$regalo					= $_POST["regalo"];

$Conductor				= $_POST["Conductor"];
$Placa					= $_POST["Placa"];
$Tipoobs				= $_POST["Tipoobs"];
$Nombrecond				= $_POST["Nombrecond"];
$Compromiso				= $_POST["Compromiso"];


$Placa2					= $_POST["Placa2"];


$Fechacrea	 			= date("Y-m-d H:i:s");
$Usuario				= $_SESSION['Empresa'];


if($regalo == 1)
{
$sql="INSERT INTO  Regalos (Nit, Placa, Tipo, Usuario, Fecha, Nombre)";
$sql.= "VALUES ('$Conductor', '$Placa', '$Tipoobs', '$Usuario', '$Fechacrea', '$Nombrecond')";
mysql_query($sql);	
}



if($Cobijas == '1')
{
$sql	="INSERT INTO  debecobijas (Placa, Valor, Usuario, Fecha)";
$sql   .= "VALUES ('$Placa2', '$Cant', '$Usuario', '$Fechacrea')";
mysql_query($sql);	
}





if($Equipo == '1')
{
$sql="INSERT INTO  debeequipos (Placa, Valor, Usuario, Fecha)";
$sql.= "VALUES ('$Placa2', '1', '$Usuario', '$Fechacrea')";
mysql_query($sql);	
}



$sql="INSERT INTO  Datosviaje (Idviaje, Manifiesto, Sellos, Citas, Transitonoc, Horamax, Horaretor, Equipo, Cobijas, Cant, Santo, Santoysena, Acompanado, Nombrecomp, Celacomp, Celularadc, Nrocelu, Cargado, Fechacar, Nocargado, Lugarcar, Fechaporcarg, Observaciones, Usuario, Fechacrea, Revisado, Revipor, Autorizad, Planilla, Nroplan, Entregas, Carga, Empresaotra, Tipomer, Arp, Compromiso, Pitorev, Equipos, Usuarioequip)";
$sql.= "VALUES ('$Idviaje', '$Manifiesto', '$Sellos', '$Citas', '$Transitonoc', '$Horamax', '$Horaretor', '$Equipo', '$Cobijas', '$Cant', '$Santo', '$Santoysena', '$Acompanado', '$Nombrecomp', '$Celacomp', '$Celularadc', '$Nrocelu', '$Cargado', '$Fechacar', '$Nocargado', '$Lugarcar', '$Fechaporcarg', '$Observaciones', '$Usuario', '$Fechacrea', '$Revisado', '$Revipor', '$Autorizad', '$Planilla', '$Nroplan', '$Entregas', '$Carga', '$Empresaotra', '$Tipomer', '$Arp', '$Compromiso', '$Pitorev', '$equipo', '$Userequipo')";
mysql_query($sql);

$query="UPDATE Viajes set Iniciado='3' Where Id='$Idviaje'";
$result=mysql_query($query, $id);




$querysw		="SELECT COUNT(*) as Total FROM Contenedor where Manifiesto = '$Manifiesto' " ;
$resultsw		=mysql_query($querysw, $id);

While($rowsw	=mysql_fetch_array($resultsw))
{
$Totalsw		=$rowsw["Total"];
}


if($Totalsw > 0)
{
	$queryconte			="SELECT* FROM Contenedor where Manifiesto = '$Manifiesto' order by Id DESC Limit 0,1" ;
	$resultconte		=mysql_query($queryconte, $id);
	
	While($rowconte		=mysql_fetch_array($resultconte))
	{
	$Idconte			=$rowconte["Id"];
	$Nroconte			=$rowconte["Nro"];
	$Fechahoraconte		=$rowconte["Fechahora"];
	$Lugarconte			=$rowconte["Lugar"];
	}

	$query="UPDATE Datosviaje set Contenedor='1', Nrocont = '$Nroconte', Lugar = '$Lugarconte', Fechadevol = '$Fechahoraconte' Where Idviaje='$Idviaje' and Manifiesto='$Manifiesto'";
	$result=mysql_query($query, $id);


	$queryconte			="SELECT* FROM Contenedor where Manifiesto = '$Manifiesto' and Id <> '$Idconte' order by Id DESC Limit 0,1" ;
	$resultconte		=mysql_query($queryconte, $id);
	
	While($rowconte		=mysql_fetch_array($resultconte))
	{
	$Idconte2			=$rowconte["Id"];
	$Nroconte2			=$rowconte["Nro"];
	$Fechahoraconte2	=$rowconte["Fechahora"];
	$Lugarconte2		=$rowconte["Lugar"];
	}

	$query="UPDATE Datosviaje set Contenedor2='1', Nrocont2 = '$Nroconte2', Lugar2 = '$Lugarconte2', Fechadevol3 = '$Fechahoraconte2' Where Idviaje='$Idviaje' and Manifiesto='$Manifiesto'";
	$result=mysql_query($query, $id);
	
}

		$queryconte			="SELECT* FROM Manifiestos where Nromanifiesto = '$Manifiesto' order by Id DESC Limit 0,1" ;
		$resultconte		=mysql_query($queryconte, $id);
		
		While($rowconte		=mysql_fetch_array($resultconte))
		{
		$Conductor			=$rowconte["Conductor"];
		}
		
		
		
$queryof	=	"SELECT COUNT(*) as Totalof FROM Manifiestos where Conductor = '$Conductor'" ;
$resultof	=	mysql_query($queryof, $id);
							
While($rowof=	mysql_fetch_array($resultof))
{
$Totalof	=	$rowof["Totalof"];
}

if($Totalof == 1)
{


			
			//$Idviaje			=	$_POST["Idviaje"];
			$Textourg			=	"PRIMER VIAJE PARA ESTE CONDUCTOR - SISTEMA" ;
			
			$horaactual 		=	date("Y-m-d H:i:s");
								
			
						$query88877="UPDATE Viajes set Textourg = '$Textourg', Urgente='0', Primerv='1' Where Id = '$Idviaje'";
						$result88877=mysql_query($query88877, $id);
						
			
						$sql="INSERT INTO  Notrasextra (Idplan, Fecha, Mensaje1, Mensaje2, Usuario)";
						$sql.= "VALUES ('$Idviaje', '$horaactual', '$Textourg', '$Textourg', 'SEG. ESPECIAL')";
						mysql_query($sql);




}


if($Cobijas == 1 || $Equipo == 1)
{
?>	
<script language='javascript'>
window.location.href=('imprimir-planilla-equipos.php?Id=<?=$Idviaje?>');
</script>
<?	
}	
else
{
?>

<script language='javascript'>
parent.location.href=('transito.php');
</script>

<?	
}	
?>