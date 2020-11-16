<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-users users-icon"></i>
                    <a href="#">Users</a>
                </li>
                <li class="active">User Karyawan</li>
            </ul><!-- /.breadcrumb -->
        </div>
        <div class="page-content">
            <div class="page-header">
                <h1>
                    User Karyawan
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Data Users
                    </small>
                </h1>
            </div><!-- /.page-header -->
            <button class="btn btn-success btn-xs" id="btn_add" onclick="func_ref()"><i class="ace-icon fa fa-refresh bigger-60"></i> Refresh Tabel</button>
            <button class="btn btn-primary btn-xs" id="btn_add" onclick="func_add()"><i class="ace-icon fa fa-plus bigger-60"></i> Tambah User Baru</button>
            <div class="row">
                <div class="col-xs-12">
                    <br>
                    <div class="row">
                        <div class="col-sm-12" id="id_users">
                            <table id="tb_user" class="table table-bordered table-hover" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div><!-- /.span -->
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
        list_users();
    });

    function func_ref() {
        list_users();
    }

    function list_users() {
        $('#tb_user').dataTable().fnDestroy();
        $('#tb_user').dataTable({
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
                "url": "<?php echo site_url('users/list_users'); ?>",
                "type": "POST",
                "data": {},
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

    function func_add() {
        $('#modalAdd').modal('show');
    }

    function func_add_usr() {
        var in_name = $('#in_name').val();
        var in_email = $('#in_email').val();
        if (in_name != '') {
            console.log(in_email, in_name);
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('users/add_usr'); ?>",
                dataType: "JSON",
                beforeSend: function() {},
                cache: false,
                data: {
                    'in_name': in_name,
                    'in_email': in_email
                },
                success: function(data) {
                    console.log(data);
                    if (data == false) {
                        swal('Nama user sudah ada! :(', {
                            icon: 'error'
                        });
                    } else {
                        swal('User berhasil ditambahkan! :)', {
                            icon: 'success'
                        });
                        $('#modalAdd').modal('hide');
                        $('#in_name').val('');
                        $('#in_email').val('');
                        list_users();
                    }
                },
                error: function(request) {
                    swal("Terjadi kesalahan! Coba reload halaman :')", {
                        icon: "error"
                    });
                    console.log(request.responseText);
                }
            });
        } else {
            swal('Field Nama tidak boleh kosong!', {
                icon: "error"
            });
        }
    }

    function func_edit(id_user) {
        $('#nama_' + id_user).prop('type', 'text');
        $('#email_' + id_user).prop('type', 'text');
        $('#labelnm_' + id_user).hide();
        $('#labelem_' + id_user).hide();
        $('#btn_edit_' + id_user).hide();
        $('#btn_del_' + id_user).hide();
        $('#btn_save_' + id_user).show();
        $('#btn_can_' + id_user).show();
    }

    function func_save(id_user) {
        $('#spin_load_' + id_user).html('<i class="ace-icon fa fa-spinner fa-spin orange bigger-125"></i>');
        var nama = $('#nama_' + id_user).val();
        var email = $('#email_' + id_user).val();
        // console.log(nama, email);
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('users/update'); ?>",
            dataType: "JSON",
            beforeSend: function() {},
            cache: false,
            data: {
                'id_user': id_user,
                'nama': nama,
                'email': email
            },
            success: function(data) {
                // swal('Berhasil! :)');
                $('#spin_load_' + id_user).html('<i class="ace-icon fa fa-check fa-check green bigger-125"></i>');
                $('#labelnm_' + id_user).html(nama);
                $('#labelem_' + id_user).html(email);
                $('#nama_' + id_user).prop('type', 'hidden');
                $('#email_' + id_user).prop('type', 'hidden');
                $('#labelnm_' + id_user).show();
                $('#labelem_' + id_user).show();
                $('#btn_edit_' + id_user).show();
                $('#btn_del_' + id_user).show();
                $('#btn_save_' + id_user).hide();
                $('#btn_can_' + id_user).hide();
                // list_users();
            },
            error: function(request) {
                swal("Terjadi kesalahan! Coba reload halaman :')", {
                    icon: "error"
                });
                console.log(request.responseText);
            }
        });

    }

    function func_can(id_user) {
        $('#nama_' + id_user).prop('type', 'hidden');
        $('#email_' + id_user).prop('type', 'hidden');
        $('#labelnm_' + id_user).show();
        $('#labelem_' + id_user).show();
        $('#btn_edit_' + id_user).show();
        $('#btn_del_' + id_user).show();
        $('#btn_save_' + id_user).hide();
        $('#btn_can_' + id_user).hide();
    }

    function func_del(id_user) {
        swal({
                text: "Anda yakin ingin menghapus data ini?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    do_del(id_user);
                    swal("Data user telah dihapus!", {
                        icon: "success",
                    });
                } else {
                    swal("Data user tidak berubah!");
                }
            });
    }

    function do_del(id_user) {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('users/del_usr'); ?>",
            dataType: "JSON",
            beforeSend: function() {},
            cache: false,
            data: {
                'id_user': id_user
            },
            success: function(data) {
                swal("Data user telah dihapus!", {
                    icon: "success",
                });
                list_users();
            },
            error: function(request) {
                swal("Terjadi kesalahan! Coba reload halaman :')", {
                    icon: "error"
                });
                console.log(request.responseText);
            }
        });
    }
</script>