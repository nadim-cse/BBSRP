<div class="container-fluid product">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4 style="margin-bottom:5%; letter-spacing:4px;" class=" text-center">Property Details</h4>
        </div>
    </div>
    <?php foreach($ServiceDetails as $sd): ?>
    <div class="row">
        <div class="col-md-8">
            <div class="hovereffect">
                <img style="height:400px;width:800px;" class="center-block img-responsive" src="<?php echo site_url($sd->exterior_image_url); ?>" alt="">
                <div class="overlay">
                    <h2>
                        <?php echo $sd->appartment_title; ?>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-3 col-xs-6"> 
                        <h5 class="text-center">
                            <?php echo $sd->bed; ?>
                        </h5>
                        <p>beds</p>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <h5 class="text-center">
                            <?php echo $sd->bath; ?>
                        </h5>
                        <p>baths</p>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <h5 class="text-center">
                            <?php echo $sd->space; ?>
                        </h5>
                        <p>sq ft</p>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <h4 class="pull-right"><i class="glyphicon glyphicon-hand-right"></i> &#2547;
                            <?php echo $sd->appertment_price; ?>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 details">
            <div class="row">
                <div class="col-md-4 col-xs-4">
                    <i class="glyphicon glyphicon-flag"></i>
                    <p>Type</p>
                    <div class="col-md-12">
                        <h5> <?php echo $sd->service_type; ?></h5>
                    </div>
                </div>
                <div class="col-md-4 col-xs-4">
                    <i class="glyphicon glyphicon-home"></i>
                    <p>Style</p>
                    <div class="col-md-12">
                        <h5>
                            <?php echo $sd->style; ?>
                        </h5>
                    </div>
                </div>
                <div class="col-md-4 col-xs-4">
                    <i class="glyphicon glyphicon-map-marker"></i>
                    <p>Location</p>
                    <div class="col-md-12">
                        <h5>
                            <?php echo $sd->place."/<br>". $sd->sub_place; ?>
                        </h5>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
            <div class="col-md-12 col-xs-3">
                    <i class="glyphicon glyphicon-user"></i>
                    <p>Posted By:</p>
                    <div class="col-md-12">
                        <h5>
                            <?php echo $sd->agent_name; ?><br><br>
                            
                        </h5>
                        <h5> <?php echo date("d F, Y ", strtotime($sd->time_created)); ?></h5>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
    <?php endforeach; ?>
</div>
</div>



<div class="container features" id="product">
<div class="row">
    <div class="col-md-12">
        <h4 class="text-center" style="color: black;margin-bottom: 5%;">Property Features</h4>
    </div>
</div>
<?php foreach($ServiceDetails as $sd): ?>
<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <h5>Bedrooms</h5>
        <div class="hovereffect">
            <img style="height:200px;width:400px;"  class="center-block img-responsive" src="<?php echo site_url($sd->bed_image_url); ?>" alt="">
            <div class="overlay">
                <h2>Bedroom
                    <?php echo $sd->bed; ?>
                </h2>
                
            </div>
        </div>

    </div>

    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <h5>Bathrooms</h5>
        <div class="hovereffect">
            <img style="height:200px;width:400px;" class="center-block img-responsive" src="<?php echo site_url($sd->bath_image_url); ?>" alt="">
            <div class="overlay">
                <h2>Bathroom
                    <?php echo $sd->bath; ?>
                </h2>
               
            </div>
        </div>

    </div>

    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <h5>Exterior and Lot Features</h5>
        <div class="hovereffect">
            <img style="height:200px;width:400px;" class="center-block img-responsive" src="<?php echo site_url($sd->exterior_image_url); ?>" alt="">
            <div class="overlay">
                <h2>Exterior View</h2>
                
            </div>
        </div>
    </div>
</div>
</div>
<?php endforeach; ?>

<?php foreach($ServiceDetails as $sd): ?>
<div class="container">
<div class="row">
    <h2>Overview</h2>
    <div class="col-md-12">
        <p class="text-center"><?php echo $sd->overview; ?></p>
    </div>
</div>
</div>
<hr>
<?php endforeach; ?>

<?php // Session Creating 
    foreach($ServiceDetails as $sd ){
        $agent_id = $sd->agent_id;
        $appartment_id = $sd->appartment_id;
    }
    // $agent_id = $this->session->set_userdata($agent_id);
?>

<div class="container">
<div class="row">
    <div class="col-md-offset-4 col-md-4 btn_agent">
    <?php echo "<button type='button' class='btn btn-lg center-block' onclick='ContactAgent(" . $agent_id . ", " . $appartment_id . ") ' >Contact Agent</button>";?>
      
    </div>
</div>
</div>

