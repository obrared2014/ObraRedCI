<!--Registro_Materiales.php-->
<meta content="900" http-equiv="REFRESH"/>
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="?sec=Inicio">Inicio</a></li>
            <li class="active">Agregar Materiales</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1><b class="glyphicon glyphicon-floppy-open"></b> Registro de Materiales</h1>
        </div>
    </div>
</div>
<div>
    <form class="form" action="./Modelo/Materiales/ValidarRegistroMateriales.php" name="registro_materiales" method="POST">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Tipos de Material </div>
                    <div class="panel-body">
                        <div class="col-lg-6">
                            <select name="tipo_material" id="tipo_material" class="form-control form-group" required="true" onchange="buscarMateriales('buscar');">
                                <option value="">Seleccione Tipo</option>
                                    <?php
                                        /*include_once './Modelo/Materiales/consultasMateriales.php';
                                        include './Modelo/datosBD.php';
                                        $tipo = devuelveTipoMaterial($basedatos,$puerto,$servidor,$usuario,$contrasena);
                                        foreach($tipo as $indice => $registro){
                                            echo "<option value=".$registro['id_tipo_materiales'].">".$registro['nombre_tipo_materiales']."</option>";
                                        }*/
                                    ?>                                
                                <option value="otro">Otro</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <select name="material" id="material" class="form-control form-group" required="true" onchange="buscarDetalles();">
                                <option value="" >Seleccione Material</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control form-group" id="tipo_otro" name="tipo_otro" placeholder="Escriba Tipo" style="display: none" />
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control form-group" id="material_otro" name="material_otro" placeholder="Escriba Material" style="display: none"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Detalle Material </div>
                    <div class="panel-body">
                        <div class="col-lg-6">
                            <input type="text" class="form-control form-group" id="material_detalle" name="material_detalle" required="true" placeholder="Escriba Detalle de Material"/>                            
                        </div>
                        <div class="col-lg-6">
                            <select name="materialBase" id="materialBase" class="form-control form-group" required="true" onchange="buscarDetalles();">
                                <option value="N" >NO</option>
                                <option value="S" >SI</option>
                            </select>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="col-lg-4">
                            <input type="text" class="form-control form-group" name="alto" id="alto" placeholder="Alto" required="true"/>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control form-group" name="largo" id="largo" placeholder="Largo" required="true"/>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control form-group" name="ancho" id="ancho" placeholder="Ancho" required="true"/>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control form-group" name="precio" id="precio" placeholder="Precio" required="true"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4">
                <input type="submit" class="btn btn-block btn-primary" value="Registrar"/>
            </div>       
        </div>
    </form>
</div>
        
<script type="text/javascript">
   function selecciona_otro(){
       var valor=document.getElementById('tipo_material').value;
       if(valor=='otro'){
           document.getElementById("tipo_otro").style.display="block";
           document.getElementById("tipo_otro").required=true;
           selecciona_material(valor);
       }else{
           document.getElementById("tipo_otro").style.display="none";
           document.getElementById("tipo_material").required=true;
           document.getElementById("material").style.display="block";
           selecciona_material(valor);
       }
   }

   function selecciona_material(tipo_sel){
       if(tipo_sel=='otro'){
           if(document.getElementById('tipo_material').value=="otro"){
              document.getElementById("material").disabled=true;
           }           
           document.getElementById("material_otro").style.display="block";
           document.getElementById("material_otro").required=true;
           document.getElementById("material").required=false;   
           document.getElementById("tipo_material").required=false;
       }else{
           document.getElementById("material").disabled=false;
           document.getElementById("material_otro").required=false;
           document.getElementById("material_otro").style.display="none";
           document.getElementById("material").required=true;        
           document.getElementById("tipo_material").required=true;
       }
   }
</script>
