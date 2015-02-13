<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('login_model');
    }
    function ValidaLogin(){
        $usuario = array(
            'user' => $this->input->post('user'),
            'pass' => $this->input->post('password_usuario')
        );
        $data = $this->login_model->LoginExiste($usuario);
        if ($data->num_rows() > 0){
            echo "hola mundo";
        }
    }
}


?>