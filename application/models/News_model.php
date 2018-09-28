<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model {

	public function get_all()
	{
		$this->db->select();
        $this->db->from('data_news u');
        $this->db->where('u.is_delete', '0');
		$query = $this->db->get();
		return $query->result() ;
	} 
	
	public function get_by_id($news)
	{
		$this->db->select();
        $this->db->from('data_news u');
        $this->db->where('u.is_delete', '0');
        $this->db->where('u.news_id', $news);
		$query = $this->db->get();
		return $query->result() ;
	}
	
	public function get_row_by_id($news)
	{
		$this->db->select();
        $this->db->from('data_news u');
        $this->db->where('u.is_delete', '0');
        $this->db->where('u.news_id', $news);
		$query = $this->db->get();
		return $query->row() ;
	}
	
	public function show()
	{
		 $this->db->select();
        $this->db->from('data_news u');
        $this->db->where('u.is_delete', '0');
		$query = $this->db->get();
		return $query->result() ;
	}
	 
	public function insert($data)
	{  
		$temp=$this->db->insert('data_news', $data); 
		$this->session->set_userdata("last_id",$this->db->insert_id()); 
		return $temp;
		
	}
	public function delete_permanent($news)
	{  
		$data = array('news_id' => $news);
		$this->db->delete('data_news', $data);
		$temp=$this->session->set_userdata("last_id",$news); 
	    return $temp;
		
	}
	
	public function update($news, $data)
	{
		$data_lama=$this->db->query('select * from data_news where news_id="'.$news.'"')->num_rows();
	   
        $this->db->where('news_id', $news);
        $temp=$this->db->update('data_news', $data); 
		$this->session->set_userdata("last_id",$news);
	   
		if($temp==0&&$data_lama>0) //kalau tidak ada perubahan cek data dengan id itu ada g. kalau ada dianggap ada perubahan data
		$temp=1;
		
	   return $temp;
	}
	
}
