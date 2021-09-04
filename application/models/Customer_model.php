<?php




class Customer_model  extends CI_Model{



public function __construct(){

parent::__construct();


}


    public function insert_user($data){

    
        if($this->db->insert('customer', $data)){
        return 1;
        }
        else{
            return 0;
            
        }
        }
    
 
 
        public function customer_data(){


            $query=$this->db->query("select * from customer");
            return $query->result();
    
            }
            public function customer_data_by_id($id){


                $query=$this->db->query("select * from customer where id='$id'");
                return $query->result();
        
                }
               
           
            
            public function edit_customer_by_id($data){


                $this->db->where('id', $data['id']);
                
                if($this->db->update('customer', $data)){
                    return 1;
                    }
                    else{
                        return 0;
                        
                    }
        
                }


                public function customer_search($name,$lastname,$phone,$address,$dob){
                    if($name==''){
                        $name='*';
                    }
                    if($lastname==''){
                        $lastname='*';
                    }
                    if($phone==''){
                        $phone='*';
                    }
                    if($address==''){
                        $address='*';
                    }
                    if($dob==''){
                        $dob='*';
                    }
                    $query=$this->db->query("select * from customer where (name='$name' and surname='$lastname') or customertel='$phone' or address='$address' or dob='$dob'");
                    return $query->result();
            
                    }
                  
           

                  
                   
                            public function customer_count(){


                                $query=$this->db->query("select COUNT(id) as working from customer");
                                return $query->result();
                        
                                }
         

}