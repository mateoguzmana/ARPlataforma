<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

include("conexion.php");

$Id 	=	$_GET["Id"];
$Iddep	=	$_GET["Iddep"];
$Idciu	=	$_GET["Idciu"];

$query008="SELECT* FROM Puestos where Id = '$Id'" ;
$result008=mysql_query($query008, $id);

While($row008=mysql_fetch_array($result008))
{
$Nombre8		=$row008["Nombre"];
$Iddep8			=$row008["Iddep"];
$Idmun8			=$row008["Idmun"];
$Idcab8			=$row008["Idcab"];
$Altura8		=$row008["Altura"];
$Tipo8			=$row008["Tipo"];
$Ubicacion8		=$row008["Ubicacion"];
}

if (empty($Iddep))
{
$Iddep = $Iddep8;
}
else
{
$Iddep = $Iddep;
}

if (empty($Idciu))
{
$Idciu = $Idmun8;
}
else
{
$Idciu = $Idciu;
}
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
<script language="JavaScript">
<!--
function confirmSubmit() 
{ 
var agree=confirm("Realmente desea eliminar este registro? "); 
if (agree) 
return true ; 
else 
return false ; 
}

//-->
</script>

  <script type="text/javascript" src="prototype.js"></script>
  <script type="text/javascript" src="scal.js"></script>
  <link href="scal.css" media="screen" rel="stylesheet" type="text/css" />
<script LANGUAGE="JavaScript">
function Validar(form)
{
  if (form.Nombre.value == "")
  { alert("Por favor ingrese un Departamento"); form.Nombre.focus(); return; }
 
  form.submit();
}
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
<style type="text/css">
<!--
body {
	background-color: #E6F0FF;
	margin-top: 0px;
	margin-left: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo105 {color: #990000; font-family: Arial, Helvetica, sans-serif; font-size: 10px; font-weight: bold; }
.Estilo97 {font-size: 12px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
-->
</style></head>

<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="50%" height="25" valign="middle" bgcolor="#DBDBDB" class="Estilo97"><span class="Estilo93">&nbsp;&nbsp;</span>ACTUALIZAR / ELIMINAR </td>
    <td width="63%" valign="middle" bgcolor="#DBDBDB" class="Estilo97"><form name="form" id="form" style="margin:0">
      <select name="jumpMenu" class="TextField2" id="jumpMenu" onChange="MM_jumpMenu('self',this,0)">
        <option value="#" selected>Seleccione una Opción</option>
        <option value="actdep.php">Departamentos</option>
        <option value="actmun.php">Municipios</option>
        <option value="actcab.php">Cabeceras</option>
        <option value="actpuestos.php">Puestos de control</option>
      </select>
    </form></td>
  </tr>
</table>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="10" bgcolor="#FFFFFF" class="Estilo93">&nbsp;</td>
  </tr>
</table>
<table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="right"><a href="actpuestos.php" class="Estilo93">VOLVER</a></td>
  </tr>
</table>
<br>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="61" align="right" valign="top"><form name="form1" method="post" action="actpuesto3.php">
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="48%" height="33" valign="top" class="Estilo93 Estilo96"><div align="left">Departamento</div>
            <select name="jumpMenu2" class="TextField2" id="jumpMenu2" onChange="MM_jumpMenu('self',this,0)" style="width:200">
              <?
if (empty($Iddep))
{
	echo '<option value="" selected>Seleccione un departamento</option>';
}
else
{

$query009="SELECT* FROM Departamentos where Id = '$Iddep'" ;
$result009=mysql_query($query009, $id);

While($row009=mysql_fetch_array($result009))
{
$Nombre9		=$row009["Nombre"];
$Id9			=$row009["Id"];
}

?>
              <option value="actpuesto2.php?Iddep=<?=$Id9?>&Id=<?=$Id?>" selected>
                <?=$Nombre9?>
                </option>
              <?
}

$query0081="SELECT* FROM Departamentos order by Nombre" ;
$result0081=mysql_query($query0081, $id);

While($row0081=mysql_fetch_array($result0081))
{
$Nombre81		=$row0081["Nombre"];
$Id81			=$row0081["Id"];
?>
              <option value="actpuesto2.php?Iddep=<?=$Id81?>&Id=<?=$Id?>">
                <?=$Nombre81?>
                </option>
              <?
}

?>
            </select>
            <input name="Iddep" type="hidden" id="Iddep" value="<?=$Iddep?>">
            <input name="Idciu" type="hidden" id="Idciu" value="<?=$Idciu?>">
            <input name="Id" type="hidden" id="Id" value="<?=$Id?>"></td>
        </tr>
      </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="48%" height="33" valign="top" class="Estilo93 Estilo96"><div align="left">Municipio</div>
            <select name="jumpMenu2" class="TextField2" id="jumpMenu3" onChange="MM_jumpMenu('self',this,0)" style="width:200">
              <?
if (!empty($Idciu))
{
$query007="SELECT* FROM Municipio where Id = '$Idciu'" ;
$result007=mysql_query($query007, $id);

	While($row007=mysql_fetch_array($result007))
	{
	$Nombre7		=$row007["Nombre"];
	$Id7			=$row007["Id"];
	}
?>
              <option value="actpuesto2.php?Iddep=<?=$Iddep?>&Idciu=<?=$Id7?>&Id=<?=$Id?>" selected>
                <?=$Nombre7?>
                </option>
              <?
$query003="SELECT* FROM Municipio where Iddep = '$Iddep' order by Nombre" ;
$result003=mysql_query($query003, $id);

	While($row003=mysql_fetch_array($result003))
	{
	$Nombre3		=$row003["Nombre"];
	$Id3			=$row003["Id"];
?>
              <option value="actpuesto2.php?Iddep=<?=$Iddep?>&Idciu=<?=$Id3?>&Id=<?=$Id?>">
                <?=$Nombre3?>
                </option>
              <?
	}
}
else
{
	echo '<option value="" selected>Seleccione un Municipio</option>';
	
$query005="SELECT* FROM Municipio where Iddep = '$Iddep' order by Nombre" ;
$result005=mysql_query($query005, $id);

	While($row005=mysql_fetch_array($result005))
	{
	$Nombre5		=$row005["Nombre"];
	$Id5			=$row005["Id"];
?>
              <option value="actpuesto2.php?Iddep=<?=$Iddep?>&Idciu=<?=$Id5?>&Id=<?=$Id?>">
                <?=$Nombre5?>
                </option>
              <?	
	}
}
?>
            </select></td>
        </tr>
      </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="48%" height="33" valign="top" class="Estilo93 Estilo96"><div align="left">Cabecera Municipal</div>
            <select name="Idcab" class="TextField2" id="Idcab" style="width:200">
<?
$query0041="SELECT* FROM Cabeceras where Id = '$Idcab8'" ;
$result0041=mysql_query($query0041, $id);

While($row0041=mysql_fetch_array($result0041))
{
$Nombre41		=$row0041["Nombre"];
$Id41			=$row0041["Id"];


?>
              <option value="<?=$Id41?>" selected>
                <?=$Nombre41?>
                </option>
              <?
}
?>




<?
$query004="SELECT* FROM Cabeceras where Iddep = '$Iddep' and Idciu = '$Idciu' order by Nombre" ;
$result004=mysql_query($query004, $id);

While($row004=mysql_fetch_array($result004))
{
$Nombre4		=$row004["Nombre"];
$Id4			=$row004["Id"];


?>
              <option value="<?=$Id4?>">
                <?=$Nombre4?>
                </option>
              <?
}
?>
            </select></td>
          </tr>
      </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="48%" height="33" valign="top" class="Estilo93 Estilo96"><div align="left">Nombre</div>
            <input name="Nombre" type="text" class="TextField2" id="Nombre" value="<?=$Nombre8?>" size="45"></td>
        </tr>
      </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="48%" height="33" valign="top" class="Estilo93 Estilo96"><div align="left">Tipo </div>
            <select name="Tipo" class="TextField2" id="Tipo">
             <option value="<?=$Tipo8?>" selected><?=$Tipo8?></option>
              <option value="Telefonico">Telefonico</option>
              <option value="Electronico">Electronico</option>
              <option value="Logired">Logired</option>
               <option value="Fisico">Fisico</option>
            </select></td>
        </tr>
      </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="48%" height="33" valign="top" class="Estilo93 Estilo96"><div align="left">Altura</div>
            <input name="Altura" type="text" class="TextField2" id="Altura" value="<?=$Altura8?>" size="15">
            mts</td>
        </tr>
      </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="48%" height="33" valign="top" class="Estilo93 Estilo96"><div align="left">Ubicaci&oacute;n</div>
            <textarea name="Ubicacion" cols="46" rows="8" class="TextField2" id="Ubicacion"><?=$Ubicacion8?>
            </textarea></td>
        </tr>
      </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="48%" height="40" valign="middle" class="Estilo93 Estilo96"><input name="Submit" type="button" onClick=Validar(this.form) class="TextField21" value="Ingresar informacion"></td>
        </tr>
      </table>
    </form>
      </td>
  </tr>
</table>
</body>
</html>