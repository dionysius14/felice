<div id="overlay"></div>
<div id="form_popup" class="pop" style="left:27.3%;width:45%;padding-bottom: 20px;">
    <button class="btn pull-right btn-danger" style="font-size:16px; border-radius: 0px" onclick="close_remodal()" title="Tutup">X</button>
    <center><h2>Data Produk</h2></center>
    <br/>
    <div class="pdiv">
        <?php echo  form_open_multipart('kategori/data_produk/add', 'id="form_produk"'); ?> 
		 <div class="row">
        <div class="col-md-3  padding_top">Kategori</div>
            <div class="col-md-9"> 
                <?php
                $query = "SELECT * FROM kategori where is_delete=0 ORDER BY kategori_id asc ";
                $result = mysql_query($query);
                ?>
                <select  class="form-control margin_bottom" id="kategori_id" name="kategori_id">
                    <?php
                    echo "<option value='0'>Silahkan Pilih</option>";
                    while ($row = mysql_fetch_array($result)) {
                        echo "<option value=" . $row['kategori_id'] . ">" . $row['kategori_nama'] . "</option>";
                    }
                    ?>        
                </select>
                <span class="warning"><?php echo form_error('kategori_id'); ?> </span>
            </div>  
        </div> 
        <div class="row">
            <div class="col-md-3 padding_top">Nama Produk</div>
            <div class="col-md-9"> 
                <input class="form-control" id="produk_nama" name="produk_nama" type="text" size="28"  value="<?php echo set_value('produk_nama', ''); ?>" /> 
                <span class="warning"><?php echo form_error('produk_nama'); ?> </span>
            </div> 
        </div> 
		<div class="row">
            <div class="col-md-3 padding_top">Deskripsi Produk</div>
            <div class="col-md-9"> 
                <textarea class="form-control margin_bottom" id="produk_deskripsi" name="produk_deskripsi" type="text" size="28"  value="<?php echo set_value('produk_deskripsi', ''); ?>"></textarea><span class="warning"><?php echo form_error('produk_deskripsi'); ?> </span>
            </div> 
        </div>
		<!--<div class="row">
            <div class="col-md-3 padding_top">Keterangan</div>
            <div class="col-md-9"> 
                <textarea class="form-control margin_bottom" id="produk_ket" name="produk_ket" type="text" size="28"  value="<?php echo set_value('produk_ket', ''); ?>"> </textarea>
                <span class="warning"><?php echo form_error('produk_ket'); ?> </span>
            </div> 
        </div>-->
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
