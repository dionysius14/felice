<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class about_model extends CI_Model {
    public function __construct()
	{
		parent::__construct();
		$this->load->library('script_sql');
	}
	
	public function get_all_about()
	{
		$this->db->select();
        $this->db->from('about_us u');
        $this->db->where('u.is_delete', '0');
		$query = $this->db->get();
		return $query->result() ;
	}
	public function get_by_id($about_id)
	{
		 $this->db->select();
        $this->db->from('about_us');
        $this->db->where('is_delete', '0');
        $this->db->where('about_id', $about_id);
		$query = $this->db->get();
		return $query->result() ;
	}
	// public function insert($data)
	// {  
		// $temp=$this->db->insert('about_us', $data); 
		// $this->session->set_userdata("last_id",$this->db->insert_id()); 
		// return $temp;
		
	// }
	// public function delete_semu($about_id)
	// {
		// $data_lama=$this->db->query('select * from about_us where about_id="'.$about_id.'"')->num_rows();
		
	   // $data = array(
			// 'is_delete' => '1',
		// ); 
        // $this->db->where('about_id', $about_id);
       // $temp= $this->db->update('about_us', $data); 
		
		// if($temp==0&&$data_lama>0) //kalau tidak ada perubahan cek data dengan id itu ada g. kalau ada dianggap ada perubahan data
		// $temp=1; 
		
		// $this->session->set_userdata("last_id",$about_id);
		
	   // return $temp;
	// } 
	public function update($about_id, $data)
	{
		$data_lama=$this->db->query('select * from about_us where about_id="'.$about_id.'"')->num_rows();
		
        /* $this->script_sql->update($data,"data_parfum","parfum_id",$parfum_id); */
	   
        $this->db->where('about_id', $about_id);
        $temp=$this->db->update('about_us', $data); 
		$this->session->set_userdata("last_id",$about_id);
	   
		if($temp==0&&$data_lama>0) //kalau tidak ada perubahan cek data dengan id itu ada g. kalau ada dianggap ada perubahan data
		$temp=1;
		
	   return $temp;
	} 
}