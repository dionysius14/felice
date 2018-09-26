<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class footer extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Model template 
        $this->load->model('data_footer');
        $this->load->model('data_profile');
        // Place your model here...
    }

    public function index() {
		$data['akses']='pg_footer';
        $this->session->set_userdata("akses_id", $data['akses']);       
		$this->lib->check_session();
        $profil = $this->data_profile->get_all();
        $this->session->set_userdata("title", $profil->profile_title);
        $this->session->set_userdata("subtitle", "Data Footer");
        $data['error'] = '';
        $data['status'] = '';
        $this->lib->log("Lihat");
        $this->load->view('pengaturan/footer_view', $data);
    }

    public function show() {
        $this->lib->check_session();
        redirect('pengaturan/footer/');
    }

    public function footer_show_by_id() { //kirim data buat form edit 
        $this->lib->check_session();
        $footer = $this->data_footer->get_by_id($_POST['datamodel']); //data_model = primary key
        $array = array();
        $index = 0;
        foreach ($footer as $tmp) {
            $temp['index'] = $index;
            $temp['datamodel'] = $tmp->footer_id;
            $temp['footer_isi'] = $tmp->footer_isi;
            $temp['is_delete'] = $tmp->is_delete;
            array_push($array, $temp);
            $index++;
        }
        echo json_encode($array);
    }

    public function footer_show() {
        $this->lib->check_session();
        $index = 0;
        $footer = $this->data_footer->get_all();
        $array = array();
        foreach ($footer as $tmp) {
            $temp['index'] = $index;
            $temp['datamodel'] = $tmp->footer_id;
            $temp['footer_nama'] = $tmp->footer_nama;
			$temp['footer_isi'] = $tmp->footer_isi;
            $temp['is_delete'] = $tmp->is_delete;
            array_push($array, $temp);
            $index++;
        }
        echo json_encode($array);
    }
    public function edit() {
        $this->lib->check_session();
       $this->form_validation->set_rules('footer_isi', 'Isi Footer', 'required|max_length[255]');
     
        $error = '';
        if (isset($_POST['ubah'])) {
            if ($this->form_validation->run() == FALSE) {
                $data['ubah'] = 'ubah';
                $data['error'] = 'error';
                $this->load->view('pengaturan/footer_view', $data);
            } else {
             
                    $dataData = array
					(
						'footer_isi' => $_POST['footer_isi'],
						'last_update' => date("y-m-d h:i:s"),
						'last_user_id' => $this->session->userdata("user_id")
					);					
                    $temp = $this->data_footer->update($_POST['datamodel'], $dataData,$_POST['datamodel']);
                    $this->lib->log("Ubah");

                    if ($temp == '1') {
                        $this->session->set_userdata("error", "Edit Berhasil");
                        redirect('pengaturan/footer/');
                    } else {
                        $data['ubah'] = 'ubah';
                        $data['error'] = 'error';
                        $this->load->view('pengaturan/footer_view', $data);
                    }
            }
        }
    }

    
}
