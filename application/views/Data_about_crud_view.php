<div id="overlay"></div>
<div id="form_popup" class="pop" style="left:30.3%;width:40%;padding-bottom: 20px;">
    <button class="btn pull-right btn-danger" style="font-size:16px; border-radius: 0px" onclick="close_remodal()" title="Tutup">X</button>
    <center><h2>Data Link Social Media</h2></center>
    <br/>
    <div class="pdiv">
        <?php echo form_open('data_about/add', 'id="form_about"'); ?> 
		
        <div class="row">
            <div class="col-md-3">Link Facebook</div>
            <div class="col-md-9"> 
                <input class="form-control" id="link_fb" name="link_fb" type="text" size="28"  value="<?php echo set_value('link_fb', ''); ?>" /> 
                <span class="warning"><?php echo form_error('link_fb'); ?> </span>
            </div> 
        </div> 
		<div class="row">
            <div class="col-md-3">Link Instagram #1</div>
            <div class="col-md-9"> 
                <input class="form-control" id="link_ig" name="link_ig" type="text" size="28"  value="<?php echo set_value('link_ig', ''); ?>" /> 
                <span class="warning"><?php echo form_error('link_ig'); ?> </span>
            </div> 
        </div>
<div class="row">
            <div class="col-md-3">Telepon</div>
            <div class="col-md-9"> 
                <input class="form-control" id="phone" name="phone" type="text" size="28"  value="<?php echo set_value('phone', ''); ?>" /> 
                <span class="warning"><?php echo form_error('phone'); ?> </span>
            </div> 
        </div>		
		<div class="row">
            <div class="col-md-3">Link Youtube</div>
            <div class="col-md-9"> 
                <input class="form-control" id="link_youtube" name="link_youtube" type="text" size="28"  value="<?php echo set_value('link_youtube', ''); ?>" /> 
                <span class="warning"><?php echo form_error('link_youtube'); ?> </span>
            </div> 
        </div> 
		<div class="row">
            <div class="col-md-3">Link Twitter</div>
            <div class="col-md-9"> 
                <input class="form-control" id="link_twitter" name="link_twitter" type="text" size="28"  value="<?php echo set_value('link_twitter', ''); ?>" /> 
                <span class="warning"><?php echo form_error('link_twitter'); ?> </span>
            </div> 
        </div> 
		<div class="row">
            <div class="col-md-3">Alamat</div>
            <div class="col-md-9"> 
                <input class="form-control" id="alamat" name="alamat" type="text" size="28"  value="<?php echo set_value('alamat', ''); ?>" /> 
                <span class="warning"><?php echo form_error('alamat'); ?> </span>
            </div> 
        </div>
		<div class="row">
            <div class="col-md-3">Latitude</div>
            <div class="col-md-9"> 
                <input class="form-control" id="latitude" name="latitude" type="text" size="28"  value="<?php echo set_value('latitude', ''); ?>" /> 
                <span class="warning"><?php echo form_error('latitude'); ?> </span>
            </div> 
        </div>
		<div class="row">
            <div class="col-md-3">Longitude</div>
            <div class="col-md-9"> 
                <input class="form-control" id="longitude" name="longitude" type="text" size="28"  value="<?php echo set_value('longitude', ''); ?>" /> 
                <span class="warning"><?php echo form_error('longitude'); ?> </span>
            </div> 
        </div>
		<div class="row">
            <div class="col-md-3">About Us</div>
            <div class="col-md-9"> 
                <textarea class="form-control" id="about_ket" name="about_ket" type="text" size="28"  value="<?php echo set_value('about_ket', ''); ?>"> </textarea>
            </div> 
        </div> 
        <div class="row" hidden> 
            <div class="col-md-12">  
                <input id="datamodel" name="datamodel" type="text" size="28" value="<?php echo set_value('datamodel', ''); ?>" />  
                <span class="warning"><?php echo form_error('datamodel'); ?> </span>
            </div> 
        </div> 
        <br/>
        <div class="row">
            <div class="col-md-12" style="text-align: center">
                <input type="submit" id="button" name="simpan" value="Simpan"  class="btn btn-success" />
                <?php echo form_close(); ?>  
                <a type="submit" name="batal" value="Batal" onclick="close_remodal()" class="btn btn-danger" >Batal</a>
            </div>
        </div> 
    </div>	  
</div>	
