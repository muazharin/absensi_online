<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-tachometer tachometer-icon"></i>
                    <a href="#">Dashboard</a>
                </li>

                <li>
                    <a href="#">Tabel</a>
                </li>
                <li class="active">Data Absensi HO</li>
            </ul><!-- /.breadcrumb -->
        </div>
        <div class="page-content">
            <div class="page-header">
                <h1>
                    Tabel
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Data Absensi HO
                    </small>
                </h1>
            </div><!-- /.page-header -->

            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="widget-box">
                        <div class="widget-header">
                            <h4 class="widget-title">Opsi</h4>

                            <div class="widget-toolbar">
                                <a href="#" data-action="collapse">
                                    <i class="ace-icon fa fa-chevron-up"></i>
                                </a>

                                <!-- <a href="#" data-action="close">
                                        <i class="ace-icon fa fa-times"></i>
                                    </a> -->
                            </div>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main">
                                <div>
                                    <!-- <label for="form-field-8">Tanggal</label> -->
                                    <div class="input-group">
                                        <input class="form-control date-picker" id="date_absen" type="text" data-date-format="dd-mm-yyyy" />
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar bigger-110"></i>
                                        </span>
                                    </div>
                                </div>
                                <hr>
                                <div>
                                    <!-- <label for="form-field-9">Pilih Bulan Laporan</label> -->
                                    <div class="input-group">
                                        <select class="chosen-select form-control" id="pilih_bulan" data-placeholder="Choose a State...">
                                            <option value="01">Januari</option>
                                            <option value="02">Februari</option>
                                            <option value="03">Maret</option>
                                            <option value="04">April</option>
                                            <option value="05">Mei</option>
                                            <option value="06">Juni</option>
                                            <option value="07">Juli</option>
                                            <option value="08">Agustus</option>
                                            <option value="09">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>
                                        </select>
                                        <span class="input-group-addon" id="btn_print">
                                            <i class="fa fa-print bigger-110"></i>
                                        </span>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div><!-- /.span -->
                <div class="col-xs-12 col-sm-8">
                    <div class="widget-box">
                        <div class="widget-header">
                            <h4 class="widget-title">Summary</h4>
                            <div class="widget-toolbar">
                                <a href="#" data-action="collapse">
                                    <i class="ace-icon fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main infobox-container">
                                <div class="infobox infobox-blue">
                                    <div class="infobox-icon">
                                        <i class="ace-icon fa fa-users"></i>
                                    </div>
                                    <div class="infobox-data">
                                        <span class="infobox-data-number" id="jml_kr"></span>
                                        <div class="infobox-content">Jumlah Karyawan</div>
                                    </div>
                                </div>
                                <div class="infobox infobox-green">
                                    <div class="infobox-icon">
                                        <i class="ace-icon fa fa-home"></i>
                                    </div>

                                    <div class="infobox-data">
                                        <span class="infobox-data-number" id="jml_wfh"></span>
                                        <div class="infobox-content">Karyawan WFH</div>
                                    </div>
                                </div>
                                <div class="infobox infobox-purple">
                                    <div class="infobox-icon">
                                        <i class="ace-icon fa fa-building-o"></i>
                                    </div>

                                    <div class="infobox-data">
                                        <span class="infobox-data-number" id="jml_wfo"></span>
                                        <div class="infobox-content">Karyawan WFO</div>
                                    </div>
                                </div>
                                <div class="infobox infobox-red">
                                    <div class="infobox-icon">
                                        <i class="ace-icon fa fa-flask"></i>
                                    </div>

                                    <div class="infobox-data">
                                        <span class="infobox-data-number" id="ket_sakit"></span>
                                        <div class="infobox-content">Sakit</div>
                                    </div>
                                </div>
                                <div class="infobox infobox-orange">
                                    <div class="infobox-icon">
                                        <i class="ace-icon fa fa-fighter-jet"></i>
                                    </div>

                                    <div class="infobox-data">
                                        <span class="infobox-data-number" id="ket_izin"></span>
                                        <div class="infobox-content">Izin</div>
                                    </div>
                                </div>
                                <div class="infobox infobox-orange2">
                                    <div class="infobox-icon">
                                        <i class="ace-icon fa fa-coffee"></i>
                                    </div>

                                    <div class="infobox-data">
                                        <span class="infobox-data-number" id="ket_cuti"></span>
                                        <div class="infobox-content">Cuti</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- </div> -->
                <!-- <div class="space-6"></div> -->

                <div class="col-xs-12 col-sm-12" style="padding: 0%;">
                    <br>
                    <div class="clearfix">
                        <div id="user-profile-1" class="user-profile">
                            <ul class="nav nav-tabs padding-18">
                                <li class="active">
                                    <a data-toggle="tab" id="wfh_tab" href="#wfh">
                                        <i class="green ace-icon fa fa-home bigger-120"></i>
                                        WFH
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" id="wfo_tab" href="#wfo">
                                        <i class="purple ace-icon fa fa-building-o bigger-120"></i>
                                        WFO
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <br>
                    <div class="row">
                        <div class="col-sm-12" id="tabpane_wfh">
                            <table id="laporan_excel" class="table table-bordered table-hover" width="100%">
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
                        </div><!-- /.span -->
                        <div class="col-sm-12" id="tabpane_wfo">
                            <table id="laporan_excel_wfo" class="table table-bordered table-hover" width="100%">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Jam Masuk</th>
                                        <th>Jam Pulang</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div><!-- /.span -->
                    </div><!-- /.row -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->


<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->