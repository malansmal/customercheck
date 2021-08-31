<?php




class Group_model  extends CI_Model{



public function __construct(){

parent::__construct();


}


    public function insert_group($data){

    
        if($this->db->insert('groups', $data)){
        return 1;
        }
        else{
            return 0;
            
        }
        }
    
 
 
        public function group_data(){


            $query=$this->db->query("select * from groups");
            return $query->result();
    
            }
               
           
            public function delete_group($id){

                               
                $this->db->where('id', $id);
               if($this->db->delete('groups')){
                   return 1;

               }
               else{
                   return 0;
               }

                 }
            

}