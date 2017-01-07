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

$Idplanchon		=		$_REQUEST["Id"];

$query00h="SELECT* FROM Planes where Id = '$Idplanchon'" ;
$result00h=mysql_query($query00h, $id);

While($row00h=mysql_fetch_array($result00h))
{
$Nombreh		=$row00h["Nombre"];
$Idh			=$row00h["Id"];
$Iddepoh		=$row00h["Iddepo"];
$Iddepdh		=$row00h["Iddepd"];
$Idpueoh		=$row00h["Idpueo"];
$Idpuedh		=$row00h["Idpued"];
}


$query00e="SELECT* FROM Departamentos where Id = '$Iddepoh'";
$result00e=mysql_query($query00e, $id);

While($row00e=mysql_fetch_array($result00e))
{
$Orige		=$row00e["Nombre"];
$Ide		=$row00e["Id"];
}

$query00f="SELECT* FROM Departamentos where Id = '$Iddepdh'";
$result00f=mysql_query($query00f, $id);

While($row00f=mysql_fetch_array($result00f))
{
$Destf		=$row00f["Nombre"];
$Idf		=$row00f["Id"];
}

$query00g="SELECT* FROM Puestos where Id = '$Idpueoh'";
$result00g=mysql_query($query00g, $id);

While($row00g=mysql_fetch_array($result00g))
{
$Origg		=$row00g["Nombre"];
$Idg		=$row00g["Id"];
}

$query00k="SELECT* FROM Puestos where Id = '$Idpuedh'";
$result00k=mysql_query($query00k, $id);

While($row00k=mysql_fetch_array($result00k))
{
$Origk		=$row00k["Nombre"];
$Idk		=$row00k["Id"];
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
.Estilo931 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
-->
</style>
</head>

<body>
<form name="form1" method="post" action="actplan2.php">
  <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td align="right"><a href="actplanesviaje.php" class="Estilo931">VOLVER</a>
        <hr /></td>
    </tr>
  </table>
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
            
              <option value="<?=$Ide?>" selected><?=$Orige?></option>
<?
$query008="SELECT* FROM Departamentos order by Nombre" ;
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
              <option value="<?=$Idg?>" selected><?=$Origg?></option>
              </select>
              <input name="Id" type="hidden" id="Id" value="<?=$Idplanchon?>"></td>
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
              <option value="<?=$Idf?>"><?=$Destf?></option>
              <?
$query0081="SELECT* FROM Departamentos order by Nombre" ;
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
              <option value="<?=$Idk?>"><?=$Origk?></option>
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
              <input name="Nombre" type="text" class="TextField21" id="Nombre" value="<?=$Nombreh?>" size="50">
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
      <td width="48%" height="40" valign="middle" class="Estilo93 Estilo96"><input name="Submit2" type="button" onClick=Validar(this.form) class="TextField21" value="Continuar operacion"></td>
    </tr>
  </table>
</form>
</body>
</html>