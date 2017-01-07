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
					

					$Id 				=$_REQUEST["Id"];

					$queryHH 			="SELECT * FROM Controlbox Where Id='$Id'";
					$resultHH 			=mysql_query($queryHH,$id);

					while ($rowHH 		=mysql_fetch_array($resultHH)) {
					$Empresa 			=$rowHH["Empresa"];
					$Guia 				=$rowHH["Guia"];
					$Descripcion 		=$rowHH["Descripcion"];
					$Peso 				=$rowHH["Peso"];
					$Piezas 			=$rowHH["Piezas"];
					$Declarado 			=$rowHH["Declarado"];
					$Destinatario 		=$rowHH["Destinatario"];
					$Dirdestinatario 	=$rowHH["Dirdestinatario"];
					$Ciudestinatario 	=$rowHH["Ciudestinatario"];
					$Depdestinatario 	=$rowHH["Depdestinatario"];
					$Teldestinatario 	=$rowHH["Teldestinatario"];
					$Remitente 			=$rowHH["Remitente"];
					$Diremitente 		=$rowHH["Diremitente"];
					$Ciuremitente 		=$rowHH["Ciuremitente"];
					$Telremitente 		=$rowHH["Telremitente"];
					}

					$queryPP 			="SELECT * FROM Clientes Where Id='$Empresa'";
					$resultPP 			=mysql_query($queryPP,$id);

					while ($rowPP 		=mysql_fetch_array($resultPP)) {
					$NombreEmpresa 		=$rowPP["Nombre"];
					}
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

		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/bootstrap-tagsinput/bootstrap-tagsinput.css?1403937883" />
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
            
            
			<!-- BEGIN CONTENT-->
			<div id="content">
				<section>
					<div class="section-header">
						<h3 class="text-standard"><i class="fa fa-fw fa-arrow-circle-right text-gray-light"></i> <?=$LineaMenuS?></h3>
					</div>
					<div class="section-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="box style-transparent">
									<!-- START PROFILE TABS -->
									<div class="box-head">
										<ul class="nav nav-tabs tabs-transparent" data-toggle="tabs">
											<li class="active"><a href="#editDetails"><i class="fa fa-edit"></i> Actualizar Guía</a></li>
										</ul>
									</div>
									<!-- END PROFILE TABS -->

									<div class="tab-content">

										<!-- START PROFILE EDITOR -->
										<div class="tab-pane active" id="editDetails">
											<div class="box-body style-white">
                                            
                                            
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
                                            
                                            
                                            
                                            
                                                        <?
                                                        if($MosPerz1 == 1)
														{
														?>
												<form class="form-horizontal form-validate" role="form" method="post" action="act-guias-3.php" novalidate>
                                                        <?
														}
														else
														{
														?>
												<form class="form-horizontal form-validate" role="form" method="post"  novalidate>
                                                        <?
														}
														?>
												
												
                                                
                                                
													<div class="row">
                                                    
                                                    <div class="col-sm-12">
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="Empresa" class="control-label">Empresa</label>
																</div>
																<div class="col-lg-10 col-md-8 col-sm-6">
																<select name="Empresa" id="Empresa" class="form-control select2-list" required>
            
                                                                        <option value="<?=$Empresa?>" selected><?=$NombreEmpresa?></option>

																		<?
                                                                        $queryXD		="SELECT * FROM Clientes WHERE Muestra=0 order by Nombre";
                                                                        $resultXD		=mysql_query($queryXD, $id);
                                                                        
                                                                        While($rowXD	=mysql_fetch_array($resultXD))
                                                                        {
                                                                        $IdXD			=$rowXD["Id"];
																		$NombreXD		=$rowXD["Nombre"];
                                                                        ?>
                                                                        <option value="<?=$IdXD?>"><?=$NombreXD?></option>
																		<?
																		}
																		?>
                                                                </select>
																</div>
															</div>
														</div>
                                                        
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="Guia" class="control-label">Nro. Guía (Control Box)</label>
																</div>
																<div class="col-lg-10 col-md-8 col-sm-6">
																	<input type="text" name="Guia" id="Guia" class="form-control" placeholder="Número de guía" value="<?=$Guia?>" onChange="javascript:this.value=this.value.toUpperCase();" required data-rule-minlength="4">
																	<input type="hidden" name="Id" value="<?=$Id?>">
																</div>
															</div>
														</div>
													
                                                	</div>
                                                    
                                                    <div class="col-sm-12">

														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="Descripcion" class="control-label">Descripción</label>
																</div>
																<div class="col-lg-10 col-md-8 col-sm-6">
                                                                	<textarea name="Descripcion" id="Descripcion" class="form-control" placeholder="Descripción" onChange="javascript:this.value=this.value.toUpperCase();" required><?=$Descripcion?></textarea>
																</div>
															</div>
														</div>
                                                        
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="Peso" class="control-label">Peso</label>
																</div>
																<div class="col-lg-10 col-md-8 col-sm-6">
                                                                	<input type="text" name="Peso" id="Peso" class="form-control" placeholder="Dirección" value="<?=$Peso?>" onChange="javascript:this.value=this.value.toUpperCase();" required>
																</div>
															</div>
														</div>
                                                        
                                                       </div> 
                                                        
                                                        <div class="col-sm-12">
                                                        
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="Piezas" class="control-label">Piezas</label>
																</div>
																<div class="col-lg-10 col-md-8 col-sm-6">
                                                                	<input type="text" name="Piezas" id="Piezas" class="form-control" value="<?=$Piezas?>" placeholder="Nro. Piezas" onKeyPress="return isNumberKey(event);" required>
																</div>
															</div>
														</div>
                                                        
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="ValDeclarado" class="control-label">Valor declarado</label>
																</div>
																<div class="col-lg-10 col-md-8 col-sm-6">
                                                                	<input type="text" name="ValDeclarado" id="ValDeclarado" class="form-control dollar-mask" value="<?=$Declarado?>" placeholder="Valor declarado" required>
																</div>
															</div>
														</div>
                                                        
                                                        </div>
                                                        
                                                        <div class="col-sm-12">
                                                        
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="Destinatario" class="control-label">Destinatario</label>
																</div>
																<div class="col-lg-10 col-md-8 col-sm-6">
                                                                	<input type="text" name="Destinatario" id="Destinatario" class="form-control" value="<?=$Destinatario?>" placeholder="Nombre del destinatario" onChange="javascript:this.value=this.value.toUpperCase();" required>
																</div>
															</div>
														</div>
                                                        
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="DirDestnatario" class="control-label">Dir. Destinatario</label>
																</div>
																<div class="col-lg-10 col-md-8 col-sm-6">
                                                                	<input type="text" name="Dirdestinatario" id="DirDestinatario" class="form-control" value="<?=$Dirdestinatario?>" placeholder="Dirección del destinatario" onChange="javascript:this.value=this.value.toUpperCase();" required>
																</div>
															</div>
														</div>
                                                        
													</div>

													<div class="col-sm-12">

														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="CiudadDestinatario" class="control-label">Ciudad Destinatario</label>
																</div>
																<div class="col-lg-10 col-md-8 col-sm-6">
                                                                	<input type="text" name="Ciudestinatario" id="CiudadDestinatario" class="form-control" value="<?=$Ciudestinatario?>" placeholder="Ciudad del destinatario" onChange="javascript:this.value=this.value.toUpperCase();" required>
																</div>
															</div>
														</div>

                                                        <div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="DepDestinatario" class="control-label">Departamento Destinatario</label>
																</div>
																<div class="col-lg-10 col-md-8 col-sm-6">
																	<input type="text" name="Depdestinatario" id="DepDestinatario" class="form-control" value="<?=$Depdestinatario?>" onChange="javascript:this.value=this.value.toUpperCase();" placeholder="Departamento del destinatario">
																</div>
															</div>
														</div>

													</div>

													<div class="col-sm-12">

														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="Tel Destinatario" class="control-label">Tel Destinatario</label>
																</div>
																<div class="col-lg-10 col-md-8 col-sm-6">
																	<input type="text" name="Teldestinatario" id="Tel Destinatario" class="form-control" value="<?=$Teldestinatario?>" placeholder="Telefono del destinatario" required  onChange="javascript:this.value=this.value.toUpperCase();">
																</div>
															</div>
														</div>
                                                        <div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="Remitente" class="control-label">Remitente</label>
																</div>
																<div class="col-lg-10 col-md-8 col-sm-6">
																	<input type="text" name="Remitente" id="Remitente" class="form-control" value="<?=$Remitente?>"  placeholder="Nombre del remitente" required  onChange="javascript:this.value=this.value.toUpperCase();">
																</div>
															</div>
														</div>

													</div>

													<div class="col-sm-12">
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="DirRemitente" class="control-label">Dir Remitente</label>
																</div>
																<div class="col-lg-10 col-md-8 col-sm-6">
																	<input type="text" name="Diremitente" id="DirRemitente" class="form-control" value="<?=$Diremitente?>" placeholder="Dirección del remitente" required  onChange="javascript:this.value=this.value.toUpperCase();">
																</div>
															</div>
														</div>
                                                        <div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="CiuRemitente" class="control-label">Ciu Remitente</label>
																</div>
																<div class="col-lg-10 col-md-8 col-sm-6">
																	<input type="text" name="Ciuremitente" id="CiuRemitente" class="form-control" value="<?=$Ciuremitente?>" placeholder="Ciudad del remitente" required  onChange="javascript:this.value=this.value.toUpperCase();">
																</div>
															</div>
														</div>

													</div>

													<div class="col-sm-12">

														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="TelRemitente" class="control-label">Tel Remitente</label>
																</div>
																<div class="col-lg-10 col-md-8 col-sm-6">
																	<input type="text" name="Telremitente" id="TelRemitente" class="form-control" value="<?=$Telremitente?>" placeholder="Télefono del remitente" onChange="javascript:this.value=this.value.toUpperCase();" required>
																</div>
															</div>
														</div>

													</div>
													

													<div class="col-lg-12">
													
													<div class="form-group">
														<div class="col-lg-1 col-md-2 col-sm-6">
															<label for="email" class="control-label"></label>
														</div>
														<div class="col-lg-11 col-md-10 col-sm-9">
                                                        
                                                        <?
                                                        if($MosPerz1 == 1)
														{
														?>
															<button type="submit" class="btn btn-primary">Realizar Operación</button>
                                                        <?
														}
														?> 
														</div>
													</div>
													</div>
													</div>
												</form>
                                                
                                                
                                                
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
		<script src="../../assets/js/libs/inputmask/jquery.inputmask.bundle.min.js"></script>
		<script src="../../assets/js/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
		<script src="../../assets/js/libs/multi-select/jquery.multi-select.js"></script>
		<script src="../../assets/js/core/demo/DemoFormComponents.js"></script>
		<!-- END JAVASCRIPT -->

	</body>
</html>
