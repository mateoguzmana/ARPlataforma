<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

include("conexion.php");

$IdTIPOU=$_REQUEST["Id"];

          $query000   ="SELECT* FROM Tipouser where Id = '$IdTIPOU'" ;
          $result000    =mysql_query($query000, $id);
          
          while($row000 =mysql_fetch_array($result000))
          {
          $Nombre     =$row000["Nombre"];
          }


include("conexion.php");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
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
	text-align: center;
}
.listado {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #FFF;
	font-weight: bold;
}
.Estilo93 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.Estilo96 {font-size: 11px}
.TextField2 {background-color: #DADADA;
color: #333333;
font-size: 7pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.TextField21 {background-color: #BCBCBC;
color: #333333;
font-size: 8pt;
font-family: arial;
border : 1px solid #FFFFFF;
}
.envio:hover{
background-color: rgba(57, 149, 46, 0.4);
background: rgba(57, 149, 46, 0.4);
color: black;
font-weight: bold;
}
-->
</style>
<script type="text/javascript" src="jquery-1.4.2.min.js"></script>

<script language="javascript">
function mis_datos(){
var key=window.event.keyCode;
if (key < 48 || key > 57){
window.event.keyCode=0;
}}
</script>
<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
<style type="text/css">
<!--
body {
	background-color: #E3EFF9;
	margin-top: 0px;
	margin-left: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo105 {color: #990000; font-family: Arial, Helvetica, sans-serif; font-size: 10px; font-weight: bold; }
.Estilo97 {font-size: 12px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
-->
</style></head>

<body>
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="305" align="center" valign="middle" bgcolor="#DFE7F2">
        
<?
if(!empty($tarea))
{
?>
        <table width="250" border="0">
            <tr>
              <td height="24" align="center" bgcolor="#990000" class="listado">TAREA REALIZADA CON EXITO</td>
            </tr>
         </table>
<?
}
?>
<form action="act-permisos.php" method="get" enctype="multipart/form-data" class="form-horizontal form-validate" novalidate role="form" name="form1" id="form1">
                          
                                
                                <br>
                                <table style="padding:37px;" border="0" align="left">
                                  <tr>
                                <td><label for="Tracking" align="left" class="Estilo93">Tipo de Usuario    </label></td>
                                  <input name="Idtipo" type="hidden" id="Id" value="<?=$IdTIPOU?>">
                                  
                                
                                                                
<td>
  <select id="jumpMenu" name="jumpMenu" class="TextField21" style="width:100%;" onChange="MM_jumpMenu('self',this,0)" required style="width:99%">
  <option value="<?=$IdTIPOU?>" selected><?=$Nombre?></option>
                                                                  
<?
          $queryTITMEN    ="SELECT* FROM Tipouser WHERE Id <> '$IdTIPOU' and Activo = 0   Order by Nombre";
          $resultTITMEN   =mysql_query($queryTITMEN, $id);
          
          while($rowTITMEN  =mysql_fetch_array($resultTITMEN))
          {
          $NombreTIPO     =$rowTITMEN["Nombre"];
          $IdTIPO         =$rowTITMEN["Id"];
?>
  <option value="act-permisos.php?Id=<?=$IdTIPO?>"><?=$NombreTIPO?></option>
<?
          }
?>
  </select> 
                             </td>
                           </tr>
                          </table>
                        </form>
<?
if(!empty($IdTIPOU))
{
?>
          <form name="form1" method="post" action="act-permisos-2.php"> 
          <table valign="top" width="90%" style="margin-top:30px;" border="0" align="center" cellpadding="0" cellspacing="0">
          <?
          $cont     =0;
          $queryMen1    ="SELECT* FROM Menu Order by Pos";
          $resultMen1   =mysql_query($queryMen1, $id);
          
          while($rowMen1  =mysql_fetch_array($resultMen1))
          {
          $NombreMen1     =$rowMen1["Nombre"];
          $IdMen1       =$rowMen1["Id"];
          $cont++;
          
          
          
            $queryPerC1     ="SELECT COUNT(*) AS TOTAL FROM Menusub where Idmenu = '$IdMen1'";
            $resultPerC1    =mysql_query($queryPerC1, $id);
            
            while($rowPerC1   =mysql_fetch_array($resultPerC1))
            {
            $TOTALPerC1     =$rowPerC1["TOTAL"];
            }
          
          
          
            $queryPer1      ="SELECT* FROM Permisos where Idtipo = '$IdTIPOU' and Men = '$IdMen1'";
            $resultPer1     =mysql_query($queryPer1, $id);
            
            while($rowPer1    =mysql_fetch_array($resultPer1))
            {
            $MosPerA      =$rowPer1["Mos"];
            $AgrPerA      =$rowPer1["Agr"];
            $ActPerA      =$rowPer1["Act"];
            $DelPerA      =$rowPer1["Del"];
            
              if($MosPerA > 0)
              {
              $MosPer1  = 1;
              }
              
              if($AgrPerA > 0)
              {
              $AgrPer1  = 1;
              }
              
              if($ActPerA > 0)
              {
              $ActPer1  = 1;
              }
              
              if($DelPerA > 0)
              {
              $DelPer1  = 1;
              }
              
            
            
            }
            
            
            
            if($MosPer1 == 1)
            {
            $cheMosPer1   = 'checked';
            $acMosPer1    = 'active';
            }
            else
            {
            $cheMosPer1   = ''; 
            $acMosPer1    = '';
            }
            
            
            if($AgrPer1 == 1)
            {
            $cheAgrPer1   = 'checked';
            $acAgrPer1    = 'active';
            }
            else
            {
            $cheAgrPer1   = ''; 
            $acAgrPer1    = '';
            }
            
            
            if($ActPer1 == 1)
            {
            $cheActPer1   = 'checked';
            $acActPer1    = 'active';
            }
            else
            {
            $cheActPer1   = ''; 
            $acActPer1    = '';
            }
            
            
            if($DelPer1 == 1)
            {
            $cheDelPer1   = 'checked';
            $acDelPer1    = 'active';
            }
            else
            {
            $cheDelPer1   = '';
            $acDelPer1    = ''; 
            }
            

            
            
            
          
          
?>
                      <tr>
                      <div class="form-group">
                        
                        <td class="col-md-2 col-sm-3"  style="background:#ACACAC">
                          <label style="padding:20px;" class="Estilo93"><?=$NombreMen1?></label>
                        </td>
                      
                        <td>
                        <div class="col-md-5 col-sm-5" style="background:#ACACAC">
                          <div data-toggle="buttons">
                                                    
                            <label class="Estilo93 checkbox-inline btn-checkbox-success-inverse <?=$acMosPer1?>">
                              <input name="mostrar<?=$IdMen1?><?=$cont?>" type="checkbox" value="1"  <?=$cheMosPer1?>> Mostrar
                            </label>
                                                        
                                                      <?
                                                        if($TOTALPerC1 == 0)
                            {
                            ?>
                                                        
                            <label class="Estilo93 checkbox-inline btn-checkbox-success-inverse <?=$acAgrPer1?>">
                              <input type="checkbox" value="1"  name="ingresar<?=$IdMen1?><?=$cont?>" <?=$cheAgrPer1?>> Ingresar
                            </label>
                            <label class="Estilo93 checkbox-inline btn-checkbox-success-inverse <?=$acActPer1?>">
                              <input type="checkbox" value="1"  name="modificar<?=$IdMen1?><?=$cont?>" <?=$cheActPer1?>> Modificar
                            </label>
                            <label class="Estilo93 checkbox-inline btn-checkbox-success-inverse <?=$acDelPer1?>">
                              <input type="checkbox" value="1" name="borrar<?=$IdMen1?><?=$cont?>" <?=$cheDelPer1?>> Borrar
                            </label>
                                                        <?
                            }
                            ?>
                          </div>
                        </div>
                        <div class="col-md-5 col-sm-4">
                          <div data-toggle="buttons">

                          </div>
                        </div>
                      </td>
                      </div>
                      </tr>                   
<?

            $MosPer1      =0;
            $AgrPer1      =0;
            $ActPer1      =0;
            $DelPer1      =0; 

        


            $queryMen2    ="SELECT* FROM Menusub where Idmenu = '$IdMen1' Order by Pos";
            $resultMen2   =mysql_query($queryMen2, $id);
            
            while($rowMen2  =mysql_fetch_array($resultMen2))
            {
            $NombreMen2     =$rowMen2["Nombre"];
            $IdMen2       =$rowMen2["Id"];
            $cont++;


              $queryPerC2     ="SELECT COUNT(*) AS TOTAL FROM Menuopc where Idmenu = '$IdMen1' and Idsub = '$IdMen2'";
              $resultPerC2    =mysql_query($queryPerC2, $id);
              
              while($rowPerC2   =mysql_fetch_array($resultPerC2))
              {
              $TOTALPerC2     =$rowPerC2["TOTAL"];
              }
            
            
            
              $queryPer2      ="SELECT* FROM Permisos where Idtipo = '$IdTIPOU'  and Men = '$IdMen1' and Submenu = '$IdMen2'";
              $resultPer2     =mysql_query($queryPer2, $id);
              
              while($rowPer2    =mysql_fetch_array($resultPer2))
              {
              $MosPerB      =$rowPer2["Mos"];
              $AgrPerB      =$rowPer2["Agr"];
              $ActPerB      =$rowPer2["Act"];
              $DelPerB      =$rowPer2["Del"];
              
                
                if($MosPerB > 0)
                {
                $MosPer2  = 1;
                }
                
                if($AgrPerB > 0)
                {
                $AgrPer2  = 1;
                }
                
                if($ActPerB > 0)
                {
                $ActPer2  = 1;
                }
                
                if($DelPerB > 0)
                {
                $DelPer2  = 1;
                }
              
              }
              
              
              
              if($MosPer2 == 1)
              {
              $cheMosPer2   = 'checked';
              $acMosPer2    = 'active';
              $valMosPer2   = 1;  
              }
              else
              {
              $cheMosPer2   = ''; 
              $acMosPer2    = '';
              $valMosPer2   = 0;  
              }
              
              
              if($AgrPer2 == 1)
              {
              $cheAgrPer2   = 'checked';
              $acAgrPer2    = 'active';
              $valAgrPer2   = 1;  
              }
              else
              {
              $cheAgrPer2   = ''; 
              $acAgrPer2    = '';
              $valAgrPer2   = 0;  
              }
              
              
              if($ActPer2 == 1)
              {
              $cheActPer2   = 'checked';
              $acActPer2    = 'active';
              $valActPer2   = 1;  
              }
              else
              {
              $cheActPer2   = ''; 
              $acActPer2    = '';
              $valActPer2   = 0;  
              }
              
              
              if($DelPer2 == 1)
              {
              $cheDelPer2   = 'checked';
              $acDelPer2    = 'active';
              $valDelPer2   = 1;  
              }
              else
              {
              $cheDelPer2   = '';
              $acDelPer2    = ''; 
              $valDelPer2   = 0;  
              }
            
            
            
            
            
            
?>
                                            
                      <tr>                    
                      <div class="form-group" >
                        <td class="col-md-2 col-sm-3" style="background: #EFEDBA">
                         <label style="padding:20px;" class="Estilo93"><?=$NombreMen2?></label>
                      </td>
                      <td>
                        <div class="col-md-5 col-sm-5">
                          <div data-toggle="buttons" style="background: #EFEDBA">
                                                        
                                                        <label class="Estilo93 checkbox-inline btn-checkbox-success-inverse <?=$acMosPer2?>">
                              <input name="mostrar<?=$IdMen1?><?=$IdMen2?><?=$cont?>" type="checkbox" value="1"  <?=$cheMosPer2?>> Mostrar
                            </label>
                                                        
                                                        <?
                                                        if($TOTALPerC2 == 0)
                            {
                            ?>
                                                        
                            <label class="Estilo93 checkbox-inline btn-checkbox-success-inverse <?=$acAgrPer2?>">
                              <input type="checkbox" value="1" name="ingresar<?=$IdMen1?><?=$IdMen2?><?=$cont?>" <?=$cheAgrPer2?>> Ingresar
                            </label>
                            <label class="Estilo93 checkbox-inline btn-checkbox-success-inverse <?=$acActPer2?>">
                              <input type="checkbox" value="1" name="modificar<?=$IdMen1?><?=$IdMen2?><?=$cont?>" <?=$cheActPer2?>> Modificar
                            </label>
                            <label class="Estilo93 checkbox-inline btn-checkbox-success-inverse <?=$acDelPer2?>">
                              <input type="checkbox" value="1" name="borrar<?=$IdMen1?><?=$IdMen2?><?=$cont?>" <?=$cheDelPer2?>> Borrar
                            </label>
                                                        <?
                            }
                            ?>
                          </div>
                        </div>
                        <div class="col-md-5 col-sm-4">
                          <div data-toggle="buttons">

                          </div>
                        </div>
                        <td>
                      </div>     
                        </tr>                    
                                            
                                            
                                            
                                                                            



<?


              $MosPer2      =0;
              $AgrPer2      =0;
              $ActPer2      =0;
              $DelPer2      =0;             
              
              
              
              

              $queryMen3    ="SELECT* FROM Menuopc where Idmenu = '$IdMen1' and Idsub = '$IdMen2' Order by Pos";
              $resultMen3   =mysql_query($queryMen3, $id);
              
              while($rowMen3  =mysql_fetch_array($resultMen3))
              {
              $NombreMen3     =$rowMen3["Nombre"];
              $IdMen3       =$rowMen3["Id"];
              
              $cont++;
              
              
              
            
                $queryPer3      ="SELECT* FROM Permisos where Idtipo = '$IdTIPOU'  and Men = '$IdMen1' and Submenu = '$IdMen2' and Opciones = '$IdMen3'";
                $resultPer3     =mysql_query($queryPer3, $id);
                
                while($rowPer3    =mysql_fetch_array($resultPer3))
                {
                $MosPerC      =$rowPer3["Mos"];
                $AgrPerC      =$rowPer3["Agr"];
                $ActPerC      =$rowPer3["Act"];
                $DelPerC      =$rowPer3["Del"];
                
                
                  if($MosPerC > 0)
                  {
                  $MosPer3  = 1;
                  }
                  
                  if($AgrPerC > 0)
                  {
                  $AgrPer3  = 1;
                  }
                  
                  if($ActPerC > 0)
                  {
                  $ActPer3  = 1;
                  }
                  
                  if($DelPerC > 0)
                  {
                  $DelPer3  = 1;
                  }
                
                
                }
                
                
                
                if($MosPer3 == 1)
                {
                $cheMosPer3   = 'checked';
                $acMosPer3    = 'active';
                $valMosPer3   = 1;  
                }
                else
                {
                $cheMosPer3   = ''; 
                $acMosPer3    = '';
                $valMosPer3   = 0;  
                }
                
                
                if($AgrPer3 == 1)
                {
                $cheAgrPer3   = 'checked';
                $acAgrPer3    = 'active';
                $valAgrPer3   = 1;  
                }
                else
                {
                $cheAgrPer3   = ''; 
                $acAgrPer3    = '';
                $valAgrPer3   = 0;  
                }
                
                
                if($ActPer3 == 1)
                {
                $cheActPer3   = 'checked';
                $acActPer3    = 'active';
                $valActPer3   = 1;  
                }
                else
                {
                $cheActPer3   = ''; 
                $acActPer3    = '';
                $valActPer3   = 0;  
                }
                
                
                if($DelPer3 == 1)
                {
                $cheDelPer3   = 'checked';
                $acDelPer3    = 'active';
                $valDelPer3   = 1;  
                }
                else
                {
                $cheDelPer3   = '';
                $acDelPer3    = ''; 
                $valDelPer3   = 0;  
                }
              
              
              
              
              
?>
                                            
                      <tr>          
                      <div class="form-group" >
                        <td class="col-md-2 col-sm-3" style="background: #F3B5B1">
                          <label style="padding:20px;" class="Estilo93"><?=$NombreMen3?></label>
                      </td>
                        <td>
                        <div class="col-md-5 col-sm-5">
                          <div data-toggle="buttons" style="background: #F3B5B1">
                            <label class="Estilo93 checkbox-inline btn-checkbox-success-inverse <?=$acMosPer3?>">
                              <input name="mostrar<?=$IdMen1?><?=$IdMen2?><?=$IdMen3?><?=$cont?>" type="checkbox" value="1"  <?=$cheMosPer3?>> Mostrar
                            </label>
                            <label class="Estilo93 checkbox-inline btn-checkbox-success-inverse <?=$acAgrPer3?>">
                              <input type="checkbox" value="1" name="ingresar<?=$IdMen1?><?=$IdMen2?><?=$IdMen3?><?=$cont?>" <?=$cheAgrPer3?>> Ingresar
                            </label>
                            <label class="Estilo93 checkbox-inline btn-checkbox-success-inverse <?=$acActPer3?>">
                              <input type="checkbox" value="1" name="modificar<?=$IdMen1?><?=$IdMen2?><?=$IdMen3?><?=$cont?>" <?=$cheActPer3?>> Modificar
                            </label>
                            <label class="Estilo93 checkbox-inline btn-checkbox-success-inverse <?=$acDelPer3?>">
                              <input type="checkbox" value="1" name="borrar<?=$IdMen1?><?=$IdMen2?><?=$IdMen3?><?=$cont?>" <?=$cheDelPer3?>> Borrar
                            </label>
                          </div>
                        </div>
                        <div class="col-md-5 col-sm-4">
                          <div data-toggle="buttons">

                          </div>
                        </div>
                      </td>
                      </div>  
                        </tr>                    





                                            
                                            
<?
              $MosPer1      ='';
              $AgrPer1      ='';
              $ActPer1      ='';
              $DelPer1      ='';

              $MosPer2      ='';
              $AgrPer2      ='';
              $ActPer2      ='';
              $DelPer2      ='';

              $MosPer3      ='';
              $AgrPer3      ='';
              $ActPer3      ='';
              $DelPer3      ='';
              
              
              }
?>      
<?              
            }
?>          
<?              
          }
          
          
?>  
          </table>
          <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td align="right" height="5">
                <br>
                <input type="hidden" name="Idtipo" value="<?=$IdTIPOU?>">
                <input name="button" type="submit"  style="padding:8px;font-size:12px;cursor:pointer;font-weight:bold;" class="TextField2 envio" id="button" value="REALIZAR OPERACION"></td>
            </tr>
          </table>
          <br>
        </form>
          <?
    }
    ?>
        </td>
      </tr>
    </table></td>
    
  </tr>
</table>

</body>
</html>