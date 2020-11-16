<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Absensi MSAL HO</title>

    <meta name="description" content="Common form elements and layouts" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/assets/css/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/assets/css/font-awesome.css" />

    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/assets/css/jquery-ui.custom.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/assets/css/chosen.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/assets/css/bootstrap-datepicker3.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/assets/css/bootstrap-timepicker.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/assets/css/daterangepicker.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/assets/css/bootstrap-datetimepicker.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/assets/css/colorpicker.css" />

    <!-- text fonts -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/assets/css/ace-fonts.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/assets/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
			<link rel="stylesheet" href="<?= base_url(); ?>assets/assets/css/ace-part2.css" class="ace-main-stylesheet" />
		<![endif]-->

    <!--[if lte IE 9]>
		  <link rel="stylesheet" href="<?= base_url(); ?>assets/assets/css/ace-ie.css" />
		<![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="<?= base_url(); ?>assets/assets/js/ace-extra.js"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
		<script src="<?= base_url(); ?>assets/assets/js/html5shiv.js"></script>
		<script src="<?= base_url(); ?>assets/assets/js/respond.js"></script>
		<![endif]-->
</head>

<body class="no-skin">
    <!-- #section:basics/navbar.layout -->
    <div id="navbar" class="navbar navbar-default          ace-save-state">
        <div class="navbar-container ace-save-state" id="navbar-container">
            <!-- #section:basics/sidebar.mobile.toggle -->
            <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                <span class="sr-only">Toggle sidebar</span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>
            </button>

            <!-- /section:basics/sidebar.mobile.toggle -->
            <div class="navbar-header pull-left">
                <!-- #section:basics/navbar.layout.brand -->
                <a href="#" class="navbar-brand">
                    <small>
                        <i class="fa fa-desktop"></i>
                        ABSENSI MSAL HO
                    </small>
                </a>
            </div>
        </div><!-- /.navbar-container -->
    </div>

    <!-- /section:basics/navbar.layout -->
    <div class="main-container ace-save-state" id="main-container">
        <script type="text/javascript">
            try {
                ace.settings.loadState('main-container')
            } catch (e) {}
        </script>

        <!-- #section:basics/sidebar -->
        <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
            <script type="text/javascript">
                try {
                    ace.settings.loadState('sidebar')
                } catch (e) {}
            </script>



            <ul class="nav nav-list">
                <li class="">
                    <a href="#">
                        <i class="menu-icon fa fa-tachometer"></i>
                        <span class="menu-text"> Dashboard </span>
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="">
                    <a href="<?= base_url(); ?>laporan">
                        <i class="menu-icon fa fa-user"></i>
                        <span class="menu-text"> Admin </span>
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul><!-- /.nav-list -->
            <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
            </div>
        </div>

        <!-- /section:basics/sidebar -->
        <div class="main-content">
            <div class="main-content-inner">
                <!-- #section:basics/content.breadcrumbs -->
                <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                    <ul class="breadcrumb">
                        <!--li>
                            <i class="ace-icon fa fa-home home-icon"></i>
                            <a href="#">Home</a>
                        </li-->

                        <li>
                            <i class="ace-icon fa fa-book home-icon"></i>
                            <a href="#">Absensi MSAL HO</a>
                        </li>

                    </ul><!-- /.breadcrumb -->
                </div>

                <!-- /section:basics/content.breadcrumbs -->
                <div class="page-content">
                    <!-- #section:settings.box -->

                    <!-- /section:settings.box -->
                    <div class="page-header">
                        <h1>
                            Absensi MSAL HO
                            <small>
                                <i class="ace-icon fa fa-angle-double-right"></i>
                                Form Absensi
                            </small>
                        </h1>
                    </div><!-- /.page-header -->

                    <?= date('l, d-m-Y'); ?>
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- PAGE CONTENT BEGINS -->
                            <!-- <form class="form-horizontal" role="form"> -->
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="widget-box">
                                        <div class="widget-header">
                                            <h4 class="widget-title">Form Absensi</h4>

                                            <span class="widget-toolbar">
                                                <a href="#" data-action="reload">
                                                    <i class="ace-icon fa fa-refresh"></i>
                                                </a>
                                            </span>
                                        </div>

                                        <div class="widget-body">
                                            <div class="widget-main">
                                                <!-- #section:plugins/input.chosen -->
                                                <div>
                                                    <label for="form-field-select-3">Nama</label>
                                                    <br />
                                                    <select class="chosen-select form-control" id="nama_user_id" data-placeholder="Choose a State...">
                                                        <option value="">--Pilih Nama Anda--</option>
                                                    </select>
                                                    <input type="hidden" id="text_lat">
                                                    <input type="hidden" id="text_long">
                                                </div>

                                                <hr />
                                                <label class="text-warning" id="info"></label>
                                                <div>
                                                    <label for="form-field-select-3">Absen</label>
                                                    <br />
                                                    <button class="btn btn-primary" id="btn_pagi">
                                                        <i class="ace-icon fa fa-floppy-o bigger-120"></i>
                                                        Pagi
                                                    </button>&nbsp;&nbsp;&nbsp;
                                                    <button class="btn btn-primary" id="btn_istirahat">
                                                        <i class="ace-icon fa fa-floppy-o bigger-120"></i>
                                                        Istirahat
                                                    </button>
                                                    <br><br>
                                                    <button class="btn btn-primary" id="btn_selesai_istirahat">
                                                        <i class="ace-icon fa fa-floppy-o bigger-120"></i>
                                                        Selesai Istirahat
                                                    </button>&nbsp;&nbsp;&nbsp;
                                                    <button class="btn btn-primary" id="btn_pulang">
                                                        <i class="ace-icon fa fa-floppy-o bigger-120"></i>
                                                        Pulang
                                                    </button>
                                                    <br>
                                                    <br>
                                                    <button class="btn btn-warning" id="btn_izin">
                                                        <i class="ace-icon fa fa-floppy-o bigger-120 yellow"></i>
                                                        Izin
                                                    </button>&nbsp;&nbsp;&nbsp;
                                                    <button class="btn btn-warning" id="btn_sakit">
                                                        <i class="ace-icon fa fa-floppy-o bigger-120 yellow"></i>
                                                        Sakit
                                                    </button>&nbsp;&nbsp;&nbsp;
                                                    <button class="btn btn-warning" id="btn_cuti">
                                                        <i class="ace-icon fa fa-floppy-o bigger-120 yellow"></i>
                                                        Cuti
                                                    </button>
                                                </div>

                                                <hr />


                                                <!-- /section:plugins/input.chosen -->
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.span -->
                                <div class="col-xs-12 col-sm-6">
                                    <div id="mapId" style="width: 100%; height: 325px"></div>
                                </div>
                                <div class="col-xs-12">
                                    <table id="tableLapAbsen" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Jam Masuk</th>
                                                <th>Jam Istirahat</th>
                                                <th>Jam Selesai Istirahat</th>
                                                <th>Jam Pulang</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                </div>
                            </div><!-- /.row -->

                            <div class="space-24"></div>
                            <!-- </form> -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.page-content -->
            </div>
        </div><!-- /.main-content -->

        <div class="footer">
            <div class="footer-inner">
                <!-- #section:basics/footer -->
                <div class="footer-content">
                    <span class="bigger-120">
                        <span class="blue bolder">MIPS</span>
                        Absensi &copy; 2020
                    </span>

                </div>

                <!-- /section:basics/footer -->
            </div>
        </div>

        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
        </a>
    </div><!-- /.main-container -->

    <!-- basic scripts -->

    <!--[if !IE]> -->
    <script src="<?= base_url(); ?>assets/assets/js/jquery.js"></script>

    <!-- <![endif]-->

    <!--[if IE]>
<script src="<?= base_url(); ?>assets/assets/js/jquery1x.js"></script>
<![endif]-->
    <script type="text/javascript">
        if ('ontouchstart' in document.documentElement) document.write("<script src='<?= base_url(); ?>assets/assets/js/jquery.mobile.custom.js'>" + "<" + "/script>");
    </script>
    <script src="<?= base_url(); ?>assets/assets/js/bootstrap.js"></script>

    <!-- page specific plugin scripts -->

    <!--[if lte IE 8]>
		  <script src="<?= base_url(); ?>assets/assets/js/excanvas.js"></script>
        <![endif]-->


    <script src="<?= base_url(); ?>assets/assets/js/jquery-ui.custom.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/jquery.ui.touch-punch.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/chosen.jquery.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/fuelux/fuelux.spinner.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/date-time/bootstrap-datepicker.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/date-time/bootstrap-timepicker.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/date-time/moment.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/date-time/daterangepicker.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/date-time/bootstrap-datetimepicker.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/bootstrap-colorpicker.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/jquery.knob.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/autosize.js"></script>
    <!-- <script src="<?= base_url(); ?>assets/assets/js/jquery.inputlterimi.1.3.1.js"></script> -->
    <script src="<?= base_url(); ?>assets/assets/js/jquery.maskedinput.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/bootstrap-tag.js"></script>
    <!-- page specific plugin scripts -->
    <script src="<?= base_url(); ?>assets/assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/dataTables/jquery.dataTables.bootstrap.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/dataTables/extensions/Buttons/js/dataTables.buttons.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/dataTables/extensions/Select/js/dataTables.select.js"></script>

    <!-- ace scripts -->
    <script src="<?= base_url(); ?>assets/assets/js/ace/elements.scroller.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/ace/elements.colorpicker.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/ace/elements.fileinput.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/ace/elements.typeahead.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/ace/elements.wysiwyg.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/ace/elements.spinner.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/ace/elements.treeview.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/ace/elements.wizard.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/ace/elements.aside.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/ace/ace.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/ace/ace.ajax-content.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/ace/ace.touch-drag.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/ace/ace.sidebar.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/ace/ace.sidebar-scroll-1.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/ace/ace.submenu-hover.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/ace/ace.widget-box.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/ace/ace.settings.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/ace/ace.settings-rtl.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/ace/ace.settings-skin.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/ace/ace.widget-on-reload.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/ace/ace.searchbox-autocomplete.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-latest.js"></script> 
    <script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script text="text/javascript">
        $(document).ready(function() {
            namaUser();
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                        showLocation(position.coords);
                    },
                    function(failure) {
                        $.getJSON('https://ipinfo.io/geo', function(response) {
                            var loc = response.loc.split(',');
                            var coords = {
                                latitude: loc[0],
                                longitude: loc[1]
                            };
                            showLocation(coords);
                        });
                    });
            }
            $('#btn_pagi').attr('disabled', true);
            $('#btn_istirahat').attr('disabled', true);
            $('#btn_selesai_istirahat').attr('disabled', true);
            $('#btn_pulang').attr('disabled', true);
            $('#btn_izin').attr('disabled', true);
            $('#btn_sakit').attr('disabled', true);
            $('#btn_cuti').attr('disabled', true);
            var date_absen = new Date();
            list_absen_user(date_absen);
        });

        function list_absen_user(date_absen) {
            // $('#tableLapAbsen').dataTable();
            $('#tableLapAbsen').dataTable().fnDestroy();
            $('#tableLapAbsen').dataTable({
                "paging": true,
                "scrollY": true,
                "scrollX": true,
                "searching": true,
                "select": false,
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
                    "url": "<?php echo site_url('welcome/list_user'); ?>",
                    "type": "POST",
                    "data": {
                        'date_absen': date_absen
                    },
                    "error": function(request) {
                        alert(request.responseText);
                        console.log(request.responseText);
                    }
                },
                "columnDefs": [{
                    "targets": [],
                    "orderable": false,
                }, ],
            });
            var rel = setInterval(function() {
                $('#tableLapAbsen').DataTable().ajax.reload();
                clearInterval(rel);
            }, 100);
        }

        function showLocation(position) {
            var latitude = position.latitude;
            var longitude = position.longitude;
            console.log(latitude);
            console.log(longitude);
            $('#text_lat').val(latitude);
            $('#text_long').val(longitude);
            console.log(position);
        }

        function namaUser() {
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('welcome/nama_user'); ?>",
                dataType: "JSON",
                beforeSend: function() {},
                cache: false,
                data: '',
                success: function(data) {
                    $.each(data, function(index) {
                        var opsi_cmb_user = '<option value="' + data[index].id_user + '">' + data[index].nama + '</option>';
                        $('#nama_user_id').append('<option value="' + data[index].id_user + '">' + data[index].nama + '</option>');
                    });
                },
                error: function(request) {
                    console.log(request.responseText);
                }
            });
        }

        $('#nama_user_id').change(function() {
            var id = this.value;
            console.log(id);
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('welcome/cekabsen'); ?>",
                dataType: "JSON",
                beforeSend: function() {},
                cache: false,
                data: {
                    'id': id
                },
                success: function(data) {
                    console.log(data);
                    if (data.status == false) {
                        if (data.msg == '') {
                            $('#info').empty();
                            $('#info').append('<b>Anda belum melakukan absen hari ini!</b>');
                            $('#btn_pagi').attr('disabled', false);
                            $('#btn_izin').attr('disabled', false);
                            $('#btn_sakit').attr('disabled', false);
                            $('#btn_cuti').attr('disabled', false);
                            $('#btn_istirahat').attr('disabled', true);
                            $('#btn_selesai_istirahat').attr('disabled', true);
                            $('#btn_pulang').attr('disabled', true);
                        } else {
                            $('#info').empty();
                            $('#info').append('<b>Akses dibatasi! Anda telah melakukan absen WFO!</b>');
                            $('#btn_pagi').attr('disabled', true);
                            $('#btn_izin').attr('disabled', true);
                            $('#btn_sakit').attr('disabled', true);
                            $('#btn_cuti').attr('disabled', true);
                            $('#btn_istirahat').attr('disabled', true);
                            $('#btn_selesai_istirahat').attr('disabled', true);
                            $('#btn_pulang').attr('disabled', true);
                        }
                    } else {
                        if (data.pagi != "" && data.istirahat == "") {
                            $('#info').empty();
                            $('#info').append('<b>Anda telah melakukan absen pagi</b><br><b>Silahkan melakukan absen istirahat!</b>');
                            $('#btn_istirahat').attr('disabled', false);
                        }
                        if (data.istirahat != "" && data.selesai_istirahat == "") {
                            $('#info').empty();
                            $('#info').append('<b>Anda telah melakukan absen istirahat</b><br><b>Silahkan melakukan absen selesai istirahat!</b>');
                            $('#btn_selesai_istirahat').attr('disabled', false);
                        }
                        if (data.selesai_istirahat != "") {
                            $('#info').empty();
                            $('#info').append('<b>Anda telah melakukan absen selesai istirahat</b><br><b>Silahkan melakukan absen pulang!</b>');
                            $('#btn_pulang').attr('disabled', false);
                        }
                        if (data.pulang != "") {
                            $('#info').empty();
                            $('#info').append('<b>Anda telah melakukan absen Pulang</b><br><b>Absen selesai untuk hari ini!</b>');
                            $('#btn_pulang').attr('disabled', true);
                        }
                        $('#btn_pagi').attr('disabled', true);
                        $('#btn_izin').attr('disabled', true);
                        $('#btn_sakit').attr('disabled', true);
                        $('#btn_cuti').attr('disabled', true);
                    }
                },
                error: function(request) {
                    console.log(request.responseText);
                }
            });
        });

        $('#btn_pagi').click(function() {
            var id_user = $('#nama_user_id').val();
            var lat = $('#text_lat').val();
            var long = $('#text_long').val();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('welcome/absen_pagi'); ?>",
                dataType: "JSON",
                beforeSend: function() {},
                cache: false,
                data: {
                    'absen': 'hadir',
                    'id_user': id_user,
                    'lat': lat,
                    'long': long,
                },
                success: function(data) {
                    $('#btn_pagi').attr('disabled', true);
                    swal('Berhasil! Selamat Bekerja');
                    setInterval('location.reload()', 100);
                },
                error: function(request) {
                    console.log(request.responseText);
                }
            });
        });
        $('#btn_istirahat').click(function() {
            var id_user = $('#nama_user_id').val();
            var lat = $('#text_lat').val();
            var long = $('#text_long').val();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('welcome/absen_istirahat'); ?>",
                dataType: "JSON",
                beforeSend: function() {},
                cache: false,
                data: {
                    'absen': 'hadir',
                    'id_user': id_user,
                    'lat': lat,
                    'long': long,
                },
                success: function(data) {
                    $('#btn_istirahat').attr('disabled', true);
                    swal('Berhasil! Silahkan Beristirahat');
                    setInterval('location.reload()', 100);
                },
                error: function(request) {
                    console.log(request.responseText);
                }
            });
        });
        $('#btn_selesai_istirahat').click(function() {
            var id_user = $('#nama_user_id').val();
            var lat = $('#text_lat').val();
            var long = $('#text_long').val();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('welcome/absen_selesai_istirahat'); ?>",
                dataType: "JSON",
                beforeSend: function() {},
                cache: false,
                data: {
                    'absen': 'hadir',
                    'id_user': id_user,
                    'lat': lat,
                    'long': long,
                },
                success: function(data) {
                    $('#btn_selesai_istirahat').attr('disabled', true);
                    swal('Berhasil! Waktunya kembali bekerja. Semangat!');
                    setInterval('location.reload()', 100);
                },
                error: function(request) {
                    console.log(request.responseText);
                }
            });
        });
        $('#btn_pulang').click(function() {
            var id_user = $('#nama_user_id').val();
            var lat = $('#text_lat').val();
            var long = $('#text_long').val();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('welcome/absen_pulang'); ?>",
                dataType: "JSON",
                beforeSend: function() {},
                cache: false,
                data: {
                    'absen': 'pulang',
                    'id_user': id_user,
                    'lat': lat,
                    'long': long,
                },
                success: function(data) {
                    $('#btn_pulang').attr('disabled', true);
                    swal('Berhasil! Sampai jumpa lagi~');
                    setInterval('location.reload()', 100);
                },
                error: function(request) {
                    console.log(request.responseText);
                }
            });
        });
        $('#btn_izin').click(function() {
            var id_user = $('#nama_user_id').val();
            var lat = $('#text_lat').val();
            var long = $('#text_long').val();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('welcome/absen_izin'); ?>",
                dataType: "JSON",
                beforeSend: function() {},
                cache: false,
                data: {
                    'absen': 'izin',
                    'id_user': id_user,
                    'lat': lat,
                    'long': long,
                },
                success: function(data) {
                    $('#btn_izin').attr('disabled', true);
                    swal('Berhasil! Semoga dimudahkan segala urusan. Semangat!');
                    setInterval('location.reload()', 100);
                },
                error: function(request) {
                    console.log(request.responseText);
                }
            });
        });
        $('#btn_sakit').click(function() {
            var id_user = $('#nama_user_id').val();
            var lat = $('#text_lat').val();
            var long = $('#text_long').val();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('welcome/absen_sakit'); ?>",
                dataType: "JSON",
                beforeSend: function() {},
                cache: false,
                data: {
                    'absen': 'sakit',
                    'id_user': id_user,
                    'lat': lat,
                    'long': long,
                },
                success: function(data) {
                    $('#btn_sakit').attr('disabled', true);
                    swal('Berhasil! Semoga lekas sembuh~ :) ');
                    setInterval('location.reload()', 100);
                },
                error: function(request) {
                    console.log(request.responseText);
                }
            });
        });
        $('#btn_cuti').click(function() {
            var id_user = $('#nama_user_id').val();
            var lat = $('#text_lat').val();
            var long = $('#text_long').val();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('welcome/absen_cuti'); ?>",
                dataType: "JSON",
                beforeSend: function() {},
                cache: false,
                data: {
                    'absen': 'cuti',
                    'id_user': id_user,
                    'lat': lat,
                    'long': long,
                },
                success: function(data) {
                    $('#btn_cuti').attr('disabled', true);
                    swal('Berhasil! Selamat berlibur!');
                    setInterval('location.reload()', 100);
                },
                error: function(request) {
                    console.log(request.responseText);
                }
            });
        });
    </script>


    <!-- the following scripts are used in demo only for onpage help and you don't need them -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/assets/css/ace.onpage-help.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/docs/assets/js/themes/sunburst.css" />

    <script type="text/javascript">
        ace.vars['base'] = '..';
    </script>
    <script src="<?= base_url(); ?>assets/assets/js/ace/elements.onpage-help.js"></script>
    <script src="<?= base_url(); ?>assets/assets/js/ace/ace.onpage-help.js"></script>
    <script src="<?= base_url(); ?>assets/docs/assets/js/rainbow.js"></script>
    <script src="<?= base_url(); ?>assets/docs/assets/js/language/generic.js"></script>
    <script src="<?= base_url(); ?>assets/docs/assets/js/language/html.js"></script>
    <script src="<?= base_url(); ?>assets/docs/assets/js/language/css.js"></script>
    <script src="<?= base_url(); ?>assets/docs/assets/js/language/javascript.js"></script>

    <?php
    include "template/conn.php";
    ?>
    <script>
        function initMap() {
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


            setMarkers(map);
            console.log(map);
        }

        <?php
        $tgl = date('Y-m-d');
        $qr = mysqli_query($con, "SELECT a.nama, b.id_user, b.in_loc FROM user_ho a, absensi_ho b WHERE a.id_user = b.id_user AND date_absen = '" . $tgl . "'");
        $jml = mysqli_num_rows($qr);
        ?>

        var beaches = [
            <?php
            $no = 1;
            while ($data = mysqli_fetch_array($qr)) {
                $loc = explode(',', $data['in_loc']);
                echo "['$data[id_user]', '$data[nama]', $loc[0], $loc[1], $no],";
                $no++;
            }
            ?>['x', 0, 0, 0]
        ];

        function setMarkers(map) {

            var iconx = {
                url: 'https://cdn.pixabay.com/photo/2014/04/03/10/03/google-309740_1280.png',
                scaledSize: new google.maps.Size(25, 35)
            };
            // Shapes define the clickable region of the icon. The type defines an HTML
            // <area> element 'poly' which traces out a polygon as a series of X,Y points.
            // The final coordinate closes the poly by connecting to the first coordinate.
            var shape = {
                coords: [1, 1, 1, 20, 18, 20, 18, 1],
                type: 'poly'
            };
            for (var i = 0; i < beaches.length; i++) {
                var beach = beaches[i];
                console.log(beach[1]);
                console.log(beach[2]);
                console.log(beach[3]);
                console.log(beach[4]);
                var marker = new google.maps.Marker({
                    position: {
                        lat: beach[2],
                        lng: beach[3],
                    },
                    map: map,
                    icon: iconx,
                    title: beach[1],
                    zIndex: beach[4],
                    idx: beach[0],
                    animation: google.maps.Animation.DROP
                });

                // google.maps.event.addListener(marker, 'click', function() {
                //     // document.location='detail.php?id='+this.idx;
                //     window.location.href = 'detail/' + this.idx;
                //     return false;
                //     // document.location='corps';
                // });
            }

        }

        // Attaches an info window to a marker with the provided message. When the
        // marker is clicked, the info window will open with the secret message.
    </script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCJ6cZ8t_HBdb2439Chkitvr162RbJ3h4&callback=initMap" type="text/javascript"></script>
</body>

</html>