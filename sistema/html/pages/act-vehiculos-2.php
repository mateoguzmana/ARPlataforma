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

					$queryHH 			="SELECT * FROM Vehiculos WHERE Id='$Id'";
					$resultHH 			=mysql_query($queryHH,$id);

					while 				($rowHH=mysql_fetch_array($resultHH)) {
					$Placa 				=$rowHH["Placa"];
					$Conductor 			=$rowHH["Conductor"];					
					$Marca				=$rowHH["Marca"];	
					$Serie				=$rowHH["Serie"];		
					$Motor				=$rowHH["Motor"];		
					$Combustible		=$rowHH["Combustible"];
					$Modelo				=$rowHH["Modelo"];
					$Soat				=$rowHH["Soat"];
					$Vencimiento		=$rowHH["Vencimiento"];
					$Runt 				=$rowHH["Runt"];
					}

					$query2	 			="SELECT * FROM Conductores WHERE Id='$Conductor'";
					$result2 			=mysql_query($query2,$id);

					while 				($row2=mysql_fetch_array($result2)) {
					$Nombre 			=$row2["Nombre"];
					$IdC 				=$row2["Id"];
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
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/bootstrap-datetimepicker/bootstrap-datetimepicker.css?1403937882" />
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
											<li class="active"><a href="#editDetails"><i class="fa fa-edit"></i> Informacion del conductor</a></li>
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
												<form class="form-horizontal form-validate" role="form" method="post" id="form1" onsubmit="return ajax()" action="act-vehiculos-3.php" novalidate>
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
                                                    
                                                    
														
                                                        
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Placa" class="control-label">Placa</label>
																	<input type="text" name="Placa" id="Placa" value="<?=$Placa?>" class="form-control" placeholder="Placa" onChange="javascript:this.value=this.value.toUpperCase();" required data-rule-minlength="4">
																	<span id="pre"></span><div id="resultado"></div>
																	<input type="hidden" name="Id" value="<?=$Id?>">
																	<input type="hidden" name="PlacaActual" id="PlacaActual" value="<?=$Placa?>">
																</div>
															</div>
														</div>
													
                                                
                                                    	<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Conductor" class="control-label">Conductor</label>
																<select name="Conductor" id="Conductor" class="form-control select2-list" required>
            
                                                                        <option value="<?=$IdC?>" selected><?=$Nombre?></option>

																		<?
                                                                        $queryXD		="SELECT * FROM Conductores WHERE Id <> '$IdC' AND Muestra=0 order by Nombre";
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
																<div class="col-sm-12">
																	<label for="Marca" class="control-label">Marca</label>
                                                                	<input type="text" name="Marca" id="Marca" value="<?=$Marca?>" class="form-control" placeholder="Marca" onChange="javascript:this.value=this.value.toUpperCase();" required>
																</div>
															</div>
														</div>
                                                        
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Serie" class="control-label">Serie</label>
                                                                	<input type="text" name="Serie" id="Serie" value="<?=$Serie?>" class="form-control" placeholder="Serie" onChange="javascript:this.value=this.value.toUpperCase();">
																</div>
															</div>
														</div>
                                                        
                                                        
                                                        
                                                        
                                                        
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Motor" class="control-label">Motor</label>
                                                                	<input type="text" name="Motor" id="Motor" value="<?=$Motor?>" class="form-control" placeholder="Motor"  onChange="javascript:this.value=this.value.toUpperCase();">
																</div>
															</div>
														</div>
                                                        
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Combustible" class="control-label">Combustible</label>
                                                                	<input type="text" name="Combustible" id="Combustible" value="<?=$Combustible?>" class="form-control" placeholder="Combustible" onChange="javascript:this.value=this.value.toUpperCase();" required>
																</div>
															</div>
														</div>
                                                
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Modelo" class="control-label">Modelo</label>
                                                                	<input type="text" name="Modelo" id="Modelo" value="<?=$Modelo?>" class="form-control" placeholder="Modelo" required>
																</div>
															</div>
														</div>
                                                        
                                                        <div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Soat" class="control-label">Soat</label>
                                                                	<input type="text" name="Soat" id="Soat" value="<?=$Soat?>" class="form-control" placeholder="Soat" required>
																</div>
															</div>
														</div>

														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Runt" class="control-label">Runt</label>
                                                                	<input type="text" name="Runt" id="Runt" value="<?=$Runt?>" class="form-control" placeholder="Runt" required>
																</div>
															</div>
														</div>
													</div>


													<div class="form-group">
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

        <script src="../../assets/js/libs/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script>
        <script src="../../assets/js/libs/bootstrap-datetimepicker/locales/bootstrap-datetimepicker.es.js"></script>
		<!-- END JAVASCRIPT -->
<script type="text/javascript">
$(document).ready(function(){

      var consulta;
      var verd;          
      //comprobamos si se pulsa una tecla
      $("#Placa").focusout(function ajax(e){
             //obtenemos el texto introducido en el campo
             consulta = $("#Placa").val();      
             actual   = $("#PlacaActual").val();    

             if(consulta==actual){
             $('#pre').html('<br><img src="../../assets/img/preload.GIF" alt="" style="width:30px;height:30px;"/>').fadeOut(1000);
             $("#resultado").html(" ");	

             }
             else{
             //hace la búsqueda
             $("#resultado").delay(1000).queue(function(n) {   

             		$('#pre').html('<br><img src="../../assets/img/preload.GIF" alt="" style="width:30px;height:30px;"/>').fadeOut(1000);                                                                        
                        $.ajax({
                              type: "post",
                              url: "ajax_comprobar_placa_vehiculo.php",
                              data: "Placa="+consulta,
                              dataType: "html",
                              success: function(data){                                                      
                                    $("#resultado").html(data);
                                    n();
                                    if(data=='<br><span class="alert alert-danger">LA PLACA YA EXISTE <strong>X</strong></span>'){
                                    verd=false;
                                    }else{
                                    verd=true;
                                    }
                              }
                  });                                          
             }); 
             };  
             return verd;                            
      });                  
});
</script>
	</body>
</html>
