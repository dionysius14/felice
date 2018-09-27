<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Model template 
        $this->load->model('faq_model');
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
        $this->session->set_userdata("subtitle", "Faq");
        $data['error'] = '';
        $data['status'] = '';
        // $this->session->set_userdata("error","");
        $this->lib->log("Lihat");
        $this->load->view('faq_view', $data);
    }

    public function show() {
        $this->lib->check_session();
        redirect('faq/');
    }

    public function faq_show_by_id() { //kirim data buat form edit
        $this->lib->check_session();
        $faq = $this->faq_model->get_by_id($_POST['datamodel']); //data_model = primary key
        $array = array();
        $index = 0;
        foreach ($faq as $tmp) {
            $temp['index'] = $index;
            $temp['datamodel'] = $tmp->faq_id;
            $temp['faq_ask'] = $tmp->faq_ask;
            $temp['faq_answer'] = $tmp->faq_answer;
            $temp['is_delete'] = $tmp->is_delete;
            array_push($array, $temp);
            $index++;
        }
        echo json_encode($array);
    }

    public function faq_show() {
        $this->lib->check_session();
        $index = 0;
        $users = $this->faq_model->get_all();
        $array = array();
        foreach ($users as $tmp) {

            $temp['index'] = $index;
            $temp['datamodel'] = $tmp->faq_id;
            $temp['faq_ask'] = $tmp->faq_ask;
            $temp['faq_answer'] = $tmp->faq_answer;
            $temp['is_delete'] = $tmp->is_delete;
            array_push($array, $temp);
            $index++;
        }
        echo json_encode($array);
    }

    public function get_array($faq_ask = "",$faq_answer = "") {
        $this->lib->check_session();
        $dataData = array(
            'faq_ask' => urldecode($faq_ask),
            'faq_answer' => urldecode($faq_answer),
            'last_update' => date("y-m-d h:i:s"),
            'last_user_id' => $this->session->userdata("user_id")
        );
        return $dataData;
    }

    public function add() {
        $this->lib->check_session();
        $temp = '0';
        $dataData = $this->get_array($_POST['faq_ask'],$_POST['faq_answer']);
        if (isset($_POST['datamodel']))
            $user_id = $_POST['datamodel'];
        $this->form_validation->set_rules('faq_ask', 'Nama', 'required');
        $this->form_validation->set_rules('faq_answer', 'Keterangan', 'required');
        $error = '';
        if (isset($_POST['simpan'])) {
            if ($this->form_validation->run() == FALSE) {
                $data['tambah'] = 'tambah';
                $data['error'] = 'error';
                $this->load->view('faq_view', $data);
            } else {
                $this->lib->log("Tambah");
                $temp = $this->faq_model->insert($dataData);
                if ($temp == '1') {
                    $this->session->set_userdata("error", "Simpan Berhasil");
                    redirect('faq/');
                } else
                    echo "Insert Gagal";
            }
        }
    }

    public function edit() {
        $this->lib->check_session();
        $this->form_validation->set_rules('faq_ask', 'Nama', 'required');
        $this->form_validation->set_rules('faq_answer', 'Keterangan', 'required');
        $error = '';
        if (isset($_POST['ubah'])) {
            if ($this->form_validation->run() == FALSE) {
                $data['ubah'] = 'ubah';
                $data['error'] = 'error';
                $this->load->view('faq_view', $data);
            } else {
                    $dataData = $this->get_array($_POST['faq_ask'],$_POST['faq_answer']);

                    $temp = $this->faq_model->update($_POST['datamodel'], $dataData);
                    $this->lib->log("Edit");

                    if ($temp == '1') {
                        $this->session->set_userdata("error", "Edit Berhasil");
                        redirect('faq/');
                    } else {
                        $data['ubah'] = 'ubah';
                        $data['error'] = 'error';
                        $this->load->view('faq_view', $data);
                    }
                
            }
        }
    }

    public function delete_permanent() {
        $this->lib->check_session();
         $user_id = $_POST["datamodel"];
         $this->faq_model->delete_permanent($user_id);
        $temp = 1;
        $this->lib->log("Hapus");
        echo $temp;
    }
}
