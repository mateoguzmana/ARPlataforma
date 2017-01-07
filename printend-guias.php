<?
session_start();
date_default_timezone_set('America/Bogota');
setlocale(LC_ALL,"es_ES");

$nombreuser					=	$_SESSION['Empresa'];

include("conexion.php");


include_once 'barcode.php';



$query008		=	"SELECT* FROM Maestro " ;
$result008		=	mysql_query($query008, $id);

While($row008	=	mysql_fetch_array($result008))
{
$Identificacion		=	$row008["Identificacion"];
$Nombrer			=	$row008["Nombre"];
$Direccion			=	$row008["Direccion"];
$Telefono			=	$row008["Telefono"];
}


?>

<page backtop="1mm" backbottom="1mm" backleft="4mm" backright="8mm">




<?



$queryu="SELECT COUNT(*) as Total FROM Controlbox where Cataporte = '$Cataporte'" ;
$resultu=mysql_query($queryu, $id);

While($rowu=mysql_fetch_array($resultu))
{
$Totalu=$rowu["Total"];
}

if($Totalu > 0)
{
			$query0081sg		=	"SELECT* FROM Controlbox where Cataporte = '$Cataporte'" ;
			$result0081sg		=	mysql_query($query0081sg, $id);
										
			While($row0081sg	=	mysql_fetch_array($result0081sg))
			{
			$Id				= 	$row0081sg["Id"];	
			$Guia			=	$row0081sg["Guia"];
			$Descripcion	=	$row0081sg["Descripcion"];
			$Posarancel		=	$row0081sg["Posarancel"];
			$Declarado		=	$row0081sg["Declarado"];
			$Peso			=	$row0081sg["Peso"];
			$Piezas			=	$row0081sg["Piezas"];
			$Remitente		=	strtoupper($row0081sg["Remitente"]);
			$Diremitente	=	strtoupper($row0081sg["Diremitente"]);
			$Ciuremitente	=	$row0081sg["Ciuremitente"];
			$Estadoremitente=	$row0081sg["Estadoremitente"];
			$Zipremitente	=	$row0081sg["Zipremitente"];
			$Telremitente	=	$row0081sg["Telremitente"];
			$Destinatario	=	strtoupper($row0081sg["Destinatario"]);
			$Dirdestinatario=	strtoupper($row0081sg["Dirdestinatario"]);
			$Ciudestinatario=	strtoupper($row0081sg["Ciudestinatario"]);
			$Teldestinatario=	$row0081sg["Teldestinatario"];
			$Fechalee		=	$row0081sg["Fechalee"];
			$Fechasalebog	=	$row0081sg["Fechasalebog"];

			$Fechasalebog	= substr( $Fechasalebog, 0, 10);  


		$img			=	code128BarCode($Id, 1);
		ob_start();
		imagepng($img);
		$output_img		=	ob_get_clean();



?>

<style type="text/css">
<!--
.ok {
	font-family: "Arial New", Arial, monospace;
}
-->
</style>

<table width="700" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC" style="font-family: Arial; font-size: 10px;">
	  <tr>
	    <td width="" height="250" valign="middle" bordercolor="#FFFFFF" style="font-family: Arial"><table width="745" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" style="font-family: Arial; font-size: 10px;" bgcolor="#FFFFFF">
	      <tr>
	        <td width="297" height="50" align="left" valign="top" style="font-family: Arial; font-size: 9px;"><img src="Images/logo-empresa.jpg" /><br></td>
	        <td width="214" align="right" valign="middle" style="font-family: Arial; font-size: 11px;"><?=$Nombrer?><br />
	          NIT.<?=$Identificacion?> | TEL. (057) <?=$Telefono?> <br /><?=$Direccion?><br />MEDELLIN - ANTIOQUIA</td>
	        <td width="191" align="right" valign="middle" style="font-family: Arial; font-size: 9px;">
            
            
            
            <?php if($Id) echo '<img src="data:image/png;base64,' . base64_encode($output_img) . '" />'; ?>	
            
            
            </td>
          </tr>
	      </table>
          

                
                
                
	      <table width="745" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#737373" style="font-family: Arial; font-size: 10px;" bgcolor="#FFFFFF">
	        <tr>
	          <td width="352" height="100" align="left" valign="top" style="font-family: Arial; font-size: 9px;"><table width="350" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" style="font-family: Arial; font-size: 10px; font-weight: bold;">
	            <tr>
	              <td width="80" height="5" align="left" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;REMITENTE:</td>
	              <td width="270" height="5" valign="middle" style="font-family: Arial; font-size: 9px;"><?=$Remitente?></td>
                </tr>
              </table>
	            <table width="350" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" style="font-family: Arial; font-size: 10px; font-weight: bold;">
	              <tr>
	                <td width="80" height="5" align="left" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;DIRECCION:</td>
	                <td width="270" height="5" valign="middle" style="font-family: Arial; font-size: 9px;"><?=$Diremitente?></td>
                  </tr>
              </table>
	            <table width="350" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" style="font-family: Arial; font-size: 10px; font-weight: bold;">
	              <tr>
	                <td width="80" height="5" align="left" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;CIUDAD:</td>
	                <td width="270" height="5" valign="middle" style="font-family: Arial; font-size: 9px;"><?=$Ciuremitente?></td>
                  </tr>
                </table>
	            <table width="350" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" style="font-family: Arial; font-size: 10px; font-weight: bold;">
	              <tr>
	                <td width="80" height="5" align="left" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;TELEFONO:</td>
	                <td width="270" height="5" valign="middle" style="font-family: Arial; font-size: 9px;"><?=$Telremitente?></td>
                  </tr>
              </table>
	            <table width="355" border="0" align="center" cellpadding="0" cellspacing="0">
	              <tr>
	                <td height="5" valign="middle" style="font-family: Arial; font-weight: bold;"><img src="Images/linea-separa2.jpg" width="355" height="1" /></td>
                  </tr>
                </table>
	            <table width="350" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" style="font-family: Arial; font-size: 10px; font-weight: bold;">
	              <tr>
	                <td width="80" height="5" align="left" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;DESTINATARIO:</td>
	                <td width="270" height="5" valign="middle" style="font-family: Arial; font-size: 9px;"><?=$Destinatario?></td>
                  </tr>
                </table>
                <table width="350" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" style="font-family: Arial; font-size: 10px; font-weight: bold;">
                  <tr>
                    <td width="80" height="5" align="left" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;DIRECCION:</td>
                    <td width="270" height="5" valign="middle" style="font-family: Arial; font-size: 9px;"><?=$Dirdestinatario?></td>
                  </tr>
                </table>
                <table width="350" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" style="font-family: Arial; font-size: 10px; font-weight: bold;">
                  <tr>
                    <td width="80" height="5" align="left" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;CIUDAD:</td>
                    <td width="270" height="5" align="left" valign="middle" style="font-family: Arial; font-size: 9px;"><?=$Ciudestinatario?></td>
                  </tr>
                </table>
                <table width="350" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" style="font-family: Arial; font-size: 10px; font-weight: bold;">
                  <tr>
                    <td width="80" height="5" align="left" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;TELEFONO:</td>
                    <td width="270" height="5" valign="middle" style="font-family: Arial; font-size: 9px;"><?=$Teldestinatario?></td>
                  </tr>
              </table>
                <table width="355" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" valign="middle" style="font-family: Arial; font-weight: bold;"><img src="Images/linea-separa2.jpg" width="355" height="1" /></td>
                  </tr>
                </table>
                <table width="350" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" style="font-family: Arial; font-size: 10px; font-weight: bold;">
                  <tr>
                    <td width="80" height="5" align="left" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;CONTENIDO:</td>
                    <td width="270" height="5" valign="middle" style="font-family: Arial; font-size: 9px;"><?=$Descripcion?></td>
                  </tr>
              </table><br /></td>
	          <td width="352" valign="top" style="font-family: Arial; font-size: 9px;"><table width="350" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" style="font-family: Arial; font-size: 10px; font-weight: bold;">
	            <tr>
	              <td width="70" height="5" align="left" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;FECHA:</td>
	              <td width="105" height="5" valign="middle" style="font-family: Arial; font-size: 9px;"><span style="font-family: Arial; font-size: 9px; font-weight: bold;">
	                <?=$Fechasalebog?>
	                </span></td>
	              <td width="70" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;</td>
	              <td width="105" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;</td>
                </tr>
	            </table>
                <table width="355" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" valign="middle" style="font-family: Arial; font-weight: bold;"><img src="Images/linea-separa2.jpg" width="355" height="1" /></td>
                  </tr>
                </table>
                <table width="350" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" style="font-family: Arial; font-size: 10px; font-weight: bold;">
	            <tr>
	              <td width="70" height="5" align="left" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;REMESA:</td>
	              <td width="105" height="5" valign="middle" style="font-family: Arial; font-size: 9px;"><span style="font-family: Arial; font-size: 9px; font-weight: bold; font-size: 10px; color:#900">
	                <?=$Id?>
	              </span></td>
	              <td width="70" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;NRO. GUIA:</td>
	              <td width="105" valign="middle" style="font-family: Arial; font-size: 9px;"><?=$Guia?></td>
                </tr>
              </table>
                <table width="355" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" valign="middle" style="font-family: Arial; font-weight: bold;"><img src="Images/linea-separa2.jpg" width="355" height="1" /></td>
                  </tr>
                </table>
                <table width="350" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" style="font-family: Arial; font-size: 10px; font-weight: bold;">
	              <tr>
	                <td width="70" height="5" align="left" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;UNIDADES:</td>
	                <td width="105" height="5" valign="middle" style="font-family: Arial; font-size: 9px;"><span style="font-family: Arial; font-size: 9px; font-weight: bold;">
	                  <?=$Piezas?>
	                  </span></td>
	                <td width="70" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;PESO:</td>
	                <td width="105" valign="middle" style="font-family: Arial; font-size: 9px;"><?=$Peso?> LB</td>
                  </tr>
              </table>
                <table width="355" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" valign="middle" style="font-family: Arial; font-weight: bold;"><img src="Images/linea-separa2.jpg" width="355" height="1" /></td>
                  </tr>
              </table>
                <table width="350" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" style="font-family: Arial; font-size: 10px; font-weight: bold;">
                  <tr>
                    <td width="70" height="29" align="left" valign="middle" bgcolor="#F0F0F0" style="font-family: Arial; font-size: 9px;">&nbsp;FIRMA:</td>
                    <td width="106" height="29" valign="middle" bgcolor="#F0F0F0" style="font-family: Arial; font-size: 9px;">&nbsp;</td>
                    <td width="174" valign="middle" bgcolor="#F0F0F0" style="font-family: Arial; font-size: 9px;">&nbsp;HORA/FECHA: _______ / ________</td>
                  </tr>
              </table>
                <table width="355" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" valign="middle" style="font-family: Arial; font-weight: bold;"><img src="Images/linea-separa2.jpg" width="355" height="1" /></td>
                  </tr>
                </table>
                <table width="350" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" style="font-family: Arial; font-size: 10px; font-weight: bold;">
                  <tr>
                    <td width="70" height="5" align="left" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp; C.C:</td>
                    <td width="105" height="5" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;</td>
                    <td width="70" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp; TELEFONO:</td>
                    <td width="105" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;</td>
                  </tr>
                </table>
                <table width="355" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" valign="middle" style="font-family: Arial; font-weight: bold;"><img src="Images/linea-separa2.jpg" width="355" height="1" /></td>
                  </tr>
                </table>
                <table width="350" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" style="font-family: Arial; font-size: 10px; font-weight: bold;">
                  <tr>
                    <td width="175" height="25" align="left" valign="middle" style="font-family: Arial; font-size: 10px; color:#900">- CLIENTE - </td>
                    <td width="175" align="left" valign="middle" style="font-family: Arial; font-size: 8px; color:#000">REVISAR TERMINOS Y CONDICIONES AL RESPALDO</td>
                  </tr>
                </table></td>
            </tr>
          </table></td>
      </tr>
    </table>
<br />
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC" style="font-family: Arial; font-size: 10px;">
  <tr>
    <td width="" height="250" valign="middle" bordercolor="#FFFFFF" style="font-family: Arial"><table width="745" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" style="font-family: Arial; font-size: 10px;" bgcolor="#FFFFFF">
      <tr>
        <td width="297" height="50" align="left" valign="top" style="font-family: Arial; font-size: 9px;"><img src="Images/logo-empresa.jpg" /><br /></td>
        <td width="214" align="right" valign="middle" style="font-family: Arial; font-size: 11px;"><?=$Nombrer?>
          <br />
          NIT.
          <?=$Identificacion?>
          | TEL. (057)
          <?=$Telefono?>
          <br />
          <?=$Direccion?>
          <br />
          MEDELLIN - ANTIOQUIA</td>
        <td width="191" align="right" valign="middle" style="font-family: Arial; font-size: 9px;"><?php if($Id) echo '<img src="data:image/png;base64,' . base64_encode($output_img) . '" />'; ?></td>
      </tr>
    </table>
      <table width="745" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#737373" style="font-family: Arial; font-size: 10px;" bgcolor="#FFFFFF">
        <tr>
          <td width="352" height="100" align="left" valign="top" style="font-family: Arial; font-size: 9px;"><table width="350" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" style="font-family: Arial; font-size: 10px; font-weight: bold;">
            <tr>
              <td width="80" height="5" align="left" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;REMITENTE:</td>
              <td width="270" height="5" valign="middle" style="font-family: Arial; font-size: 9px;"><?=$Remitente?></td>
            </tr>
          </table>
            <table width="350" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" style="font-family: Arial; font-size: 10px; font-weight: bold;">
              <tr>
                <td width="80" height="5" align="left" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;DIRECCION:</td>
                <td width="270" height="5" valign="middle" style="font-family: Arial; font-size: 9px;"><?=$Diremitente?></td>
              </tr>
            </table>
            <table width="350" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" style="font-family: Arial; font-size: 10px; font-weight: bold;">
              <tr>
                <td width="80" height="5" align="left" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;CIUDAD:</td>
                <td width="270" height="5" valign="middle" style="font-family: Arial; font-size: 9px;"><?=$Ciuremitente?></td>
              </tr>
            </table>
            <table width="350" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" style="font-family: Arial; font-size: 10px; font-weight: bold;">
              <tr>
                <td width="80" height="5" align="left" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;TELEFONO:</td>
                <td width="270" height="5" valign="middle" style="font-family: Arial; font-size: 9px;"><?=$Telremitente?></td>
              </tr>
            </table>
            <table width="355" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="5" valign="middle" style="font-family: Arial; font-weight: bold;"><img src="Images/linea-separa2.jpg" width="355" height="1" /></td>
              </tr>
            </table>
            <table width="350" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" style="font-family: Arial; font-size: 10px; font-weight: bold;">
              <tr>
                <td width="80" height="5" align="left" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;DESTINATARIO:</td>
                <td width="270" height="5" valign="middle" style="font-family: Arial; font-size: 9px;"><?=$Destinatario?></td>
              </tr>
            </table>
            <table width="350" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" style="font-family: Arial; font-size: 10px; font-weight: bold;">
              <tr>
                <td width="80" height="5" align="left" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;DIRECCION:</td>
                <td width="270" height="5" valign="middle" style="font-family: Arial; font-size: 9px;"><?=$Dirdestinatario?></td>
              </tr>
            </table>
            <table width="350" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" style="font-family: Arial; font-size: 10px; font-weight: bold;">
              <tr>
                <td width="80" height="5" align="left" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;CIUDAD:</td>
                <td width="270" height="5" align="left" valign="middle" style="font-family: Arial; font-size: 9px;"><?=$Ciudestinatario?></td>
              </tr>
            </table>
            <table width="350" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" style="font-family: Arial; font-size: 10px; font-weight: bold;">
              <tr>
                <td width="80" height="5" align="left" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;TELEFONO:</td>
                <td width="270" height="5" valign="middle" style="font-family: Arial; font-size: 9px;"><?=$Teldestinatario?></td>
              </tr>
            </table>
            <table width="355" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="5" valign="middle" style="font-family: Arial; font-weight: bold;"><img src="Images/linea-separa2.jpg" width="355" height="1" /></td>
              </tr>
            </table>
            <table width="350" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" style="font-family: Arial; font-size: 10px; font-weight: bold;">
              <tr>
                <td width="80" height="5" align="left" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;CONTENIDO:</td>
                <td width="270" height="5" valign="middle" style="font-family: Arial; font-size: 9px;"><?=$Descripcion?></td>
              </tr>
            </table>
            <br /></td>
          <td width="352" valign="top" style="font-family: Arial; font-size: 9px;"><table width="350" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" style="font-family: Arial; font-size: 10px; font-weight: bold;">
            <tr>
              <td width="70" height="5" align="left" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;FECHA:</td>
              <td width="105" height="5" valign="middle" style="font-family: Arial; font-size: 9px;"><span style="font-family: Arial; font-size: 9px; font-weight: bold;">
                <?=$Fechasalebog?>
              </span></td>
              <td width="70" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;</td>
              <td width="105" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;</td>
            </tr>
          </table>
            <table width="355" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="5" valign="middle" style="font-family: Arial; font-weight: bold;"><img src="Images/linea-separa2.jpg" width="355" height="1" /></td>
              </tr>
            </table>
            <table width="350" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" style="font-family: Arial; font-size: 10px; font-weight: bold;">
              <tr>
                <td width="70" height="5" align="left" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;REMESA:</td>
                <td width="105" height="5" valign="middle" style="font-family: Arial; font-size: 9px;"><span style="font-family: Arial; font-size: 9px; font-weight: bold; font-size: 10px; color:#900">
                  <?=$Id?>
                </span></td>
                <td width="70" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;NRO. GUIA:</td>
                <td width="105" valign="middle" style="font-family: Arial; font-size: 9px;"><?=$Guia?></td>
              </tr>
            </table>
            <table width="355" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="5" valign="middle" style="font-family: Arial; font-weight: bold;"><img src="Images/linea-separa2.jpg" width="355" height="1" /></td>
              </tr>
            </table>
            <table width="350" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" style="font-family: Arial; font-size: 10px; font-weight: bold;">
              <tr>
                <td width="70" height="5" align="left" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;UNIDADES:</td>
                <td width="105" height="5" valign="middle" style="font-family: Arial; font-size: 9px;"><span style="font-family: Arial; font-size: 9px; font-weight: bold;">
                  <?=$Piezas?>
                </span></td>
                <td width="70" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;PESO:</td>
                <td width="105" valign="middle" style="font-family: Arial; font-size: 9px;"><?=$Peso?>
                  LB</td>
              </tr>
            </table>
            <table width="355" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="5" valign="middle" style="font-family: Arial; font-weight: bold;"><img src="Images/linea-separa2.jpg" width="355" height="1" /></td>
              </tr>
            </table>
            <table width="350" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" style="font-family: Arial; font-size: 10px; font-weight: bold;">
              <tr>
                <td width="70" height="29" align="left" valign="middle" bgcolor="#FFFFFF" style="font-family: Arial; font-size: 9px;">&nbsp;</td>
                <td width="280" height="29" valign="middle" bgcolor="#FFFFFF" style="font-family: Arial; font-size: 9px;">&nbsp;</td>
              </tr>
            </table>
            <table width="355" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="5" valign="middle" style="font-family: Arial; font-weight: bold;">&nbsp;</td>
              </tr>
            </table>
            <table width="350" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" style="font-family: Arial; font-size: 10px; font-weight: bold;">
              <tr>
                <td width="70" height="5" align="left" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;</td>
                <td width="105" height="5" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;</td>
                <td width="70" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;:</td>
                <td width="105" valign="middle" style="font-family: Arial; font-size: 9px;">&nbsp;</td>
              </tr>
            </table>
            <table width="350" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" style="font-family: Arial; font-size: 10px; font-weight: bold;">
              <tr>
                <td width="175" height="25" align="left" valign="middle" style="font-family: Arial; font-size: 10px; color:#900">- COPIA - </td>
                <td width="175" align="left" valign="middle" style="font-family: Arial; font-size: 8px; color:#000">&nbsp;</td>
              </tr>
          </table></td>
        </tr>
      </table></td>
  </tr>
</table>
<?
imagedestroy($img);


			}	

	
}

?>



<page_footer></page_footer>

</page>
