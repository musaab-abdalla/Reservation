<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class dashboard extends CI_Controller {

    function __construct() {
     parent::__construct();  
        $this->load->library('session');
        $this->load->model('dbmodel');
        $this->load->model('dashboard_model');
        $this->load->helper('url');
        $this->load->helper(array('form', 'url'));
        $this->load->library("pagination");
    }
	
	
        
        function addRoom(){
           
          
           
        // Load the library - no config specified here
        $this->load->library('upload');
 
        // Check if there was a file uploaded - there are other ways to
        // check this such as checking the 'error' for the file - if error
        // is 0, you are good to code
        if (!empty($_FILES['room_img']['name']))
        {
            // Specify configuration for File 1
            $config['upload_path'] = 'uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
                
 
            // Initialize config for File 1
            $this->upload->initialize($config);
 
            // Upload file 1
            if ($this->upload->do_upload('room_img'))
            {
                $data = $this->upload->data();
                $img_name =   $data['file_name']; 
                
               
            }
            else
            {
                echo $this->upload->display_errors();
            }
 
        }
        if(empty($img_name))
        {
            $img_name="";
        }
        $img_link = base_url().'uploads/'.$img_name;
       
            $room_type = $this->input->post('room_type');
           $noOfRoom = $this->input->post('noOfRoom');
           $price = $this->input->post('price');
           $description = $this->input->post('description');
        
               
                
           
            $data['add_room']= $this->dashboard_model->add_new_room($room_type,$noOfRoom,$price,$description,$img_link);
           
           if($data)
           {
               $this->session->set_flashdata('message', 'Data sucessfully Added');
           }
           else
           {
               $this->session->set_flashdata('mess', 'Fill up the required field');
           }
            
           
            $this->load->library('session');
     
        $this->load->view('template/header');
        $this->load->view('dashboard/reservationSystem',$data);
        $this->load->view('dashboard/addNew',$data);
        $this->load->view('template/reservation_template');
        $this->load->view('template/footer');
        $this->load->view('template/copyright');
        } 
            
        }
        
        