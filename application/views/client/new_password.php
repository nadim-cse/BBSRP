<div class="container setting">
        <div class="row">
        <div class="col-md-12 col-xs-12">
             <h2 class="text-center">New Password</h2>
        </div>
        </div>
        <div class="row" style="margin-top:100px">
            <div class="col-md-12">
                <?php echo form_open('login/UpdateNewPassword', array('class' => '')); ?>
                <div class="form-group">
                    <p><?php if(isset($email)) echo $email; ?>
                </div>
                <div class="form-group">
                   
                    <input type="password" class="input-height form-control" id="password"  name="password">
                    <input type="hidden" name="email" value="<?php if(isset($email)) echo $email; ?>">
                </div>
                <div class="form-group">
                   
                    <input type="password" class="input-height form-control" id="confirm_password" >
                </div>
                <div class="form-group">
                   
                  <button type="submit" class="margin-padding btn btn-success" id="PWDButton" >Change</button>
                </div>
                <div class="SuccessMessageForgetPassword"></div>
                <?php echo form_close();    ?>
            </div>                      
         </div>    
    </div>

    