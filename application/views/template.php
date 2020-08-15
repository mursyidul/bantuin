<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $this->config->item('site_name'); ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/icon-cr.png') ?>" />
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/animate.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/datepicker/datepicker3.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/custom.css') ?>" rel="stylesheet">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/images/ico.png" /> -->
    <!-- Mainly scripts -->
    <script src="<?php echo base_url('assets/js/jquery-2.1.1.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/metisMenu/jquery.metisMenu.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/slimscroll/jquery.slimscroll.min.js'); ?>"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url('assets/js/inspinia.js');?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/pace/pace.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/morris.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/morris.js');?>"></script>
    <script src="<?php echo base_url('assets/js/raphael-min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/rickshaw/vendor/d3.v3.js');?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/rickshaw/rickshaw.min.js');?>"></script>


    <!-- Datepicker -->
    <script src="<?php echo base_url('assets/js/plugins/datepicker/bootstrap-datepicker.js') ?>"></script>
    <link href="<?php echo base_url('assets/css/plugins/clockpicker/clockpicker.css') ?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/js/plugins/clockpicker/clockpicker.js') ?>"></script>

    <!-- Datatables -->
    <link href="<?php echo base_url('assets/js/morris.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/dataTables/datatables.min.css') ?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/js/plugins/dataTables/datatables.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/dataTables/dataTables.fixedColumns.min.js') ?>"></script>

    <!-- Select2 -->
    <link href="<?php echo base_url('assets/css/plugins/select2/select2.min.css') ?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/js/plugins/select2/select2.min.js') ?>"></script>

    <!-- Icheck -->
    <link href="<?php echo base_url('assets/css/plugins/iCheck/custom.css') ?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/js/plugins/iCheck/icheck.min.js') ?>"></script>

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="<?= base_url('assets/sweetalert/sweetalert.css'); ?>">
    <script src="<?php echo base_url('assets/sweetalert/sweetalert.min.js') ?>"></script>

    <!-- CK-Editor -->
    <script src="<?php echo base_url('assets/ckeditor/ckeditor.js') ?>"></script>
    <!-- Progress Wizard -->
    <link href="<?php echo base_url('assets/css/progress-wizard.min.css') ?>" rel="stylesheet">

    <!-- Steps -->
    <link href="<?php echo base_url('assets/css/plugins/steps/jquery.steps.css') ?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/js/plugins/staps/jquery.steps.min.js') ?>"></script>

    <!-- Validate -->
    <script src="<?php echo base_url('assets/js/plugins/validate/jquery.validate.min.js') ?>"></script>

    <!-- Fancybox -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    <!-- Input Mask-->
    <!-- <script src="<?php echo base_url('assets/js/plugins/Inputmask-2.x/dist/jquery.inputmask.bundle.min.js') ?>"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>
</head>
<body class="">
    <div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"><span><center>
                            <img alt="image" width="60" height="60" src="<?php echo base_url('assets/images/cr.jpg')?>" />
                             </span></center> 
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <center><strong class="font-bold"><?php echo ucwords($this->session->userdata("user_name")); ?></strong></center>
                            </span> <center><span class="text-muted text-xs block"><?php echo ucwords(strtolower($this->session->userdata("role"))); ?> </span></center> </span> </a>
                        
                    </div>
                    <div class="logo-element">
                        BIRU
                    </div>
                </li>
                <?php $menu = $this->uri->segment('1'); $submenu = $this->uri->segment('2');?>
                <?php if($this->session->userdata('role') == 'SUPERADMIN' || $this->session->userdata('role') == 'USER') { ?>
                <li <?php if($menu == "dashboard"){ echo "class='active'";} ?>>
                    <a href="<?php echo base_url("dashboard") ?>"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
                </li>
            <?php } ?>
                <?php if($this->session->userdata('role') == 'SUPERADMIN') { ?>
                <li <?php if($menu == "user" || $menu == "client" || $menu == "activity" || $menu == "category" || $menu == "location" || $menu == "costcontrol"){ echo "class='active'";} ?>>
                    <a href="#"><i class="fa fa-database"></i> <span class="nav-label">Master</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li <?php if($menu == "activity"){ echo "class='active'";} ?>><a href="<?php echo base_url("activity"); ?>">Activity</a></li>

                        <li <?php if($menu == "category"){ echo "class='active'";} ?>><a href="<?php echo base_url("category"); ?>">Category</a></li>

                        <li <?php if($menu == "client"){ echo "class='active'";} ?>><a href="<?php echo base_url("client"); ?>">Client</a></li>

                        <li <?php if($menu == "costcontrol"){ echo "class='active'";} ?>><a href="<?php echo base_url("costcontrol") ?>"><span class="nav-label">Cost Controll</span></a>
                        </li>

                        <li <?php if($menu == "location"){ echo "class='active'";} ?>><a href="<?php echo base_url("location"); ?>">Location</a></li>

                        <li <?php if($menu == "user" && $submenu == null){ echo "class='active'";} ?>><a href="<?php echo base_url("user"); ?>">User Management</a></li>
                    </ul>
                </li>
                <?php } ?>
                <li <?php if($menu == "help"){ echo "class='active'";} ?>>
                    <a href="<?php echo base_url("help") ?>"><i class="fa fa-check-square"></i> <span class="nav-label">Help</span></a>
                </li>
                <li <?php if($menu == "askhelp"){ echo "class='active'";} ?>>
                    <a href="<?php echo base_url("askhelp") ?>"><i class="fa fa-check-square-o"></i> <span class="nav-label">Ask For Help</span></a>
                </li>
                <li <?php if($menu == "ongoing"){ echo "class='active'";} ?>>
                    <a href="<?php echo base_url("ongoing") ?>"><i class="fa fa-book"></i> <span class="nav-label">On Going Help</span></a>
                </li>
                <li <?php if($menu == "earn"){ echo "class='active'";} ?>>
                    <a href="<?php echo base_url("earn") ?>"><i class="fa fa-dollar"></i> <span class="nav-label">Earns</span></a>
                </li>

                <!-- <li <?php if($menu == "reportsheet"){ echo "class='active'";} ?>>
                    <a href="<?php echo base_url("reportsheet") ?>"><i class="fa fa-book"></i> <span class="nav-label">Report</span></a>
                </li> -->
                
            </ul>
        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0;background: linear-gradient(to right, #627699 0%, #005295 100%);color:black;">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-success dim " href="#"><i class="fa fa-bars"></i> </a>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <a href="<?php echo base_url("login/doLogout"); ?>">
                        <i class="fa fa-sign-out"></i> Logout
                    </a>
                </li>
            </ul>
        </nav>
        </div>
            <!-- content in here -->
            <?= $contents; ?>
            <!-- /content in here -->

            <div class="footer">
                <div class="pull-right">
                    <small><a href="http://www.emcorpstudio.com/" target="_blank">Emcorp Studio</a> | Bantuin &copy; <?php echo date('Y'); ?></small>
                </div>
            </div>

        </div>
    </div>
</body>
</html>