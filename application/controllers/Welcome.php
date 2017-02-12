<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	function __construct() {
		parent:: __construct();
		$this->load->model('user_model');
		
	}

	
	public function index()
	{ 
		$data['hcon']		=	$this->user_model->get_header_data();
	  	$data['fcon']		=	$this->user_model->get_footer_data();
		$data['home_sec1']	=	$this->user_model->get_home_sec1_data();
		$data['home_sec2']	=	$this->user_model->get_home_sec2_data();
		
		//$this->load->view('header',$data);
		//$this->load->view('home');
		//$this->load->view('admin_header',$data);
		//$data= array();
		$data['maincontent']= $this->load->view('pages/home',$data,true);
		$this->load->view('masterview',$data);
	
	}

	public function about()
	{ $data['hcon']		=	$this->user_model->get_header_data();
	$data['fcon']		=	$this->user_model->get_footer_data();
	$data['about_sec']	=	$this->user_model->get_about_sec_data();
		
		$data['maincontent']= $this->load->view('pages/about',$data,true);
		$this->load->view('masterview',$data);
	}
		public function services()
	{ $data['hcon']		=	$this->user_model->get_header_data();
	$data['fcon']		=	$this->user_model->get_footer_data();
	$data['gallery']		=	$this->user_model->get_gallery_all();
		
	//$data['maincontent']= $this->load->view('pages/services','',true);
	$data['maincontent']= $this->load->view('pages/gallery',$data,true);
		$this->load->view('masterview',$data);
	}
}
