<div id="overlay"></div>
<div id="form_popup" class="pop" style="left:30.3%;width:40%;padding-bottom: 20px;">
    <button class="btn pull-right btn-danger" style="font-size:16px; border-radius: 0px" onclick="close_remodal()" title="Tutup">X</button>
    <center><h2>Pengaturan Footer</h2></center>
    <br/>
    <div class="pdiv">
        <?php echo form_open('pengaturan/footer/add', 'id="form_footer"'); ?> 
		
		 <div class="row">
            <div class="col-md-3">Isi Footer</div>
            <div class="col-md-9"> 
                <textarea class="form-control" id="footer_isi" name="footer_isi" cols="40" rows="4"><?php echo set_value('footer_isi', ''); ?></textarea>  
                <span class="warning"><?php echo form_error('footer_isi'); ?> </span>
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
                <a type="submit" name="batal" value="Batal" onclick="close_remodal()" class="btn btn-danger" >Batal </a>

            </div> 
        </div>

    </div>	
</div>	
