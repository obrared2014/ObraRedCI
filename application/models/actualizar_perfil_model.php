<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Actualizar_Perfil_Model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database('default');
    }
    function ActualizarPerfil($usuario_actualizado){
        $id = $usuario_actualizado['id'];
        $rut = $usuario_actualizado['rut'];
        $nombre = $usuario_actualizado['nombre'];
        $ap_paterno = $usuario_actualizado['ap_paterno'];
        $ap_materno = $usuario_actualizado['ap_materno'];
        $email = $usuario_actualizado['email'];
        $actividad = $usuario_actualizado['actividad'];
        $telefono = $usuario_actualizado['telefono'];
        $direccion = $usuario_actualizado['direccion'];
        
        $query = $this->db->query("CALL actualizar_usuario(
                '$id','$rut','$nombre','$ap_paterno','$ap_materno','$email','$actividad',
                '$telefono','$direccion')");
        
        if($query)return true;
        else return null;
    }
}
?>