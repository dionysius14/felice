<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class profile extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Model template  
		$this->load->model('data_profile');
        // Place your model here...
    }

    public function index() {
		$data['akses']='pg_profile';
        $this->session->set_userdata("akses_id", $data['akses']);
        $this->lib->check_session();
		$profil = $this->data_profile->get_all(); 
		$this->session->set_userdata("title",$profil->profile_title);
		$this->session->set_userdata("subtitle","Data Profile");
		
		$data['error']=	'';
		$data['status'] = '';
		$data['profile'] = $profil;
		// $this->session->set_userdata("error","");
        $this->load->view('pengaturan/profile_view',$data);
    }
	
    public function show() {
		redirect('pengaturan/profile/'); 
	}

    public function profile_show_by_id() { //kirim data buat form edit
		
		$profile = $this->data_profile->get_by_id($_POST['datamodel']); //data_model = primary key
		 $array = array();
		$index=0;
        foreach ($profile as $tmp) {

            $temp['index'] = $index;
            $temp['datamodel'] = $tmp->profile_id;
            $temp['profile_nama'] = $tmp->profile_nama;
            $temp['profile_keterangan'] = $tmp->profile_keterangan;
            $temp['is_delete'] = $tmp->is_delete; 
            array_push($array, $temp);
            $index++;
        }
        echo json_encode($array);
	}
    
	 public function edit() { //pengaturan/profile_view 
		$pass_lama=$this->db->query('select * from setting_profile where profile_id="'.$_POST['datamodel'].'"')->row(); 
        
		 $dataData = array(
			'profile_logo' => $this->session->userdata("image_upload"),
			'profile_title' => $_POST['profile_title'],
			'profile_alamat' => $_POST['profile_alamat'],
			'profile_telepon' => $_POST['profile_telepon'],
			'profile_fax' => $_POST['profile_fax'],
			'last_update' => date("y-m-d h:i:s"),
			'last_user_id' => $this->session->userdata("user_id")
		);
		  
		$this->db->where('profile_id', $_POST['datamodel']);
		$temp=$this->db->update('setting_profile', $dataData);  
		
		 if($temp=='1')
		 {
			$this->session->set_userdata("error","Ubah data berhasil");
			redirect('pengaturan/profile/'); 
		 }
		 else
		 {   
			$data['ubah'] = 'ubah';  
			$data['error'] = 'error';   
			$this->load->view('pengaturan/profile_view',$data);
		  }   
    }

	public function upload_image()
	{ 
		$produk_nama="logo";
        $milliseconds = round(microtime(true) * 1000); 
		
		$extension=$_FILES['userfile']['type'];
		$extend=str_replace("jpeg","jpg",$extension);
		$ext=str_replace("image/","",$extend);
       /* $dataData = array(
            'gambar' => 'product_' . $milliseconds . '.' .$ext,
        );*/
		$path='./include/img/';
		
		$config['upload_path'] = $path;  
		$config['file_name'] = 'logo'; 
		$config['allowed_types'] = 'jpg|png';
		$config['overwrite'] = TRUE;
		$this->upload->initialize($config);
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload()) {
			$this->post['warning'] = 'gagal';
			$this->post['success'] = false;
			$this->post['error'] = $this->upload->display_errors();
			$this->post['tambah'] = 'tambah'; 
			echo '0';
		} else {   
 
			$file_path='logo.'.$ext;
			
			$this->session->set_userdata("image_upload",$file_path); 
			echo "1"; 
		}
            
	}
	
}
