<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $this->config->item('site_name'); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Animation CSS -->
    <link href="<?php echo base_url('assets/css/animate.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">

    <!-- Toastr style -->
    <link href="<?php echo base_url('assets/css/plugins/toastr/toastr.min.css') ?>" rel="stylesheet">

    <!-- Gritter -->
    <link href="<?php echo base_url('assets/js/plugins/gritter/jquery.gritter.css') ?>" rel="stylesheet"> 

    <link href="<?php echo base_url('assets/css/animate.css') ?>" rel="stylesheet">

    <style>
        .backgroudkardus {
            background-image: url("assets/img/landing/background car.jpg");
            background-repeat: no-repeat;
            background-size: 1900px 700px;
            background-position: center;
        }

        .backgroudmeja {
            background-image: url("assets/img/landing/background meja.jpg");
            background-repeat: no-repeat;
            background-size: 1900px 700px;
            background-position: center;
        }

        .backgroudkasur {
            background-image: url("assets/img/landing/background kasur.jpg");
            background-repeat: no-repeat;
            background-size: 1900px 700px;
            background-position: center;
        }

        .backgroudroom {
            background-image: url("assets/img/landing/background room.jpg");
            background-repeat: no-repeat;
            background-size: 1900px 700px;
            background-position: center;
        }

        .backgroud {
            background-image: url("assets/img/landing/background bawah.jpg");
            background-repeat: no-repeat;
            background-size: 1900px 1000px;
            background-position: center;
        }

        .checked {
          color: orange;
        }

        .black {
           color: black;
        }
        .fontsize {
           font-size: 14px;
        }
        <style type="text/css">
           .left    { text-align: left;}
           .right   { text-align: right;}
           .center  { text-align: center;}
           .justify { text-align: justify;}
        </style>
    </style>

</head>
<body id="page-top" class="landing-page">
<div class="navbar-wrapper">

    <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata("success") ?>"></div>
    <div class="flash-data_error" data-flashdata="<?php echo $this->session->flashdata("error") ?>"></div>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="page-scroll" href="#page-top">Home</a></li>
                        <li><a class="page-scroll" href="#features">Advantages</a></li>
                        <li><a class="page-scroll" href="#testimonials">Reviews</a></li>
                        <li><a class="page-scroll" href="#contact">Contact</a></li>
                        <li><a class="page-scroll" data-toggle="modal" data-target="#login">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
</div>
<div class="modal inmodal" id="login" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated bounceInRight">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Login</h4>
                <!-- <small class="font-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small> -->
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" action="<?php echo base_url("login/action") ?>" method="POST">
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-8"> 
                            <input type="email" name="username" placeholder="Email" value="userowner@gmail.com" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Password</label>
                        <div class="col-lg-8"> 
                            <input type="password" class="form-control" placeholder="Password" name="password" value="user" id="myInput" required="">
                            <input type="checkbox" onclick="myFunction()"> Show Password
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-sm btn-success" type="submit">Sign in</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save</button> -->
            </div>
        </div>
    </div>
</div>
<div id="inSlider" class="carousel carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#inSlider" data-slide-to="0" class="active"></li>
        <li data-target="#inSlider" data-slide-to="1"></li>
        <li data-target="#inSlider" data-slide-to="2"></li>
        <li data-target="#inSlider" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="container">
                <div class="carousel-caption">
                    <h1>We craft<br/>
                        brands, web apps,<br/>
                        and user interfaces<br/>
                        we are IN+ studio</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing.</p>
                    <p>
                        <a class="btn btn-lg btn-primary" href="#" role="button">Help</a>
                        <a class="btn btn-lg btn-primary" href="#" role="button">READ MORE</a>
                        <!-- <a class="caption-link" href="#" role="button">Inspinia Theme</a> -->
                    </p>
                </div>
                <div class="carousel-image wow zoomIn">
                    <!-- <img src="assets/img/landing/laptop.png" alt="laptop"/> -->
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back backgroudkardus"></div>

        </div>
        <div class="item">
            <div class="container">
                <div class="carousel-caption black">
                    <h1>We create meaningful <br/> interfaces that inspire.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
            
                <div class="carousel-image wow zoomIn">
                    <!-- <img src="assets/img/landing/backgroud kado.jpg" alt="laptop"/> -->
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back backgroudmeja"></div>
        </div>
        <div class="item">
            <div class="container">
                <div class="carousel-caption blank">
                    <h1>We create meaningful <br/> interfaces that inspire.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
            
                <div class="carousel-image wow zoomIn">
                    <!-- <img src="assets/img/landing/laptop.png" alt="laptop"/> -->
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back backgroudkasur"></div>
        </div>
        <div class="item">
            <div class="container">
                <div class="carousel-caption blank">
                    <h1>We create meaningful <br/> interfaces that inspire.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
            
                <div class="carousel-image wow zoomIn">
                    <!-- <img src="assets/img/landing/laptop.png" alt="laptop"/> -->
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back backgroudroom"></div>
        </div>
    </div>
    <a class="left carousel-control" href="#inSlider" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#inSlider" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<section id="features" class="container services">

    <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>New Help Needed</h5>
                                <div class="ibox-tools">
                                    <span class="label label-primary pull-right" data-toggle="modal" data-target="#login">Show All</span>
                                    <span class="label label-warning-light pull-right">10 Help</span>
                                    <!-- <button type="button" class="btn btn-sm btn-primary pull-right m-t-n-xs" data-toggle="modal" data-target="#login">Show All</button> -->
                                </div>
                            </div>
                            <div class="ibox-content">
                                    <div class="feed-activity-list">

                                        <div class="feed-element">
                                            <a data-toggle="collapse" href="#help5" class="pull-left">
                                                <img alt="image" class="img-circle" src="assets/img/profile.jpg">
                                            </a>
                                            <div class="media-body ">
                                                <small class="pull-right">5m ago</small>
                                                <strong>Monica Smith</strong> posted a new blog. <br>
                                                <small class="text-muted">Today 5:60 pm - 12.06.2014</small>

                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div id="help5" class="panel-collapse collapse ">
                                                        <div class="faq-answer">
                                                            <p>
                                                                It is a long established fact that a reader will be distracted by the
                                                                readable content of a page when looking at its layout. The point of
                                                                using Lorem Ipsum is that it has a more-or-less normal distribution of
                                                                letters, as opposed to using 'Content here, content here', making it
                                                                look like readable English.
                                                            </p>
                                                            <button class="btn btn-primary" data-toggle="modal" data-target="#login"><i class="fa fa-shopping-cart"></i> Help</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="feed-element">
                                            <a data-toggle="collapse" href="#help4" class="pull-left">
                                                <img alt="image" class="img-circle" src="assets/img/a2.jpg">
                                            </a>
                                            <div class="media-body ">
                                                <small class="pull-right">2h ago</small>
                                                <strong>Mark Johnson</strong> posted message on <strong>Monica Smith</strong> site. <br>
                                                <small class="text-muted">Today 2:10 pm - 12.06.2014</small>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div id="help4" class="panel-collapse collapse ">
                                                        <div class="faq-answer">
                                                            <p>
                                                                It is a long established fact that a reader will be distracted by the
                                                                readable content of a page when looking at its layout. The point of
                                                                using Lorem Ipsum is that it has a more-or-less normal distribution of
                                                                letters, as opposed to using 'Content here, content here', making it
                                                                look like readable English.
                                                            </p>
                                                            <button class="btn btn-primary" data-toggle="modal" data-target="#login"><i class="fa fa-shopping-cart"></i> Help</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feed-element">
                                            <a data-toggle="collapse" href="#help3" class="pull-left">
                                                <img alt="image" class="img-circle" src="assets/img/a3.jpg">
                                            </a>
                                            <div class="media-body ">
                                                <small class="pull-right">2h ago</small>
                                                <strong>Janet Rosowski</strong> add 1 photo on <strong>Monica Smith</strong>. <br>
                                                <small class="text-muted">2 days ago at 8:30am</small>
                                            </div>
                                            <br/>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div id="help3" class="panel-collapse collapse ">
                                                        <div class="faq-answer">
                                                            <p>
                                                                It is a long established fact that a reader will be distracted by the
                                                                readable content of a page when looking at its layout. The point of
                                                                using Lorem Ipsum is that it has a more-or-less normal distribution of
                                                                letters, as opposed to using 'Content here, content here', making it
                                                                look like readable English.
                                                            </p>
                                                            <button class="btn btn-primary" data-toggle="modal" data-target="#login"><i class="fa fa-shopping-cart"></i> Help</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feed-element">
                                            <a data-toggle="collapse" href="#help2" class="pull-left">
                                                <img alt="image" class="img-circle" src="assets/img/profile.jpg">
                                            </a>
                                            <div class="media-body ">
                                                <small class="pull-right">23h ago</small>
                                                <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                                <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div id="help2" class="panel-collapse collapse ">
                                                        <div class="faq-answer">
                                                            <p>
                                                                It is a long established fact that a reader will be distracted by the
                                                                readable content of a page when looking at its layout. The point of
                                                                using Lorem Ipsum is that it has a more-or-less normal distribution of
                                                                letters, as opposed to using 'Content here, content here', making it
                                                                look like readable English.
                                                            </p>
                                                            <button class="btn btn-primary" data-toggle="modal" data-target="#login"><i class="fa fa-shopping-cart"></i> Help</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feed-element">
                                            <a data-toggle="collapse" href="#help1" class="pull-left">
                                                <img alt="image" class="img-circle" src="assets/img/a7.jpg">
                                            </a>
                                            <div class="media-body ">
                                                <small class="pull-right">46h ago</small>
                                                <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                                <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div id="help1" class="panel-collapse collapse ">
                                                        <div class="faq-answer">
                                                            <p>
                                                                It is a long established fact that a reader will be distracted by the
                                                                readable content of a page when looking at its layout. The point of
                                                                using Lorem Ipsum is that it has a more-or-less normal distribution of
                                                                letters, as opposed to using 'Content here, content here', making it
                                                                look like readable English.
                                                            </p>
                                                            <button class="btn btn-primary" data-toggle="modal" data-target="#login"><i class="fa fa-shopping-cart"></i> Help</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Top Helper</h5>
                                <div class="ibox-tools">
                                    <!-- <button type="button" class="btn btn-sm btn-primary pull-right m-t-n-xs" data-toggle="modal" data-target="#login">Show All</button> -->
                                </div>
                            </div>
                            <div class="ibox-content">
                                    <div class="feed-activity-list">

                                        <div class="feed-element">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <a data-toggle="collapse" href="#faq1" class="faq-question">
                                                        <img alt="image" class="img-circle" style="width: 40px; height: 40px;" src="assets/img/profile.jpg">
                                                    </a>
                                                </div>
                                                <div class="col-md-6">
                                                    <span class="small font-bold">Alex Smith</span>
                                                    <div class="tag-list">
                                                        <span class="tag-item">General</span>
                                                        <span class="tag-item">License</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 text-right">
                                                    <span class="small font-bold">Rating</span><br/>
                                                    <!-- <center> -->
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span> 100
                                                    <!-- </center> -->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div id="faq1" class="panel-collapse collapse ">
                                                        <div class="faq-answer">
                                                            <p>
                                                                It is a long established fact that a reader will be distracted by the
                                                                readable content of a page when looking at its layout. The point of
                                                                using Lorem Ipsum is that it has a more-or-less normal distribution of
                                                                letters, as opposed to using 'Content here, content here', making it
                                                                look like readable English.
                                                            </p>
                                                            <button class="btn btn-primary" data-toggle="modal" data-target="#login"><i class="fa fa-arrow-down"></i> Show More</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="feed-element">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <a data-toggle="collapse" href="#faq2" class="faq-question">
                                                        <img alt="image" class="img-circle" style="width: 40px; height: 40px;" src="assets/img/a3.jpg">
                                                    </a>
                                                </div>
                                                <div class="col-md-6">
                                                    <span class="small font-bold">Janet Rosowski</span>
                                                    <div class="tag-list">
                                                        <span class="tag-item">General</span>
                                                        <span class="tag-item">License</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 text-right">
                                                    <span class="small font-bold">Rating </span><br/>
                                                    <!-- <center> -->
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span> 92
                                                    <!-- </center> -->
                                                    
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div id="faq2" class="panel-collapse collapse ">
                                                        <div class="faq-answer">
                                                            <p>
                                                                It is a long established fact that a reader will be distracted by the
                                                                readable content of a page when looking at its layout. The point of
                                                                using Lorem Ipsum is that it has a more-or-less normal distribution of
                                                                letters, as opposed to using 'Content here, content here', making it
                                                                look like readable English.
                                                            </p>
                                                            <button class="btn btn-primary" data-toggle="modal" data-target="#login"><i class="fa fa-arrow-down"></i> Show More</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="feed-element">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <a data-toggle="collapse" href="#faq3" class="faq-question">
                                                        <img alt="image" class="img-circle" style="width: 40px; height: 40px;" src="assets/img/a4.jpg">
                                                    </a>
                                                </div>
                                                <div class="col-md-6">
                                                    <span class="small font-bold">Chris Johnatan Overtunk</span>
                                                    <div class="tag-list">
                                                        <span class="tag-item">General</span>
                                                        <span class="tag-item">License</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 text-right">
                                                    <span class="small font-bold">Rating </span><br/>
                                                    <!-- <center> -->
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span> 80
                                                    <!-- </center> -->
                                                    
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div id="faq3" class="panel-collapse collapse ">
                                                        <div class="faq-answer">
                                                            <p>
                                                                It is a long established fact that a reader will be distracted by the
                                                                readable content of a page when looking at its layout. The point of
                                                                using Lorem Ipsum is that it has a more-or-less normal distribution of
                                                                letters, as opposed to using 'Content here, content here', making it
                                                                look like readable English.
                                                            </p>
                                                            <button class="btn btn-primary" data-toggle="modal" data-target="#login"><i class="fa fa-arrow-down"></i> Show More</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="feed-element">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <a data-toggle="collapse" href="#faq4" class="faq-question">
                                                        <img alt="image" class="img-circle" style="width: 40px; height: 40px;" src="assets/img/a5.jpg">
                                                    </a>
                                                </div>
                                                <div class="col-md-6">
                                                    <span class="small font-bold">Kim Smith</span>
                                                    <div class="tag-list">
                                                        <span class="tag-item">General</span>
                                                        <span class="tag-item">License</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 text-right">
                                                    <span class="small font-bold">Rating </span><br/>
                                                    <!-- <center> -->
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star "></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span> 50
                                                    <!-- </center> -->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div id="faq4" class="panel-collapse collapse ">
                                                        <div class="faq-answer">
                                                            <p>
                                                                It is a long established fact that a reader will be distracted by the
                                                                readable content of a page when looking at its layout. The point of
                                                                using Lorem Ipsum is that it has a more-or-less normal distribution of
                                                                letters, as opposed to using 'Content here, content here', making it
                                                                look like readable English.
                                                            </p>
                                                            <button class="btn btn-primary" data-toggle="modal" data-target="#login"><i class="fa fa-arrow-down"></i> Show More</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="feed-element">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <a data-toggle="collapse" href="#faq5" class="faq-question">
                                                        <img alt="image" class="img-circle" style="width: 40px; height: 40px;" src="assets/img/a6.jpg">
                                                    </a>
                                                </div>
                                                <div class="col-md-6">
                                                    <span class="small font-bold">Kim Awsert</span>
                                                    <div class="tag-list">
                                                        <span class="tag-item">General</span>
                                                        <span class="tag-item">License</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 text-right">
                                                    <span class="small font-bold">Rating </span><br/>
                                                    <!-- <center> -->
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star "></span>
                                                        <span class="fa fa-star "></span>
                                                        <span class="fa fa-star "></span> 40
                                                    <!-- </center> -->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div id="faq5" class="panel-collapse collapse ">
                                                        <div class="faq-answer">
                                                            <p>
                                                                It is a long established fact that a reader will be distracted by the
                                                                readable content of a page when looking at its layout. The point of
                                                                using Lorem Ipsum is that it has a more-or-less normal distribution of
                                                                letters, as opposed to using 'Content here, content here', making it
                                                                look like readable English.
                                                            </p>
                                                            <button class="btn btn-primary" data-toggle="modal" data-target="#login"><i class="fa fa-arrow-down"></i> Show More</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



    <div class="row">
        <div class="col-sm-3">
            <center><h2>Cheaper</h2></center>
            <p class="justify">&nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla erat dolor, ullamcorper in ultricies eget, fermentum rhoncus leo. Curabitur eu mi vitae metus posuere laoreet.</p>
            
        </div>
        <div class="col-sm-3">
            <center><h2>Faster</h2></center>
            <p class="justify">&nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla erat dolor, ullamcorper in ultricies eget, fermentum rhoncus leo. Curabitur eu mi vitae metus posuere laoreet.</p>
            
        </div>
        <div class="col-sm-3">
            <center><h2>Easier</h2></center>
            <p class="justify">&nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla erat dolor, ullamcorper in ultricies eget, fermentum rhoncus leo. Curabitur eu mi vitae metus posuere laoreet.</p>
            
        </div>
        <div class="col-sm-3">
            <center><h2>More Efficient</h2></center>
            <p class="justify">&nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla erat dolor, ullamcorper in ultricies eget, fermentum rhoncus leo. Curabitur eu mi vitae metus posuere laoreet.</p>
            
        </div>
    </div>
</section>

<section  class="container features">
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="navy-line"></div>
            <br/>
            <h1><span class="navy"> The Advantages of us</span> </h1>
            <br/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 text-center wow fadeInLeft">
            <div>
                <i class="fa fa-money features-icon"></i>
                <h2>Cheaper</h2>
                <p class="justify">&nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla erat dolor, ullamcorper in ultricies eget, fermentum rhoncus leo. Curabitur eu mi vitae metus posuere laoreet.</p>
            </div>
            <div class="m-t-lg">
                <i class="fa fa-car features-icon"></i>
                <h2>Faster</h2>
                <p class="justify">&nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla erat dolor, ullamcorper in ultricies eget, fermentum rhoncus leo. Curabitur eu mi vitae metus posuere laoreet.</p>
            </div>
        </div>
        <div class="col-md-6 text-center  wow zoomIn">
            <img src="assets/img/landing/kado.jpg" alt="dashboard" class="img-responsive">
        </div>
        <div class="col-md-3 text-center wow fadeInRight">
            <div>
                <i class="fa fa-joomla features-icon"></i>
                <h2>Easier</h2>
                <p class="justify">&nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla erat dolor, ullamcorper in ultricies eget, fermentum rhoncus leo. Curabitur eu mi vitae metus posuere laoreet.</p>
            </div>
            <div class="m-t-lg">
                <i class="fa fa-jsfiddle features-icon"></i>
                <h2>More Efficient</h2>
                <p class="justify">&nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla erat dolor, ullamcorper in ultricies eget, fermentum rhoncus leo. Curabitur eu mi vitae metus posuere laoreet.</p>
            </div>
        </div>
    </div>
</section>
</br>
</br>

<section id="testimonials">
    <!-- <div class="item"> -->
            <div class="container">
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back backgroudmeja">
                <div class="row">
                    <div class="row">
                        <div class="col-lg-8">
                            
                        </div>
                    </div>
                    <br/>
                    <br/>
                    <br/>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10 text-center wow zoomIn">
                        <i class="fa fa-comment big-icon black"></i>
                        <h1 class="black">
                            What our users say
                        </h1>
                        <div class="testimonials-text">
                            <i class="black">"Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)."</i>
                        </div>
                        <small>
                            <strong class="black">12.02.2014 - Andy Smith</strong>
                        </small>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        <!-- </div> -->
</section>

<section class="comments gray-section" style="margin-top: 0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Customer Reviews</h1>
            </div>
        </div>
        <div class="row features-block">
            <div class="col-lg-4">
                <div class="bubble">
                    "The response was very fast, the order was processed immediately.Items according to what is described"
                </div>
                <div class="comments-avatar">
                    <a href="" class="pull-left">
                        <img alt="image" src="assets/img/landing/avatar3.jpg">
                    </a>
                    <div class="media-body">
                        <div class="commens-name">
                            Andrew Williams
                        </div>
                        <small class="text-muted">Company X from California</small>
                    </div>
                </div>
            <br/>
            </div>

            <div class="col-lg-4">
                <div class="bubble">
                    "The seller's response is fast, fast delivery in less than 20 hours has arrived, excellent quality and very recommended (according to price), hopefully it can be a subscription"
                </div>
                <div class="comments-avatar">
                    <a href="" class="pull-left">
                        <img alt="image" src="assets/img/landing/avatar1.jpg">
                    </a>
                    <div class="media-body">
                        <div class="commens-name">
                            Andrew Williams
                        </div>
                        <small class="text-muted">Company X from California</small>
                    </div>
                </div><br/>
            </div>


            <div class="col-lg-4">
                <div class="bubble">
                    "The items have been received well, the packing is neat using buble wrap + box and the box is safe, not dented, the seller is responsive and the delivery is fast, thank you"
                </div>
                <div class="comments-avatar">
                    <a href="" class="pull-left">
                        <img alt="image" src="assets/img/landing/avatar2.jpg">
                    </a>
                    <div class="media-body">
                        <div class="commens-name">
                            Andrew Williams
                        </div>
                        <small class="text-muted">Company X from California</small>
                    </div>
                </div>
            </div>



        </div>
    </div>

</section>
<section id="contact" class="contact">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Contact Us</h1>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
            </div>
        </div>
        <div class="row m-b-lg">
            <div class="col-lg-3 col-lg-offset-3">
                <address>
                    <strong><span class="navy">Company name, Inc.</span></strong><br/>
                    Gg. I, Jatirembe, Benjeng,<br/>
                    Kabupaten Gresik, Jawa Timur 61172<br/>
                    <abbr title="Phone">Telp:</abbr> (085) 655-312-333
                </address>
            </div>
            <div class="col-lg-4">
                <p class="text-color">
                    Criticism, suggestions from you are good for us and your satisfaction is our goal.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a class="btn btn-primary" data-toggle="modal" data-target="#email">Send us mail</a>
                <p class="m-t-sm">
                    Or follow us on social platform
                </p>
                <ul class="list-inline social-icon">
                    <li><a href="https://www.instagram.com/emcorpstudio/"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="https://www.youtube.com/watch?v=Jo-lMJ0qO7c"><i class="fa fa-youtube"></i></a>
                    </li>
                </ul>
            </div>

            <div class="modal inmodal" id="email" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content animated flipInY">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title">Send Email</h4>
                            <!-- <small class="font-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small> -->
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" role="form" action="<?php echo base_url("login/email") ?>" method="POST">
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-8"> 
                                        <input type="email" name="username" placeholder="Email" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Subject</label>
                                    <div class="col-lg-8"> 
                                        <input type="text" class="form-control" placeholder="Subject" name="subject" id="myInput" required="">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-lg-2 control-label">Message</label>
                                    <div class="col-lg-8"> 
                                        <textarea class="form-control" name="message" placeholder="Message" rows="2" required="required"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-sm btn-success" type="submit">Sign in</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                <small>By : <a href="http://www.emcorpstudio.com/" target="_blank">Emcorp Studio</a> | Bantuin &copy; <?php echo date('Y'); ?></small>
            </div>
        </div>
    </div>

</section>

<!-- Mainly scripts -->
<script src="<?php echo base_url('assets/js/jquery-2.1.1.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/metisMenu/jquery.metisMenu.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/slimscroll/jquery.slimscroll.min.js'); ?>"></script>

<!-- Custom and plugin javascript -->
<script src="<?php echo base_url('assets/js/inspinia.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/pace/pace.min.js'); ?>"></script>  
<script src="<?php echo base_url('assets/js/plugins/wow/wow.min.js'); ?>"></script>  

<!-- Flot --> 
<script src="<?php echo base_url('assets/js/plugins/flot/jquery.flot.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/flot/jquery.flot.tooltip.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/flot/jquery.flot.spline.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/flot/jquery.flot.pie.js'); ?>"></script>


<script>

    $(document).ready(function () {

        $('body').scrollspy({
            target: '.navbar-fixed-top',
            offset: 80
        });

        // Page scrolling feature
        $('a.page-scroll').bind('click', function(event) {
            var link = $(this);
            $('html, body').stop().animate({
                scrollTop: $(link.attr('href')).offset().top - 50
            }, 500);
            event.preventDefault();
            $("#navbar").collapse('hide');
        });
    });

    var cbpAnimatedHeader = (function() {
        var docElem = document.documentElement,
                header = document.querySelector( '.navbar-default' ),
                didScroll = false,
                changeHeaderOn = 200;
        function init() {
            window.addEventListener( 'scroll', function( event ) {
                if( !didScroll ) {
                    didScroll = true;
                    setTimeout( scrollPage, 250 );
                }
            }, false );
        }
        function scrollPage() {
            var sy = scrollY();
            if ( sy >= changeHeaderOn ) {
                $(header).addClass('navbar-scroll')
            }
            else {
                $(header).removeClass('navbar-scroll')
            }
            didScroll = false;
        }
        function scrollY() {
            return window.pageYOffset || docElem.scrollTop;
        }
        init();

    })();

    // Activate WOW.js plugin for animation on scrol
    new WOW().init();

</script>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<script>
    $(document).ready(function(){
        const flashData = $('.flash-data').data('flashdata');
        // alert(flashData);
        if( flashData != "") {
            swal({
                title: '' + flashData,
                text: 'Register Berhasil',
                type: 'success'
            });
        } else{

        }
    });
    </script>

    <script>
    $(document).ready(function(){
        const flashData = $('.flash-data_error').data('flashdata');
        // alert(flashData);
        if( flashData != "") {
            swal({
                title: '' + flashData,
                text: 'Register gagal! Email sudah ada.',
                type: 'error'
            });
        } else{

        }
    });
    </script>

</body>
</html>
