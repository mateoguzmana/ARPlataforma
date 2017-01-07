<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

include("variables.php");


header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
date_default_timezone_set('America/Bogota');

$Usuario		=			$_SESSION['Empresa'];
$Fecha			=			date("Y-m-d H:i:s");



$Empresa		=			$_REQUEST["Nombre"];
$Nit			=			$_REQUEST["Nit"];
$Pasa			=			$_REQUEST["Pasa"];
$ARCHIVO		=			$_REQUEST["Archivo"];


$archivo1 		= 			$_FILES['fileField']['tmp_name'];
$archiv			=			$_FILES['fileField']['name'];
$extension 		= 			explode(".",$archiv);
$ext			= 			$extension[1];	
	
	
?>
<style type="text/css">
<!--
body {
	background-color: #E3EFF9;
	margin-top: 0px;
	margin-left: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	font-family: Arial, Helvetica, sans-serif; 
	font-size: 12px; 
}
.ESTILO1 {
	color: #000; 
	font-family: Arial, Helvetica, sans-serif; 
	font-size: 11px; 
	font-weight: bold; 
	}
.TextField2 {background-color: #BCBCBC;
color: #333333;
font-size: 10pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.TextField21 {background-color: #900;
color: #FFF;
font-size: 10pt;
font-family: arial;
border : 1px solid #FFFFFF;
}

.itemselect {	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	color: #006;
	text-align: left;
}
.Estilo1 {
	color: #000000;
	font-size: 10px;
	font-family: Arial, Helvetica, sans-serif;
}
.Estilo45 {
	font-size: 12px;
	color: #666666;
	font-family: Arial, Helvetica, sans-serif;
}
.Estilo52 {font-size: 12px; color: #727268; font-family: Helvetica; font-weight: bold; }
.Estilo96 {font-size: 11px}
.TextField {background-color: #F3F3F3;
color: #4B4B4B;
font-size: 8pt;
font-family: arial;
border : 1px solid #C6C5C4;
}
.TextField1 {background-color: #F3F3F3;
color: #4B4B4B;
font-size: 8pt;
font-family: arial;
border : 0px solid #C6C5C4;
}
*{ behavior: url(iepngfix.htc);}
.itemselect {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	color: #006;
	text-align: left;
}

.Estilo85 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
	color: #8E85A4;
}
.Estilo91 {color: #FF0000;
	font-weight: bold;
}
.Estilo93 {color: #FF0000;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.TextField2 {background-color: #BCBCBC;
color: #333333;
font-size: 10pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.TextFieldA {background-color: #FFFFFF;
color: #333333;
font-size: 11pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.TextField21 {background-color: #900;
color: #FFF;
font-size: 10pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.Estilo52 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: normal;
}
.Estilo521 {font-size: 12px; color: #727268; font-family: Helvetica; font-weight: bold; }
.Estilo521 {	font-family: Arial, Helvetica, sans-serif;
	font-weight: normal;
}
-->
</style>
    
    
<p>&nbsp;</p>
<table width="100%" border="1" bgcolor="#CDE9C0">
  <tr class="ESTILO1">
    <td width="5%" ><strong>Guia</strong></td>
    <td width="15%" ><strong>Descripcion</strong></td>
    <td width="5%" ><strong>Peso</strong></td>
    <td width="5%" ><strong>Piezas</strong></td>
    <td width="10%" ><strong> Destinatario</strong></td>
    <td width="10%" ><strong>Direccion</strong></td>
    <td width="5%" ><strong>Ciudad </strong></td>
    <td width="5%" ><strong>Departamento </strong></td>
    <td width="5%" ><strong>Vlr Declarado</strong></td>
    <td width="5%" ><strong>Telefono</strong></td>
    <td width="10%" ><strong>Remitente</strong></td>
    <td width="10%" ><strong> Direccion</strong></td>
    <td width="5%" ><strong>Ciudad</strong></td>
    <td width="5%" ><strong>Telefono</strong></td>
  </tr>
</table>

<?

if(!empty($archivo1) || !empty($ARCHIVO))
{
$Fechaing		=			date("Y-m-d H:i:s");

	if(!empty($ARCHIVO))
	{
	$FILE			=			$ARCHIVO;	
	$path 			= 			"controlbox/";
	$dir 			= 			opendir($path); 	
	}
	else
	{
	$FILE			=			$Fechaing.".".$ext;	
	$path 			= 			"controlbox/";
	$dir 			= 			opendir($path);  
	
	(copy($archivo1, $path.$FILE));
	
	}
	
	
require_once 'PHPExcel/Classes/PHPExcel/IOFactory.php';
$objPHPExcel = PHPExcel_IOFactory::load($path.$FILE);


?>

<table width="100%" border="1">
<?
foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) 
{
    $worksheetTitle     = $worksheet->getTitle();
    $highestRow         = $worksheet->getHighestRow(); // e.g. 10
    $highestColumn      = $worksheet->getHighestColumn(); // e.g 'F'
    $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
    $nrColumns = ord($highestColumn) - 64;
	
	
        echo '<br> Numero de registros: ' . $highestRow . '<br><br>';
	
    
    for ($row = 1; $row <= $highestRow; ++ $row) 
	{
?>
        
		<tr>
        
<?
		
        for ($col = 0; $col < 14; ++ $col) 
		{
            $cell = $worksheet->getCellByColumnAndRow($col, $row);
            $val = $cell->getValue();
            $dataType = PHPExcel_Cell_DataType::dataTypeForValue($val);
			
			
			
			
			
									if($col == 0)
									{
									$Guia			=	$val;	
									}
									
									if($col == 1)
									{
									$Descripcion	=	$val;
									}
									
									if($col == 2)
									{
									$Peso			=	$val;
									}
									
									if($col == 3)
									{
									$Piezas			=	$val;
									}
									
									if($col == 4)
									{
									$Destinatario	=	$val;
									}
									
									if($col == 5)
									{
									$Dirdestinatario=	$val;
									}
									
									if($col == 6)
									{
									$Ciudestinatario=	$val;
									}
									
									if($col == 7)
									{
									$Depdestinatario=	$val;
									}
									
									if($col == 8)
									{
									$Declarado		=	$val;
									}
									
									if($col == 9)
									{
									$Teldestinatario=	$val;
									}
									
									if($col == 10)
									{
									$Remitente		=	$val;
									}
									
									if($col == 11)
									{
									$Diremitente	=	$val;
									}
									
									if($col == 12)
									{
									$Ciuremitente	=	$val;
									}
									
									if($col == 13)
									{
									$Telremitente	=	$val;
									}
			
			
			
			
			
			
			
			
			

										$iniciales	=	substr($Guia, 0, 3);
		
										
					
										$queryT		="SELECT COUNT(*) as Total FROM Iniciales where Nit = '$Nit' AND Nombre = '$iniciales'" ;
										$resultT	=mysql_query($queryT, $id);
												
										while($rowT	=mysql_fetch_array($resultT))
										{
										$TotalT		=$rowT["Total"];
										}
								
												
										if($TotalT	> 0)
										{
		
		
		
		
													if($Pasa == 1)
													{
														
															$queryW		="SELECT COUNT(*) as Total FROM Controlbox where Guia = '$Guia'" ;
															$resultW	=mysql_query($queryW, $id);
															
															While($rowW	=mysql_fetch_array($resultW))
															{
															$Total		=$rowW["Total"];
															}
																
															if($Total == 0)
															{
																
																
															$sql="INSERT INTO Controlbox (Guia, Descripcion, Posarancel, Declarado, Peso, Piezas, Remitente, Diremitente, Ciuremitente, Estadoremitente, Zipremitente, Telremitente, Destinatario, Dirdestinatario, Ciudestinatario, Teldestinatario, Empresa, Fechacarga, Usuariocarga, Depdestinatario)";
															$sql.= "VALUES ('$Guia', '$Descripcion', '$Posarancel', '$Declarado', '$Peso', '$Piezas', '$Remitente', '$Diremitente', '$Ciuremitente', '$Estadoremitente', '$Zipremitente', '$Telremitente', '$Destinatario', '$Dirdestinatario', '$Ciudestinatario', '$Teldestinatario', '$Nit', '$Fecha', '$Usuario', '$Depdestinatario')";
															mysql_query($sql);
																
																
																		$queryB		="SELECT* FROM Controlbox order by Id" ;
																		$resultB	=mysql_query($queryB, $id);
																		
																		While($rowB	=mysql_fetch_array($resultB))
																		{
																		$IdB		=$rowB["Id"];
																		}
																
											
																
																
															}
															else
															{
																$query	="UPDATE Controlbox set Descripcion = '$Descripcion', Posarancel= '$Posarancel', Declarado= '$Declarado', Peso= '$Peso', Piezas= '$Piezas', Remitente= '$Remitente', Diremitente= '$Diremitente', Ciuremitente= '$Ciuremitente', Estadoremitente= '$Estadoremitente', Zipremitente= '$Zipremitente', Telremitente= '$Telremitente', Destinatario= '$Destinatario', Dirdestinatario= '$Dirdestinatario', Ciudestinatario= '$Ciudestinatario', Teldestinatario= '$Teldestinatario', Empresa= '$Nit' Where Guia='$Guia'";
																$result	=mysql_query($query, $id);
															}
	
													}
													else
													{
														$queryW		="SELECT COUNT(*) as Total FROM Controlbox where Guia = '$Guia'" ;
														$resultW	=mysql_query($queryW, $id);
														
														While($rowW	=mysql_fetch_array($resultW))
														{
														$Total		=$rowW["Total"];
														}
														
														if($Total > 0)
														{
														$color		=	'#FFCCCC';	
														}
														else
														{
														$color		=	'#FFFFFF';		
														}
													
													
																
														if($col == 0)
														{
														echo '<td width="5%" height="26" '.$color.'><strong class="Estilo1"><input name="textfield" type="text" class="TextField1" id="textfield" style="width:99%" value="'.$Guia.'" readonly></strong></td>';
														}
														
														if($col == 1)
														{
														echo '<td width="15%" '.$color.'><strong class="Estilo1"><input name="textfield2" type="text" class="TextField1" id="textfield2" style="width:99%" value="'.$Descripcion.'" readonly></strong></td>';
														}
														
														if($col == 2)
														{
														echo '<td width="5%" '.$color.'><input name="textfield4" type="text" class="TextField1" id="textfield4" style="width:99%" value="'.$Peso.'" readonly></td>';
														}
														
														if($col == 3)
														{
														echo '<td width="5%" '.$color.'><input name="textfield15" type="text" class="TextField1" id="textfield15" style="width:99%" value="'.$Piezas.'" readonly></td>';
														}
														
														if($col == 4)
														{
														echo '<td width="10%" '.$color.'><input name="textfield22" type="text" class="TextField1" id="textfield22" style="width:99%" value="'.$Destinatario.'" readonly></td>';
														}
														
														if($col == 5)
														{
														echo '<td width="10%" '.$color.'><input name="textfield23" type="text" class="TextField1" id="textfield23" style="width:99%" value="'.$Dirdestinatario.'" readonly></td>';
														}
														
														if($col == 6)
														{
														echo '<td width="5%" '.$color.'><input name="textfield24" type="text" class="TextField1" id="textfield24" style="width:99%" value="'.$Ciudestinatario.'" readonly></td>';
														}
														
														if($col == 7)
														{
														echo '<td width="5%" '.$color.'><input name="textfield24" type="text" class="TextField1" id="textfield24" style="width:99%" value="'.$Depdestinatario.'" readonly></td>';
														}
														
														if($col == 8)
														{
														echo '<td width="5%" '.$color.'><input name="textfield3" type="text" class="TextField1" id="textfield3" style="width:99%" value="'.$Declarado.'" readonly></td>';
														}
														
														if($col == 9)
														{
														echo '<td width="5%" '.$color.'><input name="textfield25" type="text" class="TextField1" id="textfield25" style="width:99%" value="'.$Teldestinatario.'" readonly></td>';
														}
														
														if($col == 10)
														{
														echo '<td width="10%" '.$color.'><input name="textfield16" type="text" class="TextField1" id="textfield16" style="width:99%" value="'.$Remitente.'" readonly></td>';
														}
														
														if($col == 11)
														{
														echo '<td width="10%" '.$color.'><input name="textfield17" type="text" class="TextField1" id="textfield17" style="width:99%" value="'.$Diremitente.'" readonly></td>';
														}
														
														if($col == 12)
														{
														echo '<td width="5%" '.$color.'><input name="textfield18" type="text" class="TextField1" id="textfield18" style="width:99%" value="'.$Ciuremitente.'" readonly></td>';
														}
														
														if($col == 13)
														{
														echo '<td width="5%" '.$color.'><input name="textfield21" type="text" class="TextField1" id="textfield21" style="width:99%" value="'.$Telremitente.'" readonly></td>';
														}
														
														$color	=	'';
					
													}
											
										}
			
			
			
			
			

						

			
			
			
?>

    
    
    
    
    
    
    
    
    
    
    
   

        

<?
			//echo '<td > '.$row.' | '. $col.' | '. $val . '</td>';
        }
?>
		</tr>
<? 
    }
}

?>
</table>
<?
			if($Pasa == 1)
			{
			
			unlink($path.$FILE);
			
?>
<script type="text/javascript">
	alert('La operacion se realizo con exito');
	window.location.href=('cargarguias.php');
</script>			
			
<?			
			}
?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="48" align="right" bgcolor="#FFFFFF"><form action="cargaguiascsv.php" method="post" name="form1" id="form1">
      <input name="Nombre" type="hidden" id="Nombre" value="<?=$Empresa?>" />
      <input name="Nit" type="hidden" id="Nit" value="<?=$Nit?>" />
      <input name="Archivo" type="hidden" id="Archivo" value="<?=$FILE?>" />
      <input name="Pasa" type="hidden" id="Pasa" value="1" />
      <input name="button2" type="button" class="TextField21" id="button2" value="CANCELAR" onclick="location.href='cargarguias.php'" />
      <input name="button" type="submit" class="TextField2" id="button" value="GENERAR GUIAS" />
    </form></td>
  </tr>
</table>
<?
closedir($dir); 
}

?>

