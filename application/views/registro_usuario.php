<!--Registro Usuario -->
<div class="modal fade" id="formulario-registro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title" id="myModalLabel"><strong>Registro Usuario</strong></h3>
            </div>
            <div class="modal-body">
                <?php 
                echo form_open('registro_usuario_controller/ValidaRegistroUsuario');
                $rut = array(
                    'id'            => 'rut',
                    'name'          => 'rut',
                    'placeholder'   => 'Rut',
                    'requerid'      => 'true',
                    'class'         => 'form-control form-group'
                    );
                $nombre = array(
                    'id'            => 'nombre',
                    'name'          => 'nombre',
                    'placeholder'   => 'Nombre',
                    'requerid'      => 'true',
                    'class'         => 'form-control form-group',
                    'onkeypress'    => 'ValidaSoloLetras()'
                );
                $ap_paterno = array(
                    'id'            => 'ap_paterno',
                    'name'          => 'ap_paterno',
                    'placeholder'   => 'Ap. Paterno',
                    'requerid'      => 'true',
                    'class'         => 'form-control form-group',
                    'onkeypress'    => 'ValidaSoloLetras()'
                );
                $ap_materno = array(
                    'id'            => 'ap_materno',
                    'name'          => 'ap_materno',
                    'placeholder'   => 'Ap. Materno',
                    'requerid'      => 'true',
                    'class'         => 'form-control form-group',
                    'onkeypress'    => 'ValidaSoloLetras()'
                );
                $direccion = array(
                    'id'            => 'direccion',
                    'name'          => 'direccion',
                    'placeholder'   => 'Dirección',
                    'requerid'      => 'true',
                    'class'         => 'form-control form-group'
                );
                $email = array(
                    'id'            => 'email',
                    'name'          => 'email',
                    'placeholder'   => 'Email',
                    'requerid'      => 'true',
                    'class'         => 'form-control form-group'
                );
                $fono = array(
                    'id'            => 'fono',
                    'name'          => 'fono',
                    'placeholder'   => 'Fono',
                    'requerid'      => 'true',
                    'class'         => 'form-control form-group',
                    'onkeypress'    => 'ValidaSoloNumeros()'
                );
                $actividad = array(
                    'id'            => 'actividad',
                    'name'          => 'actividad',
                    'placeholder'   => 'Actividad',
                    'requerid'      => 'true',
                    'class'         => 'form-control form-group'
                );
                $user = array(
                    'id'            => 'user',
                    'name'          => 'user',
                    'placeholder'   => 'Nombre Usuario',
                    'requerid'      => 'true',
                    'class'         => 'form-control form-group'
                );
                $pass = array(
                    'id'            => 'pass',
                    'name'          => 'pass',
                    'placeholder'   => 'Contraseña',
                    'requerid'      => 'true',
                    'class'         => 'form-control form-group'
                );
                $submit = array(
                    'value'         => 'Registrar',
                    'class'         => 'btn btn-block btn-primary btn-large'
                );?>
                <div class="row">
                    <div class="col-lg-4">
                        <?php echo form_input($rut);?>
                    </div>
                    <div class="col-lg-8">
                        &nbsp;
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <?php echo form_input($nombre);?>
                    </div>
                    <div class="col-lg-4">
                        <?php echo form_input($ap_paterno);?>
                    </div>
                    <div class="col-lg-4">
                        <?php echo form_input($ap_materno);?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <?php echo form_input($direccion);?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <?php echo form_input($email);?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <?php echo form_input($fono);?>
                    </div>
                    <div class="col-lg-8">
                        <?php echo form_input($actividad);?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <?php echo form_input($user);?>
                    </div>
                    <div class="col-lg-6">
                        <?php echo form_input($pass);?>
                    </div>
                </div>
                <div class="modal-footer">
                    <?php echo form_submit($submit);?>
                    <button type="button" class="btn btn-block btn-danger" data-dismiss="modal">Cerrar <span class="glyphicon glyphicon-remove"></span></button>
                </div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>
<script> 
    $('#rut').Rut({
      on_error: function(){ alert('Rut incorrecto'); document.getElementById('rut').focus();}
    });
</script>
