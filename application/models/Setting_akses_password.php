<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class setting_akses_password extends CI_Model {
    public function __construct()
	{
		parent::__construct();
		$this->load->library('script_sql');
	}
	
	public function get_all()
	{
		$this->db->select();
        $this->db->from('setting_akses_password a');
       $this->db->join('data_role b','b.role_id=a.role_id');
        $this->db->where('a.is_delete', '0');
		$query = $this->db->get();
		return $query->result() ;
	}
	
	public function get_by_id($akses_password_id)
	{
		$this->db->select();
        $this->db->from('setting_akses_password a');
        $this->db->join('data_role b','b.role_id=a.role_id');
		$this->db->where('a.is_delete', '0');
        $this->db->where('akses_password_id', $akses_password_id);
		$query = $this->db->get();
		return $query->result() ;
	}
	public function get_row_by_id($akses_password_id)
	{
		 $this->db->select();
        $this->db->from('setting_akses_password a');
        $this->db->join('data_role b','b.role_id=a.role_id');
		$this->db->where('a.is_delete', '0');
        $this->db->where('akses_password_id', $akses_password_id);
		$query = $this->db->get();
		return $query->row() ;
	}
	
	public function get_pass_by_id($akses_password_menu,$akses_password_fungsi)
	{
		$this->db->select();
        $this->db->from('setting_akses_password a');
        $this->db->join('data_user b','b.role_id=a.role_id');
		$this->db->where('a.akses_password_menu', $akses_password_menu);
		$this->db->where('a.akses_password_fungsi', $akses_password_fungsi);
		$query = $this->db->get();
		return $query->result() ;
	}
	
	public function show()
	{
		$this->db->select();
        $this->db->from('setting_akses_password a');
        $this->db->join('data_role b','b.role_id=a.role_id');        
		$this->db->where('a.is_delete', '0');
		$query = $this->db->get();
		return $query->result() ;
	}
	 
	public function insert($data)
	{  
		$temp=$this->db->insert('setting_akses_password', $data); 
		$this->session->set_userdata("last_id",$this->db->insert_id()); 
		return $temp;
		
	}
	 
	public function delete_permanent($akses_password_id)
	{  
		$data = array('akses_password_id' => $akses_password_id);
		$temp=$this->db->delete('setting_akses_password', $data);
		$this->session->set_userdata("last_id",$akses_password_id); 
	    return $temp;
		
	}
	
	public function delete_semu($akses_password_id)
	{
		$data_lama=$this->db->query('select * from setting_akses_password where akses_password_id="'.$akses_password_id.'"')->num_rows();
		
	   $data = array(
			'is_delete' => '1',
		); 
        $this->db->where('akses_password_id', $akses_password_id);
       $temp= $this->db->update('setting_akses_password', $data); 
		
		if($temp==0&&$data_lama>0) //kalau tidak ada perubahan cek data dengan id itu ada g. kalau ada dianggap ada perubahan data
		$temp=1; 
		
		$this->session->set_userdata("last_id",$akses_password_id);
		
	   return $temp;
	} 
	
	public function update($akses_password_id, $data)
	{
		$data_lama=$this->db->query('select * from setting_akses_password where akses_password_id="'.$akses_password_id.'"')->num_rows();
		
        /* $this->script_sql->update($data,"setting_akses_password","akses_password_id",$akses_password_id); */
	   
        $this->db->where('akses_password_id', $akses_password_id);
        $temp=$this->db->update('setting_akses_password', $data); 
		$this->session->set_userdata("last_id",$akses_password_id);
	   
		if($temp==0&&$data_lama>0) //kalau tidak ada perubahan cek data dengan id itu ada g. kalau ada dianggap ada perubahan data
		$temp=1;
		
	   return $temp;
	} 
}