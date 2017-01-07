<?
include("conexion.php");
date_default_timezone_set('America/Bogota');
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$Id		=	$_REQUEST["Id"];
$Idx	=	$_REQUEST["Idn"];
$Estado	=	$_REQUEST["Estado"];

$query008="SELECT* FROM Viajes where Id = '$Id'" ;
$result008=mysql_query($query008, $id);

While($row008=mysql_fetch_array($result008))
{
$Idn			=$row008["Id"];
$Manifiesto		=$row008["Manifiesto"];
$Remesas		=$row008["Remesas"];
$Planviaje		=$row008["Planviaje"];
$Fecha			=$row008["Fechaini"];
}

$queryof	=	"SELECT COUNT(*) as Totalof FROM Pausar where Idviaje = '$Idn'" ;
$resultof	=	mysql_query($queryof, $id);
							
While($rowof=	mysql_fetch_array($resultof))
{
$Totalof	=	$rowof["Totalof"];
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
.Estilo93 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
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
-->
</style>
<script language="JavaScript">
function Abrir_ventana (pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, width=500, height=500, top=85, left=300";
window.open(pagina,"",opciones);
}
</script>
</head>

<body>
<table width="99%" height="5%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="25" align="right"><span class="Estilo93"><a href="report-detalles-emp.php?Id=<?=$Idx?>" >VOLVER</a></span>
    <hr></td>
  </tr>
</table>
<table width="100%" height="90%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="73%" valign="top"><table width="96%" height="5%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="24%" height="19" bgcolor="#9FB9C4" class="tituloslista">&nbsp;PUESTO DE CONTROL</td>
          <td width="16%" bgcolor="#9FB9C4" class="tituloslista">&nbsp;TIPO</td>
          <td width="7%" bgcolor="#9FB9C4" class="tituloslista">&nbsp;KM</td>
          <td width="23%" bgcolor="#9FB9C4" class="tituloslista">&nbsp;FECHA ESTIMADA</td>
          <td width="22%" bgcolor="#9FB9C4" class="tituloslista">&nbsp;FECHA REPORTE</td>
          <td width="8%" bgcolor="#9FB9C4" class="tituloslista">&nbsp;</td>
        </tr>
    </table>
      <table width="98%" height="40%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td><iframe src="opcionesviaje-report.php?Id=<?=$Id?>" width="100%" height="100%" frameborder="No" allowtransparency="true"></iframe></td>
        </tr>
    </table>
      <table width="98%" height="5%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="40"><iframe src="accionesviaje-report.php?Id=<?=$Id?>" width="100%" height="100%" frameborder="No" allowtransparency="true"></iframe></td>
        </tr>
      </table>
      <table width="96%" height="5%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="24%" height="19" bgcolor="#9FB9C4" class="tituloslista">&nbsp;REPORTES ADICIONALES</td>
          <td width="16%" bgcolor="#9FB9C4" class="tituloslista">&nbsp;</td>
          <td width="7%" bgcolor="#9FB9C4" class="tituloslista">&nbsp;</td>
          <td width="23%" bgcolor="#9FB9C4" class="tituloslista">&nbsp;</td>
          <td width="22%" bgcolor="#9FB9C4" class="tituloslista">&nbsp;</td>
          <td width="8%" bgcolor="#9FB9C4" class="tituloslista">&nbsp;</td>
        </tr>
      </table>
      <table width="98%" height="40%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td><iframe src="notasextras.php?Id=<?=$Id?>" width="100%" height="100%" frameborder="No" allowtransparency="true"></iframe></td>
        </tr>
    </table></td>
    <td width="27%" align="center" valign="top" bgcolor="#E9E7E7"><iframe src="datosviajefull.php?Id=<?=$Id?>&Estado=<?=$Estado?>" width="99%" height="100%" frameborder="No" allowtransparency="true"></iframe></td>
  </tr>
</table>

</body>
</html>