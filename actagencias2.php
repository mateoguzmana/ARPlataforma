<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

include("conexion.php");

$Idusuario	=	$_GET["Id"];

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
body {
	background-color: #EAEAEA;
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
<script LANGUAGE="JavaScript">
function Validar(form)
{
 if (form.Nombre.value == "")
  { alert("Por favor ingrese un Nombre"); form.Nombre.focus(); return; }
  if (form.Cod.value == "")
  { alert("Por favor ingrese un Codigo"); form.Cod.focus(); return; } 
 
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
.TextFieldFU {background-color: #FF0000;
color: #FFFFFF;
font-size: 9pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
-->
</style>
</head>

<body>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="100" align="center" valign="top"><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="30" align="right"><a href="actagencias.php" class="Estilo93">VOLVER</a>            <hr></td>
        </tr>
    </table>
<?


$query008="SELECT* FROM Agencias where Id = '$Idusuario'" ;
$result008=mysql_query($query008, $id);

While($row008=mysql_fetch_array($result008))
{
$Nombre8		=$row008["Nombre"];
$Cod8			=$row008["Cod"];
}
?>
<span style="margin:0">
      <?
if(!empty($dale))
{
?>
      <BR>
      <span class="TextFieldFU">&nbsp;&nbsp;LA AGENCIA  SE ACTUALIZO CON EXITO&nbsp;&nbsp;</span> <BR>
      <BR>
      <?
}
?>
      </span>
      <form action="actagencias3.php" method="post" enctype="multipart/form-data" name="form1">
        <table width="93%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FBFBFB">
          <tr>
            <td height="99" valign="top"><br>
              <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="33" valign="top" class="Estilo93 Estilo96"><div align="left">Nombre</div>
                    <input name="Nombre" type="text" class="TextField2" id="Nombre" value="<?=$Nombre8?>" size="45" onChange="javascript:this.value=this.value.toUpperCase();">
                     <input name="Cod" type="text" class="TextField2" id="Cod" value="<?=$Cod8?>" size="3">
                  <input name="Id" type="hidden" id="Id" value="<?=$Idusuario?>"></td>
                </tr>
              </table>
              <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="57" valign="middle" class="Estilo93 Estilo96"><input name="Submit2" type="button" onClick=Validar(this.form) class="TextField21" value="Ingresar informacion"></td>
                </tr>
              </table>
              <br></td>
            </tr>
        </table>
      </form>
      
</td>
  </tr>
</table>
</body>
</html>