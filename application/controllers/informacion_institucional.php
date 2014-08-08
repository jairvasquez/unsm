<?php

if (!defined('BASEPATH'))die();

class informacion_institucional extends Main_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index($vista='historia') {
        $data = array(
            'mostrar'=>$vista ,
            'contenido' => 'info/index.php'
        );
        $this->load->view('index', $data);
    }
    
    public function mision_vision(){
        $adm = $this->load->view('info/mision_vision.php');
        echo $adm;
    }
    public function himno(){
        $adm = $this->load->view('info/himno.php');
        echo $adm;
    }
    public function historia(){
        $adm = $this->load->view('info/historia.php');
        echo $adm;
    }
    public function decanos_facultad(){
        $adm = $this->load->view('info/decanos_facultad.php');
        echo $adm;
    }
        public function directores_oficinas(){
        $adm = $this->load->view('info/directores_oficinas.php');
        echo $adm;
    }
    public function autoridades_unsm(){
        $adm = $this->load->view('info/autoridades_unsm.php');
        echo $adm;
    }
    public function jefe_departamento(){
        $adm = $this->load->view('info/jefe_departamento.php');
        echo $adm;
    }
    public function gestion(){
        $adm = $this->load->view('info/gestion.php');
        echo $adm;
    }
    public function organigrama(){
        $adm = $this->load->view('info/organigrama.php');
        echo $adm;
    }
    public function objetivos(){
        $adm = $this->load->view('info/objetivos.php');
        echo $adm;
    }
}

/* End of file web.php */
/* Location: ./application/controllers/web.php */
