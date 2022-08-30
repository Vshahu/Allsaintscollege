<?php include 'include/top.php';?>
<?php include 'include/header.php';?>
<?php include 'include/leftmenu.php';?>

     <div class="content-wrapper">
  
    <section class="content">
        
  
      <div class="box box-default">
            <div class="box-header with-border">    
              <h3 class="box-title">Parent List</h3>

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
                      <th>REGISTRATION No.</th>
                      <th>NAME</th>
                      <th>STUDENT NAME</th>
                      <th>PHOTO</th>
                      <th>EMAIL</th>
                      <th>PHONE</th>
                      <th>GENDER</th>
                      <th>DOB</th>
                      <th>ADDRESS</th>
                      <th style="width: 100px">Action</th>
                    </tr>
					 <?php foreach($parentlistl->result() as $row){?>
                    <tr>
                      <td><?php echo $row->regid;  ?></td>
                      <td><?php echo $row->fname;  echo ' '; echo $row->lname ;  ?></td>
                      <td><?php echo $row->fname;  echo ' '; echo $row->lname ;  ?></td>
                      <td> <img src="img/user2-160x160.jpg" style="width: 23px;"  class="user-image" alt="Slider"> </td>
                      <td><a href="mailTo:support@vipinpatel.in"><?php echo $row->email;  ?></td>
                      <td><?php echo $row->mobile;  ?></td>
                      <td><?php echo $row->gender;  ?></td>
                      <td><?php echo $row->dob;  ?></td>
                      <td><?php echo $row->address;  ?></td>
                      <td>
                         <div class="btn-group">
                          <button title="Click To Active Account" type="button" class="btn btn-success btn-xs"><i class="fa fa-check" ></i></button>
                          <button title="Delete" type="button" class="btn btn-info btn-xs"><i class="fa fa-pencil-square "></i></button>
                          <button title="Delete" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash "></i></button>
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
<script src="js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="js/bootstrap.min.js"></script>
<script src="js/select2.full.min.js"></script>

<script src="js/jquery.slimscroll.min.js"></script>
<script src="js/icheck.min.js"></script>
<script src="js/fastclick.js"></script>
<script src="js/vpjs.min.js"></script>
<script src="js/ckeditor.js"></script>

<script src="js/demo.js"></script>
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
</body>
</html>
