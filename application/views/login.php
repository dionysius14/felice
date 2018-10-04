<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"> 
				
		<link rel="SHORTCUT ICON" href="<?php echo base_url(); ?>include_front/img/title.png">
		<title><?php echo $this->session->userdata("title"); ?></title>
        <!--?php $this->load->view('common/head'); ?-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>include/css/bootstrap-theme.min.css" media="all">
        <link rel="stylesheet" href="<?php echo base_url(); ?>include_front/css/bootstrap.css" media="all">
        <link rel="stylesheet" href="<?php echo base_url(); ?>include/css/sticky-footer.css" media="all">
        <link rel="stylesheet" href="<?php echo base_url(); ?>include/css/style.css" media="all">
        <link rel="stylesheet" href="<?php echo base_url(); ?>include/css/login.css" media="all">
		<script src="<?php echo base_url(); ?>include/js/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>include/js/jquery-ui.js"></script>
		<?php 
        $alert = $this->session->userdata("error");  
        $this->session->unset_userdata("error"); 
		$this->load->view("common/time");
		?>
		 <script type="text/javascript">
		 _alert='<?php echo $alert ; ?>'; 
		 
		 window.onload = function () {	
			if(_alert!="") 
			alertify.success(_alert);
		 }
		</script>
		
    </head>
    <body style="background:#fff"> 
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-5">
			<!--<div class="judul"><?php echo $this->session->userdata("title"); ?></div>
			<div class="sub_judul"><?php echo $this->session->userdata("subtitle"); ?></div>-->
		</div>
		<div class="col-md-5 right">
			<!--<div class="date"><?php echo date('d M Y') ?>  - <span id="show_clock" class="jam"></span></div>-->
		</div>
		<div class="col-md-1"></div>
	</div>
        <div id="container">
            <?php
                $attributes = array('class' => 'form-signin');
                echo form_open('login', $attributes);
                ?>
				<center><img style="margin-bottom:20px" width="70%" id="preview_image" src="<?php echo base_url(); ?>include_front/img/test.jpg">
				<br/>
                <!--h2 class="form-signin-heading">LOGO SI</h2--></center>
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="text" name="username" class="form-control" placeholder="Username" required="" autofocus="">
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required="">
                <button class="btn btn-lg btn-felice btn-block" type="submit">Login</button>
            <?php echo form_close();?>
        </div>
        <?php $this->load->view('common/footer'); ?>
        <script src="<?php echo base_url(); ?>include/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>include/js/bootstrap.min.js"></script>
    </body>
</html>