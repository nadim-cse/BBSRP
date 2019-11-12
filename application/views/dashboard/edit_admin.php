<section class="forms">
    <div class="container-fluid">
          <header> 
            <h1 class="h3 display"><?php if(isset($parent)) echo $parent; ?> / <?php if(isset($title)) echo $title; ?></h1>
          </header>
          <div class="col-md-16 col-md-offset-3">
            </div>
                <div class="row">
                    <div class="col-lg-12">
                      <div class="card">
                        <div class="card-header d-flex align-items-center">
                        <div class="col-md-12 col-md-offset-3">
                           <?php echo $this->session->flashdata('success'); ?>
                        </div>
                        </div>
                     
                    
                     
                      <!-- <button class="btn btn-danger" onclick="deleteImage(<?php //echo $ad->vehicle_id;?>)">You Don't like this? Delete by clicking</button> -->
                      <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    
                                    <button class="btn btn-danger" data-toggle="modal" data-target="#password_modal">Change Password</button>
                                </div>
                            </div> 
                        
                        <?php  echo form_open_multipart('Dashboard/editadmindata');?>
                       <div class="card-block">
                       
                       
                      
                        <?php foreach($adminData as $ad): ?>
                     
                        <div class="container" id="service">
                        <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <label for="exampleInputEmail13">Admin Avatar</label>
                                   <p><img style="height:200px;width:200px;" src="<?php echo site_url($ad->admin_avatar);?>" alt=""></p>
                                        <!-- <input onchange="readURL(this);" type="file" name="admin_avatar" /> -->
                                        <input type="file" name="admin_avatar" >
                                    <!-- <img id="blah" src="#" alt="your image" /> -->
                                </div>
                                <input type="hidden" name="admin_id" value="<?php echo $ad->admin_id; ?>">
                            </div>
                            <?php $admin_id = $ad->admin_id; ?>
                            <input type="hidden" name="admin_id" value="<?php echo $ad->admin_id; ?>">
                            <!-- <input type="hidden" name="admin_avatar" value="<?php echo $ad->admin_avatar; ?>"> -->
                        <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <label for="exampleInputEmail1">User Name</label>
                                     <input type="text" value="<?php echo $ad->username; ?>" name="username" class="form-control" id="exampleInputEmail1" placeholder="Example Remove Tint(4)">
                                </div>
                                
                                
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <label for="exampleInputEmail12">Power</label>
                                    <input type="text" value="<?php echo $ad->power; ?>" name="power" class="form-control" id="exampleInputEmail12" placeholder="Example $10">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <label for="exampleInputEmail13">Admin Created Date</label>
                                   <p><?php echo date("d F, Y", strtotime($ad->admin_created_at));  ?></p>
                                </div>
                            </div> 
                             
                            
                             

                        </div> <!-- Service section end --> 
                        <?php endforeach;?>
                        <input type="submit" value="Save" name="admin_edit_request" id="create" class="btn btn-success">
                        
  
                   
                        </div>
                      
                      
                        <!-- <input type="submit" value="save"> -->
                        </div>
                        <?php echo form_close(); ?>
                
                    
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>
<!-- popUpRemove -->							
<div class="modal fade" id="password_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3>change password</h3>
            </div>
            
            <div class="modal-body">
    <?php echo form_open('Login/changepwd') ?>    
            <div class="form-group">
            <label class="col-md-12 control-label">Password</label>
            <div class="col-md-12 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input name="password" placeholder="Password" id="password" class="form-control" type="password" required="required">
                </div>

            </div>
        </div>

        <!-- Text input-->
  
        <div class="form-group">
            <label class="col-md-12 control-label">Confirm Password</label>
            <div class="col-md-12 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input name="confirm_password" id="confirm_password" placeholder="Confirm Password" class="form-control" type="password" required="required">
                    <span id='message'></span>
                </div>
            </div>
        </div>
        <input type="hidden" value="<?php echo $admin_id ?>" name = "admin_id">
  
            </div><!-- modal body end -->
            
            <div class="modal-footer center" >
                <button class="btn btn-primary" type="submit" name="submit" >Submit</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div><!-- modal-footer end -->
            <?php echo form_close();?>         
        </div><!-- modal-content end -->
    </div><!-- modal-dialog end -->
</div><!-- #popUpRemove end -->
<script>
<script>

</script>
$('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});
</script>




  
     