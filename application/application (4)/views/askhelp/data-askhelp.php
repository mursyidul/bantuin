<style>
    .select2-container .select2-selection--single{
        height:34px !important;
    }
    .select2-container--default .select2-selection--single{
       border: 1px solid #ccc !important; 
       border-radius: 0px !important; 
   }
</style>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
    <h2>Dashboard</h2>
    <ol class="breadcrumb">
        <li>
            <a href="">Home</a>
        </li>
        <li class="active">
            <strong>Ask For Help</strong>
        </li>
    </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata("success") ?>"></div>
<div class="flash-data_error" data-flashdata="<?php echo $this->session->flashdata("error") ?>"></div>
<?php if($this->session->flashdata("success")){ ?>
    <div class="alert alert-success alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
        <?php
            echo strtoupper($this->session->flashdata("success"));
            unset($_SESSION["success"]);
        ?>
    </div>
<?php } else if($this->session->flashdata("error")) { ?>
    <div class="alert alert-danger alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
        <?php
            echo strtoupper($this->session->flashdata("error"));
            unset($_SESSION["error"]);
        ?>
    </div>
<?php } ?>
<div class="row">
    <div class="col-lg-12">
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="ibox-content m-b-sm border-bottom">
                <div class="text-center p-lg">
                    <h2>Post your need <?php echo $this->session->userdata('id_user') ?></h2>
                    <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> <span class="bold">Ask for help</span></button>
                </div>
            </div>
            <div class="ibox-content" id="ibox-content">
                <div id="vertical-timeline" class="vertical-container dark-timeline center-orientation">
                    <?php foreach($ask_list as $p) { ?>
                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <i class="fa fa-bell"></i>
                        </div>
                        <div class="vertical-timeline-content">
                            <h2>From <?php echo '<strong>'.$p->dist_name.'</strong>';?> To <?php echo '<strong>'.$p->disto_name.'</strong>'; ?></h2>
                            <p><?php echo $p->information ?>
                            </p>
                            <a href="#" class="btn btn-sm btn-warning" style="margin-right: 30px;" data-toggle="modal" data-target="#modalEdit<?php echo $p->id_help; ?>"> Edit</a>
                            <a href="<?php echo base_url('askhelp/biddedPost').'?id='.$p->id_help ?>" class="btn btn-sm btn-success">View Bid</a>
                            <span class="vertical-date">
                                Date <?php echo $p->id_owner ?> <br/>
                                <small><?php echo date('M-d', strtotime($p->date_needed))." ".date('H:i', strtotime($p->time_needed)); ?></small>
                            </span>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div><br/>


<!-- Modal Add -->
<div class="modal inmodal fade" id="myModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">What do you need?</h4>
                <small class="font-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
            </div>
            <form action="<?php echo base_url('askhelp/addAskhelp'); ?>" method="post">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>From Location</label>
                            <input type="hidden" name="id_owner" value="<?php echo $this->session->userdata('id_user'); ?>">
                            <select class="form-control select2" name="id_village_from">
                                <option value="">Choose Location</option>
                                <?php
                                    foreach($village as $p){
                                        // $list = preg_replace('/style="width:[0-9]+px;"/', '', $p->village_name);
                                        echo '<option value="'.$p->id.'">'.$p->village_name." - ".$p->district_name." - ".$p->regency_name." - ".$p->province_name.'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Detail Address</label>
                            <input type="text" class="form-control" name="address_detail_from">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Sender Name</label>
                            <input type="text" class="form-control" name="sender_name">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Sender Phone</label>
                            <input type="text" class="form-control" name="sender_phone">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>To Location</label>
                                <select class="form-control select2" name="id_village_to">
                                <option value="">Choose Location</option>
                                <?php
                                    foreach($village as $vl){
                                        echo '<option value="'.$vl->id.'">'.$vl->village_name." - ".$vl->district_name." - ".$vl->regency_name." - ".$vl->province_name.'</option>';
                                    }
                                ?>
                                </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Detail Address</label>
                            <input type="text" class="form-control" name="address_detail_to">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Receiver Name</label>
                            <input type="text" class="form-control" name="receiver_name">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Receiver Phone</label>
                            <input type="text" class="form-control" name="receiver_phone">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Information</label>
                            <textarea type="text" class="form-control" row="3" name="information"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group" id="data_1">
                            <label>Date Needed</label>
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="text" name="date_needed" class="form-control" placeholder="Visit Date" value="<?php echo date('d/m/Y')?>" required="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Time Needed</label>
                                <div class="input-group clockpicker" data-placement="top" data-autoclose="true">
                                <input type="text" class="form-control" name="time_needed">
                                <span class="input-group-addon">
                                    <span class="fa fa-clock-o"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- End of modal add -->

<!-- Modal Edit -->

<?php foreach($ask_list as $q){ ?>
<div class="modal inmodal fade" id="modalEdit<?php echo $q->id_help ?>" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">What do you need? <?php echo $q->id_help ?></h4>
                <small class="font-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
            </div>
            <form action="<?php echo base_url('Askhelp/action_edit/'.$q->id_help); ?>" method="post">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>From Location</label>
                            <!-- <input type="hidden" name="id_owner" value="<?php echo $this->session->userdata('id_user'); ?>"> -->
                            <select class="form-control" name="id_village_from">
                                <option value="">Choose Location</option>
                                <?php
                                    foreach($village as $vg){
                                        $selected='';
                                        if($vg->id == $ask_list[0]->id_village_from){
                                            $selected='selected';
                                        }
                                        echo '<option value="'.$vg->id.'"'.$selected.'>'.$vg->village_name." - ".$vl->district_name." - ".$vl->regency_name." - ".$vl->province_name.'</option>';
                                    }
                                ?>

                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Detail Address</label>
                            <input type="text" class="form-control" name="address_detail_from" value="<?php echo $q->address_detail_from ?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Sender Name</label>
                            <input type="text" class="form-control" name="sender_name" value="<?php echo $q->sender_name ?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Sender Phone</label>
                            <input type="text" class="form-control" name="sender_phone" value="<?php echo $q->sender_phone ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>To Location</label>
                                <select class="form-control" name="id_village_to">
                                <option value="">Choose Location</option>
                                <?php
                                    foreach($village as $vgs){
                                        $selected='';
                                        if($vgs->id == $ask_list[0]->id_village_to){
                                            $selected='selected';
                                        }
                                        echo '<option value="'.$vgs->id.'"'.$selected.'>'.$vgs->village_name." - ".$vl->district_name." - ".$vl->regency_name." - ".$vl->province_name.'</option>';
                                        echo "tes";
                                    }
                                ?>
                                </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Detail Address</label>
                            <input type="text" class="form-control" name="address_detail_to" value="<?php echo $q->address_detail_to ?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Receiver Name</label>
                            <input type="text" class="form-control" name="receiver_name" value="<?php echo $q->receiver_name ?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Receiver Phone</label>
                            <input type="text" class="form-control" name="receiver_phone" value="<?php echo $q->receiver_phone ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Information</label>
                            <textarea type="text" class="form-control" row="3" name="information"><?php echo $q->information ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group" id="data_1">
                            <label>Date Needed</label>
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="text" name="date_needed" class="form-control" readonly value="<?php echo date('d/m/Y', strtotime($q->date_needed));?>" required="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Time Needed</label>
                                <div class="input-group clockpicker" data-placement="top" data-autoclose="true">
                                <input type="text" class="form-control" name="time_needed" readonly value="<?php echo date('H:i', strtotime($q->time_needed)); ?>">
                                <span class="input-group-addon">
                                    <span class="fa fa-clock-o"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div> 
<?php } ?>
<!-- End of modal edit -->


<script>
    $(document).ready(function(){
    $('#data_1 .input-group.date').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true,
            format:'dd/mm/yyyy'

        });
    });
</script>
<script>
    $('.select2').select2({
        dropdownParent: $('#myModal .modal-content'),
        width: '140'
    });
    $('.clockpicker').clockpicker({
            autoclose: false,
            align: 'right',
            donetext: 'Done'
        });
</script>
<script>
    $(document).ready(function(){
        const flashData = $('.flash-data').data('flashdata');
        // alert(flashData);
        if( flashData != "") {
            swal({
                title: '' + flashData,
                text: 'Successfully bidding',
                type: 'success'
            });
        } else{

        }
    });
</script>