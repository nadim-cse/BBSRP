<section class="forms">
    <div class="container-fluid">
          <header> 
            <h1 class="h3 display"><?php if(isset($parent)) echo $parent; ?> / <?php if(isset($title)) echo $title; ?></h1>
          </header>
          <div class="col-md-16 col-md-offset-3">
         
          <button class="btn btn-success" onclick="location.href='<?php echo site_url('Creation/AdminList')?>'">Current admin List</button>
                
            </div>
                <div class="row">
                    <div class="col-lg-12">
                      <div class="card">
                        <div class="card-header d-flex align-items-center">
                        <div class="col-md-12 col-md-offset-3">
                           <?php echo $this->session->flashdata('success'); ?>
                        </div>
                        
                        </div>
                
                       <div class="card-block">
                        
                       
                        <div class="form-group">
                        <?php echo form_open_multipart('creation/admin_create_request', array('class'=>'cat_form', 'id=' =>'upload_file')); ?> 
                            <p>User Name</p>
                            <input type="text" name="username"  class="form-control input-lg" id="inputlg" required>
                            <br>
                            <p>Passowrd</p>
                            <input type="password" name="password"  class="form-control input-lg" id="inputlg" required>
                            <br>
                      
                            <br>
                            <br>
                            
                           <p> Admin Avatar (Upload a small size png file)</p>
                           <input onchange="readURL(this);" type="file" name="admin_avatar" />
                            <img id="blah" src="#" alt="your image" />
                            <br>
                            <br>
                            
                            <br />
                        </div>  
                        
                        <input type="submit" value="Save" name="vehicle_create_request" id="create" class="btn btn-success">
                        
                       
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
  
     