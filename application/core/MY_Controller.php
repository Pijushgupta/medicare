<?php

class MY_Controller extends CI_Controller {

    function __construct() {
        parent::__construct();
    }
    
    /* Using the following view  for the login form*/
    function login_view($arg=null){
        if($arg!=null){
            $this->load->view('admin/include/header');
            $this->load->view($arg);
            $this->load->view('admin/include/footer');
        }
    }
    
    /* Using the following view for the dashboard*/
    function dashboard_view($page_name=null,$page_argument=null, $navbar_argument=null, $sidebar_argument=null){
        if($page_name!=null){
            
            $this->load->view('admin/include/header');
            
            if($navbar_argument!=null){
                $this->load->view('admin/include/navbar',$navbar_argument);
            }else{
                $this->load->view('admin/include/navbar');
            }
            
            if($sidebar_argument!=null){
              $this->load->view('admin/include/sidebar',$sidebar_argument);  
            }else{
              $this->load->view('admin/include/sidebar');
            }
            
            if($page_argument!=null){
                $this->load->view('admin/'.$page_name,$page_argument);
            }else{
                $this->load->view('admin/'.$page_name);
            }
            
            $this->load->view('admin/include/footer');
        }
        
    }
    
}
