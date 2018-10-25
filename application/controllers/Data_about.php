<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Data_about extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Model template 
        $this->load->model('about_model');
        $this->load->model('data_profile');
        // Place your model here...
    }

    public function index() {
		$data['akses']='dm_about';
        $this->session->set_userdata("akses_id", $data['akses']);
        $this->lib->check_session();
        $profil = $this->data_profile->get_all();
        $this->session->set_userdata("title", $profil->profile_title);
        $this->session->set_userdata("subtitle", "Data Link Social");
        $data['error'] = '';
        $data['status'] = '';
        $this->lib->log("Lihat");
        $this->load->view('data_about_view', $data);
    }

    public function show() {
        $this->lib->check_session();
        redirect('data_about/');
    }

    public function about_show_by_id() { //kirim data buat form edit	
        $this->lib->check_session();
        $about = $this->about_model->get_by_id($_POST['datamodel']); //data_model = primary key
        $array = array();
        $index = 0;
        foreach ($about as $tmp) {
			$temp['index'] = $index;
            $temp['datamodel'] = $tmp->about_id;
            $temp['link_fb'] = $tmp->link_fb;
            $temp['link_ig'] = $tmp->link_ig;
            $temp['phone'] = $tmp->phone;
            $temp['alamat'] = $tmp->alamat;
            $temp['latitude'] = $tmp->latitude;
            $temp['longitude'] = $tmp->longitude;
            $temp['about_ket'] = $tmp->about_ket;
            $temp['is_delete'] = $tmp->is_delete;
            $temp['is_permanent'] = $tmp->is_permanent;
            array_push($array, $temp);
            $index++;
        }
        echo json_encode($array);
    }

    public function about_show() {
        $this->lib->check_session();
        $index = 0;
        $about = $this->about_model->get_all_about();
        $array = array();
        foreach ($about as $tmp) {

            $temp['index'] = $index;
            $temp['datamodel'] = $tmp->about_id;
            $temp['link_fb'] = $tmp->link_fb;
            $temp['link_ig'] = $tmp->link_ig;
            $temp['phone'] = $tmp->phone;
            $temp['alamat'] = $tmp->alamat;
            $temp['latitude'] = $tmp->latitude;
            $temp['longitude'] = $tmp->longitude;
            $temp['about_ket'] = $tmp->about_ket;
            $temp['is_delete'] = $tmp->is_delete;
            $temp['is_permanent'] = $tmp->is_permanent;
            array_push($array, $temp);
            $index++;
        }
        echo json_encode($array);
    }

    public function get_array() {
        $this->lib->check_session();
        $dataData = array(
            'link_fb' => urldecode($_POST['link_fb']),
            'link_ig' => urldecode($_POST['link_ig']),
            'phone' => urldecode($_POST['phone']),
            'alamat' => urldecode($_POST['alamat']),
            'latitude' => urldecode($_POST['latitude']),
            'longitude' => urldecode($_POST['longitude']),
            'about_tgl_input' => date("y-m-d"),
            'about_ket' => urldecode($_POST['about_ket']),
            'last_update' => date("y-m-d h:i:s"),
            'last_user_id' => $this->session->userdata("user_id")
        );
        return $dataData;
    }

    public function edit() {
        $this->lib->check_session();
        $this->form_validation->set_rules('link_fb', 'Link Facebook', 'required|max_length[255]');
        $this->form_validation->set_rules('link_ig', 'Link Instagram', 'required|max_length[255]');
        if (isset($_POST['ubah'])) {
            if ($this->form_validation->run() == FALSE) {
                $data['ubah'] = 'ubah';
                $data['error'] = 'error';
                $this->load->view('data_about_view', $data);
            } else {
					 $dataData = $this->get_array();
                    $temp = $this->about_model->update($_POST['datamodel'], $dataData);
                    $this->lib->log("Ubah");

                    if ($temp == '1') {
                        $this->session->set_userdata("error", "Edit Berhasil");
                        redirect('data_about');
                    } else {
                        $data['ubah'] = 'ubah';
                        $data['error'] = 'error';
                        $this->load->view('data_about_views', $data);
                    }
                }
            
        }
    }

}
