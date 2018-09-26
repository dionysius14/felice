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

        <style>
            .dropdown.dropdown-scroll .dropdown-menu {
                max-height: 200px;
                width: 60px;
                overflow: auto;
            }
            .search-control {
                padding: 5px 10px;
            }
        </style>
        <script type="text/javascript">
            error = '<?php echo $error; ?>';
            ubah = '<?php echo $ubah; ?>';
            _alert = '<?php echo $alert; ?>';
            site_url = '<?php echo site_url(); ?>/lainnya/log/';
            base_url = '<?php echo base_url(); ?>/';

            window.onload = function() {
                $('.loading_gif').show();
                if (error != "")
                {
                    if (ubah != '')
                    {
                        $('#button').attr("name", "ubah");
                        $('#button').attr("value", "Ubah");
                        $('#form_log').attr("action", site_url + 'edit');
                    }
                    show_remodal();
                }

                if (_alert != "")
                    alertify.success(_alert);
            }



            function form_edit(index)
            {
                $('.loading_gif').show();
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('lainnya/log/log_show_by_id') ?>",
                    timeout: 20000,
                    data:
                            'datamodel=' + $(index).attr("datamodel")

                    , success: function(result) {
                        // alert(result);
                        if (result != "[]")
                        {
                            var arr = JSON.parse(result);

                            $('#log_nama').val(arr[0].log_nama);
                            $('#log_keterangan').val(arr[0].log_keterangan);
                            $('#datamodel').val(arr[0].datamodel);
                            $('#button').attr("name", "ubah");
                            $('#button').attr("value", "Ubah");
                            $('#form_log').attr("action", site_url + 'edit');
                            show_remodal();
                        }
                        else
                            alertify.error("Kode Eror [100] : Terjadi kesalahan saat eksekusi permintaan<br/><br/>Status: gagal menerima data dari server");

                        $('.loading_gif').hide();
                    }

                });

            }

            function form_lihat(index)
            {
                $('.loading_gif').show();
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('lainnya/log/log_show_by_id') ?>",
                    timeout: 20000,
                    data:
                            'datamodel=' + $(index).attr("datamodel")

                    , success: function(result) {
                        // alert(result);
                        if (result != "[]")
                        {
                            var arr = JSON.parse(result);
                            $('#log_action').val(arr[0].log_action);
                            $('#log_menu').val(arr[0].log_menu);
                            $('#log_keterangan').val(arr[0].log_keterangan);
                            $('#datamodel').val(arr[0].datamodel);
                            $('#button').hide();
                            /* $('#form_log').attr("");  */
                            show_remodal();
                        }
                        else
                            alertify.error("Kode Eror [100] : Terjadi kesalahan saat eksekusi permintaan<br/><br/>Status: gagal menerima data dari server");

                        $('.loading_gif').hide();
                    }

                });

            }

            function deleted(index)
            {
                /* if(akses_delete=="0")
                 {
                 alert("Anda tidak punya akses menghapus data ini!");
                 reload();
                 }
                 else{ */
                confirm("Apakah anda yakin akan menghapus data ini ?", function(e) {
                    if (e) {
                        $.ajax({
                            type: "POST",
                            url: "<?php echo site_url('lainnya/log/delete') ?>",
                            timeout: 20000,
                            data:
                                    'datamodel=' + $(index).attr("datamodel")

                            , success: function(result) {
                                // alert(result);
                                if (result == "1")
                                {
                                    alertify.success('Hapus sukses');
                                    //reload();	
                                    location.reload();
                                    window.location.replace("<?php echo site_url('lainnya/log/'); ?>");
                                }
                                else
                                    alertify.error("Kode Eror [100] : Terjadi kesalahan saat eksekusi permintaan<br/><br/>Status: gagal menerima data dari server");
                                $('.loading_gif').hide();
                            },
                            error: function(html) {
                                alertify.error("Kode Eror [" + html.status + "]<br/><br/>Status:" + html.statusText);
                                $('.loading_gif').hide();
                            }

                        });
                    } else {
                        alertify.error("Anda batal menghapus data detail");
                        $('.loading_gif').hide();
                    }
                });
                //}
            }

            function close_remodal()
            {
                $('.loading_gif').show();
                window.location = site_url;
                hide_remodal();
                $('#button').show();
            }

            function clear_sorting()
            {
                $("#filter_search").val("");

                location.reload();
            }

            var app = angular.module('main', ['ngTable', 'ngTableExport']).
                    controller('DemoCtrl', function($scope, $filter, $http, NgTableParams, $sce) {
                        var data = [];
                        $http.get('<?php echo site_url('lainnya/log/log_show'); ?>')
                                .success(function($log) {
                                    data = $log;
                                    $scope.tableParams = new NgTableParams({
                                        page: 1, // show first page
                                        count: 10, // count per page
                                        filter: {
                                            log_tanggal: '', // initial filter
                                        },
                                        sorting: {
                                            log_tanggal: 'asc'     // initial sorting
                                        }

                                    }, {
                                        data: data,
                                    });
                                    $('.loading_gif').hide();
                                })
                        //
                    });

        </script>
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
                            <div style="padding-right:20px" class="col-md-2" >
                                <a style="" class="btn btn-primary pull-right" ng-mousedown="csv.generate()" ng-href="{{ csv.link()}}" download="log.csv">Export to CSV</a>
                            </div>
                            <div style="" class="col-md-1 " >
                                <button style="" ng-click="tableParams.sorting({})" onclick="clear_sorting()" class="btn btn-default pull-right">Clear Sorting</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5"></div>
                            <div class="col-md-2">
                                <label for="singleSelect">Pilih Aksi</label>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5"></div>
                            <div class="col-md-2" style="padding-right: 1%;">
                                <select class="form-control" name="singleSelect" id="singleSelect" ng-model="user.log_action">
                                    <option value="">---Please select---</option> 
                                    <option value="Tambah">Tambah</option> 
                                    <option value="Lihat">Lihat</option>
                                </select>
                            </div>
                            <div style="text-align:right; padding-right: 1%;" class="col-md-2"> 
                                <input class="tgl_cari form-control" type="search" id="filter_search2" ng-model="user.log_tanggal_cari" placeholder="Masukkan Tanggal..." aria-label="date filter" />
                            </div>
                            <div class="col-md-3 pull-right">
                                <input style="" class="form-control" type="search" id="filter_search" ng-model="user.log_menu" placeholder="Cari Log..." aria-label="filter log" />		 
                            </div>
                        </div>
<!--<tt>singleSelect = {{user.log_action}}</tt>-->
                        <div class="row" >
                            <div class="col-md-12">
                                <table  ng-table="tableParams"   class="table ng-table-responsive" export-csv="csv">
                                    <tr ng-repeat="(datamodel, user) in $data | filter:user" ng-class="{ 'emphasis': user.log_action == '<?php echo $this->session->userdata("log_action") ?>'}">
                                        <td class="col-md-2" align="center" style="border-right:1px solid #DDD" data-title="'Tanggal'" sortable="'log_tanggal'">
                                            <span  id="log_tanggal_{{$index}}" >{{user.log_tanggal}}</span>
                                        </td> 

                                        <td class="col-md-1" data-title="'Aksi'" sortable="'log_action'">
                                            <span id="log_action_{{$index}}" >{{user.log_action}}</span>
                                        </td>    
                                        <td class="NamaMenu"  data-title="'Nama Menu'" sortable="'log_menu'">
                                            <span id="log_menu_{{$index}}" >{{user.log_menu}}</span>
                                        </td> 
                                        <td class="keterangan" data-title="'Kegiatan'" sortable="'log_keterangan'"> 
                                            <span id="log_keterangan_{{$index}}" >{{user.log_keterangan}}</span>  
                                        </td>

                                        <td class="action" data-title="'Actions'" >
                                    <center><a href="" id="log-{{$index}}" datamodel={{user.datamodel}} class="btn btn-default btn-xs" onclick="form_lihat(this)"><img src="<?php echo base_url(); ?>include/img/search.png" /></a>  
                                        </td>

                                        <a style="display:none" >
                                            <span >{{user.log_tanggal_cari}}</span>
                                        </a>
                                        <a style="display:none" >
                                            <span >{{user.datamodel}}</span>
                                        </a>

                                        </tr> 
                                        <tr ng-if="results.length == 0">
                                            <td>
                                        <center> <strong>Belum ada data...</strong></center>
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
        <?php $this->load->view("lainnya/log_crud_view"); // remodal  ?>
        <?php $this->load->view('common/footer'); ?>
        <script src="<?php echo base_url(); ?>include/js/bootstrap.min.js"></script> 
    </body>
</html>