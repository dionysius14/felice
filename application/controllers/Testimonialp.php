<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonialp extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Model template
		$this->load->model('testimonial_model');
        $this->load->library('pagination');
        // Place your model here...
    }
	
    public function index() {
		$config['base_url'] = site_url('testimonialp/index/');
        $rows = $this->db->query('SELECT * FROM testimonial ORDER BY testimonial_id DESC')->result();
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
        $this->session->set_userdata("last_url", "testimonial");
        if (is_numeric($this->uri->segment(3)) && $this->uri->segment(3) != '') {
            $page = ($this->uri->segment(3));
        } else {
            $page = 0;
        }
        $data['testimonial'] = $this->db->query('SELECT * FROM testimonial '
                        . ' ORDER BY testimonial_id DESC LIMIT ' . $page . ',' . $config['per_page'])->result();
						
        $this->load->view('testimonialp_view',$data);
    }

}
