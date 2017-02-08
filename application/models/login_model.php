<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
   
public function is_logged_in()
   {
   	 return $this->session->userdata('username');
   }

public function check_user($user,$pass)
	{
		$this->db->select("*");
		$this->db->where('username',$user);
		$this->db->where('password',$pass);
		$result = $this->db->get('tbl_login');

		return $result->row_array();
	}


}