<?php include 'include/top.php';?>
<?php include 'include/header.php';?>
<?php include 'include/leftmenu.php';?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
Change Password
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Setting </a></li>
    
        <li class="active">   Change Password  </li>
      </ol>
    </section>

     <!-- Main content -->
    <section class="content">

      <!-- Add Previus Paper Box -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Change Password</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
         <!-- form start -->
            <form  action="<?php echo base_url('welcome/change_pass');?>" method="post" class="form-horizontal">
              <div class="box-body">

                <div class="form-group">
                  <div class="col-sm-6 col-sm-offset-3">
                  <input type="password" class="form-control" name="old_pass" id="old_pass" placeholder="Old Password" title="Old Password">
                 
                  </div>
                </div>
               
                <div class="form-group">
                  <div class="col-sm-6 col-sm-offset-3">
                  <input type="password" class="form-control" name="new_pass" id="new_pass"  placeholder="New Password" title="New Password">
                   <small>Use 8 or more characters with a mix of letters, numbers & symbols
</small>
                  </div>
                </div>
               
                <div class="form-group">
                  <div class="col-sm-6 col-sm-offset-3">
                   <input type="password" class="form-control" name="confirm_pass" id="confirm_pass" placeholder="Confirm Password" title="Confirm Password">
                   <small>Use 8 or more characters with a mix of letters, numbers & symbols
</small>
                  </div>
                </div>
               
                <div class="form-group">
                  <div class="col-sm-6 col-sm-offset-3">
                    <button type="submit" class="btn btn-info"><i class="fa fa-floppy-o" aria-hidden="true" name="change_pass"></i> <strong>Save</strong></button>
                    <button type="reset" class="btn btn-default"><i class="fa fa-times" aria-hidden="true"></i> <strong>Reset</strong></button> 
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              
            </form>
          
      </div>
            <!-- /.col -->
           
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        </div>
      <!-- /.box -->
  

    </section>
    <!-- /.content -->    
  </div>
      <!-- /.content-wrapper -->
<?php include 'include/footer.php';?>
<?php include 'include/bottom.php';?>