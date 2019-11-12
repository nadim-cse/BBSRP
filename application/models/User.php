<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Model{
    

    public function AgentList(){

        $query = $this->db->query("SELECT * FROM agent");
        return $query->result();

    }
}