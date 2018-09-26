<div id="overlay"></div>
<div id="form_popup" class="pop" style="left:32.3%;width:35%;padding-bottom: 20px;">
    <button class="btn pull-right btn-danger" style="font-size:16px; border-radius: 0px" onclick="close_remodal()" title="Tutup">X</button>
    <center><h2>Data Kategori</h2></center>
    <br/>
    <div class="pdiv">
        <?php echo form_open('kategori/kategori/add', 'id="form_kategori"'); ?> 
        <div class="row">
            <div class="col-md-3">Kategori</div>
            <div class="col-md-9"> 
                <input class="form-control" id="kategori_nama" name="kategori_nama" type="text" size="28"  value="<?php echo set_value('kategori_nama', ''); ?>" /> 
            </div> 
        </div> 
		<div class="row">
            <div class="col-md-3">Keterangan</div>
            <div class="col-md-9"> 
                <textarea class="form-control" id="kategori_ket" name="kategori_ket" type="text" size="28"  value="<?php echo set_value('kategori_ket', ''); ?>"> </textarea>
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
                
                <a type="submit" name="batal" value="Batal" onclick="close_remodal()" class="btn btn-danger" >Batal</a>
            </div>
        </div> 
		<?php echo form_close(); ?>  
    </div>	  
</div>	
