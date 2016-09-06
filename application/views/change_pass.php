<!DOCTYPE html>
<html lang="en">
<head>
 <style>
    input[name=log_out] 
	{
    padding:5px 15px; 
    background:red;
    color:white;	
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
   }
   input[name=submit] 
	{
    padding:5px 15px; 
    background:green;
    color:white;	
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
   }
   input[type=text]
   {
     color:#800000; 
     font-weight:bold;
   }
   
   #ranjan h1,
   #ranjan h1 
   {
	   text-align:left;
    display: inline;
    }
    .error{
        color:red;
    }
  </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sign Up | Corlate</title>
    
    <!-- core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/prettyPhoto.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/animate.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/main.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/responsive.css');?>" rel="stylesheet">
    
    <!--[if lt IE 9]>
    <script src="<?php echo base_url('assets/js/html5shiv.js');?>"></script>
    <script src="<?php echo base_url('assets/js/respond.min.js');?>"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/ico/favicon.ico');?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('assets/images/ico/apple-touch-icon-144-precomposed.png');?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('assets/images/ico/apple-touch-icon-114-precomposed.png');?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('assets/images/ico/apple-touch-icon-72-precomposed.png');?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/images/ico/apple-touch-icon-57-precomposed.png');?>">
</head><!--/head-->

<body>

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +0123 456 70 90</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="<?php echo base_url('assets/images/logo.png');?>" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="http://localhost/codeigniter/corlate/index.php">Home</a></li>
                        <li><a href="http://localhost/codeigniter/corlate/index.php/home/aboutus">About Us</a></li>
                        <li><a href="http://localhost/codeigniter/corlate/index.php/home/services">Services</a></li>
                        <li><a href="http://localhost/codeigniter/corlate/index.php/home/portfolio">Portfolio</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="http://localhost/codeigniter/corlate/index.php/home/blogsingle">Blog Single</a></li>
                                <li><a href="http://localhost/codeigniter/corlate/index.php/home/pricing">Pricing</a></li>
                                <li><a href="http://localhost/codeigniter/corlate/index.php/home/errorpage">404</a></li>
                                <li><a href="http://localhost/codeigniter/corlate/index.php/home/shortcodes">Shortcodes</a></li>
                            </ul>
                        </li>
                        <li><a href="http://localhost/codeigniter/corlate/index.php/home/blog">Blog</a></li> 
                        <li><a href="http://localhost/codeigniter/corlate/index.php/home/contactus">Contact</a></li> 
						<li><a href="http://localhost/codeigniter/corlate/index.php/home/accounts">Accounts</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h2 style="color:black;font-style: italic;" align="center">Change Your Password Below!</h2>
			</div>
		 <div id="ranjan">
		    <blockquote style="border: 2px solid #666; padding: 20px; background-color: #ccc; text-align:center; ">
                <h1 style="color:black">Welcome:</h1>
				<h1 style="color:green"><?php echo $this->session->userdata('name'); ?> </h1>
			  </blockquote>	                           
              <div class="row contact-wrap">                     
                      <form role="form" action="<?php echo base_url().'index.php/home/change_password';?>" method="post">
                                <div class="col-sm-4 col-sm-offset-4">
                         <div class="form-group">                             
                          <label style="color:#800000;">Old Password *</label>
                          <input type="hidden" class="form-control" name="uid"  id="search" value="<?php echo $this->session->userdata('id');?>">
                          <input type="text" class="form-control" name="old_pass" placeholder="Enter Your Current Password" id="search">
                          <div class="error"><?php echo form_error('old_pass'); ?></div>
                             </div>
                             <div class="form-group">
                          <label style="color:#800000;">New Password *</label>
                          <input type="text" class="form-control" name="new_pass" placeholder="Type a New Password" id="search">
                          <div class="error"><?php echo form_error('new_pass'); ?></div>
                             </div>
                             <div class="form-group">
                          <label style="color:#800000;">Conform Password *</label>
                          <input type="text" class="form-control" name="confirm_pass" placeholder="Retype The New Password" id="search">
                          <div class="error"><?php echo form_error('confirm_pass'); ?></div>
                             </div> 
                                    <div class="form-group">
                          <input type="submit" name="submit" value="Update Password">   
                                    </div>
                                </div>
                      </form>                                         
                 </div>			
                        <form method="post" action="http://localhost/codeigniter/corlate/index.php/home/logout" ><p>Click Here To Logout &nbsp;&nbsp;<input type="submit" name="log_out" value="Log Out"></p></form>
			
		  </div>
		</div>
	</div><!-- .row -->
</div><!-- .container -->
<section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">We are hiring</a></li>
                            <li><a href="#">Meet the team</a></li>
                            <li><a href="#">Copyright</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Refund policy</a></li>
                            <li><a href="#">Ticket system</a></li>
                            <li><a href="#">Billing system</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Developers</h3>
                        <ul>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">SEO Marketing</a></li>
                            <li><a href="#">Theme</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Email Marketing</a></li>
                            <li><a href="#">Plugin Development</a></li>
                            <li><a href="#">Article Writing</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Our Partners</h3>
                        <ul>
                            <li><a href="#">Adipisicing Elit</a></li>
                            <li><a href="#">Eiusmod</a></li>
                            <li><a href="#">Tempor</a></li>
                            <li><a href="#">Veniam</a></li>
                            <li><a href="#">Exercitation</a></li>
                            <li><a href="#">Ullamco</a></li>
                            <li><a href="#">Laboris</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="<?php echo base_url('assets/js/jquery.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.prettyPhoto.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.isotope.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/main.js');?>"></script>
    <script src="<?php echo base_url('assets/js/wow.min.js');?>"></script>
</body>
</html>