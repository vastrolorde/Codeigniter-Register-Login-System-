<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="slick, flat, dashboard, bootstrap, admin, template, theme, responsive, fluid, retina">
    <link rel="shortcut icon" href="javascript:;" type="image/png">

    <title>SlickLab - Advanced Components</title>

    <!--right slidebar-->
    <link href="<?php echo base_url();?>assets/admin/css/slidebars.css" rel="stylesheet">

    <!--switchery-->
    <link href="<?php echo base_url();?>assets/admin/js/switchery/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />

    <!--iCheck-->
    <link href="<?php echo base_url();?>assets/admin/js/icheck/skins/all.css" rel="stylesheet">

    <!--tagsinput-->
    <link href="<?php echo base_url();?>assets/admin/css/tagsinput.css" rel="stylesheet">

    <!--dropzone-->
    <link href="<?php echo base_url();?>assets/admin/css/dropzone.css" rel="stylesheet">

    <!--Select2-->
    <link href="<?php echo base_url();?>assets/admin/css/select2.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/css/select2-bootstrap.css" rel="stylesheet">

    <!--bootstrap-touchspin-->
    <link href="<?php echo base_url();?>assets/admin/css/bootstrap-touchspin.css" rel="stylesheet">

    <!--bootstrap picker-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/js/bootstrap-datepicker/css/datepicker.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/js/bootstrap-timepicker/compiled/timepicker.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/js/bootstrap-colorpicker/css/colorpicker.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/js/bootstrap-daterangepicker/daterangepicker-bs3.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/js/bootstrap-datetimepicker/css/datetimepicker.css"/>

    <!--common style-->
    <link href="<?php echo base_url();?>assets/admin/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="sticky-header">

    <section>
        <!-- sidebar left start-->
        <div class="sidebar-left">
            <!--responsive view logo start-->
            <div class="logo dark-logo-bg visible-xs-* visible-sm-*">
                <a href="http://localhost/codeigniter/corlate/index.php/admin/">
                    <img src="<?php echo base_url();?>assets/admin/img/logo-icon.png" alt="">
                    <!--<i class="fa fa-maxcdn"></i>-->
                    <span class="brand-name">SlickLab</span>
                </a>
            </div>
            <!--responsive view logo end-->

            <div class="sidebar-left-info">
                <!-- visible small devices start-->
                <div class=" search-field">  </div>
                <!-- visible small devices end-->

                <!--sidebar nav start-->
                <ul class="nav nav-pills nav-stacked side-navigation">
                    <li>
                        <h3 class="navigation-title">Navigation</h3>
                    </li>
                    <li><a href="http://localhost/codeigniter/corlate/index.php/admin/"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
                    <li class="menu-list">
                        <a href=""><i class="fa fa-laptop"></i>  <span>Layouts</span></a>
                        <ul class="child-list">
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/boxedlayout"> Boxed Page</a></li>
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/collapsedmenu"> Sidebar Collapsed</a></li>
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/blankpage"> Blank page</a></li>
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/differentthemelayouts"> Different Theme Layouts</a></li>
                        </ul>
                    </li>
                    <li class="menu-list"><a href=""><i class="fa fa-book"></i> <span>UI Elements</span></a>
                        <ul class="child-list">
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/general"> BS Elements</a></li>
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/buttons"> Buttons</a></li>
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/toastr"> Toaster Notification</a></li>
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/widgets"> Widgets</a></li>
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/ionslider"> Ion Slider</a></li>
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/tree"> Tree View</a></li>
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/nestable"> Nestable</a></li>
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/fontawesome"> Fontawesome</a></li>
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/lineicon"> Line Icon</a></li>
                        </ul>
                    </li>
                    <li>
                        <h3 class="navigation-title">Components</h3>
                    </li>
                    <li class="menu-list"><a href=""><i class="fa fa-cogs"></i> <span>Components <span class="badge noti-arrow bg-success pull-right">3</span> </span></a>
                        <ul class="child-list">
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/grid"> Grids</a></li>
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/calendar"> Calendar</a></li>
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/timeline"> Timeline </a></li>
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/gallery"> Gallery </a></li>
                        </ul>
                    </li>

                    <li class="menu-list"><a href="javascript:;"><i class="fa fa-th-list"></i> <span>Data Tables</span></a>
                        <ul class="child-list">
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/tablestatic"> Basic Table</a></li>
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/tabledynamic"> Advanced Table</a></li>
                        </ul>
                    </li>

                    <li class="menu-list nav-active"><a href=""><i class="fa fa-tasks"></i> <span>Forms</span></a>
                        <ul class="child-list">
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/formlayout"> Form Layouts</a></li>
                            <li class="active"><a href="http://localhost/codeigniter/corlate/index.php/admin/advancedcomponents"> Advanced Components</a></li>
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/formwizard"> Form Wizards</a></li>
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/formvalidation"> Form Validation</a></li>
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/formeditor"> Editors</a></li>
                        </ul>
                    </li>

                    <li class="menu-list"><a href=""><i class="fa fa-bar-chart-o"></i> <span>Charts </span></a>
                        <ul class="child-list">
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/flotchart"> Flot Charts</a></li>
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/morrischart"> Morris Charts</a></li>
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/chartjs"> Chartjs</a></li>
                        </ul>
                    </li>
                    <li>
                        <h3 class="navigation-title">Extra</h3>
                    </li>

                    <li class="menu-list"><a href="javascript:;"><i class="fa fa-envelope-o"></i> <span>Email <span class="label noti-arrow bg-danger pull-right">4 Unread</span> </span></a>
                        <ul class="child-list">
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/inbox"> Inbox</a></li>
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/inboxdetails"> View Mail</a></li>
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/inboxcompose"> Compose Mail</a></li>
                        </ul>
                    </li>

                    <li class="menu-list"><a href="javascript:;"><i class="fa fa-map-marker"></i> <span>Maps</span></a>
                        <ul class="child-list">
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/googlemap"> Google Map</a></li>
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/vectormap"> Vector Map</a></li>
                        </ul>
                    </li>

                    <li class="menu-list"><a href=""><i class="fa fa-file-text"></i> <span>Extra Pages</span></a>
                        <ul class="child-list">
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/profile"> Profile</a></li>
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/invoice"> Invoice</a></li>
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/login"> Login </a></li>
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/registration"> Registration </a></li>
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/lock"> Lock Screen </a></li>
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/error"> 404 Error</a></li>
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/wrong"> 500 Error</a></li>

                        </ul>
                    </li>

                </ul>
                <!--sidebar nav end-->

                <!--sidebar widget start-->
                <div class="sidebar-widget">
                    <h4>Server Status</h4>
                    <ul class="list-group">
                        <li>
                            <span class="label label-danger pull-right">33%</span>
                            <p>CPU Used</p>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-danger" style="width: 33%;">
                                    <span class="sr-only">33%</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <span class="label label-warning pull-right">65%</span>
                            <p>Bandwidth</p>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-warning" style="width: 65%;">
                                    <span class="sr-only">65%</span>
                                </div>
                            </div>
                        </li>
                        <li><a href="javascript:;" class="btn btn-success btn-sm ">View Details</a></li>
                    </ul>
                </div>
                <!--sidebar widget end-->

            </div>
        </div>
        <!-- sidebar left end-->

        <!-- body content start-->
        <div class="body-content" style="min-height: 1000px;">

            <!-- header section start-->
            <div class="header-section">

                <!--logo and logo icon start-->
                <div class="logo dark-logo-bg hidden-xs hidden-sm">
                    <a href="http://localhost/codeigniter/corlate/index.php/admin/">
                        <img src="<?php echo base_url();?>assets/admin/img/logo-icon.png" alt="">
                        <!--<i class="fa fa-maxcdn"></i>-->
                        <span class="brand-name">SlickLab</span>
                    </a>
                </div>

                <div class="icon-logo dark-logo-bg hidden-xs hidden-sm">
                    <a href="http://localhost/codeigniter/corlate/index.php/admin/">
                        <img src="<?php echo base_url();?>assets/admin/img/logo-icon.png" alt="">
                        <!--<i class="fa fa-maxcdn"></i>-->
                    </a>
                </div>
                <!--logo and logo icon end-->

                <!--toggle button start-->
                <a class="toggle-btn"><i class="fa fa-outdent"></i></a>
                <!--toggle button end-->

                <!--mega menu start-->
                <div id="navbar-collapse-1" class="navbar-collapse collapse yamm mega-menu">
                    <ul class="nav navbar-nav">
                        <!-- Classic list -->
                        <li class="dropdown"><a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle">Mega <b
                                class=" fa fa-angle-down"></b></a>
                            <ul class="dropdown-menu wide-full">
                                <li>
                                    <!-- Content container to add padding -->
                                    <div class="yamm-content">
                                        <div class="row">
                                            <ul class="col-sm-2 list-unstyled">
                                                <li>
                                                    <p class="title">Standard</p>
                                                </li>
                                                <li><a href="javascript:;"> Slick Mega Navigation </a>
                                                </li>
                                                <li><a href="javascript:;"> Built in BS3+</a>
                                                </li>
                                                <li><a href="javascript:;"> Full Customizable </a>
                                                </li>
                                                <li><a href="javascript:;"> Huge Components </a>
                                                </li>
                                                <li><a href="javascript:;"> Tons of widgets </a>
                                                </li>
                                                <li><a href="javascript:;"> Fontawesome </a>
                                                </li>
                                            </ul>
                                            <ul class="col-sm-2 list-unstyled">
                                                <li>
                                                    <p class="title">Description</p>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="d-title">2015 Mordern Design</span>
                                                        <span class="d-desk">Description goes here</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="d-title">Amaging Dashboard</span>
                                                        <span class="d-desk">Build with BS3</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="d-title">3500+ Satisfied Client</span>
                                                        <span class="d-desk">Max 5 star rating</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="d-title">Easy to Cutomize</span>
                                                        <span class="d-desk">Very easy to use</span>
                                                    </a>
                                                </li>

                                            </ul>
                                            <ul class="col-sm-2 list-unstyled">
                                                <li>
                                                    <p class="title">Iconic</p>
                                                </li>
                                                <li><a href="javascript:;"><i class="fa fa-anchor text-muted"></i> Anchor Icon </a>
                                                </li>
                                                <li><a href="javascript:;"><i class="fa fa-desktop text-muted"></i> Desktop Icon </a>
                                                </li>
                                                <li><a href="javascript:;"><i class="fa fa-laptop text-muted"></i> Laptop Icon</a>
                                                </li>
                                                <li><a href="javascript:;"><i class="fa fa-automobile text-muted"></i> Automobile Icon </a>
                                                </li>
                                                <li><a href="javascript:;"><i class="fa fa-briefcase text-muted"></i> Briefcase Icon</a>
                                                </li>
                                            </ul>
                                            <ul class="col-sm-3 list-unstyled">
                                                <li>
                                                    <p class="title">Image + Description</p>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <img class="icon-img" src="<?php echo base_url();?>assets/admin/img/mega-menu/mega_icon1.png" alt="" />
                                                                <span class="icon-desk">
                                                                                        <span class="d-title">Full Flat Concept</span>
                                                                <span class="d-desk">Description goes here</span>
                                                                </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <img class="icon-img" src="<?php echo base_url();?>assets/admin/img/mega-menu/mega_icon2.png" alt="" />
                                                                <span class="icon-desk">
                                                                                        <span class="d-title">Amaging Dashboard</span>
                                                                <span class="d-desk">Build with BS3</span>
                                                                </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <img class="icon-img" src="<?php echo base_url();?>assets/admin/img/mega-menu/mega_icon3.png" alt="" />
                                                                <span class="icon-desk">
                                                                                        <span class="d-title">3500+ Satisfied Client</span>
                                                                <span class="d-desk">Max 5 star rating</span>
                                                                </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <img class="icon-img" src="<?php echo base_url();?>assets/admin/img/mega-menu/mega_icon4.png" alt="" />
                                                                <span class="icon-desk">
                                                                                        <span class="d-title">Easy to Cutomize</span>
                                                                <span class="d-desk">Very easy to use</span>
                                                                </span>
                                                    </a>
                                                </li>

                                            </ul>
                                            <ul class="col-sm-3 list-unstyled custom-nav-img">
                                                <li>
                                                    <p class="title">Custom</p>
                                                </li>
                                                <li>

                                                    <p class="desk">Ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Asperiores aut, autem commodi cumque illum pariatur
                                                        vero. Ad adipisci animi delectus</p>
                                                </li>
                                                <li><span class="mega-bg"></span></li>
                                            </ul>

                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <!-- Classic dropdown -->
                        <li class="dropdown"><a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle"> English  <b
                                class=" fa fa-angle-down"></b></a>
                            <ul role="menu" class="dropdown-menu language-switch">
                                <li>
                                    <a tabindex="-1" href="javascript:;"><span> German </span><img src="<?php echo base_url();?>assets/admin/img/flags/germany_flag.jpg" alt=""/></a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="javascript:;"><span> Italian </span> <img src="<?php echo base_url();?>assets/admin/img/flags/italy_flag.jpg" alt=""/></a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="javascript:;"><span> French </span> <img src="<?php echo base_url();?>assets/admin/img/flags/french_flag.jpg" alt=""/></a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="javascript:;"><span> Spanish </span> <img src="<?php echo base_url();?>assets/admin/img/flags/spain_flag.jpg" alt=""/></a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="javascript:;"><span> Russian </span> <img src="<?php echo base_url();?>assets/admin/img/flags/russia_flag.jpg" alt=""/></a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!--mega menu end-->
                <div class="notification-wrap">
                <!--left notification start-->
                <div class="left-notification">
                <ul class="notification-menu">
                <!--mail info start-->
                <li class="d-none">
                    <a href="javascript:;" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-primary">6</span>
                    </a>

                    <div class="dropdown-menu dropdown-title">
                        <div class="title-row">
                            <h5 class="title purple">
                                You have 6 Unread Mail
                            </h5>
                            <a href="javascript:;" class="btn-primary btn-view-all">View all</a>
                        </div>
                        <div class="notification-list mail-list">
                            <a href="javascript:;" class="single-mail">
                                <span class="icon bg-primary">
                                    S
                                </span>
                                <strong>Smith Doe</strong>
                                <small> Just Now</small>
                                <p>
                                    <small>Hello smith i have some query about your</small>
                                </p>
                                <span class="un-read tooltips" data-original-title="Mark as Read" data-toggle="tooltip" data-placement="left">
                                    <i class="fa fa-circle"></i>
                                </span>
                            </a>
                            <a href="javascript:;" class="single-mail">
                                <span class="icon bg-success">
                                    A
                                </span>
                                <strong>Anthony Jones </strong>
                                <small> 30 Mins Ago</small>
                                <p>
                                    <small>Hello this is an example message</small>
                                </p>
                                <span class="un-read tooltips" data-original-title="Mark as Read" data-toggle="tooltip" data-placement="left">
                                    <i class="fa fa-circle"></i>
                                </span>
                            </a>
                            <a href="javascript:;" class="single-mail">
                                <span class="icon bg-warning">
                                    B
                                </span> Billy Jones
                                <small> 2 Days Ago</small>
                                <p>
                                    <small>Slicklab is awesome Dashboard</small>
                                </p>
                                <span class="read tooltips" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="left">
                                    <i class="fa fa-circle-o"></i>
                                </span>
                            </a>
                            <a href="javascript:;" class="single-mail">
                                <span class="icon bg-dark">
                                    J
                                </span> John Doe
                                <small> 1 Week Ago</small>
                                <p>
                                    <small>Build with Twitter Bootstrap 3</small>
                                </p>
                                <span class="read tooltips" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="left">
                                    <i class="fa fa-circle-o"></i>
                                </span>
                            </a>
                            <a href="javascript:;" class="single-mail">
                                <span class="icon bg-danger">
                                    S
                                </span> Smith Doe
                                <small> Just Now</small>
                                <p>
                                    <small>No hassle, very easy to use</small>
                                </p>
                                <span class="read tooltips" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="left">
                                    <i class="fa fa-circle-o"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </li>
                <!--mail info end-->

                <!--task info start-->
                <li class="d-none">
                    <a href="javascript:;" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                        <i class="fa fa-tasks"></i>
                        <span class="badge bg-success">9</span>
                    </a>

                    <div class="dropdown-menu dropdown-title">
                        <div class="title-row">
                            <h5 class="title green">
                                You have 9 task
                            </h5>
                            <a href="javascript:;" class="btn-success btn-view-all">View all</a>
                        </div>
                        <div class="notification-list task-list">
                            <a href="javascript:;">
                                <span class="icon ">
                                    <i class="fa fa-paw green-color"></i>
                                </span>
                                <span class="task-info">
                                Smith Doe
                                <small> Assigned new task 10 min ago</small>
                                    </span>
                            </a>
                            <a href="javascript:;">
                                <span class="icon ">
                                    <i class="fa fa-line-chart blue-color"></i>
                                </span>
                                <span class="task-info">Anthony Jones
                                <small> Done 60% of his task</small>

                                <div class="progress progress-striped">
                                    <div style="width: 66%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="66" role="progressbar" class="progress-bar progress-bar-info"></div>
                                </div>

                                </span>
                            </a>
                            <a href="javascript:;">
                                <span class="icon ">
                                    <i class="fa fa-heart purple-color"></i>
                                </span>
                                <span class="task-info">Tawseef
                                <small> Like your task 10 min ago</small>
                                    </span>

                            </a>
                            <a href="javascript:;">
                                <span class="icon ">
                                    <i class="fa fa-check green-color"></i>
                                </span>
                                <span class="task-info">Anjelina Gomez
                                <small>completed his task Yesterday</small>
                                    </span>
                            </a>
                            <a href="javascript:;">
                                <span class="icon ">
                                    <i class="fa fa-comments-o"></i>
                                </span>
                                <span class="task-info">Franklin Anderson
                                <small>commented on your task 3 Days ago</small>
                                </span>
                            </a>
                        </div>
                    </div>
                </li>
                <!--task info end-->

                <!--notification info start-->
                <li>
                    <a href="javascript:;" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="badge bg-warning">4</span>
                    </a>

                    <div class="dropdown-menu dropdown-title ">

                        <div class="title-row">
                            <h5 class="title yellow">
                                You have 4 New Notification
                            </h5>
                            <a href="javascript:;" class="btn-warning btn-view-all">View all</a>
                        </div>
                        <div class="notification-list-scroll sidebar">
                            <div class="notification-list mail-list not-list">
                                <a href="javascript:;" class="single-mail">
                                    <span class="icon bg-primary">
                                        <i class="fa fa-envelope-o"></i>
                                    </span>
                                    <strong>New User Registration</strong>

                                    <p>
                                        <small>Just Now</small>
                                    </p>
                                    <span class="un-read tooltips" data-original-title="Mark as Read" data-toggle="tooltip" data-placement="left">
                                        <i class="fa fa-circle"></i>
                                    </span>
                                </a>
                                <a href="javascript:;" class="single-mail">
                                    <span class="icon bg-success">
                                        <i class="fa fa-comments-o"></i>
                                    </span>
                                    <strong> Private message Send</strong>

                                    <p>
                                        <small>30 Mins Ago</small>
                                    </p>
                                    <span class="un-read tooltips" data-original-title="Mark as Read" data-toggle="tooltip" data-placement="left">
                                        <i class="fa fa-circle"></i>
                                    </span>
                                </a>
                                <a href="javascript:;" class="single-mail">
                                    <span class="icon bg-warning">
                                        <i class="fa fa-warning"></i>
                                    </span> Application Error
                                    <p>
                                        <small> 2 Days Ago</small>
                                    </p>
                                    <span class="read tooltips" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="left">
                                        <i class="fa fa-circle-o"></i>
                                    </span>
                                </a>
                                <a href="javascript:;" class="single-mail">
                                    <span class="icon bg-dark">
                                       <i class="fa fa-database"></i>
                                    </span> Database Overloaded 24%
                                    <p>
                                        <small>1 Week Ago</small>
                                    </p>
                                    <span class="read tooltips" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="left">
                                        <i class="fa fa-circle-o"></i>
                                    </span>
                                </a>
                                <a href="javascript:;" class="single-mail">
                                    <span class="icon bg-danger">
                                        <i class="fa fa-warning"></i>
                                    </span>
                                    <strong>Server Failed Notification</strong>

                                    <p>
                                        <small>10 Days Ago</small>
                                    </p>
                                    <span class="un-read tooltips" data-original-title="Mark as Read" data-toggle="tooltip" data-placement="left">
                                        <i class="fa fa-circle"></i>
                                    </span>
                                </a>

                            </div>
                        </div>
                    </div>
                </li>
                <!--notification info end-->
                </ul>
                </div>
                <!--left notification end-->


                <!--right notification start-->
                <div class="right-notification">
                    <ul class="notification-menu">
                        <li>
                            <form class="search-content" action="http://localhost/codeigniter/corlate/index.php/admin/" method="post">
                                <input type="text" class="form-control" name="keyword" placeholder="Search...">
                            </form>
                        </li>

                        <li>
                            <a href="javascript:;" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url();?>assets/admin/img/avatar-mini.jpg" alt="">John Doe
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu purple pull-right">
                                <li><a href="javascript:;">  Profile</a></li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="badge bg-danger pull-right">40%</span>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="label bg-info pull-right">new</span>
                                        Help
                                    </a>
                                </li>
                                <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>
                        <li>
                            <div class="sb-toggle-right">
                                <i class="fa fa-indent"></i>
                            </div>
                        </li>

                    </ul>
                </div>
                <!--right notification end-->
                </div>

            </div>
            <!-- header section end-->

            <!-- page head start-->
            <div class="page-head">
                <h3 class="m-b-less">
                    Form Advanced Components
                </h3>
                <!--<span class="sub-title">Welcome to Static Table</span>-->
                <div class="state-information">
                    <ol class="breadcrumb m-b-less bg-less">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Form</a></li>
                        <li class="active"> Form Advanced Components</li>
                    </ol>
                </div>
            </div>
            <!-- page head end-->

            <!--body wrapper start-->
            <div class="wrapper">


            <div class="row">
            <div class="col-lg-6">

                <section class="panel">
                    <header class="panel-heading">
                        Dropzone
                    <span class="tools pull-right">
                        <a class="fa fa-repeat box-refresh" href="javascript:;"></a>
                        <a class="t-collapse fa fa-chevron-down" href="javascript:;"></a>
                    </span>
                    </header>
                    <div class="panel-body">
                        <form id="my-awesome-dropzone" action="/target" class="dropzone"></form>
                    </div>
                </section>

                <section class="panel">
                <header class="panel-heading">
                    Select 2
                    <span class="tools pull-right">
                        <a class="fa fa-repeat box-refresh" href="javascript:;"></a>
                        <a class="t-collapse fa fa-chevron-down" href="javascript:;"></a>
                    </span>
                </header>
                <div class="panel-body">
                <form class="form-horizontal">
                <div class="form-group">
                    <label class="col-lg-3 col-md-4 control-label">Single Select</label>

                    <div class="col-lg-9 col-md-8">
                        <select class="form-control  select2">
                            <option></option>
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NM">New Mexico</option>
                                <option value="ND">North Dakota</option>
                                <option value="UT">Utah</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="IL">Illinois</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="OK">Oklahoma</option>
                                <option value="SD">South Dakota</option>
                                <option value="TX">Texas</option>
                                <option value="TN">Tennessee</option>
                                <option value="WI">Wisconsin</option>
                            </optgroup>
                            <optgroup label="Eastern Time Zone">
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="IN">Indiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="OH">Ohio</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WV">West Virginia</option>
                            </optgroup>
                        </select>


                    </div>

                </div>

                <div class="form-group">
                <label class="col-lg-3 col-md-4 control-label">Single Select</label>

                <div class="col-lg-9 col-md-8">


                <select class="form-control" id="e4">
                <option></option>
                <option value="AF">Afghanistan</option>
                <option value="AX">Åland Islands</option>
                <option value="AL">Albania</option>
                <option value="DZ">Algeria</option>
                <option value="AS">American Samoa</option>
                <option value="AD">Andorra</option>
                <option value="AO">Angola</option>
                <option value="AI">Anguilla</option>
                <option value="AQ">Antarctica</option>
                <option value="AG">Antigua and Barbuda</option>
                <option value="AR">Argentina</option>
                <option value="AM">Armenia</option>
                <option value="AW">Aruba</option>
                <option value="AU">Australia</option>
                <option value="AT">Austria</option>
                <option value="AZ">Azerbaijan</option>
                <option value="BS">Bahamas</option>
                <option value="BH">Bahrain</option>
                <option value="BD">Bangladesh</option>
                <option value="BB">Barbados</option>
                <option value="BY">Belarus</option>
                <option value="BE">Belgium</option>
                <option value="BZ">Belize</option>
                <option value="BJ">Benin</option>
                <option value="BM">Bermuda</option>
                <option value="BT">Bhutan</option>
                <option value="BO">Bolivia, Plurinational State of</option>
                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                <option value="BA">Bosnia and Herzegovina</option>
                <option value="BW">Botswana</option>
                <option value="BV">Bouvet Island</option>
                <option value="BR">Brazil</option>
                <option value="IO">British Indian Ocean Territory</option>
                <option value="BN">Brunei Darussalam</option>
                <option value="BG">Bulgaria</option>
                <option value="BF">Burkina Faso</option>
                <option value="BI">Burundi</option>
                <option value="KH">Cambodia</option>
                <option value="CM">Cameroon</option>
                <option value="CA">Canada</option>
                <option value="CV">Cape Verde</option>
                <option value="KY">Cayman Islands</option>
                <option value="CF">Central African Republic</option>
                <option value="TD">Chad</option>
                <option value="CL">Chile</option>
                <option value="CN">China</option>
                <option value="CX">Christmas Island</option>
                <option value="CC">Cocos (Keeling) Islands</option>
                <option value="CO">Colombia</option>
                <option value="KM">Comoros</option>
                <option value="CG">Congo</option>
                <option value="CD">Congo, the Democratic Republic of the</option>
                <option value="CK">Cook Islands</option>
                <option value="CR">Costa Rica</option>
                <option value="CI">Côte d'Ivoire</option>
                <option value="HR">Croatia</option>
                <option value="CU">Cuba</option>
                <option value="CW">Curaçao</option>
                <option value="CY">Cyprus</option>
                <option value="CZ">Czech Republic</option>
                <option value="DK">Denmark</option>
                <option value="DJ">Djibouti</option>
                <option value="DM">Dominica</option>
                <option value="DO">Dominican Republic</option>
                <option value="EC">Ecuador</option>
                <option value="EG">Egypt</option>
                <option value="SV">El Salvador</option>
                <option value="GQ">Equatorial Guinea</option>
                <option value="ER">Eritrea</option>
                <option value="EE">Estonia</option>
                <option value="ET">Ethiopia</option>
                <option value="FK">Falkland Islands (Malvinas)</option>
                <option value="FO">Faroe Islands</option>
                <option value="FJ">Fiji</option>
                <option value="FI">Finland</option>
                <option value="FR">France</option>
                <option value="GF">French Guiana</option>
                <option value="PF">French Polynesia</option>
                <option value="TF">French Southern Territories</option>
                <option value="GA">Gabon</option>
                <option value="GM">Gambia</option>
                <option value="GE">Georgia</option>
                <option value="DE">Germany</option>
                <option value="GH">Ghana</option>
                <option value="GI">Gibraltar</option>
                <option value="GR">Greece</option>
                <option value="GL">Greenland</option>
                <option value="GD">Grenada</option>
                <option value="GP">Guadeloupe</option>
                <option value="GU">Guam</option>
                <option value="GT">Guatemala</option>
                <option value="GG">Guernsey</option>
                <option value="GN">Guinea</option>
                <option value="GW">Guinea-Bissau</option>
                <option value="GY">Guyana</option>
                <option value="HT">Haiti</option>
                <option value="HM">Heard Island and McDonald Islands</option>
                <option value="VA">Holy See (Vatican City State)</option>
                <option value="HN">Honduras</option>
                <option value="HK">Hong Kong</option>
                <option value="HU">Hungary</option>
                <option value="IS">Iceland</option>
                <option value="IN">India</option>
                <option value="ID">Indonesia</option>
                <option value="IR">Iran, Islamic Republic of</option>
                <option value="IQ">Iraq</option>
                <option value="IE">Ireland</option>
                <option value="IM">Isle of Man</option>
                <option value="IL">Israel</option>
                <option value="IT">Italy</option>
                <option value="JM">Jamaica</option>
                <option value="JP">Japan</option>
                <option value="JE">Jersey</option>
                <option value="JO">Jordan</option>
                <option value="KZ">Kazakhstan</option>
                <option value="KE">Kenya</option>
                <option value="KI">Kiribati</option>
                <option value="KP">Korea, Democratic People's Republic of</option>
                <option value="KR">Korea, Republic of</option>
                <option value="KW">Kuwait</option>
                <option value="KG">Kyrgyzstan</option>
                <option value="LA">Lao People's Democratic Republic</option>
                <option value="LV">Latvia</option>
                <option value="LB">Lebanon</option>
                <option value="LS">Lesotho</option>
                <option value="LR">Liberia</option>
                <option value="LY">Libya</option>
                <option value="LI">Liechtenstein</option>
                <option value="LT">Lithuania</option>
                <option value="LU">Luxembourg</option>
                <option value="MO">Macao</option>
                <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                <option value="MG">Madagascar</option>
                <option value="MW">Malawi</option>
                <option value="MY">Malaysia</option>
                <option value="MV">Maldives</option>
                <option value="ML">Mali</option>
                <option value="MT">Malta</option>
                <option value="MH">Marshall Islands</option>
                <option value="MQ">Martinique</option>
                <option value="MR">Mauritania</option>
                <option value="MU">Mauritius</option>
                <option value="YT">Mayotte</option>
                <option value="MX">Mexico</option>
                <option value="FM">Micronesia, Federated States of</option>
                <option value="MD">Moldova, Republic of</option>
                <option value="MC">Monaco</option>
                <option value="MN">Mongolia</option>
                <option value="ME">Montenegro</option>
                <option value="MS">Montserrat</option>
                <option value="MA">Morocco</option>
                <option value="MZ">Mozambique</option>
                <option value="MM">Myanmar</option>
                <option value="NA">Namibia</option>
                <option value="NR">Nauru</option>
                <option value="NP">Nepal</option>
                <option value="NL">Netherlands</option>
                <option value="NC">New Caledonia</option>
                <option value="NZ">New Zealand</option>
                <option value="NI">Nicaragua</option>
                <option value="NE">Niger</option>
                <option value="NG">Nigeria</option>
                <option value="NU">Niue</option>
                <option value="NF">Norfolk Island</option>
                <option value="MP">Northern Mariana Islands</option>
                <option value="NO">Norway</option>
                <option value="OM">Oman</option>
                <option value="PK">Pakistan</option>
                <option value="PW">Palau</option>
                <option value="PS">Palestinian Territory, Occupied</option>
                <option value="PA">Panama</option>
                <option value="PG">Papua New Guinea</option>
                <option value="PY">Paraguay</option>
                <option value="PE">Peru</option>
                <option value="PH">Philippines</option>
                <option value="PN">Pitcairn</option>
                <option value="PL">Poland</option>
                <option value="PT">Portugal</option>
                <option value="PR">Puerto Rico</option>
                <option value="QA">Qatar</option>
                <option value="RE">Réunion</option>
                <option value="RO">Romania</option>
                <option value="RU">Russian Federation</option>
                <option value="RW">Rwanda</option>
                <option value="BL">Saint Barthélemy</option>
                <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                <option value="KN">Saint Kitts and Nevis</option>
                <option value="LC">Saint Lucia</option>
                <option value="MF">Saint Martin (French part)</option>
                <option value="PM">Saint Pierre and Miquelon</option>
                <option value="VC">Saint Vincent and the Grenadines</option>
                <option value="WS">Samoa</option>
                <option value="SM">San Marino</option>
                <option value="ST">Sao Tome and Principe</option>
                <option value="SA">Saudi Arabia</option>
                <option value="SN">Senegal</option>
                <option value="RS">Serbia</option>
                <option value="SC">Seychelles</option>
                <option value="SL">Sierra Leone</option>
                <option value="SG">Singapore</option>
                <option value="SX">Sint Maarten (Dutch part)</option>
                <option value="SK">Slovakia</option>
                <option value="SI">Slovenia</option>
                <option value="SB">Solomon Islands</option>
                <option value="SO">Somalia</option>
                <option value="ZA">South Africa</option>
                <option value="GS">South Georgia and the South Sandwich Islands</option>
                <option value="SS">South Sudan</option>
                <option value="ES">Spain</option>
                <option value="LK">Sri Lanka</option>
                <option value="SD">Sudan</option>
                <option value="SR">Suriname</option>
                <option value="SJ">Svalbard and Jan Mayen</option>
                <option value="SZ">Swaziland</option>
                <option value="SE">Sweden</option>
                <option value="CH">Switzerland</option>
                <option value="SY">Syrian Arab Republic</option>
                <option value="TW">Taiwan, Province of China</option>
                <option value="TJ">Tajikistan</option>
                <option value="TZ">Tanzania, United Republic of</option>
                <option value="TH">Thailand</option>
                <option value="TL">Timor-Leste</option>
                <option value="TG">Togo</option>
                <option value="TK">Tokelau</option>
                <option value="TO">Tonga</option>
                <option value="TT">Trinidad and Tobago</option>
                <option value="TN">Tunisia</option>
                <option value="TR">Turkey</option>
                <option value="TM">Turkmenistan</option>
                <option value="TC">Turks and Caicos Islands</option>
                <option value="TV">Tuvalu</option>
                <option value="UG">Uganda</option>
                <option value="UA">Ukraine</option>
                <option value="AE">United Arab Emirates</option>
                <option value="GB">United Kingdom</option>
                <option value="US">United States</option>
                <option value="UM">United States Minor Outlying Islands</option>
                <option value="UY">Uruguay</option>
                <option value="UZ">Uzbekistan</option>
                <option value="VU">Vanuatu</option>
                <option value="VE">Venezuela, Bolivarian Republic of</option>
                <option value="VN">Viet Nam</option>
                <option value="VG">Virgin Islands, British</option>
                <option value="VI">Virgin Islands, U.S.</option>
                <option value="WF">Wallis and Futuna</option>
                <option value="EH">Western Sahara</option>
                <option value="YE">Yemen</option>
                <option value="ZM">Zambia</option>
                <option value="ZW">Zimbabwe</option>
                </select>
                </div>

                </div>


                <div class="form-group">
                    <label class="col-lg-3 col-md-4 control-label">Multiple Select</label>

                    <div class="col-lg-9 col-md-8">
                        <select id="multiple" class="form-control select2-multiple" multiple>
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NM">New Mexico</option>
                                <option value="ND">North Dakota</option>
                                <option value="UT">Utah</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="IL">Illinois</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="OK">Oklahoma</option>
                                <option value="SD">South Dakota</option>
                                <option value="TX">Texas</option>
                                <option value="TN">Tennessee</option>
                                <option value="WI">Wisconsin</option>
                            </optgroup>
                            <optgroup label="Eastern Time Zone">
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="IN">Indiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="OH">Ohio</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WV">West Virginia</option>
                            </optgroup>
                        </select>
                    </div>

                </div>

                <div class="form-group">
                    <label class="col-lg-3 col-md-4 control-label">Multiple Select</label>

                    <div class="col-lg-9 col-md-8">
                        <div class="input-group select2-bootstrap-prepend">
                            <span class="input-group-addon">
                              <input type="checkbox" checked>
                            </span>
                            <select id="select2-single-append" class="form-control select2-allow-clear">
                                <option></option>
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                    <option value="WA">Washington</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="UT">Utah</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TX">Texas</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="WI">Wisconsin</option>
                                </optgroup>
                                <optgroup label="Eastern Time Zone">
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="IN">Indiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="OH">Ohio</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WV">West Virginia</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>

                </div>


                <div class="form-group">
                    <label class="col-lg-3 col-md-4 control-label">Multiple Select</label>

                    <div class="col-lg-9 col-md-8">
                        <div class="input-group select2-bootstrap-append">
                            <select id="single-append-text" class="form-control select2-allow-clear">
                                <option></option>
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                    <option value="WA">Washington</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="UT">Utah</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TX">Texas</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="WI">Wisconsin</option>
                                </optgroup>
                                <optgroup label="Eastern Time Zone">
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="IN">Indiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="OH">Ohio</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WV">West Virginia</option>
                                </optgroup>
                            </select>
                        <span class="input-group-btn">
                          <button class="btn btn-default" type="button" data-select2-open="single-append-text">
                              <span class="glyphicon glyphicon-search"></span>
                          </button>
                        </span>
                        </div>
                    </div>

                </div>


                </form>
                </div>
                </section>

                <section class="panel">
                    <header class="panel-heading">
                        Tags Input
                        <span class="tools pull-right">
                            <a class="fa fa-repeat box-refresh" href="javascript:;"></a>
                            <a class="t-collapse fa fa-chevron-down" href="javascript:;"></a>
                        </span>

                    </header>
                    <div class="panel-body">

                        <form rote="form">
                            <div class="form-group">
                                <label class="control-label">Defaults:</label>
                                <input type="text" class="tags tags-input" data-type="tags" value="foo,bar,baz,roffle"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Technologies: (Programming languages in
                                    yellow)</label>

                                <input type="text" class="tags tags-input" data-type="highlighted-tags"
                                       data-highlight-color="#e6e39c" value="php,ios,javascript,ruby,android,kindle"/>

                            </div>
                            <div class="form-group">
                                <label class="control-label">Autocomplete:</label>
                                <input type='text' class='tags tags-input' data-type="autocomplete-tags">
                            </div>

                        </form>
                    </div>
                </section>

                <section class="panel">
                    <header class="panel-heading">
                        Date Pickers
                        <span class="tools pull-right">
                            <a class="fa fa-repeat box-refresh" href="javascript:;"></a>
                            <a class="t-collapse fa fa-chevron-down" href="javascript:;"></a>
                        </span>
                    </header>
                    <div class="panel-body">
                        <form action="#" class="form-horizontal ">

                            <div class="form-group">
                                <label class="control-label col-md-3">Default Datepicker</label>
                                <div class="col-md-9 col-xs-11">
                                    <input class="form-control form-control-inline input-medium default-date-picker"  size="16" type="text" value="" />
                                    <span class="help-block">Select date</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Start with years viewMode</label>
                                <div class="col-md-9 col-xs-11">

                                    <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012"  class="input-append date dpYears">
                                        <input type="text" readonly="" value="12-02-2012" size="16" class="form-control">
                                          <span class="input-group-btn add-on">
                                            <button class="btn btn-primary" type="button"><i class="fa fa-calendar"></i></button>
                                          </span>
                                    </div>
                                    <span class="help-block">Select date</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Months Only</label>
                                <div class="col-md-9 col-xs-11">
                                    <div data-date-minviewmode="months" data-date-viewmode="years" data-date-format="mm/yyyy" data-date="102/2012"  class="input-append date dpMonths">
                                        <input type="text" readonly="" value="02/2012" size="16" class="form-control">
                                          <span class="input-group-btn add-on">
                                            <button class="btn btn-primary" type="button"><i class="fa fa-calendar"></i></button>
                                          </span>
                                    </div>


                                    <span class="help-block">Select month only</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Date Range</label>
                                <div class="col-md-9">
                                    <div class="input-group input-large custom-date-range" data-date="13/07/2013" data-date-format="mm/dd/yyyy">
                                        <input type="text" class="form-control dpd1" name="from">
                                        <span class="input-group-addon">To</span>
                                        <input type="text" class="form-control dpd2" name="to">
                                    </div>
                                    <span class="help-block">Select date range</span>
                                </div>
                            </div>

                        </form>
                    </div>
                </section>

                <section class="panel">
                    <div class="panel-body">
                        <a class="btn btn-success" data-toggle="modal" href="#myModal">
                            Datepicker in Modal
                        </a>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Datepicker in Modal</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="form-group ">
                                                <label class="control-label col-md-4">Default input
                                                    Datetimepicker</label>

                                                <div class="col-md-8">
                                                    <input size="16" type="text" value="2012-06-15 14:45" readonly
                                                           class="form_datetime form-control">
                                                    <span class="help-block">Select datetimepicker </span>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label col-md-4">Default Datepicker</label>

                                                <div class="col-md-8">
                                                    <input class="form-control form-control-inline input-medium default-date-picker"
                                                           size="16" type="text" value=""/>
                                                    <span class="help-block">Select date</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-4">Start with years</label>

                                                <div class="col-md-8">

                                                    <div data-date-viewmode="years" data-date-format="dd-mm-yyyy"
                                                         data-date="12-02-2012" class="input-append date dpYears">
                                                        <input type="text" readonly="" value="12-02-2012" size="16"
                                                               class="form-control">
                                                          <span class="input-group-btn add-on">
                                                            <button class="btn btn-primary" type="button"><i
                                                                    class="fa fa-calendar"></i></button>
                                                          </span>
                                                    </div>
                                                    <span class="help-block">Select date</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-4">Months Only</label>

                                                <div class="col-md-8">
                                                    <div data-date-minviewmode="months" data-date-viewmode="years"
                                                         data-date-format="mm/yyyy" data-date="102/2012"
                                                         class="input-append date dpMonths">
                                                        <input type="text" readonly="" value="02/2012" size="16"
                                                               class="form-control">
                                                          <span class="input-group-btn add-on">
                                                            <button class="btn btn-primary" type="button"><i
                                                                    class="fa fa-calendar"></i></button>
                                                          </span>
                                                    </div>


                                                    <span class="help-block">Select month only</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-4">Date Range</label>

                                                <div class="col-md-8">
                                                    <div class="input-group input-large" data-date="13/07/2013"
                                                         data-date-format="mm/dd/yyyy">
                                                        <input type="text" class="form-control dpd1" name="from">
                                                        <span class="input-group-addon">To</span>
                                                        <input type="text" class="form-control dpd2" name="to">
                                                    </div>
                                                    <span class="help-block">Select date range</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal -->
                    </div>
                </section>

                <section class="panel">
                    <header class="panel-heading">
                        Datetime Pickers
                        <span class="tools pull-right">
                            <a class="fa fa-repeat box-refresh" href="javascript:;"></a>
                            <a class="t-collapse fa fa-chevron-down" href="javascript:;"></a>
                        </span>
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal  " action="#">
                            <div class="form-group">
                                <label class="control-label col-md-3">Default input Datetimepicker</label>
                                <div class="col-md-9">
                                    <input size="16" type="text" value="2012-06-15 14:45" readonly class="form_datetime form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3"> Component Datetimepicker</label>
                                <div class="col-md-9">
                                    <div class="input-group date form_datetime-component">
                                        <input type="text" class="form-control" readonly="" size="16">
                                                            <span class="input-group-btn">
                                                            <button type="button" class="btn btn-primary date-set"><i class="fa fa-calendar"></i></button>
                                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Advance Datetimepicker</label>
                                <div class="col-md-9">
                                    <div data-date="2012-12-21T15:25:00Z" class="input-group date form_datetime-adv">
                                        <input type="text" class="form-control" readonly="" size="16">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-primary date-reset"><i class="fa fa-times"></i></button>
                                            <button type="button" class="btn btn-success date-set"><i class="fa fa-calendar"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">Meridian Format</label>
                                <div class="col-md-9">
                                    <div data-date="2012-12-21T15:25:00Z" class="input-group date form_datetime-meridian">
                                        <input type="text" class="form-control" readonly="" size="16">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-primary date-reset"><i class="fa fa-times"></i></button>
                                            <button type="button" class="btn btn-success date-set"><i class="fa fa-calendar"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </form>
                    </div>
                </section>

                <section class="panel">
                    <header class="panel-heading">
                        Time Pickers
                        <span class="tools pull-right">
                            <a class="fa fa-repeat box-refresh" href="javascript:;"></a>
                            <a class="t-collapse fa fa-chevron-down" href="javascript:;"></a>
                        </span>
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal  " action="#">
                            <div class="form-group">
                                <label class="control-label col-md-3">Default Timepicker</label>
                                <div class="col-md-9">
                                    <div class="input-group bootstrap-timepicker">
                                        <input type="text" class="form-control timepicker-default">
                                        <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">24hr Timepicker</label>
                                <div class="col-md-9">
                                    <div class="input-group bootstrap-timepicker">
                                        <input type="text" class="form-control timepicker-24">
                                        <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>

                <section class="panel">
                    <header class="panel-heading">
                        Color Pickers
                        <span class="tools pull-right">
                            <a class="fa fa-repeat box-refresh" href="javascript:;"></a>
                            <a class="t-collapse fa fa-chevron-down" href="javascript:;"></a>
                        </span>
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal  " action="#">
                            <div class="form-group">
                                <label class="control-label col-md-3">Default</label>
                                <div class="col-md-9">
                                    <input type="text" class="colorpicker-default form-control" value="#a978d1" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">RGBA</label>
                                <div class="col-md-9">
                                    <input type="text" class="colorpicker-rgba form-control" value="rgb(23,144,123,0.78)" data-color-format="rgba" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">As Component</label>
                                <div class="col-md-9 col-xs-11">
                                    <div data-color-format="rgb" data-color="rgb(92, 198, 124)" class="input-append colorpicker-default color">
                                        <input type="text" readonly="" value="" class="form-control">
                                              <span class=" input-group-btn add-on">
                                                  <button class="btn btn-default" type="button" style="padding: 8px">
                                                      <i style="background-color: rgb(92, 198, 124);"></i>
                                                  </button>
                                              </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>



            </div>
            <div class="col-lg-6">

                <section class="panel">
                    <header class="panel-heading">
                        Spinner
                        <span class="tools pull-right">
                            <a class="fa fa-repeat box-refresh" href="javascript:;"></a>
                            <a class="t-collapse fa fa-chevron-down" href="javascript:;"></a>
                        </span>
                    </header>
                    <div class="panel-body spinner">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class=" col-md-6 control-label">Vertical button alignment:</label>

                                <div class=" col-md-6">
                                    <input id="demo_vertical2" type="text" value="" name="demo_vertical2">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class=" col-md-6 control-label">Using data attributes</label>

                                <div class="col-md-6">
                                    <input id="demo0"
                                           type="text"
                                           value="55"
                                           name="demo0"
                                           data-bts-min="0"
                                           data-bts-max="100"
                                           data-bts-init-val=""
                                           data-bts-step="1"
                                           data-bts-decimal="0"
                                           data-bts-step-interval="100"
                                           data-bts-force-step-divisibility="round"
                                           data-bts-step-interval-delay="500"
                                           data-bts-prefix=""
                                           data-bts-postfix=""
                                           data-bts-prefix-extra-class=""
                                           data-bts-postfix-extra-class=""
                                           data-bts-booster="true"
                                           data-bts-boostat="10"
                                           data-bts-max-boosted-step="false"
                                           data-bts-mousewheel="true"
                                           data-bts-button-down-class="btn btn-default"
                                           data-bts-button-up-class="btn btn-default"
                                            />

                                </div>

                            </div>

                            <div class="form-group">
                                <label class="col-md-6 control-label">Example with postfix (large)</label>

                                <div class="col-md-6">
                                    <input id="demo1" type="text" value="55" name="demo1">
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-md-6 control-label">With prefix </label>

                                <div class="col-md-6">
                                    <input id="demo2" type="text" value="0" name="demo2" class=" form-control">
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-md-6 control-label">Init with empty value:</label>

                                <div class="col-md-6">
                                    <input id="demo3" type="text" value="" name="demo3">
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-md-6 control-label">Value attribute is not set (applying settings.initval)</label>

                                <div class="col-md-6">
                                    <input id="demo3_21" type="text" value="" name="demo3_21">
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="col-md-6 control-label">Value is set explicitly to 33 (skipping
                                    settings.initval) </label>

                                <div class="col-md-6">
                                    <input id="demo3_22" type="text" value="33" name="demo3_22">
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="col-md-6 control-label">Button postfix (small):</label>

                                <div class="col-md-6">
                                    <input id="demo4" type="text" value="" name="demo4" class="input-sm">
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Button group</label>

                                <div class="col-md-9">
                                    <div class="input-group">
                                        <input id="demo5" type="text" class="form-control" name="demo5" value="50">

                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-default">Action</button>
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </form>

                    </div>
                </section>

                <section class="panel">
                    <header class="panel-heading">
                        Input Mask
                        <span class="tools pull-right">
                            <a class="fa fa-repeat box-refresh" href="javascript:;"></a>
                            <a class="t-collapse fa fa-chevron-down" href="javascript:;"></a>
                        </span>
                    </header>
                    <div class="panel-body">

                        <form action="#" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">ISBN 1</label>
                                <div class="col-sm-10">
                                    <input type="text" placeholder="" data-mask="999-99-999-9999-9" class="form-control">
                                    <span class="help-inline">999-99-999-9999-9</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">ISBN 2</label>
                                <div class="col-sm-10">
                                    <input type="text" placeholder="" data-mask="999 99 999 9999 9" class="form-control">
                                    <span class="help-inline">999 99 999 9999 9</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">ISBN 3</label>
                                <div class="col-sm-10">
                                    <input type="text" placeholder="" data-mask="999/99/999/9999/9" class="form-control">
                                    <span class="help-inline">999/99/999/9999/9</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">IPV4</label>
                                <div class="col-sm-10">
                                    <input type="text" placeholder="" data-mask="999.999.999.9999" class="form-control">
                                    <span class="help-inline">192.168.110.310</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">IPV6</label>
                                <div class="col-sm-10">
                                    <input type="text" placeholder="" data-mask="9999:9999:9999:9:999:9999:9999:9999" class="form-control">
                                    <span class="help-inline">4deg:1340:6547:2:540:h8je:ve73:98pd</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Tax ID</label>
                                <div class="col-sm-10">
                                    <input type="text" placeholder="" data-mask="99-9999999" class="form-control">
                                    <span class="help-inline">99-9999999</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Phone</label>
                                <div class="col-sm-10">
                                    <input type="text" placeholder="" data-mask="(999) 999-9999" class="form-control">
                                    <span class="help-inline">(999) 999-9999</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Currency</label>
                                <div class="col-sm-10">
                                    <input type="text" placeholder="" data-mask="$ 999,999,999.99" class="form-control">
                                    <span class="help-inline">$ 999,999,999.99</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Date</label>
                                <div class="col-sm-10">
                                    <input type="text" placeholder="" data-mask="99/99/9999" class="form-control">
                                    <span class="help-inline">dd/mm/yyyy</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Date 2</label>
                                <div class="col-sm-10">
                                    <input type="text" placeholder="" data-mask="99-99-9999" class="form-control">
                                    <span class="help-inline">dd-mm-yyyy</span>
                                </div>
                            </div>

                        </form>

                    </div>
                </section>

                <section class="panel">
                    <header class="panel-heading">
                        iCheck Minimal
                            <span class="tools pull-right">
                                <a class="fa fa-repeat box-refresh" href="javascript:;"></a>
                                <a class="t-collapse fa fa-chevron-down" href="javascript:;"></a>
                            </span>
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal">
                            <div class="form-group icheck-row">
                                <div class=" col-md-6">
                                    <div>
                                        <input type="checkbox" checked class="iCheck" >
                                        <label class="  control-label">Checkbox black</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" checked class="iCheck-red">
                                        <label class="  control-label">Checkbox red</label>
                                    </div>

                                    <div>
                                        <input type="checkbox" checked class="iCheck-blue" >
                                        <label class="  control-label">Checkbox blue</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" checked class="iCheck-green">
                                        <label class="  control-label">Checkbox green</label>
                                    </div>

                                    <div>
                                        <input type="checkbox" checked class="iCheck-orange" >
                                        <label class="  control-label">Checkbox orange</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" checked class="iCheck-purple">
                                        <label class="  control-label">Checkbox purple</label>
                                    </div>
                                </div>
                                <div class=" col-md-6">
                                    <div>
                                        <input type="radio" name="iCheck" checked class="iCheck">
                                        <label class="  control-label">Radio black</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="iCheck"  class="iCheck-red">
                                        <label class="  control-label">Radio red</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="iCheck" class="iCheck-blue">
                                        <label class="  control-label">Radio blue</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="iCheck"  class="iCheck-green">
                                        <label class="  control-label">Radio green</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="iCheck" class="iCheck-orange">
                                        <label class="  control-label">Radio orange</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="iCheck"  class="iCheck-purple">
                                        <label class="  control-label">Radio purple</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>

                <section class="panel">
                    <header class="panel-heading">
                        iCheck Square
                            <span class="tools pull-right">
                                <a class="fa fa-repeat box-refresh" href="javascript:;"></a>
                                <a class="t-collapse fa fa-chevron-down" href="javascript:;"></a>
                            </span>
                    </header>
                    <div class="panel-body">

                        <form class="form-horizontal">
                            <div class="form-group icheck-row">
                                <div class=" col-md-6">
                                    <div>
                                        <input type="checkbox" checked class="iCheck-square" >
                                        <label class="  control-label">Checkbox black</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" checked class="iCheck-square-red">
                                        <label class="  control-label">Checkbox red</label>
                                    </div>

                                    <div>
                                        <input type="checkbox" checked class="iCheck-square-blue" >
                                        <label class="  control-label">Checkbox blue</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" checked class="iCheck-square-green">
                                        <label class="  control-label">Checkbox green</label>
                                    </div>

                                    <div>
                                        <input type="checkbox" checked class="iCheck-square-orange" >
                                        <label class="  control-label">Checkbox orange</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" checked class="iCheck-square-purple">
                                        <label class="  control-label">Checkbox purple</label>
                                    </div>
                                </div>
                                <div class=" col-md-6">
                                    <div>
                                        <input type="radio" name="iCheck" checked class="iCheck-square">
                                        <label class="  control-label">Radio black</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="iCheck"  class="iCheck-square-red">
                                        <label class="  control-label">Radio red</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="iCheck" class="iCheck-square-blue">
                                        <label class="  control-label">Radio blue</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="iCheck"  class="iCheck-square-green">
                                        <label class="  control-label">Radio green</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="iCheck" class="iCheck-square-orange">
                                        <label class="  control-label">Radio orange</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="iCheck"  class="iCheck-square-purple">
                                        <label class="  control-label">Radio purple</label>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </section>

                <section class="panel">
                    <header class="panel-heading">
                        iCheck Flat Skin
                            <span class="tools pull-right">
                                <a class="fa fa-repeat box-refresh" href="javascript:;"></a>
                                <a class="t-collapse fa fa-chevron-down" href="javascript:;"></a>
                            </span>
                    </header>
                    <div class="panel-body">

                        <form class="form-horizontal">
                            <div class="form-group icheck-row">
                                <div class=" col-md-6">
                                    <div>
                                        <input type="checkbox" checked class="iCheck-flat" >
                                        <label class="  control-label">Checkbox black</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" checked class="iCheck-flat-red">
                                        <label class="  control-label">Checkbox red</label>
                                    </div>

                                    <div>
                                        <input type="checkbox" checked class="iCheck-flat-blue" >
                                        <label class="  control-label">Checkbox blue</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" checked class="iCheck-flat-green">
                                        <label class="  control-label">Checkbox green</label>
                                    </div>

                                    <div>
                                        <input type="checkbox" checked class="iCheck-flat-orange" >
                                        <label class="  control-label">Checkbox orange</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" checked class="iCheck-flat-purple">
                                        <label class="  control-label">Checkbox purple</label>
                                    </div>
                                </div>
                                <div class=" col-md-6">
                                    <div>
                                        <input type="radio" name="iCheck" checked class="iCheck-flat">
                                        <label class="  control-label">Radio black</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="iCheck"  class="iCheck-flat-red">
                                        <label class="  control-label">Radio red</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="iCheck" class="iCheck-flat-blue">
                                        <label class="  control-label">Radio blue</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="iCheck"  class="iCheck-flat-green">
                                        <label class="  control-label">Radio green</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="iCheck" class="iCheck-flat-orange">
                                        <label class="  control-label">Radio orange</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="iCheck"  class="iCheck-flat-purple">
                                        <label class="  control-label">Radio purple</label>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </section>

            </div>
            </div>




            </div>
            <!--body wrapper end-->


            <!--footer section start-->
            <footer>
                2015 &copy; SlickLab by VectorLab.
            </footer>
            <!--footer section end-->


            <!-- Right Slidebar start -->
            <div class="sb-slidebar sb-right sb-style-overlay">
            <div class="right-bar">

            <span class="r-close-btn sb-close"><i class="fa fa-times"></i></span>

            <ul class="nav nav-tabs nav-justified-">
                <li class="active">
                    <a href="#chat" data-toggle="tab">Chat</a>
                </li>
                <li class="">
                    <a href="#info" data-toggle="tab">Info</a>
                </li>
                <li class="">
                    <a href="#settings" data-toggle="tab">Settings</a>
                </li>
            </ul>
            <div class="tab-content">
            <div role="tabpanel" class="tab-pane active " id="chat">
                <div class="online-chat">
                    <div class="online-chat-container">
                        <div class="chat-list">
                            <h3>Chat list</h3>
                            <h5>34 Friends Online, 80 Offline</h5>
                            <a href="#" class="add-people tooltips" data-original-title="Add People" data-toggle="tooltip" data-placement="left">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                        <div class="side-title">
                            <h2>online</h2>
                            <div class="title-border-row">
                                <div class="title-border"></div>
                            </div>
                        </div>

                        <ul class="team-list chat-list-side">
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="<?php echo base_url();?>assets/admin/img/img2.jpg" alt="">
                                <i class="online dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Alison Jones
                                </span>
                                        <small class="text-muted">Start exploring</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="<?php echo base_url();?>assets/admin/img/img3.jpg" alt="">
                                <i class="online dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Jonathan Smith
                                </span>
                                        <small class="text-muted">Alien Inside</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="<?php echo base_url();?>assets/admin/img/img1.jpg" alt="">
                                <i class="away dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Anjelina Doe
                                </span>
                                        <small class="text-muted">Screaming...</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="<?php echo base_url();?>assets/admin/img/img3.jpg" alt="">
                                <i class="busy dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Franklin Adam
                                </span>
                                        <small class="text-muted">Don't lose the hope</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="<?php echo base_url();?>assets/admin/img/img2.jpg" alt="">
                                <i class="online dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Jeff Crowford
                                </span>
                                        <small class="text-muted">Just flying</small>
                                    </div>
                                </a>
                            </li>

                        </ul>

                        <div class="side-title">
                            <h2>Offline</h2>
                            <div class="title-border-row">
                                <div class="title-border"></div>
                            </div>
                        </div>
                        <ul class="team-list chat-list-side">
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="<?php echo base_url();?>assets/admin/img/img2.jpg" alt="">
                                <i class="offline dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Alison Jones
                                </span>
                                        <small class="text-muted">Start exploring</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="<?php echo base_url();?>assets/admin/img/img3.jpg" alt="">
                                <i class="offline dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Jonathan Smith
                                </span>
                                        <small class="text-muted">Alien Inside</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="<?php echo base_url();?>assets/admin/img/img1.jpg" alt="">
                                <i class="offline dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Anjelina Doe
                                </span>
                                        <small class="text-muted">Screaming...</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="<?php echo base_url();?>assets/admin/img/img3.jpg" alt="">
                                <i class="offline dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Franklin Adam
                                </span>
                                        <small class="text-muted">Don't lose the hope</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="<?php echo base_url();?>assets/admin/img/img2.jpg" alt="">
                                <i class="offline dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Jeff Crowford
                                </span>
                                        <small class="text-muted">Just flying</small>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>


                </div>


            </div>

            <div role="tabpanel" class="tab-pane " id="info">
            <div class="chat-list info">
                <h3>Latest Information</h3>
                <a href="#" class="add-people tooltips" data-original-title="Refresh" data-toggle="tooltip" data-placement="left">
                    <i class="fa fa-repeat"></i>
                </a>
            </div>
            <div class="aside-widget">
                <div class="side-title-alt">
                    <h2>Revenue</h2>
                    <a href="#" class="close side-w-close">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <ul class="team-list chat-list-side info">
                    <li>
                                <span class="thumb-small">
                            <i class="fa fa-circle green-color"></i>
                        </span>
                        <div class="inline">
                                    <span class="name">
                                Received Money from John Doe
                            </span>
                            <span class="value green-color">$12300</span>
                        </div>
                    </li>
                    <li>
                                <span class="thumb-small">
                            <i class="fa fa-circle purple-color"></i>
                        </span>
                        <div class="inline">
                                    <span class="name">
                                Total Admin Template Sales
                            </span>
                            <span class="value purple-color">$40100</span>
                        </div>
                    </li>
                    <li>
                                <span class="thumb-small">
                            <i class="fa fa-circle red-color"></i>
                        </span>
                        <div class="inline">
                                    <span class="name">
                                Monty Revenue
                            </span>
                            <span class="value red-color">$322300</span>
                        </div>
                    </li>
                    <li>
                                <span class="thumb-small">
                            <i class="fa fa-circle blue-color"></i>
                        </span>
                        <div class="inline">
                                    <span class="name">
                                Received Money from John Doe
                            </span>
                            <span class="value blue-color">$1520</span>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="aside-widget">

                <div class="side-title-alt">
                    <h2>Statistics</h2>
                    <a href="#" class="close side-w-close">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <ul class="team-list chat-list-side info statistics border-less-list">
                    <li>
                        <div class="inline">
                                    <span class="name">
                                         Foreign Visit
                                    </span>
                            <small class="text-muted">25% Increase</small>
                        </div>
                                <span class="thumb-small">
                                    <span id="foreign-visit" class="chart"></span>
                                </span>
                    </li>
                    <li>
                        <div class="inline">
                                    <span class="name">
                                Montly Visit
                            </span>
                            <small class="text-muted">Average visit 12% Increase</small>
                        </div>
                                <span class="thumb-small">
                                    <span id="monthly-visit" class="chart"></span>
                                </span>
                    </li>
                    <li>
                        <div class="inline">
                                    <span class="name">
                                Unique Visit
                            </span>
                            <small class="text-muted">35% unique visitor </small>
                        </div>
                                <span class="thumb-small">
                                    <span id="unique-visit" class="chart"></span>
                                </span>
                    </li>
                </ul>
            </div>

            <div class="aside-widget">
                <div class="side-title-alt">
                    <h2>Notification</h2>
                    <a href="#" class="close side-w-close">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <ul class="team-list chat-list-side info border-less-list">
                    <li>
                                <span class="thumb-small">
                            <i class="fa fa-bell green-color"></i>
                        </span>
                        <div class="inline">
                                    <span class="name">
                                Meeting with John Doe at
                            </span>
                            <span class="value text-muted">11.30 am</span>
                        </div>
                    </li>
                    <li>
                                <span class="thumb-small">
                            <i class="fa fa-users green-color"></i>
                        </span>
                        <div class="inline">
                                    <span class="name">
                                3 membership request pending
                            </span>
                            <span class="value text-muted">John, Smith, Lira</span>
                        </div>
                    </li>
                </ul>

            </div>


            <div class="aside-widget">


                <div class="side-title-alt">
                    <h2>System</h2>
                    <a href="#" class="close side-w-close">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <ul class="team-list chat-list-side info border-less-list">
                    <li>
                        <div class="inline">
                                    <span class="name">
                                Received database error report from hosting provider
                            </span>
                            <span class="value text-muted">11.30 am</span>
                        </div>
                    </li>
                    <li>
                        <div class="inline">
                                    <span class="name">
                                Hosting Renew notification
                            </span>
                            <span class="value text-muted">12.00 pm</span>
                        </div>
                    </li>

                </ul>
            </div>


            <div class="aside-widget">
                <div class="side-title-alt">
                    <h2>Work Progress</h2>
                    <a href="#" class="close side-w-close">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <ul class="team-list chat-list-side info border-less-list sale-monitor">
                    <li>
                        <div class="states">
                            <div class="info">
                                <div class="desc pull-left">Server Setup and Configuration</div>
                            </div>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                            </div>
                            <div class="info">
                                <small class="percent pull-left text-muted">50% completed</small>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="states">
                            <div class="info">
                                <div class="desc pull-left">Website Design & Development</div>
                            </div>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
                            </div>
                            <div class="info">
                                <small class="percent pull-left text-muted">85% completed</small>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            </div>

            <div role="tabpanel" class="tab-pane " id="settings">
                <div class="chat-list bottom-border settings-head">
                    <h3>Account Setting</h3>
                    <h5>Configure your account as per your need.</h5>
                </div>
                <ul class="team-list chat-list-side info statistics border-less-list setting-list">
                    <li>
                        <div class="inline">
                                <span class="name">
                                Make my feature post public?
                            </span>
                            <small class="text-muted">Everyone will be able to see, like, comment
                                and share your feature post.</small>
                        </div>
                            <span class="thumb-small">
                            <input type="checkbox" class="js-switch-small" checked/>
                        </span>
                    </li>
                    <li>
                        <div class="inline">
                                <span class="name">
                                Show offline Contacts
                            </span>
                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer
                                adipiscing elit.</small>
                        </div>
                            <span class="thumb-small">
                            <input type="checkbox" class="js-switch-small2" checked/>
                        </span>
                    </li>

                    <li>
                        <div class="inline">
                                <span class="name">
                                Everyone will see my stuff
                            </span>
                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer
                                adipiscing elit.</small>
                        </div>
                            <span class="thumb-small">
                            <input type="checkbox" class="js-switch-small3"/>
                        </span>
                    </li>

                </ul>

                <div class="chat-list bottom-border settings-head">
                    <h3>General Setting</h3>
                    <h5>Configure your account as per your need.</h5>
                </div>
                <ul class="team-list chat-list-side info statistics border-less-list setting-list">
                    <li>
                        <div class="inline">
                                <span class="name">
                                Show me Online
                            </span>
                        </div>
                            <span class="thumb-small">
                            <input type="checkbox" class="js-switch-small4" checked/>
                        </span>
                    </li>
                    <li>
                        <div class="inline">
                                <span class="name">
                                Status visible to all
                            </span>
                        </div>
                            <span class="thumb-small">
                            <input type="checkbox" class="js-switch-small5" />
                        </span>
                    </li>

                    <li>
                        <div class="inline">
                                <span class="name">
                                Show my work progess to all
                            </span>
                        </div>
                            <span class="thumb-small">
                            <input type="checkbox" class="js-switch-small6" checked/>
                        </span>
                    </li>

                </ul>

            </div>

            </div>
            </div>
            </div>
            <!-- Right Slidebar end -->

        </div>
        <!-- body content end-->
    </section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="<?php echo base_url();?>assets/admin/js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/jquery-migrate.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/modernizr.min.js"></script>

<!--Nice Scroll-->
<script src="<?php echo base_url();?>assets/admin/js/jquery.nicescroll.js" type="text/javascript"></script>

<!--right slidebar-->
<script src="<?php echo base_url();?>assets/admin/js/slidebars.min.js"></script>

<!--switchery-->
<script src="<?php echo base_url();?>assets/admin/js/switchery/switchery.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/switchery/switchery-init.js"></script>

<!--Sparkline Chart-->
<script src="<?php echo base_url();?>assets/admin/js/sparkline/jquery.sparkline.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/sparkline/sparkline-init.js"></script>


<!--bootstrap picker-->
<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>

<!--picker initialization-->
<script src="<?php echo base_url();?>assets/admin/js/picker-init.js"></script>

<!--Icheck-->
<script src="<?php echo base_url();?>assets/admin/js/icheck/skins/icheck.min.js"></script>
<!--icheck init-->
<script src="<?php echo base_url();?>assets/admin/js/icheck-init.js"></script>

<!--tags input-->
<script src="<?php echo base_url();?>assets/admin/js/tags-input.js"></script>

<!--tags input init-->
<script src="<?php echo base_url();?>assets/admin/js/tags-input-init.js"></script>

<!--bootstrap-inputmask-->
<script src="<?php echo base_url();?>assets/admin/js/bs-input-mask.min.js"></script>

<!--touchspin spinner-->
<script src="<?php echo base_url();?>assets/admin/js/touchspin.js"></script>

<!--spinner init-->
<script src="<?php echo base_url();?>assets/admin/js/spinner-init.js"></script>

<!--dropzone-->
<script src="<?php echo base_url();?>assets/admin/js/dropzone.js"></script>

<!--select2-->
<script src="<?php echo base_url();?>assets/admin/js/select2.js"></script>
<!--select2 init-->
<script src="<?php echo base_url();?>assets/admin/js/select2-init.js"></script>


<!--common scripts for all pages-->
<script src="<?php echo base_url();?>assets/admin/js/scripts.js"></script>


</body>
</html>
