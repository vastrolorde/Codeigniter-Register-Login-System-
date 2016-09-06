<?php
class Userlist extends CI_Model {
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    public function __construct() {
		
		parent::__construct();
		$this->load->database();
		$this->load->library(array('session'));
		
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
        public function fetchuser($id)
        {
            $this->db->select('*');
            $this->db->from('register');
            $this->db->where('id',$id);
            $query_result=$this->db->get();
            $userlist=$query_result->row();
            return $userlist;
        }
        public function update_user($data,$uid)
        {
          $this->db->where('id',$uid);
          $result=$this->db->update('register',$data);
	  return $result;
          
        }
        public function delete_user($userlist_id)
        {
            return $this->db->delete('register',['id'=>$userlist_id]);
        }
        public function num_rows()
        {
            //$this->db->select('*');
            //$this->db->from('register');
            //$query_result=$this->db->get();
            //return $query_result->num_rows();           
            return $this->db->count_all("register");
        }
        public function user_add()
        {
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
        
         public function view_user_profile($userlist_id)
	  {
		$this->db->select('id,name,uname,email,phone');
		$this->db->from('register');
		$this->db->where('id',$userlist_id);
		$query_result=$this->db->get();
		$userlist=$query_result->row();
		return $userlist;
	  }
          public function userlist_single( $limit, $offset)
        {
            $this->db->select('*');
            $this->db->from('register');            
            $this->db->limit( $limit, $offset);
            //$this->db->where('id',$userlist_id);
            $query_result=$this->db->get();
            $userlist=$query_result->result();
            return $userlist;
        }
        public function search_user($name)
        {
            $this->db->select('*');
            $this->db->from('register');            
            $this->db->like('name',$name);
            //$this->db->where('name',$name);
            $query=$this->db->get();
            $userlist=$query->result();
            return $userlist;
            /*if($query->num_rows() > 0)
               {
                  return $query->result(); 
               }
             else
               {
                  return $query->result(); 
               }*/
        }
}
?>
