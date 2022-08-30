<?php include 'include/top.php';?>
<?php include 'include/header.php';?>
<?php include 'include/leftmenu.php';?>
 <!-- Content Wrapper. Contains page content -->
 <style>
#snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
</style>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Latest News
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>  Principal’s Management </a></li>
    
        <li class="active"> Latest News  </li>
      </ol>
    </section>

       <!-- Main content -->
  <section class="content">

     
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Add Latest News </h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
         
			<form action="<?php echo base_url('index.php/welcome/save_latestnews');?>" method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="box-body">
               <div class="form-group mb-0-imp">
                
                  <div class="col-sm-6 col-sm-offset-3">
                     <input type="text" class="form-control" id="newstitle" name="newstitle" placeholder="News Title" required="">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-6 col-sm-offset-3">
                    <textarea class="form-control" placeholder="News Description" id="description" name="description" required=""></textarea> 
                  </div>
                </div>
				 <div class="form-group">
                 
                  <div class="col-sm-6 col-sm-offset-3">
                    <select required class="form-control" name="position" id="position" required="">
                      <option selected>Select Slider Position</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option class="5">5</option>
					  <option class="6">6</option>
					  <option class="7">7</option>
					  <option class="8">8</option>
                    </select>
                  </div>
                </div>
                
        
               
                <div class="form-group">
                  <div class="col-sm-6 col-sm-offset-3">
                    <button type="submit" class="btn btn-info" onclick="myFunction()"><i class="fa fa-floppy-o" aria-hidden="true"></i> <strong>Save</strong></button>
                    <button type="reset" class="btn btn-default" ><i class="fa fa-times" aria-hidden="true"></i> <strong>Reset</strong></button> 
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
          <h3 class="box-title">Latest News List</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        
        
        <div class="box-footer">
          
            
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 20%;">News Title</th>
                  <th>News Description</th>
                  <th style="width: 12%;">Slide Position </th>
                  <th style="width: 10%;">Date</th>
                  <th style="width: 10%;">Action</th>
                </tr>
               <?php if(!empty($latestnews)) {foreach($latestnews as $row){
               echo  '<tr>
                 
                  <td>'.$row->newstitle.'</td>
                  <td>'.$row->description.'</td>
                  <td>'.$row->position.'</td>
                  <td>'.$row->date.'</td>
                 
                  <td>
                     <div class="btn-group">';
					 if($row->active=='Y'){
					 echo '<button title="Active" type="button" class="btn btn-info btn-xs"><i class="fa fa-check"></i></button>';}
                     else{
					 echo '<a href="dataactivate?id='.$row->id.' &status='.$row->active.'"><button title="Deactive" type="button" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>';}
                    echo ' <a href="deleteLatestnews?id='.$row->id.'"><button title="Delete" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash "></i></button></a>
                    </div>
                  </td>
			   </tr>';}}?>


              </table>
            </div>
            
          
        </div>
      </div>
      

    </section>
    
    
  </div><div id="snackbar">Some text some message..</div>
      <!-- /.content-wrapper -->
	  <script>
function myFunction() {
  var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>
<?php include 'include/footer.php';?>
<?php include 'include/bottom.php';?>