<?php
/* 
 * File Name: employee_model.php
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dele_model extends CI_Model
{
    function __construct()
    {
        //Call the Model constructor
        parent::__construct();
    }

    //fetch all employee records
    function get_employee_list()
    {
    ///    $this->db->from('tbl_employee');
      //  $this->db->join('tbl_department', 'tbl_employee.department_id = tbl_department.department_id');
      //  $this->db->join('tbl_designation', 'tbl_employee.designation_id = tbl_designation.designation_id');
        $query = $this->db->get('tbl_employee');
        return $query->result();
    }
	
	public function getEmployee()
	{
		$this->db->where('status',0);
		$query = $this->db->get('tbl_employee');
		return $query->result();
	}
	
	
	
}
?>

