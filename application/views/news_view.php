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
                    site_url = '<?php echo site_url(); ?>/news/';
                    base_url = '<?php echo base_url(); ?>/';
                    window.onload = function() {
                    //$('.loading_gear_gif').show();
                            if (error != "")
                    {
                    if (ubah != '')
                    {
                    $('#button').attr("name", "ubah");
                            $('#button').attr("value", "Ubah");
                            $('#form_user').attr("action", site_url + 'edit');
                    }
                    show_remodal();
                    }

                    if (_alert != "")
                            alertify.success(_alert);
                    }

			function form_insert(){
				if(_insert!='0')
					show_remodal();
				else{
						setTimeout(function() 
							{ 
								$('.loading_gear_gif').hide();
							}, 800);
						alertify.error("Anda tidak mempunyai akses untuk insert!");
					}
			}

            function form_edit(index)
            {
 				if(_edit!='0'){
					$('.loading_gear_gif').show();
                    $.ajax({
                    type: "POST",
                            url: "<?php echo site_url('news/news_show_by_id') ?>",
                            timeout: 20000,
                            data:
                            'datamodel=' + $(index).attr("datamodel")

                            , success: function(result) {
                            // alert(result);
                            if (result != "[]")
                            {
                            var arr = JSON.parse(result);
										$('#prev').attr("src",arr[0].news_foto);
                                    $('#news_judul').val(arr[0].news_judul);
                                    $('#news_konten').val(arr[0].news_konten);
                                    $('#news_date').val(arr[0].news_date);
                                    $('#datamodel').val(arr[0].datamodel);
                                    $('#button').attr("name", "ubah");
                                    $('#button').attr("value", "Ubah");
                                    $('#form_user').attr("action", site_url + 'edit');
                                    show_remodal();
                            }
                            else
                                    alertify.error("Kode Eror [100] : Terjadi kesalahan saat eksekusi permintaan<br/><br/>Status: gagal menerima data dari server");
                                    //	$('.loading_gif').hide();
                            }

                    });
					
					}else{
					alertify.error("Anda tidak mempunyai akses untuk edit!");
				}
            }

            function deleted(index)
            {
                if(_delete!='0'){

            confirm("Apakah anda yakin akan menghapus data ini ?", function(e) {
            if (e) {
            $.ajax({
            type: "POST",
                    url: "<?php echo site_url('news/delete_permanent') ?>",
                    timeout: 20000,
                    data:
                    'datamodel=' + $(index).attr("datamodel")

                    , success: function(result) {
                    if (result == "1")
                    {
                    alertify.success('Hapus sukses');
                            location.reload();
                            window.location.replace("<?php echo site_url('news/'); ?>");
                    }
                    else if (result == "2")
                    {
                    alertify.success('Data Tidak Dapat Dihapus');
                    }
                    else
                            alertify.error("Kode Eror [100] : Terjadi kesalahan saat eksekusi permintaan<br/><br/>Status: gagal menerima data dari server");
                            $('.loading_gear_gif').hide();
                    },
                    error: function(html) {
                    alertify.error("Kode Eror [" + html.status + "]<br/><br/>Status:" + html.statusText);
                            $('.loading_gear_gif').hide();
                    }

            });
            } else {
            alertify.error("Anda batal menghapus data");
                    $('.loading_gear_gif').hide();
            }
            });
                    }else{
                     alertify.error("Anda tidak mempunyai akses untuk hapus!");
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
                            $http.get('<?php echo site_url('news/news_show'); ?>')
                            .success(function($user) {
                            data = $user;
                                    $scope.tableParams = new NgTableParams({
                                    page: 1, // show first page
                                            count: 10, // count per page
                                            filter: {
                                            news_date: '', // initial filter
                                            },
                                            sorting: {
                                            news_date: 'asc'    // initial sorting
                                            }

                                    }, {
                                    data: data,
                                    });
                                    $('.loading_gear_gif').hide();
                            })
                            //
                    });</script>
    </head>
    <body ng-app="main" style="overflow-x:hidden;background-image:url('<?php echo base_url(); ?>include_front/img/felice_trans.png'),linear-gradient(#ffe4eb, #ff799e);background-repeat: no-repeat;background-position: center;">
        <div id="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <br/>
                    <div ng-controller="DemoCtrl">
                        
						<div class="row" >
                            <div class="col-md-9">
                                <button type="submit" onclick="form_insert()" class="btn btn-success"><img src="<?php echo base_url(); ?>include/img/add.png" />Tambah Data</button>
                            </div>
                            <div class="col-md-1  pull-right">
                                <button ng-click="tableParams.sorting({})" onclick="clear_sorting()" class="btn btn-default pull-right">Clear Sorting</button>
                            </div>
							<div class="col-md-2" style="padding-right:30px" >
                                <input class="form-control" type="search" id="filter_search" ng-model="news.user_name" placeholder="Cari Data..." aria-label="Cari Data" />
                            </div>
                        </div>
                        <div class="row" >
                            <div class="col-md-12">
                                <table ng-table="tableParams"  class="table table-striped ng-table-responsive" export-csv="csv">
                                    <tr ng-repeat="(datamodel, news) in $data | filter:news.user_name as results" ng-class="{ 'emphasis': news.role_nama == '<?php echo $this->session->userdata("role_nama") ?>'}">
										<td align="center" class="col-md-2 borderkanan" data-title="'Foto'" sortable="'news_foto'">
											<img width="50%" src="<?php echo base_url(); ?>/include_front/img/news/{{news.news_foto}}" />
                                        </td> 
                                        <td class="news" data-title="'Judul'" sortable="'news_judul'">
                                            <span id="user_name_{{$index}}" >{{news.news_judul}}</span>
                                        </td> 
                                        <td class="news" data-title="'Konten'" sortable="'news_konten'">
                                            <span id="user_name_{{$index}}" >{{news.news_konten}}</span>
                                        </td> 
                                        <td class="news" data-title="'Tgl'" sortable="'news_date'">
                                            <span id="user_name_{{$index}}" >{{news.news_date}}</span>
                                        </td> 


                                        <td class="action" data-title="'Actions'" >
                                    <center><a href="" id="news-{{$index}}" datamodel={{news.datamodel}} class="btn btn-default btn-xs" onclick="form_edit(this)"><img src="<?php echo base_url(); ?>include/img/edit.png" /></a>   
                                        <a href="" id="news-{{$index}}" datamodel={{news.datamodel}} class="btn btn-default btn-xs" onclick="deleted(this)"><img src="<?php echo base_url(); ?>include/img/delete.png" /></a>   </center>
                                    </td>

                                    <a style="display:none" >
                                        <span >{{news.datamodel}}</span>
                                    </a>
                                    </tr> 
                                    <tr ng-if="results.length == 0">
                                        <td colspan="3" >
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
        <?php $this->load->view("news_crud_view"); // remodal  ?>
        <?php $this->load->view('common/footer'); ?>
        <script src="<?php echo base_url(); ?>include/js/bootstrap.min.js"></script> 
    </body>
</html>