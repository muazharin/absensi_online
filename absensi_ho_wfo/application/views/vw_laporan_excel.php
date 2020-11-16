<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
                </li>

                <li>
                    <a href="#">Tables</a>
                </li>
                <li class="active">Data Absensi HO</li>
            </ul><!-- /.breadcrumb -->

            <div class="nav-search" id="nav-search">
                <form class="form-search">
                    <span class="input-icon">
                        <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                        <i class="ace-icon fa fa-search nav-search-icon"></i>
                    </span>
                </form>
            </div><!-- /.nav-search -->
        </div>

        <div class="page-content">


            <div class="page-header">
                <h1>
                    Tables
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Data Absensi HO
                    </small>
                </h1>
            </div><!-- /.page-header -->

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <div class="row">
                        <div class="col-md-2 col-sm-12">
                            <div class="input-group">
                                <input class="form-control date-picker" id="date_absen" type="text" data-date-format="dd-mm-yyyy" />
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar bigger-110"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2 col-sm-12">
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
                        <!-- <div class="col-md-2 col-sm-12">
                            <div class="input-group">
                                <button class="btn btn-success" id="btn_print">
                                    <i class="ace-icon fa fa-print bigger-120"></i>
                                    Cetak
                                </button>
                            </div>
                        </div> -->
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-xs-12">
                            <table id="laporan_excel" class="table  table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <!-- <tr>
                                        <td>1</td>
                                        <td>Muazharin</td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div><!-- /.span -->
                    </div><!-- /.row -->
                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->


<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->