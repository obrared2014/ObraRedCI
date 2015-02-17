<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Persona_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database('default');
    }
    function PersonaDatos($id){
        $query = $this->db->query("CALL datos_usuario('$id')");
        if($query->num_rows() > 0){
            $this->db->close();
            return $query;
        }else{
            $this->db->close();
            return null;
        }
    }
}
?>