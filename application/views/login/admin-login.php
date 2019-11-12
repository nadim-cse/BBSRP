<!DOCTYPE html>
<html>
    <head>
      <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/login/css/style.css"> 
    <title><?php echo $title; ?></title>
    </head>
    <body>
  
    <div id="bg"></div>
    
    
    
     <?php echo form_open('login/admin_login'); ?>
     <div class="container"> 
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-center lead" style="color:#fff">Admin Panel</h2>
        </div>
      </div>
    </div> 
     <?php if(isset($errorLogin)) : ?>
           <div class="alert alert-danger" role="alert" >
                <p class="error"><?php echo $errorLogin; ?> </p>
           </div>  
                                
    <?php endif; ?>
    
  
    
        
      <label for=""></label>
      <input type="text" name="username" id="" placeholder="username" class="email">
        
      <label for=""></label>
      <input type="password" name="password" id="" placeholder="password" class="pass">

      <input type="hidden" name="role" value="admin">
        
      <button type="submit" class="btn btn-success">login to your account</button>

      
        
    <?php echo form_close(); ?>


    </body>
    <script src="<?php echo base_url(); ?>assets/dashboard/js/bootstrap.min.js"></script>   

</html>