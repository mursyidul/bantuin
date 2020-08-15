<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
    <h2>Dashboard</h2>
    <ol class="breadcrumb">
        <li>
            <a href="">Home</a>
        </li>
        <li class="active">
            <strong>Needed help</strong>
        </li>
    </ol>
    </div>
    <div class="col-lg-2">
    </div>
</div>
<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata("success") ?>"></div>
<div class="flash-data_error" data-flashdata="<?php echo $this->session->flashdata("error") ?>"></div>
<div class="row">
    <div class="col-lg-12">
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="ibox-content m-b-sm border-bottom">
                <div class="text-center p-lg">
                    <h2>Help to delivery</h2>
                    <span>Choose better for you. </span>
                    <!-- <button title="Create new cluster" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> <span class="bold">Add question</span></button> button -->
                </div>
            </div>
            <?php foreach($help as $p) { ?>
            <div class="faq-item">
                <div class="row">
                    <div class="col-md-7">
                        <a data-toggle="collapse" href="#faq<?php echo $p->id_help ?>" class="faq-question">From <?php echo '<strong>'.ucwords(strtolower($p->regency_to)).'</strong>';?> To <?php echo '<strong>'.ucwords(strtolower($p->regency_from)).'</strong>'; ?></a>
                        <small>Date needed : <i class="fa fa-clock-o"></i> <?php echo date('M-d', strtotime($p->date_needed))." ".date('H:i', strtotime($p->time_needed)); ?></small>
                    </div>
                    <div class="col-md-3">
                        <span class="small font-bold"><strong><?php echo $p->person_name ?></strong></span>
                        <div class="tag-list">
                            <span class="tag-item">General</span>
                            <span class="tag-item">License</span>
                        </div>
                    </div>
                    <div class="col-md-2 text-right">
                        <span class="small font-bold">Voting </span><br/>
                        42
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div id="faq<?php echo $p->id_help ?>" class="panel-collapse collapse ">
                            <div class="faq-answer">
                                <p>
                                    <?php echo $p->information ?>
                                </p>

                            </div>
                            <button type="button" class="btn btn-primary pull-right" style="margin-top: 5px;" data-toggle="modal" data-target="#myModal<?php echo $p->id_help ?>">Bid</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</div>

<?php foreach ($help as $p) { ?>
<div class="modal inmodal fade" id="myModal<?php echo $p->id_help ?>" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Bidding form <?php echo $this->session->userdata('id_user')." ".$p->id_help; ?></h4>
            </div>
            <form action="<?php echo base_url('help/addBid'); ?>" method="post">
            <div class="modal-body">
                <div class="row">
                    <input type="hidden" class="form-control" name="id_helper" value="<?php echo $this->session->userdata('id_user'); ?>">
                    <input type="hidden" class="form-control" name="id_help" value="<?php echo $p->id_help ?>">
                    <div class="col-md-6">
                        <div class="form-group" id="data_1">
                        <label>Date Pick Up <?php echo $p->id_help; ?></label>
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="text" name="estimate_date_pick_up" readonly class="form-control" placeholder="Visit Date" value="<?php echo date('d/m/Y')?>" required="">
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Time Pick Up</label>
                            <div class="input-group clockpicker" data-placement="bottom" data-autoclose="true">
                                <input type="text" class="form-control" name="estimate_time_pick_up" readonly>
                                <span class="input-group-addon">
                                    <span class="fa fa-clock-o"></span>
                                </span>
                            </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group" id="data_1">
                        <label>Date Arrive <?php echo $p->id_help; ?></label>
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="text" name="estimate_date_arrive" readonly class="form-control" placeholder="Visit Date" value="<?php echo date('d/m/Y')?>" required="">
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Time Arrive</label>
                            <div class="input-group clockpicker" data-placement="bottom" data-autoclose="true">
                                <input type="text" class="form-control" name="estimate_time_arrive" readonly>
                                <span class="input-group-addon">
                                    <span class="fa fa-clock-o"></span>
                                </span>
                            </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Your Fee</label>
                            <input type="text" name="bid_cost" class="form-control" placeholder="Rp.">
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