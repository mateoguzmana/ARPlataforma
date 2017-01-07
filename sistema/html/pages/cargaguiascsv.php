<?
session_start();

if (empty($_SESSION['sesionx']))
{
?>
<script type="text/javascript">

	alert('Su sesion ha finadlizado.');
	parent.location.href=('login.php');

</script>
<?
}

include("../../includes/conexion.php");

$_SESSION['anterior']	=	$_SERVER['REQUEST_URI']; 


				
					$queryTITMEN		="SELECT* FROM Menusub WHERE Id = ".$_REQUEST["Idsubmenu"] ;
					$resultTITMEN		=mysql_query($queryTITMEN, $id);
					
					While($rowTITMEN	=mysql_fetch_array($resultTITMEN))
					{
					$NombreTITMEN		=$rowTITMEN["Nombre"];
					}
					
					

					
					$LineaMenuS			=$NombreTITMEN;
					
					$Usuario		=			$_SESSION['usuario'];
					$Fecha			=			date("Y-m-d H:i:s");
					
					
					$Empresa		=			$_REQUEST["Empresa"];
					$Nit			=			$_REQUEST["Empresa"];
					$Pasa			=			$_REQUEST["Pasa"];
					$ARCHIVO		=			$_REQUEST["Archivo"];
					
					
					$archivo1 		= 			$_FILES['filex']['tmp_name'];
					$archiv			=			$_FILES['filex']['name'];
					$extension 		= 			explode(".",$archiv);
					$ext			= 			$extension[1];	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?
        include("../../includes/title.php");
		?>

		<!-- BEGIN META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="your,keywords">
		<meta name="description" content="Short explanation about this website">
		<!-- END META -->

		<!-- BEGIN STYLESHEETS -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,300,400,600,700,800' rel='stylesheet' type='text/css'/>
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/bootstrap.css?1403937764" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/boostbox.css?1403937765" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/boostbox_responsive.css?1403937765" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/font-awesome.min.css?1401481653" />
        <link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/bootstrap-datetimepicker/bootstrap-datetimepicker.css?1403937882" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/DataTables/jquery.dataTables.css?1403937875" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/DataTables/TableTools.css?1403937875" />
		<!-- END STYLESHEETS -->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="../../assets/js/libs/utils/html5shiv.js?1401481649"></script>
		<script type="text/javascript" src="../../assets/js/libs/utils/respond.min.js?1401481651"></script>
		<![endif]-->
        
        
<SCRIPT language=Javascript>
<!--
function isNumberKey(evt)
{
	var charCode = (evt.which) ? evt.which : event.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))
	return false;
	return true;
	}
	//-->
</SCRIPT> 
        
	</head>
	<body >

		<!-- BEGIN HEADER-->
		<header id="header">

<?
include("../../includes/navbar.php");
?>

		</header>
		<!-- END HEADER-->

		<!-- BEGIN BASE-->
		<div id="base">

			<!-- BEGIN SIDEBAR-->
			<div id="sidebar">
			  <div class="sidebar-back"></div>
			  <div class="sidebar-content">
			    <div class="nav-brand"> <a class="main-brand" href="zona.php">
			      <h3 class="text-light text-white"><span>AR<strong>Express</strong></span></h3>
			      </a> 
               </div>

<?
include("../../includes/menu.php");
?>


		      </div>
		  </div><!--end #sidebar-->
			<!-- END SIDEBAR -->
            
 <?
							$MosPerz1		=	0;
					

							
							$queryPerz1			="SELECT* FROM Permisos where Idtipo = '$tipouzer'  and Men = '$Idmenux' and Submenu = '$Idsubmenux' and Opciones = '$Idopcmenux' ";
							$resultPerz1		=mysql_query($queryPerz1, $id);
							
							while($rowPerz1		=mysql_fetch_array($resultPerz1))
							{
							$MosPerzA			=$rowPerz1["Agr"];
							
							
								if($MosPerzA > 0)
								{
								$MosPerz1	=	1;
								}
							}

?>           
			<!-- BEGIN CONTENT-->
			<div id="content">
				<section>
					<div class="section-header">
						<h3 class="text-standard"><i class="fa fa-fw fa-arrow-circle-right text-gray-light"></i> <?=$LineaMenuS?></h3>
					</div>
					<div class="section-body">
						<div class="row">
								<div class="box">
									<div class="box-body style-white table-responsive">
                                        <table id="datatable9" name="datatable9" class="table table-condensed table-hover">
											<thead>
											  <tr>
 											   <th>Guia</th>
 											   <th>Descripcion</th>
 											   <th>Peso</th>
 											   <th>Piezas</th>
 											   <th>Destinatario</th>
 											   <th>Dir.</th>
 											   <th>Ciudad </th>
 											   <th>Depto. </th>
 											   <th>Vlr.</th>
 											   <th>Tel.</th>
 											   <th>Remitente</th>
 											   <th>Dir.</th>
 											   <th>Ciudad</th>
 											   <th>Tel.</th>
 											  </tr>
 											</thead>

        <tbody>
        									
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
	
	
require_once '../../../PHPExcel/Classes/PHPExcel/IOFactory.php';
$objPHPExcel = PHPExcel_IOFactory::load($path.$FILE);


?>

<?
foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) 
{
    $worksheetTitle     = $worksheet->getTitle();
    $highestRow         = $worksheet->getHighestRow(); // e.g. 10
    $highestColumn      = $worksheet->getHighestColumn(); // e.g 'F'
    $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
    $nrColumns = ord($highestColumn) - 64;
	
	
       	
?><?echo '<span class="alert-info" style="padding:5px;"> Numero de registros: ' . $highestRow . '</span><br><br>';?><?
	
    
    for ($row = 1; $row <= $highestRow; ++ $row) 
	{
?>
		
        
<?
		
        for ($col = 0; $col < 14;++$col) 
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
		
										
					
										$queryT		="SELECT COUNT(*) as Total FROM Iniciales where Empresa = '$Nit' AND Nombre = '$iniciales'" ;
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
															mysql_query($sql,$id);
																
																
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
														
														?><tr><?
												
														if($col == 0)
														{
														//echo '<td>'.$Guia.'</td>';
														}
														
														if($col == 1)
														{
														//echo '<td >'.$Descripcion.'</td>';
														}
														
														if($col == 2)
														{
														//echo '<td>'.$Peso.'</td>';
														}
														
														if($col == 3)
														{
														//echo '<td>'.$Piezas.'</td>';
														}
														
														if($col == 4)
														{
														//echo '<td>'.$Destinatario.'</td>';
														}
														
														if($col == 5)
														{
														//echo '<td>'.$Dirdestinatario.'</td>';
														}
														
														if($col == 6)
														{
														//echo '<td>'.$Ciudestinatario.'</td>';
														}
														
														if($col == 7)
														{
														//echo '<td>'.$Depdestinatario.'</td>';
														}
														
														if($col == 8)
														{
														//echo '<td>'.$Declarado.'</td>';
														}
														
														if($col == 9)
														{
														//echo '<td>'.$Teldestinatario.'</td>';
														}
														
														if($col == 10)
														{
														//echo '<td>'.$Remitente.'</td>';
														}
														
														if($col == 11)
														{
														//echo '<td>'.$Diremitente.'</td>';
														}
														
														if($col == 12)
														{
														//echo '<td>'.$Ciuremitente.'</td>';
														}
														
														if($col == 13)
														{
														//echo '<td>'.$Telremitente.'</td>';
														} 
														?>

 											   <td><?=$Guia?></td>
 											   <td><?=$Descripcion?></td>
 											   <td><?=$Peso?></td>
 											   <td><?=$Piezas?></td>
 											   <td><?=$Destinatario?></td>
 											   <td><?=$Dirdestinatario?></td>
 											   <td><?=$Ciudestinatario?></td>
 											   <td><?=$Depdestinatario?></td>
 											   <td><?=$Declarado?></td>
 											   <td><?=$Teldestinatario?></td>
 											   <td><?=$Remitente?></td>
 											   <td><?=$Diremitente?></td>
 											   <td><?=$Ciuremitente?></td>
 											   <td><?=$Telremitente?></td>
 											  </tr>
														<?
													}
											
										}
		
?>

<?
        }
?>
		
		

<? 
    }
}
	
?>
</tbody>
</table>
</div>
</div>
<?
			if($Pasa == 1)
			{
			
			unlink($path.$FILE);
			
?>
<script type="text/javascript">
	alert('La operacion se realizo con exito');
	window.location.href=('carga-guias.php?Idsubmenu=<?=$_REQUEST["Idsubmenu"]?>&Idmenu=<?=$_REQUEST["Idmenu"]?>&Idopcmenu=<?=$_REQUEST["Idopcmenu"]?>');
</script>			
			
<?			
			}
?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="48" align="right" bgcolor="#FFFFFF"><form action="cargaguiascsv.php?Idsubmenu=<?=$_REQUEST["Idsubmenu"]?>&Idmenu=<?=$_REQUEST["Idmenu"]?>&Idopcmenu=<?=$_REQUEST["Idopcmenu"]?>" method="post" name="form1" id="form1">
      <input name="Nombre" type="hidden" id="Nombre" value="<?=$Empresa?>" />
      <input name="Empresa" type="hidden" id="Nit" value="<?=$Nit?>" />
      <input name="Archivo" type="hidden" id="Archivo" value="<?=$FILE?>" />
      <input name="Pasa" type="hidden" id="Pasa" value="1" />
      <input name="button2" type="button" class="btn btn-default" class="TextField21" id="button2" value="CANCELAR" onclick="location.href='carga-guias.php?Idsubmenu=<?=$_REQUEST["Idsubmenu"]?>&Idmenu=<?=$_REQUEST["Idmenu"]?>&Idopcmenu=<?=$_REQUEST["Idopcmenu"]?>'" />
      <input name="button" class="btn btn-info" type="submit" class="TextField2" id="button" value="GENERAR GUIAS" />
    </form>
</td>
  </tr>
</table>
<?
closedir($dir); 
}
	
?>
											</div><!--end .box-body -->
										</div><!--end .tab-pane -->
										<!-- END PROFILE EDITOR -->

									</div><!--end .tab-content -->
								</div><!--end .box -->
							</div><!--end .col-lg-12 -->
						</div><!--end .row -->
					</div><!--end .section-body -->
				</section>
			</div><!--end #content-->
			<!-- END CONTENT -->

		</div><!--end #base-->
		<!-- END BASE -->

		<!-- BEGIN JAVASCRIPT -->
		<script src="../../assets/js/libs/jquery/jquery-1.11.0.min.js"></script>
		<script src="../../assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
		<script src="../../assets/js/core/BootstrapFixed.js"></script>
		<script src="../../assets/js/libs/bootstrap/bootstrap.min.js"></script>
		<script src="../../assets/js/libs/spin.js/spin.min.js"></script>
		<script src="../../assets/js/libs/moment/moment.min.js"></script>
		<script src="../../assets/js/libs/flot/jquery.flot.min.js"></script>
		<script src="../../assets/js/libs/flot/jquery.flot.time.min.js"></script>
		<script src="../../assets/js/libs/flot/jquery.flot.resize.min.js"></script>
		<script src="../../assets/js/libs/flot/jquery.flot.orderBars.js"></script>
		<script src="../../assets/js/libs/flot/jquery.flot.pie.js"></script>
		<script src="../../assets/js/libs/jquery-knob/jquery.knob.js"></script>
		<script src="../../assets/js/libs/sparkline/jquery.sparkline.min.js"></script>
		<script src="../../assets/js/libs/slimscroll/jquery.slimscroll.min.js"></script>
		<script src="../../assets/js/core/demo/DemoCharts.js"></script>
		<script src="../../assets/js/libs/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="../../assets/js/libs/jquery-validation/dist/additional-methods.min.js"></script>
		<script src="../../assets/js/core/App.js"></script>
		<script src="../../assets/js/core/demo/Demo.js"></script>
		<script src="../../assets/js/libs/DataTables/jquery.dataTables.js"></script>
		<script src="../../assets/js/libs/DataTables/extras/ColVis/js/ColVis.js"></script>
		<script src="../../assets/js/libs/DataTables/extras/TableTools/media/js/TableTools.js"></script>
		<script src="../../assets/js/core/demo/DemoTableDynamic.js"></script>
		<!-- END JAVASCRIPT -->
	</body>
</html> 