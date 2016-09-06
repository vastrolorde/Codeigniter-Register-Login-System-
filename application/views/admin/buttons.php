<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="slick, flat, dashboard, bootstrap, admin, template, theme, responsive, fluid, retina">
    <link rel="shortcut icon" href="javascript:;" type="image/png">

    <title>SlickLab - buttons</title>

    <!--right slidebar-->
    <link href="<?php echo base_url();?>assets/admin/css/slidebars.css" rel="stylesheet">

    <!--switchery-->
    <link href="<?php echo base_url();?>assets/admin/js/switchery/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />

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
                <a href="http://localhost/codeigniter/corlate/index.php/admin">
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
                    <li><a href="http://localhost/codeigniter/corlate/index.php/admin"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
                    <li class="menu-list">
                        <a href=""><i class="fa fa-laptop"></i>  <span>Layouts</span></a>
                        <ul class="child-list">
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/boxedlayout"> Boxed Page</a></li>
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/collapsedmenu"> Sidebar Collapsed</a></li>
                            <li><a href="http://localhost/codeigniter/corlate/index.php/addmin/blankpage"> Blank page</a></li>
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/differentthemelayouts"> Different Theme Layouts</a></li>
                        </ul>
                    </li>
                    <li class="menu-list nav-active"><a href=""><i class="fa fa-book"></i> <span>UI Elements</span></a>
                        <ul class="child-list">
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/general"> BS Elements</a></li>
                            <li class="active"><a href="buttons.html"> Buttons</a></li>
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

                    <li class="menu-list"><a href=""><i class="fa fa-tasks"></i> <span>Forms</span></a>
                        <ul class="child-list">
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/formlayout"> Form Layouts</a></li>
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/advancedcomponents"> Advanced Components</a></li>
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
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin"> Inbox</a></li>
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
                                <li><a href="http://localhost/codeigniter/corlate/index.php/admin/login"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
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
                    Buttons
                </h3>
                <!--<span class="sub-title">Welcome to Static Table</span>-->
                <div class="state-information">
                    <ol class="breadcrumb m-b-less bg-less">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">UI Elements</a></li>
                        <li class="active">Buttons</li>
                    </ol>
                </div>

            </div>
            <!-- page head end-->

            <!--body wrapper start-->
            <div class="wrapper">

            <div class="row">
            <div class="col-sm-6">
                <section class="panel">
                    <header class="panel-heading ">
                        Default Buttons
                    </header>
                    <div class="panel-body">
                        <button type="button" class="btn btn-default m-b-10">Default</button>
                        <button type="button" class="btn btn-primary m-b-10">Primary</button>
                        <button type="button" class="btn btn-success m-b-10">Success</button>
                        <button type="button" class="btn btn-info m-b-10">Info</button>
                        <button type="button" class="btn btn-warning m-b-10">Warning</button>
                        <button type="button" class="btn btn-danger m-b-10">Danger</button>

                        <button class="btn btn-default disabled m-b-10">Disabled</button>
                        <button class="btn btn-primary disabled m-b-10">Disabled</button>
                        <button class="btn btn-success disabled m-b-10">Disabled</button>
                        <button class="btn btn-warning disabled m-b-10">Disabled</button>
                        <button class="btn btn-danger disabled m-b-10">Disabled</button>
                    </div>
                </section>
                <section class="panel">
                    <header class="panel-heading ">
                        Rounded Buttons
                    </header>
                    <div class="panel-body">
                        <button type="button" class="btn btn-round btn-default">Default</button>
                        <button type="button" class="btn btn-round btn-primary">Primary</button>
                        <button type="button" class="btn btn-round btn-success">Success</button>
                        <button type="button" class="btn btn-round btn-info">Info</button>
                        <button type="button" class="btn btn-round btn-warning">Warning</button>
                        <button type="button" class="btn btn-round btn-danger">Danger</button>
                    </div>
                </section>
                <section class="panel">
                    <header class="panel-heading ">
                        Addon Buttons
                    </header>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-lg btn-default addon-btn m-b-10">
                                    <i class="fa fa-cog"></i>
                                    Default
                                </button>
                                <button class="btn btn-lg btn-success addon-btn m-b-10">
                                    <i class="fa fa-backward"></i>
                                    Backward
                                </button>
                                <button class="btn btn-lg btn-success addon-btn m-b-10">
                                    <i class="fa fa-forward pull-right"></i>
                                    Forward
                                </button>
                                <p class="text-muted">Large size</p>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-default addon-btn m-b-10">
                                    <i class="fa fa-tasks"></i>
                                    default
                                </button>
                                <button class="btn btn-danger addon-btn m-b-10">
                                    <i class="fa fa-plug pull-right"></i>
                                    danger
                                </button>

                                <button class="btn btn-warning addon-btn m-b-10">
                                    <i class="fa fa-warning"></i>
                                    Warn
                                </button>

                                <button class="btn btn-info addon-btn m-b-10">
                                    <i class="fa fa-info"></i>
                                    Info
                                </button>
                                <p class="text-muted">Normal size</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-primary addon-btn m-b-10">
                                    <i class="fa fa-info"></i>
                                    small size
                                </button>
                                <button class="btn btn-sm btn-info addon-btn m-b-10">
                                    <i class="fa fa-info pull-right"></i>
                                    small size
                                </button>
                                <button class="btn btn-sm btn-default addon-btn m-b-10">
                                    <i class="fa fa-info pull-right"></i>
                                    small size
                                </button>
                                <p class="text-muted">Small size</p>

                            </div>
                        </div>


                    </div>
                </section>
                <section class="panel">
                    <header class="panel-heading ">
                        Dropdowns Button
                    </header>
                    <div class="panel-body">
                        <div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">Default <span class="caret"></span></button>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div><!-- /btn-group -->
                        <div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Primary <span class="caret"></span></button>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div><!-- /btn-group -->
                        <div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-xs" type="button">Success <span class="caret"></span></button>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div><!-- /btn-group -->
                    </div>
                </section>
                <section class="panel">
                    <header class="panel-heading ">
                        Split Dropdowns Button
                    </header>
                    <div class="panel-body">
                        <div class="btn-group">
                            <button class="btn btn-default" type="button">Default</button>
                            <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button"><span class="caret"></span></button>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div><!-- /btn-group -->
                        <div class="btn-group dropup">
                            <button class="btn btn-default" type="button">Dropup</button>
                            <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button"><span class="caret"></span></button>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div><!-- /btn-group -->
                    </div>
                </section>

                <section class="panel">
                    <header class="panel-heading ">
                        Block level button
                    </header>
                    <div class="panel-body">
                        <button type="button" class="btn btn-default btn-lg btn-block">Block level button</button>
                        <button type="button" class="btn btn-warning btn-block">Block level button</button>
                        <button type="button" class="btn btn-danger btn-xs btn-block">Block level button</button>
                    </div>
                </section>
            </div>
            <div class="col-sm-6">
                <section class="panel">
                    <header class="panel-heading ">
                        Buttons Size
                    </header>
                    <div class="panel-body">
                        <button type="button" class="btn btn-default btn-lg">Large Button</button>
                        <button type="button" class="btn btn-primary">Default Button</button>
                        <button type="button" class="btn btn-success btn-sm">Small Button</button>
                        <button type="button" class="btn btn-info btn-xs">Extra Small Button</button>
                    </div>
                </section>
                <section class="panel">
                    <header class="panel-heading ">
                        Buttons With Icon
                    </header>
                    <div class="panel-body">
                        <button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add </button>
                        <button data-toggle="button" class="btn btn-primary">
                            <i class="fa fa-thumbs-up "></i>
                            12
                        </button>
                        <button type="button" class="btn btn-info "><i class="fa fa-refresh"></i> Update</button>
                        <button type="button" class="btn btn-default "><i class="fa fa-cloud-upload"></i> Upload</button>

                        <button data-toggle="button" class="btn btn-default">
                            <i class="fa fa-home"></i>
                        </button>
                        <button data-toggle="button" class="btn btn-default">
                            <i class="fa fa-heart"></i>
                        </button>
                    </div>
                </section>
                <section class="panel">
                    <header class="panel-heading ">
                        Group Buttons
                    </header>
                    <div class="panel-body">
                        <div class="btn-row">
                            <div class="btn-group">
                                <button class="btn btn-default" type="button">Left</button>
                                <button class="btn btn-default" type="button">Middle</button>
                                <button class="btn btn-default" type="button">Right</button>
                            </div>
                            <div class="btn-group  btn-group-sm">
                                <button class="btn btn-default" type="button">Left</button>
                                <button class="btn btn-default" type="button">Middle</button>
                                <button class="btn btn-default" type="button">Right</button>
                            </div>
                        </div>
                        <p class="text-muted">Vertical button groups</p>
                        <div class="btn-row">
                            <div class="btn-group-vertical">
                                <button class="btn btn-default" type="button">Top</button>
                                <button class="btn btn-default" type="button">Middle</button>
                                <button class="btn btn-default" type="button">Bottom</button>
                            </div>
                        </div>
                        <p class="text-muted">Nested button groups</p>
                        <div class="btn-row">
                            <div class="btn-group">
                                <button class="btn btn-default" type="button">1</button>
                                <button class="btn btn-danger" type="button">2</button>
                                <button class="btn btn-default" type="button">3</button>
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button"> Dropdown <span class="caret"></span> </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Dropdown link 1</a></li>
                                        <li><a href="#">Dropdown link 2</a></li>
                                        <li><a href="#">Dropdown link 3</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <p class="text-muted">Multiple button groups</p>
                        <div class="btn-row">
                            <div class="btn-toolbar">
                                <div class="btn-group">
                                    <button class="btn btn-info" type="button">1</button>
                                    <button class="btn btn-info active" type="button">2</button>
                                    <button class="btn btn-info" type="button">3</button>
                                    <button class="btn btn-info" type="button">4</button>
                                </div>
                                <div class="btn-group">
                                    <button class="btn btn-success" type="button">5</button>
                                    <button class="btn btn-success" type="button">6</button>
                                    <button class="btn btn-success" type="button">7</button>
                                </div>
                                <div class="btn-group">
                                    <button class="btn btn-warning" type="button">8</button>
                                </div>
                            </div>
                        </div>

                        <p class="text-muted">Group Checkbox</p>
                        <div class="btn-row">
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-primary">
                                    <input type="checkbox"> Option 1
                                </label>
                                <label class="btn btn-primary">
                                    <input type="checkbox"> Option 2
                                </label>
                                <label class="btn btn-primary">
                                    <input type="checkbox"> Option 3
                                </label>
                            </div>
                        </div>

                        <p class="text-muted">Group Radio</p>
                        <div class="btn-row">
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-default">
                                    <input type="radio" name="options" id="option1"> Option 1
                                </label>
                                <label class="btn btn-default">
                                    <input type="radio" name="options" id="option2"> Option 2
                                </label>
                                <label class="btn btn-default">
                                    <input type="radio" name="options" id="option3"> Option 3
                                </label>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="panel">
                    <header class="panel-heading ">
                        Justified Button groups
                    </header>
                    <div class="panel-body">
                        <div class="btn-group btn-group-justified">
                            <a class="btn btn-warning" href="#">Left</a>
                            <a class="btn btn-info" href="#">Middle</a>
                            <a class="btn btn-primary" href="#">Right</a>
                        </div>
                    </div>
                </section>
                <section class="panel">
                    <header class="panel-heading ">
                        Star Rating Example
                    </header>
                    <div class="panel-body">
                      <span class="rating">
                          <span class="star"></span>
                          <span class="star"></span>
                          <span class="star"></span>
                          <span class="star"></span>
                          <span class="star"></span>
                      </span>
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


<!--common scripts for all pages-->
<script src="<?php echo base_url();?>assets/admin/js/scripts.js"></script>


</body>
</html>
