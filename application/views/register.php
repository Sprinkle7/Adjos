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
  <body id="login" style="margin-top:0px;" class="color8">
   
    <div class="container signin" style="width:300px; padding:3em; color:#f30; background:rgba(255,255,255,0.9);">
       <?php
      echo $msg;
    ?><?php echo form_open('adjos/register',array("class"=>"form_signin","id"=>"shadow"));?>
        <h2 class="form-signin-heading">Registration</h2>
        <?php echo form_input(array("class" => "input-block-level", "name" => "name", "placeholder" => "Name", "required"=> "required"));?>
        <?php echo form_input(array("class" => "input-block-level", "name" => "username", "placeholder" => "Username", "required"=> "required"));?>
        <?php echo form_input(array("class" => "input-block-level", "name" => "email", "placeholder" => "Email", "required"=> "required"));?>
        <?php echo form_input(array("class" => "input-block-level", "name" => "password", "placeholder" => "Password", "required"=> "required"));?>
        <?php echo form_input(array("class" => "input-block-level", "name" => "passwordconf", "placeholder" => "Re-Enter Password", "required"=> "required"));?>
        <input class="btn color4" type="submit" name="register" value="Register">
      <?php echo form_close();?>
    </div> <!-- /container -->
    <script src="<?php echo base_url();?>assets/vendors/jquery-1.9.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>