<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Registro_Usuario_Controller extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('registro_usuario_model');
        $this->load->helper('url');
    }
    function ValidaRegistroUsuario(){
        $usuario_nuevo = array(
            'rut'           => $this->input->post('rut'),
            'usuario'       => $this->input->post('user'),
            'password'      => $this->input->post('pass'),
            'nombre'        => $this->input->post('nombre'),
            'ap_paterno'    => $this->input->post('ap_paterno'),
            'ap_materno'    => $this->input->post('ap_materno'),
            'email'         => $this->input->post('email'),
            'actividad'     => $this->input->post('actividad'),
            'telefono'      => $this->input->post('fono'),
            'direccion'     => $this->input->post('direccion')
        );
        $data = $this->registro_usuario_model->UsuarioNuevo($usuario_nuevo);
        if(!empty($data)){
            if ($data)redirect(base_url()."?sec=Codigo&id_Codigo=04");
            else redirect(base_url()."?sec=Codigo&id_Codigo=03");
        }else{
            redirect(base_url()."?sec=Codigo&id_Codigo=03");
        }
    }
}
?>
