<?
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

session_start(); 

include("conexion.php");

$Idplann = $_SESSION['Iddelplan'];


$Idplanpto0		=		$_REQUEST["Idplanpto0"];

$Idplanini		=		$_REQUEST["Idplanini"];
$Idplanend		=		$_REQUEST["Idplanend"];
$Idplanpto		=		$_REQUEST["Idplanpto"];
$Horasend		=		$_REQUEST["Horasend"];
$Minutosend		=		$_REQUEST["Minutosend"];
$Tiempoend		=		$Horasend.":".$Minutosend.":00";
$KMend			=		$_REQUEST["KMend"];
$Horaspto		=		$_REQUEST["Horaspto"];
$Minutospto		=		$_REQUEST["Minutospto"];
$Tiempopto		=		$Horaspto.":".$Minutospto.":00";
$KMpto			=		$_REQUEST["KMpto"];

$Posi	=	1;

$query0018="SELECT* FROM Plan where Idplan = '$Idplann' and Idpuesto <> '99999'  order by Id" ;
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




$query="SELECT COUNT(*) as Total FROM Plan where Idpuesto = '$Idplanend' and Idplan = '$Idplann'" ;
$result=mysql_query($query, $id);

While($row=mysql_fetch_array($result))
{
$Total=$row["Total"];
}

if($Total==0)
{
$Posis = $Posi;
	
		$sql="INSERT INTO  Plan (Idplan, Idpuesto, Tiempo, Kms, Pos)";
		$sql.= "VALUES ('$Idplann', '$Idplanend', '$Tiempoend', '$KMend', '$Posis')";
		mysql_query($sql);
}
else
{

$query00181="SELECT* FROM Plan where Id = '$Idplann' and Idpuesto = '$Idplanend'" ;
$result00181=mysql_query($query00181, $id);

While($row00181=mysql_fetch_array($result00181))
{
$Id181				=	$row00181["Id"];
}
$Posis = $Posi;

		$query="UPDATE Plan set Tiempo='$Tiempoend', Kms='$KMend', Idpuesto = '$Idplanend', Pos = '$Posis'   Where Id='$Id181'";
		$result=mysql_query($query, $id);
		
}



$query2="SELECT COUNT(*) as Total2 FROM Plan where Idpuesto = '99999' and Idplan = '$Idplann'" ;
$result2=mysql_query($query2, $id);

While($row2=mysql_fetch_array($result2))
{
$Total2=$row2["Total2"];
}

if($Total2==0)
{
$Posis2 = $Posi + 1;
	
		$sql="INSERT INTO  Plan (Idplan, Idpuesto, Tiempo, Kms, Pos)";
		$sql.= "VALUES ('$Idplann', '99999', '$Tiempopto', '$KMpto', '$Posis2')";
		mysql_query($sql);
}
else
{

$query001812="SELECT* FROM Plan where Id = '$Idplann' and Idpuesto = '99999'" ;
$result001812=mysql_query($query001812, $id);

While($row001812=mysql_fetch_array($result001812))
{
$Id1812				=	$row001812["Id"];
}
$Posis2 = $Posi + 1;

		$query="UPDATE Plan set Tiempo='$Tiempopto', Kms='$KMpto', Idpuesto = '99999', Pos = '$Posis2'   Where Id='$Id1812'";
		$result=mysql_query($query, $id);
		
}



		$sql2="INSERT INTO  Plan (Idplan, Idpuesto, Tiempo, Kms, Pos)";
		$sql2.= "VALUES ('$Idplann', '$Idplanini', '00:00:00', '0', '0')";
		mysql_query($sql2);
		
		

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





$querytt="SELECT COUNT(*) as Totaltt FROM Plan where Idplan = '$Idplann'" ;
$resulttt=mysql_query($querytt, $id);

While($rowtt=mysql_fetch_array($resulttt))
{
$Totaltt=$rowtt["Totaltt"];
}


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




header("location: endplan.php");
?>