<?php
class LoginModel extends CI_Model
{
	function __construct() {
		parent::__construct();
	}
        
	function login($email,$password)
	{
		$this -> db->select(' * ');
		$this -> db->from('tb_user');
		$this -> db->where('email', $email);
		$this -> db->where('password', $password);
		$this -> db->limit(1);
		$query = $this->db-> get();
		return $query;
	}
}