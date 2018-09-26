<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"> 
		<?php $this->load->view('common/head'); ?> 
        <link rel="stylesheet" href="<?php echo base_url(); ?>include/css/bootstrap-theme.min.css" media="all">
        <link rel="stylesheet" href="<?php echo base_url(); ?>include/css/bootstrap.css" media="all">
        <link rel="stylesheet" href="<?php echo base_url(); ?>include/css/sticky-footer.css" media="all">
        <link rel="stylesheet" href="<?php echo base_url(); ?>include/css/style.css" media="all">
        <script src="<?php echo base_url(); ?>include/js/jquery.min.js"></script> 
        <?php $this->load->view('common/time'); ?>
    </head>
    <body  style="background-image:url('<?php echo base_url(); ?>include_front/img/felice.png'),linear-gradient(#ffe4eb, #ff799e);background-repeat: no-repeat;background-position: center;">
        <?php $this->load->view('common/menu'); ?>
       
        <div id="container">
            <!-- Place your html code here-->
        </div>
        <?php $this->load->view('common/footer'); ?>
        <script src="<?php echo base_url(); ?>include/js/bootstrap.min.js"></script>
    </body>
</html>