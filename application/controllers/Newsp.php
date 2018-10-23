<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Newsp extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Model template 
        $this->load->model('news_model');
        $this->load->model('data_profile');
		$this->load->model('kategori_model');
        $this->load->library('pagination');
        // Place your model here...
    }

    public function index() {
		$data['select'] = '1';
		$config['base_url'] = site_url('newsp/index/');
		$data['get_all_kategori'] = $this->kategori_model->get_all_kategori();	
        $rows = $this->db->query('SELECT * FROM data_news ORDER BY news_date DESC')->result();
        $config['total_rows'] = count($rows);
        $config['per_page'] = 5;
        $config['use_page_numbers'] = FALSE;
        $config['num_links'] = 7;
        $config['next_link'] = '<i class="fa fa-fw fa-forward"></i>';
        $config['prev_link'] = '<i class="fa fa-fw fa-backward"></i>';
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
        $this->session->set_userdata("last_url", "news");
        if (is_numeric($this->uri->segment(3)) && $this->uri->segment(3) != '') {
            $page = ($this->uri->segment(3));
        } else {
            $page = 0;
        }
        $data['news'] = $this->db->query('SELECT * FROM data_news '
                        . ' ORDER BY news_date DESC LIMIT ' . $page . ',' . $config['per_page'])->result();
					
        $this->load->view('newsp_view', $data);
    }

    public function show() {
        $this->lib->check_session();
        redirect('newsp');
    }

   
}
