<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Login extends MY_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('staff');
       if($this->session->has_userdata('username')==TRUE && $this->session->has_userdata('password')==TRUE){
          if($this->staff->is_user_exists($this->session->userdata('username'),$this->session->userdata('password'))!=false){
              redirect('dashboard');
          }
       }
    }

/* Loading User login Page*/
    public function index(){
        
        $this->login_view('admin/login');
    }
    
/* User Login Handler, works only after login form submission */
    public function login_submit(){
        
        if($this->input->post()){
            
            /*validating form before seding the post data to model for verification.
              Rules are written in 'form_validation' file inside config folder. */
           if($this->form_validation->run('login') == TRUE){
              
                $staff_data = $this->staff->is_user_exists($this->input->post('username'),md5($this->input->post('password')));
                if($staff_data!=false){
                                                     
                    $session_data = array(
                        'username'=>$staff_data->username,
                        'password'=>$staff_data->password,
                        'userid'  =>$staff_data->id,
                        'name'    =>$staff_data->name
                        
                    );
                    
                    $this->session->set_userdata($session_data);
                    
                    redirect('login');
                    
                }else{
                   $this->session->set_flashdata('login_error_msg','Invalid login attempt ');
                  
                    redirect('login');
                }
                
           }else{
               
               redirect('login');
           }
            
        }
        
                
    }
    
    
    
}
