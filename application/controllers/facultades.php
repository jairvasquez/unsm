<?php

if (!defined('BASEPATH'))die();

class facultades extends Main_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index($vista='agronomia', $seleccionar = 'Ciencias Agrarias') {
        $data = array(
            'seleccionar' => $seleccionar,
            'mostrar' => $vista,
            'contenido' => 'facultades/index.php'
        );
        $this->load->view('index', $data);
    }
    
    public function agronomia(){
        $adm = $this->load->view('facultades/agronomia.php');
        echo $adm;
    }
    public function veterinaria(){
        $adm = $this->load->view('facultades/veterinaria.php');
        echo $adm;
    }
    public function enfermeria(){
        $adm = $this->load->view('facultades/enfermeria.php');
        echo $adm;
    }
    public function obstetricia(){
        $adm = $this->load->view('facultades/obstetricia.php');
        echo $adm;
    }
    public function ing_agroindustrial(){
        $adm = $this->load->view('facultades/ing_agroindustrial.php');
        echo $adm;
    }
    public function ing_civil(){
        $adm = $this->load->view('facultades/ing_civil.php');
        echo $adm;
    }
    public function ing_sistemas(){
        $adm = $this->load->view('facultades/ing_sistemas.php');
        echo $adm;
    }
    public function ing_ambiental(){
        $adm = $this->load->view('facultades/ing_ambiental.php');
        echo $adm;
    }
    public function ing_sanitaria(){
        $adm = $this->load->view('facultades/ing_sanitaria.php');
        echo $adm;
    }
    public function arquitectura(){
        $adm = $this->load->view('facultades/arquitectura.php');
        echo $adm;
    }
    public function derecho(){
        $adm = $this->load->view('facultades/derecho.php');
        echo $adm;
    }
    public function medicina(){
        $adm = $this->load->view('facultades/medicina.php');
        echo $adm;
    }
    public function economia(){
        $adm = $this->load->view('facultades/economia.php');
        echo $adm;
    }
    public function administracion(){
        $adm = $this->load->view('facultades/administracion.php');
        echo $adm;
    }
    public function adm_turismo(){
        $adm = $this->load->view('facultades/adm_turismo.php');
        echo $adm;
    }
    public function contabilidad(){
        $adm = $this->load->view('facultades/contabilidad.php');
        echo $adm;
    }
    public function idiomas(){
        $adm = $this->load->view('facultades/idiomas.php');
        echo $adm;
    }
    public function ed_secundaria(){
        $adm = $this->load->view('facultades/ed_secundaria.php');
        echo $adm;
    }
    public function ed_primaria(){
        $adm = $this->load->view('facultades/ed_primaria.php');
        echo $adm;
    }
    public function ed_inicial(){
        $adm = $this->load->view('facultades/ed_inicial.php');
        echo $adm;
    }
}

/* End of file web.php */
/* Location: ./application/controllers/web.php */
