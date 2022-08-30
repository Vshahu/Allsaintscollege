<?php include 'include/top.php';?>
<?php include 'include/header.php';?>
<?php include 'include/leftmenu.php';?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Principal’s  Message &amp; Vedio
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>  Principal’s  Management </a></li>
    
        <li class="active">   Principal’s  Message &amp; Vedio  </li>
      </ol>
    </section>

    <!-- Main content -->
  <section class="content">

     
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Message &amp; vedio </h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
				 
				 <form action="<?php echo base_url('welcome/save_messagevideo');?>" method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="box-body">
               
                <div class="form-group">
                  <div class="col-sm-6 col-sm-offset-3">
                    <textarea class="form-control" placeholder="Add Principal’s  Message" id="message" name="message" required=""></textarea> 
                  </div>
                </div>
				
                <div class="form-group mb-0-imp">
                
                  <div class="col-sm-6 col-sm-offset-3">
                     <input type="text" class="form-control" id="linkvideo" name="linkvideo" placeholder="Add Video Link" required="">
                  </div>
                </div>
        
             <!--   <div class="form-group mb-0-imp">
                  <div class="col-sm-6 col-sm-offset-3">
                      <label class="control-label pt-0">OR</label>
                    </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-6 col-sm-offset-3">
                      <label class="control-label pt-0">Upload Video</label>
                    </div>
                  <div class="col-sm-6 col-sm-offset-3">
                    <input type="file" class="form-control" id="video" name="video" title="Upload Video">
                  </div>
                </div>-->
				
               
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
          <h3 class="box-title">Principal’s Message & Vedio List</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        
        
        <div class="box-footer">
          
            
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th>Principal’s  Message </th>
                  <th>Video Link</th>
                  <th>Last Updated</th>
                  <th style="width: 80px">Action</th>
                </tr>
                <?php if(!empty($messagevedio)) {foreach($messagevedio as $row){
               echo  '<tr>
                  
				  <td>'.$row->message.'</td>
                  <td>'.$row->linkvideo.' </td>
				  <td>'.$row->date.' </td>
                  <td>
                     <div class="btn-group">
                      <button title="Delete" type="button" class="btn btn-info btn-xs"><i class="fa fa-pencil-square "></i></button>
                      <a href="deletemessagevedio?id='.$row->id.'"><button title="Delete" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash "></i></button></a>
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