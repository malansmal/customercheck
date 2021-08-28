<?php




class Admin_model  extends CI_Model{



public function __construct(){

parent::__construct();


}


public function insert_user($data){

    
    if($this->db->insert('staff', $data)){
    return 1;
    }
    else{
        return 0;
        
    }
    }
    
    public function insert_manager($data){

    
        if($this->db->insert('manager', $data)){
        return 1;
        }
        else{
            return 0;
            
        }
        } 
        public function insert_project($data){

    
            if($this->db->insert('projects', $data)){
            return 1;
            }
            else{
                return 0;
                
            }
            } 

        public function get_manager(){

    
            $query=$this->db->query("select * from manager");
            return $query->result();
            

            }


}