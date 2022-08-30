<?php include 'include/top.php';?>
<?php include 'include/header.php';?>
<?php include 'include/leftmenu.php';?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Latest Events
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>   Latest Events</a></li>
    
        <li class="active">  Latest Events </li>
      </ol>
    </section>
    <!-- Main content -->
     <section class="content">

      <!-- Add Previus Paper Box -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Latest Events Slider</h3>

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
				 <form action="<?php echo base_url('welcome/save_latesteventslider');?>" method="post" enctype="multipart/form-data" class="form-horizontal">
             
              <div class="box-body">
                <div class="form-group">
                 
                  <div class="col-sm-7 col-sm-offset-3">
                    <select required class="form-control" name="position" id="position" required="">
                      <option selected>Select Slider Position</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option class="5">5</option>
                    </select>
                  </div>
                </div>
               
				
				<div class="form-group">
               <!--    <label for="" class="col-sm-3 control-label">Select Paper file</label> -->
                  <div class="col-sm-7  col-sm-offset-3">
						<input type="file" class="form-control" id="image" name="image" required="">
                  </div>
                </div>
                <div class="form-group">
					<div class="col-sm-7 col-sm-offset-3">
						<button type="submit" class="btn btn-info"><i class="fa fa-floppy-o" aria-hidden="true"></i> <strong>Save</strong></button>
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
          <h3 class="box-title">Latest Events List</h3>

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
				
                  <th>Slider Position</th>
                  <th>Slider Icon	</th>
                  <th style="width: 65px">Action</th>
                </tr>
				<?php if(!empty($latestevents)) {foreach($latestevents as $row){
               echo  '<tr>
                  
				  <td>'.$row->sliderOrder.'</td>
                  <td> <img src="../../admin/uploads/latesteventslider/'.$row->imgName.'" style="width: 50px; height:50px;"   class="user-image" alt="Slider"> </td>
                  <td>
                     <div class="btn-group">
                      <button title="Delete" type="button" class="btn btn-info btn-xs"><i class="fa fa-pencil-square "></i></button>
                      <a href="deletelatestevent?id='.$row->id.'"><button title="Delete" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash "></i></button></a>
                    </div>
                  </td>
                </tr>';
				}} ?>
               </tr>
               
                  
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
         
        </div>
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
    
  </div>
      <!-- /.content-wrapper -->
<?php include 'include/footer.php';?>
<?php include 'include/bottom.php';?>