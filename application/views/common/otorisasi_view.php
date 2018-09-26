<div id="overlay_otorisasi"></div>
<div id="form_popup_otorisasi" class="pop" style="left:32.3%;width:35%;padding-bottom: 20px;">
    <button class="btn pull-right btn-danger" style="font-size:16px; border-radius: 0px" onclick="close_remodal()" title="Tutup">X</button> 
    <div class="pdiv"> 
        <div class="row">
            <div class="col-md-12">Masukkan Password</div> 
        </div>  
        <div class="row">
            
            <div class="col-md-12"> 
                <input class="form-control" id="password_otorisasi" name="password_otorisasi" type="password" size="28"  value="<?php echo set_value('password_otorisasi', ''); ?>" />  
            </div> 
        </div>    
        <div class="row">
            <div class="col-md-12" style="text-align: center">
                <a type="submit" id="button" name="ok" onclick="otorisasi()" class="btn btn-success" > Ok</a>
                <a type="submit" name="batal" value="Batal" onclick="close_remodal()" class="btn btn-danger" >Batal</a>
            </div>
        </div> 
    </div>	  
</div>	
