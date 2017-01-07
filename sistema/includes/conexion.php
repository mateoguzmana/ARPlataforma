<?
$host		="localhost";
$user		="arplataforma";
$password	="}^*#!X!IGN9#";
$database	="arplataf_system";

$id			=mysql_connect($host,$user, $password);

mysql_query("SET CHARACTER SET utf8 ");
mysql_select_db($database, $id);

?>