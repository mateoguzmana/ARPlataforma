<? 
date_default_timezone_set('America/Bogota');

include("vencimiento-session.php"); 

include("variables.php"); 

$nombreuser					=	$_SESSION['Empresa'];
$_SESSION['username'] 		= 	$nombreuser;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?=$Title?></title>

<style type="text/css">
<!--
html, body {
	margin:0px;
	overflow:hidden; /* hide browser's main scrollbar */
	height:100%; /* make sure we'll use 100% of the page's height */
}
.Estilo1 {color: #E1E1E1;
	font-size: 10px;
}
.Estilo1122 {
	color: #E1E8FF;
	font-size: 10px;
	font-family:Arial, Helvetica, sans-serif;
}
.Estilo45 {font-size: 12px;
	color: #666666;
	font-family: Helvetica;
}
.Estilo52 {font-size: 12px; color: #727268; font-family: Helvetica; font-weight: bold; }
.Estilo96 {
	font-size: 11px;
	font-family: Arial, Helvetica, sans-serif;
	color: #666;
}
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
	color: #006;
	text-align: left;
}
#main_container {
	width:100%; /* make sure we'll use 100% of page's width */
	background-color:#FFFFFF; /* DO NOT REMOVE THIS; or you'll have issue w/ the scrollbar, when the mouse pointer is on a white space */
}
/*
 * CSS Document
 * Written by Ryan Yonzon
 * http://ryan.rawswift.com/
 */
 
html, body {
	margin:0px; /* FF hack: or we'll have double scrollbar showing on the browser */
	overflow:hidden; /* hide browser's main scrollbar */
}

#main_container {
	width:100%;
	background-color:#FFFFFF; /* DO NOT REMOVE THIS; or you'll have issue w/ the scrollbar, when the mouse pointer is on a white space */
	
	height:100%;	/* this will make sure that the height will extend at the bottom */
	overflow:auto;	/* will have a scrollbar at our content containier */
	position:absolute; /* container div must be absolute, for our fixed bar to work */
}

	#main_container .content_wrapper {
		margin-left:auto;
		margin-right:auto;
		width:100%;
	}
	
	#main_container .spacer { /* spacer w/ fixed height; give space to the content and fixed bar */
		height:45px;
	}

#nav_menu_wrapper { /* this will ba used as a wrapper for the nav_menu so we can center it (nav_menu). especially for IE */
	height:45px; /* fix bar's height */
	width:100%; /* use 100% of width */
	/* the code below will PUT the bar at the bottom */	
	bottom:0px;
	position:absolute;
	/* hide scrollbar for this wrapper */
	overflow:hidden;
	left: 0px;
}

	#nav_menu_wrapper .nav_menu { /* the menu itself */
		height:45px; /* fix bar's height */
		width:100%; /* fixed width */

		/* center this div */
		margin-left:auto;
		margin-right:auto;	
		
		/* add effect */
		background-color:#EEEEEE;
		border:#666666 solid 1px;
	}
	
	/*
	 * menu links and link effects
	 */
		#nav_menu_wrapper .nav_menu ul {
	margin-top:0px;
	list-style:none;
	text-align: right;
		}
		
		#nav_menu_wrapper .nav_menu li {
			display:inline;
		}
		
		#nav_menu_wrapper .nav_menu li a {
			padding-top:0px;
			padding-bottom:0px;
			padding-left:0px;			
			padding-right:0px;
		}
		
		#nav_menu_wrapper .nav_menu a:link, #nav_menu_wrapper .nav_menu a:visited {
			font-family:Verdana, Arial, Helvetica, sans-serif;
			font-size:12px;
			color:#333333;
			text-decoration:none;
			background-color:#EEEEEE;
		}

		#nav_menu_wrapper .nav_menu a:hover {
			font-family:Verdana, Arial, Helvetica, sans-serif;
			font-size:12px;
			color:#FFFFFF;
			text-decoration:none;
			background-color:#0099FF;
		}
-->
</style>
 
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>

<link rel="stylesheet" href="lytebox.css" type="text/css" media="screen"/>


<script type="text/javascript">

var currenttime = '<? print date("F d, Y H:i:s", time())?>' //PHP method of getting server date


var montharray=new Array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic")
var serverdate=new Date(currenttime)

function padlength(what){
var output=(what.toString().length==1)? "0"+what : what
return output
}

function displaytime(){
serverdate.setSeconds(serverdate.getSeconds()+1)
var datestring=montharray[serverdate.getMonth()]+" "+padlength(serverdate.getDate())+", "+serverdate.getFullYear()
var timestring=padlength(serverdate.getHours())+":"+padlength(serverdate.getMinutes())+":"+padlength(serverdate.getSeconds())
document.getElementById("servertime").innerHTML=datestring+" "+timestring
}

window.onload=function(){
setInterval("displaytime()", 1000)
}

</script>

</head>
<body >

<div id="nav_menu_wrapper">
<div class="nav_menu">
        
        
          <table width="100%" border="0">
            <tr>
              <td width="3%">&nbsp;</td>
              <td width="72%"><img src="Images/foot.png" alt="" width="220" height="30" usemap="#Map" /></td>
              <td width="25%" align="right"><div align="center" class="Estilo96">Powered by <a href="http://www.webevolution.com.co/" target="_blank">WEB EVOLUTION</a> Copyright © 2014</div></td>
            </tr>
          </table>

            
</div>
</div>



<table width="100%" height="50" border="0" cellpadding="0" cellspacing="0" background="Images/bg-header.jpg">
  <tr>
    <td width="1%" height="53" align="center" valign="top" background="">&nbsp;</td>
    <td width="15%" valign="middle" background=""><img src="Images/logos.png" alt="" width="159" height="45" /></td>
    <td width="68%" valign="middle">

	<? 

	include("menu/menu.php");

	?>

    </td>
    <td width="15%" align="right" valign="top">
 <table width="100%" border="0">
   <tr>
     <td height="17" align="right" valign="top"><span class="Estilo1122"><span id="servertime"></span></span></td>
   </tr>
 </table>
 <span class="Estilo1" style="font-family: Arial, Helvetica, sans-serif; font-size: 10px;">Bienvenido(a) <br />
<span style="color: #AEAEFF; font-size: 10px;">
<?=$_SESSION['Nombrecomp'];?>
    </span></span></td>
    <td width="1%" valign="top">&nbsp;</td>
  </tr>
</table>
<table width="100%" height="90%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="100%" align="center" valign="top" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
      
      <iframe src="content.html" name="contenido" width="100%" height="97%" scrolling="no" frameborder="No" id="contenido" allowtransparency="true"></iframe>    </td>
  </tr>
</table>

<map name="Map" id="Map">
  <area shape="rect" coords="4,3,89,30" href="zona.php" target="_parent" alt="" />
  <area shape="rect" coords="100,4,208,30" href="salir.php" target="_parent" alt="" />
</map>

</body>
</html>