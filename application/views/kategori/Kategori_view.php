<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Felice Florist Souvenir</title>
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

</head>

<body>

    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li style="background:#fff; padding-top:10px;padding-bottom:10px;height:80px" class="sidebar-brand">
                    <a href="<?php echo site_url('home/index');?>">
                       <img src="<?php echo base_url(); ?>include_front/img/test.png"/>
                    </a>
                </li>
				<li>
                    <a href="<?php echo site_url('home/index');?>">
                       Home
                    </a>
                </li>
                <li>
                    
					
					<?php 
					$acrylic="";
					$bantal="";
					$gantungan="";
					$gelas="";
					$handuk="";
					$kipas="";
					$paketan="";
					$plakat="";
					$pouch="";
					$tas="";
					$cincin="";
					$gula="";
					$lada="";
					$lilin="";
					$tisu="";
					$pensil="";
					$teplok="";
					$toples="";
					$tumbler="";
					$undangan="";
					$product="";
					if(isset($select))
					{
						
						if ($select=="1")
						{
							$acrylic="class='selected'";
						}
						else if ($select=="2")
						{
							$bantal="class='selected'";
						}
						else if ($select=="3")
						{
							$gantungan="class='selected'";
						}
						else if ($select=="4")
						{
							$gelas="class='selected'";
						}
						else if ($select=="5")
						{
							$handuk="class='selected'";
						}
						else if ($select=="6")
						{
							$kipas="class='selected'";
						}
						else if ($select=="7")
						{
							$paketan="class='selected'";
						}
						else if ($select=="8")
						{
							$plakat="class='selected'";
						}
						else if ($select=="9")
						{
							$pouch="class='selected'";
						}
						else if ($select=="10")
						{
							$tas="class='selected'";
						}
						else if ($select=="11")
						{
							$cincin="class='selected'";
						}
						else if ($select=="12")
						{
							$gula="class='selected'";
						}
						else if ($select=="13")
						{
							$lada="class='selected'";
						}
						else if ($select=="14")
						{
							$lilin="class='selected'";
						}
						else if ($select=="15")
						{
							$tisu="class='selected'";
						}
						else if ($select=="16")
						{
							$pensil="class='selected'";
						}
						else if ($select=="17")
						{
							$teplok="class='selected'";
						}
						else if ($select=="18")
						{
							$toples="class='selected'";
						}
						else if ($select=="19")
						{
							$tumbler="class='selected'";
						}
						else if ($select=="20")
						{
							$undangan="class='selected'";
						}
						else
						{
							$product="class='selected'";
						}
					}
						else
						{
							$product="class='selected'";
						}
					?>
					<a href="#" <?php echo $product; ?> >Produk</a>
					 <ul class="submenu" style="overflow:auto;height:350px">
					 
							<li><a href="<?php echo site_url('kategori/produk/index/1');?>" <?php echo $acrylic; ?>>Acrylic</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/2');?>" <?php echo $bantal; ?>>Bantal</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/3');?>" <?php echo $gantungan; ?>>Gantungan</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/4');?>" <?php echo $gelas; ?>>Gelas & Mug</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/5');?>" <?php echo $handuk; ?>>Handuk</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/6');?>" <?php echo $kipas; ?>>Kipas</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/7');?>" <?php echo $paketan; ?>>Paketan</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/8');?>" <?php echo $plakat; ?>>Plakat</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/9');?>" <?php echo $pouch; ?>>Pouch</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/10');?>" <?php echo $tas; ?>>Tas</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/11');?>" <?php echo $cincin; ?>>Tempat Cincin</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/12');?>" <?php echo $gula; ?>>Tempat Gula</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/13');?>" <?php echo $lada; ?>>Tempat Lada</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/14');?>" <?php echo $lilin; ?>>Tempat Lilin</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/15');?>" <?php echo $tisu; ?>>Tempat Tisue</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/16');?>" <?php echo $pensil; ?>>Tempat Pensil</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/17');?>" <?php echo $teplok; ?>>Teplok</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/18');?>" <?php echo $toples; ?>>Toples</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/19');?>" <?php echo $tumbler; ?>>Tumbler</a></li>
							<li><a href="<?php echo site_url('kategori/produk/index/20');?>" <?php echo $undangan; ?>>Undangan</a></li>
					</ul>
						
                </li>
                <li><a href="#">How To Order</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Article / News</a></li>
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
                         <a href="#menu-toggle" class="margin_menu btn btn-default" id="menu-toggle">Menu</a>
                    </div>
                </div> 
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
									<a href="<?php echo base_url(); ?>include_front/img/produk/<?php echo $val->produk_foto ?>" rel="lightbox[gallery]">
										<img src="<?php echo base_url(); ?>include_front/img/produk/<?php echo $val->produk_foto ?>" class="media" alt=""/>
										<div class="caption">
											<div class="work_title">
												<h1><?php echo $val->produk_nama ?></h1>
												<h3>
												Deskripsi
												</h3>
												<p><?php echo $val->produk_deskripsi ?><br/></p>
											</div>
										</div>
									</a>
								</div>
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
