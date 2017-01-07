<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

include("conexion.php");
date_default_timezone_set('America/Bogota');
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$Usuario		= 		$_SESSION['Empresa'];

	
$Idviaje 			=	$_REQUEST['Idviaje'];
$Manifiesto			=	$_REQUEST['man'];
$conduct			=	$_REQUEST['cond'];
$man				=	$_REQUEST['man'];




$fechadehoy			=	date("Y-m-d");

//echo $fechadehoy;

	$query008R		=	"SELECT* FROM Regalosact" ;
	$result008R		=	mysql_query($query008R, $id);
	
	While($row008R	=	mysql_fetch_array($result008R))
	{
	$Estado000R		= $row008R["Estado"];
	$Nombre000R		= $row008R["Nombre"];
	$Tipo000R		= $row008R["Tipo"];
	}


if($Estado000R ==  1)
{
	$opera	=	'$Totalofcr == 0 || $Totalofcre > 0';
}
elseif($Estado000R == 0)
{
	$opera	=	'$Totalofcr == 0 && $Totalofcre > 0';
}


	$query0080		=	"SELECT* FROM Manifiestos where Nromanifiesto = '$man'" ;
	$result0080		=	mysql_query($query0080, $id);
	
	While($row0080	=	mysql_fetch_array($result0080))
	{
	$Conductor				= $row0080["Conductor"];
	$Placa					= $row0080["Placa"];
	$Empresa				= $row0080["Empresa"];
	}
	

	$query0085		=	"SELECT* FROM Viajes where Id = '$Idviaje'" ;
	$result0085		=	mysql_query($query0085, $id);
	
	While($row0085	=	mysql_fetch_array($result0085))
	{
	$Planviaje				= $row0085["Planviaje"];
	}


	$query0080x		=	"SELECT* FROM Conductores where  Cedula  = '$Conductor'" ;
	$result0080x	=	mysql_query($query0080x, $id);
	
	While($row0080x	=	mysql_fetch_array($result0080x))
	{
	$Nombrexc		= $row0080x["Nombrefull"];
	}
	
	

$queryofc		=	"SELECT COUNT(*) as Totalof FROM Contratoguiasc where Nit = '$conduct' and Placa = '$Placa'" ;
$resultofc		=	mysql_query($queryofc, $id);
							
While($rowofc	=	mysql_fetch_array($resultofc))
{
$Totalofc		=	$rowofc["Totalof"];
}




$queryof	=	"SELECT COUNT(*) as Totalof FROM Remisiones where Manifiesto = '$Manifiesto'" ;
$resultof	=	mysql_query($queryof, $id);
							
While($rowof=	mysql_fetch_array($resultof))
{
$Totalof	=	$rowof["Totalof"];
}


$queryov	=	"SELECT COUNT(*) as Totalof FROM Viajes where Id = '$Idviaje' and Cargado = 1" ;
$resultov	=	mysql_query($queryov, $id);
							
While($rowov=	mysql_fetch_array($resultov))
{
$Totalov	=	$rowov["Totalof"];
}


$queryofcr		=	"SELECT COUNT(*) as Totalof FROM  Regalos where Nit = '$conduct'" ;
$resultofcr		=	mysql_query($queryofcr, $id);
							
While($rowofcr	=	mysql_fetch_array($resultofcr))
{
$Totalofcr		=	$rowofcr["Totalof"];
}


$queryofcre		=	"SELECT COUNT(*) as Totalof FROM  Regalosesp where Nit = '$conduct'" ;
$resultofcre	=	mysql_query($queryofcre, $id);
							
While($rowofcre	=	mysql_fetch_array($resultofcre))
{
$Totalofcre		=	$rowofcre["Totalof"];
}


	$queryremi		=	"SELECT* FROM Remisiones where Manifiesto = '$man'" ;
	$resultremi		=	mysql_query($queryremi, $id);
	
	While($rowremi	=	mysql_fetch_array($resultremi))
	{
	$Empresare				= $rowremi["Empresa"];

		$queryofgen		=	"SELECT COUNT(*) as Totalof FROM Empresas where Nit = '$Empresare' and Arp = 'SI' ";
		$resultofgen	=	mysql_query($queryofgen, $id);
									
		While($rowofgen	=	mysql_fetch_array($resultofgen))
		{
		$Totalofgen		=	$rowofgen["Totalof"];
		}
		
		
		$queryofgenx		=	"SELECT COUNT(*) as Totalof FROM Empresas where Nit = '$Empresare' and Remesa = 'SI' ";
		$resultofgenx		=	mysql_query($queryofgenx, $id);
									
		While($rowofgexn	=	mysql_fetch_array($resultofgenx))
		{
		$Totalofgenx		=	$rowofgexn["Totalof"];
		}
		
	$Totalofgenx2		=	$Totalofgenx2+$Totalofgenx;	
	$Totalofgen2		=	$Totalofgen2+$Totalofgen;	
	}



//echo $Totalofgen2;

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
}
body {
	background-color: #F8F8F8;
	font-family: Arial, Helvetica, sans-serif;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo93 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.listado1 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #666;
}
.textos1 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #009;
	text-align: right;
}
.TextField4 {background-color: #000033;
color: #fff;
font-size: 9pt;
font-family: arial;
border : 1px solid #000;
text-align:center;
}
body{font: 90% Arial, Helvetica, sans-serif;}
			#ui-datepicker-div{ font-size: 80%; }
			.ui-timepicker-div .ui-widget-header{ margin-bottom: 8px; }
			.ui-timepicker-div dl{ text-align: left; }
			.ui-timepicker-div dl dt{ height: 25px; }
			.ui-timepicker-div dl dd{ margin: -25px 0 10px 65px; }
			.ui-timepicker-div td { font-size: 90%; }
pre {
	padding: 0;
	margin: 0;
}
pre code {
	margin: 0 0 0 0px;  /*--Left Margin--*/
	padding: 0px 0;
	display: block;
}

.TextField2 {background-color: #DADADA;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.alert {
	font-size: 11px;
	font-weight: bold;
	color: #F00;
}
.Estilo105 {	color: #990000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
}
.Estilo931 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
}
.TextField3 {background-color: #D7D7D7;
color: #000;
font-size: 8pt;
font-family: arial;
border : 1px solid #000;
}
.TextField6 {background-color: #D7D7D7;
color: #000;
font-size: 10pt;
font-family: arial;
border : 1px solid #000;
}
.TextField7 {background-color: #900;
color: #FFF;
font-size: 10pt;
font-family: arial;
border : 1px solid #000;
}
-->
</style>

<script LANGUAGE="JavaScript">

function validar(formulario) 
{
  if (formulario.cita[0].checked == false && formulario.cita[1].checked == false) 
  {
    alert("Por favor seleccione si tiene cita de descargue");
    return (false);
  }
  
  if (formulario.cita[0].checked == true && formulario.cita[1].checked == false) 
  {
	  if (formulario.Citas.value == "") 
	  {
		alert("Debe ingresar al menos una cita");
		return (false);
	  }
  }
  
  if (formulario.cita[0].checked == false && formulario.cita[1].checked == true) 
  {
	  if (formulario.Compromiso.value == "") 
	  {
		alert("Debe ingresar informacion del Compromiso");
		return (false);
	  }
  }


  if (formulario.sellos[0].checked == false && formulario.sellos[1].checked == false) 
  {
    alert("Por favor seleccione si tiene sellos");
    return (false);
  }
  
  if (formulario.sellos[0].checked == true && formulario.sellos[1].checked == false) 
  {
	  if (formulario.Sellos.value == "") 
	  {
		alert("Debe ingresar al menos un sello");
		return (false);
	  }
  }
  

  if (formulario.Transitonoc[0].checked == false && formulario.Transitonoc[1].checked == false) 
  {
    alert("Por favor seleccione si realiza transito nocturno");
    return (false);
  }
  
  if (formulario.Transitonoc[0].checked == false  || formulario.Transitonoc[1].checked == true) 
  {
	  if (formulario.Horamax.value == ""  || formulario.Horaretor.value == '') 
	  {
		alert("Por favor seleccione la hora de salida de transito y de retorno");
		return (false);
	  }
  }




  if (formulario.Pito[0].checked == false && formulario.Pito[1].checked == false) 
  {
    alert("Por favor seleccione si tiene pito de reversa");
    return (false);
  }
  

  
  
  if (formulario.Entregas[0].checked == false && formulario.Entregas[1].checked == false) 
  {
    alert("Por favor seleccione si tiene entregas en ruta");
    return (false);
  }
  


  if (formulario.Santo[0].checked == false && formulario.Santo[1].checked == false) 
  {
    alert("Por favor seleccione si tiene santo y seña");
    return (false);
  }
  
  if (formulario.Santo[0].checked == true  || formulario.Santo[1].checked == false) 
  {
	  if (formulario.Santoysena.value == "" ) 
	  {
		alert("Por favor ingrese el santo y seña");
		return (false);
	  }
  }
  
<?
if($Totalofgenx2 > 0)
{
?>
	if (formulario.Remesa.value == "") 
	  {
		alert("Debe ingresar al menos una Remesa");
		return (false);
	  }
<?
}
?>
  

  if (formulario.Contenedor[0].checked == false && formulario.Contenedor[1].checked == false) 
  {
    alert("Por favor seleccione si lleva Contenedor");
    return (false);
  }
  
  
  if (formulario.Contenedor[0].checked == true && formulario.Contenedor[1].checked == false) 
  {
	  if (formulario.Conten.value == "") 
	  {
		alert("Debe ingresar al menos un  Contenedor");
		return (false);
	  }
  }
  
  

  
	  if (formulario.Contenedor[0].checked == true  || formulario.Contenedor[1].checked == false) 
	  {
		  if (formulario.Lugar.value == ""  || formulario.Fechadevol.value == '') 
		  {
			alert("Por favor ingrese lugar y fecha de devolución");
			return (false);
		  }
		  
		  if (formulario.Nrocont.value == "" ) 
		  {
			alert("Por favor ingrese Nro de contenedor");
			return (false);
		  }
		  
		  if (formulario.Nrocont.value ==  formulario.Nrocont2.value ) 
		  {
			alert("Ha ingresado dos contenedores con el mismo numero");
			return (false);
		  }
		  
		  
		  
						fecha1= formulario.Fechadevol.value; 
						fecha2= '<?=$fechadehoy?>';
						
						f1=new Date(fecha1); 
						f2=new Date(fecha2); 
						
						var undia = f1 - f2;
						
						  if ((undia <= 0  || (undia >= 0 && undia <= 172800000 )) && formulario.Geren.checked == false)
						  {
							alert("Fecha de entrega muy proxima - Por favor solicitar autorización a Generencia");
							return (false);
						  }
						  
	  }
  

<?
if($Totalofgen2 > 0)
{
?>
  if (formulario.Fechaarp.value == '') 
  {
    alert("Por favor seleccione una fecha de vencimiento");
    return (false);
  }
<?
}
?>

  if (formulario.Acompanado[0].checked == false && formulario.Acompanado[1].checked == false) 
  {
    alert("Por favor seleccione si va acompañado");
    return (false);
  }
  
  if (formulario.Acompanado[0].checked == true  || formulario.Acompanado[1].checked == false) 
  {
	  if (formulario.Nombrecomp.value == ""  || formulario.Celacomp.value == '') 
	  {
		alert("Por favor ingrese nombre y celular del acompañante");
		return (false);
	  }
  }


  if (formulario.Celularadc[0].checked == false && formulario.Celularadc[1].checked == false) 
  {
    alert("Por favor seleccione si tiene celular adicional");
    return (false);
  }
  
  if (formulario.Celularadc[0].checked == true  || formulario.Celularadc[1].checked == false) 
  {
	  if (formulario.Nrocelu.value == "" ) 
	  {
		alert("Por favor ingrese el celular adicional");
		return (false);
	  }
  }
  
  

  if (formulario.equipo[0].checked == false && formulario.equipo[1].checked == false) 
  {
    alert("Por favor seleccione si lleva equipos");
    return (false);
  }
  
  if (formulario.equipo[0].checked == true  || formulario.equipo[1].checked == false) 
  {
	  if (formulario.Userequipo.value == "" ) 
	  {
		alert("Por favor ingrese quien entrego equipos");
		return (false);
	  }
  }
  


  if (formulario.Cargado[0].checked == false && formulario.Cargado[1].checked == false) 
  {
    alert("Por favor seleccione si sale cargado");
    return (false);
  }
  
  if (formulario.Cargado[0].checked == true  || formulario.Cargado[1].checked == false) 
  {
	  if (formulario.Fechacar.value == "" ) 
	  {
		alert("Por favor seleccione la fecha y hora para salir a transito");
		return (false);
	  }
  }



  if (formulario.Nocargado[0].checked == false && formulario.Nocargado[1].checked == false) 
  {
    alert("Por favor seleccione si no sale cargado");
    return (false);
  }
  
  if (formulario.Nocargado[0].checked == true  && formulario.Nocargado[1].checked == false) 
  {
	  if (formulario.Lugarcar.value == ""  || formulario.Fechaporcarg.value == '') 
	  {
		alert("Por favor ingrese lugar y fecha/hora para cargar");
		return (false);
	  }
  }
  
  
  if (formulario.Revisado[0].checked == false && formulario.Revisado[1].checked == false) 
  {
    alert("Por favor seleccione si fue revisado");
    return (false);
  }
  
  if (formulario.Revisado[0].checked == true  && formulario.Revisado[1].checked == false) 
  {
	  if (formulario.Revipor.value == "" ) 
	  {
		alert("Por favor seleccione el usuario que reviso");
		return (false);
	  }
	  
	  if (formulario.Nroplan.value == "" ) 
	  {
		alert("Por favor ingrese el Nro de planilla");
		return (false);
	  }
	  
  }
  
  if (formulario.Revisado[0].checked == false  && formulario.Revisado[1].checked == true) 
  {
	  if (formulario.Autorizad.value == "" ) 
	  {
		alert("Por favor seleccione el usuario que autorizo");
		return (false);
	  }
  }
  
  
  
  
  if (formulario.Carga[0].checked == false && formulario.Carga[1].checked == false) 
  {
    alert("Por favor seleccione si lleva carga de otra empresa");
    return (false);
  }
  
  if (formulario.Carga[0].checked == true  && formulario.Carga[1].checked == false) 
  {
	  if (formulario.Empresaotra.value == "" ) 
	  {
		alert("Por favor ingrese nombre de la empresa");
		return (false);
	  }
	  
	  if (formulario.Tipomer.value == "" ) 
	  {
		alert("Por ingrese el tipo de mercancia");
		return (false);
	  }
	  
  }
  
  
  
<?
if($Totalov > 0)
{
?>

  if (formulario.remesa[0].checked == false && formulario.remesa[1].checked == false) 
  {
    alert("Por favor seleccione si tiene mas remesas");
    return (false);
  }
  
  if (formulario.remesa[0].checked == true && formulario.remesa[1].checked == false) 
  {
	  if (formulario.Cantrem.value == formulario.Nuevarem.value) 
	  {
		alert("Debe ingresar al menos otra remesa");
		return (false);
	  }
  }
<?
}
?>


  if (formulario.guias[0].checked == false && formulario.guias[1].checked == false) 
  {
    alert("Por favor seleccione si lleva Guias");
    return (false);
  }
  
  if (formulario.guias[0].checked == true && formulario.guias[1].checked == false) 
  {
	  if (formulario.guias.value == "") 
	  {
		alert("Debe ingresar al menos una Guia");
		return (false);
	  }
  }




<?
if($Totalofcr == 0 && $Totalofcre > 0)
{
?>

  if (formulario.regalo[0].checked == false && formulario.regalo[1].checked == false) 
  {
    alert("Por favor seleccione si entrego Regalo");
    return (false);
  }
<?
}
?>




<?
if($Totalofc == 0)
{
?>

  if (formulario.contrato[0].checked == false && formulario.contrato[1].checked == false) 
  {
    alert("Por favor seleccione si imprimira Contrato");
    return (false);
  }

<?
}
?>
  

							document.getElementById("button2").value = "POR FAVOR ESPERE...";
							document.getElementById("button2").disabled = true;

  return (true); 
  

}




</script>


<script language="JavaScript">
function Abrir_ventana (pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, width=600, height=500, top=85, left=300";
window.open(pagina,"",opciones);
}
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
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>



<link rel="stylesheet" media="all" type="text/css" href="css/ui-lightness/jquery-ui-1.8.6.custom.css" />
<script type="text/javascript"src="js/jquery.min.js"></script>

		<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.6.custom.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-timepicker-addon.js"></script>


		<script type="text/javascript">
			
			
			$(function(){
				
		
				$('.example-container > pre').each(function(i){
					eval($(this).text());
					$('#Fechadevol').datepicker();
				});
				
				$('.example-container > pre').each(function(i){
					eval($(this).text());
					$('#Fechadevol2').datepicker();
				});
				
				$('.example-container > pre').each(function(i){
					eval($(this).text());
					$('#Fechaarp').datepicker();
				});

				
			});
			
			
		</script>
        
        
		<script type="text/javascript">
			
			$(function(){
				
		
				$('.example-container > pre').each(function(i){
					eval($(this).text());
					$('#Fechacar').datetimepicker();
				});
				
				$('.example-container > pre').each(function(i){
					eval($(this).text());
					$('#Fechaporcarg').datetimepicker();
				});
				

				
			});
			
		</script>
        
        
<script type="text/javascript">
$(function() {
    $('#Horamax').timepicker({
    	duration: '',
        showTime: true,
        constrainInput: false,
        stepMinutes: 1,
        stepHours: 1,
        altTimeField: '',
        time24h: true
     });
	
    $('#Horaretor').timepicker({
    	duration: '',
        showTime: true,
        constrainInput: false,
        stepMinutes: 1,
        stepHours: 1,
        altTimeField: '',
        time24h: true
     });
	
});
</script>

        

<script type="text/javascript"> 
<!-- 
function Reveal (it, box) { 
var vis = (box.checked) ? "block" : "none"; 
document.getElementById(it).style.display = vis;
} 

function Hide (it, box) { 
var vis = (box.checked) ? "none" : "none"; 
document.getElementById(it).style.display = vis;
} 
//--> 
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




<script language="JavaScript">
function Abrir_ventana (pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, width=800, height=600, top=85, left=300";
window.open(pagina,"",opciones);
}
</script>


<script type="text/javascript">
 function call()
 {
 if(document.getElementById("envio2").disabled == true) 
 document.getElementById("envio2").disabled = false;
 else
 document.getElementById("envio2").disabled = true;
 }
 </script>
 
</head>

<body>
<div class="example-container">
  <pre></pre>
</div>
<table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="right"><hr></td>
  </tr>
</table>
<table width="100%" height="90%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="73%" align="right" valign="top"><form name="form1" method="post" action="asignacionruta4.php" style="margin:0" onSubmit = "return validar(this);">

      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="20%" height="30" class="Estilo93">CITA DE DESCARGUE
            <input name="Manifiesto" type="hidden" id="Manifiesto" value="<?=$Manifiesto?>">            <input name="Idviaje" type="hidden" id="Idviaje" value="<?=$Idviaje?>">
            <input type="hidden" name="Citas" id="Citas">
            <input name="Placa2" type="hidden" id="Placa2" value="<?=$Placa?>"></td>
          <td width="15%" height="20" align="left" valign="bottom">
            <span class="Estilo93">SI</span>
            <input type="radio" name="cita" value="1" onClick="Hide('div2', this); Reveal('div1', this)"> 
            <span class="Estilo93">NO</span>
            <input type="radio" name="cita" value="2" onClick="Hide('div1', this); Reveal('div2', this)">
            </td>
          <td width="65%" height="5">
          
<div class="row" id="div1" style="display:none">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="5" class="Estilo93"><input name="button3" type="button" class="TextField4" id="button2" value="Agregar &nbsp;&nbsp;Citas" onClick="window.open('agregar-citas.php?Man=<?=$Manifiesto?>&Idviaje=<?=$Idviaje?>&Plan=<?=$Planviaje?>','','menubar=no,scrollbars=yes, width=500, height=450');return false"></td>
              </tr>
          </table>
</div>

<div class="row" id="div2" style="display:none">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
               <td height="5" class="Estilo93">COMPROMISO DE ENTREGA<BR>
                <input name="Compromiso" type="text" class="TextField2" id="Compromiso" style="width:95%" onChange="javascript:this.value=this.value.toUpperCase();"></td>
              </tr>
          </table>

</div>
          
          
          </td>
          </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="5" class="Estilo93"><span class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
        </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="20%" height="30" class="Estilo93">LLEVA SELLOS
            <input type="hidden" name="Sellos" id="Sellos"></td>
          <td width="15%" height="20" align="left" valign="bottom" class="Estilo93">
            <span class="Estilo93">SI</span>
            <input type="radio" name="sellos" value="1" onClick="Hide('div4', this); Reveal('div3', this)"> 
            &nbsp;<span class="Estilo93">NO</span>
            <input type="radio" name="sellos" value="2" onClick="Hide('div3', this); Reveal('div4', this)">
          </td>
          <td width="65%" height="20" class="Estilo93">
          
<div class="row" id="div3" style="display:none">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="5" class="Estilo93"><input name="button2" type="button" class="TextField4" id="button" value="Agregar Sellos" onClick="window.open('agregar-sellos.php?Man=<?=$Manifiesto?>&Idviaje=<?=$Idviaje?>','','menubar=no,scrollbars=yes, width=500, height=450');return false"></td>
              </tr>
          </table>
</div>

<div class="row" id="div4" style="display:none"></div>
          
          </td>
        </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="5" class="Estilo93"><span class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
          </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="20%" height="30" class="Estilo93">TRANSITO NOCTURNO</td>
          <td width="15%" class="Estilo93">
          
            <span class="Estilo93">SI</span>
            <input type="radio" name="Transitonoc" value="1" onClick="Hide('div5', this); Reveal('div6', this)"> 
            &nbsp;<span class="Estilo93">NO</span>
            <input type="radio" name="Transitonoc" value="2" onClick="Hide('div6', this); Reveal('div5', this)">

          
          </td>
          <td width="65%" class="Estilo93">
          
		<div class="row" id="div5" style="display:none">
        
			<table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
            <td width="33%" height="5" align="left" class="Estilo93">HORA MAXIMA TRANSITO <br>
            <input name="Horamax" type="text" class="TextField2" id="Horamax" style="width:140px"></td>
            <td width="67%" align="left" class="Estilo93">HORA RETORNO TRANSITO <br>
            <input name="Horaretor" type="text" class="TextField2" id="Horaretor" style="width:140px"></td>
            </tr>
          	</table>
		</div>     
        <div class="row" id="div6" style="display:none"></div>     


			

          </td>
          </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="5" class="Estilo93"><span class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
        </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="20%" height="30" class="Estilo93">PITO DE REVERSA</td>
          <td width="15%" height="20" class="Estilo93">
          
            <span class="Estilo93">SI</span>
            <input type="radio" name="Pito" value="1"> 
            &nbsp;<span class="Estilo93">NO</span>
            <input type="radio" name="Pito" value="2">
          
          </td>
          <td width="65%" class="Estilo93">&nbsp;</td>
          </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="5" class="Estilo93"><span class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
        </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="20%" height="30" class="Estilo93">ENTREGAS EN RUTA</td>
          <td width="15%" height="20" class="Estilo93"> SI
            <input type="radio" name="Entregas" value="1">
            &nbsp;NO
            <input type="radio" name="Entregas" value="2"></td>
          <td width="65%" class="Estilo93">&nbsp;</td>
        </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="5" class="Estilo93"><span class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
        </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="20%" height="30" class="Estilo93">SANTO Y SEÑA</td>
          <td width="15%" class="Estilo93"> SI
            <input type="radio" name="Santo" value="1" onClick="Hide('div10', this); Reveal('div9', this)">
            &nbsp;NO
            <input type="radio" name="Santo" value="2" onClick="Hide('div9', this); Reveal('div10', this)" disabled></td>
          <td width="65%" class="Estilo93">
          <div class="row" id="div9" style="display:none">
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="33%" height="5" align="left" class="Estilo93">SANTO Y SEÑA<br>
                  <input name="Santoysena" type="text" class="TextField2" id="Santoysena" style="width:120px" onChange="javascript:this.value=this.value.toUpperCase();"></td>
                <td width="67%" align="left" class="Estilo93">&nbsp;</td>
              </tr>
            </table>
          </div>
            <div class="row" id="div10" style="display:none"></div>

            
            </td>
        </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="5" class="Estilo93"><span class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
        </tr>
      </table>
      
      
      
      
      
 <?
if($Totalofgenx2 > 0)
{
?>     
      


      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="20%" height="30" class="Estilo93">REMESAS
            <input type="hidden" name="Remesa" id="Remesa"></td>
          <td width="15%" class="Estilo93">
          
 <input name="button6" type="button" class="TextField4" id="button6" value="Control Remesas" onClick="window.open('control-remesas.php?Man=<?=$Manifiesto?>&Idviaje=<?=$Idviaje?>&Plan=<?=$Planviaje?>&Empresa=<?=$Empresa?>','','menubar=no,scrollbars=yes, width=500, height=480');return false">
           
            </td>
          <td width="65%" class="Estilo93">&nbsp;</td>
        </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="5" class="Estilo93"><span class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
        </tr>
      </table>

<?
}
?>












      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="20%" height="30" class="Estilo93">CONTENEDOR
            <input type="hidden" name="Conten" id="Conten"></td>
          <td width="15%" class="Estilo93"> SI
            <input type="radio" name="Contenedor" value="1" onClick="Hide('div12', this); Reveal('div11', this)">
            &nbsp;NO
            <input type="radio" name="Contenedor" value="2" onClick="Hide('div11', this); Reveal('div12', this)"></td>
          <td width="65%" class="Estilo93"><div class="row" id="div11" style="display:none">


<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td height="5" class="Estilo93"><input name="button3" type="button" class="TextField4" id="button2" value="Agregar Contenedor" onClick="window.open('agregar-contenedor.php?Man=<?=$Manifiesto?>&Idviaje=<?=$Idviaje?>&Plan=<?=$Planviaje?>','','menubar=no,scrollbars=yes, width=500, height=580');return false"></td>
</tr>
</table>



          </div>
            <div class="row" id="div12" style="display:none"></div>
            

            
            </td>
        </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="5" class="Estilo93"><span class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
        </tr>
      </table>
<?
if($Totalofgen2 > 0)
{
?>      
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="20%" height="30" class="Estilo93">GEN. EXIGE ARP</td>
          <td width="15%" class="Estilo93"> FECHA VENC
            <input name="Fechaarp" type="text" class="TextField2" id="Fechaarp" style="width:95%"></td>
          <td width="65%" class="Estilo93">
          
          


<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="15%" height="5" align="left" class="Estilo93">&nbsp;</td>
<td width="25%" align="left" class="Estilo93">&nbsp;</td>
        </tr>
</table></td>
        </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="5" class="Estilo93"><span class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
        </tr>
      </table>
<?
}
?>
      
      
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="20%" height="30" class="Estilo93">ACOMPAÑANTE</td>
          <td width="15%" class="Estilo93"> SI
            <input type="radio" name="Acompanado" value="1" onClick="Hide('div14', this); Reveal('div13', this)">
            &nbsp;NO
            <input type="radio" name="Acompanado" value="2" onClick="Hide('div13', this); Reveal('div14', this)"></td>
          <td width="65%" class="Estilo93"><div class="row" id="div13" style="display:none">
			<table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="53%" height="5" align="left" class="Estilo93">NOMBRE<br>
                  <input name="Nombrecomp" type="text" class="TextField2" id="Nombrecomp" style="width:300px" onChange="javascript:this.value=this.value.toUpperCase();"></td>
                <td width="47%" align="left" class="Estilo93">CELULAR<br>
                  <input name="Celacomp" type="text" class="TextField2" id="Celacomp" style="width:160px"></td>
              </tr>
            </table>
          </div>
            <div class="row" id="div14" style="display:none"></div>
            
            
            
            </td>
        </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="5" class="Estilo93"><span class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
        </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="20%" height="30" class="Estilo93">CELULAR ADICIONAL</td>
          <td width="15%" class="Estilo93"> SI
            <input type="radio" name="Celularadc" value="1" onClick="Hide('div16', this); Reveal('div15', this)">
            &nbsp;NO
            <input type="radio" name="Celularadc" value="2" onClick="Hide('div15', this); Reveal('div16', this)"></td>
          <td width="65%" class="Estilo93"><div class="row" id="div15" style="display:none">
			<table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="53%" height="5" align="left" class="Estilo93">NRO. CELULAR<br>
                  <input name="Nrocelu" type="text" class="TextField2" id="Nrocelu" style="width:160px"></td>
                <td width="47%" align="left" class="Estilo93">&nbsp;</td>
              </tr>
            </table>
          </div>
            <div class="row" id="div16" style="display:none"></div>
            
            
            
            </td>
        </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="5" class="Estilo93"><span class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
        </tr>
      </table>
      
      
      
      
      
      
      
      

      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="20%" height="30" class="Estilo93">EQUIPOS</td>
          <td width="15%" class="Estilo93"> SI
            <input type="radio" name="equipo" value="1" onClick="Hide('div06', this); Reveal('div05', this)">
            &nbsp;NO
            <input type="radio" name="equipo" value="2" onClick="Hide('div05', this); Reveal('div06', this)"></td>
          <td width="65%" class="Estilo93">
          
          <div class="row" id="div05" style="display:none">
			<table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="53%" height="5" align="left" class="Estilo93">USUARIO ENTREGO<br>
                  <input name="Userequipo" type="text" class="TextField2" id="Userequipo" style="width:260px"> 
                  <a href="#" onClick="window.open('lista-usuariosase.php','','menubar=no,scrollbars=yes, width=900, height=600');return false"> <img src="Images/buscar.gif" width="16" height="16" border="0"></a>
                  </td>
                <td width="47%" align="left" class="Estilo93">&nbsp;</td>
              </tr>
            </table>
          </div>
          
          
            <div class="row" id="div06" style="display:none"></div>
            
            
            
            </td>
        </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="5" class="Estilo93"><span class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
        </tr>
      </table>  
      
      
      
      
      
      
      
      
      
      
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="20%" height="30" class="Estilo93">VEHICULO CARGADO</td>
          <td width="15%" class="Estilo93"> SI
            <input type="radio" name="Cargado" value="1" onClick="Hide('div18', this); Reveal('div17', this)">
            &nbsp;NO
            <input type="radio" name="Cargado" value="2" onClick="Hide('div17', this); Reveal('div18', this)"></td>
          <td width="65%" class="Estilo93"><div class="row" id="div17" style="display:none">
			<table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="53%" height="5" align="left" class="Estilo93">FECHA / HORA PARA SALIR<br>
                  <input name="Fechacar" type="text" class="TextField2" id="Fechacar" style="width:160px"></td>
                <td width="47%" align="left" class="Estilo93">&nbsp;</td>
              </tr>
            </table>
          </div>
            <div class="row" id="div18" style="display:none"></div>
            
            
            
            </td>
        </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="5" class="Estilo93"><span class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
        </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="20%" height="30" class="Estilo93">VEHICULO POR CARGAR</td>
          <td width="15%" class="Estilo93"> SI
            <input type="radio" name="Nocargado" value="1" onClick="Hide('div20', this); Reveal('div19', this)">
            &nbsp;NO
            <input type="radio" name="Nocargado" value="2" onClick="Hide('div19', this); Reveal('div20', this)"></td>
          <td width="65%" class="Estilo93"><div class="row" id="div19" style="display:none">
			<table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="53%" height="5" align="left" class="Estilo93">LUGAR<br>
                  <input name="Lugarcar" type="text" class="TextField2" id="Lugarcar" style="width:300px" onChange="javascript:this.value=this.value.toUpperCase();"></td>
                <td width="47%" align="left" class="Estilo93">FECHA / HORA<br>
                  <input name="Fechaporcarg" type="text" class="TextField2" id="Fechaporcarg" style="width:160px"></td>
              </tr>
            </table>
          </div>
            <div class="row" id="div20" style="display:none"></div>
            
              
            
            </td>
        </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="5" class="Estilo93"><span class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
          </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="20%" height="30" class="Estilo93">VEHICULO REVISADO</td>
          <td width="15%" class="Estilo93"> SI
            <input type="radio" name="Revisado" value="1" onClick="Hide('div24', this); Reveal('div23', this)">
            &nbsp;NO
            <input type="radio" name="Revisado" value="2" onClick="Hide('div23', this); Reveal('div24', this)"></td>
          <td width="65%" class="Estilo93">
          
          <div class="row" id="div23" style="display:none">

<table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="58%" height="5" align="left" class="Estilo93">USUARIO QUE REVISO<br>
                  <input name="Revipor" type="text" class="TextField2" id="Revipor" style="width:90%" onChange="javascript:this.value=this.value.toUpperCase();" readonly="readonly">
 <a href="lista-planes.php" onClick="window.open('lista-usuariosas.php','','menubar=no,scrollbars=yes, width=900, height=600');return false"> <img src="Images/buscar.gif" width="16" height="16" border="0"></a>
                  
                  </td>
                <td width="42%" align="left" class="Estilo93">NRO. PLANILLA<br>
                  <input name="Nroplan" type="text" class="TextField2" id="Nroplan" style="width:90%"></td>
              </tr>
            </table>

          </div>
            <div class="row" id="div24" style="display:none">
            
            
<table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="58%" height="5" align="left" class="Estilo93">USUARIO QUE AUTORIZA<br>
                  <input name="Autorizad" type="text" class="TextField2" id="Autorizad" style="width:300px" onChange="javascript:this.value=this.value.toUpperCase();" readonly="readonly">
 <a href="lista-planes.php" onClick="window.open('lista-usuarioaut.php','','menubar=no,scrollbars=yes, width=900, height=600');return false"> <img src="Images/buscar.gif" width="16" height="16" border="0"></a>
                  
                  </td>
                <td width="42%" align="left" class="Estilo93">&nbsp;</td>
              </tr>
            </table>
            
            
            </div>
            
			</td>
        </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="5" class="Estilo93"><span class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
        </tr>
      </table>
      
      
      








<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="20%" height="30" class="Estilo93">CARGA OTRA EMPRESA</td>
          <td width="15%" class="Estilo93"> SI
            <input type="radio" name="Carga" value="1" onClick="Hide('div54', this); Reveal('div53', this)">
            &nbsp;NO
            <input type="radio" name="Carga" value="2" onClick="Hide('div53', this); Reveal('div54', this)"></td>
          <td width="65%" class="Estilo93">
          
          <div class="row" id="div53" style="display:none">

<table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="58%" height="5" align="left" class="Estilo93">EMPRESA<br>
                  <input name="Empresaotra" type="text" class="TextField2" id="Empresaotra" style="width:90%" onChange="javascript:this.value=this.value.toUpperCase();" >
 
                  
                  </td>
                <td width="42%" align="left" class="Estilo93">TIPO MERCANCIA<br>
                  <input name="Tipomer" type="text" class="TextField2" id="Tipomer" style="width:90%" onChange="javascript:this.value=this.value.toUpperCase();" ></td>
              </tr>
            </table>

          </div>
            <div class="row" id="div54" style="display:none">
            
            
            
            
            </div>
            
			</td>
        </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="5" class="Estilo93"><span class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
        </tr>
      </table>
      






      
      
      
      
      <?
if($Totalov > 0)
{
?>
      
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="20%" height="30" class="Estilo93">MAS DE <span style="color: #F00">(<?=$Totalof?>)</span> REMESAS
            <input name="Cantrem" type="hidden" id="Cantrem" value="<?=$Totalof?>">
            <input name="Nuevarem" type="hidden" id="Nuevarem" value="<?=$Totalof?>"></td>
          <td width="15%" class="Estilo93"> SI
            <input type="radio" name="remesa" value="1" onClick="Hide('div22', this); Reveal('div21', this)">
            &nbsp;NO
            <input type="radio" name="remesa" value="2" onClick="Hide('div21', this); Reveal('div22', this)"></td>
          <td width="65%" class="Estilo93">
          
          <div class="row" id="div21" style="display:none">
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="53%" height="5" align="left" class="Estilo93"><input name="button3" type="button" class="TextField4" id="button2" value="Mas Remesas" onClick="window.open('agregar-nueva-remesa.php?Man=<?=$Manifiesto?>&Idviaje=<?=$Idviaje?>','','menubar=no,scrollbars=yes, width=500, height=450');return false"></td>
                <td width="47%" align="left" class="Estilo93"><br></td>
              </tr>
            </table>
          </div>
            <div class="row" id="div22" style="display:none"></div>
            
            </td>
        </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="5" class="Estilo93"><span class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
        </tr>
      </table>
<?
}
?>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="20%" height="30" class="Estilo93">LLEVA GUIAS
      <input type="hidden" name="Guias" id="Guias"></td>
    <td width="15%" height="20" align="left" valign="bottom" class="Estilo93"> SI
      <input type="radio" name="guias" value="1" onClick="Hide('div26', this); Reveal('div25', this)">
      &nbsp;NO
      <input type="radio" name="guias" value="2" onClick="Hide('div25', this); Reveal('div26', this)"></td>
      
    <td width="65%" height="20" class="Estilo93"><div class="row" id="div25" style="display:none">
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="5" class="Estilo93"><input name="button4" type="button" class="TextField4" id="button3" value="Agregar Guias" onClick="window.open('agregar-guias.php?Man=<?=$Manifiesto?>&Idviaje=<?=$Idviaje?>','','menubar=no,scrollbars=yes, width=500, height=450');return false"></td>
        </tr>
      </table>
    </div>
      <div class="row" id="div26" style="display:none"></div></td>
  </tr>
</table>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="5" class="Estilo93"><span class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
  </tr>
</table>
<?
if($Estado000R ==  1)
{
$pone	=	($Totalofcr == 0 || $Totalofcre > 0);
}
else
{
$pone	=	($Totalofcr == 0 && $Totalofcre > 0);
}

if($pone)	
{
	
	if($Totalofcre == 0)
	{
	$decir	=	"<STRONG>DAR LAPICERO</STRONG>";
	$tipoobs=	1;
	}
	else
	{
	$decir	=	"<STRONG>PASAR A GERENCIA</STRONG>";	
	$tipoobs=	2;
	}
	
	
?>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="20%" height="30" class="Estilo93">OBSEQUIO NAVIDEÑO
      <input name="Conductor" type="hidden" id="Conductor" value="<?=$Conductor?>">
      <input name="Placa" type="hidden" id="Placa" value="<?=$Placa?>">
      <input name="Tipoobs" type="hidden" id="Tipoobs" value="<?=$tipoobs?>">
      <input name="Nombrecond" type="hidden" id="Nombrecond" value="<?=$Nombrexc?>"></td>
    <td width="15%" class="Estilo93"> SI
      <input type="radio" name="regalo" value="1" onClick="Hide('div51', this); Reveal('div50', this)">
      &nbsp;NO
      <input type="radio" name="regalo" value="2" onClick="Hide('div50', this); Reveal('div51', this)">
     </td>
    <td width="65%" class="Estilo93"><div class="row" id="div50" style="display:none">
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="58%" height="5" align="left" class="Estilo93">
          <span style="font-size:14px"><?=$decir?></span>
          </td>
          <td width="42%" align="left" class="Estilo93">
          
          </td>
        </tr>
      </table>
    </div>
      <div class="row" id="div51" style="display:none">
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="58%" height="5" align="left" class="Estilo93">
            </td>
            <td width="42%" align="left" class="Estilo93">&nbsp;</td>
          </tr>
        </table>
      </div>
      </td>
  </tr>
</table>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="5" class="Estilo93"><span class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
  </tr>
</table>
<?
}
?>
<?
if($Totalofc == 0)
{
?>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="20%" height="30" class="Estilo93">IMPRIMIR CONTRATO      </td>
    <td width="15%" height="20" align="left" valign="bottom" class="Estilo93"> SI
      <input type="radio" name="contrato" value="1" onClick="Hide('div28', this); Reveal('div27', this)">
      &nbsp;NO
      <input type="radio" name="contrato" value="2" onClick="Hide('div27', this); Reveal('div28', this)"></td>
    <td width="65%" height="20" class="Estilo93">
      </td>
  </tr>
</table>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="5" class="Estilo93"><span class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
  </tr>
</table>
<?
}
?>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="60"><p>        

<?
if($Totalofc > 0)
{
?>

            <div class="row" id="div28">
            <input name="button2" type="submit" class="TextField6" id="button2" value="FINALIZAR ASIGNACION">
			</div>
            
<?
}
else
{
?>
            <div class="row" id="div28" style="display:none">
            <input name="button2" type="submit" class="TextField6" id="button2" value="FINALIZAR ASIGNACION">
			</div>

<?
}
?>
            
            <div class="row" id="div27" style="display:none">
            
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="13%" height="5" align="left" class="Estilo93"><input name="envio1" type="button" class="TextField7" id="envio1" value="IMPRIMIR CONTRATO" onClick="call(); javascript:Abrir_ventana('imprimir-contrato-guias.php?Id=<?=$conduct?>&man=<?=$man?>')"></td>
<td width="87%" align="left" class="Estilo93"><input name="envio2" type="submit" class="TextField6" id="envio2" value="FINALIZAR ASIGNACION" disabled="disabled" > </td>
</tr>
</table>        
            </div>
            


          </p></td>
          </tr>
      </table>


    </form></td>
    <td width="27%" align="center" valign="top" bgcolor="#E9E7E7">
    <iframe src="datosviajefull.php?Id=<?=$Idviaje?>" width="99%" height="100%" frameborder="No" allowtransparency="true"></iframe></td>
  </tr>
</table>
  
</body>
</html>