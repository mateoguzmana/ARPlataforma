<?
include("conexion.php");

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$Ruta1				=	$_REQUEST["Ruta"];
$Origen1			=	$_REQUEST["Origen"];
$Deporg1			=	$_REQUEST["Deporg"];
$Destino1			=	$_REQUEST["Destino"];
$Depdest1			=	$_REQUEST["Depdest"];


		if ($Ruta1 <> '' )
		{
				$arry0 				= 	array();
				
					$queryy0			=	"SELECT* FROM  Planes where Nombre Like '%$Ruta1%' " ;
					$resulty0			=	mysql_query($queryy0, $id);
								
					While($rowy0		=	mysql_fetch_array($resulty0))
					{
					$Idplan0			=	$rowy0["Id"];
					$arry0[]			=	$Idplan0;
					}

				
					if(empty($arry0))
					{
					$cosult0	 =	" and ( Id = '')";
					}
					else
					{
					$arry0 		 = 	array_unique($arry0);
					$cosult0	 =	" and ( Id = ";
					$cosult0	.=	 implode(' or Id = ',$arry0);
					$cosult0	.=	 ')';
					}
					
		}
		
		if ($Origen1 <> '' )
		{
				$arry1 				= 	array();
				
		
				
						$queryyy1			=	"SELECT* FROM  Planes where Idpueo = '$Origen1' ";
						$resultyy1			=	mysql_query($queryyy1, $id);
									
						While($rowyy1		=	mysql_fetch_array($resultyy1))
						{
						$Idyy1				=	$rowyy1["Id"];
						$arry1[]			=	$Idyy1;
						}
				
					if(empty($arry1))
					{
					$cosult1	 =	" and ( Id = '')";
					}
					else
					{
					$arry1 		 = 	array_unique($arry1);
					$cosult1	 =	" and ( Id = ";
					$cosult1	.=	 implode(' or Id = ',$arry1);
					$cosult1	.=	 ')';
					}
					
		}


		if ($Deporg1 <> '' )
		{
				$arry2 				= 	array();
				
						$queryyy2			=	"SELECT* FROM  Planes where Iddepo = '$Deporg1' ";
						$resultyy2			=	mysql_query($queryyy2, $id);
									
						While($rowyy2		=	mysql_fetch_array($resultyy2))
						{
						$Idyy2				=	$rowyy2["Id"];
						$arry2[]			=	$Idyy2;
						}
				
					if(empty($arry2))
					{
					$cosult2	 =	" and ( Id = '')";
					}
					else
					{
					$arry2 		 = 	array_unique($arry2);
					$cosult2	 =	" and ( Id = ";
					$cosult2	.=	 implode(' or Id = ',$arry2);
					$cosult2	.=	 ')';
					}
					
		}
		
		if ($Destino1 <> '' )
		{
				$arry3 				= 	array();
				
						$queryyy3			=	"SELECT* FROM  Planes where Idpued = '$Destino1' ";
						$resultyy3			=	mysql_query($queryyy3, $id);
									
						While($rowyy3		=	mysql_fetch_array($resultyy3))
						{
						$Idyy3				=	$rowyy3["Id"];
						$arry3[]			=	$Idyy3;
						}
				
					if(empty($arry3))
					{
					$cosult3	 =	" and ( Id = '')";
					}
					else
					{
					$arry3 		 = 	array_unique($arry3);
					$cosult3	 =	" and ( Id = ";
					$cosult3	.=	 implode(' or Id = ',$arry3);
					$cosult3	.=	 ')';
					}
					
		}
		
		
		if ($Depdest1 <> '' )
		{
				$arry4 				= 	array();
				
						$queryyy4			=	"SELECT* FROM  Planes where Iddepd = '$Depdest1' ";
						$resultyy4			=	mysql_query($queryyy4, $id);
									
						While($rowyy4		=	mysql_fetch_array($resultyy4))
						{
						$Idyy4				=	$rowyy4["Id"];
						$arry4[]			=	$Idyy4;
						}
				
					if(empty($arry4))
					{
					$cosult4	 =	" and ( Id = '')";
					}
					else
					{
					$arry4 		 = 	array_unique($arry4);
					$cosult4	 =	" and ( Id = ";
					$cosult4	.=	 implode(' or Id = ',$arry4);
					$cosult4	.=	 ')';
					}
					
		}
		
		
$consultar		=	$cosult0.$cosult1.$cosult2.$cosult3.$cosult4;

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
	text-align: right;
}
.listado {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #666;
}
body {
	background-color: #FBFBFB;
	margin-top: 0px;
	margin-left: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo93 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.Estilo105 {color: #990000; font-family: Arial, Helvetica, sans-serif; font-size: 10px; font-weight: bold; }
.Estilo97 {font-size: 12px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
.TextField2 {background-color: #DADADA;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.listado1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 8px;
	color: #000;
}
.listado2 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #FFF;
}
.textos1 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #009;
	text-align: right;
}
.listado11 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
	color: #000;
}
.TextField {background-color: #DADADA;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.listado3 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
	color: #FFF;
}
-->
</style>

<script> 
function retornavalores(registro, nombre){ 
   window.opener.document.getElementById('Plan').value=registro; 
   window.opener.document.getElementById('Idplan').value=nombre; 
   window.close(); 
} 
</script>

</head>

<body>
<form name="form1" method="get" action="lista-planes.php">
  <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="100" align="right" valign="top"><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="30%" height="35" bgcolor="#003366" class="listado2">&nbsp;<span class="listado1">&nbsp; </span>RUTA<br>
              <span class="listado3">
              &nbsp;
              <input name="Ruta" type="text" class="TextField" id="Ruta" size="30">
            </span></td>
            <td width="18%" bgcolor="#003366" class="listado2">ORIGEN<br>
              <select name="Origen" class="TextField" id="Origen" style="width:120px">
                <option value="">Todos</option>
                <?
$queryxxx1		=	"SELECT* FROM  Puestos  order by Nombre" ;
$resultxxx1		=	mysql_query($queryxxx1, $id);
			
While($rowxxx1	=	mysql_fetch_array($resultxxx1))
{
$Nombrexxx1	=	$rowxxx1["Nombre"];
$Idxxx1		=	$rowxxx1["Id"];

?>
<option value="<?=$Idxxx1?>"><?=$Nombrexxx1?></option>
<?

}

?>
</select>
            </td>
            <td width="15%" bgcolor="#003366" class="listado2">DEP. ORIGEN<br>
<select name="Deporg" class="TextField" id="Deporg" style="width:100px">
                <option value="">Todos</option>
                <?
$queryxxx1		=	"SELECT* FROM  Departamentos  order by Nombre" ;
$resultxxx1		=	mysql_query($queryxxx1, $id);
			
While($rowxxx1	=	mysql_fetch_array($resultxxx1))
{
$Nombrexxx1	=	$rowxxx1["Nombre"];
$Idxxx1		=	$rowxxx1["Id"];

?>
                <option value="<?=$Idxxx1?>">
                  <?=$Nombrexxx1?>
                </option>
                <?

}

?>
            </select>              <br></td>
            <td width="18%" bgcolor="#003366" class="listado2">DESTINO<br>
              <select name="Destino" class="TextField" id="Destino" style="width:120px">
                <option value="">Todos</option>
                <?
$queryxxx1		=	"SELECT* FROM  Puestos  order by Nombre" ;
$resultxxx1		=	mysql_query($queryxxx1, $id);
			
While($rowxxx1	=	mysql_fetch_array($resultxxx1))
{
$Nombrexxx1	=	$rowxxx1["Nombre"];
$Idxxx1		=	$rowxxx1["Id"];

?>
                <option value="<?=$Idxxx1?>">
                  <?=$Nombrexxx1?>
                </option>
                <?

}

?>
            </select></td>
            <td width="15%" bgcolor="#003366" class="listado2">DEP. DESTINO<br>
<select name="Depdest" class="TextField" id="Depdest" style="width:100px">
                <option value="">Todos</option>
                <?
$queryxxx1		=	"SELECT* FROM  Departamentos  order by Nombre" ;
$resultxxx1		=	mysql_query($queryxxx1, $id);
			
While($rowxxx1	=	mysql_fetch_array($resultxxx1))
{
$Nombrexxx1	=	$rowxxx1["Nombre"];
$Idxxx1		=	$rowxxx1["Id"];

?>
                <option value="<?=$Idxxx1?>">
                  <?=$Nombrexxx1?>
                </option>
                <?

}

?>
            </select></td>
            <td width="4%" align="center" valign="middle" bgcolor="#003366" class="listado2"><input name="button" type="submit" class="TextField2" id="button" value="OK"></td>
          </tr>
        </table>
        <hr size="1">
        <?
$query008="SELECT* FROM Planes Where Id <> '' ".$consultar." order by Nombre" ;
$result008=mysql_query($query008, $id);

While($row008=mysql_fetch_array($result008))
{
$Idn			=$row008["Id"];
$Iddepo 		=$row008["Iddepo"];
$Iddepd 		=$row008["Iddepd"];
$Idpueo 		=$row008["Idpueo"];
$Idpued  		=$row008["Idpued"];
$Nombre  		=$row008["Nombre"];


$query0081="SELECT* FROM Departamentos where Id = '$Iddepo'" ;
$result0081=mysql_query($query0081, $id);

While($row0081=mysql_fetch_array($result0081))
{
$Deporig		=$row0081["Nombre"];
}

$query0082="SELECT* FROM Departamentos where Id = '$Iddepd'" ;
$result0082=mysql_query($query0082, $id);

While($row0082=mysql_fetch_array($result0082))
{
$Depdest		=$row0082["Nombre"];
}

$query0084="SELECT* FROM Puestos where Id = '$Idpued' " ;
$result0084=mysql_query($query0084, $id);

While($row0084=mysql_fetch_array($result0084))
{
$Idpuestod		=$row0084["Nombre"];
}

$query0083="SELECT* FROM Puestos where Id = '$Idpueo' " ;
$result0083=mysql_query($query0083, $id);

While($row0083=mysql_fetch_array($result0083))
{
$Idpuestoo		=$row0083["Nombre"];
}


?>
        <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0" onclick="retornavalores('<?=$Nombre ?>', '<?=$Idn?>')">
            <tr name="datos1" id="datos1" onMouseover="this.bgColor='#BED9F3'"onMouseout="this.bgColor='#FBFBFB'" >
              <td width="30%" height="20"><span class="listado1">
                <?=strtoupper($Nombre)?>
              </span></td>
              <td width="18%"><span class="listado1">
                <?=strtoupper($Idpuestoo)?>
              </span></td>
              <td width="15%"><span class="listado1">
                <?=strtoupper($Deporig)?>
              </span></td>
              <td width="18%"><span class="listado1">
                <?=strtoupper($Idpuestod)?>
              </span></td>
              <td width="15%"><span class="listado1">
                <?=strtoupper($Depdest)?>
              </span></td>
              <td width="4%">&nbsp;</td>
            </tr>
        </table>
        <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td class="listado1"><span class="listado11"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
          </tr>
        </table>
        <?
}
?></td>
    </tr>
  </table>
</form>
</body>
</html>