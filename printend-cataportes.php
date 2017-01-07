<?
session_start();
date_default_timezone_set('America/Bogota');
setlocale(LC_ALL,"es_ES");

$nombreuser					=	$_SESSION['Empresa'];

$Idca 					= $_REQUEST["Id"];
$Empresa 				= $_REQUEST["Empresa"];

$FechaI					= date("Y-m-d H:i:s");


include("conexion.php");

$query009		=	"SELECT* FROM Empresas where Nit = '$Empresa' " ;
$result009		=	mysql_query($query009, $id);

While($row009	=	mysql_fetch_array($result009))
{
$Nombreempre	=	$row009["Nombre"];
}


$query008		=	"SELECT* FROM Maestro " ;
$result008		=	mysql_query($query008, $id);

While($row008	=	mysql_fetch_array($result008))
{
$Identificacion		=	$row008["Identificacion"];
$Nombrer			=	$row008["Nombre"];
$Direccion			=	$row008["Direccion"];
$Telefono			=	$row008["Telefono"];
}

			$query0081sT		=	"SELECT count(*) as TOTAL FROM Controlbox where Cataporte = '$Idca' and Empresa = '$Empresa'" ;
			$result0081sT		=	mysql_query($query0081sT, $id);
										
			While($row0081sT	=	mysql_fetch_array($result0081sT))
			{
			$TOTALT				= 	$row0081sT["TOTAL"];	
			}
			
			$query0081sg		=	"SELECT* FROM Controlbox where Cataporte = '$Idca' and Empresa = '$Empresa'" ;
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
			$Destinatario	=	substr($Destinatario, 0, 25); 
			$Ciudestinatario=	substr($Ciudestinatario, 0, 15); 
			}

?>

<page backtop="25mm" backbottom="1mm" backleft="4mm" backright="8mm">

        <page_header> 
    <table width="700" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC" >
          <tr>
            <td width="" height="25" valign="top" bordercolor="#FFFFFF">
                
                <table width="710" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
                      <tr>
                            <td width="474" height="40" align="left" valign="top" style="font-family: Arial; font-size: 16px;">
                            
                            
                                <table width="497" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF"style="font-family: Arial; font-size: 10px; font-weight: bold;" bgcolor="#FFFFFF">
                                  <tr>
                                    <td width="493" height="15" align="left" valign="top" style="font-family: Arial; font-size: 14px; font-weight: bold;"><?=$Nombrer?></td>
                                    </tr>
                                </table>
                                
                                  <table width="495" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
                                    <tr>
                                      <td width="491" height="15" align="left" valign="top" style="font-family: Arial; font-size: 11px;">Fecha [<?=$Fechalee?>] </td>
                                    </tr>
                                  </table>
                                  
                                  <table width="498" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
                                    <tr>
                                      <td width="494" height="15" align="left" valign="top" style="font-family: Arial; font-size: 11px;">Cliente [<?=$Nombreempre?>] Cataporte: [<?=$Idca?>]</td>
                                    </tr>
                                  </table>
                            
                            
                            </td>
                        
                        <td width="230" align="right" valign="top" style="font-family: Arial; font-size: 16px; font-weight: bold;"><span style="font-family: Arial; font-size: 24px;"><?=$Idca?></span></td>
                    </tr>     
                </table>
                <table width="740" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="1" valign="middle" style="font-family: Arial; font-weight: bold;"><img src="Images/ed_blank.gif" width="740" height="1" /></td>
                  </tr>
                  <tr>
                    <td height="1" align="left" valign="middle" style="font-family: Arial; font-weight: bold; font-size: 13px;"><hr /></td>
                  </tr>
                </table>    
   	         </td>        
      </tr>
    </table>
        </page_header> 
        
        
        <page_footer> 
             <span style="font-family: Arial; font-size: 9px;">Sistema de Informacion Despachos TNT EXPRESS | ==> <?=$FechaI?></span>
        </page_footer> 


<?



$queryu="SELECT COUNT(*) as Total FROM Controlbox where Cataporte = '$Idca'  and Empresa = '$Empresa'" ;
$resultu=mysql_query($queryu, $id);

While($rowu=mysql_fetch_array($resultu))
{
$Totalu=$rowu["Total"];
}

if($Totalu > 0)
{
			$query0081sg		=	"SELECT* FROM Controlbox where Cataporte = '$Idca' and Empresa = '$Empresa'" ;
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
			$Destinatario	=	substr($Destinatario, 0, 25); 
			$Ciudestinatario=	substr($Ciudestinatario, 0, 15); 


?>

<style type="text/css">
<!--
.ok {
	font-family: "Arial New", Arial, monospace;
}
-->
</style>





<table width="700" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC" >
	  <tr>
	    <td width="" height="25" valign="middle" bordercolor="#FFFFFF"><table width="710" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" >
          <tr>
	          <td height="3" colspan="8" valign="middle" style="font-family: Arial; font-weight: bold;"><img src="Images/ed_blank.gif" width="700" height="2" /></td>
          </tr>
	        <tr>
	          <td width="50" height="12" align="left" valign="middle" style="font-family: Arial; font-size: 11px;">&nbsp;Remesa:</td>
	          <td width="76" align="left" valign="middle" style="font-family: Arial; font-size: 11px;"><span style="font-family: Arial; font-size: 11px;">
	            <?=$Id?>
	          </span></td>
	          <td width="72" align="left" valign="middle" style="font-family: Arial; font-size: 11px;">&nbsp;Destinatario:</td>
	          <td width="234" height="18" valign="middle" style="font-family: Arial; font-size: 11px;"><span style="font-family: Arial; font-size: 11px;">
	            <?=$Destinatario?>
	          </span></td>
	          <td width="46" valign="middle" style="font-family: Arial; font-size: 11px;"><span style="font-family: Arial; font-size: 11px;">&nbsp;Ciudad:</span></td>
	          <td width="88" valign="middle" style="font-family: Arial; font-size: 11px;"><span style="font-family: Arial; font-size: 11px;">
	            <?=$Ciudestinatario?>
	          </span></td>
	          <td width="37" valign="middle" style="font-family: Arial;font-size: 11px;"><span style="font-family: Arial; font-size: 11px;">&nbsp;Tel:</span></td>
	          <td width="107" valign="middle" style="font-family: Arial;font-size: 11px;"><span style="font-family: Arial; font-size: 11px;">
	            <?=$Teldestinatario?>
              </span></td>
            </tr>
          </table>
	      <table width="710" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" >
	        <tr>
	          <td height="3" colspan="8" valign="middle" style="font-family: Arial; font-weight: bold;"><img src="Images/ed_blank.gif" width="700" height="2" /></td>
            </tr>
	        <tr>
	          <td width="50" height="12" align="left" valign="middle" style="font-family: Arial; font-size: 11px;">&nbsp;Valor:</td>
	          <td width="76" align="left" valign="middle" style="font-family: Arial; font-size: 11px;">465.000</td>
	          <td width="72" align="left" valign="middle" style="font-family: Arial; font-size: 11px;">&nbsp;Direccion:</td>
	          <td width="234" height="18" valign="middle" style="font-family: Arial; font-size: 11px;"><?=$Dirdestinatario?></td>
	          <td width="46" valign="middle" style="font-family: Arial; font-size: 11px;">&nbsp;Unds:</td>
	          <td width="88" valign="middle" style="font-family: Arial; font-size: 11px;"><?=$Piezas?></td>
	          <td width="37" valign="middle" style="font-family: Arial;font-size: 11px;"><span style="font-family: Arial; font-size: 11px;">&nbsp;Fecha:</span></td>
	          <td width="107" valign="middle" style="font-family: Arial;font-size: 11px;"><span style="font-family: Arial; font-size: 11px;"><?=$Fechalee?></span></td>
            </tr>
          </table>
	      <table width="710" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F8F8F8" >
	        <tr>
	          <td height="3" colspan="6" valign="middle" style="font-family: Arial; font-weight: bold;"><img src="Images/ed_blank.gif" width="700" height="2" /></td>
            </tr>
	        <tr>
	          <td width="49" height="12" align="left" valign="middle" style="font-family: Arial; font-size: 11px;">N.  Dcto:</td>
	          <td width="111" align="left" valign="middle" style="font-family: Arial; font-size: 11px;"><?=$Guia?></td>
	          <td width="57" height="18" align="left" valign="middle" style="font-family: Arial; font-size: 11px;">&nbsp;Observ:              </td>
	          <td width="351" align="left" valign="middle" style="font-family: Arial; font-size: 11px;"><?=$Descripcion?></td>
	          <td width="45" align="left" valign="middle" style="font-family: Arial; font-size: 11px;">&nbsp;Kg. Real:</td>
	          <td width="97" align="left" valign="middle" style="font-family: Arial; font-size: 11px;"><?=round($Peso/2.2046)?></td>
            </tr>
          </table>
	      <table width="740" border="0" align="center" cellpadding="0" cellspacing="0">
	        <tr>
	          <td height="1" valign="middle" style="font-family: Arial; font-weight: bold;"><img src="Images/ed_blank.gif" width="740" height="1" /></td>
            </tr>
	        <tr>
	          <td height="1" align="left" valign="middle" style="font-family: Arial; font-weight: bold; font-size: 13px;"><hr /></td>
            </tr>
          </table>
	      <br /><br /></td>
      </tr>
    </table>
<?
			}	

	
}

?>
<page_footer></page_footer>

</page>












































<table width="700" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC" bgcolor="#E2E7E4" >
  <tr>
    <td width="" height="25" valign="top" bordercolor="#FFFFFF"><table width="710" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" >
      <tr>
        <td width="474" height="40" align="left" valign="top" style="font-family: Arial; font-size: 16px;"><br />
          <table width="498" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
          <tr>
              <td width="494" height="15" align="left" valign="top" style="font-family: Arial; font-size: 11px;">TOTAL DE REMESAS: [
                <?=$TOTALT?>
                ]</td>
            </tr>
        </table></td>
        <td width="230" align="right" valign="top" style="font-family: Arial; font-size: 16px; font-weight: bold;">&nbsp;</td>
      </tr>
    </table>
      <table width="740" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="1" valign="middle" style="font-family: Arial; font-weight: bold;"><img src="Images/ed_blank.gif" width="740" height="1" /></td>
        </tr>
        <tr>
          <td height="1" align="left" valign="middle" style="font-family: Arial; font-weight: bold; font-size: 13px;"><hr /></td>
        </tr>
      </table></td>
  </tr>
</table>
