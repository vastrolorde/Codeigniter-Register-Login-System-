
<!DOCTYPE html>
<html lang="en">
<head>
<style>
#contact-page{background-image: url("<?php echo base_url('assets/images/login.jpg');?>");}
.leadme{color:white;font-style: italic;}
.lead{color:white;font-family: Arial, Helvetica, sans-serif;}
.abc{height:80px;width:80px;}
</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Log In | Corlate</title>
    
    <!-- core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/prettyPhoto.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/animate.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/main.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/responsive.css');?>" rel="stylesheet">
    
        
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
<section id="contact-page"><br><br>
        <div class="container">
            <div class="center">       
<?php if(isset($account_created)){?>
    <h3 style="color:orange;"><?php echo $account_created; ?></h3>
<?php }  ?>	
<!-- (login check function) -->
 <?php   $msg=$this->session->userdata('data_error'); ?>
      <?php if($msg) { ?>
	  
		  <h3 style="color:orange;"><?php echo $msg; ?></h3>
		  <?php $this->session->unset_userdata('data_error'); ?>
	<?php  } ?>	
<?php   $smsg=$this->session->userdata('message'); ?>
      <?php if($smsg) { ?>
	  
		  <h3 style="color:orange;"><?php echo $smsg; ?></h3>
		  <?php $this->session->unset_userdata('message'); ?>
	<?php  } ?>		
<?php   $fmsg=$this->session->userdata('aboutlogin'); ?>
      <?php if($fmsg) { ?>	  
		  <?php echo $fmsg; ?>
		  <?php $this->session->unset_userdata('aboutlogin'); ?>
	<?php  } ?>     
                <h2 class="leadme">Log in</h2>
                <p class="lead">Log Into Your Account</p>
				<img class="abc" src="<?php echo base_url('assets/images/default-user.png');?>" >
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="http://localhost/codeigniter/corlate/index.php/home/loginvalidate">
                    <div class="col-sm-4 col-sm-offset-4">
                     
						<div class="form-group">
                            <label style="color:white;">User Name *</label>
                            <input type="text" name="username" class="form-control" required="required" placeholder="Enter Your User Name">
                        </div>
                       
                        <div class="form-group">
                            <label style="color:white;">Password *</label>
                            <input type="password" name="pass" class="form-control" required="required" placeholder="Enter Your Password">
                        </div> 
                        					
                    </div>                                  
                      
					   <div class="col-sm-4 col-sm-offset-4">						
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Log In</button>        
			<br><br><p style="color:white;font-size:18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Don't Have An Account?&nbsp;<u><a href="http://localhost/codeigniter/corlate/index.php/home/loggedinchecksignup" target="_blank" style="color:orange;font-size:22px;">Click Here</a></u></p>                          
                           
                             <?php echo "<a href='$login_url'><img class='fb' style='width: 320px;height: 100px;' src='http://localhost/codeigniter/corlate/assets/images/facebook_login.png'></a>";?>
                           
                      </div>
                    </div>
                </form>
                
                
               
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
	
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

    <!--
	<script src="<?php echo base_url('assets/js/jquery.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.prettyPhoto.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.isotope.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/main.js');?>"></script>
    <script src="<?php echo base_url('assets/js/wow.min.js');?>"></script>
	-->
</body>
</html>