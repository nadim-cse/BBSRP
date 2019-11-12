<div class="container setting">
        <div class="row">
        <div class="col-md-12 col-xs-12">
             <h2 class="text-center">Forget Password</h2>
             <h3 class="text-center">Enter Your Email Here</h3>
        </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php echo form_open('login/emailcheckforgetpassword', array('class' => 'forgetpwdemailcheck')); ?>
                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" class="input-height form-control" id="name" placeholder="Enter your email" name="email">
                </div>
                <div class="form-group">
                   
                  <button type="submit" class="margin-padding  btn btn-success">Submit</button>
                </div>
                <div class="SuccessMessageForgetPassword"></div>
                <?php echo form_close();    ?>
            </div>                      
         </div>    
    </div>

    