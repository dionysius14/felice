<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <?php $this->load->view('common/head_no_angular'); ?>
        <?php
        $this->load->view('common/time');
        $ubah = (isset($ubah)) ? $ubah : '';
        $alert = $this->session->userdata("error");
        $this->session->unset_userdata("error");
        ?>
        <?php $this->load->view('common/menu'); ?>
    </head>
    <body ng-app="main" style="overflow-x:hidden; background-image:url('<?php echo base_url(); ?>include_front/img/felice_trans.png'),linear-gradient(#ffe4eb, #ff799e);background-repeat: no-repeat;background-position: center;>
        <br/><br/><br/><br/>
        <div id="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-1">
                        </div> 
                        <div class="col-md-10">  
                            <center><h4><b>Catatan:</b></h4></center>
                            <div style="margin: auto 20%;">
                                <p><i>1. Pilih file yang diperoleh dari menu Backup Database.</i></p>
                                <p><i>2. Setelah berhasil melakukan RESTORE, maka Anda akan otomatis keluar dari sistem terlebih dahulu.</i></p>
                                <p>--------------------------------------------------------------------------------------------------------------</p>
                            </div>
                        </div> 
                        <div class="col-md-1">
                        </div> 
                    </div> 
                    <div class="row">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-10"> 
                            <center><?php echo form_open_multipart(site_url('pengaturan/databased/restore_now/')); ?>
                                <input type="file" name="userfile" size="40" style="width: 240px"/></center>
                        </div> 
                        <div class="col-md-1">
                        </div>
                    </div>		  
                    <div class="row">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-10">
                            <center><input type="submit" id="button" name="simpan" value="Restore"  class="btn btn-success" /></center>
                        </div> 
                        <div class="col-md-1">
                        </div>
                        <?php echo form_close(); ?>
                    </div>   
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        <?php $this->load->view('common/footer'); ?>
        <script src="<?php echo base_url(); ?>include/js/bootstrap.min.js"></script> 
    </body>
</html>