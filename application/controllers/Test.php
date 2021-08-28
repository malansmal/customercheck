<?php


class Test extends CI_Controller{


public function home(){

  $this->load->library('session');
  $this->load->helper('cookie');
  $this->load->model('Test_model');


$result['data']= $this->Test_model->user_data();


  $this->load->view('test',$result);

}


public function userdata(){

    $this->load->library('session');
    $this->load->helper('cookie');
    $this->load->model('Test_model');
  
  
  $data= $this->Test_model->user_databyid($_POST['username']);
  echo json_encode($data);
  
  }


}











