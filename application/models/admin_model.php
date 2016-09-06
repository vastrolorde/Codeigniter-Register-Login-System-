<?php

 class Admin_model extends CI_Model {
	 public function __construct()  {
		
		parent::__construct();
		$this->load->database();
		
	}
 
	 
	 public function check_login_admin_info($admin_uname,$admin_password)
	 {
		  $this->db->select('*');
		  $this->db->from('admin');
		  $this->db->where('user_name',$admin_uname);
		  $this->db->where('password',$admin_password);
		  $query_result=$this->db->get();
		  $result=$query_result->row();
		  return $result;
	 }
	 public function userlist($limit, $offset )
        {
            $this->db->select('*');
            $this->db->from('register');
            $this->db->limit( $limit, $offset);
            $query=$this->db->get();
                if($query->num_rows() > 0)
                 {
                   return $query->result(); 
                  }else
                {
                    return $query->result(); 
                }
        }
        public function num_rows()
        {
            //$this->db->select('*');
            //$this->db->from('register');
            //$query_result=$this->db->get();
            //return $query_result->num_rows();           
            return $this->db->count_all("register");
        }
        public function userlist_single($id)
        {
            $this->db->select('*');
            $this->db->from('register');            
            //$this->db->limit( $limit, $offset);
            $this->db->where('id',$id);
            $query_result=$this->db->get();
            $userlist=$query_result->result();
            return $userlist;
        }
 }
