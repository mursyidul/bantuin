<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2><i class="fa fa-users"></i> Master Data User</h2>
        <ol class="breadcrumb">
            <li><a  href="<?php echo base_url('dashboard'); ?>">Dashboard</a></li>
            <li class="active"><strong><a>Data User</a></strong></li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeIn">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <?php if($this->session->userdata('role') == 'SUPERADMIN'){ ?>
                    <!-- <button class="btn btn-outline btn-info dim" id="btn_add_data">
                        <i class="fa fa-plus"></i> Tambah User
                    </button> -->
                    <button id="btn_add_data" class="btn btn-info " type="button"><i class="fa fa-plus"></i> Add User</button>
                </div> <?php } ?>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-lg-1 pull-right" style="margin-right:40px;">
                            <label><br/></label>
                                <!-- <?php $link = explode("?",$_SERVER['REQUEST_URI']); ?> -->
                                <a href="<?php echo base_url('user/cetakPdf') ?>" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-print"></i> Cetak Data</a>
                        </div>
                        <div class="col-lg-1 pull-right" style="margin-right:10px;">
                            <label><br/></label>
                                <!-- <?php $link = explode("?",$_SERVER['REQUEST_URI']); ?> -->
                                <a href="<?php echo base_url('user/export') ?>" data-toggle="tooltip" title="Download" class="btn btn-sm btn-primary"><i class="fa fa-file-excel-o"></i> Ekspor</a>
                        </div>
                        
                    </div>
                    <div class="table-responsive">
                    <table id="table_user" class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                        <tr>
                        <th width="5%">No</th>
                        <th>Nama User</th>
                        <th>NUD</th>
                        <th>Posisi</th>
                        <th>Departemen</th>
                        <th>Nama Pimpinan</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Report To PE</th>
                        <?php if($this->session->userdata('role') == 'SUPERADMIN'){?>

                        <th width="15%">Aksi</th>
                    <?php } ?>
                    </tr>
                   </thead>
                    <tbody>
                    </tbody>
                    </table>
                        </div>
                  </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal inmodal fade" id="modalAdd" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header gradient">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h6 class="modal-title" id="title-peserta">Tambah Data User</h6>
            </div>
            <div class="modal-body">
                <form id="formAddUser" class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nama User</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Nama User" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">NUD</label>
                        <div class="col-sm-7">
                            <input type="hidden" class="form-control" name="id_user" id="id_user" placeholder="Nama Lengkap" required>
                            <input type="text" class="form-control" name="user_nud" id="user_nud" placeholder="NUD" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Posisi</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="position" id="position" placeholder="Posisi" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Departemen</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="department" id="department" placeholder="Departemen" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nama Pimpinan</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="leader_name" id="leader_name" placeholder="Nama Pimpinan" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-7">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Role</label>
                        <div class="col-sm-7">
                            <select class="form-control" name="role" id="role" required>
                                <option value="">Pilih Role</option>
                                <option value="SUPERADMIN">SUPERADMIN</option>
                                <option value="ATASAN">ATASAN</option>
                                <option value="USER">USER</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Status</label>
                        <div class="col-sm-7">
                            <select class="form-control" id="status" name="status" required>
                                    <option value="">Pilih Status</option>
                                    <option value="1">Aktif</option>
                                    <option value="0">Nonaktif</option>
                                </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-7">
                            <input type="password" class="form-control" name="password" id="password-user" placeholder="Password Baru">
                            <span toggle="#password-user" class="fa fa-fw fa-eye field-icon toggle-password-user"></span>
                            <sup id="note_password"></sup>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Report To PE</label>
                        <div class="col-sm-7">
                            <select class="form-control" id="report_to_pe" name="report_to_pe" required>
                                    <option value="">Pilih Report</option>
                                    <option value="1">YA</option>
                                    <option value="0">TIDAK</option>
                                </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"></label>
                        <div class="col-sm-7">
                            <button type="submit" class="btn btn-outline btn-info dim"><i class="fa fa-save"></i> Simpan</button>
                            <button type="button" class="btn btn-outline btn-danger dim" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $("document").ready(function(){
        var sess = "<?php echo $this->session->userdata("role"); ?>";
        if (sess == "SUPERADMIN") {
            var visible = true;
        } else {
            var visible = false;
        }
        var table_user = $("#table_user").dataTable({
            processing: true,
            select: false,

            ajax: {
                url : "<?= base_url('user/get_data_user') ?>",
                dataType : "JSON",
                type : "GET",
                dataSrc : function (data){
                    var returnDataUser = new Array();
                    if(data.status == "success"){
                        $.each(data["data"], function(i, item){
                            var status = item['status'];
                               if(status == 1){
                                var data_status = "AKTIF";
                               } else {
                                var data_status = "NONAKTIF";
                               }
                            var reportto = item['report_to_pe'];
                            if(reportto == 1){
                                var data_reporto = "YA";
                            } else {
                                var data_reporto = "TIDAK";
                            }
                            var sessionAdmin = "<?php echo $this->session->userdata('role') ?>";
                            if(sessionAdmin == 'SUPERADMIN'){
                                var editBtn = "<center><button id='btn_edit' data-id_user='"+item["id_user"]+"' class='btn btn-xs btn-warning'><i class='fa fa-edit'></i> Ubah</button>&nbsp;"+
                                            "<button id='btn_delete' data-id_user='"+item["id_user"]+"' class='btn btn-xs btn-danger'><i class='fa fa-trash'></i> Hapus</button></center>";

                            } else {
                               var editBtn = "";
                               
                            }
                            returnDataUser.push({
                                "no" : (i+1),
                                "user_name" : item["user_name"],
                                "user_nud" : item["user_nud"],
                                "position" : item["position"],
                                "department" : item["department"],
                                "leader_name" : item["leader_name"],
                                "email" : item["email"],
                                "role" : item["role"],
                                "status" : data_status,
                                "report_to_pe" : data_reporto,
                                "action" : editBtn
                            });
                        });
                    }
                    return returnDataUser;
                }
            },
            columns : [
                {data : "no"},
                {data : "user_name"},
                {data : "user_nud"},
                {data : "position"},
                {data : "department"},
                {data : "leader_name"},
                {data : "email"},
                {data : "role"},
                {data : "status"},
                {data : "report_to_pe"},
                {data : "action"}
            ],
            columnDefs : [{
                "targets" : [10],
                "visible" : visible
            }]
        });
    });

    $(document).on("click", "#btn_add_data", function(e){
        $('#formAddUser')[0].reset();
        $("#id_user").val("");
        $("#note_password").html("");
        $("#modalAdd").modal("show");
    });

    $(document).on("click", "#btn_edit", function(e){
        e.preventDefault();
        $('#formAddUser')[0].reset();
        var id_user = $(this).data("id_user");
        $.ajax({
            "async": true,
            "crossDomain": true,
            "url": "<?= base_url('user/get_data_user') ?>/"+id_user,
            "method": "GET",
        }).done(function (response) {
            var data = JSON.parse(response);
            $("#id_user").val(data.data[0].id_user);
            $("#user_name").val(data.data[0].user_name);
            $("#user_nud").val(data.data[0].user_nud);
            $("#position").val(data.data[0].position);
            $("#department").val(data.data[0].department);
            $("#leader_name").val(data.data[0].leader_name);
            $("#email").val(data.data[0].email);
            $("#role").val(data.data[0].role).change();
            $("#status").val(data.data[0].status).change();
            $("#report_to_pe").val(data.data[0].report_to_pe).change();
            $("#note_password").html("Jika tidak mengubah password, kolom ini kosongkan saja");
            $("#modalAdd").modal("show");
        });
    });
    

    $(document).on("submit", "#formAddUser", function(e){
        e.preventDefault();
        var id_user = $("#id_user").val();
        var url = (id_user == "" ? "addUSer" : "editUser");
        $.ajax({
            "async": true,
            "crossDomain": true,
            "url": "<?= base_url('user') ?>/"+url,
            "method": "POST",
            "data": $(this).serialize(),
        }).done(function (response) {
            var data = JSON.parse(response)
            var message = data.message;
            if(data.status == "success"){
                $("#modalAdd").modal("hide");
                swal({
                    title: "Berhasil",
                    text: message.toUpperCase(),
                    type: "success",
                    confirmButtonColor: "#a5dc86",
                    confirmButtonText: "Close",
                }, function(isConfirm){
                    $("#table_user").DataTable().ajax.reload();
                });
                
            } else {
                swal("Gagal menambahkan.", message.toUpperCase(), "warning");
            }
        });
    });

    $(document).on("click", ".toggle-password-user", function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

    $(document).on("click", "#btn_delete", function(e){
        var id_user = $(this).data("id_user");
        swal({
            title: "Yakin ingin menghapus ?",
            text: "Apakah anda yakin menghapus data user tersebut",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            closeOnConfirm: false,
            closeOnCancel: true
        }, function(isConfirm){
            if(isConfirm){
                var settings = {
                    "async": true,
                    "crossDomain": true,
                    "url": "<?= base_url('user/delete_data_user') ?>",
                    "method": "POST",
                    "data": {
                        "id_user": id_user
                    }
                }
                
                $.ajax(settings).done(function (response) {
                    var data = JSON.parse(response)
                    var message = data.message;
                    if(data.status == "success"){
                        swal({
                            title: "Berhasil",
                            text: message.toUpperCase(),
                            type: "success",
                            confirmButtonColor: "#a5dc86",
                            confirmButtonText: "Close",
                        }, function(isConfirm){
                            $("#table_user").DataTable().ajax.reload();
                        });
                    } else {
                        swal("Gagal menghapus data.", message.toUpperCase(), "warning");
                    }
                });   
            }
        });
    });
</script>
    <script>
        $(document).ready(function(){
            $("#wizard").steps();
            $("#form").steps({
                bodyTag: "fieldset",
                onStepChanging: function (event, currentIndex, newIndex)
                {
                    // Always allow going backward even if the current step contains invalid fields!
                    if (currentIndex > newIndex)
                    {
                        return true;
                    }

                    // Forbid suppressing "Warning" step if the user is to young
                    if (newIndex === 3 && Number($("#age").val()) < 18)
                    {
                        return false;
                    }

                    var form = $(this);

                    // Clean up if user went backward before
                    if (currentIndex < newIndex)
                    {
                        // To remove error styles
                        $(".body:eq(" + newIndex + ") label.error", form).remove();
                        $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                    }

                    // Disable validation on fields that are disabled or hidden.
                    form.validate().settings.ignore = ":disabled,:hidden";

                    // Start validation; Prevent going forward if false
                    return form.valid();
                },
                onStepChanged: function (event, currentIndex, priorIndex)
                {
                    // Suppress (skip) "Warning" step if the user is old enough.
                    if (currentIndex === 2 && Number($("#age").val()) >= 18)
                    {
                        $(this).steps("next");
                    }

                    // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                    if (currentIndex === 2 && priorIndex === 3)
                    {
                        $(this).steps("previous");
                    }
                },
                onFinishing: function (event, currentIndex)
                {
                    var form = $(this);

                    // Disable validation on fields that are disabled.
                    // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                    form.validate().settings.ignore = ":disabled";

                    // Start validation; Prevent form submission if false
                    return form.valid();
                },
                onFinished: function (event, currentIndex)
                {
                    var form = $(this);

                    // Submit form input
                    form.submit();
                }
            }).validate({
                        errorPlacement: function (error, element)
                        {
                            element.before(error);
                        },
                        rules: {
                            confirm: {
                                equalTo: "#password"
                            }
                        }
                    });
       });
    </script>
<script type="text/javascript">
    $("#myselect").on("change", function() {
    $("#" + $(this).val()).show().siblings().hide();
    })
</script>
