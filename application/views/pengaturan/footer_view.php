<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"> 

        <?php $this->load->view('common/head'); ?>
        <?php
        $ubah = (isset($ubah)) ? $ubah : '';
        $alert = $this->session->userdata("error");
        $this->session->unset_userdata("error");
        ?>
        <?php $this->load->view('common/menu'); ?>
        <script type="text/javascript">
            error = '<?php echo $error; ?>';
                    ubah = '<?php echo $ubah; ?>';
                    _alert = '<?php echo $alert; ?>';
					_insert = '<?php echo $this->session->userdata('akses_insert');?>';
                    _edit = '<?php echo $this->session->userdata('akses_edit'); ?>';
                    _delete = '<?php echo $this->session->userdata('akses_delete'); ?>'; 
					site_url = '<?php echo site_url(); ?>/pengaturan/footer/';
                    base_url = '<?php echo base_url(); ?>/';
                    window.onload = function () {
                    $('.loading_gif').show();
                            if (error != "")
                    {
                    if (ubah != '')
                    {
                    $('#button').attr("name", "ubah");
                            $('#button').attr("value", "Ubah");
                            $('#form_footer').attr("action", site_url + 'edit');
                    }
                    show_remodal();
                    }

                    if (_alert != "")
                            alertify.success(_alert);
                    }

					
			
            function form_edit(index)
            {
				 if(_edit!='0'){
				 $('.loading_gear_gif').show();
                    $.ajax ({
                    type: "POST",
                            url: "<?php echo site_url('pengaturan/footer/footer_show_by_id') ?>",
                            timeout: 20000,
                            data:
                            'datamodel=' + $(index).attr("datamodel")

                            , success: function(result) {
                            if (result != "[]")
                            {
                            var arr = JSON.parse(result);
                                    $('#footer_isi').val(arr[0].footer_isi);
									$('#datamodel').val(arr[0].datamodel);
                                    $('#button').attr("name", "ubah");
                                    $('#button').attr("value", "Ubah");
                                    $('#form_footer').attr("action", site_url + 'edit');
                                    show_remodal();
                            }
                            else
                                    alertify.error("Kode Eror [100] : Terjadi kesalahan saat eksekusi permintaan<br/><br/>Status: gagal menerima data dari server");
                                    $('.loading_gear_gif').hide();
                            }

                    });
					}else{
					alertify.error("Anda tidak mempunyai akses untuk edit!");
				}
            }

            function close_remodal()
            {
            $('.loading_gear_gif').show();
                    window.location = site_url;
                    hide_remodal();
            }

            function clear_sorting()
            {
            $("#filter_search").val("");
                    location.reload();
            }

            var app = angular.module('main', ['ngTable', 'ngTableExport']).
                    controller('DemoCtrl', function($scope, $filter, $http, NgTableParams, $sce) {
                    var data = [];
                            $http.get('<?php echo site_url('pengaturan/footer/footer_show'); ?>')
                            .success(function($footer) {
                            // alert($outlet);
                            data = $footer;
                                    $scope.tableParams = new NgTableParams({
                                    page: 1, // show first page
                                            count: 10, // count per page
                                            filter: {
                                            footer_nama: '', // initial filter
                                            },
                                            sorting: {
                                            footer_nama: 'asc'     // initial sorting
                                            }

                                    }, {
                                    data:data,
                                    });
                                    $('.loading_gif').hide();
                            })
                            //
                    });</script>
    </head>
    <body ng-app="main">
        <div id="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <br/>
                    <div ng-controller="DemoCtrl">
                        <div class="row" >
                            <div class="col-md-9">
                                 </div>
                            <div class="col-md-2" style="padding-right:20px;">
                                <a class="btn btn-primary pull-right" ng-mousedown="csv.generate()" ng-href="{{ csv.link()}}" download="outlet.csv">Export to CSV</a>
                            </div>
                           
                        </div>
                       
                        <div class="row" >
                            <div class="col-md-12">
                                <table ng-table="tableParams"  class="table table-striped ng-table-responsive" export-csv="csv">
                                    <tr ng-repeat="(datamodel, user) in $data | filter:user.footer_nama as results" ng-class="{ 'emphasis': user.footer_nama == '<?php echo $this->session->userdata("footer_nama") ?>'}">
										
										<td class="col-md-2 borderkanan" data-title="'Nama Footer'" sortable="'footer_nama'">
                                            <span id="footer_nama_{{$index}}" >{{user.footer_nama}}</span>
                                        </td> 
                                        <td class="col-md-2 borderkanan" data-title="'Isi Footer'" sortable="'footer_isi'"> 
                                            <span id="outlet_alamat_{{$index}}" >{{user.footer_isi}}</span>  
                                        </td>
                                       
                                        <td class="col-md-1" data-title="'Actions'" >
                                    <center><a href="" id="user-{{$index}}" datamodel={{user.datamodel}} class="btn btn-default btn-xs" onclick="form_edit(this)"><img src="<?php echo base_url(); ?>include/img/edit.png" /></a>   </center>
                                    </td>

                                    <a style="display:none" >
                                        <span >{{user.datamodel}}</span>
                                    </a>
                                    </tr> 
                                    <tr ng-if="results.length == 0">
                                        <td colspan="5" >
                                    <center> <strong>Tidak ada data...</strong></center>
                                    </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row" >
<!--<span style="padding-right: 26px;margin-top: 126px;">Jumlah data tampil</span>-->
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>	
        <?php $this->load->view("pengaturan/footer_crud_view"); // remodal  ?>
        <?php $this->load->view('common/footer'); ?>
        <script src="<?php echo base_url(); ?>include/js/bootstrap.min.js"></script> 		
    </body>
</html>