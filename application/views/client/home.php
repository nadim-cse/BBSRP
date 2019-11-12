<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
      <!-- Overlay -->
      <div class="overlay"></div>
      
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item slides active">
          <div class="slide-1"></div>
          <div class="hero">
            <hgroup>
                <h1>Your Dream House</h1>        
                <h3>5000+ House for rent/sell Bangladeshwide</h3>
            </hgroup>
          </div>
        </div>
        
        <div class="item slides">
          <div class="slide-2"></div>
          <div class="hero">        
            <hgroup>
                <h1>Your Dream Land</h1>           
                <h3>1000+ Land for sell Bangladeshwide</h3>
            </hgroup>          
          </div>
        </div>
      </div> 
    </div>
      

   <!-- Search Box Start -->
   <section>       
             <div class="container">
                <div class="row">
                    
                        <div class="col-md-12 ">
                            <div class="search-filter">
                              <?php echo form_open('Search-Result'); ?>
                               <div class="col-md-3 margin_padding">
                                    <select class="form-control keyword address" name="place"  required>
                                    <option value='select-place' >Select A place</option>
                                    <option value="Dhaka">Dhaka</option>
                                    <option value="Sylhet">Sylhet</option>
                                    <option value="Chittagong">Chittagong</option>
                                    <option value="Rongpur">Rongpur</option>
                                    <option value="Khulna">Khulna</option>
                                    <optionn value="Dinajpur">Dinajpur</option>
                                  </select>
                                </div>
                                <div class="col-md-3 margin_padding">
                                   <select class="form-control keyword address" name="service_type"  required>
                                  <option value="select-service">Select Service Type</option>
                                    <option value="Sell">Sell</option>
                                    <option value="Rent">Rent</option>
                                  </select>
                                </div>
                                <div class="col-md-3 margin_padding">
                                    <input type="number" class="form-control keyword address" name="price" placeholder="Enter Price" >
                                </div>
                                
                               
                                <div class="col-md-3 margin_padding">
                                    <button type="submit" class="searchbtn btn btn-default">Search</button>
                                    
                                </div>
                               <?php echo form_close(); ?> 
                                <!--End Search Button-->
                            </div>
                        </div>
                    
                </div>
            </div>    
   </section><!-- Search Box Ends -->

    <div class="container features">
        <div class="row">
           <div class="col-md-12">
                     <h2 class=" text-center">Featured Rents</h2>
           </div>
        </div>
        
        <div class="row">
            <?php foreach($FeaturedRents as $fr): ?>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="hovereffect" style="width:400px;height:200px;">
                        <img class="center-block img-responsive" style="width:400px;height:200px;" src="<?php echo site_url($fr->exterior_image_url); ?>" alt="">
                        <div class="overlay">
                        <h2><?php echo $fr->appartment_title; ?></h2>
                        <h4 class="text-center">&#2547;<?php echo $fr->appertment_price; ?></h4>
                        <a class="info" href="<?php echo site_url('Services/ViewFullDetails/'.$fr->appartment_id); ?>" >View details</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
       </div>     
           <br>
             <div class="row">
                 <div class="col-md-offset-4 col-md-4 btn_rent">
                       <a href="<?php echo site_url('Services/ViewService/'.'Appartment/'.'Rent'); ?>" target="_blank">
                            <button  type="button" class="btn  btn-lg center-block">More Rentals</button>
                           
                       </a>    
                 </div>
             </div>
 </div>




    <div class="container-fluid choose_us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class=" text-center">Why Choose Us</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 facts">
                  <i class="glyphicon glyphicon-user"></i>
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Quality Service</h4>
                        </div>
                        <div class="col-md-12">
                            <p>We are very user friendly along with secure for both agents and clients and most importantly trustworthy.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-3 facts">
                   <i class="glyphicon glyphicon-earphone"></i>
                    <div class="row">
                        <div class="col-md-12">
                            <h4>24/7 Support</h4>
                        </div>
                        <div class="col-md-12">
                            <p>Always available with our best services to support any need.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 facts">
                    <i class="glyphicon glyphicon-cd"></i>
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Quick Help</h4>
                        </div>
                        <div class="col-md-12">
                            <p> For any help our team is ready to provide instruction and solve the problems within a quick time.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 facts">
                    <i class="glyphicon glyphicon-cog"></i>
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Well Documented</h4>
                        </div>
                        <div class="col-md-12">
                            <p>All the items are well arranged and documented for avoiding chaos.</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>




    <div class="container features">
        <div class="row">
           <div class="col-md-12">
                     <h2 class=" text-center">Our Sevices</h2>
           </div>
        </div>
        
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <h4 class="text-center" style="color: black">Apartment</h4>
                <div class="hovereffect">
                    <img class="center-block img-responsive" src="<?php echo site_url() ?>assets/frontend/images/property-1-1540x762.jpg" alt="" style="height:290px;">
                    <div class="overlay">
                       <h2>Apartment</h2>
                    </div>
                </div>
                
            </div>
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
               <h4 class="text-center" style="color: black;">Land</h4>
                <div class="hovereffect">
                    <img class="center-block img-responsive" src="<?php echo site_url() ?>assets/frontend/images/slider/slider-land.jpg" alt="" style="height:290px;    width: 550px;">
                    <div class="overlay">
                       <h2>Land</h2>
                      
                    </div>
                </div>
                
            </div>
         </div>
    </div>



   
    <div class="container features">
        <div class="row">
           <div class="col-md-12">
                     <h2 class=" text-center">Featured Sells</h2>
           </div>
        </div>
        
        <div class="row">
        <?php foreach($FeaturedSells as $fr): ?>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="hovereffect" style="width:400px;height:200px;">
                        <img class="center-block img-responsive" style="width:400px;height:200px;" src="<?php echo site_url($fr->exterior_image_url); ?>" alt="">
                        <div class="overlay">
                        <h2><?php echo $fr->appartment_title; ?></h2>
                        <h4 class="text-center">&#2547;<?php echo $fr->appertment_price; ?></h4>
                        <a class="info" href="<?php echo site_url('Services/ViewFullDetails/'.$fr->appartment_id); ?>" >View details</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
           <br>
           <br>
          
    </div>
</div>
              
        <!-- <section id="agent" class="team">
          <div class="container">
            <div class="row">

                <div class="col-lg-12">
                  <h2 class=" text-center">Our Agents</h2>
                  <div class="row pt-md">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                      <div class="img-box">
                        <img src="http://nabeel.co.in/files/bootsnipp/team/5.jpg" class="img-responsive">
                        <ul class="text-center">
                          <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                          <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                          <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                        </ul>
                      </div>
                      <h3>Peter John</h3>
                      <p style="letter-spacing:1px;color:#a5a5a5;">Mobile: 01912751111<br>Email: yourmail@gmail.com</p>
                    </div>
                      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                      <div class="img-box">
                        <img src="http://nabeel.co.in/files/bootsnipp/team/7.jpg" class="img-responsive">
                        <ul class="text-center">
                          <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                          <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                          <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                        </ul>
                      </div>
                      <h3>Bell Jan</h3>
                      <p style="letter-spacing:1px;color:#a5a5a5;">Mobile: 01912751111<br>Email: yourmail@gmail.com</p>
                    </div>
                      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                      <div class="img-box">
                        <img src="http://nabeel.co.in/files/bootsnipp/team/5.jpg" class="img-responsive">
                        <ul class="text-center">
                          <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                          <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                          <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                        </ul>
                      </div>
                      <h3>Robert Smith</h3>
                      <p style="letter-spacing:1px;color:#a5a5a5;">Mobile: 01912751111<br>Email: yourmail@gmail.com</p>
                    </div>
                      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                      <div class="img-box">
                        <img src="http://nabeel.co.in/files/bootsnipp/team/7.jpg" class="img-responsive">
                        <ul class="text-center">
                          <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                          <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                          <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                        </ul>
                      </div>
                      <h3>Bell Jan</h3>
                      <p style="letter-spacing:1px;color:#a5a5a5;">Mobile: 01912751111<br>Email: yourmail@gmail.com</p>
                    </div>
                  </div>
                </div>

            </div>
          </div>
        </section>  
          -->




       
        <div class="container-fluid testimonial" id="testi">
            <div class="row">
                <div class="col-md-12">
                     <h2 class=" text-center">Testimonial</h2>
                </div>
            </div>
        </div>
        <?php if(empty($testimonials)): ?>
            <h2 class="text-center">To Testimonial are written. </h2>
        <?php  else:?>
        <div class="container slidemargintop">
             <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    
                    <div class="carousel-inner">
                    <?php $i = 1; 
                        foreach($testimonials as $testimonal): ?>
                       <?php  $item_class = ($i == 1) ? 'item active' : 'item';?>  
                    <div class="<?php echo $item_class ?>">
                       
                        <div class="carousel-caption">
                            <h5><?php echo $testimonal->name; ?></h5>
                            <div class="divider divider-center ">
                            <img class="img-circle" style="height;100px;width:100px" src="<?php echo site_url() ?>assets/frontend/images/avatar.png" alt="Avatar">
                            </div>
                            <br>
                            <p>
                           <?php echo $testimonal->review?>
                            </p>
                        </div>
                    </div>

                    <?php  $i++;
                        endforeach; ?>
            </div>
        </div>
        <?php endif; ?>                
        <!-- Active Item -->
        <br>
                    
                    