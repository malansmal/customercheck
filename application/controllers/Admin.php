<?php

class Admin extends CI_Controller{

    public function __construct(){

        parent::__construct();
      
        }
        public function login(){

            $this->load->library('session');
          if(isset($_POST['submit'])){
          $this->form_validation->set_rules('email','Email','required');
          $this->form_validation->set_rules('password','Password','required');
          
          $email=$_POST['email'];
          $password=$_POST['password'];
          
          
          if($this->form_validation->run() == TRUE){
          $where="('email'=> $email or 'username'=> $email) and 'password' => $password";
          $this->db->select('*');
          $this->db->from('admin');
          $this->db->where($where);
          $query=$this->db->get();
          
          $user=$query->row();
          
          if(isset($user)){
            $_SESSION['email']=$email;
            redirect('admin/dashboard');
          
          }
          else{
             $this->session->set_flashdata('error','<div class="alert alert-danger">user not Exist</div>');
          }
          
          
          
          }
          }
          $this->load->view('admin/login');
          
          
          
          
          }

          public function dashboard(){
  
    
          
        
        
            $this->load->view('admin/header');
             $this->load->view('admin/topbar');
             $this->load->view('admin/sidebar');
             $this->load->view('admin/dashboard');
             $this->load->view('admin/footer');
        
        
        
        
        
        }



        public function users(){



            $this->load->model('User_model');
            
        
        $dat=$this->User_model->users_data();
        
        $result['data']=$dat;
            $this->load->view('admin/header');
             
            $this->load->view('admin/topbar');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/users',$result);
            $this->load->view('admin/footer');
        
        
        
        
        
        }






        public function group(){


          $this->load->model('Group_model');
         
         
      if(isset($_POST['submit'])){
      
                  $result = $this->Group_model->delete_group($_POST['groupid']);
      
                  if(isset($result)){
                      $this->session->set_flashdata('success','<div class="alert alert-success">Expense Deleted</div>');
                    
                    }
                    else{
                       $this->session->set_flashdata('error','<div class="alert alert-danger">Expense not Deleted</div>');
                    }
              }
      
      
          $dat=$this->Group_model->group_data();
       
     
      
      $result1['data']=$dat;
      
      
          $this->load->view('admin/header');
           
          $this->load->view('admin/topbar');
          $this->load->view('admin/sidebar');
          $this->load->view('admin/group',$result1);
          $this->load->view('admin/footer');
      
      
      }
      
      public function addgroup(){


        $this->load->model('Group_model');
       
        if(isset($_POST['submit'])){
    
           $this->form_validation->set_rules('name','Name','required');
          
       
            
           
            if($this->form_validation->run() == TRUE){
               
        
                $data=array(
                'name'=>$_POST['name'],
             
    
                             );
                
        
        
                    $result = $this->Group_model->insert_group($data);
        
                    if(isset($result)){
                        $this->session->set_flashdata('success','<div class="alert alert-success">Group Added</div>');
                      
                      }
                      else{
                         $this->session->set_flashdata('error','<div class="alert alert-danger">Group not Added</div>');
                      }
                }
        
        }
        
      
       
    //    print_r($result['data']);
       
        $this->load->view('admin/header');
         
        $this->load->view('admin/topbar');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/addgroup');
        $this->load->view('admin/footer');
    
    
    }



}