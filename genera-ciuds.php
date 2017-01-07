<?php
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$user="arplataf_sistema";
$pass="2T;oG)RL@vJ!";
$bbdd="arplataf_sistema";

$dbh = mysql_connect("localhost", $user, $pass);
$db = mysql_select_db($bbdd);

$consulta = "SELECT * from Municipio WHERE Iddep  = ".$_GET['id']." order by Nombre";
$query = mysql_query($consulta);
while ($fila = mysql_fetch_array($query)) 
{
    echo '<option value="'.$fila['Id'].'" style="width:95%">'.$fila['Nombre'].'</option>';
}

?>