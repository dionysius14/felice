<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class about extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Model template
        // Place your model here...
    }
	
    public function index() {
        $this->load->view('about_view');
    }

//    public function index() {
//        $this->lib->check_session();
//        Place your code here...
//    }

}
