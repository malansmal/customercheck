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
  
    
            // $this->load->model('Expense_model');
            // $this->load->model('Employee_model');
            // $this->load->model('Company_model');
            // $this->load->model('Companydeduction_model');
            // $this->load->model('Invoice_model');
            // $this->load->model('Companyinvoice_model');
            // $this->load->model('Salaries_model');
            // $this->load->model('Extra_model');
        
        
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











}