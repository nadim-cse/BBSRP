<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('Login_model');
        $this->load->model('Contact_model');
		
    }


	
	public function index()
	{
		
		  $data['title'] = "Contact Us || HomeLight";

		
			$this->load->view('client/header',$data);
			$this->load->view('client/contact',$data);
			$this->load->view('client/footer');

	
		
		
		
	}
	
	public function ContactUs(){

       // echo "<pre>"; print_r($_POST);exit;
        $message = $this->form_validation->set_rules('message', 'You Message', 'trim|xss_clean|min_length[8]|max_length[200]');

        if ($this->form_validation->run() == FALSE) 
        {
                
            if($message){
                echo "<div class='col-md-12 alert alert-warning'>Message minimum 8 characters</div>";
            }
                
        } 
        else 
        {
            $data['sender_name'] = $this->input->post('name');
            $data['sender_email'] = $this->input->post('email');
            $data['sender_subject'] = $this->input->post('subject');
			$data['sender_message'] = $this->input->post('message');
			
			$res = $this->db->insert('contact_message',$data);
			if($res){

				echo "<div class='col-md-12 alert alert-success'>Message Has Been Sent......Thank you</div>";

			}else{

				echo 'Something wrong';
			}

            
            // Sending Emails  Starts

					// $data = array(
					// 	'name'=> 'value',
					// 	'status' => 'approved now'
					// );
	
					// $this->load->library('email');
					// $this->email->set_newline("\r\n");
					// $this->email->from('testphpmaileremail@gmail.com', 'Contact Message from website');
					// $this->email->to($data['email']);
					// $this->email->subject('Contact Message'); 
					
					// $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
						
					// $this->email->set_header('Content-type', 'text/html');
					
					// $body = $this->load->view('email_templates/contact_email',$data,TRUE);
		
					// $this->email->message($body);  
		
					
	
					// Sending Emails  Ending 

            // if($this->email->send()){

            //     echo "<div class='col-md-12 alert alert-success'>Message Has Been Sent......Thank you</div>";
                

            // }else{
            //     echo 'Something wrong';
            // }    
       
       
	}
	
}
	
}