<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class kategori extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Model template 
        $this->load->model('kategori_model');
        $this->load->model('data_profile');
        // Place your model here...
    }

    public function index() {
		$data['akses']='dm_produk_kategori';
        $this->session->set_userdata("akses_id", $data['akses']);
        $this->lib->check_session();
        $profil = $this->data_profile->get_all();
        $this->session->set_userdata("title", $profil->profile_title);
        $this->session->set_userdata("subtitle", "Data Kategori");
        $data['error'] = '';
        $data['status'] = '';
        $this->lib->log("Lihat");
        $this->load->view('kategori/data_kategori_view', $data);
    }

    public function show() {
        $this->lib->check_session();
        redirect('kategori/kategori');
    }

    public function kategori_show_by_id() { //kirim data buat form edit	
        $this->lib->check_session();
        $kategori = $this->kategori_model->get_by_id($_POST['datamodel']); //data_model = primary key
        $array = array();
        $index = 0;
        foreach ($kategori as $tmp) {

            $temp['index'] = $index;
            $temp['datamodel'] = $tmp->kategori_id;
            $temp['kategori_nama'] = $tmp->kategori_nama;
            $temp['kategori_ket'] = $tmp->kategori_ket;
            $temp['is_delete'] = $tmp->is_delete;
            $temp['is_permanent'] = $tmp->is_permanent;
            array_push($array, $temp);
            $index++;
        }
        echo json_encode($array);
    }

    public function kategori_show() {
        $this->lib->check_session();
        $index = 0;
        $kategori = $this->kategori_model->get_all_kategori();
        $array = array();
        foreach ($kategori as $tmp) {

            $temp['index'] = $index;
            $temp['datamodel'] = $tmp->kategori_id;
            $temp['kategori_nama'] = $tmp->kategori_nama;
            $temp['kategori_ket'] = $tmp->kategori_ket;
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
            'kategori_id' => urldecode($_POST['kategori_id']),
            'kategori_nama' => urldecode($_POST['kategori_nama']),
            'kategori_ket' => urldecode($_POST['kategori_ket']),
            
            
        );
        return $dataData;
    }

	
    public function add() {
        $this->lib->check_session();
        $temp = '0';
        $this->form_validation->set_rules('kategori_id', 'Kategori Id', 'check_selected');
        $this->form_validation->set_rules('kategori_nama', 'Kategori', 'required|max_length[255]');
       
        $this->form_validation->set_rules('produk_ket', 'Keterangan', 'max_length[255]');
        $error = '';
        if (isset($_POST['simpan'])) {
            if ($this->form_validation->run() == FALSE) {
                $data['tambah'] = 'tambah';
                $data['error'] = 'error';
                $this->load->view('kategori/Data_kategori_view', $data);
            } else {
				 $dataData = $this->get_array();
                $this->lib->log("Tambah");
                $temp = $this->kategori_model->insert($dataData);
                if ($temp == '1') {
                    $this->session->set_userdata("error", "Simpan Berhasil");
                    redirect('kategori/kategori');
                } else
                    echo "insert Gagal";
            }
        }
    }

    public function edit() {
        $this->lib->check_session();
        $error = '';
        if (isset($_POST['ubah'])) {
                    $dataData = array(
						'kategori_ket' => $_POST['kategori_ket'],
						'last_update' => date("y-m-d h:i:s"),
						'last_user_id' => $this->session->userdata("user_id")
					);
                    $temp = $this->kategori_model->update($_POST['datamodel'], $dataData);
                    $this->lib->log("Ubah");

                    if ($temp == '1') {
                        $this->session->set_userdata("error", "Edit Berhasil");
                        redirect('kategori/kategori');
                    } else {
                        $data['ubah'] = 'ubah';
                        $data['error'] = 'error';
                        $this->load->view('kategori/data_kategori_view', $data);
                    }
            }
        }

    // public function delete() {
        // $this->lib->check_session();
        // $produk_id = $_POST["datamodel"];
        // $temp = "0";
        // $data['permanent'] = $this->lib->cek_permanent("data_produk", "produk_id", $_POST['datamodel']);
        // if ($data['permanent']->num_rows() == 1) {
            // $temp = "2";
        // } else {
            // $this->lib->log("Hapus");
            // $this->kategori_model->delete_semu($produk_id);
            // $temp = '1';
        // }
        // echo $temp;
    // }

}
