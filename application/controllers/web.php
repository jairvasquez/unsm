<?php

if (!defined('BASEPATH'))die();

class web extends Main_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data = array(
            'contenido' => 'web/index.php'
        );
        $this->load->view('index', $data);
    }
    public function actividades() {
        $data = array(
            'contenido' => 'web/act.php'
        );
        $this->load->view('index', $data);
    }
    public function calendario_academico() {
        $data = array(
            'contenido' => 'web/cal.php'
        );
        $this->load->view('index', $data);
    }
    public function centros_produccion() {
        $data = array(
            'contenido' => 'web/cp.php'
        );
        $this->load->view('index', $data);
    }
    public function informacion_general() {
        $data = array(
            'contenido' => 'web/ig.php'
        );
        $this->load->view('index', $data);
    }
    public function servicios() {
        $data = array(
            'contenido' => 'web/servicios.php'
        );
        $this->load->view('index', $data);
    }
    public function mapasitio() {
        $data = array(
            'contenido' => 'web/mapasitio.php'
        );
        $this->load->view('index', $data);
    }

}

/* End of file web.php */
/* Location: ./application/controllers/web.php */
