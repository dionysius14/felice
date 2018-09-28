<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Model template 
        $this->load->model('news_model');
        $this->load->model('data_profile');
		$this->load->library('upload');
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
        $this->session->set_userdata("subtitle", "News");
        $data['error'] = '';
        $data['status'] = '';
        // $this->session->set_userdata("error","");
        $this->lib->log("Lihat");
        $this->load->view('news_view', $data);
    }

    public function show() {
        $this->lib->check_session();
        redirect('news');
    }

    public function news_show_by_id() { //kirim data buat form edit
        $this->lib->check_session();
        $news = $this->news_model->get_by_id($_POST['datamodel']); //data_model = primary key
        $array = array();
        $index = 0;
        foreach ($news as $tmp) {
            $temp['index'] = $index;
            $temp['datamodel'] = $tmp->news_id;
            $temp['news_foto'] = base_url().'/include_front/img/news/'.$tmp->news_foto;
            $temp['news_judul'] = $tmp->news_judul;
            $temp['news_konten'] = $tmp->news_konten;
            $temp['news_date'] = $tmp->news_date;
            $temp['is_delete'] = $tmp->is_delete;
            array_push($array, $temp);
            $index++;
        }
        echo json_encode($array);
    }

    public function news_show() {
        $this->lib->check_session();
        $index = 0;
        $users = $this->news_model->get_all();
        $array = array();
        foreach ($users as $tmp) {

            $temp['index'] = $index;
            $temp['datamodel'] = $tmp->news_id;
            $temp['news_foto'] = $tmp->news_foto;
            $temp['news_judul'] = $tmp->news_judul;
            $temp['news_konten'] = $tmp->news_konten;
            $temp['news_date'] = $tmp->news_date;
            $temp['is_delete'] = $tmp->is_delete;
            array_push($array, $temp);
            $index++;
        }
        echo json_encode($array);
    }

    public function add() {
        $this->lib->check_session();
        $temp = '0';
        if (isset($_POST['datamodel']))
            $user_id = $_POST['datamodel'];
        $this->form_validation->set_rules('news_judul', 'Judul', 'required');
        $this->form_validation->set_rules('news_konten', 'Konten', 'required');
		if (empty($_FILES['userfile']['name']))
		{
			$this->form_validation->set_rules('userfile', 'Foto', 'required');
		}
        $error = '';
        if (isset($_POST['simpan'])) {
            if ($this->form_validation->run() == FALSE) {
                $data['tambah'] = 'tambah';
                $data['error'] = 'error';
                $this->load->view('news_view', $data);
            } else {
              		 $config['upload_path']    = dirname(BASEPATH).'/include_front/img/news/';
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
							copy('include_front/img/news/'.$datafoto['orig_name'], 'include_front/img/news/'.$nm_file);
							$dataData = array(
								'news_foto' =>  $nm_file ,
								'news_judul' => urldecode($_POST['news_judul']),
								'news_konten' => urldecode($_POST['news_konten']),
								'news_date' => urldecode($_POST['news_date'])
							);
							$this->lib->log("Tambah");
							$temp = $this->news_model->insert($dataData);
							if ($temp == '1') {
								$this->session->set_userdata("error", "Simpan Berhasil");
								redirect('news');
							} else
								echo "insert Gagal";
						}  
            }
        }
    }

    public function edit() {
        $this->lib->check_session();
        $this->form_validation->set_rules('news_judul', 'Judul', 'required');
        $this->form_validation->set_rules('news_konten', 'Konten', 'required');
		$error = '';
        if (isset($_POST['ubah'])) {
            if ($this->form_validation->run() == FALSE) {
                $data['ubah'] = 'ubah';
                $data['error'] = 'error';
                $this->load->view('news_view', $data);
            } else {
					$true = true;
					if (!empty($_FILES['userfile']['name']))
					{
						 $config['upload_path']    = dirname(BASEPATH).'/include_front/img/news/';
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
							copy('include_front/img/news/'.$datafoto['orig_name'], 'include_front/img/news/'.$nm_file);
							if (empty($_FILES['userfile']['name']))
							{
								$dataData = array(
									'news_judul' => urldecode($_POST['news_judul']),
									'news_konten' => urldecode($_POST['news_konten']),
									'news_date' => urldecode($_POST['news_date'])
								);
							}
							else
							{
								$this->delete_images($_SERVER['DOCUMENT_ROOT'].'/felice_ci/include_front/img/news',$_POST['datamodel']);
								$dataData = array(
									'news_foto' =>  $nm_file ,
									'news_judul' => urldecode($_POST['news_judul']),
									'news_konten' => urldecode($_POST['news_konten']),
									'news_date' => urldecode($_POST['news_date'])
								);
							}
							
							$temp = $this->news_model->update($_POST['datamodel'], $dataData);
							$this->lib->log("Ubah");
							
							if ($temp == '1') {
								$this->session->set_userdata("error", "Edit Berhasil");
								redirect('news/');
							} else {
								$data['ubah'] = 'ubah';
								$data['error'] = 'error';
								$this->load->view('news_view', $data);
							}
							
						}
		           }
            
        }
    }

	function delete_images($paths,$produk_id)
	{ 
		$news_foto = $this->db->query('SELECT * FROM data_news
					where news_id='.$produk_id.'')->row();
		if($news_foto->news_foto!="")
		{
		 $path = $paths.'/'.$news_foto->news_foto;
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

    public function delete_permanent() {
        $this->lib->check_session();
         $user_id = $_POST["datamodel"];
         $this->news_model->delete_permanent($user_id);
        $temp = 1;
        $this->lib->log("Hapus");
        echo $temp;
    }
}
