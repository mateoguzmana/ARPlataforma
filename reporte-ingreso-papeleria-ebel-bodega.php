<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}
include("conexion.php");


header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
date_default_timezone_set('America/Bogota');



$Nro		=	$_SESSION['nrorecepcion'];
$Borra		=	$_REQUEST['Borra'];

/*
$Nro		=	'00000000017';

$Borra		=	'NO';
*/




?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
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
	font-size: 12px;
	color: #666;
}
body {
	background-color: #C7D7E7;
	margin-top: 0px;
	margin-left: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo93 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
	color: #000;
}
.Estilo105 {
	color: #990000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
	text-align: center;
}
.Estilo97 {
	font-size: 16px;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
	color: #036;
}
.TextField2 {background-color: #DADADA;
color: #333333;
font-size: 9pt;
font-family: arial;
border : 1px solid #FFFFFF;
}

.TextField21 {background-color: #C7E2C8;
color: #333333;
font-size: 9pt;
font-family: arial;
border : 1px solid #FFFFFF;
text-align: center;
}

.TextField211 {background-color: #DADADA;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
text-align: left;
}

.TextField3 {background-color: #D7D7D7;
color: #000;
font-size: 20pt;
font-family: arial;
border : 1px solid #000;
text-align:center;

}
.TextField4 {background-color: #900;
color: #fff;
font-size: 20pt;
font-family: arial;
border : 1px solid #000;
text-align:center;

}

.TextField31 {background-color: #D7D7D7;
color: #000;
font-size: 10pt;
font-family: arial;
border : 1px solid #000;
text-align:center;

}

.listado1 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #666;
}
.listado2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #003;
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
.resalto {
	color: #F00;
}
.hideable { position: relative; visibility: visible; }
.Estilo1051 {	color: #990000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}
.listado11 {font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
	color: #000;
}

#error {
	margin-top:1px;
	font: 12px Arial, Helvetica, sans-serif, bold;
	font-weight: bold;
	color: #000000;
	width: 320;
}

div.scroll {
height: 300px;
width: 540px;
overflow: auto;
border: 1px solid #FFF;
background-color: #FFF;
padding: 3px;
}

-->
</style>




<script type="text/javascript">

function lbIframeClose() {
parent.document.getElementById("lbMain").style.display = "none";
parent.document.getElementById("lbOverlay").style.display = "none";
 

}

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
<!--
function confirmSubmit() 
{ 
var agree=confirm("Realmente desea finalizar la lectura de pedidos?"); 
	if (agree) 
	{
	window.location.href='reporte-ingreso-papeleria-ebel-bodega.php';
	return true ; 
	}
	else
	{
	return false ; 
	}
}
//-->
</script>




</head>
<body>

<table width="570" border="0" align="center" cellpadding="0" cellspacing="0" >
  <tr onMouseover="this.bgColor='#BED9F3'"onMouseout="this.bgColor='#FFFFFF'" >
    <td height="264" align="center" valign="top" bgcolor="#C7D7E7">

<table width="570" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="20" align="right" valign="middle" class="Estilo97"><a href="content.html" onClick="lbIframeClose();"><img src="Images/close-icon.png" width="20" height="20" border="0"></a></td>
  </tr>
</table>

      <table width="570" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="30" align="center" valign="middle" bgcolor="#E9E9E9" class="Estilo97">GUIAS  REGISTRADAS</td>
        </tr>
    </table>
      <br>
      <form name="form1" method="post" action="ingreso-papeleria-ebel-bodega.php">
        <table width="570" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="175" align="center" valign="middle" bgcolor="#E9E9E9">

<br>            
<div class="scroll">
            
            
<?



					$queryA		="SELECT COUNT(*) AS TOTAL FROM Controlbox where Cataporte = '$Nro' and Leida = 1";
					$resultA	=mysql_query($queryA, $id);
							
					while($rowA	=mysql_fetch_array($resultA))
					{
					$TOTALA		=$rowA["TOTAL"];
					}
					

					
					
					$TOTALC		=	$TOTALA;

?>            
            
<table width="520" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="31" bgcolor="#990000"><input name="lea2" type="text" class="TextField4" id="lea2" style="width:100%" autocomplete="off" value="TOTAL REGISTROS = <?=$TOTALC?>" size="12" maxlength="15" readonly></td>
  </tr>
</table>
<br>
<?

					
					

		$arry1 			= array();
		
		
		$queryS1		="SELECT Guia FROM Controlbox WHERE  Cataporte = $Nro AND Leida = 1 order by Guia";
		$resultS1		=mysql_query($queryS1, $id);

				
		while($rowS1	=mysql_fetch_array($resultS1))
		{

		$Guia			=$rowS1["Guia"];
		

?>
      
            
            <table width="520" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="23" bgcolor="#FFFFFF"><input name="lea" type="text" class="TextField2" id="lea" style="width:100%" autocomplete="off" value="<?=$Guia?>" size="12" readonly></td>
              </tr>
              </table>
<?
		}
?>
            
</div>            
            
           
            <table width="540" border="0">
              <tr>
                <td height="59" align="right"><p>
                  <input name="button" type="submit" class="TextField3" id="button" value="VOLVER" >
                </p></td>
              </tr>
      </table></td>
          </tr>
        </table>
    </form>
    

<script LANGUAGE="JavaScript">

function validar(formulario) 
{
  if (formulario.Precio.value == "") 
  {
    alert("Por favor ingrese un Valor");
	formulario.Precio.focus();
    
    return (false);
  }

	return (true); 
}
</script>
<script language="JavaScript" src="js/NumberFormat.js"></script>

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

    
    
    </td>
  </tr>
</table>
<?
if($Borra == 'SI')
{
$_SESSION['nrorecepcion'] = '';
}
?>
</body>
</html>