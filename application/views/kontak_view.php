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

</head>

<body>

    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                 <li style="background:#FFF0F5; padding-top:0px;padding-bottom:10px;height:80px;" class="sidebar-brand">
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
                <li><a href="<?php echo site_url('kontak/index');?>" class="selected">Contact Us</a></li>
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
					<div class="col-lg-11">
							<div class="row">
							<div style="margin-left:32px" class="col-md-5">
								<h3>
									<center><font face="Comic Sans MS">Agnes Parcel'n Souvenir</font></center>

								</h3>
								<center><h4><?php echo $about->alamat; ?><h4></center>
								<center><b>Telepon : <?php echo $about->phone; ?></b></center>
								<center><table style="margin-top:20px">
									<tr>
										<td align="right" class="col-lg-2">
										<img style="padding-top:5px" src="<?php echo base_url(); ?>include_front/img/fb.png" class="media" alt=""/>
										</td>
										<td>
											  &nbsp; <a target="blank" href="<?php echo $about->link_fb; ?>">Facebook</a>	
										</td>
										<td align="right" class="col-lg-2">
										<img  style="padding-top:5px" src="<?php echo base_url(); ?>include_front/img/instagram.png" class="media" alt=""/>
										</td>
										<td>
											  &nbsp; <a target="blank" href="<?php echo $about->link_ig; ?>">Instagram</a>
										</td>
									</tr>
								</table></center>
							</div>
							<div style="padding-top:20px;margin-left:32px" class="col-md-6 col-xs-10">
							<?php echo form_open('kontak/post'); ?>
									<div class="form-group">
										<label for="name">
											Nama</label>
										<input type="text" class="form-control" id="name" name="name" placeholder="Enter nama" required="required" />
									</div>
									<div class="form-group">
										<label for="phone">
											Telepon</label>
										<div class="input-group">
											<span class="input-group-addon">
											<span class="glyphicon glyphicon-earphone"></span>
											</span>
											<input type="phone" class="form-control" id="phone" name="phone" placeholder="Enter telepon" required="required" /></div>
									</div>
									<div class="form-group">
										<label for="email">
											Email</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
											</span>
											<input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="required" /></div>
									</div>
									<div class="form-group">
										<label for="name">
											Message</label>
										<textarea name="message" id="message" name="message" class="form-control" rows="4" cols="25" required="required"
											placeholder="Message"></textarea>
									</div>
								</div>
								</div>
								<div class="row">
								<div style="margin-left:32px" class="col-md-5">
									
								</div>
								<div style="margin-left:32px" class="col-md-6 col-xs-10">
									<button type="submit" class="btn btn-felice pull-right" id="btnContactUs">
										Send Message</button>
										<?php echo form_close();?>	
								</div>
								</div>
					</div>
                </div>
                </div>
					<div id="map" style="width:100%;height:400px;margin-top:10px;"></div>

<script>
function myMap() {
        // The location of GB
        var gb = {lat: 0.4920993, lng: 101.4842535};
        // The map, centered at GB
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 18, center: gb, mapTypeId: google.maps.MapTypeId.ROADMAP});
        // The marker, positioned at GB
        //var iconBase = '<?//= base_url() . 'assets/theme/default/images/'?>//';
        var marker = new google.maps.Marker({
            position: gb,
            map: map,
            // icon: iconBase + 'marker1.png',
            title: "Nurani Jaya"
        });

        var content = '<div>Agnes Parcel n Souvenir</div>';

        var infowindow = new google.maps.InfoWindow({
            content: content,
            maxWidth: 350
        });
        // When this event is fired the Info Window is opened.
        google.maps.event.addListener(marker, 'click', function () {
            infowindow.open(map, marker);
        });

        google.maps.event.addListener(map, 'click', function () {
            infowindow.close();
        });
        infowindow.open(map, marker);
        google.maps.event.addDomListener(window, 'load', initMap);
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7sMs4pf-OWid7m8jPSrlcAMDzd2kOc6s&callback=myMap"></script>
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
