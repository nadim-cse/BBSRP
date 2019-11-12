<div class="container features" id="rent">
<?php if(isset($FindByLocation) ):?>
<div class="row">
   <div class="col-md-12">
      <h2 class=" text-center">Apartment</h2>
      <h4  class=" text-center" style="color: black;margin-bottom: 5%;">Featured All Rents</h4>
   </div>
</div>
<div class="row">
<?php if(count($FindByLocation) > 0): ?>
<?php foreach($FindByLocation as $sd): ?>
<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
   <div class="hovereffect">
      <img class="center-block img-responsive" src="<?php echo site_url($sd->exterior_image_url) ?>" style="width:400px;height:200px;" alt="">
      <div class="overlay">
         <h2><?php echo $sd->appartment_title; ?></h2>
         <h4 class="text-center">$<?php echo $sd->appertment_price ; ?></h4>
         <a class="info" href="<?php echo site_url('Services/ViewFullDetails/'.$sd->appartment_id); ?>" >View more</a>
      </div>
   </div>
</div>
<?php endforeach; ?> 
<?php endif;?>
<?php endif;?>
<?php if(isset($FindByLocationSell) ):?>
<div class="row">
      <div class="col-md-12">
         <h2 class=" text-center">Apartment</h2>
         <h4  class=" text-center" style="color: black;margin-bottom: 5%;">Featured All Sells</h4>
      </div>
   </div>
   <div class="row">
      <?php if(count($FindByLocationSell) > 0): ?>
      <?php foreach($FindByLocationSell as $sd): ?>
      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
         <div class="hovereffect">
            <img class="center-block img-responsive" src="<?php echo site_url($sd->exterior_image_url) ?>" style="width:400px;height:200px;" alt="">
            <div class="overlay">
               <h2><?php echo $sd->appartment_title; ?></h2>
               <h4 class="text-center">$<?php echo $sd->appertment_price ; ?></h4>
               <a class="info" href="<?php echo site_url('Services/ViewFullDetails/'.$sd->appartment_id); ?>" >View more</a>
            </div>
         </div>
      </div>
      <?php endforeach; ?> 
      <?php else:?>
      <h1 class="text-left">No Result found</h1>
      <?php endif; ?> 
      <?php endif; ?> 
</div>
<hr>
<?php if(isset($ServiceDetailsForLand)): ?>
<div class="container features" id="rent">
   <div class="row">
      <div class="col-md-12">
         <h2 class=" text-center">Land</h2>
         <h4  class=" text-center" style="color: black;margin-bottom: 5%;">Featured All Sells</h4>
      </div>
   </div>
   <div class="row">
      <?php if(count($ServiceDetailsForLand) > 0): ?>
      <?php foreach($ServiceDetailsForLand as $sd): ?>
      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
         <div class="hovereffect">
            <img class="center-block img-responsive" src="<?php echo site_url($sd->land_image) ?>" alt="">
            <div class="overlay">
               <h2><?php echo $sd->land_title; ?></h2>
               <h4 class="text-center">$<?php echo $sd->land_price ; ?></h4>
               <a class="info" href="<?php echo site_url('Services/ViewFullDetailsForLand/'.$sd->land_id); ?>" >View more</a>
            </div>
         </div>
      </div>
      <?php endforeach; ?> 
      <?php else:?>
      <h1 class="text-left">No Result found</h1>
      <?php endif; ?> 
      <?php endif; ?>
   </div>
</div>
</div>
<br><br><br>