<?php
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$user1="arplataf_sistema";
$pass1="2T;oG)RL@vJ!";
$bbdd1="arplataf_sistema";

$dbh = mysql_connect("localhost", $user1, $pass1);
$db = mysql_select_db($bbdd1);

$consulta = "SELECT * from Municipio WHERE Iddep  = ".$_GET['id']." order by Nombre";
$query = mysql_query($consulta);
while ($fila = mysql_fetch_array($query)) 
{
    echo '<option value="'.$fila['Id'].'">'.$fila['Nombre'].'</option>';
}

?>