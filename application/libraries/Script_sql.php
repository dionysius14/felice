<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class script_sql {

    var $CI;
	function check_login() {
        $CI = & get_instance();
        if ($CI->session->userdata('user_id') == "") {
            redirect('login_cont/login');
        }
    }
    function get_data($table="",$join="",$where="",$order_by="",$group_by="",$select="*") {
        $CI = & get_instance();
		$var='SELECT '.$select.' FROM '.$table.' u 
		' .$join. '
		' .$where. '
		' .$group_by. '
		' .$order_by;
		
        $user=$CI->db->query($var)->result();
		//$CI->script_sql->log("Lihat data ".$table,"aksi");
        return $user;
        
    }
	
	 function get_data_row($table="",$join="",$where="",$order_by="",$group_by="") {
        $CI = & get_instance();
		$var='SELECT * FROM '.$table.' u 
		'.$join.'
		'.$where.'
		'.$group_by.'
		'.$order_by.'
		';
		
        $user=$CI->db->query($var);
		//$CI->script_sql->log("Lihat data ".$table,"aksi");
        return $user;
        
    }
	
	 function log($log_activity="",$log_keterangan="",$log_data="",$log_data_lama="") {
		  $CI = & get_instance();
		  if($CI->session->userdata("user_nama")!="")
		  {
		    $data = array(		
				'log_tanggal'=> date('Y-m-d H:i:s'),
				'user_id'=> $CI->session->userdata("user_id"),
				'log_menu_nama'=> $CI->session->userdata("subtitle"),
				'log_activity'=> $log_activity,
				'log_data'=> $log_data,
				'log_data_lama'=> $log_data_lama,
				'log_keterangan'=> $log_keterangan,
			);
		  $CI->db->insert('manajemen_log', $data);
		  }
		  else
		  {
			redirect('login_cont/logout');
		  }
	  }
	
	  function insert($data,$tabel_nama) {
		  $CI = & get_instance();		  
		  $CI->db->insert($tabel_nama, $data);
		  $CI->session->set_userdata('last_id',$CI->db->insert_id());
		 // $CI->script_sql->log("insert data ".$tabel_nama,"aksi",http_build_query($data, '', ', '));
		  return $CI->db->affected_rows();
	  }
	  
	  function update($data,$tabel_nama,$tabel_id,$id) {
		  $CI = & get_instance();
		  // $CI->session->set_userdata('last_id',$id);
		  $data_lama=$CI->db->query('select * from '.$tabel_nama.' where '.$tabel_id.'="'.$id.'"')->num_rows();
		  
		  $CI->db->where($tabel_id, $id);
		  $CI->db->update($tabel_nama, $data);
		  
		  //$data=$CI->db->query('select * from '.$tabel_nama.' where '.$tabel_id.'="'.$id.'"')->row();
		
		  $efek=$CI->db->affected_rows();
		  if($efek==0&&$data_lama>0)
		  $efek=1;
		  return $efek;
	  }
	  
	    function delete($tabel_nama,$tabel_id,$id) {
			$CI = & get_instance();
			$data = array($tabel_id => $id);
			$CI->db->delete($tabel_nama, $data);	 
			$CI->session->set_userdata('last_id',$id);
			//$CI->script_sql->log("Delete data ".$tabel_nama."~".$tabel_id."~".$id,"aksi",http_build_query($data, '', ', '));
			return $CI->db->affected_rows();
	  }

   
}

?>