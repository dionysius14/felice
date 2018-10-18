<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Data_produk_detail extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Model template 
        $this->load->model('produk_model');
        $this->load->model('data_profile');
		$this->load->library('upload');
        // Place your model here...
    }

    public function index() {
		$data['akses']='dm_produk';
        $this->session->set_userdata("akses_id", $data['akses']);
        $this->lib->check_session();
        $profil = $this->data_profile->get_all();
        $this->session->set_userdata("title", $profil->profile_title);
        $this->session->set_userdata("subtitle", "Data Produk Detil");
        $data['error'] = '';
        $data['status'] = '';
        $this->lib->log("Lihat");
        $this->load->view('kategori/data_produk_detail_view', $data);
    }

    public function show() {
        $this->lib->check_session();
        redirect('kategori/data_produk_detail/');
    }

    public function produk_show() { //kirim data buat form edit	
        $this->lib->check_session();
        $produk = $this->produk_model->get_by_id_detail($this->session->userdata('produk_id')); //data_model = primary key
        $array = array();
        $index = 0;
        foreach ($produk as $tmp) {

             $temp['index'] = $index;
            $temp['datamodel'] = $tmp->produk_detail_id;
            $temp['foto'] = $tmp->foto;
            $temp['is_delete'] = $tmp->is_delete;
            $temp['is_permanent'] = $tmp->is_permanent;
            array_push($array, $temp);
            $index++;
        }
        echo json_encode($array);
    }
	public function go_to_detail() {
        $this->lib->check_session();
        $this->session->set_userdata("produk_id", $_POST["datamodel"]);
    }

    public function add() {
        $this->lib->check_session();
        $temp = '0';
        $error = '';
        if (isset($_POST['simpan'])) {
						 $config['upload_path']    = dirname(BASEPATH).'/include_front/img/produk/detail/';
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
							copy('include_front/img/produk/detail/'.$datafoto['orig_name'], 'include_front/img/produk/detail/'.$nm_file);
							$dataData = array(
								'produk_id' => $this->session->userdata('produk_id'),
								'foto' =>  $nm_file ,
								'last_update' => date("y-m-d h:i:s"),
								'last_user_id' => $this->session->userdata("user_id")
							);
							$this->lib->log("Tambah");
							$temp = $this->produk_model->insert_detail($dataData);
							if ($temp == '1') {
								$this->session->set_userdata("error", "Simpan Berhasil");
								redirect('kategori/data_produk_detail/');
							} else
								echo "insert Gagal";
						}    
						
        }
    }


	function delete_images($paths,$produk_detail_id)
	{ 
		$foto = $this->db->query('SELECT * FROM data_produk_detail
					where produk_detail_id='.$produk_detail_id.'')->row();
		if($foto->foto!="")
		{
		 $path = $paths.'/'.$foto->foto;
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
        $produk_detail_id = $_POST["datamodel"];
        $temp = "0";
        $data['permanent'] = $this->lib->cek_permanent("data_produk_detail", "produk_detail_id", $_POST['datamodel']);
        if ($data['permanent']->num_rows() == 1) {
            $temp = "2";
        } else {
            $this->lib->log("Hapus");
            $this->produk_model->delete_semu_detail($produk_detail_id);
            $temp = '1';
        }
        echo $temp;
    }

}
