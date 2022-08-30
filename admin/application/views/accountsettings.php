<?php include 'include/top.php';?>
<?php include 'include/header.php';?>
<?php include 'include/leftmenu.php';?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Account Settings
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Settings </a></li>
    
        <li class="active">  Account Settings </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

     
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Update Account</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
				 
				 <form action="<?php echo base_url('welcome/save_acountsetting');?>" method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="box-body">
               
                <div class="form-group">
                  <div class="col-sm-6 col-sm-offset-3">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name"required>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-6 col-sm-offset-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-6 col-sm-offset-3">
                    <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Mobile" required>
                  </div>
                </div>
				
                <div class="form-group">
                  <div class="col-sm-6 col-sm-offset-3">
                      <label class="control-label pt-0">Upload Image</label>
                    </div>
                  <div class="col-sm-6 col-sm-offset-3">
                    <input type="file" class="form-control" id="image" name="image" required>
                  </div>
                </div>
				
               
                <div class="form-group">
					<div class="col-sm-6 col-sm-offset-3">
						<button type="submit" class="btn btn-info"><i class="fa fa-floppy-o" aria-hidden="true"></i> <strong>Update</strong></button>
						<button type="reset" class="btn btn-default"><i class="fa fa-times" aria-hidden="true"></i> <strong>Reset</strong></button>	
					</div>
				</div>
              </div>
              
              
            </form>
          
			</div>
            
           
          </div>

        </div>
       
        </div>
      
	
	<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Admin List</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        
        
        <div class="box-footer">
          
            
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Image</th>
                  <th style="width: 65px">Action</th>
                </tr>
                <?php if(!empty($accountsettings)) {foreach($accountsettings as $row){
               echo  '<tr>
                  
				  <td>'.$row->name.'</td>
                  <td>'.$row->email.' </td>
				  <td>'.$row->mobile.' </td>
				  <td> <img src="../../admin/uploads/accountSetting/'.$row->image.'" style="width: 50px; height:50px;"   class="user-image" alt="Slider"> </td>

                  <td>
                     <div class="btn-group">
                      <button title="Delete" type="button" class="btn btn-info btn-xs"><i class="fa fa-pencil-square "></i></button>
                      <a href="deletedata?id='.$row->id.'"><button title="Delete" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash "></i></button></a>
                    </div>
                  </td>
                </tr>';
				}} ?>
               
              </table>
            </div>
            
          
        </div>
      </div>
      

    </section>
    
  </div>
 
      <!-- /.content-wrapper -->
<?php include 'include/footer.php';?>
<?php include 'include/bottom.php';?>