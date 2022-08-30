<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Allsaintscollege | Registration</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ionicons.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/vpjs.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/blue.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
  <div class="container-fluid reg-box">
<div class="row overlay-box">
<div class="register-box w-40 mtb-0 ptb-10">
  <div class="register-logo mb-10"> <a  href="#"><b class="text-info">Allsaints College</b></a> </div>
  <div class="register-box-body shadow-1">
    <p class="login-box-msg text-center ca"><strong class="text-info">CREATE ACCOUNT</strong></p>
    <p class="login-box-msg text-center hide isc"><strong class="text-success">ACCOUNT SUCCESSFULLY CREATED</strong></p>
    <div id="msg"></div>
     <form method="post" action="<?php echo base_url('index.php/welcome/savdata'); ?>">  
      <input type="hidden" id="checkreg" name="checkreg">
      <input type="hidden" id="checktype" name="checktype">
      <!-- <div class="form-group has-feedback">
        <select required="" class="form-control plr-5-imp" required="">
          <option selected="selected" disabled="disabled">Select Student / Parent / Staff </option>
          <option value="Student">Student</option>
          <option class="Parent">Parent</option>
          <option class="Staff">Staff</option>
        </select>
      </div> -->
      <div class="row mb-15">
        <div class="col-xs-6 pr-5">
          <select required="" class="form-control plr-5-imp" required=""  name="utype" id="utype" onchange="showreg(this.value)" >
          <option   value="">Select Student / Parent / Staff </option>
          <?php foreach($use as $row){
			  if($row->id!='1'){
			  echo '<option value='.$row->id.'>'.$row->type.'</option>';}
      }?>
          </select>
        </div>
        <!--if Student or Parent create Account Then show Registration Number Section -->
        <div class="col-xs-6 pl-5 "  id="regno" >
          <input type="text" class="form-control" placeholder="Reg No" id="regid" name="regid" disabled="" onkeyup="checkregister(this.value)" minlength="8">
        </div>
        <!--// if Student create Account-->
        <!--if SStaff create Account Then show Staff Id Section -->
       
        <!--// if Staff create Account-->
      </div>
      <div class="row mb-15">
        <div class="col-xs-6 pr-5">
          <input type="text" class="form-control" placeholder="First name" name="fname" id="fname">
        </div> 
        <div class="col-xs-6 pl-5">
          <input type="text" class="form-control" placeholder="Last name" name="lname" id="lname">
        </div>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email" id="email">
      </div>
      <div class="row mb-15">
        <div class="col-xs-6 pr-5">
          <input type="password" class="form-control" minlength="8" placeholder="Password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
        </div>
        <div class="col-xs-6 pl-5">
          <input type="password" class="form-control" minlength="8" placeholder="Confirm password" id="cpassword" name="cpassword">
        </div>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Mobile" id="mobile" name="mobile" maxlength="10" minlength="10">
      </div>
      <div class="form-group has-feedback mb-5">
        <select required="" class="form-control plr-5-imp" required="" name="gender" id="gender" >
        <option selected="selected" disabled="disabled" value="">Select Gender</option>
        <option value="Male">Male</option>
        <option class="Female">Female</option>
        <option class="Staff">Other</option>
        </select >
      </div>
      <div class="row">
        <div class="col-xs-12"><small>DATE OF BIRTH</small></div>
        <div class="col-xs-4 pr-0">
          <div class="form-group has-feedback mb-5">
            <select required="" class="form-control plr-5-imp" required="required" name="month" id="month ">
            <option selected="selected" disabled="disabled">MONTH</option>
            <option value="01">Jan</option>
            <option value="02">Feb</option>
            <option value="03">Mar</option>
            <option value="04">Apr</option>
            <option value="05">May</option>
            <option value="06">June</option>
            <option value="07">July</option>
            <option value="08">Aug</option>
            <option value="09">Sep</option>
            <option value="10">Oct</option>
            <option value="11">Nov</option>
            <option value="12">Dec</option>
            </select>
          </div>
        </div>
        <div class="col-xs-4 plr-5-imp">
          <select required="" class="form-control plr-5-imp" required="required" id="day" name="day">
          <option selected="selected" disabled="disabled">DAY</option>
          <?php for($i=1;$i<=31;$i++){

              ?>
          <option value="<?=$i;?>">
          <?=$i;?>
          </option>
          <?php }?>
          </select>
        </div>
        <div class="col-xs-4 pl-0">
          <select required="" class="form-control plr-5-imp" required="required" id="year"  name="year">
          <option selected="selected" disabled="disabled">YEAR</option>
          <?php for($i=2016;$i>=1970;$i--){

              ?>
          <option value="<?=$i;?>">
          <?=$i;?>
          </option>
          <?php }?>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12"><small>ADDRESS</small></div>
        <div class="col-xs-4 pr-0">
          <div class="form-group has-feedback">
            <select  required="" class="form-control plr-5-imp" required="required" name="country" id="country" onChange="getState(this.value)">
            <option selected="selected" disabled="disabled">COUNTRY</option>
            <?php  foreach($country->result() as $row){
           echo '<option value="'.$row->id.'">'.$row->countryName.'</option>';
         }
           ?>
            </select>
          </div>
        </div>
        <div class="col-xs-4 plr-5-imp">
          <select required="" class="form-control plr-5-imp" required="required" name="state" id="state" onChange="getCity(this.value)">
          <option selected="selected" disabled="disabled">STATE</option>
          
          
          </select>
        </div>
        <div class="col-xs-4 pl-0">
          <select required="" class="form-control plr-5-imp" required="required" name="district" id="district" >
          <option selected="selected" disabled="disabled">DISTRICT</option>
</select>

        </div>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
            <input style="position: relative; margin-left: 0px; " type="checkbox" id="terms" name="terms" required="">
            I agree to the <a href="#">terms</a> </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" onclick="Validate()">Register</button>
        </div>
        <!-- /.col -->
      </div>

    </form>
    <a href="<?php echo base_url();?>" class="text-center">I already have a account</a> </div>
  <!-- /.form-box -->
</div>
</div>
</div>
<!-- /.register-box -->
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
<script type="text/javascript">
  $( document ).ready(function() {
    
    
});
  function showreg(obj){
	  //alert(obj);
	  $("#regid").prop('disabled', true);
     if(obj==2 || obj==3 || obj==4){
     
     //document.getElementById("regno").style.display = "block";
     $("#regid").prop('disabled', false);
	 if(obj==2){
     document.getElementById("regid").placeholder = "Enter Student Regno";
     $("#regid").prop('disabled', false);
     }
	 else if(obj==3){
    $('#regid').attr('placeholder','Enter Parent Regno');
    $("#regid").prop('disabled', false);
	 }
	 else if(obj==4){
    $('#regid').attr('placeholder','Enter Staff Regno');
    $("#regid").prop('disabled', false);
	 }
	 
	 }

  }
  function getState(country)
    {
      //alert(country);
    $.ajax({
          type:'post',
        url:'<?php echo base_url('welcome/getState');?>',
        data:{country:country},
        success:function (result)
        {
          $('#state').html(result);
          
          
        },
        error:function (result){
          //showAlert('modal-full-color-danger',result);  
        }
      }); 
    }

  function Validate() {
    var regnoc=$('#checkreg').val();
    var checktype=$('#checktype').val();

    
		var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("cpassword").value;
  		var utype = $('#utype').val();
        var regid = $('#regid').val();
    	var fname = $('#fname').val();
	  	var lname = $('#lname').val();
	  	var email = $('#email').val();
	  	var password = $('#password').val();
	  	var cpassword = $('#cpassword').val();
    	var mobile = $('#mobile').val();
    	var gender = $('#gender').val();
  
   		 var terms = $('#terms').val();
		 
	   if(regnoc<1){
     
      $('#msg').text("This registration no not exist");
          setTimeout(location.reload.bind(location), 1000);
        }
        else if(checktype!= utype){
                $('#msg').text("This User type is not match too Registration no");

         // alert("This User type is not match too Registration no");
          setTimeout(location.reload.bind(location), 2000);
        }
    
     if(utype == "")
     {
	  $('#utype').css('border-color', 'red');
	 $( "#utype" ).focus();
     return false;
     }
	 else if(regid == "")
     {
	  $('#regid').css('border-color', 'red');
	 $( "#regid" ).focus();
     return false;
     }
    
     if(fname == "")
     {
		   
	  $('#fname').css('border-color', 'red');
	 $( "#fname" ).focus();
     return false;
     }
     if(lname == "")
     {
     $('#lname').css('border-color', 'red');
    $( "#lname" ).focus();
     return false;
     }
	 if(email == "")
     {
     $('#email').css('border-color', 'red');
     $( "#email" ).focus();
     return false;
     }
     if(mobile == "")
     {
     $('#mobile').css('border-color', 'red');
    $( "#mobile" ).focus();
     return false;
     }
	 
	 if(password == "")
     {
     $('#password').css('border-color', 'red');
    $( "#password" ).focus();
     return false;
     }
	  if(mobile == "")
     {
     $('#mobile').css('border-color', 'red');
    $( "#mobile" ).focus();
     return false;
     }
	 if(gender == "")
     {
     $('#gender').css('border-color', 'red');
     $( "#gender" ).focus();
     return false;
     }
	 if(terms == 'off')
     {
     $('#terms').css('border-color', 'red');
     $( "#terms" ).focus();
     return false;
     }
	    
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        
        return true;
                
}
function getCity(state)
    {
      //alert(state);
    $.ajax({
          type:'post',
        url:'<?php echo base_url('welcome/getCity');?>',
        data:{state:state},
        success:function (result)
        {
          $('#district').html(result);
         
          
        },
        error:function (result){
         // showAlert('modal-full-color-danger',result);  
        }
      }); 
    }
    function checkregister(f){
     // alert(f);
      $.ajax({
          type:'post',
        url:'<?php echo base_url('welcome/getregistration');?>',
        data:{f:f},
        success:function (result)
        {
          //alert(result[0]);
          $('#checkreg').val(result[1]);
           $('#checktype').val(result[0]);
         
          
        },
        error:function (result){
         // showAlert('modal-full-color-danger',result);  
        }
      }); 
    }

</script>

</body>
</html>
