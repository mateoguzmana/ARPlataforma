<?
$Title = "SISTEMA DE SEGUIMIENTO - TNT EXPRESS";


$host="localhost";
$user="arplataf_sistema";
$password="2T;oG)RL@vJ!";
$database="arplataf_sistema";
$id=mysql_connect($host,$user, $password);

mysql_query("SET CHARACTER SET utf8 ");
mysql_select_db($database, $id); 


ini_set('memory_limit', "128M"); 
?>