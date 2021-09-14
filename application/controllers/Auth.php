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
$this->load->view('landing/header');
$this->load->view('landing/login');
$this->load->view('landing/footer');



}




public function register(){
 
  $this->load->model('Auth_model');
  $this->load->model('User_model');
  $this->load->model('Group_model');
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
      'groupid'=>$_POST['group'],
      
      
                   );
                    $this->Auth_model->insert_user($data);
                    $_SESSION['email']=$_POST['email'];
                
                   redirect('User/packages');
    }
    
    
    
    }
    }
    $gr=$this->Group_model->group_data();
    $result['group']=$gr;
    $this->load->view('landing/header');
$this->load->view('landing/signup',$result);
$this->load->view('landing/footer');

}



public function forgot_password(){
  $this->load->library('email');

  if(isset($_POST['submit'])){
    $this->form_validation->set_rules('email','Email','required');
   
    
    $email=$_POST['email'];
   
    
    
    if($this->form_validation->run() == TRUE){
      $where="email= '$email' ";
      $this->db->select('*');
    $this->db->from('users');
    $this->db->where($where);
    $query=$this->db->get();
    
    $user=$query->row();
    
    if(isset($user)){
      $_SESSION['email']=$user->email;
    

      $number=rand(1000,10000);
$_SESSION['code']=$number;


$to=$email;
 $message= "Click to change Password<br>https://customercheck.co.za/index.php/Auth/change_password?email=".$to."&code=".$number;
$this->email->from('webmaster@customercheck.co.za');
$this->email->to($to);
$this->email->subject('Change Your Password');
$this->email->message($message);

if($this->email->send()){
   
}








      
   
      $this->session->set_flashdata('success','<div class="alert alert-success">Please check your Email </div>');
    }
    else{
       $this->session->set_flashdata('error','<div class="alert alert-danger">Wrong Email </div>');
    }
    
    
    
    }
    }
  
  $this->load->view('landing/header');
  $this->load->view('landing/forgot_password');
  $this->load->view('landing/footer');
 
 
 
 
 }

 public function change_password(){
  $this->load->model('User_model');

if(isset($_SESSION['code'])){
  if(isset($_POST['submit'])){


    if($_GET['code']==$_SESSION['code']){
$password=$_POST['password'];
$data=array(
  'email'=>$_GET['email'],
'password'=>$password,
           );
$report = $this->User_model->edit_user_by_id($data); 
unset($_SESSION['code']);
$this->session->set_flashdata('success','<div class="alert alert-success">Password successfully Changed </div>');
redirect('Auth/login');

          }
          else{

echo "Link is Expired";

          }



  }

 $this->load->view('landing/header');
 $this->load->view('landing/change_password');
 $this->load->view('landing/footer');


 }
 else{
  echo "Link is Expired";
 }
}








public function sendmail(){
  $this->load->library('email');

  $sub="Contact Us Form";
  $message=$_POST['message'];
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $phone=$_POST['phone'];
  $sub=$_POST['email'];
    $option=$_POST['option1'];
  $m="Name: ".$fname." ".$lname."<br>Email: ".$email."<br>Phone: ".$phone."<br>message: ".$message."<br>Option: ".$option;
$from="";
$to="muhammadhassan0566@gmail.com";

$this->email->from('webmaster@customercheck.co.za');
$this->email->to($to);
$this->email->subject($sub);
$this->email->message($m);

if($this->email->send()){
    echo "send";
}


}





}











