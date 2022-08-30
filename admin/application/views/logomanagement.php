
<?php include 'include/top.php';
include 'include/header.php';
 include 'include/leftmenu.php';?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Logo Management 
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Header Management</a></li>
    
        <li class="active"> Logo Management </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Add Previus Paper Box -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Update Logo</h3>

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
            <form class="form-horizontal" action="<?php echo base_url('index.php/welcome/save_logo');?>" method="post" enctype="multipart/form-data">
              <div class="box-body">
               
                <div class="form-group">
                  <div class="col-sm-6 col-sm-offset-3">
                    <select  class="form-control" name="logocat" id="logocat" required="">
                        <option selected="selected" disabled >Select Logo Category</option> 
													
                              <option value="College Logo">College Logo</option>
                              <option value="Brand Logo - 1">Brand Logo - 1</option>
                              <option value="Brand Logo - 2">Brand Logo - 2</option>
                              <option value="Brand Logo - 3">Brand Logo - 3</option>
                      </select>
                  </div>
                </div>
				
                <div class="form-group">
                  <div class="col-sm-6 col-sm-offset-3">
                      <label class="control-label pt-0">Upload Image</label>
                    </div>
                  <div class="col-sm-6 col-sm-offset-3">
                    <input type="file" class="form-control" id="image"  name="image" title="Upload Image" required="">
                  </div>
                </div>
				<div class="form-group">
                  <div class="col-sm-6 col-sm-offset-3">
                    <select required="" class="form-control" name="is_show" id="is_show">
                        <option selected="selected" disabled>Is Show</option>                      
                              
                              <option value="Y">Yes</option>
                              <option value="N">No</option>
                              
                      </select>
                  </div>
                </div>
				
               
                <div class="form-group">
					<div class="col-sm-6 col-sm-offset-3">
						<button type="submit" class="btn btn-info"><i class="fa fa-floppy-o" aria-hidden="true"></i> <strong>Update</strong></button>
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
          <h3 class="box-title">Logo List</h3>

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
                  <th>Logo Category</th>
                  <th>Logo Image</th>
                  
                  <th style="width: 65px">Action</th>
                </tr>
                <?php if(!empty($logo)) {foreach($logo as $row){
               echo  '<tr>
                  
				  <td>'.$row->logocat.'</td>
                  
				  <td> <img src="../../admin/uploads/logo/'.$row->image.'" style="width: 50px; height:50px;"   class="user-image" alt="Slider"> </td>

                  <td>
                     <div class="btn-group">
                      <button title="Delete" type="button" class="btn btn-info btn-xs"><i class="fa fa-pencil-square "></i></button>
                      <a href="deletelogo?id='.$row->id.'"><button title="Delete" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash "></i></button></a>
                    </div>
                  </td>
                </tr>';
				}} ?>
               
              </table>
            </div>
            <!-- /.box-body -->
          
        </div>
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <?php include 'include/footer.php';
include 'include/bottom.php';?>