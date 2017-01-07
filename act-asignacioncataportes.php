<?
include("vencimiento-session.php"); 
include("variables.php");

$Manifiesto		=	$_REQUEST["Man"];

		
		$arry0 				= 	array();
		$arry1 				= 	array();
		$querys1="SELECT* FROM Asignacioncata where Manifiesto = '$Manifiesto' Order By Id" ;
		$results1=mysql_query($querys1, $id);
		
		While($rows1=mysql_fetch_array($results1))
		{
		$Ciudad1	=	$rows1["Cataporte"];	
	
		$arry0[]	=	$Ciudad1;
		$arry1[]	=	$Ciudad1;
		}
		
					if(empty($arry0))
					{
					$cosult0	 =	" and ( Id = '')";
					}
					else
					{
					$arry0 		 = 	array_unique($arry0);
					$cosult0	 =	" and ( Id = ";
					$cosult0	.=	 implode(' OR Id = ',$arry0);
					$cosult0	.=	 ')';
					}
					
$datos	 	= implode(',', $arry1);

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE></TITLE>
<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
<STYLE type=text/css>
BODY {
	MARGIN: 0px;
	background-image: url();
	background-color: #F8F8F8;
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
font-size: 9pt;
font-family: arial;
border : 1px solid #C6C5C4;

}
.TextField {
background-color: #A2A29F;
color: #FFFFFF;
font-size: 9pt;
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




<script type="text/javascript">

function lbIframeClose() 
{
parent.document.getElementById("lbMain").style.display = "none";
parent.document.getElementById("lbOverlay").style.display = "none";
//parent.location.href='somePage.html'; 

window.parent.frames['operag'].location.href = 'listacataportesasignados.php'; 
}

</script>







<style type="text/css">
<!--
.TextField01 {background-color: #900;
color: #FFFFFF;
font-size: 11pt;
font-family: arial;
border : 1px solid #C6C5C4;
}
.TextField4 {background-color: #A2A29F;
color: #FFFFFF;
font-size: 11pt;
font-family: arial;
border : 1px solid #C6C5C4;
}
-->
</style>



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
<td align="center" valign="top" bgcolor="#F8F8F8"><table width="100%" border="0" cellpadding="0" cellspacing="0" background="Images/bg-titles.jpg">
  <tr>
    <td height="10">&nbsp;</td>
  </tr>
</table>
  <table width="92%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="1%" height="36" align="center" class="titulosec">&nbsp;</td>
      <td width="96%" align="left" class="titulosec">ACTUALIZAR ASIGNACION</td>
      <td width="3%" align="center"><span class="titulosec"><a href="#" onClick="lbIframeClose();"><img src="Images/close-icon.png" width="20" height="20" border="0"></a></span></td>
    </tr>
  </table>
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="5"><img src="Images/bg-seleccion.jpg" width="100%" height="2"></td>
    </tr>
  </table>
  <table width="100%" height="85%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td align="center" valign="top" class="titulosec"><table width="95%" border="0" cellpadding="0" cellspacing="0" >
        <tr>
            <td height="20" class="titles"><img src="Images/blnck.png" width="5" height="5"></td>
            </tr>
          </table>
        <table width="92%" border="0" cellpadding="0" cellspacing="0" >
          <tr>
            <td height="20" class="titles"><form name="form1" method="post" action="act-asignacioncataportes2.php" onSubmit="return validar(this)">
              <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0" >
                <tr>
                  <td height="5" class="titles"><img src="Images/blnck.png" width="5" height="5"></td>
                  </tr>
                </table>
              <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0" >
                <tr>
                  <td height="5" class="titles"><img src="Images/blnck.png" width="5" height="5"></td>
                  </tr>
                </table>
              <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0" >
                <tr>
                  <td height="20" class="titles"><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="50%"><span class="lista">Manifiesto</span><br>
                        <input name="Manifiesto" type="text" class="TextField2" id="Manifiesto" style="width:90%"  autocomplete="off" onChange="javascript:this.value=this.value.toUpperCase();" value="<?=$Manifiesto?>" readonly>
                        <a href="#" onClick="window.open('lista-manifiestos.php','','menubar=no,scrollbars=yes, width=500, height=550,');return false"><img src="Images/buscar.gif" width="16" height="16" border="0"></a></td>
                      <td width="50%"><input name="Man" type="hidden" id="Man" value="<?=$Manifiesto?>"></td>
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
                            <td width="45%"><span class="Titulos">Asignaciones  disponibles </span><span class="titulin"><br>
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
                            <td width="45%"><span class="Titulos">Asignados</span><br>
                              <select name="sel2" size="15" multiple="multiple" class="TextField2" id="sel2" style="width:98%">
                               
<?
$querys="SELECT* FROM Nrorecepcion where Id <> '' ".$cosult0." Order By Fecha ASC" ;


$results=mysql_query($querys, $id);

While($rows=mysql_fetch_array($results))
{
$Idw	=	$rows["Id"];


?>
                                <option value="<?=$Idw?>"><?=$Idw?></option>

<?
}
?>
                               
                               </select>
                               
                               </td>
                            </tr>
                          </table>
                          <input name="hidY" type="hidden" id="hidY" value="<?=$datos?>" />
                          <input name="hidY2" type="hidden" id="hidY2" value="<?=$datos?>" /></td>
                        </tr>
                      </table>
                    <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="50%" height="41"><br>
                          <input name="btsubmit" type="submit" class="TextField" id="btsubmit" value="REALIZAR OPERACION"></td>
                        <td width="50%"></td>
                        </tr>
                      </table></td>
                  </tr>
                </table>
              <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0" >
                <tr>
                  <td height="5" class="titles"><img src="Images/blnck.png" width="5" height="5"></td>
                  </tr>
                </table>
            </form></td>
            </tr>
        </table></td>
      </tr>
  </table></td>
</tr>
</table>
</BODY></HTML>
