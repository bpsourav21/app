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

		if ($this->login_model->is_logged_in()) 
		{
			$data['subcontent']= $this->load->view('pages_admin/admin_view','',true);
		 	$this->load->view('pages_admin/admin_master',$data);
		}
		else{
			$this->load->view('login_view');
		}
		
		
	
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
	public function show_gallery () {
		$data['glists'] = $this->user_model->get_gallery_all();
		 $data['subcontent']= $this->load->view('pages_admin/gallery_view',$data,true);
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
	function banner_update()
	{
		function get_image($userfile){
			 $target_dir = "assets/images/";

 if(isset($_FILES[$userfile])){
      //$errors= array();
      //$target_dir =realpath(dirname($_FILES[$userfile]));
      $file_name = $_FILES[$userfile]['name'];
      $file_size =$_FILES[$userfile]['size'];
      $file_tmp =$_FILES[$userfile]['tmp_name'];
      $file_type=pathinfo($file_name,PATHINFO_EXTENSION);
      //$file_ext=strtolower(end(explode('.',$_FILES[$userfile]['tmp_name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_type,$expensions)=== true){
   
         if($file_size < 1097152){
         //echo $target_dir.$file_name;
         	$mainpath= $target_dir.$file_name;
         	return $mainpath;
      }
      else{
         echo 'File size must be excately 2 MB';
      }
      }
      else echo "extension not allowed, please choose a JPEG or PNG file.";
      
   }
		}

		$mainpath= get_image("userfile");
   		$this->db->set('banner',$mainpath);
	 	$this->db->update('home_section1');
	


		redirect('admin/home_sec1');

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

		redirect('admin/home_sec2');
	}


	function image_update()
	{
		function get_image($userfile){
			 $target_dir = "assets/images/";

 if(isset($_FILES[$userfile])){
      //$errors= array();
      //$target_dir =realpath(dirname($_FILES[$userfile]));
      $file_name = $_FILES[$userfile]['name'];
      $file_size =$_FILES[$userfile]['size'];
      $file_tmp =$_FILES[$userfile]['tmp_name'];
      $file_type=pathinfo($file_name,PATHINFO_EXTENSION);
      //$file_ext=strtolower(end(explode('.',$_FILES[$userfile]['tmp_name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_type,$expensions)=== true){
   
         if($file_size < 1097152){
         //echo $target_dir.$file_name;
         	$mainpath= $target_dir.$file_name;
         	return $mainpath;
      }
      else{
         echo 'File size must be excately 2 MB';
      }
      }
      else echo "extension not allowed, please choose a JPEG or PNG file.";
      
   }
		}
		// $mainpath= get_image("userfile1");
  //  $this->db->set('home_con_img1',$mainpath);
		// // $this->db->update('home_section2');
		// $mainpath= get_image("userfile2");
  //  $this->db->set('home_con_img2',$mainpath);
		// $this->db->update('home_section2');

$img_array = array(
			'home_con_img1' =>get_image("userfile1"),
			'home_con_img2' =>get_image("userfile2"),
			'home_con_img3' =>get_image("userfile3"),
			'home_con_img4' =>get_image("userfile4")
			
			);
		
		$this->db->update('home_section2',$img_array);

		redirect('admin/home_sec2');

      } 


	/*---------------------about section------------------------------*/
	public function about_update()
	{
	
		$about_sec = array(

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

	function about_image_update()
	{
		function get_image($userfile){
			 $target_dir = "assets/images/";

 if(isset($_FILES[$userfile])){
      //$errors= array();
      //$target_dir =realpath(dirname($_FILES[$userfile]));
      $file_name = $_FILES[$userfile]['name'];
      $file_size =$_FILES[$userfile]['size'];
      $file_tmp =$_FILES[$userfile]['tmp_name'];
      $file_type=pathinfo($file_name,PATHINFO_EXTENSION);
      //$file_ext=strtolower(end(explode('.',$_FILES[$userfile]['tmp_name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_type,$expensions)=== true){
   
         if($file_size < 1097152){
         //echo $target_dir.$file_name;
         	$mainpath= $target_dir.$file_name;
         	return $mainpath;
      }
      else{
         echo 'File size must be excately 2 MB';
      }
      }
      else echo "extension not allowed, please choose a JPEG or PNG file.";
      
   }
		}

$img_array = array(
			'about_con_img1' =>get_image("userfile1"),
			'about_con_img2' =>get_image("userfile2"),
			'about_con_img3' =>get_image("userfile3"),
			'about_con_img4' =>get_image("userfile4")
			
			);
		
		$this->db->update('about_section1',$img_array);

		redirect('admin/home_sec2');

      } 



/*---------------------gallery section------------------------------*/


	public function show_gallery_edit($id) {
		$data['galleryinfos'] = $this->user_model->get_gallery_data($id);
		 $data['subcontent']= $this->load->view('pages_admin/gallery_view_edit',$data,true);
		 $this->load->view('pages_admin/admin_master',$data);
	}

      public function show_gallery_update($id) {
		$data = array (
			'gtitle' =>$this->input->post('gtitle'),
			'gphoto' =>$this->input->post('gphoto'),
			'gcontent'=>$this->input->post('gcontent'));

		if($_FILES["userfile"] !='')
			  	{
					if($_FILES["userfile"])
						{
							if($_FILES["userfile"]['name']!='')
							{
								$path = "./assets/content/";
								
								$config['upload_path'] 		  = 	 $path;
								$config['allowed_types'] 	  = 	'*';
								$config['max_size']		      = 	'1000';
								$config['max_width']  		  = 	'2000';
								$config['max_height']  		  = 	'2000';
								$this->upload->initialize( $config );
			
								if ( ! $this->upload->do_upload() )
								{
									$this->session->set_flashdata('warning',  $this->upload->display_errors() );
									redirect('admin/gallery_view_edit',$id);
								}
								else
								{
									$image_info = $this->upload->data();
									$data['gphoto']	= $image_info['file_name'];
								}
							}
						}
			  	};
				
				$update_id['id'] 	=	$this->uri->segment( 3,0 );
				$this->db->select('gphoto');
				$this->db->from("tbl_gallery");
				$this->db->where( $update_id );
				$res = $this->db->get();

				if($res->num_rows()>0)
				{
					$result = $res->row();
					
					/*echo $path."/".$result->img_name;
						die();
					*/
					
					if(file_exists($path."/".$result->logo))
					{
						unlink($path."/".$result->logo);
					}							
				}

		$this->db->where('id', $id);
		$this->db->update('tbl_gallery', $data);
		redirect('admin/show_gallery');
	} 
	public function gallery_insert() {
		$data = array (
			'gtitle' 	 => $this->input->post('gtitle'),
			'gcontent'   =>$this->input->post('gcontent'),
			'gphoto'	 =>$this->input->post('gphoto')
			);

		if($_FILES["userfile"] !='')
			  	{
					if($_FILES["userfile"])
						{
							if($_FILES["userfile"]['name']!='')
							{
								$path = "./assets/content/";
								
								$config['upload_path'] 		  = 	 $path;
								$config['allowed_types'] 	  = 	'*';
								$config['max_size']		      = 	'1000';
								$config['max_width']  		  = 	'2000';
								$config['max_height']  		  = 	'2000';
								$this->upload->initialize( $config );
			
								if ( ! $this->upload->do_upload() )
								{
									$this->session->set_flashdata('warning',  $this->upload->display_errors() );
									redirect('admin/show_gallery');
								}
								else
								{
									$image_info = $this->upload->data();
									$data['gphoto']	= $image_info['file_name'];
								}
							}
						}
			  	};
				
				$update_id['id'] 	=	$this->uri->segment( 3,0 );
				$this->db->select('gphoto');
				$this->db->from("tbl_gallery");
				$this->db->where( $update_id );
				$res = $this->db->get();

				if($res->num_rows()>0)
				{
					$result = $res->row();
					
					/*echo $path."/".$result->img_name;
						die();
					*/
					
					if(file_exists($path."/".$result->logo))
					{
						unlink($path."/".$result->logo);
					}							
				}


		$this->user_model->insert_gallery($data);
		redirect('admin/show_gallery');
	}

	public function gallery_delete($id)
 	{
		$this->db->where('id',$id);
		$this->db->delete('tbl_gallery');
		redirect('admin/show_gallery');
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
			'foo_others' =>$this->input->post('foo_others'),
			'foo_fb' =>$this->input->post('foo_fb'),
			'foo_twiter' =>$this->input->post('foo_twiter'),
			'foo_linkedin' =>$this->input->post('foo_linkedin'),
			'foo_gmail' =>$this->input->post('foo_gmail'),
			'foo_youtube' =>$this->input->post('foo_youtube'),
			'foo_behance' =>$this->input->post('foo_behance'),
			'foo_dribble' =>$this->input->post('foo_dribble'),
			);
		
		$this->db->update('footer_item',$footer);

		redirect('admin/footer');
	}

}
