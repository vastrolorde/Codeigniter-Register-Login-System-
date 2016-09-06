<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax_model extends CI_Model {

	/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct() {
		
		parent::__construct();
		$this->load->database();
		$this->load->library(array('session'));
		
	}
	/**
	 * create_user function.
	 * 
	 * @access public
	 * @param mixed $username
	 * @param mixed $email
	 * @param mixed $password
	 * @return bool true on success, false on failure
	 */
	 public function create_member()
	 {
		 //$username=$this->input->post('uname');
		 $data = array(
		    'name'   => $this->input->post('name'),
			'uname'   => $this->input->post('uname'),
			'email'      => $this->input->post('email'),
			'phone'   => $this->input->post('phone'),
			'password'   => $this->input->post('pass'),			
		);
		return $this->db->insert('ajax_user', $data);
	 }
}