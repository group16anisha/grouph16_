<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
    
    
    function __construct()
    {
        parent::__construct();				
        if($this->session->email == "")
        {
        redirect('login');
        }
        $this->load->model('EmployeeModel','EmployeeModel');
    }   
	
	
	public function Calendar()
	{
		$data['getEmployee'] = $this->EmployeeModel->getEmployee();	
		$data['getHoliday'] = $this->EmployeeModel->getHoliday();
		$data['getAttendance'] = $this->EmployeeModel->getAttendance();
		$data['getSalary'] = $this->EmployeeModel->getSalary();
		$data['getShift'] = $this->EmployeeModel->getShift();
		$data['getShiftAttendance'] = $this->EmployeeModel->getShiftAttendance();
		
		
		
		
		$this->load->view('calendar',$data);
	}
	
	public function ViewEmployee()
	{
		$data['getEmployee'] = $this->EmployeeModel->getEmployee();	
		
		$this->load->view('view_employee',$data);
	}
		
    public function EmployeeRegister()
    {
		if(!empty($_POST))
		{
			$data =  array('empFirstName' => $this->input->post('firstname'),
					'empLastName' => $this->input->post('lastname'),
					'empNO' => $this->input->post('employee_id'),
					'empemail' => $this->input->post('email'),
					'empMobile' => $this->input->post('mobile'),
					'empbdate' => $this->input->post('birth_date'),
					'empaddress' => $this->input->post('address'),
					'created_date' => date('Y-m-d H:i:s'),
					);
			$this->EmployeeModel->EmployeeRegister($data);
			$this->session->set_flashdata('SUCCESSMSG', "Employee Register Successfully!!");
			redirect('view-employee');
		}
		else
		{
			$this->load->view('employee_register');
		}
    }
	
	
	public function ShiftRegister()
	{
		if(!empty($_POST))
		{
			$data =  array('aloEmpID' => $this->input->post('employee_id'),
					'aloDay'		  => $this->input->post('aloDay'),
					'aloTimeIn'		  => $this->input->post('time_in'),
					'aloTimeOut'	  => $this->input->post('time_out'),
					'created_date'    => date('Y-m-d H:i:s'),
					);
			$this->EmployeeModel->ShiftRegister($data);
			$this->session->set_flashdata('SUCCESSMSG', "Shift Register Successfully!!");
			redirect('view-shift');
		}
		else
		{
			$data['getEmployee'] = $this->EmployeeModel->getEmployee();	
			$this->load->view('shift_register',$data);
		}
	}
	
	public function ViewShift()
	{
		$data['getShift'] = $this->EmployeeModel->getShift();
		$this->load->view('view_shift',$data);
	}
	
	
	public function ShiftAttendanceRegister()
	{
		if(!empty($_POST))
		{
			$data =  array('aloEmpID' => $this->input->post('employee_id'),
					'aloDay'		  => $this->input->post('aloDay'),
					'aloTimeIn'		  => $this->input->post('time_in'),
					'aloTimeOut'	  => $this->input->post('time_out'),
					'created_date'	  => date('Y-m-d H:i:s'),
					);
			$this->EmployeeModel->ShiftAttendanceRegister($data);
			$this->session->set_flashdata('SUCCESSMSG', "Shift Attendance Register Successfully!!");
			redirect('shift-view-attendance');
		}
		else
		{
			$data['getEmployee'] = $this->EmployeeModel->getEmployee();	
			$this->load->view('shift_attendance_register',$data);
		}
	}

	public function ShiftViewAttendance()
	{
		$data['getShiftAttendance'] = $this->EmployeeModel->getShiftAttendance();
		$this->load->view('shift_view_attendance',$data);
	}
	
	public function AttendanceRegister()
	{
		if(!empty($_POST))
		{
			$data =  array('attEmpID' => $this->input->post('employee_id'),
					'attDate' => $this->input->post('attendence_date'),
					'attonTime' => $this->input->post('on_time'),
					'attoffTime' => $this->input->post('off_time'),
					'created_date' => date('Y-m-d H:i:s'),
					);
			$this->EmployeeModel->AttendanceRegister($data);
			$this->session->set_flashdata('SUCCESSMSG', "Attendance Register Successfully!!");
			redirect('view-attendance');
		}
		else
		{
			$data['getEmployee'] = $this->EmployeeModel->getEmployee();	
			$this->load->view('attendance_register',$data);
		}
	}
	
	public function ViewAttendance()
	{
		$data['getAttendance'] = $this->EmployeeModel->getAttendance();
		$this->load->view('view_attendance',$data);
	}
	
	public function delete_views(){
		$data['getEmployee'] = $this->EmployeeModel->getEmployee();
		$this->load->view('delete_view',$data);
		
		
	}
	
	public function edit_views(){
		$data['getEmployee'] = $this->EmployeeModel->getEmployee();
		$this->load->view('edit_view',$data);
		
		
	}
	
	
	
	public function SalaryRegister()
	{
		if(!empty($_POST))
		{
			$data =  array('salEmpID' => $this->input->post('employee_id'),
					'salBeginDate' => $this->input->post('salary_begin_date'),
					'salBasicSalary' => $this->input->post('salary_basic'),
					'salGrade' => $this->input->post('grand_salary'),
					'created_date' => date('Y-m-d H:i:s'),
					);
			$this->EmployeeModel->SalaryRegister($data);
			$this->session->set_flashdata('SUCCESSMSG', "Salary Register Successfully!!");
			redirect('view-salary');
		}
		else
		{
			$data['getEmployee'] = $this->EmployeeModel->getEmployee();	
			$this->load->view('salary_register',$data);
		}
	}
	
	public function ViewSalary()
	{
		$data['getSalary'] = $this->EmployeeModel->getSalary();
		$this->load->view('view_salary',$data);
	}
	
	public function HolidayRegister()
	{
		if(!empty($_POST))
		{
			$data =  array('holName' => $this->input->post('holiday_name'),
					'holDate' => $this->input->post('holiday_date'),
					'holDescription' => $this->input->post('description'),
					'created_date' => date('Y-m-d H:i:s'),
					);
			$this->EmployeeModel->HolidayRegister($data);
			$this->session->set_flashdata('SUCCESSMSG', "Holiday Register Successfully!!");
			redirect('view-holiday');
		}
		else
		{
			$this->load->view('holiday_register');
		}
	}
	
	
	public function rowDelete($ID){
		$this->db-> where ('empID',$ID);
		$this->db-> delete ('tbl_employee');
		redirect('Employee/delete_views');
	}
	
	public function rowEdit($IeD){
		$dara=array('empID'=>$this->input->post('empID'),'empFirstName'=>$this->input->post('empFirstName'),'empLastName'=>$this->input->post('empLastName'),'empNO'=>$this->input->post('empNO'),'empemail'=>$this->input->post('empemail'),'empMobile'=>$this->input->post('empMobile'),'empbdate'=>$this->input->post('empbdate'),'empaddress'=>$this->input->post('empaddress'));
		
		$this->db-> where ('empID',$IeD);
		$this->db-> update ('tbl_employee');
		redirect('Employee/edit_views');
	}
	
	public function ViewHoliday()
	{
		$data['getHoliday'] = $this->EmployeeModel->getHoliday();
		$this->load->view('view_holiday',$data);
	}

	
}
