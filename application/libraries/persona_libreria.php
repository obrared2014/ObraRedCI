<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Persona_libreria{

   function DatosPersona($id,$que){
       $destino="?sec=Inicio";
       if($que=='Actualiza'){
           $destino="?sec=Codigo&id_Codigo=06";
       }
       $CI =& get_instance();       
       $CI->load->model('persona_model');
       $datos = $CI->persona_model->PersonaDatos($id);
        if ($datos->num_rows() > 0){
            session_start();
            $_SESSION['id_persona'] = $id;
            $_SESSION['rut'] = $datos->row('rut');
            $_SESSION['nombre'] = $datos->row('nombre');
            $_SESSION['ap_paterno'] = $datos->row('ap_paterno');
            $_SESSION['ap_materno'] = $datos->row('ap_materno');
            $_SESSION['email'] = $datos->row('email');
            $_SESSION['actividad'] = $datos->row('actividad');
            $_SESSION['telefono'] = $datos->row('telefono');
            $_SESSION['direccion'] = $datos->row('direccion');
            $_SESSION['perfil'] = $datos->row('perfil');
            redirect(base_url().$destino);
        }else{
            redirect(base_url()."?sec=Codigo&id_Codigo=02");
        }
   }   
}
