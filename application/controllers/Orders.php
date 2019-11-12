<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->model('order_model');
    }

	
    public function index()
	{
        $data['orders'] = $this->order_model->getOrders();
        $data['countorders'] = $this->order_model->getOrdersCount();
        $data['getOrder'] = $this->order_model->getOrder();
        $admin_id = $this->session->userdata('current_admin_id');
        $query = $this->db->query("SELECT * FROM admin  WHERE admin_id='$admin_id'");
            $data['admin_avatar'] = $query->result();
      
        //echo "<pre>"; print_r($data['orders']); exit;
        $this->load->view('dashboard/header',$data);
        $this->load->view('dashboard/orders',$data);
        $this->load->view('dashboard/footer');
    }
    public function ViewInvoice($order_master_id,$order_id,$profile_id){

        $data['order_details'] = $this->order_model->getOrderDetails($order_id,$order_master_id,$profile_id);
        $data['customer_details'] = $this->order_model->getCustomeretails($order_id,$order_master_id,$profile_id);
        $data['countorders'] = $this->order_model->getOrdersCount();
        $data['getOrder'] = $this->order_model->getOrder();
        $admin_id = $this->session->userdata('current_admin_id');
        $query = $this->db->query("SELECT * FROM admin  WHERE admin_id='$admin_id'");
            $data['admin_avatar'] = $query->result();
       // echo "<pre>"; print_r($data['order_details']); exit;
        $this->load->view('dashboard/header',$data);
        $this->load->view('dashboard/invoice',$data);
        $this->load->view('dashboard/footer');

   // echo "Order ID - ".$order_id." Order Master ID:-".$order_master_id." Client ID:- ".$client_id;
        

    }

    // Order list
    public function NewOrders(){
        
        $data['ordersnew'] = $this->order_model->getOrderForNew();
        $data['countorders'] = $this->order_model->getOrdersCount();
        $data['getOrder'] = $this->order_model->getOrder();
        $admin_id = $this->session->userdata('current_admin_id');
        $query = $this->db->query("SELECT * FROM admin  WHERE admin_id='$admin_id'");
            $data['admin_avatar'] = $query->result();
      
        //echo "<pre>"; print_r($data['orders']); exit;
        $this->load->view('dashboard/header',$data);
        $this->load->view('dashboard/order_list_new',$data);
        $this->load->view('dashboard/footer');    
        
   }
   public function OrderConfirmRequest($order_master_id){


    $field = array(
       'status'=> '2'
       
       );
       $this->db->where('order_master_id', $order_master_id);
       $this->db->update('order_master', $field);
       if($this->db->affected_rows() > 0){
           $this->session->set_flashdata('success','<div class="alert alert-success text-center">Order Confirmed</div>');
           redirect($_SERVER['HTTP_REFERER']);
       }else{
           $this->session->set_flashdata('success','<div class="alert alert-success text-center">Order Confirmed</div>');
           redirect($_SERVER['HTTP_REFERER']);
       }
   }

   public function OrderPendingRequest($order_master_id){
    
    
        $field = array(
           'status'=> '1'
           
           );
           $this->db->where('order_master_id', $order_master_id);
           $this->db->update('order_master', $field);
           if($this->db->affected_rows() > 0){
               $this->session->set_flashdata('success','<div class="alert alert-success text-center">Order in Pending List</div>');
               redirect($_SERVER['HTTP_REFERER']);
           }else{
               $this->session->set_flashdata('success','<div class="alert alert-success text-center">Order in Pending List</div>');
               redirect($_SERVER['HTTP_REFERER']);
           }
       }
       public function OrderCancelRequest($order_master_id){
        
        
            $field = array(
               'status'=> '3'
               
               );
               $this->db->where('order_master_id', $order_master_id);
               $this->db->update('order_master', $field);
               if($this->db->affected_rows() > 0){
                   $this->session->set_flashdata('success','<div class="alert alert-success text-center">Order Canceled</div>');
                   redirect($_SERVER['HTTP_REFERER']);
               }else{
                   $this->session->set_flashdata('success','<div class="alert alert-success text-center">Order Canceled</div>');
                   redirect($_SERVER['HTTP_REFERER']);
               }
           }

           
   

   public function ConfirmedOrders(){

   
    $data['orderscon'] = $this->order_model->getOrderForConfirmed();
    $data['countorders'] = $this->order_model->getOrdersCount();
    $data['getOrder'] = $this->order_model->getOrder();
    $admin_id = $this->session->userdata('current_admin_id');
    $query = $this->db->query("SELECT * FROM admin  WHERE admin_id='$admin_id'");
        $data['admin_avatar'] = $query->result();
  
    //echo "<pre>"; print_r($data['orderscon']); exit;
    $this->load->view('dashboard/header',$data);
    $this->load->view('dashboard/order_list_confirmed',$data);
    $this->load->view('dashboard/footer'); 


   }

   public function CanceledOrders(){
    
    $data['orderscans'] = $this->order_model->getOrderForCanceled();
    $data['countorders'] = $this->order_model->getOrdersCount();
    $data['getOrder'] = $this->order_model->getOrder();
    $admin_id = $this->session->userdata('current_admin_id');
    $query = $this->db->query("SELECT * FROM admin  WHERE admin_id='$admin_id'");
        $data['admin_avatar'] = $query->result();
  
    //echo "<pre>"; print_r($data['orders']); exit;
    $this->load->view('dashboard/header',$data);
    $this->load->view('dashboard/order_list_canceled',$data);
    $this->load->view('dashboard/footer');    
    
}
    

   


	}
		

