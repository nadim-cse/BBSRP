<section class="forms">
    <div class="container-fluid">
          <header> 
            <h1 class="h3 display"><?php if(isset($home)) echo $home; ?> / <?php if(isset($breadcumbs)) echo $breadcumbs; ?></h1>
          </header>
          <div class="col-md-16 col-md-offset-3">
            </div>
                <div class="row">
                    <div class="col-lg-12">
                      <div class="card">
                        <div class="card-header d-flex align-items-center">
                          <h2 class="h5 display display"><?php echo $page_title; ?></h2>
                        </div>
                
                       <div class="card-block">
                       
                       
                        <div class="form-group">
                        <?php foreach($settings as $s) : ?>
                        <?php echo form_open_multipart('insert_category/addtocat', array('class'=>'cat_form', 'id=' =>'upload_file')); ?> 
                            <p>Website title</p>
                            <input type="text" name="site_title" value="<?php echo $s->site_title; ?>" class="form-control input-lg" id="inputlg">
                            <br>
                            <p>Current Email</p>
                            <input type="text" name="current_email" value="<?php echo $s->current_email; ?>"  class="form-control input-lg" id="inputlg">
                            <br>
                            <p>Service Charge</p>
                            <input type="text" name="service_charge" value="<?php echo $s->service_charge; ?>" class="form-control input-lg" id="inputlg">
                            <br>
                            <input type="text" name="current_phone" value="<?php echo $s->current_phone; ?>" class="form-control input-lg" id="inputlg">
                            <br>
                            <p>Regular Price</p>
                            <input type="text" name="price" placeholder="Enter a price" class="form-control input-lg" id="inputlg">
                            <br>
                           
                            <p>Weight</p>
                            <input type="weight" name="weight" placeholder="Enter weight" class="form-control input-lg" id="inputlg">
                            <br>
                            <p>Weight Unit</p>
                            <select name="unit" id="">
                              <option value="kg">Kilogram</option>
                              <option value="gm">Gram</option>
                              <option value="litter">Litter</option>
                              <option value="pices">Pices</option>
                            </select>
                            <br>
                            <br>
                            <p>Quantity</p>
                            <input type="quantity" name="quantity" placeholder="Enter a quantity" class="form-control input-lg" id="inputlg">
                            <br>
                            <p>Upload a Image</p>
                            <input type="file" name="file" id="files" />
                            <br>
                            <p>Title<input type="text" name="title" id="title" value="" /></p>

                            <!-- <textarea name="contact_details"></textarea>
                            <script>
                                CKEDITOR.replace( 'contact_details' );
                            </script> -->

                            <!-- <input name="submit" type="button" value="save" class="submit-button"> -->
                        </div>  
                        <div class="jsError"></div>
                        <input type="submit" value="save" name="save">
                        <div class="col-md-6 col-md-offset-3">
                            <?php echo $this->session->flashdata('posted'); ?>
                      </div>
                       
                        </div>  
                        <!-- <input type="submit" value="save"> -->
                        </div>
                        <?php echo form_close(); ?>
                        <?php endforeach ; ?>
                
                    
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>
  
     
        <script>
        // $(document).ready(function(){
        //     var formData = new FormData( $("#formID")[0] );

        //     $('form.cat_form').on('submit', function(form){
        //         form.preventDefault();
        //         var URL = '<?php echo site_url('insert_category/addtocat') ?>';
        //         contentType: "multipart/form-data",
        //         $.post(URL , $('form.cat_form').serialize(), function(data){

        //             $('div.jsError').html(data);
        //         })
                
                
        //     });

        // });
        // $(function() {
        //         $('#upload_file').submit(function(e) {
        //             e.preventDefault();
        //             $.ajaxFileUpload({
        //                 url 			:'<?php echo site_url('insert_category/addtocat') ?>', 
        //                 secureuri		:false,
        //                 fileElementId	:'userfile',
        //                 dataType		: 'json',
                       
        //                 success	: function (data, status)
        //                 {
        //                     $('div.jsError').html(data);
        //                 }
        //             });
        //             return false;
        //         });
        //     });
        // </script>