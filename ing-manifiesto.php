<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

include("conexion.php");


$Nit		=	$_REQUEST["Nit"];
$Empresa	=	$_REQUEST["Empresa"];

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
<!--
body {
	background-color: #E3EFF9;
	margin-top: 0px;
	margin-left: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	font: 10px normal Arial, Helvetica, sans-serif;
	color: #444;
}
#error {
	margin-top:1px;
	font: 10px Verdana, Arial, Helvetica, sans-serif;
	color: #990033;
	padding: 2px 2px 2px 15px;
	width: 90%;
	border: 0px #CC3333 solid;
}

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

.Estilo105 {color: #990000; font-family: Arial, Helvetica, sans-serif; font-size: 10px; font-weight: bold; }
.Estilo97 {font-size: 12px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }

h1 {
	font-size: 3em; margin: 20px 0;
	}
	
.container {width: 90%; margin: 10px auto;}

ul.tabs {
	margin: 0;
	padding: 0;
	float: left;
	list-style: none;
	height: 32px;
	border-bottom: 1px solid #999;
	border-left: 1px solid #999;
	width: 100%;
}
ul.tabs li {
	float: left;
	margin: 0;
	padding: 0;
	height: 31px;
	line-height: 31px;
	border: 1px solid #999;
	border-left: none;
	margin-bottom: -1px;
	background: #e0e0e0;
	overflow: hidden;
	position: relative;
}
ul.tabs li a {
	text-decoration: none;
	color: #000;
	display: block;
	font-size: 0.9em;
	padding: 0 20px;
	border: 1px solid #fff;
	outline: none;
}
ul.tabs li a:hover {
	background: #ccc;
}	
html ul.tabs li.active, html ul.tabs li.active a:hover  {
	background: #fff;
	border-bottom: 1px solid #fff;
}
.tab_container {
	border: 1px solid #999;
	border-top: none;
	clear: both;
	float: left; 
	width: 100%;
	background: #fff;
	-moz-border-radius-bottomright: 5px;
	-khtml-border-radius-bottomright: 5px;
	-webkit-border-bottom-right-radius: 5px;
	-moz-border-radius-bottomleft: 5px;
	-khtml-border-radius-bottomleft: 5px;
	-webkit-border-bottom-left-radius: 5px;
}
.tab_content {
	padding: 20px;
	font-size: 1.2em;
}
.tab_content h2 {
	font-weight: normal;
	padding-bottom: 10px;
	border-bottom: 1px dashed #ddd;
	font-size: 1.8em;
}
.tab_content h3 a{
	color: #254588;
}

.container .tab_container #tab1 table tr td p {
	text-align: justify;
}
.TextField211 {background-color: #990000;
color: #FFFFFF;
font-size: 10pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
-->
</style>


<script type="text/javascript"
src="js/jquery.min.js"></script>
<script type="text/javascript"> 
 
$(document).ready(function() {
 
	//Default Action
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content
	
	//On Click Event
	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content
		var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active content
		return false;
	});
 
});
</script>


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


 <SCRIPT LANGUAGE="JavaScript">
 
function puntitos(donde,caracter)
{
pat = /[\*,\+,\(,\),\?,\\,\$,\[,\],\^]/
valor = donde.value
largo = valor.length
crtr = true
if(isNaN(caracter) || pat.test(caracter) == true)
	{
	if (pat.test(caracter)==true) 
		{caracter = "\\" + caracter}
	carcter = new RegExp(caracter,"g")
	valor = valor.replace(carcter,"")
	donde.value = valor
	crtr = false
	}
else
	{
	var nums = new Array()
	cont = 0
	for(m=0;m<largo;m++)
		{
		if(valor.charAt(m) == "." || valor.charAt(m) == " ")
			{continue;}
		else{
			nums[cont] = valor.charAt(m)
			cont++
			}
		
		}
	}


var cad1="",cad2="",tres=0
if(largo > 3 && crtr == true)
	{
	for (k=nums.length-1;k>=0;k--)
		{
		cad1 = nums[k]
		cad2 = cad1 + cad2
		tres++
		if((tres%3) == 0)
			{
			if(k!=0){
				cad2 = "." + cad2
				}
			}
		}
	 donde.value = cad2
	}
}	
 



	 
 

 </SCRIPT>



<script LANGUAGE="JavaScript">


function validar(formulario) 
{
		  if (formulario.Nro.value == "") 
		  {
			alert("Por favor ingrese un Nro de manifiesto");
			formulario.Nro.focus();
			return (false);
		  }
		  
<?
		$query008			="SELECT* FROM Manifiestos " ;
		$result008			=mysql_query($query008, $id);
		
		While($row008		=mysql_fetch_array($result008))
		{
		$Nromanifiesto		=$row008["Nromanifiesto"];
?>
		  if (formulario.Nro.value == "<?=$Nromanifiesto?>") 
		  {
			alert("El Nro de manifiesto ya existe");
			formulario.Nro.focus();
			return (false);
		  }
		  
<?

		}
?>
		  
		  
		  if (formulario.Agencia.value == "") 
		  {
			alert("Por favor seleccione una Agencia");
			formulario.Agencia.focus();
			return (false);
		  }
		  		  

		  if (formulario.Conductor.value == "") 
		  {
			alert("Por favor seleccione un Conductor");
			formulario.Conductor.focus();
			return (false);
		  }
		  
		  if (formulario.Placa.value == "") 
		  {
			alert("Por favor seleccione una Placa");
			formulario.Placa.focus();
			return (false);
		  }
		  
		  
		  if (formulario.Origen.value == "") 
		  {
			alert("Por favor seleccione un Origen");
			formulario.Origen.focus();
			return (false);
		  }
		  
		  
		  if (formulario.Destino.value == "") 
		  {
			alert("Por favor seleccione un Destino");
			formulario.Destino.focus();
			return (false);
		  }
		  
		  
		  
		  if (formulario.Empresa.value == "") 
		  {
			alert("Por favor seleccione una Empresa");
			formulario.Empresa.focus();
			return (false);
		  }
		  
		  
		  if (formulario.Propietario.value == "") 
		  {
			alert("Por favor seleccione un Propietario");
			formulario.Propietario.focus();
			return (false);
		  }

		  
		  

		  
		  
		  
  
document.getElementById("btsubmit").value = "POR FAVOR ESPERE...";
document.getElementById("btsubmit").disabled = true;

  return (true); 
}
</script>

<script type="text/javascript" src="jquery-1.4.2.min.js"></script>

<SCRIPT language=Javascript>
<!--
function isNumberKey(evt)
{
	var charCode = (evt.which) ? evt.which : event.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))
	return false;
	return true;
	}
	//-->
</SCRIPT>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="290" align="center" valign="top">
    <table width="630" border="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>

     
<div class="container">
    <ul class="tabs">
        <li><a href="#tab1">Información General</a></li>
    </ul>
    <div class="tab_container">
      <div id="tab1" class="tab_content">
        <form name="form1" method="post" action="ing-manifiesto2.php" onSubmit = "return validar(this)">
          <table width="98%" border="0">
            <tr>
              <td height="10">&nbsp;</td>
            </tr>
          </table>
          <table width="98%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="251" valign="top"><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="15%" height="25" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">NRO MANIFIESTO:                  </span></td>
                  <td width="35%" bgcolor="#F2F9FD">
                    <input name="Nro" type="text" class="TextField2" id="Nro" style="width:85%" onKeyPress="return isNumberKey(event);" >
                    
                  </td>
                  <td width="15%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">AGENCIA: 
                      
                  </span></td>
                  <td width="35%" bgcolor="#F2F9FD">
                    <select name="Agencia" class="TextField2" id="Agencia" style="width:95%">
                      <option value="" selected></option>
<?
		$query008			="SELECT* FROM Agencias " ;
		$result008			=mysql_query($query008, $id);
		
		While($row008		=mysql_fetch_array($result008))
		{
		$Agencia			=$row008["Nombre"];
		$Cod				=$row008["Cod"];
?>
                      <option value="<?=$Cod?>"><?=$Agencia?></option>
<?
		}
?>
                      
                    </select></td>
                  </tr>
              </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="15%" height="25" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">CONDUCTOR: :
                        <input name="Cedula" type="hidden" id="Cedula" value="<?=$Nit?>">
                    </span></td>
                    <td width="35%" bgcolor="#F2F9FD"><input name="Conductor" type="text" class="TextField2" id="Conductor" style="width:85%" onKeyUp="form1.Nombre.value=form1.Nombre.value.toUpperCase();" value="<?=$Empresa?>" readonly>
                      <a href="#" onClick="window.open('lista-placasman.php','','menubar=no,scrollbars=yes, width=500, height=500,');return false"> <img src="Images/buscar.gif" alt="" width="16" height="16" border="0"> </a></td>
                    <td width="15%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">PLACA:
                        
                    </span></td>
                    <td width="35%" bgcolor="#F2F9FD"><input name="Placa" type="text" class="TextField2" id="Placa" style="width:95%" onKeyUp="form1.Nombre.value=form1.Nombre.value.toUpperCase();" value="<?=$Empresa?>" readonly></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="15%" height="25" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">ORIGEN: 
                        <input name="Codorg" type="hidden" id="Codorg" value="<?=$Orig?>">
                    </span></td>
                    <td width="35%" bgcolor="#F2F9FD"><input name="Origen" type="text" class="TextField2" id="Origen" style="width:85%" onKeyUp="form1.Nombre.value=form1.Nombre.value.toUpperCase();" value="<?=$Empresa?>" readonly>
                      <a href="#" onClick="window.open('lista-ciudades-origen.php','','menubar=no,scrollbars=yes, width=500, height=500,');return false"> <img src="Images/buscar.gif" alt="" width="16" height="16" border="0"></a></td>
                    <td width="15%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">DESTINO: 
                      <input name="Coddest" type="hidden" id="Coddest" value="<?=$Orig?>">
                    </span></td>
                    <td width="35%" bgcolor="#F2F9FD"><input name="Destino" type="text" class="TextField2" id="Destino" style="width:85%" onKeyUp="form1.Nombre.value=form1.Nombre.value.toUpperCase();" value="<?=$Empresa?>" readonly>
                      <a href="#" onClick="window.open('lista-ciudades-destino.php','','menubar=no,scrollbars=yes, width=500, height=500,');return false"> <img src="Images/buscar.gif" width="16" height="16" border="0"> </a></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="15%" height="25" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp; </span><span class="Estilo93"> GENERADOR:
                        <input name="Nit" type="hidden" id="Nit" value="<?=$Nit?>">
                    </span></td>
                    <td width="35%" bgcolor="#F2F9FD"><input name="Empresa" type="text" class="TextField2" id="Empresa" style="width:85%" onKeyUp="form1.Nombre.value=form1.Nombre.value.toUpperCase();" value="<?=$Empresa?>" readonly>
                      <a href="#" onClick="window.open('lista-empresas-man.php','','menubar=no,scrollbars=yes, width=500, height=500,');return false"> <img src="Images/buscar.gif" width="16" height="16" border="0"> </a></td>
                    <td width="15%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo93">PROPIETARIO: 
                      <input name="Cedprop" type="hidden" id="Cedprop" value="<?=$Nit?>">
                    </span></td>
                    <td width="35%" bgcolor="#F2F9FD"><input name="Propietario" type="text" class="TextField2" id="Propietario" style="width:85%" onKeyUp="form1.Nombre.value=form1.Nombre.value.toUpperCase();" value="<?=$Empresa?>" readonly>
                      <a href="#" onClick="window.open('lista-propietariosman.php','','menubar=no,scrollbars=yes, width=500, height=500,');return false"> <img src="Images/buscar.gif" width="16" height="16" border="0"></a></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
<br>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="99%" height="44" align="right"><input name="button" type="submit" class="TextField211" id="btsubmit" value="GUARDAR INFORMACION"></td>
                    <td width="1%" align="right">&nbsp;</td>
                  </tr>
                </table></td>
            </tr>
          </table>
        </form>
        <br>
      </div>

</div>
<div style="clear: both; display: block; padding: 10px 0; text-align:center;"></div>

    
    </td>
  </tr>
</table>


</body>
</html>