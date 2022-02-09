<?php




class User_model  extends CI_Model{



public function __construct(){

parent::__construct();


}


    public function insert_user($data){

    
        if($this->db->insert('users', $data)){
        return 1;
        }
        else{
            return 0;
            
        }
        }
    
        public function insert_report($data){

    
            if($this->db->insert('report', $data)){
            return 1;
            }
            else{
                return 0;
                
            }
            }
 
        public function users_data(){


            $query=$this->db->query("select * from users ORDER BY id DESC");
            return $query->result();
    
            }
        
               
           
        public function users_report_data($id){


            $query=$this->db->query("select * from report where customerid='$id'");
            return $query->result();
    
            }
            
            public function edit_user_by_id($data){


                $this->db->where('email', $data['email']);
                
                if($this->db->update('users', $data)){
                    return 1;
                    }
                    else{
                        return 0;
                        
                    }
        
                }


                public function user_data_by_email($id){


                    $query=$this->db->query("select * from users where email='$id'");
                    return $query->result();
            
                    }
                  
           

                  
                   
                            public function users_count(){


                                $query=$this->db->query("select COUNT(id) as working from users");
                                return $query->result();
                        
                                }
         

}