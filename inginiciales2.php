<?
include("conexion.php");

$Empresa				= $_POST["Idempresa"];
$Nit					= $_POST["Nit"];





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