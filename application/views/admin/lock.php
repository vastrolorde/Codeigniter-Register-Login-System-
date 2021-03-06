<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Admin Template">
    <meta name="keywords" content="admin dashboard, admin, flat, flat ui, ui kit, app, web app, responsive">
    <link rel="shortcut icon" href="<?php echo base_url();?>/assets/admin/img/ico/favicon.png">
    <title>SlickLab - Lock</title>

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

      <h2 class="form-heading lock">
          <span>Logged in as</span>
          <span class="u-name">Jonathan Smith</span>
      </h2>
      <div class="container lock-row">
          <form class="form-signin" action="index.html">
              <div class="login-wrap">
                  <div class="user-avatar text-center">
                      <img src="<?php echo base_url();?>/assets/admin/img/lockscreen_user.jpg" alt=""/>
                  </div>
                  <input type="password" class="form-control text-center" placeholder="Password to unlock">
                  <button class="btn btn-lg btn-success btn-block" type="submit">LOGIN</button>

                  <div class="registration m-t-20 d-log text-center">
                      <a class="" href="http://localhost/codeigniter/corlate/index.php/admin/login">
                          Sign in using different account
                      </a>
                  </div>

              </div>

          </form>
      </div>


  </body>
</html>
