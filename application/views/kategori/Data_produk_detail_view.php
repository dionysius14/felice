<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"> 

        <?php $this->load->view('common/head'); ?>
        <?php
		//echo $akses;
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
                    site_url = '<?php echo site_url(); ?>/kategori/data_produk_detail/';
                    base_url = '<?php echo base_url(); ?>/';
                    window.onload = function() {
					// alert(_edit);
						
							// $('.loading_gear_gif').show();
								if (error != "")
							{
								if (ubah != '')
								{
								$('#button').attr("name", "ubah");
										$('#button').attr("value", "Ubah");
										$('#form_produk').attr("action", site_url + 'edit');
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

			
            function deleted(index)
            {
            	if(_delete!='0'){

            confirm("Apakah anda yakin akan menghapus data ini ?", function(e) {
            if (e) {
            $.ajax({
            type: "POST",
                    url: "<?php echo site_url('kategori/data_produk_detail/delete') ?>",
                    timeout: 20000,
                    data:
                    'datamodel=' + $(index).attr("datamodel")

                    , success: function(result) {
                    if (result == "1")
                    {
                    alertify.success('Hapus sukses');
                            location.reload();
                            window.location.replace("<?php echo site_url('kategori/data_produk_detail/'); ?>");
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
            alertify.error("Anda batal menghapus data produk");
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
                            $http.get('<?php echo site_url('kategori/data_produk_detail/produk_show'); ?>')
                            .success(function($produk) {
                            data = $produk;
                                    $scope.tableParams = new NgTableParams({
                                    page: 1, // show first page
                                            count: 10, // count per page
                                            filter: {
                                            produk_id: '', // initial filter
                                            },
                                            sorting: {
                                            produk_id: 'asc'    // initial sorting
                                            }

                                    }, {
                                    data: data,
                                    });
                                    $('.loading_gear_gif').hide();
                            })
                            //
                    });</script>
    </head>
    <body ng-app="main" style="overflow-x:hidden; background-image:url('<?php echo base_url(); ?>include_front/img/felice_trans.png'),linear-gradient(#ffe4eb, #ff799e);background-repeat: no-repeat;background-position: center;>
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
                            <div class="col-md-2" style="padding-right:30px;">
							    <input class="form-control" type="search" id="filter_search" ng-model="produk.produk_nama" placeholder="Cari produk..." aria-label="Cari produk" />
								<!--<a class="btn btn-primary pull-right" ng-mousedown="csv.generate()" ng-href="{{ csv.link()}}" download="produk.csv">Export to CSV</a>  -->                      </div>
                            <div class="col-md-1">
                                <button ng-click="tableParams.sorting({})" onclick="clear_sorting()" class="btn btn-default pull-right">Clear Sorting</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 pull-right" style="margin-top: 1%;" >
                            </div>
                        </div>
                        <div class="row" >
                            <div class="col-md-12">
                                <table ng-table="tableParams"  class="table table-striped ng-table-responsive" export-csv="csv">
                                    <tr ng-repeat="(datamodel, produk) in $data | filter:produk.produk_nama as results" ng-class="{ 'emphasis': produk.produk_nama == '<?php echo $this->session->userdata("produk_nama") ?>'}">
                                         <td align="center" class="col-md-2 borderkanan" data-title="'Foto'" sortable="'produk_foto'">
											<img width="20%" src="<?php echo base_url(); ?>/include_front/img/produk/detail/{{produk.foto}}" />
                                        </td> 
										
                                        <td class="action" data-title="'Actions'" >
                                    <center>   
                                        <a href="" id="produk-{{$index}}" datamodel={{produk.datamodel}} class="btn btn-default btn-xs" onclick="deleted(this)"><img src="<?php echo base_url(); ?>include/img/delete.png" /></a>   </center>
                                    </td>

                                    <a style="display:none" >
                                        <span >{{produk.datamodel}}</span>
                                    </a>
                                    </tr> 
                                    <tr ng-if="results.length == 0">
                                        <td colspan="2" >
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
        <?php $this->load->view("kategori/data_produk_detail_crud_view"); // remodal  ?>
        <?php $this->load->view('common/footer'); ?>
        <script src="<?php echo base_url(); ?>include/js/bootstrap.min.js"></script> 
    </body>
</html>