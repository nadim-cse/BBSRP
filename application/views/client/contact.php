<div class="jumbotron jumbotron-sm" id="contact">
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <h1 class="h1">
                Contact us <small>Feel free to contact us</small></h1>
        </div>
    </div>
</div>
</div>

<div class="container">
<div class="row">
    <div class="col-md-8">
        <div class="well well-sm">
            <?php echo form_open('Contact/ContactUs', array('class' => 'cform')); ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">
                            Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="email">
                            Email Address</label>
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                            </span>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required="required" /></div>
                    </div>
                    <div class="form-group">
                        <label for="subject">
                            Subject</label>
                        <select id="subject" name="subject" class="form-control" required="required">
                            <option value="na" selected="">Choose One:</option>
                            <option value="service">General Customer Service</option>
                            <option value="suggestions">Suggestions</option>
                            <option value="product">Product Support</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">
                            Message</label>
                        <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                            placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="success">
                    
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                        Send Message</button>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
    <div class="col-md-4 contact_right">
        <h4 class=" text-center">Contact Us</h4>
        <hr>
        <ul class="list-unstyled ">
           <div class="row">
               <div class="col-md-6">
                   <li><a href="#"><i class="glyphicon glyphicon-map-marker"></i>Bandarbazar, Sylhet, Bangladesh</a></li>
               </div>
               <div class="col-md-6">
                   <li><a href="#"><i class="glyphicon glyphicon-phone"></i> +880 1680 002485</a></li>
               </div>
           </div>
           <br>
           <div class="row">
               <div class="col-md-6">
                   <li><a href="#"><i class="glyphicon glyphicon-send"></i> +880 1759 287010</a></li>
               </div>
               <div class="col-md-6">
                   <li><a href="#"><i class="glyphicon glyphicon-envelope"></i>L-A Service @gmail.com</a></li>
               </div>
           </div>
        </ul>
    </div>
</div>
</div>
