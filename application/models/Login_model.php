<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{
    public function admin_login_data_check()
    {
             $username = $this->input->post('username');
			 $password = md5($this->input->post('password'));
			 $role = $this->input->post('role');

	
			

			$attribute = array(

				'username' => $username,
				'password' => $password,
				'role' => $role
				

			);
			//var_dump($attribute);
			
			$QueryResult = $this->db->get_where('admin', $attribute); // select query for code igniter
			

			
			
			if($QueryResult -> num_rows() == 1){

				

				$attribute_session = array(

					'current_admin_id'  => $QueryResult->row(0)->admin_id,
					'current_admin_name'  => $username,
					'session_role' => $role,
					'session_power' => $QueryResult->row(7)->power,
					'admin_avatar' => $QueryResult->row(6)->admin_avatar
				
				);
				
                
            

				$this->session->set_userdata($attribute_session); // session set afte login succeess
				return TRUE;

			}
			else
			{
				return FALSE;
				
			}
	}
	public function is_admin_logged_in(){
		return $this->session->userdata('current_admin_id')!= FALSE;
	}
	
	public function user_login_data_check()
    {
             $email = $this->input->post('email');
			 $password = md5($this->input->post('password'));
			 $role = $this->input->post('role');

	
			

			$attribute = array(

				'agent_email' => $email,
				'agent_password' => $password,
				'role' => $role,
				'status' => '1',
				

			);
		
			
			$QueryResult = $this->db->get_where('agent', $attribute); // select query for code igniter
			

			
			
			if($QueryResult -> num_rows() == 1){

				

				$attribute_session = array(

					'current_user_id'  => $QueryResult->row(0)->agent_id,
					'current_user_name'  =>$QueryResult->row(1)->agent_name,
					'session_agent_role' => $role,
					'session_email' => $email,
				
				
                );
                
            

				$this->session->set_userdata($attribute_session); // session set afte login succeess
				
				return TRUE;

			}
			else
			{
				
				return FALSE;
				
			}
	}
	public function is_agent_logged_in(){
		return $this->session->userdata('session_agent_role')!= FALSE;
	}
	public function CreateAgentAccount($RegistrationData){

		$this->db->insert('agent', $RegistrationData);
		return true;

	}
	public function TokenMetch($token){

		$query=$this->db->query("SELECT * FROM agent  where token='$token'");
        if($query->result()){
			return $query->result();
		}
		else{
			return false;
		}
	}

	public function EmailMetch($email){
		
		$query=$this->db->query("SELECT * FROM agent where agent_email='$email'");
		
		if($query->result()){
			//return $query->result();
			return true;
		}
		else{
			return false;
		}
	}
	public function UpdateNewsPassword($email,$password){

		$UpdatePasswordData = array(
			
			'agent_password'=> $password,	 
			
	 	);
	// echo $email;
	// echo $password;
	$this->db->where('agent_email', $email);
	$this->db->update('agent', $UpdatePasswordData);
	
	if($this->db->affected_rows() > 0){
		return true;
	}else{
		return false;
	}

	 }

     
}
