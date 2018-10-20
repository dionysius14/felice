<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {
    public function __construct()
	{
		parent::__construct();
		$this->load->library('script_sql');
	}
	
	public function get_all_kategori()
	{
		$this->db->select();
        $this->db->from('kategori u');
        $this->db->where('u.is_delete', '0');
		$query = $this->db->get();
		return $query->result() ;
	}
	public function get_by_id($kategori_id)
	{
		 $this->db->select();
        $this->db->from('kategori');
        $this->db->where('is_delete', '0');
        $this->db->where('kategori_id', $kategori_id);
		$query = $this->db->get();
		return $query->result() ;
	}
	public function insert($data)
	{  
		$temp=$this->db->insert('kategori', $data); 
		$this->session->set_userdata("last_id",$this->db->insert_id()); 
		return $temp;
		
	}
	public function delete_semu($kategori_id)
	{
		$data_lama=$this->db->query('select * from kategori where kategori_id="'.$kategori_id.'"')->num_rows();
		
	   $data = array(
			'is_delete' => '1',
		); 
        $this->db->where('kategori_id', $kategori_id);
       $temp= $this->db->update('kategori', $data); 
		
		if($temp==0&&$data_lama>0) //kalau tidak ada perubahan cek data dengan id itu ada g. kalau ada dianggap ada perubahan data
		$temp=1; 
		
		$this->session->set_userdata("last_id",$kategori_id);
		
	   return $temp;
	} 
	public function update($kategori_id, $data)
	{
		$data_lama=$this->db->query('select * from kategori where kategori_id="'.$kategori_id.'"')->num_rows();
		
        /* $this->script_sql->update($data,"data_parfum","parfum_id",$parfum_id); */
	   
        $this->db->where('kategori_id', $kategori_id);
        $temp=$this->db->update('kategori', $data); 
		$this->session->set_userdata("last_id",$kategori_id);
	   
		if($temp==0&&$data_lama>0) //kalau tidak ada perubahan cek data dengan id itu ada g. kalau ada dianggap ada perubahan data
		$temp=1;
		
	   return $temp;
	} 
}