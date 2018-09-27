<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial_model extends CI_Model {

	public function get_all()
	{
		$this->db->select();
        $this->db->from('testimonial u');
        $this->db->where('u.is_delete', '0');
		$query = $this->db->get();
		return $query->result() ;
	} 
	
	public function get_by_id($testimonial)
	{
		$this->db->select();
        $this->db->from('testimonial u');
        $this->db->where('u.is_delete', '0');
        $this->db->where('u.testimonial_id', $testimonial);
		$query = $this->db->get();
		return $query->result() ;
	}
	
	public function get_row_by_id($testimonial)
	{
		$this->db->select();
        $this->db->from('testimonial u');
        $this->db->where('u.is_delete', '0');
        $this->db->where('u.testimonial_id', $testimonial);
		$query = $this->db->get();
		return $query->row() ;
	}
	
	public function show()
	{
		 $this->db->select();
        $this->db->from('testimonial u');
        $this->db->where('u.is_delete', '0');
		$query = $this->db->get();
		return $query->result() ;
	}
	 
	public function insert($data)
	{  
		$temp=$this->db->insert('testimonial', $data); 
		$this->session->set_userdata("last_id",$this->db->insert_id()); 
		return $temp;
		
	}
	public function delete_permanent($testimonial)
	{  
		$data = array('testimonial_id' => $testimonial);
		$this->db->delete('testimonial', $data);
		$temp=$this->session->set_userdata("last_id",$testimonial); 
	    return $temp;
		
	}
	
	public function update($testimonial, $data)
	{
		$data_lama=$this->db->query('select * from testimonial where testimonial_id="'.$testimonial.'"')->num_rows();
	   
        $this->db->where('testimonial_id', $testimonial);
        $temp=$this->db->update('testimonial', $data); 
		$this->session->set_userdata("last_id",$testimonial);
	   
		if($temp==0&&$data_lama>0) //kalau tidak ada perubahan cek data dengan id itu ada g. kalau ada dianggap ada perubahan data
		$temp=1;
		
	   return $temp;
	}
	
}
