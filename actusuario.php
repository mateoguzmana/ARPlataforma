<? 
include("variables.php"); 

$Iduser	=	$_REQUEST["Id"];

$query008n="SELECT* FROM Usuarios where Id = '$Iduser'" ;
$result008n=mysql_query($query008n, $id);

While($row008n=mysql_fetch_array($result008n))
{
$Cedula			=$row008n["Cedula"];
$Apellido1		=$row008n["Apellido1"];
$Apellido2		=$row008n["Apellido2"];
$Nombre1		=$row008n["Nombre1"];
$Nombre2		=$row008n["Nombre2"];
$Nombrefull		=$row008n["Nombrefull"];
$Direccion		=$row008n["Direccion"];
$Ciudad			=$row008n["Ciudad"];
$Departamento	=$row008n["Departamento"];
$Telefono		=$row008n["Telefono"];
$Celular		=$row008n["Celular"];
$Oficina		=$row008n["Oficina"];
$Email			=$row008n["Email"];
$Clave			=$row008n["Clave"];
$Estado			=$row008n["Estado"];
$Vencimiento	=$row008n["Vencimiento"];
$Sucursal		=$row008n["Sucursal"];
$Alias			=$row008n["Alias"];
$Cargo			=$row008n["Cargo"];
$Tipo       =$row008n["Tipo"];
}

$query008nn="SELECT* FROM Departamentos where Id = '$Departamento'" ;
$result008nn=mysql_query($query008nn, $id);

While($row008nn=mysql_fetch_array($result008nn))
{
$Depart			=$row008nn["Nombre"];
$Iddepa			=$row008nn["Id"];
}

$query008nnn="SELECT* FROM Municipio where Id = '$Ciudad'" ;
$result008nnn=mysql_query($query008nnn, $id);

While($row008nnn=mysql_fetch_array($result008nnn))
{
$Ciuda			=$row008nnn["Nombre"];
$Idciud			=$row008nnn["Id"];
}

$query008nnnn="SELECT* FROM Agencias where Id = '$Sucursal'" ;
$result008nnnn=mysql_query($query008nnnn, $id);

While($row008nnnn=mysql_fetch_array($result008nnnn))
{
$Agenc			=$row008nnnn["Nombre"];
$Idagen			=$row008nnnn["Id"];
}

$query    = "SELECT * FROM Tipouser WHERE Id = '$Tipo' order by Nombre";
$result   = mysql_query($query, $id);
      
while($row  = mysql_fetch_array($result))
{
$NombreXX = $row["Nombre"];
$NitXX    = $row["Id"];  
}

$dale	=	$_REQUEST["dale"];
?>

<style type="text/css">
<!--
body {
	SCROLLBAR-FACE-COLOR:#F3F3F3;
	SCROLLBAR-HIGHLIGHT-COLOR: #CECECE;
	SCROLLBAR-SHADOW-COLOR: #CECECE;
	SCROLLBAR-3DLIGHT-COLOR: #F3F3F3;
	SCROLLBAR-ARROW-COLOR: #CECECE;
	SCROLLBAR-TRACK-COLOR: #CECECE;
	SCROLLBAR-DARKSHADOW-COLOR: #CECECE;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	height:100%;
} 
.itemselect {	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	color: #006;
	text-align: left;
}
.Estilo1 {color: #E1E1E1;
	font-size: 10px;
}
.Estilo45 {font-size: 12px;
	color: #666666;
	font-family: Helvetica;
}
.Estilo52 {font-size: 12px; color: #727268; font-family: Helvetica; font-weight: bold; }
.Estilo96 {font-size: 11px}
.Estilo916 {font-size: 11px; color: #FF0000;}
.TextField {background-color: #F3F3F3;
color: #4B4B4B;
font-size: 9pt;
font-family: arial;
border : 1px solid #C6C5C4;
}
.TextField1 {background-color: #F3F3F3;
color: #4B4B4B;
font-size: 9pt;
font-family: arial;
border : 1px solid #C6C5C4;
}
*{ behavior: url(iepngfix.htc);}
.itemselect {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	color: #666;
	text-align: left;
}
.Estilo32 {font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: #000000; }
.Estilo73 {font-size: 12px; font-weight: bold; }
.Estilo97 {font-size: 12px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
.TextField2 {background-color: #DADADA;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.Estilo105 {color: #990000; font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold; }
.Estilo115 {font-size: 9px}
.Estilo117 {font-size: 11px}
.Estilo92 {	font-size: 18px;
	color: #154994;
	font-weight: bold;
	font-family: Geneva, Arial, Helvetica, sans-serif;
}
.Estilo93 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.Estilo94 {font-size: 12px}
.Estilo961 {color: #333333}
.TextField21 {background-color: #BCBCBC;
color: #333333;
font-size: 8pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
-->
</style>



<script type="text/javascript" src="jquery-1.4.2.min.js"></script>
<script type="text/javascript">
  $.noConflict();
  // Code that uses other library's $ can follow here.
</script>

                <script language="JavaScript" type="text/JavaScript">
            jQuery(document).ready(function(){
                jQuery("#select1").change(function(event){
                    var id = jQuery("#select1").find(':selected').val();
                    jQuery("#select2").load('genera-select-users.php?id='+id);
                });
            });
                </script>
                
<script type="text/javascript">
function pulsar(e) {
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8) return true;
    patron =/\s/;
    te = String.fromCharCode(tecla);
    return !patron.test(te);
}
</script>

  <script type="text/javascript" src="prototype.js"></script>
  <script type="text/javascript" src="scal.js"></script>
  <link href="scal.css" media="screen" rel="stylesheet" type="text/css" />
  
<script LANGUAGE="JavaScript">
function Validar(form)
{
  if (form.Cedula.value == "")
  { alert("Por favor ingrese una Cedula"); form.Cedula.focus(); return; }
  
   if(form.Cedula.value.length < 7)
  { alert("Su C�dula debe tener m�nimo 7 d�gitos"); form.Cedula.focus(); return; } 
  
   if (form.Apellido1.value == "")
  { alert("Por favor ingrese el Primer Apellido"); form.Apellido1.focus(); return; }
  
  if (form.Nombre1.value == "")
  { alert("Por favor ingrese un Nombre"); form.Nombre1.focus(); return; }
  
  if (form.select1.value == "")
  { alert("Por favor seleccione un Departamento"); form.select1.focus(); return; }
   
  if (form.select2.value == "")
  { alert("Por favor seleccione un Municipio"); form.select2.focus(); return; }
  
  if (form.Direccion.value == "")
  { alert("Por favor seleccione una Direcci�n"); form.Direccion.focus(); return; }
  
  if (form.Telefono.value == "")
  { alert("Por favor ingrese un Tel�fono"); form.Telefono.focus(); return; }

  if (form.Celular.value == "")
  { alert("Por favor ingrese un Celular"); form.Celular.focus(); return; }
  
  if (form.Email.value == "")
  { alert("Por favor ingrese un E-mail"); form.Email.focus(); return; }

  if (form.Email.value.indexOf('@', 0) == -1 ||
      form.Email.value.indexOf('.', 0) == -1)
  { alert("Su E-mail es incorrecto"); form.Email.focus(); return; }  

  if (form.Telefono.value == "")
  { alert("Por favor ingrese un Tel�fono"); form.Telefono.focus(); return; }
  
  if (form.Usuario.value == "")
  { alert("Por favor ingrese un Nombre de Usuario"); form.Usuario.focus(); return; }
  
  if (form.Agencia.value == "")
  { alert("Por favor seleccione una Agencia"); form.Agencia.focus(); return; }  

  if (form.TipoUsuario.value == "")
  { alert("Por favor seleccione una tipo de usuario"); form.TipoUsuario.focus(); return; } 

  if (form.Clave.value == "")
  { alert("Por favor seleccione una Contrase�a"); form.Clave.focus(); return; } 
  
  if(form.Clave.value.length < 4)
  { alert("Su Password debe tener minimo 4 caracteres"); form.Clave.focus(); return; } 
  
  form.submit();
}
</script>

<script language="javascript">
function mis_datos(){
var key=window.event.keyCode;
if (key < 48 || key > 57){
window.event.keyCode=0;
}}
</script>


<script type="text/javascript">// < ![CDATA[
 //<![CDATA[
function comprobar(nick) 
{
  var url = 'ajax_comprobar_user.php';
  var pars = ("Cedula=" + nick);
  var myAjax = new Ajax.Updater( 'comprobar_mensaje', url, { method: 'get', parameters: pars});
}
// ]]>
</script>

<script type="text/javascript">// < ![CDATA[
 //<![CDATA[
function comprobarse(nicko) 
{
  var urlo = 'ajax_comprobar_user-nick.php';
  var parso = ("Usuario=" + nicko);
  var myAjaxo = new Ajax.Updater( 'comprobar_mensajeo', urlo, { method: 'get', parameters: parso});
}
// ]]>
</script>


<script language="JavaScript" type="text/javascript"> 
function camvance()
	{
		if (document.fcrearusuario.cbvence.checked)
			{
				document.fcrearusuario.ctvence.disabled=0;
			}
		else
			{
				document.fcrearusuario.fecha_nacimiento.disabled=1;
			}
	}
</script>




<style type="text/css">
<!--
.listado1 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #666;
}
.listado {	font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
	color: #FFF;
}
-->
</style>
</head>

<body style="background-color: transparent">
<table width="100%"  height="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="100%" align="left" valign="top" bgcolor="#F7F7F7"><table width="99%" height="90%" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#996633">
      <tr valign="middle" bordercolor="#FFFFFF" bgcolor="#E6E6E6">
        <td width="67%" height="100%" bordercolor="#F2F2F2" bgcolor="#F7F7F7"><form action="actusuario2.php" method="post" enctype="multipart/form-data" name="fcrearusuario" id="fcrearusuario">
          <table width="99%" height="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FBFBFB">
            <tr>
              <td height="100%" valign="top">
              <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="19" align="right" valign="middle" class="Estilo93"><a href="usuarios.php">VOLVER A INGRESO DE USUARIOS</a></td>
                </tr>
              </table>
              <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="5" class="Estilo93"><span class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
                </tr>
              </table>
              <?
if($dale=="si")
{
?>

<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="33" align="center" valign="middle" class="Estilo105">EL  USUARIO SE ACTUALIZO CON EXITO</td>
    </tr>
</table>
<?
}
elseif($dale=="no")
{
?>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="33" align="center" valign="middle" class="Estilo105">LA CEDULA O EL USUARIO YA EXISTEN</td>
  </tr>
</table>
<?
}
?>
                <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="48%" height="33" valign="top" class="Estilo93 Estilo96"><div align="left">CEDULA</div>
<input name="Cedula2"  type="text" disabled class="TextField2" id="Cedula2"  style="width:70%" onKeypress="mis_datos()" onKeyUp="comprobar(this.value)" value="<?=$Cedula?>" size="45" readonly="readonly" autocomplete=off>&nbsp;&nbsp;<span class="Estilo916" id="comprobar_mensaje"></span>
                    <input name="Cedula" type="hidden" id="Cedula" value="<?=$Cedula?>"></td>
                    <td width="52%" valign="top" class="Estilo93 Estilo96"><input name="Id" type="hidden" id="Id" value="<?=$Iduser?>"></td>
                    </tr>
                </table>
                <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" class="Estilo93"><span class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
                  </tr>
                </table>
                <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="48%" height="33" valign="top" class="Estilo93 Estilo96"><div align="left">PRIMER APELLIDO </div>                      <input name="Apellido1" type="text" class="TextField2" id="Apellido1" style="width:70%" value="<?=$Apellido1?>"></td>
                    <td width="52%" valign="top" class="Estilo93 Estilo96"><div align="left">SEGUNDO APELLIDO </div>
                      <input name="Apellido2" type="text" class="TextField2" id="Apellido2" style="width:70%" value="<?=$Apellido2?>"></td>
                    </tr>
              </table>
                <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" class="Estilo93"><span class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
                  </tr>
                </table>
                <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="48%" height="33" valign="top" class="Estilo93 Estilo96"><div align="left">PRIMER NOMBRE</div>                      <input name="Nombre1" type="text" class="TextField2" id="Nombre1" style="width:70%" value="<?=$Nombre1?>"></td>
                    <td width="52%" valign="top" class="Estilo93 Estilo96"><div align="left">OTROS NOMBRES</div>
                      <input name="Nombre2" type="text" class="TextField2" id="Nombre2" style="width:70%" value="<?=$Nombre2?>"></td>
                    </tr>
                </table>
                <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" class="Estilo93"><span class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
                    </tr>
                  </table>

                <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="48%" height="33" valign="top" class="Estilo93 Estilo96"><div align="left">DEPARTAMENTO</div>
                      <select name="select1" class="TextField2" id="select1" style="width:70%">
                        <option value="<?=$Iddepa?>" selected>
                          <?=$Depart?>
                          </option>
                        <?
$query008="SELECT* FROM Departamentos order by Nombre" ;
$result008=mysql_query($query008, $id);

While($row008=mysql_fetch_array($result008))
{
$Nombre8		=$row008["Nombre"];
$Id8			=$row008["Id"];

?>
                        <option value="<?=$Id8?>">
                          <?=$Nombre8?>
                          </option>
                        <?
}
?>
                      </select></td>
                    <td width="52%" valign="top" class="Estilo93 Estilo96"><div align="left">CIUDAD</div>
                      <select name="select2" class="TextField2" id="select2" style="width:70%">
                        <option value="<?=$Idciud?>" selected>
                          <?=$Ciuda?>
                          </option>
                      </select></td>
                    </tr>
                  </table>
                <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" class="Estilo93"><span class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
                    </tr>
                  </table>
                <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="48%" height="33" valign="top" class="Estilo93 Estilo96"><div align="left">
                      <div align="left">DIRECCION</div>
                      <input name="Direccion" type="text" class="TextField2" id="Direccion" style="width:70%" value="<?=$Direccion?>"  readonly>
                      <a href="lista-planes.php" onClick="window.open('lista-direcciones.php?casilla=Direccion','','menubar=no,scrollbars=yes, width=850, height=550,');return false"><img src="Images/buscar.gif" width="16" height="16" border="0"></a></div></td>
                    <td width="52%" valign="top" class="Estilo93 Estilo96"><div align="left">
                      <div align="left">TELEFONO</div>
                      <input name="Telefono" type="text" class="TextField2" id="Telefono" style="width:70%" onKeypress="mis_datos()" onKeyUp="comprobar(this.value)" value="<?=$Telefono?>">
                    </div></td>
                    </tr>
                  </table>
                <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" class="Estilo93"><span class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
                    </tr>
                  </table>
                <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="48%" height="33" valign="top" class="Estilo93 Estilo96"><div align="left">
                      <div align="left">CELULAR</div>
                      <input name="Celular" type="text" class="TextField2" id="Celular" style="width:70%" value="<?=$Celular?>">
                    </div></td>
                    <td width="52%" valign="top" class="Estilo93 Estilo96"><div align="left">TELEFONO OFICINA</div>
                      <input name="Oficina" type="text" class="TextField2" id="Oficina" style="width:70%" value="<?=$Oficina?>"></td>
                  </tr>
                </table>
                <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" class="Estilo93"><span class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
                  </tr>
                </table>
                <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="48%" height="33" valign="top" class="Estilo93 Estilo96"><div align="left">
                      <div align="left">E-MAIL</div>
                      <input name="Email" type="text" class="TextField2" id="Descripcion4" style="width:70%" value="<?=$Email?>">
                      </div></td>
                    <td width="52%" valign="top" class="Estilo93 Estilo96"><div align="left">NOMBRE DE USUARIO</div>
                      <input name="Usuarios" type="text" disabled class="TextField2" id="Usuarios" style="width:70%" onKeyUp="comprobarse(this.value)" value="<?=$Alias?>" readonly="readonly" autocomplete=off>&nbsp;&nbsp;<span class="Estilo916" id="comprobar_mensajeo">
                      <input name="Usuario" type="hidden" id="Usuario" value="<?=$Alias?>">
                      </span></td>
                  </tr>
                </table>
                <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" class="Estilo93"><span class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
                    </tr>
                  </table>
                <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="48%" height="33" valign="top" class="Estilo93 Estilo96"><div align="left">
                      <div align="left">SUCURSAL</div>
                      <span class="listado">
                      <select name="Agencia" class="TextField2" id="Agencia" style="width:70%">
                        <option value="<?=$Idagen?>" selected><?=$Agenc?></option>
                        
                    <?
					$querym2		=	"SELECT* FROM Agencias order by Nombre";
					$resultm2		=	mysql_query($querym2, $id);
								
					While($rowm2	=	mysql_fetch_array($resultm2))
					{
					$Nombrem2	=	$rowm2["Nombre"];
					$Nitm2		=	$rowm2["Cod"];	
					?>
                        <option value="<?=$Nitm2?>">
                          <?=$Nombrem2?>
                          </option>
                        <?
					}

?>
                      </select>
                        </span></div></td>
                    <td width="52%" valign="top" class="Estilo93 Estilo96"><div align="left">
                      <div align="left">
                        <div align="left">TIPO DE USUARIO</div>
                        <select name="TipoUsuario" type="text" class="TextField2" id="TipoUsuario" style="width:70%" readonly>
                        <option value="<?=$NitXX?>"><?=$NombreXX?></option>
                        <?
                        $queryRR    = "SELECT * FROM Tipouser WHERE Id <> '$Tipo' order by Nombre";
                        $resultRR   = mysql_query($queryRR, $id);
                              
                        While($rowRR  = mysql_fetch_array($resultRR))
                        {
                        $NombreRR = $rowRR["Nombre"];
                        $NitRR    = $rowRR["Id"];  
                        ?>
                        <option value="<?=$NitRR?>">
                          <?=$NombreRR?>
                          </option>
                        <?
                         }

                        ?>
                        </select>
                      </div></div></td>
                  </tr>
                </table>
                <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" class="Estilo93"><span class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
                  </tr>
                </table>
                <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="48%" height="33" valign="top" class="Estilo93 Estilo96"><div align="left">
                      <div align="left">CONTRASE&Ntilde;A</div>
                      <input name="Clave" type="password" class="TextField2" id="Clave" style="width:33.6%" onkeypress = "return pulsar(event)" value="<?=$Clave?>" >
                    </div></td>
                  </tr>
                </table>
                <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" class="Estilo93"><span class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
                  </tr>
                </table>
                <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="48%" height="33" valign="top" class="Estilo93 Estilo96">ENVIAR   E-MAIL

   &nbsp;&nbsp;&nbsp;
   <input name="Alerta" type="checkbox" id="Alerta" value="1" checked></td>
                    <td width="52%" valign="top" class="Estilo93 Estilo96"><div align="left">
USUARIO ACTIVO
<label>
<?
if($Estado == 1)
{
$estar	=	"checked";	
}
else
{
$estar	=	"";		
}
?>
  <input name="Activo" type="checkbox" id="Alerta4" value="1" <?=$estar?>>
</label>
                    </div></td>
                  </tr>
                </table>
                <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5" class="Estilo93"><span class="listado1"><img src="Images/linea.jpg" width="100%" height="1"></span></td>
                  </tr>
                </table>
                <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="48%" height="57" valign="middle" class="Estilo93 Estilo96"><input name="Submit2" type="button" onClick=Validar(this.form) class="TextField21" value="ACTUALIZAR USUARIO"> </td>
                    <td width="52%" valign="top" class="Estilo93 Estilo96">&nbsp;</td>
                    </tr>
                </table>
                <br></td>
            </tr>
          </table>
</form>
<script>
function nueva_fecha_nacimiento(fecha){
  $('fecha_nacimiento').setValue(fecha.format('yyyy-mm-dd'));
  $('calendario5').hide();
}
var calendario5 = new scal('calendario5', nueva_fecha_nacimiento, {
    titleformat: 'mmm yyyy',
    closebutton: 'X',
    dayheadlength: 2,
    weekdaystart: 1
});
</script>
<br></td>
        <td width="27%" align="center" valign="top" bordercolor="#F2F2F2" bgcolor="#CCCCCC"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
              <td height="31" align="center">
                <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td align="right" class="Estilo105">ACTUALIZAR / ELIMINAR - USUARIOS</td>
                    </tr>
                  </table>
                <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td><hr width="100%" size="1"></td>
                    </tr>
                  </table>
              </td>
              </tr>
          </table>
          <iframe src="actusers.php" width="99%" height="90%" frameborder="No" allowtransparency="true"></iframe></td>
        </tr>
    </table></td>
  </tr>
</table>
</body>

