<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
       
        <?php $this->load->view('common/head'); ?>
        <?php $this->load->view('common/time'); 
		
        $ubah = (isset($ubah)) ? $ubah : ''; 
        $alert = $this->session->userdata("error"); 
        $this->session->unset_userdata("error"); 
		
		?>
        <?php $this->load->view('common/menu'); ?>
		<script>
		function previewFile(){
		
			document.getElementById("preview_image").style.display = '';
		   var preview =  document.getElementById('preview_image'); //selects the query named img
		   var file =  document.getElementById('userfile').files[0]; //selects the query named img
		   //var file    = document.querySelector('input[type=file]').files[0]; //sames as here
		   var reader  = new FileReader();
			//alert(document.getElementById('us_file').files[0]['type']);
		   reader.onloadend = function () {
			   preview.src = reader.result;
		   }
		   
		   if (file) {
			   reader.readAsDataURL(file); //reads the data as a URL
			   //upload_file();
		   } else {
			   preview.src = "";
			   alert("bukan gambar");
		   }
	}
	
		function edited_jquery()
		{

			var preview =  document.getElementById('preview_image'); //selects the query named img
		   var file =  document.getElementById('userfile').files[0]; //selects the query named img
		   
			//alert(file);
		   var fd = new FormData(); 
			fd.append("userfile", file);
		   if (file) {
			   //reader.readAsDataURL(file); //reads the data as a URL
				$.ajax({
					type:'POST',
					//url: $(this).attr('action'),
					url: '<?php echo site_url('pengaturan/profile/upload_image'); ?>', 
					cache:false,
					data:fd,
					contentType: false,
					processData: false,
					success:function(data){
					// alert(data);  
					if(data=="1")
					{
						$.ajax ({
				
							type: "POST",
							url: "<?php echo site_url('pengaturan/profile/edit') ?>",
							timeout: 20000,
							data: {  
							datamodel:$("#datamodel").val(),
							profile_title:$("#profile_title").val(),
							profile_alamat:$("#profile_alamat").val(),
							profile_telepon:$("#profile_telepon").val(),
							profile_fax:$("#profile_fax").val(),
							
							},
							success: function( result ) { 
									  location.reload();  
							}
						});		
					}
					else if(data=="0")
						alertify.error("upload gagal");
					else
					location.reload();
					},
					error: function(html) { 
					     alertify.error("Kode Eror ["+html.status+"]<br/><br/>Status:"+html.statusText);
					}
				});
			}else
			{ 
					$.ajax ({
				
							type: "POST",
							url: "<?php echo site_url('pengaturan/profile/edit') ?>",
							timeout: 20000,
							data: {  
								datamodel:$("#datamodel").val(),
								profile_title:$("#profile_title").val(),
								profile_alamat:$("#profile_alamat").val(),
								profile_telepon:$("#profile_telepon").val(),
								profile_fax:$("#profile_fax").val(),
								
							},
							success: function( result ) { 
									location.reload(); 
							},
							error: function(html) { 
							  alertify.error("Kode Eror ["+html.status+"]<br/><br/>Status:"+html.statusText);
							}
						});		
			}
		 
		}
		
		</script>
    </head>
    <body ng-app="main" style="overflow-x:hidden; background-image:url('<?php echo base_url(); ?>include_front/img/felice_trans.png'),linear-gradient(#ffe4eb, #ff799e);background-repeat: no-repeat;background-position: center;>
			<br/><br/><br/><br/>
            <div id="container">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
					<div class="row">
						<div class="col-md-4">
						</div>
						<div class="col-md-1">Title</div>
						<div class="col-md-4"> 
							<input id="profile_title" name="profile_title" type="text" size="40" required="" value="<?php echo set_value('user_name', $profile->profile_title); ?>" /> 
							 <span class="warning"><?php echo form_error('profile_title'); ?> </span>
						</div> 
						<div class="col-md-3">
						</div>
					</div>					
					<div class="row">
						<div class="col-md-4">
						</div>
						<div class="col-md-1">Alamat</div>
						<div class="col-md-4"> 
							<input id="profile_alamat" name="profile_alamat" type="text" autocomplete="off" size="40" required="" value="<?php echo set_value('password_lama',$profile->profile_alamat); ?>" /> 
							 <span class="warning"><?php echo form_error('profile_alamat'); ?> </span>
						</div> 
						<div class="col-md-3">
						</div>
					</div> 
					<div class="row">
						<div class="col-md-4">
						</div>
						<div class="col-md-1">Telp</div>
						<div class="col-md-4"> 
							<input id="profile_telepon" name="profile_telepon" type="text" size="40" required="" value="<?php echo set_value('password_baru', $profile->profile_telepon); ?>" /> 
							 <span class="warning"><?php echo form_error('profile_telepon'); ?> </span>
						</div> 
						<div class="col-md-3">
						</div>
					</div>    
					<div class="row">
						<div class="col-md-4">
						</div>
						<div class="col-md-1">Fax</div>
						<div class="col-md-4"> 
							<input id="profile_fax" name="profile_fax" type="text" size="40" required="" value="<?php echo set_value('password_baru_konfirmasi', $profile->profile_fax); ?>" /> 
							 <span class="warning"><?php echo form_error('profile_fax'); ?> </span>
						</div> 
						<div class="col-md-3">
						</div>
					</div>  
					<div class="row">
						<div class="col-md-4">
						</div>
						<div class="col-md-1">Logo</div>
						<div class="col-md-4"> 
							<input type="file" name="userfile" id="userfile" onchange="previewFile()" value=<?php echo set_value('userfile', $profile->profile_logo); ?>>    
							
						</div> 
						<div class="col-md-3">
						</div>
					</div>
					<div class="row">  
						<div class="col-md-3">
						</div>
						<div class="col-md-6"> 
							<center><img style="border:1px solid black" id="preview_image" src="<?php echo set_value('userfile', base_url()."include/img/".$profile->profile_logo); ?>"></center>
						</div>  
						<div class="col-md-3">
						</div>
					</div>    
					<div class="row" hidden> 
						<div class="col-md-12">  
							<input id="datamodel" name="datamodel" type="text" size="28" value="<?php echo set_value('datamodel', $profile->profile_id); ?>" />  
							 <span class="warning"><?php echo form_error('datamodel'); ?> </span>
						 
						</div> 
						</div>  
					<br/>
                         <div class="row">
						<div class="col-md-5">
						</div>
						
						<div class="col-md-2">
						<center><input type="submit" id="button" name="simpan" onclick="edited_jquery()" value="Simpan"  class="btn btn-success" /><center>
						</div> 
						<div class="col-md-5">
						</div>
					</div>   
                        </div>
                        <div class="col-md-1"></div>
                    </div>
            </div>
            <?php $this->load->view('common/footer'); ?>
            <script src="<?php echo base_url(); ?>include/js/bootstrap.min.js"></script> 
	</body>
</html>