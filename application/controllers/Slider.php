<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class slider extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Model template 
        $this->load->model('slider_model');
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
        $this->session->set_userdata("subtitle", "slider");
        $data['error'] = '';
        $data['status'] = '';
        // $this->session->set_userdata("error","");
        $this->lib->log("Lihat");
        $this->load->view('slider_view', $data);
    }

    public function show() {
        $this->lib->check_session();
        redirect('slider');
    }

    public function slider_show_by_id() { //kirim data buat form edit
        $this->lib->check_session();
        $slider = $this->slider_model->get_by_id($_POST['datamodel']); //data_model = primary key
        $array = array();
        $index = 0;
        foreach ($slider as $tmp) {
            $temp['index'] = $index;
            $temp['datamodel'] = $tmp->slider_id;
            $temp['foto'] = base_url().'/include_front/img/slider/'.$tmp->foto;
            $temp['is_delete'] = $tmp->is_delete;
            array_push($array, $temp);
            $index++;
        }
        echo json_encode($array);
    }

    public function slider_show() {
        $this->lib->check_session();
        $index = 0;
        $users = $this->slider_model->get_all();
        $array = array();
        foreach ($users as $tmp) {

            $temp['index'] = $index;
            $temp['datamodel'] = $tmp->slider_id;
            $temp['foto'] = $tmp->foto;
            $temp['is_delete'] = $tmp->is_delete;
            array_push($array, $temp);
            $index++;
        }
        echo json_encode($array);
    }

    public function add() {
        $this->lib->check_session();
        $temp = '0';
        $error = '';
        if (isset($_POST['simpan'])) {
              		 $config['upload_path']    = dirname(BASEPATH).'/include_front/img/slider/';
						 $config['allowed_types']  = 'gif|jpg|png|jpeg';
						 $config['max_size']       = '2000';
						 $config['max_width']      = '2000';
						 $config['max_height']     = '2000';
						 
						 $this->load->library('upload');
						$this->upload->initialize($config);
						if (!$this->upload->do_upload("userfile")) {
							 echo "Error";
						}else{
							$datafoto=$this->upload->data();
							$nm_file = trim(str_replace(" ","",date('dmYHis'))).$datafoto['orig_name'];
							copy('include_front/img/slider/'.$datafoto['orig_name'], 'include_front/img/slider/'.$nm_file);
							$dataData = array(
								'foto' =>  $nm_file 
							);
							$this->lib->log("Tambah");
							$temp = $this->slider_model->insert($dataData);
							if ($temp == '1') {
								$this->session->set_userdata("error", "Simpan Berhasil");
								redirect('slider');
							} else
								echo "insert Gagal";
						}  
        }
    }
	function delete_images($paths,$produk_id)
	{ 
		$slider_foto = $this->db->query('SELECT * FROM slider
					where slider_id='.$produk_id.'')->row();
		if($slider_foto->foto!="")
		{
		 $path = $paths.'/'.$slider_foto->foto;
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

    public function edit() {
        $this->lib->check_session();
		$error = '';
        if (isset($_POST['ubah'])) {
					$true = true;
					if (!empty($_FILES['userfile']['name']))
					{
						 $config['upload_path']    = dirname(BASEPATH).'/include_front/img/slider/';
						 $config['allowed_types']  = 'gif|jpg|png|jpeg';
						 $config['max_size']       = '2000';
						 $config['max_width']      = '2000';
						 $config['max_height']     = '2000';
						 
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
							copy('include_front/img/slider/'.$datafoto['orig_name'], 'include_front/img/slider/'.$nm_file);
							if (!empty($_FILES['userfile']['name']))
							{
								$this->delete_images($_SERVER['DOCUMENT_ROOT'].'/felice_ci/include_front/img/slider',$_POST['datamodel']);
								$dataData = array(
									'foto' =>  $nm_file 
								);
							}
							
							$temp = $this->slider_model->update($_POST['datamodel'], $dataData);
							$this->lib->log("Ubah");
							
							if ($temp == '1') {
								$this->session->set_userdata("error", "Edit Berhasil");
								redirect('slider');
							} else {
								$data['ubah'] = 'ubah';
								$data['error'] = 'error';
								$this->load->view('slider_view', $data);
							}
							
						}
		           
            
        }
    }

    public function delete_permanent() {
        $this->lib->check_session();
         $user_id = $_POST["datamodel"];
         $this->slider_model->delete_permanent($user_id);
        $temp = 1;
        $this->lib->log("Hapus");
        echo $temp;
    }
}
