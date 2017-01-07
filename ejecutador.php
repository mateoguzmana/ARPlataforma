<?PHP
session_start(); 

ini_set('memory_limit', "256M"); 

function cambFecha($fecha)
{ 
    list($dia,$mes,$anio)=explode("/",$fecha); 
    return $anio."-".$mes."-".$dia; 
}  

include("cron-asignacion.php");
?>

<script type="text/javascript"> 
function redireccionar()
{   
window.location="ejecutador.php"; 
}  
setTimeout("redireccionar()", 60000); 
</script>

