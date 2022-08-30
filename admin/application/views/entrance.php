<?php include 'include/top.php';?>
<?php include 'include/header.php';?>
<?php include 'include/leftmenu.php';?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Entrance Test
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>  Principal’s Management   </a></li>    
        <li class="active">Entrance Test</li>
      </ol>
    </section>

    <!-- Main content -->
  
  <section class="content">

     
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Add Entrance Test </h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
         
			<form action="<?php echo base_url('index.php/welcome/save_entrance');?>" method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="box-body">

               <div class="form-group mb-0-imp">
                  <div class="col-sm-6 col-sm-offset-3">
                     <input type="text" class="form-control" id="title" name="title" placeholder="Entrance Title">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-6 col-sm-offset-3">
				    <textarea class="form-control" placeholder="Entrance Description" id="description" name="description"></textarea> 

                  </div>
                </div>
        
                <div class="form-group">
                  <div class="col-sm-6 col-sm-offset-3">
                    <button type="submit" class="btn btn-info"><i class="fa fa-floppy-o" aria-hidden="true"></i> <strong>Save</strong></button>
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
          <h3 class="box-title">Entrance Test List</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        
        
        <div class="box-footer">
          
            
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 20%;">Entrance Title</th>
                  <th>Entrance Description</th>
                  <th>Date</th>
                  <th style="width: 10%;">Action</th>
                </tr>
                <tr>
                 
                                
                 <?php if(!empty($entrance)) {foreach($entrance as $row){
               echo  '<tr>
                 
                  <td>'.$row->title.'</td>
                  <td>'.$row->description.'</td>
                  <td>'.$row->date.'</td>
                 
                  <td>
                     <div class="btn-group">
                      <button title="Active" type="button" class="btn btn-info btn-xs"><i class="fa fa-check"></i></button>
                     <button title="Deactive" type="button" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                      <a href="deleteentrance?id='.$row->id.'"><button title="Delete" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash "></i></button></a>
                    </div>
                  </td>
			   </tr>';}}?>

              

              </table>
            </div>
            
          
        </div>
      </div>
      

    </section>
    
    
  </div>
      <!-- /.content-wrapper -->
<?php include 'include/footer.php';?>
<?php include 'include/bottom.php';?>