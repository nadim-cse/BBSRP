
      <section class="dashboard-counts section-padding">
        <div class="container-fluid">
        <h1>WELCOME TO ADMIN PANEL</h1>
        <hr>
        <div class="row">
          
                <h2><u>Current Logged in Admin Login Details</u></h2>
     
                
          </div>

          <div class="row">
          <ul id="side-main-menu" class="side-menu list-unstyled">
                    <li>Admin Username: <?php echo $this->session->userdata('current_admin_name') ?></li><br>
                    <li>Admin Power: <?php echo $this->session->userdata('session_power') ?> admin</li><br>
                    <li>Login time:<?php echo date(" h:i:sa");?></li>
                    

                </ul>
          </div>
          <hr>
         
        <hr>
          
        </div>
      </section>
      
     