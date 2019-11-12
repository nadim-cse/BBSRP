<div class="container features" id="rent">
<div class="row">
   <div class="col-md-12">
             <h2 class=" text-center">Apartment</h2>
             <h4  class=" text-center" style="color: black;margin-bottom: 5%;">Featured All <?php if(isset($service_type)) echo $service_type; ?></h4>
   </div>
</div>

<div class="row">
<?php if(count($ServiceDetails) > 0): ?>
<?php foreach($ServiceDetails as $sd): ?>

   <div style="margin-top:10px; !important" class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        <div class="hovereffect">
            <img  class="center-block img-responsive" src="<?php echo site_url($sd->exterior_image_url) ?>" style="width:400px;height:200px;" alt="">
            <h2><?php echo $sd->place.' / '.$sd->sub_place; ?></h2>
            <div class="overlay">
               <h2><?php echo $sd->appartment_title; ?></h2>
               <h4 class="text-center">&#2547;<?php echo $sd->appertment_price ; ?></h4>
               <a class="info" href="<?php echo site_url('Services/ViewFullDetails/'.$sd->appartment_id); ?>" >View more</a>
            </div>
        </div>
    </div>
   

  
<?php endforeach; ?> 
<?php else:?>

<h1 class="text-left">No Result found</h1>

<?php endif; ?> 
 </div>

   



<div class="container features" id="sells">
<div class="row">
   <div class="col-md-12">
             <h4 class="text-center" style="color: black;margin-bottom: 5%;">Featured All Sells</h4>
   </div>
</div>
</div>

