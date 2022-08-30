<?php include 'include/top.php';?>
<?php include 'include/header.php';?>
<?php include 'include/leftmenu.php';?>

        <div class="content-wrapper">
  
    <section class="content">
        <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Add Staff</h3>

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
            <form class="form-horizontal">
              <div class="box-body">
               
                <div class="form-group">
                    <!--<label for="" class="col-sm-3 control-label">Enter Exam Title</label>-->
					
                  <div class="col-sm-6 col-sm-offset-3">
				  <div id="msg"></div>
				   <input type="hidden"  id="type" name="type" value="4">
                    <input type="text" class="form-control" id="regno" name="regno" placeholder="Add employee id" required="">
                  </div>
                </div>
			
				
                <div class="form-group">
					<div class="col-sm-6 col-sm-offset-3">
						<button type="submit" class="btn btn-info" onclick="save()"><i class="fa fa-plus-circle" aria-hidden="true"></i> <strong>Add</strong></button>
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
     
  
      <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Staff List</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div>

            <div class="box-footer p-0">

                <!-- /.box-header -->
                <div class="box-body p-0">
                  <table class="table table-bordered">
                    <tr>
                      <th>EMP ID</th>
                      <th>NAME</th>
                      <th>PHOTO</th>
                      <th>EMAIL</th>
                      <th>PHONE</th>
                      <th>GENDER</th>
                      <th>DOB</th>
                      <th>ADDRESS</th>
                      <th style="width: 100px">Action</th>
                    </tr>
					<?php foreach($staffl->result() as $row){?>
                    <tr>
                      <td><?php echo $row->regid;  ?></td>
                      <td><?php echo $row->fname;  echo ' '; echo $row->lname ;  ?></td>
                      <td> <img src="<?php echo base_url();?>assets/img/user2-160x160.jpg" style="width: 23px;"  class="user-image" alt="Slider"> </td>
                      <td><a href="mailTo:support@vipinpatel.in"><?php echo $row->email;?></td>
                      <td><?php echo $row->mobile;  ?></td>
                      <td><?php echo $row->gender;  ?></td>
                      <td><?php echo $row->dob;  ?></td>
                      <td><?php echo $row->address;  ?></td>
                      <td>
                         <div class="btn-group">
                          <button title="Click To Active Account" type="button" class="btn btn-success btn-xs"><i class="fa fa-check" ></i></button>
                          <!-- <button title="Delete" type="button" class="btn btn-info btn-xs"><i class="fa fa-pencil-square "></i></button>
                          --><button title="Delete" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash "></i></button>
                        </div>
                      </td>
                    </tr>
					<?php }?>
                      
                    
                    


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
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.4.1
        </div>
        <strong>Copyright &copy; 2018 <a href="#">VPN </a>.</strong> All rights
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

<script src="<?php echo base_url();?>assets/js/demo.js"></script>
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
<script type='text/javascript'>
function save(){
      //alert( "Change" );
       var regno = $('#regno').val();
	   var type = $('#type').val();
	   if(regno==''){
		   $("#msg").html("Enter Registration No");
	   //$('#msg').val()="Duplicate Registration No";
	   }
	   //alert(regno);
         else {
			 $.ajax({
                type:'POST',
                url:'<?php echo base_url('index.php/welcome/savestaffreg'); ?>',
                data:{'regno':regno,'type':type},
                // success:function(data){
                    // $('#resultdiv').html(data);
                // }
				success:function(result)
				{  
				//alert(result);
				if(result=="success"){
				$("#msg").html("Register successfully");
				//alert('Register successfully');  
				}else
				{
					$("#msg").html("Server Error try again");
					//alert('Server Error try again');   	
				}
				
				},
				error:function(result)
				{  
				$("#msg").html("Duplicate Registration No");
				$("#msg").delay(10000).fadeIn();
					//alert('Duplicate Registration No not allow'); 
				}
				
				}); 
		 }				
  }
  function activeStatus(){

   var statusv = $('#statusv').val();
   
   var id = $('#sid').val();
   //alert(id);
  $.ajax({
                type:'POST',
                url:'<?php echo base_url('index.php/welcome/active'); ?>',
                data:{'status':status,'id':id},
                // success:function(data){
                    // $('#resultdiv').html(data);
                // }
				success:function(result)
				{  
				//alert(result);
				if(result=="success"){
			
				alert('Activate successfully');  
				}else
				{
					alert('Server Error try again');   	
				}
				
				},
				error:function(result)
				{  
					alert('Server Error try again'); 
				}
				
				});  
 
	  
  }
  function deactiveStatus(obj1,obj2){
	  alert(obj1);
	  alert(obj2);

   // var status = $('#status').val();
   // var id = $('#sid').val();
   // //alert(id);
  // $.ajax({
                // type:'POST',
                // url:'<?php echo base_url('index.php/welcome/activeDactive'); ?>',
                // data:{'status':status,'id':id},
                // // success:function(data){
                    // // $('#resultdiv').html(data);
                // // }
				// success:function(result)
				// {  
				// //alert(result);
				// if(result=="success"){
			
				// alert('De-Activate successfully');  
				// }else
				// {
					// alert('Server Error try again');   	
				// }
				
				// },
				// error:function(result)
				// {  
					// alert('Server Error try again'); 
				// }
				
				// });  
	   
  }
  function deactiveStatus(){

   var status = $('#status').val();
   var id = $('#sid').val();
   //alert(id);
  $.ajax({
                type:'POST',
                url:'<?php echo base_url('index.php/welcome/activeDactive'); ?>',
                data:{'status':status,'id':id},
                // success:function(data){
                    // $('#resultdiv').html(data);
                // }
				success:function(result)
				{  
				//alert(result);
				if(result=="success"){
			
				alert('De-Activate successfully');  
				}else
				{
					alert('Server Error try again');   	
				}
				
				},
				error:function(result)
				{  
					alert('Server Error try again'); 
				}
				
				});  
	   
  }
</script>
</body>
</html>
