<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Model template 
        $this->load->model('data_role');
        $this->load->model('data_user');
        $this->load->model('data_profile');

        // Place your model here...
    }

    public function index() {
		$profil = $this->data_profile->get_all(); 
		$this->session->set_userdata("title",$profil->profile_title);
		$this->session->set_userdata("subtitle","Login");
		
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
		 
        $profil = $this->data_profile->get_all();
        $this->session->set_userdata("title", $profil->profile_title);
		
        if ($this->form_validation->run() == FALSE) {
        $this->session->set_userdata("subtitle", "");
            $this->load->view('login');
        } else {
            if ($this->lib->check_login()) {
				$this->session->set_userdata("subtitle","Dashboard");
				$this->session->set_userdata("subtitle", "Dashboard");
                $this->load->view('dashboard');
            } else {
                echo '<script>alert("Username dan Password salah atau tidak ada!")</script>';
				$this->session->set_userdata("subtitle", "");
                $this->load->view('login');
            }
        }
    }

    public function logout() {
        $this->lib->logout();
		$profil = $this->data_profile->get_all(); 
		$this->session->set_userdata("title",$profil->profile_title);
		$this->session->set_userdata("subtitle","Login");
        $this->load->view('login');
    }

    public function pass() { 
		$profil = $this->data_profile->get_all(); 
		$this->session->set_userdata("title",$profil->profile_title);
		$this->session->set_userdata("subtitle","Change Password");
		$data["user_name"]=$this->session->userdata("user_name");
		$data["user_password"]=$this->session->userdata("user_password");
		$data["datamodel"]=$this->session->userdata("user_id");
        $this->load->view('change_password',$data);
    }
	
	  public function edit() { //change_password 
		$pass_lama=$this->db->query('select * from data_user where user_id="'.$_POST['datamodel'].'"')->row();
		
		$this->form_validation->set_rules('password_lama', 'Password Lama', 'required|same_custom['.md5($_POST['password_lama']).'.'.$pass_lama->user_password.']');
		$this->form_validation->set_rules('password_baru', 'Password Baru', 'required');
		$this->form_validation->set_rules('password_baru_konfirmasi', 'Konfirmasi Password Baru', 'required');
		
        $error=	'';
		if( isset( $_POST['simpan'] ) )
		{
			if( $this->form_validation->run() == FALSE )
			{
				$data['ubah'] = 'ubah';  
				$data['error'] = 'error';    
				$data["user_name"]=$this->session->userdata("user_name");
				$data["user_password"]=$this->session->userdata("user_password");
				$data["datamodel"]=$this->session->userdata("user_id");
				$this->load->view('change_password',$data);
			}
			else
			{ 
		
				 
				$this->form_validation->set_rules('password_baru_konfirmasi', 'Konfirmasi Password Baru', 'required|same['.$_POST['password_baru'].']');
				if( $this->form_validation->run() == FALSE )
				{
					$data['ubah'] = 'ubah';  
					$data['error'] = 'error';    
					$data["user_name"]=$this->session->userdata("user_name");
					$data["user_password"]=$this->session->userdata("user_password");
					$data["datamodel"]=$this->session->userdata("user_id");
					$this->load->view('change_password',$data);
				}
				else
				{
					 $dataData = array(
						'user_password' => md5($_POST['password_baru_konfirmasi']),
						'last_update' => date("y-m-d h:i:s"),
						'last_user_id' => $this->session->userdata("user_id")
					);
					  
					$this->db->where('user_id', $_POST['datamodel']);
					$temp=$this->db->update('data_user', $dataData);  
					
					 if($temp=='1')
					 {
						$this->session->set_userdata("error","Change Password Berhasil<br/>Silahkan login dengan password baru");
						redirect('login/logout/'); 
					 }
					 else
					 {   
						$data['ubah'] = 'ubah';  
						$data['error'] = 'error';   
						$this->load->view('data/role',$data);
					  }  
				}
			}
		}  
    }


}
