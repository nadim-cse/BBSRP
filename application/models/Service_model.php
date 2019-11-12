<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Service_model extends CI_Model
{
    public function InsertServiceData($AppartmentData,$url_bed,$url_bath,$url_exterior){

        $this->db->insert('appartment', $AppartmentData);

        $appartment_id = $this->db->insert_id();

        $BedImageData = array(
            'bed_image_url' => $url_bed,
            'appartment_id' => $appartment_id
        );
        $this->db->insert('bed_image_table', $BedImageData);

        $BathImageData = array(
            'bath_image_url' => $url_bath,
            'appartment_id' => $appartment_id
        );
        $this->db->insert('bath_image_table', $BathImageData);

        $ExteriorImageData = array(
            'exterior_image_url' => $url_exterior,
            'appartment_id' => $appartment_id
        );
        $this->db->insert('exterior_image_table', $ExteriorImageData);

        return true;

    }
    public function InsertLandServiceData($LandData){

        $this->db->insert('land_table', $LandData);
        return true;
    }
    public function GetServiceDetails($ServieName,$ServiceType){

                
                 //$query = $this->db->query("SELECT * FROM appartment WHERE service = '$ServieName'");
                //  $this->db->select('*');
                //  $this->db->from('appartment');
                //  $this->db->join('bed_image_table', 'bed_image_table.appartment_id = appartment.appartment_id', 'INNER');
                //  $this->db->join('bath_image_table', 'bath_image_table.appartment_id = appartment.appartment_id', 'INNER');
                //  $this->db->join('exterior_image_table', 'exterior_image_table.appartment_id = appartment.appartment_id', 'INNER');
                //  $this->db->join('agent', 'agent.agent_id = appartment.agent_id', 'INNER');
                 
                //  $this->db->where('appartment.service', 'appartment');
               //  $this->db->where('service_type', $ServiceType);
                // $this->db->where('current_status', '1');

                 //$query = $this->db->get();
                 //$query = $this->db->query("SELECT appartment.*, bed_image_table.*, bath_image_table.*,exterior_image_table.*, agent.* FROM appartment INNER JOIN bed_image_table ON bed_image_table.appartment_id = appartment.appartment_id  INNER JOIN bath_image_table ON  bath_image_table.appartment_id = appartment.appartment_id INNER JOIN exterior_image_table ON  exterior_image_table.appartment_id = appartment.appartment_id INNER JOIN agent ON agent.agent_id = appartment.agent_id WHERE appartment.service= '$ServieName' and appartment.service_type= '$ServiceType' and appartment.current_status = '1' ");
                 $query =  $this->db->query("SELECT appartment.*, agent.*, bed_image_table.*, bath_image_table.*,exterior_image_table.* FROM appartment 
                 INNER JOIN agent 
                 ON agent.agent_id = appartment.agent_id 
                 INNER JOIN bed_image_table 
                 ON bed_image_table.appartment_id = appartment.appartment_id  
                 INNER JOIN bath_image_table 
                 ON  bath_image_table.appartment_id = appartment.appartment_id 
                 INNER JOIN exterior_image_table 
                 ON  exterior_image_table.appartment_id = appartment.appartment_id
                 
                 WHERE appartment.service_type = '$ServiceType' AND appartment.current_status = '1'");

                //return $this->db->last_query();
                
                  return $query->result();
            }

    public function GetServiceForLandDetails($ServieName,$ServiceType){

        $query = $this->db->query("SELECT * FROM land_table WHERE service_type= '$ServiceType' and current_status = '1'"); // changeable
        
        return $query->result();
    }

    public function GetServiceFullDetails($appartment_id){

        $query = $this->db->query("SELECT appartment.*, bed_image_table.*, bath_image_table.*,  exterior_image_table.*, agent.* FROM appartment 
        INNER JOIN bed_image_table ON bed_image_table.appartment_id = appartment.appartment_id  
        INNER JOIN bath_image_table ON  bath_image_table.appartment_id = appartment.appartment_id 
        INNER JOIN exterior_image_table ON  exterior_image_table.appartment_id = appartment.appartment_id 
        INNER JOIN agent ON agent.agent_id = appartment.agent_id 
        WHERE appartment.appartment_id= '$appartment_id'");
        return $query->result();

        
    }
    public function GetServiceFullDetailsForLand($land_id){

        $query = $this->db->query("SELECT land_table.* , agent.* FROM agent 
        INNER JOIN land_table ON land_table.agent_id = agent.agent_id  

        WHERE land_table.land_id= '$land_id'");
        return $query->result();
    }
    public function GetNewServiceData(){

        $query = $this->db->query("SELECT appartment.*, agent.* FROM appartment INNER JOIN agent ON agent.agent_id = appartment.agent_id WHERE appartment.current_status = '0'");
        return $query->result();
    }

    public function GetNewServiceDataForLand(){
        
                $query = $this->db->query("SELECT land_table.* , agent.* FROM land_table INNER JOIN agent ON agent.agent_id = land_table.agent_id WHERE land_table.current_status = '0' ");
                return $query->result();
    }
        
    public function NewAndPendingServiceRequest($agent_id,$appartment_id){

        $query = $this->db->query("SELECT appartment.*, agent.*, bed_image_table.*, bath_image_table.*,exterior_image_table.* FROM appartment 
        INNER JOIN agent ON agent.agent_id = appartment.agent_id 
        INNER JOIN bed_image_table ON bed_image_table.appartment_id = appartment.appartment_id  
        INNER JOIN bath_image_table ON  bath_image_table.appartment_id = appartment.appartment_id 
        INNER JOIN exterior_image_table ON  exterior_image_table.appartment_id = appartment.appartment_id  WHERE appartment.appartment_id = '$appartment_id' AND agent.agent_id = '$agent_id'");
        return $query->result();

    }

    public function NewAndPendingServiceRequestForLand($agent_id,$land_id){
        
                $query = $this->db->query("SELECT land_table.*, agent.* FROM land_table 
                INNER JOIN agent ON agent.agent_id = land_table.agent_id 
                 WHERE land_table.land_id = '$land_id' AND agent.agent_id = '$agent_id'");
                return $query->result();
        
    }
        

    public function getServiceForConfirmed(){

        $query = $this->db->query("SELECT appartment.*, agent.* FROM appartment INNER JOIN agent ON agent.agent_id = appartment.agent_id WHERE appartment.current_status = '1'");
        return $query->result();
    }
    public function getServiceForConfirmedForLand(){
        
                $query = $this->db->query("SELECT land_table.*, agent.* FROM land_table INNER JOIN agent ON agent.agent_id = land_table.agent_id WHERE land_table.current_status = '1'");
                return $query->result();
            }
    public function getServiceForCanceled(){
        
                $query = $this->db->query("SELECT appartment.*, agent.* FROM appartment INNER JOIN agent ON agent.agent_id = appartment.agent_id WHERE appartment.current_status = '2'");
                return $query->result();
     }

     public function getServiceForCanceledForLand(){
        
                $query = $this->db->query("SELECT land_table.*, agent.* FROM land_table INNER JOIN agent ON agent.agent_id = land_table.agent_id WHERE land_table.current_status = '2'");
                return $query->result();
     }

     public function getProductDetailsAndAgentDetailsSingle($agent_id,$appartment_id){
        
                $query = $this->db->query("SELECT appartment.*, agent.* FROM appartment INNER JOIN agent ON agent.agent_id = appartment.agent_id WHERE appartment.appartment_id = '$appartment_id' AND agent.agent_id = '$agent_id'");
                if($query->num_rows() > 0){
                    return $query->row();
                }else{
                    return false;
                }
        
    }
    public function GetAccountDetails($agent_id){

        $query = $this->db->query("SELECT * FROM agent WHERE agent_id  = '$agent_id'");
        return $query->result();
    }

    public function GetMyProductsDetailsForAppartment($agent_id){

        $query = $this->db->query("SELECT appartment.*, agent.*, bed_image_table.*, bath_image_table.*,exterior_image_table.* FROM appartment 
        INNER JOIN agent 
        ON agent.agent_id = appartment.agent_id 
        INNER JOIN bed_image_table 
        ON bed_image_table.appartment_id = appartment.appartment_id  
        INNER JOIN bath_image_table 
        ON  bath_image_table.appartment_id = appartment.appartment_id 
        INNER JOIN exterior_image_table 
        ON  exterior_image_table.appartment_id = appartment.appartment_id  
        WHERE agent.agent_id = '$agent_id'");
        return $query->result();
    }

    public function GetMyProductsDetailsForLand($agent_id){
        
                $query = $this->db->query("SELECT land_table.*, agent.*
                FROM land_table 
                INNER JOIN agent 
                ON agent.agent_id = land_table.agent_id 
                
                WHERE agent.agent_id = '$agent_id'");
                return $query->result();
    }

    public function getProductDetailsAndAgentDetailsSingleForLand($agent_id,$land_id){
        
        $query = $this->db->query("SELECT land_table.*, agent.* FROM land_table INNER JOIN agent ON agent.agent_id = land_table.agent_id WHERE land_table.land_id = '$land_id' AND agent.agent_id = '$agent_id'");
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }

    public function EditAppartmentAd($appartment_id){

		$query = $this->db->query("SELECT appartment.*, bed_image_table.*, bath_image_table.*,  exterior_image_table.*, agent.* FROM appartment 
        INNER JOIN bed_image_table ON bed_image_table.appartment_id = appartment.appartment_id  
        INNER JOIN bath_image_table ON  bath_image_table.appartment_id = appartment.appartment_id 
        INNER JOIN exterior_image_table ON  exterior_image_table.appartment_id = appartment.appartment_id 
        INNER JOIN agent ON agent.agent_id = appartment.agent_id 
        WHERE appartment.appartment_id= '$appartment_id'");
		return $query->result();
    }

    public function GetDataByLocation($LocationName){

        $query = $this->db->query("SELECT appartment.*, bed_image_table.*, bath_image_table.*,  exterior_image_table.*, agent.* FROM appartment 
        INNER JOIN bed_image_table ON bed_image_table.appartment_id = appartment.appartment_id  
        INNER JOIN bath_image_table ON  bath_image_table.appartment_id = appartment.appartment_id 
        INNER JOIN exterior_image_table ON  exterior_image_table.appartment_id = appartment.appartment_id 
        INNER JOIN agent ON agent.agent_id = appartment.agent_id 
        WHERE appartment.place= ' $LocationName' and appartment.current_status = '1' ");
        return $query->result();
    }
    public function   GetDataByLocationSell($LocationName){
        
                $query = $this->db->query("SELECT appartment.*, bed_image_table.*, bath_image_table.*,  exterior_image_table.*, agent.* FROM appartment 
                INNER JOIN bed_image_table ON bed_image_table.appartment_id = appartment.appartment_id  
                INNER JOIN bath_image_table ON  bath_image_table.appartment_id = appartment.appartment_id 
                INNER JOIN exterior_image_table ON  exterior_image_table.appartment_id = appartment.appartment_id 
                INNER JOIN agent ON agent.agent_id = appartment.agent_id 
                WHERE appartment.place= '$LocationName' and appartment.current_status = '1' and appartment.service_type = 'Sell' ");
                return $query->result();
  }

  public function GetDataByLocationLand($LocationName){

        $query = $this->db->query("SELECT * FROM land_table WHERE place =' $LocationName'");
        //echo $this->db->last_query();
        return $query->result();

  }

  public function UpdateServiceData($AppartmentData,$appartment_id){

    

    $this->db->where('appartment_id', $appartment_id);
    $this->db->update('appartment', $AppartmentData);

    if($this->db->affected_rows() > 0){
        return true;
    }
    else{
        return false;
    }

  
}

    public function DeleteAdForAppartment($appartment_id){
    
        $this->db->where('appartment_id', $appartment_id);
        $this->db->delete('appartment');
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
}
// public function DeleteBedImage($bed_image_id){

//     $this->db->where('bed_image', $bed_image_id);
//     $this->db->delete('bed_image_table');
//     if($this->db->affected_rows() > 0){
//         return true;
//     }else{
//         return false;
//     }

// }
    public function InsertTestimonial($ReviewtData){

        $this->db->insert('testimonials', $ReviewtData);
        
         return true;
    }
   public function GetTestimonial(){

    $query = $this->db->query("SELECT * FROM testimonials"); // changeable
    
    return $query->result();
   }
   public function EditLandAd($land_id){

    $query = $this->db->query("SELECT land_table.*, agent.* FROM land_table INNER JOIN agent ON agent.agent_id = land_table.agent_id WHERE land_table.land_id = '$land_id'");
    return $query->result();
    // if($query->num_rows() > 0){
    //     return $query->row();
    // }else{
    //     return false;
    // }
   }
   public function UpdateServiceDataForLand($LandData,$land_id){
    
        
    
        $this->db->where('land_id', $land_id);
        $this->db->update('land_table', $LandData);
    
        if($this->db->affected_rows() > 0){
            return true;
        }
        else{
            return false;
        }
    
      
    }

    public function GetFeaturedRents(){

        $query =  $this->db->query("SELECT appartment.*, agent.*, bed_image_table.*, bath_image_table.*,exterior_image_table.* FROM appartment 
        INNER JOIN agent 
        ON agent.agent_id = appartment.agent_id 
        INNER JOIN bed_image_table 
        ON bed_image_table.appartment_id = appartment.appartment_id  
        INNER JOIN bath_image_table 
        ON  bath_image_table.appartment_id = appartment.appartment_id 
        INNER JOIN exterior_image_table 
        ON  exterior_image_table.appartment_id = appartment.appartment_id
        WHERE appartment.service_type = 'Rent' AND appartment.current_status = '1' LIMIT 6");

       //return $this->db->last_query();
       
         return $query->result();

    }

    public function GetFeaturedSells(){
        
                $query =  $this->db->query("SELECT appartment.*, agent.*, bed_image_table.*, bath_image_table.*,exterior_image_table.* FROM appartment 
                INNER JOIN agent 
                ON agent.agent_id = appartment.agent_id 
                INNER JOIN bed_image_table 
                ON bed_image_table.appartment_id = appartment.appartment_id  
                INNER JOIN bath_image_table 
                ON  bath_image_table.appartment_id = appartment.appartment_id 
                INNER JOIN exterior_image_table 
                ON  exterior_image_table.appartment_id = appartment.appartment_id
                WHERE appartment.service_type = 'Sell' AND appartment.current_status = '1' LIMIT 6");
        
               //return $this->db->last_query();
               
                 return $query->result();
        
            }
        
    function UpdateBedImageData($bed_image_url,$bed_image_id){

        $data = array(
            
                        'bed_image_url' => $bed_image_url
                    );
                    //echo "<pre>"; print_r($data);
                
                     $this->db->where('bed_image', $bed_image_id);
                     $this->db->update('bed_image_table', $data);
                
                    if($this->db->affected_rows() > 0){
                        
                       return true;
                    }
                    else{
                         return false;
                }
    }
    function UpdateBathImageData($bath_image_url,$bath_image_id){
        
                $data = array(
                    
                                'bath_image_url' => $bath_image_url
                            );
                            //echo "<pre>"; print_r($data);
                        
                             $this->db->where('bath_image_id', $bath_image_id);
                             $this->db->update('bath_image_table', $data);
                        
                            if($this->db->affected_rows() > 0){
                                
                               return true;
                            }
                            else{
                                 return false;
                        }
            }
            function UpdateExteriorImageData($exterior_image_url,$exterior_image_id){
                
                        $data = array(
                            
                                        'exterior_image_url' => $exterior_image_url
                                    );
                                    //echo "<pre>"; print_r($data);
                                
                                     $this->db->where('exterior_image_id', $exterior_image_id);
                                     $this->db->update('exterior_image_table', $data);
                                
                                    if($this->db->affected_rows() > 0){
                                        
                                       return true;
                                    }
                                    else{
                                         return false;
                                }
                    }        
    
    public function GetApartmentDetails($appartment_id){

        $query = $this->db->query("SELECT * FROM appartment WHERE appartment_id = '$appartment_id'"); // changeable
        
        return $query->result();
    }

    public function GetAgentDetails($agent_id){

        $query = $this->db->query("SELECT * FROM agent WHERE agent_id = '$agent_id'"); // changeable
        
        return $query->result();
    }
     
}
