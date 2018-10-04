<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class slider_model extends CI_Model {

	public function get_all()
	{
		$this->db->select();
        $this->db->from('slider u');
        $this->db->where('u.is_delete', '0');
		$query = $this->db->get();
		return $query->result() ;
	} 
	
	public function get_by_id($slider)
	{
		$this->db->select();
        $this->db->from('slider u');
        $this->db->where('u.is_delete', '0');
        $this->db->where('u.slider_id', $slider);
		$query = $this->db->get();
		return $query->result() ;
	}
	
	public function get_row_by_id($slider)
	{
		$this->db->select();
        $this->db->from('slider u');
        $this->db->where('u.is_delete', '0');
        $this->db->where('u.slider_id', $slider);
		$query = $this->db->get();
		return $query->row() ;
	}
	
	public function show()
	{
		 $this->db->select();
        $this->db->from('slider u');
        $this->db->where('u.is_delete', '0');
		$query = $this->db->get();
		return $query->result() ;
	}
	 
	public function insert($data)
	{  
		$temp=$this->db->insert('slider', $data); 
		$this->session->set_userdata("last_id",$this->db->insert_id()); 
		return $temp;
		
	}
	public function delete_permanent($slider)
	{  
		$data = array('slider_id' => $slider);
		$this->db->delete('slider', $data);
		$temp=$this->session->set_userdata("last_id",$slider); 
	    return $temp;
		
	}
	
	public function update($slider, $data)
	{
		$data_lama=$this->db->query('select * from slider where slider_id="'.$slider.'"')->num_rows();
	   
        $this->db->where('slider_id', $slider);
        $temp=$this->db->update('slider', $data); 
		$this->session->set_userdata("last_id",$slider);
	   
		if($temp==0&&$data_lama>0) //kalau tidak ada perubahan cek data dengan id itu ada g. kalau ada dianggap ada perubahan data
		$temp=1;
		
	   return $temp;
	}
	
}
