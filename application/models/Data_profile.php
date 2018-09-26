<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_profile extends CI_Model {
         public function __construct()
	{
		parent::__construct();
		$this->load->library('script_sql');
	}
	
	public function get_all()
	{
		 $this->db->select();
        $this->db->from('setting_profile');
        $this->db->where('is_delete', '0');
		$query = $this->db->get();
		return $query->row() ;
	}
	
	public function get_by_id($profile_id)
	{
		 $this->db->select();
        $this->db->from('setting_profile');
        $this->db->where('is_delete', '0');
        $this->db->where('profile_id', $profile_id);
		$query = $this->db->get();
		return $query->result() ;
	}
	public function get_row_by_id($profile_id)
	{
		 $this->db->select();
        $this->db->from('setting_profile');
        $this->db->where('is_delete', '0');
        $this->db->where('profile_id', $profile_id);
		$query = $this->db->get();
		return $query->row() ;
	}
	
	public function show()
	{
		 $this->db->select();
        $this->db->from('setting_profile');
        $this->db->where('is_delete', '0');
		$query = $this->db->get();
		return $query->result() ;
	}
	 
	public function insert($data)
	{  
		$temp=$this->db->insert('setting_profile', $data); 
		$this->session->set_userdata("last_id",$this->db->insert_id()); 
		return $temp;
		
	}
	 
	public function delete_permanent($profile_id)
	{  
		$data = array('profile_id' => $profile_id);
		$this->db->delete('setting_profile', $data);
		$temp=$this->session->set_userdata("last_id",$profile_id); 
	    return $temp;
		
	}
	
	public function delete_semu($profile_id)
	{
		$data_lama=$this->db->query('select * from setting_profile where profile_id="'.$profile_id.'"')->num_rows();
		
	   $data = array(
			'is_delete' => '1',
		); 
        $this->db->where('profile_id', $profile_id);
       $temp= $this->db->update('setting_profile', $data); 
		
		if($temp==0&&$data_lama>0) //kalau tidak ada perubahan cek data dengan id itu ada g. kalau ada dianggap ada perubahan data
		$temp=1; 
		
		$this->session->set_userdata("last_id",$profile_id);
		
	   return $temp;
	} 
	public function update($profile_id, $data)
	{
		$data_lama=$this->db->query('select * from setting_profile where profile_id="'.$profile_id.'"')->num_rows();
		
        /* $this->script_sql->update($data,"setting_profile","profile_id",$profile_id); */
	   
        $this->db->where('profile_id', $profile_id);
        $temp=$this->db->update('setting_profile', $data); 
		$this->session->set_userdata("last_id",$profile_id);
	   
		if($temp==0&&$data_lama>0) //kalau tidak ada perubahan cek data dengan id itu ada g. kalau ada dianggap ada perubahan data
		$temp=1;
		
	   return $temp;
	} 
}