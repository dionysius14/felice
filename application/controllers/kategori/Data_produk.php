<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class data_produk extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Model template 
        $this->load->model('produk_model');
        $this->load->model('data_profile');
		// $this->load->helper(array('form', 'url'));
		$this->load->library('upload');
        // Place your model here...
    }

    public function index() {
		$data['akses']='dm_produk';
        $this->session->set_userdata("akses_id", $data['akses']);
        $this->lib->check_session();
        $profil = $this->data_profile->get_all();
        $this->session->set_userdata("title", $profil->profile_title);
        $this->session->set_userdata("subtitle", "Data Produk");
        $data['error'] = '';
        $data['status'] = '';
        $this->lib->log("Lihat");
        $this->load->view('kategori/data_produk_view', $data);
    }

    public function show() {
        $this->lib->check_session();
        redirect('kategori/data_produk/');
    }

    public function produk_show_by_id() { //kirim data buat form edit	
        $this->lib->check_session();
        $produk = $this->produk_model->get_by_id($_POST['datamodel']); //data_model = primary key
        $array = array();
        $index = 0;
        foreach ($produk as $tmp) {

             $temp['index'] = $index;
            $temp['datamodel'] = $tmp->produk_id;
            $temp['kategori_id'] = $tmp->kategori_id;
            $temp['produk_foto'] = base_url().'/include_front/img/produk/'.$tmp->produk_foto;
            $temp['produk_nama'] = $tmp->produk_nama;
            $temp['produk_deskripsi'] = $tmp->produk_deskripsi;
            $temp['is_delete'] = $tmp->is_delete;
            $temp['is_permanent'] = $tmp->is_permanent;
            array_push($array, $temp);
            $index++;
        }
        echo json_encode($array);
    }

    public function produk_show() {
        $this->lib->check_session();
        $index = 0;
        $produk = $this->produk_model->get_all_produk();
        $array = array();
        foreach ($produk as $tmp) {

            $temp['index'] = $index;
            $temp['datamodel'] = $tmp->produk_id;
            $temp['kategori_nama'] = $tmp->kategori_nama;
            $temp['produk_foto'] = $tmp->produk_foto;
            $temp['produk_nama'] = $tmp->produk_nama;
            $temp['produk_deskripsi'] = $tmp->produk_deskripsi;
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
            // 'produk_foto' => urldecode($_POST['produk_foto']),
            'produk_nama' => urldecode($_POST['produk_nama']),
            'produk_deskripsi' => urldecode($_POST['produk_deskripsi']),
            'produk_tgl_input' => date("y-m-d"),
            'produk_ket' => urldecode($_POST['produk_ket']),
            'last_update' => date("y-m-d h:i:s"),
            'last_user_id' => $this->session->userdata("user_id")
        );
        return $dataData;
    }

    public function add() {
        $this->lib->check_session();
        $temp = '0';
        $this->form_validation->set_rules('kategori_id', 'Kategori', 'check_selected');
        $this->form_validation->set_rules('produk_nama', 'Nama Produk', 'required|max_length[255]');
        $this->form_validation->set_rules('produk_deskripsi', 'Deskripsi Produk', 'required|max_length[255]');
        $this->form_validation->set_rules('produk_ket', 'Nama Produk', 'max_length[255]');
		if (empty($_FILES['userfile']['name']))
		{
			$this->form_validation->set_rules('userfile', 'Foto', 'required');
		}
        $error = '';
        if (isset($_POST['simpan'])) {
            if ($this->form_validation->run() == FALSE) {
                $data['tambah'] = 'tambah';
                $data['error'] = 'error';
                $this->load->view('kategori/data_produk_view', $data);
            } else {
					
						 $config['upload_path']    = dirname(BASEPATH).'/include_front/img/produk/';
						 $config['allowed_types']  = 'gif|jpg|png|jpeg';
						 $config['max_size']       = '2000';
						 $config['max_width']      = '2000';
						 $config['max_height']     = '2000';
						 // $config['file_name']      = 'gambar-'.trim(str_replace(" ","",date('dmYHis')));
						 // $file_name     = 'gambar-'.trim(str_replace(" ","",date('dmYHis')));
						 
						 $this->load->library('upload');
						$this->upload->initialize($config);
						if (!$this->upload->do_upload("userfile")) {
							 echo "Error";
						}else{
							$datafoto=$this->upload->data();
							$nm_file = trim(str_replace(" ","",date('dmYHis'))).$datafoto['orig_name'];
							copy('include_front/img/produk/'.$datafoto['orig_name'], 'include_front/img/produk/'.$nm_file);
							$dataData = array(
								'kategori_id' => urldecode($_POST['kategori_id']),
								'produk_foto' =>  $nm_file ,
								'produk_nama' => urldecode($_POST['produk_nama']),
								'produk_deskripsi' => urldecode($_POST['produk_deskripsi']),
								'produk_tgl_input' => date("y-m-d"),
								'produk_ket' => urldecode($_POST['produk_ket']),
								'last_update' => date("y-m-d h:i:s"),
								'last_user_id' => $this->session->userdata("user_id")
							);
							$this->lib->log("Tambah");
							$temp = $this->produk_model->insert($dataData);
							if ($temp == '1') {
								$this->session->set_userdata("error", "Simpan Berhasil");
								redirect('kategori/data_produk/');
							} else
								echo "insert Gagal";
						}    
							  
					}
						
            
        }
    }

    public function edit() {
        $this->lib->check_session();
        $this->form_validation->set_rules('kategori_id', 'Kategori', 'check_selected');
        $this->form_validation->set_rules('produk_nama', 'Nama Produk', 'required|max_length[255]');
        $this->form_validation->set_rules('produk_deskripsi', 'Deskripsi Produk', 'required|max_length[255]');
        $this->form_validation->set_rules('produk_ket', 'Nama Produk', 'max_length[255]');
		// if (empty($_FILES['userfile']['name']))
		// {
			// $this->form_validation->set_rules('userfile', 'Foto', 'required');
		// }
		$error = '';
        if (isset($_POST['ubah'])) {
            if ($this->form_validation->run() == FALSE) {
                $data['ubah'] = 'ubah';
                $data['error'] = 'error';
                $this->load->view('kategori/data_produk_view', $data);
            } else {
					$true = true;
					if (!empty($_FILES['userfile']['name']))
					{
						 $config['upload_path']    = dirname(BASEPATH).'/include_front/img/produk/';
						 $config['allowed_types']  = 'gif|jpg|png|jpeg';
						 $config['max_size']       = '2000';
						 $config['max_width']      = '2000';
						 $config['max_height']     = '2000';
						 // $config['file_name']      = 'gambar-'.trim(str_replace(" ","",date('dmYHis')));
						 // $file_name     = 'gambar-'.trim(str_replace(" ","",date('dmYHis')));
						 
						$this->load->library('upload');
						$this->upload->initialize($config);
						if (!$this->upload->do_upload("userfile")) {
							 //echo "Error";
							 $true = false;
						}
					}
					if ($true){
							$datafoto=$this->upload->data();
							$nm_file = trim(str_replace(" ","",date('dmYHis'))).$datafoto['orig_name'];
							copy('include_front/img/produk/'.$datafoto['orig_name'], 'include_front/img/produk/'.$nm_file);
							if (empty($_FILES['userfile']['name']))
							{
								$dataData = array(
													'kategori_id' => urldecode($_POST['kategori_id']),
													'produk_nama' => urldecode($_POST['produk_nama']),
													'produk_deskripsi' => urldecode($_POST['produk_deskripsi']),
													'produk_tgl_input' => date("y-m-d"),
													// 'produk_ket' => urldecode($_POST['produk_ket']),
													'last_update' => date("y-m-d h:i:s"),
													'last_user_id' => $this->session->userdata("user_id")
												);
							}
							else
							{
								$this->delete_images($_SERVER['DOCUMENT_ROOT'].'/felice_ci/include_front/img/produk',$_POST['datamodel']);
								$dataData = array(
								'kategori_id' => urldecode($_POST['kategori_id']),
								'produk_foto' =>  $nm_file ,
								'produk_nama' => urldecode($_POST['produk_nama']),
								'produk_deskripsi' => urldecode($_POST['produk_deskripsi']),
								'produk_tgl_input' => date("y-m-d"),
								// 'produk_ket' => urldecode($_POST['produk_ket']),
								'last_update' => date("y-m-d h:i:s"),
								'last_user_id' => $this->session->userdata("user_id")
							);
							}
							
							// echo $temp;
							// if ($temp == '1')
							$temp = $this->produk_model->update($_POST['datamodel'], $dataData);
							$this->lib->log("Ubah");
							
							if ($temp == '1') {
								$this->session->set_userdata("error", "Edit Berhasil");
								redirect('kategori/data_produk/');
							} else {
								$data['ubah'] = 'ubah';
								$data['error'] = 'error';
								$this->load->view('kategori/data_produk_view', $data);
							}
							
						}
		           }
            
        }
    }

	function delete_images($paths,$produk_id)
	{ 
		$data_produk = $this->db->query('SELECT * FROM data_produk
					where produk_id='.$produk_id.'')->row();
		if($data_produk->produk_foto!="")
		{
		 $path = $paths.'/'.$data_produk->produk_foto;
				$files = glob($path . '*'); // get all file names
				foreach ($files as $file): { // iterate files
						if (is_file($file))
							unlink($file); // delete file
					}
				endforeach;
		}
		echo $path;
		return "1";
	}
	
    public function delete() {
        $this->lib->check_session();
        $produk_id = $_POST["datamodel"];
        $temp = "0";
        $data['permanent'] = $this->lib->cek_permanent("data_produk", "produk_id", $_POST['datamodel']);
        if ($data['permanent']->num_rows() == 1) {
            $temp = "2";
        } else {
            $this->lib->log("Hapus");
            $this->produk_model->delete_semu($produk_id);
            $temp = '1';
        }
        echo $temp;
    }
	function do_upload()
	{
		$config['upload_path'] = './include_front/img/produk/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100000';
		$config['max_width']  = '10240';
		$config['max_height']  = '7680';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('data_produk_view', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			//print_r($this->upload->data());
			$datafoto=$this->upload->data();
			$nm_file = time().$datafoto['orig_name'];
			copy('include_front/img/produk/'.$datafoto['orig_name'], 'include_front/img/produk/'.$nm_file);
			//echo $datafoto['orig_name'];
			//$this->load->view('upload_success', $data);
		}
	}

}
