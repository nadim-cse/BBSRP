<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class creation_model extends CI_Model
{
    public function ListOfAdmin(){
        
         $this->db->select("*");
         $this->db->from('admin');
         $query = $this->db->get();
         return $query->result();
    }
  
    var $table_admin = 'admin';
  
    public function AdminCreateRequest($CreateAdminData){

        $this->db->insert($this->table_admin, $CreateAdminData);
		return $this->db->insert_id();

    }
    
    function getAll(){
        $query=$this->db->query("SELECT * FROM admin");
        return $query->result();
        //returns from this string in the db, converts it into an array
    }
    function GetAdminDetails($id){
        $query=$this->db->query("SELECT * FROM admin  where admin_id='$id'");
        return $query->result();
        //returns from this string in the db, converts it into an array
    }

    
     public function signleadmindetails(){
		$id = $this->input->get('id');
		$this->db->where('admin_id', $id);
		$query = $this->db->get('admin');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
    }
    public function updateAdminIndividual(){
		$id = $this->input->post('admin_id');
		$field = array(
		'username'=>$this->input->post('username'),
		'password'=>$this->input->post('password'),
		//'updated_at'=>date('Y-m-d H:i:s')
		);
		$this->db->where('admin_id', $id);
		$this->db->update('admin', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
    }
    

     
}