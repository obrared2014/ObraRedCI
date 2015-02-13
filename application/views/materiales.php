<!-- Busqueda Materiales-->
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="?sec=Inicio">Inicio</a></li>
            <li class="active">Materiales</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h2><b class="glyphicon glyphicon-briefcase"></b> Materiales</h2>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading" data-toggle="tooltip">Tipo de Obra</div>
            <div class="panel-body">
                <select name="tipo_material" id="tipo_material" class="form-control form-group" required="true" onchange="buscarMaterialesMantenedor();">
                    <option value="">Seleccione Tipo</option>
                        <?php
                            /*$idTipo=filter_input(INPUT_GET, "idTipo");
                            $idMat=filter_input(INPUT_GET, "idMat");
                            include_once './Modelo/Materiales/consultasMateriales.php';
                            include './Modelo/datosBD.php';
                            $tipo = devuelveTipoMaterial($basedatos,$puerto,$servidor,$usuario,$contrasena);
                            foreach($tipo as $indice => $registro){
                                echo "<option value=".$registro['id_tipo_materiales'].">".$registro['nombre_tipo_materiales']."</option>";
                            }*/
                        ?>                                
                        <input type="hidden" name="idTipo" id="idTipo" value="<?php $idTipo; ?>"/>
                        <input type="hidden" name="idMat" id="idTipo" value="<?php $idMat; ?>"/>
                </select>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading" data-toggle="tooltip">Tipo de Material</div>
            <div class="panel-body">
                <select name="material" id="material" class="form-control form-group" required="true" onchange="buscarDetalles();">
                    <option value="" >Seleccione Material</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div name="detalleMaterial" id="detalleMaterial">
        </div>
    </div>
</div>
<script>
function cambiarSelect(){
//    $( "#material" ).change(); 
    
}

</script>   
