<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Faqp extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Model template
		$this->load->model('faq_model');
        // Place your model here...
    }
	
    public function index() {
        $data['faq'] = $this->faq_model->get_all();
        $this->load->view('faqp_view',$data);
    }

}
