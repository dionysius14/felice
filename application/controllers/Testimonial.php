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
        redirect('testimonial');
    }

    public function testimonial_show_by_id() { //kirim data buat form edit
        $this->lib->check_session();
        $testimonial = $this->testimonial_model->get_by_id($_POST['datamodel']); //data_model = primary key
        $array = array();
        $index = 0;
        foreach ($testimonial as $tmp) {
            $temp['index'] = $index;
            $temp['datamodel'] = $tmp->testimonial_id;
            $temp['testimonial_foto'] = base_url().'/include_front/img/testimonial/'.$tmp->testimonial_foto;
            // $temp['testimonial_nama'] = $tmp->testimonial_nama;
            // $temp['testimonial_ket'] = $tmp->testimonial_ket;
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
            $temp['testimonial_foto'] = $tmp->testimonial_foto;
            // $temp['testimonial_nama'] = $tmp->testimonial_nama;
            // $temp['testimonial_ket'] = $tmp->testimonial_ket;
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
              		 $config['upload_path']    = dirname(BASEPATH).'/include_front/img/testimonial/';
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
							copy('include_front/img/testimonial/'.$datafoto['orig_name'], 'include_front/img/testimonial/'.$nm_file);
							$dataData = array(
								'testimonial_foto' =>  $nm_file 
								// 'testimonial_nama' => urldecode($_POST['testimonial_nama']),
								// 'testimonial_ket' => urldecode($_POST['testimonial_ket'])
							);
							$this->lib->log("Tambah");
							$temp = $this->testimonial_model->insert($dataData);
							if ($temp == '1') {
								$this->session->set_userdata("error", "Simpan Berhasil");
								redirect('testimonial');
							} else
								echo "insert Gagal";
						}  
        }
    }
	function delete_images($paths,$produk_id)
	{ 
		$testimonial_foto = $this->db->query('SELECT * FROM testimonial
					where testimonial_id='.$produk_id.'')->row();
		if($testimonial_foto->testimonial_foto!="")
		{
		 $path = $paths.'/'.$testimonial_foto->testimonial_foto;
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
						 $config['upload_path']    = dirname(BASEPATH).'/include_front/img/testimonial/';
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
							copy('include_front/img/testimonial/'.$datafoto['orig_name'], 'include_front/img/testimonial/'.$nm_file);
							if (empty($_FILES['userfile']['name']))
							{
								// $dataData = array(
									// 'testimonial_nama' => urldecode($_POST['testimonial_nama']),
									// 'testimonial_ket' => urldecode($_POST['testimonial_ket'])
								// );
							}
							else
							{
								$this->delete_images($_SERVER['DOCUMENT_ROOT'].'/felice_ci/include_front/img/testimonial',$_POST['datamodel']);
								$dataData = array(
									'testimonial_foto' =>  $nm_file ,
									// 'testimonial_nama' => urldecode($_POST['testimonial_nama']),
									// 'testimonial_ket' => urldecode($_POST['testimonial_ket'])
								);
							}
							
							$temp = $this->testimonial_model->update($_POST['datamodel'], $dataData);
							$this->lib->log("Ubah");
							
							if ($temp == '1') {
								$this->session->set_userdata("error", "Edit Berhasil");
								redirect('testimonial');
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
