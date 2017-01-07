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
<table width="100%" height="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="408" align="left" valign="top" bgcolor="#F7F7F7"><table width="100%" border="0" bordercolor="#FFFFFF" cellpadding="0" cellspacing="0" background="Images/bg-seleccion.jpg">
      <tr>
        <td width="2%" height="37" align="center" class="itemselect">&nbsp;</td>
        <td width="98%" class="itemselect">PUESTOS DE CONTROL</td>
      </tr>
    </table>
      <table width="99%" height="90%" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#996633">
      <tr valign="middle" bordercolor="#FFFFFF" bgcolor="#E6E6E6">
        <td width="69%" height="243" valign="top" bordercolor="#F2F2F2" bgcolor="#F7F7F7">
        
        
        
        <br>
        <table width="98%" border="0" height="99%" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="54%"  valign="top" bgcolor="#FBFBFB"><table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FBFBFB">
              <tr>
                <td height="450" align="center" valign="middle" bgcolor="#FBFBFB"><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="25" bgcolor="#F3F3F3" class="Estilo97">&nbsp; INGRESO <span class="Estilo105">PUESTO DE CONTROL</span></td>
                  </tr>
                </table>
                  <iframe src="ingpuestoscontrol.php" width="98%" height="100%" frameborder="No" allowtransparency="true"></iframe></td>
              </tr>
            </table></td>
            <td width="46%" valign="top" bgcolor="#F0F0F0"><table width="94%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FBFBFB">
              <tr>
                <td height="95" align="center" valign="middle"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="25" bgcolor="#F3F3F3" class="Estilo97">&nbsp; INGRESO <span class="Estilo105">DEPARTAMENTOS</span></td>
                  </tr>
                </table>
                  <iframe src="inddep.php" width="98%" height="100%" frameborder="No" allowtransparency="true"></iframe></td>
              </tr>
            </table>
              <table width="94%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FBFBFB">
                <tr>
                  <td height="160" align="center" valign="middle"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="25" bgcolor="#F3F3F3" class="Estilo97">&nbsp; INGRESO <span class="Estilo105">MUNICIPIOS</span></td>
                    </tr>
                  </table>
                    <iframe src="indmun.php" width="100%" height="100%" frameborder="No" allowtransparency="true"></iframe></td>
                </tr>
              </table>
              <table width="94%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FBFBFB">
                <tr>
                  <td height="190" align="center" valign="middle"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="25" bgcolor="#F3F3F3" class="Estilo97">&nbsp; INGRESO <span class="Estilo105">CABECERA MUNICIPAL</span></td>
                    </tr>
                  </table>
                    <iframe src="indcab.php" width="100%" height="100%" frameborder="No" allowtransparency="true"></iframe></td>
                </tr>
              </table></td>
          </tr>
        </table></td>
        <td width="31%" align="center" valign="top" bordercolor="#F2F2F2" bgcolor="#CCCCCC"><iframe src="opcionespuestos.php" width="98%" height="96%" frameborder="No" allowtransparency="true"></iframe></td>
        </tr>
    </table></td>
  </tr>
</table>
</body>

