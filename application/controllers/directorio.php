<?php

if (!defined('BASEPATH'))die();

class directorio extends Main_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data = array(
            'contenido' => 'dir/index.php'
        );
        $this->load->view('index', $data);
    }
    
    public function diralu(){
        $adm = $this->load->view('dir/dal.php');
        echo $adm;
    }
    public function dirdoc(){
        $adm = $this->load->view('dir/ddo.php');
        echo $adm;
    }
    public function diradm(){
        $adm = $this->load->view('dir/dad.php');
        echo $adm;
    }
    public function dirtel(){
        $adm = $this->load->view('dir/dte.php');
        echo $adm;
    }
}

/* End of file web.php */
/* Location: ./application/controllers/web.php */
