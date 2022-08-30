
  <header class="main-header">
    <a href="<?php echo base_url('welcome/home');?>" class="logo bg-aqua">
      <span class="logo-mini"><b>A</b>C</span>
      <span class="logo-lg"><b>Allsaints College</b> </span>
    </a>
    <nav class="navbar navbar-static-top bg-aqua">
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url();?>assets/img/user2-160x160.jpg" class="user-image" alt="user">
              <span class="hidden-xs"><?php $username = $this->session->userdata('fname'); if(isset($username)){echo $this->session->userdata('fname');}else{redirect('login');} ?></span><i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu">
        
              <li class="user-header">
                <img src="<?php echo base_url();?>assets/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
				<?php //$utype = $this->session->userdata('utype'); if(isset($utype)){echo $this->session->userdata('fname');}else{redirect('login');} ?>
                  Admin
                  <!--<small>Account</small>-->
                </p>
              </li>
              
               <li class="user-footer">
                <div class="pull-left">
                  <a href="accountsettings" class="btn btn-default btn-flat">Account Settings </a>
                </div>
        <div class="pull-right">
                  <a href="changepassword.html" class="btn btn-default btn-flat">Change Password </a>
                </div>               
              </li>
        
            </ul>
          </li>
       <li class="user user-menu">
        <a href="<?php echo base_url('login/logout');?>">
          <span class="hidden-xs"><i class="fa fa-sign-out"></i> Logout</span>
        </a>
      </li>
         
         
        </ul>
      </div>
    </nav>
  </header>