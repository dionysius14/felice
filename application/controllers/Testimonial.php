<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Model template 
        $this->load->model('testimonial_model');
        $this->load->model('data_profile');
        // Place your model here...
    }

    public function index() {
 		$data['akses']='dm_user';
        $this->session->set_userdata("akses_id", $data['akses']);
        $this->session->set_userdata("akses_pass_id",'user');
		$this->lib->check_session();
		$this->lib->check_pass();
        $profil = $this->data_profile->get_all();
        $this->session->set_userdata("title", $profil->profile_title);
        $this->session->set_userdata("subtitle", "Testimonial");
        $data['error'] = '';
        $data['status'] = '';
        // $this->session->set_userdata("error","");
        $this->lib->log("Lihat");
        $this->load->view('testimonial_view', $data);
    }

    public function show() {
        $this->lib->check_session();
        redirect('testimonial/');
    }

    public function testimonial_show_by_id() { //kirim data buat form edit
        $this->lib->check_session();
        $testimonial = $this->testimonial_model->get_by_id($_POST['datamodel']); //data_model = primary key
        $array = array();
        $index = 0;
        foreach ($testimonial as $tmp) {
            $temp['index'] = $index;
            $temp['datamodel'] = $tmp->testimonial_id;
            $temp['testimonial_nama'] = $tmp->testimonial_nama;
            $temp['testimonial_ket'] = $tmp->testimonial_ket;
            $temp['is_delete'] = $tmp->is_delete;
            array_push($array, $temp);
            $index++;
        }
        echo json_encode($array);
    }

    public function testimonial_show() {
        $this->lib->check_session();
        $index = 0;
        $users = $this->testimonial_model->get_all();
        $array = array();
        foreach ($users as $tmp) {

            $temp['index'] = $index;
            $temp['datamodel'] = $tmp->testimonial_id;
            $temp['testimonial_nama'] = $tmp->testimonial_nama;
            $temp['testimonial_ket'] = $tmp->testimonial_ket;
            $temp['is_delete'] = $tmp->is_delete;
            array_push($array, $temp);
            $index++;
        }
        echo json_encode($array);
    }

    public function get_array($testimonial_nama = "",$testimonial_ket = "") {
        $this->lib->check_session();
        $dataData = array(
            'testimonial_nama' => urldecode($testimonial_nama),
            'testimonial_ket' => urldecode($testimonial_ket),
            'last_update' => date("y-m-d h:i:s"),
            'last_user_id' => $this->session->userdata("user_id")
        );
        return $dataData;
    }

    public function add() {
        $this->lib->check_session();
        $temp = '0';
        $dataData = $this->get_array($_POST['testimonial_nama'],$_POST['testimonial_ket']);
        if (isset($_POST['datamodel']))
            $user_id = $_POST['datamodel'];
        $this->form_validation->set_rules('testimonial_nama', 'Nama', 'required');
        $this->form_validation->set_rules('testimonial_ket', 'Keterangan', 'required');
        $error = '';
        if (isset($_POST['simpan'])) {
            if ($this->form_validation->run() == FALSE) {
                $data['tambah'] = 'tambah';
                $data['error'] = 'error';
                $this->load->view('testimonial_view', $data);
            } else {
                $this->lib->log("Tambah");
                $temp = $this->testimonial_model->insert($dataData);
                if ($temp == '1') {
                    $this->session->set_userdata("error", "Simpan Berhasil");
                    redirect('testimonial/');
                } else
                    echo "Insert Gagal";
            }
        }
    }

    public function edit() {
        $this->lib->check_session();
        $this->form_validation->set_rules('testimonial_nama', 'Nama', 'required');
        $this->form_validation->set_rules('testimonial_ket', 'Keterangan', 'required');
        $error = '';
        if (isset($_POST['ubah'])) {
            if ($this->form_validation->run() == FALSE) {
                $data['ubah'] = 'ubah';
                $data['error'] = 'error';
                $this->load->view('testimonial_view', $data);
            } else {
                    $dataData = $this->get_array($_POST['testimonial_nama'],$_POST['testimonial_ket']);

                    $temp = $this->testimonial_model->update($_POST['datamodel'], $dataData);
                    $this->lib->log("Edit");

                    if ($temp == '1') {
                        $this->session->set_userdata("error", "Edit Berhasil");
                        redirect('testimonial/');
                    } else {
                        $data['ubah'] = 'ubah';
                        $data['error'] = 'error';
                        $this->load->view('testimonial_view', $data);
                    }
                
            }
        }
    }

    public function delete_permanent() {
        $this->lib->check_session();
         $user_id = $_POST["datamodel"];
         $this->testimonial_model->delete_permanent($user_id);
        $temp = 1;
        $this->lib->log("Hapus");
        echo $temp;
    }
}
