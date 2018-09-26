<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_model extends CI_Model {
    public function __construct()
	{
		parent::__construct();
		$this->load->library('script_sql');
	}
	
	public function get_kategori($id)
	{
		$this->db->select();
        $this->db->from('data_produk');
        $this->db->where('is_delete', '0');
        $this->db->where('kategori_id', $id);
        $this->db->order_by('produk_tgl_input', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row() ;
	}
	public function get_kategori_acrylic()
	{
		$this->db->select();
        $this->db->from('data_produk');
        $this->db->where('is_delete', '0');
        $this->db->where('kategori_id', '1');
        $this->db->order_by('produk_tgl_input', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row() ;
	}
	public function get_kategori_bantal()
	{
		$this->db->select();
        $this->db->from('data_produk');
        $this->db->where('is_delete', '0');
        $this->db->where('kategori_id', '2');
        $this->db->order_by('produk_tgl_input', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row() ;
	}
	public function get_kategori_gantungan()
	{
		$this->db->select();
        $this->db->from('data_produk');
        $this->db->where('is_delete', '0');
        $this->db->where('kategori_id', '3');
        $this->db->order_by('produk_tgl_input', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row() ;
	}
	public function get_kategori_gelas_mug()
	{
		$this->db->select();
        $this->db->from('data_produk');
        $this->db->where('is_delete', '0');
        $this->db->where('kategori_id', '4');
        $this->db->order_by('produk_tgl_input', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row() ;
	}
	public function get_kategori_handuk()
	{
		$this->db->select();
        $this->db->from('data_produk');
        $this->db->where('is_delete', '0');
        $this->db->where('kategori_id', '5');
        $this->db->order_by('produk_tgl_input', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row() ;
	}
	public function get_kategori_kipas()
	{
		$this->db->select();
        $this->db->from('data_produk');
        $this->db->where('is_delete', '0');
        $this->db->where('kategori_id', '6');
        $this->db->order_by('produk_tgl_input', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row() ;
	}
	public function get_kategori_paketan()
	{
		$this->db->select();
        $this->db->from('data_produk');
        $this->db->where('is_delete', '0');
        $this->db->where('kategori_id', '7');
        $this->db->order_by('produk_tgl_input', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row() ;
	}
	
	public function get_kategori_papan()
	{
		$this->db->select();
        $this->db->from('data_produk');
        $this->db->where('is_delete', '0');
        $this->db->where('kategori_id', '21');
        $this->db->order_by('produk_tgl_input', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row() ;
	}
	
	public function get_kategori_plakat()
	{
		$this->db->select();
        $this->db->from('data_produk');
        $this->db->where('is_delete', '0');
        $this->db->where('kategori_id', '8');
        $this->db->order_by('produk_tgl_input', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row() ;
	}
	public function get_kategori_pouch()
	{
		$this->db->select();
        $this->db->from('data_produk');
        $this->db->where('is_delete', '0');
        $this->db->where('kategori_id', '9');
        $this->db->order_by('produk_tgl_input', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row() ;
	}
	public function get_kategori_tas()
	{
		$this->db->select();
        $this->db->from('data_produk');
        $this->db->where('is_delete', '0');
        $this->db->where('kategori_id', '10');
        $this->db->order_by('produk_tgl_input', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row() ;
	}
	public function get_kategori_tempat_cincin()
	{
		$this->db->select();
        $this->db->from('data_produk');
        $this->db->where('is_delete', '0');
        $this->db->where('kategori_id', '11');
        $this->db->order_by('produk_tgl_input', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row() ;
	}
	public function get_kategori_tempat_gula()
	{
		$this->db->select();
        $this->db->from('data_produk');
        $this->db->where('is_delete', '0');
        $this->db->where('kategori_id', '12');
        $this->db->order_by('produk_tgl_input', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row() ;
	}
	public function get_kategori_tempat_lada()
	{
		$this->db->select();
        $this->db->from('data_produk');
        $this->db->where('is_delete', '0');
        $this->db->where('kategori_id', '13');
        $this->db->order_by('produk_tgl_input', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row() ;
	}
	public function get_kategori_tempat_lilin()
	{
		$this->db->select();
        $this->db->from('data_produk');
        $this->db->where('is_delete', '0');
        $this->db->where('kategori_id', '14');
        $this->db->order_by('produk_tgl_input', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row() ;
	}
	public function get_kategori_tempat_tissue()
	{
		$this->db->select();
        $this->db->from('data_produk');
        $this->db->where('is_delete', '0');
        $this->db->where('kategori_id', '15');
        $this->db->order_by('produk_tgl_input', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row() ;
	}
	public function get_kategori_tempat_pensil()
	{
		$this->db->select();
        $this->db->from('data_produk');
        $this->db->where('is_delete', '0');
        $this->db->where('kategori_id', '16');
        $this->db->order_by('produk_tgl_input', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row() ;
	}
	public function get_kategori_teplok()
	{
		$this->db->select();
        $this->db->from('data_produk');
        $this->db->where('is_delete', '0');
        $this->db->where('kategori_id', '17');
        $this->db->order_by('produk_tgl_input', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row() ;
	}
	public function get_kategori_toples()
	{
		$this->db->select();
        $this->db->from('data_produk');
        $this->db->where('is_delete', '0');
        $this->db->where('kategori_id', '18');
        $this->db->order_by('produk_tgl_input', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row() ;
	}
	public function get_kategori_tumbler()
	{
		$this->db->select();
        $this->db->from('data_produk');
        $this->db->where('is_delete', '0');
        $this->db->where('kategori_id', '19');
        $this->db->order_by('produk_tgl_input', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row() ;
	}
	public function get_kategori_undangan()
	{
		$this->db->select();
        $this->db->from('data_produk');
        $this->db->where('is_delete', '0');
        $this->db->where('kategori_id', '20');
        $this->db->order_by('produk_tgl_input', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row() ;
	}
	
}