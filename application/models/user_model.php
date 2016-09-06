<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class User_model extends CI_Model {

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
			'cpassword'   => $this->input->post('cpass'),
		);
		return $this->db->insert('register', $data);
	 }
	 /**
	 * resolve_user_login function.
	 * 
	 * @access public
	 * @param mixed $username
	 * @param mixed $password
	 * @return bool true on success, false on failure
	 */
      public function login_validate($username,$password)
	  {
		  $this->db->select('*');
		  $this->db->from('register');
		  $this->db->where('uname',$username);
		  $this->db->where('password',$password);
		  $query_result=$this->db->get();
		  $result=$query_result->row();
		  return $result;
	  }
	  public function view_profile_by_session_id($id)
	  {
		$this->db->select('*');
		$this->db->from('register');
		$this->db->where('id',$id);
	        $query=$this->db->get();
                if($query->num_rows() > 0)
                 {
                   return $query->result(); 
                  }else
                {
                    return $query->result(); 
                }
	    }
	 
        public function get_user_by_id($ID)
          {
             $this->db->select('*');
             $this->db->from('register');
             $this->db->where('id',$ID);
             $query=$this->db->get();
             if($query->num_rows() > 0)
               {
                  return $query->result(); 
               }
             else
               {
                  return $query->result(); 
               }
          }
          
          
	  public function updateuser($data,$eid)
	  {
		
		$this->db->where('id',$eid);
		$this->db->update('register',$data);		
	  }
          public function user_info($id)
	  {
		$this->db->select('*');
                $this->db->from('register');
		$this->db->where('id',$id);
		 $query_result=$this->db->get();
		  $result=$query_result->row();
		  return $result;
               
	  }
	  public function user_change_password($data,$oldpass,$id)
            {
              $this->db->where('id',$id);
              $this->db->where('password',$oldpass);
              $this->db->update('register',$data);
              
            } 
}