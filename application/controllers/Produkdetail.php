<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produkdetail extends CI_Controller {

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
        $this->load->model('produk_model');
        $this->load->model('kategori_model');
    }

    public function index() {
        $this->session->set_userdata("last_url", "home");
		$data['select'] = '1';
		$data['get_all_kategori'] = $this->kategori_model->get_all_kategori();		
		$id = $this->input->get('id');
		$data['produk'] = $this->db->query('SELECT * FROM data_produk where produk_id = '.$id.'')->row();
        $data['produkdetail'] = $this->produk_model->get_by_id_detail($id);
        $this->load->view('produkdetail_view', $data);
    }

}
