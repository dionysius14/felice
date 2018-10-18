<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class about extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Model template
        $this->load->model('data_profile');
        // Place your model here...
    }
	
    public function index() {
		$profil = $this->data_profile->get_all(); 
		$this->session->set_userdata("title",$profil->profile_title);
		$data['slider'] = $this->db->query('SELECT * FROM slider ')->result();
        $this->load->view('about_view',$data);
    }

//    public function index() {
//        $this->lib->check_session();
//        Place your code here...
//    }

}
