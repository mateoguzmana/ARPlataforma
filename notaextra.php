<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}
include("conexion.php");


date_default_timezone_set('America/Bogota');


$Idviaje 	= $_REQUEST["Idplan"];

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

if(!empty($_SESSION['cbia']))
{
$activar	=	"checked";	
}

if(!empty($_SESSION['enviru']))
{
$activar2	=	"checked";	
}

$horaactual = date("H:i:s");
$hor = substr($horaactual, -8, 2);
$min = substr($horaactual, -5, 2);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>REPORTE EXTRA</title>
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
	font-size: 11px;
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
	font-size: 11px;
	font-weight: bold;
}
.Estilo97 {
	font-size: 14px;
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
.hideable { position: relative; visibility: visible; }
-->
</style>
  
<script language="javascript"> 
function cambio()
{
	if (document.freporte.cbia.checked==true)
		{
			document.freporte.ctreportecliente.disabled=true;
			freporte.ctreportecliente.value = freporte.ctreporte.value;
		}
	else
		{
			document.freporte.ctreportecliente.disabled=false;
			freporte.ctreportecliente.value = "";
		}
	return
}
</script>
<script LANGUAGE="JavaScript">

function validar(formulario) 
{

  if (formulario.ctreporte.value == "") 
  {
    alert("Por favor ingrese un reporte");
    formulario.ctreporte.focus();
    return (false);
  }
<?

if(!empty($_SESSION['Nitmail']) && $_SESSION['Cargoxix'] == 'SEGURIDAD')
{
?>

if (formulario.expandir.checked)
{
  if (formulario.Novedad.value == "" && formulario.Iniciar.checked) 
  {
    alert("No ha seleccionado una Novedad");
    formulario.Novedad.focus();
    return (false);
  }

  if (formulario.Ubicacion.value == "" && formulario.Iniciar.checked) 
  {
    alert("No ha ingresado una Ubicación");
    formulario.Ubicacion.focus();
    return (false);
  }
}
else
{
  if (formulario.ctreportecliente.value == "") 
  {
    alert("Ingrese un reporte al Cliente");
    formulario.ctreportecliente.focus();
    return (false);
  }	
}

<?
}
else
{
?>
  
  if (formulario.ctreportecliente.value == "" && formulario.Iniciar.checked) 
  {
    alert("No ha ingresado un reporte al cliente");
    formulario.ctreportecliente.focus();
    return (false);
  } 
<?
}
?>
  if (formulario.Iniciar.checked == "") 
  {
	var agree=confirm("Esta seguro que no enviara este reporte por E-mail?"); 
	if (agree) 
	{
							document.getElementById("btsubmit").value = "POR FAVOR ESPERE...";
							document.getElementById("btsubmit").disabled = true;
	return true ; 
	}
	else
	{
	return false ;
	}
  } 
 
  if (formulario.Iniciar.checked == "") 
  {
	var agree=confirm("Esta seguro de enviar este reporte?");  
	if (agree) 
	{
							document.getElementById("btsubmit").value = "POR FAVOR ESPERE...";
							document.getElementById("btsubmit").disabled = true;
	return true ; 
	}
	else
	{
	return false ;
	}
  } 
  


							document.getElementById("btsubmit").value = "POR FAVOR ESPERE...";
							document.getElementById("btsubmit").disabled = true;
							
  return (true); 
}
</script>

<script type='text/javascript' src='js/formexp.js'></script>
<script>
function expandir_formulario(){
 if (document.freporte.expandir.checked){
	xDisplay('capaexpansion', 'block')
 }else{
	xDisplay('capaexpansion', 'none')
 }

}

</script>

<?

if($_SESSION['procesar'] == "si")
{
?>
		<script src="js/jquery-1.2.6.pack.js" type="text/javascript"></script>
		<script src="js/thickbox.js" type="text/javascript"></script>
		<link href="css/thickbox.css" rel="stylesheet" type="text/css" media="screen" />
        
<script> 
$(document).ready(function()
						   
	{ 
					var title = "";
					var orderCode = $("input[name=order_code]", this).val();
					var quantity = $("input[name=quantity]", this).val();
					var url = "select-mails-nota.php?Id=<?=$Idviaje?>&TB_iframe=true&height=400&width=300&modal=true";
					tb_show(title, url, false);					   

	}
); 
</script>
<?
}
?>
<style type="text/css">
<!--
#capainicio{
	position:relative;
}
#capaexpansion{
	position:relative;
	display:none;

}
#capafinal{
	position:relative;

}
.Estilo931 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
	color: #000;
}
-->
</style>
</head>
<BODY onLoad="cambio();">

<table width="480" border="0" align="center" cellpadding="0" cellspacing="0" >
  <tr onMouseover="this.bgColor='#BED9F3'"onMouseout="this.bgColor='#FFFFFF'" >
    <td height="436" align="center" valign="top" bgcolor="#C7D7E7"><table width="450" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="30" align="center" valign="middle" bgcolor="#E9E9E9" class="Estilo97">REPORTE EXTRA</td>
        </tr>
    </table>
      <br>

      <table width="450" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="351" align="center" valign="top" bgcolor="#E9E9E9"><form id="freporte" name="freporte" method="post" action="agregar-notaextra.php" onSubmit = "return validar(this)">
            <input name="Idviaje" type="hidden" id="Idviaje" value="<?=$Idviaje?>">
            <br>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="152" class="Estilo93">FECHA<br>
                  <span class="Estilo93 Estilo96">
                  <input name="Vence" type='text' class="TextField2" id='fecha_nacimiento'  value='<?=date("Y-m-d");?>' size="20" readonly/>
   
                  </span></td>
                <td width="81" class="Estilo93">HORA<br>
                  <select name="Inicioh" class="TextField2" id="select5">
                    <option value="<?=$hor?>" selected>
                      <?=$hor?>
                      </option>

                  </select></td>
                <td width="138" class="Estilo93">MINUTO <br>
                  <select name="Iniciom" class="TextField2" id="select6">
                    <option value="<?=$min?>" selected>
                      <?=$min?>
                      </option>

                  </select></td>
                <td width="59" class="Estilo93">&nbsp;</td>
              </tr>
            </table>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><hr size="1"></td>
              </tr>
            </table>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="175" valign="top" class="Estilo931">ENVIAR E-MAIL
                  <label><br>
                    <?
if(!empty($_SESSION['Nitmail']))
{
?>
                    <input name="Iniciar" type="checkbox" id="Iniciar" value="1" <?=$activar2?>>
                    <?
}
else
{
?>
                    <input name="Iniciar" type="checkbox" id="Iniciar" value="1" onClick="if(this.checked) this.form.submit();" <?=$activar2?>>
                    <?
}
$nites	=$_SESSION['Nitmail'];
?>
                    </label>
                  <input name="Nits" type="hidden" id="Nits" value="<?=$nites?>"></td>
                <td width="255" valign="top" class="listado1"><span class="Estilo931">
                  <?
                 $selecion		=	$_SESSION['Nitmail'];
				 $enviru		=	$_SESSION['enviru'];
				
				if($enviru)
				{
				?>
                  </span>
                  <table width="250" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="168"><span class="Estilo931">EMPRESAS SELECCIONADAS </span></td>
                      <td width="82"><span class="listado"><a href="select-mails-update-nota.php?Id=<?=$Idviaje?>">(Modificar)</a></span></td>
                      </tr>
                    <tr>
                      <td height="10" colspan="2" valign="bottom" class="listado1" style="color: #900">
					  <?

				if(!empty($selecion))
				{
					foreach ($selecion as &$value) 
					{
							$querytemp="SELECT* FROM Empresas  where Nit  = '$value'" ;
							$resulttemp=mysql_query($querytemp, $id);
								
							While($rowtemp=mysql_fetch_array($resulttemp))
							{
							$Nombreemprea 	=$rowtemp["Nombre"];
							}
							
							echo $Nombreemprea."<br>";
					}
				}
				
				?></td>
                      </tr>
                    </table>
                  <?

				}
?></td>
                </tr>
            </table>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><hr size="1"></td>
              </tr>
            </table>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td class="Estilo93"><table width="430" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td class="Estilo93">REPORTE INTERNO</td>
                  </tr>
                </table>
                    <textarea name="ctreporte" style="width:100%" rows="5" class="TextField2" id="ctreporte" onChange="javascript:this.value=this.value.toUpperCase(); cambio();"><?=$_SESSION['ctreporte']?></textarea>
                  </td>
              </tr>
            </table>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><hr size="1"></td>
              </tr>
            </table>
            
<?

if(!empty($_SESSION['Nitmail']) && $_SESSION['Cargoxix'] == 'SEGURIDAD')
{
?>
<table width="430" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="25" class="Estilo93">
      <input name="expandir" type="checkbox" id="expandir" value="Nov" onClick="expandir_formulario();">
    
      REPORTE CON NOVEDAD</td>
    </tr>
</table>
<table width="430" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><hr size="1"></td>
  </tr>
</table>
<table width="430" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td class="Estilo93">
    
<div id=capaexpansion> 
    <table width="430" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="19" class="Estilo93">REPORTE AL CLIENTE</td>
        <td width="182" valign="middle" class="Estilo93">UBICACION</td>
      </tr>
    </table>
      <table width="430" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="248" class="Estilo93"><select name="Novedad" class="TextField2" id="Novedad" style="width:96%">
            <option value="" selected>SELECCIONE UNA NOVEDAD</option>
<?
$query008c="SELECT* FROM Novedades Order by Nombre asc" ;
$result008c=mysql_query($query008c, $id);

While($row008c=mysql_fetch_array($result008c))
{
$Nombre8c		=$row008c["Nombre"];
?>
<option value="<?=$Nombre8c?>"><?=$Nombre8c?></option>
<?
}
?>
          </select></td>
          <td width="182" valign="top" class="Estilo93"><input name="Ubicacion" type="text" class="TextField2" id="Ubicacion" style="width:95%"></td>
          </tr>
      </table>
      
</div>     
<textarea name="ctreportecliente" style="width:100%" rows="4" class="TextField2" id="ctreportecliente" 
onChange="javascript:this.value=this.value.toUpperCase();"><?=$_SESSION['ctreportecliente']?></textarea>
</td>
  </tr>
</table>
<table width="430" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><hr size="1"></td>
  </tr>
</table>

<?
}
else
{
?>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td class="Estilo93"><table width="430" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="170" class="Estilo93">REPORTE AL CLIENTE</td>
                    <td width="24" valign="top" class="Estilo93"><label>
                      <input name="cbia" type="checkbox" id="cbia" onClick="cambio()" value="cbia" <?=$activar?>>
                    </label></td>
                    <td width="236" valign="middle" class="Estilo93">IGUAL A REPORTE INTERNO</td>
                  </tr>
                </table>
                  <label>
                  
<?
if($_SESSION['cbia'] != 'cbia')
{
$poner	=	'disabled="disabled"';	
}

?>
                    <textarea name="ctreportecliente" style="width:100%" rows="6" class="TextField2" id="ctreportecliente" onChange="javascript:this.value=this.value.toUpperCase();"><?=$_SESSION['ctreportecliente']?></textarea>
                  </label></td>
              </tr>
            </table>
            
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><hr size="1"></td>
              </tr>
            </table>
<?
}
?>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="100" height="40" class="Estilo93"><label>
                
                  <input name="button" type="submit" class="TextField3" id="btsubmit" value="REPORTAR">
                  
                </label></td>
                <td width="330" class="Estilo93"><input name="salir" type="button" class="TextField3" id="salir" value="SALIR" onClick="window.close();"></td>
                </tr>
            </table>
          </form></td>
        </tr>
      </table></td>
  </tr>
</table>

</body>
</html>