
    <div class="container">
    <div class="row">
        <!-- Register Modal-->
        <div class="modal fade sign-register-form" role="dialog" style="top: -55px !important;">
            <div class="modal-dialog modal-lg modal-md modal-sm modal-xs">
                <div class="modal-content">
                    <div class="modal-header">
                      <div class="row">
                           <div class="col-md-12 col-xs-12">      
                                <button type="button" class="close" data-dismiss="modal">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </button>
                            </div> 
                            <div class="col-md-12 col-xs-12"> 
                               <h2 class="text-center">Become a Agent</h2>
                            </div>    
                       </div>    
                    </div>
                    <div class="modal-body">
                        <div class="tab-content">
                            <div id="login-form" class="tab-pane fade in active">
                                <?php echo form_open_multipart('Login/AgentRegistration', array('class' => 'RegistrationForm')); ?>
                                  <div class="row">
                                        <div class="col-md-12">  
                                           <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" class="input-height form-control" id="name" placeholder="Enter your name" name="name" required>
                                            </div>
                                         </div>    
                                  </div>
                                  <div class="row">
                                        <div class="col-md-6">  
                                           <div class="form-group">
                                                <label for="age">Age</label>
                                                <input type="number" class="input-height form-control" id="age" placeholder="1-80" name="age" required>
                                            </div>
                                         </div>
                                         <div class="col-md-6">      
                                            <div class="form-group">
                                                <label for="mob">Mobile</label>
                                                <input type="number" class="input-height form-control" id="mob" placeholder="019-420-100-59" name="mobile" required>
                                            </div>
                                         </div>  
                                            
                                  </div>
                                  <div class="row">
                                      <div class="col-md-6">
                                           <div class="form-group">
                                                <label for="name">Location</label>
                                                 <select name="location" class="input-height form-control " required>
                                                    <option value="">Location</option>
                                                    <option value="Dhaka">Dhaka</option>
                                                    <option value="Chittagong">Chittagong</option>
                                                    <option value="Khulna">Khulna</option>
                                                    <option value="Rajshahi">Rajshahi</option>
                                                    <option value="Sylhet"> Sylhet</option>
                                                    <option value="Barishal">Barishal</option>
                                                    <option value="Rangpur">Rangpur</option>
                                             </select>
                                            </div>
                                      </div>

                                      <div class="col-md-6">
                                          <label for="name">Gender</label>
                                           <select name="gender" class="dropdown form-control" required>
                                            <option value="">Select a Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                      </div>
                                  </div>
                                    <div class="row">
                                      <!-- <div class="col-md-12">
                                           <div class="form-group">
                                                <label for="url">URL</label>
                                                <input type="text" class="input-height form-control" id="url" placeholder="Enter URL" name="url" required>
                                           </div>
                                      </div> -->
                                      <div class="col-md-12">      
                                            <div class="form-group">
                                                <label for="regemail">Email</label>
                                                <input type="email" class="input-height form-control" id="regemail" placeholder="example@example.com" name="email" required>

                                            </div>
                                            <div id="EmailError"></div>
                                       </div>   
                                    </div>
                                   <hr>
                                   <div class="col-md-12">    
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" class="input-height form-control" id="password" placeholder="Set Password " name="password" required>
                                            </div>
                                       </div> 
                                       <br>

                                    <div class="success"></div>
                                </div>
                               
                                  <div class="row">
                                    <div class="col-md-offset-9 col-md-3">   

                                    <button type="submit" class="margin-padding contact_button btn btn-default">Register</button>
                                    </div>
                                  </div>     

                                </form>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
         </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <!-- Login Modal-->
        <div class="modal fade login-register-form" role="dialog">
            <div id="md_dialog" class="modal-dialog modal-lg modal-md modal-sm modal-xs">
                <div class="modal-content">
                    <div class="modal-header">
                      <div class="row">
                           <div class="col-md-12 col-xs-12">      
                                <button type="button" class="close" data-dismiss="modal">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </button>
                            </div> 
                            <div class="col-md-12 col-xs-12"> 
                               <h2 class="text-center">Log In</h2>
                            </div>    
                       </div>    
                    </div>
                    <div class="modal-body">
                        <div class="tab-content">
                            <div id="login-form" class="tab-pane fade in active">
                                <?php echo form_open('Login/userlogin', array('class' => 'userloginform')) ?>
                                  <div class="row">
                                        <div class="col-md-12">  
                                           <div class="form-group">
                                                <label for="logemail">Email</label>
                                                <input type="email" class="input-height form-control" id="logemail" placeholder="Enter your email" name="email" required>
                                            </div>
                                         </div>    
                                  </div>
                                  <div class="row">
                                        <div class="col-md-12">  
                                           <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" class="input-height form-control" id="number" placeholder="Enter password" name="password" required>
                                                <input type="hidden" name="role" value="user">
                                            </div>
                                         </div>    
                                  </div>
                                  <div class="row">
                                    <div class="SuccessMessageLogin" id="successlogin">

                                   
                                    </div> 
                                    </div>
                                  <div class="row">
                                    <div class="col-md-offset-9 col-md-3">  
                                    <button type="submit" class="margin-padding contact_button btn btn-default">Log In</button>
                                    </div>
                                  </div> 
                                  <br>   
                                  <div class="row">
                                    <div class="col-md-12">  
                                        <h5 class="text-center">Forget Your Password ? <a href="<?php echo site_url('Login/ForgetPassword'); ?>" >Click here</a></h5>
                                    </div>
                                  </div>  
                                  <div class="row">
                                    <div class="col-md-12">  
                                        <h5 class="text-center">If you don't have an account yet ? Sign up <a href="javascript:;" onclick="Registration();">here</a></h5>
                                    </div>
                                  </div>   

                                <?php echo form_close() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <!-- Appartment agent modal-->
        <div class="modal fade contact-agent-form" role="dialog">
            <div class="modal-dialog modal-lg modal-md modal-sm modal-xs">
                <div class="modal-content">
                    <div class="modal-header">
                      <div class="row">
                           <div class="col-md-12 col-xs-12">      
                                <button type="button" class="close" data-dismiss="modal">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </button>
                            </div> 
                            <div class="col-md-12 col-xs-12"> 
                               <h2 class="text-center">Contact Agent</h2>
                            </div>    
                       </div>    
                    </div>
                    <div class="modal-body">
                        <div class="tab-content">
                            <div id="login-form" class="tab-pane fade in active">
                                <?php echo form_open('Services/SendRequestToAgent', array('class' => 'bookingform')) ?>
                                  <div class="row">
                                        <div class="col-md-12">  
                                           <div class="form-group">
                                                <label for="reqname">Name</label>
                                                <input type="text" class="input-height form-control" id="reqname" placeholder="Enter your name" name="name" required>
                                                <input type="hidden" name="agent_id" value="">
                                                 <input type="hidden" name="appartment_id"value="">
                                                 <input type="hidden" name="agent_email" value="">
                                                
                                            </div>
                                         </div>
                                        <div class="col-md-12">  
                                           <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="input-height form-control" id="email" placeholder="Ex: test@gmail.com" name="email" required>
                                            </div>
                                         </div>  
                                         <div class="col-md-12">      
                                            <div class="form-group">
                                                <label for="reqnumber">Mobile</label>
                                                <input type="number" class="input-height form-control" id="reqnumber" placeholder="017-111-111-11" name="mobile" required>
                                            </div>
                                         </div>
                                         
                                         <div class="col-md-12">      
                                            <div class="form-group">
                                                <label for="text"></label>
                                                 <textarea class="form-control" rows="5" name="message" id="text" placeholder="Write details..."></textarea>
                                            </div>
                                         </div>  
                                         <div class="SuccessMessage">
                                            
                                         </div>    
                                  </div>
                           
                                 
                                  <div class="row">
                                    <div class="col-md-offset-9 col-md-3">   

                                    <button type="submit" class="margin-padding contact_button btn btn-default">Contact agent</button>
                                    </div>
                                  </div>     

                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
         </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <!-- Land agent modal-->
        <div class="modal fade contact-agent-form-for-land" role="dialog">
            <div class="modal-dialog modal-lg modal-md modal-sm modal-xs">
                <div class="modal-content">
                    <div class="modal-header">
                      <div class="row">
                           <div class="col-md-12 col-xs-12">      
                                <button type="button" class="close" data-dismiss="modal">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </button>
                            </div> 
                            <div class="col-md-12 col-xs-12"> 
                               <h2 class="text-center">Contact Agent</h2>
                            </div>    
                       </div>    
                    </div>
                    <div class="modal-body">
                        <div class="tab-content">
                            <div id="login-form" class="tab-pane fade in active">
                                <?php echo form_open('Services/SendRequestToAgentForLand', array('class' => 'bookingformland')) ?>
                                  <div class="row">
                                        <div class="col-md-12">  
                                           <div class="form-group">
                                                <label for="agentname">Name</label>
                                                <input type="text" class="input-height form-control" id="agentname" placeholder="Enter your name" name="name" required>
                                                <input type="hidden" name="agent_id" value="">
                                                 <input type="hidden" name="land_id" value="">
                                                 <input type="hidden" name="agent_email" value="">
                                                 
                                                
                                            </div>
                                         </div>
                                        <div class="col-md-12">  
                                           <div class="form-group">
                                                <label for="agentemail">Email</label>
                                                <input type="email" class="input-height form-control" id="agentemail" placeholder="Ex: test@gmail.com" name="email" required>
                                            </div>
                                         </div>  
                                         <div class="col-md-12">      
                                            <div class="form-group">
                                                <label for="agentnumber">Mobile</label>
                                                <input type="number" class="input-height form-control" id="agentnumber" placeholder="019-420-100-59" name="mobile" required>
                                            </div>
                                         </div>
                                         
                                         <div class="col-md-12">      
                                            <div class="form-group">
                                                <label for="text"></label>
                                                 <textarea class="form-control" rows="5" name="message" id="comment" placeholder="Write details..."></textarea>
                                            </div>
                                         </div>  
                                         <div class="SuccessMessage">
                                            
                                         </div>    
                                  </div>
                           
                                 
                                  <div class="row">
                                    <div class="col-md-offset-9 col-md-3">   

                                    <button type="submit" class="margin-padding contact_button btn btn-default">Contact agent</button>
                                    </div>
                                  </div>     

                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
</div>
<footer>
<div class="container-fluid footer_light">
   <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4>ABOUT US</h4>
                <hr>
                <p>L-A Service is website which promotes home and land services posted by agent to sell/rent all over the country to be benifited commercially both agent and client</p>
            </div>
            <div class="col-md-3">
                <h4>QUICK LINKS</h4>
                <hr>
                <ul class="list-unstyled quick_link">
                    <li><a href="<?php echo site_url(''); ?>"><i class="glyphicon glyphicon-hand-right"></i> Home</a></li>
                    <li><a href="<?php echo site_url('Home/Testimonials') ?>"><i class="glyphicon glyphicon-hand-right"></i> Testimonial</a></li>
                    <li><a href="<?php echo site_url('Contact') ?>"><i class="glyphicon glyphicon-hand-right"></i> contact us</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h4>SERVICES</h4>
                <hr>
                <ul class="list-unstyled quick_link">
                    <li><a href="#"> Apartment</a></li>
                    <li><a href="<?php echo site_url('Services/ViewService/'.'Appartment/'.'Sell'); ?>"><i class="glyphicon glyphicon-hand-right"></i> sell</a></li>
                    <li><a href="<?php echo site_url('Services/ViewService/'.'Appartment/'.'Rent'); ?>"><i class="glyphicon glyphicon-hand-right"></i> rent</a></li>
                    
                    <br>
                    <li><a href="#"> Land</a></li>
                    <li><a href="<?php echo site_url('Services/ViewServiceForLand/'.'Land/'.'Sell'); ?>"><i class="glyphicon glyphicon-hand-right"></i> sell</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h4>CONTACT US</h4>
                <hr>
                <ul class="list-unstyled quick_link">
                    <li><a href="#"><i class="glyphicon glyphicon-map-marker"></i> Bandarbazar, Sylhet, Bangladesh.</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-phone"></i> +880 1680 002485</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-send"></i> +880 1759 287010</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-envelope"></i> laservice@gmail.com</a></li>
                </ul>
            </div>
        </div>
   </div>    
</div>
<div class="container-fluid copy_right">
    <p class="text-center">Copyright ©2018, L-A Service. All Rights Reserved.</p>
</div>

</footer>    


<!-- Script file-->
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/bootstrap.min.js"></script>

<script>
    function Registration(){

        $('.login-register-form').modal('hide');
        $('.sign-register-form').modal('show');
        
    }
</script>
<script>
    $(document).ready(function(){

	$('form.RegistrationForm').on('submit', function(form){
    
    form.preventDefault();
     
    var URL = '<?php echo site_url('Login/AgentRegistration') ?>';
    
    $.post(URL , $('form.RegistrationForm').serialize(), function(data){

      if(data == '0'){
          
          document.getElementById("EmailError").innerHTML = "<div class='col-md-12 alert alert-danger'>This email is aleady thaken</div>";
      }
      else{
        $('.success').html(data);
        //setTimeout(function () { window.location.reload(); }, 3000);
      }
       
	})
							
							
    });
    
    
});
</script>
<script>
    $(document).ready(function(){

	$('form.cform').on('submit', function(form){
    
    form.preventDefault();
     
    var URL = '<?php echo site_url('Contact/ContactUs') ?>';
    
    $.post(URL , $('form.cform').serialize(), function(data){

      $('.success').html(data);
      
      setTimeout(function () { window.location.reload(); }, 5000);
       
	})
							
							
    });
    
    
});
</script>

<script>

$(document).ready(function(){

    $("#DivisionList").on('change', function (){

        var CityName = $(this).val();
       // console.log(CityName);
        if(CityName == 'Dhaka'){

            document.getElementById("place-form").innerHTML = '<div class="row"> <div class="col-md-12"> <div class="form-group"> <label for="sel1">Place</label> <i class="glyphicon glyphicon-arrow-down"></i> <select class="form-control" id="place"> <option value="select place">-- Select A Place --</option> <br>value="1">Select place</option> <br><option>Mirpur</option> <option> Uttara</option> <option>Dhanmondi</option> <option>Mohammadpur</option> <option> Gulshan</option> <option class="divider"></option> </select> </div></div></div></div>'; 

            document.getElementById("servicelists-form").innerHTML = '<div class="row"><div class="col-md-12"><div class="form-group">Select A Service Name<i class="glyphicon glyphicon-arrow-down"></i><select class="form-control" id="ServiceName"><option value="Select" selected>Select A Service Name</option><option value="Appartment">Appartment</option><option value="Land">Land</option></select></div></div></div>';
            
        }
        if(CityName == 'Chittagong'){

            document.getElementById("place-form").innerHTML = '<div class="row"> <div class="col-md-12"> <div class="form-group"> <label for="sel1">Place</label> <i class="glyphicon glyphicon-arrow-down"></i> <select class="form-control" id="place"> <option value="select place">-- Select A Place --</option> <br>value="Agrabad">Agrabad</option> <option value="Chokbazar">Chokbazar</option> <option value="Halishohor">Halishohor</option> <option value="Chadgao">Chadgao</option> <option value="Nasirabad">Nasirabad</option>  </select> </div></div></div></div>'; 

            document.getElementById("servicelists-form").innerHTML = '<div class="row"><div class="col-md-12"><div class="form-group">Select A Service Name<i class="glyphicon glyphicon-arrow-down"></i><select class="form-control" id="ServiceName"><option value="Select" selected>Select A Service Name</option><option value="Appartment">Appartment</option><option value="Land">Land</option></select></div></div></div>';
            
        }
        if(CityName == 'Khulna'){

            document.getElementById("place-form").innerHTML = '<div class="row"> <div class="col-md-12"> <div class="form-group"> <label for="sel1">Place</label> <i class="glyphicon glyphicon-arrow-down"></i> <select class="form-control" id="place"><option value="Khulna sadar">Khulna sadar</option> <option value="Shonadanga">Shonadanga</option> <option value="Kalishpur">Kalishpur</option> <option value="Daulotpur">Daulotpur</option> <option value="Rupsha">Rupsha</option> <option class="divider"></option> </select> </div></div></div></div>'; 

            document.getElementById("servicelists-form").innerHTML = '<div class="row"><div class="col-md-12"><div class="form-group">Select A Service Name<i class="glyphicon glyphicon-arrow-down"></i><select class="form-control" id="ServiceName"><option value="Select" selected>Select A Service Name</option><option value="Appartment">Appartment</option><option value="Land">Land</option></select></div></div></div>';
            
        }
         if(CityName == 'Rajshahi'){

            document.getElementById("place-form").innerHTML = '<div class="row"> <div class="col-md-12"> <div class="form-group"> <label for="sel1">Place</label> <i class="glyphicon glyphicon-arrow-down"></i> <select class="form-control" id="place"> <option value="select place">-- Select A Place --</option> <br>value="Shaheb bazar">Shaheb bazar</option> <option value="Uposhohor">Uposhohor</option> <option value="Kajla">Kajla</option> <option value="Lokkhipur">Lokkhipur</option> <option value="Noudapara">Noudapara</option></select> </div></div></div></div>'; 
            
            document.getElementById("servicelists-form").innerHTML = '<div class="row"><div class="col-md-12"><div class="form-group">Select A Service Name<i class="glyphicon glyphicon-arrow-down"></i><select class="form-control" id="ServiceName"><option value="Select" selected>Select A Service Name</option><option value="Appartment">Appartment</option><option value="Land">Land</option></select></div></div></div>';
        }
        if(CityName == 'Sylhet'){

            document.getElementById("place-form").innerHTML = '<div class="row"> <div class="col-md-12"> <div class="form-group"> <label for="sel1">Place</label> <i class="glyphicon glyphicon-arrow-down"></i> <select class="form-control" id="place"> <option value="select place">-- Select A Place --</option> <option value="Zindabazar">Zindabazar</option> <option value="Amborkhan">Amborkhan</option> <option value="South surma">South surma</option> <option value="Uposhohor">Uposhohor</option> <option value="Bandar Bazar">Bandar Bazar</option> <option value="Airport Road">Airport Road</option> <option value="Akhaliya">Akhaliya</option> <option value="Kumarpara">Kumarpara</option> </select> </div></div></div></div>'; 

            document.getElementById("servicelists-form").innerHTML = '<div class="row"><div class="col-md-12"><div class="form-group">Select A Service Name<i class="glyphicon glyphicon-arrow-down"></i><select class="form-control" id="ServiceName"><option value="Select" selected>Select A Service Name</option><option value="Appartment">Appartment</option><option value="Land">Land</option></select></div></div></div>';
            
        }
        if(CityName == 'Barishal'){

            document.getElementById("place-form").innerHTML = '<div class="row"> <div class="col-md-12"> <div class="form-group"> <label for="sel1">Place</label> <i class="glyphicon glyphicon-arrow-down"></i> <select class="form-control" id="place"> <option value="select place">-- Select A Place --</option> <br>value="Sadar Road">Sadar Road</option> <option value="Natullahbad">Natullahbad</option> <option value="Rupatoli">Rupatoli</option> <option value="Amtla">Amtla</option></select> </div></div></div></div>'; 
            
            document.getElementById("servicelists-form").innerHTML = '<div class="row"><div class="col-md-12"><div class="form-group">Select A Service Name<i class="glyphicon glyphicon-arrow-down"></i><select class="form-control" id="ServiceName"><option value="Select" selected>Select A Service Name</option><option value="Appartment">Appartment</option><option value="Land">Land</option></select></div></div></div>';
        }
        if(CityName == 'Rongpur'){

            document.getElementById("place-form").innerHTML = '<div class="row"> <div class="col-md-12"> <div class="form-group"> <label for="sel1">Place</label> <i class="glyphicon glyphicon-arrow-down"></i> <select class="form-control" id="place"> <option value="select place">-- Select A Place --</option> <br>value="Jahaz company mur">Jahaz company mur</option> <option value="Dhap">Dhap</option> <option value="Shapla chattar">Shapla chattar</option> <option value="Lalbag mur">Lalbag mur</option> <option value="Shath matha chattar">Shath matha chattar</option></select> </div></div></div></div>'; 

            document.getElementById("servicelists-form").innerHTML = '<div class="row"><div class="col-md-12"><div class="form-group">Select A Service Name<i class="glyphicon glyphicon-arrow-down"></i><select class="form-control" id="ServiceName"><option value="Select" selected>Select A Service Name</option><option value="Appartment">Appartment</option><option value="Land">Land</option></select></div></div></div>';
            
        }
        if(CityName == 'select'){
            document.getElementById("place-form").innerHTML = '';
            document.getElementById("servicelists-form").innerHTML = '';
        }
        

        
         
        // 
        
        $("#place").on('change', function (){
            
            var PlaceName = $(this).val(); 
            //console.log(PlaceName); 
            $("#ServiceName").on('change', function (){


                    var ServiceName = $(this).val();
             
                    if(ServiceName == 'Appartment'){
                       
                        document.getElementById("appartment-form").innerHTML = '<div class="container appartment"> <div class="row"> <div class="col-md-12"> <br><h4 class="text-center">Property details (appartment)</h4> <hr> <br></div></div><form action="<?php echo site_url('Services/CreateNewServiceForAppartment');?>" enctype="multipart/form-data" method="post" class="form-group"> <div class="row"> <div class="col-md-12"> <div class="form-group"> <label for="sel1">Select Type</label> <i class="glyphicon glyphicon-arrow-down"></i> <select class="form-control" id="sel1" name="service_type" id="ServiceType"> <option>Select A type</option> <option value="Sell">Sell</option> <option value="Rent">Rent</option> </select> </div></div><div class="col-md-12"> <div class="form-group"> <label for="sel1">Enter A Title</label> <input type="text" name="appartment_title" class="form-control" id="sell"/> </div></div><div class="col-md-6"> <div class="form-group"> <label for="sel1">Bed</label> <i class="glyphicon glyphicon-arrow-down"></i> <select class="form-control" id="sel2" name="bed"> <option>Number</option> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option> <option value="6">6</option> <option value="7">7</option> <option value="8">8</option> <option value="9">9</option> <option value="10">10</option> </select> </div></div><div class="col-md-6"> <div class="form-group"> <label for="sel1">Bath</label> <i class="glyphicon glyphicon-arrow-down"></i> <select class="form-control" name="bath" id="sel1"> <option>Number</option> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option> <option value="6>6</option> <option value="7">7</option> <option value="8">8</option> <option value="9">9</option> <option value="10">10</option> </select> </div></div></div><div class="row"> <div class="col-md-6"> <div class="form-group"> <label for="sel1">Style</label> <input type="text" name="style" class="form-control" id="sell" required> </div></div><div class="col-md-6"> <div class="form-group"> <label for="sel1">Price</label> <input type="number" name="price" class="form-control" id="name" required> </div></div></div><div class="row"> <div class="col-md-6"> <div class="form-group"> <label for="sel1">Space</label> <input type="name" name="space" class="form-control" id="name" required> </div></div></div><div class="row"> <div class="col-md-12"> <div class="form-group"> <label for="comment">Product Overview</label> <textarea class="form-control" name="overview" rows="5" id="comment" required></textarea> </div></div></div><div class="row"> <div class="col-md-12"> <br><h4 class="text-center">Property features</h4> <hr> <br></div></div><div class="row"> <h5 class="text-center">Upload Photo</h5> <div class="col-md-4"> <label for="sel1">Bed</label> <input type="file" name="bed_image" class="form-control" id="file" required> </div><div class="col-md-4"> <label for="sel1">Bathroom</label> <input type="file" name="bath_image" class="form-control" id="sell" required> </div><div class="col-md-4"> <label for="sel1">Exterior Features</label> <input type="file" name="exterior_image" class="form-control" id="sell" required> </div></div><div class="row"> <div class="col-md-12"><h2 style="color: red;font-weight: bold;font-size: 34px;font-family: sans-serif;">We will charged 2% after this appartment sell or rent through our website.</h2> </div></div><div class="row"> <div class="col-md-12"> <div style="font-size:20px" id="accept"><input type="checkbox" id="chkAgree" onclick="goFurther()" > I Accept the condition</div></div><div class="row"> <div class="col-md-12"> <br><button type="submit" class="pull-right btn btn-success" id="btnSubmit" disabled>Submit</button>  </div></div><input type="hidden" name="service" value=" '+ServiceName+'"/> <input type="hidden" name="place" value=" '+CityName+'"/> <input type="hidden" name="sub_place" value=" '+PlaceName+'"/> </form> </div>';
                        
    
                        document.getElementById("land-form").innerHTML = '';
                    }
                    if(ServiceName == 'Land'){
                        document.getElementById("appartment-form").innerHTML = '';
                        document.getElementById("land-form").innerHTML = '<div class="container land"> <div class="row"> <div class="col-md-12"> <br><h4 class="text-center">Property details (Land)</h4> <hr> <br></div></div><form action="<?php echo site_url('Services/CreateNewServiceForLand');?>" enctype="multipart/form-data" method="post" class="form-group"> <div class="row"> <div class="col-md-12"> <div class="form-group"> <label for="sel22">Select Type</label> <i class="glyphicon glyphicon-arrow-down"></i> <select class="form-control" id="sel22" name="service_type"> <option>Select A type</option> <option value="Sell">Sell</option> </select> </div></div></div><div class="row"> <div class="col-md-6"> <div class="form-group"> <label for="sel1">Title</label> <input type="text" class="form-control" name="land_title" id="name"> </div></div><div class="col-md-6"> <div class="form-group"> <label for="sel1">Space</label> <input type="text" class="form-control" name="space" id="name"> </div></div></div><div class="row"> <div class="col-md-6"> <div class="form-group"> <label for="sel1">Price</label> <input type="hidden" name="service" value="'+ServiceName+'"/> <input type="number" name="price" class="form-control" id="name"> </div></div><div class="col-md-6"> <div class="form-group"> <label for="sel1">Upload Photo</label> <input type="file" name="land_image" class="form-control" id="file"> </div></div></div><div class="row"> <div class="col-md-12"> <div class="form-group"> <label for="sell">Product Overview</label> <textarea class="form-control" name="overview" rows="5" id="sell"></textarea> </div></div></div><div class="row"> <div class="col-md-12"> <h2 style="color: red;font-weight: bold;font-size: 34px;font-family: sans-serif;">We will charged 2% after this land sell through our website.</h2> </div></div><div class="row"> <div class="col-md-12"> <div style="font-size:20px" id="accept"> <input type="checkbox" id="chkAgree" onclick="goFurther()">I Accept the condition </div></div></div><div class="row"> <div class="col-md-12"> <br><button type="submit" class="pull-right btn btn-success" id="btnSubmit" disabled>Submit</button> </div></div><input type="hidden" name="service" value=" '+ServiceName+'"/> <input type="hidden" name="place" value=" '+CityName+'"/> <input type="hidden" name="sub_place" value=" '+PlaceName+'"/> </div></div></form></div>';
                    }
                    if(ServiceName == 'Select'){
                        window.location.reload();
                    }
                  
                

            });


         });

           
            
			

        });


        });
       
      
</script>

<script>
     $(document).ready(function(){
        $('form.aform').on('submit', function(form){
    
            form.preventDefault();
            
            var URL = '<?php echo site_url('Services/AccountUpdate') ?>';
            
            $.post(URL ,$('form.aform').serialize(), function(data){
        
            $('.SuccessMessageAccount').html(data);
            
            setTimeout(function () { window.location.reload(); }, 5000)
            
            
            })
                                
                                    
            });

     });
</script>

<script>
     $(document).ready(function(){
        $('form.pform').on('submit', function(form){
    
            form.preventDefault();
            
            var URL = '<?php echo site_url('Services/AccountPasswordUpdate') ?>';
            
            $.post(URL ,$('form.pform').serialize(), function(data){
        
            $('.SuccessMessageAccountPassword').html(data);
            
            setTimeout(function () { window.location.reload(); }, 5000)
            
            
            })
                                
                                    
            });

     });
</script>

 <script>
$('#password, #confirm_password').on('keyup', function () {

        
  if ($('#password').val() == $('#confirm_password').val()) {
    document.getElementById("PWDButton").disabled = false;
    //$('#message').html('Matching').css('color', 'green');
   
  } else 
   document.getElementById("PWDButton").disabled = true;
    //$('#message').html('Not Matching').css('color', 'red');
});
</script>



<script>
    function readURLOne(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#bed_image')
                        .attr('src', e.target.result)
                        .width(250)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURLTwo(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#bath_image')
                        .attr('src', e.target.result)
                        .width(250)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURLThree(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#exterior_image')
                        .attr('src', e.target.result)
                        .width(250)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }    
    
    </script>
<script>
    
    $(document).ready(function(){
        $('form.userloginform').on('submit', function(form){
    
            form.preventDefault();
            
            var URL = '<?php echo site_url('Login/userlogin') ?>';
            
            $.post(URL ,$('form.userloginform').serialize(), function(data){
                
           
            if(data == '0'){

                document.getElementById("successlogin").innerHTML = "<div class='col-md-12 col-sm-4'>Username or password do not matched..Try again</div>";
                
            }   
            else{
                document.getElementById("successlogin").innerHTML = "<div class='col-md-12 col-sm-4'>Login Successful. Redirect To Home Page in 5 Second </div>";
                setTimeout(function () { window.location.reload(); }, 5000)
            }
            //$('.SuccessMessageLogin').html(data);
            
            //setTimeout(function () { window.location.reload(); }, 5000)
            
            
            })
                                
                                    
            });

     });
</script>
<script>
    
    $(document).ready(function(){
        $('form.forgetpwdemailcheck').on('submit', function(form){
    
            form.preventDefault();
            
            var URL = '<?php echo site_url('Login/emailcheckforgetpassword') ?>';
            
            $.post(URL ,$('form.forgetpwdemailcheck').serialize(), function(data){
                
                console.log(data);
            //$('.SuccessMessageForgetPassword').html(data);
            
            //setTimeout(function () { window.location.reload(); }, 5000)
            
            
            })
                                
                                    
            });

     });
</script>
<script>
$(document).ready(function(){
        $('form.TestimonialsForm').on('submit', function(form){
    
            form.preventDefault();
            
            var URL = '<?php echo site_url('Home/Save') ?>';
            
            $.post(URL ,$('form.TestimonialsForm').serialize(), function(data){
                
        
            $('.ReviewPosted').html(data);
            
            setTimeout(function () { window.location.reload(); }, 5000)
            
            
            })
                                
                                    
            });

     });
  
</script>
<script>
function confirmDialog() {
    return confirm("Are you sure you want to delete this record?")
}
</script>


<!-- Contact Agent Form show and submit start -->
<script>
   

function ContactAgent(AgentID,AppartmentID){
        
       $('.contact-agent-form').modal('show');
        
        $.ajax({
				type: 'ajax',
				method: 'get',
				url: '<?php echo base_url() ?>Services/GetAgentAndServiceDetails',
				data: {agent_id: AgentID, appartment_id: AppartmentID},
				async: false,
				dataType: 'json',
				success: function(data){
					
                    
                    $('input[name=agent_id]').val(data.agent_id);
                    $('input[name=appartment_id]').val(data.appartment_id);
                    $('input[name=agent_email]').val(data.agent_email);       
                    
                    console.log(data);
                    
					
				},
				error: function(){
					alert('Ajax failour');
				}
	  });
     
       
        
     
    }
  
</script>

<script>
   

function ContactAgentForLand(AgentID,LandID){
        
       $('.contact-agent-form-for-land').modal('show');
        
        
        $.ajax({
				type: 'ajax',
				method: 'get',
				url: '<?php echo base_url() ?>Services/GetAgentAndServiceDetailsForLand',
				data: {agent_id: AgentID, land_id: LandID},
				async: false,
				dataType: 'json',
				success: function(data){
					
                     
                    
                    $('input[name=agent_id]').val(data.agent_id);
                    $('input[name=land_id]').val(data.land_id);
                    $('input[name=agent_email]').val(data.agent_email); 
                    console.log(data);
                    
                    
                    
					
				},
				error: function(){
					alert('Ajax failour');
				}
	  });
     
       
        
     
    }
  
</script>
<script>
     $(document).ready(function(){
        $('form.bookingformland').on('submit', function(form){
    
            form.preventDefault();
            
            var URL = '<?php echo site_url('Services/SendRequestToAgentForLand') ?>';
            
            $.post(URL ,$('form.bookingformland').serialize(), function(data){
        
            $('.SuccessMessage').html(data);
            
            console.log(data);
            //setTimeout(function () { window.location.reload(); }, 5000)
            
            
            })
                                
                                    
            });

     });
</script>


<script>
     $(document).ready(function(){
        $('form.bookingform').on('submit', function(form){
    
            form.preventDefault();
            
            var URL = '<?php echo site_url('Services/SendRequestToAgent') ?>';
            
            $.post(URL ,$('form.bookingform').serialize(), function(data){
        
            //$('.SuccessMessage').html(data);
            console.log(data);
            
            //setTimeout(function () { window.location.reload(); }, 40000)
            
            
            })
                                
                                    
            });

     });

</script>


<script type="text/javascript">
function goFurther(){
    if (document.getElementById("chkAgree").checked == true)
    document.getElementById("btnSubmit").disabled = false;
    else
    document.getElementById("btnSubmit").disabled = true;
    }
</script>
<!-- Contact Agent Form show and submit ends -->
</body>
</html>