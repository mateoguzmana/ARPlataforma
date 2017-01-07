<?
$cargos						=	$_SESSION['Cargoxix'];
$eluser						=	$_SESSION['Empresa'];

$queryAG		="SELECT COUNT(*) as Total FROM Usuarios where Alias = '$eluser' and Cargo like '%Agencia%'" ;
$resultAG		=mysql_query($queryAG, $id);

While($rowAG	=mysql_fetch_array($resultAG))
{
$TotalAG		=$rowAG["Total"];
}

					$tipouzer		=$_SESSION['tipo'];
					$Idmenux		=$_REQUEST["Idmenu"];
					$Idsubmenux		=$_REQUEST["Idsubmenu"];
					$Idopcmenux		=$_REQUEST["Idopcmenu"];

					$conMenu		=0;
					
?>

<script src="menu/stuHover.js" type="text/javascript"></script>

<script language="JavaScript">
function Abrir_ventana (pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, width=500, height=500, top=85, left=300";
window.open(pagina,"",opciones);
}
</script>

<STYLE type=text/css>


.menugrande {
	FONT-SIZE: 12px;
	COLOR: #FFFFFF;
	font:bold;
	FONT-FAMILY: Arial, Helvetica, sans-serif
}
.menupeque {
	FONT-SIZE: 11px;
	COLOR: #F3F3F3;
	FONT-FAMILY: Arial, Helvetica, sans-serif
}
.menumedio {
	FONT-SIZE: 11px;
	COLOR: #F3F3F3;
	FONT-FAMILY: Arial, Helvetica, sans-serif
}
-->
</style>





		<link rel="stylesheet" type="text/css" href="css/superfish.css" media="screen">
		<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
		<script type="text/javascript" src="js/hoverIntent.js"></script>
		<script type="text/javascript" src="js/superfish.js"></script>
		<script type="text/javascript">

		// initialise plugins
		jQuery(function(){
			//jQuery('ul.sf-menu').superfish();
		});

		</script>
        
<span class="preload1"></span>
<span class="preload2"></span>
        

<ul class="sf-menu" style="margin-top:15px;">

<?           
	$queryMenu		="SELECT * FROM Menu order by Pos" ;
	$resultMenu		=mysql_query($queryMenu, $id);
	
	While($rowMenu	=mysql_fetch_array($resultMenu))
	{
	$NombreMenu		=utf8_decode($rowMenu["Nombre"]);
	$UrlMenu		=$rowMenu["Url"];
	$IdMenu			=$rowMenu["Id"];
	$MosPers1		=	0;

			$queryPers1			="SELECT* FROM Permisos where Idtipo = '$tipouzer'  and Men = '$IdMenu' and Submenu = '0' and Opciones = '0' ";
			$resultPers1		=mysql_query($queryPers1, $id);
			
			while($rowPers1		=mysql_fetch_array($resultPers1))
			{
			$MosPersA			=$rowPers1["Mos"];
			
			
				if($MosPersA > 0)
				{
				$MosPers1	=	1;
				}
			}


			if($UrlMenu	==	'#')
			{
			$UrlMenu	=	'javascript:void(0);';	
			$addMenu	=	'class="top_link"';
			}
			else
			{
			$UrlMenu		=$UrlMenu;
			}
							
			$conMenu++;
							
			if($MosPers1 == 1)
			{					
?>
	<li><a href="<?=$UrlMenu?>?Idmenu=<?=$IdMenu?>" style="margin-top:2px;" id="products" <?=$addMenu?>><span class="menugrande"><?=$NombreMenu?></span></a>
	<?
	if($UrlMenu =! 'javascript:void(0);')
    {
    ?>
    </li>     
    <?
    }
    else
    {
    ?>	
	<ul>
<?
	$querySUBMenu		="SELECT* FROM Menusub where Idmenu = '$IdMenu' order by Pos" ;
    $resultSUBMenu		=mysql_query($querySUBMenu, $id);
    
    while($rowSUBMenu	=mysql_fetch_array($resultSUBMenu))
    {
    $NombreSUBMenu		=utf8_decode($rowSUBMenu["Nombre"]);
    $UrlSUBMenu			=$rowSUBMenu["Url"];
    $IdSUBMenu			=$rowSUBMenu["Id"];
	
	$MosPers2		=	0;	

	$queryPers2			="SELECT* FROM Permisos where Idtipo = '$tipouzer'  and Men = '$IdMenu' and Submenu = '$IdSUBMenu' and Opciones = '0' ";
	$resultPers2		=mysql_query($queryPers2, $id);
	
	while($rowPers2		=mysql_fetch_array($resultPers2))
	{
	$MosPersB			=$rowPers2["Mos"];
																			
																			
		if($MosPersB > 0)
		{
		$MosPers2	=	1;
		}
	}
                                                          
	if($UrlSUBMenu	==	'#')
	{
	$UrlSUBMenu		=	'javascript:void(0);';
	$addSUBMenu		=	'class="menupeque"';	
	$TitleSUBMenu	=	'<span class="title">';
	$ENDTitleSUBMenu=	'</span>';
	$TargetSub 		=   '';
	}
	else
	{
	$UrlSUBMenu		=	$UrlSUBMenu;
	$addSUBMenu		=	'class="menupeque"';
	$TitleSUBMenu	=	'';
	$ENDTitleSUBMenu=	'';
	$TargetSub 		=   'target="contenido"';
	}

	if($MosPers2)
	{															
?>
	<li><a href="<?=$UrlSUBMenu?>" <?=$TargetSub?>><span <?=$addSUBMenu?>><?=$NombreSUBMenu?></span></a>
	<?
    ///////////Menuopc
    if($UrlSUBMenu =! 'javascript:void(0);')
    {
    ?>
    </li>
    <?
    }
    else
    {
    ?> 
	<ul>
<?
	$querySUBMenuO		="SELECT* FROM Menuopc where Idmenu	= '$IdMenu' and Idsub = '$IdSUBMenu' order by Pos" ;
    $resultSUBMenuO		=mysql_query($querySUBMenuO, $id);
    
    while($rowSUBMenuO	=mysql_fetch_array($resultSUBMenuO))
    {
    $NombreSUBMenuO		=utf8_decode($rowSUBMenuO["Nombre"]);
    $UrlSUBMenuO		=$rowSUBMenuO["Url"];
    $IdSUBMenuO			=$rowSUBMenuO["Id"];
																						
	$MosPers3		=	0;
																	
	$queryPers3			="SELECT* FROM Permisos where Idtipo = '$tipouzer'  and Men = '$IdMenu' and Submenu = '$IdSUBMenu' and Opciones = '$IdSUBMenuO' ";
	$resultPers3		=mysql_query($queryPers3, $id);
	
	while($rowPers3		=mysql_fetch_array($resultPers3))
	{
	$MosPersC			=$rowPers3["Mos"];
	
	
		if($MosPersC > 0)
		{
		$MosPers3	=	1;
		}
	}

	if($MosPers3)
	{							
?>
	<li><a href="<?=$UrlSUBMenuO?>" target="contenido"><span class="menupeque"><?=$NombreSUBMenuO?></span></a></li>
<?
	}
?>
<?
	}
?>	
	</ul>
<?
	}
?>
	</li>
<?
	}
?>
<?
	}
?>
	</ul>
<?
	}
?>
	</li>
<?
	}
?>
<?
	}
?>
</ul>
