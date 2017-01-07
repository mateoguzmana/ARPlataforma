<?
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

session_start(); 

include("conexion.php");

$Idplann = $_SESSION['Iddelplanact'];

$query00h="SELECT* FROM Planes where Id = '$Idplann'" ;
$result00h=mysql_query($query00h, $id);

While($row00h=mysql_fetch_array($result00h))
{
$Nombreh		=$row00h["Nombre"];
$Idh			=$row00h["Id"];
$Iddepoh		=$row00h["Iddepo"];
$Iddepdh		=$row00h["Iddepd"];
$Idpueoh		=$row00h["Idpueo"];
$Idpuedh		=$row00h["Idpued"];
}

$Idplanini		=		$_REQUEST["Idplanini"];
$Idplanend		=		$_REQUEST["Idplanend"];
$Horasend		=		$_REQUEST["Horasend"];
$Minutosend		=		$_REQUEST["Minutosend"];
$Tiempoend		=		$Horasend.":".$Minutosend.":00";
$KMend			=		$_REQUEST["KMend"];

$Horaspto		=		$_REQUEST["Horaspto"];
$Minutospto		=		$_REQUEST["Minutospto"];
$Tiempopto		=		$Horaspto.":".$Minutospto.":00";
$KMpto			=		$_REQUEST["KMpto"];

$totalreg		=		$_REQUEST["totalreg"];

$Posi	=	1;

$query0018="SELECT* FROM Plan where Idplan = '$Idplann' and Idpuesto <> '$Idplanend'  and Idpuesto <> '99999'   and Idpuesto <> '99998' and Idpuesto <> '$Idplanini' order by Id" ;
$result0018=mysql_query($query0018, $id);

While($row0018=mysql_fetch_array($result0018))
{
	
$Id18				=	$row0018["Id"];

$Idplaner 			= 	"Idplan".$Id18;
$Horaplaner			= 	"Horas".$Id18;
$Minplaner 			= 	"Minutos".$Id18;
$KMplaner 			= 	"KM".$Id18;

$Idplan				=	$_REQUEST[$Idplaner];
$Hora				=	$_REQUEST[$Horaplaner];
$Minutos			=	$_REQUEST[$Minplaner];
$Horario			=	$Hora.":".$Minutos.":00";
$KMs				=	$_REQUEST[$KMplaner];



$query="UPDATE Plan set Tiempo='$Horario', Kms='$KMs' Where Id='$Idplan'";
$result=mysql_query($query, $id);

$Posi++;

}


$query00181="SELECT* FROM Plan where Idplan = '$Idplann' and Idpuesto = '$Idplanend'" ;
$result00181=mysql_query($query00181, $id);

While($row00181=mysql_fetch_array($result00181))
{
$Id181				=	$row00181["Id"];
}
$Posis = $Posi;

if (!empty($Id181))
{
		$querys="UPDATE Plan set Tiempo='$Tiempoend', Kms='$KMend', Pos = '$Posis'  Where Id='$Id181' " ;
		$results=mysql_query($querys, $id);
}
else
{
		$sql2s="INSERT INTO  Plan (Idplan, Idpuesto, Tiempo, Kms, Pos)";
		$sql2s.= "VALUES ('$Idplann', '$Idplanend', '$Tiempoend', '$KMend', '$Posis')";
		mysql_query($sql2s);	
}
		
$query001812="SELECT* FROM Plan where Idplan = '$Idplann' and Idpuesto = '99999'" ;
$result001812=mysql_query($query001812, $id);

While($row001812=mysql_fetch_array($result001812))
{
$Id1812				=	$row001812["Id"];
}
$Posis2 = $Posis + 1;

		$querynn="UPDATE Plan set Tiempo='$Tiempopto', Kms='$KMpto', Idpuesto = '99999', Pos = '$Posis2'   Where Id='$Id1812'";
		$resultnn=mysql_query($querynn, $id);
		
		
$query2b="SELECT COUNT(*) as Total2b FROM Plan where Idpuesto = '$Idpueoh' and Idplan = '$Idplann'" ;
$result2b=mysql_query($query2b, $id);

While($row2b=mysql_fetch_array($result2b))
{
$Total2b=$row2b["Total2b"];
}

if($Total2b == 0)
{

		$sql2="INSERT INTO  Plan (Idplan, Idpuesto, Tiempo, Kms, Pos)";
		$sql2.= "VALUES ('$Idplann', '$Idplanini', '00:00:00', '0', '0')";
		mysql_query($sql2);
}
else
{
	
$query001812w="SELECT* FROM Plan where Idplan = '$Idplann' and Idpuesto = 'Idplanini'" ;
$result001812w=mysql_query($query001812w, $id);

While($row001812w=mysql_fetch_array($result001812w))
{
$Id1812w				=	$row001812w["Id"];
}

		$queryee="UPDATE Plan set Tiempo='00:00:00', Kms='0', Idpuesto = '$Idplanini', Pos = '0'  Where Id='$Id1812w'";
		$resultee=mysql_query($queryee, $id);	
}


$query00181k="SELECT* FROM Plan where Idplan = '$Idplann'" ;
$result00181k=mysql_query($query00181k, $id);

While($row00181k=mysql_fetch_array($result00181k))
{
$Idpuesto181k			=	$row00181k["Idpuesto"];
$Id181k					=	$row00181k["Id"];


	$query2b3="SELECT COUNT(*) as Total2b3 FROM Plan where Idpuesto = '$Idpuesto181k' and Idplan = '$Idplann'" ;
	$result2b3=mysql_query($query2b3, $id);
	
	While($row2b3=mysql_fetch_array($result2b3))
	{
	$Total2b3=$row2b3["Total2b3"];
	}
	
	if($Total2b3 > 1)
	{
	$SQL1="Delete From Plan Where Id = '$Id181k'";
	mysql_query($SQL1);		
	}

}


$posic	=	0;

$query00181kw="SELECT* FROM Plan where Idplan = '$Idplann' order by Pos" ;
$result00181kw=mysql_query($query00181kw, $id);

While($row00181kw=mysql_fetch_array($result00181kw))
{
$Id181kw			=	$row00181kw["Id"];

		$querynns="UPDATE Plan set Pos = '$posic' Where Id='$Id181kw'";
		$resultnns=mysql_query($querynns, $id);
		
$posic++;

}


$SQL1c="Delete From Plan Where Idplan = '$Idplann' and Idpuesto = '99998' ";
mysql_query($SQL1c);	


$sql2tt="INSERT INTO  Plan (Idplan, Idpuesto, Tiempo, Kms, Pos)";
$sql2tt.= "VALUES ('$Idplann', '99998', '00:20:00', '0', '1')";
mysql_query($sql2tt);


$posics	=	2;

$queryxc="SELECT* FROM Plan where Idplan = '$Idplann' and Pos <> 0 and Idpuesto <> '99998' order by Pos" ;
$resultxc=mysql_query($queryxc, $id);

While($rowxc=mysql_fetch_array($resultxc))
{
$Id181xc			=	$rowxc["Id"];

		$querynnsc="UPDATE Plan set Pos = '$posics' Where Id='$Id181xc'";
		$resultnnsc=mysql_query($querynnsc, $id);
		
$posics++;

}


	
header("location: endactplan.php");
?>