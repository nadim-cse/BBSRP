<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Contact_model extends CI_Model
{
    public function GetContactData(){
        
         $this->db->select("*");
         $this->db->from('contact_page');
         $query = $this->db->get();
         return $query->result();
    }
    public function SendContactMessages($ContactMessageData){

        $this->db->insert('contact_message', $ContactMessageData);

    }
    public function GetContactMessageDataNumber(){
        
      $query = $this->db
                      ->select('*')
                        ->order_by('message_id', "desc")
                      ->get('contact_message');


                         
        return $query->num_rows();
    
    }
    public function GetContactMessage(){
        
        $this->db->select("*");
        $this->db->from('contact_message');
         $this->db->order_by('message_id', "desc");
         $this->db->limit(6);
        $query = $this->db->get();
        return $query->result();
    
    }
        

     
}
