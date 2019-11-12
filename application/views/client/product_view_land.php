<div class="container features" id="rent">
<div class="row">
   <div class="col-md-12">
             <h2 class=" text-center">Land</h2>
             <h4  class=" text-center" style="color: black;margin-bottom: 5%;">Featured All Sells</h4>
   </div>
</div>

<div class="row">
    <?php if(count($ServiceDetails) > 0): ?>
    <?php foreach($ServiceDetails as $sd): ?>

    <div style="margin-top:10px; !important" class="col-lg-4 col-md-6 col-sm-6 col-xs-12" >
            <div class="hovereffect">
                <img class="center-block img-responsive" src="<?php echo site_url($sd->land_image) ?>" alt="">
                <div class="overlay">
                <h2><?php echo $sd->land_title; ?></h2>
                <h4 class="text-center">&#2547;<?php echo $sd->land_price ; ?></h4>
                <a class="info" href="<?php echo site_url('Services/ViewFullDetailsForLand/'.$sd->land_id); ?>" >View more</a>
                </div>
            </div>
        </div>
    

    
    <?php endforeach; ?> 
    <?php else:?>

<h1 class="text-left">No Result found</h1>

<?php endif; ?> 
 </div>

   
<br><br>

</div>

