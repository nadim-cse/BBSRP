<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
	
        
        $this->load->model('Service_model');
        $this->load->model('Creation_model');
        $this->load->model('Login_model');
       

        

    }

    public function PostNewService(){

        if($this->Login_model->is_agent_logged_in() ){

            $data['title'] = 'Post Your Ad';
            $this->load->view('client/header',$data);
            $this->load->view('client/service_post',$data);
            $this->load->view('client/footer');
            
        }
        else{
            redirect('Home');
        }
        
    }
    public function CreateNewServiceForAppartment(){
        if($this->Login_model->is_agent_logged_in() ){
            
             
            if(isset($_POST['service']) ){

                   
                        $TotalBed = $this->input->post('bed'); 
                        $TotalBath = $this->input->post('bath'); 
                        $Style = $this->input->post('style'); 
                        $TotalPrice = $this->input->post('price'); 
                        $Place = $this->input->post('place'); 
                        $Space = $this->input->post('space'); 
                        $OverView = $this->input->post('overview'); 
                        $ServiceType = $this->input->post('service_type'); 
                        $Title = $this->input->post('appartment_title'); 
                        $SubPlace = $this->input->post('sub_place'); 

                        // For Bed Images starts
                        
                        $type_bed = explode('.', $_FILES['bed_image']['name']);
                        
                        $type_bed = $type_bed[count($type_bed)-1];
                        
                       $url_bed = "uploads/images/service/bed-images/".uniqid(rand()).".".$type_bed;
                        
                        if(in_array($type_bed, array('jpg','jpeg','png','JPG','JPGE','PNG') ) )
                        {
                            if(is_uploaded_file($_FILES['bed_image']['tmp_name']))
                            {
                                move_uploaded_file($_FILES['bed_image']['tmp_name'],$url_bed);
                            }
                    
                        }
                        // For Bed Images Ends

                        // For Bath Images starts

                        $type_bath = explode('.', $_FILES['bath_image']['name']);
                        
                        $type_bath = $type_bath[count($type_bath)-1];
                        
                       $url_bath = "uploads/images/service/bath-images/".uniqid(rand()).".".$type_bath;
                        
                        if(in_array($type_bed, array('jpg','jpeg','png','JPG','JPGE','PNG') ) )
                        {
                            if(is_uploaded_file($_FILES['bath_image']['tmp_name']))
                            {
                                move_uploaded_file($_FILES['bath_image']['tmp_name'],$url_bath);
                            }
                    
                        }
                        $type_exterior = explode('.', $_FILES['exterior_image']['name']);
                        
                        $type_exterior = $type_exterior[count($type_exterior)-1];
                        
                       $url_exterior = "uploads/images/service/exterior-images/".uniqid(rand()).".".$type_exterior;
                        
                        if(in_array($type_exterior, array('jpg','jpeg','png','JPG','JPGE','PNG') ) )
                        {
                            if(is_uploaded_file($_FILES['exterior_image']['tmp_name']))
                            {
                                move_uploaded_file($_FILES['exterior_image']['tmp_name'],$url_exterior);
                            }
                    
                        }

                        $AppartmentData = array(

                            'appertment_price'=> $TotalPrice,	
                            'bed' => $TotalBed,	
                            'bath'=> $TotalBath,	
                            'style'=> $Style,	
                            'place'=> $Place,	
                            'space'=> $Space,	
                            'overview'=> $OverView,	
                            'service_type'=> $ServiceType,	
                            'service'=> $this->input->post('service'),	
                            'sub_place'=> $SubPlace,
                            'appartment_title' =>  $Title,
                            'time_created' => date('Y-m-d H:i:s'),
                            'current_status' => '0',
                            'flag' => 'new',
                            'agent_id' => $this->session->userdata('current_user_id')

                        );
                        
                        
                        $AgentEmail = $this->session->userdata('session_email');
                        $result = $this->Service_model->InsertServiceData($AppartmentData,$url_bed,$url_bath,$url_exterior);
                        //ad_confirmation    

                        // Sending Emails  Starts

                            $data = array(

                                'name'=> 'value',
                               
                            );
            
                            $this->load->library('email');
                            $this->email->set_newline("\r\n");
                            $this->email->from('testphpmaileremail@gmail.com', 'Ad under review');
                            $this->email->to($AgentEmail);
                            $this->email->subject('Ad in review'); 
                            
                            $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
                                
                            $this->email->set_header('Content-type', 'text/html');
                            
                            $body = $this->load->view('email_templates/ad_confirmation',$data,TRUE);
                
                            $this->email->message($body);  
                
					
	
					// Sending Emails  Ending 
                       

                        if($result && $this->email->send()){

                            redirect('Services/Congratulations');

                        }
                }
               
            }
           
        
        else{
             redirect('Home');
        }
    }
    public function CreateNewServiceForLand(){

            $TotalPrice = $this->input->post('price'); 
            $Place = $this->input->post('place'); 
            $Space = $this->input->post('space'); 
            $OverView = $this->input->post('overview'); 
            $ServiceType = $this->input->post('service_type');
            $SubPlace = $this->input->post('sub_place');
            $Title = $this->input->post('land_title');
            
             $AgentEmail = $this->session->userdata('session_email');

            $type_land = explode('.', $_FILES['land_image']['name']);
            
            $type_land = $type_land[count($type_land)-1];
            
            $url_land = "uploads/images/service/land-images/".uniqid(rand()).".".$type_land;
            
            if(in_array($type_land, array('jpg','jpeg','png','JPG','JPGE','PNG') ) )
            {
                if(is_uploaded_file($_FILES['land_image']['tmp_name']))
                {
                    move_uploaded_file($_FILES['land_image']['tmp_name'],$url_land);
                }
        
            }

            $LandData = array(
                
                'land_price'=> $TotalPrice,	 
                'place'=> $Place,	
                'space'=> $Space,	
                'land_overview'=> $OverView,	
                'service_type'=> $ServiceType,	
                'land_title' => $Title,
                'service'=> $this->input->post('service'),	
                'sub_place'=> $SubPlace,
                'land_image' => $url_land,
                'current_status' => '0',
                'flag' => 'new',
                'agent_id' => $this->session->userdata('current_user_id')
                                            
                
         );
        // echo $AgentEmail;
        
         
         $result = $this->Service_model->InsertLandServiceData($LandData);
        
         if($result == true){

            //echo "<pre>"; print_r($result);exit;

            //ad_confirmation    
             // Sending Emails  Starts

                            $data = array(

                                'name'=> 'value',
                               
                            );
            
                            $this->load->library('email');
                            $this->email->set_newline("\r\n");
                            $this->email->from('testphpmaileremail@gmail.com', 'Ad under review');
                            $this->email->to($AgentEmail);
                            $this->email->subject('Ad in review'); 
                            $this->email->set_header('MIME-Version','1.0; charset=utf-8');    
                            $this->email->set_header('Content-type','text/html');
                            $body = $this->load->view('email_templates/ad_confirmation',$data,TRUE);
                            //$body = "Hello";
                            $this->email->message($body);  
                
					
	
                    // Sending Emails  Ending    
                    if($this->email->send()){

                        redirect('Services/Congratulations');
                          // echo $this->email->print_debugger();
                    }else{
                        echo 'Something wrong';
                    }
           

         }

        

    
    }

    public function ViewService($ServieName,$ServiceType){

      // echo $ServieName."<br>".$ServiceType;
      $data['ServiceDetails'] = $this->Service_model->GetServiceDetails($ServieName,$ServiceType);
       
    //echo "<pre>"; print_r($data['ServiceDetails']);
    
     $data['title'] = $ServieName. " | ". $ServiceType;
     $data['service_type'] = $ServiceType;
     
     $this->load->view('client/header',$data);
     $this->load->view('client/product_view',$data);
     $this->load->view('client/footer');
       
       
        
    }
    public function ViewServiceForLand($ServieName,$ServiceType){
        
               $data['ServiceDetails'] = $this->Service_model->GetServiceForLandDetails($ServieName,$ServiceType);
              
               $data['title'] = $ServieName. " | ". $ServiceType;
               $this->load->view('client/header',$data);
               $this->load->view('client/product_view_land',$data);
               $this->load->view('client/footer');
               	
                
     }
     public function ViewFullDetailsForLand($land_id){
        
        $data['ServiceDetails'] = $this->Service_model->GetServiceFullDetailsForLand($land_id);
        //echo "<pre>"; print_r($data['ServiceDetails']);
        $data['title'] = 'Full Details for Land';
        $this->load->view('client/header',$data);
        $this->load->view('client/product_details_full_land',$data);
        $this->load->view('client/footer');
        
     }
    public function ViewFullDetails($appartment_id){

        $data['ServiceDetails'] = $this->Service_model->GetServiceFullDetails($appartment_id);
         
        $data['title'] = 'Full Details';
        $this->load->view('client/header',$data);
        $this->load->view('client/product_details_full',$data);
        $this->load->view('client/footer');
        
        
    }


  

    public function GetAgentAndServiceDetails(){

         $agent_id = $this->input->get('agent_id');
         $appartment_id = $this->input->get('appartment_id');
		 $result = $this->Service_model->getProductDetailsAndAgentDetailsSingle($agent_id,$appartment_id);
		 echo json_encode($result);
    }

    public function GetAgentAndServiceDetailsForLand(){
        
                 $agent_id = $this->input->get('agent_id');
                 $land_id = $this->input->get('land_id');
                 $result = $this->Service_model->getProductDetailsAndAgentDetailsSingleForLand($agent_id,$land_id);
                 echo json_encode($result);
     }
      //Apartment Section for agent and client
      //Apartment Section for agent and client
    public function SendRequestToAgent(){

        $name = $this->input->post('name'); 
        $email = $this->input->post('email'); 
        $mobile = $this->input->post('mobile'); 
        $message = $this->input->post('message'); 
        $appartment_id = $this->input->post('appartment_id');
        $agent_id = $this->input->post('agent_id');
        $AgentEmaill= $this->input->post('agent_email');

    //     $data = array(
            
    //         'name'=> $name,	 
    //         'email'=> $email,	
    //         'mobile'=> $mobile,	
    //         'message'=> $message,	
            
                                        
            
    //  );

   
     // Email for Client
      
            $this->load->library('email');
            $this->email->set_newline("\r\n");

            $this->email->from('la.service.bd@gmail.com', 'Thanks for contact');
            $data = array(
                'name'=> 'value',
                'item_link' => base_url()."Services/ViewFullDetails/".$appartment_id,
                
            );
            $this->email->to($email); 
            
            $this->email->subject('Thanks for contacting with HomeLight'); 
            
            $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
            
            $this->email->set_header('Content-type', 'text/html');
            
            $body = $this->load->view('email_templates/client_thanks',$data,TRUE);
            
             $this->email->message($body); 

             $agent = $this->email->send();

            if($agent){
               
                //Services::AgentEmail($AgentEmaill,$appartment_id);
               
               
                        
                            $this->load->library('email');
                            $this->email->set_newline("\r\n");        
                       $this->email->from('la.service.bd@gmail.com', 'Thanks for contact');
                        $data = array(
                            'name'=> 'value',
                            'item_link' => base_url()."Services/ViewFullDetails/".$appartment_id,
                            
                        );
                        $this->email->to($AgentEmaill); 
                        
                        $this->email->subject('Thanks for contacting with HomeLight'); 
                        
                        $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
                        
                        $this->email->set_header('Content-type', 'text/html');
                        
                        $body = $this->load->view('email_templates/agent_confirmation',$data,TRUE);
                        
                         $this->email->message($body); 
                
                         $agentNew = $this->email->send();
                         
                         if($agentNew){
                                
                          
                             
                         
                            $this->load->library('email');
                            $this->email->set_newline("\r\n");        
                       $this->email->from('la.service.bd@gmail.com', 'New Proporty Request');
                        $data = array(
                            'name'=> 'value',
                            'item_link' => base_url()."Services/ViewFullDetails/".$appartment_id,
                            'name'=> $name,	 
                            'email'=> $email,	
                            'mobile'=> $mobile,	
                            'message'=> $message
                            
                        );
                         $data['appartmentResult'] = $this->Service_model->GetApartmentDetails($appartment_id);
                             
                          $data['agentResult'] = $this->Service_model->GetAgentDetails($agent_id);     
                         
                        $this->email->to('host.homelight@gmail.com'); 
                        
                        $this->email->subject('New Request'); 
                        
                        $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
                        
                        $this->email->set_header('Content-type', 'text/html');
                        
                        $body = $this->load->view('email_templates/admin_confirmation',$data,TRUE);
                        
                         $this->email->message($body); 
                
                         $Admin = $this->email->send();    
                            if($Admin){
                                
                                 echo '<div class="col-md-12 alert alert-success input-height">HomeLight authorities will contact with this agent as soon as possible</div>';    
                            }
                              
                         }
             
            }

            //echo "<pre>"; print_r($agentResult);
            
       
    
     
    }

    public function SendRequestToAgentForLand(){
        
                $name = $this->input->post('name'); 
                $email = $this->input->post('email'); 
                $mobile = $this->input->post('mobile'); 
                $message = $this->input->post('message'); 
                $land_id = $this->input->post('land_id');
                $agent_id = $this->input->post('agent_id');
                $AgentEmaill = $this->input->post('agent_email');
        
               
            
            $this->load->library('email');
            $this->email->set_newline("\r\n");

            $this->email->from('la.service.bd@gmail.com', 'Thanks for contact');
            $data = array(
                'name'=> 'value',
                'item_link' => base_url()."Services/ViewFullDetailsForLand/".$land_id,
                
            );
            $this->email->to($email); 
            
            $this->email->subject('Thanks for contacting with HomeLight'); 
            
            $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
            
            $this->email->set_header('Content-type', 'text/html');
            
            $body = $this->load->view('email_templates/client_thanks',$data,TRUE);
            
             $this->email->message($body); 

             $agent = $this->email->send();

            if($agent){
               
                //Services::AgentEmail($AgentEmaill,$appartment_id);
               
               
                         
                            $this->load->library('email');
                            $this->email->set_newline("\r\n");        
                       $this->email->from('la.service.bd@gmail.com', 'Thanks for contact');
                        $data = array(
                            'name'=> 'value',
                            'item_link' => base_url()."Services/ViewFullDetailsForLand/".$land_id,
                            
                        );
                        $this->email->to($AgentEmaill); 
                        
                        $this->email->subject('Thanks for contacting with HomeLight'); 
                        
                        $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
                        
                        $this->email->set_header('Content-type', 'text/html');
                        
                        $body = $this->load->view('email_templates/agent_confirmation',$data,TRUE);
                        
                         $this->email->message($body); 
                
                         $agentNew = $this->email->send();
                         
                         if($agentNew){
                                
                        
                            $this->load->library('email');
                            $this->email->set_newline("\r\n");        
                       $this->email->from('la.service.bd@gmail.com', 'New Proporty Request');
                        $data = array(
                            'name'=> 'value',
                            'item_link' => base_url()."Services/ViewFullDetailsForLand/".$land_id,
                            'name'=> $name,	 
                            'email'=> $email,	
                            'mobile'=> $mobile,	
                            'message'=> $message
                            
                        );
                         
                             
                          $data['agentResult'] = $this->Service_model->GetAgentDetails($agent_id);     
                         
                        $this->email->to('host.homelight@gmail.com'); 
                        
                        $this->email->subject('New Request'); 
                        
                        $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
                        
                        $this->email->set_header('Content-type', 'text/html');
                        
                        $body = $this->load->view('email_templates/admin_confirmation',$data,TRUE);
                        
                         $this->email->message($body); 
                
                         $Admin = $this->email->send();    
                            if($Admin){
                                
                                 echo '<div class="col-md-12 alert alert-success input-height">HomeLight authorities will contact with this agent as soon as possible</div>';    
                            }
                              
                         }
             
            }
        
        
           
            
             
     }
    

    public function GetAgentInfoAndServiceDetailsForLand(){
        
                $name = $this->input->post('name'); 
                $email = $this->input->post('email'); 
                $mobile = $this->input->post('mobile'); 
                $message = $this->input->post('message'); 
                $land_id = $this->input->post('land_id');
                $agent_id = $this->input->post('agent_id');
        
                $ContactData = array(
                    
                    'name'=> $name,	 
                    'email'=> $email,	
                    'mobile'=> $mobile,	
                    'message'=> $message,	
                    'land_id'=> $land_id,	
                    'agent_id'=> $agent_id
                                                
                    
             );
            //  echo "<pre>"; print_r($ContactData);
            //  echo '<div class="col-md-12 alert alert-success input-height">HomeLight authorities will contact with this agent as soon as possible</div>';
           
            
             
    }
 
    public function MyAccount($agent_id){
        if($this->Login_model->is_agent_logged_in()){

            $data['title'] = 'My Account || HomeLight';
            $data['agent_email'] = $this->session->userdata('session_email') ;
            $data['myProductsAppartment'] = $this->Service_model->GetMyProductsDetailsForAppartment($agent_id);
            $data['myProductsLand'] = $this->Service_model->GetMyProductsDetailsForLand($agent_id);
           
            
            $this->load->view('client/header',$data);
            $this->load->view('client/myaccount',$data);
            $this->load->view('client/footer');
            

        }
        else{

            redirect('Home');
        } 
            
        
    }
    public function MyAccountSettings($agent_id){

        if($this->Login_model->is_agent_logged_in()){
            
            $data['title'] = 'Account Settings || HomeLight';
            $data['AccountData'] = $this->Service_model->GetAccountDetails($agent_id);
           // echo "<pre>"; print_r($data['AccountData']);
            $data['agent_email'] = $this->session->userdata('session_email') ;
            $this->load->view('client/header',$data);
            $this->load->view('client/account_settings',$data);
            $this->load->view('client/footer');
            
            
        }
        else{
            
            redirect('Home');
        } 
    }
    public function AccountUpdate(){
        
                $name = $this->input->post('agent_name'); 
                $location = $this->input->post('location'); 
                $mobile = $this->input->post('mobile'); 
                $agent_id = $this->input->post('agent_id'); 
    
        
                $UpdateData = array(
                    
                    'agent_name'=> $name,	 
                    'agent_location'=> $location,	
                    'agent_mobile'=> $mobile,	
                   
                                                
                    
             );
            
			$this->db->where('agent_id', $agent_id);
            $this->db->update('agent', $UpdateData);
            
			if($this->db->affected_rows() > 0){
                echo '<div class="col-md-6 alert alert-success input-height">Account Has been Updated</div>';
			}else{
                echo '<div class="col-md-6 alert alert-success input-height">Something went wrong</div>';
			}
            
            
             
   }
   public function AccountPasswordUpdate(){
    
            
            $password = $this->input->post('password'); 
           
            $agent_id = $this->input->post('agent_id'); 

    
            $UpdatePasswordData = array(
                
                'agent_password'=> md5($password),	 
                
               
                                            
                
         );
        
        $this->db->where('agent_id', $agent_id);
        $this->db->update('agent', $UpdatePasswordData);
        
        if($this->db->affected_rows() > 0){
            echo "<div class='col-md-6 alert alert-success '>Password Has been Updated </div>";
        }else{
            echo "<div class='col-md-6 alert alert-success '>Something went wrong</div>";
        }
        
    }
    public function MyAccountForAppartmentView($appartment_id){
        
                $data['title'] = 'My Ads || HomeLight';
                $data['ServiceDetails'] = $this->Service_model->EditAppartmentAd($appartment_id);
                //echo "<pre>"; print_r($data['EditData']);
                $this->load->view('client/header',$data);
                $this->load->view('client/view_appartment_my_account',$data);
                $this->load->view('client/footer');
                
            }

    public function MyAccountForAppartmentEdit($appartment_id){

        $data['title'] = 'Edit My Ads || HomeLight';
        $data['EditData'] = $this->Service_model->EditAppartmentAd($appartment_id);
        //echo "<pre>"; print_r($data['EditData']);
        $this->load->view('client/header',$data);
        $this->load->view('client/edit_appartment',$data);
        $this->load->view('client/footer');
        
    }
    public function DeleteAdForAppartment($appartment_id){

        $result = $this->Service_model->DeleteAdForAppartment($appartment_id);
        if($result){

            $this->session->set_flashdata('success','<div class="alert alert-success text-center">Ad Deleted</div>');
             redirect($_SERVER['HTTP_REFERER']);

        }   
        else{
            $this->session->set_flashdata('success','<div class="alert alert-success text-center">Something went wrong</div>');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
    public function EditServiceForAppartment()
    {
        if($this->Login_model->is_agent_logged_in() ){

                   
                   
                        $TotalBed = $this->input->post('bed'); 
                        $TotalBath = $this->input->post('bath'); 
                        $Style = $this->input->post('style'); 
                        $TotalPrice = $this->input->post('price'); 
                        $Place = $this->input->post('place'); 
                        $SubPlace = $this->input->post('sub_place'); 
                        $Space = $this->input->post('space'); 
                        $OverView = $this->input->post('overview'); 
                        $ServiceType = $this->input->post('service_type'); 
                        $Title = $this->input->post('appartment_title'); 
                        $bed_image_id = $this->input->post('bed_image_id'); 
                        $appartment_id = $this->input->post('appartment_id'); 
                        
                       
                    
                           

                            $AppartmentData = array(
                                
                                'appertment_price'=> $TotalPrice,	
                                'bed' => $TotalBed,	
                                'bath'=> $TotalBath,	
                                'style'=> $Style,	
                                'place'=> $Place,	
                                'space'=> $Space,	
                                'overview'=> $OverView,	
                                'service_type'=> $ServiceType,	
                                'service'=> 'Appartment',	
                                'sub_place'=> $SubPlace,
                                'appartment_title' =>  $Title,
                                'time_created' => date('Y-m-d H:i:s'),
                                'current_status' => '0',
                                'flag' => 'update'
                                
                            );
                                                        
        
                            $bed_image_url = $this->input->post('bed_image_url'); 
                            $bath_image_url = $this->input->post('bath_image_url'); 
                            $exterior_image_url = $this->input->post('exterior_image_url'); 

                            $bed_image = $this->input->post('bed_image'); 
                            $bath_image_id = $this->input->post('bath_image_id'); 
                            $exterior_image_id = $this->input->post('exterior_image_id'); 

                            
                            $result = $this->Service_model->UpdateServiceData($AppartmentData,$appartment_id);

                            $result2 = $this->Service_model->UpdateBedImageData($bed_image_url,$bed_image_id);
                            $result3 = $this->Service_model->UpdateBathImageData($bath_image_url,$bath_image_id);
                            $result4 = $this->Service_model->UpdateExteriorImageData($exterior_image_url,$exterior_image_id);

                            if($result && $result2 && $result3 && $result4 ){

                                $this->session->set_flashdata('success','<div class="alert alert-success text-center">Details Updated</div>'); 
                                redirect($_SERVER['HTTP_REFERER']);


                            }
                            else{
                                redirect($_SERVER['HTTP_REFERER']);
                            }
            
               
        
           
        }
        else{
             redirect('Home');
        }
    }
    public function FindByLocation($LocationName){
       
        $data['FindByLocation'] = $this->Service_model->GetDataByLocation($LocationName);
        $data['FindByLocationSell'] = $this->Service_model->GetDataByLocationSell($LocationName);
        $data['ServiceDetailsForLand'] = $this->Service_model->GetDataByLocationLand($LocationName);
        
        //echo "<pre>"; print_r($data['ServiceDetailsForLand']); exit;
        
        $data['title'] = $LocationName.' || L-A Service';
        $this->load->view('client/header',$data);
        $this->load->view('client/product_view_by_location',$data);
        $this->load->view('client/footer');
        
        
    }

    public function DeleteBedImages($bed_image_id){

        $result = $this->Service_model->DeleteBedImage($bed_image_id);
        if($result){

            $this->session->set_flashdata('success','<div class="alert alert-success text-center">Image Deleted</div>');
            redirect($_SERVER['HTTP_REFERER']);
        }
        else{

            $this->session->set_flashdata('success','<div class="alert alert-success text-center">Something went wrong</div>');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function MyAccountForLandView($land_id){

        $data['title'] = 'My Ads || HomeLight';
        $data['ServiceDetails'] = $this->Service_model->EditLandAd($land_id);
        //echo "<pre>"; print_r($data['ServiceDetails']);
        $this->load->view('client/header',$data);
        $this->load->view('client/view_land_my_account',$data);
        $this->load->view('client/footer');
       

    }

    public function MyAccountForLandtEdit($land_id){
        
                $data['title'] = 'Edit My Ads || HomeLight';
                $data['EditData'] = $this->Service_model->EditLandAd($land_id);
                //echo "<pre>"; print_r($data['EditData']);
                $this->load->view('client/header',$data);
                $this->load->view('client/edit_land',$data);
                $this->load->view('client/footer');
                
    }
    public function EditServiceForLand()
    {
        if($this->Login_model->is_agent_logged_in() ){

                   
                   
            $TotalPrice = $this->input->post('price'); 
            $Place = $this->input->post('place'); 
            $Space = $this->input->post('space'); 
            $OverView = $this->input->post('overview'); 
            $ServiceType = $this->input->post('service_type');
            $SubPlace = $this->input->post('sub_place');
            $land_id = $this->input->post('land_id');
            $url_land = $this->input->post('land_image');
            $Landtitle = $this->input->post('land_title');
                        
            $LandData = array(
                
                'land_price'=> $TotalPrice,	 
                'land_title' => $Landtitle,
                'place'=> $Place,	
                'space'=> $Space,	
                'land_overview'=> $OverView,	
                'service_type'=> $ServiceType,	
                'service'=> $this->input->post('service'),	
                'sub_place'=> $SubPlace,
                'land_image' => $url_land,
                'current_status' => '0',
                'flag' => 'update',
                'agent_id' => $this->session->userdata('current_user_id')
                                            
                
         );
         //echo "<pre>"; print_r($LandData);
                                                        
                                                        

                        $result = $this->Service_model->UpdateServiceDataForLand($LandData,$land_id);
                      
                         if($result){

                            $this->session->set_flashdata('success','<div class="alert alert-success text-center">Details Updated</div>'); 
                             redirect($_SERVER['HTTP_REFERER']);


                        }
                        else{
                            redirect($_SERVER['HTTP_REFERER']);
                        }
            
               
        
           
        }
        else{
             redirect('Home');
        }
    }
    

     public function AgentEmail($AgentEmaill,$appartment_id){

        $this->email->from('la.service.bd@gmail.com', 'Thanks for contact');
        $data = array(
            'name'=> 'value',
            'item_link' => base_url()."Services/ViewFullDetails/".$appartment_id,
            
        );
        $this->email->to($AgentEmaill); 
        
        $this->email->subject('Thanks for contacting with HomeLight'); 
        
        $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
        
        $this->email->set_header('Content-type', 'text/html');
        
        $body = $this->load->view('email_templates/agent_confirmation',$data,TRUE);
        
         $this->email->message($body); 

         $agent = $this->email->send();
    }

    public function Congratulations(){
        
                $data['title'] = 'Congratulations';
                $data['agent_email'] = $this->session->userdata('session_email') ;
                $this->load->view('client/header',$data);
                $this->load->view('client/post_success',$data);
                $this->load->view('client/footer');
                
    }
    public function test_email()
    {
        # code...
        $this->email->from('asmbadrulmail@gmail.com', 'Thanks for contact');
        $data = array(
            'name'=> 'value',
            'item_link' => base_url()."Services/ViewFullDetails/1",
            
        );
        $this->email->to('rafatahmed7232@gmail.com'); 
        
        $this->email->subject('Thanks for contacting with L-A Service'); 
        
        $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
        
        $this->email->set_header('Content-type', 'text/html');
        
        $body = $this->load->view('email_templates/agent_confirmation',$data,TRUE);
        
         $this->email->message($body); 

         $agent = $this->email->send();

         if($agent){

            echo "done";
         }else{

            echo "problem";
         }

    }
    
    
    

 }


