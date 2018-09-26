<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_role extends CI_Model {
    public function __construct()
	{
		parent::__construct();
		$this->load->library('script_sql');
	}
	
	public function get_all()
	{
		 $this->db->select();
        $this->db->from('data_role');
        $this->db->where('is_delete', '0');
		$query = $this->db->get();
		return $query->result() ;
	}
	
	public function get_by_id($role_id)
	{
		 $this->db->select();
        $this->db->from('data_role');
        $this->db->where('is_delete', '0');
        $this->db->where('role_id', $role_id);
		$query = $this->db->get();
		return $query->result() ;
	}
	
	public function get_row_by_id($role_id)
	{
		 $this->db->select();
        $this->db->from('data_role');
        $this->db->where('is_delete', '0');
        $this->db->where('role_id', $role_id);
		$query = $this->db->get();
		return $query->row() ;
	}
	
	public function show()
	{
		 $this->db->select();
        $this->db->from('data_role');
        $this->db->where('is_delete', '0');
		$query = $this->db->get();
		return $query->result() ;
	}
	 
	public function insert($data)
	{  
		$temp=$this->db->insert('data_role', $data); 
		$this->session->set_userdata("last_id",$this->db->insert_id()); 
		
		$data = array('role_id' => $this->session->userdata("last_id"));
		$temp=$this->db->insert('setting_akses_menu', $data); 
		return $temp;
		
	}
	 
	public function delete_permanent($role_id)
	{  
		$data = array('role_id' => $role_id);
		$this->db->delete('data_role', $data);
		$this->db->delete('setting_akses_menu', $data);
		$temp=$this->session->set_userdata("last_id",$role_id); 
	    return $temp;
		
	}
	
	public function delete_semu($role_id)
	{
		$data_lama=$this->db->query('select * from data_role where role_id="'.$role_id.'"')->num_rows();
		
	   $data = array(
			'is_delete' => '1',
		); 
        $this->db->where('role_id', $role_id);
       $temp= $this->db->update('data_role', $data); 
	    
		$temp=$this->db->update('setting_akses_menu', $data); 
		
		if($temp==0&&$data_lama>0) //kalau tidak ada perubahan cek data dengan id itu ada g. kalau ada dianggap ada perubahan data
		$temp=1; 
		
		$this->session->set_userdata("last_id",$role_id);
		
	   return $temp;
	} 
	
	public function update($role_id, $data)
	{
		$data_lama=$this->db->query('select * from data_role where role_id="'.$role_id.'"')->num_rows();
		
        /* $this->script_sql->update($data,"data_role","role_id",$role_id); */
	   
        $this->db->where('role_id', $role_id);
        $temp=$this->db->update('data_role', $data); 
		$this->session->set_userdata("last_id",$role_id);
	   
		if($temp==0&&$data_lama>0) //kalau tidak ada perubahan cek data dengan id itu ada g. kalau ada dianggap ada perubahan data
		$temp=1;
		
	   return $temp;
	} 
	
}