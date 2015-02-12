<!-- presupuesto -->
<?php
//include './Modelo/Materiales/consultasMateriales.php';
//include './Modelo/datosBD.php';
?>
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="?sec=Inicio">Inicio</a></li>
            <li class="active">Crear Presupuesto</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h2><b class="glyphicon glyphicon-list-alt"></b> Crear Presupuesto</h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <!--Nav tabs-->
        <ul class="nav navegador-tabs" role="tablist">
            <li class="active"><a href="#radier_avanzado" role="tab" data-toggle="tab">Radier</a></li>
            <li><a href="#muro_avanzado" role="tab" data-toggle="tab">Muro</a></li>
            <li><a href="#techo_avanzado" role="tab" data-toggle="tab">Techo</a></li>
        </ul>
        <!--Tab panes--> 
        <div class="tab-content">
            <div class="tab-pane active" id="radier_avanzado"><!-- Panel Radier -->
                <form class="form-horizontal" action="./Modelo/Presupuestos/obtenerPresupuestos.php" method="POST" name="form_presupuesto_medidas_radier">
                    <input type="hidden" name="idUsuario" id="idUsuario" value="0<?php
                    if (isset($_SESSION["id_persona"])) {
                        echo $_SESSION["id_persona"];
                    } else {
                        0;
                    }
                    ?>">
                    <input type="hidden" name="nombreConstruccion" id="nombreConstruccion" value="Radier">
                    <input type="hidden" name="construccion" id="construccion" value="1"> <!-- se debe cambiar esto ya que debe encontrar el id-->
                    <input type="hidden" name="presupuestoRapido" id="presupuestoRapido" value="NO">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading" data-toggle="tooltip"><strong>Zona Geográfica</strong></div>
                                <div class="panel-body">
                                    <select class="form-control" required="true" name="zona_geografica" id="zona_geografica">
                                        <option value="">Seleccione</option>
                                        <option value="1">Zona Centro</option>
                                        <option value="2">Zona Norte</option>
                                        <option value="3">Zona Sur</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">&nbsp;</div>
                        <div class="col-lg-3">
                            <div class="panel panel-default">
                                <div class="panel-heading"><strong>Unidad de Medida</strong></div>
                                <div class="panel-body">
                                    <div class="col-lg-12">
                                        <input type="radio" name="unidadMedida" id="centimetros" value="C" onClick="activaCampos('radier');" onChange="cambiaUm(this.value, 'radier');" required="true">Centimetros
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="radio" name="unidadMedida" id="metros"  value="M" onClick="activaCampos('radier');" onChange="cambiaUm(this.value, 'radier');">Metros
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="panel panel-default">
                                <div class="panel-heading"><strong>Medidas de contrucción</strong></div>
                                <div class="panel-body">
                                    <div class="col-lg-4">
                                        <input type="text" placeholder="Alto" maxlength="4" class="form-control" name="alto" id="alto_radier" onkeypress="soloNumeros(event);" disabled required="true"/>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" placeholder="Ancho" maxlength="4" class="form-control" name="ancho" id="ancho_radier" onkeypress="soloNumeros(event);" disabled required="true"/>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" placeholder="Largo" maxlength="4" class="form-control" name="largo" id="largo_radier" onkeypress="soloNumeros(event);" disabled required="true"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">&nbsp;</div>
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading"><strong>Seleccion de Materiales</strong></div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <select name="detalleArena" id="detalleArena" class="form-control" required="true">
                                                <option value="" >Seleccione Arena</option>
                                                <?php
                                                    /*$detalle=traeDetallesMaterialesPresupuestos('Radier','Arena',$basedatos,$puerto,$servidor,$usuario,$contrasena);

                                                    foreach($detalle as $indice => $registro){
                                                        echo "<option value=".$registro['id_materiales_detalles'].">".$registro['descripcion_materiales_detalles'].' Precio $'.$registro['precio_materiales_detalles']."</option>";
                                                    } */                                         
                                                ?>

                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <select name="detalleCemento" id="detalleCemento" class="form-control" required="true">
                                                <option value="" >Seleccione Cemento</option>
                                                <?php
                                                    /*$detalle=traeDetallesMaterialesPresupuestos('Radier','Cemento',$basedatos,$puerto,$servidor,$usuario,$contrasena);
                                                    foreach($detalle as $indice => $registro){
                                                        echo "<option value=".$registro['id_materiales_detalles'].">".$registro['descripcion_materiales_detalles'].' Precio $'.$registro['precio_materiales_detalles']."</option>";
                                                    } */                                         
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <select name="detalleRipio" id="detalleRipio" class="form-control" required="true">
                                                <option value="" >Seleccione Ripio</option>
                                                <?php
                                                    /*$detalle=traeDetallesMaterialesPresupuestos('Radier','Ripio',$basedatos,$puerto,$servidor,$usuario,$contrasena);
                                                    foreach($detalle as $indice => $registro){
                                                        echo "<option value=".$registro['id_materiales_detalles'].">".$registro['descripcion_materiales_detalles'].' Precio $'.$registro['precio_materiales_detalles']."</option>";
                                                    } */                                         
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">&nbsp;</div>
                        <div class="col-lg-4 col-lg-offset-4">
                            <button type="submit" id="loading_radier" data-loading-text="Calculando..." class="btn btn-block btn-primary loading">Calcular</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane" id="muro_avanzado"><!-- Panel Muro -->
                <form class="form-horizontal" action="./Modelo/Presupuestos/obtenerPresupuestos.php" method="POST" name="form_presupuesto_medidas_muro">
                    <input type="hidden" name="idUsuario" id="idUsuario" value="0<?php
                        if (isset($_SESSION["id_persona"])) {
                            echo $_SESSION["id_persona"];
                        } else {
                            0;
                        }
                        ?>">
                    <input type="hidden" name="nombreConstruccion" id="nombreConstruccion" value="Muro">
                    <input type="hidden" name="presupuestoRapido" id="presupuestoRapido" value="NO">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading"><strong>Tipo de Muro</strong></div>
                                <div class="panel-body">
                                    <select class="form-control" required="true" name="tipo_muro" id="tipo_muro" onChange="actvaAnchoMuroAvanzado()">
                                        <option value="">Seleccione</option>
                                        <option value="muroCasa">Perimetro Casa</option>
                                        <option value="Pandereta">Pandereta</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">&nbsp;</div>
                        <div class="col-lg-3">
                            <div class="panel panel-default">
                                <div class="panel-heading"><strong>Unidad de Medida</strong></div>
                                <div class="panel-body">
                                    <div class="col-lg-12">
                                        <input type="radio" name="unidadMedida" id="centimetros" value="C" onClick="activaCampos('muro');" onChange="cambiaUm(this.value, 'muro');" required="true">Centimetros
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="radio" name="unidadMedida" id="metros"  value="M" onClick="activaCampos('muro');" onChange="cambiaUm(this.value, 'muro');">Metros
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="panel panel-default">
                                <div class="panel-heading"><strong>Medidas de contrucción</strong></div>
                                <div class="panel-body">
                                    <div class="col-lg-4">
                                        <input type="text" placeholder="Alto" maxlength="4" class="form-control" name="alto" id="alto_muro" onkeypress="soloNumeros(event);" disabled required="true"/>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" placeholder="Ancho" maxlength="4" class="form-control" name="ancho" id="ancho_muro" onkeypress="soloNumeros(event);" disabled required="true"/>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" placeholder="Largo" maxlength="4" class="form-control" name="largo" id="largo_muro" onkeypress="soloNumeros(event);" disabled required="true"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">&nbsp;</div>
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading"><strong>Seleccion de Materiales</strong></div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <select name="detalleArena" id="detalleArena" class="form-control" required="true">
                                                <option value="" >Seleccione Arena</option>
                                                <?php 
                                                    /*$detalle=traeDetallesMaterialesPresupuestos('Muro','Arena',$basedatos,$puerto,$servidor,$usuario,$contrasena);
                                                    foreach($detalle as $indice => $registro){
                                                        echo "<option value=".$registro['id_materiales_detalles'].">".$registro['descripcion_materiales_detalles'].' Precio $'.$registro['precio_materiales_detalles']."</option>";
                                                    } */                                         
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <select name="detalleCadena" id="detalleCadena" class="form-control" required="true">
                                                <option value="" >Seleccione Cadena</option>
                                                <?php 
                                                    /*$detalle=traeDetallesMaterialesPresupuestos('Muro','Cadenas',$basedatos,$puerto,$servidor,$usuario,$contrasena);
                                                    foreach($detalle as $indice => $registro){
                                                        echo "<option value=".$registro['id_materiales_detalles'].">".$registro['descripcion_materiales_detalles'].' Precio $'.$registro['precio_materiales_detalles']."</option>";
                                                    } */                                         
                                                ?>
                                            </select>
                                        </div>  
                                        <div class="col-lg-4">
                                            <select name="detalleCemento" id="detalleCemento" class="form-control" required="true">
                                                <option value="" >Seleccione Cemento</option>
                                                <?php 
                                                    /*$detalle=traeDetallesMaterialesPresupuestos('Muro','Cemento',$basedatos,$puerto,$servidor,$usuario,$contrasena);
                                                    foreach($detalle as $indice => $registro){
                                                        echo "<option value=".$registro['id_materiales_detalles'].">".$registro['descripcion_materiales_detalles'].' Precio $'.$registro['precio_materiales_detalles']."</option>";
                                                    } */                                         
                                                ?>
                                            </select>
                                        </div>                                                
                                    </div>
                                    <div class="row">&nbsp;</div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <select name="detalleLadrillo" id="detalleLadrillo" class="form-control" required="true">
                                                <option value="" >Seleccione Ladrillo</option>
                                                <?php 
                                                    /*$detalle=traeDetallesMaterialesPresupuestos('Muro','Ladrillos',$basedatos,$puerto,$servidor,$usuario,$contrasena);
                                                    foreach($detalle as $indice => $registro){
                                                        echo "<option value=".$registro['id_materiales_detalles'].">".$registro['descripcion_materiales_detalles'].' Precio $'.$registro['precio_materiales_detalles']."</option>";
                                                    } */                                         
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <select name="detallePilar" id="detallePilar" class="form-control" required="true">
                                                <option value="" >Seleccione Pilar</option>
                                                <?php 
                                                    /*$detalle=traeDetallesMaterialesPresupuestos('Muro','Pilares',$basedatos,$puerto,$servidor,$usuario,$contrasena);
                                                    foreach($detalle as $indice => $registro){
                                                        echo "<option value=".$registro['id_materiales_detalles'].">".$registro['descripcion_materiales_detalles'].' Precio $'.$registro['precio_materiales_detalles']."</option>";
                                                    } */                                         
                                                ?>
                                            </select>
                                        </div>  
                                        <div class="col-lg-4">
                                            <select name="detallePuerta" id="detallePuerta" class="form-control" required="true" disabled>
                                                <option value="" >Seleccione Puerta</option>
                                                <?php 
                                                    /*$detalle=traeDetallesMaterialesPresupuestos('Muro','Puertas',$basedatos,$puerto,$servidor,$usuario,$contrasena);
                                                    foreach($detalle as $indice => $registro){
                                                        echo "<option value=".$registro['id_materiales_detalles'].">".$registro['descripcion_materiales_detalles'].' Precio $'.$registro['precio_materiales_detalles']."</option>";
                                                    } */                                         
                                                ?>
                                            </select>
                                        </div>                                                
                                    </div>
                                    <div class="row">&nbsp;</div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <select name="detalleVentana" id="detalleVentana" class="form-control" required="true" disabled>
                                                <option value="" >Seleccione Ventana</option>
                                                <?php 
                                                    /*$detalle=traeDetallesMaterialesPresupuestos('Muro','Ventanas',$basedatos,$puerto,$servidor,$usuario,$contrasena);
                                                    foreach($detalle as $indice => $registro){
                                                        echo "<option value=".$registro['id_materiales_detalles'].">".$registro['descripcion_materiales_detalles'].' Precio $'.$registro['precio_materiales_detalles']."</option>";
                                                    } */                                         
                                                ?>
                                            </select>
                                        </div>
                                    </div>                                             
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">&nbsp;</div>
                        <div class="col-lg-4 col-lg-offset-4">
                            <button type="submit" id="loading_radier" data-loading-text="Calculando..." class="btn btn-block btn-primary loading">Calcular</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane" id="techo_avanzado"><!-- Panel Techo -->
                <form class="form-horizontal" action="./Modelo/Presupuestos/obtenerPresupuestos.php" method="POST" name="form_presupuesto_medidas_techo">
                    <input type="hidden" name="idUsuario" id="idUsuario" value="0<?php
                        if (isset($_SESSION["id_persona"])) {
                            echo $_SESSION["id_persona"];
                        } else {
                            0;
                        }
                        ?>">
                    <input type="hidden" name="nombreConstruccion" id="nombreConstruccion" value="Techo">
                    <input type="hidden" name="presupuestoRapido" id="presupuestoRapido" value="NO">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading"><strong>Zona Geográfica</strong></div>
                                <div class="panel-body">
                                    <select class="form-control" required="true" name="zona_geografica" id="zona_geografica">
                                        <option value="">Seleccione</option>
                                        <option value="Norte">Zona Norte</option>
                                        <option value="Centro">Zona Centro</option>
                                        <option value="Sur">Zona Sur</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">&nbsp;</div>
                        <div class="col-lg-3">
                            <div class="panel panel-default">
                                <div class="panel-heading"><strong>Unidad de Medida</strong></div>
                                <div class="panel-body">
                                    <div class="col-lg-12">
                                        <input type="radio" name="unidadMedida" id="centimetros" value="C" onClick="activaCampos('techo');" onChange="cambiaUm(this.value, 'techo');" required="true">Centimetros
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="radio" name="unidadMedida" id="metros"  value="M" onClick="activaCampos('techo');" onChange="cambiaUm(this.value, 'techo');">Metros
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="panel panel-default">
                                <div class="panel-heading"><strong>Medidas de contrucción</strong></div>
                                <div class="panel-body">
                                    <div class="col-lg-4">
                                        <select name="aguas" id="aguas_techo"  class="form-control" required="true">
                                            <option value="">Cantidad de Aguas</option>
                                            <option value="1">1 Aguas</option>
                                            <option value="2">2 Aguas</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" placeholder="Ancho" maxlength="4" class="form-control ayuda-tooltip" name="ancho" id="ancho_techo" onkeypress="soloNumeros(event);" disabled required="true" data-toggle="tooltip" data-original-title="Ancho total de lo que será tu techo"/>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" placeholder="Largo" maxlength="4" class="form-control ayuda-tooltip" name="largo" id="largo_techo" onkeypress="soloNumeros(event);" disabled required="true" data-toggle="tooltip" data-original-title="Largo total de lo que será tu techo"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">&nbsp;</div>
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading"><strong>Seleccion de Materiales</strong></div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <select name="detalleClavo" id="detalleClavo" class="form-control" required="true">
                                                <option value="" >Seleccione Clavos</option>
                                                <?php 
                                                    /*$detalle=traeDetallesMaterialesPresupuestos('Techo','Clavos',$basedatos,$puerto,$servidor,$usuario,$contrasena);
                                                    foreach($detalle as $indice => $registro){
                                                        echo "<option value=".$registro['id_materiales_detalles'].">".$registro['descripcion_materiales_detalles'].' Precio $'.$registro['precio_materiales_detalles']."</option>";
                                                    } */                                         
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <select name="detalleFieltro" id="detalleFieltro" class="form-control" required="true">
                                                <option value="" >Seleccione Fieltro</option>
                                                <?php 
                                                    /*$detalle=traeDetallesMaterialesPresupuestos('Techo','Fieltro',$basedatos,$puerto,$servidor,$usuario,$contrasena);
                                                    foreach($detalle as $indice => $registro){
                                                        echo "<option value=".$registro['id_materiales_detalles'].">".$registro['descripcion_materiales_detalles'].' Precio $'.$registro['precio_materiales_detalles']."</option>";
                                                    } */                                         
                                                ?>
                                            </select>
                                        </div>  
                                        <div class="col-lg-4">
                                            <select name="detallePlancha" id="detallePlancha" class="form-control" required="true">
                                                <option value="" >Seleccione Cubre Techo</option>
                                                <?php 
                                                    /*$detalle=traeDetallesMaterialesPresupuestos('Techo','CubreTecho',$basedatos,$puerto,$servidor,$usuario,$contrasena);
                                                    foreach($detalle as $indice => $registro){
                                                        echo "<option value=".$registro['id_materiales_detalles'].">".$registro['descripcion_materiales_detalles'].' Precio $'.$registro['precio_materiales_detalles']."</option>";
                                                    } */                                         
                                                ?>
                                            </select>
                                        </div>                                                
                                    </div>
                                    <div class="row">&nbsp;</div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <select name="detalleTabla" id="detalleTabla" class="form-control" required="true">
                                                <option value="" >Seleccione Tabla</option>
                                                <?php 
                                                    /*$detalle=traeDetallesMaterialesPresupuestos('Techo','Madera',$basedatos,$puerto,$servidor,$usuario,$contrasena);
                                                    foreach($detalle as $indice => $registro){
                                                        echo "<option value=".$registro['id_materiales_detalles'].">".$registro['descripcion_materiales_detalles'].' Precio $'.$registro['precio_materiales_detalles']."</option>";
                                                    } */                                         
                                                ?>
                                            </select>
                                        </div>                                            
                                    </div>                                            
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">&nbsp;</div>
                        <div class="col-lg-4 col-lg-offset-4">
                            <button type="submit" id="loading_radier" data-loading-text="Calculando..." class="btn btn-block btn-primary loading">Calcular</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    (function($){$('.loading').click(function() {var btn = $(this);btn.button('loading');setTimeout(function() {btn.button('reset');},2000);});})(jQuery);
</script>
