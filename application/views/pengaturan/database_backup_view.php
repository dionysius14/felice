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
    <body ng-app="main" style="overflow-x:hidden; background-image:url('<?php echo base_url(); ?>include_front/img/felice_trans.png'),linear-gradient(#ffe4eb, #ff799e);background-repeat: no-repeat;background-position: center; >
        <br/><br/><br/><br/>
        <div id="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-1">
                        </div> 
                        <div class="col-md-10">  
                            <center><h4><b>Catatan:</b></h4>
                                <i><p>Pastikan bahwa tidak ada USER yang mengakses sistem ketika proses Backup database dilakukan.</p></i>
                            </center>
                        </div> 
                        <div class="col-md-1">
                        </div> 
                    </div> 
                    <div class="row">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-10"> 
                            <?php echo form_open(site_url('pengaturan/databased/backup_now/')); ?> 
                        </div> 
                        <div class="col-md-1">
                        </div>
                    </div>		 
                    <div class="row">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-10">
                            <center><input type="submit" id="button" no_loading name="simpan" value="Backup"  class="btn btn-success" /></center>
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