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


$Idplann = $_SESSION['Iddelplan'];

$query008="SELECT* FROM Planes where Id = '$Idplann'" ;
$result008=mysql_query($query008, $id);

While($row008=mysql_fetch_array($result008))
{
$Iddepo8			=$row008["Iddepo"];
$Iddepd8			=$row008["Iddepd"];
$Idpueo8			=$row008["Idpueo"];
$Idpued8			=$row008["Idpued"];
$Nombre8			=$row008["Nombre"];
}


$query007="SELECT* FROM Departamentos where Id = '$Iddepo8'" ;
$result007=mysql_query($query007, $id);

While($row007=mysql_fetch_array($result007))
{
$Iddepo7			=$row007["Nombre"];
}

$query006="SELECT* FROM Departamentos where Id = '$Iddepd8'" ;
$result006=mysql_query($query006, $id);

While($row006=mysql_fetch_array($result006))
{
$Iddepo6			=$row006["Nombre"];
}

$query005="SELECT* FROM Puestos where Id = '$Idpued8'" ;
$result005=mysql_query($query005, $id);

While($row005=mysql_fetch_array($result005))
{
$Iddepo5			=$row005["Nombre"];
$Idpuesto5			=$row005["Id"];
}

$query004="SELECT* FROM Puestos where Id = '$Idpueo8'" ;
$result004=mysql_query($query004, $id);

While($row004=mysql_fetch_array($result004))
{
$Iddepo4			=$row004["Nombre"];
$Idpuesto4			=$row004["Id"];
}

/*
$querym="SELECT COUNT(*) as Total FROM Plan where Idplan = '$Idplann' and Idpuesto = 99999" ;
$resultm=mysql_query($querym, $id);

While($rowm=mysql_fetch_array($resultm))
{
$Totalm=$rowm["Total"];
}
echo $Totalm;
if($Totalm == 0)
{
$query008m="SELECT* FROM Plan where Idplan = '$Idplann' order by Pos Asc" ;
$result008m=mysql_query($query008m, $id);

While($row008m=mysql_fetch_array($result008m))
{
$Pos8			=$row008m["Pos"];
}
$Pos8			=$Pos8+1;

$sqlm="INSERT INTO  Plan (Idplan, Idpuesto, Pos)";
$sqlm.= "VALUES ('$Idplann', '99999', '$Pos8')";
mysql_query($sqlm);	
}

*/

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
	font-size: 10px;
	color: #666;
}
.Estilo93 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #333;
	font-weight: normal;
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
	width:200px;
	margin:auto;
	padding-left:0px;
	padding-right:0px;
	height:250px;
}
-->
</style>

<style type="text/css">
<!--
body {
	background-color: #FBFBFB;
}
.titulares {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 14px;
	color: #FFF;
}
.otrotil {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #333;
	font-weight: bold;
}
.Estilo931 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
-->
</style>


<script LANGUAGE="JavaScript">

function Validar(form)
{
	var answer = confirm("DESEAS FINALIZAR?")
	
	if (answer){
		form.submit();
	}
}

</script>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="right"><a href="javascript:history.go(0)" class="Estilo931">Refrescar</a>
      <hr /></td>
  </tr>
</table>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="50%" height="25" valign="middle" bgcolor="#7793FF" class="titulares">&nbsp;&nbsp;ORIGEN</td>
    <td width="50%" valign="middle" bgcolor="#8FB0D6" class="titulares">&nbsp;&nbsp;DESTINO</td>
  </tr>
</table>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="50%" height="20" valign="middle" bgcolor="#F5F5F5" class="titulares">&nbsp;&nbsp;<span class="Estilo93"><strong>DEPTO</strong></span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="Estilo93"><?=$Iddepo7?></span></td>
    <td valign="middle" bgcolor="#F8F8F8" class="titulares">&nbsp;&nbsp;<span class="Estilo93"><strong>DEPTO</strong></span> &nbsp;&nbsp;&nbsp;&nbsp;<span class="Estilo93"><?=$Iddepo6?></span></td>
  </tr>
</table>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="50%" height="20" valign="middle" bgcolor="#F5F5F5" class="titulares">&nbsp;&nbsp;<span class="Estilo93"><strong>PUESTO</strong></span>&nbsp;&nbsp;<span class="Estilo93"><?=$Iddepo4?></span></td>
    <td valign="middle" bgcolor="#F8F8F8" class="titulares">&nbsp;&nbsp;<span class="Estilo93"><strong>PUESTO</strong></span>  &nbsp;&nbsp;<span class="Estilo93"><?=$Iddepo5?></span></td>
  </tr>
</table>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="20" valign="middle" bgcolor="#EAEAEA" class="titulares">&nbsp;&nbsp;<span class="Estilo93"><strong>RUTA</strong></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="Estilo93"><?=$Nombre8?></span></td>
  </tr>
</table>
<br>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="31">
      
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="56%" height="25" class="otrotil"><form name="form2" method="post" action="cambioplanpuestos.php" style="margin:0">
        <span class="Estilo93 Estilo96">
          <input name="Submit" type="submit" class="TextField2" value="MODIFICAR PUESTOS Y ORDEN">
          </span>
        </form></td>
      <td width="25%" class="otrotil">TIEMPO</td>
      <td width="19%" class="otrotil">KMs</td>
      </tr>
  </table>
      <br> 
      <form name="form1" method="post" action="ingplanviaje5.php">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="56%" bgcolor="#F5F5F5" class="listado"><?=$Iddepo4?>
            <input name="Idplanini" type="hidden" id="Idplanini" value="<?=$Idpueo8?>" /></td>
            <td width="25%" bgcolor="#F5F5F5" class="otrotil"><label>
              <input name="Horas" type="text" class="TextField2" id="Horas" value="00" size="1" maxlength="2" readonly="readonly">
              :
              <input name="Minutos" type="text" class="TextField2" id="Minutos" value="00" size="1" maxlength="2" readonly="readonly">
            </label></td>
            <td width="19%" bgcolor="#F5F5F5" class="otrotil"><input name="KM" type="text" class="TextField2" id="KM" value="0" size="4" readonly="readonly"></td>
          </tr>
        </table>
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td class="listado"><hr size="1"></td>
          </tr>
        </table>
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="56%" bgcolor="#EBDEDE" class="listado">PUNTO DE CARGUE
              <input name="Idplanpto0" type="hidden" id="Idplanpto0" value="99998" /></td>
            <td width="25%" bgcolor="#EBDEDE" class="otrotil"><label>
              <input name="Horaspto2" type="text" class="TextField2" id="Horaspto2" value="00" size="1" maxlength="2" readonly="readonly" />
              :
              <input name="Minutospto2" type="text" class="TextField2" id="Minutospto2" value="20" size="1" maxlength="2" readonly="readonly" />
            </label></td>
            <td width="19%" bgcolor="#EBDEDE" class="otrotil"><input name="KMpto2" type="text" class="TextField2" id="KMpto2" value="0" size="4" maxlength="4" /></td>
          </tr>
        </table>
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td class="listado"><hr size="1" /></td>
          </tr>
        </table>
        <?
$Idplann = $_SESSION['Iddelplan'];

$query0018="SELECT* FROM Plan where Idplan = '$Idplann' order by Pos" ;
$result0018=mysql_query($query0018, $id);

While($row0018=mysql_fetch_array($result0018))
{
$Nombre18			=$row0018["Nombre"];
$Idpuesto18			=$row0018["Idpuesto"];
$Id18				=$row0018["Id"];
$Pos18				=$row0018["Pos"];


		$query0019="SELECT* FROM Puestos where Id = '$Idpuesto18' " ;
		$result0019=mysql_query($query0019, $id);

		While($row0019=mysql_fetch_array($result0019))
		{
		$Nombre19			=$row0019["Nombre"];
?>
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="56%" class="listado"><?=$Nombre19?>
            <input name="Idplan<?=$Id18?>" type="hidden" id="Idplan<?=$Id18?>" value="<?=$Id18?>"></td>
            <td width="25%" class="otrotil"><label>
              <input name="Horas<?=$Id18?>" type="text" class="TextField2" id="Horas<?=$Id18?>" value="00" size="1" maxlength="2">
              :
              <input name="Minutos<?=$Id18?>" type="text" class="TextField2" id="Minutos<?=$Id18?>" value="00" size="1" maxlength="2">
            </label></td>
            <td width="19%" class="otrotil"><input name="KM<?=$Id18?>" type="text" class="TextField2" id="KM<?=$Id18?>" value="0" size="4" maxlength="4"></td>
          </tr>
        </table>
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td class="listado"><hr size="1"></td>
          </tr>
        </table>
        <?
		}
		}
?>
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="56%" bgcolor="#F5F5F5" class="listado"><?=$Iddepo5?>
            <input name="Idplanend" type="hidden" id="Idplanend" value="<?=$Idpuesto5?>"></td>
            <td width="25%" bgcolor="#F5F5F5" class="otrotil"><label>
              <input name="Horasend" type="text" class="TextField2" id="Horasend" value="00" size="1" maxlength="2">
              :
              <input name="Minutosend" type="text" class="TextField2" id="Minutosend" value="00" size="1" maxlength="2">
            </label></td>
            <td width="19%" bgcolor="#F5F5F5" class="otrotil"><input name="KMend" type="text" class="TextField2" id="KMend" value="0" size="4" maxlength="4"></td>
          </tr>
        </table>
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td class="listado"><hr size="1"></td>
          </tr>
        </table>
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="56%" bgcolor="#EBDEDE" class="listado">PUNTO DE DESCARGUE
              <input name="Idplanpto" type="hidden" id="Idplanpto" value="99999" /></td>
            <td width="25%" bgcolor="#EBDEDE" class="otrotil"><label>
              <input name="Horaspto" type="text" class="TextField2" id="Horaspto" value="00" size="1" maxlength="2" />
              :
              <input name="Minutospto" type="text" class="TextField2" id="Minutospto" value="00" size="1" maxlength="2" />
            </label></td>
            <td width="19%" bgcolor="#EBDEDE" class="otrotil"><input name="KMpto" type="text" class="TextField2" id="KMpto" value="0" size="4" maxlength="4" /></td>
          </tr>
        </table>
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td class="listado"><hr size="1" /></td>
          </tr>
        </table>
<br>
        <span class="Estilo93 Estilo96">
        <input name="Submit2" type="button" class="TextField21" onClick="Validar(this.form)" value="GUARDAR Y FINALIZAR">
        </span>
      </form></td>
  </tr>
</table>
</body>
</html>