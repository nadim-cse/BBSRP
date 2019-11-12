<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php if(isset($title)) echo $title; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Quicksand|Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Montserrat|Ranchers" rel="stylesheet"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="<?php //echo base_url() ?>assets/frontend/css/bootstrap.min.css"> -->
    <!--My style-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/style_contact.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/style_product.css">
    <!-- <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/custom.js"></script> -->
    <script type="text/javascript">
        var baseURL = "<?php echo base_url(); ?>";
    </script>
    
</head>
<body>


   
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse nav_background" role="navigation">
        <div class="container">
            <div class="navbar-header">
            <h2 class="logo-text">L-A Service</h2>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <div class="collapse navbar-collapse" id="nav-collapse">
                <ul class="nav navbar-nav navbar-right navlist">
                    <li><a href="<?php echo site_url(''); ?>">Home</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services
                        <i class="glyphicon glyphicon-arrow-down"></i></a>
                        <ul class="dropdown-menu">
                          <li><a href="" target="_blank"><b>APARTMENT</b></a></li>
                          <li><a href="<?php echo site_url('Services/ViewService/'.'Appartment/'.'Sell'); ?>" ><i class="glyphicon glyphicon-hand-right"></i> Sell</a></li>
                          <li><a href="<?php echo site_url('Services/ViewService/'.'Appartment/'.'Rent'); ?>"><i class="glyphicon glyphicon-hand-right"></i> Rent</a></li>
                          <li class="divider"></li>
                          <li><a href="" target="_blank"><b>LAND</b></a></li>
                          <li><a href="<?php echo site_url('Services/ViewServiceForLand/'.'Land/'.'Sell'); ?>"><i class="glyphicon glyphicon-hand-right"></i> Sell</a></li>
        
                        </ul>
                    </li>
                    <!-- <li><a href="#">Project</a></li> -->
                    <!-- <li><a href="<?php echo site_url('Home/Agents'); ?>">Agent</a></li> -->
                    <li><a href="<?php echo site_url('Home/Testimonials') ?>">Testimonial</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Location
                        <i class="glyphicon glyphicon-arrow-down"></i></a>
                        <ul class="dropdown-menu">
                          <li><a href="<?php echo site_url('Services/FindByLocation/'.'Sylhet'); ?>" ><i class="glyphicon glyphicon-hand-right"></i> Sylhet</a></li>
                         
                          <li><a href="<?php echo site_url('Services/FindByLocation/'.'Dhaka'); ?>" ><i class="glyphicon glyphicon-hand-right"></i> Dhaka</a></li>
                          
                          <li><a href="<?php echo site_url('Services/FindByLocation/'.'Rajshahi'); ?>" ><i class="glyphicon glyphicon-hand-right"></i> Rajshahi</a></li>
                          
                          <li><a href="<?php echo site_url('Services/FindByLocation/'.'Chittagong'); ?>" ><i class="glyphicon glyphicon-hand-right"></i> Chittagong</a></li>
                          
                          <li><a href="<?php echo site_url('Services/FindByLocation/'.'Comilla'); ?>" ><i class="glyphicon glyphicon-hand-right"></i> Comilla</a></li>
                          
                          <li><a href="<?php echo site_url('Services/FindByLocation/'.'Dinajpur'); ?>" ><i class="glyphicon glyphicon-hand-right"></i> Dinajpur</a></li>
                          
                          <li><a href="<?php echo site_url('Services/FindByLocation/'.'Khulna'); ?>" ><i class="glyphicon glyphicon-hand-right"></i> Khulna</a></li>

                          
                          
                        </ul>
                    </li>
                    <li><a href="<?php echo site_url('Contact') ?>" >contact us</a></li>
                    <?php if($this->session->userdata('session_agent_role')): ?>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Account
                        <i class="glyphicon glyphicon-arrow-down"></i></a>
                        <ul class="dropdown-menu">
                        <li><a>Welcome <?php echo $this->session->userdata('current_user_name') ?></a><b></b></li>
                        <li class="divider"></li>
                          <li><a href="<?php echo site_url('Services/PostNewService'); ?>" ><b>Post</b></a></li>

                          <li><a href="<?php echo site_url('Services/MyAccount/'.$this->session->userdata('current_user_id')); ?>" ><b>My Account</b></a></li>
                         
                          <li><a href="<?php echo site_url('Services/MyAccountSettings/'.$this->session->userdata('current_user_id')); ?>" ><b>Account Settings</b></a></li>
                          <li class="divider"></li>
                          <li><a href="<?php echo site_url('Login/user_logout'); ?>"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
                          
                        </ul>
                    </li>
                    <?php endif; ?>
                    <?php if(!$this->session->userdata('session_agent_role')): ?>
                        <button data-toggle="modal" data-target=".login-register-form" type="button" class="btn btn-danger">Log In</button>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
   