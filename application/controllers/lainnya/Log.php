<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class log extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Model template 
		$this->load->model('data_log');
		$this->load->model('data_profile');
        // Place your model here...
    }

    public function index() {
        $this->lib->check_session();
		$profil = $this->data_profile->get_all(); 
		$this->session->set_userdata("title",$profil->profile_title);
		$this->session->set_userdata("subtitle","Data log");
		
		$data['error']=	'';
		$data['status'] = '';
		// $this->session->set_userdata("error","");
        $this->load->view('lainnya/log_view',$data);
    }
	
    public function show() {
		redirect('lainnya/log/'); 
	}

    public function log_show_by_id() { //kirim data buat form edit
		
		$log = $this->data_log->get_by_id($_POST['datamodel']); //data_model = primary key
		 $array = array();
		$index=0;
        foreach ($log as $tmp) {

            $temp['index'] = $index;
            $temp['datamodel'] = $tmp->log_id;
            $temp['log_tanggal'] = date('d M Y',strtotime($tmp->log_tanggal)); 
            // $temp['log_tanggal_cari'] = date('d/m/Y',$tmp->log_tanggal);
            $temp['log_action'] = $tmp->log_action;
            $temp['log_menu'] = $tmp->log_menu;
            $temp['log_keterangan'] = $tmp->log_keterangan;
            $temp['is_delete'] = $tmp->is_delete; 
            array_push($array, $temp);
            $index++;
        }
        echo json_encode($array);
	}
    
	public function log_show() { 

		$index=0;
		$log = $this->data_log->get_all();
		 $array = array();
        foreach ($log as $tmp) {

            $temp['index'] = $index;
            $temp['datamodel'] = $tmp->log_id; 
            $temp['log_tanggal'] = date('d M Y',strtotime($tmp->log_tanggal));
            $temp['log_tanggal_cari'] = date('d M Y',strtotime($tmp->log_tanggal));
			$temp['log_action'] = $tmp->log_action;
            $temp['log_menu'] = $tmp->log_menu;
            $temp['log_keterangan'] = $tmp->log_keterangan;
            $temp['is_delete'] = $tmp->is_delete; 
            array_push($array, $temp);
            $index++;
        }


        echo json_encode($array);
    } 
	
    public function get_array($log_action = "",$log_menu = "",$log_keterangan = "") {
        $dataData = array(
            'log_action' => urldecode($log_action),
            'log_menu' => urldecode($log_menu),
            'log_keterangan' => urldecode($log_keterangan),
            'last_update' => date("y-m-d h:i:s"),
            'last_user_id' => $this->session->userdata("user_id")
        );

        return $dataData;
    }

    public function add() {
		$temp='0';
		
        $dataData = $this->get_array($_POST['log_action'],$_POST['log_menu'],$_POST['log_keterangan']);
		 
		$this->form_validation->set_rules('log_action', 'Nama log', 'required|max_length[20]');
		$this->form_validation->set_rules('log_menu', 'Nama log', 'required|max_length[50]');
		$this->form_validation->set_rules('log_keterangan', 'Nama log', 'required|is_unique[data_log.log_nama]');
		
        $error=	'';
		if( isset( $_POST['simpan'] ) )
		{
			if( $this->form_validation->run() == FALSE )
			{
				$data['tambah'] = 'tambah';  
				$data['error'] = 'error';   
				$this->load->view('data/log',$data);
			}
			else
			{ 
				$temp=$this->data_log->insert($dataData); 
				 if($temp=='1')
				 {
					$this->session->set_userdata("error","Simpan Berhasil");
					redirect('data/log/'); 
				 }
				 else
					 echo "insert Gagal";
			}
		} 
    }

    public function edit() {

		$this->form_validation->set_rules('log_action', 'Nama log', 'required|max_length[20]');
		$this->form_validation->set_rules('log_menu', 'Nama log', 'required|max_length[50]');
		$this->form_validation->set_rules('log_keterangan', 'Nama log', 'required|is_unique[data_log.log_nama]');
		$dataData = $this->get_array($_POST['log_action'],$_POST['log_menu'],$_POST['log_keterangan']);
		
        $error=	'';
		if( isset( $_POST['ubah'] ) )
		{
			if( $this->form_validation->run() == FALSE )
			{
				$data['ubah'] = 'ubah';  
				$data['error'] = 'error';   
				$this->load->view('data/log',$data);
			}
			else
			{ 
				  
				$temp=$this->data_log->update($_POST['datamodel'],$dataData); 
				
				 if($temp=='1')
				 {
					$this->session->set_userdata("error","Edit Berhasil");
					redirect('lainnya/log/'); 
				 }
				 else
				 { 
					$data['ubah'] = 'ubah';  
					$data['error'] = 'error';   
					$this->load->view('lainnya/log',$data);
				 }
			}
		}  
    }

    public function delete_permanent($log_id) { 
	
		$temp=$this->data_log->delete_permanent($log_id);
		
        echo $temp;
    }

    public function delete() {
		$log_id=$_POST["datamodel"];
		$temp="0";
		
		$log = $this->data_log->get_row_by_id($log_id); 
		if($log->is_permanent=="0")
		{
		    $temp=$this->data_log->delete_semu($log_id);  
		}

        echo $temp;
    }

    public function user_delete_semu($user_id) {
        $dataData = array(
            'user_delete' => '1',
        );
        $this->script_sql->update($dataData, "data_user", "user_id", $user_id);
        echo $user_nama;
    }

    public function pegawai_delete_semu($pegawai_id) {
        $dataData = array(
            'pegawai_delete' => '1',
        );
        $this->script_sql->update($dataData, "data_pegawai", "pegawai_id", $pegawai_id);
        return $pegawai_id;
    }

//    public function index() {
//        $this->lib->check_session();
//        Place your code here...
//    }
}
