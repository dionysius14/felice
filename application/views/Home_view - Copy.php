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
                    <a href="<?php echo site_url('home/index');?>" class="selected">
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
                <li><a href="#">How To Order</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Article / News</a></li>
                <li><a href="#">Testimonial</a></li>
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
                         <a href="#menu-toggle" class="margin_menu btn btn-default" id="menu-toggle">Menu</a>
                    </div>
                </div> 
				<div class="row">
						<!--KATEGORI ACRYLIC-->
                    	<?php
						if(count($acrylic) > 0)
						{
						?>
						<div class="col-md-3">						
						<div class="main">
							<div class="work">
								<a href="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_acrylic ?>" rel="lightbox[gallery]">
									<img src="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_acrylic ?>" class="media" alt=""/>
									<div class="caption">
										<div class="work_title">
											<h1><?php echo $nama_acrylic ?></h1>
											<h4 style="padding-left:10px;padding-right:10px;font-size:16px">
											<?php echo $deskripsi_acrylic ?>
											</h4> 
												<?php
													$this->load->view("common/footer_produk");
												?>
										</div>
									</div>
								</a>
							</div>
						</div>
						</div>
						<?php
						}
						?>
						<!--KATEGORI BANTAL-->
						<?php
						if(count($bantal) > 0)
						{
						?>
						<div class="col-md-3">						
						<div class="main">
							<div class="work">
								<a href="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_bantal ?>" rel="lightbox[gallery]">
									<img src="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_bantal ?>" class="media" alt=""/>
									<div class="caption">
										<div class="work_title">
											<h1><?php echo $nama_bantal ?></h1>
											<h4 style="padding-left:10px;padding-right:10px;font-size:16px">
											<?php echo $deskripsi_bantal ?>
											</h4>
												<?php
													$this->load->view("common/footer_produk");
												?>
										</div>
									</div>
								</a>
							</div>
						</div>
						</div>
						<?php
						}
						?>
						<!--KATEGORI GANTUNGAN-->
						<?php
						if(count($gantungan) > 0)
						{
						?>
						<div class="col-md-3">						
						<div class="main">
							<div class="work">
								<a href="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_gantungan ?>" rel="lightbox[gallery]">
									<img src="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_gantungan ?>" class="media" alt=""/>
									<div class="caption">
										<div class="work_title">
											<h1><?php echo $nama_gantungan ?></h1>
											<h4 style="padding-left:10px;padding-right:10px;font-size:16px">
											<?php echo $deskripsi_gantungan ?>
											</h4>
												<?php
													$this->load->view("common/footer_produk");
												?>
										</div>
									</div>
								</a>
							</div>
						</div>
						</div>
						<?php
						}
						?>
						<!--KATEGORI GELAS MUG-->
						<?php
						if(count($gelas_mug) > 0)
						{
						?>
						<div class="col-md-3">						
						<div class="main">
							<div class="work">
								<a href="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_gelas_mug ?>" rel="lightbox[gallery]">
									<img src="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_gelas_mug ?>" class="media" alt=""/>
									<div class="caption">
										<div class="work_title">
											<h1><?php echo $nama_gelas_mug ?></h1>
											<h4 style="padding-left:10px;padding-right:10px;font-size:16px">
											<?php echo $deskripsi_gelas_mug?>
											</h4>
												<?php
													$this->load->view("common/footer_produk");
												?>
										</div>
									</div>
								</a>
							</div>
						</div>
						</div>
						<?php
						}
						?>
						<!--KATEGORI HANDUK-->
						<?php
						if(count($handuk) > 0)
						{
						?>
						<div class="col-md-3">						
						<div class="main">
							<div class="work">
								<a href="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_handuk ?>" rel="lightbox[gallery]">
									<img src="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_handuk ?>" class="media" alt=""/>
									<div class="caption">
										<div class="work_title">
											<h1><?php echo $nama_handuk?></h1>
											<h4 style="padding-left:10px;padding-right:10px;font-size:16px">
											<?php echo $deskripsi_handuk ?>
											</h4>
												<?php
													$this->load->view("common/footer_produk");
												?>
										</div>
									</div>
								</a>
							</div>
						</div>
						</div>
						<?php
						}
						?>
						<!--KATEGORI KIPAS-->
						<?php
						if(count($kipas) > 0)
						{
						?>
						<div class="col-md-3">						
						<div class="main">
							<div class="work">
								<a href="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_kipas ?>" rel="lightbox[gallery]">
									<img src="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_kipas ?>" class="media" alt=""/>
									<div class="caption">
										<div class="work_title">
											<h1><?php echo $nama_kipas ?></h1>
											<h4 style="padding-left:10px;padding-right:10px;font-size:16px">
											<?php echo $deskripsi_kipas ?>
											</h4>
												<?php
													$this->load->view("common/footer_produk");
												?>
										</div>
									</div>
								</a>
							</div>
						</div>
						</div>
						<?php
						}
						?>
						<!--KATEGORI PAKETAN-->
						<?php
						if(count($paketan) > 0)
						{
						?>
						<div class="col-md-3">						
						<div class="main">
							<div class="work">
								<a href="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_paketan ?>" rel="lightbox[gallery]">
									<img src="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_paketan ?>" class="media" alt=""/>
									<div class="caption">
										<div class="work_title">
											<h1><?php echo $nama_paketan ?></h1>
											<h4 style="padding-left:10px;padding-right:10px;font-size:16px">
											<?php echo $deskripsi_paketan ?>
											</h4>
												<?php
													$this->load->view("common/footer_produk");
												?>
										</div>
									</div>
								</a>
							</div>
						</div>
						</div>
						<?php
						}
						?>
						<!--KATEGORI PLAKAT-->
						<?php
						if(count($plakat) > 0)
						{
						?>
						<div class="col-md-3">						
						<div class="main">
							<div class="work">
								<a href="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_plakat ?>" rel="lightbox[gallery]">
									<img src="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_plakat ?>" class="media" alt=""/>
									<div class="caption">
										<div class="work_title">
											<h1><?php echo $nama_plakat ?></h1>
											<h4 style="padding-left:10px;padding-right:10px;font-size:16px">
											<?php echo $deskripsi_plakat ?>
											</h4>
												<?php
													$this->load->view("common/footer_produk");
												?>
										</div>
									</div>
								</a>
							</div>
						</div>
						</div>
						<?php
						}
						?>
						<!--KATEGORI POUCH-->
						<?php
						if(count($pouch) > 0)
						{
						?>
						<div class="col-md-3">						
						<div class="main">
							<div class="work">
								<a href="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_pouch ?>" rel="lightbox[gallery]">
									<img src="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_pouch ?>" class="media" alt=""/>
									<div class="caption">
										<div class="work_title">
											<h1><?php echo $nama_pouch ?></h1>
											<h4 style="padding-left:10px;padding-right:10px;font-size:16px">
											<?php echo $deskripsi_pouch ?>
											</h4>
												<?php
													$this->load->view("common/footer_produk");
												?>
										</div>
									</div>
								</a>
							</div>
						</div>
						</div>
						<?php
						}
						?>
						<!--KATEGORI TAS-->
						<?php
						if(count($tas) > 0)
						{
						?>
						<div class="col-md-3">						
						<div class="main">
							<div class="work">
								<a href="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_tas ?>" rel="lightbox[gallery]">
									<img src="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_tas ?>" class="media" alt=""/>
									<div class="caption">
										<div class="work_title">
											<h1><?php echo $nama_tas ?></h1>
											<h4 style="padding-left:10px;padding-right:10px;font-size:16px">
											<?php echo $deskripsi_tas ?>
											</h4>
												<?php
													$this->load->view("common/footer_produk");
												?>
										</div>
									</div>
								</a>
							</div>
						</div>
						</div>
						<?php
						}
						?>
						<!--KATEGORI TEMPAT CINCIN-->
						<?php
						if(count($tempat_cincin) > 0)
						{
						?>
						<div class="col-md-3">						
						<div class="main">
							<div class="work">
								<a href="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_tempat_cincin ?>" rel="lightbox[gallery]">
									<img src="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_tempat_cincin ?>" class="media" alt=""/>
									<div class="caption">
										<div class="work_title">
											<h1><?php echo $nama_tempat_cincin ?></h1>
											<h4 style="padding-left:10px;padding-right:10px;font-size:16px">
											<?php echo $deskripsi_tempat_cincin ?>
											</h4>
												<?php
													$this->load->view("common/footer_produk");
												?>
										</div>
									</div>
								</a>
							</div>
						</div>
						</div>
						<?php
						}
						?>
						<!--KATEGORI TEMPAT GULA-->
						<?php
						if(count($tempat_gula) > 0)
						{
						?>
						<div class="col-md-3">						
						<div class="main">
							<div class="work">
								<a href="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_tempat_gula ?>" rel="lightbox[gallery]">
									<img src="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_tempat_gula ?>" class="media" alt=""/>
									<div class="caption">
										<div class="work_title">
											<h1><?php echo $nama_tempat_gula ?></h1>
											<h4 style="padding-left:10px;padding-right:10px;font-size:16px">
											<?php echo $deskripsi_tempat_gula ?>
											</h4>
												<?php
													$this->load->view("common/footer_produk");
												?>
										</div>
									</div>
								</a>
							</div>
						</div>
						</div>
						<?php
						}
						?>
						<!--KATEGORI TEMPAT LADA-->
						<?php
						if(count($tempat_lada) > 0)
						{
						?>
						<div class="col-md-3">						
						<div class="main">
							<div class="work">
								<a href="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_tempat_lada ?>" rel="lightbox[gallery]">
									<img src="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_tempat_lada ?>" class="media" alt=""/>
									<div class="caption">
										<div class="work_title">
											<h1><?php echo $nama_tempat_lada ?></h1>
											<h4 style="padding-left:10px;padding-right:10px;font-size:16px">
											<?php echo $deskripsi_tempat_lada ?>
											</h4>
												<?php
													$this->load->view("common/footer_produk");
												?>
										</div>
									</div>
								</a>
							</div>
						</div>
						</div>
						<?php
						}
						?>
						<!--KATEGORI TEMPAT LILIN-->
						<?php
						if(count($tempat_lilin) > 0)
						{
						?>
						<div class="col-md-3">						
						<div class="main">
							<div class="work">
								<a href="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_tempat_lilin ?>" rel="lightbox[gallery]">
									<img src="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_tempat_lilin ?>" class="media" alt=""/>
									<div class="caption">
										<div class="work_title">
											<h1><?php echo $nama_tempat_lilin ?></h1>
											<h4 style="padding-left:10px;padding-right:10px;font-size:16px">
											<?php echo $deskripsi_tempat_lilin ?>
											</h4>
												<?php
													$this->load->view("common/footer_produk");
												?>
										</div>
									</div>
								</a>
							</div>
						</div>
						</div>
						<?php
						}
						?>
						<!--KATEGORI TEMPAT TISSUE-->
						<?php
						if(count($tempat_tissue) > 0)
						{
						?>
						<div class="col-md-3">						
						<div class="main">
							<div class="work">
								<a href="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_tempat_tissue ?>" rel="lightbox[gallery]">
									<img src="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_tempat_tissue ?>" class="media" alt=""/>
									<div class="caption">
										<div class="work_title">
											<h1><?php echo $nama_tempat_tissue ?></h1>
											<h4 style="padding-left:10px;padding-right:10px;font-size:16px">
											<?php echo $deskripsi_tempat_tissue ?>
											</h4>
												<?php
													$this->load->view("common/footer_produk");
												?>
										</div>
									</div>
								</a>
							</div>
						</div>
						</div>
						<?php
						}
						?>
						<!--KATEGORI TEMPAT PENSIL-->
						<?php
						if(count($tempat_pensil) > 0)
						{
						?>
						<div class="col-md-3">						
						<div class="main">
							<div class="work">
								<a href="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_tempat_pensil ?>" rel="lightbox[gallery]">
									<img src="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_tempat_pensil ?>" class="media" alt=""/>
									<div class="caption">
										<div class="work_title">
											<h1><?php echo $nama_tempat_pensil ?></h1>
											<h4 style="padding-left:10px;padding-right:10px;font-size:16px">
											<?php echo $deskripsi_tempat_pensil ?>
											</h4>
												<?php
													$this->load->view("common/footer_produk");
												?>
										</div>
									</div>
								</a>
							</div>
						</div>
						</div>
						<?php
						}
						?>
						<!--KATEGORI TEPLOK-->
						<?php
						if(count($teplok) > 0)
						{
						?>
						<div class="col-md-3">						
						<div class="main">
							<div class="work">
								<a href="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_teplok ?>" rel="lightbox[gallery]">
									<img src="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_teplok ?>" class="media" alt=""/>
									<div class="caption">
										<div class="work_title">
											<h1><?php echo $nama_teplok ?></h1>
											<h4 style="padding-left:10px;padding-right:10px;font-size:16px">
											<?php echo $deskripsi_teplok ?>
											</h4>
												<?php
													$this->load->view("common/footer_produk");
												?>
										</div>
									</div>
								</a>
							</div>
						</div>
						</div>
						<?php
						}
						?>
						<!--KATEGORI TOPLES-->
						<?php
						if(count($toples) > 0)
						{
						?>
						<div class="col-md-3">						
						<div class="main">
							<div class="work">
								<a href="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_toples ?>" rel="lightbox[gallery]">
									<img src="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_toples ?>" class="media" alt=""/>
									<div class="caption">
										<div class="work_title">
											<h1><?php echo $nama_toples ?></h1>
											<h4 style="padding-left:10px;padding-right:10px;font-size:16px">
											<?php echo $deskripsi_toples ?>
											</h4>
												<?php
													$this->load->view("common/footer_produk");
												?>
										</div>
									</div>
								</a>
							</div>
						</div>
						</div>
						<?php
						}
						?>
						<!--KATEGORI TUMBLER-->
						<?php
						if(count($tumbler) > 0)
						{
						?>
						<div class="col-md-3">						
						<div class="main">
							<div class="work">
								<a href="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_tumbler ?>" rel="lightbox[gallery]">
									<img src="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_tumbler ?>" class="media" alt=""/>
									<div class="caption">
										<div class="work_title">
											<h1><?php echo $nama_tumbler ?></h1>
											<h4 style="padding-left:10px;padding-right:10px;font-size:16px">
											<?php echo $deskripsi_tumbler ?>
											</h4>
												<?php
													$this->load->view("common/footer_produk");
												?>
										</div>
									</div>
								</a>
							</div>
						</div>
						</div>
						<?php
						}
						?>
						<!--KATEGORI UNDANGAN-->
						<?php
						if(count($undangan) > 0)
						{
						?>
						<div class="col-md-3">						
						<div class="main">
							<div class="work">
								<a href="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_undangan ?>" rel="lightbox[gallery]">
									<img src="<?php echo base_url(); ?>include_front/img/produk/<?php echo $foto_undangan ?>" class="media" alt=""/>
									<div class="caption">
										<div class="work_title">
											<h1><?php echo $nama_undangan ?></h1>
											<h4 style="padding-left:10px;padding-right:10px;font-size:16px">
											<?php echo $deskripsi_undangan ?>
											</h4>
												<?php
													$this->load->view("common/footer_produk");
												?>
										</div>
									</div>
								</a>
							</div>
						</div>
						</div>
						<?php
						}
						?>
			
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
