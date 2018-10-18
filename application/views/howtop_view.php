<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agnes Parcel'n Souvenir | Home</title>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>include_front/img/test.jpg">

    <!-- Bootstrap Core CSS -->
	<link href="<?php echo base_url(); ?>include_front/css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>include_front/css/simple-sidebar.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>include_front/css/slimbox2.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>include_front/css/main.css">
	<script src="<?php echo base_url(); ?>include_front/js/main.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                 <li style="background:#fff; padding-top:0px;padding-bottom:10px;height:80px;" class="sidebar-brand">
                    <a href="<?php echo site_url('home/index');?>">
                       <img style="    margin-left: -71px;margin-top: -51px;"src="<?php echo base_url(); ?>include_front/img/1.png"/>
                    </a>
                </li>
				<li>
                    <a href="<?php echo site_url('home/index');?>">
                       Home
                    </a>
                </li>
                <li>
                    <a href="#">Produk</a>
					 <ul class="submenu" style="overflow:auto;height:350px">
							<li><a href="<?php echo site_url('kategori/produk/index/1');?>">Acrylic</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/2');?>">Bantal</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/3');?>">Gantungan</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/4');?>">Gelas & Mug</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/5');?>" >Handuk</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/6');?>">Kipas</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/7');?>">Paketan</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/8');?>">Plakat</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/9');?>">Pouch</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/10');?>">Tas</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/11');?>">Tempat Cincin</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/12');?>">Tempat Gula</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/13');?>">Tempat Lada</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/14');?>">Tempat Lilin</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/15');?>">Tempat Tisue</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/16');?>">Tempat Pensil</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/17');?>">Teplok</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/18');?>">Toples</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/19');?>">Tumbler</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/20');?>">Undangan</a></li>
					</ul>
                </li>
               	<li><a href="<?php echo site_url('howtop/index');?>" class="selected">How To Order</a></li>
                <li><a href="<?php echo site_url('faqp/index');?>" >FAQ</a></li>
                <li><a href="<?php echo site_url('newsp/index');?>">Article / News</a></li>
                <li><a href="<?php echo site_url('testimonialp/index');?>">Testimonial</a></li>
                <li><a href="<?php echo site_url('kontak/index');?>" >Contact Us</a></li>
				<li><a href="<?php echo site_url('about/index');?>">About Us</a></li>
            </ul>
			   <?php $this->load->view('common/footer_link'); ?>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						 <a href="<?php echo site_url('home/index');?>">
						   <center><img style="padding-bottom:1%;padding-top:1%;" width="300px" src="<?php echo base_url(); ?>include_front/img/test.jpg"/></center>
						</a>
					</div>
				</div>
                <div class="row">
                    <div class="col-md-12">
                         <a href="#menu-toggle" class="margin_menu btn btn-default" id="menu-toggle">Menu</a>
                    </div>
                </div> 
                <div style="margin-top:10px;margin-left:60px;margin-right:60px" class="col-md-11"> 
                    <div style="margin-top:5px" class="col-md-11">
                        <center>
                            <h1>Tata Cara Order</h1>
                        </center>
                    </div>  
                </div>
				<div class="row">
					<div style="margin-left:32px;margin-right:32px" class="col-md-11">
						<div class="row well">
						<?php
									$index = 1;
									foreach ($howto as $ht) {
									?>
									<h3><img src="<?php echo base_url(); ?>include/img/verifikasi.png" />&nbsp;<b>Step <?php echo $index ?></b></h3>
									<p> <?php echo $ht->howto_step ?></p>
						<?php
							$index++;}
							?>
						</div>
					</div>
                </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
	
    <script src="<?php echo base_url(); ?>include_front/js/jquery.js"></script>
	

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>include_front/js/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url(); ?>include_front/js/slimbox2.js"></script>
    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
