<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}
include("conexion.php");

date_default_timezone_set('America/Bogota');


$Idviaje 	= $_REQUEST["Id"];
$Idpuesto 	= $_REQUEST["Idpuesto"];
$Poss	 	= $_REQUEST["Pos"];


if(!empty($_SESSION['cbia']))
{
$activar	=	"checked";	
}

if(!empty($_SESSION['enviru']))
{
$activar2	=	"checked";	
}


								$queryp3			=	"SELECT COUNT(*) as Total1 FROM Recorrido where Idviaje = '$Idviaje'" ;
								$resultp3			=	mysql_query($queryp3, $id);
												
								While($rowp3		=	mysql_fetch_array($resultp3))
								{
								$Totalp3			=	$rowp3["Total1"];
								
								$Totalp3			=	$Totalp3 - 1;
								$Totalp3f			=	$Totalp3 - 1;
								}
								
								if ($Totalp3f == $Poss)
								{
									$query008e="SELECT* FROM Viajes where  Id = '$Idviaje'" ;
									$result008e=mysql_query($query008e, $id);
									
									While($row008e=mysql_fetch_array($result008e))
									{
									$Manifiestoe		=$row008e["Manifiesto"];
									}
									
									$query0080xx		=	"SELECT* FROM Manifiestos where Nromanifiesto = '$Manifiestoe'" ;
									$result0080xx		=	mysql_query($query0080xx, $id);
									
									While($row0080xx	=	mysql_fetch_array($result0080xx))
									{
									$Placaxx						= $row0080xx["Placa"];
									$Nomdestxx						= $row0080xx["Nomdest"];
									$Conductorxx					= $row0080xx["Conductor"];
									}
								
									
										$query008exxx="SELECT* FROM Viajes where  Iniciado = 1" ;
										$result008exxx=mysql_query($query008exxx, $id);
										
										While($row008exxx=mysql_fetch_array($result008exxx))
										{
										$Manifiestoxxx		=$row008exxx["Manifiesto"];
										
											$query00812xxx="SELECT* FROM Manifiestos where Nromanifiesto = '$Manifiestoxxx' and Placa = '$Placaxx'" ;
											$result00812xxx=mysql_query($query00812xxx, $id);
										
											While($row00812xxx=mysql_fetch_array($result00812xxx))
											{
											$Placa2xxx			=$row00812xxx["Placa"];
											$Conductor2xxx		=$row00812xxx["Conductor"];
											$Nomdest2xxx		=$row00812xxx["Nomdest"];
											$Nromanifiesto2xxx	=$row00812xxx["Nromanifiesto"];
											}
										
										}		
										
												if ($Nromanifiesto2xxx <> "")
												{
												$mensa	= 	"Ingresar la ciudad predilecta asignada";
												$nueva	=	"mas";
												}
												else
												{
												$mensa	= 	"Consulte ciudad predilecta al conductor";	
												$nueva	=	"si";
												}
												
										
									
	
								}

								
									$query008ev="SELECT* FROM Viajes where  Id = '$Idviaje'" ;
									$result008ev=mysql_query($query008ev, $id);
									
									While($row008ev=mysql_fetch_array($result008ev))
									{
									$Manifiestoev		=$row008ev["Manifiesto"];
									}

$querypr3			=	"SELECT COUNT(*) as Totalr3 FROM Remisiones where Manifiesto = '$Manifiestoev'" ;
$resultpr3			=	mysql_query($querypr3, $id);
													
While($rowpr3		=	mysql_fetch_array($resultpr3))
{
$Totalpr3			=	$rowpr3["Totalr3"];
}
									
									
$horaactual = date("H:i:s");
$hor = substr($horaactual, -8, 2);
$min = substr($horaactual, -5, 2);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>REPORTE PUESTO CONTROL</title>
<style type="text/css">
<!--
.titles {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	text-align: center;
	color: #666;
}
.textos {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #009;
	text-align: right;
}
.listado {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #666;
}
body {
	background-color: #E0E9F1;
	margin-top: 0px;
	margin-left: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo93 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
	color: #000;
}
.Estilo105 {
	color: #990000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
	text-align: center;
}
.Estilo97 {
	font-size: 14px;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
	color: #036;
}
.TextField2 {background-color: #DADADA;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.TextField3 {background-color: #D7D7D7;
color: #000;
font-size: 8pt;
font-family: arial;
border : 1px solid #000;
}
.listado1 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #666;
}
.listado2 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #FFF;
}
.textos1 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #009;
	text-align: right;
}
.tituloslista {	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
}
.resalto {
	color: #F00;
}
.hideable { position: relative; visibility: visible; }
-->
</style>
  
<script language="javascript"> 
function cambio()
{
	
	if (document.freporte.cbia.checked==true)
		{
			document.freporte.ctreportecliente.disabled=true;
			freporte.ctreportecliente.value = freporte.ctreporte.value;
		}
	else
		{
			document.freporte.ctreportecliente.disabled=false;
			freporte.ctreportecliente.value = "";
		}
	

    


return

}
</script>

<script LANGUAGE="JavaScript">

function validar(formulario) 
{
  if (formulario.ctreporte.value == "") 
  {
    alert("Por favor ingrese un reporte");
    formulario.ctreporte.focus();
    return (false);
  }

  if (formulario.envio.checked == "") 
  {
	var agree=confirm("Esta seguro que no enviara este reporte por E-mail?"); 
	if (agree) 
	return true ; 
	else 
	return false ; 
  }

  if (formulario.ctreportecliente.value == "" && formulario.envio.checked) 
  {
    alert("No ha ingresado un reporte al cliente");
    formulario.ctreportecliente.focus();
    return (false);
  }
  

  
  if (formulario.envio.checked) 
  {
	var agree=confirm("Esta seguro de enviar este reporte?"); 
	if (agree) 
	return true ; 
	else 
	return false ; 
  } 
  
							document.getElementById("reporto").value = "ESPERE...";
							document.getElementById("reporto").disabled = true;
							
							document.getElementById("noreporto").value = "ESPERE...";
							document.getElementById("noreporto").disabled = true;
							
							document.getElementById("sinreporte").value = "ESPERE...";
							document.getElementById("sinreporte").disabled = true;
							
							document.getElementById("salir").value = "ESPERE...";
							document.getElementById("salir").disabled = true;
							

							
							
							
  
  return (true); 
}
</script>


<?

if($_SESSION['procesar'] == "si")
{
?>
		<script src="js/jquery-1.2.6.min.js" type="text/javascript"></script>
		<script src="js/thickbox.js" type="text/javascript"></script>
		<link href="css/thickbox.css" rel="stylesheet" type="text/css" media="screen" />
        
<script> 
$(document).ready(function()
						   
	{ 
					var title = "";
					var orderCode = $("input[name=order_code]", this).val();
					var quantity = $("input[name=quantity]", this).val();
					var url = "select-mails.php?Id=<?=$Idviaje?>&Idpuesto=<?=$Idpuesto?>&Pos=<?=$Poss?>&TB_iframe=true&height=400&width=300&modal=true";
					tb_show(title, url, false);					   

	}
); 
</script>
<?
}
?>
		

        
</head>
<BODY>

<table width="480" border="0" align="center" cellpadding="0" cellspacing="0" >
  <tr onMouseover="this.bgColor='#BED9F3'"onMouseout="this.bgColor='#FFFFFF'" >
    <td height="455" align="center" valign="top" bgcolor="#C7D7E7"><table width="450" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="30" align="center" valign="middle" bgcolor="#E9E9E9" class="Estilo97">REPORTE PUESTO CONTROL</td>
        </tr>
    </table>
<?
$query="SELECT COUNT(*) as Total FROM Recorridoalert where Idpuesto = '$Idpuesto' and Idplan = '$Idviaje'" ;
$result=mysql_query($query, $id);

While($row=mysql_fetch_array($result))
{
$Total=$row["Total"];
}
if ($Total == 0)
{
?>      <br>
<?

		$queryt="SELECT* FROM Puestos  where Id  = '$Idpuesto'" ;
		$resultt=mysql_query($queryt, $id);
			
		While($rowt=mysql_fetch_array($resultt))
		{
		$Nombre 	=$rowt["Nombre"];
		$Nombra 	=$rowt["Nombre"];
		}
?>
      <table width="450" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="376" align="center" valign="top" bgcolor="#E9E9E9">
<form id="freporte" name="freporte" method="post" onSubmit = "return validar(this)" action="reportar-viaje.php">
            <input name="Idviaje" type="hidden" id="Idviaje" value="<?=$Idviaje?>">
            <input name="Idpuesto" type="hidden" id="Idpuesto" value="<?=$Idpuesto?>">
            <input name="Pos" type="hidden" id="Pos" value="<?=$Poss?>">
            <br>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="175" class="Estilo93">PUESTO DE CONTROL<br>
                  <span class="Estilo105"><?=$Nombre?></span></td>
                <td width="125" class="Estilo93">FECHA<br>
                  <span class="Estilo93 Estilo96">
                  <input name="Vence" type='text' class="TextField2" id='fecha_nacimiento' value='<?=date("Y-m-d");?>' size="20" readonly/>
                  </span></td>
                <td width="71" class="Estilo93">HORA<br>
                  <select name="Inicioh" class="TextField2" id="select5" readonly="readonly">
                    <option value="<?=$hor?>" selected> <?=$hor?></option>
<?
if($Idpuesto == '99998')
{
?>

            <option value="00" >00</option>
            <option value="01" >01</option>
            <option value="02" >02</option>
            <option value="03" >03</option>
            <option value="04" >04</option>
            <option value="05" >05</option>
            <option value="06" >06</option>
            <option value="07" >07</option>
            <option value="08" >08</option>
            <option value="09" >09</option>
            <option value="10" >10</option>
            <option value="11" >11</option>
            <option value="12" >12</option>
            <option value="13" >13</option>
            <option value="14" >14</option>
            <option value="15" >15</option>
            <option value="16" >16</option>
            <option value="17" >17</option>
            <option value="18" >18</option>
            <option value="19" >19</option>
            <option value="20" >20</option>
            <option value="21" >21</option>
            <option value="22" >22</option>
            <option value="23" >23</option>
<?
}
?>

                  </select></td>
                <td width="59" class="Estilo93">MINUTO <br>
                  <select name="Iniciom" class="TextField2" id="select6" readonly="readonly">
                    <option value="<?=$min?>" selected> <?=$min?></option>
                    
<?
if($Idpuesto == '99998')
{
?>

              <option value="00" >00</option>
              <option value="01" >01</option>
              <option value="02" >02</option>
              <option value="03" >03</option>
              <option value="04" >04</option>
              <option value="05" >05</option>
              <option value="06" >06</option>
              <option value="07" >07</option>
              <option value="08" >08</option>
              <option value="09" >09</option>
              <option value="10" >10</option>
              <option value="11" >11</option>
              <option value="12" >12</option>
              <option value="13" >13</option>
              <option value="14" >14</option>
              <option value="15" >15</option>
              <option value="16" >16</option>
              <option value="17" >17</option>
              <option value="18" >18</option>
              <option value="19" >19</option>
              <option value="20" >20</option>
              <option value="21" >21</option>
              <option value="22" >22</option>
              <option value="23" >23</option>
              <option value="24" >24</option>
              <option value="25" >25</option>
              <option value="26" >26</option>
              <option value="27" >27</option>
              <option value="28" >28</option>
              <option value="29" >29</option>
              <option value="30" >30</option>
              <option value="31" >31</option>
              <option value="32" >32</option>
              <option value="33" >33</option>
              <option value="34" >34</option>
              <option value="35" >35</option>
              <option value="36" >36</option>
              <option value="37" >37</option>
              <option value="38" >38</option>
              <option value="39" >39</option>
              <option value="40" >40</option>
              <option value="41" >41</option>
              <option value="42" >42</option>
              <option value="43" >43</option>
              <option value="44" >44</option>
              <option value="45" >45</option>
              <option value="46" >46</option>
              <option value="47" >47</option>
              <option value="48" >48</option>
              <option value="49" >49</option>
              <option value="50" >50</option>
              <option value="51" >51</option>
              <option value="52" >52</option>
              <option value="53" >53</option>
              <option value="54" >54</option>
              <option value="55" >55</option>
              <option value="56" >56</option>
              <option value="57" >57</option>
              <option value="58" >58</option>
              <option value="59" >59</option>
              
<?
}
?>

                  </select></td>
              </tr>
            </table>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><hr size="1"></td>
              </tr>
            </table>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="175" valign="top" class="Estilo93">ENVIAR E-MAIL
                 <br>
<?
if(!empty($_SESSION['Nitmail']))
{
?>
<input name="envio" type="checkbox" id="envio" value="1" <?=$activar2?>>

<?
}
else
{
?>
<input name="envio" type="checkbox" id="envio" value="1" onClick="if(this.checked) this.form.submit();" <?=$activar2?>>

<?
}
$nites	=$_SESSION['Nitmail'];
?>
                  
                  <input name="Nits" type="hidden" id="Nits" value="<?=$nites?>"></td>
                <td width="255" valign="top" class="listado1"><span class="Estilo93">
                <?
                $selecion		=	$_SESSION['Nitmail'];
				 $enviru		=	$_SESSION['enviru'];
				
				if($enviru)
				{
				?>
                </span>
<table width="250" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                      <td width="168"><span class="Estilo93">EMPRESAS SELECCIONADAS </span></td>
                      <td width="82"><span class="listado"><a href="select-mails-update.php?Id=<?=$Idviaje?>&Idpuesto=<?=$Idpuesto?>&Pos=<?=$Poss?>">(Modificar)</a></span></td>
                    </tr>
                  <tr>
                    <td height="10" colspan="2" valign="bottom" class="listado1" style="color: #900"><?
				if(!empty($selecion))
				{
					foreach ($selecion as &$value) 
					{
							$querytemp="SELECT* FROM Empresas  where Nit  = '$value'" ;
							$resulttemp=mysql_query($querytemp, $id);
								
							While($rowtemp=mysql_fetch_array($resulttemp))
							{
							$Nombreemprea 	=$rowtemp["Nombre"];
							}
							
							echo $Nombreemprea."<br>";
					}
				}
				?>
                    </td>
                    </tr>
                  </table>
<?
}
?>
                  </td>
                </tr>
            </table>
            <span class="listado1"><span class="Estilo93">

            </span></span>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><hr size="1"></td>
              </tr>
            </table>
            
<?
if ($nueva == "si")
{
?>
            
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><span class="Estilo93">CIUDAD PREDILECTA<br>
                  <select name="Predilecta" class="TextField2" id="Predilecta">
                    
                    
<?
if(!empty($_SESSION['Predilectaw']))
{
?>   
                    <option value="<?=$_SESSION['Predilectaw']?>" selected><?=$_SESSION['Predilectaw']?></option> 
<?
}
else
{
?>
                     <option value="" selected>
<?
}
?>                     
                     <option value="CUALQUIERA">CUALQUIERA</option> 
                      </option>
                    <?
$query00832		=	"SELECT* FROM Municipio Where Nombre <> 'CUALQUIERA' order by Nombre asc" ;
$result00832	=	mysql_query($query00832, $id);
						
While($row00832	=	mysql_fetch_array($result00832))
{
$Ciudad832		=	$row00832["Nombre"];
?>
                    <option value="<?=$Ciudad832?>">
                      <?=$Ciudad832?>
                      </option>
                    <?
}
?>
                  </select>
                  </span><span class="listado"><br>
                  </span><span class="Estilo105">Consultar al conductor su ciudad predilecta </span></td>
                </tr>
            </table>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><hr size="1"></td>
              </tr>
            </table>
 <?
}
 ?>           
 <?
if ($nueva == "mas")
{
?>


					

<script language="JavaScript">
<!--
(!alert("Informar al conductor que tiene un viaje programado para la ciudad de <?=$Nomdest2xxx?>"))

//-->
</script>

 <table width="430" border="0" cellpadding="0" cellspacing="0">
   <tr>
     <td align="center"><span class="Estilo93">
       <input name="Predilecta" type="hidden" id="Predilecta" value="<?=$Nomdest2xxx?>">
</td>
     </tr>
 </table>
 <table width="430" border="0" cellpadding="0" cellspacing="0">
   <tr>
     <td></td>
   </tr>
 </table>
 <?
}
 ?>
<table width="430" border="0" cellpadding="0" cellspacing="0">
  <tr>
                <td class="Estilo93"><table width="430" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td class="Estilo93">REPORTE INTERNO</td>
                  </tr>
                </table>
                 
                    <textarea name="ctreporte" style="width:100%" rows="6" class="TextField2" id="ctreporte" onChange="javascript:this.value=this.value.toUpperCase();"><?=$_SESSION['ctreporte']?></textarea>
                  </td>
              </tr>
            </table>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><hr size="1"></td>
              </tr>
            </table>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td class="Estilo93"><table width="430" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="170" class="Estilo93">REPORTE AL CLIENTE</td>
                    <td width="24" valign="top" class="Estilo93">&nbsp;</td>
                    <td width="236" valign="middle" class="Estilo93">&nbsp;</td>
                  </tr>
                </table>
 
<?
if($Idpuesto == '99998')
{
$Nombre		=	"SE REPORTA SALIENDO DEL PUNTO DE CARGUE";
}
else
{
$Nombre		=	"SE REPORTA EN ".$Nombre;	
}
?>               
<input name="Nombra" type="hidden" id="Nombra" value="<?=$Nombra?>">
<textarea name="ctreportecliente" style="width:100%" rows="6" class="TextField2" id="ctreportecliente" onChange="javascript:this.value=this.value.toUpperCase();"><?=$Nombre?></textarea>
                  </td>
              </tr>
            </table>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><hr size="1"></td>
              </tr>
            </table>
            <table width="430" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="95" height="45" align="center" class="Estilo93">
                  <input name="reporto" type="submit" class="TextField3" id="reporto" value="REPORTO">
                  
                </td>
                <td width="110" align="center" class="Estilo93"><input name="noreporto" type="submit" class="TextField3" id="noreporto" value="NO REPORTO"></td>
                <td width="111" align="center" class="Estilo93"><input name="sinreporte" type="submit" class="TextField3" id="sinreporte" value="SIN REPORTE"></td>
                <td width="64" align="center" class="Estilo93"><input name="salir" type="button" class="TextField3" id="salir" value="SALIR" onClick="window.close();"></td>
              </tr>
            </table>
          </form>
          
          </td>
        </tr>
      </table>
<?
}
else
{
	
			$query008t="SELECT* FROM Recorridoalert where Idpuesto = '$Idpuesto' and Idplan = '$Idviaje'" ;
			$result008t=mysql_query($query008t, $id);
			
			While($row008t=mysql_fetch_array($result008t))
			{
			$Idn			=$row008t["Id"];
			$Fechareport 	=$row008t["Fechareport"];
			$Reporteint		=$row008t["Reporteint"];
			$Reporteclien	=$row008t["Reporteclien"];
			$Estado			=$row008t["Estado"];	
			
		$queryt="SELECT* FROM Puestos  where Id  = '$Idpuesto'" ;
		$resultt=mysql_query($queryt, $id);
			
		While($rowt=mysql_fetch_array($resultt))
		{
		$Nombre 	=$rowt["Nombre"];
		}
		
			}
?>
<table width="450" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="376" align="center" valign="top" bgcolor="#E9E9E9"><form id="freporte2" name="freporte" method="post">
      <input name="Idviaje2" type="hidden" id="Idviaje2" value="<?=$Idviaje?>">
      <input name="Idpuesto2" type="hidden" id="Idpuesto2" value="<?=$Idpuesto?>">
      <br>
      <table width="430" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="210" class="Estilo93">PUESTO DE CONTROL<br>
            <span class="Estilo105"><?=$Nombre?>
            </span></td>
          <td width="220" class="Estilo93">FECHA<br>
            <span class="Estilo93 Estilo96">
              <div id="calendario" class="scal tinyscal" style='display:none;'></div>
              </span><span class="Estilo105"><?=$Fechareport?></span></td>
          </tr>
      </table>
      <table width="430" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td><hr size="1"></td>
        </tr>
      </table>
      <table width="430" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="210" class="Estilo93">ESTADO<br></td>
          <td width="220" class="Estilo93"><span class="Estilo93 Estilo96">
              <div id="calendario2" class="scal tinyscal" style='display:none;'></div>
              <span class="Estilo105">
              <?=$Estado?>
              </span></span></td>
          </tr>
      </table>
      <table width="430" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td><hr size="1"></td>
        </tr>
      </table>
      <table width="430" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td class="Estilo93"><table width="430" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td class="Estilo93">REPORTE INTERNO</td>
              </tr>
            </table>
            <label>
              <textarea name="ctreporte" style="width:100%" rows="8" readonly class="TextField2" id="ctreporte"><?=$Reporteint?></textarea>
              </label></td>
          </tr>
      </table>
      <table width="430" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td><hr size="1"></td>
        </tr>
      </table>
      <table width="430" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td class="Estilo93"><table width="430" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="170" class="Estilo93">REPORTE AL CLIENTE</td>
              <td width="24" valign="top" class="Estilo93">&nbsp;</td>
              <td width="236" valign="middle" class="Estilo93">&nbsp;</td>
            </tr>
          </table>
            <label>
              <textarea name="ctreportecliente" style="width:100%" rows="8" readonly class="TextField2" id="ctreportecliente"><?=$Reporteclien?></textarea>
            </label></td>
        </tr>
      </table>
      <table width="430" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td><hr size="1"></td>
        </tr>
      </table>
      <table width="380" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="45" align="center" class="Estilo93"><input name="salir2" type="button" class="TextField3" id="salir2" value="SALIR" onClick="window.close();"></td>
          </tr>
      </table>
    </form></td>
  </tr>
</table>
<?
}
?>
</td>
  </tr>
</table>

</body>
</html>