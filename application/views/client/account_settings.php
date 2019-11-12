<div class="container setting">
<?php foreach($AccountData as $ad) :?>
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">Settings</h3>
                <h4>Change details</h4>
                <hr>
                <br>
                <p><strong> Email: </strong> <?php echo $ad->agent_email;  ?></p>
            </div>
        </div>
        <?php echo form_open('Sevices/AccountUpdate', array('class' => 'aform')); ?>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" value="<?php echo $ad->agent_name;  ?>" class="input-height form-control" id="name"  name="agent_name">
                </div>
            </div>
            <div class="col-md-offset-6"></div>
        </div>
       <div class="row">
           <div class="col-md-6">
               <div class="form-group">
                    <label for="name">Location</label>
                    <input type="text" value="<?php echo $ad->agent_location;  ?>" class="input-height form-control" id="name"  name="location">
                </div>
           </div>
           
       </div> 
       <div class="row">
           <div class="col-md-6">
               <div class="form-group">
                    <label for="name">Mobile</label>
                    <input type="text" value="<?php echo $ad->agent_mobile;  ?>" class="input-height form-control" id="name" placeholder="Ex. Sylhet" name="mobile">
                    <input type="hidden" name="agent_id" value="<?php echo $ad->agent_id;  ?>">
                </div>
           </div>
           
       </div>
       <div class="row">
           <div class="col-md-12">
               <button type="submit" class="btn btn-success">Update details</button>
           </div>
       </div> 
       <div class="row">
           <div class="col-md-12">
               <div class="SuccessMessageAccount"></div>
           </div>
       </div> 
      <?php echo form_close()?> 
<?php endforeach; ?>      
       <br>  
       <br>
       <hr>   
<?php foreach($AccountData as $ad) :?>       
       <div class="row">
            <div class="col-md-12">
                <h4>Change password</h4>
                <hr>
            </div>
        </div>  
        
         <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password">Current password</label>
                    <input type="password" value="<?php echo $ad->agent_password; ?>" class="input-height form-control" id="name"  name="password">
                </div>
            </div>
            <div class="col-md-offset-6"></div>
        </div>
        <?php echo form_open('Services/AccountPasswordUpdate', array('class' => 'pform')); ?>
         <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password">New password</label>
                    <input type="password" class="input-height form-control" id="password"  name="agent_password">
                </div>
            </div>
            <div class="col-md-offset-6"></div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password">Confirm new password</label>
                    <input type="password" class="input-height form-control" id="confirm_password"  name="password">
                    <input type="hidden" name="agent_id" value="<?php echo $ad->agent_id; ?>">
                </div>
            </div>
            <div class="col-md-offset-6"></div>
        </div>  
        <div class="row">
           <div class="col-md-6" id="message">
               <div style="font-weight:bold" ></div>
           </div>
       </div>
       <div class="row">
          
               <div classs="SuccessMessageAccountPassword"></div>

       </div> 
        <div class="row">
           <div class="col-md-12">
               <button type="submit" name="submit" id="PWDButton" class="btn btn-success">Change password</button>
           </div>
       </div> 
       <?php echo form_close()?>  
       
       
       <hr> 
       <div class="row">
           <div class="col-md-12">
              <a href="<?php echo site_url('Login/user_logout'); ?>" class="btn btn-danger"><i class="glyphicon glyphicon-log-out"></i> Logout</a>
               <!-- <button type="submit" class="btn btn-danger"><i class="fa fa-sign-out" aria-hidden="true"></i>
                Log out </button> -->
           </div>
       </div>
       
       
       <hr>                               
             
    </div>
<?php endforeach; ?>   
    