<?
$cargos						=	$_SESSION['Cargoxix'];
$eluser						=	$_SESSION['Empresa'];

$queryAG		="SELECT COUNT(*) as Total FROM Usuarios where Alias = '$eluser' and Cargo like '%Agencia%'" ;
$resultAG		=mysql_query($queryAG, $id);

While($rowAG	=mysql_fetch_array($resultAG))
{
$TotalAG		=$rowAG["Total"];
}
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
-->
</style>





		<link rel="stylesheet" type="text/css" href="css/superfish.css" media="screen">
		<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
		<script type="text/javascript" src="js/hoverIntent.js"></script>
		<script type="text/javascript" src="js/superfish.js"></script>
		<script type="text/javascript">

		// initialise plugins
		jQuery(function(){
			jQuery('ul.sf-menu').superfish();
		});

		</script>
        
<span class="preload1"></span>
<span class="preload2"></span>
        

<ul class="sf-menu" style="margin-top:13px;">



	<li><a href="#" id="products" class="top_link"><span class="menugrande">Administración</span></a>
		
        <ul>
<?
if($TotalAG == 0)
{
?>
       		<li><a href="#"><span class="menupeque">Datos Maestros</span></a>
            
            <ul>
            <li><a href="datosempresa.php" target="contenido"><span class="menupeque">Datos Empresa</span></a></li>
            <li><a href="agencias.php" target="contenido"><span class="menupeque">Agencias</span></a></li>
            <!--<li><a href="tipovehiculotem.php" target="contenido"><span class="menupeque">Tipo Vehículos</span></a></li>
            <li><a href="cargoempresas.php" target="contenido"><span class="menupeque">Cargos Empresas</span></a></li>-->
            

            </ul>
            
            
        	<li><a href="#nogo7"><span class="menupeque">Generadores</span></a>
            
					<ul>
						<li><a href="empresasgernera.php" target="contenido"><span class="menupeque">Ingresar/Actualizar</span></a></li>
                        <!--<li><a href="mailsempresas.php" target="contenido"><span class="menupeque">Administrar E-mails</span></a></li>-->
                        <li><a href="inicialesaprobadas.php" target="contenido"><span class="menupeque">Iniciales Aprobadas</span></a></li>
					</ul>
			</li>
            
            
            <li><a href="#nogo7"><span class="menupeque">Hojas de Vida</span></a>
            		<ul>
						<li><a href="pasoautomotores.php" target="contenido"><span class="menupeque">Vehículos</span></a></li>
						<li><a href="pasoconductores.php" target="contenido"><span class="menupeque">Conductores</span></a></li>
                        <li><a href="pasopropietarios.php" target="contenido"><span class="menupeque">Propietarios</span></a></li>
					</ul>
            
            </li>
            
            
            
<?
}
?>

            

        	<li><a href="#nogo7"><span class="menupeque">Documentos</span></a>
            
					<ul>

                        <li><a href="cargaguias.php" target="contenido"><span class="menupeque">Carga de Guias</span></a></li>
                        <li><a href="carga-guia.php" target="contenido"><span class="menupeque">Ingresar Guias</span></a></li>
                        <li><a href="pasovalores-ing-carga.php" target="contenido"><span class="menupeque">Recepcion de Carga</span></a></li>
                        <li><a href="print-cataportes.php" target="contenido"><span class="menupeque">Generacion de Cataportes</span></a></li>
                        <li><a href="printguias.php" target="contenido"><span class="menupeque">Impresion de Guias</span></a></li>
                        <li><a href="generamanifiesto.php" target="contenido"><span class="menupeque">Generación Manifiesto</span></a></li>
						<li><a href="asignacioncataportes.php" target="contenido"><span class="menupeque">Asignacion de Guias</span></a></li>
                        <li><a href="pasaraasignacion.php" target="contenido"><span class="menupeque">Definir Asignacion</span></a></li>
					</ul>
			</li>
<?
if($TotalAG == 0)
{
?>
        	<li><a href="#nogo7"><span class="menupeque">Planes de Viaje</span></a>
            
					<ul>
						<li><a href="puestoscontrol.php" target="contenido"><span class="menupeque">Puestos de Control</span></a></li>
						<li><a href="planesdeviajes.php" target="contenido"><span class="menupeque">Planes de Viaje</span></a></li>
					</ul>
			</li>
            


            <li><a href="usuarios-sistema.php" target="contenido"><span class="menupeque">Usuarios Sistema</span></a></li>

<?
}
?>
		</ul>
	</li>
    
    
    
    
    
    
    
<?
if($TotalAG == 0)
{
?>
    
	<li><a href="#nogo22" id="services"><span class="menugrande">Viajes</span></a>
		<ul>
			<li><a href="asignarruta.php" target="contenido"><span class="menupeque">Asignación de Ruta</span></a></li>
			<li><a href="transito.php" target="contenido"><span class="menupeque">En Transito</span></a></li>
		</ul>
	</li>
    
<?
}
?>   
    
    


 
<?
if($TotalAG == 0)
{
?>    
    
	<li><a href="#nogo53" id="shop"><span class="menugrande">Reparto</span></a>
		<ul>

			<li><a href="pasovalores-sal-bodega.php" target="contenido"><span class="menupeque">Asignacion</span></a></li>
            <li><a href="#nogo7" target="contenido"><span class="menupeque">Devoluciones</span></a>

                            <ul>
                                <li><a href="pasovalores-devol-bodega.php" target="contenido"><span class="menupeque">Ingresar devolucion</span></a></li>
                                <li><a href="pasovalores-sdevol-bodega.php" target="contenido"><span class="menupeque">Salir de devolucion</span></a></li>
                            </ul>
            
            </li>
            
            <li><a href="pasovalores-fin-bodega.php" target="contenido"><span class="menupeque">Finalizacion</span></a></li>
            <li><a href="pasovalores-comprobantes.php" target="contenido"><span class="menupeque">Comprobantes</span></a></li>

		</ul>
	</li>
<?
}
?>    
    
    
    
	<li><a href="#nogo57" id="privacy"><span class="menugrande">Reportes</span></a>
		<ul>
        



            
            <li><a href="report-viajes.php" target="contenido"><span class="menupeque">Viajes</span></a></li> 
            <li><a href="reporte-salida-bodega.php" target="contenido"><span class="menupeque">Pedidos</span></a></li>

            
        </ul>
    </li>
