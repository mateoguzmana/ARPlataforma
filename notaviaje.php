<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}
include("conexion.php");




$Idplan 	= $_REQUEST["Idplan"];

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NOTAS DE VIAJE</title>
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
	background-color: #E0E9F1;
	margin-top: 0px;
	margin-left: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo93 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
}
.Estilo105 {
	color: #990000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
}
.Estilo97 {
	font-size: 13px;
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
-->
</style>
  
<script language="javascript"> 
function cambio()
{
	if (document.freporte.cbia.checked==false)
		{
			document.freporte.ctreportecliente.disabled=false;
		}
	else
		{
			document.freporte.ctreportecliente.disabled=true;
		}
	return
}
</script>
<script LANGUAGE="JavaScript">

function validar(formulario) 
{
  if (formulario.Mensaje.value == "") 
  {
    alert("Por favor ingrese un reporte");
    formulario.Mensaje.focus();
    return (false);
  }

  return (true); 
}
</script>

<SCRIPT LANGUAGE="JavaScript">
<!---

function redireccionar(form)
{

    for (i=0;i<document.form.elements.length;i++)
    {
		if(document.form.elements[i].type == "checkbox")
        {
			if (document.form.elements[i].checked==true && document.form.elements[i].disabled  == false)
			{
				var agree=confirm("Desea confirmar que esta nota ha sido leida?");
			
				if (agree) 
				document.form.action="./estado-nota.php" ; 
				else 
				return false ; 
			}
		}
	}
	document.form.submit();
}
-->
</SCRIPT>


<script type="text/javascript">
redireccionarr = function()
{
window.opener.parent.location.reload();
window.close();
};
</script>

<style type="text/css">
<!--
.listado11 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
	color: #000;
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
-->
</style>
</head>

<body>
<table width="480" border="0" align="center" cellpadding="0" cellspacing="0" >
  <tr onMouseover="this.bgColor='#BED9F3'"onMouseout="this.bgColor='#FFFFFF'" >
    <td height="440" align="center" valign="top" bgcolor="#C7D7E7">
       <?

		$queryt="SELECT* FROM Viajes  where Id  = '$Idplan'" ;
		$resultt=mysql_query($queryt, $id);
			
		While($rowt=mysql_fetch_array($resultt))
		{
		$Manifiesto 	=$rowt["Manifiesto"];
		}
		
		
?>   
    
    <table width="450" border="0" cellpadding="0" cellspacing="0" background="Images/fondo-final.jpg">
        <tr>
          <td width="296" height="35" bgcolor="#D6D6D6" class="Estilo93"><span class="Estilo97">&nbsp;&nbsp;OBSERVACIONES VIAJE EN TRANSITO</span></td>
          <td width="111" class="Estilo93"><a href="agregnotaviaje.php?Manifiesto=<?=$Manifiesto?>&Idviaje=<?=$Idplan?>"><span class="Estilo97">&nbsp;&nbsp;&nbsp;</span>INGRESAR NOTA</a></td>
          <td width="43" class="Estilo93"><a href="#" onClick="return redireccionarr(this)">SALIR</a></td>
        </tr>
      </table>

      <table width="450" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="364" align="center" valign="top" bgcolor="#E9E9E9">
            <br>
<form id="form" name="form" method="post" action="">
  <?
			$queryt="SELECT COUNT(*) as Totalt FROM Notasmanifiesto where Manifiesto  = '$Manifiesto'" ;
			$resultt=mysql_query($queryt, $id);
			
			While($rowt=mysql_fetch_array($resultt))
			{
			$Totalt=$rowt["Totalt"];
			}
			
$cuento	=	0;

		$queryty="SELECT* FROM Notasmanifiesto where Manifiesto  = '$Manifiesto' order by Fecha desc" ;
		$resultty=mysql_query($queryty, $id);
			
		While($rowty=mysql_fetch_array($resultty))
		{
		$Idx			=$rowty["Id"];
		$Fecha 			=$rowty["Fecha"];
		$Observaciones 	=strtoupper($rowty["Observaciones"]);
		$Usuario		=$rowty["Usuario"];
		$Prioridad		=$rowty["Prioridad"];
		$Estadox		=$rowty["Estado"];
		$Fechaesta		=$rowty["Fechaesta"];
		$Usuarioesta	=$rowty["Usuarioesta"];

$cuento ++;

if($Prioridad == 2 || $Prioridad == 0)		
{
	$Prioridad = "BAJA";
}
else
{
	$Prioridad = "ALTA";
}


if($Estadox == 1)
{
$activo		=	"checked";	
$mostrar	= 	"disabled";
$valora		= 	2;
$muestrar	= 	1;
}
else
{
$activo		=	"";	
$mostrar	= 	"";	
$valora		= 	1;
$muestrar	= 	0;
}
?>
<table width="430" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="143" height="20" bgcolor="#FFFFFF" class="listado11">&nbsp;<?=$Fecha?></td>
    <td width="190" bgcolor="#FFFFFF" class="listado">&nbsp;</td>
    <td width="97" align="right" bgcolor="#FFFFFF" class="listado">PRIORIDAD<span class="Estilo105"> <span style="font-size: 9px">
      <?=$Prioridad?>
    </span>&nbsp;&nbsp;</span></td>
  </tr>
</table>
<table width="430" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100%" height="1"><span class="listado11"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
    </tr>
</table>
<table width="430" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="392" height="10" style="font-family: Arial, Helvetica, sans-serif; font-size: 10px; color: #333; text-align: justify;"><span class="Estilo105">
      <?=strtoupper($Usuario)?>:</span>
      <br>
      <?=$Observaciones?>
      <br>      <br></td>
    <td width="10" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; color: #333; text-align: justify;">&nbsp;</td>
    <td width="31" align="center" valign="middle" bgcolor="#F4F4F4"><input name="Id<?=$cuento?>" type="hidden" id="Id<?=$cuento?>" value="<?=$Idx?>">      
    <input name="opciones<?=$cuento?>" <?=$mostrar?> type="checkbox" id="opciones<?=$cuento?>" value="<?=$valora?>" onClick="return redireccionar(this)" <?=$activo?> ></td>
  </tr>
</table>
<?
if($muestrar == 1)
{
?>
<table width="430" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100%" height="15" valign="top" bgcolor="#F4F4F4" class="listado1"><span class="listado11"><img src="Images/linea.jpg" width="100%" height="1">Revisado por:</span>
<?=$Usuarioesta?> | <?=$Fechaesta?></td>
  </tr>
</table>
<?
}
?>
<table width="430" border="0" cellpadding="0" cellspacing="0">
  <tr>
                <td width="100%" height="15" valign="top"><span class="listado11"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
              </tr>
            </table>
<?
		}
?>
<span class="Estilo93">
<input name="Total" type="hidden" id="Total" value="<?=$Totalt?>">
</span>
<span class="Estilo93">
<input name="Idviaje" type="hidden" id="Idviaje" value="<?=$Idplan?>">
</span>
</form>
</td>
        </tr>
    </table></td>
  </tr>
</table>
</body>
</html>