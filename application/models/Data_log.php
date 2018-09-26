<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_log extends CI_Model {
    public function __construct()
	{
		parent::__construct(); 
	}
	
	public function get_all()
	{
		 $this->db->select();
        $this->db->from('log');
        $this->db->where('is_delete', '0');
		$query = $this->db->get();
		return $query->result() ;
	}
	
	public function get_by_id($log_id)
	{
		 $this->db->select();
        $this->db->from('log');
        $this->db->where('is_delete', '0');
        $this->db->where('log_id', $log_id);
		$query = $this->db->get();
		return $query->result() ;
	}
	public function get_row_by_id($log_id)
	{
		 $this->db->select();
        $this->db->from('log');
        $this->db->where('is_delete', '0');
        $this->db->where('log_id', $log_id);
		$query = $this->db->get();
		return $query->row() ;
	}
	
	public function show()
	{
		 $this->db->select();
        $this->db->from('log');
        $this->db->where('is_delete', '0');
		$query = $this->db->get();
		return $query->result() ;
	}
	 
	public function insert($log_action, $log_keterangan)
	{  
		$data = array(		
			'log_tanggal'=> date('Y-m-d H:i:s'),
			'last_update'=> date('Y-m-d H:i:s'),
			'last_user_id'=> $this->session->userdata("user_id"),
			'log_menu'=> $this->session->userdata("subtitle"),
			'log_action'=> $log_action, 
			'log_keterangan'=> $log_keterangan,
		); 
		$temp=$this->db->insert('log', $data); 
		$this->session->set_userdata("last_id",$this->db->insert_id()); 
		return $temp;
		
	}
	 
	public function delete_permanent($log_id)
	{  
		$data = array('log_id' => $log_id);
		$this->db->delete('log', $data);
		$temp=$this->session->set_userdata("last_id",$log_id); 
	    return $temp;
		
	}
	
	public function delete_semu($log_id)
	{
		$data_lama=$this->db->query('select * from log where log_id="'.$log_id.'"')->num_rows();
		
	   $data = array(
			'is_delete' => '1',
		); 
        $this->db->where('log_id', $log_id);
       $temp= $this->db->update('log', $data); 
		
		if($temp==0&&$data_lama>0) //kalau tidak ada perubahan cek data dengan id itu ada g. kalau ada dianggap ada perubahan data
		$temp=1; 
		
		$this->session->set_userdata("last_id",$log_id);
		
	   return $temp;
	} 
	public function update($log_id, $data)
	{
		$data_lama=$this->db->query('select * from log where log_id="'.$log_id.'"')->num_rows();
		
        /* $this->script_sql->update($data,"log","log_id",$log_id); */
	   
        $this->db->where('log_id', $log_id);
        $temp=$this->db->update('log', $data); 
		$this->session->set_userdata("last_id",$log_id);
	   
		if($temp==0&&$data_lama>0) //kalau tidak ada perubahan cek data dengan id itu ada g. kalau ada dianggap ada perubahan data
		$temp=1;
		
	   return $temp;
	} 
}