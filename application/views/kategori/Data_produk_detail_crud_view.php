<div id="overlay"></div>
<div id="form_popup" class="pop" style="left:27.3%;width:45%;padding-bottom: 20px;">
    <button class="btn pull-right btn-danger" style="font-size:16px; border-radius: 0px" onclick="close_remodal()" title="Tutup">X</button>
    <center><h2>Data Produk</h2></center>
    <br/>
    <div class="pdiv">
        <?php echo  form_open_multipart('kategori/data_produk_detail/add', 'id="form_produk"'); ?> 
		
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
                <input type="submit" id="button" name="simpan" value="Upload"  class="btn btn-success" />
                <?php echo form_close(); ?>  
                <a type="submit" name="batal" value="Batal" onclick="close_remodal()" class="btn btn-danger" >Batal</a>
            </div>
        </div> 
    </div>	  
</div>	
