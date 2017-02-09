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

	/*---------------------data fetching from nav bar------------------------------*/

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
	public function about_sec()
	{
		
		 $data['hcon']	=	$this->user_model->get_about_sec_data();
		 $data['subcontent']= $this->load->view('pages_admin/about_view',$data,true);
		 $this->load->view('pages_admin/admin_master',$data);
	}
	public function footer()
	{
		
		 $data['hcon']	=	$this->user_model->get_footer_data();
		 $data['subcontent']= $this->load->view('pages_admin/footer_view',$data,true);
		 $this->load->view('pages_admin/admin_master',$data);
	}



/*---------------------data fetching operation & changing database------------------------------*/
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
	/*--------------------home section------------------------------*/

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


			//'home_con_img1' =>$this->input->post($target_path),
			//'home_con_img2' =>$this->input->post('home_con_img2'),
			//'home_con_img3' =>$this->input->post('home_con_img3'),
			//'home_con_img4' =>$this->input->post('home_con_img4'),
			'home_con_title1' =>$this->input->post('home_con_title1'),
			'home_con_title2' =>$this->input->post('home_con_title2'),
			'home_con_title3' =>$this->input->post('home_con_title3'),
			'home_con_title4' =>$this->input->post('home_con_title4'),
			'home_con_dsc1' =>$this->input->post('home_con_dsc1'),
			'home_con_dsc2' =>$this->input->post('home_con_dsc2'),
			'home_con_dsc3' =>$this->input->post('home_con_dsc3'),
			'home_con_dsc4' =>$this->input->post('home_con_dsc4')
			
			);
		
		$this->db->update('about_section1',$home_sec2);

		redirect('admin/about_sec');
	}
	/*---------------------about section------------------------------*/
	public function about_update()
	{
	
		$about_sec = array(
			//'about_sec_title' =>$this->input->post('about_sec_title'),


			//'about_con_img1' =>$this->input->post($target_path),
			//'about_con_img2' =>$this->input->post('about_con_img2'),
			//'about_con_img3' =>$this->input->post('about_con_img3'),
			//'about_con_img4' =>$this->input->post('about_con_img4'),
			'about_con_title1' =>$this->input->post('about_con_title1'),
			'about_con_title2' =>$this->input->post('about_con_title2'),
			'about_con_title3' =>$this->input->post('about_con_title3'),
			'about_con_title4' =>$this->input->post('about_con_title4'),
			'about_con_dsc1' =>$this->input->post('about_con_dsc1'),
			'about_con_dsc2' =>$this->input->post('about_con_dsc2'),
			'about_con_dsc3' =>$this->input->post('about_con_dsc3'),
			'about_con_dsc4' =>$this->input->post('about_con_dsc4')
			
			);
		
		$this->db->update('about_section1',$about_sec);

		redirect('admin/about_sec');
	}
/*---------------------footer section------------------------------*/
	public function footer_update()
	{
		$footer = array(
			'foo_name' =>$this->input->post('foo_name'),
			'foo_address' =>$this->input->post('foo_address'),
			'foo_mobile1' =>$this->input->post('foo_mobile1'),
			'foo_mobile2' =>$this->input->post('foo_mobile2'),
			'foo_email1' =>$this->input->post('foo_email1'),
			'foo_email2' =>$this->input->post('foo_email2'),
			'foo_website' =>$this->input->post('foo_website'),
			'foo_others' =>$this->input->post('foo_others')
			);
		
		$this->db->update('footer_item',$footer);

		redirect('admin/footer');
	}

}
