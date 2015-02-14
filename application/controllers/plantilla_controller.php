<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

class plantilla_controller extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        session_start();
        $seccion = filter_input(INPUT_GET, "sec");
        $idPress = filter_input(INPUT_GET, "idPres");
        
        $this->load->view('plantilla');
        $this->load->view('cabecera');
        $this->load->view('contacto');
        $this->load->view('login');
        $this->load->view('registro_usuario');
        
        if (empty($seccion)) {
            $seccion = 'Inicio';
        }
        if (!$_SESSION) {
            switch ($seccion) {
                case "Inicio":
                    $this->load->view('carousel');
                    break;
//                case "Servicios":
//                    $var['variable'] = 'Servicios';
//                    $this->load->view('plantilla', $var);
//                    break;
                case "Nosotros":
                    $this->load->view('quienes_somos');
                    break;
                case "Vision":
                    $this->load->view('vision');
                    break;
                case "Mision":
                    $this->load->view('mision');
                    break;
                case "Contacto":
                    $this->load->view('contacto');
                    break;
                case "Codigo":
                    $this->load->view('codigo');
                    break;
                case "Presupuesto":
                    $this->load->view('presupuesto');
                    break;
                default:
                    $this->load->view('inicio');
                    break;
            }
        } else {
            switch ($seccion) {
                case "Inicio":
                    $this->load->view('carousel');
                    break;
                case "Servicios":
                    $var['variable'] = 'Servicios';
                    $this->load->view('plantilla', $var);
                    break;
                case "Nosotros":
                    $this->load->view('quienes_somos');
                    break;
                case "Vision":
                    $this->load->view('vision');
                    break;
                case "Mision":
                    $this->load->view('mision');
                    break;
                case "Contacto":
                    $this->load->view('contacto');
                    break;
                case "Presupuesto":
                    $this->load->view('presupuesto');
                    break; 
                case "Login":
                    $var['variable'] = 'Login';
                    $this->load->view('plantilla', $var);
                    break;
                case "Registro":
                    $var['variable'] = 'Registro';
                    $this->load->view('plantilla', $var);
                    break;
                case "Perfil":
                    $this->load->view('perfil');
                    break;
                case "Agrega_Materiales":
                    $this->load->view('registro_materiales');
                    break;
                case "Cotizacion":
                    $var['variable'] = 'Cotizacion';
                    $this->load->view('plantilla', $var);
                    break;
                case "Codigo":
                    $this->load->view('codigo');
                    break;
                case "muestra_presupuestos":
                    $this->load->view('mis_presupuestos');
                    break;
                case "presupuestosAntiguos":
                    $var['variable'] = 'presupuestosAntiguos';
                    $this->load->view('plantilla', $var);
                    break;
                case "mantenedorMateriales":
                    $this->load->view('materiales');
                    break;
                case "detallesMaterial":
                    $var['variable'] = 'detallesMaterial';
                    $this->load->view('plantilla', $var);
                    break;
                case "mantenedorUsuarios":
                    $this->load->view('usuarios');
                    break;
                case "detallesPersona":
                    $var['variable'] = 'detallesPersona';
                    $this->load->view('plantilla', $var);
                    break;
            }
        }
        $this->load->view('footer');
    }

}
