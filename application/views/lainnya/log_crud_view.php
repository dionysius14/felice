<div id="overlay"></div>
			<div id="form_popup" class="pop" style="left:25.3%;width:50%;padding-bottom: 20px;">
				 <button  class="btn pull-right btn-danger"  style="font-size:16px; border-radius: 0px" onclick="close_remodal()" title="Tutup">X</button>
				  <center><h2>Data Log</h2></center>
				  <br/>
				<div class="pdiv">
					<div class="row">
						<div class="col-md-2">Aksi</div>
						<div class="col-md-10"> 
							<input class="form-control" id="log_action" name="log_action" type="text" size="28" required="" value="<?php echo set_value('role_nama', ''); ?>" /> 
							 <span class="warning"><?php echo form_error('log_action'); ?> </span>
						</div> 
						
					</div>   
					<div class="row">
						<div class="col-md-2">Nama Menu</div>
						<div class="col-md-10">  
							<input class="form-control" id="log_menu" name="log_menu" type="text" size="28" required="" value="<?php echo set_value('role_nama', ''); ?>" /> 
							 <span class="warning"><?php echo form_error('log_menu'); ?> </span>
						 
						</div> 
						
						</div> 
					<div class="row">
						<div class="col-md-2">Kegiatan</div>
						<div class="col-md-10">  
							<textarea class="form-control" id="log_keterangan" name="log_keterangan" cols="40" rows="4"><?php echo set_value('role_keterangan',''); ?></textarea>  
							 <span class="warning"><?php echo form_error('log_keterangan'); ?> </span>
						 
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
						<div class="col-md-12 " style="text-align: center"SS>
						<input type="submit" id="button" name="simpan" value="Simpan"  class="btn btn-success" />
						<input type="submit" name="batal" value="Batal" onclick="close_remodal()" class="btn btn-danger" />
						
						</div>
					</div> 
					</div>
					  
				</div>	
			