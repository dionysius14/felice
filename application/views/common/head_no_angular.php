
<link rel="SHORTCUT ICON" href="<?php echo base_url(); ?>include_front/img/title.png">
<title><?php echo $this->session->userdata("title"); ?> | <?php echo $this->session->userdata("subtitle"); ?></title>
<link rel="stylesheet" href="<?php echo base_url(); ?>include/css/bootstrap-theme.css" media="all">
<link rel="stylesheet" href="<?php echo base_url(); ?>include/css/bootstrap.css" media="all">
<link rel="stylesheet" href="<?php echo base_url(); ?>include/css/sticky-footer.css" media="all">
<link rel="stylesheet" href="<?php echo base_url(); ?>include/css/style.css" media="all">
<link rel="stylesheet" href="<?php echo base_url(); ?>include/css/jquery-ui.css" media="all">
<script src="<?php echo base_url(); ?>include/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>include/js/jquery-ui.js"></script>


<!-- Remodal -->
<link rel="stylesheet" href="<?php echo base_url(); ?>include/css/remodal/popup.css">


<!-- Alertify -->
<script src="<?php echo base_url(); ?>include/js/alertify/alert_dialog.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>include/css/alertify/alert_dialog.css" media="all">
<link rel="stylesheet" href="<?php echo base_url(); ?>include/css/alertify/alert_dialog.core.css" media="all">
 
<!-- Autocomplete -->
<script src="<?php echo base_url(); ?>include/js/autocomplete/jquery_autocomplete-ui.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>include/css/autocomplete/jquery_autocomplete-ui.css" media="all"> 
<?php
$this->load->view('common/javascript');
$this->load->view('common/time');
?>


<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-5">
        <div class="judul"><?php echo $this->session->userdata("title"); ?></div>
        <div class="sub_judul"><?php echo $this->session->userdata("subtitle"); ?></div>
    </div>
    <div class="col-md-5 right">
        <div class="date"><?php echo date('d M Y') ?>  - <span id="show_clock" class="jam"></span></div>
    </div>
    <div class="col-md-1"></div>
</div>