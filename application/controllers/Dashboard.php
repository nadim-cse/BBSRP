<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	

	public function __construct()
    {
        parent::__construct();
		$this->load->model('Login_model');
	
		
		$this->load->model('Contact_model');
		$this->load->model('Service_model');
		
		$this->load->model('User');
		
		$this->load->library('image_lib');
		
		
		
    }


	/* Home Page Settings */
	public function index()
	{

		if($this->Login_model->is_admin_logged_in() )
		{
			
			
		
			$data['title'] = "Welcome to Admin-Panel";

			$data['power'] = $this->session->userdata('session_power');
			
			$this->load->view('dashboard/header',$data);
			$this->load->view('dashboard/home',$data);
			$this->load->view('dashboard/footer');

		}
		else{
			redirect('login/?logged_in_first');
		}
		
	}
	/* Product(Appartment) Request Page Settings */
	public function NewServiceRequest()
	{

		if($this->Login_model->is_admin_logged_in() )
		{
			
			
		
			$data['title'] = "New Products";

			$data['power'] = $this->session->userdata('session_power');

			$data['NewService'] = $this->Service_model->GetNewServiceData();
			
			//echo "<pre>"; print_r($data['NewService']);
			$this->load->view('dashboard/header',$data);
			$this->load->view('dashboard/product_list_new',$data);
			$this->load->view('dashboard/footer');

		}
		else{
			redirect('login/?logged_in_first');
		}
		
	}
	public function ConfirmedServiceRequest(){
		
				$data['servicecon'] = $this->Service_model->getServiceForConfirmed();
			
			  
				//echo "<pre>"; print_r($data['servicecon']); exit;
				$this->load->view('dashboard/header',$data);
				$this->load->view('dashboard/product_list_confirmed',$data);
				$this->load->view('dashboard/footer'); 
	}
	public function CanceledServiceRequest(){
		
				$data['servicecan'] = $this->Service_model->getServiceForCanceled();
			
			  
				//echo "<pre>"; print_r($data['servicecon']); exit;
				$this->load->view('dashboard/header',$data);
				$this->load->view('dashboard/product_list_canceled',$data);
				$this->load->view('dashboard/footer'); 
	}

	// land services
	public function NewServiceRequestForLand()
	{

		if($this->Login_model->is_admin_logged_in() )
		{
			
			
		
			$data['title'] = "New Products";

			$data['power'] = $this->session->userdata('session_power');

			$data['NewService'] = $this->Service_model->GetNewServiceDataForLand();
			
			//echo "<pre>"; print_r($data['NewService']);
			$this->load->view('dashboard/header',$data);
			$this->load->view('dashboard/product_list_new_land',$data);
			$this->load->view('dashboard/footer');

		}
		else{
			redirect('login/?logged_in_first');
		}
		
	}
	public function ConfirmedServiceRequestForLand(){
		
				$data['servicecon'] = $this->Service_model->getServiceForConfirmedForLand();
			
			  
				//echo "<pre>"; print_r($data['servicecon']); exit;
				$this->load->view('dashboard/header',$data);
				$this->load->view('dashboard/product_list_confirmed_land',$data);
				$this->load->view('dashboard/footer'); 
	}
	public function CanceledServiceRequestForLand(){
		
				$data['servicecan'] = $this->Service_model->getServiceForCanceledForLand();
				//echo "<pre>"; print_r($data['servicecon']); exit;
				$this->load->view('dashboard/header',$data);
				$this->load->view('dashboard/product_list_canceled_land',$data);
				$this->load->view('dashboard/footer'); 
	}
	



	
	public function ViewServices($agent_id,$appartment_id){

		if($this->Login_model->is_admin_logged_in() )
		{
			
			$data['newServiceRequest'] = $this->Service_model->NewAndPendingServiceRequest($agent_id,$appartment_id);
			//echo "<pre>"; print_r($data['newServiceRequest']);
		
			$data['title'] = "Pending List";

			$data['power'] = $this->session->userdata('session_power');
			
			$this->load->view('dashboard/header',$data);
			$this->load->view('dashboard/product_view',$data);
			$this->load->view('dashboard/footer');

		}
		else{
			redirect('login/?logged_in_first');
		}
		
		
	}

	public function ViewServicesForLand($agent_id,$land_id){
		
				if($this->Login_model->is_admin_logged_in() )
				{
					
					$data['newServiceRequest'] = $this->Service_model->NewAndPendingServiceRequestForLand($agent_id,$land_id);
					
					//echo "<pre>"; print_r($data['newServiceRequest']);
				
					$data['title'] = "Pending Lust";
		
					$data['power'] = $this->session->userdata('session_power');
					
					$this->load->view('dashboard/header',$data);
					$this->load->view('dashboard/product_view_land',$data);
					$this->load->view('dashboard/footer');
		
				}
				else{
					redirect('login/?logged_in_first');
				}
				
				
			}
	
	public function ServicePendingRequest($appartment_id){
		
		$field = array(
			'current_status'=> '0'
			
			);
			$this->db->where('appartment_id', $appartment_id);
			$this->db->update('appartment', $field);
			if($this->db->affected_rows() > 0){
				$this->session->set_flashdata('success','<div class="alert alert-success text-center">Request Pending</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('success','<div class="alert alert-success text-center">Request Pending</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
	}
	public function ServiceConfirmRequest($appartment_id,$agent_email){

			$AgentEmail = $agent_email;
			$field = array(
				
				'current_status'=> '1'
			
			);
			$this->db->where('appartment_id', $appartment_id);
			$this->db->update('appartment', $field);
			if($this->db->affected_rows() > 0){

				// Sending Emails  Starts

				$data = array(
					'name'=> 'value',
					
				);

				$this->load->library('email');
				$this->email->set_newline("\r\n");
				$this->email->from('la.service.bd@gmail.com@gmail.com', 'Ad Posted Successfull');
				$this->email->to($AgentEmail);
				$this->email->subject('Your Ad has beed approved'); 
				
				$this->email->set_header('MIME-Version', '1.0; charset=utf-8');
					
				$this->email->set_header('Content-type', 'text/html');
				
				$body = $this->load->view('email_templates/ad_approved',$data,TRUE);
	
				$this->email->message($body);  
	
				

				// Sending Emails  Ending    

				if($this->email->send()){

					$this->session->set_flashdata('success','<div class="alert alert-success text-center">Request Confirmed</div>');
					redirect($_SERVER['HTTP_REFERER']);

				}
				
			}else{
				$this->session->set_flashdata('success','<div class="alert alert-success text-center">Request Confirmed</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
	}
	public function ServiceCancelRequest($appartment_id,$agent_email){
		
			$AgentEmail = $agent_email;

			$field = array(
			'current_status'=> '2'
			
			);
			$this->db->where('appartment_id', $appartment_id);
			$this->db->update('appartment', $field);
			if($this->db->affected_rows() > 0){


					// Sending Emails  Starts

					$data = array(
						'name'=> 'value',
						'status' => 'approved now'
					);
	
					$this->load->library('email');
					$this->email->set_newline("\r\n");
					$this->email->from('la.service.bd@gmail.com@gmail.com', 'Ad canceled');
					$this->email->to($AgentEmail);
					$this->email->subject('Your Ad has beed canceled'); 
					
					$this->email->set_header('MIME-Version', '1.0; charset=utf-8');
						
					$this->email->set_header('Content-type', 'text/html');
					
					$body = $this->load->view('email_templates/ad_cancel',$data,TRUE);
		
					$this->email->message($body);  
		
					
	
					// Sending Emails  Ending 

				if($this->email->send()){
					$this->session->set_flashdata('success','<div class="alert alert-success text-center">Request Canceled</div>');
					redirect($_SERVER['HTTP_REFERER']);
				}
			}else{
				$this->session->set_flashdata('success','<div class="alert alert-success text-center">Request Canceled</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
	}



	// land services

	public function ServicePendingRequestForland($land_id){
		
		$field = array(
			'current_status'=> '0'
			
			);
			$this->db->where('land_id', $land_id);
			$this->db->update('land_table', $field);
			if($this->db->affected_rows() > 0){
				$this->session->set_flashdata('success','<div class="alert alert-success text-center">Request Pending</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('success','<div class="alert alert-success text-center">Request Pending</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
	}
	public function ServiceConfirmRequestForLand($land_id,$agent_email){
		
		$AgentEmail = $agent_email;
		$field = array(
			'current_status'=> '1'
			
			);
			$this->db->where('land_id', $land_id);
			$this->db->update('land_table', $field);
			if($this->db->affected_rows() > 0){


				// Sending Emails  Starts

				$data = array(
					'name'=> 'value',
					'status' => 'approved now'
				);

				$this->load->library('email');
				$this->email->set_newline("\r\n");
				$this->email->from('la.service.bd@gmail.com@gmail.com', 'Ad Posted Successfull');
				$this->email->to($AgentEmail);
				$this->email->subject('Your Ad has beed approved'); 
				
				$this->email->set_header('MIME-Version', '1.0; charset=utf-8');
					
				$this->email->set_header('Content-type', 'text/html');
				
				$body = $this->load->view('email_templates/ad_approved',$data,TRUE);
	
				$this->email->message($body);  
	
				

				// Sending Emails  Ending  
				if($this->email->send()){

					$this->session->set_flashdata('success','<div class="alert alert-success text-center">Request Confirmed</div>');
					redirect($_SERVER['HTTP_REFERER']);
				}
				
			}else{
				$this->session->set_flashdata('success','<div class="alert alert-success text-center">Request Confirmed</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
	}
	public function ServiceCancelRequestForLand($land_id,$agent_email){
			$AgentEmail = $agent_email;
			$field = array(
				'current_status'=> '2'
				
			);
			$this->db->where('land_id', $land_id);
			$this->db->update('land_table', $field);
			if($this->db->affected_rows() > 0){

				// Sending Emails  Starts
				$data = array(
					'name'=> 'value',
					'status' => 'approved now'
				);
				$this->load->library('email');
				$this->email->set_newline("\r\n");
				$this->email->from('la.service.bd@gmail.com@gmail.com', 'Ad canceled');
				$this->email->to($AgentEmail);
				$this->email->subject('Your Ad has beed canceled'); 
				
				$this->email->set_header('MIME-Version', '1.0; charset=utf-8');
					
				$this->email->set_header('Content-type', 'text/html');
				
				$body = $this->load->view('email_templates/ad_cancel',$data,TRUE);
	
				$this->email->message($body);  

				// Sending Emails  Ending  

				if($this->email->send()){
					$this->session->set_flashdata('success','<div class="alert alert-success text-center">Request Canceled</div>');
					redirect($_SERVER['HTTP_REFERER']);
				}
				}else{
					$this->session->set_flashdata('success','<div class="alert alert-success text-center">Request Canceled</div>');
					redirect($_SERVER['HTTP_REFERER']);
				}
	}
	public function AgentList(){

		if($this->Login_model->is_admin_logged_in() )
		{
			
			$data['AgentList'] = $this->User->AgentList(); // Get Data from User Model
		
			$data['title'] = "Agent List";

			$data['power'] = $this->session->userdata('session_power');
			
			$this->load->view('dashboard/header',$data);
			$this->load->view('dashboard/agent_list',$data); // Load agent list view
			$this->load->view('dashboard/footer');

		}
		else{
			redirect('login/?logged_in_first');
		}

	}
	public function ContactMessageList()
	{
		# code...
		$data['title'] = "Contact Message List";
		$data['power'] = $this->session->userdata('session_power');
		$data['ContactMessageList'] = $this->Contact_model->GetContactMessage();
		$this->load->view('dashboard/header',$data);
		$this->load->view('dashboard/contact_message_list',$data); // Load agent list view
		$this->load->view('dashboard/footer');

	}
	public function DeleteContactMessage($id)
	{
		# code...
		$this->db->where('message_id', $id);
        $this->db->delete('contact_message');
        return true;
	}
	
	

	
	 
	  
	}
	


			
	

	
