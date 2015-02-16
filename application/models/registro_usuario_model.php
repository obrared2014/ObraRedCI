<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Registro_Usuario_Model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database('default');
    }
    function UsuarioNuevo($usuario_nuevo){
        $rut = $usuario_nuevo['rut'];
        $usuario = $usuario_nuevo['usuario'];
        $password = $usuario_nuevo['password'];
        $nombre = $usuario_nuevo['nombre'];
        $ap_paterno = $usuario_nuevo['ap_paterno'];
        $ap_materno = $usuario_nuevo['ap_materno'];
        $email = $usuario_nuevo['email'];
        $actividad = $usuario_nuevo['actividad'];
        $telefono = $usuario_nuevo['telefono'];
        $direccion = $usuario_nuevo['direccion'];
        
        $query = $this->db->query("CALL insertar(
                '$rut','$nombre','$ap_paterno','$ap_materno','$email','$actividad',
                '$telefono','$direccion','$usuario','$password')");
        
        if($query)return true;
        else return null;
    }
}
?>