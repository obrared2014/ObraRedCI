<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Login_Controller extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('login_model');
        $this->load->helper('url');
        $this->load->model('persona_model');
        $this->load->library('Persona_libreria');
    }
    function ValidaLogin(){
        $usuario = array(
            'user' => $this->input->post('user'),
            'pass' => $this->input->post('password_usuario')
        );
        $data = $this->login_model->LoginExiste($usuario);
        if(!empty($data)){
            if ($data->num_rows() > 0){
                $this->persona_libreria->DatosPersona($data->row('id_persona'),'login');
                ////Esta se puede usar para todo lo que tenga que ver con los usuarios
                //Sólo hay que mandarle el 
//                session_start();
//                $_SESSION['id_persona'] = $data->row('id_persona');
//                redirect(base_url()."?sec=Codigo&id_Codigo=10");
//                $id=$data->row('id_persona');
//                $datos = $this->persona_model->PersonaDatos($id);
//                redirect('persona_controller/DatosPersona('.$id.')');
//                if ($datos->num_rows() > 0){
//                    session_start();
//                    $_SESSION['id_persona'] = $data->row('id_persona');
//                    $_SESSION['rut'] = $datos->row('rut');
//                    $_SESSION['nombre'] = $datos->row('nombre');
//                    $_SESSION['ap_paterno'] = $datos->row('ap_paterno');
//                    $_SESSION['ap_materno'] = $datos->row('ap_materno');
//                    $_SESSION['email'] = $datos->row('email');
//                    $_SESSION['actividad'] = $datos->row('actividad');
//                    $_SESSION['telefono'] = $datos->row('telefono');
//                    $_SESSION['direccion'] = $datos->row('direccion');
//                    $_SESSION['perfil'] = $datos->row('perfil');
//                    redirect(base_url()."?sec=Inicio");
//                }else{
//                    redirect(base_url()."?sec=Codigo&id_Codigo=02");
//                }
            }else{
                redirect(base_url()."?sec=Codigo&id_Codigo=02");
            }
        }else{
            redirect(base_url()."?sec=Codigo&id_Codigo=02");
        }
    }
}


?>