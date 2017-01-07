<?
include("conexion.php");

$login		=	$_POST['Usuario'];
$password 	=	$_POST['Pass'];

$Fechahoy	= 	date("Y-m-d");

if(empty($login) || empty($password))
{
header("location: index-ok.php?error=a"); 
}
else
{
$query="SELECT COUNT(*) as Total FROM Usuarios where Cedula = '$login' and Clave = '$password'" ;
$result=mysql_query($query, $id);

While($row=mysql_fetch_array($result))
{
$Total=$row["Total"];
}
		if ($Total == 0)
		{
		header("location: index-ok.php?error=b");	
		}
		else
		{
		
		$query000="SELECT* FROM Usuarios where Cedula = '$login' and Clave = '$password'" ;
		$result000=mysql_query($query000, $id);
		
		While($row000=mysql_fetch_array($result000))
		{
		$Id					=$row000["Id"];
		$Usuarior			=$row000["Alias"];
		$Usuarior			=strtoupper($Usuarior);
		$Cedula				=$row000["Cedula"];
		$Nombre1			=$row000["Nombre1"];
		$Nombre2			=$row000["Nombre2"];
		$Nombrecomp			=$Nombre1." ".$Nombre2;
		$Estado				=$row000["Estado"];
		$Vencimiento		=$row000["Vencimiento"];
		$Nomfull			=$row000["Nombrefull"];
		$Sucursal			=$row000["Sucursal"];
		$Tipo				=$row000["Tipo"];
		}
		
		
					if($Vencimiento == '0000-00-00')
					{
					$Vencimiento = '2050-10-10';	
					}
					else
					{
					$Vencimiento = $Vencimiento;	
					}
				
							if ($Estado == '0')
							{
							header("location: index-ok.php?error=d");	
							}
							elseif ($Vencimiento <= $Fechahoy)
							{
							header("location: index-ok.php?error=e");	
							}
							else
							{
								session_start(); 
								
								$horas = 12; 
								$tiempo = $horas * 3600;
								ini_set("session.gc_maxlifetime",$tiempo);
								
								setcookie("logueado", $Cedula);

								session_register('tipo');
								$_SESSION['tipo']=$Tipo;
		
								session_register('sesion');
								$_SESSION['sesion']='si';
								
								session_register('Cargoxix');
								$_SESSION['Cargoxix']=$Cargo;
								
								session_register('Sucursala');
								$_SESSION['Sucursala']=$Sucursal;
								
								session_register('Empresa');
								$_SESSION['Empresa']=$Usuarior;
								
								session_register('Iduser');
								$_SESSION['Iduser']=$Id;
								
								session_register('userid');
								$_SESSION['userid']=$Id;
								
								session_register('Cedulaxix');
								$_SESSION['Cedulaxix']=$Cedula;
		
								session_register('Nombrecomp');
								$_SESSION['Nombrecomp']=$Nombrecomp;
								
								session_register('Nomfull');
								$_SESSION['Nomfull']=$Nomfull;
								
								$horaactual 	= 	date("Y-m-d H:i:s");
								
								$sqlx="INSERT INTO  Logueo (Usuario, Cedula, Fecha)";
								$sqlx.= "VALUES ('$Usuarior', '$Cedula', '$horaactual')";
								mysql_query($sqlx);
								
								$querye="UPDATE Usuarios set Logueado=1 Where Cedula='$Cedula'";
								$resulte=mysql_query($querye, $id);
								
								header("location: zona.php"); 
							}

	
		
 
		}
}
?>

