<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Student | Allsaintscollege</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ionicons.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/all.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/vpjs.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/blue.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
   
    <a href="<?php echo base_url('welcome/student');?>" class="logo">
     
      <span class="logo-mini"><b>A</b>C</span>
      <span class="logo-lg"><b>Allsaints College</b> </span>
    </a>
 
    <nav class="navbar navbar-static-top">
     
   
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
         
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url();?>assets/img/user2-160x160.jpg" class="user-image" alt="user">
			  <span class="hidden-xs"><?php $username = $this->session->userdata('fname'); if(isset($username)){echo $this->session->userdata('fname');}else{redirect('login');} ?>
               </span>
            </a>
          
          </li>
       <li class="user user-menu">
        <a href="<?php echo base_url('login/logout');?>">
          <span class="hidden-xs"><i class="fa fa-sign-out"></i> Logout</span>
        </a>
      </li>
       
        </ul>
      </div>
    </nav>
  </header>
  
  <div class="content-wrapper ml-0">
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
		  <?php foreach($studentl->result() as $row){?>
          <div class="box box-primary">
            <div class="box-body box-profile shadow-1">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url();?>assets/img/user1-128x128.jpg" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $row->fname;  echo ' '; echo $row->lname ;  ?></h3>
              <p class="text-muted text-center"><?php echo $row->regid;  ?></p>
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>MOBILE</b> <a class="pull-right"><?php echo $row->mobile;  ?></a>
                </li>
                <li class="list-group-item">
                  <b>EMAIL</b> <a class="pull-right"><?php echo $row->email;  ?></a>
                </li>
                <li class="list-group-item">
                  <b>DATE OF BIRTH</b> <a class="pull-right"><?php echo $row->dob;  ?></a>
                </li>
                <li class="list-group-item">
                  <b>PARENT NAME</b> <a class="pull-right">RAHUL PRAKASH</a>
                </li>
                <li class="list-group-item">
                  <b>PARENT MOBILE</b> <a class="pull-right">9540701111</a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>DOWNLOAD FEES DETAIL</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary shadow-1">
            <div class="box-header with-border ">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">
                B.S. in Computer Science from the University of Tennessee at Knoxville
              </p>
              <hr class="mtb-5">

              <strong><i class="fa fa-map-marker margin-r-5"></i>Current Address</strong>

              <p class="text-muted"><?php echo $row->address;  ?></p>
              <hr class="mtb-5">

              <strong><i class="fa fa-map-marker margin-r-5"></i>Parmanent Address</strong>

              <p class="text-muted"><?php echo $row->address;  ?></p>             
              <hr class="mtb-5">
              <a href="#" class="btn btn-primary btn-block"><b>DOWNLOAD RESULT</b></a>
              
            </div>
            <!-- /.box-body -->
          </div>
		  <?php }?>
          <!-- /.box -->
		  </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom shadow-1">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">STAFF MESSAGES</a></li>
             <!--  <li><a href="#timeline" data-toggle="tab">Events</a></li> -->
              <li><a href="#settings" data-toggle="tab">UPDATE PROFILE DETAILS</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="<?php echo base_url();?>assets/img/user1-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="#">Rakesh Sinha</a>                          
                        </span>
                    <span class="description">Physics Teacher - 7:30 PM today</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                  </p>
                  
                </div>
                <!-- /.post -->

                <!-- Post -->
                <div class="post clearfix">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="<?php echo base_url();?>assets/img/user7-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Sarah Ross</a>
                       
                        </span>
                    <span class="description">Math Teacher - 3 days ago</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                  </p>
                  <div class="row">
                    <div class="col-sm-6 mb-20">
                      <img class="img-responsive" src="<?php echo base_url();?>assets/img/photo1.png" alt="Photo">
                    </div>
                   
                  </div>
                 
                  
                </div>
                <!-- /.post -->

               
              </div>
              <!-- /.tab-pane -->
            <!--   <div class="tab-pane" id="timeline">
              
                <ul class="timeline timeline-inverse">
               
                  <li class="time-label">
                        <span class="bg-red">
                          10 Feb. 2014
                        </span>
                  </li>
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                      <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                      <div class="timeline-body">
                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                        weebly ning heekya handango imeem plugg dopplr jibjab, movity
                        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                        quora plaxo ideeli hulu weebly balihoo...
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs">Read more</a>
                        <a class="btn btn-danger btn-xs">Delete</a>
                      </div>
                    </div>
                  </li>
                
                  <li>
                    <i class="fa fa-user bg-aqua"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                      <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                      </h3>
                    </div>
                  </li>
                
                  <li>
                    <i class="fa fa-comments bg-yellow"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                      <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                      <div class="timeline-body">
                        Take me to your leader!
                        Switzerland is small and neutral!
                        We are more like Germany, ambitious and misunderstood!
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                      </div>
                    </div>
                  </li>
                 
                  <li class="time-label">
                        <span class="bg-green">
                          3 Jan. 2014
                        </span>
                  </li>
                 
                  <li>
                    <i class="fa fa-camera bg-purple"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                      <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                      <div class="timeline-body">
                        <img src="img/150x100" alt="..." class="margin">
                        <img src="img/150x100" alt="..." class="margin">
                        <img src="img/150x100" alt="..." class="margin">
                        <img src="img/150x100" alt="..." class="margin">
                      </div>
                    </div>
                  </li>
                  
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul>
              </div> -->
             

              <div class="active tab-pane" id="settings">
                <div id="msg"></div>

			  		  <?php foreach($studentl->result() as $row){?>
<?php //var_dump($studentl->result()); ?>
                <form class="form-horizontal" method="post">
                  <div class="form-group">
                    <label for="inputFName" class="col-sm-3 control-label">First Name</label>

                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" value="<?php echo $row->fname;?> ">
                    </div>
					<div class="col-sm-4">
                      <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name"value="<?php echo $row->lname;?> ">
                    </div>
                  </div>
				  
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-8">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $row->email;?> ">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputMobile" class="col-sm-3 control-label">Mobile</label>

                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" value="<?php echo $row->mobile;?> ">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="alternatemobile" name="alternatemobile" placeholder="Alternate Mobile" value="<?php echo $row->alternatemobile;?> ">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEducation" class="col-sm-3 control-label">Education</label>

                    <div class="col-sm-8">
                      <textarea class="form-control" id="eduction" name="education" placeholder="Education">
                        <?php echo $row->education;?> </textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputCAddress" class="col-sm-3 control-label">Address</label>

                    <div class="col-sm-4">
                      <textarea class="form-control" id="currentaddress" name="currentaddress" placeholder="Current Address" ><?php echo $row->address; ?></textarea>
                    </div>
                    <div class="col-sm-4">
                      <textarea class="form-control" id="parmanentAddress" name="parmanentAddress" placeholder="Parmanent Address" ><?php echo $row->parma_address; ?></textarea>
                    </div>
                  </div>
                 <!--  <div class="form-group">
                    <label for="inputMobile" class="col-sm-3 control-label">Country /State</label>
                    <div class="col-sm-4">
                      <select required="" id="" class="form-control">
                      <option selected="">Select Country</option>
                      <option value="India">India</option>
                    </select>
                    </div>
                    <div class="col-sm-4">
                      <select required="" id="" class="form-control">
                      <option selected="">Select State</option>
                      <option value="India">Delhi</option>
                      <option value="India">Utter Pradesh</option>
                      <option value="India">Madhya Pradesh</option>
                    </select>
                    </div>
                   
                  </div>
                  <div class="form-group">
                    <label for="inputMobile" class="col-sm-3 control-label">City / Dist</label>
                    <div class="col-sm-4">
                      <select required="" id="" class="form-control">
                      <option selected="">Select City</option>
                      <option value="India">New Delhi</option>
                      <option value="India">Noida</option>
                    </select>
                    </div>
                    <div class="col-sm-4">
                      <select required="" id="" class="form-control">
                      <option selected="">Select Dist</option>
                      <option value="India">Gautam Buddha Nagar</option>
                      <option value="India">Ayodhya</option>
                      <option value="India">Gorakhpur</option>
                    </select>
                    </div>
                  </div> -->

                  <div class="form-group">
                    <label for="inputProfilePic" class="col-sm-3 control-label">Profile Photo</label>

                    <div class="col-sm-8">
                         <input type="text" name="resumeUrl" id="resumeUrl"  >

                      <input type="file" class="form-control" id="profilephoto"name="profilephoto" onChange="resumeUpload(this.value,this);">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-8">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="checkcon" id="checkcon"> I agree to the <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div>                    
                  <input type="hidden" id="eid" name="eid" value="<?php echo $_GET['id'];?>">

                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-8">
                      <button type="submit" class="btn btn-info" onclick="save()">Submit</button>
                      <button type="reset" class="btn btn-danger">Cancel</button>
                    </div>
                  
                  </div>
                </form>
					  <?php }?>
</div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer ml-0">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.4.1
    </div>
    <strong>Copyright &copy; 2019 <a href="#">VPN </a>.</strong> All rights
    reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/select2.full.min.js"></script>

<script src="<?php echo base_url();?>assets/js/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url();?>assets/js/icheck.min.js"></script>
<script src="<?php echo base_url();?>assets/js/fastclick.js"></script>
<script src="<?php echo base_url();?>assets/js/vpjs.min.js"></script>
<script src="<?php echo base_url();?>assets/js/ckeditor.js"></script>

<!-- demo -->
<script src="js/demo.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

  })
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    CKEDITOR.replace('editor1')
  
  })
</script>
<script type="text/javascript">

  function resumeUpload(val,obj){

    var ext=obj.files[0].name.substr(obj.files[0].name.lastIndexOf('.') + 1);
    if(((obj.files[0].size)/1048576)>10){
        alert("Please Add jpg ,jpeg,png, extension only ");
    }else if(!(ext=="jpg" || ext=="jpeg" || ext=="png" )){
        alert("Please Add jpg ,jpeg,png, extension only ");
    }else{
       
        var form_data=new FormData();
        form_data.append('action','resumeUpload');
        form_data.append('file',obj.files[0]);
        $.ajax({
            url: '<?php echo base_url('welcome/resumeUpload'); ?>', // point to server-side PHP script 
            dataType: 'html', // what to expect back from the PHP script
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {

         
 $("#resumeUrl").val(response);
//                                var response=JSON.parse(data);
               
            },
            error: function (response) {
                alert("Check Internet Connection");
            }
        });
    }
}
function save(){
  var id=$('#eid').val();
      var fname = $('#fname').val();
	    var lname = $('#lname').val();
      var email = $('#email').val();
      var mobile = $('#mobile').val();
      var alternatemobile = $('#alternatemobile').val();
      var eduction = $('#eduction').val();
      var currentaddress = $('#currentaddress').val();
      var parmanentAddress = $('#parmanentAddress').val();
      var resumeUrl = $('#resumeUrl').val();
      var checkcon = $('#checkcon').val();
     // alert(fname);
	   if(fname==''){
		   $('#fname').css('border-color', 'red');
       $( "#fname" ).focus();
	   
	   }
      if(lname==''){
       $('#lname').css('border-color', 'red');
       $( "#lname" ).focus();
     
     }
      if(email==''){
       $('#email').css('border-color', 'red');
       $( "#email" ).focus();
     
     }
     
         $.ajax({
                type:'POST',
                url:'<?php echo base_url('welcome/savestudent'); ?>',
                data:{'id':id,'fname':fname,'lname':lname,'email':email,'mobile':mobile,'alternatemobile':alternatemobile,'eduction':eduction,'currentaddress':currentaddress,'parmanentAddress':parmanentAddress,'resumeUrl':resumeUrl,'checkcon':checkcon},
                
				success:function(result)
				{  
				alert(result);
				if(result=="success"){
			   $("#msg").html("Register successfully");
				
				}else
				{
					$("#msg").html("Server Error try again");
						
				}
				
				},
				error:function(result)
				{  
				$("#msg").html(result);
					
				}
				
				}); 
         
  }
</script>
</body>
</html>