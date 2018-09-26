<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class lib {

    var $CI;

    function check_login() {
        $CI = & get_instance();
        if ($CI->session->userdata('role_id') == "") {
//            $decode = "abcdefghijklmnopqrstuvwxyz123456789!@#$%^&*()";
//            $temp_ = $this->db->query('SELECT * FROM data_user WHERE user_nama LIKE "' . $_POST['user_name'] . '" and user_password="' . md5($_POST['user_password']) . '" ')->row();
            $user = $CI->data_user->get_by_username_password($_POST['username'], md5($_POST['password']));
            if ($user != null) {
                $this->set_session($user);
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return TRUE;
        }
    }

    function set_session($user) {
        $CI = & get_instance();
        $CI->session->set_userdata('user_id', $user->user_id);
        $CI->session->set_userdata('role_id', $user->role_id);
        $CI->session->set_userdata('user_name', $user->user_name);
        $CI->load->model('data_user');
        
        $CI->data_user->update_last_login($user->user_id);
    }
	
    function add_jurnal($jurnal_jumlah="0",$reff_id="0",$transaksi_jenis="",$akun_id="0",$akun_id_lainnya="") { //in
		if($akun_id_lainnya=="")
		$akun_id_lainnya=$akun_id;
        $CI = & get_instance(); 
        $CI->load->model('data_jurnal_detail'); 
		
		$jurnal= array(		
					'jurnal_tanggal'=>  urldecode( date('Y-m-d')), 
					'jumlah'=> urldecode(abs($jurnal_jumlah)), 
					'akun_id'=>$akun_id, 
					'reff_id'=> $reff_id, 
					'jurnal_jenis'=> 'debit', 
					'transaksi_jenis'=> $transaksi_jenis, 
				);
				
		$temp = $CI->data_jurnal_detail->insert($jurnal);
		$jurnal= array(		
					'jurnal_tanggal'=>  urldecode(date('Y-m-d')), 
					'jumlah'=> urldecode(abs($jurnal_jumlah)), 
					'akun_id'=>$akun_id_lainnya, 
					'reff_id'=> $reff_id, 
					'jurnal_jenis'=> 'kredit', 
					'transaksi_jenis'=> $transaksi_jenis, 
				);
		$temp = $CI->data_jurnal_detail->insert($jurnal);
        
        // $CI->data_user->update_last_login($user->user_id);
    }
	
    function edit_jurnal($jurnal_jumlah="0",$reff_id="0",$transaksi_jenis="") { //in
		if($akun_id_lainnya=="-")
		$akun_id_lainnya=$akun_id;
        $CI = & get_instance(); 
        $CI->load->model('data_jurnal_detail'); 
		
		$jurnal= array(		
					// 'jurnal_tanggal'=>  urldecode( date('Y-m-d')), 
					'jumlah'=> urldecode(abs($jurnal_jumlah)),  
					'reff_id'=> $reff_id,  
					'transaksi_jenis'=> $transaksi_jenis, 
				);
				
		$temp = $CI->data_jurnal_detail->update($transaksi_jenis,$reff_id, $jurnal);
		 
        // $CI->data_user->update_last_login($user->user_id);
    }
	
    function add_jurnal_out($jurnal_jumlah="0",$reff_id="0",$transaksi_jenis="",$akun_id="0",$akun_id_lainnya="-") {  //out
		if($akun_id_lainnya=="-")
		$akun_id_lainnya=$akun_id;
        $CI = & get_instance(); 
        $CI->load->model('data_jurnal_detail'); 
		
		$jurnal= array(		
					'jurnal_tanggal'=>  urldecode( date('Y-m-d')), 
					'jumlah'=> urldecode(abs($jurnal_jumlah)), 
					'akun_id'=>$akun_id_lainnya, 
					'reff_id'=> $reff_id, 
					'jurnal_jenis'=> 'debit', 
					'transaksi_jenis'=> $transaksi_jenis, 
				);
				
		$temp = $CI->data_jurnal_detail->insert($jurnal);
		$jurnal= array(		
					'jurnal_tanggal'=>  urldecode(date('Y-m-d')), 
					'jumlah'=> urldecode(abs($jurnal_jumlah)), 
					'akun_id'=>$akun_id, 
					'reff_id'=> $reff_id, 
					'jurnal_jenis'=> 'kredit', 
					'transaksi_jenis'=> $transaksi_jenis, 
				);
		$temp = $CI->data_jurnal_detail->insert($jurnal);
        
        // $CI->data_user->update_last_login($user->user_id);
    }

    function check_session() {
        $CI = & get_instance();
        $CI->load->model('setting_akses_menu');
		
        if($CI->session->userdata('user_id') == '') {
            redirect('login');
        }
		$akses = $CI->setting_akses_menu->get_by_role_id();
		if($akses!=null)
		{
			if($CI->session->userdata('akses_id')!=''){
				$temp=$CI->session->userdata('akses_id');
				$CI->session->set_userdata('akses_id','');
				if($akses->$temp=='0'){
					redirect('dashboard');
				}
			}
		}	
    }

    function check_stok($produk_harga_id) {
        $CI = & get_instance();
        $CI->load->model('data_stok');
		
        if($CI->session->userdata('user_id') == '') {
            redirect('login');
        }
		$stok = $CI->data_stok->cek_stok($produk_harga_id);
		if($stok<=0)
		{
			return false;
		}	
		return true;
    }
	
	function check_pass($akses_password_menu='',$akses_password_fungsi='',$input_pass='') {
        $CI = & get_instance();
        $CI->load->model('setting_akses_password');
		$temp="";
        if($CI->session->userdata('user_id') == '') {
            redirect('login');
        }
		$akses_pass = $CI->setting_akses_password->get_pass_by_id($akses_password_menu,$akses_password_fungsi);
		
		if($akses_pass!=null)
		{	
			foreach($akses_pass as $ap){ 
				if($ap->user_password==$input_pass)
					return true;
			}
		}
		return false;		 		
    }

    function logout() {
        $CI = & get_instance();
        $CI->load->model('data_user');
        $CI->data_user->update_last_logout($CI->session->userdata('user_id'));
        $CI->session->sess_destroy();
    }
	
	 function log($log_action="") {
		  $CI = & get_instance();
		  if($CI->session->userdata("user_id")!="")
		  { 
			$CI->load->model('data_log');
			$CI->data_log->insert($log_action, "User ".$CI->session->userdata("user_name")." ".$log_action." data menu ".$CI->session->userdata("subtitle"));
			
		  }
		  else
		  {
			redirect('login_cont/logout');
		  }
	  }
	
	 function cek_permanent($tabel="",$primary="",$id="")
	 {
        $CI = & get_instance();
		$var='SELECT * FROM '.$tabel.' where '.$primary.'='.$id.' and is_permanent=1';
		
        $user=$CI->db->query($var);
        return $user;    
    }
	

}

?>