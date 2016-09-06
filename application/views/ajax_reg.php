<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
function checkname()
{
 var name=document.getElementById("name").value;
	
 if(name)
 {
  $.ajax({
  type: 'post',
  url: 'http://localhost/codeigniter/corlate/index.php/ajax/checkdata',
  data: {
   user_name:name,
  },
  success: function (response) {
   $( '#name_status' ).html(response);
   if(response=="OK")	
   {
    return true;	
   }
   else
   {
    return false;	
   }
  }
  });
 }
 else
 {
  $( '#name_status' ).html("");
  return false;
 }
}

function checkemail()
{
 var email=document.getElementById("email").value;
	
 if(email)
 {
  $.ajax({
  type: 'post',
  url: 'http://localhost/codeigniter/corlate/index.php/ajax/checkdata',
  data: {
   user_email:email,
  },
  success: function (response) {
   $( '#email_status' ).html(response);
   if(response=="OK")	
   {
    return true;	
   }
   else
   {
    return false;	
   }
  }
  });
 }
 else
 {
  $( '#email_status' ).html("");
  return false;
 }
}



function checkall()
{
 var namehtml=document.getElementById("name_status").innerHTML;
 var emailhtml=document.getElementById("email_status").innerHTML;

 if((namehtml && emailhtml)=="OK")
 {
  return true;
 }
 else
 {	 
  return false;
 }
}


$(document).ready(function() {   
   $('#submit_form').click(function(){
	//e.preventDefault();	
	var namehtml=document.getElementById("name_status").innerHTML;
	var emailhtml=document.getElementById("email_status").innerHTML;
	var name=document.getElementById("name").value;
	var uname=document.getElementById("uname").value;	
	var phone=document.getElementById("phone").value;
	var pass=document.getElementById("pass").value;
	var cpass=document.getElementById("cpass").value;
	var email=document.getElementById("email").value;
    var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");	
    if (name === '' || cpass === '' || email === '' || pass === '' || uname === '' || phone === '')
    {      

    alert('Please Fill Out all The columns');
    return false;  

     }
	 if (pass!=cpass)
    {      

    alert('The Confirm Password Field Does not Match The Password Field');
    return false;  

     }
	 if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
		 {
	   var abc="Not a valid e-mail address\nShould have a @ and domain like (.com,.rediffmail etc.)";
         alert(abc);
         return false;
         }
	
	if(namehtml == "OK" && emailhtml == "Email Already Exist" )
	{
		alert('Please Give an Another Email Address');
        return false;		
	}
	if(namehtml == "User Name Already Exist" && emailhtml == "OK")
	{
		alert('Please Give an another Username');
		return false;
	}
	if(namehtml == "User Name Already Exist" && emailhtml == "Email Already Exist")
	{
		alert('Please Give Another Username And Email address');
		return false;
	}
	else
	{
    jQuery.ajax({
    type: "POST",
    url: "http://localhost/codeigniter/corlate/index.php/ajax/insertdata",    
    data: $("#contact-form").serialize(),
    success: function(res)
   	 {
        $(".ajax_response_result").html(res);
        $( '#contact-form' ).each(function(){
			this.reset();
			});
	    $( '#email_status' ).html("");
		$( '#name_status' ).html("");
     }	
    });
	}	
	return false;
  });
});


$('#configreset').click(function()
 {           
			$('#contact-form').reset();			
 });
</script>
<style>
.leadme{color:green;font-style: italic;}
.lead{color:white;font-family: Arial, Helvetica, sans-serif;}
.abc{height:50px;width:100px;}
.error{color:white;}
#name_status
{
color:#800000;
}
#email_status
{
color:#800000;
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
       <div class="ajax_response_result"></div>
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="contact-form" class="contactform" name="contact-form" method="POST" action="" >
                    <div class="col-sm-4 col-sm-offset-4">
                        <div class="form-group">
                            <label style="color:green;">Name *</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Full Name" value="<?php echo set_value('name'); ?>" size="50" onkeyup="checkname();" required="required">
                            <span id="name_status"></span>
						</div>
						<div class="form-group">
                            <label style="color:green;">User Name *</label>
                            <input type="text" name="uname" id="uname" class="form-control" placeholder="Enter Your User Name" value="<?php echo set_value('uname'); ?>" size="50" required="required">                            
						    
						</div>						
                        <div class="form-group">
                            <label style="color:green;">Email *</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Phone Email ID" value="<?php echo set_value('email'); ?>" size="50" onkeyup="checkemail();" required="required">
                            <span id="email_status"></span>
						</div>
                        <div class="form-group">
                            <label style="color:green;">Phone</label>
                            <input type="number" name="phone" id="phone" class="form-control" placeholder="Enter Your Phone Number" value="<?php echo set_value('phone'); ?>" size="50" required="required">
                            
						</div>
                        <div class="form-group">
                            <label style="color:green;">Password *</label>
                            <input type="password" name="pass" id="pass" class="form-control" placeholder="Enter Your Password" value="<?php echo set_value('pass'); ?>" size="50" required="required">
                     
						</div> 
                        <div class="form-group">
                            <label style="color:green;">Confirm Password *</label>
                            <input type="password" id="cpass" name="cpass" class="form-control" placeholder="Re Enter Your Password" value="<?php echo set_value('cpass'); ?>" size="50" required="required">
                                                
					   </div> 						
                    </div>                                  
                      
					   <div class="col-sm-4 col-sm-offset-4">						
                            <button type="submit" id="submit_form" name="submit_form" class="btn btn-primary btn-lg" value="" >Sign Up</button>	
    							
                               <input type="reset" id="configreset" name="configreset" class="btn btn-success btn-lg" value="Reset" >                       
					   </div>
						<div class="col-sm-8 col-sm-offset-5">
						
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
    <script src="<?php echo base_url('assets/js/wow.min.js');?>"></script>  -->
</body>
</html>