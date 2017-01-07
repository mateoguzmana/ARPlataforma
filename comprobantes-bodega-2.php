<?php
include("conexion.php");

date_default_timezone_set('America/Bogota');
include("resize-class.php");
		
$archivo1 = $_FILES['file2']['tmp_name'];

$archiv			=			$_FILES['file2']['name'];
$extension 		= 			explode(".",$archiv);
$ext			= 			$extension[1];






		if(!empty($archivo1))
		{
		$elzip= $archiv;
		
		(copy($archivo1, "comprobantes/".$elzip));
		
				if($archiv == 'comprobantes.zip')
				{
		
					$zip = new ZipArchive;
					
					if ($zip->open('comprobantes/'.$elzip) === TRUE) 
					{
						$zip->extractTo('comprobantes');
						$zip->close();
						
						unlink('comprobantes/'.$elzip);
					} 
					
					
					
					
					
					
						
						$path = "comprobantes/comprobantes/"; 
						$dir = opendir($path); 
						while ($elemento = readdir($dir)) 
						{ 
							$extensiones = explode(".",$elemento); 
							$nombre 	= $extensiones[0] ; 
							$nombre2  	= $extensiones[1] ; 
	
							if($nombre2=='JPG' || $nombre2=='jpg')
							{ 
							$archivo =  $nombre.".".$nombre2;




								$query="UPDATE Controlbox set Comprobante='1' Where Id ='$nombre'";
								$result=mysql_query($query, $id);
							
							
								// *** 1) Initialise / load image
								$resizeObj = new resize("comprobantes/comprobantes/".$archivo);
							
								// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
								$resizeObj -> resizeImage(800, 800, 'auto');
							
								// *** 3) Save image
								$resizeObj -> saveImage("comprobantes/comprobantes/".$archivo, 100);
							
							
							
							}
						}
						
					
					
					
					
					
					
					
					
					
		
		
				}
				else
				{
				?>
				<script type="text/javascript">
				
					alert('El archivo debe llamarse comprobantes.zip ');
					window.location.href=('comprobantes-bodega.php');
				
				</script>
				<?	
				}

 
		}
?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	window.location.href=('comprobantes-bodega.php');

</script>