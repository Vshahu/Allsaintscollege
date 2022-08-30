<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Allsaintscollege | Student Login</title>
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
    <a href="#"><b>Allsaints College</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body shadow-1">
    <h3 class="login-box-msg">CHECK EMAIL OR PHONE</h3>
    <h3 class="login-box-msg incorrectotp hide text-danger">INCORRECT OTP</h3>

     <form action="<?php echo base_url();?>welcome/newpassword" method="post">
      
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Enter 6 Digit OTP">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
         
      <div class="row">
        <div class="col-xs-6">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Re-Send OTP</button>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <button type="submit" class="btn btn-info btn-block btn-flat">Confirm OTP</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

   
  </div>
  <!-- /.login-box-body -->
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

</body>
</html>
