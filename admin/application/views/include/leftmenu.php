 <aside class="main-sidebar">
    <section class="sidebar">
    
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form hide">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <ul class="sidebar-menu mt-10" data-widget="tree">
       
       
        <li class="active"><a href="<?php echo base_url();?>welcome/home"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-sliders"></i> <span>Slider MGT</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>welcome/headerslider"><i class="fa fa-circle-o"></i>Header Slider</a></li>
            <li><a href="<?php echo base_url();?>welcome/collegehouses"><i class="fa fa-circle-o"></i>College Houses Slider</a></li>
            <li><a href="<?php echo base_url();?>welcome/latestevents"><i class="fa fa-circle-o"></i>Latest Events Slider</a></li>          
          </ul>
        </li>  
         
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Header MGT</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
            <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>welcome/topbar"><i class="fa fa-circle-o"></i>Contact &amp; Email Update</a></li>
            <li><a href="<?php echo base_url();?>welcome/logomanagement"><i class="fa fa-circle-o"></i>Logo Update</a></li>         
          </ul>
        </li>   
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Principal's  MGT</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>welcome/messagevideo"><i class="fa fa-circle-o"></i>Message &amp; Video</a></li>
            <li><a href="<?php echo base_url();?>welcome/latestnews"><i class="fa fa-circle-o"></i>Latest News</a></li>         
            <li><a href="<?php echo base_url();?>welcome/mission"><i class="fa fa-circle-o"></i>Mission of the School</a></li>         
            <li><a href="<?php echo base_url();?>welcome/entrance"><i class="fa fa-circle-o"></i>Entrance Test</a></li>         
          </ul>
        </li>   
       <!-- <li><a href="<?php echo base_url();?>welcome/menumgt"><i class="fa fa-bars"></i> <span>Menu MGT</span></a></li>-->
         
        <li><a href="<?php echo base_url();?>welcome/collegecalendar"><i class="fa fa-calendar"></i> <span>College Calendar</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-gear"></i> <span>Setting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
      <li><a href="<?php echo base_url();?>welcome/accountsettings"><i class="fa fa-circle-o"></i>Account Settings </a></li>
            <li><a href="<?php echo base_url();?>welcome/changepassword"><i class="fa fa-circle-o"></i>Change Password </a></li>
          </ul>
        </li>
        
      
       
       
      </ul>
    </section>
  </aside>