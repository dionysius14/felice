<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$table = 'setting_akses_menu';
$join = "";
$where = "where user_id=" . $this->session->userdata('user_id');
$order_by = '';
$group_by = '';
$akses = $this->script_sql->get_data_row($table, $join, $where, $order_by, $group_by);
?>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse" >
            <ul class="nav navbar-nav">
                <li class=""><a  class="menu" href="<?php echo site_url("dashboard"); ?>"><img src="<?php echo base_url(); ?>include/img/home.png"/>&nbsp;&nbsp;Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <img src="<?php echo base_url(); ?>include/img/master-data.png"/>&nbsp;&nbsp;Data Master&nbsp;<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" style="overflow:auto;height:300px">
                        <li class="dropdown-header"><strong>Data User</strong></li>
                        <?php
                        $hidden = 'hidden';
                        if ($akses->result() != null)
                            $hidden = ($akses->row()->dm_role == 0) ? 'hidden' : '';
                        ?>
                        <li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("data/role/show") ?>"><img src="<?php echo base_url(); ?>include/img/role.png"/>&nbsp;&nbsp;Data Role</a></li>
                        <?php
                        $hidden = 'hidden';
                        if ($akses->result() != null)
                            $hidden = ($akses->row()->dm_user == 0) ? 'hidden' : '';
                        ?>
                        <li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("data/users/show") ?>"><img src="<?php echo base_url(); ?>include/img/user.png"/>&nbsp;&nbsp;Kelola User</a></li>
                        <?php
                        $hidden = 'hidden';
                        if($akses->result()!=null)
                        $hidden = ($akses->row()->dm_divisi == 0) ? 'hidden' : ''; 
                        ?>
                        <li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("data/divisi/show") ?>"><img src="<?php echo base_url(); ?>include/img/user.png"/>&nbsp;&nbsp;Kelola Divisi</a></li>
                        <?php
                        $hidden = 'hidden';
                        if ($akses->result() != null)
                            $hidden = ($akses->row()->dm_akses_menu == 0) ? 'hidden' : ''; 
                        ?>
                        <li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("data/akses_menu/show") ?>"><img src="<?php echo base_url(); ?>include/img/divisi.png"/>&nbsp;&nbsp;Hak Akses Menu</a></li>
                        <?php
                        $hidden = 'hidden';
                        if ($akses->result() != null)
                            $hidden = ($akses->row()->dm_akses_password == 0) ? 'hidden' : '';
                        ?>
                        <li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("data/akses_password/show") ?>"><img src="<?php echo base_url(); ?>include/img/divisi.png"/>&nbsp;&nbsp;Hak Akses Password</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header"><strong>Data Induk</strong></li> 
                        <?php
                        $hidden = 'hidden';
                        if ($akses->result() != null)
                            $hidden = ($akses->row()->dm_pemasok_kategori == 0) ? 'hidden' : '';
                        ?>
                        <li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("data/pemasok/kategori/show") ?>"><img src="<?php echo base_url(); ?>include/img/divisi.png"/>&nbsp;&nbsp;Data Kategori Pemasok</a></li>
                        <?php
                        $hidden = 'hidden';
                        if ($akses->result() != null)
                            $hidden = ($akses->row()->dm_pemasok == 0) ? 'hidden' : '';
                        ?>
                        <li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("data/pemasok/pemasok/show") ?>"><img src="<?php echo base_url(); ?>include/img/divisi.png"/>&nbsp;&nbsp;Data Pemasok</a></li>
                        <?php
                        $hidden = 'hidden';
                        if ($akses->result() != null)
                            $hidden = ($akses->row()->dm_pelanggan_kategori == 0) ? 'hidden' : '';
                        ?>
                        <li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("data/pelanggan/kategori/show") ?>"><img src="<?php echo base_url(); ?>include/img/divisi.png"/>&nbsp;&nbsp;Data Kategori Pelanggan</a></li>
                        <?php
                        $hidden = 'hidden';
                        if ($akses->result() != null)
                            $hidden = ($akses->row()->dm_pelanggan == 0) ? 'hidden' : '';
                        ?>
                        <li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("data/pelanggan/pelanggan/show") ?>"><img src="<?php echo base_url(); ?>include/img/divisi.png"/>&nbsp;&nbsp;Data Pelanggan</a></li>
                        <?php
                        $hidden = 'hidden';
                        if ($akses->result() != null)
                            $hidden = ($akses->row()->dm_produk_kategori == 0) ? 'hidden' : '';
                        ?>
                        <li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("data/produk/kategori/show") ?>"><img src="<?php echo base_url(); ?>include/img/divisi.png"/>&nbsp;&nbsp;Data Kategori Produk</a></li>
                        <?php
                        $hidden = 'hidden';
                        if ($akses->result() != null)
                            $hidden = ($akses->row()->dm_produk == 0) ? 'hidden' : '';
                        ?>
                        <li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("data/produk/produk/show") ?>"><img src="<?php echo base_url(); ?>include/img/divisi.png"/>&nbsp;&nbsp;Data Produk</a></li>
                        <?php
                        $hidden = 'hidden';
                        if ($akses->result() != null)
                            $hidden = ($akses->row()->dm_produk_promo == 0) ? 'hidden' : '';
                        ?>
                        <?php
                        $hidden = 'hidden';
                        if ($akses->result() != null)
                            $hidden = ($akses->row()->dm_rekening == 0) ? 'hidden' : '';
                        ?>
                        <li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("data/rekening/rekening/show") ?>"><img src="<?php echo base_url(); ?>include/img/divisi.png"/>&nbsp;&nbsp;Data Rekening</a></li>
                        <?php
                        // $hidden = 'hidden';
                        // if ($akses->result() != null)
                            // $hidden = ($akses->row()->dm_rekening_debit == 0) ? 'hidden' : '';
                        ?>
                        <!--li <?php //echo $hidden; ?>><a class="menu" href="<?php //echo site_url("data/rekening/debit/show") ?>"><img src="<?php //echo base_url(); ?>include/img/divisi.png"/>&nbsp;&nbsp;Data Debit</a></li-->
                        <?php
                        $hidden = 'hidden';
                        if ($akses->result() != null)
                            $hidden = ($akses->row()->dm_satuan == 0) ? 'hidden' : '';
                        ?>
                        <li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("data/satuan/show") ?>"><img src="<?php echo base_url(); ?>include/img/divisi.png"/>&nbsp;&nbsp;Data Satuan</a></li>
                        <?php
                        $hidden = 'hidden';
                        if ($akses->result() != null)
                            $hidden = ($akses->row()->dm_produk_paket == 0) ? 'hidden' : '';
                        ?>
                        <li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("data/produk/paket/paket/show") ?>"><img src="<?php echo base_url(); ?>include/img/divisi.png"/>&nbsp;&nbsp;Data Paket Produk</a></li>
                        <?php
                        $hidden = 'hidden';
                        if ($akses->result() != null)
                            $hidden = ($akses->row()->dm_produk_harga == 0) ? 'hidden' : '';
                        ?>
                        <li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("data/produk/harga/harga/show") ?>"><img src="<?php echo base_url(); ?>include/img/divisi.png"/>&nbsp;&nbsp;Data Harga</a></li>
                        <?php
                        $hidden = 'hidden';
                        if ($akses->result() != null)
                            $hidden = ($akses->row()->dm_produk_harga_range == 0) ? 'hidden' : '';
                        ?>
                        <li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("data/produk/harga/harga/show") ?>"><img src="<?php echo base_url(); ?>include/img/divisi.png"/>&nbsp;&nbsp;Data Harga Range</a></li>
                        <?php
                        $hidden = 'hidden';
                        if ($akses->result() != null)
                            $hidden = ($akses->row()->dm_gudang == 0) ? 'hidden' : '';
                        ?>
                        <li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("data/gudang/gudang/show") ?>"><img src="<?php echo base_url(); ?>include/img/divisi.png"/>&nbsp;&nbsp;Data Gudang</a></li>
                        <?php
                        $hidden = 'hidden';
                        if ($akses->result() != null)
                            $hidden = ($akses->row()->dm_akun == 0) ? 'hidden' : '';
                        ?>
                        <li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("data/akun/show") ?>"><img src="<?php echo base_url(); ?>include/img/divisi.png"/>&nbsp;&nbsp;Data Akun</a></li>
                        <?php
                        $hidden = 'hidden';
                        if ($akses->result() != null)
                            $hidden = ($akses->row()->dm_buku_besar == 0) ? 'hidden' : '';
                        ?>
                        <li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("data/buku_besar/show") ?>"><img src="<?php echo base_url(); ?>include/img/divisi.png"/>&nbsp;&nbsp;Data Buku Besar</a></li>
                        <?php
                        $hidden = 'hidden';
                        if ($akses->result() != null)
                            $hidden = ($akses->row()->dm_jurnal == 0) ? 'hidden' : '';
                        ?>
                        <li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("data/jurnal/pengaturan/show") ?>"><img src="<?php echo base_url(); ?>include/img/divisi.png"/>&nbsp;&nbsp;Data jurnal</a></li>
                    </ul>
                </li>
				
				
                      <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<img src="<?php echo base_url(); ?>include/img/reminder.png"/>&nbsp;&nbsp;Stok&nbsp;<span class="caret"></span>
						</a>
						<ul class="dropdown-menu"> 
							<!--Query Reminder-->
							
                        <?php
                        $hidden = 'hidden';
                        if ($akses->result() != null)
                            $hidden = ($akses->row()->st_display == 0) ? 'hidden' : '';
                        ?>
                        <li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("stok/display/show") ?>"><img src="<?php echo base_url(); ?>include/img/divisi.png"/>&nbsp;&nbsp;Display Stok</a></li>
                        <?php
                        $hidden = 'hidden';
                        if ($akses->result() != null)
                            $hidden = ($akses->row()->st_display == 0) ? 'hidden' : '';
                        ?>
                        <li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("stok/opname/show") ?>"><img src="<?php echo base_url(); ?>include/img/divisi.png"/>&nbsp;&nbsp;Opname Stok</a></li>
                        <?php
                        $hidden = 'hidden';
                        if ($akses->result() != null)
                            $hidden = ($akses->row()->st_display == 0) ? 'hidden' : '';
                        ?>
                        <li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("stok/verifikasi/show") ?>"><img src="<?php echo base_url(); ?>include/img/divisi.png"/>&nbsp;&nbsp;Varifikasi Stok</a></li>
                        <?php
                        $hidden = 'hidden';
                        if ($akses->result() != null)
                            $hidden = ($akses->row()->st_mutasi == 0) ? 'hidden' : '';
                        ?>
                        <li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("stok/mutasi/show") ?>"><img src="<?php echo base_url(); ?>include/img/divisi.png"/>&nbsp;&nbsp;Mutasi Stok</a></li>
						</ul>
                </li>
                      <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<img src="<?php echo base_url(); ?>include/img/reminder.png"/>&nbsp;&nbsp;Keuangan&nbsp;<span class="caret"></span>
						</a>
						<ul class="dropdown-menu"> 
							<!--Query Reminder-->
							<?php
							$hidden = 'hidden';
							if ($akses->result() != null)
								$hidden = ($akses->row()->keu_cash == 0) ? 'hidden' : '';
							?>
							<li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("keuangan/cash/show") ?>"><img src="<?php echo base_url(); ?>include/img/backup.png"/>&nbsp;&nbsp;Cash</a></li>
							<?php
							$hidden = 'hidden';
							if ($akses->result() != null)
								$hidden = ($akses->row()->keu_rekening == 0) ? 'hidden' : '';
							?>
							<li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("keuangan/rekening/rekening/show") ?>"><img src="<?php echo base_url(); ?>include/img/restore.png"/>&nbsp;&nbsp;Rekening</a></li> 
							<?php
							$hidden = 'hidden';
							if ($akses->result() != null)
								$hidden = ($akses->row()->keu_giro == 0) ? 'hidden' : '';
							?>
							<li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("keuangan/rekening/giro/show") ?>"><img src="<?php echo base_url(); ?>include/img/restore.png"/>&nbsp;&nbsp;Giro</a></li> 
						</ul>
                </li>
				   <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<img src="<?php echo base_url(); ?>include/img/reminder.png"/>&nbsp;&nbsp;Transaksi&nbsp;<span class="caret"></span>
						</a>
						<ul class="dropdown-menu"> 
							<?php
							$hidden = 'hidden';
							if ($akses->result() != null)
								$hidden = ($akses->row()->trs_pembelian_order == 0) ? 'hidden' : '';
							?>
							<li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("transaksi/pembelian/order/order/show") ?>"><img src="<?php echo base_url(); ?>include/img/backup.png"/>&nbsp;&nbsp;Order Pembelian</a></li>
						 
							<?php
							$hidden = 'hidden';
							if ($akses->result() != null)
								$hidden = ($akses->row()->trs_pembelian_pesanan == 0) ? 'hidden' : '';
							?>
							<li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("transaksi/pembelian/persediaan/persediaan/show") ?>"><img src="<?php echo base_url(); ?>include/img/backup.png"/>&nbsp;&nbsp;Penerimaan</a></li>
						  
							<?php
							$hidden = 'hidden';
							if ($akses->result() != null)
								$hidden = ($akses->row()->trs_pembelian_retur == 0) ? 'hidden' : '';
							?>
							<li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("transaksi/pembelian/retur/retur/show") ?>"><img src="<?php echo base_url(); ?>include/img/backup.png"/>&nbsp;&nbsp;Retur Pembelian</a></li>
						 
							<?php
							$hidden = 'hidden';
							if ($akses->result() != null)
								$hidden = ($akses->row()->trs_penjualan == 0) ? 'hidden' : '';
							?>
							<li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("transaksi/penjualan/penjualan/show") ?>"><img src="<?php echo base_url(); ?>include/img/backup.png"/>&nbsp;&nbsp;Penjualan</a></li>
						 
							<?php
							$hidden = 'hidden';
							if ($akses->result() != null)
								$hidden = ($akses->row()->trs_penjualan_managemen == 0) ? 'hidden' : '';
							?>
							<li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("transaksi/penjualan/managemen/penjualan/show") ?>"><img src="<?php echo base_url(); ?>include/img/backup.png"/>&nbsp;&nbsp;Managemen Penjualan</a></li>
						 
							<?php
							$hidden = 'hidden';
							if ($akses->result() != null)
								$hidden = ($akses->row()->trs_penjualan_retur == 0) ? 'hidden' : '';
							?>
							<li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("transaksi/penjualan/retur/retur/show") ?>"><img src="<?php echo base_url(); ?>include/img/backup.png"/>&nbsp;&nbsp;Retur Penjualan</a></li>
						 
						</ul>
                </li>
				
				
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <img src="<?php echo base_url(); ?>include/img/system.png"/>&nbsp;&nbsp;Pengaturan&nbsp;<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-header"><strong>Database</strong></li>
                        <?php
                        $hidden = 'hidden';
                        if ($akses->result() != null)
                            $hidden = ($akses->row()->pg_backup == 0) ? 'hidden' : '';
                        ?>
                        <li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("pengaturan/databased/backup") ?>"><img src="<?php echo base_url(); ?>include/img/backup.png"/>&nbsp;&nbsp;Backup Database</a></li>
                <?php
                $hidden = 'hidden';
                if ($akses->result() != null)
                    $hidden = ($akses->row()->pg_restore == 0) ? 'hidden' : '';
                ?>
                        <li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("pengaturan/databased/restore") ?>"><img src="<?php echo base_url(); ?>include/img/restore.png"/>&nbsp;&nbsp;Restore Database</a></li>
                        <li role="separator" class="divider"></li> 
                        <li class="dropdown-header"><strong>Sistem</strong></li>
						<?php
						$hidden = 'hidden';
						if ($akses->result() != null)
							$hidden = ($akses->row()->pg_profile == 0) ? 'hidden' : '';
						?>
                        <li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("pengaturan/profile/show") ?>"><img src="<?php echo base_url(); ?>include/img/profile.png"/>&nbsp;&nbsp;Profile</a></li>
						<?php
						$hidden = 'hidden';
						if ($akses->result() != null)
							$hidden = ($akses->row()->pg_printer == 0) ? 'hidden' : '';
						?>
                        <li <?php echo $hidden; ?>><a class="menu" href="<?php echo site_url("pengaturan/printer/show") ?>"><img src="<?php echo base_url(); ?>include/img/print.png"/>&nbsp;&nbsp;Printer</a></li>
                    </ul>
                </li>
<?php
$hidden = 'hidden';
if ($akses->result() != null)
    $hidden = ($akses->row()->pg_log == 0) ? 'hidden' : '';
?>
                <li <?php echo $hidden; ?>><a href="<?php echo site_url("lainnya/log") ?>"><img src="<?php echo base_url(); ?>include/img/jejak.png"/>&nbsp;&nbsp;Log</a></li> 
				  
                      <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<img src="<?php echo base_url(); ?>include/img/reminder.png"/>&nbsp;&nbsp;Pengingat&nbsp;<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li class="dropdown-header"><strong>Promo</strong></li>
							<!--Query Reminder-->
							<?php
							$hidden = ''; 
							?>
							<li <?php echo $hidden; ?>><a class="menu" href="#"><img src="<?php echo base_url(); ?>include/img/backup.png"/>&nbsp;&nbsp;Beli 1 Dapat 1</a></li>
							<?php
							$hidden = ''; 
							?>
							<li <?php echo $hidden; ?>><a class="menu" href="#"><img src="<?php echo base_url(); ?>include/img/restore.png"/>&nbsp;&nbsp;Diskon 10%</a></li> 
						</ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <strong>&nbsp;&nbsp;Welcome, <?php echo $this->session->userdata('user_name'); ?>&nbsp;</strong><span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="menu" href="<?php echo site_url("login/pass"); ?>"><img src="<?php echo base_url(); ?>include/img/password.png"/>&nbsp;&nbsp;Change Password</a></li>
                        <li><a class="menu" href="<?php echo site_url('login/logout') ?>"><img src="<?php echo base_url(); ?>include/img/logout.png"/>&nbsp;&nbsp;Logout</a></li>
                    </ul>
                </li>

            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>