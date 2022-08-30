<?php
include 'connect/connectdb.php';?>
      <section class="relative-positioned">
        <!-- Carousel Start-->
        <div class="home-carousel">
          <div class="dark-mask mask-primary"></div>
          <div class="container-fluid pl-0  pr-0  ">
            <div class="homepage owl-carousel">
			
             
				
                 <!--  <div class="col-md-5 text-right">
                    <p><img src="img/logo.png" alt="" class="ml-auto"></p>
                    <h1>Multipurpose responsive theme</h1>
                    <p>Business. Corporate. Agency.<br>Portfolio. Blog. E-commerce.</p>
                  </div> -->
                  
				   <?php
                                $stmt=$connect->prepare("SELECT * FROM `asc_sliderimg` ORDER BY `asc_sliderimg`.`sliderOrder` ASC");
                                if($stmt->execute()){
                                    foreach($stmt->fetchAll() as $row){
                                        echo '<div class="item"><div class="row"><div class="col-md-12"> <img class="class="img-fluid"" src="../admin/uploads/slider/'.$row['imgName'].'"  alt="img"/></div></div>
              </div>';
//                                        echo '<img src="'.$row['imgPath'].'" alt="'.$row['imgDesc'].'" title="#slider-direction-1" />';
                                    }
                                }else{}
                            ?>
				  
				  
				  
                
              <!--<div class="item">
                <div class="row">
                  <div class="col-md-12 text-center"><img src="img/site-3.png" alt="" class="img-fluid"></div>
                  
                </div>
              </div>
              <div class="item">
                <div class="row">
                
                  <div class="col-md-12"><img src="img/site-1.jpg" alt="" class="img-fluid"></div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-md-12"><img src="img/site-3.jpg" alt="" class="img-fluid"></div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-md-12"><img src="img/site-4.png" alt="" class="img-fluid"></div>
                </div>
              </div>
            </div>-->
          </div>
        </div>
        <!-- Carousel End-->
      </section>