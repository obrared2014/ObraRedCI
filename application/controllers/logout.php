<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    function Logout() {
        //Crear sesión
        session_start();
        //Vaciar sesión
        $_SESSION = array();
        //Destruir Sesión
        session_destroy();
        //Redireccionar a Index.php
        redirect(base_url()."?sec=Inicio",'refresh');
    }
}

?>