<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Admin Template">
    <meta name="keywords" content="admin dashboard, admin, flat, flat ui, ui kit, app, web app, responsive">
    <link rel="shortcut icon" href="<?php echo base_url();?>/assets/admin/img/ico/favicon.png">
    <title>SlickLab - Registration</title>

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

      <h2 class="form-heading">registration now</h2>
      <div class="container log-row">
          <form class="form-signin" action="http://localhost/codeigniter/corlate/index.php/admin/">
              <p>Enter your personal details below</p>
              <input type="text" class="form-control" placeholder="Full Name" autofocus>
              <input type="text" class="form-control" placeholder="Address" autofocus>
              <input type="text" class="form-control" placeholder="Email" autofocus>
              <input type="text" class="form-control" placeholder="City/Town" autofocus>
              <div class="radio-custom radio-success">
                  <input type="radio" value="yes" checked="checked" name="option-yes" id="male">
                  <label for="male">Male</label>
                  <input type="radio"  value="no" name="option-yes" id="female">
                  <label for="female">Female</label>
              </div>

              <p> Enter your account details below</p>
              <input type="text" class="form-control" placeholder="User Name" autofocus>
              <input type="password" class="form-control" placeholder="Password">
              <input type="password" class="form-control" placeholder="Re-type Password">
              <label class="checkbox-custom check-success">
                  <input type="checkbox" value="agree this condition" id="checkbox1"> <label for="checkbox1">I agree to the Terms of Service and Privacy Policy</label>
              </label>


              <button class="btn btn-lg btn-success btn-block" type="submit">Submit</button>

              <div class="registration m-t-20 m-b-20">
                  Already Registered.
                  <a class="" href="http://localhost/codeigniter/corlate/index.php/admin/login">
                      Login
                  </a>
              </div>
          </form>
      </div>

    <!--jquery-1.10.2.min-->
    <script src="<?php echo base_url();?>/assets/admin/js/jquery-1.11.1.min.js"></script>
    <!--Bootstrap Js-->
    <script src="<?php echo base_url();?>/assets/admin/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>/assets/admin/js/jrespond..min.js"></script>



  </body>
</html>
