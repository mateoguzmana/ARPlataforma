<?
include("conexion.php");

$Id						= $_POST["Id"];
$Empresa				= $_POST["Idempresa"];
$Nit					= $_POST["Nit"];
$EmpresaAnt 			= $_POST["Id"];
$SQL="DELETE FROM  Iniciales WHERE Empresa='$Empresa'";
mysql_query($SQL,$id);	
$SQLant="DELETE FROM  Iniciales WHERE Empresa='$EmpresaAnt'";
mysql_query($SQLant,$id);


for ( $i = 1 ; $i <= 30 ; $i ++) 
{	
$Nombre	= $_POST["Iniciales".$i];
	
		if(!empty($Nombre)){

		$sql="INSERT INTO  Iniciales (Nombre, Empresa, Nit)";
		$sql.= "VALUES ('$Nombre', '$Empresa', '$Nit')";
		mysql_query($sql);
	}
}


?>

<script type="text/javascript">
	alert('La operacion se realizo con exito');
	parent.location.href=('inicialesaprobadas.php');
</script>