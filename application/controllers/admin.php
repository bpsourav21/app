<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct() {
		parent:: __construct();
		$this->load->model('user_model');
		$this->load->model('login_model');
	}

	
	public function index()
	{
		// $data['subcontent']= $this->load->view('pages_admin/admin_view','',true);
		//  $this->load->view('pages_admin/admin_master',$data);

		//
		//$this->load->view('pages_admin/admin_header',$data);

		if ($this->login_model->is_logged_in()) 
		{
			$data['subcontent']= $this->load->view('pages_admin/admin_view','',true);
		 	$this->load->view('pages_admin/admin_master',$data);
		}
		else{
			$this->load->view('login_view');
		}
		//$this->db->set('maintitle',$this->input->post('maintitle'));
		//$this->db->update('header_item');

		//redirect('admin_header');
		// $data['hcon']	=	$this->user_model->get_header_data();
		// 	 $data['subcontent']= $this->load->view('admin_view',true);
		// 	$this->load->view('admin_header',$data);
		
		
	
	}

	public function header()
	{
		
		 $data['hcon']	=	$this->user_model->get_header_data();
		 $data['subcontent']= $this->load->view('pages_admin/header_view',$data,true);
		 $this->load->view('pages_admin/admin_master',$data);
	}
	public function home_sec1()
	{
		
		 $data['hcon']	=	$this->user_model->get_home_sec1_data();
		 $data['subcontent']= $this->load->view('pages_admin/home_sec1_view',$data,true);
		 $this->load->view('pages_admin/admin_master',$data);
	}
	public function home_sec2()
	{
		
		 $data['hcon']	=	$this->user_model->get_home_sec2_data();
		 $data['subcontent']= $this->load->view('pages_admin/home_sec2_view',$data,true);
		 $this->load->view('pages_admin/admin_master',$data);
	}


	public function title_update()
	{

		//title set and then post title
		$this->db->set('title1',$this->input->post('title1'));
		$this->db->update('header_item');
		$this->db->set('title2',$this->input->post('title2'));
		$this->db->update('header_item');
		// $this->db->set('title1',$this->input->post('title1'));
		// $this->db->update('home_section1');

		redirect('admin/header');
	}

	public function menu_update()
	{
		$menus = array(
			'menu1' =>$this->input->post('menu1'),
			'menu2' =>$this->input->post('menu2'),
			'menu3' =>$this->input->post('menu3'),
			'menu4' =>$this->input->post('menu4'),
			'menu5' =>$this->input->post('menu5'),
			'menu6' =>$this->input->post('menu6')
			);
		
		$this->db->update('header_item',$menus);

		redirect('admin/header');
	}

	public function home_sec1_update()
	{
		$home_sec1 = array(
			'title1' =>$this->input->post('title1'),
			'home_heading1' =>$this->input->post('home_heading1'),
			'home_heading2' =>$this->input->post('home_heading2'),
			'home_con_title1' =>$this->input->post('home_con_title1'),
			'home_con_title2' =>$this->input->post('home_con_title2'),
			'home_con_title3' =>$this->input->post('home_con_title3'),
			'home_con_title4' =>$this->input->post('home_con_title4'),
			'home_con_dsc1' =>$this->input->post('home_con_dsc1'),
			'home_con_dsc2' =>$this->input->post('home_con_dsc2'),
			'home_con_dsc3' =>$this->input->post('home_con_dsc3'),
			'home_con_dsc4' =>$this->input->post('home_con_dsc4')
			
			);
		
		$this->db->update('home_section1',$home_sec1);

		redirect('admin/home_sec1');
	}
	public function home_sec2_update()
	{
		$home_sec2 = array(
			'Home_sec_title' =>$this->input->post('Home_sec_title'),
			'home_con_img1' =>$this->input->post('home_con_img1'),
			'home_con_img2' =>$this->input->post('home_con_img2'),
			'home_con_img3' =>$this->input->post('home_con_img3'),
			'home_con_img4' =>$this->input->post('home_con_img4'),
			'home_con_title1' =>$this->input->post('home_con_title1'),
			'home_con_title2' =>$this->input->post('home_con_title2'),
			'home_con_title3' =>$this->input->post('home_con_title3'),
			'home_con_title4' =>$this->input->post('home_con_title4'),
			'home_con_dsc1' =>$this->input->post('home_con_dsc1'),
			'home_con_dsc2' =>$this->input->post('home_con_dsc2'),
			'home_con_dsc3' =>$this->input->post('home_con_dsc3'),
			'home_con_dsc4' =>$this->input->post('home_con_dsc4')
			
			);
		
		$this->db->update('home_section2',$home_sec2);

		redirect('admin/home_sec1');
	}

}
