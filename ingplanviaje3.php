<?
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

include("conexion.php");

$bd_host = "localhost";    
$bd_usuario = "arplataf_sistema";    
$bd_password = "2T;oG)RL@vJ!";    
$bd_base = "arplataf_sistema";    
$con = mysql_connect($bd_host, $bd_usuario, $bd_password);    
mysql_select_db($bd_base, $con); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<script src="js/prototype.js" type="text/javascript"></script>
<script src="js/scriptaculous.js" type="text/javascript"></script>
<script src="js/ajax.js" type="text/javascript"></script>
<style>
#contratados{
	background-color:#FFFFCC;
	margin:5px;
	height:100%;
}
#despedidos{
	background-color:#E4ECF3;
	margin:5px;
	height:100%;
}
#contratados div, #despedidos div{
	margin:4px;
	cursor:move;
	border:1px solid black;
}
h3{
	margin:4px;
	background-color:#4B6186;
	color:#FFFFFF;
	cursor:move;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
#pagina{
	width:450px;
	margin:auto;
	padding-left:0px;
	padding-right:0px;
	height:110%;
}
.TextField21 {background-color: #BCBCBC;
color: #333333;
font-size: 8pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.titulon {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
</style>
<script type="text/javascript">
	function obtenerElementos() 
	{
		var secciones = document.getElementsByClassName('seccion');
		var alerttext = '';
		var separador = '';
		secciones.each(function(seccion) 
		{
			alerttext += separador + Sortable.sequence(seccion);
			separador = "/";
		}
		);
		EnviarDatos(alerttext);
		window.location = "ingplanviaje4.php"
		return false;
	}
</script>
</head>

<body>

<div id="pagina">
  <div id="contratados" class="seccion" style="float:left; width:200px; height:4800px;  font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
	<h3 class="arrastrar">&nbsp;PLAN DE VIAJE</h3>

<br>


</div>
<div id="despedidos" class="seccion" style="float:left; width:200px; height:4800px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
	<h3 class="arrastrar">&nbsp;PUESTOS DE CONTROL</h3>
<br>
<?php
$Idplann = $_SESSION['Iddelplan'];

$query008="SELECT* FROM Planes where Id = '$Idplann' " ;
$result008=mysql_query($query008, $id);

While($row008=mysql_fetch_array($result008))
{
$Id8				=$row008["Id"];
$Idpueo8			=$row008["Idpueo"];
$Idpued8			=$row008["Idpued"];



	 $Resultado=mysql_query("SELECT * FROM Puestos where Id <> '$Idpueo8' and Id <> '$Idpued8' and Id <> '99999' and Id <> '99998' order by Nombre",$con);
	 while($MostrarFila=mysql_fetch_array($Resultado))
	 {
		 echo "<div id='despedidos_".$MostrarFila['Id']."'>".$MostrarFila['Nombre']."</div>";
	 }
}
	?>

</div>
</div>
<script type="text/javascript">
 // <![CDATA[
	Sortable.create('contratados',{
		tag:'div',
		dropOnEmpty: true, 
		containment:["contratados","despedidos"],
		constraint:false});
	Sortable.create('despedidos',{
		tag:'div',
		dropOnEmpty: true, 
		containment:["contratados","despedidos"],
		constraint:false});
	Sortable.create('pagina',{
		tag:'div',
		only:'seccion',
		handle:'arrastrar'});
 // ]]>
</script>
<table width="450" border="0" align="center">
  <tr>
    <td height="44"><input name="Button" type="button" class="TextField21" onclick="obtenerElementos()" value="GUARDAR PLAN DE VIAJE" /></td>
  </tr>
</table>
</body>
</html>
