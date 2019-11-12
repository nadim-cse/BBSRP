<div class="container appartment">
<div class="row">
   <div class="col-md-12">
      <br>
      <h4 class="text-center">Edit Ad</h4>
     
      
      <hr>
      <br>
   </div>
</div>

<form action="<?php echo site_url('Services/EditServiceForLand');?>" enctype="multipart/form-data" method="post" class="form-group">

<div class="col-md-6 col-md-offset-3 flash">
         <?php echo $this->session->flashdata('success'); ?>
    </div>
<?php foreach($EditData as $ed) :?>
<input type="hidden" value="<?php echo $ed->land_id?>" name="land_id">
<input type="hidden" value="<?php echo $ed->place?>" name="place">
<input type="hidden" value="<?php echo $ed->sub_place?>" name="sub_place">
<input type="hidden" value="<?php echo $ed->land_image?>" name="land_image">
<div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="sel1">Select Type</label> <i class="glyphicon glyphicon-arrow-down"></i>
                    <select class="form-control" id="sel1" name="service_type">
                        <option value="<?php echo $ed->service_type ?>"><?php echo $ed->service_type ?></option>
                        <option value="Sell">Sell</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="sel1">Title</label>
                    <input type="text" class="form-control" value="<?php echo $ed->land_title; ?>" name="land_title" id="name"> </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="sel1">Space</label>
                    <input type="text" class="form-control" value="<?php echo $ed->space ?>" name="space" id="name"> </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="sel1">Price</label>
                    <input type="hidden" name="service" value="<?php echo $ed->service ?>" />
                    <input type="number" value="<?php echo $ed->land_price ?>" name="price" class="form-control" id="name"> </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <img style="height:200px;width:200px;" src="<?php echo site_url($ed->land_image); ?>" alt="">
                 </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="sell">Product Overview</label>
                    <textarea class="form-control" name="overview" rows="5" id="sell"><?php echo $ed->land_overview ?></textarea>
                </div>
            </div>
        </div>  
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <button type="submit" class="pull-right btn btn-success" id="acceptButton" >Update</button>
                </div>
            </div>
    </div>
</div>

     
<?php endforeach;?>   
   
</form>
</div>