<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Login_Controller extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('login_model');
        $this->load->helper('url');
    }
    function ValidaLogin(){
        $usuario = array(
            'user' => $this->input->post('user'),
            'pass' => $this->input->post('password_usuario')
        );
        $data = $this->login_model->LoginExiste($usuario);
        if(!empty($data)){
            if ($data->num_rows() > 0){
                session_start();
                $_SESSION['id_persona'] = $data->row('id_persona');
                $_SESSION['rut'] = $data->row('rut');
                $_SESSION['nombre'] = $data->row('nombre');
                $_SESSION['ap_paterno'] = $data->row('ap_paterno');
                $_SESSION['ap_materno'] = $data->row('ap_materno');
                $_SESSION['email'] = $data->row('email');
                $_SESSION['actividad'] = $data->row('actividad');
                $_SESSION['telefono'] = $data->row('telefono');
                $_SESSION['direccion'] = $data->row('direccion');
                $_SESSION['perfil'] = $data->row('perfil');
                redirect(base_url()."?sec=Inicio");
            }else{
                redirect(base_url()."?sec=Codigo&id_Codigo=02");
            }
        }else{
            redirect(base_url()."?sec=Codigo&id_Codigo=02");
        }
    }
}


?>