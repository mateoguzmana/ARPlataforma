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
  { alert("Por favor seleccione una empresa"); form.Nombre.focus(); return; }
 if (form.Iniciales1.value == "")
  { alert("Por favor ingrese las iniciales"); form.Iniciales1.focus(); return; }
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
          <td height="30" align="right"><a href="actiniciales.php" class="Estilo93">VOLVER</a>            <hr></td>
        </tr>
    </table>
<?$query008="SELECT * FROM Empresas where Id = '$Idusuario'" ;
$result008=mysql_query($query008, $id);

While($row008=mysql_fetch_array($result008))
{
$NombreEmpresa    =$row008["Nombre"];
$Nit              =$row008["Nit"];
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
      <form action="actiniciales3.php" method="post" enctype="multipart/form-data" name="form1">
        <table width="93%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FBFBFB">
          <tr>
            <td height="99" valign="top"><br>
              <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="50%" height="33" valign="top" class="Estilo93 Estilo96"><div align="left">EMPRESA</div>
                    <input name="Nombre" type="text" class="TextField2" id="Nombre" style="width:85%" value="<?=$NombreEmpresa?>">
                    <input name="Idempresa" type="hidden" class="TextField2" id="Idempresa" value="<?=$Idusuario?>" style="width:85%">
                    <label> </label>
                    <a href="lista-planes.php" onClick="window.open('lista-empresas.php','','menubar=no,scrollbars=yes, width=500, height=500,');return false"> <img src="Images/buscar.gif" width="16" height="16" border="0"></a>
                    <label>
                      <input name="Nit" type="hidden" id="Nit" value="<?=$Nit?>">
                  </label></td>
                  <td width="50%" valign="top" class="Estilo93 Estilo96"><div align="left">INICIALES</div>
                    
                      <?
                      $query008="SELECT * FROM Iniciales where Empresa = '$Idusuario'" ;
                      $result008=mysql_query($query008, $id);
                      
                      while($row008=mysql_fetch_array($result008))
                      {
                      $Nombre8    =$row008["Nombre"];
                      $Empresa    =$row008["Empresa"];
                      $Cod8       =$row008["Id"];
                      $cont++;
                      ?>
                      <label><input name="Iniciales<?=$cont?>" type="text" class="TextField2" id="Iniciales" value="<?=$Nombre8?>" size="45" onChange="javascript:this.value=this.value.toUpperCase();" style="width:95%"></label>
                      <?
                      }
                      ?>
                      <a href="#" id="mascampos"><img style="cursor:pointer;width:11px;height:11px;" title="Agregar campo" src="Images/add.png" width="15" height="15" border="0"></a>
                    </td>
                  <td><input name="Id" type="hidden" id="Id" value="<?=$Idusuario?>"></td>
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
<script type="text/javascript" src="jquery-1.4.2.min.js"></script>
<script type="text/javascript">
jQuery.fn.generaNuevosCampos = function(etiqueta, nombreCampo, indice){
   $(this).each(function(){
      elem = $(this);
      elem.data("etiqueta",etiqueta);
      elem.data("nombreCampo",nombreCampo);
      elem.data("indice",indice);
      
      elem.click(function(e){
         e.preventDefault();
         elem = $(this);
         etiqueta = elem.data("etiqueta");
         nombreCampo = elem.data("nombreCampo");
         indice = elem.data("indice");
         texto_insertar ='<input type="text" class="TextField2" size="45" onChange="javascript:this.value=this.value.toUpperCase();" style="width:95%" name="' + nombreCampo + indice + '" />';
         indice ++;
         elem.data("indice",indice);
         nuevo_campo = $(texto_insertar);
         elem.before(nuevo_campo);
      });
   });
   return this;
}

$(document).ready(function(){
   $("#mascampos").generaNuevosCampos("Iniciales", "Iniciales", (<?=$cont?>+1));
});
</script>
</body>
</html>