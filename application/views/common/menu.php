<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$table = 'setting_akses_menu';
$join = "";
$where = "where role_id='" . $this->session->userdata('role_id')."'";
$order_by = '';
$group_by = '';
$akses = $this->script_sql->get_data_row($table, $join, $where, $order_by, $group_by);
?>
<nav class="navbar navbar-default navbar-fixed-top">
    <div style="width: 100%;" class="container">
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
                <li class=""><a  class="menu" href="<?php echo site_url("data/Role/show"); ?>"><img src="<?php echo base_url(); ?>include/img/role.png"/>&nbsp;&nbsp;Data Role</a></li>
                <li class=""><a  class="menu" href="<?php echo site_url("data/Users/show"); ?>"><img src="<?php echo base_url(); ?>include/img/user.png"/>&nbsp;&nbsp;Data User</a></li>
				<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <img src="<?php echo base_url(); ?>include/img/system.png"/>&nbsp;&nbsp;Konten&nbsp;<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
						<li class=""><a  class="menu" href="<?php echo site_url("data_about/show"); ?>"><img src="<?php echo base_url(); ?>include/img/link.png"/>&nbsp;&nbsp;Data Link Social Media</a></li>
						<li class=""><a  class="menu" href="<?php echo site_url("faq/show"); ?>"><img src="<?php echo base_url(); ?>include/img/system.png"/>&nbsp;&nbsp;FAQ</a></li>
						<li class=""><a  class="menu" href="<?php echo site_url("howto/show"); ?>"><img src="<?php echo base_url(); ?>include/img/system.png"/>&nbsp;&nbsp;How to Order</a></li>
						<li class=""><a  class="menu" href="<?php echo site_url("testimonial/show"); ?>"><img src="<?php echo base_url(); ?>include/img/system.png"/>&nbsp;&nbsp;Testimonial</a></li>
						<li class=""><a  class="menu" href="<?php echo site_url("news/show"); ?>"><img src="<?php echo base_url(); ?>include/img/system.png"/>&nbsp;&nbsp;News</a></li>
						<li class=""><a  class="menu" href="<?php echo site_url("slider/show"); ?>"><img src="<?php echo base_url(); ?>include/img/system.png"/>&nbsp;&nbsp;Slider</a></li>
				  
						
					</ul>
                </li>
				
				<li class=""><a  class="menu" href="<?php echo site_url("kategori/kategori/show"); ?>"><img src="<?php echo base_url(); ?>include/img/stok.png"/>&nbsp;&nbsp;Data Kategori</a></li>
				<li class=""><a  class="menu" href="<?php echo site_url("kategori/data_produk/show"); ?>"><img src="<?php echo base_url(); ?>include/img/produk.png"/>&nbsp;&nbsp;Data Produk</a></li>
				<li class=""><a  class="menu" href="<?php echo site_url("data_kontak/show"); ?>"><img src="<?php echo base_url(); ?>include/img/inbox.png"/>&nbsp;&nbsp;Data Pesan</a></li>
				
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
							$hidden = ($akses->row()->pg_log == 0) ? 'hidden' : '';
						?>
						<li <?php echo $hidden; ?>><a href="<?php echo site_url("lainnya/log") ?>"><img src="<?php echo base_url(); ?>include/img/jejak.png"/>&nbsp;&nbsp;Log</a></li> 
				  
						
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