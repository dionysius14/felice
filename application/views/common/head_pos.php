
<link rel="SHORTCUT ICON" href="<?php echo base_url(); ?>include/img/logo.png">
<title><?php echo $this->session->userdata("title"); ?> | <?php echo $this->session->userdata("subtitle"); ?></title>
<link rel="stylesheet" href="<?php echo base_url(); ?>include/css/bootstrap-theme.min.css" media="all">
<link rel="stylesheet" href="<?php echo base_url(); ?>include/css/bootstrap.min.css" media="all">
<link rel="stylesheet" href="<?php echo base_url(); ?>include/css/sticky-footer.css" media="all">
<link rel="stylesheet" href="<?php echo base_url(); ?>include/css/style.css" media="all">
<link rel="stylesheet" href="<?php echo base_url(); ?>include/css/jquery-ui.css" media="all">
<link rel="stylesheet" href="<?php echo base_url(); ?>include/css/remodal/remodal.css" media="all"> 
		<link rel="stylesheet" href="<?php echo base_url(); ?>include/css/remodal/remodal-default-theme.css" media="all">
<script src="<?php echo base_url(); ?>include/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>include/js/jquery-ui.js"></script>


<!-- Remodal -->
<link rel="stylesheet" href="<?php echo base_url(); ?>include/css/remodal/popup.css">


<!-- Alertify -->
<script src="<?php echo base_url(); ?>include/js/alertify/alert_dialog.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>include/css/alertify/alert_dialog.css" media="all">
<link rel="stylesheet" href="<?php echo base_url(); ?>include/css/alertify/alert_dialog.core.css" media="all">

<!-- Autocomplete -->
<link rel="stylesheet" href="<?php echo base_url(); ?>include/css/autocomplete/jquery_autocomplete-ui.css" media="all"> 


<?php
if(isset($status))
{
	if($status=="")
	$this->load->view('common/javascript');
}
else
	$this->load->view('common/javascript');	

$this->load->view('common/time');
?>


<!-- Angular -->
<script src="<?php echo base_url(); ?>include/js/angular/angular.min.js"></script>
<script src="<?php echo base_url(); ?>include/js/angular/ng-table.js"></script>
<script src="<?php echo base_url(); ?>include/js/angular/angular-resource.js"></script>
<script src="<?php echo base_url(); ?>include/js/angular/angular-mocks.js"></script>
<script src="<?php echo base_url(); ?>include/js/angular/ng-table-export.src.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>include/js/angular/ng-table.css">
<div class="row">
    <div style="padding-left:10px" class="col-md-6">
        <div class="judul"><?php echo $this->session->userdata("title"); ?></div>
        <div class="sub_judul"><?php echo $this->session->userdata("subtitle"); ?></div>
    </div>
    <div style="padding-right:10px" class="col-md-6 right">
        <div class="date"><?php echo date('d M Y') ?>  - <span id="show_clock" class="jam"></span></div>
    </div>
</div>