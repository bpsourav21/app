<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent:: __construct();
		$this->load->model('Login_model');
	}

public function index()
	{
		if ($this->Login_model->is_logged_in()) 
		{
			redirect('admin');
            //echo "success" ;
		}
		else{
		$this->load->view('login_view');
		 }
		//$this->load->view('login_view');
	}
public function login_logic()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");

		$check = $this->Login_model->check_user($username,$password);

		if ($check)
			{
				$session_data=array(
					'username'	=>	$username,
					'password'	=>	$password);
				$this->session->set_userdata($session_data);

				redirect('admin');
			}
		else{
			redirect('login');
		}
	}

public function log_out()
	{
		$this->session->unset_userdata('username');
		$this->session->sess_destroy();

		redirect('login');
	}


}