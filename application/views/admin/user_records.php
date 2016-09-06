<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .container{
            padding-top: 20px;
            padding-bottom: 20px;
        }
        .ranjan{
            border-collapse: collapse;
            width: 95%;
           
        }
       th {                      
          
           font-size:18px;
          background-color: #4CAF50;
          color: white;
         }
       table, th, td {
           padding: 18px;
           text-align: center;
           border-bottom: 1px solid #ddd;
          }
          tr:nth-child(even){background-color: #f2f2f2}
          
         
        </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Mosaddek" />
    <meta name="keyword" content="slick, flat, dashboard, bootstrap, admin, template, theme, responsive, fluid, retina" />
    <meta name="description" content="" />
    <link rel="shortcut icon" href="javascript:;" type="image/png">

    <title>SlickLab - Responsive Admin Dashboard Template</title>

    <!--easy pie chart-->
    <link href="<?php echo base_url();?>assets/admin/js/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />

    <!--vector maps -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/js/vector-map/jquery-jvectormap-1.1.1.css">

    <!--right slidebar-->
    <link href="<?php echo base_url();?>assets/admin/css/slidebars.css" rel="stylesheet">

    <!--switchery-->
    <link href="<?php echo base_url();?>assets/admin/js/switchery/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />

    <!--jquery-ui-->
    <link href="<?php echo base_url();?>assets/admin/js/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet" />

    <!--iCheck-->
    <link href="<?php echo base_url();?>assets/admin/js/icheck/skins/all.css" rel="stylesheet">

    <link href="<?php echo base_url();?>assets/admin/css/owl.carousel.css" rel="stylesheet">


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
                    <img src="<?php echo base_url();?>/assets/admin/img/logo-icon.png" alt="">
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
                    <li class="active"><a href="http://localhost/codeigniter/corlate/index.php/admin/userlistpage"><i class="fa fa-home"></i> <span>User Records</span></a></li>
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
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/inbox"> Inbox</a></li>
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/inboxdetails"> View Mail</a></li>
                            <li><a href="http://localhost/codeigniter/corlate/index.php/admin/linboxcompose"> Compose Mail</a></li>
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
        <div class="body-content" >

            <!-- header section start-->
            <div class="header-section">

                <!--logo and logo icon start-->
                <div class="logo dark-logo-bg hidden-xs hidden-sm">
                    <a href="http://localhost/codeigniter/corlate/index.php/admin/">
                        <img src="<?php echo base_url();?>/assets/admin/img/logo-icon.png" alt="">
                        <!--<i class="fa fa-maxcdn"></i>-->
                        <span class="brand-name">SlickLab</span>
                    </a>
                </div>

                <div class="icon-logo dark-logo-bg hidden-xs hidden-sm">
                    <a href="http://localhost/codeigniter/corlate/index.php/admin/">
                        <img src="<?php echo base_url();?>/assets/admin/img/logo-icon.png" alt="">
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
                                                        <img class="icon-img" src="<?php echo base_url();?>/assets/admin/img/mega-menu/mega_icon1.png" alt="" />
                                                                <span class="icon-desk">
                                                                                        <span class="d-title">Full Flat Concept</span>
                                                                <span class="d-desk">Description goes here</span>
                                                                </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <img class="icon-img" src="<?php echo base_url();?>/assets/admin/img/mega-menu/mega_icon2.png" alt="" />
                                                                <span class="icon-desk">
                                                                                        <span class="d-title">Amaging Dashboard</span>
                                                                <span class="d-desk">Build with BS3</span>
                                                                </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <img class="icon-img" src="<?php echo base_url();?>/assets/admin/img/mega-menu/mega_icon3.png" alt="" />
                                                                <span class="icon-desk">
                                                                                        <span class="d-title">3500+ Satisfied Client</span>
                                                                <span class="d-desk">Max 5 star rating</span>
                                                                </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <img class="icon-img" src="<?php echo base_url();?>/assets/admin/img/mega-menu/mega_icon4.png" alt="" />
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
                                    <a tabindex="-1" href="javascript:;"><span> German </span><img src="<?php echo base_url();?>/assets/admin/img/flags/germany_flag.jpg" alt=""/></a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="javascript:;"><span> Italian </span> <img src="<?php echo base_url();?>/assets/admin/img/flags/italy_flag.jpg" alt=""/></a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="javascript:;"><span> French </span> <img src="<?php echo base_url();?>/assets/admin/img/flags/french_flag.jpg" alt=""/></a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="javascript:;"><span> Spanish </span> <img src="<?php echo base_url();?>/assets/admin/img/flags/spain_flag.jpg" alt=""/></a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="javascript:;"><span> Russian </span> <img src="<?php echo base_url();?>/assets/admin/img/flags/russia_flag.jpg" alt=""/></a>
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
                                    <div style="width: 66%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="66"
                                         role="progressbar" class="progress-bar progress-bar-info"></div>
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
                                
								<img src="<?php echo base_url();?>/assets/admin/img/avatar-mini.jpg" alt="">
								<span class="fa fa-angle-down"><h5 style="color:black"><?php echo $this->session->userdata('user_name'); ?> </h5></span>
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
                                <li><a href="http://localhost/codeigniter/corlate/index.php/admin/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
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
     <div class="container">
        <table class="ranjan">
            <thead>   				
               <th style="text-align:center;">ID</th>
               <th></th>               
               <th style="text-align:center;">Picture</th>    
               <th></th>               
                <th></th>     
               <th style="text-align:center;"> Name</th>	
               <th></th>
               <th></th>
               <th></th>
               <th style="text-align:center;"> User Name </th>	
                <th></th>
               <th></th>
               <th style="text-align:center;">  Email Address</th>
                <th></th>               
               <th style="text-align:center;">Phone Number</th>               
               <th style="text-align:center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action</th>
               
            </thead>
            <tbody>
                <?php if( count($list)) ?>
                <?php $count= $this->uri->segment(3, 0); ?> 
                <!-- if anything will not found in first page segment then control will print 1,2,3 sereies by counting 0 with ++count -->
                <?php foreach($list as $row){ ?>
                <tr>                    				   
                    <td><?= ++$count; ?></td>	
                    <td></td>                    
                    <td><img style="width: 55px;height: 55px;border-radius:50%;" onerror="this.src='<?php echo base_url().'/profile_images/thumb/download.png';?>'" src="<?php echo base_url().'/profile_images/thumb/'.$row->image; ?>" /></td>
                    <td></td>     
                    <td></td>
                    <td><?=$row->name?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><?=$row->uname?></td>
                    <td></td>
                    <td></td>
                    <td><?=$row->email?></td>
                    <td></td>                    
                    <td><?=$row->phone?></td>
                    
                    <td>
                        <div class="row">
			    <div class="col-lg-2">
		               </div>
                            <div class="col-lg-2">
		               </div>
                            <div class="col-lg-2">
                                <!-- <a href="" class="btn btn-info">View</a> -->
                                <?php echo  anchor(base_url().'index.php/admin/fetch_user_profile/'.$row->id ,'View','class="btn btn-info"');?>                                                                
                            </div>
                            <div class="col-lg-2">
                                <?php echo  anchor(base_url().'index.php/home/edituserprofile/'.$row->id ,'Edit','class="btn btn-warning"');?>
                            </div>
                            <div class="col-lg-2">
                                 <?php echo
                                   form_open('http://localhost/codeigniter/corlate/index.php/home/deleteuserprofile'), 
                                   form_hidden('$row_id',$row->id),
                                   form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']),
                                   form_close();
                                  ?>
                            </div>
                       
                                        
                                  
                   <!-- <?php echo  anchor(base_url().'index.php/home/deleteuserprofile/'.$userlist->id ,'Delete','class="btn btn-danger"');?> -->
                   
                    </td>
                </tr>                   
               <?php } ?>
               
            </tbody>
            <tfoot>              			   
               <th style="text-align:center;">ID</th>          
               <th></th>
               <th style="text-align:center;">Picture</th>
               <th></th>               
                <th></th>     
               <th style="text-align:center;"> Name</th>
               <th></th>
               <th></th>
               <th></th>
               <th style="text-align:center;"> User Name </th>
                <th></th>
               <th></th>
               <th style="text-align:center;">  Email Address</th>
                <th></th>              
               <th style="text-align:center;">Phone Number</th>
               <th style="text-align:center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action</th>
            </tfoot>
        </table> 
            <div class="container">
                <?php echo $this->pagination->create_links();?>
            </div>
    </div>
            
            
            

            <!--footer section start-->
            <footer>
                2015 &copy; SlickLab by VectorLab.
            </footer>
            <!--footer section end-->


           
            <!-- Right Slidebar end -->

        </div>
        <!-- body content end-->
    </section>



<!-- Placed js at the end of the document so the pages load faster -->
<script src="<?php echo base_url();?>assets/admin/js/jquery-1.10.2.min.js"></script>

<!--jquery-ui-->
<script src="<?php echo base_url();?>assets/admin/js/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>

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

<!--flot chart -->
<script src="<?php echo base_url();?>assets/admin/js/flot-chart/jquery.flot.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/flot-chart/flot-spline.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/flot-chart/jquery.flot.resize.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/flot-chart/jquery.flot.pie.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/flot-chart/jquery.flot.selection.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/flot-chart/jquery.flot.stack.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/flot-chart/jquery.flot.crosshair.js"></script>


<!--earning chart init-->
<script src="<?php echo base_url();?>assets/admin/js/earning-chart-init.js"></script>


<!--Sparkline Chart-->
<script src="<?php echo base_url();?>assets/admin/js/sparkline/jquery.sparkline.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/sparkline/sparkline-init.js"></script>

<!--easy pie chart-->
<script src="<?php echo base_url();?>assets/admin/js/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/easy-pie-chart.js"></script>


<!--vectormap-->
<script src="<?php echo base_url();?>assets/admin/js/vector-map/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/vector-map/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/dashboard-vmap-init.js"></script>

<!--Icheck-->
<script src="<?php echo base_url();?>assets/admin/js/icheck/skins/icheck.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/todo-init.js"></script>

<!--jquery countTo-->
<script src="<?php echo base_url();?>assets/admin/js/jquery-countTo/jquery.countTo.js"  type="text/javascript"></script>

<!--owl carousel-->
<script src="<?php echo base_url();?>assets/admin/js/owl.carousel.js"></script>


<!--common scripts for all pages-->

<script src="<?php echo base_url();?>assets/admin/js/scripts.js"></script>


<script type="text/javascript">

    $(document).ready(function() {

        //countTo

        $('.timer').countTo();

        //owl carousel

        $("#news-feed").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true,
            autoPlay:true
        });
    });

    $(window).on("resize",function(){
        var owl = $("#news-feed").data("owlCarousel");
        owl.reinit();
    });

</script>

</body>
</html>
