<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak_model extends CI_Model {
    public function __construct()
	{
		parent::__construct();
		$this->load->library('script_sql');
	}
	
	function insert($param){
		$this->db->insert('kontak',$param);
		return true;
	}
		public function get_all_kontak()
	{
		$this->db->select();
        $this->db->from('kontak');
        $this->db->where('is_delete', '0');
		$query = $this->db->get();
		return $query->result() ;
	}
	public function get_by_id($kontak_id)
	{
		 $this->db->select();
        $this->db->from('kontak');
        $this->db->where('is_delete', '0');
        $this->db->where('kontak_id', $kontak_id);
		$query = $this->db->get();
		return $query->result() ;
	}
	
	public function delete_semu($kontak_id)
	{
		$data_lama=$this->db->query('select * from kontak where kontak_id="'.$kontak_id.'"')->num_rows();
		
	   $data = array(
			'is_delete' => '1',
		); 
        $this->db->where('kontak_id', $kontak_id);
       $temp= $this->db->update('kontak', $data); 
		
		if($temp==0&&$data_lama>0) //kalau tidak ada perubahan cek data dengan id itu ada g. kalau ada dianggap ada perubahan data
		$temp=1; 
		
		$this->session->set_userdata("last_id",$kontak_id);
		
	   return $temp;
	} 
	public function update($kontak_id, $data)
	{
		$data_lama=$this->db->query('select * from kontak where kontak_id="'.$kontak_id.'"')->num_rows();
		
        /* $this->script_sql->update($data,"data_parfum","parfum_id",$parfum_id); */
	   
        $this->db->where('kontak_id', $kontak_id);
        $temp=$this->db->update('kontak', $data); 
		$this->session->set_userdata("last_id",$kontak_id);
	   
		if($temp==0&&$data_lama>0) //kalau tidak ada perubahan cek data dengan id itu ada g. kalau ada dianggap ada perubahan data
		$temp=1;
		
	   return $temp;
	} 
	
	
}