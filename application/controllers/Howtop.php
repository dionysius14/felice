<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Howtop extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Model template
		$this->load->model('howto_model');
        // Place your model here...
    }
	
    public function index() {
        $data['howto'] = $this->howto_model->get_all();
        $this->load->view('howtop_view',$data);
    }

}
