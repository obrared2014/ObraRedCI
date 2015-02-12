<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

class Welcome extends CI_Controller {
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
                case "Codigo":
                    $var['variable'] = 'Codigo';
                    $this->load->view('plantilla', $var);
                    break;
                case "Presupuesto":
                    $this->load->view('presupuesto');
                    break;
                case "Agrega_Materiales":
                    $var['variable'] = 'Agrega_Materiales';
                    $this->load->view('plantilla', $var);
                    break;
                default:
                    $var['variable'] = 'inicio';
                    $this->load->view('plantilla', $var);
                    break;
            }
        } else {
            switch ($seccion) {
                case "Inicio":
                    $var['variable'] = 'inicio'; //solo para verificar los case..
                    $this->load->view('plantilla', $var);
                    break;
                case "Servicios":
                    $var['variable'] = 'Servicios';
                    $this->load->view('plantilla', $var);
                    break;
                case "Nosotros":
                    $this->load->view('quienes_somos');
                    break;
                case "Vision":
                    $var['variable'] = 'Vision';
                    $this->load->view('plantilla', $var);
                    break;
                case "Mision":
                    $var['variable'] = 'Mision';
                    $this->load->view('plantilla', $var);
                    break;
                case "Contacto":
                    $var['variable'] = 'Contacto';
                    $this->load->view('plantilla', $var);
                    break;
                case "Presupuesto":
                    $var['variable'] = 'Presupuesto';
                    $this->load->view('plantilla', $var);
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
                    $var['variable'] = 'Perfil';
                    $this->load->view('plantilla', $var);
                    break;
                case "Agrega_Materiales":
                    $var['variable'] = 'Agrega_Materiales';
                    $this->load->view('plantilla', $var);
                    break;
                case "Cotizacion":
                    $var['variable'] = 'Cotizacion';
                    $this->load->view('plantilla', $var);
                    break;
                case "Codigo":
                    $var['variable'] = 'Codigo';
                    $this->load->view('plantilla', $var);
                    break;
                case "muestra_presupuestos":
                    $var['variable'] = 'muestra_presupuestos';
                    $this->load->view('plantilla', $var);
                    break;
                case "presupuestosAntiguos":
                    $var['variable'] = 'presupuestosAntiguos';
                    $this->load->view('plantilla', $var);
                    break;
                case "mantenedorMateriales":
                    $var['variable'] = 'mantenedorMateriales';
                    $this->load->view('plantilla', $var);
                    break;
                case "detallesMaterial":
                    $var['variable'] = 'detallesMaterial';
                    $this->load->view('plantilla', $var);
                    break;
                case "mantenedorUsuarios":
                    $var['variable'] = 'mantenedorUsuarios';
                    $this->load->view('plantilla', $var);
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
