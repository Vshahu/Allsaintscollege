<?php include 'include/top.php';?>
<?php include 'include/header.php';?>
<?php include 'include/leftmenu.php';?>
  
  <div class="content-wrapper ml-0">
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile shadow-1">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url();?>assets/img/user1-128x128.jpg" alt="User profile picture">

              <h3 class="profile-username text-center">Vipin Patel</h3>
              <p class="text-muted text-center">SID9169971999</p>
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>MOBILE</b> <a class="pull-right">9169971999, 9169971999</a>
                </li>
                <li class="list-group-item">
                  <b>EMAIL</b> <a class="pull-right">support@vipinpatel.in</a>
                </li>
                <li class="list-group-item">
                  <b>DATE OF BIRTH</b> <a class="pull-right">AUGUST-09-1995</a>
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

              <p class="text-muted">C-217, Noida, India</p>
              <hr class="mtb-5">

              <strong><i class="fa fa-map-marker margin-r-5"></i>Parmanent Address</strong>

              <p class="text-muted">C-217, Noida, India</p>             
              <hr class="mtb-5">
              <a href="#" class="btn btn-primary btn-block"><b>DOWNLOAD RESULT</b></a>
              
            </div>
            <!-- /.box-body -->
          </div>
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
              <div class="active tab-pane" id="activity">
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
             

              <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputFName" class="col-sm-3 control-label">Full Name</label>

                    <div class="col-sm-8">
                      <input type="email" class="form-control" id="inputFName" placeholder="Full Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-8">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputMobile" class="col-sm-3 control-label">Mobile</label>

                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputMobile" placeholder="Mobile">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputName" placeholder="Ultername Mobile">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEducation" class="col-sm-3 control-label">Education</label>

                    <div class="col-sm-8">
                      <textarea class="form-control" id="inputEducation" placeholder="Education"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputCAddress" class="col-sm-3 control-label">Address</label>

                    <div class="col-sm-4">
                      <textarea class="form-control" id="inputCAddress" placeholder="Current Address"></textarea>
                    </div>
                    <div class="col-sm-4">
                      <textarea class="form-control" id="inputPAddress" placeholder="Parmanent Address"></textarea>
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
                      <input type="file" class="form-control" id="inputProfilePic">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-8">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-8">
                      <button type="submit" class="btn btn-info">Submit</button>
                      <button type="reset" class="btn btn-danger">Cancel</button>
                    </div>
                  
                  </div>
                </form>
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
</body>
</html>