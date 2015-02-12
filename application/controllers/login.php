<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('login_model');
        $this->load->database('default');
    }
    function ValidaLogin(){
        $usuario = array(
            'user' => $this->input->post('user'),
            'pass' => $this->input->post('password_usuario')
        );
//        $data['login'] = $this->LoginModel->LoginExiste($usuario);
//        if(data != NULL){
//            $id = $login -> idpersona;
//            $datos = $this->db->query("CALL datos_usuario($id)");
//            if($row = $datos->result()){
//                session_start();
//                $_SESSION['id_persona'] = $id;
//                $_SESSION['rut'] = $row['rut'];
//                $_SESSION['nombre'] = $row['nombre'];
//                $_SESSION['ap_paterno'] = $row ['ap_paterno'];
//                $_SESSION['ap_materno'] = $row ['ap_materno'];
//                $_SESSION['email'] = $row ['email'];
//                $_SESSION['actividad'] = $row ['actividad'];
//                $_SESSION['telefono'] = $row ['telefono'];
//                $_SESSION['direccion'] = $row ['direccion'];
//                $_SESSION['perfil'] = $row ['perfil'];
//                $this->load->view('codigo');
//            }else{
                $this->load->view('codigo');
//            }
//        }
    }
}


?>