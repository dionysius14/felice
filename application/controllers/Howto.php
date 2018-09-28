<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Howto extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Model template 
        $this->load->model('howto_model');
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
        $this->session->set_userdata("subtitle", "How to Order");
        $data['error'] = '';
        $data['status'] = '';
        // $this->session->set_userdata("error","");
        $this->lib->log("Lihat");
        $this->load->view('howto_view', $data);
    }

    public function show() {
        $this->lib->check_session();
        redirect('howto');
    }

    public function howto_show_by_id() { //kirim data buat form edit
        $this->lib->check_session();
        $howto = $this->howto_model->get_by_id($_POST['datamodel']); //data_model = primary key
        $array = array();
        $index = 0;
        foreach ($howto as $tmp) {
            $temp['index'] = $index;
            $temp['datamodel'] = $tmp->howto_id;
            $temp['howto_step'] = $tmp->howto_step;
            $temp['is_delete'] = $tmp->is_delete;
            array_push($array, $temp);
            $index++;
        }
        echo json_encode($array);
    }

    public function howto_show() {
        $this->lib->check_session();
        $index = 0;
        $users = $this->howto_model->get_all();
        $array = array();
        foreach ($users as $tmp) {

            $temp['index'] = $index;
            $temp['datamodel'] = $tmp->howto_id;
            $temp['howto_step'] = $tmp->howto_step;
            $temp['is_delete'] = $tmp->is_delete;
            array_push($array, $temp);
            $index++;
        }
        echo json_encode($array);
    }

    public function get_array($howto_step = "") {
        $this->lib->check_session();
        $dataData = array(
            'howto_step' => urldecode($howto_step),
            'last_update' => date("y-m-d h:i:s"),
            'last_user_id' => $this->session->userdata("user_id")
        );
        return $dataData;
    }

    public function add() {
        $this->lib->check_session();
        $temp = '0';
        $dataData = $this->get_array($_POST['howto_step']);
        if (isset($_POST['datamodel']))
            $user_id = $_POST['datamodel'];
        $this->form_validation->set_rules('howto_step', 'Nama', 'required');
        $error = '';
        if (isset($_POST['simpan'])) {
            if ($this->form_validation->run() == FALSE) {
                $data['tambah'] = 'tambah';
                $data['error'] = 'error';
                $this->load->view('howto_view', $data);
            } else {
                $this->lib->log("Tambah");
                $temp = $this->howto_model->insert($dataData);
                if ($temp == '1') {
                    $this->session->set_userdata("error", "Simpan Berhasil");
                    redirect('howto');
                } else
                    echo "Insert Gagal";
            }
        }
    }

    public function edit() {
        $this->lib->check_session();
        $this->form_validation->set_rules('howto_step', 'Nama', 'required');
        $error = '';
        if (isset($_POST['ubah'])) {
            if ($this->form_validation->run() == FALSE) {
                $data['ubah'] = 'ubah';
                $data['error'] = 'error';
                $this->load->view('howto_view', $data);
            } else {
                    $dataData = $this->get_array($_POST['howto_step']);

                    $temp = $this->howto_model->update($_POST['datamodel'], $dataData);
                    $this->lib->log("Edit");

                    if ($temp == '1') {
                        $this->session->set_userdata("error", "Edit Berhasil");
                        redirect('howto');
                    } else {
                        $data['ubah'] = 'ubah';
                        $data['error'] = 'error';
                        $this->load->view('howto_view', $data);
                    }
                
            }
        }
    }

    public function delete_permanent() {
        $this->lib->check_session();
         $user_id = $_POST["datamodel"];
         $this->howto_model->delete_permanent($user_id);
        $temp = 1;
        $this->lib->log("Hapus");
        echo $temp;
    }
}
