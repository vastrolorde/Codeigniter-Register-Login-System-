<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Admin Template">
    <meta name="keywords" content="admin dashboard, admin, flat, flat ui, ui kit, app, web app, responsive">
    <link rel="shortcut icon" href="<?php echo base_url();?>/assets/admin/img/ico/favicon.png">
    <title>SlickLab - Login</title>

    <!-- Base Styles -->
    <link href="<?php echo base_url();?>/assets/admin/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/admin/css/style-responsive.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->


</head>

  <body class="login-body">

      <div class="login-logo">
          <img src="<?php echo base_url();?>/assets/admin/img/login_logo.png" alt=""/>
      </div>

      <h2 class="form-heading">login</h2>
      <div class="container log-row">
	  
	  <?php
	  $msg=$this->session->userdata('message');
	   if($msg)
	   { 
		    echo $msg; 
		    $this->session->unset_userdata('message');
	   }
	   ?>
<?php
	  $msg=$this->session->userdata('logoutmessage');
	   if($msg)
	   { 
		    echo $msg; 
		    $this->session->unset_userdata('logoutmessage');
	   }
	   ?>	   
	 
	  
          <form class="form-signin" action="http://localhost/codeigniter/corlate/index.php/super_admin/admin_login_check" method="post">
              <div class="login-wrap">
                  <input type="text" name="user_name" class="form-control" placeholder="User ID" autofocus>
                  <input type="password" name="password" class="form-control" placeholder="Password">
                  <button class="btn btn-lg btn-success btn-block" type="submit">LOGIN</button>
                  <div class="login-social-link">
                      <a href="http://localhost/codeigniter/corlate/index.php/admin/" class="facebook">
                          Facebook
                      </a>
                      <a href="http://localhost/codeigniter/corlate/index.php/admin/" class="twitter">
                          Twitter
                      </a>
                  </div>
                  <label class="checkbox-custom check-success">
                      <input type="checkbox" value="remember-me" id="checkbox1"> <label for="checkbox1">Remember me</label>
                      <a class="pull-right" data-toggle="modal" href="#forgotPass"> Forgot Password?</a>
                  </label>

                  <div class="registration">
                      Don't have an account yet?
                      <a class="" href="http://localhost/codeigniter/corlate/index.php/admin/registration">
                          Create an account
                      </a>
                  </div>

              </div>

              <!-- Modal -->
              <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="forgotPass" class="modal fade">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title">Forgot Password ?</h4>
                          </div>
                          <div class="modal-body">
                              <p>Enter your e-mail address below to reset your password.</p>
                              <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                          </div>
                          <div class="modal-footer">
                              <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                              <button class="btn btn-success" type="button">Submit</button>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- modal -->

          </form>
      </div>

      <!--jquery-1.10.2.min-->
      <script src="<?php echo base_url();?>/assets/admin/js/jquery-1.11.1.min.js"></script>
      <!--Bootstrap Js-->
      <script src="<?php echo base_url();?>/assets/admin/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url();?>/assets/admin/js/jrespond..min.js"></script>

  </body>
</html>
