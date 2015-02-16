<!-- Perfil de usuario -->
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="?sec=Inicio">Inicio</a></li>
            <li class="active">Perfil Usuario</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h2><b class="glyphicon glyphicon-user"></b> Actualización de Perfil </h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <?php 
        echo form_open('actualizar_perfil_controller/ActualizarPerfil');
        $id = array(
            'id'            => 'id',
            'name'          => 'id',
            'required'      => 'true',
            'style'         => 'display: none',
            'class'         => 'form-control',
            'value'         => $_SESSION["id_persona"]
        );
        $rut = array(
            'id'            => 'rutA',
            'name'          => 'rut',
            'required'      => 'true',
            'class'         => 'form-control',
            'value'         => $_SESSION['rut']
        );
        $nombre = array(
            'id'            => 'nombre',
            'name'          => 'nombre',
            'required'      => 'true',
            'class'         => 'form-control',
            'value'         => $_SESSION['nombre'],
            'onkeypress'    => 'ValidaSoloLetras()'
        );
        $ap_paterno = array(
            'id'            => 'ap_paterno',
            'name'          => 'ap_paterno',
            'required'      => 'true',
            'class'         => 'form-control',
            'value'         => $_SESSION['ap_paterno'],
            'onkeypress'    => 'ValidaSoloLetras()'
        );
        $ap_materno = array(
            'id'            => 'ap_materno',
            'name'          => 'ap_materno',
            'required'      => 'true',
            'class'         => 'form-control',
            'value'         => $_SESSION['ap_materno'],
            'onkeypress'    => 'ValidaSoloLetras()'
        );
        $direccion = array(
            'id'            => 'direccion',
            'name'          => 'direccion',
            'required'      => 'true',
            'class'         => 'form-control',
            'value'         => $_SESSION['direccion']
        );
        $telefono = array(
            'id'            => 'fono',
            'name'          => 'fono',
            'required'      => 'true',
            'class'         => 'form-control',
            'value'         => $_SESSION['telefono'],
            'onkeypress'    => 'ValidaSoloNumeros()'
        );
        $actividad = array(
            'id'            => 'actividad',
            'name'          => 'actividad',
            'required'      => 'true',
            'class'         => 'form-control',
            'value'         => $_SESSION['actividad']
        );
        $email = array(
            'id'            => 'email',
            'name'          => 'email',
            'required'      => 'true',
            'class'         => 'form-control',
            'value'         => $_SESSION['email']
        );
        $submit = array(
            'value'         => 'Actualizar Datos',
            'class'         => 'btn btn-block btn-primary btn-large'
        );?>
        <div class="panel panel-default">
            <div class="panel-heading"><strong>Datos de Usuario</strong></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">Rut</span>
                                <?php 
                                echo form_input($id);
                                echo form_input($rut);
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">Nombre</span>
                                <?php echo form_input($nombre); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">Ap. Paterno</span>
                                <?php echo form_input($ap_paterno); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">Ap. Materno</span>
                                <?php echo form_input($ap_materno); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">Dirección</span>
                                <?php echo form_input($direccion); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">Teléfono</span>
                                <?php echo form_input($telefono); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">Actividad</span>
                                <?php echo form_input($actividad); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">E-mail</span>
                                <?php echo form_input($email); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-4">
                        <div class="form-group">
                            <?php echo form_submit($submit); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php echo form_close();?>
    </div>
</div>
<script> 
    $('#rutA').Rut({
      on_error: function(){ alert('Rut incorrecto'); document.getElementById('rutA').focus();}
    });
</script>