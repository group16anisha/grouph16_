<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    
    function __construct()
    {
        parent::__construct();				
        if($this->session->email == "")
        {
            redirect('login');
        }
        $this->load->model('LoginModel','LoginModel');
    }    
    
    public function index()
    {
        $this->load->view('dashboard');
    }
}
