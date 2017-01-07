<?
include("conexion.php");

$Nro	=	$_REQUEST["Nro"];

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
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
	color: #666;
}
.Estilo93 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.Estilo96 {font-size: 11px}
.TextField2 {background-color: #DADADA;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.TextField21 {background-color: #036;
color: #fff;
font-size: 10pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
-->
</style>

        <script type="text/javascript" src="jquery-1.4.2.min.js"></script>



<script LANGUAGE="JavaScript">
function Validar(form)
{
  if (form.Nombre.value == "")
  { alert("Por favor ingrese un Nombre"); form.Nombre.focus(); return; }
 
  form.submit();
}
</script>
<style type="text/css">
<!--
body {
	background-color: #FBFBFB;
}
.titulares {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 12px;
	color: #FFF;
}
-->
</style>
</head>

<body>
<form name="form1" method="post" action="rastero.php">
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="20" valign="middle" bgcolor="#666666"><table width="90%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="385" class="titulares">&nbsp;&nbsp;NUMERO DE GUIA</td>
        </tr>
      </table></td>
    </tr>
  </table>
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="48%" height="40" valign="middle" class="Estilo93 Estilo96"><script language="JavaScript" type="text/JavaScript">
            $(document).ready(function(){
                $("#selecta").change(function(event){
                    var idew = $("#selecta").find(':selected').val();
                    $("#selectb").load('genera-select2.php?id='+idew);
                });
            });
        </script>
        <table width="100%" border="0">
          <tr>
            <td width="80%"><label>
              <br>
              Ingresa tu número de remesa aqui
              <input name="Nro" type="text" class="TextField21" id="Nro" style="width:99%">
            </label></td>
            <td width="20%" valign="bottom"><input name="Submit2" type="button" onClick=Validar(this.form) class="TextField21" value="REALIZAR RASTREO"></td>
          </tr>
        </table>
        <table width="100%" border="0">
          <tr>
            <td><hr size="1"></td>
          </tr>
      </table></td>
    </tr>
  </table>
  
<?
if(!empty($Nro))
{
	
	
	$queryA		="SELECT COUNT(*) as Total FROM Controlbox where Id = '$Nro' and Leida = 1" ;
	$resultA	=mysql_query($queryA, $id);
	
	while($rowA	=mysql_fetch_array($resultA))
	{
	$TotalA		=$rowA["Total"];
	}
	
	
	if($TotalA == 0)
	{
?>
	<script type="text/javascript">
        alert('Esta guia no esta disponible.');
        window.location.href=('rastero.php');
    </script>
    
<?
	}
	else
	{
	
?>

  
  <br>
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="20" valign="middle" bgcolor="#666666"><table width="90%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="385" class="titulares">&nbsp;&nbsp;DETALLES DE ENVIO</td>
        </tr>
      </table></td>
    </tr>
  </table>
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="20%" height="40" valign="middle" bgcolor="#02467D" class="Estilo93 Estilo96" style="color: #FFF; font-weight: bold;">FECHA</td>
      <td width="30%" valign="middle" bgcolor="#02467D" class="Estilo93 Estilo96" style="color: #FFF">NOMBRE</td>
      <td width="30%" valign="middle" bgcolor="#02467D" class="Estilo93 Estilo96" style="color: #FFF; font-weight: bold;">DIRECCION</td>
      <td width="20%" valign="middle" bgcolor="#02467D" class="Estilo93 Estilo96" style="color: #FFF; font-weight: bold;">MOVIMIENTO</td>
    </tr>
  </table>
  <table width="100%" border="0" align="center">
    <tr>
      <td><hr size="1"></td>
    </tr>
  </table>
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr class="Estilo93">
      <td width="20%" height="22" valign="middle" class="Estilo93 Estilo96">FECHA</td>
      <td width="30%" valign="middle" class="Estilo93 Estilo96">NOMBRE</td>
      <td width="30%" valign="middle" class="Estilo93 Estilo96">DIRECCION</td>
      <td width="20%" valign="middle" class="Estilo93 Estilo96">MOVIMIENTO</td>
    </tr>
  </table>
  <table width="100%" border="0" align="center">
    <tr>
      <td><hr size="1"></td>
    </tr>
  </table>
  
<?
	}

}
?>
  
  
</form>
</body>
</html>