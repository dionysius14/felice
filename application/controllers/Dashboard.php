<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Model template
        $this->load->model('data_role');
        $this->load->model('setting_akses_menu');
        $this->load->model('setting_akses_password');
        $this->load->model('setting_profile');

        // Place your model here...
    }

    public function index() {
        $this->lib->check_session();
        $this->session->set_userdata("subtitle", "Dashboard");
        $this->load->view('dashboard');
    }
	
	 public function show() {
        $this->lib->check_session();
        redirect('dashboard/');
    }

//    public function index() {
//        $this->lib->check_session();
//        Place your code here...
//    }

}
