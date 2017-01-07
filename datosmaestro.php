<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

include("conexion.php");

$tarea	=	$_REQUEST["tarea"];

$query0081="SELECT* FROM Maestro" ;
$result0081=mysql_query($query0081, $id);

While($row0081=mysql_fetch_array($result0081))
{
$Id					=$row0081["Id"];
$Identificacion		=$row0081["Identificacion"];
$Tipoident			=$row0081["Tipoident"];
$Nombre				=$row0081["Nombre"];
$Sigla				=$row0081["Sigla"];
$Direccion			=$row0081["Direccion"];
$Telefono			=$row0081["Telefono"];
$Ciudad				=$row0081["Ciudad"];
$Codciudad			=$row0081["Codciudad"];
$Departamento		=$row0081["Departamento"];
$Representante		=$row0081["Representante"];
$Cedularep			=$row0081["Cedularep"];
$Ciudadcedula		=$row0081["Ciudadcedula"];
}

$query1		=	"SELECT* FROM Departamentos where Nombre = '$Departamento' " ;
$result1	=	mysql_query($query1, $id);

While($row1	=	mysql_fetch_array($result1))
{
$Nombredep			=$row1["Nombre"];
$Iddep				=$row1["Id"];
}

$query2		=	"SELECT* FROM Municipio where Nombre = '$Ciudad' " ;
$result2	=	mysql_query($query2, $id);

While($row2	=	mysql_fetch_array($result2))
{
$Nombreciu			=$row2["Nombre"];
$Idciu				=$row2["Id"];
}

$query3		=	"SELECT* FROM Municipio where Nombre = '$Ciudadcedula' " ;
$result3	=	mysql_query($query3, $id);

While($row3	=	mysql_fetch_array($result3))
{
$Nombreciud			= mb_strtoupper($row3["Nombre"],'utf-8');
$Coddep				=$row3["Codigo"];
$Iddepa				=$row3["Iddep"];
$Iddepo				=$row3["Id"];
}

$query4		=	"SELECT* FROM Departamentos where Id = '$Iddepa' " ;
$result4	=	mysql_query($query4, $id);

While($row4	=	mysql_fetch_array($result4))
{
$Nombredepi			= mb_strtoupper($row4["Nombre"],'utf-8');
$Cod				=$row4["Cod"];
$Idcdepi			=$row4["Id"];
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
	color: #FFF;
	font-weight: bold;
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


<script LANGUAGE="JavaScript">
function Validar(form)
{
 if (form.Identificacion.value == "")
  { alert("Por favor ingrese un Nit"); form.Identificacion.focus(); return; }
  
 if (form.Tipoident.value == "")
  { alert("Por favor seleccione el tipo de Indentificación"); form.Tipoident.focus(); return; }
  
 if (form.Nombre.value == "")
  { alert("Por favor ingrese un Nombre"); form.Nombre.focus(); return; }
  
 if (form.Direccion.value == "")
  { alert("Por favor ingrese una Dirección"); form.Direccion.focus(); return; }
  
 if (form.Telefono.value == "")
  { alert("Por favor ingrese un Telefono"); form.Telefono.focus(); return; }
  
 if (form.select1.value == "")
  { alert("Por favor ingrese un Departamento"); form.select1.focus(); return; }
  
 if (form.select2.value == "")
  { alert("Por favor ingrese una Ciudad"); form.select2.focus(); return; }
  
 if (form.Representante.value == "")
  { alert("Por favor ingrese el Nombre del Representante"); form.Representante.focus(); return; }
  
 if (form.Cedularep.value == "")
  { alert("Por favor ingrese la Cédula  del Representante"); form.Cedularep.focus(); return; }
  
  form.submit();
}
</script>

<script type="text/javascript" src="jquery-1.4.2.min.js"></script>

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
	background-color: #E3EFF9;
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
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="305" align="center" valign="middle" bgcolor="#DFE7F2">
        
<?
if(!empty($tarea))
{
?>
        <table width="250" border="0">
            <tr>
              <td height="24" align="center" bgcolor="#990000" class="listado">TAREA REALIZADA CON EXITO</td>
            </tr>
         </table>
<?
}
?>
          <form name="form1" method="post" action="datosmaestro2.php">
          
          <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="15%" height="25" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;NIT:
                <input name="Id" type="hidden" id="Id" value="<?=$Id?>">
              </span></td>
              <td width="35%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                <input name="Identificacion" type="text" class="TextField2" id="Identificacion" style="width:95%" onKeyPress="mis_datos()" value="<?=$Identificacion?>">
              </span></td>
              <td width="15%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">T. IDENTIFICACION:</span></td>
              <td width="35%" bgcolor="#F2F9FD"><select name="Tipoident" class="TextField2" id="Tipoident">
                <option value="<?=$Tipoident?>" selected><?=$Tipoident?></option>
                <option value="N" >NIT</option>
                <option value="C">CEDULA</option>
              </select></td>
            </tr>
          </table>
          <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
            </tr>
          </table>
          <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="15%" height="25" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;NOMBRE EMPRESA:</span></td>
              <td width="35%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                <input name="Nombre" type="text" class="TextField2" id="Nombre" style="width:95%" value="<?=$Nombre?>">
              </span></td>
              <td width="15%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">SIGLA  EMPRESA:</span></td>
              <td width="35%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                <input name="Sigla" type="text" class="TextField2" id="Sigla" style="width:95%" value="<?=$Sigla?>">
              </span></td>
            </tr>
          </table>
          <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
            </tr>
          </table>
          <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="15%" height="25" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;DIRECCION:</span></td>
              <td width="35%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                <input name="Direccion" type="text" class="TextField2" id="Direccion" style="width:95%" value="<?=$Direccion?>">
              </span></td>
              <td width="15%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">TELEFONO:</span></td>
              <td width="35%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                <input name="Telefono" type="text" class="TextField2" id="Telefono" style="width:95%" value="<?=$Telefono?>">
              </span></td>
            </tr>
          </table>
          <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
            </tr>
          </table>
          <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="15%" height="25" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;DEPARTAMENTO:</span></td>
              <td width="35%" bgcolor="#F2F9FD"><script language="JavaScript" type="text/JavaScript">
            $(document).ready(function(){
                $("#select1").change(function(event){
                    var id = $("#select1").find(':selected').val();
                    $("#select2").load('genera-ciuds.php?id='+id);
                });
            });
        </script>
                <select name="select1" class="TextField2" id="select1" style="width:95%">
                  <option value="<?=$Iddep?>" selected><?=$Nombredep?></option>
                  <?
$query008="SELECT* FROM Departamentos where Id <> 99999 order by Nombre" ;
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
                </select></td>
              <td width="15%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">CIUDAD:</span></td>
              <td width="35%" bgcolor="#F2F9FD"><select name="select2" class="TextField2" id="select2" style="width:95%">
              <option value="<?=$Idciu?>" selected><?=$Nombreciu?></option>
              </select></td>
            </tr>
          </table>
          <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
            </tr>
          </table>
          <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="15%" height="25" bgcolor="#DDF7F7"><span class="Estilo93 Estilo96">&nbsp;REPRESENTANTE:</span></td>
              <td width="35%" bgcolor="#DDF7F7"><span class="Estilo93 Estilo96">
                <input name="Representante" type="text" class="TextField2" id="Representante" style="width:95%" value="<?=$Representante?>">
              </span></td>
              <td width="15%" bgcolor="#DDF7F7"><span class="Estilo93 Estilo96">CEDULA:</span></td>
              <td width="35%" bgcolor="#DDF7F7"><span class="Estilo93 Estilo96">
                <input name="Cedularep" type="text" class="TextField2" id="Cedularep" style="width:95%" onKeyPress="mis_datos()" value="<?=$Cedularep?>">
              </span></td>
            </tr>
          </table>
          <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td height="5" bgcolor="#DDF7F7"><img src="Images/linea.jpg" width="100%" height="1"></td>
            </tr>
          </table>
          <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="15%" height="25" bgcolor="#DDF7F7"><span class="Estilo93 Estilo96">&nbsp;DEPARTAMENTO:</span></td>
              <td width="35%" bgcolor="#DDF7F7"><script language="JavaScript" type="text/JavaScript">
            $(document).ready(function(){
                $("#selecta").change(function(event){
                    var idew = $("#selecta").find(':selected').val();
                    $("#selectb").load('genera-ciuds2.php?id='+idew);
                });
            });
        </script>
                <select name="selecta" class="TextField2" id="selecta" style="width:95%">
                  <option value="<?=$Idcdepi?>" selected><?=$Nombredepi?></option>
                  <?
$query0081="SELECT* FROM Departamentos where Id <> 99999 order by Nombre" ;
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
                </select></td>
              <td width="15%" bgcolor="#DDF7F7"><span class="Estilo93 Estilo96">CIUDAD:</span></td>
              <td width="35%" bgcolor="#DDF7F7"><select name="selectb" class="TextField2" id="selectb" style="width:95%">
              <option value="<?=$Iddepo?>" selected><?=$Nombreciud?></option>
              
              </select></td>
            </tr>
          </table>
          <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td height="5" bgcolor="#DDF7F7"><img src="Images/linea.jpg" width="100%" height="1"></td>
            </tr>
          </table>
          <br>
          <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td height="5"><input name="button" type="button" class="TextField2" id="button" value="REALIZAR OPERACION" onClick=Validar(this.form)></td>
            </tr>
          </table>
        </form></td>
      </tr>
    </table></td>
  </tr>
</table>

</body>
</html>