<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Login_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    function LoginExiste($usuario){
        $user = $usuario['user'];
        $pass = (md5($usuario['pass']));
        $sql = "SELECT * FROM tbl_login WHERE login_usuario = ? and login_password = ?";
        $consulta = $this->db->query($sql,'$user','$pass');
        if ($consulta->num_rows() > 0){
            return $query;
        }else{
            return null;
        }
    }
}


?>