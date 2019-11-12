<!-- FOR Place Result --> 
<div class="container features" >

<?php if(isset($ServicePriceForAppartment)) : ?>
    <?php if(count($ServicePriceForAppartment) > 0): ?>
        <?php foreach($ServicePriceForAppartment as $sd) {
             $ServiceType = $sd->appertment_price;
   
         } ?>
    <?php endif;?>
        <div class="container features" id="rent">
        <div class="row">
            <div class="col-md-12 ">
                <div class="search-filter">
                    <?php echo form_open('Search-Result'); ?>
                    <div class="col-md-3 margin_padding">
                    <select class="form-control keyword address" name="place" id="sel1">
                        <option value='<?php if(isset($place)) echo $place; ?>' ><?php if(isset($place)) echo $place; ?></option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Sylhet">Sylhet</option>
                        <option value="Chittagong">Chittagong</option>
                        <option value="Rongpur">Rongpur</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Dinajpur">
                        Dinajpur</option>
                    </select>
                    </div>
                    <div class="col-md-3 margin_padding">
                    <select class="form-control keyword address" name="service_type" id="sel1">
                        <option value="select-service">Select Service Type</option>
                        <option value="Sell">Sell</option>
                        <option value="Rent">Rent</option>
                    </select>
                    </div>
                    <div class="col-md-3 margin_padding">
                    <input type="text" class="form-control keyword address" name="price" placeholder="Enter Price">
                    </div>
                    <div class="col-md-3 margin_padding">
                    <button type="submit" class="searchbtn btn btn-default">Search</button>
                    </div>
                    <?php echo form_close(); ?> 
                    <!--End Search Button-->
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-12">
                <h2 class=" text-center">Showing result for  <b><u><?php if(isset($place)) echo $place; ?></u></b></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class=" text-center">Appartment</h2>
                <h4  class=" text-center" style="color: black;margin-bottom: 5%;">Price Range <?php if(isset($price_range)) echo $price_range; ?></h4>
            </div>
        </div>
        <?php if(count($ServicePriceForAppartment) > 0): ?>
            <?php foreach($ServicePriceForAppartment as $sd): ?>
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
        <?php endif; ?> 
        </div>

        <div class="container features" id="sells">
        <div class="row">
            <div class="col-md-12">
                <h2 class=" text-center">Land</h2>
                <h4  class=" text-center" style="color: black;margin-bottom: 5%;">Price Range <?php if(isset($price_range)) echo $price_range; ?></h4>
            </div>
        </div>
        <div class="row">
        <?php if(isset($ServicePriceForLand)): ?>
            <?php if(count($ServicePriceForLand) > 0): ?>
                <?php foreach($ServicePriceForLand as $sd): ?>
                    <div style="margin-top:10px; !important" class="col-lg-4 col-md-6 col-sm-6 col-xs-12" >
                        <div class="hovereffect">
                            <img class="center-block img-responsive" src="<?php echo site_url($sd->land_image) ?>" alt="">
                            <h2><?php echo $sd->place.' / '.$sd->sub_place; ?></h2>
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
           <?php endif; ?>
           
        </div>
        </div>
        <br>
  
</div>
<!-- FOR Place Result ends--> 
