<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Login_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database('default');

    }
    function LoginExiste($usuario){
        $user = $usuario['user'];
        $pass = (md5($usuario['pass']));
        $sql = "SELECT * FROM tbl_login WHERE login_usuario = ? AND login_password = ?";
        $consulta = $this->db->query($sql,array($user,$pass));
        if ($consulta -> num_rows() > 0){
            //$id = $consulta->id_persona;
            //$datos = $this->db->query("CALL datos_usuario($id)");
            //if ($datos -> num_rows() > 0)return $datos;
            //else return null;
        }else{
            return null;
        }
    }
}


?>