<? 
include("vencimiento-session.php"); 
include("variables.php"); 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE></TITLE>
<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
<STYLE type=text/css>
BODY {
	MARGIN: 0px;
	background-image: url();
	background-color: #DFEDD8;
}
body,td,th {
	color: #333;
}
.Titulos {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 11px;
	color: #666;
}
.lista {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}
.titulosec {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
.titles {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #999;
	font-weight: bold;
}
.TextField0 {
background-color: #900;
color: #FFFFFF;
font-size: 11pt;
font-family: arial;
border : 1px solid #C6C5C4;

}
.TextField {
background-color: #A2A29F;
color: #FFFFFF;
font-size: 11pt;
font-family: arial;
border : 1px solid #C6C5C4;

}
.TextField1 {
background-color: #92B205;
color: #FFFFFF;
font-size: 11pt;
font-family: arial;
border : 1px solid #C6C5C4;

}
.TextField2 {
background-color: #EFEFEF;
color: #7C7C7A;
font-size: 11px;
font-family: arial;
border : 1px solid #ccc;

}
.TextField3 {
background-color: #A2A29F;
color: #FFFFFF;
font-size: 8pt;
font-family: arial;
border : 0px solid #C6C5C4;

}
#error {
	margin-top:1px;
	font: 12px Arial, Helvetica, sans-serif, bold;
	font-weight: bold;
	color: #000000;
	width: 320;
}
div.navigation { 
    background-color: #eee; 
    border: 1px solid #ccc; 
    margin: 2px auto; 
    text-align: center; 
    padding: 9px 5px; 
    white-space: nowrap; 
    font: 12px Arial; 
} 
span.navthis { 
    padding: 3px 8px; 
    background-color: #eee; 
    color: #FF7F00; 
    font-weight: bold; 
    font-size: 13px; 
} 
a.nav { 
    padding: 4px 6px; 
    color: #888; 
    text-decoration: none; 
} 
a.nav:hover { 
    padding: 3px 6px; 
    color: #000; 
    background-color: #FFC68C; 
    border: 1px solid #FFA851; 
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
</STYLE>





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


<script LANGUAGE="JavaScript">


function validar(formulario) 
{

		  
		  if (formulario.Manifiesto.value == "") 
		  {
			alert("Por favor seleccione un Manifiesto");
			formulario.Manifiesto.focus();
		
			return (false);
		  }
		  
		  if (formulario.hidY.value == "") 
		  {
			alert("Por favor seleccione un cataporte");
			formulario.sel1.focus();
		
			return (false);
		  }
		  

document.getElementById("btsubmit").value = "PROCESANDO...";
document.getElementById("btsubmit").disabled = true;

  return (true); 
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

//-->
</script>

<link rel="stylesheet" href="lytebox.css" type="text/css" media="screen"/>
<script type="text/javascript" language="javascript" src="lytebox.js"></script>


<script type="text/javascript">

function deleteOption(theSel, theIndex){ 
var selLength = theSel.length;
if(selLength>0){
theSel.options[theIndex] = null;
}
}

function moveOptions(theselfrom, theselto){

var theSelFrom=document.getElementById(theselfrom);
var theSelTo=document.getElementById(theselto);
var selLength = theSelFrom.length;
var selToLength =theSelTo.length;

count=0

if(theselfrom=="sel1"){
for(var i=0;i<theSelFrom.options.length;i++){
if(theSelFrom.options[i].selected==true){
count++
}
}

if(count+theSelTo.options.length>150){
for(var i=0;i<theSelFrom.options.length;i++){
theSelFrom.options[i].selected=false
}
return
}

}
 
for(var i=selLength-1; i>=0; i--){
if((theSelFrom.options[i].selected)){

msg=theSelFrom.options[i].text;
msgvalue=theSelFrom.options[i].value;
theSelTo.options[selToLength]=new Option(msg,msgvalue);
selToLength=theSelTo.options.length;

deleteOption(theSelFrom, i);
placeInHidden(',', 'sel2', 'hidY');
}
}

}

function placeInHidden(delim, selStr, hidStr){
var selObj = document.getElementById(selStr);
var hideObj = document.getElementById(hidStr);//hidden text box
hideObj.value = '';
for (var i=0; i<selObj.options.length; i++){ 
hideObj.value = hideObj.value =='' ? selObj.options[i].value : hideObj.value + delim + selObj.options[i].value;
}
}
</script>
</HEAD>
<BODY>
<table width="100%" height="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
<td align="center" valign="top" bgcolor="#F8F8F8"><table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
      <td width="2%" height="36" align="right" class="titulosec">&nbsp;</td>
      <td width="20%" align="left" valign="middle" class="titulosec">&nbsp;&nbsp;</td>
      <td width="76%" align="right" class="titulosec">ASIGNACION DE MANIFIESTOS </td>
      <td width="2%">&nbsp;</td>
    </tr>
  </table>
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="5"><img src="Images/bg-seleccion.jpg" width="100%" height="2"></td>
    </tr>
  </table>
  
  
  
  <table width="100%" height="95%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="60%" align="center" valign="top" class="titulosec"><br>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
  <form name="form1" method="post" action="asigna-cataportes.php" onSubmit="return validar(this)">    
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
        <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td width="50%">
            <span class="lista">Manifiesto</span><br>
              <input name="Manifiesto" type="text" class="TextField2" id="Manifiesto" style="width:90%" onChange="javascript:this.value=this.value.toUpperCase();" readonly  autocomplete="off">
              <a href="#" onClick="window.open('lista-manifiestos.php','','menubar=no,scrollbars=yes, width=500, height=550,');return false"><img src="Images/buscar.gif" width="16" height="16" border="0"></a></td>
            <td width="50%">&nbsp;</td>
          </tr>
      </table>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="17"><img src="Images/bg-seleccion.jpg" width="100%" height="2"></td>
          </tr>
        </table>
        <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0" >
          <tr>
            <td height="5" class="titles"><table width="100%" border="0" align="center">
              <tr>
                <td width="45%" class="Titulos">Asignaciones  disponibles <span class="titulin"><br>
                  </span>
                  <select name="sel1" size="15" multiple="multiple" class="TextField2"id ="sel1" style="width:98%">
                    <?
$query="SELECT* FROM Nrorecepcion WHERE Estado = 0 Order By Fecha ASC" ;
$result=mysql_query($query, $id);

While($row=mysql_fetch_array($result))
{
$Id		=	$row["Id"];

?>
                    <option value="<?=$Id?>"><?=$Id?></option>
<?
}


?>
                  </select></td>
                <td width="10%" align="center" valign="middle" size="10"><br>
                  <br>
                  <table width="66" border="0">
                    <tr>
                      <td width="56" height="32"><a href="#" onClick="moveOptions('sel1','sel2');"><img src="Images/agre.png" border="0"></a></td>
                    </tr>
                    <tr>
                      <td height="41"><a href="#" onClick="moveOptions('sel2', 'sel1');"><img src="Images/rem.png" border="0"></a></td>
                    </tr>
                  </table>
                  <br /></td>
                <td width="45%"><span class="Titulos">Asignacion</span><br>
                  <select name="sel2" size="15" multiple="multiple" class="TextField2" id="sel2" style="width:98%">
                  </select></td>
              </tr>
            </table>
              <input name="hidY" type="hidden" id="hidY" />
              <input type="hidden" name="Idopera" id="Idopera">
              <input type="hidden" name="Nit" id="Nit">
              
              </td>
          </tr>
        </table>
        <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="50%" height="41"><br>
              <input name="btsubmit" type="submit" class="TextField" id="btsubmit" value="REALIZAR OPERACION"></td>
            <td width="50%"></td>
          </tr>
        </table>
        
        
        
        
        
        
        
        
        
        
  </form>        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        </td>
      <td width="40%" align="center" valign="top" bgcolor="#F3F3F3" class="titulosec"><br>
        <table width="95%" border="0" cellpadding="0" cellspacing="0" background="Images/bg-seleccion.jpg">
        <tr>
          <td height="28" class="titles">MANIFIESTOS ASIGNADOS</td>
          </tr>
      </table>
        <table width="95%" border="0" cellpadding="0" cellspacing="0" >
          <tr>
            <td height="20" class="titles"><img src="Images/blnck.png" width="5" height="5"></td>
          </tr>
        </table>
        <table width="95%" border="0" cellpadding="0" cellspacing="0" >
          <tr>
            <td height="20" class="titles">
            
            
            <form name="form2" method="post" action="listacataportesasignados.php" target="operag">
              <input name="Name" type="text" class="TextField2" id="Name" value="NRO MANIFIESTO" onClick="form2.Name.value=''" >
              <input name="button" type="submit" class="TextField3" id="button" value="BUSCAR">
            </form></td>
          </tr>
        </table>
        <table width="95%" border="0" cellpadding="0" cellspacing="0" >
          <tr>
            <td height="10" class="titles"><img src="Images/bg-footer.jpg" width="100%" height="2"></td>
          </tr>
        </table>
        
        <table width="95%" border="0" cellpadding="0" cellspacing="0" >
          <tr>
            <td align="center" valign="top" class="titles">
			
<iframe src="listacataportesasignados.php" name="operag" width="100%" height="100%" scrolling="yes" frameborder="No" id="operag" allowtransparency="true"></iframe>			





</td>
          </tr>
        </table></td>
      </tr>
  </table></td>
</tr>
</table>
</BODY></HTML>
