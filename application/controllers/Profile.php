<?php


class Profile extends CI_Controller{
 
    public function profileview(){
      $this->load->library('session');
      $this->load->helper('cookie');
        $this->load->model('Profile_model');

      $id=get_cookie('email');
      echo $id;
      if(isset($_POST['submit'])){

switch($_POST['submit']){
case 'insta':
$column='insta';
break;
case 'spotify':
  $column='spotify';
  break;
  case 'snapchat':
    $column='snapchat';
    break;
    case 'tiktok':
      $column='tiktok';
      break;
      case 'twitter':
        $column='twitter';
        break;
        case 'website':
          $column='website';
          break;
          case 'youtube':
            $column='youtube';
            break;
            case 'booksy':
              $column='booksy';
              break;
              case 'email':
                $column='email';
                break;
                case 'facebook':
                  $column='facebook';
                  break;
                  case 'linkedin':
                    $column='linkedin';
                    break;
                    case 'skype':
                      $column='skype';
                      break;
                      case 'pinterest':
                        $column='pinterest';
                        break;
                        case 'cashap':
                          $column='cashap';
                          break;
                          case 'phone':
                            $column='phone';
                            break;
                            case 'venmo':
                              $column='venmo';
                              break;
                              case 'soundcloud':
                                $column='soundcloud';
                                break;
                                case 'whatsapp':
                                  $column='whatsapp';
                                  break;
}


$data=array($column=>$_POST['text'],
             );
             $re = $this->Profile_model->update_user($data,$id);

      }
        $dat=$this->Profile_model->user_data($id);
        if(get_cookie('email')){
          $result['login']=1;    
        }
      $result['data']=$dat;
    $this->load->view('profile',$result);




    }

    public function userprofile(){
      $id=$this->uri->segment(3);
      
      
        $this->load->model('Profile_model');
      
        $dat=$this->Profile_model->user_data_by_userid($id);
        if($dat){
      $result['data']=$dat;
    $this->load->view('profileview',$result);



      }
      else{
        echo "user not found";
      }
    }


    // public function editprofile(){
    //   $this->load->helper('cookie');
    //   $config=['upload_path'=>'./assets/asset1/img','allowed_types'=>'png|jpg|jpeg'];
    //   $this->load->library('upload',$config);
    //   $this->load->model('Profile_model');
    //   $email=get_cookie('email');
      
    //   if(isset($_POST['submit'])){
    //     $this->form_validation->set_rules('email','Email','required');
    //     $this->form_validation->set_rules('password','Password');
        
       
      
        
        
    //     if($this->form_validation->run() == TRUE ){
        
    //     if( $this->upload->do_upload('file')){
    //       $data1=$this->upload->data();
    //       $imagepath=base_url("assets/asset1/img/".$data1['raw_name'].$data1['file_ext']);
    //       $data=array('email'=>$_POST['email'],
    //       'password'=>$_POST['password'],
    //       'bio'=>$_POST['bio'],
    //       'insta'=>$_POST['insta'],
    //       'spotify'=>$_POST['spotify'],
          
    //       'snapchat'=>$_POST['snapchat'],
    //       'tiktok'=>$_POST['tiktok'],
    //       'website'=>$_POST['website'],
    //       'facebook'=>$_POST['facebook'],
    //       'twitter'=>$_POST['twitter'],
    //       'skype'=>$_POST['skype'],
    //       'linkedin'=>$_POST['linkedin'],
    //       'email'=>$_POST['mail'],
    //       'youtube'=>$_POST['youtube'],
    //       'picture'=>$imagepath,
    //       'name'=>$_POST['name'],
    //       'country'=>$_POST['country'],
          
          
    //                    );

    //     }
        
      
       
    
    // else{
    
    //       $data=array('phone'=>$_POST['email'],
    //       'password'=>$_POST['password'],
    //       'bio'=>$_POST['bio'],
    //       'insta'=>$_POST['insta'],
    //       'spotify'=>$_POST['spotify'],
          
    //       'snapchat'=>$_POST['snapchat'],
    //       'tiktok'=>$_POST['tiktok'],
    //       'website'=>$_POST['website'],
    //       'facebook'=>$_POST['facebook'],
    //       'twitter'=>$_POST['twitter'],
    //       'skype'=>$_POST['skype'],
    //       'linkedin'=>$_POST['linkedin'],
    //       'email'=>$_POST['mail'],
    //       'youtube'=>$_POST['youtube'],
          
    //       'name'=>$_POST['name'],
    //       'country'=>$_POST['country'],
          
          
    //                    );}
    //                    $result = $this->Profile_model->update_user($data,$email);
    //                    set_cookie('email',$_POST['email'], time() + (10 * 365 * 24 * 60 * 60));
    //                    redirect('Profile/profileview');
        
        
        
        
    //     }
    //     }
    //     $result['data'] = $this->Profile_model->user_data($email);
    // $this->load->view('editprofile',$result);
    
    // }

    public function setting(){
 
  $this->load->helper('cookie');
      $config=['upload_path'=>'./assets/asset1/img','allowed_types'=>'png|jpg|jpeg'];
      $this->load->library('upload',$config);
      $this->load->model('Profile_model');
      $email=get_cookie('email');
      
      if(isset($_POST['submit'])){
        $this->form_validation->set_rules('bio','Bio','required');
        $this->form_validation->set_rules('name','Name','required');
        
       
      
        
        
        if($this->form_validation->run() == TRUE ){
        
        if( $this->upload->do_upload('file')){
          $data1=$this->upload->data();
          $imagepath=base_url("assets/asset1/img/".$data1['raw_name'].$data1['file_ext']);
          $data=array(
          'bio'=>$_POST['bio'],
          'name'=>$_POST['name'],
          'picture'=>$imagepath,
           );

        }
        
      
       
    
  
                       $result = $this->Profile_model->update_user($data,$email);
                      
                       redirect('Profile/profileview');
        
        
        
        
        }
        }
        $result['data'] = $this->Profile_model->user_data($email);
    $this->load->view('setting',$result);
    
   



    }
    public function logout(){
      $this->load->helper('cookie');
      delete_cookie("email");
redirect('Auth/login');
    }
    public function test(){
      $this->load->library('ciqrcode');

      $params['data'] = 'This is a text to encode become QR Code';
      $params['level'] = 'H';
      $params['size'] = 10;
      $params['savename'] = FCPATH.'/images/tes.png';
      $this->ciqrcode->generate($params);
      
      echo '<img src="'.base_url().'/images/tes.png" />';


    }
    public function changepassword(){
      $this->load->model('Profile_model');
      $this->load->helper('cookie');
          $email=get_cookie('email');
          
          if(isset($_POST['submit'])){
            $this->form_validation->set_rules('password','Password','required');
            
           
          
            
            
            if($this->form_validation->run() == TRUE ){
              $data=array(
                'password'=>$_POST['password'],
                
                
                 );

                           $result = $this->Profile_model->update_user($data,$email);
                          
                           redirect('Profile/profileview');
            
            }
            }
        $this->load->view('changepassword');
        
       
    
    
    
        }
}









