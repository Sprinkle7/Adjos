<!DOCTYPE html>
<html>
  <head>
    <title>Admin Login</title>
   
    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url();?>assets/assets/styles.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" media="screen">
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="<?php echo base_url();?>assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <body id="login" style="margin-top:0px;" class="color7">
    <div class="container signin">
      <form class="form-signin" action="login/signin" id="shadow" method="post" style="background:rgba(255,255,255,0.1);">
        <h2 class="form-signin-heading">Login Here</h2>
        <input type="text" class="input-block-level"  name="username" placeholder="Email address">
        <input type="password" class="input-block-level" name="password"  placeholder="Password">
        <input class="btn color4" type="submit" name="loginhere" value="Sign In">
        <button class="btn color4" type="reset">Reset</button>
      </form>

    </div> <!-- /container -->
    <script src="<?php echo base_url();?>assets/vendors/jquery-1.9.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>