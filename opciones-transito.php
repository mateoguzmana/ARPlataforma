<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

include("conexion.php");
date_default_timezone_set('America/Bogota');


$Id				=	$_REQUEST["Id"];
$horaactual 	=	date("Y-m-d H:i:s");

$Cargo			=	$_SESSION['Cargoxix'];

$nombreuser		=	$_SESSION['Empresa'];

if($_SESSION['anterior-transi'] == "")
{
$_SESSION['anterior-transi'] = "listaentransito.php";	
}




		$queryt300="SELECT* FROM Viajes Where Id = '$Id'" ;
		$resultt300=mysql_query($queryt300, $id);
			
		While($rowt300=mysql_fetch_array($resultt300))
		{
		$Nombrefull00	 	=strtoupper($rowt300["Userdespacho"]);
		$Nombrefull00M	 	=strtoupper($Nombrefull00);
		
		$Nombrefull01	 	=$rowt300["Usercomercial"];
		$Nombrefull01M	 	=strtoupper($Nombrefull01);
		
		$Nombrefull02	 	=$rowt300["Usercartera"];
		$Nombrefull02M	 	=strtoupper($Nombrefull02);
		
		
		$Nombrefull03	 	=$rowt300["Userentregas"];
		$Nombrefull03M	 	=strtoupper($Nombrefull03);
		
		
		$Nombrefull04	 	=$rowt300["Usercalidad"];
		$Nombrefull04M	 	=strtoupper($Nombrefull04);
		
		
		$Reservado		 	=$rowt300["Reservado"];
		$Userreserv		 	=$rowt300["Userreserv"];
		}





		$text 	= 	$Nombrefull00;
		$textm 	= 	$Nombrefull00M;
		$esta	=	substr_count($text, $nombreuser);
		$estam	=	substr_count($textm, $nombreuser);
		
		$text1 	= 	$Nombrefull01;
		$text1m = 	$Nombrefull01M;
		$esta1	=	substr_count($text1, $nombreuser);
		$esta1m	=	substr_count($text1m, $nombreuser);
		
		$text2 	= 	$Nombrefull02;
		$text2m = 	$Nombrefull02M;
		$esta2	=	substr_count($text2, $nombreuser);
		$esta2m	=	substr_count($text2m, $nombreuser);
		
		$text3 	= 	$Nombrefull03;
		$text3m = 	$Nombrefull03M;
		$esta3	=	substr_count($text3, $nombreuser);
		$esta3m	=	substr_count($text3m, $nombreuser);
		
		$text4 	= 	$Nombrefull04;
		$text4m = 	$Nombrefull04M;
		$esta4	=	substr_count($text4, $nombreuser);
		$esta4m	=	substr_count($text4m, $nombreuser);
		
		
		
//echo $nombreuser.' - '.$esta1.' - '.$Id;


		
		

		
		
if(($esta > 0 || $estam > 0 )) 
{
$querye="UPDATE Viajes set Despacho = 3 Where Id = '$Id'" ;
$resulte=mysql_query($querye, $id);

$query	=	"UPDATE Viajes set Leidadespacho = 1 Where Id='$Id'";
$result	=	mysql_query($query, $id);
		
}
if(($esta1 > 0 || $esta1m > 0 )) 
{
$querye="UPDATE Viajes set Comercial = '3' Where Id = '$Id'" ;
$resulte=mysql_query($querye, $id);

$query	=	"UPDATE Viajes set Leidacomercial = '1' Where Id='$Id'";
$result	=	mysql_query($query, $id);

$queryccx		=	"UPDATE Notascomercial set Leida = '$horaactual' Where Idviaje='$Id' and Leida = '0000-00-00 00:00:00' ";
$resultccx	=	mysql_query($queryccx, $id);
}
if(($esta2 > 0 || $esta2m > 0)) 
{
$queryex="UPDATE Viajes set Cartera = 3 Where Id = '$Id'" ;
$resultex=mysql_query($queryex, $id);

$queryx		=	"UPDATE Viajes set Leidacartera = 1 Where Id='$Id'";
$resultx	=	mysql_query($queryx, $id);
}

if(($esta3 > 0 || $esta3m > 0)) 
{
$queryex="UPDATE Viajes set Entrega = 3 Where Id = '$Id'" ;
$resultex=mysql_query($queryex, $id);

$queryx		=	"UPDATE Viajes set Leidaentrega = 1 Where Id='$Id'";
$resultx	=	mysql_query($queryx, $id);
}

if(($esta4 > 0 || $esta4m > 0)) 
{
$queryex="UPDATE Viajes set Calidads = 3 Where Id = '$Id'" ;
$resultex=mysql_query($queryex, $id);

$queryx		=	"UPDATE Viajes set Leidacalidad = 1 Where Id='$Id'";
$resultx	=	mysql_query($queryx, $id);
}



$query008="SELECT* FROM Viajes where Id = '$Id'" ;
$result008=mysql_query($query008, $id);

While($row008=mysql_fetch_array($result008))
{
$Idn			=$row008["Id"];
$Manifiesto		=$row008["Manifiesto"];
$Remesas		=$row008["Remesas"];
$Planviaje		=$row008["Planviaje"];
$Fecha			=$row008["Fechaini"];
$Urgente		=$row008["Urgente"];
}




				$queryof2cx		=	"SELECT COUNT(*) as Totalof8 FROM Recorrido where Mensaje = 'ok' and Idviaje = '$Id'" ;
				$resultof2cx	=	mysql_query($queryof2cx, $id);
											
				While($rowof2cx	=	mysql_fetch_array($resultof2cx))
				{
				$Totalof2cx		=	$rowof2cx["Totalof8"];
				
				//echo "estado: ".$Totalof2cx."<br>";
				}
				



				$queryof2c	=	"SELECT COUNT(*) as Totalof2 FROM Estados where Manifiesto = '$Manifiesto' and (Estado = 'Descargando' or Estado = 'Descarga')" ;
				$resultof2c	=	mysql_query($queryof2c, $id);
											
				While($rowof2c=	mysql_fetch_array($resultof2c))
				{
				$Totalof2c	=	$rowof2c["Totalof2"];
				
			//	echo "estado: ".$Totalof2c."<br>";
				}

				if($Totalof2c == 0)
				{
		
							$query2b31="SELECT COUNT(*) as Total2b3 FROM Recorrido where Idviaje = '$Id' and Estado = 0";
							$result2b31=mysql_query($query2b31, $id);
							
							While($row2b31=mysql_fetch_array($result2b31))
							{
							$Total2b31=$row2b31["Total2b3"];
							}
						//	echo "recorrido: ".$Total2b31."<br>";
						
								if($Total2b31 == 0)
								{
								//echo "si";	
									
								$queryll="UPDATE Estados set  Estado='Descargando' Where Manifiesto='$Manifiesto'";
								$resultll=mysql_query($queryll, $id);
								
								
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


	$Mensaje1 = "AJUSTE DE TIEMPO EN DESCARGA, se agregan: 00:30:00 (hor:min:sec), por motivo de: Incremento Automático.<br>Se contactara en la fecha/Hora: ".$tiempoconx;
	
							
	$sql="INSERT INTO  Notrasextra (Idplan, Fecha, Mensaje1, Usuario)";
	$sql.= "VALUES ('$Idn', '$horaactual', '$Mensaje1', 'SISTEMA')";
	mysql_query($sql);	
										}
								
								}

				}
				
				

if($Cargo == 'SEGURIDAD' || $Cargo == 'CONTROL ENTREGAS' )
{
/*
			$query2b3="SELECT COUNT(*) as Total2b3 FROM Descarga where Idviaje = '$Id'" ;
			$result2b3=mysql_query($query2b3, $id);
						
			While($row2b3=mysql_fetch_array($result2b3))
			{
			$Total2b3=$row2b3["Total2b3"];
			}
						if($Total2b3 == 1)
						{
								$query001812w="SELECT* FROM Descarga where Idviaje = '$Idn'" ;
								$result001812w=mysql_query($query001812w, $id);
								
								While($row001812w=mysql_fetch_array($result001812w))
								{
								$Tiempoini812w				=	$row001812w["Tiempofin"];
								$Tiempototal812w			=	$row001812w["Tiempototal"];
								}
						
									if($horaactual > $Tiempoini812w)
									{
												$query008nyw8x="SELECT '$horaactual' + INTERVAL 60 DAY_MINUTE as minutosx" ;
												$result008nyw8x=mysql_query($query008nyw8x, $id);
																													
												While($row008nyw8x=mysql_fetch_array($result008nyw8x))
												{
												$tiempoconx 		=		$row008nyw8x["minutosx"];
												}
												
												$queryee="UPDATE Descarga set Tiempoini='$horaactual', Tiempofin='$tiempoconx' Where Idviaje='$Idn'";
												$resultee=mysql_query($queryee, $id);
												
	$Mensaje1 = "AJUSTE DE TIEMPO EN DESCARGA, se agregan: 01:00:00 (hor:min:sec), por motivo de: Incremento Automático.<br>Se contactara en la fecha/Hora: ".$tiempoconx;
	
							
	$sql="INSERT INTO  Notrasextra (Idplan, Fecha, Mensaje1, Usuario)";
	$sql.= "VALUES ('$Idn', '$horaactual', '$Mensaje1', 'SISTEMA')";
	mysql_query($sql);	
												
												
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
						
*/
												$queryestate		=	"SELECT COUNT(*) as estado FROM Viajes where Id = '$Id' and Pausado = 1" ;
												$resultestate		=	mysql_query($queryestate, $id);
												
												While($rowestate	=	mysql_fetch_array($resultestate))
												{
												$estadron				=	$rowestate["estado"];
												}
												if($estadron > 0)
												{
												$query88871="UPDATE Viajes set Pausado = 0 Where Id = '$Id'";
												$result88871=mysql_query($query88871, $id);
}												}


	
	$query0081="SELECT* FROM Manifiestos where Nromanifiesto = '$Manifiesto'" ;
	$result0081=mysql_query($query0081, $id);

	While($row0081=mysql_fetch_array($result0081))
	{

	$Empresa		=$row0081["Empresa"];

	}
	
	$query0081cc="SELECT* FROM Empresas where Nit = '$Empresa'" ;
	$result0081cc=mysql_query($query0081cc, $id);

	While($row0081cc=mysql_fetch_array($result0081cc))
	{
	$Nombreempre			=$row0081cc["Nombre"];
	}
	
$queryof	=	"SELECT COUNT(*) as Totalof FROM Pausar where Idviaje = '$Idn'" ;
$resultof	=	mysql_query($queryof, $id);
							
While($rowof=	mysql_fetch_array($resultof))
{
$Totalof	=	$rowof["Totalof"];
}

$queryof2	=	"SELECT COUNT(*) as Totalof2 FROM Estados where Manifiesto = '$Manifiesto' and (Estado = 'Descargando' or Estado = 'Descarga')" ;
$resultof2	=	mysql_query($queryof2, $id);
							
While($rowof2=	mysql_fetch_array($resultof2))
{
$Totalof2	=	$rowof2["Totalof2"];
}


if($Totalof2 > 0)
{
	
	$queryeeer="SELECT COUNT(*) as Total FROM Usuarios where Alias = '$nombreuser' and ( Cargo Like '%SISTEMAS%' OR Cargo Like '%PRESIDENCIA%' OR Cargo Like '%GERENCIA%' OR Cargo Like '%SERVICIO AL CLIENTE TNT EXPRESS%' OR Cargo Like '%SEGURIDAD%')" ;
	$resulteeer=mysql_query($queryeeer, $id);
	
	While($roweeer=mysql_fetch_array($resulteeer))
	{
	$Totaleeer=$roweeer["Total"];
	}
		
		
	//echo 	$Totaleeer;
		
		
		
	if($Totaleeer > 0 )
	{
	
		if($Reservado == 1 && $Userreserv <> $nombreuser)
		{
		?>
	
		<SCRIPT language="JavaScript"> 
		<!-- 
		alert('El usuario <?=$Userreserv?> esta trabajando en este viaje! \nRevise nuevamente en 5 minutos'); 
		//--> 
		</SCRIPT> 
		<?		
		}
		else
		{
			if($nombreuser <> 'MARIO' && $nombreuser <> 'TRANSWEB' && $nombreuser <> 'GERENCIA')
			{
			$queryer="UPDATE Viajes set Reservado = 1, Userreserv = '$nombreuser', Fecharesv = '$horaactual' Where Id = '$Id'" ;
			$resulter=mysql_query($queryer, $id);
			}
		}
		
		
	}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
<!--
.titles {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	text-align: center;
	color: #666;
}
.textos {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #009;
	text-align: center;
}
.listado {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #FFF;
}
body {
	background-color: #F8F8F8;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo93 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #006;
}
.listado1 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #666;
}
.textos1 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #009;
	text-align: right;
}
-->
</style>


  
<style type="text/css">
<!--
.TextField2 {background-color: #DADADA;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.tituloslista {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
}
.titulook {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.titulook {
	font-weight: bold;
}
.titulook {
	font-size: 10px;
}
-->
</style>
<script language="JavaScript">
function Abrir_ventana (pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, width=500, height=600, top=85, left=300";
window.open(pagina,"",opciones);
}
</script>

<link rel="stylesheet" href="lytebox.css" type="text/css" media="screen"/>
<script type="text/javascript" language="javascript" src="lytebox.js"></script>

</head>

<?
$query008m="SELECT* FROM Remisiones where (Destinatario = '' OR Dirdest = '' OR Teldesti = '') AND (Manifiesto = '$Manifiesto')" ;
$result008m=mysql_query($query008m, $id);

While($row008m=mysql_fetch_array($result008m))
{
$Remesar	=$row008m["Remesa"];
}


?>

                  

<body>


<table width="99%" height="5%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="84%" height="25" valign="bottom" class="titulook"><span class="titulook">EMPRESA:</span> &nbsp;<span class="Estilo93"><?=$Nombreempre?>
    </span></td>
    <td width="16%" align="right"><span class="Estilo93"><a href="<?=$_SESSION['anterior-transi'];?>">Volver</a> &nbsp;| &nbsp;</span><a href="<?=$_SERVER['REQUEST_URI'];?>" class="Estilo93">Refrescar</a></td>
  </tr>
</table>
<table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="14" align="right"><hr></td>
  </tr>
</table>
<table width="100%" height="85%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top"><table width="96%" height="5%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="50%" height="28">
          
          <?
if($Totalof == 0 and $Totalof2 == 0)
{
?>
          &nbsp;&nbsp;<a href="javascript:Abrir_ventana('adicionar.php?Id=<?=$Id?>')"><img src="Images/ico-2.png" alt="Adición  de tiempo" title="Adición  de tiempo" width="25" height="23" border="0"></a>
          
          
          
<?
}
?>
          &nbsp;&nbsp;<a href="javascript:Abrir_ventana('enviaralista.php?Id=<?=$Id?>&man=<?=$Manifiesto?>')"><img src="Images/ico-3.png" alt="Enviar a lista de Asignación" title="Enviar a lista de Asignación" width="25" height="23" border="0"></a>
          
          
          <?
if($Totalof == 0 and $Totalof2 == 0)
{
?>
          &nbsp;&nbsp;<a href="javascript:Abrir_ventana('pausartransito-empty.php?Id=<?=$Id?>')"><img src="Images/ico-4.png" alt="Pausar Transito" title="Pausar Transito" width="25" height="23" border="0"></a>
          <?
}
elseif($Totalof > 0 and $Totalof2 == 0)
{
?>
          &nbsp;&nbsp;<a href="javascript:Abrir_ventana('despausartransito.php?Id=<?=$Id?>')"><img src="Images/ico-6.png" alt="Despausar Transito" title="Despausar Transito" width="25" height="23" border="0"></a>
          <?
}
?>          
 
</td>
        <td width="50%" align="right"><?=$escribe?></td>
        </tr>
      </table>
      <table width="96%" height="5%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="24%" height="19" bgcolor="#9FB9C4" class="tituloslista">&nbsp;PUESTO DE CONTROL</td>
          <td width="16%" bgcolor="#9FB9C4" class="tituloslista">&nbsp;TIPO</td>
          <td width="7%" bgcolor="#9FB9C4" class="tituloslista">&nbsp;KM</td>
          <td width="23%" bgcolor="#9FB9C4" class="tituloslista">&nbsp;FECHA ESTIMADA</td>
          <td width="22%" bgcolor="#9FB9C4" class="tituloslista">&nbsp;FECHA REPORTE</td>
          <td width="8%" bgcolor="#9FB9C4" class="tituloslista">&nbsp;ESTADO</td>
        </tr>
      </table>
      <table width="98%" height="38%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td><iframe src="opcionesviaje.php?Id=<?=$Id?>" width="100%" height="100%" frameborder="No" allowtransparency="true"></iframe></td>
        </tr>
      </table>
      <table width="98%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td><iframe src="accionesviaje.php?Id=<?=$Id?>" width="100%" height="50px" frameborder="No" allowtransparency="true"></iframe></td>
        </tr>
      </table>
      <table width="96%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="24%" height="19" bgcolor="#9FB9C4" class="tituloslista">&nbsp;REPORTES ADICIONALES</td>
          <td width="16%" bgcolor="#9FB9C4" class="tituloslista">&nbsp;</td>
          <td width="7%" bgcolor="#9FB9C4" class="tituloslista">&nbsp;</td>
          <td width="23%" bgcolor="#9FB9C4" class="tituloslista">&nbsp;</td>
          <td width="22%" bgcolor="#9FB9C4" class="tituloslista">&nbsp;</td>
          <td width="8%" bgcolor="#9FB9C4" class="tituloslista">&nbsp;</td>
        </tr>
      </table>
      <table width="98%" height="38%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td><iframe src="notasextras.php?Id=<?=$Id?>" width="100%" height="100%" frameborder="No" allowtransparency="true"></iframe></td>
        </tr>
    </table></td>
    <td width="343" align="center" valign="top" bgcolor="#E9E7E7"><iframe src="datosviajefull.php?Id=<?=$Id?>" width="99%" height="100%" frameborder="No" allowtransparency="true"></iframe></td>
  </tr>
</table>

</body>
</html>