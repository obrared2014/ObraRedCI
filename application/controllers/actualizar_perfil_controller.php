<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Actualizar_Perfil_Controller extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('actualizar_perfil_model');
        $this->load->helper('url');
    }
    function ActualizarPerfil(){
        $usuario_actualizado = array (
            'id'            => $this->input->post('id'),
            'rut'           => $this->input->post('rut'),
            'nombre'        => $this->input->post('nombre'),
            'ap_paterno'    => $this->input->post('ap_paterno'),
            'ap_materno'    => $this->input->post('ap_materno'),
            'email'         => $this->input->post('email'),
            'actividad'     => $this->input->post('actividad'),
            'telefono'      => $this->input->post('fono'),
            'direccion'     => $this->input->post('direccion')
        );
        $data = $this->actualizar_perfil_model->ActualizarPerfil($usuario_actualizado);
        if(!empty($data)){
            if ($data)redirect(base_url()."?sec=Codigo&id_Codigo=06");
            else redirect(base_url()."?sec=Codigo&id_Codigo=05");
        }else{
            redirect(base_url()."?sec=Codigo&id_Codigo=05");
        }
    }
}
?>