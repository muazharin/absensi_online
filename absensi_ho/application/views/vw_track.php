<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-map map-icon"></i>
                    <a href="#">Tracking</a>
                </li>
                <li class="active">Tracking Data</li>
            </ul><!-- /.breadcrumb -->
        </div>
        <div class="page-content">
            <div class="page-header">
                <h1>
                    Tracking Data
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Data Karyawan
                    </small>
                </h1>
            </div><!-- /.page-header -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="col-xs-6">
                                <button class="btn btn-success btn-xs" id="btn_add" onclick="func_ref()"><i class="ace-icon fa fa-refresh bigger-60"></i> Refresh Tabel</button>
                            </div>
                            <div class="col-xs-6">
                                <div class="input-group">
                                    <input class="form-control date-picker" id="date_absen_track" type="text" data-date-format="dd-mm-yyyy" />
                                    <span class="input-group-addon">
                                        <i class="fa fa-calendar bigger-110"></i>
                                    </span>
                                </div>
                                <br>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="control-group">
                                <div class="radio" id="myRadio">
                                    <label>
                                        <input name="radioB" type="radio" class="ace" value="in" checked />
                                        <span class="lbl"> Masuk</span>
                                    </label>
                                    <label>
                                        <input name="radioB" type="radio" class="ace" value="rest" />
                                        <span class="lbl"> Istirahat</span>
                                    </label>
                                    <label>
                                        <input name="radioB" type="radio" class="ace" value="done_rest" />
                                        <span class="lbl"> Setelah Istirahat</span>
                                    </label>
                                    <label>
                                        <input name="radioB" type="radio" class="ace" value="gohome" />
                                        <span class="lbl"> Pulang</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="col-sm-12" id="id_users">
                                <table id="tb_user_track" class="table table-bordered table-hover" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div id="mapId" style="width: 100%; height: 325px"></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- Modal -->
        <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Tambah User Baru</h5>
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> -->
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama </label>
                                        <div class="col-sm-9">
                                            <input type="text" id="in_name" placeholder="Masukkan Nama User" class="col-xs-10 col-sm-5" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>
                                        <div class="col-sm-9">
                                            <input type="text" id="in_email" placeholder="Masukkan Email User" class="col-xs-10 col-sm-5" />
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <div class="clearfix form-actions">
                                        <div class="col-md-offset-3 col-md-9"> -->
                                        <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Close</button>
                                        <button type="button" onclick="func_add_usr()" class="btn btn-primary btn-md">Save changes</button>
                                        <!-- </div>
                                    </div> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var date_absen = $('#date_absen_track').val();
        list_users(date_absen);
    });
    var name_user = '';

    function func_ref() {
        var date_absen = $('#date_absen_track').val();
        console.log(date_absen);
        list_users(date_absen);
        name_user = '';
        // initMap();
    }

    function list_users(date_absen) {
        console.log(date_absen);
        $('#tb_user_track').dataTable().fnDestroy();
        $('#tb_user_track').dataTable({
            "paging": true,
            "scrollY": true,
            "scrollX": true,
            "searching": true,
            "select": true,
            "bLengthChange": true,
            "scrollCollapse": true,
            "bPaginate": true,
            "bInfo": true,
            "bSort": false,
            "processing": true,
            "serverSide": true,
            "order": [],
            "fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {},
            "ajax": {
                "url": "<?php echo site_url('track/list_users_track'); ?>",
                "type": "POST",
                "data": {
                    'date_absen': date_absen
                },
                "error": function(request) {
                    // alert(request.responseText);
                    swal("Terjadi kesalahan! Coba reload halaman :')", {
                        icon: "error"
                    });
                    console.log(request.responseText);
                }
            },
            "columnDefs": [{
                "targets": [],
                "orderable": false,
            }, ],
        });
    }



    $('#tb_user_track').on('click', 'tr', function() {
        var dataRow = $('#tb_user_track').DataTable().row(this).data();
        name_user = dataRow[1];
        var date_absen = $('#date_absen_track').val();
        var radioB = $('input[name=radioB]:checked', '#myRadio').val();
        initMap(name_user, date_absen, radioB);
    });

    $('input[type=radio][name=radioB]').change(function() {
        var date_absen = $('#date_absen_track').val();
        var radioB = $('input[name=radioB]:checked', '#myRadio').val();
        initMap(name_user, date_absen, radioB);
    });

    function initMap(name_user, date_absen, radioB) {
        var location = {
            lat: -6.2697739,
            lng: 106.7824544
        };
        var map = new google.maps.Map(document.getElementById("mapId"), {
            zoom: 10,
            center: location,
            mapTypeId: 'roadmap'
        });
        var marker = new google.maps.Marker({
            position: location,
            map: map
        });

        setMarkers(map, name_user, date_absen, radioB);
    }


    function setMarkers(map, name_user, date_absen, radioB) {
        $.ajax({
            type: 'POST',
            url: "<?= site_url('track/setMark') ?>",
            dataType: "JSON",
            cache: false,
            data: {
                'name_user': name_user,
                'date_absen': date_absen,
                'radioB': radioB
            },
            success: function(data) {
                var str_loc = data[0]['loc'];
                var latlang = str_loc.split(',');
                var latitude = parseFloat(latlang[0]);
                var longitude = parseFloat(latlang[1]);
                console.log(str_loc);
                var iconx = {
                    url: 'https://cdn.pixabay.com/photo/2014/04/03/10/03/google-309740_1280.png',
                    scaledSize: new google.maps.Size(25, 35)
                };
                var shape = {
                    coords: [1, 1, 1, 20, 18, 20, 18, 1],
                    type: 'poly'
                };
                var marker = new google.maps.Marker({
                    position: {
                        lat: latitude,
                        lng: longitude,
                    },
                    map: map,
                    icon: iconx,
                    title: data[0]['nama'],
                    zIndex: 1,
                    idx: data[0]['id_user'],
                    animation: google.maps.Animation.DROP
                });
            },
            error: function(request) {
                console.log(request.responseText);
            }
        });


    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCJ6cZ8t_HBdb2439Chkitvr162RbJ3h4&callback=initMap" type="text/javascript"></script>