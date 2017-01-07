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

$ano	=	date ("Y"); 

$dale	=	$_REQUEST["dale"];
$mod	=	$_REQUEST["mod"];

if(empty($mod))
{
$Mod	=	$_SESSION['Mod'];
}
else
{
session_register('Mod');
$_SESSION['Mod']=$mod;
$Mod	=	$mod;
}

$Plak	=	$_SESSION['Plak'];
$New	=	$_SESSION['New'];

if($Mod <> "si")
{
$estate	=	'readonly="readonly"';
$estat	=	'readonly="readonly"';
$estatr	=	'disabled';
}
else
{
$estate	=	'';	
}



$query="SELECT COUNT(*) as Total FROM Vehiculos  where Placa = '$Plak'" ;
$result=mysql_query($query, $id);

While($row=mysql_fetch_array($result))
{
$Total=$row["Total"];
}


$query0081		=	"SELECT* FROM Vehiculos  where Placa = '$Plak'" ;
$result0081		=	mysql_query($query0081, $id);
							
While($row0081	=	mysql_fetch_array($result0081))
{
$Id				= 	$row0081["Id"];
$Placa			= 	$row0081["Placa"];
$Marca			= 	$row0081["Marca"];

$querya="SELECT* FROM Marcas where Idmarca = '$Marca'" ;
$resulta=mysql_query($querya, $id);

While($rowa=mysql_fetch_array($resulta))
{
$Mark=$rowa["Nombre"];
}

$Modelo			= 	$row0081["Modelo"];
$Repotenciado	= 	$row0081["Repotenciado"];
$Color			= 	$row0081["Color"];

$queryb="SELECT* FROM Colores where Id = '$Color'" ;
$resultb=mysql_query($queryb, $id);

While($rowb=mysql_fetch_array($resultb))
{
$Kolor=$rowb["Nombre"];
}


$Tipo			= 	$row0081["Tipo"];
$Conductor		= 	$row0081["Conductor"];

$query0x="SELECT* FROM Conductores where Cedula = '$Conductor'" ;
$result0x=mysql_query($query0x, $id);

While($row0x=mysql_fetch_array($result0x))
{
$Condutor	=$row0x["Nombre"];
$Apellidoc	=$row0x["Apellido1"] ." ".$row0x["Apellido2"];
$Ciudadc	=$row0x["Ciudad"];
$Telc1		=$row0x["Tel"];
$Telc2		=$row0x["Tel2"];
$Celularc	=$row0x["Celular"];
}


$Propietario	= 	$row0081["Propietario"];

$query0x1="SELECT* FROM Propietarios where Cedula = '$Propietario'" ;
$result0x1=mysql_query($query0x1, $id);

While($row0x1=mysql_fetch_array($result0x1))
{

$Propietareo=$row0x1["Nombre"];
$Apellidop	=$row0x1["Apellido1"] ." ".$row0x1["Apellido2"];
$Ciudadp	=$row0x1["Ciudad"];

$query2		=	"SELECT* FROM Municipio where Id = '$Ciudadp' " ;
$result2	=	mysql_query($query2, $id);

While($row2	=	mysql_fetch_array($result2))
{
$Nombreciu			=$row2["Nombre"];
$Idciu				=$row2["Id"];
}

$Telp1		=$row0x1["Tel"];
$Telp2		=$row0x1["Tel2"];
$Celularp	=$row0x1["Celular"];
}


$Satelital		= 	$row0081["Satelital"];
$Usuario		= 	$row0081["Usuario"];
$Pass			= 	$row0081["Pass"];
$Empresate		= 	$row0081["Empresate"];
$Foto			= 	$row0081["Foto"];
$Temporal		= 	$row0081["Temporal"];
$Tipocarro		= 	$row0081["Tipocarro"];
$Deuda			= 	$row0081["Deuda"];
$Mensaje		= 	$row0081["Mensaje"];
$Fecha			= 	$row0081["Fecha"];
$Pais			= 	$row0081["Pais"];
$Servicio		= 	$row0081["Servicio"];
$Tipocoche		= 	$row0081["Tipocoche"];
$Clase			= 	$row0081["Clase"];

$queryc="SELECT* FROM Tipocarro  where Id = '$Clase'" ;
$resultc=mysql_query($queryc, $id);

While($rowc=mysql_fetch_array($resultc))
{
$Klase=$rowc["Nombre"];
}

$Linea			= 	$row0081["Linea"];

$queryd="SELECT* FROM Lineas  where Id = '$Linea'" ;
$resultd=mysql_query($queryd, $id);

While($rowd=mysql_fetch_array($resultd))
{
$Lynea=$rowd["Nombre"];
}

$Codlinea		= 	$row0081["Codlinea"];
$Serie			= 	$row0081["Serie"];
$Motor			= 	$row0081["Motor"];
$Carroceria		= 	$row0081["Carroceria"];
$Idcarroceria	= 	$row0081["Idcarroceria"];



$Chasis			= 	$row0081["Chasis"];
$Combustible	= 	$row0081["Combustible"];
$Medidas		= 	$row0081["Medidas"];
$Configuracion	= 	$row0081["Configuracion"];
$Placatrailer	= 	$row0081["Placatrailer"];
$Marcatrailer	= 	$row0081["Marcatrailer"];

$querye="SELECT* FROM Marcas where Idmarca = '$Marcatrailer'" ;
$resulte=mysql_query($querye, $id);

While($rowe=mysql_fetch_array($resulte))
{
$Markt=$rowe["Nombre"];
}


$Paistrailer	= 	$row0081["Paistrailer"];
$Modelotrailer	= 	$row0081["Modelotrailer"];
$Configtrailer	= 	$row0081["Configtrailer"];
$Poseedor		= 	$row0081["Poseedor"];
$Pesovehiculo	= 	$row0081["Pesovehiculo"];
$Pesotrailer	= 	$row0081["Pesotrailer"];
$Capacidadcarga	= 	$row0081["Capacidadcarga"];
$Empresaafilia	= 	$row0081["Empresaafilia"];

$queryh="SELECT* FROM Afiliacion where Id = '$Empresaafilia'" ;
$resulth=mysql_query($queryh, $id);

While($rowh=mysql_fetch_array($resulth))
{
$Afiliaca=$rowh["Nombre"];
}

$Soat			= 	$row0081["Soat"];
$Vencesoat		= 	$row0081["Vencesoat"];
$Aseguradora	= 	$row0081["Aseguradora"];

$queryf="SELECT* FROM Aseguradoras where Id = '$Aseguradora'" ;
$resultf=mysql_query($queryf, $id);

While($rowf=mysql_fetch_array($resultf))
{
$Aseguradorat	=$rowf["Nombre"];
}

$Tarjempresa	= 	$row0081["Tarjempresa"];
$Vencetarjeta	= 	$row0081["Vencetarjeta"];
$Runt			= 	$row0081["Runt"];
$Insptecnico	= 	$row0081["Insptecnico"];
$Vencemientoinsp= 	$row0081["Vencemientoinsp"];
$Respcivil		= 	$row0081["Respcivil"];
$Venceresp		= 	$row0081["Venceresp"];
$Asegurado		= 	$row0081["Asegurado"];

$queryg="SELECT* FROM Aseguradoras where Id = '$Asegurado'" ;
$resultg=mysql_query($queryg, $id);

While($rowg=mysql_fetch_array($resultg))
{
$Aseguradorag	=$rowg["Nombre"];
}


$Aprobacion		= 	$row0081["Aprobacion"];
$Fechaing		= 	$row0081["Fechaing"];
$Usuarioing		= 	$row0081["Usuarioing"];
$Fecharetiro	= 	$row0081["Fecharetiro"];
$Usuarioretiro	= 	$row0081["Usuarioretiro"];
$Fechacambio	= 	$row0081["Fechacambio"];
$Usuariocambio	= 	$row0081["Usuariocambio"];
$Pesobruto		= 	$row0081["Pesobruto"];

$Ministerio		= 	$row0081["Ministerio"];
$Comentarios	= 	$row0081["Comentarios"];
$Fechaaprueba	= 	$row0081["Fechaaprueba"];
$Useraaprueba	= 	$row0081["Useraaprueba"];
$Propio			= 	$row0081["Propio"];

$Ref1			= 	$row0081["Ref1"];
$Telref1		= 	$row0081["Telref1"];
$Confref1		= 	$row0081["Confref1"];
$Ciudref1		= 	$row0081["Ciudref1"];
$Comref1		= 	$row0081["Comref1"];

$Ref2			= 	$row0081["Ref2"];
$Telref2		= 	$row0081["Telref2"];
$Confref2		= 	$row0081["Confref2"];
$Ciudref2		= 	$row0081["Ciudref2"];
$Comref2		= 	$row0081["Comref2"];

$Ref3			= 	$row0081["Ref3"];
$Telref3		= 	$row0081["Telref3"];
$Confref3		= 	$row0081["Confref3"];
$Ciudref3		= 	$row0081["Ciudref3"];
$Comref3		= 	$row0081["Comref3"];
}

if($Id <> '')
{
$esta	=	'readonly="readonly"';
$Fechaing		= $Fechaing;
$Creador		= $Usuarioing;
}
else
{
$Fechaing		= 	date("Y-m-d");
$Creador		= 	$_SESSION['Empresa'];
}

$Fechae			= 	date("Y-m-d");
?>
<script>
<?
if($dale == "a")
{
?>
alert("La Placa ingresada ya existe"); 
<?
}
elseif($dale == "b")
{
?>	
alert("El vehículo se ingreso con exito"); 
<?
}
elseif($dale == "c" || $dale == "d" || $dale == "e" || $dale == "f")
{
?>	
alert("El vehículo se actualizo con exito"); 
<?
}
?>
</script>



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
	font: 10px Arial, Helvetica, sans-serif, bold;
	color: #000000;
	width: 90%;
}

#errorc {
	margin-top:1px;
	font: 10px Arial, Helvetica, sans-serif, bold;
	color: #000000;
	width: 90%;
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
	font-size: 9px;
}
.Estilo96 {font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
}
.TextField2 {background-color: #DADADA;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.TextField21 {background-color: #990000;
color: #FFFFFF;
font-size: 10pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.TextField25 {background-color: #006;
color: #FFFFFF;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
}

.Estilo105 {color: #990000; font-family: Arial, Helvetica, sans-serif; font-size: 10px; font-weight: bold; }
.Estilo97 {font-size: 12px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }

h1 {
	font-size: 3em; margin: 20px 0;
	}
	
.container {width: 95%; margin: 10px auto;}

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
.Estilo931 {font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
}
.Estilo961 {	font-size: 10px
}
-->
</style>
		<link rel="stylesheet" media="all" type="text/css" href="css/ui-lightness/jquery-ui-1.8.6.custom.css" />
		<style type="text/css"> 

			body{font: 90% Arial, Helvetica, sans-serif;}

			#ui-datepicker-div{ font-size: 80%; }
			.ui-timepicker-div .ui-widget-header{ margin-bottom: 8px; }
			.ui-timepicker-div dl{ text-align: left; }
			.ui-timepicker-div dl dt{ height: 25px; }
			.ui-timepicker-div dl dd{ margin: -25px 0 10px 65px; }
			.ui-timepicker-div td { font-size: 90%; }
			
		.Estilo932 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
        .Estilo962 {font-size: 11px}
        </style> 
        
		<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.6.custom.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-timepicker-addon.js"></script>
		<script type="text/javascript">
			
			$(function(){
				
		
				$('.example-container > pre').each(function(i){
					eval($(this).text());
					$('#Vencesoat').datepicker();
				});
				
				$('.example-container > pre').each(function(i){
					eval($(this).text());
					$('#Vencetarjeta').datepicker();
				});

				$('.example-container > pre').each(function(i){
					eval($(this).text());
					$('#Vencemientoinsp').datepicker();
				});

				$('.example-container > pre').each(function(i){
					eval($(this).text());
					$('#Venceresp').datepicker();
				});
				
			});
			
			
		</script>


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



<script LANGUAGE="JavaScript">


function validar(formulario) 
{
  if (formulario.Aprobacion.value == "APROBADO") 
  {

		  if (formulario.Placa.value == "") 
		  {
			alert("Por favor ingrese una Placa");
			formulario.Placa.focus();
		
			return (false);
		  }
	  
		  if (formulario.Pais.value == "") 
		  {
			alert("Por favor ingrese un País");
			formulario.Pais.focus();
		
			return (false);
		  }
		  if (formulario.Servicio.value == "") 
		  {
			alert("Por favor seleccione un Servicio");
			formulario.Servicio.focus();
			return (false);
		  }
		  if (formulario.Idcolor.value == "") 
		  {
			alert("Por favor seleccione un Color");
			formulario.Idcolor.focus();
			return (false);
		  }
		  if (formulario.Idmarca.value == "") 
		  {
			alert("Por favor seleccione una Marca");
			formulario.Idmarca.focus();
			return (false);
		  }
		  if (formulario.Tipo.value == "") 
		  {
			alert("Por favor seleccione Tipo de Vehículo");
			formulario.Tipo.focus();
			return (false);
		  }
		  if (formulario.Idclase.value == "") 
		  {
			alert("Por favor seleccione una Clase");
			formulario.Idclase.focus();
			return (false);
		  }

		  if (formulario.Idlinea.value == "") 
		  {
			alert("Por favor seleccione una Línea");
			formulario.Idlinea.focus();
			return (false);
		  }

		  if (formulario.Serie.value == "") 
		  {
			alert("Por favor ingrese la Serie");
			formulario.Serie.focus();
			return (false);
		  }

		  if (formulario.Motor.value == "") 
		  {
			alert("Por favor ingrese Cod. del Motor");
			formulario.Motor.focus();
			return (false);
		  }
		  if (formulario.Idcarroceria.value == "") 
		  {
			alert("Por favor seleccione el tipo de Carroceria");
			formulario.Idcarroceria.focus();
			return (false);
		  }

		  if (formulario.Chasis.value == "") 
		  {
			alert("Por favor ingrese el Cod. de Chasis");
			formulario.Chasis.focus();
			return (false);
		  }
		  if (formulario.Combustible.value == "") 
		  {
			alert("Por favor seleccione el tipo de Combustible");
			formulario.Combustible.focus();
			return (false);
		  }

		  if (formulario.Modelo.value == "") 
		  {
			alert("Por favor ingrese un Modelo");
			formulario.Modelo.focus();
			return (false);
		  }
		  if (formulario.Modelo.value.length < 4) 
		  {
			alert("Por favor ingrese un Modelo valido");
			formulario.Modelo.focus();
			return (false);
		  }

		  if (formulario.Pesovehiculo.value == "") 
		  {
			alert("Por favor ingrese el peso del Vehículo");
			formulario.Pesovehiculo.focus();
			return (false);
		  }
		  if (formulario.Pesovehiculo.value < 101) 
		  {
			alert("Por favor verifique el peso del Vehículo");
			formulario.Pesovehiculo.focus();
			return (false);
		  }
		  if (formulario.Capacidadcarga.value == "") 
		  {
			alert("Por favor ingrese la Capacidad de Carga");
			formulario.Capacidadcarga.focus();
			return (false);
		  }
		  if (formulario.Capacidadcarga.value < 101) 
		  {
			alert("Por favor verifique la capacidad del Vehículo");
			formulario.Capacidadcarga.focus();
			return (false);
		  }
		  if (formulario.Propietario.value == "") 
		  {
			alert("Por favor ingrese la Cédula del Propietario");
			formulario.Propietario.focus();
			return (false);
		  }
		  if (formulario.Propietario.value.length < 7) 
		  {
			alert("Por favor ingrese una Cédula valida");
			formulario.Propietario.focus();
			return (false);
		  }
		  if (formulario.Conductor.value == "") 
		  {
			alert("Por favor ingrese la Cédula del Conductor");
			formulario.Conductor.focus();
			return (false);
		  }
		  if (formulario.Conductor.value.length < 7) 
		  {
			alert("Por favor ingrese una Cédula valida");
			formulario.Conductor.focus();
			return (false);
		  }
		  if (formulario.Soat.value == "") 
		  {
			alert("Por favor ingrese el Soat");
			formulario.Soat.focus();
			return (false);
		  }
		  if (formulario.Vencesoat.value == "") 
		  {
			alert("Por favor ingrese la fecha de vencimiento del Soat");
			formulario.Vencesoat.focus();
			return (false);
		  }
		  if (formulario.Vencesoat.value < "<?=$Fechae?>") 
		  {
			alert("Por favor verifique la fecha de vencimiento del Soat");
			formulario.Vencesoat.focus();
			return (false);
		  }
		  if (formulario.Aseguradora.value == "") 
		  {
			alert("Por favor seleccione una Aseguradora");
			formulario.Aseguradora.focus();
			return (false);
		  }
		  if (formulario.Runt.value == "") 
		  {
			alert("Por favor ingrese el número de Runt");
			formulario.Runt.focus();
			return (false);
		  }
		  if (formulario.Insptecnico.value == "") 
		  {
			alert("Por favor ingrese el Cod. de inspección Tecnico Mecánica");
			formulario.Insptecnico.focus();
			return (false);
		  }
		  if (formulario.Vencemientoinsp.value == "") 
		  {
			alert("Por favor ingrese la fecha de vencimiento de inspección Tecnico Mecánica");
			formulario.Vencemientoinsp.focus();
			return (false);
		  }
		  if (formulario.Vencemientoinsp.value < "<?=$Fechae?>") 
		  {
			alert("Por favor verifique la fecha de vencimiento de inspección Tecnico Mecánica");
			formulario.Vencemientoinsp.focus();
			return (false);
		  }
		  if (formulario.Idempreafilia.value == "") 
		  {
			alert("Por favor ingrese la Empresa de Afiliación");
			formulario.Idempreafilia.focus();
			return (false);
		  }
		  if (formulario.Idempreafilia.value == "") 
		  {
			alert("Por favor ingrese la Empresa de Afiliación");
			formulario.Idempreafilia.focus();
			return (false);
		  }
		  if (formulario.Ref1.value == "") 
		  {
			alert("Por favor ingrese una Empresa de Referencia");
			formulario.Ref1.focus();
			return (false);
		  }
		  if (formulario.Telref1.value == "") 
		  {
			alert("Por favor ingrese un Teléfono de la Empresa de Referencia");
			formulario.Telref1.focus();
			return (false);
		  }

		  if (formulario.Confref1.value == "") 
		  {
			alert("Por favor seleccione el usuario que confirmo la Referencia");
			formulario.Confref1.focus();
			return (false);
		  }

		  if (formulario.Ciudref1.value == "") 
		  {
			alert("Por favor ingrese la ciudad de la Referencia");
			formulario.Ciudref1.focus();
			return (false);
		  }

 
  
  }
document.getElementById("btsubmit").value = "POR FAVOR ESPERE...";
document.getElementById("btsubmit").disabled = true;

  return (true); 
}
</script>


<SCRIPT language=Javascript>
function stopRKey(evt) 
{
   var evt = (evt) ? evt : ((event) ? event : null);
   var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
   if ((evt.keyCode == 13) && (node.type=="text")) {return false;}
}

document.onkeypress = stopRKey; 
</script>

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


<script language="javascript">  
function calcula(operacion)
{  
    var operando1 = document.form1.Pesotrailer.value; 
    var operando2 = document.form1.Pesovehiculo.value; 
    var operando3 = document.form1.Capacidadcarga.value; 
    var result = eval(operando1 + operacion + operando2 + operacion + operando3);
    document.form1.Pesobruto.value = result ; 
}  
</script>




			<script type="text/javascript" language="javascript" src="lytebox.js"></script>


<script language = "javascript"> 



		function createRequestObject(){
			  var peticion;
			  var browser = navigator.appName;
					if(browser == "Microsoft Internet Explorer"){
						  peticion = new ActiveXObject("Microsoft.XMLHTTP");
					}else{
						  peticion = new XMLHttpRequest();
		}
		return peticion;
		}
		 
		 
		var http = new Array();
		function ObtDatos(url){
			  var act = new Date();
			  http[act] = createRequestObject();
			  http[act].open('get', url);
			  http[act].onreadystatechange = function() {
			  if (http[act].readyState == 4) {
					if (http[act].status == 200 || http[act].status == 304) {
				var texto
				texto  = http[act].responseText
				
							var DivDestino = document.getElementById("DivDestino");
							DivDestino.innerHTML = "<div id='error'>"+texto+"</div>";
						   
		}
		}
		}
		http[act].send(null);
		}
<?
if(!empty($Propietario))
{
$funci	=	"compUsuario();";
?>
		 






		function compUsuario() 
		{

			 if (document.form1.Propietario.value == "<?=$Propietario?>") 
			 {
				  var DivDestino = document.getElementById("DivDestino");
				  DivDestino.innerHTML = "<div></div>";
				  if (document.form1.Propietario.value) 
				  {
					  
					  if(document.form1.Propietario.value.length > 6)
						{ 
					   		ObtDatos("ajax_comprobar_placa_prop.php?q=" + document.form1.Propietario.value);
					    }
				  } 
			 }
		}
		
		function compUsuarios(Tecla) 
		{
			 Tecla = (Tecla) ? Tecla: window.event;
			 input = (Tecla.target) ? Tecla.target : 
			 Tecla.srcElement;
			 if (Tecla.type == "keyup") 
			 {
				  var DivDestino = document.getElementById("DivDestino");
				  DivDestino.innerHTML = "<div></div>";
				  if (document.form1.Propietario.value) 
				  {
					  
					  if(document.form1.Propietario.value.length > 6)
						{ 
					   		ObtDatos("ajax_comprobar_placa_prop.php?q=" + document.form1.Propietario.value);
					    }
				  } 
			 }
		}


<?
}
else
{
?>
		function compUsuarios(Tecla) 
		{
			 Tecla = (Tecla) ? Tecla: window.event;
			 input = (Tecla.target) ? Tecla.target : 
			 Tecla.srcElement;
			 if (Tecla.type == "keyup") 
			 {
				  var DivDestino = document.getElementById("DivDestino");
				  DivDestino.innerHTML = "<div></div>";
				  if (document.form1.Propietario.value) 
				  {
					  
					  if(document.form1.Propietario.value.length > 6)
						{ 
					   		ObtDatos("ajax_comprobar_placa_prop.php?q=" + document.form1.Propietario.value);
					    }
				  } 
			 }
		}
<?
}
?>



		var httpc = new Array();
		function ObtDatosc(urlc){
			  var actc = new Date();
			  httpc[actc] = createRequestObject();
			  httpc[actc].open('get', urlc);
			  httpc[actc].onreadystatechange = function() {
			  if (httpc[actc].readyState == 4) {
					if (httpc[actc].status == 200 || httpc[actc].status == 304) {
				var textoc
				textoc = httpc[actc].responseText
				
							var DivDestinoc = document.getElementById("DivDestinoc");
							DivDestinoc.innerHTML = "<div id='errorc'>"+textoc+"</div>";
						   
		}
		}
		}
		httpc[actc].send(null);
		}
		 
<?
if(!empty($Conductor))
{
$funcic	=	"compUsuarioc();";
?>

		function compUsuarioc() 
		{

			 if (document.form1.Conductor.value == "<?=$Conductor?>") 
			 {
				  var DivDestinoc = document.getElementById("DivDestinoc");
				  DivDestinoc.innerHTML = "<div></div>";
				  if (document.form1.Conductor.value) 
				  {
					  
					  if(document.form1.Conductor.value.length > 6)
						{ 
					   		ObtDatosc("ajax_comprobar_placa_cond.php?q=" + document.form1.Conductor.value);
					    }
				  } 
			 }
		}
		
		function compUsuariocs(Teclac) 
		{
			 Teclac = (Teclac) ? Teclac: window.event;
			 input = (Teclac.target) ? Teclac.target : 
			 Teclac.srcElement;
			 if (Teclac.type == "keyup") 
			 {
				  var DivDestinoc = document.getElementById("DivDestinoc");
				  DivDestinoc.innerHTML = "<div></div>";
				  if (document.form1.Conductor.value) 
				  {
					  
					  if(document.form1.Conductor.value.length > 6)
						{ 
					   		ObtDatosc("ajax_comprobar_placa_cond.php?q=" + document.form1.Conductor.value);
					    }
				  } 
			 }
		}
		
<?
}
else
{
?>
		function compUsuariocs(Teclac) 
		{
			 Teclac = (Teclac) ? Teclac: window.event;
			 input = (Teclac.target) ? Teclac.target : 
			 Teclac.srcElement;
			 if (Teclac.type == "keyup") 
			 {
				  var DivDestinoc = document.getElementById("DivDestinoc");
				  DivDestinoc.innerHTML = "<div></div>";
				  if (document.form1.Conductor.value) 
				  {
					  
					  if(document.form1.Conductor.value.length > 6)
						{ 
					   		ObtDatosc("ajax_comprobar_placa_cond.php?q=" + document.form1.Conductor.value);
					    }
				  } 
			 }
		}
<?
}
?>


</script>



</head>
<body onload = "document.form1.Placa.focus(); <?=$funci?> <?=$funcic?>">


<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="290" align="center" valign="top">

<form action="actauto-opc-a.php" method="post" enctype="multipart/form-data" name="form1" onSubmit = "return validar(this)">   
<div class="container">
<?
if($Aprobacion	<> "APROBADO")
{
?>
<table width="95%" border="0">
  <tr>
    <td width="90%" align="right" valign="bottom"><? if($New <> "si"){?><a href="pasoautomotores.php" target="contenido"><img src="Images/ing-icon.jpg" width="80" height="20" border="0"></a><? } ?>&nbsp;&nbsp;<? if($Mod <> "si"){?><a href="ingauto.php?mod=si&Id=<?=$Id?>"><img src="Images/act-icon.jpg" width="80" height="20" border="0"></a>&nbsp;&nbsp;<? }?><a href="zona.php" target="_top"><img src="Images/salir-icon.jpg" width="80" height="20" border="0"></a></td>
    <td width="10%" align="right" valign="top"><table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="20" align="center" valign="middle" bgcolor="#990000" class="listado">SIN APROBAR</td>
      </tr>
    </table></td>
  </tr>
</table>
<?
}
else
{
?>
<table width="95%" border="0">
  <tr>
    <td align="right" valign="bottom"><? if($New <> "si"){?>
      <a href="pasoautomotores.php" target="contenido"><img src="Images/ing-icon.jpg" width="80" height="20" border="0"></a>
      <? } ?>
      &nbsp;&nbsp;
      <? if($Mod <> "si"){?>
      <a href="ingauto.php?mod=si&Id=<?=$Id?>"><img src="Images/act-icon.jpg" width="80" height="20" border="0"></a>&nbsp;&nbsp;
      <? }?>
      <a href="zona.php" target="_top"><img src="Images/salir-icon.jpg" width="80" height="20" border="0"></a></td>
    </tr>
</table>
<?
}
?>
<ul class="tabs">
  <li><a href="#tab1">Información General</a></li>
  <?
if($Total == 0)
{
?>
  
  <?
}
else
{
?>
  <li><a href="#tab2">Propietario / Conductor</a></li>
  <li><a href="#tab3">Documentos / Otros</a></li>
  <li><a href="#tab4">Referencias</a></li>
  <li><a href="#tab5">Aprobación / Cancelación</a></li>
  
  
  <?
}
?> 
</ul>
    <div class="tab_container">
      <div id="tab1" class="tab_content">
       
          <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td height="5" align="right">&nbsp;</td>
            </tr>
          </table>
          <table width="98%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="251" valign="top"><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="16%" height="25" align="right" bgcolor="#748FC2" class="Estilo93 Estilo96"><input name="Id" type="hidden" id="Id" value="<?=$Id?>">                    &nbsp;<span style="color: #FFF">PLACA:&nbsp;&nbsp; </span></td>
                  <td width="14%" bgcolor="#748FC2"><span class="Estilo93 Estilo96">
                    <input name="Placa" type="text" class="TextField2" id="Placa" style="width:99%"  onKeyUp="form1.Placa.value=form1.Placa.value.toUpperCase();" value="<?=$Placa?>" readonly="readonly">
                  </span></td>
                  <td width="12%" align="left" bgcolor="#748FC2"></td>
                  <td width="6%" align="right" valign="middle" bgcolor="#748FC2"><span class="Estilo93 Estilo96"><span style="color: #FFF"> INGRESO:&nbsp;</span></span></td>
                  <td width="16%" bgcolor="#748FC2"><span class="Estilo93 Estilo96">
                    <input name="Fechaing" type="text" class="TextField2" id="Fechaing" style="width:85%" value="<?=$Fechaing?>" readonly="readonly">
                  </span></td>
                  <td width="16%" align="right" bgcolor="#748FC2"><span class="Estilo93 Estilo96">&nbsp;<span style="color: #FFF">USUARIO:&nbsp;</span></span></td>
                  <td width="16%" bgcolor="#748FC2"><span class="Estilo93 Estilo96">
                    <input name="Creador" type="text" class="TextField2" id="Creador" style="width:85%" value="<?=$Creador?>" readonly="readonly">
                  </span></td>
                  <td width="4%" bgcolor="#748FC2">&nbsp;</td>
                </tr>
              </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
<?
if($Id <> "")
{
?>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="16%" height="25" align="right" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">&nbsp;</span><span class="Estilo932">FECHA MOD:<span class="Estilo93 Estilo96">&nbsp;&nbsp;</span></span></td>
                    <td width="26%" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">
                      <input name="Fechacambio" type="text" class="TextField2" id="Fechacambio" style="width:50%" value="<?=$Fechacambio?>" readonly="readonly">
                    </span></td>
                    <td width="6%" align="right" bgcolor="#E4F3FC"><span class="Estilo932">USUARIO:<span class="Estilo93 Estilo96">&nbsp;&nbsp;</span></span></td>
                    <td width="16%" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">
                      <input name="Usuariocambio" type="text" class="TextField2" id="Usuariocambio" style="width:85%" value="<?=$Usuariocambio?>" readonly="readonly">
                    </span></td>
                    <td width="36%" bgcolor="#E4F3FC">&nbsp;</td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <?
}
?>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="16%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;PAIS:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <select name="Pais" class="TextField2" id="Pais" style="width:85%" <?=$estate?> <?=$estatr?>>
                        <option value="<?=$Pais?>" selected>
                          <?=$Pais?>
                          </option>
                        <option value="COLOMBIA">COLOMBIA</option>
                        <option value="ECUADOR">ECUADOR</option>
                        <option value="VENEZUELA">VENEZUELA</option>
                      </select>
                    </span></td>
                    <td width="16%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;SERVICIO:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <select name="Servicio" class="TextField2" id="Servicio" style="width:85%" <?=$estate?> <?=$estatr?>>
                        <option value="<?=$Servicio?>" selected>
                          <?=$Servicio?>
                          </option>
                        <option value="PARTICULAR">PARTICULAR</option>
                        <option value="PRIVADO">PRIVADO</option>
                        <option value="PUBLICO">PUBLICO</option>
                      </select>
                    </span></td>
                    <td width="16%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;COLOR:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Idcolor" type="text" class="TextField2" id="Identificacion43" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Kolor?>" readonly="readonly">
                      <?
                    if($Mod == "si")
					{
					?>
                      <a href="#" onClick="window.open('lista-colores.php','','menubar=no,scrollbars=yes, width=500, height=500,');return false"><img src="Images/buscar.gif" width="16" height="16" border="0">
                      <?
					}
					?>
                      </a></span></td>
                    <td width="4%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Color" type="hidden" id="Color" value="<?=$Color?>" >
                      &nbsp;&nbsp;&nbsp;</span></td>
                    </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="16%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;MARCA:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Idmarca" type="text" class="TextField2" id="Identificacion44" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Mark?>" readonly="readonly">
                      <?
                    if($Mod == "si")
					{
					?>


           
                      <a href="#" onClick="window.open('lista-marcas.php','','menubar=no,scrollbars=yes, width=500, height=500,');return false"><img src="Images/buscar.gif" width="16" height="16" border="0">
                      <?
					}
					?>
                      </a></span></td>
                    <td width="16%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;TIPO VEHICULO:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <select name="Tipo" class="TextField2" id="Tipo" style="width:85%" <?=$estatr?>>
                        <option value="<?=$Tipo?>" selected>
                          <?=$Tipo?>
                          </option>
                        <option value="ARTICULADO">ARTICULADO</option>
                        <option value="RIGIDO">RIGIDO</option>
                      </select>
                      <a href="#" onClick="window.open('lista-marcas.php','','menubar=no,scrollbars=yes, width=500, height=500,');return false"></a></span></td>
                    <td width="16%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;CLASE:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Idclase" type="text" class="TextField2" id="Identificacion46" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Klase?>" readonly="readonly">
                      <?
                    if($Mod == "si")
					{
					?>
                      <a href="#" onClick="window.open('lista-tipocarro.php','','menubar=no,scrollbars=yes, width=500, height=500,');return false"><img src="Images/buscar.gif" width="16" height="16" border="0">
                      <?
					}
					?>
                      </a></span></td>
                    <td width="4%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Marca" type="hidden" id="Marca" value="<?=$Marca?>">
                      <a href="lista-planes.php" onClick="window.open('lista-tipos.php','','menubar=no,scrollbars=yes, width=500, height=500');return false">
                        <input name="Clase" type="hidden" id="Clase" value="<?=$Clase?>">
                        </a>&nbsp;&nbsp;&nbsp;</span></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="16%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;LINEA:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Idlinea" type="text" class="TextField2" id="Idlinea" style="width:85%" value="<?=$Lynea?>" readonly="readonly">
                      <?
                    if($Mod == "si")
					{
					?>
<a href="#" onClick="window.open('lista-lineas.php?Idmarca='+document.form1.Marca.value,'','menubar=no,scrollbars=yes, width=500, height=500,');return false"><img src="Images/buscar.gif" width="16" height="16" border="0">
<?
					}
					?>
</a></span></td>
                    <td width="16%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
&nbsp;&nbsp;SERIE:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Serie" type="text" class="TextField2" id="Identificacion48" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Serie?>" <?=$estate?>>
                    </span></td>
                    <td width="16%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;MOTOR:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Motor" type="text" class="TextField2" id="Identificacion49" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Motor?>" <?=$estate?>>
                    </span></td>
                    <td width="4%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96"><a href="lista-planes.php" onClick="window.open('lista-tipos.php','','menubar=no,scrollbars=yes, width=500, height=500');return false"></a>
                        <input name="Linea" type="hidden" id="Linea" value="<?=$Linea?>">
                      </span></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="16%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;CARROCERIA:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Idcarroceria" type="text" class="TextField2" id="Identificacion50" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Idcarroceria?>" readonly="readonly">
                      <?
                    if($Mod == "si")
					{
					?>
                      <a href="#" onClick="window.open('lista-carrocerias.php','','menubar=no,scrollbars=yes, width=500, height=500,');return false"><img src="Images/buscar.gif" width="16" height="16" border="0">
                      <?
					}
					?>
                      </a></span></td>
                    <td width="16%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;CHASIS:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Chasis" type="text" class="TextField2" id="Identificacion51" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Chasis?>" <?=$estate?>>
                    </span></td>
                    <td width="16%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;COMBUSTIBLE:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <select name="Combustible" class="TextField2" id="Combustible" style="width:85%" <?=$estate?> <?=$estatr?>>
                        <option value="<?=$Combustible?>" selected>
                          <?=$Combustible?>
                          </option>
                        <option value="A.C.P.M">A.C.P.M</option>
                        <option value="GAS NATURAL">GAS NATURAL</option>
                        <option value="GASOLINA">GASOLINA</option>
                      </select>
                    </span></td>
                    <td width="4%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Carroceria" type="hidden" id="Carroceria" value="<?=$Carroceria?>">
                      &nbsp;&nbsp;&nbsp;</span></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="16%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;CONFIGURACION:&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Configuracion" type="text" class="TextField2" id="Configuracion" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Configuracion?>" readonly="readonly">
                      <?
                    if($Mod == "si")
					{
					?>
                      <a href="#" onClick="window.open('lista-configuracion.php','','menubar=no,scrollbars=yes, width=500, height=500,');return false"><img src="Images/buscar.gif" width="16" height="16" border="0">
                      <?
					}
					?>
                      </a></span></td>
                    <td width="16%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;MODELO:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Modelo" type="text" class="TextField2" id="Identificacion55" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Modelo?>" <?=$estate?>>
                    </span></td>
                    <td width="16%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;REPOTENCIADO:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Repotenciado" type="text" class="TextField2" id="Identificacion56" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Repotenciado?>" <?=$estate?>>
                    </span></td>
                    <td width="4%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;</span></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="16%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;PLACA TRAILER:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Placatrailer" type="text" class="TextField2" id="Identificacion57" style="width:85%" value="<?=$Placatrailer?>" <?=$estate?>> 
                    </span></td>
                    <td width="16%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;PAIS TRAILER:&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Paistrailer" type="text" class="TextField2" id="Identificacion58" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Paistrailer?>" readonly="readonly">
                      <?
                    if($Mod == "si")
					{
					?>
                      <a href="#" onClick="window.open('lista-paises.php','','menubar=no,scrollbars=yes, width=500, height=500,');return false"><img src="Images/buscar.gif" width="16" height="16" border="0">
                      <?
					}
					?>
                      </a></span></td>
                    <td width="16%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;MARCA TRAILER:&nbsp;&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Idmarcatrailer" type="text" class="TextField2" id="Identificacion59" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Markt?>" readonly="readonly">
                      <?
                    if($Mod == "si")
					{
					?>
                      <a href="#" onClick="window.open('lista-marcas-t.php','','menubar=no,scrollbars=yes, width=500, height=500,');return false"><img src="Images/buscar.gif" width="16" height="16" border="0">
                      <?
					}
					?>
                      </a></span></td>
                    <td width="4%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Marcatrailer" type="hidden" id="Marcatrailer" value="<?=$Marcatrailer?>">
                      &nbsp;&nbsp;&nbsp;</span></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="16%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;MODELO TRAILER:&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Modelotrailer" type="text" class="TextField2" id="Identificacion60" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Modelotrailer?>" <?=$estate?>>
                    </span></td>
                    <td width="16%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;CONF. TRAILER:&nbsp;&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Configtrailer" type="text" class="TextField2" id="Identificacion61" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Configtrailer?>" readonly="readonly">
                      <?
                    if($Mod == "si")
					{
					?>
                      <a href="#" onClick="window.open('lista-config-trailer.php','','menubar=no,scrollbars=yes, width=500, height=500,');return false"><img src="Images/buscar.gif" width="16" height="16" border="0">
                      <?
					}
					?>
                      </a></span></td>
                    <td width="16%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;PESO TRAILER:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Pesotrailer" type="text" class="TextField2" id="Pesotrailer" style="width:85%" onKeyPress="return isNumberKey(event);" onKeyUp="calcula('+');" value="<?=$Pesotrailer?>" <?=$estate?>>
                    </span><span class="Estilo93">KG</span></td>
                    <td width="4%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;&nbsp;</span></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="16%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;PESO VEHIC.:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Pesovehiculo" type="text" class="TextField2" id="Pesovehiculo" style="width:85%" onKeyPress="return isNumberKey(event);" onKeyUp="calcula('+');" value="<?=$Pesovehiculo?>" <?=$estate?>>
                      <span class="Estilo93">KG</span></span></td>
                    <td width="16%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;CAPACIDAD CARGA:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Capacidadcarga" type="text" class="TextField2" id="Capacidadcarga" style="width:85%"  onKeyPress="return isNumberKey(event);" onKeyUp="calcula('+');" value="<?=$Capacidadcarga?>" <?=$estate?>>
                      <span class="Estilo93">KG</span></span></td>
                    <td width="16%" align="right" bgcolor="#D5EBF9"><span class="Estilo93 Estilo96">&nbsp;PESO BRUTO:&nbsp;&nbsp;</span></td>
                    <td width="16%" bgcolor="#D5EBF9"><span class="Estilo93 Estilo96">
                      <input name="Pesobruto" type="text" class="TextField2" id="Pesobruto" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Pesobruto?>" readonly="readonly">
                      <span class="Estilo93">KG</span></span></td>
                    <td width="4%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;&nbsp;</span></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table></td>
            </tr>
          </table>
      </div>
      <div id="tab2" class="tab_content">
          <table width="98%" border="0">
            <tr>
              <td height="10">&nbsp;</td>
            </tr>
          </table>
          <table width="98%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="251" valign="top"><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="30" bgcolor="#FFFFFF"><span class="Estilo93 Estilo96">&nbsp;&nbsp;INFORMACION PROPIETARIO</span></td>
                </tr>
              </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#E4F3FC"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="10%" height="25" align="right" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">&nbsp;&nbsp;PROPIETARIO:&nbsp;&nbsp;</span></td>
                    <td width="20%" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">
                      <input name="Propietario" type="text" class="TextField2" id="Propietario" style="width:85%" onKeyPress="return isNumberKey(event);" onKeyUp="compUsuarios(event);" value="<?=$Propietario?>" <?=$estat?> autocomplete="off">
                      <a href="#" onClick="window.open('lista-marcas.php','','menubar=no,scrollbars=yes, width=500, height=500,');return false"></a></span></td>
                    <td width="5%" align="left" bgcolor="#E4F3FC">
                      <?
                    if($Mod == "si")
					{
					?><span class="Estilo93 Estilo96"><a href="#" onClick="window.open('lista-propietarios.php','','menubar=no,scrollbars=yes, width=500, height=500,');return false">
                      <img src="Images/buscar.gif" width="16" height="16" border="0">
                      </a></span>
                      <?
					}
					?>
                      </td>
                    <td width="59%" align="left" bgcolor="#E4F3FC"><div id = "DivDestino"></div>
                    </td>
                    </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#E4F3FC"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="10%" height="25" align="right" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">&nbsp;&nbsp;NOMBRE:&nbsp;&nbsp;</span></td>
                    <td width="20%" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">
                      <input name="NOMBREP" type="text" class="TextField2" id="NOMBREP" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Propietareo?>" readonly="readonly">
                    </span></td>
                    <td width="10%" align="right" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">&nbsp;&nbsp;APELLIDO:&nbsp;&nbsp;</span></td>
                    <td width="22%" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">
                      <input name="APELLIDOP" type="text" class="TextField2" id="Identificacion2" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Apellidop?>" readonly="readonly">
                    </span></td>
                    <td width="10%" align="right" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">&nbsp;&nbsp;CIUDAD:&nbsp;&nbsp;</span></td>
                    <td width="22%" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">
                      <input name="CIUDADP" type="text" class="TextField2" id="Identificacion3" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Nombreciu?>" readonly="readonly">
                    </span></td>
                    </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#E4F3FC"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="10%" height="25" align="right" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">&nbsp;&nbsp;TELEFONO 1:&nbsp;&nbsp;</span></td>
                    <td width="20%" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">
                      <input name="TELP1" type="text" class="TextField2" id="Identificacion4" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Telp1?>" readonly="readonly">
                    </span></td>
                    <td width="10%" align="right" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">&nbsp;&nbsp;TELEFONO 2:&nbsp;&nbsp;</span></td>
                    <td width="22%" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">
                      <input name="TELP2" type="text" class="TextField2" id="Identificacion5" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Telp2?>" readonly="readonly">
                    </span></td>
                    <td width="10%" align="right" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">&nbsp;&nbsp;CELULAR:&nbsp;&nbsp;</span></td>
                    <td width="22%" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">
                      <input name="CELP" type="text" class="TextField2" id="Identificacion6" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Celularp?>" readonly="readonly">
                    </span></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#E4F3FC"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="30" bgcolor="#FFFFFF"><span class="Estilo93 Estilo96">&nbsp;&nbsp;INFORMACION CONDUCTOR&nbsp;&nbsp;</span><span class="Estilo93 Estilo96">&nbsp;&nbsp;</span></td>
                    </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="10%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;CONDUCTOR:&nbsp;&nbsp;</span></td>
                    <td width="20%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Conductor" type="text" class="TextField2" id="Conductor" style="width:85%" onKeyPress="return isNumberKey(event);"  onKeyUp="compUsuariocs(event);" value="<?=$Conductor?>" <?=$estat?> autocomplete="off">
                      <a href="#" onClick="window.open('lista-marcas.php','','menubar=no,scrollbars=yes, width=500, height=500,');return false"></a></span></td>
                    <td width="5%" align="left" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96"><a href="#" onClick="window.open('lista-conductores.php','','menubar=no,scrollbars=yes, width=500, height=500,');return false">
                      <?
                    if($Mod == "si")
					{
					?>
                      <img src="Images/buscar.gif" width="16" height="16" border="0"></a><a href="#" onClick="window.open('lista-config-trailer.php','','menubar=no,scrollbars=yes, width=500, height=500,');return false">
                      <?
					}
					?>
                      </a></span><span class="Estilo93 Estilo96"><a href="#" onClick="window.open('lista-marcas.php','','menubar=no,scrollbars=yes, width=500, height=500,');return false"></a></span></td>
                    <td width="59%" align="left" bgcolor="#F2F9FD"><div id = "DivDestinoc"></div></td>
                    </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="10%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;NOMBRE:&nbsp;&nbsp;</span></td>
                    <td width="20%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="NOMBREC" type="text" class="TextField2" id="Identificacion8" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Condutor?>" readonly="readonly">
                    </span></td>
                    <td width="10%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;APELLIDO:&nbsp;&nbsp;</span></td>
                    <td width="22%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="APELLIDOC" type="text" class="TextField2" id="Identificacion9" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Apellidoc?>" readonly="readonly">
                    </span></td>
                    <td width="10%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;CIUDAD:&nbsp;&nbsp;</span></td>
                    <td width="22%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="CIUDADC" type="text" class="TextField2" id="Identificacion10" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Ciudadc?>" readonly="readonly">
                    </span></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="10%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;TELEFONO 1:&nbsp;&nbsp;</span></td>
                    <td width="20%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="TELC1" type="text" class="TextField2" id="Identificacion11" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Telc1?>" readonly="readonly">
                    </span></td>
                    <td width="10%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;TELEFONO 2:&nbsp;&nbsp;</span></td>
                    <td width="22%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="TELC2" type="text" class="TextField2" id="Identificacion12" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Telc2?>" readonly="readonly">
                    </span></td>
                    <td width="10%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;CELULAR:&nbsp;&nbsp;</span></td>
                    <td width="22%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="CELC" type="text" class="TextField2" id="Identificacion13" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Celularc?>" readonly="readonly">
                    </span></td>
                  </tr>
                </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                  </tr>
                </table></td>
            </tr>
          </table>
       
      </div>
      






<div id="tab5" class="tab_content">
    <table width="98%" border="0">
      <tr>
        <td height="10">&nbsp;</td>
      </tr>
    </table>
    <table width="98%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="240" valign="top"><br />
          <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
            </tr>
          </table>
          <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="20%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">APROBACION  VEHICULO:&nbsp;</span></td>
              <td width="30%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                <select name="Aprobacion" class="TextField2" id="Aprobacion" style="width:85%" <?=$estatr?>>
                  <option value="<?=$Aprobacion?>" selected>
                    <?=$Aprobacion?>
                    </option>
                  <option value="APROBADO">APROBADO</option>
                  <option value="NO APROBADO">NO APROBADO</option>
                  <option value="CANCELADO">CANCELADO</option>
                </select>
              </span></td>
              <td width="20%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;ESTADO MINISTERIO:&nbsp;&nbsp;</span></td>
              <td width="30%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                <select name="Ministerio" class="TextField2" id="Ministerio" style="width:85%" <?=$estatr?>>
                  <option value="<?=$Ministerio?>" selected>
                    <?=$Ministerio?>
                    </option>
                  <option value="REPORTADO">REPORTADO</option>
                  <option value="NO REPORTADO">NO REPORTADO</option>
                </select>
              </span></td>
            </tr>
          </table>
          <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
            </tr>
          </table>
          <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="20%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">FECHA APROBACION :&nbsp;&nbsp;</span></td>
              <td width="30%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                <input name="Fechaaprueba" type="text" class="TextField2" id="Fechaaprueba" style="width:85%" value="<?=$Fechaaprueba?>" readonly="readonly">
              </span></td>
              <td width="20%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">USUARIO APRUEBA:&nbsp;&nbsp;</span></td>
              <td width="30%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                <input name="Useraaprueba" type="text" class="TextField2" id="Useraaprueba" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Useraaprueba?>" readonly="readonly">
              </span></td>
            </tr>
          </table>
          <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
            </tr>
          </table>
          <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="20%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">VEHICULO PROPIO:&nbsp;&nbsp;</span></td>
              <td width="30%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                <select name="Propio" class="TextField2" id="Propio" style="width:85%" <?=$estatr?>>
                  <option value="<?=$Propio?>" selected>
                    <?=$Propio?>
                    </option>
                  <option value="SI">SI</option>
                  <option value="NO">NO</option>
                </select>
              </span></td>
              <td width="20%" align="right" bgcolor="#F2F9FD">&nbsp;</td>
              <td width="30%" bgcolor="#F2F9FD">&nbsp;</td>
            </tr>
          </table>
          <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
            </tr>
          </table>
          <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="20%" height="25" align="right" valign="top" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96"><br>
                COMENTARIOS ADICIONALES:&nbsp;&nbsp;</span></td>
              <td width="80%" bgcolor="#F2F9FD"><p class="Estilo93 Estilo96">
                <br>
                <textarea name="Comentarios" rows="6" class="TextField2" id="Comentarios" style="width:95%" onKeyUp="form4.Comentarios.value=form4.Comentarios.value.toUpperCase();"><?=$Comentarios?></textarea>
                </p>
                <p class="Estilo93 Estilo96"><br>
                </p></td>
            </tr>
          </table>
          <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
            </tr>
          </table></td>
      </tr>
    </table>
</div>




        <div id="tab3" class="tab_content">
            <table width="98%" border="0">
              <tr>
                <td height="10"><span class="Estilo93 Estilo96">
                  <input name="Empresaafilia" type="hidden" id="tab6" value="<?=$Empresaafilia?>" />
                  <input name="picplaca" type="hidden" id="picplaca" value="<?=$Placa?>">
                </span></td>
              </tr>
            </table>
            <table width="98%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="283" valign="top"><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="30" bgcolor="#FFFFFF"><span class="Estilo93 Estilo96">&nbsp;&nbsp;INFORMACION DOCUMENTOS&nbsp;&nbsp;</span><span class="Estilo93 Estilo96">&nbsp;&nbsp;</span></td>
                  </tr>
                </table>
                  <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="5" bgcolor="#E4F3FC"><img src="Images/linea.jpg" width="100%" height="1"></td>
                    </tr>
                  </table>
                  <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="10%" height="25" align="right" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">&nbsp;&nbsp;S.O.A.T:&nbsp;&nbsp;</span></td>
                      <td width="14%" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">
                        <input name="Soat" type="text" class="TextField2" id="Identificacion25" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Soat?>">
                      </span></td>
                      <td width="10%" align="right" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">&nbsp;&nbsp;VENCIMIENTO:&nbsp;&nbsp;</span></td>
                      <td width="14%" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96"><div class="example-container"> <input name="Vencesoat" type="text" class="TextField2" id="Vencesoat" value="<?=$Vencesoat?>" size="20" /><pre></pre></div></span></td>
                      <td width="10%" align="right" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">&nbsp;&nbsp;ASEGURADORA:&nbsp;&nbsp;</span></td>
                      <td width="14%" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">
                        <select name="Aseguradora" class="TextField2" id="Aseguradora" style="width:85%" <?=$estatr?>>
                          <option value="<?=$Aseguradora?>" selected>
                            <?=$Aseguradorat?>
                            </option>
<?
$query0081x			=	"SELECT* FROM Aseguradoras order by Nombre" ;
$result0081x		=	mysql_query($query0081x, $id);
							
While($row0081x	=	mysql_fetch_array($result0081x))
{
$Nombreaseg		= 	$row0081x["Nombre"];
$Idasegura		= 	$row0081x["Id"];
?>
                          <option value="<?=$Idasegura?>"><?=$Nombreaseg?></option>
<?
}
?>
                        </select>
                      </span></td>
                      <td width="10%" align="right" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">&nbsp;&nbsp;RUNT:&nbsp;&nbsp;</span></td>
                      <td width="18%" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">
                        <input name="Runt" type="text" class="TextField2" id="Identificacion29" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Runt?>">
                      </span></td>
                    </tr>
                  </table>
                  <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="5" bgcolor="#E4F3FC"><img src="Images/linea.jpg" width="100%" height="1"></td>
                    </tr>
                  </table>
                  <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="10%" height="25" align="right" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">&nbsp;TARJ. EMPRES.:&nbsp;&nbsp;</span></td>
                      <td width="14%" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">
                        <input name="Tarjempresa" type="text" class="TextField2" id="Identificacion30" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Tarjempresa?>">
                      </span></td>
                      <td width="10%" align="right" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">&nbsp;&nbsp;VENCIMIENTO:&nbsp;&nbsp;</span></td>
                      <td width="14%" bgcolor="#E4F3FC"><div class="example-container">
                        <input name="Vencetarjeta" type="text" class="TextField2" id="Vencetarjeta" value="<?=$Vencetarjeta?>" size="20" />
                        <pre></pre>
                      </div></td>
                      <td width="10%" align="right" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">&nbsp;&nbsp;INSPEC. TEC:&nbsp;&nbsp;</span></td>
                      <td width="14%" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">
                        <input name="Insptecnico" type="text" class="TextField2" id="Identificacion32" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Insptecnico?>">
                      </span></td>
                      <td width="10%" align="right" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">&nbsp;&nbsp;VENCIMIENTO:&nbsp;&nbsp;</span></td>
                      <td width="18%" bgcolor="#E4F3FC"><div class="example-container">
                        <input name="Vencemientoinsp" type="text" class="TextField2" id="Vencemientoinsp" value="<?=$Vencemientoinsp?>" size="20" />
                        <pre></pre>
                      </div></td>
                    </tr>
                  </table>
                  <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="5" bgcolor="#E4F3FC"><img src="Images/linea.jpg" width="100%" height="1"></td>
                    </tr>
                  </table>
                  <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="10%" height="25" align="right" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">&nbsp;&nbsp;RESP. CIVIL:&nbsp;&nbsp;</span></td>
                      <td width="14%" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">
                        <input name="Respcivil" type="text" class="TextField2" id="Identificacion34" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Respcivil?>">
                        <a href="#" onClick="window.open('lista-empresas-afilia.php','','menubar=no,scrollbars=yes, width=500, height=500,');return false"></a></span></td>
                      <td width="10%" align="right" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">&nbsp;&nbsp;VENCIMIENTO:&nbsp;&nbsp;</span></td>
                      <td width="14%" bgcolor="#E4F3FC"><div class="example-container"><input name="Venceresp" type="text" class="TextField2" id="Venceresp" value="<?=$Venceresp?>" size="20" />
                        <pre></pre>
                      </div></td>
                      <td width="10%" align="right" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">&nbsp;&nbsp;SEGURIDAD:&nbsp;&nbsp;</span></td>
                      <td width="14%" bgcolor="#E4F3FC"><span class="Estilo93 Estilo96">
                        <select name="Asegurado" class="TextField2" id="Asegurado" style="width:85%" <?=$estatr?>>
                          <option value="<?=$Asegurado?>" selected>
                            <?=$Aseguradorag?>
                            </option>
                          <?
$query0081x			=	"SELECT* FROM Aseguradoras order by Nombre" ;
$result0081x		=	mysql_query($query0081x, $id);
							
While($row0081x	=	mysql_fetch_array($result0081x))
{
$Nombreaseg		= 	$row0081x["Nombre"];
$Idasegura		= 	$row0081x["Id"];
?>
                          <option value="<?=$Idasegura?>">
                            <?=$Nombreaseg?>
                            </option>
                          <?
}
?>
                        </select>
                      </span></td>
                      <td width="10%" align="right" bgcolor="#E4F3FC">&nbsp;</td>
                      <td width="18%" bgcolor="#E4F3FC">&nbsp;</td>
                    </tr>
                  </table>
                  <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="5" bgcolor="#E4F3FC"><img src="Images/linea.jpg" width="100%" height="1"></td>
                    </tr>
                  </table>
                  <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="30" bgcolor="#FFFFFF"><span class="Estilo93 Estilo96">&nbsp;&nbsp;INFORMACION ADICIONAL:&nbsp;&nbsp;</span><span class="Estilo93 Estilo96">&nbsp;&nbsp;</span></td>
                    </tr>
                  </table>
                  <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                    </tr>
                  </table>
                  <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="10%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">WEB  SATELITAL:&nbsp;</span></td>
                      <td width="14%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                        <input name="Satelital" type="text" class="TextField2" id="Satelital" style="width:85%" value="<?=$Satelital?>">
                      </span></td>
                      <td width="10%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;USUARIO SATEL:&nbsp;&nbsp;</span></td>
                      <td width="14%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                        <input name="Usuario" type="text" class="TextField2" id="Usuario" style="width:85%" value="<?=$Usuario?>">
                      </span></td>
                      <td width="10%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;CLAVE. SATEL:&nbsp;&nbsp;</span></td>
                      <td width="14%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                        <input name="Pass" type="text" class="TextField2" id="Identificacion14" style="width:85%" value="<?=$Pass?>">
                      </span></td>
                      <td width="10%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;EMPRESA. SATEL:&nbsp;&nbsp;</span></td>
                      <td width="18%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                        <input name="Empresate" type="text" class="TextField2" id="Empresate" value="<?=$Empresate?>" size="30">
                      </span></td>
                    </tr>
                  </table>
                  <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                    </tr>
                  </table>
                  <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="10%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">EMP. AFILIACION:&nbsp;&nbsp;</span></td>
                      <td width="14%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                        <input name="Idempreafilia" type="text" class="TextField2" id="Idempreafilia" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Afiliaca?>" readonly="readonly">
                        <a href="#" onClick="window.open('lista-empresas-afilia.php','','menubar=no,scrollbars=yes, width=500, height=500,');return false">
                        <?
                    if($Mod == "si")
					{
					?>
                        <img src="Images/buscar.gif" width="16" height="16" border="0"></a><a href="#" onClick="window.open('lista-config-trailer.php','','menubar=no,scrollbars=yes, width=500, height=500,');return false">
                        <?
					}
					?>
                        </a></span></td>
                      <td width="10%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">FOTO VEHICULO:&nbsp;&nbsp;</span></td>
                      <td width="14%" bgcolor="#F2F9FD"><input name="file" type="file" class="TextField2" id="file" style="width:85%"></td>
                      <td width="10%" align="left" bgcolor="#F2F9FD"><img src="vehiculos/<?=$Foto?>" width="40" height="40"></td>
                      <td width="14%" bgcolor="#F2F9FD">&nbsp;</td>
                      <td width="10%" bgcolor="#F2F9FD">&nbsp;</td>
                      <td width="18%" bgcolor="#F2F9FD">&nbsp;</td>
                    </tr>
                  </table>
                  <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                    </tr>
                  </table></td>
              </tr>
            </table>
        </div>
        
      <div id="tab4" class="tab_content">
          <table width="98%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="357" valign="top"><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="30" bgcolor="#FFFFFF"><span class="Estilo93 Estilo96">&nbsp;&nbsp;REFERENCIAS EMPRESARIALES
                    
                  </span></td>
                </tr>
              </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                    </tr>
                  </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="20%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">EMPRESA:&nbsp;</span></td>
                    <td width="30%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Ref1" type="text" class="TextField2" id="Ref1" style="width:85%" value="<?=$Ref1?>">
                      </span></td>
                    <td width="20%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;TELEFONO:&nbsp;&nbsp;</span></td>
                    <td width="30%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Telref1" type="text" class="TextField2" id="Telref1" style="width:85%" value="<?=$Telref1?>">
                      </span></td>
                    </tr>
                  </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                    </tr>
                  </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="20%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">CONFIRMADO POR:&nbsp;&nbsp;</span></td>
                    <td width="30%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <select name="Confref1" class="TextField2" id="Confref1" style="width:85%" <?=$estatr?>>
                        <option value="<?=$Confref1?>" selected>
                          <?=$Confref1?>
                          </option>
                        <?
$query0081xx		=	"SELECT* FROM Usuarios order by Nombrefull" ;
$result0081xx		=	mysql_query($query0081xx, $id);
							
While($row0081xx	=	mysql_fetch_array($result0081xx))
{
$Namer				= 	$row0081xx["Nombrefull"];
?>
                        <option value="<?=$Namer?>">
                          <?=$Namer?>
                          </option>
                        <?
}
?>
                      </select>
                    </span></td>
                    <td width="20%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">CIUDAD:&nbsp;&nbsp;</span></td>
                    <td width="30%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Ciudref1" type="text" class="TextField2" id="Ciudref1" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Ciudref1?>">
                      </span></td>
                    </tr>
                  </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                    </tr>
                  </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="20%" height="25" align="right" valign="top" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">COMENTARIOS:&nbsp;&nbsp;</span></td>
                    <td width="80%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <textarea name="Comref1" rows="3" class="TextField2" id="Comref1" style="width:95%" onKeyUp="form4.Comentarios.value=form4.Comentarios.value.toUpperCase();"><?=$Comref1?></textarea>
                      </span></td>
                    </tr>
                  </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                    </tr>
                  </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="20%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">EMPRESA:&nbsp;</span></td>
                    <td width="30%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Ref2" type="text" class="TextField2" id="Ref2" style="width:85%" value="<?=$Ref2?>">
                      </span></td>
                    <td width="20%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;TELEFONO:&nbsp;&nbsp;</span></td>
                    <td width="30%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Telref2" type="text" class="TextField2" id="Telref2" style="width:85%" value="<?=$Telref2?>">
                      </span></td>
                    </tr>
                  </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                    </tr>
                  </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="20%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">CONFIRMADO POR:&nbsp;&nbsp;</span></td>
                    <td width="30%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <select name="Confref2" class="TextField2" id="Confref2" style="width:85%" <?=$estatr?>>
                        <option value="<?=$Confref2?>" selected>
                          <?=$Confref2?>
                          </option>
                        <?
$query0081xx2			=	"SELECT* FROM Usuarios order by Nombrefull" ;
$result0081xx2		=	mysql_query($query0081xx2, $id);
							
While($row0081xx2	=	mysql_fetch_array($result0081xx2))
{
$Namer2		= 	$row0081xx2["Nombrefull"];
?>
                        <option value="<?=$Namer2?>">
                          <?=$Namer2?>
                          </option>
                        <?
}
?>
                      </select>
                    </span></td>
                    <td width="20%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">CIUDAD:&nbsp;&nbsp;</span></td>
                    <td width="30%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Ciudref2" type="text" class="TextField2" id="Ciudref2" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Ciudref2?>">
                      </span></td>
                    </tr>
                  </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                    </tr>
                  </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="20%" height="25" align="right" valign="top" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">COMENTARIOS:&nbsp;&nbsp;</span></td>
                    <td width="80%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <textarea name="Comref2" rows="3" class="TextField2" id="Comref2" style="width:95%" onKeyUp="form4.Comentarios.value=form4.Comentarios.value.toUpperCase();"><?=$Comref2?></textarea>
                      </span></td>
                    </tr>
                  </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                    </tr>
                  </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="20%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">EMPRESA:&nbsp;</span></td>
                    <td width="30%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Ref3" type="text" class="TextField2" id="Ref3" style="width:85%" value="<?=$Ref3?>">
                      </span></td>
                    <td width="20%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">&nbsp;&nbsp;TELEFONO:&nbsp;&nbsp;</span></td>
                    <td width="30%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Telref3" type="text" class="TextField2" id="Telref3" style="width:85%" value="<?=$Telref3?>">
                      </span></td>
                    </tr>
                  </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                    </tr>
                  </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="20%" height="25" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">CONFIRMADO POR:&nbsp;&nbsp;</span></td>
                    <td width="30%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <select name="Confref3" class="TextField2" id="Confref3" style="width:85%" <?=$estatr?>>
                        <option value="<?=$Confref3?>" selected>
                          <?=$Confref3?>
                          </option>
                        <?
$query0081xx3			=	"SELECT* FROM Usuarios order by Nombrefull" ;
$result0081xx3		=	mysql_query($query0081xx3, $id);
							
While($row0081xx3	=	mysql_fetch_array($result0081xx3))
{
$Namer3		= 	$row0081xx3["Nombrefull"];
?>
                        <option value="<?=$Namer3?>">
                          <?=$Namer3?>
                          </option>
                        <?
}
?>
                      </select>
                    </span></td>
                    <td width="20%" align="right" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">CIUDAD:&nbsp;&nbsp;</span></td>
                    <td width="30%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <input name="Ciudref3" type="text" class="TextField2" id="Ciudref3" style="width:85%" onKeyPress="return isNumberKey(event);" value="<?=$Ciudref3?>">
                      </span></td>
                    </tr>
                  </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                    </tr>
                  </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="20%" height="25" align="right" valign="top" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">COMENTARIOS:&nbsp;&nbsp;</span></td>
                    <td width="80%" bgcolor="#F2F9FD"><span class="Estilo93 Estilo96">
                      <textarea name="Comref3" rows="3" class="TextField2" id="Comref3" style="width:95%" onKeyUp="form4.Comentarios.value=form4.Comentarios.value.toUpperCase();"><?=$Comref3?></textarea>
                      </span></td>
                    </tr>
                  </table>
                <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" bgcolor="#F2F9FD"><img src="Images/linea.jpg" width="100%" height="1"></td>
                    </tr>
                  </table></td>
              </tr>
          </table>
      </div>
      
    </div>
</div>


<div style="clear: both; display: block; padding: 10px 0; text-align:center;"></div>
<table width="89%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="5" align="right"><?
                    if($Mod == "si")
					{
					?>
      <input name="button" type="submit" class="TextField21" id="btsubmit" value="GUARDAR INFORMACION">
      <?
					}
					?></td>
  </tr>
</table>
</form>
    
    </td>
  </tr>
</table>


</body>
</html>