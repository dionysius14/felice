<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Model template
		$this->load->model('home_model');
		$this->load->model('kategori_model');
		$this->load->model('produk_model');
        $this->load->library('pagination');
        // Place your model here...
    }
	
    public function index() {
	
		$data['select'] = '1';
		$data['get_all_kategori'] = $this->kategori_model->get_all_kategori();	
		$config['base_url'] = site_url('home/index/');
		
        $keyword = $this->session->userdata('keyword');
        $min = $this->session->userdata('min');
        $max = $this->session->userdata('max');
        $sort = $this->session->userdata('sort');
		$sortfilter = "DESC";
		if($this->session->userdata('sort')!= ""){
			if($sort == "up"){
				$sortfilter = "DESC";
			}else{
				$sortfilter = "ASC";
			}
		}
		if($min != "" && $max != ""){
			$rows = $this->db->query('SELECT * FROM data_produk where produk_nama like "%'.$keyword.'%" and produk_harga >= '.$min.' and produk_harga <= '.$max.' ORDER BY produk_tgl_input '.$sortfilter.' ')->result();
			
		}else{
			$rows = $this->db->query('SELECT * FROM data_produk where produk_nama like "%'.$keyword.'%" ORDER BY produk_tgl_input '.$sortfilter.' ')->result();
			
		}
		$data['slider'] = $this->db->query('SELECT * FROM slider ')->result();
        $config['total_rows'] = count($rows);
        $config['per_page'] = 24;
        $config['use_page_numbers'] = FALSE;
        $config['num_links'] = 5;
        $config['full_tag_open'] = '<nav><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        if (is_numeric($this->uri->segment(3)) && $this->uri->segment(3) != '') {
            $page = ($this->uri->segment(3));
        } else {
            $page = 0;
        }
		if($min != "" && $max != ""){
			$data['produk'] = $this->db->query('SELECT * FROM data_produk where produk_nama like "%'.$keyword.'%" and produk_harga >= '.$min.' and produk_harga <= '.$max.' ORDER BY produk_tgl_input '.$sortfilter.' LIMIT ' . $page . ',' . $config['per_page'])->result();
			
		}else{
			$data['produk'] = $this->db->query('SELECT * FROM data_produk where produk_nama like "%'.$keyword.'%" ORDER BY produk_tgl_input '.$sortfilter.' LIMIT ' . $page . ',' . $config['per_page'])->result();
			
		}	
		
        $this->load->view('search_view',$data);
    }

}
