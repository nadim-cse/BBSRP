<div class="container appartment">
<div class="row">
   <div class="col-md-12">
      <br>
      <h4 class="text-center">Edit Ad</h4>
     
      
      <hr>
      <br>
   </div>
</div>

<form action="<?php echo site_url('Services/EditServiceForAppartment');?>" enctype="multipart/form-data" method="post" class="form-group">
<div class="col-md-6 col-md-offset-3 flash">
         <?php echo $this->session->flashdata('success'); ?>
    </div>
<?php foreach($EditData as $ed) :?>
<input type="hidden" value="<?php echo $ed->appartment_id?>" name="appartment_id">
<input type="hidden" value="<?php echo $ed->bed_image_url?>" name="bed_image_url">
<input type="hidden" value="<?php echo $ed->bath_image_url?>" name="bath_image_url">
<input type="hidden" value="<?php echo $ed->exterior_image_url?>" name="exterior_image_url">

<input type="hidden" value="<?php echo $ed->bed_image?>" name="bed_image_id">
<input type="hidden" value="<?php echo $ed->bath_image_id?>" name="bath_image">
<input type="hidden" value="<?php echo $ed->exterior_image_id?>" name="exterior_image_id">

  <div class="row">
      <div class="col-md-12">
         <div class="form-group">
            <label for="sel1">Select Type</label> <i class="glyphicon glyphicon-arrow-down"></i>
            <select class="form-control" id="sel1" name="service_type">
               <option value="<?php echo $ed->service_type; ?>"><?php echo $ed->service_type; ?></option>
               <option value="Sell">Sell</option>
               <option value="Rent">Rent</option>
            </select>
         </div>
         <div class="col-md-12">
            <div class="form-group">
               <label for="sel1">Enter A Title</label> <i class="glyphicon glyphicon-arrow-down"></i>
               <input type="text" value="<?php echo $ed->appartment_title; ?>" name="appartment_title" class="form-control" id="sell" />
               
            </div>
         </div>
      </div>
      <div class="col-md-6">
         <div class="form-group">
            <label for="sel1">Bed</label> <i class="glyphicon glyphicon-arrow-down"></i>
            <select class="form-control" id="sel1" name="bed">
               <option value="<?php echo $ed->bed; ?>"><?php echo $ed->bed; ?></option>
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="5">5</option>
               <option value="6">6</option>
               <option value="7">7</option>
               <option value="8">8</option>
               <option value="9">9</option>
               <option value="10">10</option>
            </select>
         </div>
      </div>
      <div class="col-md-6">
         <div class="form-group">
            <label for="sel1">Bath</label> <i class="glyphicon glyphicon-arrow-down"></i>
            <select class="form-control" name="bath" id="sel1">
               <option <?php echo $ed->bath; ?>><?php echo $ed->bath; ?></option>
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="5">5</option>
               <option value="6">6</option>
               <option value="7">7</option>
               <option value="8">8</option>
               <option value="9">9</option>
               <option value="10">10</option>
            </select>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-6">
         <div class="form-group">
            <label for="sel1">Style</label>
            <input type="text" value="<?php echo $ed->style; ?>" name="style" class="form-control" id="name"> 
         </div>
      </div>
      <div class="col-md-6">
         <div class="form-group">
            <label for="sel1">Price</label>
            <input type="number" value="<?php echo $ed->appertment_price; ?>" name="price" class="form-control" id="name"> 
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-6">
         <div class="form-group">
            <label for="sel1">City</label>
            <input type="name" value="<?php echo $ed->place ?>" name="place" class="form-control" id="name" readonly> 
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-6">
         <div class="form-group">
            <label for="sel1">Location</label>
            <input type="name" value="<?php echo $ed->sub_place; ?>" name="sub_place" class="form-control" id="name" readonly> 
         </div>
      </div>
      <div class="col-md-6">
         <div class="form-group">
            <label for="sel1">Space</label>
            <input type="name" value="<?php echo $ed->space; ?>" name="space" class="form-control" id="name" > 
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12">
         <div class="form-group">
            <label for="comment">Product Overview</label>
            <textarea class="form-control"  name="overview" rows="5" id="comment">
                <?php echo $ed->overview; ?> 
            </textarea>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12">
         <br>
         <h4 class="text-center">Property features</h4>
         <hr>
         <br>
      </div>
   </div> 
   <div class="row">
      <h5 class="text-center">Current Images (Agent Can't update Images)</h5>
      <div class="col-md-4">
          <div class="col-md-6 col-md-offset-3">
        
              </div>
          <img src="<?php echo site_url($ed->bed_image_url); ?>" class="img-responsive" style="height:200px;width:250px;"alt="">  
         <label for="sel1">Bed</label>

      </div>
      <div class="col-md-4">
        <img src="<?php echo site_url($ed->bath_image_url); ?>" class="img-responsive" style="height:200px;width:250px;"alt="">  
         
      </div>
      <div class="col-md-4">
        <img src="<?php echo site_url($ed->exterior_image_url); ?>" class="img-responsive" style="height:200px;width:250px;"alt="">  
         
      </div>
   </div>
   <div class="row">
      <div class="col-md-12">
         <br>
         <button type="submit" class="pull-right btn btn-success">Submit</button>
      </div>
   </div>
<?php endforeach;?>   
   
</form>
</div>