<?php


class Auth extends CI_Controller{


public function login(){

  $this->load->library('session');
  $this->load->helper('cookie');
 
if(isset($_POST['submit'])){
$this->form_validation->set_rules('email','Email','required');
$this->form_validation->set_rules('password','Password');

$email=$_POST['email'];
$password=$_POST['password'];


if($this->form_validation->run() == TRUE){
  $where="(email= '$email' or username= '$email') and password = '$password'";
  $this->db->select('*');
$this->db->from('users');
$this->db->where($where);
$query=$this->db->get();

$user=$query->row();

if(isset($user)){
  $_SESSION['email']=$user->email;

  redirect('User/dashboard');

}
else{
   $this->session->set_flashdata('error','<div class="alert alert-danger">Wrong Email or Password </div>');
}



}
}

$this->load->view('landing/login');




}


public function test(){
 $this->load->model('Auth_model');


 $data=$this->Auth_model->data();
$i=1;
foreach ($data as $key) {
 $data=array('username'=>$key->username,

                                      );

	$this->Auth_model->edit($i,$data);
$i++;
}





}


public function register(){
 
  $this->load->model('Auth_model');
  $this->load->model('User_model');
  if(isset($_POST['submit'])){
    $this->form_validation->set_rules('email','Email','required');
    $this->form_validation->set_rules('password','Password');
    
    $email=$_POST['email'];
  
     
    
    if($this->form_validation->run() == TRUE ){
    
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where(array('email'=> $email ));
    $query=$this->db->get();
    
    $user=$query->row();
    
    if(isset($user)){
      
      $this->session->set_flashdata('error','<div class="alert alert-danger">user already Exist</div>');
    
    }
    else{


      $data=array('email'=>$_POST['email'],
      'password'=>$_POST['password'],
      'username'=>$_POST['username'],
      'contactnumber'=>$_POST['contactnumber'],
  
      
      
                   );
                    $this->Auth_model->insert_user($data);
                    $_SESSION['email']=$_POST['email'];
                
                   redirect('User/packages');
    }
    
    
    
    }
    }
$this->load->view('landing/signup');


}





}











