<!--Login -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-body">
            <?php echo form_open('login/ValidaLogin');
            $user = array(
                'name'          => 'user',
                'placeholder'   => 'Usuario',
                'type'          => 'text',
                'class'         => 'form-control',
                'required'      => 'true'
            );
            $pass = array(
                'name'          => 'password_usuario',
                'placeholder'   => 'Contraseña',
                'class'         => 'form-control',
                'type'          => 'password',
                'required'      => 'true'

            );
            $submit = array(
                'class'         => 'btn btn-block btn-primary btn-large',
                'value'         => 'Entrar',
            );?> 
            <div class="well">
                <div class="text-center">
                    <img src="<?php base_url();?>assets/img/LOGO_2.png">
                </div>
                <div class="row">
                    <div class="form-group">
                        <?php echo form_input($user); ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_input($pass);?>
                    </div>
                    <div class="form-group">
                        <?php echo form_submit($submit)?>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-block btn-danger" data-dismiss="modal">Cerrar <span class="glyphicon glyphicon-remove"></span></button>
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div> 