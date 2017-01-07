<?
$Error =$_GET['error'];
?>
<? include("title.php"); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE><?=$Title?></TITLE>
<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
<STYLE type=text/css>
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background: url(Images/bg.jpg) 50% 0 no-repeat fixed;
	background-image: url(Images/bg.jpg);	
	}
A:link {
	COLOR: #A3A3A3;
	TEXT-DECORATION: none
}
A:visited {
	COLOR: #666666; TEXT-DECORATION: none
}
A:hover {
	COLOR: #039;
	TEXT-DECORATION: underline
}
A:active {
	COLOR: #666666;
	TEXT-DECORATION: none;
	font-family: Arial, Helvetica, sans-serif;
}
.style1 {
	FONT-SIZE: 11px;
	COLOR: #CCC;
	FONT-FAMILY: Arial, Helvetica, sans-serif
}
.style4 {
	FONT-SIZE: 10px;
	FONT-FAMILY: Arial, Helvetica, sans-serif;
	color: #666;
}
.style5 {
	COLOR: #999999
}
H1 {
	Z-INDEX: 1; VISIBILITY: hidden; WIDTH: 300px; POSITION: absolute
}
H2 {
	Z-INDEX: 1;
	VISIBILITY: hidden;
	WIDTH: 543px;
	POSITION: absolute;
	left: 375px;
	top: 637px;
}
.TextField {
background-color: #F3F3F3;
color: #FFFFFF;
font-size: 8pt;
font-family: arial;
border : 1px solid #C6C5C4;

}
.TextField2 {
background-color: #A0A7AD;
color: #FFFFFF;
font-size: 8pt;
font-family: arial;
border : 0px solid #FFFFFF;

}
.TextField1 {background-color: #F3F3F3;
color: #4B4B4B;
font-size: 9pt;
font-family: arial;
border : 1px solid #C6C5C4;
}
.Estilo61 {font-size: 9px; color: #FFFFFF; }
.Estilo97 {
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
	font-size: 24px;
	color: #E036C6;
}
.Estilo98 {color: #111110}
.Estilo99 {color: #FFFFFF}
.Estilo100 {font-size: 16px}
.Estilo101 {
	font-size: 18;
	font-weight: bold;
}
.portada {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-weight: bold;
	color: #0F1A77;
}
.portadacontenido {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	text-align: justify;
	color: #666;
}
.Slogan {
	font-size: 10px;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	color: #497D9C;
	font-weight: bold;
}
.portada {
	font-size: 16px;
}
.portadacontenido {
}
.Estilo93 {color: #FF0000;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
</STYLE>
<SCRIPT language=JavaScript type=text/JavaScript>
<!--

function MM_preloadImages() { //v3.0
  var d=document; if(d.Images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</SCRIPT>

<script language="javascript">
function mis_datos(){
var key=window.event.keyCode;
if (key < 48 || key > 57){
window.event.keyCode=0;
}}
</script>

</HEAD>
<BODY>
<DIV align=center>
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
  <TBODY>
  <TR>
    <TD vAlign=center align=middle>
      <DIV align=center>
      <TABLE height=420 cellSpacing=0 cellPadding=0 width="100%" border=0>
        <TBODY>
        <TR>
          <TD valign="middle">
            <DIV align=center>
              <table width="329" border="0" cellSpacing=0 cellPadding=0 background="Images/bg-log.png">
                <tr>
                  <td width="329" height="400" valign="top"><form name="form1" method="post" action="logueo.php" style="margin:0">
                    <table width="263" border="0" align="center" cellSpacing=0 cellPadding=0>
                      <tr>
                        <td width="263" height="201" valign="top"><table width="255" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="251" height="113">&nbsp;</td>
                          </tr>
                        </table>
                          <table width="260" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <td width="251" height="56" align="center"><span class="style1"><? 
if ($Error == "a")
{
echo "Ha ingresado campos vacios";
}
elseif ($Error == "b")
{
echo "Cédula o clave incorrecta";
}
elseif ($Error == "d")
{
echo "Su cuenta esta bloqueada";
}
elseif ($Error == "e")
{
echo "Su cuenta ha expirado";
}
elseif ($Error == "f")
{
echo "Su sesion ha expirado";
}
?></span></td>
                            </tr>
                          </table></td>
                      </tr>
                    </table>
                    <table width="265" border="0" align="center" cellSpacing=0 cellPadding=0>
                      <tr>
                        <td width="256" height="27"><label>
                          <input name="Usuario" type="text" class="TextField2" id="Usuario" onFocus="this.style.backgroundColor='#4A6B88';" onBlur="this.style.backgroundColor='#A0A7AD'" style="width:98%"  onKeypress="mis_datos()" autocomplete=off>
                        </label></td>
                      </tr>
                    </table>
                    <table width="263" border="0" align="center" cellSpacing=0 cellPadding=0>
                      <tr>
                        <td width="263" height="51">&nbsp;</td>
                      </tr>
                    </table>
                    <table width="265" border="0" align="center" cellSpacing=0 cellPadding=0>
                      <tr>
                        <td width="256" height="27"><label>
                          <input name="Pass" type="password" class="TextField2" id="Pass" onFocus="this.style.backgroundColor='#4A6B88';" onBlur="this.style.backgroundColor='#A0A7AD'" style="width:98%">
                        </label></td>
                      </tr>
                    </table>
                    <table width="263" border="0" align="center" cellSpacing=0 cellPadding=0>
                      <tr>
                        <td width="263" height="21">&nbsp;</td>
                      </tr>
                    </table>
                    <table width="267" border="0" align="center" cellSpacing=0 cellPadding=0>
                      <tr>
                        <td width="267" height="27" align="right"><input type="image" src="Images/bt-log.png"></td>
                      </tr>
                    </table>
                  </form></td>
                </tr>
              </table>
              <table width="980" border="0" cellSpacing=0 cellPadding=0>
              <tr>                </tr>
              </table>
            </DIV></TD></TR></TBODY></TABLE></DIV></TD></TR></TBODY></TABLE></DIV>
</BODY></HTML>
