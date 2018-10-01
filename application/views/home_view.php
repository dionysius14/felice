<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Felice Florist Souvenir | Home</title>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>include_front/img/title.png">

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
	 <style>
	* {box-sizing: border-box;}
	body {font-family: Verdana, sans-serif;}
	.mySlides {display: none;}
	img {vertical-align: middle;}

	/* Slideshow container */
	.slideshow-container {
	  max-width: 1000px;
	  position: relative;
	  margin: auto;
	}

	/* Caption text */
	.text {
	  color: #f2f2f2;
	  font-size: 15px;
	  padding: 8px 12px;
	  position: absolute;
	  bottom: 8px;
	  width: 100%;
	  text-align: center;
	}

	/* Number text (1/3 etc) */
	.numbertext {
	  color: #f2f2f2;
	  font-size: 12px;
	  padding: 8px 12px;
	  position: absolute;
	  top: 0;
	}

	/* The dots/bullets/indicators */
	.dot {
	  height: 15px;
	  width: 15px;
	  margin: 0 2px;
	  background-color: #bbb;
	  border-radius: 50%;
	  display: inline-block;
	  transition: background-color 0.6s ease;
	}

	.active {
	  background-color: #717171;
	}

	/* Fading animation */
	.fade {
	  -webkit-animation-name: fade;
	  -webkit-animation-duration: 1.5s;
	  animation-name: fade;
	  animation-duration: 1.5s;
	}

	@-webkit-keyframes fade {
	  from {opacity: .4} 
	  to {opacity: 1}
	}

	@keyframes fade {
	  from {opacity: .4} 
	  to {opacity: 1}
	}

	/* On smaller screens, decrease text size */
	@media only screen and (max-width: 300px) {
	  .text {font-size: 11px}
	}
	</style>
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
                    <a href="<?php echo site_url('home/index');?>" class="selected">
                       Home
                    </a>
                </li>
                <li>
                    <a href="#">Produk</a>
					 <ul class="submenu" style="overflow:auto;height:350px">
						<?php
						if(!empty($get_all_kategori))
						{
							foreach($get_all_kategori as $val)
							{
							$true="";
							if($select==$val->kategori_id)
							$true="selected";
							
							?>
							<li><a href="<?php echo site_url('kategori/produk/index/'.$val->kategori_id.'');?>" <?php echo $true; ?>><?php echo $val->kategori_nama;?></a></li>
							<?php 
							}
						}?>
					</ul>
                </li>
               	<li><a href="<?php echo site_url('howtop/index');?>">How To Order</a></li>
                <li><a href="<?php echo site_url('faqp/index');?>">FAQ</a></li>
                <li><a href="<?php echo site_url('newsp/index');?>">Article / News</a></li>
                <li><a href="<?php echo site_url('testimonialp/index');?>">Testimonial</a></li>
                <li><a href="<?php echo site_url('kontak/index');?>">Contact Us</a></li>
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
				<div class="row">
					<div class="slideshow-container">

						<div class="mySlides fade">
						  <div class="numbertext">1 / 3</div>
						  <img src="<?php echo base_url(); ?>include_front/img/slider/a.jpg" style="width:100%">
						  <div class="text">Caption Text</div>
						</div>

						<div class="mySlides fade">
						  <div class="numbertext">2 / 3</div>
						  <img src="<?php echo base_url(); ?>include_front/img/slider/a.jpg" style="width:100%">
						  <div class="text">Caption Two</div>
						</div>

						<div class="mySlides fade">
						  <div class="numbertext">3 / 3</div>
						  <img src="<?php echo base_url(); ?>include_front/img/slider/a.jpg" style="width:100%">
						  <div class="text">Caption Three</div>
						</div>

					</div>
					<br>

					<div style="text-align:center">
					  <span class="dot"></span> 
					  <span class="dot"></span> 
					  <span class="dot"></span> 
					</div>
				</div>
				<div class="row">
					<div style="margin-left:32px;margin-right:32px" class="col-md-11"> 
						<?php echo form_open('home/search', 'id="form_add"'); ?>
						 <div class="col-md-2">	
						 <input type="text" id="min" name="min" class="form-control" placeholder="Min Price">
						 </div>	
						 <div class="col-md-1">	
						 <center>-</center>
						 </div>	
						 <div class="col-md-2">
						 <input type="text" id="max" name="max" class="form-control" placeholder="Max Price">
						</div>	
					</div>	
				</div>	
				<br/>
				<div class="row">
					<div style="margin-left:32px;margin-right:32px" class="col-md-11">
						<div class="col-md-5">	
								<input type="text" id="filter" name="filter" class="form-control" placeholder="Keyword">
						</div>	
					</div>	
				</div>	
				<br/>
				<div class="row">
					<div style="margin-left:32px;margin-right:32px" class="col-md-11">
						<div class="col-md-5">	
								<input type="submit" id="filter" name="filter" class="form-control">
						</div>	
					</div>	
				</div>
				<?php echo form_close(); ?> 	
				<br/>				
				<div class="row">
						 <?php foreach($produk as $val){?>
						 <div class="col-md-3">						
							<div class="main">
								<div class="work">
									<a href="<?php echo base_url(); ?>include_front/img/produk/<?php echo $val->produk_foto;?>" rel="lightbox[gallery]">
										<img src="<?php echo base_url(); ?>include_front/img/produk/<?php echo $val->produk_foto; ?>" class="media" alt=""/>
										<div class="caption">
											<div class="work_title">
												<h1><?php echo $val->produk_nama; ?></h1>
												<h4 style="padding-left:10px;padding-right:10px;font-size:16px">
												<?php echo $val->produk_deskripsi; ?>
												</h4>
											</div>
										</div>
									</a>
								</div>
								<center><?php echo $val->produk_nama; ?></center>
								<center><b>Rp 24000</b></center>
							</div>
						</div>
						 <?php } ?>
				</div>
							<center><?php echo $this->pagination->create_links(); ?></center>
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
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); // Change image every 2 seconds
}
    </script>

</body>

</html>
