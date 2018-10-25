<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
        $rows = $this->db->query('SELECT * FROM data_produk ORDER BY produk_tgl_input DESC')->result();
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
        $data['produk'] = $this->db->query('SELECT * FROM data_produk ORDER BY produk_tgl_input DESC LIMIT ' . $page . ',' . $config['per_page'])->result();	
		
        $this->load->view('home_view',$data);
    }


    public function search(){
        $keyword = $this->input->post('keyword');
        // $min = $this->input->post('min');
        // $max = $this->input->post('max');
        // $sort = $this->input->post('sort');
        // $this->session->set_userdata('min',$min);
        // $this->session->set_userdata('max',$max);
        // $this->session->set_userdata('sort',$sort);
        $this->session->set_userdata('keyword',$keyword);
        // echo $keyword;
        redirect('search');
    }

}
