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
            width: 100%;
           
        }
       th {
          background-color: #4CAF50;
          color: white;
         }
       table, th, td {
           padding: 8px;
           text-align: center;
           border-bottom: 1px solid #ddd;
          }
          tr:nth-child(even){background-color: #f2f2f2}
          input[name=search]
          {
              font-weight:bold;
              font-style:italic;
          }
         button[name=submit]
          {
              font-weight:bold;
              font-style:italic;
              color:#800000;
          }
        </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>About Us | Corlate</title>
	
	<!-- core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/prettyPhoto.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/animate.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/main.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/responsive.css'); ?>" rel="stylesheet">
	
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/ico/favicon.ico');?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('assets/images/ico/apple-touch-icon-144-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('assetsimages/ico/apple-touch-icon-114-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('assets/images/ico/apple-touch-icon-72-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/images/ico/apple-touch-icon-57-precomposed.png'); ?>">
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
                        <li class="active"><a href="http://localhost/codeigniter/corlate/index.php/home/aboutus">About Us</a></li>
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
      
    <div class="container" id="the-container">
        <div class="col-sm-4 col-xs-4">            
            <a href="http://localhost/codeigniter/corlate/index.php/home/newuseradd" class="btn btn-success btn-lg">Add New User</a>
        </div>       
    </div> 
        <div align="center" id="container">                     
            <form class="form-inline" role="form" action="<?php echo base_url().'index.php/home/search_user';?>" method="post">
                <div class="form-group">                
                   <input type="text" class="form-control" name="search" placeholder="Search by Name" id="search">
                </div>  
                   <button type="submit" class="btn btn-default" name="submit">Search</button>
            </form>
            <?php echo $popup;?>                                  
        </div>
            <?php $dmsg=$this->session->userdata('mesg'); ?>
            <?php if($dmsg){ ?>
            <?php echo $dmsg; ?>
            <?php $this->session->unset_userdata('mesg'); ?>
           <?php } ?>
            
            <?php $fmsg=$this->session->userdata('success'); ?>
            <?php if($fmsg){ ?>
            <?php echo $fmsg; ?>
            <?php $this->session->unset_userdata('success'); ?>
           <?php } ?>		   
            
            <?php $gmsg=$this->session->userdata('failed'); ?>		
            <?php if($gmsg){ ?>   
            <?php echo $gmsg; ?>
            <?php $this->session->unset_userdata('failed'); ?>
           <?php } ?> 
             <?php $zmsg=$this->session->userdata('added'); ?>
                 <?php if($zmsg){ ?>
                 <?php echo $zmsg; ?>
                 <?php $this->session->unset_userdata('added'); ?>
             <?php } ?> 
        <?php $nmsg=$this->session->userdata('nothong_typed'); ?>
                 <?php if($nmsg){ ?>
                 <?php echo $nmsg; ?>
                 <?php $this->session->unset_userdata('nothong_typed'); ?>
             <?php } ?>
        <?php $nrmsg=$this->session->userdata('no_record'); ?>
                 <?php if($nrmsg){ ?>
                 <?php echo $nrmsg; ?>
                 <?php $this->session->unset_userdata('no_record'); ?>
             <?php } ?>
               
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
                    <td><img style="width: 45px;height: 45px;border-radius:50%;" onerror="this.src='<?php echo base_url().'/profile_images/thumb/download.png';?>'" src="<?php echo base_url().'/profile_images/thumb/'.$row->image; ?>" /></td>
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
                                <?php echo  anchor(base_url().'index.php/home/fetch_user_profile/'.$row->id ,'View','class="btn btn-info"');?>                                                                
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
                <?php echo $links;?>
            </div>
    </div>
        
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
    <script type="text/javascript">
        $('.carousel').carousel()
    </script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.prettyPhoto.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.isotope.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/main.js');?>"></script>
    <script src="<?php echo base_url('assets/js/wow.min.js');?>"></script>
</body>
</html>       
    
    