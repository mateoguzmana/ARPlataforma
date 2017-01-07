<?
include("conexion.php");
include("resize-class.php");

$Nombre		=		$_REQUEST["Nombre"];
$Texto		=		$_REQUEST["Texto"];


$archivo1 = $_FILES['file1']['tmp_name'];
$archivo2 = $_FILES['file2']['tmp_name'];

$archiv			=			$_FILES['file1']['name'];
$extension 		= 			explode(".",$archiv);
$ext			= 			$extension[1];





if(!empty($archivo1))
{
$foto1= $archiv.".".$ext;

(copy($archivo1, "Precioscon/".$foto1));

}



require_once 'Classes/PHPExcel/IOFactory.php';

$objPHPExcel = PHPExcel_IOFactory::load("Precioscon/".$foto1);


foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) 
{
$worksheetTitle     = $worksheet->getTitle();
$highestRow         = $worksheet->getHighestRow();
$highestColumn      = $worksheet->getHighestColumn();
$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
$nrColumns = ord($highestColumn) - 64;

$rowa	=	$highestRow;

	if($nrColumns == 5)
	{
		
			$sql="truncate table Precioscon";
			mysql_query($sql);
	
			echo '<br><table border="1"><tr>';
			for ($row = 1; $row <= $highestRow; ++ $row) 
			{
			echo '<tr>';
				for ($col = 0; $col < $highestColumnIndex; ++ $col) 
				{
				$cell = $worksheet->getCellByColumnAndRow($col, $row);
				$val = $cell->getValue();
				$dataType = PHPExcel_Cell_DataType::dataTypeForValue($val);
				
				$val	=trim($val);	
				$val	=utf8_decode($val);	
				
					if($col == 0)
					{
					$Cantidad 	= 	$val;
					}
					elseif($col == 1)
					{
					$Referencia = 	$val;
					}
					elseif($col == 2)
					{
					$Descripcion = 	$val;
					}
					elseif($col == 3)
					{
					$Marca = 	$val;
					}
					elseif($col == 4)
					{
					$Precio	 = 	$val;
					}
				
					if(trim($val) == 'Cantidad' || trim($val) == 'CANTIDAD')
					{
						$rowa	=	$row;	
					}
					
					if($rowa < $row)
					{
					//echo '<td>' .($val) . '</td>';
					}
					
		
					
				}
					if($rowa < $row)
					{
					$sql="INSERT INTO  Precioscon (Descripcion, Referencia, Precio, Marca, Cantidad)";
					$sql.= "VALUES ('$Descripcion', '$Referencia', '$Precio', '$Marca', '$Cantidad')";
					mysql_query($sql);
					}
				
			echo '</tr>';
			}
		echo '</table>';
	}
}

unlink("Precioscon/".$foto1);
?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('precioscon.php');

</script>

