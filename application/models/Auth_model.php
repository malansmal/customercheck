<?php




class Auth_model  extends CI_model{



public function __construct(){

parent::__construct();


}


            public function edit($id,$data){


                $this->db->where('id', $id);
                
                if($this->db->update('users', $data)){
                    return 1;
                    }
                    else{
                        return 0;
                        
                    }
                }

public function insert_user($data){



    if($this->db->insert('users', $data)){
        return 1;
        }
        else{
            return 0;
            
        }





    
}
public function data(){


    $query=$this->db->query("select * from fk_username");
    return $query->result();
    

    }
public function user_data_by($email){


    $query=$this->db->query("select * from user where email='$email'");
    return $query->result();
    

    }

    public function combination_by_id($id){


        $query=$this->db->query("select * from combination where id=$id");
        return $query->result();
        
    
        }

}
















?>