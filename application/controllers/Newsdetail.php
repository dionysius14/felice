<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Newsdetail extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('news_model');
		$this->load->model('kategori_model');
    }

    public function index() {
		$data['select'] = '1';
        $this->session->set_userdata("last_url", "home");
		$data['get_all_kategori'] = $this->kategori_model->get_all_kategori();	
        $common['title'] = 'Newsdetail';
		$id = $this->input->get('id');
        $data['newsdetail'] = $this->news_model->get_newsbyid($id);
        $this->load->view('newsdetail_view', $data);
    }

}
