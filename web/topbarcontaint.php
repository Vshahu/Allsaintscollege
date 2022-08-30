<!-- Top bar content-->
<?php
include 'connect/connectdb.php';
//header('Content-Type: text/html; charset=iso-8859-1');
?>

      <div class="top-box-header">
		  <div class="top-bar bg-eaeaea py-1">
			<div class="container-fluid">
			  <div class="row d-flex align-items-center">
				<div class="col-md-6 d-md-block d-none">
				 <?php
                                $stmt=$connect->prepare("SELECT * FROM `asc_topheader` ORDER BY asc_topheader.id DESC LIMIT 0,1");
                                if($stmt->execute()){
                                    foreach($stmt->fetchAll() as $row){?>
								<p>Contact us on +91- <?php echo $row['mobile']?> or <?php echo $row['email'];?></p><?php }}?>
				</div>
				<div class="col-md-6">
				  <div class="d-flex justify-content-md-end justify-content-between">
					<ul class="list-inline contact-info d-block d-md-none">
					  <li class="list-inline-item"><a href="#"><i class="fa fa-phone"></i></a></li>
					  <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
					</ul>
					<div class="login"><a href="../admin/"  class="login-btn"><i class="fa fa-sign-in"></i><span class="d-none d-md-inline-block">Sign In</span></a><a href="../admin/welcome/registration" class="signup-btn"><i class="fa fa-user"></i><span class="d-none d-md-inline-block">Sign Up</span></a></div>
					<ul class="social-custom list-inline">
					  <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
					  <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
					  <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
					  <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
					</ul>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		  <!-- Top bar end-->
		  <div class="top-bar top-bar-box py-0" style="background: #fff;">
			<div class="container-fluid ">
			  <div class="row d-flex align-items-center">
				<div class="col-md-4 d-md-block d-none ">
					<!-- <p>Contact us on +91-5942-235121 or principal@allsaintscollege.org</p> -->
					<?php
                                $stmt=$connect->prepare("SELECT * FROM `asc_logo`");
                                if($stmt->execute()){
                                    foreach($stmt->fetchAll() as $row){ 
									
									if($row['logocat']=='College Logo'){
									echo '<img src="../admin/uploads/logo/'.$row['image'].'" alt="logo" class="d-none d-md-inline-block py-3">'; }}}?> 
					<!--<img src="img/logo.png" alt="logo" class="d-none d-md-inline-block py-3">  -->             
				</div>
				<div class="col-md-8">
				  <div class="d-flex justify-content-md-end justify-content-between">
				 
					<div class="login">
					<?php
                                $stmt=$connect->prepare("SELECT * FROM `asc_logo`");
                                if($stmt->execute()){
                                    foreach($stmt->fetchAll() as $row){ 
									
									if($row['logocat']=='Brand Logo - 1'){
									echo '<a href="#"><img src="../admin/uploads/logo/'.$row['image'].'" alt="alumnilogo" class="d-none d-md-inline-block" style="border-radius: 18px;"></a>'; }}}?> 
					  <!--<a href="#">
						  <img src="img/alumnilogo.png" alt="alumnilogo" class="d-none d-md-inline-block" style="border-radius: 18px;">
						</a>-->
						<?php
                                $stmt=$connect->prepare("SELECT * FROM `asc_logo`");
                                if($stmt->execute()){
                                    foreach($stmt->fetchAll() as $row){ 
									
									if($row['logocat']=='Brand Logo - 2'){
									echo '<a href="#"><img src="../admin/uploads/logo/'.$row['image'].'" alt="alumnilogo" class="d-none d-md-inline-block" style="border-radius: 18px;"></a>'; }}}?> 
					 <!-- <a href="#">
						   <img src="img/forbes-gis.png" alt="forbes-gis" class="d-none d-md-inline-block">
						</a>
				       <a href="#">
						   <img src="img/round.png" alt="round" class="d-none d-md-inline-block" style="width: 90px;">
						</a> -->
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
      </div>