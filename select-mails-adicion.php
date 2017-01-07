<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}
include("conexion.php");


date_default_timezone_set('America/Bogota');


$Idviaje		= 		$_REQUEST["Id"];
$fechaahora		= 		date("Y-m-d H:i:s");

$query008ev="SELECT* FROM Viajes where  Id = '$Idviaje'" ;
$result008ev=mysql_query($query008ev, $id);
									
While($row008ev=mysql_fetch_array($result008ev))
{
$Manifiestoev		=$row008ev["Manifiesto"];
}

$querypr3			=	"SELECT COUNT(*) as Totalr3 FROM Remisiones where Manifiesto = '$Manifiestoev'" ;
$resultpr3			=	mysql_query($querypr3, $id);
													
While($rowpr3		=	mysql_fetch_array($resultpr3))
{
$Totalpr3			=	$rowpr3["Totalr3"];
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
	text-align: right;
}
.listado {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 8px;
	color: #666;
}
body {
	background-color: #E9E9E9;
	margin-top: 0px;
	margin-left: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	color: #E9E9E9;
}
.Estilo93 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #000;
}
.Estilo105 {
	color: #990000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
}
.Estilo97 {
	font-size: 12px;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
	color: #036;
}
.TextField2 {background-color: #DADADA;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.TextField3 {background-color: #D7D7D7;
color: #000;
font-size: 8pt;
font-family: arial;
border : 1px solid #000;
}

.listado1 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #666;
}
.listado2 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #FFF;
}
.textos1 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #009;
	text-align: right;
}
.tituloslista {	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
}
.listado11 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
	color: #333;
}
a:link {
	color: #333;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #333;
}
a:hover {
	text-decoration: underline;
	color: #009;
}
a:active {
	text-decoration: none;
	color: #333;
}
.Estilo931 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #FFF;
}
.TextField {background-color: #DADADA;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.listado21 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #FFF;
}
#form table tr .listado {
	color: #000;
}
.Estilo932 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.Estilo9311 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.Estilo96 {font-size: 11px}
.TextField21 {background-color: #BCBCBC;
color: #333333;
font-size: 8pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.listado4 {font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #FFF;
}
.TextField211 {background-color: #DADADA;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
-->
</style>
  
<script type="text/javascript">
function validar()
{
    
    cont = 0
    for (i=0;i<document.form2.elements.length;i++)
    {
        if(document.form2.elements[i].type == "checkbox")
        {
          if(document.form2.elements[i].checked == 1)
          {
            cont = cont + 1;
          }
        }
    }    
    
    if (cont>0)
	{

            document.form2.submit();

    }
    else
	{
        alert("Debe seleccionar una Empresa");
        return false;
    }
        
}
</script>

 
 
<script>
var seleccionado=new Array()

function cambia(fila)
{
if(seleccionado[fila]!=true)
	{
	document.getElementById("fila"+fila).style.background='#CCCCCC';
	document.getElementById("fila"+fila).style.color='#E9E9E9';
	seleccionado[fila]=true;
	}
else
	{
	document.getElementById("fila"+fila).style.background='#E9E9E9';
	document.getElementById("fila"+fila).style.color='#E9E9E9';
	seleccionado[fila]=false;
	}	
}
</script>


<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
function checkAll(field)
{
for (i = 0; i < field.length; i++)
	field[i].checked = true ;
}

function uncheckAll(field)
{
for (i = 0; i < field.length; i++)
	field[i].checked = false ;
}
//  End -->
</script>

</head>

<BODY>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="0" background="Images/bg-seleccion.jpg">
  <tr>
    <td height="28" align="left" class="Estilo97">&nbsp;ENVIO DE REPORTE    </td>
  </tr>
</table>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="1" class="listado11"><img src="Images/linea.jpg" width="100%" height="1"></td>
  </tr>
</table>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="31" class="Estilo93">Seleccione las empresas a las que desea reportar</td>
  </tr>
</table>
<form name="form2" id="form2" method="post" action="select-mails-adicion2.php" style="margin:0">
  <table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="1" class="listado11"><img src="Images/linea.jpg" width="100%" height="1"></td>
    </tr>
  </table>
  <?
if($Totalpr3==1)
{
$cuento	=	1;

$query008evre="SELECT* FROM Empresasremesas where  Manifiesto = '$Manifiestoev' and Remesa NOT LIKE '%-%'" ;
$result008evre=mysql_query($query008evre, $id);
									
While($row008evre=mysql_fetch_array($result008evre))
{
$Empresarem		=$row008evre["Empresa"];
$Idn			=$row008evre["Id"];


		$queryprtt			=	"SELECT COUNT(*) as Totalrtt FROM Empresasmails where Nit = '$Empresarem' and Nota2 = 1" ;
		$resultprtt			=	mysql_query($queryprtt, $id);
															
		While($rowprtt		=	mysql_fetch_array($resultprtt))
		{
		$Totalprtt			=	$rowprtt["Totalrtt"];
		$Totalprtt2			=	$Totalprtt + $Totalprtt2;
		}


	$query008evrem="SELECT* FROM Empresas where  Nit = '$Empresarem'" ;
	$result008evrem=mysql_query($query008evrem, $id);
										
	While($row008evrem=mysql_fetch_array($result008evrem))
	{
	$Nombrerem		=$row008evrem["Nombre"];
	}
}
?>
  <table width="300" border="0" align="center" cellpadding="0" cellspacing="0" id="fila<?=$Idn?>">
    <tr>
    <td width="242" class="listado11"><?=$Nombrerem?>
      <span class="Estilo105"><br>
      <?
    if($Totalprtt == 0)
	{
	echo "Esta empresa no tiene E-mail programado";	
	$lectura = "disabled";
	}
	else
	{
	$lectura = "";	
	}
	?>
      </span></td>
    <td width="38"><input name="Reporte<?=$cuento?>" type="checkbox" id="Reporte<?=$cuento?>" onClick="cambia(<?=$Idn?>)" value="1" checked <?=$lectura?>>
      <span class="listado4">
        <input name="Nit<?=$cuento?>" type="hidden" id="Nit<?=$cuento?>" value="<?=$Empresarem?>">
        </span></td>
    </tr>
  </table>
  <table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="1" class="listado11"><hr size="1"></td>
    </tr>
  </table>
<?	
}
else
{
?>	
<table width="300" border="0" align="center" cellpadding="0" cellspacing="0" id="fila<?=$Idn?>2">
  <tr>
    <td width="293" height="28" align="right" class="listado11"><input name="CheckAll" type="button" class="TextField" onClick="checkAll(document.form2.elements)" value="Todos">
      <input name="UnCheckAll" type="button" class="TextField"onClick="uncheckAll(document.form2.elements)" value="Ninguno"></td>
    <td width="10" align="right" class="listado11">&nbsp;</td>
    </tr>
  </table>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="1" class="listado11"><img src="Images/linea.jpg" width="100%" height="1"></td>
  </tr>
</table>
<?
$cuento	=	0;

$query008evre="SELECT* FROM Empresasremesas where  Manifiesto = '$Manifiestoev' and Remesa NOT LIKE '%-%'" ;
$result008evre=mysql_query($query008evre, $id);
									
While($row008evre=mysql_fetch_array($result008evre))
{
$Empresarem		=$row008evre["Empresa"];
$Idn			=$row008evre["Id"];

		$queryprtt			=	"SELECT COUNT(*) as Totalrtt FROM Empresasmails where Nit = '$Empresarem' and Nota2 = 1" ;
		$resultprtt			=	mysql_query($queryprtt, $id);
															
		While($rowprtt		=	mysql_fetch_array($resultprtt))
		{
		$Totalprtt			=	$rowprtt["Totalrtt"];
		$Totalprtt2			=	$Totalprtt + $Totalprtt2;
		}
		
	$query008evrem="SELECT* FROM Empresas where  Nit = '$Empresarem'" ;
	$result008evrem=mysql_query($query008evrem, $id);
										
	While($row008evrem=mysql_fetch_array($result008evrem))
	{
	$Nombrerem		=$row008evrem["Nombre"];
	}

$cuento ++;

?>
  <table width="300" border="0" align="center" cellpadding="0" cellspacing="0" id="fila<?=$Idn?>">
    <tr>
      <td width="242" class="listado11"><?=$Nombrerem?>      <span class="Estilo105"><br>
      <?
    if($Totalprtt == 0)
	{
	echo "Esta empresa no tiene E-mail programado";	
	$lectura = "disabled";
	}
	else
	{
	$lectura = "";	
	}
	?>
      </span></td>
      <td width="38"><input type="checkbox" name="Reporte<?=$cuento?>" id="Reporte<?=$cuento?>" value="1" onClick="cambia(<?=$Idn?>)" <?=$lectura?>>
        <span class="listado4">
          <input name="Nit<?=$cuento?>" type="hidden" id="Nit<?=$cuento?>" value="<?=$Empresarem?>">
        </span></td>
    </tr>
  </table>
  <table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="1" class="listado11"><hr size="1"></td>
    </tr>
  </table>
  <?
$Totalprtt2 = $Totalprtt2;  
}
}
?>
  <input name="Totalreg" type="hidden" id="Totalreg" value="<?=$Totalpr3?>">
  <span class="listado11">
    <input name="Idviaje" type="hidden" id="Idviaje" value="<?=$Idviaje?>">
  </span>
  <table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="242" height="48" class="listado11"><span class="Estilo97">
<?
if($Totalprtt2 == 0)
{
?>
<input name="no" type="button" class="TextField3" id="no" value="CONTINUAR" onClick="location.href='select-mails-adicion2-no.php?Id=<?=$Idviaje?>'; alert('No se enviara ningun reporte'); return false">
<?
}
else
{
?> 
        <input name="button2" type="button" class="TextField21" id="button2" value="CONTINUAR" onclick='validar()'>
<?
}
?>

<?
if(!empty($_SESSION['Nitmail']))
{
?>
<script type="text/javascript">
redireccionar = function()
{
parent.tb_remove();
}
</script>
<?
}
else
{
?>
<script type="text/javascript">
redireccionar = function()
{
parent.tb_remove();

parent.location = 'notaextra-empty-adicion.php?Idplan=<?=$Idviaje?>';

}
</script>
<?
}
?>

        <input name="button" type="button" class="TextField21" id="button" onClick='redireccionar()' value="SALIR">
        </span></td>
      <td width="38">&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>