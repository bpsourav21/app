<?php

class User_Model extends CI_Model {
	
	function __construct(){
		parent::__construct();
	}
	 function get_header_data() {
        //$lang= $this->session->userdata('language');
        $this->db->select('*');
        $query = $this->db->get('header_item');
        return $query->row_array();
    }

		function get_home_sec1_data() {
        //$lang= $this->session->userdata('language');
        $this->db->select('*');
        $query = $this->db->get('home_section1');
        return $query->row_array();
    }
		function get_home_sec2_data() {
        //$lang= $this->session->userdata('language');
        $this->db->select('*');
        $query = $this->db->get('home_section2');
        return $query->row_array();
    }
    function get_about_sec_data(){
        //$lang= $this->session->userdata('language');
        $this->db->select('*');
        $query = $this->db->get('about_section1');
        return $query->row_array();
    }
    function get_footer_data() {
        //$lang= $this->session->userdata('language');
        $this->db->select('*');
        $query = $this->db->get('footer_item');
        return $query->row_array();
    }

      function get_gallery_all()
    {
        //$lang   =   $this->session->userdata('language');
        $this->db->select('*');
        $query = $this->db->get('tbl_gallery');
        return $query->result_array();
    }
     function get_gallery_data($id) {
        $this->db->select('*');
        $this->db->where('id', $id);
        $result = $this->db->get('tbl_gallery');
        return $result->row_array();
    }
    function insert_gallery($data) {
        return $this->db->insert('tbl_gallery', $data);
    }

		
}

?>
