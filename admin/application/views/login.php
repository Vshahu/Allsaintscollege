<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Allsaintscollege | Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/vpjs.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/blue.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="container-fluid login-container">
<div class="row overlay-box">
  <div class="login-box mtb-0 pt-20">
    <div class="login-logo">
      <a href="http://vipinpatel.in/allsaintscollege/web/"><strong class="text-white text-shadow2">Allsaints College</strong></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body shadow-1">
    <div class="row login-box-msg">
      <div class="row"> <h3 class="">LOGIN</h3></div>
      <div class="row"><small class="text-uppercase">STUDENT | PARENT | STAFF</small></div>
     </div>
    
   <span> <?php echo validation_errors();?> </span>
   
                
      <form action="<?php echo base_url('login/Auth');?>" method="post">
        <div><?php echo $this->session->flashdata('invalid_login'); ?></div>
 
        <div class="form-group has-feedback">
          <input id="username" name="username" type="text" placeholder="Email" autocomplete="off" class="form-control">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <input id="password" name="password" type="password" placeholder="Password" class="form-control">
          <span class="glyphicon fa fa-key form-control-feedback"></span>
        </div>

        <div class="row">
          
         
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat" onclick="checklogin(this.value)">Login</button>
          </div>
        <div class="col-xs-8 text-right">
      <div class="row">
        <div class="col-xs-12">
          <a href="<?php echo base_url();?>welcome/forgotpassword">I forgot my password</a>
        </div>
        <div class="col-xs-12">
          <a href="<?php echo base_url();?>welcome/registration">Create Account</a>
        </div>
      </div>
          </div>
        </div>
      </form>


    </div>
    <!-- /.login-box-body -->
  </div>
  </div>
  </div>
  <!-- /.login-box -->
  <!-- jQuery 3 -->
  <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="<?php echo base_url();?>assets/js/icheck.min.js"></script>
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
    });
  </script>
  <script type="text/javascript">
   $('form').submit(function () {

    // Get the Login Name value and trim it
    var username = $.trim($('#username').val());
     var password = $.trim($('#password').val());

    // Check if empty of not
    if (username  === '') {
         $("#username").css("border-color","red"); 
        return false;
    }
    if (password  === '') {
         $("#password").css("border-color","red"); 
        return false;
    }
});
  </script>

</body>
</html>
