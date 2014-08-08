<?php

if (!defined('BASEPATH'))die();

class admision extends Main_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index($vista = 'principal') {
        $data = array(
            'mostrar' => $vista,
            'contenido' => 'admision/index.php'
        );
        $this->load->view('index', $data);
    }
    
    public function comision(){
        $adm = $this->load->view('admision/comision.php');
        echo $adm;
    }
    public function costos(){
        $adm = $this->load->view('admision/costos.php');
        echo $adm;
    }
    public function cronograma(){
        $adm = $this->load->view('admision/cronograma.php');
        echo $adm;
    }
    public function examen(){
        $adm = $this->load->view('admision/examen.php');
        echo $adm;
    }
    public function principal(){
        $adm = $this->load->view('admision/principal.php');
        echo $adm;
    }
    public function reglamento(){
        $adm = $this->load->view('admision/reglamento.php');
        echo $adm;
    }
    public function requisitos(){
        $adm = $this->load->view('admision/requisitos.php');
        echo $adm;
    }
    public function resultados(){
        $adm = $this->load->view('admision/resultados.php');
        echo $adm;
    }
    public function temario(){
        $adm = $this->load->view('admision/temario.php');
        echo $adm;
    }
    public function vacantes(){
        $adm = $this->load->view('admision/vacantes.php');
        echo $adm;
    }
}

/* End of file web.php */
/* Location: ./application/controllers/web.php */
