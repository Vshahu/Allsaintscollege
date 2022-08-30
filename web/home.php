
      <section class="bar bg-gray no-mb padding-big text-md-center">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="heading text-center">
                <h2 class="welcome-box">
                <span class="welcometo">WELCOME TO</span> 
                <span class="welcometo-text"> ALL SAINTS' COLLEGE </span></h2>
              </div>
            </div>
			<?php  $stmt=$connect->prepare("SELECT * FROM `asc_messagevedio` ORDER BY `asc_messagevedio`.`id` ASC");
			
                                if($stmt->execute()){
                                    foreach($stmt->fetchAll() as $row){?>
            <div class="col-md-6">

               <div class=" principal-msg">
              <h3 class="text-uppercase text-left">PRINCIPAL'S MESSAGE</h3>
         <!--      <p class="lead mb-small">40+ prepared HTML templates</p> -->
              <p class="mb-small text-justify"><?php echo $row['message'];?></p>
              <p><a href="#" class="btn btn-template-main">Read more</a></p>
              </div>
								</div><?php }}?>
            <div class="col-md-6 text-center"><!-- <img src="img/template-easy-customize.png" alt="" class="img-fluid"> -->
               <div class=" principal-msg">
                <h3 class="text-uppercase text-left">PRINCIPAL'S Video</h3>
                    <video class="mt-2" style="width: 100%;" id="myvideo" controls="" autoplay="">
                      <source src="http://static.allsaintscollege.org/videoprincipals.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
          </div>
        </div>
      </section>
       <section class="background-pentagon bg-primary no-mb pt-4 pb-2">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="heading text-center text-white mb-0">
                  <h2>LATEST NEWS</h2>
                </div>
               <!--  <p class="lead">We have worked with many clients and we always like to hear they come out from the cooperation happy and satisfied. Have a look what our clients said about us.</p> -->
                <!-- Carousel Start-->
                <ul class="owl-carousel testimonials list-unstyled equal-height">
				
                  <?php
                                $stmt=$connect->prepare("SELECT * FROM `asc_latestnews` ORDER BY `asc_latestnews`.`position` ASC");
                                if($stmt->execute()){
                                    foreach($stmt->fetchAll() as $row){
                                       echo '<li class="item">';
                   echo ' <div class="testimonial d-flex flex-wrap">';
                   echo '<div class="text">';
                    echo    '<p>';
					echo $row['description'];
					echo '</p>';
                      echo '</div>';
                     echo ' <div class="bottom d-flex align-items-center justify-content-between align-self-end">';
                       echo ' <div class="icon"><i class="fa fa-quote-left"></i></div>';
                        echo '<div class="testimonial-info d-flex">';
                         echo ' <div class="title">';
                         echo '   <h5>'.$row['newstitle'].'</h5>';
                         echo '   <p>'.$row['date'].'</p>';
                         echo ' </div>';
                         
                       echo ' </div>';
                     echo ' </div>';
                   echo ' </div>';
                 echo ' </li>';
				 
                                    }
                                }else{}
                            ?>
                  <?php 
				  ?>
                </ul>
                <!-- Carousel End-->
                <!--<p class="text-center hidden-xs-up  hidden-xl-down"><a href="#" class="btn btn-light">More News</a></p> -->
              </div>
            </div>
          </div>
        </section>
   

      <section id="packages" class="bar no-mb">
        <div data-animate="fadeInUp" class="container">
          <div class="row">
            <div class="col-md-12">
             
<?php  $stmt=$connect->prepare("SELECT * FROM `asc_mission` ORDER BY `asc_mission`.`id` desc");
                                if($stmt->execute()){
                                    foreach($stmt->fetchAll() as $row){?>
              <div class="heading text-center">
			   <?php
                               echo '<h2>';
									echo $row['missiontitle'];
									echo '</h2>';
									echo '</div>';
              echo '<p class="lead mb-0">';
			  echo $row['description'];
			  echo '</p>';
                                    }
                                }else{}
                            ?>
                
              
            
            </div>

            
            </div>
          </div>
        </div>
      </section>
       <!-- News bar end-->
      <section class="background-pentagon py-3 no-mb">
        <div class="container-fluid">
           <div class="row portfolio-project">
             <div class="col-sm-4">
                <h5 class="ch-heading text-center mb-3"><span>COLLEGE HOUSES</span></h5>
                <div class="project owl-carousel mb-2">
				<?php
                                $stmt=$connect->prepare("SELECT * FROM `asc_collegehouses` ORDER BY `asc_collegehouses`.`sliderOrder` ASC");
                                if($stmt->execute()){
                                    foreach($stmt->fetchAll() as $row){
               
									echo '<div class="item"><img src="../admin/uploads/collegehouseslider/'.$row['imgName'].'" alt="" class="img-fluid"></div>';
                                    }
                                }else{}
                            ?>
                  
                </div>
              </div>
              <div class="col-sm-4">
                <h5 class="cc-heading text-center mb-3"><span>COLLEGE CALENDAR</span></h5>
                <div id="ical" class="month"> </div>
              </div>
              
              <div class="col-sm-4">
                <h5 class="ce-heading text-center mb-3"><span>LATEST EVENTS</span></h5>
                <div class="project owl-carousel mb-2">
                 <?php
                                $stmt=$connect->prepare("SELECT * FROM `asc_latesteventslider` ORDER BY `asc_latesteventslider`.`sliderOrder` ASC");
                                if($stmt->execute()){
                                    foreach($stmt->fetchAll() as $row){
               
									echo '<div class="item"><img src="../admin/uploads/latesteventslider/'.$row['imgName'].'" alt="" class="img-fluid"></div>';
                                    }
                                }else{}
                            ?>
                </div>
              </div>
            </div>
          
        </div>
      </section>
 
       <section id="packages" class="bar no-mb">
        <div data-animate="fadeInUp" class="container">
          <div class="row">
            <div class="col-md-12">
			<?php  $stmt=$connect->prepare("SELECT * FROM `asc_entrance` ORDER BY `asc_entrance`.`id` ASC");
                                if($stmt->execute()){
                                    foreach($stmt->fetchAll() as $row){?>
              <div class="heading text-center">
			   <?php
                               echo '<h2>';
									echo $row['title'];
									echo '</h2>';
									echo '</div>';
              echo '<p class="lead mb-0">';
			  echo $row['description'];
			  echo '</p>';
                                    }
                                }else{}
                            ?>
                
              
            
            </div>
          </div>
        </div>
      </section>