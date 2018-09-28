<div id="overlay"></div>
<div id="form_popup" class="pop" style="left:32.3%;width:40%;padding-bottom: 20px;">
    <button class="btn pull-right btn-danger" style="font-size:16px; border-radius: 0px" onclick="close_remodal()" title="Tutup">&Chi;</button>
    <center><h2>News</h2></center>
    <br/>
    <div class="pdiv">
        <?php echo form_open_multipart('news/add', 'id="form_user"'); ?>
        <div class="row">
            <div class="col-md-3 padding_top">Judul</div>
            <div class="col-md-9"> 
                <input class="form-control" id="news_judul" name="news_judul" type="text" size="28"  value="<?php echo set_value('news_judul', ''); ?>" /> 
                <span class="warning"><?php echo form_error('news_judul'); ?> </span>
            </div> 
        </div>  
        <div class="row">
		<div class="col-md-3 padding_top">News Date</div>
            <div class="col-md-9"> 
                <input class="form-control" id="news_date" name="news_date" type="date" size="28"  value="<?php echo set_value('news_date', ''); ?>" /> 
                <span class="warning"><?php echo form_error('news_date'); ?> </span>
            </div> 
        </div>  
        <div class="row">
            <div class="col-md-3">Konten</div>
            <div class="col-md-9"> 
                <textarea class="form-control" id="news_konten" name="news_konten" type="text" size="28"  value="<?php echo set_value('news_konten', ''); ?>"> </textarea>
            </div> 
        </div>  
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
