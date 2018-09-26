<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Model template
		$this->load->model('home_model');
		$this->load->model('kategori_model');
        // Place your model here...
    }
	
    public function index() {
	
		$data['get_all_kategori'] = $this->kategori_model->get_all_kategori();	
		foreach($data['get_all_kategori'] as $vcc)
		{
			 
			$kategori = $this->home_model->get_kategori($vcc->kategori_id);
		
			$data[$vcc->kategori_nama] = $vcc->kategori_nama;
			if(count($kategori) > 0)
			{
				$data['deskripsi_'.$vcc->kategori_nama] = $kategori->produk_deskripsi;
				$data['nama_'.$vcc->kategori_nama] = $kategori->produk_nama;
				$data['foto_'.$vcc->kategori_nama] = $kategori->produk_foto;
			}else{
				$data['deskripsi_'.$vcc->kategori_nama] = "tidak ada data";
				$data['nama_'.$vcc->kategori_nama] = "tidak ada data";
				$data['foto_'.$vcc->kategori_nama] = "tidak ada data";
				}
		}
		
		
		/* // KATEGORI ACRYLIC
		$acrylic = $this->home_model->get_kategori_acrylic();
	
		$data['acrylic'] = $acrylic;
		if(count($acrylic) > 0)
		{
			$data['deskripsi_acrylic'] = $acrylic->produk_deskripsi;
			$data['nama_acrylic'] = $acrylic->produk_nama;
			$data['foto_acrylic'] = $acrylic->produk_foto;
		}else{
			$data['deskripsi_acrylic'] = "tidak ada data";
			$data['nama_acrylic'] = "tidak ada data";
			$data['foto_acrylic'] = "tidak ada data";
		}
		// KATEGORI BANTAL
		$bantal = $this->home_model->get_kategori_bantal();
		$data['bantal'] = $bantal;
		if(count($bantal) > 0)
		{
			$data['deskripsi_bantal'] = $bantal->produk_deskripsi;
			$data['nama_bantal'] = $bantal->produk_nama;
			$data['foto_bantal'] = $bantal->produk_foto;
		}else{
			$data['deskripsi_bantal'] = "tidak ada data";
			$data['nama_bantal'] = "tidak ada data";
			$data['foto_bantal'] = "tidak ada data";
		}
		// KATEGORI GANTUNGAN
		$gantungan = $this->home_model->get_kategori_gantungan();
		$data['gantungan'] = $gantungan;
		if(count($gantungan) > 0)
		{
			$data['deskripsi_gantungan'] = $gantungan->produk_deskripsi;
			$data['nama_gantungan'] = $gantungan->produk_nama;
			$data['foto_gantungan'] = $gantungan->produk_foto;
		}else{
			$data['deskripsi_gantungan'] = "tidak ada data";
			$data['nama_gantungan'] = "tidak ada data";
			$data['foto_gantungan'] = "tidak ada data";
		}
		// KATEGORI GELAS MUG
		$gelas_mug = $this->home_model->get_kategori_gelas_mug();
		$data['gelas_mug'] = $gelas_mug;
		if(count($gelas_mug) > 0)
		{
			$data['deskripsi_gelas_mug'] = $gelas_mug->produk_deskripsi;
			$data['nama_gelas_mug'] = $gelas_mug->produk_nama;
			$data['foto_gelas_mug'] = $gelas_mug->produk_foto;
		}else{
			$data['deskripsi_gelas_mug'] = "tidak ada data";
			$data['nama_gelas_mug'] = "tidak ada data";
			$data['foto_gelas_mug'] = "tidak ada data";
		}
		// KATEGORI HANDUK
		$handuk = $this->home_model->get_kategori_handuk();
		$data['handuk'] = $handuk;
		if(count($handuk) > 0)
		{
			$data['deskripsi_handuk'] = $handuk->produk_deskripsi;
			$data['nama_handuk'] = $handuk->produk_nama;
			$data['foto_handuk'] = $handuk->produk_foto;
		}else{
			$data['deskripsi_handuk'] = "tidak ada data";
			$data['nama_handuk'] = "tidak ada data";
			$data['foto_handuk'] = "tidak ada data";
		}
		// KATEGORI KIPAS
		$kipas = $this->home_model->get_kategori_kipas();
		$data['kipas'] = $kipas;
		if(count($kipas) > 0)
		{
			$data['deskripsi_kipas'] = $kipas->produk_deskripsi;
			$data['nama_kipas'] = $kipas->produk_nama;
			$data['foto_kipas'] = $kipas->produk_foto;
		}else{
			$data['deskripsi_kipas'] = "tidak ada data";
			$data['nama_kipas'] = "tidak ada data";
			$data['foto_kipas'] = "tidak ada data";
		}
		// KATEGORI PAKETAN
		$paketan = $this->home_model->get_kategori_paketan();
		$data['paketan'] = $paketan;
		if(count($paketan) > 0)
		{
			$data['deskripsi_paketan'] = $paketan->produk_deskripsi;
			$data['nama_paketan'] = $paketan->produk_nama;
			$data['foto_paketan'] = $paketan->produk_foto;
		}else{
			$data['deskripsi_paketan'] = "tidak ada data";
			$data['nama_paketan'] = "tidak ada data";
			$data['foto_paketan'] = "tidak ada data";
		}
		// KATEGORI PAPAN
		$papan = $this->home_model->get_kategori_papan();
		$data['papan'] = $papan;
		if(count($papan) > 0)
		{
			$data['deskripsi_papan'] = $papan->produk_deskripsi;
			$data['nama_papan'] = $papan->produk_nama;
			$data['foto_papan'] = $papan->produk_foto;
		}else{
			$data['deskripsi_papan'] = "tidak ada data";
			$data['nama_papan'] = "tidak ada data";
			$data['foto_papan'] = "tidak ada data";
		}
		// KATEGORI PLAKAT
		$plakat = $this->home_model->get_kategori_plakat();
		$data['plakat'] = $plakat;
		if(count($plakat) > 0)
		{
			$data['deskripsi_plakat'] = $plakat->produk_deskripsi;
			$data['nama_plakat'] = $plakat->produk_nama;
			$data['foto_plakat'] = $plakat->produk_foto;
		}else{
			$data['deskripsi_plakat'] = "tidak ada data";
			$data['nama_plakat'] = "tidak ada data";
			$data['foto_plakat'] = "tidak ada data";
		}
		// KATEGORI POUCH
		$pouch = $this->home_model->get_kategori_pouch();
		$data['pouch'] = $pouch;
		if(count($pouch) > 0)
		{
			$data['deskripsi_pouch'] = $pouch->produk_deskripsi;
			$data['nama_pouch'] = $pouch->produk_nama;
			$data['foto_pouch'] = $pouch->produk_foto;
		}else{
			$data['deskripsi_pouch'] = "tidak ada data";
			$data['nama_pouch'] = "tidak ada data";
			$data['foto_pouch'] = "tidak ada data";
		}
		// KATEGORI TAS
		$tas = $this->home_model->get_kategori_tas();
		$data['tas'] = $tas;
		if(count($tas) > 0)
		{
			$data['deskripsi_tas'] = $tas->produk_deskripsi;
			$data['nama_tas'] = $tas->produk_nama;
			$data['foto_tas'] = $tas->produk_foto;
		}else{
			$data['deskripsi_tas'] = "tidak ada data";
			$data['nama_tas'] = "tidak ada data";
			$data['foto_tas'] = "tidak ada data";
		}
		// KATEGORI TEMPAT CINCIN
		$tempat_cincin = $this->home_model->get_kategori_tempat_cincin();
		$data['tempat_cincin'] = $tempat_cincin;
		if(count($tempat_cincin) > 0)
		{
			$data['deskripsi_tempat_cincin'] = $tempat_cincin->produk_deskripsi;
			$data['nama_tempat_cincin'] = $tempat_cincin->produk_nama;
			$data['foto_tempat_cincin'] = $tempat_cincin->produk_foto;
		}else{
			$data['deskripsi_tempat_cincin'] = "tidak ada data";
			$data['nama_tempat_cincin'] = "tidak ada data";
			$data['foto_tempat_cincin'] = "tidak ada data";
		}
		// KATEGORI TEMPAT GULA
		$tempat_gula = $this->home_model->get_kategori_tempat_gula();
		$data['tempat_gula'] = $tempat_gula;
		if(count($tempat_gula) > 0)
		{
			$data['deskripsi_tempat_gula'] = $tempat_gula->produk_deskripsi;
			$data['nama_tempat_gula'] = $tempat_gula->produk_nama;
			$data['foto_tempat_gula'] = $tempat_gula->produk_foto;
		}else{
			$data['deskripsi_tempat_gula'] = "tidak ada data";
			$data['nama_tempat_gula'] = "tidak ada data";
			$data['foto_tempat_gula'] = "tidak ada data";
		}
		// KATEGORI TEMPAT LADA
		$tempat_lada = $this->home_model->get_kategori_tempat_lada();
		$data['tempat_lada'] = $tempat_lada;
		if(count($tempat_lada) > 0)
		{
			$data['deskripsi_tempat_lada'] = $tempat_lada->produk_deskripsi;
			$data['nama_tempat_lada'] = $tempat_lada->produk_nama;
			$data['foto_tempat_lada'] = $tempat_lada->produk_foto;
		}else{
			$data['deskripsi_tempat_lada'] = "tidak ada data";
			$data['nama_tempat_lada'] = "tidak ada data";
			$data['foto_tempat_lada'] = "tidak ada data";
		}
		// KATEGORI TEMPAT LILIN
		$tempat_lilin = $this->home_model->get_kategori_tempat_lilin();
		$data['tempat_lilin'] = $tempat_lilin;
		if(count($tempat_lilin) > 0)
		{
			$data['deskripsi_tempat_lilin'] = $tempat_lilin->produk_deskripsi;
			$data['nama_tempat_lilin'] = $tempat_lilin->produk_nama;
			$data['foto_tempat_lilin'] = $tempat_lilin->produk_foto;
		}else{
			$data['deskripsi_tempat_lilin'] = "tidak ada data";
			$data['nama_tempat_lilin'] = "tidak ada data";
			$data['foto_tempat_lilin'] = "tidak ada data";
		}
		// KATEGORI TEMPAT TISSUE
		$tempat_tissue = $this->home_model->get_kategori_tempat_tissue();
		$data['tempat_tissue'] = $tempat_tissue;
		if(count($tempat_tissue) > 0)
		{
			$data['deskripsi_tempat_tissue'] = $tempat_tissue->produk_deskripsi;
			$data['nama_tempat_tissue'] = $tempat_tissue->produk_nama;
			$data['foto_tempat_tissue'] = $tempat_tissue->produk_foto;
		}else{
			$data['deskripsi_tempat_tissue'] = "tidak ada data";
			$data['nama_tempat_tissue'] = "tidak ada data";
			$data['foto_tempat_tissue'] = "tidak ada data";
		}
		// KATEGORI TEMPAT PENSIL
		$tempat_pensil = $this->home_model->get_kategori_tempat_pensil();
		$data['tempat_pensil'] = $tempat_pensil;
		if(count($tempat_pensil) > 0)
		{
			$data['deskripsi_tempat_pensil'] = $tempat_pensil->produk_deskripsi;
			$data['nama_tempat_pensil'] = $tempat_pensil->produk_nama;
			$data['foto_tempat_pensil'] = $tempat_pensil->produk_foto;
		}else{
			$data['deskripsi_tempat_pensil'] = "tidak ada data";
			$data['nama_tempat_pensil'] = "tidak ada data";
			$data['foto_tempat_pensil'] = "tidak ada data";
		}
		// KATEGORI TEPLOK
		$teplok = $this->home_model->get_kategori_teplok();
		$data['teplok'] = $teplok;
		if(count($teplok) > 0)
		{
			$data['deskripsi_teplok'] = $teplok->produk_deskripsi;
			$data['nama_teplok'] = $teplok->produk_nama;
			$data['foto_teplok'] = $teplok->produk_foto;
		}else{
			$data['deskripsi_teplok'] = "tidak ada data";
			$data['nama_teplok'] = "tidak ada data";
			$data['foto_teplok'] = "tidak ada data";
		}
		// KATEGORI TOPLES
		$toples = $this->home_model->get_kategori_toples();
		$data['toples'] = $toples;
		if(count($toples) > 0)
		{
			$data['deskripsi_toples'] = $toples->produk_deskripsi;
			$data['nama_toples'] = $toples->produk_nama;
			$data['foto_toples'] = $toples->produk_foto;
		}else{
			$data['deskripsi_toples'] = "tidak ada data";
			$data['nama_toples'] = "tidak ada data";
			$data['foto_toples'] = "tidak ada data";
		}
		// KATEGORI TUMBLER
		$tumbler = $this->home_model->get_kategori_tumbler();
		$data['tumbler'] = $tumbler;
		if(count($tumbler) > 0)
		{
			$data['deskripsi_tumbler'] = $tumbler->produk_deskripsi;
			$data['nama_tumbler'] = $tumbler->produk_nama;
			$data['foto_tumbler'] = $tumbler->produk_foto;
		}else{
			$data['deskripsi_tumbler'] = "tidak ada data";
			$data['nama_tumbler'] = "tidak ada data";
			$data['foto_tumbler'] = "tidak ada data";
		}
		// KATEGORI UNDANGAN
		$undangan = $this->home_model->get_kategori_undangan();
		$data['undangan'] = $undangan;
		if(count($undangan) > 0)
		{
			$data['deskripsi_undangan'] = $undangan->produk_deskripsi;
			$data['nama_undangan'] = $undangan->produk_nama;
			$data['foto_undangan'] = $undangan->produk_foto;
		}else{
			$data['deskripsi_undangan'] = "tidak ada data";
			$data['nama_undangan'] = "tidak ada data";
			$data['foto_undangan'] = "tidak ada data";
		}
		 */
		$data['select'] = '1';
		$data['get_all_kategori'] = $this->kategori_model->get_all_kategori('1');
        $this->load->view('home_view',$data);
    }

//    public function index() {
//        $this->lib->check_session();
//        Place your code here...
//    }

}
