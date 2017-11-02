<?php

class Dashboard extends MY_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('staff');
        if($this->session->has_userdata('username')==FALSE OR $this->session->has_userdata('password')==FALSE ){
            redirect('login');
        }
    }
    
    public function logout(){
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('userid');
        $this->session->unset_userdata('name');
        redirect('login');
    }
    
    function  index(){
       $this->dashboard_view('patients');
    }
    
    
    function add_new_patient(){
        $this->dashboard_view('add_new_patient');
    }
}
