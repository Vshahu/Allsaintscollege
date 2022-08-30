<?php include 'include/top.php';
include 'include/header.php';
 include 'include/leftmenu.php';?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Contact Numberm, Email  &amp; Social Link 
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Header Management</a></li>
    
        <li class="active"> Update Contact Number, Email  &amp; Social Link </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Add Previus Paper Box -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Update Contact Number, Email  &amp; Social Link </h3>

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
            <form class="form-horizontal" action="<?php echo base_url('index.php/welcome/save_topbar');?>" method="post" enctype="multipart/form-data">
              <div class="box-body">
               
                <div class="form-group">
                  <div class="col-sm-6 col-sm-offset-3">
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Phone" required="">
                  </div>
                </div>
				
                <div class="form-group">
                  <div class="col-sm-6 col-sm-offset-3">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" required="">
                  </div>
                </div>
				
                <div class="form-group">
                  <div class="col-sm-6 col-sm-offset-3">
                    <input type="text" class="form-control" id="fburl" name="fburl" placeholder="Facebook URL" required="">
                  </div>
                </div>
				
                <div class="form-group">
                  <div class="col-sm-6 col-sm-offset-3">
                    <input type="text" class="form-control" id="twitterurl" name="twitterurl" placeholder="Twitter URL" required="">
                  </div>
                </div>
				
               
                <div class="form-group">
					<div class="col-sm-6 col-sm-offset-3">
						<button type="submit" class="btn btn-info"><i class="fa fa-floppy-o" aria-hidden="true" ></i> <strong>Update</strong></button>
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
	
	<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Contact Numberm, Email  &amp; Social Link List</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        
        <div class="box-footer">
          
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
				<th>#</th>
                  <th>Phone</th>
                  <th>Email</th>
                    <th>Facebook</th>
                  <th>Twitter</th>
                  <th style="width: 65px">Action</th>
                </tr>
				
				<?php $i=1; if(!empty($topbar)) {foreach($topbar as $row){
            echo     '<tr>
			<td>'.$i++.'</td>
                  <td>'.$row->mobile.'</td>
                  <td>'.$row->email.'</td>
                  <td>'.$row->fburl.'</td>
                  <td>'.$row->twitterurl.'</td>
                  <td>
                     <div class="btn-group">
                      <button title="Delete" type="button" class="btn btn-info btn-xs"><i class="fa fa-pencil-square "></i></button>
                      <a href="deletetopbar?id='.$row->id.'"><button title="Delete" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash "></i></button></a>
                    </div>
                  </td>
                </tr>';
				}} ?>
               </tr>
              </table>
            </div><div id="snackbar">Some text some message..</div>
            <!-- /.box-body -->
          
        </div>
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
   <?php include 'include/footer.php';
include 'include/bottom.php';?>