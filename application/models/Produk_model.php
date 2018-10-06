<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class produk_model extends CI_Model {
    public function __construct()
	{
		parent::__construct();
		$this->load->library('script_sql');
	}
	
	public function get_all($kategori_id)
	{
		$this->db->select();
        $this->db->from('data_produk');
        $this->db->where('is_delete', '0');
        $this->db->where('kategori_id', $kategori_id);
		$query = $this->db->get();
		return $query->result() ;
	}


	public function get_all_produk()
	{
		$this->db->select();
        $this->db->from('data_produk u');
		$this->db->join('kategori a', 'a.kategori_id=u.kategori_id and a.is_delete=0');
        $this->db->where('u.is_delete', '0');
		$query = $this->db->get();
		return $query->result() ;
	}
	
	public function get_by_id($produk_id)
	{
		 $this->db->select();
        $this->db->from('data_produk');
        $this->db->where('is_delete', '0');
        $this->db->where('produk_id', $produk_id);
		$query = $this->db->get();
		return $query->result() ;
	}
	public function get_by_id_detail($produk_id)
	{
		 $this->db->select();
        $this->db->from('data_produk_detail');
        $this->db->where('is_delete', '0');
        $this->db->where('produk_id', $produk_id);
		$query = $this->db->get();
		return $query->result() ;
	}
	public function insert($data)
	{  
		$temp=$this->db->insert('data_produk', $data); 
		$this->session->set_userdata("last_id",$this->db->insert_id()); 
		return $temp;
		
	}
	public function insert_detail($data)
	{  
		$temp=$this->db->insert('data_produk_detail', $data); 
		$this->session->set_userdata("last_id",$this->db->insert_id()); 
		return $temp;
		
	}
	public function delete_semu($produk_id)
	{
		$data_lama=$this->db->query('select * from data_produk where produk_id="'.$produk_id.'"')->num_rows();
		
	   $data = array(
			'is_delete' => '1',
		); 
        $this->db->where('produk_id', $produk_id);
       $temp= $this->db->update('data_produk', $data); 
		
		if($temp==0&&$data_lama>0) //kalau tidak ada perubahan cek data dengan id itu ada g. kalau ada dianggap ada perubahan data
		$temp=1; 
		
		$this->session->set_userdata("last_id",$produk_id);
		
	   return $temp;
	} 
	public function delete_semu_detail($produk_detail_id)
	{
		$data_lama=$this->db->query('select * from data_produk_detail where produk_detail_id="'.$produk_detail_id.'"')->num_rows();
		
	   $data = array(
			'is_delete' => '1',
		); 
        $this->db->where('produk_detail_id', $produk_detail_id);
       $temp= $this->db->update('data_produk_detail', $data); 
		
		if($temp==0&&$data_lama>0) //kalau tidak ada perubahan cek data dengan id itu ada g. kalau ada dianggap ada perubahan data
		$temp=1; 
		
		$this->session->set_userdata("last_id",$produk_detail_id);
		
	   return $temp;
	}
	public function update($produk_id, $data)
	{
		$data_lama=$this->db->query('select * from data_produk where produk_id="'.$produk_id.'"')->num_rows();
		
        /* $this->script_sql->update($data,"data_parfum","parfum_id",$parfum_id); */
	   
        $this->db->where('produk_id', $produk_id);
        $temp=$this->db->update('data_produk', $data); 
		$this->session->set_userdata("last_id",$produk_id);
	   
		if($temp==0&&$data_lama>0) //kalau tidak ada perubahan cek data dengan id itu ada g. kalau ada dianggap ada perubahan data
		$temp=1;
		
	   return $temp;
	} 
}