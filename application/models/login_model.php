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
        $this->db->select('*');
        $this->db->from('tbl_login');
        $this->db->where('login_usuario', $user);
        $this->db->where('login_password', $pass);
        $consulta = $this->db->get();
        if ($consulta->num_rows() > 0){
            $id = $consulta->row('id_persona');
            $query = $this->db->query("CALL datos_usuario($id)");
            if($query->num_rows() > 0)return $query;
            else return null;
        }else{
            return null;
        }
    }
}
?>