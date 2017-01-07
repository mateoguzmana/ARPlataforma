<? 
include("variables.php"); 

$Idmarc	=$_REQUEST["Idlinea"];
$Idcate	=$_REQUEST["Idcat"];
?>
<style type="text/css">
<!--
body {
	SCROLLBAR-FACE-COLOR:#F3F3F3;
	SCROLLBAR-HIGHLIGHT-COLOR: #CECECE;
	SCROLLBAR-SHADOW-COLOR: #CECECE;
	SCROLLBAR-3DLIGHT-COLOR: #F3F3F3;
	SCROLLBAR-ARROW-COLOR: #CECECE;
	SCROLLBAR-TRACK-COLOR: #CECECE;
	SCROLLBAR-DARKSHADOW-COLOR: #CECECE;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
} 
.itemselect {	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	color: #006;
	text-align: left;
}
.Estilo1 {color: #E1E1E1;
	font-size: 10px;
}
.Estilo45 {font-size: 12px;
	color: #666666;
	font-family: Helvetica;
}
.Estilo52 {font-size: 12px; color: #727268; font-family: Helvetica; font-weight: bold; }
.Estilo96 {font-size: 11px}
.TextField {background-color: #F3F3F3;
color: #4B4B4B;
font-size: 9pt;
font-family: arial;
border : 1px solid #C6C5C4;
}
.TextField1 {background-color: #F3F3F3;
color: #4B4B4B;
font-size: 9pt;
font-family: arial;
border : 1px solid #C6C5C4;
}
*{ behavior: url(iepngfix.htc);}
.itemselect {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	color: #666;
	text-align: left;
}
.Estilo32 {font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: #000000; }
.Estilo73 {font-size: 12px; font-weight: bold; }
.Estilo97 {font-size: 12px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
.TextField2 {background-color: #DADADA;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.Estilo105 {color: #990000; font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold; }
.Estilo115 {font-size: 9px}
.Estilo117 {font-size: 11px}
.Estilo92 {	font-size: 18px;
	color: #154994;
	font-weight: bold;
	font-family: Geneva, Arial, Helvetica, sans-serif;
}
.Estilo93 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.Estilo94 {font-size: 12px}
.Estilo961 {color: #333333}
.TextField21 {background-color: #BCBCBC;
color: #333333;
font-size: 8pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
-->
</style>
<script LANGUAGE="JavaScript">
function Validar(form)
{
  if (form.Nombre.value == "")
  { alert("Por favor ingrese un Nombre"); form.Nombre.focus(); return; }
 
  if (form.Email.value == "")
  { alert("Por favor ingrese un Email"); form.Email.focus(); return; }
  
  if (form.Usuario.value == "")
  { alert("Por favor ingrese un Usuario"); form.Usuario.focus(); return; }  
  
  if (form.Clave.value == "")
  { alert("Por favor ingrese un Clave"); form.Clave.focus(); return; }  
  
  form.submit();
}
</script>

<script language="javascript">
function mis_datos(){
var key=window.event.keyCode;
if (key < 48 || key > 57){
window.event.keyCode=0;
}}
</script>


  
  
</head>

<body style="background-color: transparent">

<table width="100%"  height="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="left" valign="top" bgcolor="#F7F7F7"><table width="100%" border="0" bordercolor="#FFFFFF" cellpadding="0" cellspacing="0" background="Images/bg-seleccion.jpg">
      <tr>
        <td width="2%" height="37" align="center" class="itemselect">&nbsp;</td>
        <td width="98%" class="itemselect">CARGOS EMPRESARIALES</td>
      </tr>
    </table>
      <table width="99%"  height="90%"  border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#996633">
      <tr valign="middle" bordercolor="#FFFFFF">
        <td width="51%"  valign="top" bordercolor="#F2F2F2" >
        
        <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td height="25"  class="Estilo97">&nbsp; INGRESO <span class="Estilo105">CARGO</span></td>
          </tr>
        </table>
          <iframe src="ingcargosempresa.php" width="98%" height="100%" frameborder="No" allowtransparency="true"></iframe></td>
        <td width="49%" align="center" valign="top" bordercolor="#F2F2F2"><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td height="25"  class="Estilo97">&nbsp; ACTUALIZAR <span class="Estilo105">CARGO</span></td>
          </tr>
        </table>          <iframe src="actcargoempresa.php" width="98%" height="100%" frameborder="No" allowtransparency="true"></iframe></td>
        </tr>
    </table></td>
  </tr>
</table>
</body>

