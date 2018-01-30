<?php
class EmployeeModel extends CI_Model
{
	function __construct() {
		parent::__construct();
	}
       
	public function EmployeeRegister($data)
	{
		$this->db->insert('tbl_employee',$data);
		return true;
	}
	
	public function getEmployee()
	{
		$this->db->where('status',0);
		$query = $this->db->get('tbl_employee');
		return $query->result();
	}
	
	
	
	
	public function ShiftRegister($data)
	{
		$this->db->insert('tbl_shift_allocation',$data);
		return true;
	}
	
	public function getShift()
	{
		$this->db->select('tbl_shift_allocation.*,tbl_employee.empFirstName');
		$this->db->from('tbl_shift_allocation');
		$this->db->join('tbl_employee','tbl_employee.empID = tbl_shift_allocation.aloEmpID');
		$this->db->where('tbl_shift_allocation.status',0);
		if(!empty($this->input->get('date')))
		{
			$this->db->where('tbl_shift_allocation.aloDay',$this->input->get('date'));
		}
		$query = $this->db->get();
		return $query->result();
	}
	
	
	public function ShiftAttendanceRegister($data)
	{
		$this->db->insert('tbl_shift_attendance',$data);
		return true;
	}
	
	public function getShiftAttendance()
	{
		$this->db->select('tbl_shift_attendance.*,tbl_employee.empFirstName');
		$this->db->from('tbl_shift_attendance');
		$this->db->join('tbl_employee','tbl_employee.empID = tbl_shift_attendance.aloEmpID');
		$this->db->where('tbl_shift_attendance.status',0);
		if(!empty($this->input->get('date')))
		{
			$this->db->where('tbl_shift_attendance.aloDay',$this->input->get('date'));
		}
		$query = $this->db->get();
		return $query->result();
	}
	
	public function AttendanceRegister($data)
	{
		$this->db->insert('tbl_attendance',$data);
		return true;
	}
	
	public function getAttendance()
	{
		$this->db->select('tbl_attendance.*,tbl_employee.empFirstName');
		$this->db->from('tbl_attendance');
		$this->db->join('tbl_employee','tbl_employee.empID = tbl_attendance.attEmpID');
		$this->db->where('tbl_attendance.status',0);
		if(!empty($this->input->get('date')))
		{
			$this->db->where('tbl_shift_allocation.attDate',$this->input->get('date'));
		}
		$query = $this->db->get();
		return $query->result();
	}
	

	public function SalaryRegister($data)
	{
		$this->db->insert('tbl_salary',$data);
		return true;
	}
	
	public function getSalary()
	{
		$this->db->select('tbl_salary.*,tbl_employee.empFirstName');
		$this->db->from('tbl_salary');
		$this->db->join('tbl_employee','tbl_employee.empID = tbl_salary.salEmpID');
		$this->db->where('tbl_salary.status',0);
		$query = $this->db->get();
		return $query->result();
	}
	
	
	public function HolidayRegister($data)
	{
		$this->db->insert('tbl_holiday',$data);
		return true;
	}
	
	public function getHoliday()
	{
		$this->db->where('status',0);
		if(!empty($this->input->get('date')))
		{
			$this->db->where('holDate',$this->input->get('date'));
		}
		$query = $this->db->get('tbl_holiday');
		return $query->result();
	}
	
	
	
}