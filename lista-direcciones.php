<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script language="JavaScript" type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}


function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<script language="JavaScript">
var message="Boton derecho deshabilitado.";
function click(e) {
if (document.all) {
if (event.button == 2) {
alert(message);
return false;
}
}
if (document.layers) {
if (e.which == 3) {
alert(message);
return false;
}
}
}
if (document.layers) {
document.captureEvents(Event.MOUSEDOWN);
}
document.onmousedown=click;
// -->
</script>

<script> 
function retornavalores(registro, nombre){ 
   window.opener.document.getElementById('direccion').value=registro; 
   window.opener.document.getElementById('Nit').value=nombre; 
   window.close(); 
} 
</script>

</head>

<style type="text/css">
.general {
	font-family: "Times New Roman", Times, serif;
	font-size: 14pt;
	font-style: normal;
	line-height: normal;
	font-weight: normal;
	text-transform: capitalize;
	text-decoration: none;
	background-color: #FFFFFF;
	border: thin ridge #007A35;
}
.general01 {
	font-family: "Times New Roman", Times, serif;
	font-size: 14pt;
	font-style: normal;
	line-height: normal;
	font-weight: normal;
	text-transform: none;
	text-decoration: none;
	background-color: #FFFFFF;
	border-top: thin none #007A35;
	border-right: thin ridge #007A35;
	border-bottom: thin none #007A35;
	border-left: thin none #007A35;
}

.general02 {
	font-family: "Times New Roman", Times, serif;
	font-size: 14pt;
	font-style: normal;
	line-height: normal;
	font-weight: normal;
	text-transform: capitalize;
	text-decoration: none;
	background-color: #FFFFFF;
	border-top: thin solid #007A35;
	border-right: thin solid #007A35;
	border-bottom: thin none #007A35;
	border-left: thin solid #007A35;
}

.general03 {
	font-family: "Times New Roman", Times, serif;
	font-size: 14pt;
	font-style: normal;
	line-height: normal;
	font-weight: normal;
	text-transform: capitalize;
	text-decoration: none;
	background-color: #FFFFFF;
	border-top: thin solid #007A35;
	border-right: thin solid #007A35;
	border-bottom: thin solid #007A35;
	border-left: thin solid #007A35;
}

.campo01 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 8pt;
	font-style: normal;
	line-height: normal;
	font-weight: normal;
	text-transform: none;
	text-decoration: none;
	background-color: #FFFFFF;
	bottom: auto;
	clip:  rect(auto auto auto auto);
	color: #000000;
	border-top: 1px none #007A35;
	border-right: 1px outset #007A35;
	border-bottom: 1px none #007A35;
	border-left: 1px none #007A35;
}

.campo011 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 8pt;
	font-style: normal;
	line-height: normal;
	font-weight: normal;
	text-transform: none;
	text-decoration: none;
	background-color: #FFFFFF;
	bottom: auto;
	clip:  rect(auto auto auto auto);
	color: #000000;
	border-top: 1px none #007A35;
	border-right: 1px none #007A35;
	border-bottom: 1px none #007A35;
	border-left: 1px none #007A35;
}

.campo012 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 8pt;


	font-style: normal;
	line-height: normal;
	font-weight: normal;
	text-transform: none;
	text-decoration: none;
	background-color: #FFFFFF;
	bottom: auto;
	clip:  rect(auto auto auto auto);
	color: #000000;
	border-top: 1px none #007A35;
	border-right: 1px none #007A35;
	border-bottom: 1px solid #007A35;
	border-left: 1px none #007A35;
}

.campo012A {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10pt;
	font-style: normal;
	line-height: normal;
	font-weight: normal;
	text-transform: none;
	text-decoration: none;
	background-color: #FFFFFF;
	bottom: auto;
	clip:  rect(auto auto auto auto);
	color: #000000;
	border-top: 1px none #007A35;
	border-right: 1px none #007A35;
	border-bottom: 1px solid #007A35;
	border-left: 1px none #007A35;
}

.campo013 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 8pt;
	font-style: normal;
	line-height: normal;
	font-weight: normal;
	text-transform: none;
	text-decoration: none;
	background-color: #FFFFFF;
	bottom: auto;
	clip:  rect(auto auto auto auto);
	color: #000000;
	border-top: 1px none #007A35;
	border-right: 1px solid #007A35;
	border-bottom: 1px solid #007A35;
	border-left: 1px none #007A35;
}

.campo013A {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 8pt;
	font-style: normal;
	line-height: normal;
	font-weight: normal;
	text-transform: none;
	text-decoration: none;
	background-color: #FFFFFF;
	bottom: auto;
	clip:  rect(auto auto auto auto);
	color: #000000;
	border-top: 1px none #007A35;
	border-right: 1px solid #007A35;
	border-bottom: 1px solid #007A35;
	border-left: 1px solid #007A35;
}

.campo014 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 9pt;
	font-style: normal;
	line-height: normal;
	font-weight: bold;
	text-transform: capitalize;
	text-decoration: none;
	background-color: #FFFFFF;
	bottom: auto;
	clip:  rect(auto auto auto auto);
	color: #000000;
	border-top: 1px none #007A35;
	border-right: 1px none #007A35;
	border-bottom: 1px none #007A35;
	border-left: 1px none #007A35;
}

.campo015 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 9pt;
	font-style: normal;
	line-height: normal;
	font-weight: bold;
	text-transform: capitalize;
	text-decoration: none;
	background-color: #FFFFFF;
	bottom: auto;
	clip:  rect(auto auto auto auto);
	color: #000000;
	border-top: thin solid #007A35;
	border-right: thin none #007A35;
	border-bottom: thin none #007A35;
	border-left: thin none #007A35;
}

.campo016 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 8pt;
	font-style: normal;
	line-height: normal;
	font-weight: normal;
	text-transform: capitalize;
	text-decoration: none;
	background-color: #FFFFFF;
	bottom: auto;
	clip:  rect(auto auto auto auto);
	color: #000000;
	border-top: 1px solid #CCCCCC;
	border-right: 1px solid #CCCCCC;
	border-bottom: 1px solid #CCCCCC;
	border-left: 1px solid #CCCCCC;
}

.campo017 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 8pt;
	font-style: normal;
	line-height: normal;
	font-weight: normal;
	text-transform: capitalize;
	text-decoration: none;
	background-color: #FFFFFF;
	bottom: auto;
	clip:  rect(auto auto auto auto);
	color: #000000;
	border-top: 1px solid #007A35;
	border-right: 1px none #007A35;
	border-bottom: 1px solid #007A35;
	border-left: 1px none #007A35;
}

.campo018 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 8pt;
	font-style: normal;
	line-height: normal;
	font-weight: normal;
	text-transform: none;
	text-decoration: none;
	background-color: #FFFFFF;
	bottom: auto;
	clip:  rect(auto auto auto auto);
	color: #000000;
	border-top: 1px solid #007A35;
	border-right: 1px solid #007A35;
	border-bottom: 1px solid #007A35;
	border-left: 1px none #007A35;
}

.campo019 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 8pt;
	font-style: normal;
	line-height: normal;
	font-weight: normal;
	text-transform: none;
	text-decoration: none;
	background-color: #FFFFFF;
	bottom: auto;

	clip:  rect(auto auto auto auto);
	color: #000000;
	border-top: 1px solid #007A35;
	border-right: 1px none #007A35;
	border-bottom: 1px solid #007A35;
	border-left: 1px none #007A35;
}

.campo02 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10pt;
	font-style: normal;
	line-height: normal;
	font-weight: normal;
	text-transform: none;
	text-decoration: none;
	background-color: #FFFFFF;
	bottom: auto;
	clip:  rect(auto auto auto auto);
	color: #007A35;
	border-top: 1px none #007A35;
	border-right: 1px solid #007A35;
	border-bottom: 1px none #007A35;
	border-left: 1px none #007A35;
}

.campo03 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10pt;
	font-style: normal;
	line-height: normal;
	font-weight: normal;
	text-transform: none;
	text-decoration: none;
	background-color: #FFFFFF;
	bottom: auto;
	clip:  rect(auto auto auto auto);
	color: #007A35;
	border-top: 1px none #007A35;
	border-right: 1px none #007A35;
	border-bottom: 1px none #007A35;
	border-left: 1px none #007A35;
}


.campo1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: none;
	background-color: #FFFFFF;
	bordercolor="#E2E9E3"
	bgcolor="#E2E9E3"
	height: auto;
	line-height: normal;
}

.campo1A {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: capitalize;
	background-color: #CCCCCC;
	bordercolor="#FFFFFF"
	bgcolor="#F0F0F0"
	height: auto;
	line-height: 18px;
	border: 1px solid #B7B7B7;
	vertical-align: middle;
	text-decoration: blink;
	height: 20px;
}

.campo1B {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	font-style: normal;
	font-weight: bolder;
	font-variant: normal;
	text-transform: capitalize;
	background-color: #EBEBEB;
	bordercolor="#FFFFFF"
	bgcolor="#E2E9E3"
	height: auto;
	line-height: 18px;
	border: 1px solid #000033;
	vertical-align: middle;
	height: 25px;
}



.campo11 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: capitalize;
	background-color: #E6F2EB;
	bordercolor="#E2E9E3"
	bgcolor="#E2E9E3"
	height: auto;
	line-height: normal;
	color: #000000;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: solid;
	border-left-style: none;
	border-top-color: #007A35;
	border-right-color: #007A35;
	border-bottom-color: #007A35;
	border-left-color: #007A35;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
}

.campo12 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-style: normal;
	font-weight: bold;
	font-variant: normal;
	text-transform: none;
	background-color: #80B89F;
	bordercolor="#E2E9E3"
	bgcolor="#E2E9E3"
	height: auto;
	line-height: normal;
	color: #000000;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: solid;
	border-left-style: none;
	border-top-color: #007A35;
	border-right-color: #007A35;
	border-bottom-color: #007A35;
	border-left-color: #007A35;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
}

.campo13 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: capitalize;
	background-color: #E6F2EB;
	bordercolor="#E2E9E3"
	bgcolor="#E2E9E3"
	height: auto;
	line-height: normal;
	color: #000000;
	border-top-style: none;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: none;
	border-top-color: #007A35;
	border-right-color: #007A35;
	border-bottom-color: #007A35;
	border-left-color: #007A35;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
}

.campo14 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: capitalize;
	background-color: #E6F2EB;
	bordercolor="#E2E9E3"
	bgcolor="#E2E9E3"
	height: auto;
	line-height: normal;
	color: #000000;
	border-top: 1px none #007A35;
	border-right: 1px solid #007A35;
	border-bottom: 1px none #007A35;
	border-left: 1px none #007A35;
}

.campo15 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-style: normal;
	font-weight: bold;
	font-variant: normal;
	text-transform: capitalize;
	background-color: #E6F2EB;
	bordercolor="#E2E9E3"
	bgcolor="#E2E9E3"
	height: auto;
	line-height: normal;
	color: #000000;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: solid;
	border-left-style: solid;
	border-top-color: #007A35;
	border-right-color: #007A35;
	border-bottom-color: #007A35;
	border-left-color: #007A35;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;}

.campo16 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: capitalize;
	background-color: #E6F2EB;
	bordercolor="#E2E9E3"
	bgcolor="#E2E9E3"
	height: auto;
	line-height: normal;
	color: #000000;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: solid;
	border-left-style: solid;
	border-top-color: #007A35;
	border-right-color: #007A35;
	border-bottom-color: #007A35;
	border-left-color: #007A35;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
}

.campo17 {
	font-family: Verdana, Arial, Helvetica;
	font-size: 5.9pt;
	font-style: normal;
	font-weight: 500;
	font-variant: normal;
	text-transform: none;
	background-color: #F0F0F0;
	bordercolor="#E2E9E3"
	bgcolor="#E2E9E3"
	height:  10pt;
	line-height: 8pt;
	color: #000000;
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-top-color: #666666;
	border-right-color: #666666;
	border-bottom-color: #666666;
	border-left-color: #666666;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	text-align: center;
}

.campo171 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: capitalize;
	background-color: #003366;
	bordercolor="#E2E9E3"
	bgcolor="#E2E9E3"
	height: auto;
	line-height: normal;
	color: #FFFFFF;
	border-top-style: none;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: none;
	border-top-color: #002425;
	border-right-color: #002425;
	border-bottom-color: #002425;
	border-left-color: #002425;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
}

.campo1711 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: capitalize;
	background-color: #234A56;
	bordercolor="#E2E9E3"
	bgcolor="#E2E9E3"
	height: auto;
	line-height: normal;
	color: #FFFFFF;
	border-top-style: none;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: none;
	border-top-color: #002425;
	border-right-color: #002425;
	border-bottom-color: #002425;
	border-left-color: #002425;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
}

.campo172 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: none;
	background-color: #F0F0F0;
	bordercolor="#E2E9E3"
	bgcolor="#E2E9E3"
	height: auto;
	line-height: normal;
	color: #000000;
	border-top-style: none;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: none;
	border-top-color: #002425;
	border-right-color: #002425;
	border-bottom-color: #002425;
	border-left-color: #002425;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
}

.campo172A {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: none;
	background-color: #E6F2EB;
	bordercolor="#E2E9E3"
	bgcolor="#E2E9E3"
	height: auto;
	line-height: normal;
	color: #000000;
	border-top-style: none;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: none;
	border-top-color: #002425;
	border-right-color: #002425;
	border-bottom-color: #002425;
	border-left-color: #002425;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
}

.campo173 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	font-style: normal;
	font-weight: lighter;
	font-variant: normal;
	text-transform: none;
	background-color: #E6F2EB;
	bordercolor="#E2E9E3"
	bgcolor="#E2E9E3"
	height: auto;
	line-height: normal;
	color: #000000;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	border-top-color: #B7B7B7;
	border-right-color: #B7B7B7;
	border-bottom-color: #B7B7B7;
	border-left-color: #B7B7B7;
	border-top-width: 0px;
	border-right-width: 0px;
	border-bottom-width: 0px;
	border-left-width: 0px;
	text-decoration: blink;
}


.campo18 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: capitalize;
	background-color: #E6F2EB;
	bordercolor="#E2E9E3"
	bgcolor="#E2E9E3"
	height: auto;
	line-height: normal;
	color: #000000;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: solid;
	border-left-style: none;
	border-top-color: #007A35;
	border-right-color: #007A35;
	border-bottom-color: #007A35;
	border-left-color: #007A35;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
}

.campo18A {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: capitalize;
	background-color: #E6F2EB;
	bordercolor="#E2E9E3"
	bgcolor="#E2E9E3"
	height: auto;
	line-height: normal;
	color: #000000;
	border-top-style: none;
	border-right-style: solid;
	border-bottom-style: none;
	border-left-style: none;
	border-top-color: #007A35;
	border-right-color: #007A35;
	border-bottom-color: #007A35;
	border-left-color: #007A35;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
}

.campo18B {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: capitalize;
	background-color: #E6F2EB;
	bordercolor="#E2E9E3"
	bgcolor="#E2E9E3"
	height: auto;
	line-height: normal;
	color: #000000;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	border-top-color: #007A35;
	border-right-color: #007A35;
	border-bottom-color: #007A35;
	border-left-color: #007A35;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
}

.campo18C {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: capitalize;
	background-color: #E6F2EB;
	bordercolor="#E2E9E3"
	bgcolor="#E2E9E3"
	height: auto;
	line-height: normal;
	color: #000000;
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-top-color: #007A35;
	border-right-color: #007A35;
	border-bottom-color: #007A35;
	border-left-color: #007A35;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
}

.campo18D {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: capitalize;
	background-color: #E6F2EB;
	bordercolor="#E2E9E3"
	bgcolor="#E2E9E3"
	height: auto;
	line-height: normal;
	color: #000000;
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: none;
	border-top-color: #007A35;
	border-right-color: #007A35;
	border-bottom-color: #007A35;
	border-left-color: #007A35;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
}

.campo18E {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: capitalize;
	background-color: #E6F2EB;
	bordercolor="#E2E9E3"
	bgcolor="#E2E9E3"
	height: auto;
	line-height: normal;
	color: #000000;
	border-top-style: none;
	border-right-style: solid;
	border-bottom-style: none;
	border-left-style: solid;
	border-top-color: #007A35;
	border-right-color: #007A35;
	border-bottom-color: #007A35;
	border-left-color: #007A35;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
}

.campo18F {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: capitalize;
	background-color: #E6F2EB;
	bordercolor="#E2E9E3"
	bgcolor="#E2E9E3"
	height: auto;
	line-height: normal;
	color: #000000;
	border-top-style: none;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: none;
	border-top-color: #007A35;
	border-right-color: #007A35;
	border-bottom-color: #007A35;
	border-left-color: #007A35;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
}



.campo2 {
	font-family: "Times New Roman", Times, serif;
	font-size: 1.35cm;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: capitalize;
	background-color: #007A35;
	bordercolor="#1F7635"
	bgcolor="#1F7635"
	color: #000000;
	line-height: normal;
	color: #FFFFFF;
	border: #007A35;

}
.campo3 {
	font-family: "Times New Roman", Times, serif;
	font-size: 9px;
	font-style: normal;
	font-weight: bold;
	font-variant: normal;
	text-transform: capitalize;
	background-color: #E2E9E3;
	bordercolor="#E2E9E3"
	bgcolor="#E2E9E3"
	height: auto;
	line-height: normal;}

.campo4 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: capitalize;
	background-color: "#00A872";
	bordercolor="#00A872"
	bgcolor="#00A872"
	height: auto;
	line-height: normal;
}


.verticaltext {
writing-mode: tb-rl;
filter: flipv fliph;
}

.verticaltext1 {
	writing-mode: tb-rl;
	filter: flipv fliph;
	border-top: 1px none #007A35;
	border-right: 1px none #007A35;
	border-bottom: 1px none #007A35;
	border-left: 1px solid #007A35;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #000000;
	font-size: 14px;
}

.verticaltext2 {
	writing-mode: tb-rl;
	filter: flipv fliph;
	background-color: #E6F2EB;
	border-top: 1px none #007A35;
	border-right: 1px none #007A35;
	border-bottom: 1px none #007A35;
	border-left: 1px solid #007A35;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}

</style></style>

<script type="text/javascript" src="trans-direcciones.js"></script>

<body onLoad="MM_preloadImages('bp_uploadr.gif','bp_bajarr.gif','bp_arribar.gif');setInterval('blinkIt()',500); cargaValorCampo('puente');decodificarDireccion(document.getElementById('puente').value,'direccion')"	    >
<script type="text/javascript">
function blinkIt() {
 if (!document.all) return;
 else {
   for(i=0;i<document.all.tags('blink').length;i++){
      s=document.all.tags('blink')[i];
      s.style.visibility=(s.style.visibility=='visible')?'hidden':'visible';
   }
 }
}
</script>


<div style="position:absolute; center: 0px; top: 0px;">
<form action="" method="get" name="FormDireccion" id="FormDireccion" oncontextmenu="return false">

  <table width="100%" border="0" align="center">
    <tr>
      <td height="18" colspan="3" background="/WebRutMuisca/images/barracaltitulo.jpg"  ><div align="center"><font color="#FFFFFF" face="Arial, Helvetica, sans-serif"><strong>Generador
            de Direcciones</strong></font></div></td>
    </tr>

    <tr>
      <td height="9" colspan="3" > <div><span style="font-size: 10px"><font face="Arial, Helvetica, sans-serif"><strong>DIRECCION</strong><strong></strong></font></span><font size="2" face="Arial, Helvetica, sans-serif"><strong><br>
      </strong></font>
          <input name="direccion" id="direccion" type="text" class="campo1B" value="" size="101" readonly="readonly">
        </div></td>
    </tr>

    <tr  height="26">
      <td  colspan="3" height="400" class="campo016">

	  <table width="100%" >
            <tr height="20">
              <td height="25" colspan="11" background="/WebRutMuisca/images/barracalcu2.jpg" class="campo1711"  >&nbsp;&nbsp;<strong>NOMENCLATURAS
                MAS USADAS</strong></td>
            </tr>
            <tr height="26">
              <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'AP','puente');
											   concatenaString(document.getElementById('direccion').value, 'APARTAMENTO','direccion');
											   } else enComplemento();">
                <label > <strong>A</strong>partamento</label></td>

              <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'AV','puente');
											   concatenaString(document.getElementById('direccion').value, 'AVENIDA','direccion');
											   muestraComplementoCalle('avenida');} else enComplemento();" >
                       <div align="center"><strong>A</strong>venida</label> </div></td>
              <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'AUT','puente');
											   concatenaString(document.getElementById('direccion').value, 'AUTOPISTA','direccion');
											    muestraComplementoCalle('autopista');} else enComplemento();">
                <label > <strong>A</strong>utopista</label></td>
              <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'BRR','puente');
											    concatenaString(document.getElementById('direccion').value, 'BARRIO','direccion');
											    muestraComplementoCalle('Barrio');} else enComplemento();" >
                <label  align="center"> <strong>B</strong>arrio</label></td>

              <td width="88" align="center" class="campo171"
			                    onClick="if(document.getElementById('complementoActivo').value=='0') {
			                               concatenaString(document.getElementById('puente').value,'CL','puente');
								           concatenaString(document.getElementById('direccion').value, 'CALLE','direccion');
										   muestraComplementoCalle('Calle');
										 }
										 else enComplemento();">
                <label > <strong>C</strong>alle</label></td>
              <td width="88" align="center" class="campo171"
	                     onClick="if(document.getElementById('complementoActivo').value=='0') {
			                               concatenaString(document.getElementById('puente').value,'CR','puente');
								           concatenaString(document.getElementById('direccion').value, 'CARRERA','direccion');
										   muestraComplementoCalle('Calle');
										 }
										 else enComplemento();">
			        <label > <strong>C</strong>arrera</label></td>
              <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'DG','puente');
											   concatenaString(document.getElementById('direccion').value, 'DIAGONAL','direccion');
											   } else enComplemento();"> <label >

                <div align="center"><strong>D</strong>iagonal</div></label>
              </td>
              <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'ED','puente');
											   concatenaString(document.getElementById('direccion').value, 'EDIFICIO','direccion');
											   muestraComplementoCalle('Edificio');} else enComplemento();" > <label >
                <div align="center"><strong>E</strong>dificio</div></label>
              </td>
              <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'NORTE','puente');
											   concatenaString(document.getElementById('direccion').value, 'NORTE','direccion');
											  } else enComplemento();"> <label >

                <div align="center"><strong>N</strong>orte</div></label>
              </td>
              <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'SUR','puente');
											   concatenaString(document.getElementById('direccion').value, 'SUR','direccion');
											   } else enComplemento();"> <label >
                <div align="center"><strong>S</strong>ur</div></label>
              </td>
              <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {if(document.getElementById('complementoActivo').value=='0') { concatenaString(document.getElementById('puente').value,'TV','puente');
											   concatenaString(document.getElementById('direccion').value, 'TRANSVERSAL','direccion');
											   } else enComplemento();} else enComplemento();"> <label>

                <div align="center"><strong>T</strong>ransversal</div></label>
              </td>
            </tr>
          </table >
		  <table width="100%" >
            <tr height="26" >
              <td width="88" height="26" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'AD','puente');
											   concatenaString(document.getElementById('direccion').value, 'ADMINISTRACION','direccion');
											  } else enComplemento();">
                <label > <strong>A</strong>dministraci&oacute;n</label> </td>
              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'AG','puente');
											   concatenaString(document.getElementById('direccion').value, 'AGENCIA','direccion');
											   muestraComplementoCalle('agencia');} else enComplemento();">
                <label > <strong>A</strong>gencia</label> </td>

              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'AGP','puente');
											   concatenaString(document.getElementById('direccion').value, 'AGRUPACION','direccion');
											   muestraComplementoCalle('agrupación');} else enComplemento();">
                <label > <strong>A</strong>grupaci&oacute;n</label></td>
              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'ALM','puente');
											   concatenaString(document.getElementById('direccion').value, 'ALMACEN','direccion');
											   muestraComplementoCalle('almacen');} else enComplemento();">
                <label > <strong>A</strong>lmacen</label> </td>
				<td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'AL','puente');
											   concatenaString(document.getElementById('direccion').value, 'ALTILLO','direccion');
											   } else enComplemento();">

                <label > <strong>A</strong>ltillo</label></td>
              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'APTDO','puente');
											   concatenaString(document.getElementById('direccion').value, 'APARTADO','direccion');
											  } else enComplemento();" >
                <label > <strong>A</strong>partado</label> </td>
              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'AP','puente');
											   concatenaString(document.getElementById('direccion').value, 'APARTAMENTO','direccion');
											   } else enComplemento();">
                <label > <strong>A</strong>partamento</label></td>

              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'AUT','puente');
											   concatenaString(document.getElementById('direccion').value, 'AUTOPISTA','direccion');
											   muestraComplementoCalle('autopista');} else enComplemento();" >
                <label > <strong>A</strong>utopista</label></td>
              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'AV','puente');
											   concatenaString(document.getElementById('direccion').value, 'AVENIDA','direccion');
											   muestraComplementoCalle('avenida');} else enComplemento();">
                <label ><strong>A</strong>venida</label> </td>
              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'AK','puente');
											   concatenaString(document.getElementById('direccion').value, 'AVENIDA CARRERA','direccion');
											   muestraComplementoCalle('Avenida Carrera');} else enComplemento();">

                <label > <strong>A</strong>venida <strong>C</strong>arrera</label>
              </td>
            </tr>
            <tr height="26" >
              <td width="88" height="29" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'BRR','puente');
											   concatenaString(document.getElementById('direccion').value, 'BARRIO','direccion');
											   muestraComplementoCalle('Barrio');} else enComplemento();">
                <label> <strong>B</strong>arrio</label></td>

              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'BL','puente');
											   concatenaString(document.getElementById('direccion').value, 'BLOQUE','direccion');
											   } else enComplemento();">
                <label > <strong>B</strong>loque</label></td>
              <td width="88"  align="center" class="campo172"
			        onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'BG','puente');
					   concatenaString(document.getElementById('direccion').value, 'BODEGA','direccion');
					  } else enComplemento();"
			  >
                <label > <strong>B</strong>odega</label></td>
              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'BLV','puente');
											   concatenaString(document.getElementById('direccion').value, 'BOULEVAR','direccion');
											   muestraComplementoCalle('boulevar');} else enComplemento();">
                <label  > <strong>B</strong>oulevar</label> </td>

				<td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'CL','puente');
											   concatenaString(document.getElementById('direccion').value, 'CALLE','direccion');
											   muestraComplementoCalle('Calle');} else enComplemento();">
                <label > <strong>C</strong>alle</label></td>
			  <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'CN','puente');
							 concatenaString(document.getElementById('direccion').value, 'CAMINO','direccion');
							  muestraComplementoCalle('camino');} else enComplemento();">
                <label > <strong>C</strong>amino</label></td>
			  <td width="88" align="center" class="campo172"
			       onClick="if(document.getElementById('complementoActivo').value=='0') {
			                               concatenaString(document.getElementById('puente').value,'CR','puente');
								           concatenaString(document.getElementById('direccion').value, 'CARRERA','direccion');
										   muestraComplementoCalle('Carrera');
										 }
										 else enComplemento();"  >
                <label > <strong>C</strong>arrera</label></td>

			  <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'CARR','puente');
											   concatenaString(document.getElementById('direccion').value, 'CARRETERA','direccion');
											   muestraComplementoCalle('Carretera');} else enComplemento();">
                <label > <strong>C</strong>arretera</label></td>
              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'CA','puente');
											   concatenaString(document.getElementById('direccion').value, 'CASA','direccion');
											   muestraComplementoCalle('Casa');} else enComplemento();"  >
                <label  align="center" > <strong>C</strong>asa</label></td>
				<td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'CEL','puente');
											   concatenaString(document.getElementById('direccion').value, 'CELULA','direccion');
											   muestraComplementoCalle('Celula');} else enComplemento();">
                <label > <strong>C</strong>elula</label></td>

            </tr>
            <tr height="26" >
              <td width="88" height="30" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'CC','puente');
											   concatenaString(document.getElementById('direccion').value, 'CENTRO COMERCIAL','direccion');
											   muestraComplementoCalle('Ctro. Comercial');} else enComplemento();">
                <label > <strong>C</strong>etro <strong>C</strong>omercial</label></td>
              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'CIR','puente');
											   concatenaString(document.getElementById('direccion').value, 'CIRCULAR','direccion');
											  } else enComplemento();">
                <label > </label> <strong>C</strong>ircular</td>

				<td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'CRV','puente');
											   concatenaString(document.getElementById('direccion').value, 'CIRCUNVALAR','direccion');
											   } else enComplemento();" >
                <label > <strong>C</strong>ircunvalar</label></td>
              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'CD','puente');
											   concatenaString(document.getElementById('direccion').value, 'CIUDADELA','direccion');
											   muestraComplementoCalle('Ciudadela');} else enComplemento();">
                <label > <strong>C</strong>iudadela</label></td>
              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'CONJ','puente');
											   concatenaString(document.getElementById('direccion').value, 'CONJUNTO','direccion');
											   muestraComplementoCalle('conjunto');} else enComplemento();">
                <label > <strong>C</strong>onjunto</label></td>

              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'CON','puente');
											   concatenaString(document.getElementById('direccion').value, 'CONJUNTO RESIDENCIAL','direccion');
											   muestraComplementoCalle('Conjunto');}
											   else enComplemento();">
                <label > <strong>C</strong>onj. <strong>R</strong>esidenc.</label></td>
              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'CS','puente');
											   concatenaString(document.getElementById('direccion').value, 'CONSULTORIO','direccion');
											   } else enComplemento();">
                <label > <strong>C</strong>onsultorio</label></td>
              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'CORR','puente');
											   concatenaString(document.getElementById('direccion').value, 'CORREGIMIENTO','direccion');
											   muestraComplementoCalle('Corregimiento');} else enComplemento();">

                <label > <strong>C</strong>orregimiento</label></td>
              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'DPTO','puente');
											   concatenaString(document.getElementById('direccion').value, 'DEPARTAMENTO','direccion');
											   muestraComplementoCalle('Departamento');} else enComplemento();">
                <label > </label><strong>D</strong>epartamento</td>

              <td width="88" align="center" class="campo172"
			      onClick="if(document.getElementById('complementoActivo').value=='0') {
			                               concatenaString(document.getElementById('puente').value,'DP','puente');
								           concatenaString(document.getElementById('direccion').value, 'DEPOSITO','direccion');
										   muestraComplementoCalle('Deposito');
										 }
										 else enComplemento();"  >
                <label > </label><strong>D</strong>eposito</td>

            </tr>
            <tr height="26" >

              <td width="88" height="27" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'DS','puente');
											   concatenaString(document.getElementById('direccion').value, 'DEPOSITO SOTANO','direccion');
											   } else enComplemento();">
                <label > </label> <strong>D</strong>eposito
                  <strong>S</strong>otano</td>
				  <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'DG','puente');
											   concatenaString(document.getElementById('direccion').value, 'DIAGONAL','direccion');
											   } else enComplemento();">

                <label > </label> <strong>D</strong>iagonal</td>
              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'ED','puente');
											   concatenaString(document.getElementById('direccion').value, 'EDIFICIO','direccion');
											   muestraComplementoCalle('Edificio');} else enComplemento();">
               <strong>E</strong>dificio</td>
              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'EN','puente');
											   concatenaString(document.getElementById('direccion').value, 'ENTRADA','direccion');
											   muestraComplementoCalle('Entrada');} else enComplemento();">
              <strong>E</strong>ntrada</td>

              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'ESQ','puente');
											   concatenaString(document.getElementById('direccion').value, 'ESQUINA','direccion');
											   } else enComplemento();">
               <strong>E</strong>squina</td>
              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'ESTE','puente');
											   concatenaString(document.getElementById('direccion').value, 'ESTE','direccion');
											   } else enComplemento();">
               <strong>E</strong>ste</td>
              <td width="88" align="center" class="campo172"
			         onClick="if(document.getElementById('complementoActivo').value=='0') {
			                               concatenaString(document.getElementById('puente').value,'ET','puente');
								           concatenaString(document.getElementById('direccion').value, 'ETAPA','direccion');
										   muestraComplementoCalle('Etapa');
										 }
										 else enComplemento();">

               <strong>E</strong>tapa</td>
              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'EX','puente');
											   concatenaString(document.getElementById('direccion').value, 'EXTERIOR','direccion');
											   } else enComplemento();">
                <label > </label> <strong>E</strong>xterior</td>
              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'FCA','puente');
											   concatenaString(document.getElementById('direccion').value, 'FINCA','direccion');
											   muestraComplementoCalle('Finca');} else enComplemento();">
                <label > </label> <strong>F</strong>inca</td>

              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'GJ','puente');
								 concatenaString(document.getElementById('direccion').value, 'GARAJE','direccion');
								} else enComplemento();">
                <label > </label> <strong>G</strong>araje</td>
            </tr>
            <tr  height="26">
              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'GS','puente');
								 concatenaString(document.getElementById('direccion').value, 'GARAJE SOTANO','direccion');
								 } else enComplemento();">
                <label > </label> <strong>G</strong>araje
                  <strong>S</strong>otano</td>

              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'HC','puente');
								 concatenaString(document.getElementById('direccion').value, 'HACIENDA','direccion');
								 muestraComplementoCalle('Hacienda');} else enComplemento();">
                <label > </label> <strong>H</strong>acienda</td>
              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'IN','puente');
								 concatenaString(document.getElementById('direccion').value, 'INTERIOR','direccion');
								 } else enComplemento();">
                <label > </label> <strong>I</strong>nterior</td>
              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'KM','puente');
								 concatenaString(document.getElementById('direccion').value, 'KILOMETRO','direccion');
								 } else enComplemento();" >

                <label > </label> <strong>K</strong>ilometro</td>
              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'LC','puente');
								 concatenaString(document.getElementById('direccion').value, 'LOCAL','direccion');
								} else enComplemento();">
                <label > </label> <strong>L</strong>ocal</td>
              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'LM','puente');
								 concatenaString(document.getElementById('direccion').value, 'LOCAL MEZZANINE','direccion');
								 } else enComplemento();">
                <label > <strong>L</strong>ocal <strong>M</strong>ezzanine </label>

              </td>
              <td width="88" align="center" class="campo172"
			         onClick="if(document.getElementById('complementoActivo').value=='0') {
			                               concatenaString(document.getElementById('puente').value,'LT','puente');
								           concatenaString(document.getElementById('direccion').value, 'LOTE','direccion');
										   muestraComplementoCalle('Lote');
										 }
										 else enComplemento();">
                <label > </label> <strong>L</strong>ote</td>
				<td  height="27" width="88"  align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'MZ','puente');
											   concatenaString(document.getElementById('direccion').value, 'MANZANA','direccion');
											   } else enComplemento();">
                <label > </label> <strong>M</strong>anzana</td>

              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'MN','puente');
											   concatenaString(document.getElementById('direccion').value, 'MEZZANINE','direccion');
											   } else enComplemento();">
                <label > </label> <strong>M</strong>ezzanine</td>

              <td width="88" align="center" class="campo172"
			            onClick="if(document.getElementById('complementoActivo').value=='0') {
			                               concatenaString(document.getElementById('puente').value,'MD','puente');
								           concatenaString(document.getElementById('direccion').value, 'MODULO','direccion');
										   muestraComplementoCalle('Modulo');
										 }
										 else enComplemento();">
                <label > </label> <strong>M</strong>odulo</td>

            </tr>
            <tr>
              <td width="88" height="27" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'MCP','puente');
								 concatenaString(document.getElementById('direccion').value, 'MUNICIPIO','direccion');
								 muestraComplementoCalle('Municipio');} else enComplemento();">
                <label > </label> <strong>M</strong>unicipio</td>
              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'NORTE','puente');
											   concatenaString(document.getElementById('direccion').value, 'NORTE','direccion');
											   } else enComplemento();">
                <label > </label> <strong>N</strong>orte</td>

				<td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'OCC','puente');
											   concatenaString(document.getElementById('direccion').value, 'OCCIDENTE','direccion');
											   } else enComplemento();">
                <label > </label> <strong>O</strong>ccidente</td>
				<td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'OESTE','puente');
											   concatenaString(document.getElementById('direccion').value, 'OESTE','direccion');
												} else enComplemento();">
                <label > </label> <strong>O</strong>este</td>
				<td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'OF','puente');
											   concatenaString(document.getElementById('direccion').value, 'OFICINA','direccion');
												} else enComplemento();">

                <label > </label> <strong>O</strong>ficina</td>
              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'O','puente');
											   concatenaString(document.getElementById('direccion').value, 'ORIENTE','direccion');
											   } else enComplemento();">
                <label > </label> <strong>O</strong>riente</td>
              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'PA','puente');
											   concatenaString(document.getElementById('direccion').value, 'PARCELA','direccion');
											   muestraComplementoCalle('Parcela');} else enComplemento();">
                <label > </label><strong>P</strong>arcela</td>

              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'PAR','puente');
											   concatenaString(document.getElementById('direccion').value, 'PARQUE','direccion');
											   muestraComplementoCalle('Parque');} else enComplemento();">
                <label > </label>
                <strong>P</strong>arque</td>
              <td width="88" align="center" class="campo172" onClick="
			  if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'PQ','puente');
											   concatenaString(document.getElementById('direccion').value, 'PARQUEADERO','direccion');
											   muestraComplementoCalle('Parqueadero');} else enComplemento();">
                <label > </label> <strong>P</strong>arqueadero</td>

				<td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'PJ','puente');
											   concatenaString(document.getElementById('direccion').value, 'PASAJE','direccion');
											   muestraComplementoCalle('Pasaje');} else enComplemento();">
                <label > </label> <strong>P</strong>asaje</td>
            </tr>
            <tr height="26" >
              <td width="88" height="28" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'PS','puente');
											   concatenaString(document.getElementById('direccion').value, 'PASEO','direccion');
											   muestraComplementoCalle('Paseo');} else enComplemento();">
                <label > </label> <strong>P</strong>aseo</td>

			  <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'PH','puente');
											   concatenaString(document.getElementById('direccion').value, 'PENTHOUSE','direccion');
											   } else enComplemento();">
                <label > </label> <strong>P</strong>enthouse</td>
				<td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'P','puente');
											   concatenaString(document.getElementById('direccion').value, 'PISO','direccion');
											   } else enComplemento();">
                <label > </label> <strong>P</strong>iso</td>

              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'PL','puente');
											   concatenaString(document.getElementById('direccion').value, 'PLANTA','direccion');
											   } else enComplemento();">
                <label > </label> <strong>P</strong>lanta</td>
				<td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'POR','puente');
											   concatenaString(document.getElementById('direccion').value, 'PORTERIA','direccion');
											   } else enComplemento();">
                <label > </label> <strong>P</strong>orteria</td>
				<td width="88" align="center" class="campo172"
				     onClick="if(document.getElementById('complementoActivo').value=='0') {
			                               concatenaString(document.getElementById('puente').value,'PD','puente');
								           concatenaString(document.getElementById('direccion').value, 'PREDIO','direccion');
										   muestraComplementoCalle('Predio');
										 }
										 else enComplemento();">

                <label > </label> <strong>P</strong>redio</td>
              <td width="88" align="center" class="campo172"
			        onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'PN','puente');
											   concatenaString(document.getElementById('direccion').value, 'PUENTE','direccion');
											   muestraComplementoCalle('Puente');} else enComplemento();">
                <label > </label> <strong>P</strong>uente</td>
              <td width="88" align="center" class="campo172"
			       onClick="if(document.getElementById('complementoActivo').value=='0') {
			                               concatenaString(document.getElementById('puente').value,'PT','puente');
								           concatenaString(document.getElementById('direccion').value, 'PUESTO','direccion');
										   muestraComplementoCalle('Puesto');
										 }
										 else enComplemento();">
                <label > </label> <strong>P</strong>uesto</td>

              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'SA','puente');
											   concatenaString(document.getElementById('direccion').value, 'SALON','direccion');
											   muestraComplementoCalle('Salón');} else enComplemento();">
                <label > </label> <strong>S</strong>al&oacute;n</td>
              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'SC','puente');
											   concatenaString(document.getElementById('direccion').value, 'SALON COMUNAL','direccion');
											   muestraComplementoCalle('Salón Comunal');} else enComplemento();">
                <label > </label> <strong>S</strong>al&oacute;n
                  <strong>C</strong>omunal</td>

            </tr>
            <tr height="26" >
              <td width="88" height="29" align="center" class="campo172"

			       onClick="if(document.getElementById('complementoActivo').value=='0') {
			                               concatenaString(document.getElementById('puente').value,'SEC','puente');
								           concatenaString(document.getElementById('direccion').value, 'SECTOR','direccion');
										   muestraComplementoCalle('Sector');
										 }
										 else enComplemento();" >
                <label > </label> <strong>S</strong>ector</td>
				<td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'SS','puente');
											   concatenaString(document.getElementById('direccion').value, 'SEMISOTANO','direccion');
											  } else enComplemento();">
                <label > </label> <strong>S</strong>emisotano</td>

              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'SL','puente');
											   concatenaString(document.getElementById('direccion').value, 'SOLAR','direccion');
											  } else enComplemento();">
                <label > </label> <strong>S</strong>olar</td>
				<td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'ST','puente');
											   concatenaString(document.getElementById('direccion').value, 'SOTANO','direccion');
											  } else enComplemento();">
                <label > </label> <strong>S</strong>otano</td>
				<td width="88" align="center" class="campo172"
						onClick="if(document.getElementById('complementoActivo').value=='0') {
			                               concatenaString(document.getElementById('puente').value,'SU','puente');
								           concatenaString(document.getElementById('direccion').value, 'SUITE','direccion');
										   muestraComplementoCalle('Suite');
										 }
										 else enComplemento();">

                <label > </label> <strong>S</strong>uite</td>
              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'SM','puente');
											   concatenaString(document.getElementById('direccion').value, 'SUPERMANZANA','direccion');
											   } else enComplemento();">
                <label > </label> <strong>S</strong>upermanzana</td>



              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'SUR','puente');
											   concatenaString(document.getElementById('direccion').value, 'SUR','direccion');
												} else enComplemento();">
                <label > </label> <strong>S</strong>ur</td>
              <td width="88" align="center" class="campo172"
			        onClick="if(document.getElementById('complementoActivo').value=='0') {
			                               concatenaString(document.getElementById('puente').value,'TER','puente');
								           concatenaString(document.getElementById('direccion').value, 'TERMINAL','direccion');
										   muestraComplementoCalle('Terminal');
										 }
										 else enComplemento();">
                <label > </label> <strong>T</strong>erminal</td>
				<td width="88" align="center" class="campo172"
					onClick="if(document.getElementById('complementoActivo').value=='0') {
			                               concatenaString(document.getElementById('puente').value,'TZ','puente');
								           concatenaString(document.getElementById('direccion').value, 'TERRAZA','direccion');
										   muestraComplementoCalle('Terraza');
										 }
										 else enComplemento();">

                <label > </label> <strong>T</strong>erraza</td>
              <td width="88" align="center" class="campo172"
			        onClick="if(document.getElementById('complementoActivo').value=='0') {
			                               concatenaString(document.getElementById('puente').value,'TO','puente');
								           concatenaString(document.getElementById('direccion').value, 'TORRE','direccion');
										   muestraComplementoCalle('Torre');
										 }
										 else enComplemento();">
                <label > </label> <strong>T</strong>orre</td>

            </tr>

            <tr height="26" >
              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {if(document.getElementById('complementoActivo').value=='0') { concatenaString(document.getElementById('puente').value,'TV','puente');
											   concatenaString(document.getElementById('direccion').value, 'TRANSVERSAL','direccion');
											   } else enComplemento()} else enComplemento();" >
                <label > </label> <strong>T</strong>ransversal</td>
              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'UN','puente');
											   concatenaString(document.getElementById('direccion').value, 'UNIDAD','direccion');
											   muestraComplementoCalle('Unidad');} else enComplemento();" >
                <label > </label> <strong>U</strong>nidad</td>

              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'UR','puente');
											   concatenaString(document.getElementById('direccion').value, 'UNIDAD RESIDENCIAL','direccion');
											   muestraComplementoCalle('Unidad Residencial');} else enComplemento();">
                <label > </label> 
                <strong>U</strong>nid.
                  <strong>R</strong>esidenc.</td>
              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'URB','puente');
											   concatenaString(document.getElementById('direccion').value, 'URBANIZACION','direccion');
											   muestraComplementoCalle('Urbanización');} else enComplemento();">
                <label > </label> <strong>U</strong>rbanizaci&oacute;n</td>

				<td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'VTE','puente');
											   concatenaString(document.getElementById('direccion').value, 'VARIANTE','direccion');
											   muestraComplementoCalle('Variante');} else enComplemento();">
                <label > </label> <strong>V</strong>ariante</td>
              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'VDA','puente');
											   concatenaString(document.getElementById('direccion').value, 'VEREDA','direccion');
											   muestraComplementoCalle('Vereda');} else enComplemento();">
                <label > </label> <strong>V</strong>ereda</td>
				<td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'ZN','puente');
											   concatenaString(document.getElementById('direccion').value, 'ZONA','direccion');
											   muestraComplementoCalle('Zona');} else enComplemento();">

                <label > </label> <strong>Z</strong>ona</td>

              <td width="88" align="center" class="campo172"
			         onClick="if(document.getElementById('complementoActivo').value=='0') {
			                               concatenaString(document.getElementById('puente').value,'ZF','puente');
								           concatenaString(document.getElementById('direccion').value, 'ZONA FRANCA','direccion');
										   muestraComplementoCalle('Zona Frenca');
										 }
										 else enComplemento();">
                <label > </label> <strong>Z</strong>ona Franca</td>

              <td width="88"  align="center"  class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,' ','puente');
											   concatenaString(document.getElementById('direccion').value, '#','direccion');
											    } else enComplemento();">

                <label align="center" > <strong>#</strong> </label> </td>
              <td width="88" align="center" class="campo172" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,' ','puente');
											   concatenaString(document.getElementById('direccion').value, '-','direccion');
											   } else enComplemento();">
                <label > </label> <div align="center"><strong>-</strong></div></td>

               
          </table >
          <table >

		  <tr height="20">
            <td height="25" colspan="10" background="/WebRutMuisca/images/barracalcu2.jpg" class="campo1711" >&nbsp;&nbsp;<strong>DIGITOS</strong></td>
			<td height="25" colspan="27" background="/WebRutMuisca/images/barracalcu2.jpg" class="campo1711" >&nbsp;&nbsp;<strong>LETRAS</strong></td>
          </tr>
		  <tr height="20" >
            <td width="88" height="20" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaNumero(document.getElementById('puente').value,'1','puente');
											   concatenaNumero(document.getElementById('direccion').value, '1','direccion');
											   } else enComplemento();">
				   <label > <div align="center"><strong>1</strong></div> </label> </td>

            <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaNumero(document.getElementById('puente').value,'2','puente');
											   concatenaNumero(document.getElementById('direccion').value, '2','direccion');
											   } else enComplemento();">
				   <label > <div align="center"><strong>2</strong></div>  </label>       </td>
            <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaNumero(document.getElementById('puente').value,'3','puente');
											   concatenaNumero(document.getElementById('direccion').value, '3','direccion');
												} else enComplemento();">
			   <label > <div align="center"><strong>3</strong></div>   </label>   </td>
            <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaNumero(document.getElementById('puente').value,'4','puente');
											   concatenaNumero(document.getElementById('direccion').value, '4','direccion');
											   } else enComplemento();">

				   <label > <div align="center"><strong>4</strong></div>  </label>  </td>
            <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaNumero(document.getElementById('puente').value,'5','puente');
											   concatenaNumero(document.getElementById('direccion').value, '5','direccion');
											   } else enComplemento();">
			   <label > <div align="center"><strong>5</strong></div>   </label>  </td>
            <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaNumero(document.getElementById('puente').value,'6','puente');
											   concatenaNumero(document.getElementById('direccion').value, '6','direccion');
											   } else enComplemento();">
				   <label > <div align="center"><strong>6</strong></div>  </label>  </td>

            <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaNumero(document.getElementById('puente').value,'7','puente');
											   concatenaNumero(document.getElementById('direccion').value, '7','direccion');
											   } else enComplemento();">
			   <label > <div align="center"><strong>7</strong></div>  </label>  </td>
            <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaNumero(document.getElementById('puente').value,'8','puente');
											   concatenaNumero(document.getElementById('direccion').value, '8','direccion');
												} else enComplemento();">
				   <label > <div align="center"><strong>8</strong></div>  </label> </td>
            <td width="88" align="center"  class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaNumero(document.getElementById('puente').value,'9','puente');
											   concatenaNumero(document.getElementById('direccion').value, '9','direccion');
											   } else enComplemento();">

			   <label > <div align="center"><strong>9</strong></div>  </label>  </td>
            <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaNumero(document.getElementById('puente').value,'0','puente');
											   concatenaNumero(document.getElementById('direccion').value, '0','direccion');
											   } else enComplemento();">
				   <label > <div align="center"><strong>0</strong></div>  </label>  </td>
			<td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'A','puente');
											   concatenaString(document.getElementById('direccion').value, 'A','direccion');
											   } else enComplemento();">
				   <label > <div align="center"><strong>A</strong></div>

              </label> </td>
            <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'B','puente');
											   concatenaString(document.getElementById('direccion').value, 'B','direccion');
												} else enComplemento();">
				   <label > <div align="center"><strong>B</strong></div>
              </label>       </td>
            <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'C','puente');
											   concatenaString(document.getElementById('direccion').value, 'C','direccion');
											   } else enComplemento();">
			   <label > <div align="center"><strong>C</strong></div>   </label>   </td>

            <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'D','puente');
											   concatenaString(document.getElementById('direccion').value, 'D','direccion');
											  } else enComplemento();">
				   <label > <div align="center"><strong>D</strong></div>  </label>  </td>
            <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'E','puente');
											   concatenaString(document.getElementById('direccion').value, 'E','direccion');
											   } else enComplemento();">
			   <label > <div align="center"><strong>E</strong></div>   </label>  </td>
            <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'F','puente');
											   concatenaString(document.getElementById('direccion').value, 'F','direccion');
											   } else enComplemento();">

				   <label > <div align="center"><strong>F</strong></div>  </label>  </td>
            <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'G','puente');
											   concatenaString(document.getElementById('direccion').value, 'G','direccion');
											   } else enComplemento();">
			   <label > <div align="center"><strong>G</strong></div>  </label>  </td>
            <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'H','puente');
											   concatenaString(document.getElementById('direccion').value, 'H','direccion');
											   } else enComplemento();">
				   <label > <div align="center"><strong>H</strong></div>  </label> </td>

            <td width="88" align="center"  class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'I','puente');
											   concatenaString(document.getElementById('direccion').value, 'I','direccion');
											   } else enComplemento();">
			   <label > <div align="center"><strong>I</strong></div>  </label>  </td>
            <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'J','puente');
											   concatenaString(document.getElementById('direccion').value, 'J','direccion');
											  } else enComplemento();">
				   <label > <div align="center"><strong>J</strong></div>  </label>  </td>
			<td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'K','puente');
											   concatenaString(document.getElementById('direccion').value, 'K','direccion');
											   } else enComplemento();">

				   <label > <div align="center"><strong>K</strong></div> </label> </td>
            <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'L','puente');
											   concatenaString(document.getElementById('direccion').value, 'L','direccion');
											   } else enComplemento();">
				   <label > <div align="center"><strong>L</strong></div>  </label>       </td>
            <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'M','puente');
											   concatenaString(document.getElementById('direccion').value, 'M','direccion');
											   } else enComplemento();">
			   <label > <div align="center"><strong>M</strong></div>   </label>   </td>

            <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'N','puente');
											   concatenaString(document.getElementById('direccion').value, 'N','direccion');
											   } else enComplemento();">
				   <label > <div align="center"><strong>N</strong></div>  </label>  </td>
            <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'O','puente');
											   concatenaString(document.getElementById('direccion').value, 'O','direccion');
											   } else enComplemento();">
			   <label > <div align="center"><strong>O</strong></div>   </label>  </td>
            <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'P','puente');
											   concatenaString(document.getElementById('direccion').value, 'P','direccion');
											   } else enComplemento();">

				   <label > <div align="center"><strong>P</strong></div>  </label>  </td>
            <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'Q','puente');
											   concatenaString(document.getElementById('direccion').value, 'Q','direccion');
											   } else enComplemento();">
			   <label > <div align="center"><strong>Q</strong></div>  </label>  </td>
            <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'R','puente');
											   concatenaString(document.getElementById('direccion').value, 'R','direccion');
											   } else enComplemento();">
				   <label > <div align="center"><strong>R</strong></div>  </label> </td>

            <td width="88" align="center"  class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'S','puente');
											   concatenaString(document.getElementById('direccion').value, 'S','direccion');
											   } else enComplemento();">
			   <label > <div align="center"><strong>S</strong></div>  </label>  </td>
            <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'T','puente');
											   concatenaString(document.getElementById('direccion').value, 'T','direccion');
											   } else enComplemento();">
				   <label > <div align="center"><strong>T</strong></div>  </label>  </td>
				   <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'U','puente');
											   concatenaString(document.getElementById('direccion').value, 'U','direccion');
											   } else enComplemento();">

				   <label > <div align="center"><strong>U</strong></div> </label> </td>
            <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'V','puente');
											   concatenaString(document.getElementById('direccion').value, 'V','direccion');
											   } else enComplemento();">
				   <label > <div align="center"><strong>V</strong></div>  </label>       </td>
            <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'W','puente');
											   concatenaString(document.getElementById('direccion').value, 'W','direccion');
											   } else enComplemento();">
			   <label > <div align="center"><strong>W</strong></div>   </label>   </td>

            <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'X','puente');
											   concatenaString(document.getElementById('direccion').value, 'X','direccion');
											   } else enComplemento();">
				   <label > <div align="center"><strong>X</strong></div>  </label>  </td>
            <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'Y','puente');
											   concatenaString(document.getElementById('direccion').value, 'Y','direccion');
											  } else enComplemento();">
			   <label > <div align="center"><strong>Y</strong></div>   </label>  </td>
            <td width="88" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'Z','puente');
											   concatenaString(document.getElementById('direccion').value, 'Z','direccion');
											   } else enComplemento();">

				   <label > <div align="center"><strong>Z</strong></div>  </label>  </td>
            <td width="40" align="center" class="campo171" onClick="if(document.getElementById('complementoActivo').value=='0') {concatenaString(document.getElementById('puente').value,'BIS','puente');
											   concatenaString(document.getElementById('direccion').value, 'BIS','direccion');
											   } else enComplemento();">
			   <label > <div align="center"><strong>BIS</strong></div>  </label>  </td>
          </tr>
        </table>

	</td>
    </tr>
    <tr>
      <td colspan="2" class="campo17"> <div align="center"><DIV STYLE="display:none" ID="COMPLEMENTOCALLE" >
        <div align="center"><blink>
		  <input name="nombreComplementoCalle" id="nombreComplementoCalle" type="text" size="30" value="" class="campo173" readonly></blink>
                <select name="complementoCalleSN" id="complementoCalleSN" class="campo1A"
				       onChange="ocultaComplementoCalle();
					            if (this.options[this.selectedIndex].text == 'Si')
								    muestraComplemento(document.getElementById('auxiliar').value);
								else document.getElementById('complementoActivo').value = '0';
								    this.selectedIndex = 0;"
						onFocus="this.style.backgroundColor='#CCCCCC'">
                     <option value="" selected>Seleccione..</option>

					 <option value="Si">Si</option>
                     <option value="No" >No</option>
               </select>&nbsp;
        </div>
        </DIV> </div>
		 <div align="center"><DIV STYLE="display:none" ID="COMPLEMENTOS" >
        <div align="center"><blink>

		  <input name="anterior" id="anterior" type="hidden" value="">
		  <input name="auxiliar" id="auxiliar" type="hidden" value="">
          <input name="nombreComplemento" id="nombreComplemento" type="text" size="38" value="" class="campo173" readonly>
                </blink>
                <input name="complemento" id="complemento" type="text" size="40" maxlength="40" class="campo1A"
		  	onFocus="this.style.backgroundColor='#CCCCCC'"
		    onChange="borraCaracteresEspeciales(this,this.value);borraEspaciosDerecha(document.getElementById('complemento').value,'complemento');
			          borraEspaciosInternos(document.getElementById('complemento').value,'complemento');
		          if( validaComplemento()) {concatenaString(document.getElementById('puente').value,this.value,'puente');
		          concatenaString(document.getElementById('direccion').value,this.value,'direccion');
				  document.getElementById('auxiliar').value='';}" >
              </div>
        </DIV> </div></td>
      <td width="30%" class="campo17"><div align="center">

          <p><a href="#" onMouseOut="MM_swapImgRestore()"  onClick="if(document.getElementById('complementoActivo').value!='3') {borraUltComponenteDireccion(document.getElementById('puente').value,'puente');borraUltComponenteDireccion(document.getElementById('direccion').value,'direccion');document.getElementById('puente2').selectedIndex=document.getElementById('puente2').length - 1;document.getElementById('puente3').selectedIndex=document.getElementById('puente2').selectedIndex;borraElemento('puente2');borraElemento('puente3');} else enComplemento();" onMouseOver="MM_swapImage('devolver','','botlimpia.png',1)"><img src="botlimpia.png" title="Borra Ultima" name="devolver" width="20" height="20" border="0"></a><font size="1" face="Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;
			 <a href="#" onClick="if(document.getElementById('complementoActivo').value=='0') {LimpiaElementosLista('puente2');LimpiaElementosLista('puente3');} else enComplemento();" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Limpiar','','bp_rwr.png',1)"><img src="bp_rwr.png" title="Limpiar" name="Limpiar" width="20" height="20" border="0"></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="#" onClick="if(document.getElementById('complementoActivo').value=='0') {retornaDireccion(document.getElementById('retorno').value,document.getElementById('puente').value);} 
else enComplemento();" 
onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Completa','','bp_uploadr.png',1)">
<img src="bp_uploadr.png" title="Asignar Dirección" name="Completa" width="20" height="20" border="0">
</a>
</font></p>
          </div></td>
    </tr>

    <tr>
      <td height="9" colspan="3" > <div><font face="Arial, Helvetica, sans-serif"><strong style="font-size: 10px">CODIFICACION</strong></font><br>
<input name="puente" id="puente" type="text" value="" size="101" readonly="readonly" class="campo1B">
        </div></td>
    </tr>

  </table>
  <DIV STYLE="display:none" ID="MANEJO" >

  <table width="14%" border="0"  align="center">
    <tr>
      <td width="25%"  rowspan="4"><select name="puente2" size="10" multiple id="puente2" class="campo1">
        </select> </td>
      <td width="32%"  rowspan="4"><select name="puente3" size="10" multiple id="puente3" class="campo1" readonly disabled="true">
        </select> </td>
      <td width="43%" class="campo18B" > <div align="center"> <a href="#" onClick="if(document.getElementById('complementoActivo').value=='0') {puente3.selectedIndex=puente2.selectedIndex;bajaElemento('puente2');pasaElementosAString('puente2','puente');bajaElemento('puente3');pasaElementosAString('puente3','direccion');} else enComplemento();" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Bajar','','/images/bp_arribar.gif',1)"><img src="/images/bp_arriba.gif"alt="Bajar " name="Bajar" width="20" height="20" border="0"></a>

        </div></td>
    </tr>
    <tr>
      <td class="campo18B" > <div align="center"> <a href="#"  onClick="if(document.getElementById('complementoActivo').value=='0') {puente3.selectedIndex=puente2.selectedIndex; subeElemento('puente2');pasaElementosAString('puente2','puente');subeElemento('puente3');pasaElementosAString('puente3','direccion');} else enComplemento();"  onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Subir','','/imagenes/es/botones/bp_bajarr.gif',1)"><img src="/images/bp_bajar.gif"  alt="Subir" name="Subir" width="20" height="20" border="0"></a>
        </div></td>
    </tr>
    <tr>
      <td class="campo18B" ><div align="center"> <a href="#"  onClick="if(document.getElementById('complementoActivo').value=='0'){ puente3.selectedIndex=puente2.selectedIndex;borraElemento('puente2');pasaElementosAString('puente2','puente');borraElemento('puente3');pasaElementosAString('puente3','direccion') } else enComplemento();"  onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Borrar','','/images/bp_cancelar.gif',1)"><img src="/images/bp_cancela.gif" alt="Borrar" name="Borrar" width="20" height="20" border="0"></a>

        </div></td>
    </tr>
    <tr>
      <td height="54" class="campo18B" ><input name="complementoActivo" id="complementoActivo" type="hidden" size="33" value="0" >
        &nbsp;</td>
    </tr>
  </table>

  </DIV>

    <input name="retorno" id="retorno" value="null" type="hidden" >
	<input name="controlaLetras" id="controlaLetras" value="0" type="hidden" >
</form>

</div>
</body>
</html>
