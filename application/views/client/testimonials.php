<div class="container setting">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">Give Us Review</h3>
                <hr>
                <br>
            </div>
        </div>
        <?php  echo form_open('Home/Save', array('class' => 'TestimonialsForm'));?>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="input-height form-control" id="name" placeholder="Enter Your Name" name="name" required>
                </div>
            </div>
            <div class="col-md-12"></div>
        </div>
       <div class="row">
           <div class="col-md-12">
               <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" class="input-height form-control" id="name" placeholder="example@example.com" name="email" required>
                </div>
           </div>
       </div> 
       <div class="row">
           <div class="col-md-12">
            <div class="form-group">
               <textarea name="review" class="input-height form-control"  cols="30" rows="10" id="" required></textarea>
             
               </div>   
           </div>
       </div> 
       <div class="row">
           <div class="col-md-12">
               <button type="submit" class="btn btn-success">Done</button>
           </div>
       </div> 
       <?php  echo form_close();?>
       <br>  
       <div class="ReviewPosted"></div>
       <br>                              
    </div>