<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class users extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Model template 
        $this->load->model('data_user');
        $this->load->model('data_profile');
        // Place your model here...
    }

    public function index() {
 		$data['akses']='dm_user';
        $this->session->set_userdata("akses_id", $data['akses']);
        $this->session->set_userdata("akses_pass_id",'user');
		$this->lib->check_session();
		$this->lib->check_pass();
        $profil = $this->data_profile->get_all();
        $this->session->set_userdata("title", $profil->profile_title);
        $this->session->set_userdata("subtitle", "Data User");
        $data['error'] = '';
        $data['status'] = '';
        // $this->session->set_userdata("error","");
        $this->lib->log("Lihat");
        $this->load->view('data/user_view', $data);
    }

    public function show() {
        $this->lib->check_session();
        redirect('data/users/');
    }

    public function user_show_by_id() { //kirim data buat form edit
        $this->lib->check_session();
        $users = $this->data_user->get_by_id($_POST['datamodel']); //data_model = primary key
        $array = array();
        $index = 0;
        foreach ($users as $tmp) {
            $temp['index'] = $index;
            $temp['datamodel'] = $tmp->user_id;
            $temp['role_nama'] = $tmp->role_nama;
            $temp['role_id'] = $tmp->role_id;
            $temp['user_name'] = $tmp->user_name;
            $temp['user_password'] = $tmp->user_password;
            $temp['is_delete'] = $tmp->is_delete;
            array_push($array, $temp);
            $index++;
        }
        echo json_encode($array);
    }

    public function user_show() {
        $this->lib->check_session();
        $index = 0;
        $users = $this->data_user->get_all();
        $array = array();
        foreach ($users as $tmp) {

            $temp['index'] = $index;
            $temp['datamodel'] = $tmp->user_id;
            $temp['role_nama'] = $tmp->role_nama;
            $temp['role_id'] = $tmp->role_id;
            $temp['user_name'] = $tmp->user_name;
            $temp['user_password'] = $tmp->user_password;
            $temp['is_delete'] = $tmp->is_delete;
            array_push($array, $temp);
            $index++;
        }
        echo json_encode($array);
    }

    public function get_array($user_name = "", $user_password = "", $role_id = "") {
        $this->lib->check_session();
        $dataData = array(
            'user_name' => urldecode($user_name),
            'user_password' => urldecode(md5($user_password)),
            'role_id' => urldecode($role_id),
            'last_update' => date("y-m-d h:i:s"),
            'last_user_id' => $this->session->userdata("user_id")
        );
        return $dataData;
    }

    public function add() {
        $this->lib->check_session();
        $temp = '0';
        $dataData = $this->get_array($_POST['user_name'], $_POST['user_password'], $_POST['role_id']);
        if (isset($_POST['datamodel']))
            $user_id = $_POST['datamodel'];
        $this->form_validation->set_rules('user_name', 'Username', 'required|max_length[10]|is_unique_custom[data_user.user_name]');
        $this->form_validation->set_rules('user_password', 'Password', 'required|max_length[100]');
        $this->form_validation->set_rules('role_id', 'Role', 'check_selected');
        $error = '';
        if (isset($_POST['simpan'])) {
            if ($this->form_validation->run() == FALSE) {
                $data['tambah'] = 'tambah';
                $data['error'] = 'error';
                $this->load->view('data/user_view', $data);
            } else {
                $this->lib->log("Tambah");
                $temp = $this->data_user->insert($dataData);
				 // $dataAkses = $this->get_array_akses();
				// $this->data_user->insert_akses_menu($dataAkses);
                if ($temp == '1') {
                    $this->session->set_userdata("error", "Simpan Berhasil");
                    redirect('data/users/');
                } else
                    echo "Insert Gagal";
            }
        }
    }

    public function edit() {
        $this->lib->check_session();
        $this->form_validation->set_rules('user_name', 'Username', 'required|max_length[10]|is_unique_edit_custom[data_user.user_name.' . $_POST['datamodel'] . ']');
        $this->form_validation->set_rules('user_password', 'Password', 'required|max_length[100]');
        $this->form_validation->set_rules('role_id', 'Role', 'check_selected');
        $error = '';
        if (isset($_POST['ubah'])) {
            if ($this->form_validation->run() == FALSE) {
                $data['ubah'] = 'ubah';
                $data['error'] = 'error';
                $this->load->view('data/user_view', $data);
            } else {
                $data['permanent'] = $this->lib->cek_permanent("data_user", "user_id", $_POST['datamodel']);
                if ($data ['permanent']->num_rows() == 1) {
                    $this->session->set_userdata("error", "Data Tidak Dapat Diedit");
                    redirect('data/users/');
                } else {
                    $dataData = $this->get_array($_POST['user_name'], $_POST['user_password'], $_POST['role_id']);

                    $temp = $this->data_user->update($_POST['datamodel'], $dataData);
                    $this->lib->log("Edit");

                    if ($temp == '1') {
                        $this->session->set_userdata("error", "Edit Berhasil");
                        redirect('data/users/');
                    } else {
                        $data['ubah'] = 'ubah';
                        $data['error'] = 'error';
                        $this->load->view('data/user_view', $data);
                    }
                }
            }
        }
    }

    public function delete_permanent($user_id) {
        $this->lib->check_session();
        $temp = $this->data_user->delete_permanent($user_id);

        $this->lib->log("Hapus");
        echo $temp;
    }

    public function delete() {
        $this->lib->check_session();
        $pass=$this->lib->check_pass('user','delete',md5($_POST['input_pass']));
        $user_id = $_POST["datamodel"];
        $temp = "0";
        $data['permanent'] = $this->lib->cek_permanent("data_user", "user_id", $_POST['datamodel']);
        if ($data['permanent']->num_rows() == 1) {
            $temp = "2";
        } else {
			if($pass){
				$this->lib->log("Hapus");
				$this->data_user->delete_semu($user_id);
				$temp = "1";
			}
			// else
			// $temp=$pass.'='.md5($_POST['input_pass']);
        }
        echo $temp;
    }

    public function user_delete_semu($user_id) {
        $this->lib->check_session();
        $dataData = array('is_delete' => '1',
        );
        $this->script_sql->update($dataData, "data_user", "user_id", $user_id);
        echo $user_id;
    }
	// public function get_array_akses(){
			
		// $temp = $this->data_user->get_user_row_by_id();
	        // $dataData = array(
            // 'user_id' => $temp->user_id,
            // 'dm_item_aksi' => "0~0~0",
            // 'dm_pembelian_aksi' => "0~0~0",
            // 'dm_lap_grafik_aksi' => "0~0~0",
            // 'dm_lap_penjualan_layanan_aksi' => "0~0~0",
            // 'dm_lap_penjualan_barang_aksi' => "0~0~0",
            // 'dm_lap_stok_barang_aksi' => "0~0~0",
            // 'dm_lap_laba_rugi_aksi' => "0~0~0",
            // 'dm_lap_rank_customer_aksi' => "0~0~0",
            // 'dm_lap_hutang_aksi' => "0~0~0",
            // 'dm_lap_piutang_aksi' => "0~0~0",
            // 'dm_lap_absensi_aksi' => "0~0~0",
            // 'dm_kas_outlet_aksi' => "0~0~0",
            // 'dm_keu_hutang_aksi' => "0~0~0",
            // 'dm_keu_piutang_aksi' => "0~0~0",
            // 'dm_keu_cash_aksi' => "0~0~0",
            // 'dm_rekap_hutang_aksi' => "0~0~0",
            // 'dm_rekap_piutang_aksi' => "0~0~0",
            // 'dm_tr_deposit_aksi' => "0~0~0",
            // 'dm_tr_history_deposit_aksi' => "0~0~0",
            // 'dm_tr_penjualan_barang_aksi' => "0~0~0",
            // 'dm_tr_penjualan_layanan_aksi' => "0~0~0",
            // 'dm_tr_penjualan_layanan_retur_aksi' => "0~0~0",
            // 'dm_tr_penjualan_barang_retur_aksi' => "0~0~0",
            // 'dm_pembelian_retur_aksi' => "0~0~0",
            // 'dm_absensi_aksi' => "0~0~0",
            // 'dm_verifikasi_opname_aksi' => "0~0~0",
            // 'dm_minmax_aksi' => "0~0~0",
            // 'dm_role_aksi' => "0~0~0",
            // 'dm_user_aksi' => "0~0~0",
            // 'dm_unit_aksi' => "0~0~0",
            // 'dm_pegawai_aksi' => "0~0~0",
            // 'dm_outlet_aksi' => "0~0~0",
            // 'dm_customer_aksi' => "0~0~0",
            // 'dm_parfum_aksi' => "0~0~0",
            // 'dm_kategori_aksi' => "0~0~0",
            // 'dm_jenis_layanan_aksi' => "0~0~0",
            // 'dm_status_aksi' => "0~0~0",
            // 'dm_barang_aksi' => "0~0~0",
            // 'dm_status_aksi' => "0~0~0",
            // 'dm_barang_aksi' => "0~0~0",
            // 'dm_diskon_harian_aksi' => "0~0~0",
            // 'dm_paket_deposit_aksi' => "0~0~0",
            // 'dm_akun_aksi' => "0~0~0",
            // 'dm_akses_menu_aksi' => "0~0~0",
            // 'dm_akses_password_aksi' => "0~0~0",
            // 'dm_display_stok_aksi' => "0~0~0",
            // 'dm_opname_stok_aksi' => "0~0~0",
            // 'pg_backup_aksi' => "0~0~0",
            // 'pg_restore_aksi' => "0~0~0",
            // 'pg_profile_aksi' => "0~0~0",
            // 'pg_footer_aksi' => "0~0~0",
            // 'last_update' => date("y-m-d h:i:s"),
            // 'last_user_id' => $this->session->userdata("user_id")
        // );

        // return $dataData;
	// }
}
