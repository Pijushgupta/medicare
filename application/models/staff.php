<?php

class Staff extends CI_Model{
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
function is_user_exists($username=null, $password=null){
    if($username!=null && $password !=null){
      $query = $this->db->get_where('staff',array('username'=> $username , 'password' =>$password ));
      if($query->num_rows()>0){
          foreach($query->result() as $row){
              return $row;
          }
      }else{
          return false;
      }
      
    }
    
}
    
}