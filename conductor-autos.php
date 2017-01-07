<? 
include("variables.php"); 

$Id			=	$_REQUEST["Id"];
$dale		=	$_REQUEST["dale"];
$Opc		=	$_REQUEST["Opc"];

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
.itemselect1 {font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	color: #006;
	text-align: left;
}
.itemselect1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	color: #666;
	text-align: left;
}
.listado {font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
	color: #FFF;
}
.listado1 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #FFF;
}
.listado2 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #FFF;
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
    <td align="left" valign="top" bgcolor="#F7F7F7"><table width="100%" height="20" border="0" bordercolor="#FFFFFF" cellpadding="0" cellspacing="0" background="Images/bg-seleccion.jpg">
      <tr>
        <td width="1%" class="itemselect1">&nbsp;</td>
        <td width="100%" align="left" class="itemselect1">INFORMACION DE CONDUCTORES</td>
      </tr>

    </table>
<iframe src="conductores-vehiculos.php?Id=<?=$Id?>&dale=<?=$dale?>&Opc=<?=$Opc?>" scrolling="no" width="100%" height="100%" frameborder="No" allowtransparency="true"></iframe></td>
  </tr>
</table>
</body>

