<?
include("conexion.php");


$Id				= 	$_REQUEST["Id"];
$tab			= 	$_REQUEST["tab"];

$Refcomer1		= 	$_REQUEST["Refcomer1"];
$Refdir1		= 	$_REQUEST["Refdir1"];
$Refciudad1		= 	$_REQUEST["Refciudad1"];
$Refcontacto1	= 	$_REQUEST["Refcontacto1"];
$Reftelcontac1	= 	$_REQUEST["Reftelcontac1"];
$Refcomer2		= 	$_REQUEST["Refcomer2"];
$Refdir2		= 	$_REQUEST["Refdir2"];
$Refciudad2		= 	$_REQUEST["Refciudad2"];
$Refcontacto2	= 	$_REQUEST["Refcontacto2"];
$Reftelcontac2	= 	$_REQUEST["Reftelcontac2"];
$Refsocial1		= 	$_REQUEST["Refsocial1"];
$Refdirsocial1	= 	$_REQUEST["Refdirsocial1"];
$Refciusocial1	= 	$_REQUEST["Refciusocial1"];
$Refcontsocial1	= 	$_REQUEST["Refcontsocial1"];
$Reftelsocial1	= 	$_REQUEST["Reftelsocial1"];
$Refsocial2		= 	$_REQUEST["Refsocial2"];
$Refdirsocial2	= 	$_REQUEST["Refdirsocial2"];
$Refciusocial2	= 	$_REQUEST["Refciusocial2"];
$Refcontsocial2	= 	$_REQUEST["Refcontsocial2"];
$Reftelsocial2	= 	$_REQUEST["Reftelsocial2"];


$query="UPDATE Empresas set Refcomer1='$Refcomer1', Refdir1='$Refdir1', Refciudad1='$Refciudad1', Refcontacto1='$Refcontacto1', Reftelcontac1='$Reftelcontac1', Refcomer2='$Refcomer2', Refdir2='$Refdir2', Refciudad2='$Refciudad2', Refcontacto2='$Refcontacto2', Reftelcontac2='$Reftelcontac2', Refsocial1='$Refsocial1', Refdirsocial1='$Refdirsocial1', Refciusocial1='$Refciusocial1', Refcontsocial1='$Refcontsocial1', Reftelsocial1='$Reftelsocial1', Refsocial2='$Refsocial2', Refdirsocial2='$Refdirsocial2', Refciusocial2='$Refciusocial2', Refcontsocial2='$Refcontsocial2', Reftelsocial2='$Reftelsocial2' Where Id='$Id'";
$result=mysql_query($query, $id);



header("location: ingempresagenera.php?dale=f&Id=$Id&ok=0#tab3");
?>