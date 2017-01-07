<?
include("conexion.php");

$Nro	=	$_REQUEST["Nro"];

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
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
	text-align: center;
}
.listado {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #666;
}
.Estilo93 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.Estilo96 {font-size: 11px}
.TextField2 {background-color: #DADADA;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.TextField21 {background-color: #036;
color: #fff;
font-size: 10pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.TextField22 {background-color: #F2F2F2;
color: #666;
font-size: 10pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
-->
</style>

        <script type="text/javascript" src="jquery-1.4.2.min.js"></script>



<script LANGUAGE="JavaScript">
function Validar(form)
{
  if (form.Nombre.value == "")
  { alert("Por favor ingrese un Nombre"); form.Nombre.focus(); return; }
 
  form.submit();
}
</script>
<style type="text/css">
<!--
body {
	background-color: #FBFBFB;
}
.titulares {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 12px;
	color: #FFF;
}
-->
</style>
</head>

<body>
<form name="form1" method="post" action="rastreo.php">
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="20" valign="middle" bgcolor="#666666"><table width="90%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="385" class="titulares">&nbsp;&nbsp;NUMERO DE GUIA</td>
        </tr>
      </table></td>
    </tr>
  </table>
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="48%" height="40" valign="middle" class="Estilo93 Estilo96">
	  
        <table width="100%" border="0">
          <tr>
            <td width="80%"><label>
              <span class="Estilo93"><br>
              <span style="color: #900">Ingresa tu número de remesa aqui</span></span><br>
              <input name="Nro" type="text" class="TextField22" id="Nro" style="width:99%" value="<?=$Nro?>">
            </label></td>
            <td width="20%" valign="bottom"><input name="Submit2" type="submit" onClick=Validar(this.form) class="TextField21" value="REALIZAR RASTREO"></td>
          </tr>
        </table>
        <table width="100%" border="0">
          <tr>
            <td><hr size="1"></td>
          </tr>
      </table></td>
    </tr>
  </table>
  
<?
if(!empty($Nro))
{
	
	
	$queryA		="SELECT COUNT(*) as Total FROM Controlbox where Id = '$Nro' and Leida = 1" ;
	$resultA	=mysql_query($queryA, $id);
	
	while($rowA	=mysql_fetch_array($resultA))
	{
	$TotalA		=$rowA["Total"];
	}
	
	
	if($TotalA == 0)
	{
?>
	<script type="text/javascript">
        alert('Esta guia no esta disponible.');
        window.location.href=('rastreo.php');
    </script>
    
<?
	}
	else
	{


							$query				="SELECT* FROM Controlbox where Id = '$Nro'" ;
							$result				=mysql_query($query, $id);
							
							while($row			=mysql_fetch_array($result))
							{
							$Nombre				=$row["Destinatario"];
							$Direccion			=$row["Dirdestinatario"];
							$Cataporte			=$row["Cataporte"];
							$Comprobante		=$row["Comprobante"];
							$Empresa			=$row["Empresa"];
							}
							
							$querye				="SELECT* FROM Empresas where Nit = '$Empresa'" ;
							$resulte			=mysql_query($querye, $id);
							
							while($rowe			=mysql_fetch_array($resulte))
							{
							$Logo				=$rowe["Logo"];
							}	
							
						
?>

  <?
  if(!empty($Logo))
  {
  ?>
  <img src="Empresas/<?=$Logo?>" width="200px"><br>
  <?
  }
  ?>
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="20" valign="middle" bgcolor="#666666"><table width="90%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="385" class="titulares">&nbsp;&nbsp;DETALLES DE ENVIO</td>
        </tr>
      </table></td>
    </tr>
  </table>
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr class="Estilo93">
      <td width="50%" height="40" valign="middle" bgcolor="#FFFFFF" class="Estilo93 Estilo96" style="color: #000; font-weight: bold;">NOMBRE USUARIO:<span style="color: #666">

        <?=$Nombre?>
      </span></td>
      <td width="50%" valign="middle" bgcolor="#FFFFFF" class="Estilo93 Estilo96" style="color: #000"><span class="Estilo93 Estilo96" style="color: #000; font-weight: bold;">DIRECCION ENTREGA:</span>
        <span style="color: #666">

        <?=$Direccion?>
      </span></td>
    </tr>
  </table>
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="20%" height="40" valign="middle" bgcolor="#02467D" class="Estilo93 Estilo96" style="color: #FFF; font-weight: bold;"><span class="titulares">&nbsp;</span>FECHA</td>
      <td width="20%" valign="middle" bgcolor="#02467D" class="Estilo93 Estilo96" style="color: #FFF; font-weight: bold;">MOVIMIENTO</td>
    </tr>
  </table>
  <table width="100%" border="0" align="center">
    <tr>
      <td><hr size="1"></td>
    </tr>
  </table>
  
  
  
  
  
  
<?

							


							$query0				="SELECT* FROM Controlbox where Id = '$Nro'  AND Leida = 1 order By Id" ;
							$result0			=mysql_query($query0, $id);
							
							while($row0			=mysql_fetch_array($result0))
							{
							$Fechalee			=$row0["Fechalee"];
							}
							
							if(!empty($Fechalee))
							{
							$Mov				='INGRESO A BODEGA - BOGOTA';
							
?>
  
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr class="Estilo93">
      <td width="20%" height="10" valign="middle" class="Estilo93 Estilo96"><span class="titulares">&nbsp;</span>        <?=$Fechalee?></td>
      <td width="20%" valign="middle" class="Estilo93 Estilo96"><?=$Mov?></td>
    </tr>
  </table>
  
  <table width="100%" border="0" align="center">
    <tr>
      <td><hr size="1"></td>
    </tr>
  </table>

<?							
							
							}
							else
							{
							$Mov				='';	
							}

							
							$query1			="SELECT* FROM Controlbox where Id = '$Nro'  AND Salebog = 1 order By Id" ;
							$result1		=mysql_query($query1, $id);
							
							while($row1		=mysql_fetch_array($result1))
							{
							$Fechasalebog	=$row1["Fechasalebog"];
							}
														
							if(!empty($Fechasalebog))
							{
							$Mov1				='SALE DE BODEGA - BOGOTA';
?>

  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr class="Estilo93">
      <td width="20%" height="10" valign="middle" class="Estilo93 Estilo96"><span class="titulares">&nbsp;</span>        <?=$Fechasalebog?></td>
      <td width="20%" valign="middle" class="Estilo93 Estilo96"><?=$Mov1?></td>
    </tr>
  </table>
  
  <table width="100%" border="0" align="center">
    <tr>
      <td><hr size="1"></td>
    </tr>
  </table>

<?							
							
							}
							else
							{
							$Mov1				='';	
							}
							
							


							$query2			="SELECT* FROM Controlbox where Id = '$Nro'  AND Finaliza = 1 order By Id" ;
							$result2		=mysql_query($query2, $id);
							
							while($row2		=mysql_fetch_array($result2))
							{
								$Cataporte		=$row2["Cataporte"];
			
								$queryR			="SELECT* FROM Remisiones where Remesa = '$Cataporte' and Estad = 1" ;
								$resultR		=mysql_query($queryR, $id);
								
								while($rowR		=mysql_fetch_array($resultR))
								{
								$Fechafin		=$rowR["Fechafin"];
								}
							
							
							}
								
														
							if(!empty($Fechafin))
							{
							$Mov2				='INGRESO A BODEGA - MEDELLIN';
							
?>


  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr class="Estilo93">
      <td width="20%" height="10" valign="middle" class="Estilo93 Estilo96"><span class="titulares">&nbsp;</span>        <?=$Fechafin?></td>
      <td width="20%" valign="middle" class="Estilo93 Estilo96"><?=$Mov2?></td>
    </tr>
  </table>
  
  <table width="100%" border="0" align="center">
    <tr>
      <td><hr size="1"></td>
    </tr>
  </table>

<?	
							
							}
							else
							{
							$Mov2				='';	
							}

							
							
							


							
							
							$queryC			="SELECT COUNT(*) AS TOTAL FROM Controlbox where Id = '$Nro'  AND Devol <> 0 order By Id" ;
							$resultC		=mysql_query($queryC, $id);
							
							while($rowC		=mysql_fetch_array($resultC))
							{
							$TOTALC			=$rowC["TOTAL"];
							}
							
							if($TOTALC > 0)
							{
							
								$queryCC			="SELECT* FROM Controlbox where Id = '$Nro'  AND Devol <> 0 order By Id" ;
								$resultCC			=mysql_query($queryCC, $id);
								
								while($rowCC		=mysql_fetch_array($resultCC))
								{
								$Fechadevol			=$rowCC["Fechadevol"];
								}
								

									$query4			="SELECT* FROM Devoluciones where Nro = '$Nro' " ;
									$result4		=mysql_query($query4, $id);
									
									while($row4		=mysql_fetch_array($result4))
									{
									$Motivodev		=$row4["Motivo"];
									}
									
									$Mov4				='RETORNO A BODEGA ('.$Motivodev.')';
									
?>
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr class="Estilo93">
      <td width="20%" height="10" valign="middle" class="Estilo93 Estilo96"><span class="titulares">&nbsp;</span>        <?=$Fechadevol?></td>
      <td width="20%" valign="middle" class="Estilo93 Estilo96"><?=$Mov4?></td>
    </tr>
  </table>
  
  <table width="100%" border="0" align="center">
    <tr>
      <td><hr size="1"></td>
    </tr>
  </table>									
<?									

							
							}
							
							
							$query3			="SELECT* FROM Controlbox where Id = '$Nro'  AND Asignado = 1 order By Id" ;
							$result3		=mysql_query($query3, $id);
							
							while($row3		=mysql_fetch_array($result3))
							{
							$Fechasigna		=$row3["Fechaasigna"];
							}
							
														
							if(!empty($Fechasigna))
							{
							$Mov3				='EN REPARTO - MEDELLIN';
							
?>


  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr class="Estilo93">
      <td width="20%" height="10" valign="middle" class="Estilo93 Estilo96"><span class="titulares">&nbsp;</span>        <?=$Fechasigna?></td>
      <td width="20%" valign="middle" class="Estilo93 Estilo96"><?=$Mov3?></td>
    </tr>
  </table>
  <table width="100%" border="0" align="center">
    <tr>
      <td><hr size="1"></td>
    </tr>
  </table>

<?	
							
							}
							else
							{
							$Mov3				='';	
							}
							
							
							
							
							
							
							
							
							
							$query5			="SELECT* FROM Controlbox where Id = '$Nro'  AND Fin = 1 order By Id" ;
							$result5		=mysql_query($query5, $id);
							
							while($row5		=mysql_fetch_array($result5))
							{
							$Fechafina		=$row5["Fechafin"];
							}
							
														
							if(!empty($Fechafina))
							{
							$Mov5				='ENTREGADO - MEDELLIN';
							
?>


  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr class="Estilo93">
      <td width="20%" height="10" valign="middle" class="Estilo93 Estilo96"><span class="titulares">&nbsp;</span>        <?=$Fechafina?></td>
      <td width="20%" valign="middle" class="Estilo93 Estilo96"><?=$Mov5?></td>
    </tr>
  </table>
  <table width="100%" border="0" align="center">
    <tr>
      <td><hr size="1"></td>
    </tr>
  </table>

<?	
							
							}
							else
							{
							$Mov5				='';	
							}
							
							
							
							
							
							
							
							
							
							
							
							
							
if($Comprobante == 1)
{							
													
?>



  
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr class="Estilo93">
    <td width="20%" height="25" valign="middle" bgcolor="#FBFBFB" class="Estilo93 Estilo96"><span class="titulares">&nbsp;</span></td>
    <td width="20%" valign="middle" bgcolor="#00CC00" class="Estilo93 Estilo96"><a href="comprobantes/comprobantes/<?=$Nro?>.jpg" target="_blank" style="color: #FFF; font-weight: bold;">&nbsp;VER COMPROBANTE</a></td>
  </tr>
</table>
<table width="100%" border="0" align="center">
  <tr>
    <td><hr size="1"></td>
  </tr>
</table>
<?
}


	}

}
$Nro	=	'';
?>
  
  
</form>
</body>
</html>