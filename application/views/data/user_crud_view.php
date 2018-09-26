<div id="overlay"></div>
<div id="form_popup" class="pop" style="left:35.3%;width:30%;padding-bottom: 20px;">
    <button class="btn pull-right btn-danger" style="font-size:16px; border-radius: 0px" onclick="close_remodal()" title="Tutup">&Chi;</button>
    <center><h2>Data User</h2></center>
    <br/>
    <div class="pdiv">
        <?php echo form_open('data/users/add', 'id="form_user"'); ?> 
        <div class="row">
            <div class="col-md-3">Username</div>
            <div class="col-md-9"> 
                <input  class="form-control" id="user_name" name="user_name"  type="text" size="28"  value="<?php echo set_value('user_name', ''); ?>" /> 
                <span class="warning"><?php echo form_error('user_name'); ?> </span>
            </div> 
        </div>  
        <div class="row">
            <div class="col-md-3">Password</div>
            <div class="col-md-9">  
                <input  class="form-control" id="user_password" name="user_password"  type="password" size="28"  value="<?php echo set_value('user_password', ''); ?>" /> 
                <span class="warning"><?php echo form_error('user_password'); ?> </span>
            </div> 
        </div> 
        <div class="row">
            <div class="col-md-3">Role</div>
            <div class="col-md-9">  
                <?php
                $query = "SELECT * FROM data_role where is_delete=0 ORDER BY role_nama asc ";
                $result = mysql_query($query);
                ?>
                <select class="form-control" id="role_id"   attribute="is_selected" name="role_id">
                    <?php
                    echo "<option value='0'>Silahkan Pilih</option>";
                    while ($row = mysql_fetch_array($result)) {
                        echo "<option value=" . $row['role_id'] . ">" . $row['role_nama'] . "</option>";
                    }
                    ?>        
                </select>
                <span class="warning"><?php echo form_error('role_id'); ?> </span>
            </div> 
        </div> 
        <div id="validateMsg"></div>
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
