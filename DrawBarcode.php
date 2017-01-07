<?
require_once('class/BCGFontFile.php');
require_once('class/BCGColor.php');
require_once('class/BCGDrawing.php');

// Including the barcode technology
require_once('class/BCGcode39.php');

$colorFront = new BCGColor(0, 0, 0);
$colorBack = new BCGColor(255, 255, 255);

$font = new BCGFontFile('./class/font/Arial.ttf', 18);






header('Content-Type: image/png');
$drawing = new BCGDrawing('', $colorfg);
$drawing->setBarcode('1122222222');
$drawing->draw();
?>