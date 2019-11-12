<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
           $this->load->model('Login_model');
              $this->load->model('Contact_model');
			   $this->load->helper('url');
        
    }

	
	public function index()
	{	
		$data['title'] = 'Welcome to admin panel';
		$this->load->view('login/admin-login',$data);
    }

    public function admin_login(){

		$this->form_validation->set_rules('username', 'USER NAME', 'trim|xss_clean|min_length[3]'); // validation of input data from form
		$this->form_validation->set_rules('password', 'USER PASSWORD', 'trim|xss_clean');
		
		$this->form_validation->set_rules('role', 'role', 'trim|xss_clean');

		if($this->form_validation->run() == FALSE){

			//$this->load->view('login_page_view'); 
			echo "validation error";
		}
		else
		{

		

			$result = $this->Login_model->admin_login_data_check();

			if($result)
			{
			
				redirect('dashboard');
			 }
			else
			{

				
				$data['errorLogin'] = 'Username or Password is invalid';
				
				$data['notadmin'] = 'You have no permission to access this admin panel';
			    $this->load->view('login/admin-login',$data); 
				//echo "someting is wrong";
			}
		}
	}
	// Admin logout method
	public function logout(){
		
					$this->session->unset_userdata('current_admin_id');
					$this->session->unset_userdata('current_admin_name');
		
					$this->session->sess_destroy();
		
					redirect('Login/?logout=success');
	}

	public function userlogin(){

	
		

			$result = $this->Login_model->user_login_data_check();
			$status = array();
			if($result){
				
				//redirect($_SERVER['HTTP_REFERER']);
				echo $status['status'] = '1';
 			}
			else{
				echo $status['status'] = '0';
				//echo "<div class='col-md-12 col-sm-4'>Username or password do not matched..Try again</div>";
				  
				
				
				
			}
		}
		 public function user_logout(){
			 			
			
						$this->session->unset_userdata('current_user_id');
						$this->session->unset_userdata('current_fullname');
						$this->session->unset_userdata('session_agent_role');
						$this->session->unset_userdata('session_email');
				
						redirect($_SERVER['HTTP_REFERER']);
		}
		public function changepwd(){


			 $password = md5($this->input->post('password'));
			 $admin_id = $this->input->post('admin_id');

			 $field = array(
				'password'=> $password
				
				);
				$this->db->where('admin_id', $admin_id);
				$this->db->update('admin', $field);
				if($this->db->affected_rows() > 0){
					$this->session->set_flashdata('success','<div class="alert alert-success text-center">Password Not Updated </div>');
					redirect($_SERVER['HTTP_REFERER']);
				}else{
					$this->session->set_flashdata('success','<div class="alert alert-success text-center">Password  Updated </div>');
					redirect($_SERVER['HTTP_REFERER']);
				}

				
		}

		public function generateRandomString($length = 36) {
			$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$charactersLength = strlen($characters);
			$randomString = '';
			for ($i = 0; $i < $length; $i++) {
				$randomString .= $characters[rand(0, $charactersLength - 1)];
			}
			return $randomString;
		}

		// Agent Registration
		public function AgentRegistration(){

			$email = $this->form_validation->set_rules('email', 'User Email', 'trim|xss_clean|required|valid_email|is_unique[agent.agent_email]');
			$AgentEmail = $this->input->post('email');
			if($this->form_validation->run() == FALSE){
				
					if($email)
					{
						//echo "<div class='col-md-12 alert alert-danger'><b>This email ".$AgentEmail." is already taken by other user. Try different one</b></div>";
						echo '0';
					}
			}
			else{
				$AgentName = $this->input->post('name');
				$AgentAge = $this->input->post('age');
				$AgentMobile = $this->input->post('mobile');
				$AgentLocation = $this->input->post('location');
				$AgentGender = $this->input->post('gender');
				//$AgentUrl = $this->input->post('url');
				$AgentEmail = $this->input->post('email');
				$token = $this->generateRandomString();
				$AgentUsername = $this->input->post('username');
				$AgentPassword = $this->input->post('password');
				
	
	
	
	
				$RegistrationData = array(
	
						'agent_name' => $AgentName,
						'agent_age' => $AgentAge,
						'agent_location' => $AgentLocation,
						//'agent_reference' => $AgentUrl,
						'agent_mobile' => $AgentMobile,
						'agent_email' => $AgentEmail,
						'agent_gender' => $AgentGender,
						'agent_picture' => 'Profile Image',
						'token' => $token,
						'status' => '0',
						'agent_password' => md5($AgentPassword),
						'role' => 'user'
	
				);
				//echo "<pre>"; print_r($RegistrationData);
				
				$result = $this->Login_model->CreateAgentAccount($RegistrationData);

				if($result ){

					// Sending Emails  Starts

					$data = array(
						'name'=> 'value',
						'token' => base_url()."Login/ConfirmRegistration/".$token
					);
	
					$this->load->library('email');
					$this->email->set_newline("\r\n");
					$this->email->from('la.service.bd@gmail.com', 'Agent Registraton');
					$this->email->to($AgentEmail);
					$this->email->subject('Account Confrimation'); 
					
					$this->email->set_header('MIME-Version', '1.0; charset=utf-8');
						
					$this->email->set_header('Content-type', 'text/html');
					
					$body = $this->load->view('email_templates/account_active',$data,TRUE);
		
					$this->email->message($body);  
		
					
	
					// Sending Emails  Ending 

				
					
					if($this->email->send()){
						echo "<div class='col-md-12 alert alert-warning'>A confirmation Link in sent your email </div>";
					}else{
						echo 'Something wrong';
					}
				}
				else{
					echo "problem";
				}

				
			
			}

			
			

		}
		public function ConfirmRegistration($token){

			$result = $this->Login_model->TokenMetch($token);
			if($result){
			foreach($result as $r){
					$agent_id = $r->agent_id;
			}
		
			

				$data = array(
					'title' => 'Home Light',
					'RegConfirmation' =>'Done',
					
				);
				$footer = array(
					
					
				);
				$field = array(
					'token' => '0000',
					'status'=> '1',
					
					);
				$this->db->where('agent_id', $agent_id);
				$this->db->update('agent', $field);
								
				redirect('Home');
			}
			else{

				redirect('Home/error');
			}
			
		}
		public function ForgetPassword(){

			
				
				$data['title'] = 'Forget Password || HomeLight';
			
				$this->load->view('client/header',$data);
				$this->load->view('client/forget_password');
				$this->load->view('client/footer');
				

		}
		public function emailcheckforgetpassword(){

			$AgentEmail = $this->input->post('email');
			$query = $this->Login_model->EmailMetch($AgentEmail);
			 
			if($query != true){

				echo "<div class='col-md-12 alert alert-warning'>Email Not matched</div>";
			}else{

				$tokendata = array(
					'token'  => $AgentEmail,
	
				);
				$this->session->set_userdata($tokendata);
	
				 $token = $this->session->userdata('token');
	
				 $link = base_url()."Login/ConfirmEmailForChangePassword/".$AgentEmail;
	
				 // Sending Emails  Starts
	
				 $data = array(
					'name'=> 'value',
					'token' => $link
				);
	
				$this->load->library('email');
				$this->email->set_newline("\r\n");
				$this->email->from('asmbadrulmail@gmail.com', 'Agent Registraton');
				$this->email->to($AgentEmail);
				$this->email->subject('Password Changing'); 
				
				$this->email->set_header('MIME-Version', '1.0; charset=utf-8');
					
				$this->email->set_header('Content-type', 'text/html');
				
				$body = $this->load->view('email_templates/change_password',$data,TRUE);
	
				$this->email->message($body);  
	
				
	
				// Sending Emails  Ending   
			
				if($this->email->send()){
	
					echo "<div class='col-md-12 alert alert-warning'>A confirmation Link in sent your email </div>";
					//echo $link;
				}else{
					echo "<div class='col-md-12 alert alert-warning'>Email Not sent</div>";
				}
			}
			
			 

		}
		public function ConfirmEmailForChangePassword($email){

			
			if($email == $this->session->userdata('token')){

					
					$data['title'] = 'Set New Password || HomeLight';
					$data['email'] = $email;
					$this->load->view('client/header',$data);
					$this->load->view('client/new_password',$data);
					$this->load->view('client/footer');
			}
		}
		public function UpdateNewPassword(){

			$AgentEmail = $this->input->post('email');
			$AgentPassword = md5($this->input->post('password'));
			$query = $this->Login_model->UpdateNewsPassword($AgentEmail,$AgentPassword);
			if($query){

				$data['title'] = 'Password Updated || HomeLight';
				$this->load->view('client/header',$data);
				$this->load->view('client/password_confirm_update',$data);
				$this->load->view('client/footer');
				
			}else{
				$data['message'] = "The Link You Provide is broken now";
				$data['heading'] = "Something went wrong";
				$this->load->view('errors/html/error_404',$data);
			}
				

			
		}
	
		   	   
   

			
		


	}
		

