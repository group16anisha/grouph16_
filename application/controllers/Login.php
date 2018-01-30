<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
    {
        parent::__construct();				
        $this->load->model('LoginModel','LoginModel');
    }    
	
	public function index()
	{
		if(!empty($_POST))
        {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $result = $this->LoginModel->login($email,$password);
            if($result -> num_rows() > 0)
            {
                foreach ($result->result() as $row)
                {
                    $this->session->userid = $row->id;
                    $this->session->email =  $row->email;
                    $this->session->is_admin =  $row->is_admin;
                    redirect('dashboard');
                }
            }
            else
            {
                $data['email'] = $email;
                $data['password'] = $password;
                $this->session->set_flashdata('SUCCESSMSG','Email and Password is Wrong');
                $this->load->view('login',$data);
            }
        }
		else
		{
			$this->load->view('login');
		}
	}
	
	public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
