<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<?php 
					$product="";
					if(isset($select))
					{
						if(!empty($get_all_kategori))
						{
							foreach($get_all_kategori as $val)
							{
							$true="";
							if($select==$val->kategori_id)
							$titel=$val->kategori_nama;
							}
						}
					}						
					else
					{
						$product="class='selected'";
					}
					?>
					
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
                    
					
					<a href="#" <?php echo $product; ?> >Produk</a>
					 <ul class="submenu" style="overflow:auto;height:350px">
						<?php
						if(!empty($get_all_kategori))
						{
							foreach($get_all_kategori as $val)
							{
							$true="";
							if($select==$val->kategori_id)
							$true="class='selected'";
							
							?>
							<li><a href="<?php echo site_url('kategori/produk/index/'.$val->kategori_id.'');?>" <?php echo $true; ?>><?php echo $val->kategori_nama;?></a></li>
							<?php 
							}
						}?> 
						
						
					</ul>
						
                </li>
               	<li><a href="<?php echo site_url('howtop/index');?>">How To Order</a></li>
                <li><a href="<?php echo site_url('faqp/index');?>" >FAQ</a></li>
                <li><a href="<?php echo site_url('newsp/index');?>" class="selected">Article / News</a></li>
                <li><a href="<?php echo site_url('testimonialp/index');?>" >Testimonial</a></li>
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
				
				<div class="row">
					<div style="margin-top:10px;margin-left:60px;margin-right:60px" class="col-md-11"> 
						<?php echo form_open('home/search', 'id="form_add"'); ?>
							<div style="margin-top:5px" class="col-md-1 col-block">
								<center>Harga:</center>
							</div>
							<div style="margin-left:10px; margin-right:10px" class="col-md-2">	
						 		<input type="number" id="min" name="min" class="form-control" placeholder="Harga Terendah">
							</div>
							<div style="margin-top:5px" class="col-md-1">
								<center>-</center>
							</div>	
							<div style="margin-left:10px; margin-right:10px" class="col-md-2">	
						 		<input type="number" id="max" name="max" class="form-control" placeholder="Harga Tertinggi">
						 	</div>
							<div style="margin-top:5px" class="col-md-1 col-block">
								<center>Sort:</center>
							</div>	
							<div style="margin-left:10px; margin-right:10px" class="col-md-4">	
								<select class="form-control" id="sort" name="sort" >
								  <option value="up">Harga Tinggi - Rendah [Z-a]</option>
								  <option value="down">Harga Rendah - Tinggi [A-z]</option>
								</select>
							</div>			
					</div>
					<div style="margin-top:10px;margin-left:60px;margin-right:60px" class="col-md-11"> 
						 	<div style="margin-top:5px" class="col-md-1 col-block">
								<center>Cari:</center>
							</div>	
							<div style="margin-left:10px; margin-right:10px" class="col-md-5">	
								<input type="text" id="keyword" name="keyword" class="form-control" placeholder="Kata Pencarian...">
							</div>	
							<div style="margin-left:10px; margin-right:10px" class="col-md-1">	
							</div>	
							<div style="margin-left:10px; margin-right:10px" class="col-md-2">	
								<center><input type="submit" class="btn btn-success" value="Cari"></center>
							</div>	
					</div>
					<?php echo form_close(); ?> 
				</div>	
				<br/>
				<div class="row">
					<?php
						if(!empty($get_all))
						{
							foreach($get_all as $val)
							{
							?>
							
							<div class="col-md-3">						
							<div class="main">
								<div class="work">
									<a href="<?php echo site_url("produkdetail?id=".$val->produk_id.""); ?>" >
										<figure>
											<center>
											<img 
													style="width:80%; length:80%; margin-left:10px; margin-right:10px; margin-top:10px; margin-bottom:10px;"
													src="<?php echo base_url(); ?>include_front/img/produk/<?php echo $val->produk_foto; ?>" 
													class="media" 
													alt=""
											/>
											</center>
										</figure>
										<!--div class="caption">
											<div class="work_title">
												<h1><?php //echo $val->produk_nama; ?></h1>
												<h4 style="padding-left:10px;padding-right:10px;font-size:16px">
												<?php //echo $val->produk_deskripsi; ?>
												</h4>
											</div>
										</div-->
									</a>
								</div>
								<center><?php echo $val->produk_nama; ?></center>
								<center><b>Rp <?php echo number_format($val->produk_harga, 0, ',', '.'); ?></b></center><br/>
							</div>
							</div>
						
							<?php
							}
						}
						?>
						
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
