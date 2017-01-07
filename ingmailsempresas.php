<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

include("conexion.php");

$dale	=	$_GET["dale"];

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
.TextFieldFU {background-color: #FF0000;
color: #FFFFFF;
font-size: 9pt;
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
  { alert("Por favor seleccione una Empresa"); form.Nombre.focus(); return; }
  
 if (form.Cargo.value == "")
  { alert("Por favor seleccione un Cargo"); form.Cargo.focus(); return; }

  if (form.Email.value == "")
  { alert("Por favor ingrese un E-mail"); form.Email.focus(); return; }

  if (form.Email.value.indexOf('@', 0) == -1 ||
      form.Email.value.indexOf('.', 0) == -1)
  { alert("Dirección de e-mail inválida"); form.Email.focus(); return; }  
  
  form.submit();
}
</script>
<script language="javascript">
function mis_datos(){
var key=window.event.keyCode;
if (key < 48 || key > 57){
window.event.keyCode=0;
}}
</script>

<style type="text/css">
<!--
body {
	margin-top: 0px;
}
.TextField {background-color: #DADADA;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.listado2 {font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #FFF;
}
-->
</style></head>

<body>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="61" align="center" valign="top"><form action="ingmailsempresas2.php" method="post" enctype="multipart/form-data" name="form1" style="margin:0">
      <?
if($dale == 'si')
{
?>
      <BR>
      <span class="TextFieldFU">&nbsp;&nbsp;LA INFORMACION SE INGRESO CON EXITO&nbsp;&nbsp;</span><BR>
      <BR>
      <?
}
elseif($dale == 'ok')
{
?>
      <BR>
      <BR>
      <span class="TextFieldFU">&nbsp;EL E-MAIL INGRESADO YA EXISTE&nbsp;&nbsp;</span> <BR>
      <BR>
      <?

}?>
      <br>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="33" valign="top" class="Estilo93 Estilo96"><div align="left">EMPRESA</div>
            <input name="Nombre" type="text" class="TextField2" id="Nombre" size="45">
            <label> </label>
            <a href="lista-planes.php" onClick="window.open('lista-empresas.php','','menubar=no,scrollbars=yes, width=500, height=500,');return false"> <img src="Images/buscar.gif" width="16" height="16" border="0"></a>
            <label>
              <input name="Nit" type="hidden" id="Nit">
            </label></td>
        </tr>
      </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="33" valign="top" class="Estilo93 Estilo96"><div align="left">CARGO</div>
            <span class="listado2">
            <select name="Cargo" class="TextField" id="Cargo">
              <option value=""></option>
              <?
$queryxxx1		=	"SELECT* FROM  Cargos  order by Nombre" ;
$resultxxx1		=	mysql_query($queryxxx1, $id);
			
While($rowxxx1	=	mysql_fetch_array($resultxxx1))
{
$Nombrexxx1	=	$rowxxx1["Nombre"];
$Idxxx1		=	$rowxxx1["Id"];

?>
              <option value="<?=$Idxxx1?>">
                <?=$Nombrexxx1?>
                </option>
              <?

}

?>
            </select>
            </span></td>
        </tr>
      </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="33" valign="top" class="Estilo93 Estilo96"><div align="left">NOMBRE</div>
            <input name="Nombrado" type="text" class="TextField2" id="Nombrado" size="45"></td>
        </tr>
      </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="33" valign="top" class="Estilo93 Estilo96"><div align="left">TELEFONO</div>
            <input name="Tel" type="text" class="TextField2" id="Tel" size="45"></td>
        </tr>
      </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="41" valign="top" class="Estilo93 Estilo96"><div align="left">E-MAIL</div>
            <input name="Email" type="text" class="TextField2" id="Email" size="45"></td>
        </tr>
      </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="33" valign="top" class="Estilo93 Estilo96"><div align="left">
            <table width="182" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="22" class="TextField2">NOTIFICACIONES</td>
                </tr>
            </table>
            <table width="182" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="162" class="listado">Asignación Ruta</td>
                <td width="20"><input name="Nota1" type="checkbox" id="Nota1" value="1"></td>
              </tr>
            </table>
            <table width="182" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="162" class="listado">Reportes de Viaje</td>
                <td width="20"><input name="Nota2" type="checkbox" id="Nota2" value="1"></td>
              </tr>
            </table>
            <table width="182" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="162" class="listado">Finalización de Viaje</td>
                <td width="20"><input name="Nota3" type="checkbox" id="Nota3" value="1"></td>
              </tr>
            </table>
            <table width="182" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="162" class="listado">Mensaje Masivo</td>
                <td width="20"><input name="Nota4" type="checkbox" id="Nota4" value="1"></td>
              </tr>
            </table>
          </div></td>
        </tr>
      </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="43" valign="middle" class="Estilo93 Estilo96"><input name="Submit2" type="button" onClick=Validar(this.form) class="TextField21" value="Ingresar informacion"></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
</body>
</html>