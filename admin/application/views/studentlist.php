<?php include 'include/top.php';?>
<?php include 'include/header.php';?>
<?php include 'include/leftmenu.php';?>
    
        <div class="content-wrapper">
  
    <section class="content">
        <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Add Student</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
				 
				  
          <form class="form-horizontal" method="post" >
              <div class="box-body">
               
                <div class="form-group">
                    <!--<label for="" class="col-sm-3 control-label">Enter Exam Title</label>-->
                  <div class="col-sm-6 col-sm-offset-3">
				  <div id="msg"></div>
				    <input type="hidden"  id="type" name="type" value="2">

                    <input type="text" class="form-control" id="regno" name="regno" placeholder="Add student registration number" >
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
              <h3 class="box-title">Student List</h3>

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
                      <th>Rgistartion No.</th>
                      <th>NAME</th>
                      <th>FATHER NAME</th>
                      <th>PHOTO</th>
                      <th>EMAIL</th>
                      <th>PHONE</th>
                      <th>GENDER</th>
                      <th>DOB</th>
                      <th>ADDRESS</th>
                      <th style="width: 100px">Action</th>
                    </tr>
                   
                      <?php foreach($studentl->result() as $row){


                        ?>
                    <tr>
                      <td><?php echo $row->regid;  ?></td>
                      <td><?php echo $row->fname;  echo ' '; echo $row->lname ;  ?></td>
                      <td><?php echo $row->fathfname;echo ' '; echo $row->fathlname ;?></td>
                      <td> <img src="<?php echo $row->image;?>" style="width: 23px;"  class="user-image" alt="Slider"> </td>
                      <td><a href="<?php echo $row->email;?>"><?php echo $row->email;?></td>
                      <td><?php echo $row->mobile;  ?></td>
                      <td><?php echo $row->gender;  ?></td>
                      <td><?php echo $row->dob;  ?></td>
                      <td><?php echo $row->address;  ?></td>
                      <td>
                         <div class="btn-group">
                          <?php if($row->status==1){?>
                          <button  title="Click To Deactive Account" type="button" class="btn btn-success btn-xs" onclick="restrict(<?php echo $row->id;?>,<?php echo $row->status;?>,'De-Active Account')"><i class="fa fa-check" ></i></button>
                        <?php }else{?>
                           <button  title="Click To Active Account" type="button" class="btn btn-default btn-xs" onclick="restrict(<?php echo $row->id;?>,<?php echo $row->status?>,'Active Account')"><i class="fa fa-ban" ></i></button>
                        <?php }?>

                          <button title="Edit" type="button" class="btn btn-info btn-xs" data-toggle="modal"  onclick="setdetails('<?php echo $row->regid;?>','<?php echo $row->id;?>','<?php echo $row->fname;?>','<?php echo $row->lname;?>','<?php echo $row->email;?>','<?php echo $row->mobile;?>','<?php echo $row->gender;?>','<?php echo $row->dob;?>','<?php echo $row->address;?>','<?php echo $row->fathfname;?>','<?php echo $row->fathlname;?>','<?php echo $row->image;?>')" ><i class="fa fa-pencil-square "></i></button>

                          


                          <button title="Delete" type="button" class="btn btn-danger btn-xs" onclick="deleteRowreg(<?php echo $row->id;?>)"><i class="fa fa-trash "></i></button>
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
  function setdetails(reg,id,fname,lname,email,mobile,gender,dob,address,fathfname,fathlname,image){
    var f=document.forms['userDetForm'];
    f.regedit.value=reg;
    f.eid.value=id;
    f.name.value=fname;
    f.lname.value=lname;
    f.fathfnameedit.value=fathfname;
    f.fathlnameedit.value=fathlname;
    f.emailedit.value=email;
    f.mobileedit.value=mobile;
    //f.genderedit.selected=gender;
    f.addressedit.value=address;
    f.dobedit.value=dob;
    f.resumeUrl.value=image;
    //f.editimage.value=image;
    $("#genderedit").val(gender);
    $("#editimage").attr("src",image);
        
     $('#UpdateStudent').modal('show');
  }
  function updatedata(){
     var eid = $('#eid').val();
     var regedit = $('#regedit').val();
     var name = $('#name').val();
     var lname = $('#lname').val();
     var fathfnameedit = $('#fathfnameedit').val();
     var fathlnameedit = $('#fathlnameedit').val();
     var emailedit = $('#emailedit').val();
     var mobileedit = $('#mobileedit').val();
     var addressedit = $('#addressedit').val();
     var dobedit = $('#dobedit').val();
     var genderedit = $('#genderedit').val();
     var resumeUrl = $('#resumeUrl').val();
     $.ajax({
                type:'POST',
                url:'<?php echo base_url('welcome/updateStudentdetails'); ?>',
                data:{'eid':eid,'regedit':regedit,'name':name,'lname':lname,'fathfnameedit':fathfnameedit,'fathlnameedit':fathlnameedit,'emailedit':emailedit,'mobileedit':mobileedit,'addressedit':addressedit,'dobedit':dobedit,'genderedit':genderedit,'resumeUrl':resumeUrl},
                // success:function(data){
                    // $('#resultdiv').html(data);
                // }
        success:function(result)
        {  
        //alert(result);
        if(result=="success"){
      $("#msgedit").html("Update  successfully");
        window.location.reload(); 
        }else
        {
          $("#msgedit").html("Duplicate Registration No not allow");
        //  $('#formid').trigger("reset");
          document.getElementById("formid").reset();
          //alert('Server Error try again');    
        }
        
        },
        error:function(result)
        {  
        $("#msgedit").html("Server Error try again");
          //alert('Duplicate Registration No not allow'); 
        }
        
        });  
       


  }
function save(){
      //alert( "Change" );
       var regno = $('#regno').val();
       
      var lenth= $('#regno').val().length;

	   var type = $('#type').val();
	   if(regno ==''){
		   $("#msg").html("Enter Registration No");
       $('#regno').css('border-color', 'red');
       $("#regno").focus();
       return false;
	   
	   }
     else if(lenth<8){
      //alert(lenth);
      $("#msg").html("Registration no Must be 8 digit");
       $('#regno').css('border-color', 'red');
       $("#regno").focus();
       //setTimeout(function(){ location.reload(); }, 5000);
       return false;
     }
     else{

         $.ajax({
                type:'POST',
                url:'<?php echo base_url('index.php/welcome/savestudentreg'); ?>',
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
					$("#msg").html("Duplicate Registration No not allow");
					//alert('Server Error try again');   	
				}
				
				},
				error:function(result)
				{  
				$("#msg").html("Server Error try again");
					//alert('Duplicate Registration No not allow'); 
				}
				
				});  
       }
      
  }
  function restrict(id,status,title){
    
   
  $.ajax({
                type:'POST',
                url:'<?php echo base_url('index.php/welcome/active'); ?>',
                data:{'id':id,'status':status},
               
				success:function(result)
				{  
				//alert(result);
				if(result=="success"){
			   //$("#msg").html(title);
				alert(title);  
        setTimeout(location.reload.bind(location), 1000);
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
  function deleteRowreg(id){
   // if(confirm("Do You Want To Delete This User?")){
    $.ajax({
                type:'POST',
                url:'<?php echo base_url('index.php/welcome/deleteStudentreg'); ?>',
                data:{'id':id},
               
        success:function(result)
        {  
          //alert(result);
        alert("Delete Sucessfully");
        setTimeout(location.reload.bind(location), 1000);
        },
        error:function(result)
        {  
          alert('Server Error try again'); 
          setTimeout(location.reload.bind(location), 1000);
        }
        
        });  
   //] 
 
  }
  function resumeUpload(val,obj){

    var ext=obj.files[0].name.substr(obj.files[0].name.lastIndexOf('.') + 1);
    if(((obj.files[0].size)/1048576)>10){
        alert("Please Add jpg ,jpeg,png, extension only ");
    }else if(!(ext=="jpg" || ext=="jpeg" || ext=="png" )){
        alert("Please Add jpg ,jpeg,png, extension only ");
    }else{
       
        var form_data=new FormData();
        form_data.append('action','resumeUpload');
        form_data.append('file',obj.files[0]);
        $.ajax({
            url: '<?php echo base_url('welcome/resumeUpload'); ?>', // point to server-side PHP script 
            dataType: 'html', // what to expect back from the PHP script
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {

         
 $("#resumeUrl").val(response);
//                                var response=JSON.parse(data);
               
            },
            error: function (response) {
                alert("Check Internet Connection");
            }
        });
    }
}



</script>
</body>
</html>
<!-- Update  Student List-->
  <div id="UpdateStudent" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header clearfix">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Update Student List</h4>
      </div>
      <div id="msgedit"></div>
      <form name="userDetForm" id="formid">
      <div class="modal-body clearfix">
      
      <div class="row">
        <div class="col-md-12" style="margin-bottom:5px;">
        <div class="row">
            <div class="col-sm-12">         
            <input type="hidden" class="form-control"  id="eid">
             <input type="text" class="form-control" placeholder="Student Registration Number" id="regedit">
            </div>
        </div>
        </div> 
         <div class="col-md-12" style="margin-bottom:5px;">

        <div class="row">

            <div class="col-sm-6" style="margin-top:5px;">         
            <input type="text" class="form-control" placeholder=" Firth Name" id="name">
            </div>
            <div class="col-sm-6" style="margin-top:5px;">         
            <input type="text" class="form-control" placeholder="Last Name" id="lname">
            </div>
          
        </div>  
        </div>   
        <div class="col-md-12" style="margin-bottom:5px;">

        <div class="row">

            <div class="col-sm-6">         
            <input type="text" class="form-control" placeholder="Father Fname" id="fathfnameedit">
            </div>
           <div class="col-sm-6">         
            <input type="text" class="form-control" placeholder="Father Lname" id="fathlnameedit">
            </div>
          
        </div>  
        </div>    
             
        <div class="col-md-12" style="margin-bottom:5px;">
          <div class="row">
            
            <div class="col-sm-6"> 
            <input type="hidden" name="resumeUrl" id="resumeUrl"  >       
            <input type="file" class="form-control" placeholder="Photo" onChange="resumeUpload(this.value,this);">

            </div>
            <div class="col-sm-6"> 
            <img src="" style="width: 23px;"  class="user-image" alt="Slider" id="editimage">
          </div>
           
        </div>
        </div>
        <div class="col-md-12" style="margin-bottom:5px;">
          <div class="row">
            <div class="col-sm-6">         
            <input type="email" class="form-control" placeholder="Email" id="emailedit">
            </div>
            <div class="col-sm-6">         
            <input type="tel" class="form-control" placeholder="Mobile" id="mobileedit">
            </div>
           
        </div>
        </div>
        <div class="col-md-12 " style="margin-bottom:5px;">
          <div class="row">
            <div class="col-sm-6">         
            <select class="form-control" id="genderedit">
              <option disabled="">Select Gender</option> 
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Other">Other</option>
            </select>
            </div>
            <div class="col-sm-6">         
            <input type="date" class="form-control" placeholder="Date of Birth" id="dobedit">
            </div>
          
        </div>
        </div>
        <div class="col-md-12">
        <div class="row">
            <div class="col-sm-12">        
            <textarea class="form-control" placeholder="Address" id="addressedit"></textarea>
            </div>
           
           
        </div>
        </div>
      </div>
      </div>
    </form>
      <div class="modal-footer clearfix">
      <button type="submit" class="btn btn-info" onclick="updatedata()"><i class="fa fa-plus-circle" aria-hidden="true" ></i> <strong>Update</strong></button>
    <button type="reset" class="btn btn-default"><i class="fa fa-times" aria-hidden="true"></i> <strong>Reset</strong></button> 
      
      </div>
    </div>

    </div>
  </div>  <!-- //Update  Student List-->
