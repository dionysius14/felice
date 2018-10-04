<div id="overlay"></div>
<div id="form_popup" class="pop" style="left:35.3%;width:30%;padding-bottom: 20px;">
    <button class="btn pull-right btn-danger" style="font-size:16px; border-radius: 0px" onclick="close_remodal()" title="Tutup">&Chi;</button>
    <center><h2>Slider</h2></center>
    <br/>
    <div class="pdiv">
        <?php echo form_open_multipart('slider/add', 'id="form_user"'); ?>  
		<div class="row">
            <div class="col-md-3 padding_top">Foto</div>
            <div class="col-md-9"> 
			 <input type="file" name="userfile"/>
			 <span class="warning"><?php echo form_error('userfile'); ?>  </span>
			 <img width="30%" id="prev" name="prev" src='' />
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
                <input type="submit" onclick="" id="button" name="simpan" value="Simpan"  class="btn btn-success" />
                <a name="batal" onclick="close_remodal()" class="btn btn-danger">Batal</a>
            </div>
        </div> 
        <?php echo form_close(); ?>  
    </div>
</div>	
