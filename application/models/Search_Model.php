<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Search_Model extends CI_Model
{
    public function Searching($place,$service_type,$price){

        
    }
    public function GetDetailsForPlace($place){
       
        $query =  $this->db->query("SELECT appartment.*, agent.*, bed_image_table.*, bath_image_table.*,exterior_image_table.* FROM appartment 
        INNER JOIN agent 
        ON agent.agent_id = appartment.agent_id 
        INNER JOIN bed_image_table 
        ON bed_image_table.appartment_id = appartment.appartment_id  
        INNER JOIN bath_image_table 
        ON  bath_image_table.appartment_id = appartment.appartment_id 
        INNER JOIN exterior_image_table 
        ON  exterior_image_table.appartment_id = appartment.appartment_id
        WHERE place = ' $place' and current_status = '1'");

       return $query->result();
    }

    public function GetDetailsForPlaceLand($place){
    
        $query = $this->db->query("SELECT * FROM land_table WHERE place= ' $place' and current_status = '1'"); // changeable
        
        return $query->result();
    }

   public function GetDetailsForServiceTypeAppartment($service_type){
    $query =  $this->db->query("SELECT appartment.*, agent.*, bed_image_table.*, bath_image_table.*,exterior_image_table.* FROM appartment 
    INNER JOIN agent 
    ON agent.agent_id = appartment.agent_id 
    INNER JOIN bed_image_table 
    ON bed_image_table.appartment_id = appartment.appartment_id  
    INNER JOIN bath_image_table 
    ON  bath_image_table.appartment_id = appartment.appartment_id 
    INNER JOIN exterior_image_table 
    ON  exterior_image_table.appartment_id = appartment.appartment_id
    
    WHERE appartment.service_type = '$service_type' AND appartment.current_status = '1'");

    return $query->result();
    }

    public function GetDetailsForServiceTypeLand($service_type){
        
                $query = $this->db->query("SELECT * FROM land_table WHERE service_type = '$service_type' and land_table.current_status = '1'"); // changeable
                
                return $query->result();
    }

   function GetDetailsForServiceType($service_type){

        if($service_type == 'Sell'){
            $query =  $this->db->query("SELECT appartment.*, agent.*, bed_image_table.*, bath_image_table.*,exterior_image_table.*, land_table.* FROM appartment 
            INNER JOIN agent 
            ON agent.agent_id = appartment.agent_id 
            INNER JOIN bed_image_table 
            ON bed_image_table.appartment_id = appartment.appartment_id  
            INNER JOIN bath_image_table 
            ON  bath_image_table.appartment_id = appartment.appartment_id 
            INNER JOIN exterior_image_table 
            ON  exterior_image_table.appartment_id = appartment.appartment_id
            INNER JOIN land_table 
            ON  land_table.agent_id = appartment.agent_id  
            WHERE appartment.service_type = '$service_type'");
            return $query->result();
        }
        if($service_type == 'Rent'){
            $query =  $this->db->query("SELECT appartment.*, agent.*, bed_image_table.*, bath_image_table.*,exterior_image_table.* FROM appartment 
            INNER JOIN agent 
            ON agent.agent_id = appartment.agent_id 
            INNER JOIN bed_image_table 
            ON bed_image_table.appartment_id = appartment.appartment_id  
            INNER JOIN bath_image_table 
            ON  bath_image_table.appartment_id = appartment.appartment_id 
            INNER JOIN exterior_image_table 
            ON  exterior_image_table.appartment_id = appartment.appartment_id
            WHERE appartment.service_type = '$service_type'");
            return $query->result();
        }
       
    }

    public function GetDetailsForServiceTypeAndPlceAppartment($service_type,$place){

        $query =  $this->db->query("SELECT appartment.*, agent.*, bed_image_table.*, bath_image_table.*,exterior_image_table.* FROM appartment 
        INNER JOIN agent 
        ON agent.agent_id = appartment.agent_id 
        INNER JOIN bed_image_table 
        ON bed_image_table.appartment_id = appartment.appartment_id  
        INNER JOIN bath_image_table 
        ON  bath_image_table.appartment_id = appartment.appartment_id 
        INNER JOIN exterior_image_table 
        ON  exterior_image_table.appartment_id = appartment.appartment_id
        WHERE place = ' $place' and service_type = '$service_type'");

        return $query->result();
    }

    public function GetDetailsForServiceTypeAndPlceLand($service_type,$place){

        $query = $this->db->query("SELECT * FROM land_table WHERE place = ' $place' and service_type = '$service_type'"); // changeable
        
        return $query->result();
    }
    
    public function GetDetailsForAllFormetAppartment($service_type,$place,$price){

        $query =  $this->db->query("SELECT appartment.*, agent.*, bed_image_table.*, bath_image_table.*,exterior_image_table.* FROM appartment 
        INNER JOIN agent 
        ON agent.agent_id = appartment.agent_id 
        INNER JOIN bed_image_table 
        ON bed_image_table.appartment_id = appartment.appartment_id  
        INNER JOIN bath_image_table 
        ON  bath_image_table.appartment_id = appartment.appartment_id 
        INNER JOIN exterior_image_table 
        ON  exterior_image_table.appartment_id = appartment.appartment_id
        WHERE place = ' $place' and service_type = '$service_type' and appertment_price BETWEEN 0 AND '$price'");

        return $query->result();
    }
    public function GetDetailsForAllFormetLand($service_type,$place,$price){
        
                $query = $this->db->query("SELECT * FROM land_table WHERE place = ' $place' and service_type = '$service_type' and land_price BETWEEN 0 AND '$price'"); // changeable
                
                return $query->result();
    }

    public function GetDetailsForPriceAppartment($price){

        $query =  $this->db->query("SELECT appartment.*, agent.*, bed_image_table.*, bath_image_table.*,exterior_image_table.*, land_table.* FROM appartment 
        INNER JOIN agent 
        ON agent.agent_id = appartment.agent_id 
        INNER JOIN bed_image_table 
        ON bed_image_table.appartment_id = appartment.appartment_id  
        INNER JOIN bath_image_table 
        ON  bath_image_table.appartment_id = appartment.appartment_id 
        INNER JOIN exterior_image_table 
        ON  exterior_image_table.appartment_id = appartment.appartment_id
        INNER JOIN land_table 
        ON  land_table.agent_id = appartment.agent_id  
        WHERE appertment_price BETWEEN 0 AND '$price' ");
        return $query->result();
    }

    public function GetDetailsForPriceLand($price){

        $query = $this->db->query("SELECT * FROM land_table WHERE land_price BETWEEN 0 AND '$price'"); // changeable
        
        return $query->result();
    }
     
}

