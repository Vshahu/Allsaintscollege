<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Allsaintscollege | Forgot Password</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/vpjs.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/blue.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box mtb-0 pt-20">
  <div class="login-logo">
    <a href="login.html"><b>Allsaints College</b></a>
  </div>
  <div class="login-box-body shadow-1">
    <h3 class="login-box-msg">FORGOT PASSWORD</h3>

     <form action="<?php echo base_url();?>welcome/otp" method="post">
      
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Register Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
     
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Mobile">
        <span class="glyphicon fa fa-mobile form-control-feedback"></span>
      </div>
     
      <div class="row">
        <div class="col-xs-8">
          <a href="<?php echo base_url();?>">Go to Login</a>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-warning btn-block btn-flat">Forgot <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
        </div>
        <!-- /.col -->
      </div>
    </form>

   
  </div>
</div>
<!-- /.login-box -->
<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
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

</body>
</html>
