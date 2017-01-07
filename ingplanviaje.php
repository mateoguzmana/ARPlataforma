<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

include("conexion.php");

$Iddep	=	$_GET["Iddep"];

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
.TextField21 {background-color: #BCBCBC;
color: #333333;
font-size: 8pt;
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
<form name="form1" method="post" action="ingplanviaje2.php">
  <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="20" valign="middle" bgcolor="#666666"><table width="90%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="385" class="titulares">&nbsp;&nbsp;ORIGEN</td>
        </tr>
      </table></td>
    </tr>
  </table>
  <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="48%" height="40" valign="middle" class="Estilo93 Estilo96"><script language="JavaScript" type="text/JavaScript">
            $(document).ready(function(){
                $("#select1").change(function(event){
                    var id = $("#select1").find(':selected').val();
                    $("#select2").load('genera-select.php?id='+id);
                });
            });
        </script>
        <table width="100%" border="0">
          <tr>
            <td height="30" valign="middle"><select name="select1" class="TextField21" id="select1">
              <option value="">Departamentos</option>
              <?
$query008="SELECT* FROM Departamentos where Id <> 99999 and Id <> 99998 order by Nombre" ;
$result008=mysql_query($query008, $id);

While($row008=mysql_fetch_array($result008))
{
$Nombre8		=$row008["Nombre"];
$Id8			=$row008["Id"];

?>
              <option value="<?=$Id8?>">
                <?=$Nombre8?>
                </option>
              <?
}
?>
            </select>
              <select name="select2" class="TextField21" id="select2">
              </select></td>
          </tr>
        </table>
        <table width="100%" border="0">
          <tr>
            <td><hr size="1"></td>
          </tr>
      </table></td>
    </tr>
  </table>
  <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" >
    <tr>
      <td height="20" valign="middle" bgcolor="#666666"><table width="90%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="385" class="titulares">&nbsp;&nbsp;DESTINO</td>
        </tr>
      </table></td>
    </tr>
  </table>
  <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
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
            <td height="30" valign="middle"><select name="selecta" class="TextField21" id="selecta">
              <option value="">Departamentos</option>
              <?
$query0081="SELECT* FROM Departamentos where Id <> 99999 and Id <> 99998 order by Nombre" ;
$result0081=mysql_query($query0081, $id);

While($row0081=mysql_fetch_array($result0081))
{
$Nombre81		=$row0081["Nombre"];
$Id81			=$row0081["Id"];

?>
              <option value="<?=$Id81?>">
                <?=$Nombre81?>
                </option>
              <?
}
?>
            </select>
              <select name="selectb" class="TextField21" id="selectb">
              </select></td>
          </tr>
        </table>
        <table width="100%" border="0">
          <tr>
            <td><hr size="1"></td>
          </tr>
      </table></td>
    </tr>
  </table>
  <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="20" valign="middle" bgcolor="#666666"><table width="90%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="385" class="titulares">&nbsp;&nbsp;NOMBRE DEL PLAN DE VIAJE</td>
        </tr>
      </table></td>
    </tr>
  </table>
  <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
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
            <td height="30"><label>
              <input name="Nombre" type="text" class="TextField21" id="Nombre" size="50">
            </label></td>
          </tr>
        </table>
        <table width="100%" border="0">
          <tr>
            <td><hr size="1"></td>
          </tr>
      </table></td>
    </tr>
  </table>
  <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="48%" height="40" valign="middle" class="Estilo93 Estilo96"><input name="Submit2" type="button" onClick=Validar(this.form) class="TextField21" value="Ingresar informacion"></td>
    </tr>
  </table>
</form>
</body>
</html>