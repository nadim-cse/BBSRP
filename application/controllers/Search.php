<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

    var $AddressArray;
    var $ReservationArray;
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Search_Model');
        
	
		
    }


	
	public function searchReult()
	{
         $place = $this->input->post('place');
         $service_type = $this->input->post('service_type');
         $price = $this->input->post('price');
         

         // For Place
         if($place != 'select-place' && $service_type == 'select-service' && $price== ''){
           
            $data['PlaceSearchResultsForAppartment'] = $this->Search_Model->GetDetailsForPlace($place);
            $data['PlaceSearchResultsForLand'] = $this->Search_Model->GetDetailsForPlaceLand($place);
            //    echo "<pre>"; print_r($data['PlaceSearchResultsForAppartment']);
            //    echo "<pre>"; print_r($data['PlaceSearchResultsForLand']);
            $data['title'] = 'Search Results for - '. $place;
            $data['place'] = $place;
            $this->load->view('client/header',$data);
            $this->load->view('client/search_result_place',$data);
            $this->load->view('client/footer');
                //echo "Only Place";
         }
         // For Service Type
         if($place == 'select-place' && $service_type != 'select-service' && $price== ''){
            
            $data['title'] = 'Search Results for - '. $service_type;
            $data['service_type'] = $service_type;
            $data['ServiceTypeSearchResultsForAppartment'] = $this->Search_Model->GetDetailsForServiceTypeAppartment($service_type);
            $data['ServiceTypeSearchResultsForLand'] = $this->Search_Model->GetDetailsForServiceTypeLand($service_type);
            
            //  echo "<pre>"; print_r($data['ServiceTypeSearchResultsForAppartment']);
            //  echo "<pre>"; print_r($data['ServiceTypeSearchResultsForLand']);
            $this->load->view('client/header',$data);
            $this->load->view('client/search_result_service',$data);
            $this->load->view('client/footer');
            //echo "Only Service";
         }
          //For  Price
          if($place == 'select-place' && $service_type == 'select-service' && $price !=''){
            
           
            $data['title'] = "Price Range between - ". $price;
            $data['price_range'] =  $price;
          
            $data['ServicePriceForAppartment'] = $this->Search_Model->GetDetailsForPriceAppartment($price);
            $data['ServicePriceForLand'] = $this->Search_Model->GetDetailsForPriceLand($price);

            //    echo "<pre>"; print_r($data['ServicePriceForLand']);
            //    echo "<pre>"; print_r($data['ServicePriceForAppartment']);
            $this->load->view('client/header',$data);
            $this->load->view('client/search_result_price',$data);
            $this->load->view('client/footer');
            //echo "Only price";
            
          }
          // For Price and service type
         if($place != 'select-place' && $service_type != 'select-service' && $price== ''){

            $data['title'] = $service_type . ' / '.$place;
            $data['service_type'] = $service_type;
            $data['place'] = $place;
            $data['ServiceTypeSearchAndPlaceResultsForAppartment'] = $this->Search_Model->GetDetailsForServiceTypeAndPlceAppartment($service_type,$place);
            $data['ServiceTypeSearchAndPlaceResultsForLand'] = $this->Search_Model->GetDetailsForServiceTypeAndPlceLand($service_type,$place);
             //echo "<pre>"; print_r($data['ServiceTypeSearchAndPlaceResultsForLand']);
             //echo "<pre>"; print_r($data['ServiceTypeSearchAndPlaceResultsForAppartment']);
            $this->load->view('client/header',$data);
            $this->load->view('client/search_result_place_service',$data);
            $this->load->view('client/footer');
           // echo "place and service type filled up";
         }

         if($place == 'select-place' && $service_type == 'select-service' && $price== ''){
            
             redirect($_SERVER['HTTP_REFERER']);
           // echo $place. "<br>".$service_type;
           //echo "All empty ";
         }

         if($place != 'select-place' && $service_type != 'select-service' && $price != ''){

            $data['title'] = $service_type . ' / '.$place . '/ '.$price;
            $data['service_type'] = $service_type;
            $data['place'] = $place;
            $data['price_range'] =  $price;

            $data['ServiceAllFormetForAppartment'] = $this->Search_Model->GetDetailsForAllFormetAppartment($service_type,$place,$price);
            $data['ServiceAllFormetForLand'] = $this->Search_Model->GetDetailsForAllFormetLand($service_type,$place,$price);

            // echo "<pre>"; print_r($data['ServiceAllFormetForAppartment']);
            // echo "<pre>"; print_r($data['ServiceAllFormetForLand']);
            $this->load->view('client/header',$data);
            $this->load->view('client/search_result_place_service_price',$data);
            $this->load->view('client/footer');
            //echo "All filled up ";

         }
         
        //  elseif($service_type != 'select-service' ){  
             
        //      //$data['SearchResultsForServiceType'] = $this->Search_Model->GetDetailsForServiceType($service_type);
        //      //echo "<pre>"; print_r($data['SearchResultsForServiceType']);
        //     //  $data['title'] = 'Search Results for - '. $service_type;
        //     //  $data['service_type'] = $service_type;
        //     //  $this->load->view('client/header',$data);
        //     //  $this->load->view('client/search_result',$data);
        //     //  $this->load->view('client/footer');
        //  }

        }
        
			
		
        

	
	
}