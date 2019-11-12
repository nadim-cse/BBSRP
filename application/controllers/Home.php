<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('Service_model');
		
    }


	
	public function index()
	{
		
			$data = array(

				'title' => 'L-A Service'

			);
			$data['testimonials'] = $this->Service_model->GetTestimonial();
			$data['FeaturedRents'] = $this->Service_model->GetFeaturedRents();
			$data['FeaturedSells'] = $this->Service_model->GetFeaturedSells();
			//echo "<pre>"; print_r($data['FeaturedRents']);
			$this->load->view('client/header',$data);
			$this->load->view('client/home',$data);
			$this->load->view('client/footer');
			
			

		
	}
	public function error(){

		$data = array(
			
							'title' => 'Home Light'
			
						);
						$footer = array(
			
			
						);
						
						$this->load->view('client/header',$data);
						$this->load->view('client/error');
						$this->load->view('client/footer',$data);
	}

	public function Testimonials(){

		$data = array(
			
			'title' => 'Write Down Testimonials'
			
		);
		$this->load->view('client/header',$data);
		$this->load->view('client/testimonials');
		$this->load->view('client/footer',$data);
	}

	public function Save(){

		$name = $this->input->post('name'); 
        $email = $this->input->post('email'); 
        $review = $this->input->post('review'); 


        $ReviewtData = array(
            
            'name'=> $name,	 
            'email'=> $email,	
            'review'=> $review,	
                                        
            
	 );
	 
	 //echo "<pre>"; print_r($ContactData);
	$result = $this->Service_model->InsertTestimonial($ReviewtData);
	if($result){
		echo '<div class="col-md-12 alert alert-success input-height">Thanks for your review</div>';
	}
	else{
		echo '<div class="col-md-12 alert alert-success input-height">Something went wrong</div>';
	}
     
	}
	
	
	
}