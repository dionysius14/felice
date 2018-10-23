<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Model template
        $this->load->model('data_profile');
		$this->load->model('kategori_model');
        // Place your model here...
    }
	
    public function index() {
		$data['select'] = '1';
		$profil = $this->data_profile->get_all(); 
		$this->session->set_userdata("title",$profil->profile_title);
		$data['slider'] = $this->db->query('SELECT * FROM slider ')->result();
		$data['about'] = $this->db->query('SELECT * FROM about_us ')->row();
		$data['get_all_kategori'] = $this->kategori_model->get_all_kategori();	
        $this->load->view('about_view',$data);
    }

//    public function index() {
//        $this->lib->check_session();
//        Place your code here...
//    }

}
