<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class data_kontak extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Model template 
        $this->load->model('kontak_model');
        $this->load->model('data_profile');
        // Place your model here...
    }

    public function index() {
		$data['akses']='dm_kontak';
        $this->session->set_userdata("akses_id", $data['akses']);
        $this->lib->check_session();
        $profil = $this->data_profile->get_all();
        $this->session->set_userdata("title", $profil->profile_title);
        $this->session->set_userdata("subtitle", "Data Pesan");
        $data['error'] = '';
        $data['status'] = '';
        $this->lib->log("Lihat");
        $this->load->view('data_kontak_view', $data);
    }

    public function show() {
        $this->lib->check_session();
        redirect('data_kontak/');
    }

    // public function produk_show_by_id() { //kirim data buat form edit	
        // $this->lib->check_session();
        // $produk = $this->kontak_model->get_by_id($_POST['datamodel']); //data_model = primary key
        // $array = array();
        // $index = 0;
        // foreach ($produk as $tmp) {

             // $temp['index'] = $index;
            // $temp['datamodel'] = $tmp->kontak_id;
            // $temp['kontak_nama'] = $tmp->kontak_nama;
            // $temp['kontak_telepon'] = $tmp->kontak_telepon;
            // $temp['kontak_email'] = $tmp->kontak_email;
            // $temp['kontak_pesan'] = $tmp->kontak_pesan;
            // $temp['is_delete'] = $tmp->is_delete;
            // $temp['is_permanent'] = $tmp->is_permanent;
            // array_push($array, $temp);
            // $index++;
        // }
        // echo json_encode($array);
    // }

    public function kontak_show() {
        $this->lib->check_session();
        $index = 0;
        $kontak = $this->kontak_model->get_all_kontak();
        $array = array();
        foreach ($kontak as $tmp) {

            $temp['index'] = $index;
            $temp['datamodel'] = $tmp->kontak_id;
            $temp['kontak_nama'] = $tmp->kontak_nama;
            $temp['kontak_telepon'] = $tmp->kontak_telepon;
            $temp['kontak_email'] = $tmp->kontak_email;
            $temp['kontak_pesan'] = $tmp->kontak_pesan;
            $temp['is_delete'] = $tmp->is_delete;
            $temp['is_permanent'] = $tmp->is_permanent;
            array_push($array, $temp);
            $index++;
        }
        echo json_encode($array);
    }

    // public function get_array() {
        // $this->lib->check_session();
        // $dataData = array(
            // 'kategori_id' => urldecode($_POST['kategori_id']),
            // 'produk_foto' => urldecode($_POST['produk_foto']),
            // 'produk_nama' => urldecode($_POST['produk_nama']),
            // 'produk_deskripsi' => urldecode($_POST['produk_deskripsi']),
            // 'produk_tgl_input' => date("y-m-d"),
            // 'produk_ket' => urldecode($_POST['produk_ket']),
            // 'last_update' => date("y-m-d h:i:s"),
            // 'last_user_id' => $this->session->userdata("user_id")
        // );
        // return $dataData;
    // }

    // public function add() {
        // $this->lib->check_session();
        // $temp = '0';
        // $this->form_validation->set_rules('kategori_id', 'Kategori', 'check_selected');
        // $this->form_validation->set_rules('produk_nama', 'Nama Produk', 'required|max_length[255]');
        // $this->form_validation->set_rules('produk_deskripsi', 'Deskripsi Produk', 'required|max_length[255]');
        // $this->form_validation->set_rules('produk_ket', 'Nama Produk', 'max_length[255]');
        // $error = '';
        // if (isset($_POST['simpan'])) {
            // if ($this->form_validation->run() == FALSE) {
                // $data['tambah'] = 'tambah';
                // $data['error'] = 'error';
                // $this->load->view('kategori/data_produk_view', $data);
            // } else {
				 // $dataData = $this->get_array();
                // $this->lib->log("Tambah");
                // $temp = $this->produk_model->insert($dataData);
                // if ($temp == '1') {
                    // $this->session->set_userdata("error", "Simpan Berhasil");
                    // redirect('kategori/data_produk/');
                // } else
                    // echo "insert Gagal";
            // }
        // }
    // }

    // public function edit() {
        // $this->lib->check_session();
         // $this->form_validation->set_rules('kategori_id', 'Kategori', 'check_selected');
        // $this->form_validation->set_rules('produk_nama', 'Nama Produk', 'required|max_length[255]');
        // $this->form_validation->set_rules('produk_deskripsi', 'Deskripsi Produk', 'required|max_length[255]');
        // $this->form_validation->set_rules('produk_ket', 'Nama Produk', 'max_length[255]');
		// $error = '';
        // if (isset($_POST['ubah'])) {
            // if ($this->form_validation->run() == FALSE) {
                // $data['ubah'] = 'ubah';
                // $data['error'] = 'error';
                // $this->load->view('kategori/data_produk_view', $data);
            // } else {
					 // $dataData = $this->get_array();
                    // $temp = $this->produk_model->update($_POST['datamodel'], $dataData);
                    // $this->lib->log("Ubah");

                    // if ($temp == '1') {
                        // $this->session->set_userdata("error", "Edit Berhasil");
                        // redirect('kategori/data_produk/');
                    // } else {
                        // $data['ubah'] = 'ubah';
                        // $data['error'] = 'error';
                        // $this->load->view('kategori/data_produk_view', $data);
                    // }
                // }
            
        // }
    // }

    public function delete() {
        $this->lib->check_session();
        $kontak_id = $_POST["datamodel"];
        $temp = "0";
        $data['permanent'] = $this->lib->cek_permanent("kontak", "kontak_id", $_POST['datamodel']);
        if ($data['permanent']->num_rows() == 1) {
            $temp = "2";
        } else {
            $this->lib->log("Hapus");
            $this->kontak_model->delete_semu($kontak_id);
            $temp = '1';
        }
        echo $temp;
    }

}
