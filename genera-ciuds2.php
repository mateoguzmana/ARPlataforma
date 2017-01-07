<?php
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$user1="arplataf_sistema";
$pass1="2T;oG)RL@vJ!";
$bbdd1="arplataf_sistema";

$dbh1 = mysql_connect("localhost", $user1, $pass1);
$db1 = mysql_select_db($bbdd1);

$consulta1 = "SELECT * from Municipio WHERE Iddep  = ".$_GET['id']." order by Nombre";
$query1 = mysql_query($consulta1);
while ($fila1 = mysql_fetch_array($query1)) 
{
    echo '<option value="'.$fila1['Id'].'" style="width:95%">'.$fila1['Nombre'].'</option>';
}

?>