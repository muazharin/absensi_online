<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-user-plus user-plus-icon"></i>
                    <a href="#">Administrator</a>
                </li>

                <li>
                    <a href="#">Data</a>
                </li>
                <li class="active">Data Administrator</li>
            </ul><!-- /.breadcrumb -->
        </div>
        <div class="page-content">
            <div class="page-header">
                <h1>
                    Data
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Data Administrator
                    </small>
                </h1>
            </div><!-- /.page-header -->
            <div class="row">
                <div class="col-xs-12 col-sm-3 center">
                    <span class="profile-picture">
                        <img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" src="<?= base_url(); ?>assets/assets/avatars/muaz1.jpg" />
                    </span>
                    <div class="space space-4"></div>
                </div><!-- /.col -->
                <div class="col-xs-12 col-sm-9">
                    <!-- PAGE CONTENT BEGINS -->
                    <div class="clearfix">
                        <div>
                            <div id="user-profile-1" class="user-profile">
                                <ul class="nav nav-tabs padding-18">
                                    <li class="active">
                                        <a data-toggle="tab" href="#home">
                                            <i class="green ace-icon fa fa-user bigger-120"></i>
                                            Profil
                                        </a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" href="#feed">
                                            <i class="orange ace-icon fa fa-key bigger-120"></i>
                                            Ubah Password
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content no-border padding-24">
                                    <div id="home" class="tab-pane in active">
                                        <div class="row">

                                            <div class="col-xs-12 col-sm-9">
                                                <h4 class="blue">
                                                    <span class="middle"><?= $this->session->userdata('nama'); ?></span>
                                                    <span id="last_seen"></span>
                                                </h4>

                                                <div class="profile-user-info">
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Username </div>

                                                        <div class="profile-info-value">
                                                            <span><?= $this->session->userdata('username'); ?></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Location </div>

                                                        <div class="profile-info-value">
                                                            <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                            <!-- <span>PT. Mulia Sawit Agro Lestari</span><br> -->
                                                            <span>DKI Jakarta</span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Email </div>

                                                        <div class="profile-info-value">
                                                            <span><?= $this->session->userdata('email'); ?></span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Password </div>

                                                        <div class="profile-info-value">
                                                            <span><?= $this->session->userdata('password'); ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Last Seen </div>

                                                        <div class="profile-info-value">
                                                            <span><?= date_format(date_create($this->session->userdata('last_seen')), 'l, d M Y - H:i:s'); ?></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="hr hr-8 dotted"></div>
                                            </div><!-- /.col -->
                                        </div><!-- /.row -->
                                    </div>
                                    <div id="feed" class="tab-pane in">
                                        <div class="row">

                                            <div class="col-xs-12 col-sm-6">
                                                <h4 class="blue">
                                                    <span class="middle">Password Baru</span>
                                                </h4>
                                                <div class="profile-user-info">
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-value">
                                                            <div class="input-group">
                                                                <input class="form-control" name="pb" id="pb" placeholder="New Password" type="password" required />
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-lock bigger-110"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-value">
                                                            <span id="msg_pb"></span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-value">
                                                            <div class="input-group">
                                                                <input class="form-control" name="kpb" id="kpb" placeholder="Confirm New Password" type="password" required />
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-key bigger-110"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-value">
                                                            <span id="msg_kpb"></span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-value">
                                                            <button class="btn btn-primary" id="btn_sub" onclick="submit_sub();">
                                                                <i class="ace-icon fa fa-paper-plane align-top bigger-125"></i>
                                                                Submit
                                                            </button>&nbsp;
                                                            <button class="btn btn-default" id="btn_res" onclick="reset_sub();">
                                                                <i class="ace-icon fa fa-refresh align-top bigger-125"></i>
                                                                Reset
                                                            </button>&nbsp;
                                                            <span id="spin_load"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="hr hr-8 dotted"></div>
                                            </div><!-- /.col -->
                                            <div class="col-xs-12 col-sm-3"></div>
                                        </div><!-- /.row -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->


<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript">
    function reset_sub() {
        $('#pb').val('');
        $('#kpb').val('');
        $('#msg_pb').html("");
        $('#msg_kpb').html("");
        $('#spin_load').html('');
    }

    function submit_sub() {
        var pb = $('#pb').val();
        var kpb = $('#kpb').val();
        if (kpb == '' && pb == '') {
            $('#msg_kpb').html("Field Confirm New Password is required");
            $('#msg_pb').html("Field New Password is required");
        } else if (kpb == '' && pb != '') {
            $('#msg_kpb').html("Field Confirm New Password is required");
            $('#msg_pb').html("");
        } else if (kpb != '' && pb == '') {
            $('#msg_kpb').html("");
            $('#msg_pb').html("Field New Password is required");
        } else if (pb != kpb) {
            $('#msg_kpb').html("Confirm password isn't matches");
        } else {
            $('#msg_kpb').html("");
            $('#spin_load').html('<i class="ace-icon fa fa-spinner fa-spin orange bigger-125"></i>');
            changePass(pb);
        }
    }

    function changePass(pb) {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('administrator/changePass'); ?>",
            dataType: "JSON",
            beforeSend: function() {},
            cache: false,
            data: {
                'id_user': '<?= $this->session->userdata("id_admin"); ?>',
                'pb': pb
            },
            success: function(data) {
                $('#pb').val('');
                $('#kpb').val('');
                $('#msg_pb').html("");
                $('#msg_kpb').html("");
                $('#spin_load').html('<i class="ace-icon fa fa-check fa-check green bigger-125"></i>');
                // alert('Password berhasil diubah');
            },
            error: function(request) {

                console.log(request.responseText);
            }
        });
    }
</script>