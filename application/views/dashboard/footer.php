<footer class="main-footer" style="position:fixed;">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
             
            </div>
            <div class="col-md-6">
              <p>&copy; 2017<script>new Date().getFullYear()>2010&&document.write("-"+new Date().getFullYear());</script> L-A Service</p>
             
            </div>
            
          </div>
        </div>
      </footer>
    </div>
    <!-- Javascript files-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dashboard/js/tether.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dashboard/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dashboard/js/jquery.cookie.js"> </script>
    <script src="<?php echo base_url(); ?>assets/dashboard/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dashboard/js/jquery.nicescroll.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dashboard/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dashboard/js/front.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
    <script>
function deleteImage(id) {
    if (confirm("Are you sure?")) {
        $.ajax({
            url: '<?php echo base_url();?>Dashboard/deleteImage',
            type: 'post',
            data: {id:id},
            success: function () {
                alert('Deleted');
                //$('.loading').fadeOut("slow");
                window.location.href = "<?php echo site_url('Dashboard/VehicleList');?>";
               
                
            },
            error: function () {
                alert('ajax failure');
            }
        });
    } else {
        alert(id + " not deleted");
    }
}
</script>
<script>
$(document).ready(function(){

    $('.flash').fadeOut(7000);
   
});
</script>
<script>
    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        } 
      function DeleteMessage(id)
      {

        if(confirm("Are you sure?")) {

          window.location.href = "<?php echo base_url(); ?>Dashboard/DeleteContactMessage/"+id; 
          
          window.location.reload();
           
        }
        else {

            alert(id + " not deleted");
        }
          
      }
</script>
    
  </body>

  
</html>