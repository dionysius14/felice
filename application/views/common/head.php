 
<link rel="SHORTCUT ICON" href="<?php echo base_url(); ?>include_front/img/test.png">
<title>Agnes Parcel'n Souvenir | <?php echo $this->session->userdata("subtitle"); ?></title>
<link rel="stylesheet" href="<?php echo base_url(); ?>include/css/bootstrap-theme.css" media="all">
<link rel="stylesheet" href="<?php echo base_url(); ?>include/css/bootstrap.css" media="all">
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

<!-- Format Date -->
<script src="<?php echo base_url(); ?>include/js/format_date/date.js"></script>
<!-- TAB -->
<link rel="stylesheet" href="<?php echo base_url(); ?>include/css/tab/zozo.tabs.min.css" media="all">
<script src="<?php echo base_url(); ?>include/js/tab/zozo.tabs.min.js"></script>


<?php
if(isset($status))
{
	if($status=="")
	{
	$this->load->view('common/javascript');
	$this->load->view('common/language');
	}
}
else
{
	$this->load->view('common/javascript');
	$this->load->view('common/language');
}
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