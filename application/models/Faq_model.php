<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Faq_model extends CI_Model {

	public function get_all()
	{
		$this->db->select();
        $this->db->from('faq u');
        $this->db->where('u.is_delete', '0');
		$query = $this->db->get();
		return $query->result() ;
	} 
	
	public function get_by_id($faq)
	{
		$this->db->select();
        $this->db->from('faq u');
        $this->db->where('u.is_delete', '0');
        $this->db->where('u.faq_id', $faq);
		$query = $this->db->get();
		return $query->result() ;
	}
	
	public function get_row_by_id($faq)
	{
		$this->db->select();
        $this->db->from('faq u');
        $this->db->where('u.is_delete', '0');
        $this->db->where('u.faq_id', $faq);
		$query = $this->db->get();
		return $query->row() ;
	}
	
	public function show()
	{
		 $this->db->select();
        $this->db->from('faq u');
        $this->db->where('u.is_delete', '0');
		$query = $this->db->get();
		return $query->result() ;
	}
	 
	public function insert($data)
	{  
		$temp=$this->db->insert('faq', $data); 
		$this->session->set_userdata("last_id",$this->db->insert_id()); 
		return $temp;
		
	}
	public function delete_permanent($faq)
	{  
		$data = array('faq_id' => $faq);
		$this->db->delete('faq', $data);
		$temp=$this->session->set_userdata("last_id",$faq); 
	    return $temp;
		
	}
	
	public function update($faq, $data)
	{
		$data_lama=$this->db->query('select * from faq where faq_id="'.$faq.'"')->num_rows();
	   
        $this->db->where('faq_id', $faq);
        $temp=$this->db->update('faq', $data); 
		$this->session->set_userdata("last_id",$faq);
	   
		if($temp==0&&$data_lama>0) //kalau tidak ada perubahan cek data dengan id itu ada g. kalau ada dianggap ada perubahan data
		$temp=1;
		
	   return $temp;
	}
	
}
