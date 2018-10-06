<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class produk extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Model template
		$this->load->model('produk_model');
		$this->load->model('kategori_model');
        // Place your model here...
    }
	public function index($id=""){
	// echo $id;
		$data['get_all'] = $this->produk_model->get_all($id);
		$data['get_all_kategori'] = $this->kategori_model->get_all_kategori($id);
		$data['select'] = $id;
		$this->load->view('kategori/produk_view',$data);
	}

	public function showlimit(){
		$data['get_top_eight'] = $this->produk_model->get_top_eight();
		$this->load->view('kategori/produktopeight_view',$data);
	}
	

}
