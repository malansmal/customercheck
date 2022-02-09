<?php


class User extends CI_Controller{


    public function dashboard(){
     
        $this->load->view('user/header');
        $this->load->view('user/search');

    }
    public function search(){

        $this->load->model('User_model');
            
        $this->load->model('Customer_model');
        
        if(isset($_POST['submit'])){

            $data = $this->Customer_model->customer_search($_POST['firstname'],$_POST['lastname'],$_POST['phone'],$_POST['address'],$_POST['dob']);
            if(count($data)==1){


    $report = $this->User_model->users_report_data($data[0]->id);    
$result['data']=$data;
$result['report']=$report;
$this->load->view('user/report',$result);
}
elseif(count($data)>1){
    $result['data']=$data;
    $_SESSION['result']=$result;
 redirect('User/found');
}
else{
    $data1=$_POST;
    $result1['data']=$data1;
    $this->load->view('user/header');
    $this->load->view('user/reportmember',$result1);
    $this->load->view('user/footer');
}
        }
    } 
    public function found(){
        $result=$_SESSION['result'];
        $this->load->view('user/header');
    $this->load->view('user/matches',$result);
    $this->load->view('user/footer');
    }
    public function mul_report(){
        $this->load->model('User_model');
            
        $this->load->model('Customer_model');
        if(isset($_POST['submit'])){
            $data = $this->Customer_model->customer_data_by_id($_POST['id']);
        $report = $this->User_model->users_report_data($_POST['id']);    
        $result['data']=$data;
        $result['report']=$report;
        $this->load->view('user/report',$result);
        
        }
    }
    public function insert_customer(){

        $this->load->model('Customer_model');


        if(isset($_POST['submit'])){
            $data=array(
                'name'=>$_POST['fname'],
            'surname'=>$_POST['lname'],
            'customertel'=>$_POST['phone'],
            'customertel2'=>$_POST['phone2'],
            'dob'=>$_POST['dob'],
            'address'=>$_POST['address'],
            
        
            
            
                         );
//                         $t= $this->Customer_model->customer_search_by_name($_POST['fname'],$_POST['lname'],$_POST['dob']);
// echo "<pre>";
// print_r($t);
//                         echo count($this->Customer_model->customer_search_by_name($_POST['fname'],$_POST['lname'],$_POST['dob']));
                         if(count($this->Customer_model->customer_search_by_name($_POST['fname'],$_POST['lname'],$_POST['dob']))){
                            $this->session->set_flashdata('warning','<div class="alert alert-warning">Customer Already Exist</div>');
                        // echo "1";
                        redirect('User/dashboard?success=0');
                         }else{

                         
                            $data = $this->Customer_model->insert_user($data);
                            $this->session->set_flashdata('success','<div class="alert alert-success">Customer Added</div>');
                            // echo "2";    
                        }
                        // echo "3";
                        redirect('User/dashboard');
        }
    }
    public function insert_report(){

        $this->load->model('User_model');
        $this->load->model('Customer_model');

        if(isset($_POST['submit'])){
            $type=$_POST['reason'];
            if(isset($type[1])){

            }else{
                $type[1]=' ';
            }
            $data=array(
                'customerid'=>$_POST['customerid'],
            'reportdate'=>date('y-m-d'),
            'description'=>$_POST['description'],
            'userid'=>$_POST['useremail'],
            'service'=>$_POST['service'],
            'servicedate'=>$_POST['servicedate'],
            'userid'=>$_POST['useremail'],
            'reporttype'=>$type[0],
            'reporttype2'=>$type[1],
            
            
                         );
                         $data = $this->User_model->insert_report($data);
                         $this->session->set_flashdata('success','<div class="alert alert-success">Report Added</div>');
redirect('User/dashboard');
        }
    }
    public function profile(){
        $this->load->model('User_model');
        $this->load->model('Group_model');
            
        
        
        if(isset($_POST['submit'])){
    

          
       
            
           
           
        
        
                $data=array('name'=>$_POST['name'],
                'contactnumber'=>$_POST['contactnumber'],
                'surname'=>$_POST['surname'],
                'email'=>$_SESSION['email'],
                'username'=>$_POST['username'],
                'password'=>$_POST['password'],
                'groupid'=>$_POST['group'],
                             );
                
        
        
                    $result1 = $this->User_model->edit_user_by_id($data);
    
                    if(isset($result1)){
                        $this->session->set_flashdata('success','<div class="alert alert-success">Profile updated</div>');
                      
                      }
                      else{
                         $this->session->set_flashdata('error','<div class="alert alert-danger">Company not updated</div>');
                      }
                
        
        }
        $dat=$this->User_model->user_data_by_email($_SESSION['email']);
        $gr=$this->Group_model->group_data();
$result['data']=$dat;
$result['group']=$gr;
      
        $this->load->view('user/header');
        $this->load->view('user/profile',$result);
        $this->load->view('user/footer');
        
    }
    public function mymembership(){
        $this->load->view('user/header');
        $this->load->view('user/mymembership');
        $this->load->view('user/footer');
    }
    public function membershipinvoice(){
        $this->load->view('user/header');
       $this->load->view('user/membershipinvoice');
       $this->load->view('user/footer');
    }
    public function myreports(){
        $this->load->view('user/header');
        $this->load->view('user/myreports');
        $this->load->view('user/footer');
    }
    public function logout(){

       unset($_SESSION['email']);
       redirect('Welcome/index');
        
    }
    public function packages(){
        $this->load->view('user/header');
        $this->load->view('user/packages');
        $this->load->view('user/footer');
    }

    public function editcompany(){



      




    }


    public function reportmember(){



        $this->load->view('user/header');
        $this->load->view('user/reportmember');
        $this->load->view('user/footer');


    }
    public function matches(){



      
        $this->load->view('user/matches');



    }







}











