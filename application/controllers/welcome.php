<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
        if (empty($seccion)) {
            $seccion = 'Inicio';
        }
        if (!$_SESSION) {
            switch ($seccion) {
                case "Inicio":
                    $var['variable'] = 'inicio';
                    $this->load->view('plantilla', $var);
                    break;
                case "Servicios":
                    $var['variable'] = 'Servicios';
                    $this->load->view('plantilla', $var);
                    break;
                case "Nosotros":
                    $var['variable'] = 'Nosotros';
                    $this->load->view('plantilla', $var);
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
                case "Codigo":
                    $var['variable'] = 'Codigo';
                    $this->load->view('plantilla', $var);
                    break;
                case "Presupuesto":
                    $var['variable'] = 'Presupuesto';
                    $this->load->view('plantilla', $var);
                    break;
                case "ResBuscar":
                    $var['variable'] = 'ResBuscar';
                    $this->load->view('plantilla', $var);
                    break;
                case "Buscar":
                    $var['variable'] = 'Buscar';
                    $this->load->view('plantilla', $var);
                    break;
                case "Agrega_Materiales":
                    $var['variable'] = 'Agrega_Materiales';
                    $this->load->view('plantilla', $var);
                    //$this->load->view('cabecera');
                    break;
                default:
                    $var['variable'] = 'inicio';
                    $this->load->view('plantilla', $var);
                    break;
            }
        } else {
            switch ($seccion) {
                case "Inicio":
                    $var['variable'] = 'Inicio';
                    $this->load->view('plantilla', $var);
                    $this->load->view('cabecera');
                    break;
                    switch ($seccion) {
                        case "Inicio":
                            $var['variable'] = 'inicio';//solo para verificar los case..
                            $this->load->view('plantilla', $var);
                            break;
                        case "Servicios":
                            $var['variable'] = 'Servicios';
                            $this->load->view('plantilla', $var);
                            break;
                        case "Nosotros":
                            $var['variable'] = 'Nosotros';
                            $this->load->view('plantilla', $var);
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
                        case "ResBuscar":
                            $var['variable'] = 'ResBuscar';
                            $this->load->view('plantilla', $var);
                            break;
                        case "Buscar":
                            $var['variable'] = 'Buscar';
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
        }
        $this->load->view('cabecera');
    }

}
