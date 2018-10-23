<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Howtop extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Model template
		$this->load->model('howto_model');
		$this->load->model('kategori_model');
        // Place your model here...
    }
	
    public function index() {
		$data['select'] = '1';
        $data['howto'] = $this->howto_model->get_all();
		$data['get_all_kategori'] = $this->kategori_model->get_all_kategori();	
        $this->load->view('howtop_view',$data);
    }

}
