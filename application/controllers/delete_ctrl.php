<?php
/* 
 * File Name: deleteemployee.php
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class delete_ctrl extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        //load the employee model
        $this->load->model('employee_model');
    }

    //index function
    function index()
    {
        //get the employee list
        $data['employee_list'] = $this->employee_model->get_employee_list();
        $this->load->view('delete_employee_view', $data);
    }

    //delete employee record from db
    function delete_employee($id)
    {
        //delete employee record
        $this->db->where('employee_id', $id);
        $this->db->delete('tbl_employee');
        redirect('deleteemployee/index');
    }
}
?>