<div class="container account">
       <div class="row">
           <div class="col-md-12">
               <h3 class="text-center">My account</h3>
           </div>
       </div>
       <br>
       <br>
       <div class="row">
           <div class="col-md-12">
           
               <h4><?php echo $this->session->userdata('current_user_name'); ?></h4>
            
               <hr>
               <br>
               <h3 >My ads :</h3>
               <div class="col-md-6 col-md-offset-3">
                     <?php echo $this->session->flashdata('success'); ?>
              </div>
           </div>
       </div>
       <br>
       
       <div class="row">
       <h1 class="text-center"><u>Apartment Ads</u></h1>
       <hr>
       <?php foreach($myProductsAppartment as $mpa): ?>
           <div class="col-md-4">
               <button type="submit" class="btn btn-success btn-block">
                 <img  class="center-block img-responsive" src="<?php echo site_url($mpa->exterior_image_url) ?>" style="width:200px;height:150px;" alt="">
                  <?php echo $mpa->place .", ". $mpa->sub_place; ?>
                </button>
               <br>
               <a href="<?php echo site_url('Services/MyAccountForAppartmentView/'.$mpa->appartment_id); ?>"><span class="fa fa-eye-slash" aria-hidden="true"></span>View</a>&nbsp;
               <a href="<?php echo site_url('Services/DeleteAdForAppartment/'.$mpa->appartment_id); ?>" onclick ="return confirmDialog();"><span class="fa fa-trash" aria-hidden="true"></span> Remove</a>
               
           </div>
           <?php endforeach; ?>    
       </div>
        
       <hr>
       <div class="row">
       <h1 class="text-center"><u>Land Ads</u></h1>
       <hr>
       <?php foreach($myProductsLand as $mpl): ?>
           <div class="col-md-4">
               <button type="submit" class="btn btn-success btn-block"> 
               <img  class="center-block img-responsive" src="<?php echo site_url($mpl->land_image) ?>" style="width:200px;height:150px;" alt="">
                    <?php echo $mpl->place .", ". $mpl->sub_place; ?>
                </button>
               <br>
               <a href="<?php echo site_url('Services/MyAccountForLandView/'.$mpl->land_id); ?>"><span class="fa fa-eye-slash" aria-hidden="true"></span>View</a>&nbsp;
               <a href="<?php echo site_url('Services/MyAccountForLandDelete/'.$mpl->land_id); ?>"><span class="fa fa-trash" aria-hidden="true"></span> Remove</a>
           </div>
           <?php endforeach; ?>    
       </div>
   </div>
   <br><br>