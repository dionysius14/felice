<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Howto_model extends CI_Model {

	public function get_all()
	{
		$this->db->select();
        $this->db->from('howto u');
        $this->db->where('u.is_delete', '0');
        $this->db->order_by('howto_sort', 'ASC');
		$query = $this->db->get();
		return $query->result() ;
	} 
	
	public function get_by_id($howto)
	{
		$this->db->select();
        $this->db->from('howto u');
        $this->db->where('u.is_delete', '0');
        $this->db->where('u.howto_id', $howto);
		$query = $this->db->get();
		return $query->result() ;
	}
	
	public function get_row_by_id($howto)
	{
		$this->db->select();
        $this->db->from('howto u');
        $this->db->where('u.is_delete', '0');
        $this->db->where('u.howto_id', $howto);
		$query = $this->db->get();
		return $query->row() ;
	}
	
	public function show()
	{
		 $this->db->select();
        $this->db->from('howto u');
        $this->db->where('u.is_delete', '0');
		$query = $this->db->get();
		return $query->result() ;
	}
	 
	public function insert($data)
	{  
		$temp=$this->db->insert('howto', $data); 
		$this->session->set_userdata("last_id",$this->db->insert_id()); 
		return $temp;
		
	}
	public function delete_permanent($howto)
	{  
		$data = array('howto_id' => $howto);
		$this->db->delete('howto', $data);
		$temp=$this->session->set_userdata("last_id",$howto); 
	    return $temp;
		
	}
	
	public function update($howto, $data)
	{
		$data_lama=$this->db->query('select * from howto where howto_id="'.$howto.'"')->num_rows();
	   
        $this->db->where('howto_id', $howto);
        $temp=$this->db->update('howto', $data); 
		$this->session->set_userdata("last_id",$howto);
	   
		if($temp==0&&$data_lama>0) //kalau tidak ada perubahan cek data dengan id itu ada g. kalau ada dianggap ada perubahan data
		$temp=1;
		
	   return $temp;
	}
	
}
